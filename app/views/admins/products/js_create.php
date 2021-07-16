<script>
$(document).on('ready', function() {
    // INITIALIZATION OF FANCYBOX
    // =======================================================
    $('.js-fancybox').each(function() {
      var fancybox = $.HSCore.components.HSFancyBox.init($(this));
    })

    // INITIALIZATION OF TAGIFY
    // =======================================================
    $('.js-tagify').each(function() {
      var tagify = $.HSCore.components.HSTagify.init($(this));
    });

    // INITIALIZATION OF QUANTITY COUNTER
    // =======================================================
    $('.js-quantity-counter').each(function() {
      var quantityCounter = new HSQuantityCounter($(this)).init();
    });


    // INITIALIZATION OF ADD INPUT FILED
    // =======================================================
    $('.js-add-field').each(function() {
      new HSAddField($(this), {
        addedField: function() {
          $('.js-add-field .js-quantity-counter-dynamic').each(function() {
            var quantityCounter = new HSQuantityCounter($(this)).init();
          });
        }
      }).init();
    });
    
    const formInsertProduct = document.querySelector('#formInsertProduct')
    const _token = $('meta[name=csrf-token]').attr("content")
    const url = "{{ _WEB_ROOT }}/products-store"
    const urlListProduct = "{{ _WEB_ROOT }}/products"

    // Mong muốn của chúng ta
    Validator({
      form: '#formInsertProduct',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#productNameLabel', 'Vui lòng nhập tên sản phẩm'),
        Validator.isRequired('#weightLabel', 'Vui lòng nhập khối lượng sản phẩm'),
        Validator.isRequired('#priceNameLabel', 'Vui lòng nhập giá sản phẩm'),
        Validator.isRequired('#supplierLabel', 'Vui lòng nhập nhà cung cấp sản phẩm'),
        Validator.isRequired('#categoryLabel', 'Vui lòng nhập loại sản phẩm'),
        Validator.isRequired('#fileElem', 'Vui lòng thêm tối thiểu 1 hình ảnh đại diện'),
      ],
      onSubmit: function(data) {
        formData = handleDataUpload(data, _token, "card-img-top");
        formData.description = CKEDITOR.instances['ckeditor1'].getData();
        console.log(formData);

        /**
         * không dùng fetch ở đây vì fetch bắt buộc dùng FormData hoặc Json
         * Như vậy thì sẽ vi phạm _token
         * Cần nghiên cứu sau về xử lý gửi và kiểm tra json
         * 
         */
        $.ajax({
          method: 'POST',
          url: url,
          data: formData,
          success:function(response){
            let result = JSON.parse(response);
            if (result.status == "1") {
              swal("Thành công!", result.message, "success")
              redirect(urlListProduct, 1000)
            } else {
              swal("Thất bại!", result.message, "error")
                if (result.error) {
                    displayError(result.form, result.error)
                }
            }
          }
        });
      }
    });


});
</script>