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
          $('.js-add-field .js-select2-custom-dynamic').each(function() {
            var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
          });
        }
      }).init();
    });
    
    const formUpdateProduct = document.querySelector('#formUpdateProduct')
    const id = formUpdateProduct.getAttribute('data-id')
    const _token = $('meta[name=csrf-token]').attr("content")
    const url = "{{ _WEB_ROOT }}/products-update/proid-" + id
    catchEvent('card-image-wrapper')

    var productNameInput = document.querySelector('#title')
    productNameInput.addEventListener('change', () => {
      ChangeToSlug()
    })

    // Mong muốn của chúng ta
    Validator({
      form: '#formUpdateProduct',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#title', 'Vui lòng nhập tên sản phẩm'),
        Validator.isRequired('#weightLabel', 'Vui lòng nhập khối lượng sản phẩm'),
        Validator.isRequired('#priceNameLabel', 'Vui lòng nhập giá sản phẩm'),
        Validator.isRequired('#supplierLabel', 'Vui lòng nhập nhà cung cấp sản phẩm'),
        Validator.isRequired('#categoryLabel', 'Vui lòng nhập loại sản phẩm'),
        Validator.isRequired('#lengthLabel', 'Vui lòng nhập chiều cao sản phẩm'),
        Validator.isRequired('#widthLabel', 'Vui lòng nhập chiều rộng sản phẩm'),
        Validator.isRequired('#heightLabel', 'Vui lòng nhập chiều cao sản phẩm'),
      ],
      onSubmit: function(data) {
        arr = data.productPrice.split('.')
        data.productPrice = Number(arr.join(''))
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

    CKEDITOR.config.toolbarGroups = [
         
         { name: 'document',    groups: [ 'mode', 'document' ] },          
      
         { name: 'my_clipboard',   groups: [ 'clipboard', 'undo' ] },
         '/',
         { name: 'styles' },
          
         { name: 'links' }
     ];
      
     CKEDITOR.config.height = '300px';
});
</script>