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

    // handle upload file image
    let dropArea = document.getElementById('drop-area')
    let inputFile = document.querySelector('#fileElem')

    ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
      dropArea.addEventListener(eventName, preventDefaults, false)
    })

    function preventDefaults(e) {
      e.preventDefault()
      e.stopPropagation()
    }

    ;['dragenter', 'dragover'].forEach(eventName => {
      dropArea.addEventListener(eventName, highlight, false)
    })

    ;['dragleave', 'drop'].forEach(eventName => {
      dropArea.addEventListener(eventName, unhighlight, false)
    })

    function highlight(e) {
      dropArea.classList.add('highlight')
    }

    function unhighlight(e) {
      dropArea.classList.remove('highlight')
    }

    inputFile.addEventListener('change', () => {
      handleFiles(inputFile.files)
    })

    dropArea.addEventListener('drop', handleDrop, false)

    function handleDrop(e) {
      let dt = e.dataTransfer
      let files = dt.files

      handleFiles(files)
    }

    function removeFile(element) {
      while (element.parentElement) {
        if (element.parentElement.matches(".card-image-wrapper")){
          element.parentElement.remove();
        }
      }
    }

    function previewFile(file) {
      let reader = new FileReader()
      reader.readAsDataURL(file)
      reader.onloadend = function () {
        let boxImg = document.createElement('div')
        boxImg.classList.add('col-6', 'col-sm-4', 'col-md-3', 'mb-3', 'mb-lg-5', 'card-image-wrapper')
        boxImg.innerHTML = `<!-- Card -->
          <div class="card card-sm">
            <img class="card-img-top" src="" alt="Image Description">

            <div class="card-body">
              <div class="row text-center">
                <div class="col">
                  <a class="js-fancybox-item text-body" href="javascript:;" data-toggle="tooltip" data-placement="top" title="View" data-src="{{ _WEB_ROOT }}/public/admin/img/1920x1080/img1.jpg" data-caption="Image #02">
                    <i class="tio-visible-outlined"></i>
                  </a>
                </div>

                <div class="col column-divider">
                  <div class="text-danger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="removeFile(this)">
                    <i class="tio-delete-outlined"></i>
                  </div>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->`
        boxImg.querySelector('.card-img-top').src = reader.result

        document.getElementById('fancyboxGallery').appendChild(boxImg)
      }
    }

    function handleFiles(files) {
      files = [...files]
      files.forEach(previewFile)
    }

    function handleDataUpload(data, token, classCardImg) {
      imgUploads = [];
      imageCards = document.querySelectorAll(`.${classCardImg}`)
      imageCards.forEach(card => {
          imgUploads.push(card.src)
      })

      newData = {
          ...data,
          file: [...imgUploads],
          _token: token
      }
      newData.fileImg = undefined

      return newData;
    }
    
    const formUpdateProduct = document.querySelector('#formUpdateProduct')
    const id = formUpdateProduct.getAttribute('data-id')
    const _token = $('meta[name=csrf-token]').attr("content")
    const url = "{{ _WEB_ROOT }}/products-update/proid-" + id

    // Mong muốn của chúng ta
    Validator({
      form: '#formUpdateProduct',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#productNameLabel', 'Vui lòng nhập tên sản phẩm'),
        Validator.isRequired('#weightLabel', 'Vui lòng nhập khối lượng sản phẩm'),
        Validator.isRequired('#priceNameLabel', 'Vui lòng nhập giá sản phẩm'),
        Validator.isRequired('#supplierLabel', 'Vui lòng nhập nhà cung cấp sản phẩm'),
        Validator.isRequired('#categoryLabel', 'Vui lòng nhập loại sản phẩm'),
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