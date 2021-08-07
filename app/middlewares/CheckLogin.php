<?php
class CheckLogin extends Middlewares {
    public function handle(){
        $response = new Response();
        if(Session::data('user_login') == true){
            $response->redirect(_WEB_ROOT);
        }
        
    }
}