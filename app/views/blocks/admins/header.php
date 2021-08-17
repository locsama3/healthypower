<!-- ONLY DEV -->

    <!-- Builder -->
    <div id="styleSwitcherDropdown" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow" style="width: 35rem;">
      <div class="card card-lg border-0 h-100">
        <div class="card-header align-items-start">
          <div class="mr-2">
            <h3 class="card-header-title">Dashboard</h3>
            <p>Tùy chỉnh bố cục trang tổng quan của bạn. Chọn giao diện phù hợp nhất với nhu cầu của bạn.</p>
          </div>
          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark" href="javascript:;" data-hs-unfold-options='{
                  "target": "#styleSwitcherDropdown",
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
        <div class="card-body sidebar-scrollbar">
          <h4 class="mb-1">Bố cục giao diện <span id="js-builder-disabled" class="badge badge-soft-danger" style="opacity: 0">Đã vô hiệu</span></h4>
          <p>Bạn hãy lựa chọn 1 trong 3 loại giao diện sau.</p>
          <div class="row gx-2 mb-5">
            <!-- Custom Radio -->
            <div class="col-4 text-center">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio1" checked="" value="default">
                  <label class="custom-checkbox-card-label" for="layoutSkinsRadio1">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/layouts-sidebar-default.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Mặc định</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
            <!-- Custom Radio -->
            <div class="col-4 text-center">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio2" value="navbar-dark">
                  <label class="custom-checkbox-card-label" for="layoutSkinsRadio2">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/layouts-sidebar-dark.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Tối</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
            <!-- Custom Radio -->
            <div class="col-4 text-center">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="layoutSkinsRadio" id="layoutSkinsRadio3" value="navbar-light">
                  <label class="custom-checkbox-card-label" for="layoutSkinsRadio3">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/layouts-sidebar-light.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Sáng</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
          </div>
          <!-- End Row -->
          <h4 class="mb-1">Tùy chọn bố cục Sidebars</h4>
          <p>Chọn giữa kích thước điều hướng tiêu chuẩn, nhỏ hoặc thậm chí nhỏ gọn với các biểu tượng.</p>
          <div class="row gx-2 mb-5">
            <!-- Custom Radio -->
            <div class="col-4 text-center">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions1" checked="" value="default">
                  <label class="custom-checkbox-card-label" for="sidebarLayoutOptions1">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/sidebar-default-classic.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Mặc định</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
            <!-- Custom Radio -->
            <div class="col-4 text-center">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions2" value="navbar-vertical-aside-compact-mode">
                  <label class="custom-checkbox-card-label" for="sidebarLayoutOptions2">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/sidebar-compact.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Gọn nhẹ</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
            <!-- Custom Radio -->
            <div class="col-4 text-center">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="sidebarLayoutOptions" id="sidebarLayoutOptions3" value="navbar-vertical-aside-mini-mode">
                  <label class="custom-checkbox-card-label" for="sidebarLayoutOptions3">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/sidebar-mini.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Tối giản</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
          </div>
          <!-- End Row -->
          <h4 class="mb-1">Tùy chọn bố cục tiêu đề</h4>
          <p>Chọn điều hướng chính trên bố cục tiêu đề</p>
          <div class="row gx-2">
            <!-- Custom Radio -->
            <div class="col-4 text-center">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions1" value="single">
                  <label class="custom-checkbox-card-label" for="headerLayoutOptions1">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/header-default-fluid.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Mặc định (Linh hoạt)</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
            <!-- Custom Radio -->
            <div class="col-4 text-center">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions2" value="single-container">
                  <label class="custom-checkbox-card-label" for="headerLayoutOptions2">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/header-default-container.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Mặc định (Theo khối)</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
            <!-- Custom Radio -->
            <div class="col-4 text-center">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions3" value="double">
                  <label class="custom-checkbox-card-label" for="headerLayoutOptions3">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/header-double-line-fluid.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Hai hàng (Linh hoạt)</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
            <!-- Custom Radio -->
            <div class="col-4 text-center mt-2">
              <div class="text-center">
                <div class="custom-checkbox-card mb-2">
                  <input type="radio" class="custom-checkbox-card-input" name="headerLayoutOptions" id="headerLayoutOptions4" value="double-container">
                  <label class="custom-checkbox-card-label" for="headerLayoutOptions4">
                    <img class="custom-checkbox-card-img" src="{{_WEB_ROOT.'/public/admin/svg/layouts/header-double-line-container.svg'}}" alt="Image Description">
                  </label>
                  <span class="custom-checkbox-card-text">Hai hàng (Theo khối)</span>
                </div>
              </div>
            </div>
            <!-- End Custom Radio -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Body -->
        <!-- Footer -->
        <div class="card-footer">
          <div class="row gx-2">
            <div class="col">
              <button type="button" id="js-builder-reset" class="btn btn-block btn-lg btn-white">
                <i class="tio-restore"></i> Đặt lại mặc định
              </button>
            </div>
            <div class="col">
              <button type="button" id="js-builder-preview" class="btn btn-block btn-lg btn-primary">
                <i class="tio-visible"></i> Xem trước
              </button>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Footer -->
      </div>
    </div>
    <!-- End Builder -->
    <!-- Builder Toggle -->
    <div class="d-none d-md-block position-fixed bottom-0 right-0 mr-5 mb-10" style="z-index: 3;">
      <div style="position: fixed; top: 50%; right: 0; margin-right: -.25rem; transform: translateY(-50%); writing-mode: vertical-rl; text-orientation: sideways;">
        <div class="hs-unfold">
          <a id="builderPopover" class="js-hs-unfold-invoker btn btn-sm btn-soft-dark py-3" href="javascript:;" data-template='<div class="d-none d-md-block popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>' data-toggle="popover" data-placement="left" title="<div class='d-flex align-items-center'>Front Builder <a href='#!' class='close close-light ml-auto'><i id='closeBuilderPopover' class='tio-clear'></i></a></div>" data-content="Customize your overview page layout. Choose the one that best fits your needs." data-html="true" data-hs-unfold-options='{
                "target": "#styleSwitcherDropdown",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
            <i class="tio-tune mr-2"></i>
            <span class="font-weight-bold text-uppercase">Tùy chỉnh</span>
          </a>
        </div>
      </div>
    </div>
    <!-- End Builder Toggle -->
    <!-- JS Preview mode only -->
    <div id="headerMain" class="d-none">
      <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered">
        <div class="navbar-nav-wrap">
          <div class="navbar-brand-wrapper">
            <!-- Logo -->
            <a class="navbar-brand" href="{{_WEB_ROOT}}/dashboard" aria-label="Front">
              <img class="navbar-brand-logo" src="{{_WEB_ROOT.'/public/admin/svg/logos/logo_chu_trang.png'}}" alt="Logo">
              <img class="navbar-brand-logo-mini" src="{{_WEB_ROOT.'/public/admin/svg/logos/volt.png'}}" alt="Logo">
            </a>
            <!-- End Logo -->
          </div>
          <div class="navbar-nav-wrap-content-left">
            <!-- Navbar Vertical Toggle -->
            <button type="button" class="js-navbar-vertical-aside-toggle-invoker close mr-3">
              <i class="tio-first-page navbar-vertical-aside-toggle-short-align" data-toggle="tooltip" data-placement="right" title="Collapse"></i>
              <i class="tio-last-page navbar-vertical-aside-toggle-full-align" data-template='<div class="tooltip d-none d-sm-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-toggle="tooltip" data-placement="right" title="Expand"></i>
            </button>
            <!-- End Navbar Vertical Toggle -->
            <!-- Search Form -->
            <div class="d-none d-md-block">
              <form class="position-relative">
                <!-- Input Group -->
                <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="tio-search"></i>
                    </div>
                  </div>
                  <input type="search" class="js-form-search form-control" placeholder="Tìm kiếm" aria-label="Search in front" data-hs-form-search-options='{
                     "clearIcon": "#clearSearchResultsIcon",
                     "dropMenuElement": "#searchDropdownMenu",
                     "dropMenuOffset": 20,
                     "toggleIconOnFocus": true,
                     "activeClass": "focus"
                   }'>
                  <a class="input-group-append" href="javascript:;">
                    <span class="input-group-text">
                      <i id="clearSearchResultsIcon" class="tio-clear" style="display: none;"></i>
                    </span>
                  </a>
                </div>
                <!-- End Input Group -->
                <!-- Card Search Content -->
                <div id="searchDropdownMenu" class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
                  <!-- Body -->
                  <div class="card-body-height py-3">
                    <small class="dropdown-header mb-n2">Tìm kiếm gần đây</small>
                    <div class="dropdown-item bg-transparent text-wrap my-2">
                      <span class="h4 mr-1">
                        <a class="btn btn-xs btn-soft-dark btn-pill" href="index.html">
                          Khách hàng <i class="tio-search ml-1"></i>
                        </a>
                      </span>
                      <span class="h4">
                        <a class="btn btn-xs btn-soft-dark btn-pill" href="index.html">
                          Đơn hàng <i class="tio-search ml-1"></i>
                        </a>
                      </span>
                    </div>
                    <div class="dropdown-divider my-3"></div>
                    <small class="dropdown-header mb-n2">Hướng dẫn</small>
                    <a class="dropdown-item my-2" href="index.html">
                      <div class="media align-items-center">
                        <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                          <i class="tio-tune"></i>
                        </span>
                        <div class="media-body text-truncate">
                          <span>Làm thế nào để thiết lập Gulp?</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item my-2" href="index.html">
                      <div class="media align-items-center">
                        <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                          <i class="tio-paint-bucket"></i>
                        </span>
                        <div class="media-body text-truncate">
                          <span>Cách thay đổi màu nền?</span>
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-divider my-3"></div>
                    <small class="dropdown-header mb-n2">Thành viên</small>
                    <a class="dropdown-item my-2" href="index.html">
                      <div class="media align-items-center">
                        <img class="avatar avatar-xs avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/img/160x160/img10.jpg'}}" alt="Image Description">
                        <div class="media-body text-truncate">
                          <span>Huỳnh Tấn Lộc <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item my-2" href="index.html">
                      <div class="media align-items-center">
                        <img class="avatar avatar-xs avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/img/160x160/img3.jpg'}}" alt="Image Description">
                        <div class="media-body text-truncate">
                          <span>Lê Quang Tuấn</span>
                        </div>
                      </div>
                    </a>
                    <a class="dropdown-item my-2" href="index.html">
                      <div class="media align-items-center">
                        <div class="avatar avatar-xs avatar-soft-info avatar-circle mr-2">
                          <span class="avatar-initials">A</span>
                        </div>
                        <div class="media-body text-truncate">
                          <span>Hoàng Gia Khánh</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Body -->
                  <!-- Footer -->
                  <a class="card-footer text-center" href="index.html">
                    Xem tất cả kết quả
                    <i class="tio-chevron-right"></i>
                  </a>
                  <!-- End Footer -->
                </div>
                <!-- End Card Search Content -->
              </form>
            </div>
            <!-- End Search Form -->
          </div>
          <!-- Secondary Content -->
          <div class="navbar-nav-wrap-content-right">
            <!-- Navbar -->
            <ul class="navbar-nav align-items-center flex-row">
              <li class="nav-item d-md-none">
                <!-- Search Trigger -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#searchDropdown",
                 "type": "css-animation",
                 "animationIn": "fadeIn",
                 "hasOverlay": "rgba(46, 52, 81, 0.1)",
                 "closeBreakpoint": "md"
               }'>
                    <i class="tio-search"></i>
                  </a>
                </div>
                <!-- End Search Trigger -->
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <!-- Notification -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#notificationDropdown",
                 "type": "css-animation"
               }'>
                    <i class="tio-notifications-on-outlined"></i>
                    <span class="btn-status btn-sm-status btn-status-danger"></span>
                  </a>
                  <div id="notificationDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                    <!-- Header -->
                    <div class="card-header">
                      <span class="card-title h4">Thông báo</span>
                      <!-- Unfold -->
                      <div class="hs-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                       "target": "#notificationSettingsOneDropdown",
                       "type": "css-animation"
                     }'>
                          <i class="tio-more-vertical"></i>
                        </a>
                        <div id="notificationSettingsOneDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <span class="dropdown-header">Cài đặt</span>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Lưu trữ tất cả
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-all-done dropdown-item-icon"></i> Đánh dấu đã đọc tất cả
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-toggle-off dropdown-item-icon"></i> Tắt thông báo
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-gift dropdown-item-icon"></i> Tin mới?
                          </a>
                          <div class="dropdown-divider"></div>
                          <span class="dropdown-header">Phản hồi</span>
                          <a class="dropdown-item" href="#">
                            <i class="tio-chat-outlined dropdown-item-icon"></i> Báo cáo
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                    <!-- End Header -->
                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Tin nhắn (3)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Đã lưu</a>
                      </li>
                    </ul>
                    <!-- End Nav -->
                    <!-- Body -->
                    <div class="card-body-height">
                      <!-- Tab Content -->
                      <div class="tab-content" id="notificationTabContent">
                        <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked="">
                                      <label class="custom-control-label" for="notificationCheck1"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img3.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Huỳnh Tấn Lộc</span>
                                  <p class="card-text font-size-sm">Đã thay đổi 1 vấn đề<span class="badge badge-success">Duyệt lại</span></p>
                                </div>
                                <small class="col-auto text-muted text-cap">2hr</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck2" checked="">
                                      <label class="custom-control-label" for="notificationCheck2"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">K</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Lê Quang Tuấn</span>
                                  <p class="card-text font-size-sm">gắn thẻ bạn trong một bình luận</p>
                                  <blockquote class="blockquote blockquote-sm">
                                    Nice work, love! You really nailed it. Keep it up!
                                  </blockquote>
                                </div>
                                <small class="col-auto text-muted text-cap">10hr</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck4" checked="">
                                      <label class="custom-control-label" for="notificationCheck4"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img10.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Ruby Walter</span>
                                  <p class="card-text font-size-sm">joined the Slack group HS Team</p>
                                </div>
                                <small class="col-auto text-muted text-cap">3dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck3">
                                      <label class="custom-control-label" for="notificationCheck3"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/svg/brands/google.svg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">from Google</span>
                                  <p class="card-text font-size-sm">Start using forms to capture the information of prospects visiting your Google website</p>
                                </div>
                                <small class="col-auto text-muted text-cap">17dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck5">
                                      <label class="custom-control-label" for="notificationCheck5"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img7.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Sara Villar</span>
                                  <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-7 task</p>
                                </div>
                                <small class="col-auto text-muted text-cap">2mn</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                        </div>
                        <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck7">
                                      <label class="custom-control-label" for="notificationCheck7"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">A</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Anne Richard</span>
                                  <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                                </div>
                                <small class="col-auto text-muted text-cap">1dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck6">
                                      <label class="custom-control-label" for="notificationCheck6"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img5.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Finch Hoot</span>
                                  <p class="card-text font-size-sm">left Slack group HS projects</p>
                                </div>
                                <small class="col-auto text-muted text-cap">3dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck8">
                                      <label class="custom-control-label" for="notificationCheck8"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-dark avatar-circle">
                                      <span class="avatar-initials">HS</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Htmlstream</span>
                                  <p class="card-text font-size-sm">you earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>
                                </div>
                                <small class="col-auto text-muted text-cap">6dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck9">
                                      <label class="custom-control-label" for="notificationCheck9"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img8.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Linda Bates</span>
                                  <p class="card-text font-size-sm">Accepted your connection</p>
                                </div>
                                <small class="col-auto text-muted text-cap">17dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck10">
                                      <label class="custom-control-label" for="notificationCheck10"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">L</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Lewis Clarke</span>
                                  <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-134 task</p>
                                </div>
                                <small class="col-auto text-muted text-cap">2mn</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                        </div>
                      </div>
                      <!-- End Tab Content -->
                    </div>
                    <!-- End Body -->
                    <!-- Card Footer -->
                    <a class="card-footer text-center" href="#">
                      Xem tất cả thông báo
                      <i class="tio-chevron-right"></i>
                    </a>
                    <!-- End Card Footer -->
                  </div>
                </div>
                <!-- End Notification -->
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <!-- Apps -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#appsDropdown",
                 "type": "css-animation"
               }'>
                    <i class="tio-menu-vs-outlined"></i>
                  </a>
                  <div id="appsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                    <!-- Header -->
                    <div class="card-header">
                      <span class="card-title h4">Web apps &amp; services</span>
                    </div>
                    <!-- End Header -->
                    <!-- Body -->
                    <div class="card-body card-body-height">
                      <!-- Nav -->
                      <div class="nav nav-pills flex-column">
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/brands/atlassian.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Atlassian</span>
                              <span class="d-block font-size-sm text-body">Security and control across Cloud</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/brands/slack.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Slack <span class="badge badge-primary badge-pill text-uppercase ml-1">Try</span></span>
                              <span class="d-block font-size-sm text-body">Email collaboration software</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/brands/google-webdev.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Google webdev</span>
                              <span class="d-block font-size-sm text-body">Work involved in developing a website</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/brands/frontapp.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Frontapp</span>
                              <span class="d-block font-size-sm text-body">The inbox for teams</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/illustrations/review-rating-shield.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">HS Support</span>
                              <span class="d-block font-size-sm text-body">Customer service and support</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="avatar avatar-xs avatar-soft-dark mr-3">
                              <span class="avatar-initials"><i class="tio-apps"></i></span>
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">More Front products</span>
                              <span class="d-block font-size-sm text-body">Check out more HS products</span>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Nav -->
                    </div>
                    <!-- End Body -->
                    <!-- Footer -->
                    <a class="card-footer text-center" href="#">
                      View all apps
                      <i class="tio-chevron-right"></i>
                    </a>
                    <!-- End Footer -->
                  </div>
                </div>
                <!-- End Apps -->
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <!-- Activity -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                "target": "#activitySidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
                    <i class="tio-voice-line"></i>
                  </a>
                </div>
                <!-- Activity -->
              </li>
              <li class="nav-item">
                <!-- Account -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                 "target": "#accountNavbarDropdown",
                 "type": "css-animation"
               }'>
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/uploads/avatar/'.Session::data('user_data_admin')['user_avatar'] ?? null}}" alt="Image Description">
                      <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                    </div>
                  </a>
                  <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                    <div class="dropdown-item-text">
                      <div class="media align-items-center">
                        <div class="media-body">
                          <span class="card-title h5">{{ Session::data('user_data_admin')['user_name'] ?? null }}</span>
                          <span class="card-text">{{ Session::data('user_data_admin')['user_email'] ?? null }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <!-- Unfold -->
                    <div class="hs-unfold w-100">
                      <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                     "target": "#navSubmenuPagesAccountDropdown1",
                     "event": "hover"
                   }'>
                        <span class="text-truncate pr-2" title="Set status">Thiết lập trạng thái</span>
                        <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker ml-auto"></i>
                      </a>
                      <div id="navSubmenuPagesAccountDropdown1" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-success mr-1"></span>
                          <span class="text-truncate pr-2" title="Available">Đang hoạt động</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-danger mr-1"></span>
                          <span class="text-truncate pr-2" title="Busy">Đang bận</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-warning mr-1"></span>
                          <span class="text-truncate pr-2" title="Away">Đang ở xa</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Reset status">Cài lại trạng thái</span>
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Profile &amp; account">Hồ sơ &amp; tài khoản</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Settings">Cài đặt</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <div class="media align-items-center">
                        <div class="avatar avatar-sm avatar-dark avatar-circle mr-2">
                          <span class="avatar-initials">HS</span>
                        </div>
                        <div class="media-body">
                          <span class="card-title h5">Htmlstream <span class="badge badge-primary badge-pill text-uppercase ml-1">PRO</span></span>
                          <span class="card-text">hs.example.com</span>
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <!-- Unfold -->
                    <div class="hs-unfold w-100">
                      <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                     "target": "#navSubmenuPagesAccountDropdown2",
                     "event": "hover"
                   }'>
                        <span class="text-truncate pr-2" title="Customization">Tùy chỉnh</span>
                        <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker  ml-auto"></i>
                      </a>
                      <div id="navSubmenuPagesAccountDropdown2" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Invite people">Mời bạn bè</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Analytics">Phân tích</span>
                          <i class="tio-open-in-new"></i>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Customize Front">Tùy chỉnh mặt trước</span>
                          <i class="tio-open-in-new"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Manage team">Quản lý nhóm</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{_WEB_ROOT.'/admin/user/logout'}}">
                      <span class="text-truncate pr-2" title="Sign out">Đăng xuất</span>
                    </a>
                  </div>
                </div>
                <!-- End Account -->
              </li>
            </ul>
            <!-- End Navbar -->
          </div>
          <!-- End Secondary Content -->
        </div>
      </header>
    </div>
    <div id="headerFluid" class="d-none">
      <header id="header" class="navbar navbar-expand-xl navbar-fixed navbar-height navbar-flush navbar-container navbar-bordered  ">
        <div class="js-mega-menu navbar-nav-wrap">
          <div class="navbar-brand-wrapper">
            <!-- Logo -->
            <a class="navbar-brand" href="{{_WEB_ROOT}}/dashboard" aria-label="Front">
              <img class="navbar-brand-logo" src="{{_WEB_ROOT.'/public/admin/svg/logos/logo_chu_xanh.svg'}}" alt="Logo">
            </a>
            <!-- End Logo -->
          </div>
          <!-- Secondary Content -->
          <div class="navbar-nav-wrap-content-right">
            <!-- Navbar -->
            <ul class="navbar-nav align-items-center flex-row">
              <li class="nav-item d-none d-sm-inline-block">
                <!-- Notification -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#notificationDropdown",
                 "type": "css-animation"
               }'>
                    <i class="tio-notifications-on-outlined"></i>
                    <span class="btn-status btn-sm-status btn-status-danger"></span>
                  </a>
                  <div id="notificationDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                    <!-- Header -->
                    <div class="card-header">
                      <span class="card-title h4">Thông báo</span>
                      <!-- Unfold -->
                      <div class="hs-unfold">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                       "target": "#notificationSettingsOneDropdown",
                       "type": "css-animation"
                     }'>
                          <i class="tio-more-vertical"></i>
                        </a>
                        <div id="notificationSettingsOneDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                          <span class="dropdown-header">Settings</span>
                          <a class="dropdown-item" href="#">
                            <i class="tio-archive dropdown-item-icon"></i> Archive all
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-all-done dropdown-item-icon"></i> Mark all as read
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-toggle-off dropdown-item-icon"></i> Disable notifications
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="tio-gift dropdown-item-icon"></i> What's new?
                          </a>
                          <div class="dropdown-divider"></div>
                          <span class="dropdown-header">Feedback</span>
                          <a class="dropdown-item" href="#">
                            <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                          </a>
                        </div>
                      </div>
                      <!-- End Unfold -->
                    </div>
                    <!-- End Header -->
                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                      </li>
                    </ul>
                    <!-- End Nav -->
                    <!-- Body -->
                    <div class="card-body-height">
                      <!-- Tab Content -->
                      <div class="tab-content" id="notificationTabContent">
                        <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked="">
                                      <label class="custom-control-label" for="notificationCheck1"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img3.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Brian Warner</span>
                                  <p class="card-text font-size-sm">changed an issue from "In Progress" to <span class="badge badge-success">Review</span></p>
                                </div>
                                <small class="col-auto text-muted text-cap">2hr</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck2" checked="">
                                      <label class="custom-control-label" for="notificationCheck2"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">K</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Klara Hampton</span>
                                  <p class="card-text font-size-sm">mentioned you in a comment</p>
                                  <blockquote class="blockquote blockquote-sm">
                                    Nice work, love! You really nailed it. Keep it up!
                                  </blockquote>
                                </div>
                                <small class="col-auto text-muted text-cap">10hr</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck4" checked="">
                                      <label class="custom-control-label" for="notificationCheck4"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img10.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Ruby Walter</span>
                                  <p class="card-text font-size-sm">joined the Slack group HS Team</p>
                                </div>
                                <small class="col-auto text-muted text-cap">3dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck3">
                                      <label class="custom-control-label" for="notificationCheck3"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/svg/brands/google.svg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">from Google</span>
                                  <p class="card-text font-size-sm">Start using forms to capture the information of prospects visiting your Google website</p>
                                </div>
                                <small class="col-auto text-muted text-cap">17dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck5">
                                      <label class="custom-control-label" for="notificationCheck5"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img7.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Sara Villar</span>
                                  <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-7 task</p>
                                </div>
                                <small class="col-auto text-muted text-cap">2mn</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                        </div>
                        <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                          <ul class="list-group list-group-flush navbar-card-list-group">
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck7">
                                      <label class="custom-control-label" for="notificationCheck7"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">A</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Anne Richard</span>
                                  <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                                </div>
                                <small class="col-auto text-muted text-cap">1dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck6">
                                      <label class="custom-control-label" for="notificationCheck6"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img5.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Finch Hoot</span>
                                  <p class="card-text font-size-sm">left Slack group HS projects</p>
                                </div>
                                <small class="col-auto text-muted text-cap">3dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck8">
                                      <label class="custom-control-label" for="notificationCheck8"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-dark avatar-circle">
                                      <span class="avatar-initials">HS</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Htmlstream</span>
                                  <p class="card-text font-size-sm">you earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>
                                </div>
                                <small class="col-auto text-muted text-cap">6dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck9">
                                      <label class="custom-control-label" for="notificationCheck9"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-circle">
                                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img8.jpg'}}" alt="Image Description">
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Linda Bates</span>
                                  <p class="card-text font-size-sm">Accepted your connection</p>
                                </div>
                                <small class="col-auto text-muted text-cap">17dy</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                            <!-- Item -->
                            <li class="list-group-item custom-checkbox-list-wrapper">
                              <div class="row">
                                <div class="col-auto position-static">
                                  <div class="d-flex align-items-center">
                                    <div class="custom-control custom-checkbox custom-checkbox-list">
                                      <input type="checkbox" class="custom-control-input" id="notificationCheck10">
                                      <label class="custom-control-label" for="notificationCheck10"></label>
                                      <span class="custom-checkbox-list-stretched-bg"></span>
                                    </div>
                                    <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                      <span class="avatar-initials">L</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="col ml-n3">
                                  <span class="card-title h5">Lewis Clarke</span>
                                  <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-134 task</p>
                                </div>
                                <small class="col-auto text-muted text-cap">2mn</small>
                              </div>
                              <a class="stretched-link" href="#"></a>
                            </li>
                            <!-- End Item -->
                          </ul>
                        </div>
                      </div>
                      <!-- End Tab Content -->
                    </div>
                    <!-- End Body -->
                    <!-- Card Footer -->
                    <a class="card-footer text-center" href="#">
                      View all notifications
                      <i class="tio-chevron-right"></i>
                    </a>
                    <!-- End Card Footer -->
                  </div>
                </div>
                <!-- End Notification -->
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <!-- Apps -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#appsDropdown",
                 "type": "css-animation"
               }'>
                    <i class="tio-menu-vs-outlined"></i>
                  </a>
                  <div id="appsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                    <!-- Header -->
                    <div class="card-header">
                      <span class="card-title h4">Web apps &amp; services</span>
                    </div>
                    <!-- End Header -->
                    <!-- Body -->
                    <div class="card-body card-body-height">
                      <!-- Nav -->
                      <div class="nav nav-pills flex-column">
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/brands/atlassian.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Atlassian</span>
                              <span class="d-block font-size-sm text-body">Security and control across Cloud</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/brands/slack.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Slack <span class="badge badge-primary badge-pill text-uppercase ml-1">Try</span></span>
                              <span class="d-block font-size-sm text-body">Email collaboration software</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/brands/google-webdev.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Google webdev</span>
                              <span class="d-block font-size-sm text-body">Work involved in developing a website</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/brands/frontapp.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">Frontapp</span>
                              <span class="d-block font-size-sm text-body">The inbox for teams</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="mr-3">
                              <img class="avatar avatar-xs avatar-4by3" src="{{_WEB_ROOT.'/public/admin/svg/illustrations/review-rating-shield.svg'}}" alt="Image Description">
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">HS Support</span>
                              <span class="d-block font-size-sm text-body">Customer service and support</span>
                            </div>
                          </div>
                        </a>
                        <a class="nav-link" href="#">
                          <div class="media align-items-center">
                            <span class="avatar avatar-xs avatar-soft-dark mr-3">
                              <span class="avatar-initials"><i class="tio-apps"></i></span>
                            </span>
                            <div class="media-body text-truncate">
                              <span class="h5 mb-0">More Front products</span>
                              <span class="d-block font-size-sm text-body">Check out more HS products</span>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Nav -->
                    </div>
                    <!-- End Body -->
                    <!-- Footer -->
                    <a class="card-footer text-center" href="#">
                      View all apps
                      <i class="tio-chevron-right"></i>
                    </a>
                    <!-- End Footer -->
                  </div>
                </div>
                <!-- End Apps -->
              </li>
              <li class="nav-item d-none d-sm-inline-block">
                <!-- Activity -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                "target": "#activitySidebar",
                "type": "css-animation",
                "animationIn": "fadeInRight",
                "animationOut": "fadeOutRight",
                "hasOverlay": true,
                "smartPositionOff": true
               }'>
                    <i class="tio-voice-line"></i>
                  </a>
                </div>
                <!-- Activity -->
              </li>
              <li class="nav-item">
                <!-- Account -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                 "target": "#accountNavbarDropdown",
                 "type": "css-animation"
               }'>
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="{{_WEB_ROOT.'/public/uploads/avatar/'.Session::data('user_data_admin')['user_avatar'] ?? null}}" alt="Image Description">
                      <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                    </div>
                  </a>
                  <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                    <div class="dropdown-item-text">
                      <div class="media align-items-center">
                        <div class="avatar avatar-sm avatar-circle mr-2">
                          <img class="avatar-img" src="{{_WEB_ROOT.'/public/uploads/avatar/'.Session::data('user_data_admin')['user_avatar'] ?? null}}" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <span class="card-title h5">{{ Session::data('user_data_admin')['user_name'] ?? null }}</span>
                          <span class="card-text">{{ Session::data('user_data_admin')['user_email'] ?? null }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <!-- Unfold -->
                    <div class="hs-unfold w-100">
                      <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                     "target": "#navSubmenuPagesAccountDropdown1",
                     "event": "hover"
                   }'>
                        <span class="text-truncate pr-2" title="Set status">Set status</span>
                        <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker ml-auto"></i>
                      </a>
                      <div id="navSubmenuPagesAccountDropdown1" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-success mr-1"></span>
                          <span class="text-truncate pr-2" title="Available">Available</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-danger mr-1"></span>
                          <span class="text-truncate pr-2" title="Busy">Busy</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="legend-indicator bg-warning mr-1"></span>
                          <span class="text-truncate pr-2" title="Away">Away</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Reset status">Reset status</span>
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Settings">Settings</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <div class="media align-items-center">
                        <div class="avatar avatar-sm avatar-dark avatar-circle mr-2">
                          <span class="avatar-initials">HS</span>
                        </div>
                        <div class="media-body">
                          <span class="card-title h5">Htmlstream <span class="badge badge-primary badge-pill text-uppercase ml-1">PRO</span></span>
                          <span class="card-text">hs.example.com</span>
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <!-- Unfold -->
                    <div class="hs-unfold w-100">
                      <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                     "target": "#navSubmenuPagesAccountDropdown2",
                     "event": "hover"
                   }'>
                        <span class="text-truncate pr-2" title="Customization">Customization</span>
                        <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker  ml-auto"></i>
                      </a>
                      <div id="navSubmenuPagesAccountDropdown2" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Invite people">Invite people</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Analytics">Analytics</span>
                          <i class="tio-open-in-new"></i>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Customize Front">Customize Front</span>
                          <i class="tio-open-in-new"></i>
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Manage team">Manage team</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                      <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                    </a>
                  </div>
                </div>
                <!-- End Account -->
              </li>
              <li class="nav-item">
                <!-- Toggle -->
                <button type="button" class="navbar-toggler btn btn-ghost-secondary rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu" data-toggle="collapse" data-target="#navbarNavMenu">
                  <i class="tio-menu-hamburger"></i>
                </button>
                <!-- End Toggle -->
              </li>
            </ul>
            <!-- End Navbar -->
          </div>
          <!-- End Secondary Content -->
          <!-- Navbar -->
          <div class="navbar-nav-wrap-content-left collapse navbar-collapse" id="navbarNavMenu">
            <div class="navbar-body">
              <ul class="navbar-nav flex-grow-1">
                <!-- Dashboards -->
                <li class="hs-has-sub-menu">
                  <a class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="{{_WEB_ROOT.'/dashboard'}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkDashboardsDropdown">
                    <i class="tio-home-vs-1-outlined nav-icon"></i> Dashboards
                  </a>
                  <!-- Dropdown -->
                  <ul id="navLinkDashboardsDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="dashboardsDropdown" style="min-width: 16rem;">
                    <li>
                      <a class="dropdown-item" href="{{_WEB_ROOT.'/dashboard'}}">
                        <span class="tio-circle nav-indicator-icon"></span> Trang quản trị
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="dashboard-alternative.html">
                        <span class="tio-circle nav-indicator-icon"></span> Cấu hình chung
                      </a>
                    </li>
                  </ul>
                  <!-- End Dropdown -->
                </li>
                <!-- End Dashboards -->
                <!-- Tài khoản Admin -->
                <li class="hs-has-sub-menu">
                  <a id="adminDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkAdminDropdown">
                    <i class="tio-user nav-icon"></i> Quản trị viên
                  </a>
                  <!-- Dropdown -->
                  <ul id="navLinkAdminDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="adminDropdown" style="min-width: 16rem;">
                    <!-- Tài khoản -->
                    <li class="hs-has-sub-menu">
                      <a id="adminDropdownAccount" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkAdminDropdownAccount">
                        <span class="tio-circle nav-indicator-icon"></span> Tài khoản
                      </a>
                      <ul id="navLinkAdminDropdownAccount" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="adminDropdownAccount" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/admin-accounts-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới tài khoản
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/admin-accounts'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách quản trị viên
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Tài khoản -->
                    <!-- Chức vụ -->
                    <li class="hs-has-sub-menu">
                      <a id="adminDropdownRoles" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkAdminDropdownRoles">
                        <span class="tio-circle nav-indicator-icon"></span> Chức vụ <span class="badge badge-primary badge-pill ml-2">5</span>
                      </a>
                      <ul id="navLinkAdminDropdownRoles" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="adminDropdownRoles" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/roles-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới chức vụ
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/roles'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách chức vụ
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Chức vụ -->
                    <!-- Quyền hạn -->
                    <li class="hs-has-sub-menu">
                      <a id="adminDropdownPermissions" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkAdminDropdownPermissions">
                        <span class="tio-circle nav-indicator-icon"></span> Quyền hạn
                      </a>
                      <ul id="navLinkAdminDropdownPermissions" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="adminDropdownPermissions" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/permissions-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới quyền hạn
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/permissions'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách quyền hạn
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Quyền hạn -->
                    <li class="dropdown-divider"></li>
                  </ul>
                  <!-- End Dropdown -->
                </li>
                <!-- End Tài khoản Admin -->
                <!-- Sản phẩm -->
                <li class="hs-has-sub-menu">
                  <a id="prodManageDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkProdManageDropdown">
                    <i class="tio-pages-outlined nav-icon"></i> Quản lý sản phẩm
                  </a>
                  <!-- Dropdown -->
                  <ul id="navLinkProdManageDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodManageDropdown" style="min-width: 16rem;">
                    <!-- Sản phẩm -->
                    <li class="hs-has-sub-menu">
                      <a id="prodMngDropdownProducts" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkProdMngDropdownProducts">
                        <span class="tio-circle nav-indicator-icon"></span> Sản phẩm
                      </a>
                      <ul id="navLinkProdMngDropdownProducts" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodMngDropdownProducts" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/products-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới sản phẩm
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/products'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách sản phẩm
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Sản phẩm -->
                    <!-- Danh mục sản phẩm -->
                    <li class="hs-has-sub-menu">
                      <a id="prodMngDropdownProdCate" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkProdMngDropdownProdCate">
                        <span class="tio-circle nav-indicator-icon"></span> Danh mục sản phẩm <span class="badge badge-primary badge-pill ml-2">5</span>
                      </a>
                      <ul id="navLinkProdMngDropdownProdCate" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodMngDropdownProdCate" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/products-category-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới danh mục
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/products-category'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách danh mục
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Danh mục sản phẩm -->
                    <!-- Nhà cung ứng -->
                    <li class="hs-has-sub-menu">
                      <a id="prodMngDropdownSuppliers" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkProdMngDropdownSuppliers">
                        <span class="tio-circle nav-indicator-icon"></span> Nhà cung ứng
                      </a>
                      <ul id="navLinkProdMngDropdownSuppliers" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodMngDropdownSuppliers" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/supplier-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới nhà cung ứng
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/supplier'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách nhà cung ứng
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Nhà cung ứng -->
                    <!-- Đánh giá sản phẩm -->
                    <li class="hs-has-sub-menu">
                      <a id="prodMngDropdownReviews" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkProdMngDropdownReviews">
                        <span class="tio-circle nav-indicator-icon"></span> Đánh giá sản phẩm
                      </a>
                      <ul id="navLinkProdMngDropdownReviews" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodMngDropdownReviews" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT}}/manage-review">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Chi tiết đánh giá
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Đánh giá sản phẩm -->
                    <li class="dropdown-divider"></li>
                  </ul>
                  <!-- End Dropdown -->
                </li>
                <!-- End Sản phẩm -->
                <!-- Xuất nhập kho -->
                <li class="hs-has-sub-menu">
                  <a id="warehousesDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkWarehousesDropdown">
                    <i class="tio-import-export nav-icon"></i> Quản lý Xuất Nhập kho
                  </a>
                  <!-- Dropdown -->
                  <ul id="navLinkWarehousesDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="warehousesDropdown" style="min-width: 16rem;">
                    <!-- Kho hàng -->
                    <li class="hs-has-sub-menu">
                      <a id="warehousesDropdownWare" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkWarehousesDropdownWare">
                        <span class="tio-circle nav-indicator-icon"></span> Kho hàng
                      </a>
                      <ul id="navLinkWarehousesDropdownWare" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="warehousesDropdownWare" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/warehouse-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm Kho hàng
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/warehouse'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách Kho hàng
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Kho hàng -->
                    <!-- Nhập kho -->
                    <li class="hs-has-sub-menu">
                      <a id="warehousesDropdownImport" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkWarehousesDropdownImport">
                        <span class="tio-circle nav-indicator-icon"></span> Nhập kho <span class="badge badge-primary badge-pill ml-2">5</span>
                      </a>
                      <ul id="navLinkWarehousesDropdownImport" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="warehousesDropdownImport" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/warehouse-import'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách nhập kho
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="user-profile-teams.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thống kê
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Nhập kho -->
                    <!-- Xuất kho -->
                    <li class="hs-has-sub-menu">
                      <a id="warehousesDropdownExport" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkWarehousesDropdownExport">
                        <span class="tio-circle nav-indicator-icon"></span> Xuất kho <span class="badge badge-primary badge-pill ml-2">5</span>
                      </a>
                      <ul id="navLinkWarehousesDropdownExport" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="warehousesDropdownExport" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/warehouse-export'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách Xuất kho
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="user-profile-teams.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thống kê
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Xuất kho -->
                    <li class="dropdown-divider"></li>
                  </ul>
                  <!-- End Dropdown -->
                </li>
                <!-- End Xuất nhập kho -->
                <!-- Khuyến mãi và giảm giá -->
                <li class="hs-has-sub-menu">
                  <a id="vouchersDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkVouchersDropdown">
                    <i class="tio-ticket nav-icon"></i> Khuyến mãi và giảm giá
                  </a>
                  <!-- Dropdown -->
                  <ul id="navLinkVouchersDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="vouchersDropdown" style="min-width: 16rem;">
                    <!-- Mã giảm giá -->
                    <li class="hs-has-sub-menu">
                      <a id="vouchersDropdownCode" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkVouchersDropdownCode">
                        <span class="tio-circle nav-indicator-icon"></span> Mã giảm giá
                      </a>
                      <ul id="navLinkVouchersDropdownCode" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="vouchersDropdownCode" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/vouchers-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới mã giảm giá
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/vouchers'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách mã giảm giá
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Mã giảm giá -->
                    <li class="dropdown-divider"></li>
                  </ul>
                  <!-- End Dropdown -->
                </li>
                <!-- End Khuyến mãi và giảm giá -->
                <!-- Đặt hàng -->
                <li class="hs-has-sub-menu">
                  <a id="orderMngDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkOrderMngDropdown">
                    <i class="tio-book-bookmarked nav-icon"></i> Quản lý đặt hàng
                  </a>
                  <!-- Dropdown -->
                  <ul id="navLinkOrderMngDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="orderMngDropdown" style="min-width: 16rem;">
                    <!-- Đơn hàng -->
                    <li class="hs-has-sub-menu">
                      <a id="orderMngDropdownOrder" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkOrderMngDropdownOrder">
                        <span class="tio-circle nav-indicator-icon"></span> Đơn hàng
                      </a>
                      <ul id="navLinkOrderMngDropdownOrder" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="orderMngDropdownOrder" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/order'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách đơn hàng
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="users-leaderboard.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thống kê đơn hàng
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Đơn hàng -->
                    <!-- Phương thức thanh toán -->
                    <li class="hs-has-sub-menu">
                      <a id="orderMngDropdownPaymentTypes" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkOrderMngDropdownPaymentTypes">
                        <span class="tio-circle nav-indicator-icon"></span> Phương thức thanh toán <span class="badge badge-primary badge-pill ml-2">5</span>
                      </a>
                      <ul id="navLinkOrderMngDropdownPaymentTypes" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="orderMngDropdownPaymentTypes" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/payment-types-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới phương thức
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/payment-types'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách phương thức
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Phương thức thanh toán -->
                    <!-- Phí vận chuyển -->
                    <li class="hs-has-sub-menu">
                      <a id="orderMngDropdownShipFee" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkOrderMngDropdownShipFee">
                        <span class="tio-circle nav-indicator-icon"></span> Phí vận chuyển
                      </a>
                      <ul id="navLinkOrderMngDropdownShipFee" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="orderMngDropdownShipFee" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/deliveries'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Tra cứu phí vận chuyển
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Phí vận chuyển -->
                    <li class="dropdown-divider"></li>
                  </ul>
                  <!-- End Dropdown -->
                </li>
                <!-- End Đặt hàng -->
                <!-- Quản lý Khách hàng -->
                <li class="hs-has-sub-menu">
                  <a id="customersMngDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="{{_WEB_ROOT.'/customer'}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkCustomersMngDropdown">
                    <i class="tio-group-equal nav-icon"></i> Quản lý Khách hàng
                  </a>
                  <!-- Dropdown -->
                  <ul id="navLinkCustomersMngDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="customersMngDropdown" style="min-width: 16rem;">
                    <!-- Khách hàng -->
                    <li class="hs-has-sub-menu">
                      <a id="customersMngDropdownCustomers" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkCustomersMngDropdownCustomers">
                        <span class="tio-circle nav-indicator-icon"></span> Khách hàng
                      </a>
                      <ul id="navLinkCustomersMngDropdownCustomers" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="customersMngDropdownCustomers" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/customers'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách khách hàng
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/customer-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới khách hàng
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="users-leaderboard.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thống kê khách hàng
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Khách hàng -->
                    <li class="dropdown-divider"></li>
                  </ul>
                  <!-- End Dropdown -->
                </li>
                <!-- End Quản lý Khách hàng -->
                <!-- Blogs -->
                <li class="hs-has-sub-menu">
                  <a id="blogsMngDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkBlogsMngDropdown">
                    <i class="tio-book-opened nav-icon"></i> Quản lý Bài viết
                  </a>
                  <!-- Dropdown -->
                  <ul id="navLinkBlogsMngDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="blogsMngDropdown" style="min-width: 16rem;">
                    <!-- bài viết -->
                    <li class="hs-has-sub-menu">
                      <a id="blogsMngDropdownBlogs" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkBlogsMngDropdownBlogs">
                        <span class="tio-circle nav-indicator-icon"></span> Bài viết
                      </a>
                      <ul id="navLinkBlogsMngDropdownBlogs" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="blogsMngDropdownBlogs" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/blogs-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới bài viết
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/blogs'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách bài viết
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End bài viết -->
                    <!-- Danh mục bài viết -->
                    <li class="hs-has-sub-menu">
                      <a id="blogsMngDropdownCategory" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkBlogsMngDropdownCategory">
                        <span class="tio-circle nav-indicator-icon"></span> Danh mục bài viết <span class="badge badge-primary badge-pill ml-2">5</span>
                      </a>
                      <ul id="navLinkBlogsMngDropdownCategory" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="blogsMngDropdownCategory" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/blogs-category-create'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới danh mục
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/blogs-category'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách danh mục
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Danh mục bài viết -->
                    <!-- Đánh giá bài viết -->
                    <li class="hs-has-sub-menu">
                      <a id="blogsMngDropdownComments" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkBlogsMngDropdownComments">
                        <span class="tio-circle nav-indicator-icon"></span> Bình luận bài viết
                      </a>
                      <ul id="navLinkBlogsMngDropdownComments" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="blogsMngDropdownComments" style="min-width: 16rem;">
                        <li>
                          <a class="dropdown-item" href="{{_WEB_ROOT.'/manage-blog-comment'}}">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách bình luận
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="account-billing.html">
                            <span class="tio-circle-outlined nav-indicator-icon"></span> Thống kê bình luận
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- End Đánh giá bài viết -->
                    <li class="dropdown-divider"></li>
                  </ul>
                  <!-- End Dropdown -->
                </li>
                <!-- End Blogs -->
              </ul>
            </div>
          </div>
          <!-- End Navbar -->
        </div>
      </header>
    </div>
    <div id="headerDouble" class="d-none">
      <header id="header" class="navbar navbar-expand-lg navbar-bordered flex-lg-column px-0">
        <div class="navbar-dark w-100">
          <div class="container-fluid">
            <div class="navbar-nav-wrap">
              <div class="navbar-brand-wrapper">
                <!-- Logo -->
                <a class="navbar-brand" href="{{_WEB_ROOT}}/dashboard" aria-label="Front">
                  <img class="navbar-brand-logo" src="{{_WEB_ROOT.'/public/admin/svg/logos/logo_chu_xanh.png'}}" alt="Logo">
                </a>
                <!-- End Logo -->
              </div>
              <div class="navbar-nav-wrap-content-left">
                <!-- Search Form -->
                <div class="d-none d-lg-block">
                  <form class="position-relative">
                    <!-- Input Group -->
                    <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="tio-search"></i>
                        </div>
                      </div>
                      <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                         "clearIcon": "#clearSearchResultsIcon",
                         "dropMenuElement": "#searchDropdownMenu",
                         "dropMenuOffset": 20,
                         "toggleIconOnFocus": true,
                         "activeClass": "focus"
                       }'>
                      <a class="input-group-append" href="javascript:;">
                        <span class="input-group-text">
                          <i id="clearSearchResultsIcon" class="tio-clear" style="display: none;"></i>
                        </span>
                      </a>
                    </div>
                    <!-- End Input Group -->
                    <!-- Card Search Content -->
                    <div id="searchDropdownMenu" class="hs-form-search-menu-content card dropdown-menu dropdown-card overflow-hidden">
                      <!-- Body -->
                      <div class="card-body-height py-3">
                        <small class="dropdown-header mb-n2">Recent searches</small>
                        <div class="dropdown-item bg-transparent text-wrap my-2">
                          <span class="h4 mr-1">
                            <a class="btn btn-xs btn-soft-dark btn-pill" href="index.html">
                              Gulp <i class="tio-search ml-1"></i>
                            </a>
                          </span>
                          <span class="h4">
                            <a class="btn btn-xs btn-soft-dark btn-pill" href="index.html">
                              Notification panel <i class="tio-search ml-1"></i>
                            </a>
                          </span>
                        </div>
                        <div class="dropdown-divider my-3"></div>
                        <small class="dropdown-header mb-n2">Tutorials</small>
                        <a class="dropdown-item my-2" href="index.html">
                          <div class="media align-items-center">
                            <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                              <i class="tio-tune"></i>
                            </span>
                            <div class="media-body text-truncate">
                              <span>How to set up Gulp?</span>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item my-2" href="index.html">
                          <div class="media align-items-center">
                            <span class="icon icon-xs icon-soft-dark icon-circle mr-2">
                              <i class="tio-paint-bucket"></i>
                            </span>
                            <div class="media-body text-truncate">
                              <span>How to change theme color?</span>
                            </div>
                          </div>
                        </a>
                        <div class="dropdown-divider my-3"></div>
                        <small class="dropdown-header mb-n2">Members</small>
                        <a class="dropdown-item my-2" href="index.html">
                          <div class="media align-items-center">
                            <img class="avatar avatar-xs avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/img/160x160/img10.jpg'}}" alt="Image Description">
                            <div class="media-body text-truncate">
                              <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item my-2" href="index.html">
                          <div class="media align-items-center">
                            <img class="avatar avatar-xs avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/img/160x160/img3.jpg'}}" alt="Image Description">
                            <div class="media-body text-truncate">
                              <span>David Harrison</span>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item my-2" href="index.html">
                          <div class="media align-items-center">
                            <div class="avatar avatar-xs avatar-soft-info avatar-circle mr-2">
                              <span class="avatar-initials">A</span>
                            </div>
                            <div class="media-body text-truncate">
                              <span>Anne Richard</span>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Body -->
                      <!-- Footer -->
                      <a class="card-footer text-center" href="index.html">
                        See all results
                        <i class="tio-chevron-right"></i>
                      </a>
                      <!-- End Footer -->
                    </div>
                    <!-- End Card Search Content -->
                  </form>
                </div>
                <!-- End Search Form -->
              </div>
              <!-- Secondary Content -->
              <div class="navbar-nav-wrap-content-right">
                <!-- Navbar -->
                <ul class="navbar-nav align-items-center flex-row">
                  <li class="nav-item d-lg-none">
                    <!-- Search Trigger -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle" href="javascript:;" data-hs-unfold-options='{
                     "target": "#searchDropdown",
                     "type": "css-animation",
                     "animationIn": "fadeIn",
                     "hasOverlay": "rgba(46, 52, 81, 0.1)",
                     "closeBreakpoint": "md"
                   }'>
                        <i class="tio-search"></i>
                      </a>
                    </div>
                    <!-- End Search Trigger -->
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <!-- Notification -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle" href="javascript:;" data-hs-unfold-options='{
                     "target": "#notificationNavbarDropdown",
                     "type": "css-animation"
                   }'>
                        <i class="tio-notifications-on-outlined"></i>
                        <span class="btn-status btn-sm-status btn-status-danger"></span>
                      </a>
                      <div id="notificationNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                        <!-- Header -->
                        <div class="card-header">
                          <span class="card-title h4">Notifications</span>
                          <!-- Unfold -->
                          <div class="hs-unfold">
                            <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                           "target": "#notificationSettingsOneDropdown",
                           "type": "css-animation"
                         }'>
                              <i class="tio-more-vertical"></i>
                            </a>
                            <div id="notificationSettingsOneDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="tio-archive dropdown-item-icon"></i> Archive all
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="tio-all-done dropdown-item-icon"></i> Mark all as read
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="tio-toggle-off dropdown-item-icon"></i> Disable notifications
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="tio-gift dropdown-item-icon"></i> What's new?
                              </a>
                              <div class="dropdown-divider"></div>
                              <span class="dropdown-header">Feedback</span>
                              <a class="dropdown-item" href="#">
                                <i class="tio-chat-outlined dropdown-item-icon"></i> Report
                              </a>
                            </div>
                          </div>
                          <!-- End Unfold -->
                        </div>
                        <!-- End Header -->
                        <!-- Nav -->
                        <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="notificationNavOne-tab" data-toggle="tab" href="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="notificationNavTwo-tab" data-toggle="tab" href="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                          </li>
                        </ul>
                        <!-- End Nav -->
                        <!-- Body -->
                        <div class="card-body-height">
                          <!-- Tab Content -->
                          <div class="tab-content" id="notificationTabContent">
                            <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                              <ul class="list-group list-group-flush navbar-card-list-group">
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck1" checked="">
                                          <label class="custom-control-label" for="notificationCheck1"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img3.jpg'}}" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">Brian Warner</span>
                                      <p class="card-text font-size-sm">changed an issue from "In Progress" to <span class="badge badge-success">Review</span></p>
                                    </div>
                                    <small class="col-auto text-muted text-cap">2hr</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck2" checked="">
                                          <label class="custom-control-label" for="notificationCheck2"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                          <span class="avatar-initials">K</span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">Klara Hampton</span>
                                      <p class="card-text font-size-sm">mentioned you in a comment</p>
                                      <blockquote class="blockquote blockquote-sm">
                                        Nice work, love! You really nailed it. Keep it up!
                                      </blockquote>
                                    </div>
                                    <small class="col-auto text-muted text-cap">10hr</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck4" checked="">
                                          <label class="custom-control-label" for="notificationCheck4"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img10.jpg'}}" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">Ruby Walter</span>
                                      <p class="card-text font-size-sm">joined the Slack group HS Team</p>
                                    </div>
                                    <small class="col-auto text-muted text-cap">3dy</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck3">
                                          <label class="custom-control-label" for="notificationCheck3"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/svg/brands/google.svg'}}" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">from Google</span>
                                      <p class="card-text font-size-sm">Start using forms to capture the information of prospects visiting your Google website</p>
                                    </div>
                                    <small class="col-auto text-muted text-cap">17dy</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck5">
                                          <label class="custom-control-label" for="notificationCheck5"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img7.jpg'}}" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">Sara Villar</span>
                                      <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-7 task</p>
                                    </div>
                                    <small class="col-auto text-muted text-cap">2mn</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                              </ul>
                            </div>
                            <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                              <ul class="list-group list-group-flush navbar-card-list-group">
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck7">
                                          <label class="custom-control-label" for="notificationCheck7"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                          <span class="avatar-initials">A</span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">Anne Richard</span>
                                      <p class="card-text font-size-sm">accepted your invitation to join Notion</p>
                                    </div>
                                    <small class="col-auto text-muted text-cap">1dy</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck6">
                                          <label class="custom-control-label" for="notificationCheck6"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img5.jpg'}}" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">Finch Hoot</span>
                                      <p class="card-text font-size-sm">left Slack group HS projects</p>
                                    </div>
                                    <small class="col-auto text-muted text-cap">3dy</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck8">
                                          <label class="custom-control-label" for="notificationCheck8"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-dark avatar-circle">
                                          <span class="avatar-initials">HS</span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">Htmlstream</span>
                                      <p class="card-text font-size-sm">you earned a "Top endorsed" <i class="tio-verified text-primary"></i> badge</p>
                                    </div>
                                    <small class="col-auto text-muted text-cap">6dy</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck9">
                                          <label class="custom-control-label" for="notificationCheck9"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-circle">
                                          <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160/img8.jpg'}}" alt="Image Description">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">Linda Bates</span>
                                      <p class="card-text font-size-sm">Accepted your connection</p>
                                    </div>
                                    <small class="col-auto text-muted text-cap">17dy</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                                <!-- Item -->
                                <li class="list-group-item custom-checkbox-list-wrapper">
                                  <div class="row">
                                    <div class="col-auto position-static">
                                      <div class="d-flex align-items-center">
                                        <div class="custom-control custom-checkbox custom-checkbox-list">
                                          <input type="checkbox" class="custom-control-input" id="notificationCheck10">
                                          <label class="custom-control-label" for="notificationCheck10"></label>
                                          <span class="custom-checkbox-list-stretched-bg"></span>
                                        </div>
                                        <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                          <span class="avatar-initials">L</span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col ml-n3">
                                      <span class="card-title h5">Lewis Clarke</span>
                                      <p class="card-text font-size-sm">completed <i class="tio-folder-bookmarked text-primary"></i> FD-134 task</p>
                                    </div>
                                    <small class="col-auto text-muted text-cap">2mn</small>
                                  </div>
                                  <a class="stretched-link" href="#"></a>
                                </li>
                                <!-- End Item -->
                              </ul>
                            </div>
                          </div>
                          <!-- End Tab Content -->
                        </div>
                        <!-- End Body -->
                        <!-- Card Footer -->
                        <a class="card-footer text-center" href="#">
                          View all notifications
                          <i class="tio-chevron-right"></i>
                        </a>
                        <!-- End Card Footer -->
                      </div>
                    </div>
                    <!-- End Notification -->
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <!-- Apps -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle" href="javascript:;" data-hs-unfold-options='{
                     "target": "#appsNavbarDropdown",
                     "type": "css-animation"
                   }'>
                        <i class="tio-menu-vs-outlined"></i>
                      </a>
                      <div id="appsNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu" style="width: 25rem;">
                        <!-- Header -->
                        <div class="card-header">
                          <span class="card-title h4">Web apps &amp; services</span>
                        </div>
                        <!-- End Header -->
                        <!-- Body -->
                        <div class="card-body card-body-height">
                          <!-- Nav -->
                          <div class="nav nav-pills flex-column">
                            <a class="nav-link" href="#">
                              <div class="media align-items-center">
                                <span class="mr-3">
                                  <img class="avatar avatar-xs" src="{{_WEB_ROOT.'/public/admin/svg/brands/atlassian.svg'}}" alt="Image Description">
                                </span>
                                <div class="media-body text-truncate">
                                  <span class="h5 mb-0">Atlassian</span>
                                  <span class="d-block font-size-sm text-body">Security and control across Cloud</span>
                                </div>
                              </div>
                            </a>
                            <a class="nav-link" href="#">
                              <div class="media align-items-center">
                                <span class="mr-3">
                                  <img class="avatar avatar-xs" src="{{_WEB_ROOT.'/public/admin/svg/brands/slack.svg'}}" alt="Image Description">
                                </span>
                                <div class="media-body text-truncate">
                                  <span class="h5 mb-0">Slack <span class="badge badge-primary badge-pill text-uppercase ml-1">Try</span></span>
                                  <span class="d-block font-size-sm text-body">Email collaboration software</span>
                                </div>
                              </div>
                            </a>
                            <a class="nav-link" href="#">
                              <div class="media align-items-center">
                                <span class="mr-3">
                                  <img class="avatar avatar-xs" src="{{_WEB_ROOT.'/public/admin/svg/brands/frontapp.svg'}}" alt="Image Description">
                                </span>
                                <div class="media-body text-truncate">
                                  <span class="h5 mb-0">Frontapp</span>
                                  <span class="d-block font-size-sm text-body">The inbox for teams</span>
                                </div>
                              </div>
                            </a>
                            <a class="nav-link" href="#">
                              <div class="media align-items-center">
                                <span class="mr-3">
                                  <img class="avatar avatar-xs" src="{{_WEB_ROOT.'/public/admin/svg/illustrations/review-rating-shield.svg'}}" alt="Image Description">
                                </span>
                                <div class="media-body text-truncate">
                                  <span class="h5 mb-0">HS Support</span>
                                  <span class="d-block font-size-sm text-body">Customer service and support</span>
                                </div>
                              </div>
                            </a>
                            <a class="nav-link" href="#">
                              <div class="media align-items-center">
                                <span class="avatar avatar-xs avatar-soft-dark mr-3">
                                  <span class="avatar-initials"><i class="tio-apps"></i></span>
                                </span>
                                <div class="media-body text-truncate">
                                  <span class="h5 mb-0">More Front products</span>
                                  <span class="d-block font-size-sm text-body">Check out more HS products</span>
                                </div>
                              </div>
                            </a>
                          </div>
                          <!-- End Nav -->
                        </div>
                        <!-- End Body -->
                        <!-- Footer -->
                        <a class="card-footer text-center" href="#">
                          View all apps
                          <i class="tio-chevron-right"></i>
                        </a>
                        <!-- End Footer -->
                      </div>
                    </div>
                    <!-- End Apps -->
                  </li>
                  <li class="nav-item d-none d-sm-inline-block">
                    <!-- Activity -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-light rounded-circle" href="javascript:;" data-hs-unfold-options='{
                    "target": "#activitySidebar",
                    "type": "css-animation",
                    "animationIn": "fadeInRight",
                    "animationOut": "fadeOutRight",
                    "hasOverlay": true,
                    "smartPositionOff": true
                   }'>
                        <i class="tio-voice-line"></i>
                      </a>
                    </div>
                    <!-- Activity -->
                  </li>
                  <li class="nav-item">
                    <!-- Account -->
                    <div class="hs-unfold">
                      <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                     "target": "#accountNavbarDropdown",
                     "type": "css-animation"
                   }'>
                        <div class="avatar avatar-sm avatar-circle">
                          <img class="avatar-img" src="{{_WEB_ROOT.'/public/uploads/avatar/'.Session::data('user_data_admin')['user_avatar'] ?? null}}" alt="Image Description">
                          <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                        </div>
                      </a>
                      <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                        <div class="dropdown-item-text">
                          <div class="media align-items-center">
                            <div class="avatar avatar-sm avatar-circle mr-2">
                              <img class="avatar-img" src="{{_WEB_ROOT.'/public/uploads/avatar/'.Session::data('user_data_admin')['user_avatar'] ?? null}}" alt="Image Description">
                            </div>
                            <div class="media-body">
                              <span class="card-title h5">{{ Session::data('user_data_admin')['user_name'] ?? null }}</span>
                              <span class="card-text">{{ Session::data('user_data_admin')['user_email'] ?? null }}</span>
                            </div>
                          </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <!-- Unfold -->
                        <div class="hs-unfold w-100">
                          <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                         "target": "#navSubmenuPagesAccountDropdown1",
                         "event": "hover"
                       }'>
                            <span class="text-truncate pr-2" title="Set status">Set status</span>
                            <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker ml-auto"></i>
                          </a>
                          <div id="navSubmenuPagesAccountDropdown1" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                            <a class="dropdown-item" href="#">
                              <span class="legend-indicator bg-success mr-1"></span>
                              <span class="text-truncate pr-2" title="Available">Available</span>
                            </a>
                            <a class="dropdown-item" href="#">
                              <span class="legend-indicator bg-danger mr-1"></span>
                              <span class="text-truncate pr-2" title="Busy">Busy</span>
                            </a>
                            <a class="dropdown-item" href="#">
                              <span class="legend-indicator bg-warning mr-1"></span>
                              <span class="text-truncate pr-2" title="Away">Away</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                              <span class="text-truncate pr-2" title="Reset status">Reset status</span>
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Profile &amp; account">Profile &amp; account</span>
                        </a>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Settings">Settings</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                          <div class="media align-items-center">
                            <div class="avatar avatar-sm avatar-dark avatar-circle mr-2">
                              <span class="avatar-initials">HS</span>
                            </div>
                            <div class="media-body">
                              <span class="card-title h5">Htmlstream <span class="badge badge-primary badge-pill text-uppercase ml-1">PRO</span></span>
                              <span class="card-text">hs.example.com</span>
                            </div>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <!-- Unfold -->
                        <div class="hs-unfold w-100">
                          <a class="js-hs-unfold-invoker navbar-dropdown-submenu-item dropdown-item d-flex align-items-center" href="javascript:;" data-hs-unfold-options='{
                         "target": "#navSubmenuPagesAccountDropdown2",
                         "event": "hover"
                       }'>
                            <span class="text-truncate pr-2" title="Customization">Customization</span>
                            <i class="tio-chevron-right navbar-dropdown-submenu-item-invoker  ml-auto"></i>
                          </a>
                          <div id="navSubmenuPagesAccountDropdown2" class="hs-unfold-content hs-unfold-has-submenu dropdown-unfold dropdown-menu navbar-dropdown-sub-menu">
                            <a class="dropdown-item" href="#">
                              <span class="text-truncate pr-2" title="Invite people">Invite people</span>
                            </a>
                            <a class="dropdown-item" href="#">
                              <span class="text-truncate pr-2" title="Analytics">Analytics</span>
                              <i class="tio-open-in-new"></i>
                            </a>
                            <a class="dropdown-item" href="#">
                              <span class="text-truncate pr-2" title="Customize Front">Customize Front</span>
                              <i class="tio-open-in-new"></i>
                            </a>
                          </div>
                        </div>
                        <!-- End Unfold -->
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Manage team">Manage team</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                          <span class="text-truncate pr-2" title="Sign out">Sign out</span>
                        </a>
                      </div>
                    </div>
                    <!-- End Account -->
                  </li>
                  <li class="nav-item">
                    <!-- Toggle -->
                    <button type="button" class="navbar-toggler btn btn-ghost-light rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenu" data-toggle="collapse" data-target="#navbarNavMenu">
                      <i class="tio-menu-hamburger"></i>
                    </button>
                    <!-- End Toggle -->
                  </li>
                </ul>
                <!-- End Navbar -->
              </div>
              <!-- End Secondary Content -->
            </div>
          </div>
        </div>
        <div class="container-fluid">
          <nav class="js-mega-menu flex-grow-1">
            <!-- Navbar -->
            <div class="navbar-nav-wrap-navbar collapse navbar-collapse" id="navbarNavMenu">
              <div class="navbar-body">
                <ul class="navbar-nav flex-grow-1">
                  <!-- Dashboards -->
                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="{{_WEB_ROOT.'/dashboard'}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkDashboardsDropdown">
                      <i class="tio-home-vs-1-outlined nav-icon"></i> Dashboards
                    </a>
                    <!-- Dropdown -->
                    <ul id="navLinkDashboardsDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="dashboardsDropdown" style="min-width: 16rem;">
                      <li>
                        <a class="dropdown-item" href="{{_WEB_ROOT.'/dashboard'}}">
                          <span class="tio-circle nav-indicator-icon"></span> Trang quản trị
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-item" href="dashboard-alternative.html">
                          <span class="tio-circle nav-indicator-icon"></span> Cấu hình chung
                        </a>
                      </li>
                    </ul>
                    <!-- End Dropdown -->
                  </li>
                  <!-- End Dashboards -->
                  <!-- Tài khoản Admin -->
                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="adminDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkAdminDropdown">
                      <i class="tio-user nav-icon"></i> Quản trị viên
                    </a>
                    <!-- Dropdown -->
                    <ul id="navLinkAdminDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="adminDropdown" style="min-width: 16rem;">
                      <!-- Tài khoản -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="adminDropdownAccount" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkAdminDropdownAccount">
                          <span class="tio-circle nav-indicator-icon"></span> Tài khoản
                        </a>
                        <ul id="navLinkAdminDropdownAccount" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="adminDropdownAccount" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/admin-accounts-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới tài khoản
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/admin-accounts'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách quản trị viên
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Tài khoản -->
                      <!-- Chức vụ -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="adminDropdownRoles" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkAdminDropdownRoles">
                          <span class="tio-circle nav-indicator-icon"></span> Chức vụ <span class="badge badge-primary badge-pill ml-2">5</span>
                        </a>
                        <ul id="navLinkAdminDropdownRoles" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="adminDropdownRoles" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/roles-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới chức vụ
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/roles'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách chức vụ
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Chức vụ -->
                      <!-- Quyền hạn -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="adminDropdownPermissions" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="adminDropdownPermissions">
                          <span class="tio-circle nav-indicator-icon"></span> Quyền hạn
                        </a>
                        <ul id="adminDropdownPermissions" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="adminDropdownPermissions" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/permissions-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới quyền hạn
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/permissions'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách quyền hạn
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Quyền hạn -->
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
                  <!-- End Tài khoản Admin -->
                  <!-- Sản phẩm -->
                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="prodManageDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkProdManageDropdown">
                      <i class="tio-pages-outlined nav-icon"></i> Quản lý sản phẩm
                    </a>
                    <!-- Dropdown -->
                    <ul id="navLinkProdManageDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodManageDropdown" style="min-width: 16rem;">
                      <!-- Sản phẩm -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="prodMngDropdownProducts" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkProdMngDropdownProducts">
                          <span class="tio-circle nav-indicator-icon"></span> Sản phẩm
                        </a>
                        <ul id="navLinkProdMngDropdownProducts" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodMngDropdownProducts" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/products-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới sản phẩm
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/products'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách sản phẩm
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Sản phẩm -->
                      <!-- Danh mục sản phẩm -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="prodMngDropdownProdCate" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkProdMngDropdownProdCate">
                          <span class="tio-circle nav-indicator-icon"></span> Danh mục sản phẩm <span class="badge badge-primary badge-pill ml-2">5</span>
                        </a>
                        <ul id="navLinkProdMngDropdownProdCate" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodMngDropdownProdCate" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/products-category-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới danh mục
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/products-category'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách danh mục
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Danh mục sản phẩm -->
                      <!-- Nhà cung ứng -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="prodMngDropdownSuppliers" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkProdMngDropdownSuppliers">
                          <span class="tio-circle nav-indicator-icon"></span> Nhà cung ứng
                        </a>
                        <ul id="navLinkProdMngDropdownSuppliers" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodMngDropdownSuppliers" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/supplier-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới nhà cung ứng
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/supplier'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách nhà cung ứng
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Nhà cung ứng -->
                      <!-- Đánh giá sản phẩm -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="prodMngDropdownReviews" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkProdMngDropdownReviews">
                          <span class="tio-circle nav-indicator-icon"></span> Đánh giá sản phẩm
                        </a>
                        <ul id="navLinkProdMngDropdownReviews" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="prodMngDropdownReviews" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT}}/manage-review">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Chi tiết đánh giá
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Đánh giá sản phẩm -->
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
                  <!-- End Sản phẩm -->
                  <!-- Xuất nhập kho -->
                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="warehousesDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkWarehousesDropdown">
                      <i class="tio-import-export nav-icon"></i> Quản lý Xuất Nhập kho
                    </a>
                    <!-- Dropdown -->
                    <ul id="navLinkWarehousesDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="warehousesDropdown" style="min-width: 16rem;">
                      <!-- Kho hàng -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="warehousesDropdownWare" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkWarehousesDropdownWare">
                          <span class="tio-circle nav-indicator-icon"></span> Kho hàng
                        </a>
                        <ul id="navLinkWarehousesDropdownWare" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="warehousesDropdownWare" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/warehouse-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới Kho hàng
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/warehouse'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách Kho hàng
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Kho hàng -->
                      <!-- Nhập kho -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="warehousesDropdownImport" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkWarehousesDropdownImport">
                          <span class="tio-circle nav-indicator-icon"></span> Nhập kho <span class="badge badge-primary badge-pill ml-2">5</span>
                        </a>
                        <ul id="navLinkWarehousesDropdownImport" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="warehousesDropdownImport" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/warehouse-import'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách Nhập
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="user-profile-teams.html">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thống kê
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Nhập kho -->
                      <!-- Xuất kho -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="warehousesDropdownExport" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkWarehousesDropdownExport">
                          <span class="tio-circle nav-indicator-icon"></span> Xuất kho <span class="badge badge-primary badge-pill ml-2">5</span>
                        </a>
                        <ul id="navLinkWarehousesDropdownExport" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="warehousesDropdownExport" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/warehouse-export'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách Xuất
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="user-profile-teams.html">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thống kê
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Xuất kho -->
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
                  <!-- End Xuất nhập kho -->
                  <!-- Khuyến mãi và giảm giá -->
                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="vouchersDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkVouchersDropdown">
                      <i class="tio-pages-outlined nav-icon"></i> Khuyến mãi và mã giảm giá
                    </a>
                    <!-- Dropdown -->
                    <ul id="navLinkVouchersDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="vouchersDropdown" style="min-width: 16rem;">
                      <!-- Mã giảm giá -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="vouchersDropdownCode" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkVouchersDropdownCode">
                          <span class="tio-circle nav-indicator-icon"></span> Mã giảm giá
                        </a>
                        <ul id="navLinkVouchersDropdownCode" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="vouchersDropdownCode" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/vouchers-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới mã giảm giá
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/vouchers'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách mã giảm giá
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Mã giảm giá -->
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
                  <!-- End Khuyến mãi và giảm giá -->
                  <!-- Đặt hàng -->
                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="orderMngDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkOrderMngDropdown">
                      <i class="tio-pages-outlined nav-icon"></i> Quản lý đặt hàng
                    </a>
                    <!-- Dropdown -->
                    <ul id="navLinkOrderMngDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="orderMngDropdown" style="min-width: 16rem;">
                      <!-- Đơn hàng -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="orderMngDropdownOrder" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkOrderMngDropdownOrder">
                          <span class="tio-circle nav-indicator-icon"></span> Đơn hàng
                        </a>
                        <ul id="navLinkOrderMngDropdownOrder" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="orderMngDropdownOrder" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/order'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách đơn hàng
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="users-leaderboard.html">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thống kê đơn hàng
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End đơn hàng -->
                      <!-- Phương thức thanh toán -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="orderMngDropdownPaymentTypes" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkOrderMngDropdownPaymentTypes">
                          <span class="tio-circle nav-indicator-icon"></span> Phương thức thanh toán <span class="badge badge-primary badge-pill ml-2">5</span>
                        </a>
                        <ul id="navLinkOrderMngDropdownPaymentTypes" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="orderMngDropdownPaymentTypes" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/payment-types-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới phương thức
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/payment-types'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách phương thức
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Phương thức thanh toán -->
                      <!-- Phí vận chuyển -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="orderMngDropdownShipFee" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkOrderMngDropdownShipFee">
                          <span class="tio-circle nav-indicator-icon"></span> Phí vận chuyển
                        </a>
                        <ul id="navLinkOrderMngDropdownShipFee" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="orderMngDropdownShipFee" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/deliveries'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Tra cứu phí vận chuyển
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Phí vận chuyển -->
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
                  <!-- End Đặt hàng -->
                  <!-- Khách hàng -->
                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="customersMngDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkCustomersMngDropdown">
                      <i class="tio-pages-outlined nav-icon"></i> Quản lý Khách hàng
                    </a>
                    <!-- Dropdown -->
                    <ul id="navLinkCustomersMngDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="customersMngDropdown" style="min-width: 16rem;">
                      <!-- Khách hàng -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="customersMngDropdownCustomers" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkCustomersMngDropdownCustomers">
                          <span class="tio-circle nav-indicator-icon"></span> Khách hàng
                        </a>
                        <ul id="navLinkCustomersMngDropdownCustomers" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="customersMngDropdownCustomers" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/customers'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách Khách hàng
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/customer-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới Khách hàng
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thống kê Khách hàng
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Khách hàng -->
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
                  <!-- End Khách hàng -->
                  <!-- Blogs -->
                  <li class="hs-has-sub-menu navbar-nav-item">
                    <a id="blogsMngDropdown" class="hs-mega-menu-invoker navbar-nav-link nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="navLinkBlogsMngDropdown">
                      <i class="tio-pages-outlined nav-icon"></i> Quản lý bài viết
                    </a>
                    <!-- Dropdown -->
                    <ul id="navLinkBlogsMngDropdown" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="blogsMngDropdown" style="min-width: 16rem;">
                      <!-- Bài viết nhẹ -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="blogsMngDropdownBlogs" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkBlogsMngDropdownBlogs">
                          <span class="tio-circle nav-indicator-icon"></span> Bài viết
                        </a>
                        <ul id="navLinkBlogsMngDropdownBlogs" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="blogsMngDropdownBlogs" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/blogs-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới Bài viết
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/blogs'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách Bài viết
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Bài viết nhẹ -->
                      <!-- Danh mục Bài viết -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="blogsMngDropdownCategory" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkBlogsMngDropdownCategory">
                          <span class="tio-circle nav-indicator-icon"></span> Danh mục Bài viết <span class="badge badge-primary badge-pill ml-2">5</span>
                        </a>
                        <ul id="navLinkBlogsMngDropdownCategory" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="blogsMngDropdownCategory" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/blogs-category-create'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Thêm mới danh mục
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/blogs-category'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách danh mục
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Danh mục Bài viết -->
                      <!-- Bình luận bài viết -->
                      <li class="hs-has-sub-menu navbar-nav-item">
                        <a id="blogsMngDropdownComments" class="hs-mega-menu-invoker dropdown-item dropdown-item-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navLinkBlogsMngDropdownComments">
                          <span class="tio-circle nav-indicator-icon"></span> Bình luận bài viết
                        </a>
                        <ul id="navLinkBlogsMngDropdownComments" class="hs-sub-menu dropdown-menu dropdown-menu-lg" aria-labelledby="blogsMngDropdownComments" style="min-width: 16rem;">
                          <li>
                            <a class="dropdown-item" href="account-settings.html">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Bình luận bài viết
                            </a>
                          </li>
                          <li>
                            <a class="dropdown-item" href="{{_WEB_ROOT.'/manage-blog-comment'}}">
                              <span class="tio-circle-outlined nav-indicator-icon"></span> Danh sách bình luận
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- End Bình luận bài viết -->
                      <li class="dropdown-divider"></li>
                    </ul>
                  </li>
                  <!-- End Blogs -->
                </ul>
              </div>
            </div>
            <!-- End Navbar -->
          </nav>
        </div>
      </header>
    </div>
    <div id="sidebarMain" class="d-none">
      <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
          <div class="navbar-vertical-footer-offset">
            <div class="navbar-brand-wrapper justify-content-between">
              <!-- Logo -->
              <a class="navbar-brand" href="{{_WEB_ROOT}}/dashboard" aria-label="Front">
                <img class="navbar-brand-logo" src="{{_WEB_ROOT.'/public/admin/svg/logos/logo_chu_trang.png'}}" alt="Logo">
                <img class="navbar-brand-logo-mini" src="{{_WEB_ROOT.'/public/admin/svg/logos/volt.png'}}" alt="Logo">
              </a>
              <!-- End Logo -->
              <!-- Navbar Vertical Toggle -->
              <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                <i class="tio-clear tio-lg"></i>
              </button>
              <!-- End Navbar Vertical Toggle -->
            </div>
            <!-- Content -->
            <div class="navbar-vertical-content">
              <ul class="navbar-nav navbar-nav-lg nav-tabs">
                <!-- Dashboards -->
                <li class="navbar-vertical-aside-has-menu class-open-effect-top">
                  <a class="js-navbar-vertical-aside-menu-link nav-link" href="javascript:;" title="Trang chủ">
                    <i class="tio-home-vs-1-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Dashboards</span>
                  </a>
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link active-dashboard" href="{{_WEB_ROOT.'/dashboard'}}" title="Default">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Trang quản trị</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active-config" href="dashboard-alternative.html" title="Alternative">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Cấu hình chung</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Dashboards -->
                <!-- Tài khoản Admin -->
                <li class="navbar-vertical-aside-has-menu class-open-effect-top">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Admins">
                    <i class="tio-user nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Quản trị viên</span>
                  </a>
                  @foreach ($AdminHasPermissions as $permission)
                  @if ($permission['permission_id'] == '1')
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <!-- Tài khoản -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Admin Account">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Tài khoản </span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-admin-accounts-create" href="{{_WEB_ROOT.'/admin-accounts-create'}}" title="Add Admin Account">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới tài khoản </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-admin-accounts" href="{{_WEB_ROOT.'/admin-accounts'}}" title="List Admin Account">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách quản trị viên </span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Chức vụ -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Roles">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Chức vụ <span class="badge badge-primary badge-pill ml-1"></span></span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-roles-create" href="{{_WEB_ROOT.'/roles-create'}}" title="Add Roles">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới chức vụ</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-roles" href="{{_WEB_ROOT.'/roles'}}" title="List Roles">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách chức vụ</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Quyền hạn -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Permissions">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Quyền hạn</span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-permissions-create" href="{{_WEB_ROOT.'/permissions-create'}}" title="Add Permissions">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới quyền hạn</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-permissions" href="{{_WEB_ROOT.'/permissions'}}" title="List Permissions">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách quyền hạn</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  @endif
                  @endforeach
                </li>
                <!-- End Tài khoản Admin -->
                <!-- Sản phẩm -->
                <li class="navbar-vertical-aside-has-menu class-open-effect-top">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Manage Products">
                    <i class="tio-pages-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Quản lý sản phẩm</span>
                  </a>
                  @foreach ($AdminHasPermissions as $permission)
                  @if ($permission['permission_id'] == '2')
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <!-- Sản phẩm -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Products">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Sản phẩm </span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-products-create" href="{{_WEB_ROOT.'/products-create'}}" title="Add Product">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới sản phẩm </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-products" href="{{_WEB_ROOT.'/products'}}" title="List Product">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách sản phẩm </span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Danh mục sản phẩm -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Category Product">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Danh mục sản phẩm <span class="badge badge-primary badge-pill ml-1"></span></span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-products-category-create" href="{{_WEB_ROOT.'/products-category-create'}}" title="Add Category Product">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới danh mục</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-products-category" href="{{_WEB_ROOT.'/products-category'}}" title="List Category Product">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách danh mục</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Nhà cung ứng -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Supplier">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Nhà cung ứng</span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-supplier-create" href="{{_WEB_ROOT.'/supplier-create'}}" title="Add Supplier">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới nhà cung ứng</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-supplier" href="{{_WEB_ROOT.'/supplier'}}" title="List Supplier">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách nhà cung ứng</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Đánh giá sản phẩm -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Reviews">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Đánh giá sản phẩm</span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-manage-review" href="{{_WEB_ROOT}}/manage-review" title="Rating">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Chi tiết đánh giá</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  @endif
                  @endforeach
                </li>
                <!-- End Sản phẩm -->
                <!-- Xuất nhập kho -->
                <li class="navbar-vertical-aside-has-menu class-open-effect-top">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Manage WareHouse">
                    <i class="tio-import-export nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Quản lý xuất nhập kho</span>
                  </a>
                  @foreach ($AdminHasPermissions as $permission)
                  @if ($permission['permission_id'] == '4')
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <!-- Kho hàng -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="WareHouse">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Kho hàng </span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-warehouse-create" href="{{_WEB_ROOT.'/warehouse-create'}}" title="Add WareHouse">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới Kho hàng </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-warehouse" href="{{_WEB_ROOT.'/warehouse'}}" title="List WareHouse">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách Kho hàng </span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Nhập kho -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Import">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Nhập kho <span class="badge badge-primary badge-pill ml-1"></span></span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-warehouse-import" href="{{_WEB_ROOT.'/warehouse-import'}}" title="List Import">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách Nhập</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-" href="user-profile-teams.html" title="Statical Import">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thống kê</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Xuất kho -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Export">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Xuất kho <span class="badge badge-primary badge-pill ml-1"></span></span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-warehouse-export" href="{{_WEB_ROOT.'/warehouse-export'}}" title="List Export">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách Xuất</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-" href="user-profile-teams.html" title="Statical Export">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thống kê</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  @endif
                  @endforeach
                </li>
                <!-- End Xuất nhập kho -->
                <!-- Khuyến mãi và giảm giá -->
                <li class="navbar-vertical-aside-has-menu class-open-effect-top">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Manage Vouchers">
                    <i class="tio-ticket nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Khuyến mãi và giảm giá</span>
                  </a>
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <!-- Mã giảm giá -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Voucher">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Mã giảm giá </span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-vouchers-create" href="{{_WEB_ROOT.'/vouchers-create'}}" title="Add Voucher">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới mã giảm giá </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-vouchers" href="{{_WEB_ROOT.'/vouchers'}}" title="List Voucher">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách mã giảm giá </span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <!-- End Khuyến mãi và giảm giá -->
                <!-- Đặt hàng -->
                <li class="navbar-vertical-aside-has-menu class-open-effect-top">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Manage Orders">
                    <i class="tio-book-bookmarked nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Quản lý Đặt hàng</span>
                  </a>
                  @foreach ($AdminHasPermissions as $permission)
                  @if ($permission['permission_id'] == '5')
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <!-- Đơn hàng -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Orders">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Đơn hàng </span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-order" href="{{_WEB_ROOT.'/order'}}" title="List Orders">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách đơn hàng </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-" href="users-leaderboard.html" title="Statical Orders">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thống kê đơn hàng </span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Phương thức thanh toán -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Payment Type">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Phương thức thanh toán</span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-payment-types-create" href="{{_WEB_ROOT.'/payment-types-create'}}" title="Add Payment Type">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới phương thức</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-payment-types" href="{{_WEB_ROOT.'/payment-types'}}" title="List Payment Type">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách phương thức</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Phí ship -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Ship Fee">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Phí vận chuyển <span class="badge badge-primary badge-pill ml-1"></span></span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-deliveries" href="{{_WEB_ROOT.'/deliveries'}}" title="Search Ship fee">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Tra cứu phí vận chuyển</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  @endif
                  @endforeach
                </li>
                <!-- End Đặt hàng -->
                <!-- Khách hàng -->
                <li class="navbar-vertical-aside-has-menu class-open-effect-top">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Manage Customer">
                    <i class="tio-group-equal nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Quản lý khách hàng</span>
                  </a>
                  @foreach ($AdminHasPermissions as $permission)
                  @if ($permission['permission_id'] == '3')
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <!-- khách hàng -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Customer">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Khách hàng </span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-customers" href="{{_WEB_ROOT.'/customers'}}" title="List Customer">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách khách hàng </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-customer-create" href="{{_WEB_ROOT.'/customer-create'}}" title="Add Customer">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới khách hàng </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-" href="" title="Statiscal Customer">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thống kê khách hàng </span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  @endif
                  @endforeach
                </li>
                <!-- End Khách hàng -->
                <!-- Blogs -->
                <li class="navbar-vertical-aside-has-menu class-open-effect-top">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Manage Blogs">
                    <i class="tio-book-opened nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Quản lý bài viết</span>
                  </a>
                  @foreach ($AdminHasPermissions as $permission)
                  @if ($permission['permission_id'] == '6')
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <!-- Blog -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Blogs">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Bài viết </span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-blogs-create" href="{{_WEB_ROOT.'/blogs-create'}}" title="Add Blogs">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới bài viết </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-blogs" href="{{_WEB_ROOT.'/blogs'}}" title="List Blogs">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách bài viết </span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Danh mục bài viết -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Category Blog">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Danh mục bài viết <span class="badge badge-primary badge-pill ml-1"></span></span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-blogs-category-create" href="{{_WEB_ROOT.'/blogs-category-create'}}" title="Add CateBlog">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thêm mới danh mục</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-blogs-category" href="{{_WEB_ROOT.'/blogs-category'}}" title="List CateBlog">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách danh mục</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- Bình luận bài viết -->
                    <li class="navbar-vertical-aside-has-menu class-open-effect">
                      <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Comment Blog">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Bình luận bài viết</span>
                      </a>
                      <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                          <a class="nav-link active-" href="ecommerce.html" title="Statical Comment">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Thống kê bình luận</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active-manage-blog-comment" href="{{_WEB_ROOT.'/manage-blog-comment'}}" title="List Comment">
                            <span class="tio-circle-outlined nav-indicator-icon"></span>
                            <span class="text-truncate">Danh sách Bình luận</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  @endif
                  @endforeach
                </li>
                <!-- End Blogs -->
                <!-- Front Builder -->
                <li class="nav-item nav-footer-item ">
                  <a class="d-none d-md-flex js-hs-unfold-invoker nav-link nav-link-toggle" href="javascript:;" data-hs-unfold-options='{
                 "target": "#styleSwitcherDropdown",
                 "type": "css-animation",
                 "animationIn": "fadeInRight",
                 "animationOut": "fadeOutRight",
                 "hasOverlay": true,
                 "smartPositionOff": true
               }'>
                    <i class="tio-tune nav-icon"></i>
                  </a>
                  <a class="d-flex d-md-none nav-link nav-link-toggle" href="javascript:;">
                    <i class="tio-tune nav-icon"></i>
                  </a>
                </li>
                <!-- End Front Builder -->
                <!-- Help -->
                <li class="navbar-vertical-aside-has-menu nav-footer-item ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Help">
                    <i class="tio-home-vs-1-outlined nav-icon"></i>
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Help</span>
                  </a>
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Resources &amp; tutorials">
                        <i class="tio-book-outlined dropdown-item-icon"></i> Resources &amp; tutorials
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Keyboard shortcuts">
                        <i class="tio-command-key dropdown-item-icon"></i> Keyboard shortcuts
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Connect other apps">
                        <i class="tio-alt dropdown-item-icon"></i> Connect other apps
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="What's new?">
                        <i class="tio-gift dropdown-item-icon"></i> What's new?
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Contact support">
                        <i class="tio-chat-outlined dropdown-item-icon"></i> Contact support
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Help -->
                <!-- Language -->
                <li class="navbar-vertical-aside-has-menu nav-footer-item ">
                  <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Language">
                    <img class="avatar avatar-xss avatar-circle" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/us.svg'}}" alt="United States Flag">
                    <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Language</span>
                  </a>
                  <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="English (US)">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/us.svg'}}" alt="Flag">
                        English (US)
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="English (UK)">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/gb.svg'}}" alt="Flag">
                        English (UK)
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Deutsch">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/de.svg'}}" alt="Flag">
                        Deutsch
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Dansk">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/dk.svg'}}" alt="Flag">
                        Dansk
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="Italiano">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/it.svg'}}" alt="Flag">
                        Italiano
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" title="中文 (繁體)">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/cn.svg'}}" alt="Flag">
                        中文 (繁體)
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- End Language -->
              </ul>
            </div>
            <!-- End Content -->
            <!-- Footer -->
            <div class="navbar-vertical-footer">
              <ul class="navbar-vertical-footer-list">
                <li class="navbar-vertical-footer-list-item">
                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                  "target": "#styleSwitcherDropdown",
                  "type": "css-animation",
                  "animationIn": "fadeInRight",
                  "animationOut": "fadeOutRight",
                  "hasOverlay": true,
                  "smartPositionOff": true
                 }'>
                      <i class="tio-tune"></i>
                    </a>
                  </div>
                  <!-- End Unfold -->
                </li>
                <li class="navbar-vertical-footer-list-item">
                  <!-- Other Links -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                  "target": "#otherLinksDropdown",
                  "type": "css-animation",
                  "animationIn": "slideInDown",
                  "hideOnScroll": true
                 }'>
                      <i class="tio-help-outlined"></i>
                    </a>
                    <div id="otherLinksDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown">
                      <span class="dropdown-header">Help</span>
                      <a class="dropdown-item" href="#">
                        <i class="tio-book-outlined dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-command-key dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="Keyboard shortcuts">Keyboard shortcuts</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-alt dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="Connect other apps">Connect other apps</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="tio-gift dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="What's new?">What's new?</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Contacts</span>
                      <a class="dropdown-item" href="#">
                        <i class="tio-chat-outlined dropdown-item-icon"></i>
                        <span class="text-truncate pr-2" title="Contact support">Contact support</span>
                      </a>
                    </div>
                  </div>
                  <!-- End Other Links -->
                </li>
                <li class="navbar-vertical-footer-list-item">
                  <!-- Language -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-ghost-secondary rounded-circle" href="javascript:;" data-hs-unfold-options='{
                  "target": "#languageDropdown",
                  "type": "css-animation",
                  "animationIn": "slideInDown",
                  "hideOnScroll": true
                 }'>
                      <img class="avatar avatar-xss avatar-circle" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/us.svg'}}" alt="United States Flag">
                    </a>
                    <div id="languageDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu navbar-vertical-footer-dropdown">
                      <span class="dropdown-header">Select language</span>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/us.svg'}}" alt="Flag">
                        <span class="text-truncate pr-2" title="English">English (US)</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/gb.svg'}}" alt="Flag">
                        <span class="text-truncate pr-2" title="English">English (UK)</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/de.svg'}}" alt="Flag">
                        <span class="text-truncate pr-2" title="Deutsch">Deutsch</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/dk.svg'}}" alt="Flag">
                        <span class="text-truncate pr-2" title="Dansk">Dansk</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/it.svg'}}" alt="Flag">
                        <span class="text-truncate pr-2" title="Italiano">Italiano</span>
                      </a>
                      <a class="dropdown-item" href="#">
                        <img class="avatar avatar-xss avatar-circle mr-2" src="{{_WEB_ROOT.'/public/admin/vendor/flag-icon-css/flags/1x1/cn.svg'}}" alt="Flag">
                        <span class="text-truncate pr-2" title="中文 (繁體)">中文 (繁體)</span>
                      </a>
                    </div>
                  </div>
                  <!-- End Language -->
                </li>
              </ul>
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </aside>
    </div>
    <div id="sidebarCompact" class="d-none">
      <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container">
          <div class="navbar-brand d-flex justify-content-center">
            <!-- Logo -->
            <a class="navbar-brand" href="{{_WEB_ROOT}}/dashboard" aria-label="Front">
              <img class="navbar-brand-logo-short" src="{{_WEB_ROOT.'/public/admin/svg/logos/volt.png'}}" alt="Logo">
            </a>
            <!-- End Logo -->
          </div>
          <!-- Content -->
          <div class="navbar-vertical-content">
            <ul class="navbar-nav nav-compact">
              <!-- Dashboards -->
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link " href="{{_WEB_ROOT.'/dashboard'}}" title="Trang chủ">
                  <i class="tio-home-vs-1-outlined nav-icon"></i>
                  <span class="nav-compact-title text-truncate">Dashboards</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <li class="nav-item">
                    <a class="nav-link " href="{{_WEB_ROOT.'/dashboard'}}" title="Default">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Trang quản trị</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="dashboard-alternative.html" title="Alternative">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Cấu hình chung</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- End Dashboards -->
              <!-- Tài khoản Admin -->
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Admins">
                  <i class="tio-user nav-icon"></i>
                  <span class="nav-compact-title text-truncate">Quản trị viên</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <!-- Tài khoản -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Admin Account">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Tài khoản <span class="badge badge-primary badge-pill ml-1"></span></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/admin-accounts-create'}}" title="Add Admin Account">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới tài khoản</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/admin-accounts'}}" title="List Admin Account">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách quản trị viên</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Chức vụ -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Roles">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Chức vụ</span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/roles-create'}}" title="Add Roles">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới chức vụ</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/roles'}}" title="List Roles">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách chức vụ</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Quyền hạn -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Permissions">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Quyền hạn</span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/permissions-create'}}" title="Add Permissions">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới quyền hạn</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/permissions'}}" title="List Permissions">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách quyền hạn</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Tài khoản Admin -->
              <!-- Sản phẩm -->
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Manage Product">
                  <i class="tio-pages-outlined nav-icon"></i>
                  <span class="nav-compact-title text-truncate">Quản lý Sản phẩm</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <!-- Sản phẩm -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Product">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Sản phẩm <span class="badge badge-primary badge-pill ml-1"></span></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/products-create'}}" title="Add Product">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới sản phẩm</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/products'}}" title="List Product">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách sản phẩm</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Danh mục sản phẩm -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Category Product">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Danh mục sản phẩm</span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/products-category-create'}}" title="Add Category Product">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới danh mục</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/products-category'}}" title="List Category Product">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách danh mục</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Nhà cung ứng -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Supplier">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Nhà cung ứng</span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/supplier-create'}}" title="Add Supplier">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới nhà cung ứng</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/supplier'}}" title="List Supplier">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách nhà cung ứng</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Đánh giá sản phẩm -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Reviews">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Đánh giá sản phẩm</span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT}}/manage-review" title="Rating">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Chi tiết đánh giá</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Sản phẩm -->
              <!-- Xuất nhập kho -->
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Manage WareHouse">
                  <i class="tio-import-export nav-icon"></i>
                  <span class="nav-compact-title text-truncate">Quản lý Xuất Nhập kho</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <!-- Kho hàng -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="WareHouse">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Kho hàng <span class="badge badge-primary badge-pill ml-1"></span></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/warehouse-create'}}" title="Add WareHouse">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới kho hàng</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/warehouse'}}" title="List WareHouse">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách kho hàng</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Nhập kho -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Import">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Nhập kho</span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="users.html" title="List Import">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách Nhập</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="users-leaderboard.html" title="Statical Import">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thống kê</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Xuất kho -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Export">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Xuất kho</span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/warehouse-export'}}" title="List Export">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách Xuất</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="users-leaderboard.html" title="Statical Export">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thống kê</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Xuất nhập kho -->
              <!-- Khuyến mãi và giảm giá -->
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Manage Vouchers">
                  <i class="tio-ticket nav-icon"></i>
                  <span class="nav-compact-title text-truncate">Khuyến mãi và giảm giá</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <!-- Mã giảm giá -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Voucher">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Mã khuyến mãi <span class="badge badge-primary badge-pill ml-1"></span></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/vouchers-create'}}" title="Add Voucher">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới mã khuyến mãi</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/vouchers'}}" title="List Voucher">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách mã khuyến mãi</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Khuyến mãi và giảm giá -->
              <!-- Đặt hàng -->
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Manage Orders">
                  <i class="tio-book-bookmarked nav-icon"></i>
                  <span class="nav-compact-title text-truncate">Quản lý đặt hàng</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <!-- Đơn hàng -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Orders">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Đơn hàng <span class="badge badge-primary badge-pill ml-1"></span></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/order'}}" title="List Orders">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách đơn hàng</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="user-profile-teams.html" title="Statical Orders">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thống kê đơn hàng</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Phương thức thanh toán -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Payment Type">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Phương thức thanh toán <span class="badge badge-primary badge-pill ml-1"></span></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/payment-types-create'}}" title="Add Payment Type">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới phương thức</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/payment-types'}}" title="List Payment Type">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách phương thức</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Phí ship -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Ship Fee">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Phí vận chuyển <span class="badge badge-primary badge-pill ml-1"></span></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/deliveries'}}" title="Search Ship fee">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Tra cứu phí vận chuyển</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Đặt hàng -->
              <!-- Khách hàng -->
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Manage Customer">
                  <i class="tio-group-equal nav-icon"></i>
                  <span class="nav-compact-title text-truncate">Quản lý Khách hàng</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <!-- khách hàng -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Customer">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Khách hàng <span class="badge badge-primary badge-pill ml-1"></span></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/customers'}}" title="List Customer">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách khách hàng</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/customer-create'}}" title="Add Customer">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới khách hàng</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="" title="Statical Customer">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thống kê khách hàng</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Khách hàng -->
              <!-- Blogs -->
              <li class="navbar-vertical-aside-has-menu nav-item">
                <a class="js-navbar-vertical-aside-menu-link nav-link " href="javascript:;" title="Manage Blogs">
                  <i class="tio-book-opened nav-icon"></i>
                  <span class="nav-compact-title text-truncate">Quản lý Bài viết</span>
                </a>
                <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                  <!-- Blog -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Blogs">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Bài viết <span class="badge badge-primary badge-pill ml-1"></span></span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/blogs-create'}}" title="Add Blogs">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới Bài viết</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/blogs'}}" title="List Blogs">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách Bài viết</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Danh mục bài viết -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Category Blog">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Danh mục Bài viết</span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/blogs-category-create'}}" title="Add CateBlog">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thêm mới danh mục</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/blogs-category'}}" title="List CateBlog">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách danh mục</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- bình luận -->
                  <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Comment Blog">
                      <span class="tio-circle nav-indicator-icon"></span>
                      <span class="text-truncate">Bình luận bài viết</span>
                    </a>
                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                      <li class="nav-item">
                        <a class="nav-link " href="{{_WEB_ROOT.'/manage-blog-comment'}}" title="List Comment">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Danh sách Bình luận</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="ecommerce.html" title="Statical Comment">
                          <span class="tio-circle-outlined nav-indicator-icon"></span>
                          <span class="text-truncate">Thống kê bình luận</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- End Blogs -->
            </ul>
          </div>
          <!-- End Content -->
        </div>
      </aside>
    </div>
    <script src="{{_WEB_ROOT.'/public/admin/js/demo.js'}}"></script>
    <!-- END ONLY DEV -->
    <!-- Search Form -->
    <div id="searchDropdown" class="hs-unfold-content dropdown-unfold search-fullwidth d-md-none">
      <form class="input-group input-group-merge input-group-borderless">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="tio-search"></i>
          </div>
        </div>
        <input class="form-control rounded-0" type="search" placeholder="Search in front" aria-label="Search in front">
        <div class="input-group-append">
          <div class="input-group-text">
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker" href="javascript:;" data-hs-unfold-options='{
                   "target": "#searchDropdown",
                   "type": "css-animation",
                   "animationIn": "fadeIn",
                   "hasOverlay": "rgba(46, 52, 81, 0.1)",
                   "closeBreakpoint": "md"
                 }'>
                <i class="tio-clear tio-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- End Search Form -->
    <!-- ========== HEADER ========== -->
    <!-- ========== END HEADER ========== -->