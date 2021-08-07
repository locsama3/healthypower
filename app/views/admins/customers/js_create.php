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

    // load tỉnh thành phố
    load_province();

    // API
    function load_province() {
      var url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/province";
      fetch(url, {
          headers:{
            "Token":"897b0fc3-e1e2-11eb-9389-f656af98cb33",
            "Content-Type": "application/json"
          }
      })
          .then(res => res.json())
          .then(result => {
              console.log(result);
              if(result.message == "Success"){
                var data = result.data.reverse();
                data.forEach(function(elem) {
                  var opt = document.createElement('option');
                  opt.value = elem.ProvinceID;
                  opt.innerHTML = elem.ProvinceName;
                  $('.load_province').append(opt);
                });
              }
          })
          .catch(error => {
              console.error('Error:', error);
          })
    }

    // load quận huyện
    function load_district(province_id, district_html) {
      var url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/district";
      $('#' + district_html).html('<option value="" disabled="" selected="">---Chọn Quận/Huyện---</option>');
      fetch(url, {
          method:"POST",
          body:JSON.stringify({
              "province_id":province_id
          }),
          headers:{
            "Token":"897b0fc3-e1e2-11eb-9389-f656af98cb33",
            "Content-Type": "application/json"
          }
      })
          .then(res => res.json())
          .then(result => {
              if(result.message == "Success"){
                var data = result.data.reverse();

                data.forEach(function(elem) {
                  var opt = document.createElement('option');
                  opt.value = elem.DistrictID;
                  opt.innerHTML = elem.DistrictName;
                  $('#' + district_html).append(opt);
                });
              }
          })
          .catch(error => {
              console.error('Error:', error);
          })
    }

    // load xã phường
    function load_ward(district_id, ward_html) {
      var url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/ward?district_id";
      $('#' + ward_html).html('<option value="" disabled="" selected="">---Chọn Xã/Phường/Thị trấn---</option>');

      fetch(url, {
          method:"POST",
          body:JSON.stringify({
              "district_id":district_id
          }),
          headers:{
            "Token":"897b0fc3-e1e2-11eb-9389-f656af98cb33",
            "Content-Type": "application/json"
          }
      })
          .then(res => res.json())
          .then(result => {
              if(result.message == "Success"){
                var data = result.data.reverse();

                data.forEach(function(elem) {
                  var opt = document.createElement('option');
                  opt.value = elem.WardCode;
                  opt.innerHTML = elem.WardName;
                  $('#' + ward_html).append(opt);
                });
              }
          })
          .catch(error => {
              console.error('Error:', error);
          })
    }

    $('#province').change(function () {
      var province_id = parseInt($(this).val());

      load_district(province_id, "district");
    })

    $('#district').change(function () {
      var district_id = parseInt($(this).val());

      load_ward(district_id, "ward");
    })

    const _token = $('meta[name=csrf-token]').attr("content");
    const url = "{{ _WEB_ROOT }}/customer-store";

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
        let form = document.getElementById('form-info-account')
        formMessage = form.querySelectorAll('.form-message')
        
        formMessage.forEach(element => {
          element.innerHTML = ''
        })

        let formDataInfo = new FormData(form);
        formDataInfo.append('_token', _token)

        data._token = _token
        
        sendDataByJSON(url, data)
      }
    });
    
    var formShipping = document.getElementById('form-shipping-address');

    formShipping.addEventListener('submit', (e) => {
      e.preventDefault();
      
      let formDataShipping = new FormData(formShipping)
      formDataShipping.append('_token', _token)

      sendData(url, formDataShipping)
    })
  })
</script>