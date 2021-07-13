<?php
class Product extends Controller{

    public $productModel;
    public $prodCateModel;
    public $supplierModel;
    public $productGalleryModel;
    public $request, $response;

    public function __construct(){
        $this->productModel = $this->model('ProductModel');
        $this->prodCateModel = $this->model('ProductCategoryModel');
        $this->supplierModel = $this->model('SupplierModel');
        $this->productGalleryModel = $this->model('ProductGalleryModel');
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
            'validate' => 'validate.js',
            'function' => 'functions.js'
        ];

        $data['page_title'] = "Thêm mới sản phẩm";

        return $this->view('layouts.admin_layout', $data);
    }

    public function store()
    {
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();

            /*Set rules*/
            $this->request->rules([
                'productName' => 'required',
                'weightName' => 'required',
                'productPrice' => 'required',
                'supplierProductId' => 'required',
                'categoryProductId' => 'required',
                'file' => 'required',
            ]);

            //Set message
            $this->request->message([
                'productName.required' => 'Tên sản phẩm không được để trống',
                'weightName.required' => 'khối lượng sản phẩm không được để trống',
                'productPrice.required' => 'Giá sản phẩm không được để trống',
                'supplierProductId.required' => 'Nhà cung cấp không dược để trống',
                'categoryProductId.required' => 'Loại sản phẩm không được để trống',
                'file.required' => 'Cần tối thiểu ít nhất 1 tệp hình',
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status' => '0',
                    'message' => "Đã có lỗi xảy ra, Vui lòng kiểm tra lại."
                ];

                $sessionKey = Session::isInvalid();
                $error = Session::flash($sessionKey.'_errors');
                $message['error'] = $error;
                exit(json_encode($message));
            }

            // đưa data vào
            $data = [
                'product_name'      => $dataFields['productName'],
                'product_code'      => $dataFields['SKU'],
                'list_price'        => $dataFields['productPrice'],
                'supplier_id'       => $dataFields['supplierProductId'],
                'category_id'       => $dataFields['categoryProductId'],
                'weight'            => $dataFields['weightName'],
                'product_slug'      => '',
                'description'       => !empty($dataFields['description']) ? $dataFields['description'] : "",
                'standard_cost'     => !empty($dataFields['standard_cost']) ? $dataFields['standard_cost'] : null,
                'quantity_per_unit' => !empty($dataFields['quantity_per_unit']) ? $dataFields['quantity_per_unit'] : 0,
                'discontinued'      => !empty($dataFields['discontinued']) ? $dataFields['discontinued'] : 1,
                'is_featured'       => !empty($dataFields['is_featured']) ? $dataFields['is_featured'] : null,
                'is_new'            => !empty($dataFields['is_new']) ? $dataFields['is_new'] : null
            ];

            $get_images = $dataFields['file'];
            $uploadPath = "public/uploads/products/";

            if($get_images){
                $data['image'] = ProcessImage::uploadImageBySrc($get_images[0], $uploadPath);
                unset($get_images[0]);
            }

            // thêm sản phẩm mới
            $result = $this->productModel->create($data);
            
            // xử lý thêm hình ảnh vào gallery
            $dataGallery['product_id'] = $result;

            foreach($get_images as $image) {
                $dataGallery['image'] = ProcessImage::uploadImageBySrc($image, $uploadPath);
                $insertGallery = $this->productGalleryModel->create($dataGallery);
            }

            $message = [
                "status" => "1",
                'message' => "Thêm sản phẩm mới thành công!"
            ];
    
            exit(json_encode($message));
        }
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
            'meta_title' => 'Sản phẩm',
            'meta_desc' => 'Thêm sản phẩm, thông tin sản phẩm',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'healthy power',
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