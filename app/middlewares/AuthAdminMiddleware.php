<?php
class AuthAdminMiddleware extends Middlewares {
    public function handle(){
        $response = new Response();
        if (Session::data('check_login') == null  && Session::data('user_data_admin') == null){
            return $response->redirect('admin/user/login');
        }
    }
}