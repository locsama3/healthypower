<?php
class Product extends Controller{

    public $productModel;
    public $prodCateModel;
    public $supplierModel;
    public $productGalleryModel;
    public $productReviewModel;
    public $productDiscountModel;
    public $productViewModel;
    public $importModel;
    public $exportModel;
    public $request, $response;

    public function __construct(){
        $this->productModel = $this->model('ProductModel');
        $this->prodCateModel = $this->model('ProductCategoryModel');
        $this->supplierModel = $this->model('SupplierModel');
        $this->productGalleryModel = $this->model('ProductGalleryModel');
        $this->productReviewModel = $this->model('ProductReviewModel');
        $this->productDiscountModel = $this->model('ProductDiscountModel');
        $this->productViewModel = $this->model('ProductViewModel');
        $this->importModel = $this->model('ImportModel');
        $this->exportModel = $this->model('ExportModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function list() {
        $conditions = ["deleted_at: null", 'status: 1'];

        if ($this->request->isPost()) {
            // Lấy dữ liệu từ form
            $dataFields = $this->request->getFields();

            $validate = $this->request->validate();

            if (!empty($validate)) {
                $sessionKey = Session::isInvalid();
                $old = Session::flash($sessionKey . '_old');
                Session::flash('old', $old);
            }

            if (!empty($dataFields['category_id'])) {
                $cateId = $dataFields['category_id'];
                $cateCondition = 'category_id : '.$cateId;
                array_push($conditions, $cateCondition);
            }
            
            if (!empty($dataFields['search'])) {
                $search = $dataFields['search'];
                $searchCondition = 'product_name <=> '.$search;
                array_push($conditions, $searchCondition);
            }
        }

        if ($this->request->isGet()) {
            $dataFields = $this->request->getFields();

            if (!empty($dataFields['danhmuc'])) {
                $cateId = $dataFields['danhmuc'];
                $cateCondition = 'category_id : '.$cateId;
                array_push($conditions, $cateCondition);
            }
        }

        $data['content'] = 'clients.products.list';

        $data['sub_content']['list_reviews'] = $this->productReviewModel->findByField([]);

        $data['sub_content']['list_discounts'] = $this->productDiscountModel->findByField([]);

        $data['sub_content']['list_suppliers'] = $this->supplierModel->findByField([]);

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = "Danh sách sản phẩm";

        $data['data_js'] = [
            'ajax' => 'clients.products.js_list'
        ];

        // xử lý phân trang

        $current_page = 1;

        if ($this->request->isGet()) {
            $dataFields = $this->request->getFields();

            if (!empty($dataFields['trang'])) {
                $current_page = $dataFields['trang'];
            }
        }

        $getProductTotal = $this->productModel->findByField($conditions); // Lấy tổng số sản phẩm.

        $productTotal = count($getProductTotal);

        $productOnePage = 15; // Số bài viết hiển thị trong 1 trang.

        // Khi đã có tổng số bài viết và số bài viết trong một trang ta có thể tính ra được tổng số trang
        $pageTotal = ceil($productTotal / $productOnePage);

        $offset = ($current_page - 1) * $productOnePage;

        $sqlLimit = $productOnePage . ':' . $offset;

        $data['sub_content']['list_products'] = $this->productModel->findByField($conditions, '', $sqlLimit);
          
        $data['sub_content']['current_page'] = $current_page;

        $data['sub_content']['pageTotal'] = $pageTotal;
        $data['data_js'] = [
            'js' => 'clients.products.js_detail'
        ];
        $data['libraryJS']['list_js'] = [
            'functions' => 'functions.js'
        ];

        return $this->view('layouts.client_layout', $data);
    }

    public function detail($id) {
        // truy vấn sản phẩm chính
        $data['sub_content']['product'] = $this->productModel->findOne(["id : $id", "deleted_at: null"]);

        $info_import = $this->importModel->importInfo($id);
        $info_export = $this->exportModel->exportInfo($id);

        $qty_import = 0;
        if (!empty($info_import)) {
            foreach ($info_import as $import) {
                $qty_import += $import['quantity']; 
            }
        }

        $qty_export = 0;
        if (!empty($info_export)) {
            foreach ($info_export as $export) {
                $qty_export += $export['quantity']; 
            }
        }

        $quantity = $qty_import - $qty_export;
        $data['sub_content']['product']['quantity'] = $quantity;

        // truy vấn  sản phẩm liên quan
        $cateId = $data['sub_content']['product']['category_id'];
        $conditions = [ 'category_id: '. $cateId, "deleted_at: null", 'status: 1', 'discontinued: 1', "id != $id" ];
        $random = mt_rand(0, 2);

        $data['sub_content']['list_related_products'] = $this->productModel->findByField($conditions, '', "8: $random");

        $customerModel = Load::model('CustomerModel');
        // truy vấn sản phẩm người dùng đã xem
        if (Session::data('user_login') == true) {
            $user = $customerModel->findOne(["email: ".Session::data('user_data')['user_email']]);
    
            $list_viewed_id = $this->productViewModel->findByField(["customer_id:". $user['id'], 'product_id != '.$id], 'viewed_at:desc');
            $str_product_id = '';
            if(!empty($list_viewed_id)) {
                foreach ($list_viewed_id as $viewed) {
                    $str_product_id .= ','.$viewed['product_id'];
                }

                $str_product_id = substr($str_product_id, 1);
                $conditions = [ 'id {in}' . $str_product_id, "deleted_at: null" ];
        
                $list_viewed_products = $this->productModel->findByField($conditions);
                $data['sub_content']['list_viewed_products'] = [];
    
                foreach ($list_viewed_id as $viewed) {
                    foreach ($list_viewed_products as $product) {
                        if ($viewed['product_id'] == $product['id']) {
                            array_push($data['sub_content']['list_viewed_products'], $product);
                        }
                    }
                }
            }
        }

        // truy vấn hình ảnh gallary
        $data['sub_content']['list_gallary'] = $this->productGalleryModel->findByField(['product_id :' . $id]);

        // truy vấn danh sách reviews cho sản phẩm chính
        $data['sub_content']['reviews'] = $this->productReviewModel->findByField(['product_id : '.$id], 'created_at:desc');

        if (!empty($data['sub_content']['reviews'])) {
            $str_customer_id = '';
            foreach ($data['sub_content']['reviews'] as $review) {
                $str_customer_id .= ','.$review['customer_id'];
            }
            $str_customer_id = substr($str_customer_id, 1);

            $data['sub_content']['customers'] = $customerModel->findByField(['id {in}'.$str_customer_id]);
        }

        // truy vấn danh sách đánh giá cho nhiều sản phẩm
        $str_product_id = $id;

        foreach ($data['sub_content']['list_related_products'] as $related) {
            $str_product_id .= ','.$related['id'];
        }

        if (Session::data('user_login') == true) {
            if (!empty($list_viewed_id)) {
                foreach ($data['sub_content']['list_viewed_products'] as $viewed) {
                    $str_product_id .= ','.$viewed['id'];
                } 
            }
        }

        $data['sub_content']['list_reviews'] = $this->productReviewModel->findByField(['product_id {in}' . $str_product_id]);

        // truy vấn danh sách giảm giá cho nhiều sản phẩm
        $conditions = ['product_id {in}' . $str_product_id, "start_date <= ".date('Y-m-d H:i:s'), "end_date >= ".date('Y-m-d H:i:s')];
        $data['sub_content']['list_discounts'] = $this->productDiscountModel->findByField($conditions);


        // xử lý lưu vào bảng shop_product_viewed
        if (Session::data('user_login') == true) {
            $find_old_viewed = $this->productViewModel->findOne(["product_id : $id"]);

            if (!empty($find_old_viewed)) {
                $deleteView = $this->productViewModel->destroy($find_old_viewed['id']);
            }

            $count_viewed = $this->productViewModel->countIf(['customer_id:'.$user['id']]);

            if ($count_viewed == 10) {
                $last_viewed = $this->productViewModel->findOne(['customer_id: '.$user['id']]);
                $deleteLastView = $this->productViewModel->destroy($last_viewed['id']);
            }

            $dataView = [
                'product_id'   => $id,
                'customer_id'  => $user['id'],
            ];

            $insertView = $this->productViewModel->create($dataView);
        }

        // load
        $data['content'] = 'clients.products.detail';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = $data['sub_content']['product']['product_name'];

        $data['data_js'] = [
            'js' => 'clients.products.js_detail'
        ];
        $data['libraryJS']['list_js'] = [
            'functions' => 'functions.js'
        ];


        //load rating
        $rating_result = $this->productReviewModel->getAvgRating($id);
        
        $rating = 0;

        foreach ($rating_result as $key => $value) {
            $rating = round($value['danhgia']);
        }
        
        $data['sub_content']['product_rating'] = $rating;

        return $this->view('layouts.client_layout', $data);
    }

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title'    => 'Sản phẩm',
            'meta_desc'     => 'chi tiết sản phẩm, thông tin sản phẩm',
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