<?php
class Delivery extends Controller{

    public $request, $response;

    public function __construct(){
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.deliveries.index';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Tra cứu phí vận chuyển";

        $data['libraryJS']['list_js'] = [
            'validate' => 'validate.js'
        ];

        $data['data_js'] = [
            'ajax' => 'admins.deliveries.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function destroy()
    {
        // $dataFields = $this->request->getFields();
        // $id = $dataFields['id'];

        // $this->blogCateModel->destroy($id);
    }   

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Tra cứu phí vận chuyển',
            'meta_desc' => 'phí vận chuyển, giao hàng, dinh dưỡng, sức khỏe',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'Lộc sama',
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