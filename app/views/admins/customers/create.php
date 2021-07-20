  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->



  <!-- End Navbar Vertical -->

  <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
          <!-- Page Header -->
          <div class="page-header">
              <div class="row align-items-center">
                  <div class="col-sm mb-2 mb-sm-0">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb breadcrumb-no-gutter">
                              <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ _WEB_ROOT }}/customer">Khách hàng</a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">Thêm khách hàng</li>
                          </ol>
                      </nav>

                      <h1 class="page-header-title">Thêm khách hàng</h1>
                  </div>
              </div>
          </div>
          <!-- End Page Header -->

          <div class="row">
              <div class="col-lg-4 mb-3 mb-lg-0">
                  <h4>Thông tin tài khoản</h4>
              </div>

              <div class="col-lg-8">
                  <!-- Card -->
                  <div class="card">
                      <!-- Body -->
                      <form method="post" id="form-info-account" enctype="multipart/form-data">
                          <div class="card-body">
                              <input type="hidden" id="form-info-input" name="formInfor" value="form-info-account">

                              <label for="avatarUploader" class="input-label">Avatar</label>
                              <div class="d-flex align-items-center mb-3">
                                  <!-- Avatar -->
                                  <label class="avatar avatar-xl avatar-circle avatar-uploader mr-5" for="avatarUploader">
                                      <img id="avatarImg" class="avatar-img" src="{{ _WEB_ROOT }}/public/admin/img/160x160/img1.jpg" alt="Image Description">

                                      <input type="file" class="js-file-attach avatar-uploader-input" name="avatarUpload" id="avatarUploader" data-hs-file-attach-options='{
                                            "textTarget": "#avatarImg",
                                            "mode": "image",
                                            "targetAttr": "src",
                                            "resetTarget": ".js-file-attach-reset-img",
                                            "resetImg": "{{ _WEB_ROOT }}/public/admin/img/160x160/img1.jpg",
                                            "allowTypes": [".png", ".jpeg", ".jpg"]
                                        }'>

                                      <span class="avatar-uploader-trigger">
                                          <i class="tio-edit avatar-uploader-icon shadow-soft"></i>
                                      </span>
                                  </label>
                                  <!-- End Avatar -->

                                  <button type="button" class="js-file-attach-reset-img btn btn-white">Xóa</button>
                              </div>
                              <div class="row">
                                  <div class="col-sm-6">
                                      <!-- Form Group -->
                                      <div class="form-group">
                                          <label for="firstNameLabel" class="input-label">Tên</label>
                                          <input type="text" class="form-control" name="firstName" id="firstNameLabel" placeholder="Tùng" aria-label="Clarice">
                                          <span class="form-message"></span>
                                      </div>
                                      <!-- End Form Group -->
                                  </div>

                                  <div class="col-sm-6">
                                      <!-- Form Group -->
                                      <div class="form-group">
                                          <label for="lastNameLabel" class="input-label">Họ</label>
                                          <input type="text" class="form-control" name="lastName" id="lastNameLabel" placeholder="Sơn" aria-label="Boone">
                                          <span class="form-message"></span>
                                      </div>
                                      <!-- End Form Group -->
                                  </div>
                              </div>
                              <!-- End Row -->

                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="emailLabel" class="input-label">Email</label>
                                  <input type="email" class="form-control" name="email" id="emailLabel" placeholder="healthypower@example.com" aria-label="clarice@example.com">
                                  <span class="form-message"></span>
                              </div>
                              <!-- End Form Group -->

                              <!-- Form Group -->
                              <div class="js-add-field form-group" data-hs-add-field-options='{
                                    "template": "#addPhoneFieldTemplate",
                                    "container": "#addPhoneFieldContainer",
                                    "defaultCreated": 0
                                }'>
                                  <label for="phoneLabel" class="input-label">Số điện thoại <span class="input-label-secondary">(Optional)</span></label>

                                  <div class="input-group input-group-sm-down-break align-items-center">
                                      <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                            "template": "(+84) 000 000 000"
                                        }'>

                                      <div class="input-group-append">
                                          <!-- Select -->
                                          <div class="select2-custom">
                                              <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" name="phoneSelect" data-hs-select2-options='{
                                            "minimumResultsForSearch": "Infinity",
                                            "dropdownAutoWidth": true,
                                            "width": "6rem"
                                        }'>
                                                  <option value="Mobile" selected="">Mobile</option>
                                                  <option value="Home">Nhà</option>
                                                  <option value="Work">Công việc</option>
                                                  <option value="Fax">Fax</option>
                                                  <option value="Direct">Direct</option>
                                              </select>
                                              <!-- End Select -->
                                          </div>
                                      </div>
                                  </div>
                                  <span class="form-message"></span>
                              </div>
                              <!-- End Form Group -->

                              <div class="form-group">
                                  <label class="input-label">Giới tính</label>
                                  <!-- Input Group -->
                                  <div class="input-group input-group-md-down-break">
                                      <!-- Custom Radio -->
                                      <div class="form-control">
                                          <div class="custom-control custom-radio">
                                              <input type="radio" class="custom-control-input" name="gender" id="genderTypeRadioEg1" value="1">
                                              <label class="custom-control-label" for="genderTypeRadioEg1">Nam</label>
                                          </div>
                                      </div>
                                      <!-- End Custom Radio -->

                                      <!-- Custom Radio -->
                                      <div class="form-control">
                                          <div class="custom-control custom-radio">
                                              <input type="radio" class="custom-control-input" name="gender" id="genderTypeRadioEg2" value="2">
                                              <label class="custom-control-label" for="genderTypeRadioEg2">Nữ</label>
                                          </div>
                                      </div>
                                      <!-- End Custom Radio -->

                                      <!-- Custom Radio -->
                                      <div class="form-control">
                                          <div class="custom-control custom-radio">
                                              <input type="radio" class="custom-control-input" name="gender" id="genderTypeRadioEg3" value="3">
                                              <label class="custom-control-label" for="genderTypeRadioEg3">Khác</label>
                                          </div>
                                      </div>
                                      <!-- End Custom Radio -->
                                  </div>
                                  <!-- End Input Group -->
                                  <span class="form-message"></span>
                              </div>

                              <!-- Custom Checkbox -->
                              <div class="custom-control custom-checkbox form-group">
                                  <input type="checkbox" class="custom-control-input" id="marketingEmailsCheckbox">
                                  <label class="custom-control-label" for="marketingEmailsCheckbox">Tôi muốn nhận thông báo, email, và thông tin khuyến mãi</label>
                              </div>
                              <!-- End Custom Checkbox -->

                              <div class="d-flex justify-content-end">
                                  <button type="button" class="btn btn-white mr-2">Nhập lại</button>
                                  <button type="submit" class="btn btn-primary">Lưu</button>
                              </div>
                          </div>
                          <!-- Body -->
                      </form>
                  </div>
                  <!-- End Card -->
              </div>
          </div>
          <!-- End Row -->

          <hr class="my-5">

          <div class="row">
              <div class="col-lg-4 mb-3 mb-lg-0">
                  <h4>Địa chỉ giao hàng</h4>
                  <p>Địa chỉ giao hàng chính của khách hàng</p>
              </div>

              <div class="col-lg-8">
                  <!-- Card -->
                  <div class="card">
                      <form method="post" id="form-shipping-address">
                          <!-- Body -->
                          <div class="card-body">
                              <input type="hidden" id="form-shipping" name="formInfor" value="form-shipping-address">
                              
                                <!-- Tỉnh - Thành phố -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="province" class="input-label">Tỉnh/Thành phố <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tỉnh/Thành phố"></i></label>
                                        </div>
                                        
                                        <div class="col-8">
                                        <div class="input-group-prepend">
                                            <!-- Select -->
                                            <select name="province" id="province" class="js-select2-custom custom-select  load_province" size="1" style="opacity: 1;" data-hs-select2-options='{
                                                    "minimumResultsForSearch": "Infinity"
                                                    }'>
                                                <option value="" disabled="" selected="">---Chọn Tỉnh/Thành phố---</option>
                                            
                                            </select>
                                            <!-- End Select -->
                                        </div>
                                        <span class="form-message"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Tỉnh - Thành phố -->
                                <!-- Quận - Huyện -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="district" class="input-label">Quận/Huyện <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tỉnh/Thành phố"></i></label>
                                        </div>
                                        
                                        <div class="col-8">
                                        <div class="input-group-prepend">
                                            <!-- Select -->
                                            <select name = "district" id = "district" class="js-select2-custom custom-select" size="1" style="opacity: 1;" data-hs-select2-options='{
                                                    "minimumResultsForSearch": "Infinity"
                                                    }'>
                                                <option value="" disabled="" selected="">---Chọn Quận/Huyện---</option>
                                            
                                            </select>
                                            <!-- End Select -->
                                        </div>
                                        <span class="form-message"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Quận - Huyện -->
                                <!-- Xã - Phường - Thị trấn -->
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <label for="ward" class="input-label">Xã/Phường/Thị trấn <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tỉnh/Thành phố"></i></label>
                                        </div>
                                        
                                        <div class="col-8">
                                        <div class="input-group-prepend">
                                            <!-- Select -->
                                            <select name = "ward" id = "ward" class="js-select2-custom custom-select" size="1" style="opacity: 1;" data-hs-select2-options='{
                                                    "minimumResultsForSearch": "Infinity"
                                                    }'>
                                                <option value="" disabled="" selected="">---Chọn Xã/Phường/Thị trấn---</option>
                                            
                                            </select>
                                            <!-- End Select -->
                                        </div>
                                        <span class="form-message"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Xã - Phường - Thị trấn -->
                           
                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="AddressLine1Label" class="input-label">Địa chỉ chi tiết</label>
                                  <input type="text" class="form-control" name="AddressLine1" id="AddressLine1Label" placeholder="Địa chỉ của khách hàng" aria-label="Your address">
                              </div>
                              <!-- End Form Group -->

                              <!-- Form Group -->
                              <div class="form-group">
                                  <label for="addresszipCodeLabel" class="input-label">Zip code <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Bạn có thể tìm mã ZIP trong địa chỉ bưu điện"></i></label>

                                  <input type="text" class="js-masked-input form-control" name="addresszipCode" id="addresszipCodeLabel" placeholder="Mã ZIP" aria-label="Your zip code" data-hs-mask-options='{
                                    "template": "AA0 0AA"
                                    }'>
                              </div>
                              <!-- End Form Group -->

                              <div class="d-flex justify-content-end">
                                  <button type="button" class="btn btn-white mr-2">Nhập lại</button>
                                  <button type="submit" class="btn btn-primary">Lưu</button>
                              </div>
                          </div>
                          <!-- Body -->
                      </form>
                  </div>
                  <!-- End Card -->
              </div>
          </div>
          <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->

      <div class="footer">
          <div class="row justify-content-between align-items-center">
              <div class="col">
                  <p class="font-size-sm mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2020 Htmlstream.</span></p>
              </div>
              <div class="col-auto">
                  <div class="d-flex justify-content-end">
                      <!-- List Dot -->
                      <ul class="list-inline list-separator">
                          <li class="list-inline-item">
                              <a class="list-separator-link" href="#">FAQ</a>
                          </li>

                          <li class="list-inline-item">
                              <a class="list-separator-link" href="#">License</a>
                          </li>

                          <li class="list-inline-item">
                              <!-- Keyboard Shortcuts Toggle -->
                              <div class="hs-unfold">
                                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                              "target": "#keyboardShortcutsSidebar",
                              "type": "css-animation",
                              "animationIn": "fadeInRight",
                              "animationOut": "fadeOutRight",
                              "hasOverlay": true,
                              "smartPositionOff": true
                             }'>
                                      <i class="tio-command-key"></i>
                                  </a>
                              </div>
                              <!-- End Keyboard Shortcuts Toggle -->
                          </li>
                      </ul>
                      <!-- End List Dot -->
                  </div>
              </div>
          </div>
      </div>



      <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- Activity -->
  <div id="activitySidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card">
          <div class="card-header">
              <h4 class="card-header-title">Activity stream</h4>

              <!-- Toggle Button -->
              <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
              "target": "#activitySidebar",
              "type": "css-animation",
              "animationIn": "fadeInRight",
              "animationOut": "fadeOutRight",
              "hasOverlay": true,
              "smartPositionOff": true
             }'>
                  <i class="tio-clear tio-lg"></i>
              </a>
              <!-- End Toggle Button -->
          </div>

          <!-- Body -->
          <div class="card-body sidebar-body sidebar-scrollbar">
              <!-- Step -->
              <ul class="step step-icon-sm step-avatar-sm">
                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <div class="step-avatar">
                              <img class="step-avatar-img" src="assets\img\160x160\img9.jpg" alt="Image Description">
                          </div>

                          <div class="step-content">
                              <h5 class="mb-1">Iana Robinson</h5>

                              <p class="font-size-sm mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fd-7</a></p>

                              <ul class="list-group list-group-sm">
                                  <!-- List Item -->
                                  <li class="list-group-item list-group-item-light">
                                      <div class="row gx-1">
                                          <div class="col-6">
                                              <div class="media">
                                                  <span class="mt-1 mr-2">
                                                      <img class="avatar avatar-xs" src="assets\svg\brands\excel.svg" alt="Image Description">
                                                  </span>
                                                  <div class="media-body text-truncate">
                                                      <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                                                      <small class="d-block text-muted">12kb</small>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="col-6">
                                              <div class="media">
                                                  <span class="mt-1 mr-2">
                                                      <img class="avatar avatar-xs" src="assets\svg\brands\word.svg" alt="Image Description">
                                                  </span>
                                                  <div class="media-body text-truncate">
                                                      <span class="d-block font-size-sm text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                                                      <small class="d-block text-muted">4kb</small>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                                  <!-- End List Item -->
                              </ul>

                              <small class="text-muted text-uppercase">Now</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <span class="step-icon step-icon-soft-dark">B</span>

                          <div class="step-content">
                              <h5 class="mb-1">Bob Dean</h5>

                              <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-6</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                              <small class="text-muted text-uppercase">Today</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <div class="step-avatar">
                              <img class="step-avatar-img" src="assets\img\160x160\img3.jpg" alt="Image Description">
                          </div>

                          <div class="step-content">
                              <h5 class="h5 mb-1">Crane</h5>

                              <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                              <ul class="list-group list-group-sm">
                                  <li class="list-group-item list-group-item-light">
                                      <div class="row gx-1">
                                          <div class="col">
                                              <img class="img-fluid rounded ie-sidebar-activity-img" src="assets\svg\illustrations\card-1.svg" alt="Image Description">
                                          </div>
                                          <div class="col">
                                              <img class="img-fluid rounded ie-sidebar-activity-img" src="assets\svg\illustrations\card-2.svg" alt="Image Description">
                                          </div>
                                          <div class="col">
                                              <img class="img-fluid rounded ie-sidebar-activity-img" src="assets\svg\illustrations\card-3.svg" alt="Image Description">
                                          </div>
                                          <div class="col-auto align-self-center">
                                              <div class="text-center">
                                                  <a href="#">+2</a>
                                              </div>
                                          </div>
                                      </div>
                                  </li>
                              </ul>

                              <small class="text-muted text-uppercase">May 12</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <span class="step-icon step-icon-soft-info">D</span>

                          <div class="step-content">
                              <h5 class="mb-1">David Lidell</h5>

                              <p class="font-size-sm mb-1">Added a new member to Front Dashboard</p>

                              <small class="text-muted text-uppercase">May 15</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <div class="step-avatar">
                              <img class="step-avatar-img" src="assets\img\160x160\img7.jpg" alt="Image Description">
                          </div>

                          <div class="step-content">
                              <h5 class="mb-1">Rachel King</h5>

                              <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-success badge-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

                              <small class="text-muted text-uppercase">Apr 29</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <div class="step-avatar">
                              <img class="step-avatar-img" src="assets\img\160x160\img5.jpg" alt="Image Description">
                          </div>

                          <div class="step-content">
                              <h5 class="mb-1">Finch Hoot</h5>

                              <p class="font-size-sm mb-1">Earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>

                              <small class="text-muted text-uppercase">Apr 06</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->

                  <!-- Step Item -->
                  <li class="step-item">
                      <div class="step-content-wrapper">
                          <span class="step-icon step-icon-soft-primary">
                              <i class="tio-user"></i>
                          </span>

                          <div class="step-content">
                              <h5 class="mb-1">Project status updated</h5>

                              <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In
                                      progress"</span></p>

                              <small class="text-muted text-uppercase">Feb 10</small>
                          </div>
                      </div>
                  </li>
                  <!-- End Step Item -->
              </ul>
              <!-- End Step -->

              <a class="btn btn-block btn-white" href="javascript:;">View all <i class="tio-chevron-right"></i></a>
          </div>
          <!-- End Body -->
      </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <!-- Header -->
              <div class="modal-close">
                  <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
                      <i class="tio-clear tio-lg"></i>
                  </button>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="modal-body p-sm-5">
                  <div class="text-center">
                      <div class="w-75 w-sm-50 mx-auto mb-4">
                          <img class="img-fluid" src="assets\svg\illustrations\graphs.svg" alt="Image Description">
                      </div>

                      <h4 class="h1">Welcome to Front</h4>

                      <p>We're happy to see you in our community.</p>
                  </div>
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <div class="modal-footer d-block text-center py-sm-5">
                  <small class="text-cap mb-4">Trusted by the world's best teams</small>

                  <div class="w-85 mx-auto">
                      <div class="row justify-content-between">
                          <div class="col">
                              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\gitlab-gray.svg" alt="Image Description">
                          </div>
                          <div class="col">
                              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\fitbit-gray.svg" alt="Image Description">
                          </div>
                          <div class="col">
                              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\flow-xo-gray.svg" alt="Image Description">
                          </div>
                          <div class="col">
                              <img class="img-fluid ie-welcome-brands" src="assets\svg\brands\layar-gray.svg" alt="Image Description">
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Footer -->
          </div>
      </div>
  </div>
  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->