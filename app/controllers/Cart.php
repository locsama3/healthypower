<?php

use function PHPSTORM_META\map;

class Cart extends Controller
{


    public $request, $response;
    public $productModel;
    public $voucherModel;
    public $configPayment;
    public $productDiscountModel;
    public $customerModel;

    public function __construct()
    {
        $this->productModel = $this->model('ProductModel');
        $this->voucherModel = $this->model('VoucherModel');
        $this->productDiscountModel = $this->model('ProductDiscountModel');
        $this->customerModel = $this->model('CustomerModel');
        $this->request = new Request();
        $this->response = new Response();
        global $config;
        $this->configPayment = $config['vnp'];
    }

    public function index()
    {
      
        $data['content'] = 'clients.cart.index';
        $data['page_title'] = "Giỏ hàng của bạn";
        $data['sub_content']['product'] = Session::data('cart') ?? NULL;
        $data['sub_content']['price'] = Session::data('total') ?? NULL;
        $data['sub_content']['ship'] = Session::data('shipping_fee') ?? NULL;

        $dataArea = [];
        if (!empty($data['sub_content']['product'])) {
            foreach ($data['sub_content']['product'] as $value) {
                array_push($dataArea, [
                    'width'  => $value['width'],
                    'length' => $value['length'],
                    'height' => $value['height'],
                    'qty'    => $value['qty']
                ]);
            }

            $packingData = $this->handlingDeliveryFee($dataArea);

            $total = 0;

            foreach ($data['sub_content']['product'] as $value) {
                $total += $value['weight'] * $value['qty'];
            }

            $packingData['weight'] = $total;

            $data['sub_content']['packing_data'] = $packingData;
        }
        $user = Session::data('user_data') ?? null;
        $user_id = $user['id_user'] ?? null;
        $customer = $this->customerModel->findByField(['id :'.$user_id])[0] ?? null;
        if(!empty($customer)){
            $street = explode(',', trim($customer['shipping_address']), -3)[0] ?? null;
    
            $customer_address_info = [
                'ward_id'     => $customer['ward_id'],
                'district_id' => $customer['district_id'],
                'province_id' => $customer['province_id'],
                'address'     => $customer['shipping_address'],
                'street'      => $street
            ];
            if(array_search(NULL, $customer_address_info) !== true){
                $data['sub_content']['customer_address_info'] = $customer_address_info;
            }
        }
        if(!empty(Session::data('sub_total'))){
            $data['sub_content']['sub_total'] = (Session::data('sub_total') ?? null);
            $data['sub_content']['amount']    = (Session::data('sub_total') ?? null) - (Session::data('total') ?? null);
        }
        
   
        
        $data['sub_content']['address_id'] = Session::data('address_code') ?? null; 
        

        $data['data_js'] = [
            'js'       => 'clients.cart.js_deli',
            'js_index' => 'clients.cart.js'
        ];

        $data['libraryJS']['list_js'] = [
            'validate'      => 'validate.js',
            'js'            => 'functions.js'
        ];

        return $this->view('layouts.client_layout', $data);
    }

    public function store($id)
    {
        if(Session::data('user_login') == false){
            $message = [
                "status"   => 1,
                "location" => _WEB_ROOT.'/dang-nhap',
                "time"     => 700
            ];
            exit(json_encode($message));
        }
        $data = Session::data('cart') ?? 0;

        $product = $this->productModel->find($id);
        $productDiscount = $this->productDiscountModel->findByField(['product_id :' . $id]);
        if (!empty($productDiscount)) {
            $productDiscount = $productDiscount[0];
            if ($productDiscount['discount_percentage'] != 0) {
                $dis_per = $productDiscount['discount_percentage'] / 100;
                $product['sub_price'] = $product['list_price'];
                $product['list_price'] = $product['list_price'] - $product['list_price'] * $dis_per;

                $product['discount_percentage'] = $productDiscount['discount_percentage'];
                $product['discount_amount'] = 0;
            } else {
                $product['sub_price'] = $product['list_price'];
                $product['list_price'] = $product['list_price'] - $productDiscount['discount_amount'];
                $product['discount_amount'] = $productDiscount['discount_amount'];
                $product['discount_percentage'] = 0;
            }
        }


        $dataFields = $this->request->getFields();
       

        if (!empty($dataFields['qty'])) {
            if (!empty($data[$id])) {
                $product['qty'] = $data[$id]['qty'] + $dataFields['qty'];
            } else {
                $product['qty'] = $dataFields['qty'];
            }
            Session::data('cart', $product, $id);
            $this->totalProduct();
        } else {
            if (empty(Session::data('cart')) || !array_key_exists($id, Session::data('cart'))) {

                $product['qty'] = 1;
                Session::data('cart', $product, $id);


                $this->totalProduct();
            } else {
                $product['qty'] = $data[$id]['qty'] + 1;

                Session::data('cart', $product, $id);

                $this->totalProduct();
            }
        }
        $message = [
            'status'   => 1,
            'location' => _WEB_ROOT . '/gio-hang',
            'time'     => 0
        ];

        exit(json_encode($message));
    }

    public function getShippingFee()
    {
        $dataFields = $this->request->getFields();
        
        if(array_search('',$dataFields) >= 1){
            $message = [
                "status" => "0",
                'message' => "Vui lòng điền đầy đủ thông tin"
            ];
            exit(json_encode($message));
        }
        $check_street = $dataFields['street'];
        $check_street = explode(' ', $check_street);
        if(count($check_street) == 1){
            $message = [
                "status" => "0",
                'message' => "Vui lòng điền đầy đủ số nhà hoặc tên đường"
            ];
            exit(json_encode($message));
        }

        Session::data('shipping_fee', $dataFields['shipping_fee']);
        Session::data('address_code', [
            'province' => $dataFields['province'],
            'district' => $dataFields['district'],
            'ward'     => $dataFields['ward'],
            'street'   => $dataFields['street'],
            'address'  => $dataFields['address']
        ]);
      
    }



    public function handlingDeliveryFee($array)
    {
        $width = 0;
        $length = 0;
        $height = 0;
        $newArray = array();
        $resultArray = array();


        if (count($array) == 1 && $array[0]["qty"] == 1) {
            $width = $array[0]['width'];
            $length = $array[0]['length'];
            $height = $array[0]['height'];
        } else {
            $j = 0;
            foreach ($array as $data) {
                // tách sản phẩm ra khi số lượng sản phẩm đó lớn hơn 1
                for ($i = 0; $i < $data['qty']; $i++) {
                    array_push($newArray, array(
                        $data['length'],
                        $data['width'],
                        $data['height'],
                    ));
                    // thay đổi lại bề mặt hàng, chiều dài luôn luôn lớn nhất => rộng => cao
                    rsort($newArray[$j]);
                    $newArray[$j] = [
                        'length' => $newArray[$j][0],
                        'width' => $newArray[$j][1],
                        'height' => $newArray[$j][2]
                    ];
                    $j++;
                }
            }

            foreach ($newArray as $key => $data) {
                $aroundArea = 2 * $data['height'] * ($data['width'] + $data['length']);
                $totalArea = $aroundArea + 2 * $data['width'] * $data['length'];
                $newArray[$key]['area'] = $totalArea;
                asort($newArray, $newArray[$key]['area']);
            }
            // sắp xếp mảng theo DESC (lấy sản phẩm có kích thước lớn nhất làm chân trụ)
            rsort($newArray);

            // ta có được dài và rộng dựa vào sản phẩm dưới đáy
            $width = $newArray[0]['width'];
            $length = $newArray[0]['length'];
            $floor = 2;
            $total = 0;

            $height = $newArray[0]['height'] + $newArray[1]['height'];
            for ($i = 1; $i < count($newArray); $i++) {
                $total = $newArray[$i]['area'];
                if ($newArray[0]['area'] > $total) {
                    if($i + 1 < count($newArray)){
                        $total += $newArray[++$i]['area'];
                    }
                } else {
                    //cộng dồn chiều cao nếu sang tầng mới
                    $height += $newArray[$i - 1]['height'];
                    $total = 0;
                    $floor++;
                    if ($floor == count($newArray)) {
                        break;
                    }
                }
            }
        }



        $resultArray = [
            'height' => $height,
            'width'  => $width,
            'length' => $length
        ];

        return $resultArray;
    }

    public function totalProduct()
    {
        $total = 0;

        foreach (Session::data('cart') as $val) {
            $total += (float)$val['qty'] * $val['list_price'];
        }
        Session::data('total', $total);
    }
    public function update()
    {
        $cart = Session::data('cart');
        $dataFields = $this->request->getFields();
        
        foreach ($dataFields['data'] as $product) {
            $cart[$product['product_id']]['qty'] = $product['qty'];

            Session::data('cart', $cart);
            $this->totalProduct();
        }

        $message = [
            "status"   => 1,
            "location" => _WEB_ROOT.'/gio-hang',
            "time"     => 0
        ];
        exit(json_encode($message));
    }

    public function clearCart()
    {
        Session::delete('cart');
        Session::delete('total');
        Session::delete('sub_total');
        Session::delete('shipping_fee');
        Session::delete('voucher');
        Session::delete('address_code');
        Session::delete('total_after_voucher');
        return $this->response->redirect('gio-hang');
    }

    public function delete($id)
    {
        Session::deleteById('cart', $id);
        $this->totalProduct();
        if (empty(Session::data('cart'))) {
            Session::delete('total');
        }
        return $this->response->redirect('gio-hang');
    }

    public function handleVoucher()
    {
        $dataFields = $this->request->getFields();
        if (empty(Session::data('cart'))) {
            $message = [
                'status'    => '0',
                'message'   => "Voucher không áp dụng khi giỏ hàng bạn đang trống",
            ];
            exit(json_encode($message));
        }
        $code = $dataFields['code'];
        if ($code == "") {
            $message = [
                'status'    => '0',
                'message'   => "Vui lòng nhập Voucher",
            ];
            exit(json_encode($message));
        }
        $count = $this->voucherModel->countRow('voucher_code', '=', $code);
        $user = Session::data('user_data');
        $user_id = $user['id_user'];
        if (!$count) {
            $message = [
                'status'    => '0',
                'message'   => "Voucher không tồn tại trong hệ thống",
            ];
            exit(json_encode($message));
        }
        $over_voucher = $this->voucherModel->findByField(['voucher_code: ' . $code]);

        if ($over_voucher[0]['uses'] == $over_voucher[0]['max_uses']) {
            $message = [
                'status'    => '0',
                'message'   => "Rất tiếc, Voucher đã hết",
            ];
            exit(json_encode($message));
        }

        $voucher = $this->voucherModel->findByField(['voucher_code: ' . $code]);
        $voucher_id = $voucher[0]['id'];
        $data_update = [
            'uses' => $voucher[0]['uses'] + 1
        ];
        $out_of_date = $this->voucherModel->countRowById($voucher_id, 'end_date', '>', date('H:i:s d-m-Y'));
        if (!$out_of_date) {
            $message = [
                'status'    => '0',
                'message'   => "Rất tiếc, Voucher đã hết hạn !",
            ];
            exit(json_encode($message));
        }

        $count_user = $this->voucherModel->countRowWhere($user_id, $voucher_id);
        if ($voucher[0]['max_uses_user'] > $count_user) {
            $result = $this->db->updateData('shop_vouchers', $data_update, 'id = ' . $voucher_id . '');
            if ($result) {
                $data_voucher_customer = [
                    'customer_id' => $user_id,
                    'voucher_id'  => $voucher_id,
                ];
                $this->db->insertData('shop_customer_vouchers', $data_voucher_customer);
                Session::data('voucher', [
                    'voucher_id'     => $voucher[0]['id'],
                    'voucher_code'   => $voucher[0]['voucher_code'],
                    'voucher_name'   => $voucher[0]['voucher_name'],
                    'voucher_type'   => $voucher[0]['type'],
                    'voucher_amount' => $voucher[0]['discount_amount']
                ], $voucher_id);
                if (!empty(Session::data('voucher'))) {
                    $total_price = Session::data('total') ?? null;
                    $data['sub_content']['voucher'] = Session::data('voucher');

                    foreach ($data['sub_content']['voucher'] as $value) {
                        if ($value['voucher_type'] == 1) {
                            $total_price -= $value['voucher_amount'];
                        }
                        if ($value['voucher_type'] == 0) {
                            $value['voucher_amount'] = $value['voucher_amount'] / 100;
                            $total_price -= $total_price * $value['voucher_amount'];
                        }
                    }
                    Session::data('total_after_voucher', $total_price);
                }
                $load_data = $this->load();
                $voucher = Session::data('voucher') ?? null;
                $voucher_price = Session::data('total_after_voucher') ?? null;

                $fee = Session::data('shipping_fee') ?? 0;
                $sub_total =  Session::data('total') ?? 0;
                $price_vc = $sub_total - $voucher_price;
                $total = $voucher_price + $fee;
                if(!empty($voucher_price)){
                    Session::data('sub_total', $sub_total);
                    Session::data('total', Session::data('total_after_voucher'));
                }
                $message = [
                    'status'    => '1',
                    'message'   => "Chúc mừng, bạn đã thêm Voucher thành công !",
                    'load'      => $load_data,
                    'price' =>  [
                        'price_vc' => $price_vc,
                        'total'    => $total
                    ]
                ];


                exit(json_encode($message));
            }
        } else {
            $message = [
                'status'    => '0',
                'message'   => "Rất tiếc, Voucher có giới hạn lượt sử dụng !",
            ];
            exit(json_encode($message));
        }
    }

    public function load()
    {
        $output = '';

        $output .= '
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Mã</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>           
        ';
        $i = 0;
        if (!empty(Session::data('voucher'))) {
            foreach (Session::data('voucher') as $key => $data) {
                $output .= '<tr>
                                <th scope="row">' . ++$i . '</th>
                                <td>' . $data['voucher_code'] . '</td>
                                <td>' . $data['voucher_name'] . '</td>
                                <td><button onclick="deleteVoucher(' . $key . ')" class="btn btn-danger">Xóa</button></td>
                            </tr>';
            }
        }
        $output .= '</tbody>';
        return $output;
    }
    public function loadPrice()
    {
        $output = '';
    }


    public function deleteVoucher()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['code'];
        Session::delete('voucher', $id);
        $voucher = Session::data('voucher') ?? null;
        $voucher_price = Session::data('total_after_voucher') ?? null;
        $fee = Session::data('shipping_fee') ?? 0;
        $sub_total =  Session::data('total') ?? 0;
        $load_data = $this->load();
        $price_vc = ($voucher) ? ($sub_total - $voucher_price) : 0;
        $total    = $voucher ? ($voucher_price + $fee) : ($sub_total + $fee);


        $message = [
            'status'    => '1',
            'message'   => "Xóa Voucher thành công",
            'load'      => $load_data,
            'price'  =>  [
                'price_vc' => $price_vc,
                'total'    => $total
            ]

        ];
        exit(json_encode($message));
    }

    public function checkout()
    {
        if (empty(Session::data('checkout'))) {
            App::$app->loadError('404');
        } else {
            $data['content'] = 'clients.cart.checkout';
            $data['page_title'] = "Thanh toán";
            $data['libraryJS']['list_js'] = [
                'validate'      => 'validate.js',
                'js'            => 'functions.js'
            ];
            $data['data_js'] = [
                'js_checkout' => 'clients.cart.js_checkout'
            ];
            return $this->view('layouts.client_layout', $data);
        }
    }

    public function postPayment()
    {
        $dataFields = $this->request->getFields();
        $user = Session::data('user_data') ?? null;
        $user['address'] = $dataFields['address'];
        Session::data('user_data', $user);
        if ($dataFields['payment'] == 2) {
            return $this->response->redirect('payment');
        } else {
            $user         = Session::data('user_data')    ?? null;
            $address_code = Session::data('address_code') ?? null;
            $fee          = Session::data('shipping_fee') ?? null;
            $order_detail = Session::data('cart')         ?? null;
            $voucher      = $this->calculatorAmount();

            $this->db->insertData('shop_payment_types', [
                'payment_code'       => randString(10),
                'payment_name'       => 'Tiền mặt',
                'payment_slug'       => '',
            ]);
            $last_id_payment = $this->db->lastInsertId();

            $this->db->insertData('shop_orders', [
                'employee_id'        => 1,
                'customer_id'        => $user['id_user'],
                'order_date'         => date("Y-m-d H:i:s"),
                'ship_name'          => 'Khánh Hòn',
                'order_note'         => $dataFields['order_note'] ?? null,
                'voucher_percentage' => $voucher['percent'],
                'voucher_amount'     => $voucher['amount'],
                'ship_address1'      =>  $address_code['address'],
                'ship_address2'      => '',
                'ship_ward_id'       => $address_code['ward'],
                'ship_district_id'   => $address_code['district'],
                'ship_province_id'   => $address_code['province'],
                'ship_postal_code'   => '',
                'shipping_fee'       => $fee,
                'payment_type_id'    => $last_id_payment

            ]);
            $last_id_order = $this->db->lastInsertId();
            foreach ($order_detail as $data) {
                if (!empty($data['sub_price'])) $data['list_price'] = $data['sub_price'];
                $this->db->insertData('shop_order_details', [
                    'order_id'       => $last_id_order,
                    'product_id'     => $data['id'],
                    'quantity'       => $data['qty'],
                    'unit_price'     => $data['list_price'],
                    'discount_percentage' => $data['discount_percentage'] ?? null,
                    'discount_amount' => $data['discount_amount'] ?? null,
                    'order_detail_status' => '',
                    'date_allocated' => ''
                ]);
            }
            
            $data_address = Session::data('address_code') ?? null;

            $this->customerModel->edit($user['id_user'],[
                'ward_id'     =>      $data_address['ward'],
                'district_id' =>      $data_address['district'],
                'province_id' =>      $data_address['province'],
                'shipping_address' => $data_address['address']
            ]);
            return $this->response->redirect('hoan-tat-don-hang');
        }
    }

    public function payment()
    {
        $data['content'] = 'clients.vnpay.index';
        $data['page_title'] = "Thanh toán qua VNPAY";
        $data['sub_content']['price'] = Session::data('total_after_price') ? (Session::data('total_after_price') + Session::data('shipping_fee')) : (Session::data('total') + Session::data('shipping_fee'));
        return $this->view('layouts.payment_layout', $data);
    }
    
    public function createPayment()
    {
        $dataFields = $this->request->getFields();
        $vnp_TxnRef = randString(15); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $dataFields['order_desc'];
        $vnp_OrderType = $dataFields['order_type'];
        $vnp_Amount = str_replace(',', '', $dataFields['amount']) * 100;
        $vnp_Locale = $dataFields['language'];
        $vnp_BankCode = $dataFields['bank_code'];
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];


        $inputData = array(
            "vnp_Version" => "2.0.1",
            "vnp_TmnCode" => $this->configPayment['vnp_TmnCode'],
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => _WEB_ROOT . '/vnpay/return',
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";

        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $this->configPayment['vnp_Url'] . "?" . $query;
        if (isset($this->configPayment['vnp_HashSecret'])) {
            // $vnpSecureHash = md5($this->configPayment['vnp_HashSecret'] . $hashdata);
            $vnpSecureHash = hash('sha256', $this->configPayment['vnp_HashSecret'] . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }

        return $this->response->redirect($vnp_Url);
    }

    public function vnpayReturn()
    {
        $dataFields = $this->request->getFields();

        if ($dataFields['vnp_ResponseCode'] == '00') {
            $user         = Session::data('user_data')    ?? null;
            $address_code = Session::data('address_code') ?? null;
            $fee          = Session::data('shipping_fee') ?? null;
            $order_detail = Session::data('cart')         ?? null;
            $voucher      = $this->calculatorAmount();

            $this->db->insertData('shop_payment_types', [
                'payment_code'       => randString(10),
                'payment_name'       => 'Ví VNPAY',
                'payment_slug'       => '',
            ]);
            $last_id_payment = $this->db->lastInsertId();
            $time = date("Y-m-d H:i:s");
            $this->db->insertData('shop_orders', [
                'employee_id'        => 1,
                'customer_id'        => $user['id_user'],
                'order_date'         => $time,
                'ship_name'          => 'Khánh Hòn',
                'order_note'         => $dataFields['order_note'] ?? null,
                'voucher_percentage' => $voucher['percent'],
                'voucher_amount'     => $voucher['amount'],
                'ship_address1'      => $address_code['address'],
                'ship_address2'      => '',
                'ship_ward_id'       => $address_code['ward'],
                'ship_district_id'   => $address_code['district'],
                'ship_province_id'   => $address_code['province'],
                'ship_postal_code'   => '',
                'shipping_fee'       => $fee,
                'paid_date'          => $time,
                'payment_type_id'    => $last_id_payment

            ]);
            $last_id_order = $this->db->lastInsertId();
            $this->db->insertData('shop_payments', [
                'order_id'           => $last_id_order,
                'thanh_vien'         => $user['username'],
                'money'              => $dataFields['vnp_Amount'],
                'p_transaction_code' => $dataFields['vnp_TxnRef'],
                'note'               => $dataFields['vnp_OrderInfo'],
                'vnp_response_code'  => $dataFields['vnp_ResponseCode'],
                'code_vnpay'         => $dataFields['vnp_TransactionNo'],
                'code_bank'          => $dataFields['vnp_BankCode'],
                'time'               => $time
            ]);
            foreach ($order_detail as $data) {
                if (!empty($data['sub_price'])) $data['list_price'] = $data['sub_price'];
                $this->db->insertData('shop_order_details', [
                    'order_id'       => $last_id_order,
                    'product_id'     => $data['id'],
                    'quantity'       => $data['qty'],
                    'unit_price'     => $data['list_price'],
                    'discount_percentage' => $data['discount_percentage'] ?? null,
                    'discount_amount' => $data['discount_amount'] ?? null,
                    'order_detail_status' => '',
                    'date_allocated' => ''
                ]);
            }
            $data_address = Session::data('address_code') ?? null;
            $this->customerModel->edit($user['id_user'],[
                'ward_id'     => $data_address['ward'],
                'district_id' => $data_address['district'],
                'province_id' => $data_address['province'],
                'shipping_address' => $data_address['address']
            ]);
            $data['content'] = 'clients.vnpay.return_vnpay';
            $data['sub_content']['bill'] = $dataFields;
            $data['sub_content']['bill']['time'] = date("Y-m-d H:i:s");

            $data['title'] = 'Thanh toán VNPAY';
            Session::flash('msg', 'Thanh toán thành công!');
            return $this->view('layouts.payment_layout', $data);
        }
    }

    public function calculatorAmount()
    {
        $amount = 0;
        $percen = 0;
        $array = [];
        $dataSession = Session::data('voucher') ?? null;
        if (!empty($dataSession)) {
            foreach ($dataSession as $data) {
                if (!empty($data['voucher_type'] == 0)) {
                    $percen += $data['voucher_amount'];
                }
                if (!empty($data['voucher_type'] == 1)) {
                    $amount += $data['voucher_amount'];
                }
            }
        }
        $array = [
            'amount' => $amount,
            'percent' => $percen
        ];
        return $array;
    }

    public function clearPayment()
    {
        Session::delete('cart');
        Session::delete('total');
        Session::delete('shipping_fee');
        Session::delete('voucher');
        Session::delete('address_code');
        Session::delete('total_after_voucher');
        Session::delete('checkout');
        return $this->response->redirect(_WEB_ROOT);
    }

    public function successCart()
    {
        if (empty(Session::data('cart'))) {
            $message = [
                'status'    => '0',
                'message'   => "Giỏ hàng của bạn đang trống !",
            ];
            exit(json_encode($message));
        }
        if (Session::data('user_login') == false) {
            $message = [
                'status'    => '0',
                'message'   => "Vui lòng đăng nhập !",
            ];
            exit(json_encode($message));
        }
        if (empty(Session::data('shipping_fee'))) {
            $message = [
                'status'    => '0',
                'message'   => "Vui lòng chọn địa chỉ giao hàng !",
            ];
            exit(json_encode($message));
        }
        $message = [
            'status'    => '1',
            'location'  => _WEB_ROOT . '/thanh-toan',
            'time'      => 1000
        ];
        Session::data('checkout', true);
        exit(json_encode($message));
    }

    public function success()
    {
        if (empty(Session::data('checkout'))) {
            App::$app->loadError('404');
        } else {
            $data['content'] = 'clients.cart.success';
            $data['sub_content']['user'] = Session::data('user_data') ?? null;
            $data['sub_content']['sub_total'] = (Session::data('sub_total') ?? null);
            $data['sub_content']['price'] = Session::data('total') ?? null;
            $data['sub_content']['total_after_voucher'] = Session::data('total_after_voucher') ?? null;
            $data['sub_content']['ship'] = Session::data('shipping_fee') ?? null;
            if(!empty(Session::data('sub_total'))){
                $data['sub_content']['amount']  = (Session::data('sub_total') ?? null) - (Session::data('total') ?? null);
            }
            return $this->view('layouts.payment_layout', $data);
        }
    }





    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title'    => 'Sản phẩm',
            'meta_desc'     => 'Thêm sản phẩm, thông tin sản phẩm',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author'   => 'healthy power',
            'image_og'      => 'favicon.ico'
        ];
    }

    public function loadLibCSS()
    {
        return $list_css = [
            'bootstrap' => 'bootstrap.css'
        ];
    }

    public function loadLibJS()
    {
        return $list_js = [
            'jquery' => 'jquery.js'
        ];
    }
}
