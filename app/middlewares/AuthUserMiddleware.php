<?php
class AuthUserMiddleware extends Middlewares {
    public function handle(){

        if (Session::data('user_login') == null) {
            $response = new Response();
            $response->redirect('trang-chu');
        }
    }
}