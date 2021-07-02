<script type="text/javascript">
  $(document).ready(function(){
    $('.delete_item').click(function () {
      var id = $(this).data('warehouseid');
      var _token = $('meta[name=csrf-token]').attr("content");

      $.ajax({
          url: '{{_WEB_ROOT."/warehouse-destroy"}}',
          method: 'POST',
          data: {
            id:id,
            _token:_token
          },
          success:function(data){
              $('#warehouse_' + id).remove();
              swal("Thành công!", "Bạn đã xóa kho hàng!", "success");
          }
      });
    })
  })
</script>