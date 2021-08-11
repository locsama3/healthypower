<?php 
	
	class ProductReview extends Controller
	{
	    public $reviewModel;
	    public $request, $response;

		public function __construct()
		{
			$this->reviewModel = $this->model('ProductReviewModel');
	    	$this->request = new Request();
	    	$this->response = new Response();
		}

		public function manage_review()
		{
			$data['sub_content']['list_product_review'] = $this->reviewModel->getProducts();

			$data['page_title'] = 'Bình luận và đánh giá sản phẩm';

			$data['content'] = 'admins.reviews.index';
			return $this->view('layouts.admin_layout', $data);
		}

		public function view_comment($prod_id)
		{
			$data['sub_content']['title'] = "Danh sách bình luận theo sản phẩm";
			$data['sub_content']['subtitle'] = "Chi tiết bình luận của sản phẩm";
			$data['sub_content']['list_comment'] = $this->reviewModel->getAllComment($prod_id);
			$data['content'] = 'admins.reviews.reviews_product';

			$data['data_js'] = [
	            'ajax' => 'admins.reviews.js'
	        ];

			return $this->view('layouts.admin_layout', $data);
		}

		public function status_comment()
		{
			$dataField = $this->request->getFields();
			$comment_id = $dataField['id'];

			$data['status'] = $dataField['status_value'];

			$this->reviewModel->edit($comment_id, $data);

			echo "done";
		}

		public function destroy_comment()
		{
			$dataField = $this->request->getFields();
			$comment_id = $dataField['id'];

			$this->reviewModel->destroy($comment_id);
		}

		public function reply_comment()
		{
			$dataField = $this->request->getFields();
			$data = [
				'content' => $dataField['content'],
				'product_id' => $dataField['prod_id'],
				'cus_id' => 4,
				'parent_id' => $dataField['comment_id'],
				'create_at' => date("Y-m-d h:i:s")
			];

			$this->reviewModel->insertComment($data);
		}

		public function child_comment($parent_id)
		{
			$this->data['sub_content']['title'] = "Danh sách trả lời bình luận";
			$this->data['sub_content']['subtitle'] = "Chi tiết bình luận";
			$this->data['sub_content']['list_comment'] = $this->reviewModel->childComment($parent_id);
			$this->data['content'] = 'admins.view_comment';
			return $this->view('layouts.admin_layout', $this->data);
		}
	}
	
 ?>