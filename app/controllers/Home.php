<?php
class Home extends Controller{
    public $productModel;
    public $productReviewModel;
    public $productDiscountModel;
    public $productCategoryModel;
    public $importModel;
    public $exportModel;
    public $request, $response;

    public function __construct(){
        $this->productModel = $this->model('ProductModel');
        $this->productReviewModel = $this->model('ProductReviewModel');
        $this->productDiscountModel = $this->model('ProductDiscountModel');
        $this->productCategoryModel = $this->model('ProductCategoryModel');
        $this->importModel = $this->model('ImportModel');
        $this->exportModel = $this->model('ExportModel');
        $this->request = new Request();
        $this->response = new Response();
    }

    public function index()
    {
        // truy vấn danh mục sản phẩm
        $random = mt_rand(0,3);
        $data['sub_content']['list_categories'] = $this->productCategoryModel->findByField([], '', "6:$random");

        // truy vấn những sản phẩm mới nhất
        $conditions = ["deleted_at: null", 'status: 1', 'is_new: 1'];

        $data['sub_content']['list_lastest'] = $this->productModel->findByField($conditions, 'created_at:desc');

        // truy vấn những sản phẩm nổi bật
        $conditions = ["deleted_at: null", 'status: 1', 'is_featured: 1'];
        $random = mt_rand(0,2);

        $data['sub_content']['list_featured'] = $this->productModel->findByField($conditions, '', "8:$random");

        // truy vấn những sản phẩm bán chạy nhất
        $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"), date("Y"));
        $startDate = date('Y-m-d H:i:s', $lastmonth);
        $endDate = date('Y-m-d H:i:s');

        $bestseller = $this->exportModel->bestseller($startDate, $endDate);

        $str_product_id = '';

        foreach ($bestseller as $product) {
            $str_product_id .= ','.$product['product_id'];
        }
        $str_product_id = substr($str_product_id, 1);

        $data['sub_content']['list_bestseller'] = $this->productModel->findByField(['id {in}' . $str_product_id]);

        // truy vấn danh sách đánh giá cho nhiều sản phẩm
        $str_product_id = [];

        foreach ($data['sub_content']['list_lastest'] as $related) {
            array_push($str_product_id, $related['id']);
        }

        foreach ($data['sub_content']['list_featured'] as $viewed) {
            array_push($str_product_id, $viewed['id']);
        } 

        foreach ($bestseller as $product) {
            array_push($str_product_id,$product['product_id']);
        }

        $str_product_id = implode(',',array_unique($str_product_id));

        $data['sub_content']['list_reviews'] = $this->productReviewModel->findByField(['product_id {in}' . $str_product_id]);

        // truy vấn danh sách giảm giá cho nhiều sản phẩm
        $conditions = ['product_id {in}' . $str_product_id, "start_date <= ".date('Y-m-d H:i:s'), "end_date >= ".date('Y-m-d H:i:s')];

        $data['sub_content']['list_discounts'] = $this->productDiscountModel->findByField($conditions);

        // Load
        $data['content'] = 'clients.index';

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = $this->loadTitle();

        $data['data_slider']['list_slider'] = $this->loadSlider();
        
        return $this->view('layouts.client_layout', $data);
    }

    public function simple () {
        $data['content'] = 'clients.index';

        $data['sub_content']['product'] = $this->productModel->all();
        // $data['sub_content']['...'] = ...;

        $data['dataMeta'] = $this->loadMetaTag();

        $data['page_title'] = $this->loadTitle();

        $data['data_slider']['list_slider'] = $this->loadSlider();

        // $data['libraryCSS']['list_css'] = $this->loadLibCSS();

        // $data['libraryJS']['list_js'] = $this->loadLibJS();

        // $data['data_js'] = [
        //     'load_image' => '...',
        //     'check_coupon' => 'checkcoupon',
        // ];

        return $this->view('layouts.client_layout', $data);
    }

    public function loadSlider()
    {
        return $list_slider = "Slider";
    }

    public function loadMetaTag()
    {
        return $dataMeta = [
            'meta_title' => 'Thực phẩm dinh dưỡng',
            'meta_desc' => 'Tăng cường thể chất',
            'meta_keywords' => 'heathy, whey, vitamin, oars',
            'url_canonical' => _WEB_ROOT,
            'meta_author' => 'Lộc sama',
            'image_og' => 'favicon.ico'
        ];  
    }

    public function loadTitle()
    {
        return $page_title = "Healthy Power - Thực phẩm bổ sung, thực phẩm dinh dưỡng dành cho mọi người";
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

    public function get_user(){
        $this->data['msg'] = Session::flash('msg');
        $this->view('users/add', $this->data);
    }

    // public function post_user(){
    //     $userId = 20;
    //     $request = new Request();
    //     if ($request->isPost()){
    //         /*Set rules*/
    //         $request->rules([
    //             'fullname' => 'required|min:5|max:30',
    //             'email' => 'required|email|min:6|unique:users:email',
    //             'password' => 'required|min:3',
    //             'confirm_password' => 'required|match:password',
    //             'age' => 'required|callback_check_age'
    //         ]);

    //         //Set message
    //         $request->message([
    //             'fullname.required' => 'Họ tên không được để trống',
    //             'fullname.min' => 'Họ tên phải lớn hơn 5 ký tự',
    //             'fullname.max' => 'Họ tên phải nhỏ hơn 30 ký tự',
    //             'email.required' => 'Email không được để trống',
    //             'email.email' => 'Định dạng email không hợp lệ',
    //             'email.min' => 'Email phải lớn hơn 6 ký tự',
    //             'email.unique' => 'Email đã tồn tại trong hệ thống',
    //             'password.required' => 'Mật khẩu không được để trống',
    //             'password.min' => 'Mật khẩu phải lớn hơn 3 ký tự',
    //             'confirm_password.required' => 'Nhập lại mật khẩu không được để trống',
    //             'confirm_password.match' => 'Mật khẩu nhập lại không khớp',
    //             'age.required' => 'Tuổi không được để trống',
    //             'age.callback_check_age' => 'Tuổi không được nhỏ hơn 20'
    //         ]);

    //         $validate = $request->validate();
    //         if (!$validate){
    //             Session::flash('msg', 'Đã có lỗi xảy ra. Vui lòng kiểm tra lại');
    //         }

    //     }

    //     $response = new Response();
    //     $response->redirect('home/get_user');
    // }

    public function check_age($age){

        if ($age>=20) return true;
        return false;
    }

    public function list()
    {
        $data['content'] = 'clients.news.list';

        $data['sub_content']['new_title'] = 'Loc';

        $data['sub_content']['new_content'] = 'new_content';

        $data['sub_content']['new_author'] = 'new_author';

        return $this->view('layouts.client_layout', $data);
    }
}