<script type="text/javascript">
  $(document).on('ready', function () {
    // INITIALIZATION OF SHOW PASSWORD
    // =======================================================
    $('.js-toggle-password').each(function () {
      new HSTogglePassword(this).init()
    });


    // INITIALIZATION OF FILE ATTACH
    // =======================================================
    $('.js-file-attach').each(function () {
      var customFile = new HSFileAttach($(this)).init();
    });


    // INITIALIZATION OF TABS
    // =======================================================
    $('.js-tabs-to-dropdown').each(function () {
      var transformTabsToBtn = new HSTransformTabsToBtn($(this)).init();
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

    // INITIALIZATION OF COUNTERS
    // =======================================================
    $('.js-counter').each(function() {
      var counter = new HSCounter($(this)).init();
    });

    // INITIALIZATION OF DATATABLES
    // =======================================================
    var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
      dom: 'Bfrtip',
      buttons: [
        {
          extend: 'copy',
          className: 'd-none'
        },
        {
          extend: 'excel',
          className: 'd-none'
        },
        {
          extend: 'csv',
          className: 'd-none'
        },
        {
          extend: 'pdf',
          className: 'd-none'
        },
        {
          extend: 'print',
          className: 'd-none'
        },
      ],
      select: {
        style: 'multi',
        selector: 'td:first-child input[type="checkbox"]',
        classMap: {
          checkAll: '#datatableCheckAll',
          counter: '#datatableCounter',
          counterInfo: '#datatableCounterInfo'
        }
      },
      language: {
        zeroRecords: '<div class="text-center p-4">' +
            '<img class="mb-3" src="{{_WEB_ROOT."/public/admin/svg/illustrations/sorry.svg"}}" alt="No record" style="width: 7rem;">' +
            '<p class="mb-0">Không có dữ liệu</p>' +
            '</div>'
      }
    });

    $('#export-copy').click(function() {
      datatable.button('.buttons-copy').trigger()
    });

    $('#export-excel').click(function() {
      datatable.button('.buttons-excel').trigger()
    });

    $('#export-csv').click(function() {
      datatable.button('.buttons-csv').trigger()
    });

    $('#export-pdf').click(function() {
      datatable.button('.buttons-pdf').trigger()
    });

    $('#export-print').click(function() {
      datatable.button('.buttons-print').trigger()
    });

    $('.js-datatable-filter').on('change', function() {
      var $this = $(this),
        elVal = $this.val(),
        targetColumnIndex = $this.data('target-column-index');

      datatable.column(targetColumnIndex).search(elVal).draw();
    });

    $('#datatableSearch').on('mouseup', function (e) {
      var $input = $(this),
        oldValue = $input.val();

      if (oldValue == "") return;

      setTimeout(function(){
        var newValue = $input.val();

        if (newValue == ""){
          // Gotcha
          datatable.search('').draw();
        }
      }, 1);
    });
   
    // INITIALIZATION OF QUICK VIEW POPOVER
    // =======================================================
    $('#editUserPopover').popover('show');

    $(document).on('click', '#closeEditUserPopover' , function() {
      $('#editUserPopover').popover('dispose');
    });

    $('#editUserModal').on('show.bs.modal', function(event) {
      $('#editUserPopover').popover('dispose');

      var button = $(event.relatedTarget);

      var recipient = button.data('edit');

      var modal = $(this);

      console.log(recipient);

      // avatar
      modal.find('#editAvatarImgModal').attr("src", "{{_WEB_ROOT.'/public/uploads/avatar/'}}" + recipient.avatar);

      // fullname
      modal.find('#editFullNameModalLabel').val(recipient.fullname);

      // email
      modal.find('#editEmailLabel').val(recipient.email);

      // phone
      modal.find('#editPhoneLabel').val(recipient.phone);

      // job_title
      modal.find('#editJobTitleLabel').val(recipient.job_title);

      // department
      modal.find('#editDepartmentLabel').val(recipient.department);

      //role
      modal.find('#roleRadio' + recipient.role_id).prop('checked', true);

      // permissions 
      var permissions = recipient.permissions_id.split(',');

      modal.find('.permissionCheckbox').prop('checked', false);

      permissions.forEach(function(e) {
        modal.find('#permissionCheckbox' + e).prop('checked', true);
      });

      // address
      if(recipient.address1 != ""){
        var address = recipient.address1.split(',');

          modal.find('#editCityLabel').val(address[3].trim());

          modal.find('#editStateLabel').val(address[2].trim());

          modal.find('#editAddressLine1Label').val(`${address[0]},${address[1]}`);
      }
      

      // address2
      modal.find('#editAddressLine2Label').val(recipient.address2);

      // postal code
      modal.find('#editPostalCodeLabel').val(recipient.postal_code);

      // change password 
      modal.find('#editUserModalCurrentPasswordLabel').val('');

      modal.find('#editUserModalNewPassword').val('');

      modal.find('#editUserModalConfirmNewPasswordLabel').val('');

      // status
      modal.find('#stockStatus').val(recipient.id);
      
      if(recipient.status == 1){
        modal.find('#stockStatus').prop('checked', true);
      }else{
        modal.find('#stockStatus').prop('checked', false);
      }

      // button lưu thay doi
      modal.find('#submit-edit3').data('editid', recipient.id);

      modal.find('#submit-edit2').data('editid', recipient.id);

      modal.find('#submit-edit1').data('editid', recipient.id);

    });


    // DARK POPOVER
    // =======================================================
    $('[data-toggle="popover-dark"]').on('shown.bs.popover', function () {
      $('.popover').last().addClass('popover-dark')
    })


    // Xử lý riêng mình ên
    // =======================================================
    var _token = $('meta[name=csrf-token]').attr("content");

    function displayError(formId, error) {
      var form = document.getElementById(formId)
      var formGroup = form.querySelectorAll(`.form-group`)

      var keys = Object.keys(error)

      // lặp qua từng form group và so sánh field name của input rồi gán lỗi
      formGroup.forEach(element => {
        keys.forEach(key => {
          var inputFieldName = element.querySelector(`[name=${key}]`)
          if (inputFieldName) {
            element.querySelector('.form-message').innerHTML = error[key]
          }
        })
      })
    }

    function load_table() {
      $.ajax({
        url: '{{_WEB_ROOT."/admin-accounts-loadtable"}}',
        method: 'POST',
        data: {
          _token:_token
        },
        success:function(data){
          $('#table_body').html(data);
        }
      });
    }


    // xử lý update trạng thái tài khoản
    $('#submit-edit4').click(function () {
      var id = $('#stockStatus').val();

      var status = $('#stockStatus').prop('checked');

      if(status){
        var status_value = 1;
      }else{
        var status_value = 0;
      }

      $.ajax({
        url: '{{_WEB_ROOT."/admin-accounts-status"}}',
        method: 'POST',
        data: {
          id:id,
          _token:_token,
          status_value:status_value
        },
        success:function(data){
          if(data != null){
            swal({
              title: "",
              text: "Chỉnh sửa trạng thái thành công!",
              type: "success",
              confirmButtonClass: "btn-success",
              confirmButtonText: "OK",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {          
                window.location.reload();
              } 
            });
          }
        }
      });
    })

    // đổi mật khẩu
    $('#submit-edit3').click(function () {
      var id = $(this).data('editid');

      var old_password = $('#editUserModalCurrentPasswordLabel').val();

      var new_password = $('#editUserModalNewPassword').val();

      $.ajax({
        url: '{{_WEB_ROOT."/admin-accounts-change-password"}}',
        method: 'POST',
        data: {
          id:id,
          _token:_token,
          old_password:old_password,
          new_password:new_password
        },
        success:function(data){
          console.log(data);
          if(data.trim() == 'true'){
            swal({
              title: "",
              text: "Đổi mật khẩu thành công!",
              type: "success",
              confirmButtonClass: "btn-success",
              confirmButtonText: "OK",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {          
                window.location.reload();
              } 
            });
          }else{
            swal("", "Mật khẩu không chính xác", "error");
          }
        }
      });
    })

    // đổi địa chỉ
    $('#submit-edit2').click(function () {
      var id = $(this).data('editid');

      var form_data = new FormData(document.getElementById('form-edit2'));

      form_data.append('_token', _token);

      form_data.append('id', id);

      $.ajax({
        url: '{{_WEB_ROOT."/admin-accounts-change-address"}}',
        method: 'post',
        data:form_data,
        contentType:false,
        cache:false,
        processData:false,
        success:function(data){
          console.log(data);
          if(data.trim() == 'true'){
            swal({
              title: "",
              text: "Cập nhật địa chỉ thành công!",
              type: "success",
              confirmButtonClass: "btn-success",
              confirmButtonText: "OK",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {          
                window.location.reload();
              } 
            });
          }else{
            swal("", "Đổi địa chỉ không thành công", "error");
          }
        }
      });
    })

    // đổi thông tin cơ bản
    $('#submit-edit1').click(function () {
      var id = $(this).data('editid');

      var form_data = new FormData(document.getElementById('form-edit1'));

      form_data.append('_token', _token);

      form_data.append('id', id);

      for (var key of form_data.values()) {
         console.log(key); 
      }
      $.ajax({
        url: '{{_WEB_ROOT."/admin-accounts-change-info"}}',
        method: 'post',
        data:form_data,
        dataType: "JSON",
        contentType:false,
        cache:false,
        processData:false,
        success:function(data){
          console.log(typeof data);
          if(data.status === "1"){
            swal({
              title: "",
              text: "Cập nhật thông tin thành công!",
              type: "success",
              confirmButtonClass: "btn-success",
              confirmButtonText: "OK",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {          
                window.location.reload();
              } 
            });
          }else{
            swal("Thất bại!", data.message, "error")
            if (data.error) {
              displayError(data.form, data.error);
            }
          }
        }
      });
    })
  });
</script>

<!-- Validate -->
<script>

  document.addEventListener('DOMContentLoaded', function () {
    // Mong muốn của chúng ta
    Validator({
      form: '#form-edit1',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#editFullNameModalLabel', 'Họ và tên không được để trống'),
        Validator.minLength('#editFullNameModalLabel', 5),
        Validator.maxLength('#editFullNameModalLabel', 88),
        Validator.isRequired('#editEmailLabel', 'Email không được để trống'),
        Validator.minLength('#editEmailLabel', 5),
        Validator.isEmail('#editEmailLabel'),
        Validator.isRequired('#editJobTitleLabel', 'Mật khẩu không được để trống'),
        Validator.isRequired('#editDepartmentLabel', 'Mật khẩu không được để trống')
      ]
    });
  });

  document.addEventListener('DOMContentLoaded', function () {
    // Mong muốn của chúng ta
    Validator({
      form: '#form-edit3',
      formGroupSelector: '.form-group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#editUserModalCurrentPasswordLabel', 'Mật khẩu hiện tại không được để trống'),
        Validator.minLength('#editUserModalCurrentPasswordLabel', 8),
        Validator.isRequired('#editUserModalNewPassword', 'Mật khẩu mới không được để trống'),
        Validator.minLength('#editUserModalNewPassword', 8),
        Validator.isRequired('#editUserModalConfirmNewPasswordLabel', 'Nhập lại mật khẩu mới không được để trống'),
        Validator.isConfirmed('#editUserModalConfirmNewPasswordLabel', function () {
          return document.querySelector('#form-edit3 #editUserModalNewPassword').value;
        }, 'Mật khẩu nhập lại không chính xác')
      ]
    });
  });

</script>

<!-- Xử lý load table và edit -->
<script type="text/javascript">
	$(document).on('ready', function () {

	});
</script>


