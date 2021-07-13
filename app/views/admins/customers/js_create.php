<script type="text/javascript">
  $(document).ready(function() {
    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function() {
      var customFile = new HSFileAttach($(this)).init();
    });

    // INITIALIZATION OF MASKED INPUT
    // =======================================================
    $('.js-masked-input').each(function () {
      var mask = $.HSCore.components.HSMask.init($(this));
    });

    const _token = $('meta[name=csrf-token]').attr("content");
    const url = "{{ _WEB_ROOT }}/customer-store";
    let checkSubmitSuccess = false;

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
        sendData(url, formDataInfo)
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