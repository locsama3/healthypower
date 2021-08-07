<script type="text/javascript">
  $(document).on('ready', function () {
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

    // xử lý riêng mình ên
    const _token = $('meta[name=csrf-token]').attr("content");

    function send_data(url, data) {    
      fetch(url,{
        method: "POST",
        body:data
      })
        .then(res => res.json())
        .then(result => {
          if (result.status == "1") {
            swal({
              title: "",
              text: result.message,
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
          } else {
            swal("Thất bại!", result.message, "error")
          }
        })
        .catch(error => {
          console.error("Đã có lỗi:", error);
        })
    }
    // xuất bản
    $('.publish-item').click(function () {
      var id = $(this).data('pubid');
      var publish = 1;

      var url = `{{_WEB_ROOT}}/blogs-status`;

      var data = new FormData();

      data.append( "blog_id", id);

      data.append( "status", publish);

      data.append( "_token", _token);

      send_data(url, data);
    })

    $('.unpublish-item').click(function () {
      var id = $(this).data('unpubid');
      var unpublish = 2;

      var url = `{{_WEB_ROOT}}/blogs-status`;

      var data = new FormData();

      data.append( "blog_id", id);

      data.append( "status", unpublish);

      data.append( "_token", _token);

      send_data(url, data);
    })

    // Khai báo biến xài cho toàn file
    const destroyUrl = `{{ _WEB_ROOT }}/blogs-destroy`;
    const currentUrl = "{! getCurURL() !}";

    // Xử lý xóa danh sách khách hàng
    deleteListItems(destroyUrl, "Bài viết", currentUrl);

    const btnDeleteItem = document.querySelectorAll('.delete_item');

    btnDeleteItem.forEach(elem => {
      elem.addEventListener('click', () => {
        deleteItem(elem, destroyUrl, "Bài viết", currentUrl);
      });
    });

  })
</script>