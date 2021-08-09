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
       
          $.ajax({
            url: '{{_WEB_ROOT."/destroy-blog-comment"}}',
            method: 'GET',
            data: {
              id:id
            },
            success:function(data){
                $('#prod_category_' + id).remove();
                swal("Thành công!", "Bạn đã xóa bình luận!", "success");
            }
          });

        } else {
          swal("Đóng!", "Không xóa bình luận!", "warning");
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

      var formdata = new FormData();
      
      $.ajax({
        url: `{{_WEB_ROOT}}/status-blog-comment`,
        method: 'GET',
        data: {
          id:id,
          status_value:status_value
        },
        success:function (data) {
          
        }
      }); 
    })
  })
</script>  