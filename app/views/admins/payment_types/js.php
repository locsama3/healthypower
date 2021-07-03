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
          url: '{{_WEB_ROOT."/payment-types-destroy"}}',
          method: 'POST',
          data: {
            id:id,
            _token:_token
          },
          success:function(data){
              $('#row_tr_' + id).remove();
              swal("Thành công!", "Bạn đã xóa phương thức này!", "success");
          }
        });

        } else {
          swal("Đóng!", "Không xóa phương thức!", "warning");
        }
      });      
    })

    $('.stockStatus').change(function () {
      var id = $(this).val();
      var _token = $('meta[name=csrf-token]').attr("content");

      var status = $(this).prop('checked');

      if(status){
        var status_value = 1;
      }else{
        var status_value = 0;
      }

      $.ajax({
        url: '{{_WEB_ROOT."/payment-types-status"}}',
        method: 'POST',
        data: {
          id:id,
          _token:_token,
          status_value:status_value
        },
        success:function(data){

        }
      });
    })
  })
</script>