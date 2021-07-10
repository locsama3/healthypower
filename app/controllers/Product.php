<?php
class Product extends Controller{

    public $productModel;
    public $request, $response;

    public function __construct(){
        $this->productModel = $this->model('ProductModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.product_file.index';

         
        // $data['sub_content']['...'] = ...;

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách sản phẩm";

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    { 
        $data['content'] = 'admins.product_file.create';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js'
        ];

        $data['page_title'] = "Thêm mới sản phẩm";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        
    }

    public function edit($id)
    {
        // code...
    }

    public function update($id)
    {
        // code...
    }

    public function destroy($id)
    {
        // code...
    }

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Bài viết',
            'meta_desc' => 'blogs, bài viết, dinh dưỡng, sức khỏe',
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