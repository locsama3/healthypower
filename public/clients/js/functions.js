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
                if (result.message) {
                    swal("Thành công!", result.message, "success")
                }
                if (result.location) {
                    redirect(result.location, result.time)
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
                if (result.message) {
                    swal("Thành công!", result.message, "success")
                }
                if (result.location) {
                    redirect(result.location, result.time)
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
            function (isConfirm) {
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
                    swal("Đóng!", `Không xóa ${itemName} này!`, "warning");
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
        function (isConfirm) {
            if (isConfirm) {
                var _id = item.getAttribute('data-id')
                const _token = $('meta[name=csrf-token]').attr("content")

                let form = new FormData();
                form.append('_id', _id)
                form.append('_token', _token)

                sendData(url, form)
                redirect(location, 1000)
            } else {
                swal("Đóng!", `Không xóa ${itemName} này!`, "warning");
            }
        });
}

// Hàm hiển thị lỗi khi server trả dữ liệu lỗi về client
function displayError(Selectorform, error) {
    var form = document.querySelector(Selectorform)
    console.log(form);
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


function updateListItems(url, location) {
    console.log(1);
    const _token = $('meta[name=csrf-token]').attr("content")
    let id_array = []

    
    swal({
        title: "Cập nhật",
        text: `Bạn có chắc chắn muốn cập nhật không?`,
        type: "info",
        showCancelButton: true,
        confirmButtonClass: "btn-success",
        confirmButtonText: "Cập nhật",
        cancelButtonText: "Không",
        closeOnConfirm: false,
        closeOnCancel: false
        },
        function(isConfirm) {
            if (isConfirm) {
                var checkboxInputs = document.querySelectorAll('.checked-update')
                var data = document.querySelector('#selectorStatus').value; 
                checkboxInputs.forEach((checkbox) => {
                    if (checkbox.checked) {
                        id = checkbox.value
                        id_array.push(id) 
                    }
                })

                let form = new FormData();
                form.append('_id', id_array)
                form.append('_content', data)
                form.append('_token', _token)

                sendData(url, form)
                redirect(location, 700)
            } else {
                swal("Đóng!",  `Không cập nhật theo yêu cầu !`, "warning");
            }
        });

} 


function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
}


