<?php
class Product extends Controller{

    public $productModel;
    public $prodCateModel;
    public $supplierModel;
    public $request, $response;

    public function __construct(){
        $this->productModel = $this->model('ProductModel');
        $this->prodCateModel = $this->model('ProductCategoryModel');
        $this->supplierModel = $this->model('SupplierModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        $data['content'] = 'admins.products.index';

        $data['sub_content']['list_products'] = $this->productModel->all();

        $data['sub_content']['list_prod_cates'] = $this->prodCateModel->all();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách sản phẩm";

        $data['data_js'] = [
            'ajax' => 'admins.products.js_index'
        ];

        $data['libraryJS']['list_js'] = [
            'functions' => 'functions.js'
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function create()
    { 
        $data['content'] = 'admins.products.create';

        $data['sub_content']['list_prod_cates'] = $this->prodCateModel->all();

        $data['sub_content']['list_suppliers'] = $this->supplierModel->all();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['data_js'] = [
            'ajax' => 'admins.products.js_create'
        ];

        $data['libraryJS']['list_js'] = [
            'ckeditor' => 'ckeditor/ckeditor.js',
            'changeEditor' => 'changeEditor.js',
            'validate' => 'validate.js'
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

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['id'];
        $status_value = $dataFields['status_value'];

        $data['status'] = $status_value;

        $this->customerModel->edit($id,$data);
    }

    public function destroy()
    {
        $dataFields = $this->request->getFields();

        $ids = $dataFields['_id'];
        $data = [ 'deleted_at' => date('Y-m-d H:i:s')];

        $this->productModel->deleteAt($ids, $data);

        $message = [
            "status" => "1",
            'message' => "Xóa sản phẩm thành công!"
        ];
        exit(json_encode($message));
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