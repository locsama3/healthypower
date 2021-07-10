<?php
class VerifyCsrfToken extends Middlewares {
    public function handle(){
        $request = new Request();
        $dataToken = $request->getFields();

        if(!empty($dataToken)){
            $_token = $dataToken['_token'];

            if(Session::data('_token') != $_token){
                $response = new Response();
                Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại token!');
                $response->back();
            }
        }
    }
}