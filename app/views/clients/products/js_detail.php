<script type="text/javascript">
	$(document).ready(function() {
		const _token = $('meta[name=csrf-token]').attr("content");

		function load_comment() {
			var prod_id = $('.style_comment').data('prod_id');
			$.ajax({
				url: '{{_WEB_ROOT}}/load-comment',
				method: 'POST',
				data: {
					_token: _token,
					prod_id: prod_id
				},
				success: function(data) {
					$('.style_comment').html(data);
				}
			})
		}

		load_comment();

		$('.send-comment').click(function() {
			var prod_id = $('.style_comment').data('prod_id');
			var cus_id = $('.user_id').val();
			var comment_content = $('.comment_content').val();

			if (cus_id == '') {
				swal("", "Bạn phải đăng nhập để bình luận", "warning");
			} else {
				$.ajax({
					url: '{{ _WEB_ROOT }}/send-comment',
					method: 'POST',
					data: {
						_token: _token,
						prod_id: prod_id,
						cus_id: cus_id,
						comment_content: comment_content
					},
					success: function(data) {
						load_comment();
						var comment_content = $('.comment_content').val('');
					}
				})
			}
		})

		function remove_background(product_id) {
			for (var count = 1; count <= 5; count++) {
				$('#' + product_id + '-' + count).css('color', '#ccc');
			}
		}

		//hover chuột đánh giá sao
		$(document).on('mouseenter', '.rating', function() {
			var index = $(this).data('index');
			var prod_id = $(this).data('prod_id');

			remove_background(prod_id);

			for (var count = 1; count <= index; count++) {
				$('#' + prod_id + '-' + count).css('color', '#ffcc00');
			}
		});

		//Nhả chuột ko đánh giá
		$(document).on('mouseleave', '.rating', function() {
			var index = $(this).data('index');
			var prod_id = $(this).data('prod_id');
			var rating = $(this).data('rating');

			remove_background(prod_id);

			for (var count = 1; count <= rating; count++) {
				$('#' + prod_id + '-' + count).css('color', '#ffcc00');
			}
		});

		// click đánh giá sao
		$(document).on('click', '.rating', function() {
			var index = $(this).data('index');
			var prod_id = $(this).data('prod_id');
			var cus_id = $('.user_id').val();

			$.ajax({
				url: '<?php echo _WEB_ROOT; ?>/insert-rating',
				method: 'POST',
				dataType: 'text',
				data: {
					_token: _token,
					index: index,
					prod_id: prod_id,
					cus_id: cus_id
				},
				success: function(data) {
					if (data.trim() == "done") {
						swal("Cảm ơn!", "Bạn đã đánh giá " + index + " trên 5 sao", "success");
					} else {
						swal("", "Lỗi đánh giá", "error");
					}
				}
			})
		})
		$(document).on('click', '#submit-cart', function() {
			var qty = $('#qty').val();
			var id = $('#id_product').val();
			var url = "{{_WEB_ROOT.'/them-gio-hang/id-'}}" + id;
			const form = new FormData();
			form.append('id', id);
			form.append('qty', qty);
			form.append('_token', _token);
			sendData(url, form);

		})
	})

	function addToCart(id) {
		const _token = $('meta[name=csrf-token]').attr("content");
		console.log(1);
		var url = "{{_WEB_ROOT.'/them-gio-hang/id-'}}" + id;
		qty = 1;
		const form = new FormData();
		form.append('id', id);
		form.append('qty', qty);
		form.append('_token', _token);
		sendData(url, form);
	}
</script>