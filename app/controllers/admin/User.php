<?php
class User extends Controller{

    public $request, $response;
    public $userModel;
    public function __construct(){
        $this->request = new Request();
        $this->response = new Response();
        $this->userModel = $this->model('UserModel');
    }
    
    
    public function login(){
        $data['content'] = 'admins.user.login';
        $data['page_title']   = "Đăng nhập Admin";
        $data['data_js'] = [
            'js' => 'admins.user.js_login'
        ];
        $data['libraryJS']['list_js'] = [
            'validate'      => 'validate.js',
            'functions'     => 'functions.js'
        ];
        return $this->view('layouts.admin_login_layout', $data);
    }

    public function validateLogin(){
      
        if ($this->request->isPost()) {
            $dataFields = $this->request->getFields();
            $this->request->rules([
                'email'         => 'required',
                'password'      => 'required|min:6',
            ]);
            
            //Set message
            $this->request->message([
                'email.required'        => 'Email không được để trống',
                'password.required'     => 'Mật khẩu không được để trống',
                'password.min'          => 'Mật khẩu ít nhất 6 kí tự'
            ]);

            $validate = $this->request->validate();
            
            if (!$validate) {
                $message = [
                    'status'    => '0',
                    'message'   => "Đã có lỗi xảy ra. Vui lòng kiểm tra lại.",
                    'form'      => 'form-info-account'
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey . '_errors');
                $message['error'] = $error;
                exit(json_encode($message));
            }
            
            $count = $this->userModel->countRow('email', '=',$dataFields['email']);
            
            if (!$count) {
                $message = [
                    'status'    => '0',
                    'message'   => "Email Không tồn tại trong hệ thống",
                    'form'      => '#form-login',
                    'error'     => [ "email" => "Không tồn tại tài khoản email trong hệ thống" ]
                ];
                exit(json_encode($message));
            }
            $check_pass_user = $this->userModel->findUserInvalid($dataFields['email'], md5($dataFields['password']));
            
            if(!$check_pass_user){
                $message = [
                    'status'    => '0',
                    'message'   => "Sai mật khẩu, vui lòng nhập lại",
                    'form'      => '#form-login',
                    'error'     => [ "password" => "Sai mật khẩu, vui lòng nhập lại" ]
                ];
                exit(json_encode($message));
            }
            $user = $this->userModel->findByField(['email: '. $dataFields['email']]);
           
            if(!$user[0]['status']){
                $message = [
                    'status'    => '0',
                    'message'   => "Rất tiếc, tài khoản hiện đang tạm khóa",
                    'form'      => '#form-login',
                    'error'     => [ "email" => "Rất tiếc, tài khoản hiện đang tạm khóa" ]
                ];
                exit(json_encode($message));
            }

            $message = [
                'status'    => '1',
                'message'   => "Đăng nhập thành công",
                'location'  => _WEB_ROOT.'/dashboard',
                'time'      => 1000
            ];
         
            Session::data('user_data_admin',[
                'id'         => $user[0]['id'],
                'user_name'  => $user[0]['fullname'],
                'user_email' => $user[0]['email'],
                'user_avatar'=> $user[0]['avatar']
            ]);
            Session::data('check_login', true);
           
            exit(json_encode($message));
        }
  
    }
    public function logout(){
        Session::delete('check_login');
        Session::delete('user_data_admin');
        return $this->response->redirect('admin/user/login');
    }
}
