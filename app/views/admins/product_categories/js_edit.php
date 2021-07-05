<script>

  document.addEventListener('DOMContentLoaded', function () {
    // Mong muốn của chúng ta
    Validator({
      form: '#form-ce',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#title', 'Tên danh mục không được để trống'),
        Validator.minLength('#title', 5),
        Validator.maxLength('#title', 88)
      ],
      onSubmit: function (data) {
        var form = document.getElementById('form-ce');
        var id = form.dataset.uptid;

        form.action = "{{_WEB_ROOT.'/products-category-update/uptid-'}}" + id;
        form.submit();
      }
    });
  });

</script>