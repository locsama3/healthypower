
const excelFile = document.querySelector("input[name = 'fileExel']")
const formExcel = document.querySelector("#importExel")

let selectedFile

excelFile.addEventListener("change", (event) => {
    selectedFile = event.target.files[0]
    formExcel.querySelector('.form-message').innerHTML = ''
    displayFile = formExcel.querySelector('.display-file')
    displayFile.classList.remove('d-none')
    displayFile.classList.add('d-flex')
    displayFile.querySelector('.name-file').innerHTML = selectedFile.name
})

function UploadExel() {
    return new Promise((resolve, reject) => {
        //Validate whether File is valid Excel file.
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.xls|.xlsx)$/
        if (regex.test(excelFile.value.toLowerCase())) {
            if (typeof (FileReader) != "undefined") {
                if(selectedFile) {
                    var fileReader = new FileReader()
        
                    fileReader.readAsBinaryString(selectedFile)
                    fileReader.onload = (event)=>{
                        let data = event.target.result
                        let workbook = XLSX.read(data,{type:"binary"})
                        console.log(workbook)
                        workbook.SheetNames.forEach(sheet => {
                            let rowObject = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheet])
                            let productsData = rowObject
                            console.log(rowObject)

                            $('#importProductsModal').modal('hide')
                            reviewExcelFile(rowObject)

                            resolve(productsData)
                        })
                    }
                }
            } else {
                formExcel.querySelector('.form-message').innerHTML = "Trình duyệt này không hỗ trợ html5"
            }
        } else {
            formExcel.querySelector('.form-message').innerHTML = "Vui lòng nhập file exel"
        }
    })
};

function reviewExcelFile(objectFile) {
    var keys = Object.keys(objectFile[0])
    var dataHead = keys.map(key => `<th scope="col">${key}</th>`).join('')
    dataHead = `<th scope="col">stt</th>` + dataHead;

    var dataBody = objectFile.reduce((total,item, index) => {
        let values = Object.values(item);
        let dataRow = values.map(column => `<td class="text-shorten">${column}</td>`).join('');
        dataRow = `<th class="text-shorten" scope="row">${index + 1}</th>` + dataRow
        let row = `<tr>${dataRow}</tr>`

        return total + row
    }, '')

    let table = `<table class="table">
                    <thead class="thead-light">
                        ${dataHead}
                    </thead>
                    <tbody>
                        ${dataBody}
                    </tbody>
                </table>`

    $('#previewImportProducts').find('.modal-body').html(table)
    $('#previewImportProducts').modal('show')
}

function shorten() {
    $(".text-shorten").html(function (index, currentHTML) {
        if (currentHTML.length >= 90) {
            return currentHTML.substr(0, 90) + '...';
        }
    });
}

