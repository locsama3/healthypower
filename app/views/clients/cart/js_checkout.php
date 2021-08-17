<script>
    document.addEventListener('DOMContentLoaded', function () {
        const _token = $('meta[name=csrf-token]').attr("content")
    // Mong muốn của chúng ta
        Validator({
            form: '#co-billing-form',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                
            ],
            onSubmit: function(data) {
                var formPayment = document.querySelector('#co-billing-form')
                var input = document.querySelector('#payment-hidden')
                console.log(input);
                input.value = _token;
                var url = "{{_WEB_ROOT.'/payment-post'}}"
                formPayment.action = url;
                formPayment.submit();
               
            }
        });


      
    });

   
</script>