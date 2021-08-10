<?php 
	
	class Dashboard extends Controller
	{
	    public $province;
	    public $request, $response;
		public $customerModel;
		public $orderModel;

	    public function __construct(){
	        $this->request = new Request();
	        $this->response = new Response();
			$this->customerModel = $this->model('CustomerModel');
			$this->orderModel = $this->model('OrderModel');
	    }

	    public function index()
	    {
	    	$data['content'] = 'admins.dashboard';
			$conditionForOrder = ['order_date <=>'. date('Y-m'), 'order_status :'. 3];
			$orderInMonth = $this->orderModel->findByField($conditionForOrder);
			$data['sub_content']['total_order'] = count($orderInMonth);
			$customerHasOrder = $this->orderModel->findHasGroupBy('customer_id');
			$data['sub_content']['total_customer'] = count($customerHasOrder);
			$total = 0;
			foreach($orderInMonth as $value){
				$detailById = $this->orderModel->getOrderDetailById($value['id']);
				$total += OrderHelper::totalPrice($detailById, $value['shipping_fee'])[0];
				
			}
			$data['page_title'] = 'Trang chủ';
			$data['sub_content']['total_price'] = $total;
			$data['sub_content']['customer'] = $this->customerModel->all();
			$data['data_js'] = [
				'js' => 'admins.js_dash'
			];

    		return $this->view('layouts.admin_layout', $data);
	    }

	    public function loadMetaTag()
	    {
	    	return $dataMeta = [
	    		'meta_title' => 'tên trang',
	    		'meta_desc' => 'mô tả từng trang',
	    		'meta_keywords' => 'keywords từng trang',
	    		'url_canonical' => 'đường dẫn chính của trang',
	    		'meta_author' => 'tác giả',
	    		'image_og' => 'favicon của trang'
	    	];	
	    }

	    public function loadTitle()
	    {
	    	return $page_title = "Trang gì đó";
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
	
 ?>