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
        $data['content'] = 'clients.customers.index';

        $user_email = Session::data('user_data')['user_email'];

        $data['sub_content']['customer'] = $this->customerModel->findOne(['email: '. $user_email]);

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Thông tin khách hàng";

        $data['data_js'] = [
            'ajax' => 'clients.customers.js_index'
        ];

        $data['libraryJS']['list_js'] = [
            'functions' => 'functions.js',
            'validate' => 'validate.js',
        ];

        return $this->view('layouts.client_layout', $data);
    }

    public function login() {
        $data['content'] = 'clients.customers.login';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Đăng nhập";

        $data['data_js'] = [
            'js' => 'clients.customers.js_login'
        ];

        $data['libraryJS']['list_js'] = [
            'functions'     => 'functions.js',
            'validate'      => 'validate.js'
        ];

        return $this->view('layouts.client_layout', $data);
    }

    public function register() {
        $data['content'] = 'clients.customers.register';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Đăng ký";

        $data['data_js'] = [
            'js' => 'clients.customers.js_register'
        ];

        $data['libraryJS']['list_js'] = [
            'functions'     => 'functions.js',
            'validate'      => 'validate.js'
        ];

        return $this->view('layouts.client_layout', $data);
    }

    public function validate() {
        
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();

            
            /*Set rules*/
            $this->request->rules([
                'email'       => 'required|email',
                'password'    => 'required|min:5|max:12',
            ]);

            //Set message
            $this->request->message([
                'email.required'        => 'Email không được để trống',
                'email.email'           => 'Không đúng định dạng email',
                'password.required'     => 'mật khẩu không được để trống',
                'password.min'          => 'mật khẩu phải lớn hơn 5 ký tự',
                'password.max'          => 'mật khẩu phải nhỏ hơn 12 ký tự'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status'    => '0',
                    'message'   => "Đã có lỗi xảy ra, Vui lòng kiểm tra lại."
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey.'_errors');
                $message['error'] = $error;
                exit(json_encode($message));
            }

            $count = $this->customerModel->countRow('email',$dataFields['email']);
           
            if (!$count) {
                $message = [
                    'status'    => '0',
                    'message'   => "Email Không tồn tại trong hệ thống",
                    'form'      => '#formLogin',
                    'error'     => [ "email" => "Không tồn tại tài khoản email trong hệ thống" ]
                ];
                exit(json_encode($message));
            } 
            
            $user = $this->customerModel->findOne(["email: ".$dataFields['email']]);
           
            if ($user['password'] != md5($dataFields['password'])) {
                $message = [
                    'status'    => '0',
                    'message'   => "Nhập sai mật khẩu",
                    'form'      => '#formLogin',
                    'error'     => [ "password" => "Nhập sai mật khẩu người dùng" ]
                ];
                exit(json_encode($message));
            }

            if (!empty($dataFields['save'])) {
                setcookie('usercookie', $dataFields['email'], time() + 7776000);
            } 

            Session::data('user_login', true);
            Session::data('user_data', [
                'id_user'       => $user['id'],
                'username'      => $user['fullname'],
                'user_email'    => $user['email'],
                'user_avatar'   => $user['avatar'],
                'user_phone'    => $user['phone']
            ]);
            
            $message = [
                'status'    => '1',
                'message'   => "Đăng nhập thành công",
                'location'  => _WEB_ROOT,
                'time'      => 1000
            ];
            
            exit(json_encode($message));
        }
    }

    public function validate_register() {
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();

            /*Set rules*/
            $this->request->rules([
                'first_name'        => 'required',
                'last_name'         => 'required',
                'email'             => 'required|email|unique:shop_customers:email',
                'password'          => 'required|min:6|max:20',
                'confirm_password'  => 'required|match:password',
                'terms'             => 'required',
            ]);

            //Set message
            $this->request->message([
                'first_name.required'           => 'Tên không được để trống',
                'last_name.required'            => 'Họ không được để trống',
                'email.required'                => 'Email không được để trống',
                'email.email'                   => 'Không đúng định dạng email',
                'email.unique'                  => 'Email đã tồn tại trong hệ thống',
                'password.required'             => 'mật khẩu không được để trống',
                'password.min'                  => 'mật khẩu phải lớn hơn 6 ký tự',
                'password.max'                  => 'mật khẩu phải nhỏ hơn 20 ký tự',
                'confirm_password.required'     => 'Mật khẩu nhập lại không được để trống',
                'terms.required'                => 'Điều khoản không được để trống',
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status'    => '0',
                    'form'      => '#formRegister'
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey.'_errors');
                $message['error'] = $error;
                exit(json_encode($message));
            }

            // đưa data vào
            $data = [
                'fullname'  => $dataFields['last_name'] . ' ' . $dataFields['first_name'],
                'email'     => $dataFields['email'],
                'password'  => md5($dataFields['password']),
                'avatar'    => 'avatar-default.png',
            ];

            $result =  $this->customerModel->create($data);

            $message = [
                "status"    => "1",
                'message'   => "Thêm thông tin khách hàng thành công!",
                'location'  => _WEB_ROOT.'/dang-nhap',
                'time'      => 1000,
            ];

            exit(json_encode($message));
        }
    }

    public function logout() {
        Session::delete();

        setcookie("usercookie");
        $this->response->back();
    }

    public function forgot_password () {
        $data['content'] = 'clients.customers.forgot_password';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Đặt lại mật khẩu";

        $data['data_js'] = [
            'js' => 'clients.customers.js_forgot_pass'
        ];

        $data['libraryJS']['list_js'] = [
            'validate'      => 'validate.js'
        ];

        return $this->view('layouts.client_layout', $data);
    }

    public function send_mail() {
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();

            /*Set rules*/
            $this->request->rules([
                'email'       => 'required|email'
            ]);

            //Set message
            $this->request->message([
                'email.required'        => 'Email không được để trống',
                'email.email'           => 'Không đúng định dạng email'
            ]);

            $validate = $this->request->validate();
            
            if (!$validate){
                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey . '_errors');

                Session::flash('errors', $error);
                $this->response->back();
            }

            $count = $this->customerModel->countRow('email',$dataFields['email']);

            if (!$count) {
                $message = [ "email" => "Không tồn tại tài khoản email trong hệ thống" ];
                $sessionKey = Session::isInvalid();
                $old = Session::flash($sessionKey . '_old');

                Session::flash('errors', $message);
                Session::flash('old', $old);

                $this->response->back();
            }

            $user = $this->customerModel->findOne(["email: ". $dataFields['email']]);

            $mailer = new Mailer();

            $random = mt_rand(100000,999999);

            $data = [
                'subject' => 'Đặt lại mật khẩu',
                'content' => '<strong>Mã xác nhận đặt lại mật khẩu của bạn là: ' . $random."<strong>",
                // 'attachments' => [ 'file' => 'public/uploads/customer/'.$user['avatar'] ]
            ];

            $mailer->sendMail($user['email'], $user['fullname'], $data);
            

            if ($mailer) {
                Session::data('resetPassCode', $random);
                Session::data('user_id', $user['id']);
                
                $this->response->redirect('ma-dat-lai');
            } else {
                echo 'lỗi gửi mail';
            }
        }
    }

    public function check_code() {
        $data['content'] = 'clients.customers.checkcode';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Xác nhận mã đặt lại";

        $data['data_js'] = [
            'js' => 'clients.customers.js_checkcode'
        ];

        $data['libraryJS']['list_js'] = [
            'functions'     => 'functions.js',
            'validate'      => 'validate.js'
        ];

        return $this->view('layouts.client_layout', $data);
    }

    public function validate_code() {
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();

            /*Set rules*/
            $this->request->rules([
                'code'       => 'required|min:6|max:6'
            ]);

            //Set message
            $this->request->message([
                'code.required'      => 'Vui lòng nhập mã xác thực đã được gửi vào mail của bạn',
                'code.min'           => 'Vui lòng nhập tối thiểu 6 ký tự',
                'code.max'           => 'Vui lòng nhập tối đa 6 ký tự'
            ]);

            $validate = $this->request->validate();
            
            if (!$validate){
                $message = [
                    'status'    => '0',
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey.'_errors');
                $message['error'] = $error;
                exit(json_encode($message));
            }

            if ($dataFields['code'] == Session::data('resetPassCode')) {
                Session::delete('resetPassCode');
                $message = [
                    'status'     => '1',
                    'location'   => _WEB_ROOT."/dat-lai-mat-khau",
                    'time'       => 1000
                ];

                exit(json_encode($message));
            } else {
                $message = [
                    'status'    => '0',
                    'error'    => [ "code"  => "Mã xác thực không chính xác, vui lòng nhập lại" ],
                    'form'      => '#formCode'
                ];
                
                exit(json_encode($message));
            }

        }
    }

    public function reset() {
        $data['content'] = 'clients.customers.reset';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Nhập lại mật khẩu";

        $data['data_js'] = [
            'js' => 'clients.customers.js_reset'
        ];

        $data['libraryJS']['list_js'] = [
            'functions'     => 'functions.js',
            'validate'      => 'validate.js'
        ];

        return $this->view('layouts.client_layout', $data);
    }

    public function update_pass() {
        if ($this->request->isPost()){
            $dataFields = $this->request->getFields();

            /*Set rules*/
            $this->request->rules([
                'password'          => 'required|min:6',
                'confirm-password'  => 'required|match:password',
            ]);

            //Set message
            $this->request->message([
                'password.required'         => 'Mật khẩu không được để trống',
                'password.min'              => 'Mật khẩu phải lớn hơn 6 ký tự',
                'confirm-password.required' => 'Mật khẩu nhập lại không được để trống',
                'confirm-password.match'    => 'Mật khẩu nhập lại không trùng khớp'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status' => '0'
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey.'_errors');
                $message['error'] = $error;

                exit(json_encode($message));
            }

            $id = Session::data('user_id');
            $data = ['password' => md5($dataFields['password'])];

            $result = $this->customerModel->edit($id, $data);

            Session::delete('user_id');

            $message = [
                "status"    => "1",
                'message'   => "Cập nhật mật khẩu thành công!",
                "location"  => _WEB_ROOT."/dang-nhap",
                "time"      => 1500
            ];

            exit(json_encode($message));
        }
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
                    'lastName'  => 'required',
                    'email'     => 'required|unique:shop_customers:email',
                    'phone'     => 'unique:shop_customers:phone',
                ]);

                //Set message
                $this->request->message([
                    'firstName.required'    => 'Tên danh mục không được để trống',
                    'lastName.required'     => 'Tên danh mục không được để trống',
                    'email.required'        => 'Email không được để trống',
                    'email.unique'          => 'Email đã tồn tại',
                    'phone.unique'          => 'Số điện thoại đã tồn tại',
                ]);

                $validate = $this->request->validate();
                if (!$validate){
                    $message = [
                        'status'    => '0',
                        'message'   => "Đã có lỗi xảy ra. Vui lòng kiểm tra lại.",
                        'form'      => 'form-info-account'
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
            
        }
    }

    public function update()
    {
        if ($this->request->isPost()){
            $dataFields = $this->request->getFields();

            /*Set rules*/
            $this->request->rules([
                'phone' => 'required|unique:shop_customers:phone:id='.$dataFields['customer-id']
            ]);

            //Set message
            $this->request->message([
                'phone.required'    => 'Số điện thoại không được để trống',
                'phone.unique'      => 'Số điện thoại đã tồn tại trong hệ thống'
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status'    => '0',
                    'message'   => "Đã có lỗi xảy ra. Vui lòng kiểm tra lại.",
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey.'_errors');
                $message['error'] = $error;
                exit(json_encode($message));
            }

            $data = [
                'phone'             => $dataFields['phone'],
                'fullname'          => !empty($dataFields['username']) ? $dataFields['username'] : '',
                'shipping_address'  => !empty($dataFields['address']) ? $dataFields['address'] : '',
                'province_id'       => !empty($dataFields['province']) ? $dataFields['province'] : null,
                'ward_id'           => !empty($dataFields['ward']) ? $dataFields['ward'] : null,
                'district_id'       => !empty($dataFields['district']) ? $dataFields['district'] : null,
                'gender'            => !empty($dataFields['gender']) ? $dataFields['gender'] : null,
                'birthday'          => date($dataFields['birthday'])
            ];

            $result = $this->customerModel->edit($dataFields['customer-id'], $data);

            $message = [
                "status" => "1",
                'message' => "Cập nhật thông tin của bạn thành công!",
                'location' => _WEB_ROOT.'/thong-tin-tai-khoan',
                'time' => 1000
            ];

            exit(json_encode($message));
        }
    }  

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Khách hàng',
            'meta_desc' => 'thông tin khách hàng, thông tin, trạng thái',
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