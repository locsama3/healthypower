<?php
class CartLogin extends Middlewares {
    public function handle(){
        $response = new Response();
        if(Session::data('user_login') == false){
            $response->redirect('dang-nhap');
        }
        
    }
}