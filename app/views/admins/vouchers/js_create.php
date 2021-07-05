<script type="text/javascript">
	$(document).on('ready', function () {
		$('#type').change(function () {
			var type = $('#type').val();

			if(type == 0){
				$('#discount_amount').attr('max','99');
			}else if(type == 1){
				$('#discount_amount').attr('max','1000000000');
			}
		})
	})
</script>