<script>

  document.addEventListener('DOMContentLoaded', function () {
    // Mong muốn của chúng ta
    Validator({
      form: '#form-ce',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#title', 'Tên kho hàng không được để trống'),
        Validator.minLength('#title', 5),
        Validator.maxLength('#title', 88)
      ],
      onSubmit: function (data) {
        var form = document.getElementById('form-ce');
        form.action = "{{_WEB_ROOT.'/warehouse-store'}}";
        form.submit();
      }
    });
  });

</script>