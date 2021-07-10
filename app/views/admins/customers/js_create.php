<script type="text/javascript">
  $(document).ready(function() {
    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function() {
      var customFile = new HSFileAttach($(this)).init();
    });

    const _token = $('meta[name=csrf-token]').attr("content");
    const url = "{{ _WEB_ROOT }}/customer-store";
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

    // Mong muốn của chúng ta
    Validator({
      form: '#form-info-account',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#firstNameLabel', 'Tên không được để trống'),
        Validator.isRequired('#lastNameLabel', 'Họ không được để trống'),
        Validator.isRequired('#emailLabel', 'Email không được để trống'),
        Validator.isEmail('#emailLabel', 'Không phải định dạnh email')
      ],
      onSubmit: function(data) {
        // var form = document.getElementById('form-info-account');
        // form.action = url;
        // form.submit();
        let form = document.getElementById('form-info-account')
        formMessage = form.querySelectorAll('.form-message')
        console.log(formMessage);
        formMessage.forEach(element => {
          element.innerHTML = ''
        })

        let formDataInfo = new FormData(document.getElementById('form-info-account'));
        formDataInfo.append('_token', _token)
        // $.ajax({
        //   url: "{{ _WEB_ROOT }}/customer-store",
        //   method: 'POST',
        //   data: formDataInfo,
        //   contentType: false,
        //   processData: false,
        //   success:function(data){
        //       if (data) {
        //         console.log(data);
        //       } else {
        //         console.log("không có data");
        //       }
        //   }
        // });
        fetch(url, {
            method: 'POST',
            body: formDataInfo
        })
            .then(res => res.json())
            .then(result => {
                if (result.status == "1") {
                  swal("Thành công!", result.message, "success")
                  checkSubmitSuccess = true;
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
    
    var formShipping = document.getElementById('form-shipping-address');
    var formBilling = document.getElementById('form-billing-address');

    formShipping.addEventListener('submit', (e) => {
      e.preventDefault();

      if (checkSubmitSuccess) {
        console.log("run");
        let formDataShipping = new FormData(formShipping)
        formDataShipping.append('_token', _token)

        fetch(url, {
          method: 'POST',
          body: formDataShipping
        })
          .then(res => res.json())
          .then(response => console.log(response))
          .catch(error => console.error('Error:', error))
      }

    })

    formBilling.addEventListener('submit', (e) => {
      e.preventDefault();

      if (checkSubmitSuccess) {
        console.log("run");
        let formDataBilling = new FormData(formBilling)
        formDataBilling.append('_token', _token)

        fetch(url, {
          method: 'POST',
          body: formDataBilling
        })
          .then(res => res.json())
          .then(response => console.log(response))
          .catch(error => console.error('Error:', error))
      }
    })
  })
</script>