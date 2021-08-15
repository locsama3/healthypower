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

        $data['sub_content']['list_products'] = $this->productModel->findByField(['deleted_at : null'], 'created_at:desc');

        $data['sub_content']['productsCount'] = $this->productModel->countIf(['deleted_at : null']);

        $data['sub_content']['list_prod_cates'] = $this->prodCateModel->all();

        $data['sub_content']['list_suppliers'] = $this->supplierModel->all();

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách sản phẩm";

        $data['data_js'] = [
            'ajax' => 'admins.products.js_index'
        ];

        $data['libraryJS']['list_js'] = [
            'functions'     => 'functions.js',
            'uploadExcel'   => 'uploadExcel.js'
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
            'ckeditor'      => 'ckeditor/ckeditor.js',
            'changeEditor'  => 'changeEditor.js',
            'validate'      => 'validate.js',
            'function'      => 'functions.js',
            'upload'        => 'uploadImg.js',
            'changtoslug'   => 'ChangeToSlug.js',
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
                'productName'       => 'required',
                'weightName'        => 'required',
                'productPrice'      => 'required',
                'supplierProductId' => 'required',
                'categoryProductId' => 'required',
                'file'              => 'required',
                'length'            => 'required',
                'width'             => 'required',
                'height'            => 'required',
            ]);

            //Set message
            $this->request->message([
                'productName.required'          => 'Tên sản phẩm không được để trống',
                'weightName.required'           => 'Khối lượng sản phẩm không được để trống',
                'productPrice.required'         => 'Giá sản phẩm không được để trống',
                'supplierProductId.required'    => 'Nhà cung cấp không dược để trống',
                'categoryProductId.required'    => 'Loại sản phẩm không được để trống',
                'file.required'                 => 'Cần tối thiểu ít nhất 1 tệp hình',
                'length.required'               => 'Chiều dài sản phẩm không được để trống',
                'width.required'                => 'Chiều rộng sản phẩm không được để trống',
                'height.required'               => 'Chiều cao sản phẩm không được để trống',
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status'    => '0',
                    'message'   => "Đã có lỗi xảy ra, Vui lòng kiểm tra lại."
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
                'length'            => (int)$dataFields['length'],
                'width'             => (int)$dataFields['width'],
                'height'            => (int)$dataFields['height'],
                'product_slug'      => !empty($dataFields['slug']) ? $dataFields['slug'] : '',
                'description'       => !empty($dataFields['description']) ? $dataFields['description'] : "",
                'standard_cost'     => !empty($dataFields['standard_cost']) ? $dataFields['standard_cost'] : null,
                'quantity_per_unit' => !empty($dataFields['quantity_per_unit']) ? $dataFields['quantity_per_unit'] : 0,
                'discontinued'      => ($dataFields['discontinued'] != '') ? 1 : 0,
                'status'            => ($dataFields['status'] != '') ? 1 : 0,
                'is_featured'       => ($dataFields['isFeatured'] != '') ? 1 : 0,
                'is_new'            => ($dataFields['isNew'] != '') ? 1 : 0
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
            $pos = 0;

            foreach($get_images as $image) {
                $dataGallery['image'] = ProcessImage::uploadImageBySrc($image, $uploadPath);
                $pos ++;
                $dataGallery['position'] = $pos;
                $this->productGalleryModel->create($dataGallery);
            }

            $message = [
                "status"    => "1",
                'message'   => "Thêm sản phẩm mới thành công!"
            ];
    
            exit(json_encode($message));
        }
    }

    public function edit($id)
    {
        $data['sub_content']['product_by_id'] = $this->productModel->find($id);

        $data['sub_content']['list_prod_cates'] = $this->prodCateModel->all();

        $data['sub_content']['list_suppliers'] = $this->supplierModel->all();

        $data['sub_content']['list_gallery'] = $this->productGalleryModel->findByField(["product_id: $id"], "position : ASC");

        $data['content'] = 'admins.products.edit';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Cập nhật thông tin sản phẩm";

        $data['data_js'] = [
            'ajax' => 'admins.products.js_edit',
        ];

        $data['libraryJS']['list_js'] = [
            'functions'     => 'functions.js',
            'validate'      => 'validate.js',
            'ckeditor'      => 'ckeditor/ckeditor.js',
            'changeEditor'  => 'changeEditor.js',
            'upload'        => 'uploadImg.js',
            'changtoslug'   => 'ChangeToSlug.js',
        ];

        return $this->view('layouts.admin_layout', $data);
    }

    public function update($id)
    {
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();

            /*Set rules*/
            $this->request->rules([
                'productName'       => 'required',
                'weightName'        => 'required',
                'productPrice'      => 'required',
                'supplierProductId' => 'required',
                'categoryProductId' => 'required',
                'file'              => 'required',
                'length'            => 'required',
                'width'             => 'required',
                'height'            => 'required',
            ]);

            //Set message
            $this->request->message([
                'productName.required'          => 'Tên sản phẩm không được để trống',
                'weightName.required'           => 'khối lượng sản phẩm không được để trống',
                'productPrice.required'         => 'Giá sản phẩm không được để trống',
                'supplierProductId.required'    => 'Nhà cung cấp không dược để trống',
                'categoryProductId.required'    => 'Loại sản phẩm không được để trống',
                'file.required'                 => 'Cần tối thiểu ít nhất 1 tệp hình',
                'length.required'               => 'Chiều dài sản phẩm không được để trống',
                'width.required'                => 'Chiều rộng sản phẩm không được để trống',
                'height.required'               => 'Chiều cao sản phẩm không được để trống',
            ]);

            $validate = $this->request->validate();
            if (!$validate){
                $message = [
                    'status'  => '0',
                    'message' => "Đã có lỗi xảy ra, Vui lòng kiểm tra lại.",
                    'form'    => '#formUpdateProduct'
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
                'length'            => (int)$dataFields['length'],
                'width'             => (int)$dataFields['width'],
                'height'            => (int)$dataFields['height'],
                'product_slug'      => !empty($dataFields['slug']) ? $dataFields['slug'] : '',
                'description'       => !empty($dataFields['description']) ? $dataFields['description'] : "",
                'discontinued'      => ($dataFields['discontinued'] != '') ? 1 : 0,
                'status'            => ($dataFields['status'] != '') ? 1 : 0,
                'is_featured'       => ($dataFields['isFeatured'] != '') ? 1 : 0,
                'is_new'            => ($dataFields['isNew'] != '') ? 1 : 0
            ];

            $productById = $this->productModel->findOne(["id: $id"]);
            $proGallaryById = $this->productGalleryModel->findByField(["product_id: ". $id]);

            $uploadPath = "public/uploads/products/";
            $proGallary = [];
            $listImgUploadInGallery = [];
            $checkDelete = false;

            // tạo mảng trung gian lưu trữ ảnh trong gallery và ảnh đại diện
            $proGallary = $proGallaryById;
            array_push($proGallary, ["image" => $productById['image']]);

            // tạo mảng trung gian lưu trữ ảnh cũ được upload lên server
            foreach ($dataFields['file'] as $key => $fileImg) {
                if (strpos($fileImg, "/public/uploads/products/") != false) {
                    array_push($listImgUploadInGallery,str_replace(_WEB_ROOT."/public/uploads/products/", "", $fileImg));
                }
            }      
            
            // Kiểm tra người dùng có xóa ảnh cũ không
            if (count($proGallary) != count($listImgUploadInGallery)) {
                $checkDelete = true;
            }

            // Nếu người dùng xóa thì xử lý xóa ảnh trong gallery
            if ($checkDelete) {
                foreach ($proGallary as $key => $image) {
                    $pos = array_search($image['image'], $listImgUploadInGallery);
                    
                    if ($pos === false) {
                        if ($image['image'] == $productById['image']) {
                            if ($image['image'] != 'no-image.png') {
                                unlink("public/uploads/products/".$productById['image']);
                            }
                        } else {
                            $this->productGalleryModel->destroy($image['id']);
                            unlink("public/uploads/products/".$image['image']);
                            unset($proGallary[$key]);
                        }
                    }
                }
            }

            // xóa phần tử ảnh đại diện ra khỏi mảng chung gian
            array_pop($proGallary);

            // TH hình ảnh đại diện đã thay đổi
            if ($dataFields['file'][0] != _WEB_ROOT."/public/uploads/products/".$productById['image']) {
                // TH hình đại diện mới thuộc hình cũ trong gallery
                if (strpos($dataFields['file'][0], "/public/uploads/products/") != false) {
                    $data['image'] = $listImgUploadInGallery[0];

                    foreach ($proGallary as $key => $image) {
                        if ($data['image'] == $image['image']) {
                            $this->productGalleryModel->destroy($image['id']);
                            unset($proGallary[$key]);
                            break;
                        }
                    }
                } else { // TH hình đại diện được người dùng tải mới lên
                    $data['image'] = ProcessImage::uploadImageBySrc($dataFields['file'][0], $uploadPath);
                }
            } 

            // xóa phần tử ảnh đại diện ra khỏi mảng ban đầu
            unset($dataFields['file'][0]);
            
            // Xử lý upload ảnh mới vào gallery
            foreach ($dataFields['file'] as $key => $fileImg) {
                if (strpos($fileImg, "/public/uploads/products/") != false) {
                    $imgName = str_replace(_WEB_ROOT."/public/uploads/products/", "", $fileImg);

                    if ($imgName == $productById['image']) {
                        $dataGallery = [
                            'image'        => $productById['image'],
                            'position'     => $key,
                            'product_id'   => $id
                        ];

                        $this->productGalleryModel->create($dataGallery);
                        continue;
                    }

                    foreach ($proGallary as $image) {
                        if ($image['image'] == $imgName) {
                            if ($image['position'] != $key) {   
                                $dataGallery = ['position' => $key ];
                                $idGallery = $image['id'];

                                $this->productGalleryModel->edit($idGallery, $dataGallery);
                                break;
                            }
                        }
                    }
                } else {
                    $dataGallery = [
                        'image'      => ProcessImage::uploadImageBySrc($fileImg, $uploadPath),
                        'position'   => $key,
                        'product_id' => $id
                    ];

                    $this->productGalleryModel->create($dataGallery);
                }
            }  
            
            // chỉnh sửa sản phẩm
            $result = $this->productModel->edit($id, $data);

            $message = [
                "status"  => "1",
                'message' => "Cập nhật sản phẩm mới thành công!"
            ];
    
            exit(json_encode($message));
        }
    }

    public function status()
    {
        $dataFields = $this->request->getFields();
        $id = $dataFields['_id'];
        $status_value = $dataFields['status'];

        $data['status'] = $status_value;

        $this->productModel->edit($id,$data);

        $message = [
            "status"    => "1",
            'message'   => "Cập nhật trạng thái sản phẩm mới thành công!"
        ];

        exit(json_encode($message));
    }

    public function destroy()
    {
        $dataFields = $this->request->getFields();

        $ids = $dataFields['_id'];
        $data = [ 'deleted_at' => date('Y-m-d H:i:s')];

        $this->productModel->deleteAt($ids, $data);

        $message = [
            "status"    => "1",
            'message'   => "Xóa sản phẩm thành công!"
        ];
        exit(json_encode($message));
    }

    public function uploadExcel() {
        if ($this->request->isPost()){
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();
            
            $products = $dataFields['data'];

            $categories = $this->prodCateModel->findByField([]);

            $suppliers = $this->supplierModel->findByField([]);

            foreach ($products as $product) {
                if (!empty(($product['Nhà cung cấp']))) {
                    foreach ($suppliers as $supplier) {
                        if ($supplier['supplier_name'] == trim($product['Nhà cung cấp'])) {
                            $product['Nhà cung cấp'] = $supplier['id'];
                        }
                    }
                }

                if (!empty(($product['Loại']))) {
                    foreach ($categories as $category) {
                        if ($category['category_name'] == trim($product['Loại'])) {
                            $product['Loại'] = $category['id'];
                        }
                    }
                }

                if (!empty($product['Tình trạng'])) {
                    $product['Tình trạng'] = (trim($product['Tình trạng']) == 'còn hàng') ? 1 : 0;
                }

                if (!empty($product['Hàng nổi bật'])) {
                    $product['Hàng nổi bật'] = (trim($product['Hàng nổi bật']) == 'có') ? 1 : 0;
                }

                if (!empty($product['Hàng mới'])) {
                    $product['Hàng mới'] = (trim($product['Hàng mới']) == 'có') ? 1 : 0;
                }

                $data = [
                    'product_name'      => !empty($product['Sản phẩm']) ? $product['Sản phẩm'] : '',
                    'product_code'      => !empty($product['SKU']) ? $product['SKU'] : '',
                    'product_slug'      => !empty($product['Sản phẩm']) ? to_slug($product['Sản phẩm']) : '',
                    'image'             => !empty($product['image']) ? $product['image'] : 'no-image.png',
                    'list_price'        => !empty($product['Giá niêm yết']) ? $product['Giá niêm yết'] : null,
                    'supplier_id'       => !empty($product['Nhà cung cấp']) ? $product['Nhà cung cấp'] : null,
                    'category_id'       => !empty($product['Loại']) ? $product['Loại'] : null,
                    'weight'            => !empty($product['Nặng']) ? $product['Nặng'] : null,
                    'length'            => !empty($product['Dài']) ? (int)$product['Dài'] : null,
                    'width'             => !empty($product['Rộng']) ? (int)$product['Rộng'] : null,
                    'height'            => !empty($product['Cao']) ? (int)$product['Cao'] : null,
                    'description'       => !empty($product['Mô tả']) ? $product['Mô tả'] : "",
                    'discontinued'      => 1,
                    'status'            => 0,
                    'is_featured'       => !empty($product['Hàng nổi bật']) ? $product['Hàng nổi bật'] : 0,
                    'is_new'            => !empty($product['Hàng mới'])  ? $product['Hàng mới'] : 0
                ];

                // thêm sản phẩm mới
                $result = $this->productModel->create($data);
            }

            $message = [
                "status"    => "1",
                'message'   => "Thêm danh sách sản phẩm mới thành công!",
                'location'  => _WEB_ROOT.'/products',
                'time'      => 1000
            ];
    
            exit(json_encode($message));
        }
    }

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title'    => 'Sản phẩm',
            'meta_desc'     => 'Thêm sản phẩm, thông tin sản phẩm',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author'   => 'healthy power',
            'image_og'      => 'favicon.ico'
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