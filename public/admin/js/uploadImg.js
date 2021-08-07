
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
            element.parentElement.remove()
            return true
        }
        element = element.parentElement
    }
}

// handle drag drop image in gallery

function dragStart(e) {
    this.style.opacity = '0.4'
    dragSrcEl = this
    e.dataTransfer.effectAllowed = 'move'
    e.dataTransfer.setData('text/html', this.querySelector('img').src)
};

function dragEnter(e) {
    this.querySelector('img').classList.add('card-hint')
}

function dragLeave(e) {
    e.stopPropagation()
    this.querySelector('img').classList.remove('card-hint')
}

function dragOver(e) {
    e.preventDefault()
    e.dataTransfer.dropEffect = 'move'
    return false
}

function dragDrop(e) {
    if (dragSrcEl != this) {
        dragSrcEl.querySelector('img').src = this.querySelector('img').src
        this.querySelector('img').src = e.dataTransfer.getData('text/html')
    }
    return false;
}

function dragEnd(e) {
    var list_img = document.querySelectorAll('.card-image-wrapper')
    list_img.forEach(card => {
        card.querySelector('img').classList.remove('card-hint')
    });

    this.style.opacity = '1'
}

function addEventsDragAndDrop(el) {
    el.addEventListener('dragstart', dragStart, false);
    el.addEventListener('dragenter', dragEnter, false);
    el.addEventListener('dragover', dragOver, false);
    el.addEventListener('dragleave', dragLeave, false);
    el.addEventListener('drop', dragDrop, false);
    el.addEventListener('dragend', dragEnd, false);
}

// end handle drag drop image in gallery

function catchEvent(card) {
    let btnDeleteCardImg = document.querySelectorAll('.btn-delete-card-img')
    btnDeleteCardImg.forEach(element => {
        element.addEventListener('click', () => {
            removeFile(element)
        })
    })

    if (typeof card == 'string') {
        var list_img = document.querySelectorAll(`.${card}`)

        list_img.forEach(card => {
            card.draggable = true
            card.querySelector('img').draggable = false
            addEventsDragAndDrop(card)
        })
    } else {
        card.draggable = true
        card.querySelector('img').draggable = false
        addEventsDragAndDrop(card)
    }
}

function previewFile(file) {
    return new Promise((resolve, reject) => {
        let reader = new FileReader()
        reader.readAsDataURL(file)
        reader.onloadend = function () {
            let boxImg = document.createElement('div')
            boxImg.classList.add('col-6', 'col-sm-4', 'col-md-3', 'mb-3', 'mb-lg-5', 'card-image-wrapper', 'add-more-card')
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
                
            if (reader.result) {
                boxImg.querySelector('.card-img-top').src = reader.result
                document.getElementById('fancyboxGallery').appendChild(boxImg)
                resolve(boxImg)
            } else {
                reject("Không đọc được file")
            }
        }
    })
}

function handleFiles(files) {
    files = [...files]
    files.forEach(file => {
        previewFile(file)
            .then((boxImg) => {
                catchEvent(boxImg)
            })
            .catch((err) => {
                console.error(err)
            })
    })
}

function handleDataUpload(data, token, classCardImg) {
    imgUploads = [];
    imageCards = document.querySelectorAll(`.${classCardImg}`)
    imageCards.forEach(card => {
        imgUploads.push(card.src)
    })

    newData = {
        ...data,
        file: imgUploads,
        _token: token
    }
    newData.fileImg = undefined

    return newData
}


