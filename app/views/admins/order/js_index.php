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
                '<img class="mb-3" src="{{ _WEB_ROOT }}/public/admin/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">' +
                '<p class="mb-0">Chưa có dữ liệu nào</p>' +
                '</div>'
          }
        });
        var datatable2 = $.HSCore.components.HSDatatables.init($('#datatable2'), {
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
              checkAll: '#datatableCheckAll2',
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


       
        

        $('#toggleColumn_order').change(function (e) {
          datatable.columns(1).visible(e.target.checked)
        })

        $('#toggleColumn_date').change(function (e) {
          datatable.columns(2).visible(e.target.checked)
        })

        $('#toggleColumn_customer').change(function (e) {
          datatable.columns(3).visible(e.target.checked)
        })

        $('#toggleColumn_payment_status').change(function (e) {
          datatable.columns(4).visible(e.target.checked)
        })

        datatable.columns(5).visible(false)

        $('#toggleColumn_fulfillment_status').change(function (e) {
          datatable.columns(5).visible(e.target.checked)
        })

        $('#toggleColumn_payment_method').change(function (e) {
          datatable.columns(6).visible(e.target.checked)
        })

        $('#toggleColumn_total').change(function (e) {
          datatable.columns(7).visible(e.target.checked)
        })

        $('#toggleColumn_actions').change(function (e) {
          datatable.columns(8).visible(e.target.checked)
        })

        $('#btn-all-order').click(function(){
            $('#collapseExample1').collapse('hide');
            $('#btn-all-order').addClass('active');
            $('#btn-cancel').removeClass('active');
        })
        $('#btn-cancel').click(function(){
            $('#collapseExample').collapse('hide');
            $('#btn-all-order').removeClass('active');
            $('#btn-cancel').addClass('active');
        })
      
      });
    </script>
       