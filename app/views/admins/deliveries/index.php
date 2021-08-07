<!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main">
      <!-- Content -->
      <form id ="form-delivery" class="content container-fluid"\>
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-products.html">Phí vận chuyển</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Kiểm tra phí vận chuyển</li>
                </ol>
              </nav>
              <h1 class="page-header-title">Kiểm tra phí vận chuyển</h1>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->
  
        <div class="row">
          <div class="mx-auto col-lg-8">
            <!-- Địa chỉ cửa hàng -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Thông tin kho hàng</h4>
              </div>
              <!-- End Header -->
              <!-- Body -->
              <div class="card-body">
                <!-- Tỉnh - Thành phố -->
                <div class="form-group">
                  <div class="row">
                    <div class="col-4">
                      <label for="provinceShop" class="input-label">Tỉnh/Thành phố <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tỉnh/Thành phố"></i></label>
                    </div>
                    
                    <div class="col-8">
                      <div class="input-group-prepend">
                        <!-- Select -->
                        <select name = "provinceShop" id = "provinceShop" class="js-select2-custom custom-select load_province" size="1" style="opacity: 1;" data-hs-select2-options='{
                                  "minimumResultsForSearch": "Infinity"
                                }'>
                            <option value="" disabled="" selected="">Hãy chọn Tỉnh/Thành phố</option>
                          
                        </select>
                        <!-- End Select -->
                      </div>
                      <span class="form-message">
                        
                      </span>
                    </div>
                  </div>
                </div>
                <!-- End Tỉnh - Thành phố -->
                <!-- Quận - Huyện -->
                <div class="form-group">
                  <div class="row">
                    <div class="col-4">
                      <label for="districtShop" class="input-label">Quận/Huyện <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tỉnh/Thành phố"></i></label>
                    </div>
                    
                    <div class="col-8">
                      <div class="input-group-prepend">
                        <!-- Select -->
                        <select name = "districtShop" id = "districtShop" class="js-select2-custom custom-select" size="1" style="opacity: 1;" data-hs-select2-options='{
                                  "minimumResultsForSearch": "Infinity"
                                }'>
                            <option value="" disabled="" selected="">Hãy chọn Quận/Huyện</option>
                          
                        </select>
                        <!-- End Select -->   
                      </div>
                      <span class="form-message">
                        
                      </span>
                    </div>
                  </div>
                </div>
                <!-- End Quận - Huyện -->
                <!-- Xã - Phường - Thị trấn -->
                <div class="form-group">
                  <div class="row">
                    <div class="col-4">
                      <label for="wardShop" class="input-label">Xã/Phường/Thị trấn <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tỉnh/Thành phố"></i></label>
                    </div>
                    
                    <div class="col-8">
                      <div class="input-group-prepend">
                        <!-- Select -->
                        <select name = "wardShop" id = "wardShop" class="js-select2-custom custom-select" size="1" style="opacity: 1;" data-hs-select2-options='{
                                  "minimumResultsForSearch": "Infinity"
                                }'>
                            <option value="" disabled="" selected="">Hãy chọn Xã/Phường/Thị trấn</option>
                          
                        </select>
                        <!-- End Select -->
                      </div>
                      <span class="form-message">
                        
                      </span>
                    </div>
                  </div>
                </div>
                <!-- End Xã - Phường - Thị trấn -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Địa chỉ cửa hàng -->
            <!-- Địa chỉ giao hàng -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Thông tin địa chỉ giao hàng</h4>
              </div>
              <!-- End Header -->
              <!-- Body -->
              <div class="card-body">
                <!-- Tỉnh - Thành phố -->
                <div class="form-group">
                  <div class="row">
                    <div class="col-4">
                      <label for="province" class="input-label">Tỉnh/Thành phố <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tỉnh/Thành phố"></i></label>
                    </div>
                    
                    <div class="col-8">
                      <div class="input-group-prepend">
                        <!-- Select -->
                        <select name = "province" id = "province" class="js-select2-custom custom-select  load_province" size="1" style="opacity: 1;" data-hs-select2-options='{
                                  "minimumResultsForSearch": "Infinity"
                                }'>
                            <option value="" disabled="" selected="">Hãy chọn Tỉnh/Thành phố</option>
                          
                        </select>
                        <!-- End Select -->
                      </div>
                      <span class="form-message">
                        
                      </span>
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
                            <option value="" disabled="" selected="">Hãy chọn Quận/Huyện</option>
                          
                        </select>
                        <!-- End Select -->
                      </div>
                      <span class="form-message">
                        
                      </span>
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
                            <option value="" disabled="" selected="">Hãy chọn Xã/Phường/Thị trấn</option>
                          
                        </select>
                        <!-- End Select -->
                      </div>
                      <span class="form-message">
                        
                      </span>
                    </div>
                  </div>
                </div>
                <!-- End Xã - Phường - Thị trấn -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Địa chỉ giao hàng -->
            <!-- Phương thức vận chuyển -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Hình thức vận chuyển</h4>
              </div>
              <!-- End Header -->
              <!-- Body -->
              <div class="card-body">
                <!-- Loại Vận chuyển -->
                <div class="row form-group">
                  <label class="col-sm-3 col-form-label input-label">Dịch vụ</label>
                  <div class="col-sm-9">
                    <div id = "ship_service" class="input-group input-group-sm-down-break">
                      <p class = "no_service">Chọn nơi gửi và nơi nhận hàng để hiển thị dịch vụ</p>
                      <!-- Custom Radio -->
                      <!-- <div class="form-control">
                            <div class="custom-control custom-radio">
                              <input type="radio" class="custom-control-input" name="shipServiceRadio" id="shipServiceRadio${i}" value="${elem.service_id}">
                              <label class="custom-control-label" for="shipServiceRadio${i}">${elem.short_name}</label>
                            </div>
                      </div> -->
                      <!-- End Custom Radio -->
                    </div>
                    <span class = "form-message">
                    </span>
                  </div>
                </div>
                <!-- End Loại Vận chuyển -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Phương thức vận chuyển -->
            <!-- Thông tin hàng hóa -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Thông tin hàng hóa</h4>
              </div>
              <!-- End Header -->
              <!-- Body -->
              <div class="card-body">
                <!-- Giá trị đơn hàng -->
                <div class="form-group">
                  <label for="insurance_value" class="input-label">Giá trị đơn hàng <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Giá trị đơn hàng"></i></label>
                  <input type="number" class="form-control" name="insurance_value" id="insurance_value" 
                  placeholder="Giá trị đơn hàng" aria-label="Giá trị đơn hàng">
                  <span class = "form-message">
                  </span>
                </div>
                <!-- End Giá trị đơn hàng -->
                <!-- Mã giảm giá phí ship -->
                <div class="form-group">
                  <label for="couponShip" class="input-label">Mã giảm giá phí giao hàng <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Mã giảm giá phí giao hàng"></i></label>
                  <input type="text" class="form-control" name="couponShip" id="couponShip" 
                  placeholder="Mã giảm giá phí giao hàng" aria-label="Mã giảm giá phí giao hàng">
                </div>
                <!-- End Mã giảm giá phí ship -->
                <!-- Trọng lượng hàng hóa -->
                <div class="form-group">
                  <label for="weightProducts" class="input-label">Trọng lượng hàng hóa <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Trọng lượng hàng hóa"></i></label>
                  <input type="number" class="form-control" name="weightProducts" id="weightProducts" 
                  placeholder="Trọng lượng hàng hóa" aria-label="Trọng lượng hàng hóa">
                  <span class = "form-message">
                  </span>
                </div>
                <!-- End Trọng lượng hàng hóa -->
                <!-- Chiều dài -->
                <div class="form-group">
                  <label for="lengthProducts" class="input-label">Chiều dài <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Chiều dài"></i></label>
                  <input type="number" class="form-control" name="lengthProducts" id="lengthProducts" 
                  placeholder="Chiều dài" aria-label="Chiều dài">
                  <span class = "form-message">
                  </span>
                </div>
                <!-- End Chiều dài -->
                <!-- Chiều rộng -->
                <div class="form-group">
                  <label for="widthProducts" class="input-label">Chiều rộng <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Chiều rộng"></i></label>
                  <input type="number" class="form-control" name="widthProducts" id="widthProducts" 
                  placeholder="Chiều rộng" aria-label="Chiều rộng">
                  <span class = "form-message">
                  </span>
                </div>
                <!-- End Chiều rộng -->
                <!-- Chiều cao -->
                <div class="form-group">
                  <label for="heightProducts" class="input-label">Chiều cao <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Chiều cao"></i></label>
                  <input type="number" class="form-control" name="heightProducts" id="heightProducts" 
                  placeholder="Chiều cao" aria-label="Chiều cao">
                  <span class = "form-message">
                  </span>
                </div>
                <!-- End Chiều rộng -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Thông tin hàng hóa -->
          </div>
        </div>
        <!-- End Row -->
        <div class="position-fixed bottom-0 content-centered-x w-100 z-index-99 mb-3" style="max-width: 40rem;">
          <!-- Card -->
          <div class="card card-sm bg-dark border-dark mx-2">
            <div class="card-body">
              <div class="row justify-content-center justify-content-sm-between">
                <div class="col">
                  <button type="button" class="btn btn-ghost-danger">Xóa</button>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-ghost-light mr-2">Loại bỏ</button>
                  <button id = "check_delivery" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#deliveryModal">
                    Tra cứu phí vận chuyển
                  </button>
                </div>
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>
      </form>
      <!-- End Content -->
      <!-- Footer -->
      
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <p class="font-size-sm mb-0">&copy; Healthy Power <span class="d-none d-sm-inline-block">2021</span></p>
            </div>
            <div class="col-auto">
              <div class="d-flex justify-content-end">
                <!-- List Dot -->
                <ul class="list-inline list-separator">
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">Câu hỏi</a>
                  </li>
                  <li class="list-inline-item">
                    <a class="list-separator-link" href="#">Bản quyền</a>
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
                  <p class="font-size-sm mb-1">Marked <a class="text-uppercase" href="#"><i class="tio-folder-bookmarked"></i> Fr-3</a> as <span class="badge badge-soft-primary badge-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>
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
    <!-- Delivery Modal -->
    <div class="modal fade" id="deliveryModal" tabindex="-1" role="dialog" aria-labelledby="deliveryModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="deliveryModalTitle" class="modal-title">Thông tin phí vận chuyển</h4>
            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->
          <!-- Body -->
          <div class="modal-body">
            <div class="card card-lg">
              <!-- Body -->
              <div class="card-body">
                <dl class="row">
                  <dt class="col-sm-6 text-sm-right">Địa chỉ giao hàng</dt>
                  <dd id = "shopAddressModal" class="col-sm-6"></dd>
                  <dt class="col-sm-6 text-sm-right">Địa chỉ nhận hàng</dt>
                  <dd id = "shipAddressModal" class="col-sm-6"></dd>
                  <dt class="col-sm-6 text-sm-right">Phương thức vận chuyển</dt>
                  <dd id = "serviceModal" class="col-sm-6"></dd>
                  <dt class="col-sm-6 text-sm-right">Giá trị đơn hàng</dt>
                  <dd id = "valueModal" class="col-sm-6"></dd>
                  <dt class="col-sm-6 text-sm-right">Trọng lượng</dt>
                  <dd id = "weightModal" class="col-sm-6"></dd>
                  <dt class="col-sm-6 text-sm-right">Chiều dài - Chiều rộng - Chiều cao</dt>
                  <dd id = "heightModal" class="col-sm-6"></dd>
                  <dt class="col-sm-6 text-sm-right">Mã giả giám phí vận chuyển</dt>
                  <dd id = "couponModal" class="col-sm-6"></dd>
                  <dt class="col-sm-6 text-sm-right">Phí vận chuyển</dt>
                  <dd id = "shipFeeModal" class="col-sm-6"></dd>
                  <dt class="col-sm-6 text-sm-right">Phí bảo hiểm</dt>
                  <dd id = "insuranceFeeModal" class="col-sm-6"></dd>
                  <dt class="col-sm-6 text-sm-right">Tổng cộng</dt>
                  <dd id = "totalModal" class="col-sm-6"></dd>
                </dl>
                <!-- End Row -->
              </div>
              <!-- End Body -->
            </div>
          </div>
          <!-- End Body -->
        </div>
      </div>
    </div>
    <!-- End Delivery Modal -->
   
    <!-- ========== END SECONDARY CONTENTS ========== -->