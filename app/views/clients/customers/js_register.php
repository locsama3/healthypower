<script>
    $(document).on('ready', function() {
        const url = "{{ _WEB_ROOT }}/xac-thuc-dang-ky"
        const _token = $('meta[name=csrf-token]').attr("content")

        // Mong muốn của chúng ta
        Validator({
            form: '#formRegister',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('input[name="first_name"]', 'Vui lòng nhập tên của bạn'),
                Validator.isRequired('input[name="last_name"]', 'Vui lòng nhập họ của bạn'),
                Validator.isRequired('input[name="email"]', 'Vui lòng nhập địa chỉ email'),
                Validator.isEmail('input[name="email"]', 'Không đúng định dạng email'),
                Validator.isRequired('input[name="password"]', 'Vui lòng nhập mật khẩu'),
                Validator.minLength('input[name="password"]', 6),
                Validator.maxLength('input[name="password"]', 20),
                Validator.isRequired('input[name="confirm_password"]', 'Vui lòng nhập lại mật khẩu'),
                Validator.isConfirmed('input[name="confirm_password"]',function () {
                    return document.querySelector('#formRegister #password').value;
                }, 'Mật khẩu nhập lại không chính xác'),
                Validator.isRequired('input[name="terms"]', 'Vui lòng check vào ô điều khoản'),
            ],
            onSubmit: function(data) {
                let form = new FormData(document.querySelector('#formRegister'))
                form.append('_token', _token)

                sendData(url, form)
            }
        });
    })
</script>