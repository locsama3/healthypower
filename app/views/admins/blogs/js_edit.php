<script type="text/javascript">
  $(document).ready(function() {
    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function() {
      var customFile = new HSFileAttach($(this)).init();
    });

    const main_id = $('#content').data('id');
    const _token = $('meta[name=csrf-token]').attr("content");
    const url = `{{ _WEB_ROOT }}/blogs-update/updateid-${main_id}`;

    let checkSubmitSuccess = false;

    function displayError(formId, error) {
      var form = document.getElementById(formId)
      var formGroup = form.querySelectorAll(`.form-group`)

      var keys = Object.keys(error)

      // lặp qua từng form group và so sánh field name của input rồi gán lỗi
      formGroup.forEach(element => {
        keys.forEach(key => {
          var inputFieldName = element.querySelector(`[name=${key}]`)
          if (inputFieldName) {
            element.querySelector('.form-message').innerHTML = error[key]
          }
        })
      })
    }

    //Mong muốn của chúng ta
    Validator({
      form: '#form-ce',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#title', 'Tiêu đề bài viết không được để trống'),
        // Validator.isRequired('#ckeditor1', 'Nội dung chính không được để trống'),
        Validator.isRequired('input[name = "cateids[]"]', 'Chuyên mục bài viết không được để trống'),
        Validator.isRequired('input[name = "cateid"]', 'Chuyên mục chính không được để trống')
      ],
      onSubmit: function(data) {
        let form = document.getElementById('form-ce')
        formMessage = form.querySelectorAll('.form-message')

        formMessage.forEach(element => {
          element.innerHTML = ''
        })

        let formData = new FormData(document.getElementById('form-ce'));
        formData.append('_token', _token);

        formData.append('main_content', CKEDITOR.instances['ckeditor1'].getData());

        console.log(formData.cateids);

        for (var value of formData.keys()) {
           console.log(value); 
        }

        fetch(url, {
            method: 'POST',
            body: formData
        })
            .then(res => res.json())
            .then(result => {
                if (result.status == "1") {
                  swal({
                    title: "",
                    text: result.message,
                    type: "success",
                    confirmButtonClass: "btn-success",
                    confirmButtonText: "OK",
                    closeOnConfirm: false,
                    closeOnCancel: false
                  },
                  function(isConfirm){
                    if (isConfirm) {   
                      var urlList = `{{ _WEB_ROOT }}/blogs`;    
                      redirect(urlList);
                    } 
                  });
                } else {
                  swal("Thất bại!", result.message, "error")
                  if (result.error) {
                    displayError(result.form, result.error)
                  }
                }
            })
            .catch(error => {
                console.error('Error:', error);
            })
      }
    });

    // xử lý check box và radio chuyên mục
    $('input[name = "cateids[]"]').click(function () {
      var id = $(this).val();

      if($(this).prop('checked')){
        // $('#catrightLabel_' + id).css('display', 'block');
        $('#catrightLabel_' + id).show();    
        $('#catright_' + id).show();    
      }else{
        $('#catrightLabel_' + id).hide();
        $('#catright_' + id).hide();
        $('#catright_' + id).prop('checked', false);
      }
    })

  })
</script>