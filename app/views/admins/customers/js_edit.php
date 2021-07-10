<script type="text/javascript">
  $(document).ready(function() {
    // Khai báo biến xài cho toàn file
    const id = document.querySelector('.container-edit-customer').getAttribute('data-id')
    const url = `{{ _WEB_ROOT }}/customer-update/id-${id}`
    const _token = $('meta[name=csrf-token]').attr("content");

    // Khai báo biến cho cập nhật thông tin khách hàng
    const btnEditInfo = document.querySelector('.btn-edit-info')
    const btnEditShippingAddress = document.querySelector('.btn-edit-shipping-address')
    const btnEditBillingAddress = document.querySelector('.btn-edit-billing-address')
    const btnEditFullName = document.querySelector('.btn-edit-fullName')
    const btnDeleteCustomer = document.querySelectorAll('.btn-delete-customer')

    const inputEditPhone = document.querySelector('#customer-phone-info-edit')
    const inputShippingAddress = document.querySelector('#customer-shipping-address-edit')
    const inputBillingAddress = document.querySelector('#customer-billing-address-edit')
    const inputFullName = document.querySelector('#fullNameLabel')

    const phoneElement = document.querySelector('.customer-phone-info')
    const shippingAddressElement = document.querySelector('.customer-shipping-address')
    const billingAddressElement = document.querySelector('.customer-billing-address')
    const emailElement = document.querySelector('.customer-email-info')
    const customerFullName = document.querySelectorAll('.customer-fullname')

    // Xử lý xự kiện bấm lưu tên khách hàng
    btnEditFullName.addEventListener('click', () => {
      let form = new FormData();
      form.append('fullname', inputFullName.value)
      form.append('_token', _token)

      sendData(url, form)
      customerFullName.forEach(element => {
        element.innerHTML = inputFullName.value
      })
    })

    // xử lý sự kiện bấm vào chỉnh sửa thông tin liên hệ
    btnEditInfo.addEventListener('click', (e) => {
      e.preventDefault();

      emailElement.style.backgroundColor = "#eee";
      phoneElement.style.display = 'none';
      inputEditPhone.style.display = 'block';
      inputEditPhone.focus();
    })

    // Xử lý cập nhật thông tin liên hệ
    ;['blur', 'change', 'keyup'].forEach(eventName => {
      inputEditPhone.addEventListener(eventName, (e) => {
        if (eventName == 'keyup') {
          if (e.keyCode != 13) {
            return false;
          }
        }

        phoneElement.innerHTML = inputEditPhone.value
        phoneElement.style.display = 'block'
        inputEditPhone.style.display = 'none'
        emailElement.style.backgroundColor = "#fff";

        let form = new FormData();
        form.append('phone', inputEditPhone.value)
        form.append('_token', _token)

        sendData(url, form)
      })
    })

    // xử lý sự kiện bấm vào chỉnh sửa địa chỉ giao hàng
    btnEditShippingAddress.addEventListener('click', (e) => {
      e.preventDefault();

      shippingAddressElement.style.display = 'none';
      inputShippingAddress.style.display = 'block';
      inputShippingAddress.focus();
    })

    // Xử lý cập nhật địa chỉ giao hàng
    ;['blur', 'change', 'keyup'].forEach(eventName => {
      inputShippingAddress.addEventListener(eventName, (e) => {
        if (eventName == 'keyup') {
          if (e.keyCode != 13) {
            return false;
          }
        }

        shippingAddressElement.innerHTML = inputShippingAddress.value
        shippingAddressElement.style.display = 'block'
        inputShippingAddress.style.display = 'none'

        let form = new FormData();
        form.append('shipping_address', inputShippingAddress.value)
        form.append('_token', _token)

        sendData(url, form)
      })
    })

    // xử lý sự kiện bấm vào chỉnh sửa địa chỉ thanh toán
    btnEditBillingAddress.addEventListener('click', (e) => {
      e.preventDefault();

      billingAddressElement.style.display = 'none';
      inputBillingAddress.style.display = 'block';
      inputBillingAddress.focus();
    })

    // Xử lý cập nhật địa chỉ thanh toán
    ;['blur', 'change', 'keyup'].forEach(eventName => {
      inputBillingAddress.addEventListener(eventName, (e) => {
        if (eventName == 'keyup') {
          if (e.keyCode != 13) {
            return false;
          }
        }

        billingAddressElement.innerHTML = inputBillingAddress.value
        billingAddressElement.style.display = 'block'
        inputBillingAddress.style.display = 'none'

        let form = new FormData();
        form.append('billing_address', inputBillingAddress.value)
        form.append('_token', _token)

        sendData(url, form)
      })
    })

    // Xử lý xóa khách hàng
    btnDeleteCustomer.forEach(element => {
      element.addEventListener('click', () => {
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
        function(isConfirm){
          if (isConfirm) {
            let form = new FormData();
            form.append('_id', id)
            form.append('_token', _token)
            urlDelete = `{{ _WEB_ROOT }}/customer-destroy`
            urlList = `{{ _WEB_ROOT }}/customer`

            sendData(urlDelete, form)
            redirect(urlList)
          } else {
            swal("Đóng!", "Không xóa khách hàng này!", "warning");
          }
        });
      })
    })
  });
</script>