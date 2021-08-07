<script>
    $(document).on('ready', function() {
        const urlLogin = "{{ _WEB_ROOT }}/xac-thuc-nguoi-dung"
        const _token = $('meta[name=csrf-token]').attr("content")
        // Mong muốn của chúng ta
        Validator({
            form: '#formLogin',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('input[name="email"]', 'Vui lòng nhập email'),
                Validator.isEmail('input[name="email"]', 'Không đúng định dạng email'),
                Validator.isRequired('input[name="password"]', 'Vui lòng nhập mật khẩu'),
                Validator.minLength('input[name="password"]', 6),
                Validator.maxLength('input[name="password"]', 12),
            ],
            onSubmit: function(data) {
                let form = new FormData(document.querySelector('#formLogin'))
                form.append('_token', _token)

                sendData(urlLogin, form)
            }
        });
    })
</script>