<script type="text/javascript">
  $(document).ready(function() {

    // INITIALIZATION OF DATATABLES
    // =======================================================
    var datatable = $.HSCore.components.HSDatatables.init($('#datatableCustomer'), {
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
          '<img class="mb-3" src="{{ _WEB_ROOT }}/public/admin/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
          '<p class="mb-0">Chưa có dữ liệu nào</p>' +
          '</div>'
      }
    });

    $('#export-copy').click(function () {
      datatable.button('.buttons-copy').trigger()
    });

    $('#export-excel').click(function () {
      datatable.button('.buttons-excel').trigger()
    });

    $('#export-csv').click(function () {
      datatable.button('.buttons-csv').trigger()
    });

    $('#export-pdf').click(function () {
      datatable.button('.buttons-pdf').trigger()
    });

    $('#export-print').click(function () {
      datatable.button('.buttons-print').trigger()
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
    const currentUrl = "{! getCurURL() !}"

    // API
    function load_province() {
      var url = "https://online-gateway.ghn.vn/shiip/public-api/master-data/province";
      fetch(url, {
          headers:{
            "Token":"897b0fc3-e1e2-11eb-9389-f656af98cb33",
            "Content-Type": "application/json"
          }
      })
          .then(res => res.json())
          .then(result => {
            let dataProvince = result.data
            let provinces = document.querySelectorAll('.province')

            provinces.forEach(province => {
              dataProvince.forEach(data => {
                if (province.getAttribute('data-id') == data.ProvinceID) {
                  province.innerHTML = data.ProvinceName;
                }
              })
            })
          })
          .catch(error => {
              console.error('Error:', error);
          })
    }

    // load tỉnh thành phố
    load_province();
    
    let pagination = document.querySelectorAll('.paginate_item')
    for (let i = 1; i < pagination.length-1; i++) {
      pagination[i].addEventListener('click', () => {
        load_province();
      })
    }

    // Xử lý xóa danh sách khách hàng
    deleteListItems(url, "Khách hàng", currentUrl)
  })
</script>