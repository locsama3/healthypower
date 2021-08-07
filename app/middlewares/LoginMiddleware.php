<?php
class LoginMiddleware extends Middlewares {
    public function handle(){

        if (!empty($_COOKIE['usercookie'])){
            $customerModel = Load::model('CustomerModel');
        
            $user = $customerModel->findOne(['email: '.$_COOKIE['usercookie']]);

            Session::data('user_login', true);
            Session::data('user_data', [
                'username'      => $user['fullname'],
                'user_email'    => $user['email'],
                'user_avatar'   => $user['avatar']
            ]);
        }
    }
}