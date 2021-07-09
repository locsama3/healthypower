// Xử lý chuyển hướng client
function redirect(url) {
    setTimeout(() => {
        window.location = url;
    }, 3000)
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