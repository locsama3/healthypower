<script>
    $(document).on('ready', function() { 
        const urlUpdate = "{{ _WEB_ROOT }}/cap-nhat-thong-tin-khach-hang"
        const _token = $('meta[name=csrf-token]').attr("content")
        var buttonEdit = document.querySelector('.btn-edit-user');
        var btnComeBack = document.querySelector('.btn-comeback')

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


        buttonEdit.addEventListener('click', () => {
            if (buttonEdit.innerText == 'Cập nhật hồ sơ') {
                let form = new FormData(document.querySelector('#formUserInfo'))
                form.append('_token', _token)

                sendData(urlUpdate, form)
            }

            if (buttonEdit.innerText == 'Chỉnh sửa hồ sơ') {
                document.querySelector('.user-info').style.display = 'none';
                document.querySelector('.user-info-edit').style.display = 'block';
                btnComeBack.style.display = 'block';
                buttonEdit.innerText = 'Cập nhật hồ sơ';
            }

        })

        btnComeBack.addEventListener('click', () => {
            if (buttonEdit.innerText == 'Cập nhật hồ sơ') {
                document.querySelector('.user-info').style.display = 'block';
                document.querySelector('.user-info-edit').style.display = 'none';
                btnComeBack.style.display = 'none';
                buttonEdit.innerText = 'Chỉnh sửa hồ sơ';
            }
        })

        Validator({
            form: '#formUserInfo',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('input[name="username"]', 'Vui lòng nhập tên của bạn'),
                Validator.isRequired('input[name="phone"]', 'Vui lòng số điện thoại của bạn')
            ]
        });
    })
</script>