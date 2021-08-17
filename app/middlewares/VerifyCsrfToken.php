<?php
class VerifyCsrfToken extends Middlewares {
    public function handle(){
        $request = new Request();   
        $response = new Response();
        if($request->isPost()){
            $dataToken = $request->getFields();
            if(!empty($dataToken)){
                $_token = $dataToken['_token'];
                if(Session::data('_token') != $_token){
                    Session::flash('errors', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại token!');
                    $response->back();
                }
            } 
            else{
                Session::flash('errors', 'Không tìm thấy dữ liệu. Vui lòng kiểm tra lại!');

                $response->back();
            }
        }
    }
}