<script>
    
    function handleVoucher(){
        var url = "{{_WEB_ROOT.'/kiem-tra-voucher'}}";
        var code = document.getElementById('coupon_code').value;
        var _token = $('input[name="_token"]').val();
        const form = new FormData();
        form.append('code', code);
        form.append('_token', _token);
        fetch(url, {
            method: 'POST',
            body: form
        })
            .then(res => res.json())
            .then(result => {
                console.log(result);
                if (result.status == "1") {
                    if (result.message) {
                        swal("Thành công!", result.message, "success")
                    }
                    if (result.location) {
                        redirect(result.location, result.time)
                    }
                    if(result.load){
                        $('#table_voucher').html(result.load);
                        if(result.price){
                            $('#voucher').html(formatNumber(result.price.price_vc));
                            $('#total').html(formatNumber(result.price.total));
                        }
                    }
                } else {
                    if (result.message) {
                        swal("Thất bại!", result.message, "error")
                    }
                    if (result.error) {
                        displayError(result.form, result.error)
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
            })
    }
    function deleteVoucher(id){
        var url = "{{_WEB_ROOT.'/xoa-voucher'}}";
        var _token = $('input[name="_token"]').val();
        const form = new FormData();
        form.append('code', id);
        form.append('_token', _token);
        fetch(url, {
            method: 'POST',
            body: form
        })
            .then(res => res.json())
            .then(result => {
                console.log(result);
                if (result.status == "1") {
                    if (result.message) {
                        swal("Thành công!", result.message, "success")
                    }
                    if (result.location) {
                        redirect(result.location, result.time)
                    }
                    if(result.load){
                        $('#table_voucher').html(result.load);
                        if(result.price){
                            $('#voucher').html(formatNumber(result.price.price_vc));
                            $('#total').html(formatNumber(result.price.total));
                        }
                    }
                } else {
                    if (result.message) {
                        swal("Thất bại!", result.message, "error")
                    }
                    if (result.error) {
                        displayError(result.form, result.error)
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
            })
    }

    function handleCart(){
        var url = "{{_WEB_ROOT.'/handle-checkout'}}";
        var _token = $('input[name="_token"]').val();
        const form = new FormData();
        form.append('_token', _token);
        sendData(url, form);
    }
    
</script>