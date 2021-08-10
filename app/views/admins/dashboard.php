<!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main pointer-event">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <h1 class="page-header-title">Bảng điều khiển</h1>
            </div>

           
          </div>
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <h3>Thống kê trong tháng</h3>
        <div class="row gx-2 gx-lg-3">
          
          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body" style="text-align: center">
                <h6 class="card-subtitle">Khách hàng</h6>
                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-12">
                    <span class="card-title h2">{{$total_customer}}</span>
                  </div>
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-success">
                  <i class="tio-trending-up"></i> 12.5%
                </span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body" style="text-align:center">
                <h6 class="card-subtitle">Đơn hàng</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-12">
                    <span class="card-title h2">{{$total_order}}</span>
                  </div>

                  
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-success">
                  <i class="tio-trending-up"></i> 1.7%
                </span>
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100" href="#">
              <div class="card-body" style="text-align:center;">
                <h6 class="card-subtitle">Tổng doanh thu</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-12">
                    <span class="card-title h2">{! number_format($total_price) ?? 0 !} đ</span>
                  </div>

                 
                </div>
                <!-- End Row -->

                <span class="badge badge-soft-danger">
                  <i class="tio-trending-down"></i> 4.4%
                </span>
                
              </div>
            </a>
            <!-- End Card -->
          </div>

          <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
            <!-- Card -->
            <a class="card card-hover-shadow h-100 align-items-center" href="#">
              <div class="card-body" style="text-align:center">
                <h6 class="card-subtitle">Lượt xem</h6>

                <div class="row align-items-center gx-2 mb-1">
                  <div class="col-12">
                    <span class="card-title h2" id="count"></span>
                  </div>

                </div>
                <!-- End Row -->

                <span class="badge badge-soft-secondary">0.0%</span>
              </div>
            </a>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Stats -->
        
     

        <!-- Card -->
        <div class="card mb-3 mb-lg-5">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-12 col-md">
                <div class="d-flex justify-content-between align-items-center">
                  <h5 class="card-header-title">Khách hàng</h5>

                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Selected
                      </span>
                      <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                        <i class="tio-delete-outlined"></i> Delete
                      </a>
                    </div>
                  </div>
                  <!-- End Datatable Info -->
                </div>
              </div>

              <div class="col-auto">
                <!-- Filter -->
                <div class="row align-items-sm-center">
   

                  <div class="col-md">
                    <form>
                      <!-- Search -->
                      <div class="input-group input-group-merge input-group-flush">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="tio-search"></i>
                          </div>
                        </div>
                        <input id="datatableSearch" type="search" class="form-control" placeholder="Tìm kiếm khách hàng" aria-label="Tìm kiếm khách hàng">
                      </div>
                      <!-- End Search -->
                    </form>
                  </div>
                </div>
                <!-- End Filter -->
              </div>
            </div>
          </div>
          <!-- End Header -->

          <!-- Table -->
          <div class="table-responsive datatable-custom">
            <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 1, 4],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 8,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                      <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th class="table-column-pl-0">Họ và tên</th>
                  <th>Tình trạng</th>
                  <th>Email</th>
                  <th>Thời gian</th>
                  <th>ID</th>
                </tr>
              </thead>

              <tbody>
                <?php $i = 0; ?>
                @foreach($customer as $data)
                <tr>
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="usersDataCheck{{$i}}">
                      <label class="custom-control-label" for="usersDataCheck{{$i}}"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="media align-items-center" href="{{_WEB_ROOT.'/customer-edit/id-'.$data['id']}}">
                      @if($data['avatar'] == "avatar-default.png")
                      <div class="avatar avatar-sm avatar-soft-primary avatar-circle mr-2">
                        <span class="avatar-initials">
                          @php
                            if(substr($data['fullname'], 0, 2) == "Đ"){
                              echo "D";
                            }else{
                              echo $data['fullname'][0];
                            }
                          @endphp
                        </span>
                      </div>
                      @endif
                      @if($data['avatar'] != "avatar-default.png")
                      <div class="avatar avatar-sm avatar-circle mr-2">
                        <img class="avatar-img" src="{{_WEB_ROOT.'/public/uploads/customer/'.$data['avatar']}}" alt="Image Description">
                      </div>
                      @endif
                      <div class="media-body">
                        <span class="h5 text-hover-primary mb-0">{{$data['fullname']}} </span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="legend-indicator bg-success"></span>Còn hoạt động
                  </td>
                  <td>{{$data['email']}}</td>
                  <td>{! time_elapsed_string($data['created_at']) !}</td>
                  <td>{{$data['id']}}</td>
                </tr>
                <?php $i++ ?>
                @endforeach
    
              </tbody>
            </table>
          </div>
          <!-- End Table -->

          <!-- Footer -->
          <div class="card-footer">
            <!-- Pagination -->
            <div class="row justify-content-center justify-content-sm-between align-items-sm-center">
              <div class="col-sm mb-2 mb-sm-0">
                <div class="d-flex justify-content-center justify-content-sm-start align-items-center">
                  <span class="mr-2">Showing:</span>

                  <!-- Select -->
                  <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8" selected="">8</option>
                    <option value="12">12</option>
                  </select>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">of</span>

                  <!-- Pagination Quantity -->
                  <span id="datatableWithPaginationInfoTotalQty"></span>
                </div>
              </div>

              <div class="col-sm-auto">
                <div class="d-flex justify-content-center justify-content-sm-end">
                  <!-- Pagination -->
                  <nav id="datatablePagination" aria-label="Activity pagination"></nav>
                </div>
              </div>
            </div>
            <!-- End Pagination -->
          </div>
          <!-- End Footer -->
        </div>
        <!-- End Card -->

       
      </div>
      <!-- End Content -->

      <!-- Footer -->
      
        <div class="footer">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              
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
                  <img class="step-avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160\img9.jpg'}}" alt="Image Description">
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
                                <img class="avatar avatar-xs" src="{{_WEB_ROOT.'/public/admin/svg/brands\excel.svg'}}" alt="Image Description">
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
                                <img class="avatar avatar-xs" src="{{_WEB_ROOT.'/public/admin/svg/brands\word.svg'}}" alt="Image Description">
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
                  <img class="step-avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160\img3.jpg'}}" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="h5 mb-1">Crane</h5>

                  <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                  <ul class="list-group list-group-sm">
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{_WEB_ROOT.'/public/admin/svg/illustrations\card-1.svg'}}" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{_WEB_ROOT.'/public/admin/svg/illustrations\card-2.svg'}}" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{_WEB_ROOT.'/public/admin/svg/illustrations\card-3.svg'}}" alt="Image Description">
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
                  <img class="step-avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160\img7.jpg'}}" alt="Image Description">
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
                  <img class="step-avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160\img5.jpg'}}" alt="Image Description">
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
                <img class="img-fluid" src="{{_WEB_ROOT.'/public/admin/svg/illustrations\graphs.svg'}}" alt="Image Description">
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
                  <img class="img-fluid ie-welcome-brands" src="{{_WEB_ROOT.'/public/admin/svg/brands\gitlab-gray.svg'}}" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{_WEB_ROOT.'/public/admin/svg/brands\fitbit-gray.svg'}}" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{_WEB_ROOT.'/public/admin/svg/brands\flow-xo-gray.svg'}}" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{_WEB_ROOT.'/public/admin/svg/brands\layar-gray.svg'}}" alt="Image Description">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Welcome Message Modal -->

    <!-- Create a new user Modal -->
    <div class="modal fade" id="inviteUserModal" tabindex="-1" role="dialog" aria-labelledby="inviteUserModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="inviteUserModalTitle" class="modal-title">Invite users</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Form Group -->
            <div class="form-group">
              <div class="input-group input-group-merge mb-2 mb-sm-0">
                <div class="input-group-prepend" id="fullName">
                  <span class="input-group-text">
                    <i class="tio-search"></i>
                  </span>
                </div>

                <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails" aria-describedby="fullName">

                <div class="input-group-append input-group-append-last-sm-down-none">
                  <!-- Select -->
                  <div id="permissionSelect" class="select2-custom select2-custom-right">
                    <select class="js-select2-custom custom-select" size="1" style="opacity: 0;" data-hs-select2-options='{
                              "dropdownParent": "#permissionSelect",
                              "minimumResultsForSearch": "Infinity",
                              "dropdownAutoWidth": true,
                              "dropdownWidth": "11rem"
                            }'>
                      <option value="guest" selected="">Guest</option>
                      <option value="can edit">Can edit</option>
                      <option value="can comment">Can comment</option>
                      <option value="full access">Full access</option>
                    </select>
                  </div>
                  <!-- End Select -->

                  <a class="btn btn-primary d-none d-sm-block" href="javascript:;">Invite</a>
                </div>
              </div>

              <a class="btn btn-block btn-primary d-sm-none" href="javascript:;">Invite</a>
            </div>
            <!-- End Form Group -->

            <div class="form-row">
              <h5 class="col modal-title">Invite users</h5>

              <div class="col-auto">
                <a class="d-flex align-items-center font-size-sm text-body" href="#">
                  <img class="avatar avatar-xss mr-2" src="{{_WEB_ROOT.'/public/admin/svg/brands\gmail.svg'}}" alt="Image Description">
                  Import contacts
                </a>
              </div>
            </div>

            <hr class="mt-2">

            <ul class="list-unstyled list-unstyled-py-4">
              <!-- List Group Item -->
              <li>
                <div class="media">
                  <div class="avatar avatar-sm avatar-circle mr-3">
                    <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160\img10.jpg'}}" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                        <span class="d-block font-size-sm">amanda@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect1" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect1",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="guest" selected="">Guest</option>
                            <option value="can edit">Can edit</option>
                            <option value="can comment">Can comment</option>
                            <option value="full access">Full access</option>
                            <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->

              <!-- List Group Item -->
              <li>
                <div class="media">
                  <div class="avatar avatar-sm avatar-circle mr-3">
                    <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160\img3.jpg'}}" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">David Harrison</h5>
                        <span class="d-block font-size-sm">david@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect2" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect2",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="guest" selected="">Guest</option>
                            <option value="can edit">Can edit</option>
                            <option value="can comment">Can comment</option>
                            <option value="full access">Full access</option>
                            <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->

              <!-- List Group Item -->
              <li>
                <div class="media">
                  <div class="avatar avatar-sm avatar-circle mr-3">
                    <img class="avatar-img" src="{{_WEB_ROOT.'/public/admin/img/160x160\img9.jpg'}}" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">Ella Lauda <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                        <span class="d-block font-size-sm">Markvt@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect4" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect4",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="guest" selected="">Guest</option>
                            <option value="can edit">Can edit</option>
                            <option value="can comment">Can comment</option>
                            <option value="full access">Full access</option>
                            <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->

              <!-- List Group Item -->
              <li>
                <div class="media">
                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle mr-3">
                    <span class="avatar-initials">B</span>
                  </div>

                  <div class="media-body">
                    <div class="row align-items-center">
                      <div class="col-sm">
                        <h5 class="text-body mb-0">Bob Dean</h5>
                        <span class="d-block font-size-sm">bob@example.com</span>
                      </div>

                      <div class="col-sm">
                        <!-- Select -->
                        <div id="inviteUserSelect3" class="select2-custom select2-custom-sm-right d-sm-flex justify-content-sm-end">
                          <select class="js-select2-custom custom-select-sm" size="1" style="opacity: 0;" data-hs-select2-options='{
                                    "dropdownParent": "#inviteUserSelect3",
                                    "minimumResultsForSearch": "Infinity",
                                    "customClass": "custom-select custom-select-sm custom-select-borderless pl-0",
                                    "dropdownAutoWidth": true,
                                    "width": true
                                  }'>
                            <option value="guest" selected="">Guest</option>
                            <option value="can edit">Can edit</option>
                            <option value="can comment">Can comment</option>
                            <option value="full access">Full access</option>
                            <option value="remove" data-option-template='<span class="text-danger">Remove</span>'>Remove</option>
                          </select>
                        </div>
                        <!-- End Select -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                </div>
              </li>
              <!-- End List Group Item -->
            </ul>
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer justify-content-start">
            <div class="row align-items-center flex-grow-1 mx-n2">
              <div class="col-sm-9 mb-2 mb-sm-0">
                <input type="hidden" id="inviteUserPublicClipboard" value="https://themes.getbootstrap.com/product/front-multipurpose-responsive-template/">

                <p class="modal-footer-text">The public share <a href="#">link settings</a>
                  <i class="tio-help-outlined" data-toggle="tooltip" data-placement="top" title="The public share link allows people to view the project without giving access to full collaboration features."></i>
                </p>
              </div>

              <div class="col-sm-3 text-sm-right">
                <a class="js-clipboard btn btn-sm btn-white text-nowrap" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Copy to clipboard!" data-hs-clipboard-options='{
                    "type": "tooltip",
                    "successText": "Copied!",
                    "contentTarget": "#inviteUserPublicClipboard",
                    "container": "#inviteUserModal"
                   }'>
                <i class="tio-link mr-1"></i> Copy link</a>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </form>
      </div>
    </div>
    <!-- End Create a new user Modal -->
    <!-- ========== END SECONDARY CONTENTS ========== -->
    <script>
        const countEl = document.getElementById('count');
        fetch('https://api.countapi.xyz/get/healthypower.com/youtube/')
          .then(res => res.json())
          .then(res => {
              countEl.innerHTML = res.value;
          })
    </script>
    