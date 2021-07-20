<script>
    $(document).on('ready', function() {
        const url = "{{ _WEB_ROOT }}/xac-thuc-ma-dat-lai"
        const _token = $('meta[name=csrf-token]').attr("content")

        // Mong muốn của chúng ta
        Validator({
            form: '#formCode',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('input[name="code"]', 'Vui lòng nhập mã xác thực đã được gửi vào mail của bạn'),
                Validator.maxLength('input[name="code"]', 6),
                Validator.minLength('input[name="code"]', 6)
            ],
            onSubmit: function(data) {
                let form = new FormData(document.querySelector('#formCode'))
                form.append('_token', _token)

                sendData(url, form)
            }
        });
    })
</script>