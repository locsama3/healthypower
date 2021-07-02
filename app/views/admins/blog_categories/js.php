<script type="text/javascript">
  $(document).ready(function(){
    $('.delete_item').click(function () {
      var id = $(this).data('cateid');
      var _token = $('meta[name=csrf-token]').attr("content");

      $.ajax({
          url: '{{_WEB_ROOT."/blogs-category-destroy"}}',
          method: 'POST',
          data: {
            id:id,
            _token:_token
          },
          success:function(data){
              $('#blog_category_' + id).remove();
              swal("Thành công!", "Bạn đã xóa danh mục bài viết!", "success");
          }
      });
    })
  })
</script>