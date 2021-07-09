<script type="text/javascript">
  $(document).ready(function() {
    // INITIALIZATION OF DATATABLES
    // =======================================================
    var datatable = $.HSCore.components.HSDatatables.init($('#datatableCustomer'), {
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
          '<img class="mb-3" src="./assets/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
          '<p class="mb-0">No data to show</p>' +
          '</div>'
      }
    });

    $('.js-datatable-filter').on('change', function() {
      var $this = $(this),
        elVal = $this.val(),
        targetColumnIndex = $this.data('target-column-index');

      datatable.column(targetColumnIndex).search(elVal).draw();
    });

    $('#datatableSearch').on('mouseup', function(e) {
      var $input = $(this),
        oldValue = $input.val();

      if (oldValue == "") return;

      setTimeout(function() {
        var newValue = $input.val();

        if (newValue == "") {
          // Gotcha
          datatable.search('').draw();
        }
      }, 1);
    });

    $('#toggleColumn_name').change(function(e) {
      datatable.columns(1).visible(e.target.checked)
    })

    $('#toggleColumn_email').change(function(e) {
      datatable.columns(2).visible(e.target.checked)
    })

    datatable.columns(3).visible(false)

    $('#toggleColumn_phone').change(function(e) {
      datatable.columns(3).visible(e.target.checked)
    })

    $('#toggleColumn_country').change(function(e) {
      datatable.columns(4).visible(e.target.checked)
    })

    datatable.columns(5).visible(false)

    $('#toggleColumn_account_status').change(function(e) {
      datatable.columns(5).visible(e.target.checked)
    })

    $('#toggleColumn_orders').change(function(e) {
      datatable.columns(6).visible(e.target.checked)
    })

    $('#toggleColumn_total_spent').change(function(e) {
      datatable.columns(7).visible(e.target.checked)
    })

    datatable.columns(8).visible(false)

    $('#toggleColumn_last_activity').change(function(e) {
      datatable.columns(8).visible(e.target.checked)
    })

    // Khai báo biến xài cho toàn file
    const url = `{{ _WEB_ROOT }}/customer-destroy`
    const _token = $('meta[name=csrf-token]').attr("content");
    let data = []

    // khai báo đối tượng 
    const btnDeleteCustomer = document.querySelector('.btn-delete-customers')

    btnDeleteCustomer.addEventListener('click', () => {
      swal({
          title: "Xóa",
          text: "Bạn có chắc chắn muốn xóa khách hàng này không?",
          type: "error",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Xóa",
          cancelButtonText: "Không",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm) {
          if (isConfirm) {
            var checkboxCustomers = document.querySelectorAll('.checkbox-customer')
            checkboxCustomers.forEach((checkbox) => {
              if (checkbox.checked) {
                id = checkbox.getAttribute('data-id')
                data.push(id) 
              }
            })

            let form = new FormData();
            form.append('_id', data)
            form.append('_token', _token)

            sendData(url, form)
            redirect('{{ _WEB_ROOT }}/customer')
          } else {
            swal("Đóng!", "Không xóa khách hàng này!", "warning");
          }
        });
    })
  })
</script>