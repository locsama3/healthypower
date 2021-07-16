
// handle upload file image
let dropArea = document.getElementById('drop-area')
let inputFile = document.querySelector('#fileElem')

;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, preventDefaults, false)
})

function preventDefaults(e) {
    e.preventDefault()
    e.stopPropagation()
}

;['dragenter', 'dragover'].forEach(eventName => {
    dropArea.addEventListener(eventName, highlight, false)
})

;['dragleave', 'drop'].forEach(eventName => {
    dropArea.addEventListener(eventName, unhighlight, false)
})

function highlight(e) {
    dropArea.classList.add('highlight')
}

function unhighlight(e) {
    dropArea.classList.remove('highlight')
}

inputFile.addEventListener('change', () => {
    handleFiles(inputFile.files)
})

dropArea.addEventListener('drop', handleDrop, false)

function handleDrop(e) {
    let dt = e.dataTransfer
    let files = dt.files

    handleFiles(files)
}

function removeFile(element) {
    while (element.parentElement) {
        if (element.parentElement.matches(".card-image-wrapper")) {
            element.parentElement.remove();
            return true;
        }
        element = element.parentElement;
    }
}

function catchEvent() {
    let btnDeleteCardImg = document.querySelectorAll('.btn-delete-card-img')
    btnDeleteCardImg.forEach(element => {
        element.addEventListener('click', () => {
            removeFile(element)
        })
    })
}

function previewFile(file) {
    let reader = new FileReader()
    reader.readAsDataURL(file)
    reader.onloadend = function () {
        let boxImg = document.createElement('div')
        boxImg.classList.add('col-6', 'col-sm-4', 'col-md-3', 'mb-3', 'mb-lg-5', 'card-image-wrapper')
        boxImg.innerHTML = `<!-- Card -->
    <div class="card card-sm">
    <img class="card-img-top" src="" alt="Image Description">

    <div class="card-body">
        <div class="row text-center">
        <div class="col">
            <a class="js-fancybox-item text-body" href="javascript:;" data-toggle="tooltip" data-placement="top" title="View" data-src="{{ _WEB_ROOT }}/public/admin/img/1920x1080/img1.jpg" data-caption="Image #02">
            <i class="tio-visible-outlined"></i>
            </a>
        </div>

        <div class="col column-divider">
            <div class="text-danger btn-delete-card-img" data-placement="top" title="Delete">
            <i class="tio-delete-outlined"></i>
            </div>
        </div>
        </div>
        <!-- End Row -->
    </div>
    </div>
    <!-- End Card -->`
        boxImg.querySelector('.card-img-top').src = reader.result

        document.getElementById('fancyboxGallery').appendChild(boxImg)
    }

    return new Promise((resolve) => {
        setTimeout(catchEvent, 500);
    });
}

function handleFiles(files) {
    files = [...files]
    files.forEach(previewFile)
}

function handleDataUpload(data, token, classCardImg) {
    imgUploads = [];
    imageCards = document.querySelectorAll(`.${classCardImg}`)
    imageCards.forEach(card => {
        imgUploads.push(card.src);
    })

    newData = {
        ...data,
        file: [...imgUploads],
        _token: token
    }
    newData.fileImg = undefined

    return newData;
}
