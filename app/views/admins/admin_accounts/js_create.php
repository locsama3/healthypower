<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {      
    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function () {
      var customFile = new HSFileAttach($(this)).init();
    });

    
    // INITIALIZATION OF STEP FORM
    // =======================================================
    $('.js-step-form').each(function () {
      var stepForm = new HSStepForm($(this), {
        finish: function() {
          $("#addUserStepFormProgress").hide();
          $("#addUserStepFormContent").hide();
          $("#successMessageContent").show();
        }
      }).init();
    });

    
    // INITIALIZATION OF MASKED INPUT
    // =======================================================
    $('.js-masked-input').each(function () {
      var mask = $.HSCore.components.HSMask.init($(this));
    });

    
    // INITIALIZATION OF ADD INPUT FILED
    // =======================================================
    $('.js-add-field').each(function () {
      new HSAddField($(this), {
        addedField: function() {
          $('.js-add-field .js-select2-custom-dynamic').each(function () {
            var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
          });
        }
      }).init();
    });
  });
</script>

<!-- Validate -->
<script>

  document.addEventListener('DOMContentLoaded', function () {
    // Mong muốn của chúng ta
    Validator({
      form: '#form-ce',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#fullNameLabel', 'Họ và tên không được để trống'),
        Validator.minLength('#fullNameLabel', 5),
        Validator.maxLength('#fullNameLabel', 88),
        Validator.isRequired('#emailLabel', 'Email không được để trống'),
        Validator.minLength('#emailLabel', 5),
        Validator.isEmail('#emailLabel'),
        Validator.isRequired('#userNameLabel', 'Tên đăng nhập không được để trống'),
        Validator.minLength('#userNameLabel', 8),
        Validator.isRequired('#passwordLabel', 'Mật khẩu không được để trống'),
        Validator.minLength('#passwordLabel', 8),
        Validator.isRequired('#confirmPasswordLabel', 'Mật khẩu nhập lại không được để trống'),
        Validator.isConfirmed('#confirmPasswordLabel', function () {
          return document.querySelector('#form-ce #passwordLabel').value;
        }, 'Mật khẩu nhập lại không chính xác')

        // Validator.isRequired("input.userAccountTypeRadio", 'Loại tài khoản không được để trống'),
        // Validator.isRequired("input.permissions", 'Loại tài khoản không được để trống')
      ]
    });
  });

</script>

 <!-- Xu ly confirm info -->
<script type="text/javascript">
  // =======================================================
  $('.form-confirm').change(function(){
    var confirmID = $(this).data('text-target');

    var example = $(this).data('text-example');

    var content = $(this).val();

    if(content != ''){
      $("#" + confirmID).text(content);
    }else{
      $("#" + confirmID).text(example);
    }
  });

  $('#locationLabel').change(function(){
    var confirmID = $(this).data('text-target');

    var example = $(this).data('text-example');

    var content = $('#locationLabel :selected').data('option-template');

    console.log(content);

    if(content != ''){
      $("#" + confirmID).html(content);
    }else{
      $("#" + confirmID).text(example);
    }
  });
</script>

<script>
  $(document).on('ready', function () {     
    $("input[name = 'userAccountTypeRadio']").change(function () {
      var value = $(this).val();
      if( value == "Quản lý"){
        $('#list_roles').css('display','flex');
        $('#list_roles').show();
      }else{
        $('#list_roles').hide();
      }
    })
  });
</script>