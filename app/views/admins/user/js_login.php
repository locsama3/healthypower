<script>
    $(document).ready(function() {
        const url = "{{ _WEB_ROOT }}/admin/user/validatelogin"
        const _token = $('meta[name=csrf-token]').attr("content")
        Validator({
            form: '#form-login',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#signupSrEmail', 'Email không được để trống'),
                Validator.isRequired('#signupSrPassword', 'Mật khẩu không được để trống'),
                Validator.minLength('#signupSrPassword',6, 'Mật khẩu ít nhất 6 kí tự'),
                Validator.isEmail('#signupSrEmail', 'Không phải định dạnh email')
            ],
            onSubmit: function(data) {
                var form = new FormData();
                form.append('_token', _token)
                form.append('email', data.email)
                form.append('password', data.password)
                sendData(url, form)
            }
        });
    })
    
</script>