<?php
class AuthMiddleware extends Middlewares {
    public function handle(){

        if (Session::data('admin_login')==null){
            $response = new Response();
            $response->redirect('admin/user/login');
        }
    }
}