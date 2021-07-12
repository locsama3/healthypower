// Xử lý chuyển hướng client
function redirect(url = "", time = 2000) {
    if (url == "") {
        location.reload();
        return;
    }

    setTimeout(() => {
        window.location = url;
    }, time)
}

// Hàm gửi dữ liệu lên server
function sendData(url, data) {
    fetch(url, {
        method: 'POST',
        body: data
    })
        .then(res => res.json())
        .then(result => {
            if (result.status == "1") {
                swal("Thành công!", result.message, "success")
            } else {
                swal("Thất bại!", result.message, "error")
            }
        })
        .catch(error => {
            console.error('Error:', error);
        })
}

// Hàm gửi dữ liệu lên server bằng json
function sendDataByJSON(url, data) {
    fetch(url, {
        method: 'POST',
        headers: { 
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(res => res.json())
        .then(result => {
            if (result.status == "1") {
                swal("Thành công!", result.message, "success")
            } else {
                swal("Thất bại!", result.message, "error")
            }
        })
        .catch(error => {
            console.error('Error:', error);
        })
}

// Hàm xóa danh sách các phần tử
function deleteListItems(url, itemName, location) {
    const _token = $('meta[name=csrf-token]').attr("content")
    let data = []

    // khai báo đối tượng xóa nhiều phần tử
    const btnDeleteAll = document.querySelector('#btn-delete-all')

    btnDeleteAll.addEventListener('click', () => {
      swal({
          title: "Xóa",
          text: `Bạn có chắc chắn muốn xóa ${itemName} này không?`,
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
            var checkboxInputs = document.querySelectorAll('.checkbox-input')
            checkboxInputs.forEach((checkbox) => {
              if (checkbox.checked) {
                id = checkbox.value
                data.push(id) 
              }
            })

            let form = new FormData();
            form.append('_id', data)
            form.append('_token', _token)

            sendData(url, form)
            redirect(location, 1000)
          } else {
            swal("Đóng!",  `Không xóa ${itemName} này!`, "warning");
          }
        });
    })
  }

// Hàm xóa 1 phần tử
function deleteItem(item, url, itemName, location) {
    swal({
        title: "Xóa",
        text: `Bạn có chắc chắn muốn xóa ${itemName} này không?`,
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
            var _id = item.getAttribute('data-id')
            const _token = $('meta[name=csrf-token]').attr("content")

            let form = new FormData();
            form.append('_id', _id)
            form.append('_token', _token)

            sendData(url, form)
            redirect(location, 1000)
        } else {
            swal("Đóng!",  `Không xóa ${itemName} này!`, "warning");
        }
    });
}