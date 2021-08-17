<script>
    $(document).on('ready', function() {
        // INITIALIZATION OF DATATABLES
        // =======================================================
        var datatable = $.HSCore.components.HSDatatables.init($('#datatableProduct'), {
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
                    '<p class="mb-0">No data to show</p>' +
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

        $('#toggleColumn_product').change(function(e) {
            datatable.columns(1).visible(e.target.checked)
        })

        $('#toggleColumn_type').change(function(e) {
            datatable.columns(2).visible(e.target.checked)
        })

        // datatable.columns(3).visible(false)

        $('#toggleColumn_vendor').change(function(e) {
            datatable.columns(3).visible(e.target.checked)
        })

        $('#toggleColumn_stocks').change(function(e) {
            datatable.columns(4).visible(e.target.checked)
        })

        $('#toggleColumn_sku').change(function(e) {
            datatable.columns(5).visible(e.target.checked)
        })

        $('#toggleColumn_price').change(function(e) {
            datatable.columns(6).visible(e.target.checked)
        })


        $('#toggleColumn_quantity').change(function(e) {
            datatable.columns(7).visible(e.target.checked)
        })

        datatable.columns(7).visible(false)

        datatable.columns(8).visible(false)

        $('#toggleColumn_variants').change(function(e) {
            datatable.columns(8).visible(e.target.checked)
        })

        // Khai báo biến xài cho toàn file
        const url = `{{ _WEB_ROOT }}/products-destroy`
        const urlStatus = `{{ _WEB_ROOT }}/products-status`
        const urlUploadExcel = `{{ _WEB_ROOT }}/products-upload-excel`
        const currentUrl = "{! getCurURL() !}"
        const btnSwitchStatus = document.querySelectorAll('.btn-switch-status')
        const _token = $('meta[name=csrf-token]').attr("content")
        const btnSaveProducts = document.querySelector(".btn-save-products")
        const formExcel = document.querySelector("#importExel")
        let productsData;

        console.log(_token);
        
        btnSwitchStatus.forEach(btn => {
            btn.addEventListener('click', () => {
                id = btn.getAttribute('data-id')
                status = btn.getAttribute('checked')

                if (status) {
                    var prodStatus = 1;
                    btn.removeAttribute("checked");
                } else {
                    var prodStatus = 0;
                    btn.setAttribute("checked", true);
                }

                form = new FormData()
                form.append('_token', _token)
                form.append('_id', id)
                form.append('status', prodStatus)

                sendData(urlStatus, form)
            })
        })

        // Xử lý xóa các danh sách các sản phẩm
        deleteListItems(url, "sản phẩm", currentUrl)

        // Xử lý xóa từng sản phẩm
        const btnDropdownDelete = document.querySelectorAll('.BtnDropdownDelete')
        btnDropdownDelete.forEach(element => {
            element.addEventListener("click", () => {
                deleteItem(element, url, "sản phẩm", currentUrl)
            })
        });

        // xử lý gửi thêm sản phẩm bằng file excel
        formExcel.addEventListener("submit", (e) => {
            e.preventDefault()
            UploadExel()
                .then(data => {
                    productsData = data;
                    shorten()
                })
                .catch((error) => {
                    console.error(error)
                })
        });

        btnSaveProducts.addEventListener("click", () => {
            $('#previewImportProducts').modal('hide')
            data = {
                _token,
                data: productsData,
            }

            sendDataByJSON(urlUploadExcel, data);
        })
         

    });
</script>