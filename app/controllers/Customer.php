<?php
class Customer extends Controller{

    public $customerModel;
    public $request, $response;

    public function __construct(){
        $this->customerModel = $this->model('CustomerModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.customers.index';

         
        $data['sub_content']['list_customers'] = $this->customerModel->all();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách khách hàng";

        $data['data_js'] = [
            'ajax' => 'admins.customers.js_index'
        ];

        $data['libraryJS']['list_js'] = [
            'functions' => 'functions.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    {
        // $data['sub_content']['customers'] = $this->customerModel->all();

        $data['content'] = 'admins.customers.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Thêm mới khách hàng";

        $data['data_js'] = [
            'ajax' => 'admins.customers.js_create'
        ];

        $data['libraryJS']['list_js'] = [
            'validate' => 'validate.js',
            'functions' => 'functions.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();
            $dataFile = $this->request->getFiles();

            if ($dataFields['formInfor'] == 'form-info-account') {
                /*Set rules*/
                $this->request->rules([
                    'firstName' => 'required',
                    'lastName' => 'required',
                    'email' => 'required|unique:shop_customers:email',
                    'phone' => 'unique:shop_customers:phone',
                ]);

                //Set message
                $this->request->message([
                    'firstName.required' => 'Tên danh mục không được để trống',
                    'lastName.required' => 'Tên danh mục không được để trống',
                    'email.required' => 'Email không được để trống',
                    'email.unique' => 'Email đã tồn tại',
                    'phone.unique' => 'Số điện thoại đã tồn tại',
                ]);

                $validate = $this->request->validate();
                if (!$validate){
                    $message = [
                        'status' => '0',
                        'message' => "Đã có lỗi xảy ra. Vui lòng kiểm tra lại.",
                        'form' => 'form-info-account'
                    ];

                    $sessionKey = Session::isInvalid();
                    $error = Session::flash($sessionKey.'_errors');
                    $message['error'] = $error;
                    exit(json_encode($message));
                }

                // đưa data vào
                $data = [
                    'fullname' => $dataFields['lastName'].' '.$dataFields['firstName'],
                    'email' => $dataFields['email'],
                    'phone' => !empty($dataFields['phone']) ? $dataFields['phone'] : NULL,
                    'gender' => !empty($dataFields['gender']) ? $dataFields['gender'] : 0,
                ];

                $get_image = $dataFile['avatarUpload'];

                if($get_image){
                    $uploadPath = "public/uploads/customer/";
                    $unique_image = ProcessImage::checkImage($get_image, $uploadPath);
                    if($unique_image){
                        $data['avatar'] = $unique_image;
                    }
                } else {
                    $data['avatar'] = 'avatar-default.png';
                }
        
                $result =  $this->customerModel->create($data);

                $message = [
                    "status" => "1",
                    'message' => "Thêm thông tin khách hàng thành công!"
                ];
        
                exit(json_encode($message));
            }

            if ($dataFields['formInfor'] == 'form-shipping-address') {
                
            }

            if ($dataFields['formInfor'] == 'form-billing-address') {
                
            }
            
        }
    }

    public function edit($id)
    {
        $data['sub_content']['customer_by_id'] = $this->customerModel->find($id);

        $data['content'] = 'admins.customers.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Cập nhật thông tin khách hàng";

        $data['data_js'] = [
            'ajax' => 'admins.customers.js_edit'
        ];

        $data['libraryJS']['list_js'] = [
            'functions' => 'functions.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            $dataFields = $this->request->getFields();

            if (array_key_exists("phone", $dataFields)) {
                /*Set rules*/
                $this->request->rules([
                    'phone' => 'required|min:8|max:11|unique:shop_customers:phone:id='.$id
                ]);

                //Set message
                $this->request->message([
                    'phone.required' => 'Số điện thoại không được để trống',
                    'phone.min' => 'Số điện thoại phải lớn hơn 8 ký tự',
                    'phone.max' => 'Số điện thoại phải nhỏ hơn 11 ký tự',
                    'phone.unique' => 'Số điện thoại đã tồn tại trong hệ thống'
                ]);

                $validate = $this->request->validate();
                if (!$validate){
                    $message = [
                        'status' => '0',
                        'message' => "Đã có lỗi xảy ra. Vui lòng kiểm tra lại.",
                    ];

                    $sessionKey = Session::isInvalid();
                    $error = Session::flash($sessionKey.'_errors');
                    $message['error'] = $error;
                    exit(json_encode($message));
                }

                $data = ['phone' => $dataFields['phone']];
                $result = $this->customerModel->edit($id, $data);
                $message = [
                    "status" => "1",
                    'message' => "Cập nhật số điện thoại khách hàng thành công!"
                ];
                exit(json_encode($message));
            }

            if (array_key_exists("shipping_address", $dataFields)) {
                $data = ['shipping_address' => $dataFields['shipping_address']];
                $result = $this->customerModel->edit($id, $data);
                $message = [
                    "status" => "1",
                    'message' => "Cập nhật địa chỉ giao hàng khách hàng thành công!"
                ];
                exit(json_encode($message));
            }

            if (array_key_exists("billing_address", $dataFields)) {
                $data = ['billing_address' => $dataFields['billing_address']];
                $result = $this->customerModel->edit($id, $data);
                $message = [
                    "status" => "1",
                    'message' => "Cập nhật địa chỉ giao hàng khách hàng thành công!"
                ];
                exit(json_encode($message));
            }

            if (array_key_exists("fullname", $dataFields)) {
                $data = ['fullname' => $dataFields['fullname']];
                $result = $this->customerModel->edit($id, $data);
                $message = [
                    "status" => "1",
                    'message' => "Cập nhật địa chỉ giao hàng khách hàng thành công!"
                ];
                exit(json_encode($message));
            }

        }
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->customerModel->edit($id,$data);
    }

    public function destroy()
    {
        $dataFields = $this->request->getFields();

        $ids = $dataFields['_id'];
        $data = [ 'deleted_at' => date('Y-m-d H:i:s')];

        $this->customerModel->deleteAt($ids, $data);

        $message = [
            "status" => "1",
            'message' => "Xóa khách hàng thành công!"
        ];
        exit(json_encode($message));
    }   

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Khách hàng',
            'meta_desc' => 'danh sách khách hàng, thông tin, trạng thái',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'nhóm không tên',
            'image_og' => 'favicon.ico'
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