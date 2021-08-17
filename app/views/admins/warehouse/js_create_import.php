<script>
    $(document).ready(function() {
        $(document).on('click', '.add', function() {
            if(check = 1){
                $(".item_name").prop('disabled', true);
            }
            var html = '';
            
            html += '<tr class="row">';
            html += '<td class="col-6"><input type="text" placeholder="Tên sản phẩm" id="search" name="item_name[]" class="form-control item_name" /><ul style="overflow-y: auto; min-height: 100%; z-index: 99999; position: absolute; height: 100px; background-color: #fff; top: auto; padding-bottom: 20px; left: auto;" class="list-group" id="result"></ul></td>';
            html += '<td class="col-2"><input type="text" placeholder="Nhập số lượng" name="item_quantity[]" class="form-control item_quantity" /></td>';
            html += '<td class="col-3"><input type="text" placeholder="Nhập giá" name="item_price[]" class="form-control item_price" /></td>';
            html += '<td class="col-1"><button type="button" name="remove" class="btn btn-danger btn-sm remove">Xóa</button></td></tr>';
            
            
            if(check == null){
                $('#table-import').prepend(html);
                var check = 1;
            }else{
                if($('.item_name').val() == "" || $('.item_quantity').val() == "" || $('.item_price').val() == ""){
                    swal("Thất bại!", "Bạn cần nhập đầy đủ thông tin", "error");
                    $("#search").prop('disabled', false);
                }else{
                    $('#table-import').prepend(html);
                }
            }
            var check = null;
            
        });
        
        $(document).on('click', '.remove', function() {
            $(this).closest('tr').remove();
        });


        $.ajaxSetup({
            cache: false
        });
        $(document).on('keyup', '.item_name', function() {
            $('#result').html('');
            $('#state').val('');
            var searchField = $('.item_name').val();
            var expression = new RegExp(searchField, "i");
            $.getJSON('{{_WEB_ROOT."/warehouse-get-product"}}', function(data) {
                $.each(data, function(key, value) {
                    if (value.value.search(expression) != -1 || value.id.search(expression) != -1) {
                        $('#result').append(`<li style="cursor: pointer;" value="${value.id}" id="${value.id}" class="list-group-item link-class">${value.value}</li>`);
                    }
                });
            });
        });

        $(document).on('click', 'li', function() {
            var click_text = $(this).text().split('|');
            var val_li = $(this).val();
            var input = $('#' + val_li).parent().parent().children();
            input.val($.trim(click_text[0]));
            input.attr('data-product', val_li);
            $('#result').html('');
        });




        $(document).on('click', '.insert', function() {
            var _token = $('meta[name=csrf-token]').attr("content");
            var user_id = $('#import_name').val();
            var store_id = $('#import_store').val();
            var countProduct = $('input[name="item_name[]"]');
            var product_id = $('input[name="item_name[]"]').map(function() {
                return $(this).data('product');
            }).get();
            var quantity = $('input[name="item_quantity[]"]').map(function() {
                return $(this).val();
            }).get();
            var price = $('input[name="item_price[]"]').map(function() {
                return $(this).val();
            }).get();
            var array = [];
            for (var i = 0; i < countProduct.length; i++) {
                array.push([
                    ['id', product_id[i]],
                    ['qty', quantity[i]],
                    ['price', price[i]]
                ]);
            }
            console.log(product_id);
            var data = new FormData();
            data.append('_token', _token);
            data.append('user_id', user_id);
            data.append('store_id', store_id);
            data.append('product', array);

            var url = "{{_WEB_ROOT.'/warehouse-success-import'}}";

            sendData(url, data);
        })

    });
</script>