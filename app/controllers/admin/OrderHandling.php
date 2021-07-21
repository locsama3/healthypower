<?php
class OrderHandling extends Controller{

    public $orderModel;
    public $customerModel;
    public $productModel;
    public $orderDetailModel;
    public $request, $response;

    public function __construct(){
        $this->orderModel = $this->model('OrderModel');
        $this->customerModel = $this->model('CustomerModel');
        $this->productModel = $this->model('ProductModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function loadLibJS()
    {
        return $list_js = [
            'jquery' => 'jquery.js'
        ];  
    }



    public function index()
    {
        $data['content'] = 'admins.order.index';

        $data['sub_content']['list_orders'] = $this->orderModel->getAllOrder();        
        
        $i = 0;
    
        foreach($data['sub_content']['list_orders'] as $dataField){
            $total = 0;
            $detailById = $this->orderModel->getOrderDetailById($dataField['order_id']);
            $statusCurrent = status($dataField['order_status']);
            $total =  totalPrice($detailById, $dataField['shipping_fee']);
            $data['sub_content']['list_orders'][$i]['total'] = $total[0];
            $data['sub_content']['list_orders'][$i]['status'] = $statusCurrent;
            $i++;
        }
    
        
        $data['libraryJS']['list_js'] = $this->loadLibJS();

        $data['data_js'] = [
            'js'      => 'admins.order.js_index'
        ];

        $data['libraryJS']['list_js'] = [
            'functions' => 'functions.js'
        ];
        
        
        
        // $data['data_js'] = [
        //     'load_image' => '...',
        //     'check_coupon' => 'checkcoupon',
        // ];
        $data['page_title'] = "Danh sách đơn hàng";
            
        return $this->view('layouts.admin_layout', $data);
    }




    public function show($id)
    {
        $data['content'] = 'admins.order_detail.index';
        $data['sub_content']['detailById'] = $this->orderModel->getOrderDetailById($id);
     
        $data['sub_content']['orderById'] = $this->orderModel->getOrderById($id);
      
        
        $total = totalPrice($data['sub_content']['detailById'], $data['sub_content']['orderById'][0]['shipping_fee']);

        $data['sub_content']['orderById'] = $data['sub_content']['orderById'][0];
        $data['sub_content']['orderById']['order_id'] = $id;
        $data['sub_content']['orderById']['status'] = status($data['sub_content']['orderById']['order_status']);
        
      
        array_push($data['sub_content']['orderById'], array('total'=>$total[0]));
        $i = 0;
        foreach ($total[1] as $value) {
            // tiến hành thay thế giá trị vừa thay đổi vào field unit_price
            $data['sub_content']['detailById'][$i]['unit_price'] = $value;
            $i++;
        }
    
        $data['sub_content']['orderById']['count_order'] = $this->orderModel->getRow($data['sub_content']['orderById']['customer_id']);

        

        $data['sub_content']['orderById']['total'] = $data['sub_content']['orderById'][0]['total'];

        $data['page_title'] = "Chi tiết đơn hàng";
       
        $data['data_js'] = [
            'js_lib'=> 'admins.order_detail.js_lib',
            'js' => 'admins.order_detail.js_index'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    

    public function edit()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $data['ship_address1'] = $dataFields['cont']; 
        $this->orderModel->edit($id, $data); 
    }

    public function load_address()
    {
        $dataField = $this->request->getFields();
        $this->orderModel->load($dataField['id']);
    }

    public function update_status()
    {
        $dataField = $this->request->getFields();
    
        $data = [
            'order_status' => $dataField['_content']
        ];
        $this->orderModel->editStatus($dataField['_id'], $data);
        
        if($dataField['_content'] == 2 || $dataField['_content'] == 4){
            $array = explode( ',', $dataField['_id']);
            foreach($array as $id){
                $orderDetailById = $this->orderModel->getOrderDetailById($id);
               
                if($dataField['_content'] == 2){
                    foreach($orderDetailById as $orderDetail){
                        $quantity = $orderDetail['quantity'];
                        $this->productModel->updateQuantity($orderDetail['product_id'], $quantity, "-");
                    }
                }else{
                    foreach($orderDetailById as $orderDetail){
                        $quantity = $orderDetail['quantity'];
                        $this->productModel->updateQuantity($orderDetail['product_id'], $quantity, "+");
                    }
                }
            }
        }
        
        
        
    }

    public function update_contact(){
        $dataField = $this->request->getFields();
        
        $data = [
            'email' => $dataField['email'],
            'phone' => $dataField['phone']
        ];

        $this->customerModel->edit($dataField['id'], $data);
    }
    public function load_contact(){
        $dataField = $this->request->getFields();
        $this->customerModel->load($dataField['id']);
    }
 
}