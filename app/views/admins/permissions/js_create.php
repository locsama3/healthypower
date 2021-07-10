<script>

  document.addEventListener('DOMContentLoaded', function () {
    // Mong muốn của chúng ta
    Validator({
      form: '#form-ce',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#title', 'Tên quyền hạn không được để trống'),
        Validator.minLength('#title', 5),
        Validator.maxLength('#title', 88),
        Validator.isRequired('#guardName', 'Tên bảo mật không được để trống'),
        Validator.minLength('#guardName', 5),
        Validator.maxLength('#guardName', 88)
      ],
      onSubmit: function (data) {
        var form = document.getElementById('form-ce');
        form.action = "{{_WEB_ROOT.'/permissions-store'}}";
        form.submit();
      }
    });
  });

</script>