<script type="text/javascript">
  $(document).ready(function() {
    var inputProvince = document.querySelector('#load_address').dataset.province
    var inputDistrict = document.querySelector('#load_address').dataset.district
    var inputWard = document.querySelector('#load_address').dataset.ward
    var inputStreet = document.querySelector('#load_address').dataset.street


   
    // load tỉnh thành phố

    
    load_province();
    // load_shipping_fee();
      
  


    // API
    function load_province() {
      var url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/province";
      fetch(url, {
          headers: {
            "Token": "897b0fc3-e1e2-11eb-9389-f656af98cb33",
            "Content-Type": "application/json"
          }
        })
        .then(res => res.json())
        .then(result => {
          if (result.message == "Success") {
            var data = result.data.reverse();

            data.forEach(function(elem) {
              var opt = document.createElement('option');
              opt.id = elem.ProvinceID;
              opt.value = elem.ProvinceID;
              opt.innerHTML = elem.ProvinceName;
              $('.load_province').append(opt);
              if (inputProvince == opt.value) {
                opt.selected = true;
                load_district(elem.ProvinceID, "district");
              }
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
          method: "POST",
          body: JSON.stringify({
            "province_id": province_id
          }),
          headers: {
            "Token": "897b0fc3-e1e2-11eb-9389-f656af98cb33",
            "Content-Type": "application/json"
          }
        })
        .then(res => res.json())
        .then(result => {
          if (result.message == "Success") {
            var data = result.data.reverse();

            data.forEach(function(elem) {
              var opt = document.createElement('option');
              opt.value = elem.DistrictID;
              opt.id = elem.DistrictID;
              opt.innerHTML = elem.DistrictName;
              $('#' + district_html).append(opt);
              if (inputDistrict == opt.value) {
                opt.selected = true;
                load_ward(elem.DistrictID, "ward");
                load_service(Number($('#districtShop').val()), elem.DistrictID);
              }
            });
          }
        })
        .catch(error => {
          console.error('Error:', error);
        })
    }

    $('#province').change(function() {
      var province_id = parseInt($(this).val());

      load_district(province_id, "district");
    })

    $('#provinceShop').change(function() {
      var province_id = parseInt($(this).val());

      load_district(province_id, "districtShop");
    })

    // load xã phường
    function load_ward(district_id, ward_html) {
      var url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/ward?district_id";
      $('#' + ward_html).html('<option value="" disabled="" selected="">---Chọn Xã/Phường/Thị trấn---</option>');

      fetch(url, {
          method: "POST",
          body: JSON.stringify({
            "district_id": district_id
          }),
          headers: {
            "Token": "897b0fc3-e1e2-11eb-9389-f656af98cb33",
            "Content-Type": "application/json"
          }
        })
        .then(res => res.json())
        .then(result => {
          if (result.message == "Success") {
            var data = result.data.reverse();

            data.forEach(function(elem) {
              var opt = document.createElement('option');
              opt.value = elem.WardCode;
              opt.id = elem.WardCode;
              opt.innerHTML = elem.WardName;
              $('#' + ward_html).append(opt);
              if (inputWard == opt.value) {
                opt.selected = true;
                $('#street').val(inputStreet);
              }
            });
          }
        })
        .catch(error => {
          console.error('Error:', error);
        })
    }

    $('#districtShop').change(function() {
      var district_id = parseInt($(this).val());

      load_ward(district_id, "wardShop");

      var to_district = Number($('#district').val());



      if (to_district != 0) {
        load_service(district_id, to_district);
      }
    })

    $('#district').change(function() {
      var district_id = parseInt($(this).val());
      load_ward(district_id, "ward");

      var from_district = Number($('#districtShop').val());



      if (from_district != 0) {
        load_service(from_district, district_id);
      }
    })

    // chọn gói dịch vụ vận chuyển
    function load_service(from_district, to_district) {
      var url = "https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/available-services";

      $('#ship_service').html('<p class = "no_service">Chọn nơi gửi và nơi nhận hàng để hiển thị dịch vụ</p>');

      fetch(url, {
          method: "POST",
          body: JSON.stringify({
            "shop_id": 1798367,
            "from_district": from_district,
            "to_district": to_district
          }),
          headers: {
            "Token": "897b0fc3-e1e2-11eb-9389-f656af98cb33",
            "Content-Type": "application/json"
          }
        })
        .then(res => res.json())
        .then(result => {
          if (result.message == "Success") {
            var data = result.data;

            var output = "";
            var i = 0;
            data.forEach(function(elem) {
              i++;
              var check = false;
              if (elem.service_id == 53321) {
                check = true;
              }
              output += `
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input type="radio" class="custom-control-input" name="shipServiceRadio" id="shipServiceRadio${i}" value="${elem.service_id}" ${check && 'checked'} data-name = "${elem.short_name}">
                      <label class="custom-control-label" for="shipServiceRadio${i}">${elem.short_name}</label>
                    </div>
                  </div>`;
            });

            $('#ship_service').html(output);
            load_shipping_fee();
          }
        })
        .catch(error => {
          console.error('Error:', error);
        })
    }

    // Mong muốn của chúng ta
    var checkFull = false;
    Validator({
      form: '#form-delivery',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#provinceShop', 'Địa chỉ cửa hàng không được để trống'),
        Validator.isRequired('#districtShop', 'Địa chỉ cửa hàng không được để trống'),
        Validator.isRequired('#wardShop', 'Địa chỉ cửa hàng không được để trống'),
        Validator.isRequired('#province', 'Địa chỉ giao hàng không được để trống'),
        Validator.isRequired('#district', 'Địa chỉ giao hàng không được để trống'),
        Validator.isRequired('#ward', 'Địa chỉ giao hàng không được để trống'),
        Validator.isRequired('#street', 'Số nhà và tên đường không được để trống'),
        // Validator.isRequired('shipServiceRadio', 'Phương thức giao hàng không được để trống'),
        Validator.isRequired('#insurance_value', 'Giá trị đơn hàng không được để trống'),
        Validator.isRequired('#weightProducts', 'Trọng lượng đơn hàng không được để trống'),
        Validator.isRequired('#lengthProducts', 'Chiều dài đơn hàng không được để trống'),
        Validator.isRequired('#widthProducts', 'Chiều rộng đơn hàng không được để trống'),
        Validator.isRequired('#heightProducts', 'Chiều cao đơn hàng không được để trống')
      ],
      onSubmit: function(data) {

        if (data != null) {
          checkFull = true;
          console.log(checkFull);
        }
      }
    });

    $('#check_delivery').click(function() {
      load_shipping_fee();
    })

    function load_shipping_fee() {

      var url = "https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee";

      // lấy các giá trị
      var service_id = Number($('input[name = "shipServiceRadio"]').val());

      var insurance_value = Number($('#insurance_value').val());

      var coupon = $('#couponShip').val();
      var to_ward_code = $('#ward').val();
      if(to_ward_code == null){
        to_ward_code = inpuWard;
      }

      var to_district_id = Number($('#district').val());
      console.log(to_district_id);

      var to_province_id = $('#province').val();

      var from_district_id = Number($('#districtShop').val());
      var street = $('#street').val().trim();
      if (street == "") {
        street = inputStreet;
      }
      var weight = Number($('#weightProducts').val());
      weight = Math.round(weight);
      var length = Number($('#lengthProducts').val());
      var width = Number($('#widthProducts').val());
      var height = Number($('#heightProducts').val());
      var _token = $('meta[name=csrf-token]').attr("content");
      fetch(url, {
          method: "POST",
          body: JSON.stringify({
            "service_id": service_id,
            "insurance_value": insurance_value,
            "coupon": coupon,
            "to_ward_code": to_ward_code,
            "to_district_id": to_district_id,
            "from_district_id": from_district_id,
            "weight": weight,
            "length": length,
            "width": width,
            "height": height,
            "_token": _token
          }),
          headers: {
            "Content-Type": "application/json",
            "Token": "897b0fc3-e1e2-11eb-9389-f656af98cb33",
            "ShopId": 1798367
          }
        })
        .then(res => res.json())
        .then(result => {
          if (result.message == "Success") {
            var data = result.data;
            $('#feeTotal').text(formatNumber(data.service_fee));
          }
          return data.service_fee;
        })
        .then(result => {
          var form = new FormData();
          var sub_total = Number($('#sub-total').data('price'));
          var sub_voucher = Number($('#voucher').data('voucher'));
          var province = $('#province').val();

          var district = to_district_id;
          var ward = to_ward_code;
          var textProvince = $('#' + to_province_id).text();
          var textDistrict = $('#' + to_district_id).text();
          console.log(textDistrict);
          var textWard = $('#' + to_ward_code).text();
          var fullAddress = `${street}, ${textWard}, ${textDistrict}, ${textProvince}`;
          // var check = fullAddress.split(',').find(el => el == " ");
          // if(check == " "){
          //   return false;
          // }
          form.append('_token', _token);
          form.append('shipping_fee', result);
          form.append('province', province);
          form.append('district', district);
          form.append('ward', ward);
          form.append('street', street);
          form.append('address', fullAddress);
          let str = street.split(" ");
          sendData("{{_WEB_ROOT.'/get-shipping-fee'}}", form);
          if (str.length > 1) {
            $('#load_address').text(fullAddress);
          }

          var total = sub_total - sub_voucher + result;
          total = formatNumber(total) + ' đ';
          $('#total').text(total);

        })

        .catch(error => {
          console.error('Error:', error);
        })
    }

  })
</script>