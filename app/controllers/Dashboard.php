<?php 
	
	class Dashboard extends Controller
	{
	    public $province;
	    public $request, $response;

	    public function __construct(){
	        $request = new Request();
	        $response = new Response();
	    }

	    public function index()
	    {
	    	$data['content'] = 'admins.dashboard';

	    	/* 
	    	$data['sub_content']['...'] = ...;

	    	$data['dataMeta'] = $this->loadMetaTag();

	    	$data['page_title'] = $this->loadTitle();

	    	$data['libraryCSS']['list_css'] = $this->loadLibCSS();

	    	$data['libraryJS']['list_js'] = $this->loadLibJS();

	    	$data['data_js'] = [
				'load_image' => '...',
				'check_coupon' => 'checkcoupon',
	    	];

	    	*/

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