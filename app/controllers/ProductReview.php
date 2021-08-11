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

		public function load_comment()
		{
			$dataField = $this->request->getFields();
			$prod_id = $dataField['prod_id'];

			$list_comment = $this->reviewModel->getComment($prod_id);

			$output = '';

			foreach ($list_comment as $key => $comment) {
				if(!empty($comment['avatar'])){
					$avt_user = $comment['avatar'];
				}else{
					$avt_user = "avt/avt.png";
				}
				$output .= '
					<div class="col-sm-1 avatar">
						<img src="'. _WEB_ROOT .'/public/uploads/customer/'. $avt_user .'" alt="Ảnh đại diện" class = "img img-responsive img-thumbnail" style = "border-radius: 50%">
					</div>
					<div class="col-sm-10 load_comment">
						<p style="color: orange;">
							'. $comment['fullname'] .'
						</p>
						<p style="color: gray;">
							'. $comment['comment_day'] .'
						</p>
						<p class = "load_content">
							'. $comment['comment'] .'
						</p>
					</div>
					<div class = "clearfix"></div>
				';

				$rep_comments = $this->reviewModel->getRepComment($comment['id_bl']);

				if(!empty($rep_comments)){
					foreach ($rep_comments as $key => $rep) {
						if(!empty($rep['avatar'])){
							$avt_rep = $rep['avatar'];
						}else{
							$avt_rep = "avt/businessman.png";
						}
						$output .= '
							<div class="col-sm-10 col-sm-push-1">
								<div class = "row">
									<div class="col-sm-1 avatar">
										<img src="'. _WEB_ROOT .'/public/uploads/customer/'. $avt_rep .'" alt="Ảnh đại diện" class = "img img-responsive img-thumbnail" style = "border-radius: 50%; width: 90%">
									</div>
									<div class="col-sm-10 load_comment">
										<p style="color: orange;">
											'. $rep['fullname'] .'
										</p>
										<p style="color: gray;">
											'. $rep['comment_day'] .'
										</p>
										<p class = "load_content">
											'. $rep['comment'] .'
										</p>
									</div>
								</div>
							</div>
							<div class = "clearfix"></div>
						';
					}
				}
			}

			echo $output;
		}

		public function send_comment()
		{
			$dataField = $this->request->getFields();

			$data = [
				'comment' => $dataField['comment_content'],
				'product_id' => $dataField['prod_id'],
				'customer_id' => $dataField['cus_id'],
				'created_at' => date("Y-m-d h:i:s")
			];

			$this->reviewModel->create($data);
		}

		// rating
		public function insert_rating()
		{
			$dataField = $this->request->getFields();

			$data = [
				'product_id' => $dataField['prod_id'],
				'rating' => $dataField['index'],
				'customer_id' => $dataField['cus_id'],
				'created_at' => date("Y-m-d h:i:s")
			];

			$this->reviewModel->create($data);

			echo "done";
		}
	}
	
 ?>