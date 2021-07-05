<script type="text/javascript">
  $(document).ready(function(){
    $('.delete_item').click(function () {
      var id = $(this).data('delid');
      var _token = $('meta[name=csrf-token]').attr("content");
      swal({
        title: "Xóa",
        text: "Bạn có chắc chắn muốn xóa không?",
        type: "error",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Xóa",
        cancelButtonText: "Không",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm){
        if (isConfirm) {          
          console.log(id);
        
        $.ajax({
          url: '{{_WEB_ROOT."/vouchers-destroy"}}',
          method: 'POST',
          data: {
            id:id,
            _token:_token
          },
          success:function(data){
              $('#row_tr_' + id).remove();
              swal("Thành công!", "Bạn đã xóa mã khuyến mãi!", "success");
          }
        });

        } else {
          swal("Đóng!", "Không xóa mã khuyến mãi!", "warning");
        }
      });      
    })
  })
</script>