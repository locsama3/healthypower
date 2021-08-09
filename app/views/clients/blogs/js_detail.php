<script type="text/javascript">
	$(document).ready(function(){
		const _token = $('meta[name=csrf-token]').attr("content");
		
		function load_comment() {
			var blog_id = $('.comment-content').data('blog_id');
			$.ajax({
				url: '{{_WEB_ROOT}}/load-blog-comment',
				method:'GET',
				data:{
					_token:_token,
					blog_id:blog_id
				},
				success:function(data){
					$('.commentlist').html(data);
				}
			})
		}

		load_comment();

		$('.send-comment').click(function(){
			var blog_id = $('.comment-content').data('blog_id');
			var cus_id = $('.user_id').val();
			var comment_content = $('#blog_comment').val();

			if(cus_id == ''){
				swal("", "Bạn phải đăng nhập để bình luận", "warning");
			}else{
				$.ajax({
					url: '{{ _WEB_ROOT }}/send-blog-comment',
					method:'POST',
					data:{
						_token:_token,
						blog_id:blog_id,
						cus_id:cus_id,
						comment_content:comment_content
					},
					success:function(data){
						load_comment();
						var comment_content = $('#blog_comment').val('');					
					}
				})
			}
		})
	})
</script>