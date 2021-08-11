<?php 
	
	class BlogComment extends Controller
	{
	    public $commentModel;
	    public $request, $response;

		public function __construct()
		{
			$this->commentModel = $this->model('BlogCommentModel');
	    	$this->request = new Request();
	    	$this->response = new Response();
		}

		public function manage_review()
		{
			$data['sub_content']['list_blogs_comment'] = $this->commentModel->getBlogs();

			$data['page_title'] = 'Bình luận về bài viết';

			$data['content'] = 'admins.blog_comments.index';
			return $this->view('layouts.admin_layout', $data);
		}

		public function view_comment($blog_id)
		{
			$data['sub_content']['title'] = "Danh sách bình luận theo bài viết";
			$data['sub_content']['subtitle'] = "Chi tiết bình luận của bài viết";
			$data['sub_content']['list_comment'] = $this->commentModel->getAllComment($blog_id);
			$data['content'] = 'admins.blog_comments.comment_blog';

			$data['data_js'] = [
	            'ajax' => 'admins.blog_comments.js'
	        ];

			return $this->view('layouts.admin_layout', $data);
		}

		public function status_comment()
		{
			$dataField = $this->request->getFields();
			$comment_id = $dataField['id'];

			$data['comment_status'] = $dataField['status_value'];

			$this->commentModel->edit($comment_id, $data);

			echo "done";
		}

		public function destroy_comment()
		{
			$dataField = $this->request->getFields();
			$comment_id = $dataField['id'];

			$this->commentModel->destroy($comment_id);
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
			$this->AuthLogin();
			$this->data['sub_content']['title'] = "Danh sách trả lời bình luận";
			$this->data['sub_content']['subtitle'] = "Chi tiết bình luận";
			$this->data['sub_content']['list_comment'] = $this->reviewModel->childComment($parent_id);
			$this->data['content'] = 'admins.view_comment';
			return $this->view('layouts.admin_layout', $this->data);
		}
	}
	
 ?>