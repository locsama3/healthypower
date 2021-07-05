<script>

  document.addEventListener('DOMContentLoaded', function () {
    // Mong muốn của chúng ta
    Validator({
      form: '#form-ce',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#title', 'Vui lòng nhập trường này'),
        Validator.minLength('#title', 5),
        Validator.maxLength('#title', 88),
      ],
      onSubmit: function (data) {
        // form.action = "";
        // form.submit();
        console.log(cc);
      }
    });
  });

</script>