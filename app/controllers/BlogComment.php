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

		public function load_comment()
		{
			$dataField = $this->request->getFields();
			$blog_id = $dataField['blog_id'];

			$list_comment = $this->commentModel->getComment($blog_id);

			$output = '';

			foreach ($list_comment as $key => $comment) {
				if(!empty($comment['avatar'])){
					$avt_user = $comment['avatar'];
				}else{
					$avt_user = "avt/avt.png";
				}
				$output .= '
					<li class="comment">
                        <div class="comment-wrapper" id="post-'.$comment['id_bl'].'">
                          <div class="comment-author vcard"> 
                          	<p class="gravatar">
	                          	<a href="#">
	                          		<img width="60" height="60" alt="avatar" src="'. _WEB_ROOT .'/public/uploads/customer/'. $avt_user .'">
	                          	</a>
                          	</p>
                          	<span class="author">'. $comment['fullname'] .'</span>
                          </div>
                          <!--comment-author vcard-->
                          <div class="comment-meta">
                            <time datetime="" class="entry-date">
                            	'. $comment['comment_day'] .'
                            </time>
                          </div>
                          <!--comment-meta-->
                          <div class="comment-body"> 
                          	'. $comment['content'] .' 
                          </div>
                        </div>
                    </li>
                    <!--comment-->
				';
			}

			echo $output;
		}

		public function send_comment()
		{
			$dataField = $this->request->getFields();

			$data = [
				'content' => $dataField['comment_content'],
				'blog_id' => $dataField['blog_id'],
				'customer_id' => $dataField['cus_id'],
				'created_at' => date("Y-m-d h:i:s")
			];

			$this->commentModel->create($data);
		}
	}
	
 ?>