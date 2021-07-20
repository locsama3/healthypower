<script>
    $(document).on('ready', function() {
        const url = "{{ _WEB_ROOT }}/gui-ma-xac-thuc"
        const _token = $('meta[name=csrf-token]').attr("content")

        // Mong muốn của chúng ta
        Validator({
            form: '#formReset',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('input[name="email"]', 'Vui lòng nhập email'),
                Validator.isEmail('input[name="email"]', 'Không đúng định dạng email')
            ],
            onSubmit: function(data) {
                form = document.querySelector('#formReset')
                form.action = url;
                form.submit();
            }
        });
    })
</script>