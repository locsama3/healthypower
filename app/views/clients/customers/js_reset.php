<script>
    $(document).on('ready', function() {
        const url = "{{ _WEB_ROOT }}/chinh-sua-mat-khau-moi"
        const _token = $('meta[name=csrf-token]').attr("content")

        // Mong muốn của chúng ta
        Validator({
            form: '#formCode',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('input[name="password"]', 'Vui lòng nhập mật khẩu mới'),
                Validator.minLength('input[name="password"]', 6),
                Validator.isRequired('input[name="confirm-password"]', 'Vui lòng nhập lại mật khẩu mới'),
                Validator.isConfirmed('input[name="confirm-password"]',function () {
                    return document.querySelector('#formCode #password').value;
                }, 'Mật khẩu nhập lại không chính xác')
            ],
            onSubmit: function(data) {
                let form = new FormData(document.querySelector('#formCode'))
                form.append('_token', _token)

                sendData(url, form)
            }
        });
    })
</script>