<!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main">
      <!-- Content -->
      <form class="content container-fluid" method="POST" action = "{{_WEB_ROOT.'/vouchers-update/uptid-'.$voucher_by_id['id']}}"
      enctype="multipart/form-data">
        {!csrf_field()!}
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="ecommerce-products.html">Mã khuyến mãi</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa mã khuyến mãi</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Chỉnh sửa mã khuyến mãi</h1>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->
  
        <div class="row">
          <div class="mx-auto col-lg-8">
            <!-- Card -->
            @php
              $errors = Session::flash('errors');
            @endphp
            @if (!empty($errors))
              <div class="alert alert-danger" role="alert">
                {{ $errors }}
              </div>
            @endif

            @php
              $msg = Session::flash('msg');
            @endphp
            @if (!empty($msg))
              <div class="alert alert-success" role="alert">
                {{ $msg }}
              </div>
            @endif

            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Thông tin mã khuyến mãi</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Tiêu đề -->
                <div class="form-group">
                  <label for="title" class="input-label">Tên mã khuyến mãi <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tên mã khuyến mãi"></i></label>

                  <input type="text" class="form-control" name="voucherName" id="title" 
                  placeholder="Tên mã khuyến mãi" aria-label="Tên mã khuyến mãi" onkeyup="setTimeout(ChangeToSlug(),2000)" value = "{{ $voucher_by_id['voucher_name'] }}">
                  {!form_error('voucherName', '<span style="color: red; padding-top: 6px; display: block">', '</span>')!}
                </div>
                <!-- End Tiêu đề -->

                <!-- Liên kết tĩnh -->
                <div class="form-group">
                  <label for="convert_slug" class="input-label">Liên kết tĩnh <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Liên kết tĩnh"></i></label>

                  <input type="text" class="form-control" name="slug" id="convert_slug" placeholder="" aria-label="" value="{{ $voucher_by_id['voucher_slug'] }}">
                </div>
                <!-- End Liên kết tĩnh -->

                <!-- Mã khuyến mãi -->
                <div class="form-group">
                  <label for="voucherCode" class="input-label">Mã khuyến mãi <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Mã khuyến mãi"></i></label>

                  <input type="text" class="form-control" name="voucherCode" id="voucherCode" 
                  placeholder="Mã khuyến mãi" aria-label="Mã khuyến mãi" 
                  value = "{{ $voucher_by_id['voucher_code'] }}">
                  {!form_error('voucherCode', '<span style="color: red; padding-top: 6px; display: block">', '</span>')!}
                </div>
                <!-- End Mã khuyến mãi -->

                <!-- Số lượng phát hành -->
                <div class="form-group">
                  <label for="max_uses" class="input-label">Số lượng phát hành <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Số lượng phát hành"></i></label>

                  <input type="text" class="form-control" name="max_uses" id="max_uses" placeholder="Số lượng phát hành" aria-label="Số lượng phát hành"
                  value = "{{ $voucher_by_id['max_uses'] }}">
                   {!form_error('max_uses', '<span style="color: red; padding-top: 6px; display: block">', '</span>')!}
                </div>
                <!-- End Số lượng phát hành -->

                <!-- Số lượng tối đa trên người dùng -->
                <div class="form-group">
                  <label for="max_uses_user" class="input-label">Số lượng tối đa trên người dùng <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Số lượng tối đa trên người dùng"></i></label>

                  <input type="text" class="form-control" name="max_uses_user" id="max_uses_user" placeholder="Số lượng tối đa trên người dùng" aria-label="Số lượng tối đa trên người dùng" value = "{{ $voucher_by_id['max_uses_user'] }}">
                  {!form_error('max_uses_user', '<span style="color: red; padding-top: 6px; display: block">', '</span>')!}
                </div>
                <!-- End Số lượng tối đa trên người dùng -->

                <!-- Loại mã -->
                <div class="form-group">
                  <label for="type" class="input-label">Loại mã</label>

                  <!-- Select -->
                  <select name = "type" class="js-select2-custom custom-select" size="1" style="opacity: 0;" id="type" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "placeholder": "Chọn loại mã"
                          }'>
                    <option label="empty"></option>
                    <option value="2" 
                    {{ $voucher_by_id['type'] == 2 ? 'Selected' : ''}}>
                      Giảm theo phần trăm
                    </option>
                    <option value="1"
                    {{ $voucher_by_id['type'] == 1 ? 'Selected' : ''}}>
                      Giảm theo số tiền
                    </option>
                  </select>
                  <!-- End Select -->
                  {!form_error('type', '<span style="color: red; padding-top: 6px; display: block">', '</span>')!}
                </div>
                <!-- Loại mã -->

                <!-- Giá trị giảm -->
                <div class="form-group">
                  <label for="discount_amount" class="input-label">Giá trị giảm <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Giá trị giảm"></i></label>

                  <input type="number" class="form-control" name="discount_amount" id="discount_amount" placeholder="Giá trị giảm" aria-label="Giá trị giảm"
                  value = "{{ $voucher_by_id['discount_amount'] }}">
                  {!form_error('discount_amount', '<span style="color: red; padding-top: 6px; display: block">', '</span>')!}
                </div>
                <!-- End Giá trị giảm -->

                <!-- Form Group -->
                <div class="form-group">
                  <dl class="row align-items-sm-center mb-3">
                    <dt class="col-sm-4 col-md-3 text-sm-left mb-2 mb-sm-0">Ngày bắt đầu:</dt>
                    <dd class="col-sm-8 col-md-5 mb-0">
                      <input type="datetime-local" class="form-control" name="start_date" id="start_date" aria-label="Ngày bắt đầu" 
                      value = "{! format_date($voucher_by_id['start_date'], 'Y-m-d'). 'T' .format_date($voucher_by_id['start_date'], 'h:i') !}">
                    </dd>
                    {!form_error('start_date', '<span style="margin-left: 10px;color: red; padding-top: 6px; display: block">', '</span>')!}
                  </dl>

                  <dl class="row align-items-sm-center">
                    <dt class="col-sm-4 col-md-3 text-sm-left mb-2 mb-sm-0">Ngày kết thúc:</dt>
                    <dd class="col-sm-8 col-md-5 mb-0">
                      <input type="datetime-local" class="form-control" name="end_date" id="end_date" aria-label="Ngày kết thúc" 
                      value = "{! format_date($voucher_by_id['end_date'], 'Y-m-d'). 'T' .format_date($voucher_by_id['end_date'], 'h:i') !}">
                    </dd>
                    {!form_error('end_date', '<span style="margin-left: 10px;color: red; padding-top: 6px; display: block">', '</span>')!}
                  </dl>
                </div>
                <!-- End Form Group -->

                <!-- Mô tả -->
                <label class="input-label">Mô tả mã khuyến mãi <span class="input-label-secondary">(Tùy chọn)</span></label>

                <!-- Quill -->
                <textarea name="description" id="ckeditor1" cols="30" rows="10" placeholder="Mô tả">{{ $voucher_by_id['description'] }}</textarea>
                <!-- End Quill -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

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
                  <button type="submit" class="btn btn-primary">Cập nhật mã khuyến mãi</button>
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

    <!-- Add Image from URL Modal -->
    <div class="modal fade" id="addImageFromURLModal" tabindex="-1" role="dialog" aria-labelledby="addImageFromURLModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="addImageFromURLModalTitle" class="modal-title">Add image from URL</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <label for="pasteImageURLNameLabel" class="input-label">Paste image URL</label>
            <input type="text" class="form-control" name="projectName" id="pasteImageURLNameLabel" placeholder="https://" aria-label="https://">
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Add media</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Add Image from URL Modal -->

    <!-- Embed Video Modal -->
    <div class="modal fade" id="embedVideoModal" tabindex="-1" role="dialog" aria-labelledby="embedVideoModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="embedVideoModalTitle" class="modal-title">Embed video</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <label for="pasteVideoURLNameLabel" class="input-label">Paste video URL</label>
            <input type="text" class="form-control" name="projectName" id="pasteVideoURLNameLabel" placeholder="https://" aria-label="https://">
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Add media</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    -</div>
    <!-- End Embed Video Modal -->

    <!-- Products Advanced Features Modal -->
    <div class="modal fade" id="productsAdvancedFeaturesModal" tabindex="-1" role="dialog" aria-hidden="true">
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
          <div class="modal-body">
            <div class="text-center mb-7">
              <h4 class="h1">Advanced features</h4>
              <p>"Compare to" Price, Bulk Discount Pricing, Inventory Tracking</p>

              <a class="btn btn-primary" href="#">
                <i class="tio-star mr-1"></i> Upgrade to get these features
              </a>
            </div>

            <!-- Media -->
            <div class="d-sm-flex">
              <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="assets\svg\illustrations\choice.svg" alt="Image Description">

              <div class="media-body">
                <h4>"Compare to" price</h4>
                <p>Use this feature when you want to put a product on sale or show savings off suggested retail pricing.</p>
              </div>
            </div>
            <!-- End Media -->

            <hr class="my-4">

            <!-- Media -->
            <div class="d-sm-flex">
              <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="assets\svg\illustrations\presenting.svg" alt="Image Description">

              <div class="media-body">
                <h4>Bulk discount pricing</h4>
                <p>Encourage higher purchase quantities with volume discounts.</p>
              </div>
            </div>
            <!-- End Media -->

            <hr class="my-4">

            <!-- Media -->
            <div class="d-sm-flex">
              <img class="avatar avatar-xl avatar-4by3 mb-3 mb-sm-0 mr-4" src="assets\svg\illustrations\book.svg" alt="Image Description">

              <div class="media-body">
                <h4>Inventory tracking</h4>
                <p>Automatically keep track of product availability and receive notifications when inventory levels get low.</p>
              </div>
            </div>
            <!-- End Media -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Close</button>
            <button type="button" class="btn btn-primary">Upgrade now</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    -</div>
    <!-- End Products Advanced Features Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->