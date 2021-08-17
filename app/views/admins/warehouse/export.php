<main id="content" role="main" class="main">
  <!-- Content -->
  <div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row align-items-center mb-3">
        <div class="col-sm">
          <h1 class="page-header-title">Danh sách xuất kho</h1>

          <div class="mt-2">
            <a class="text-body mr-3" href="javascript:;" data-toggle="modal" data-target="#exportOrdersModal">
              <i class="tio-download-to mr-1"></i> Xuất file
            </a>

            <!-- Unfold -->
            <div class="hs-unfold">
              <a class="js-hs-unfold-invoker text-body" href="javascript:;" data-hs-unfold-options='{
                       "target": "#moreOptionsDropdown",
                       "type": "css-animation"
                     }'>
                Lựa chọn khác <i class="tio-chevron-down"></i>
              </a>

              <div id="moreOptionsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                <a class="dropdown-item" href="#">
                  <i class="tio-folder-add dropdown-item-icon"></i> New order
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-folder dropdown-item-icon"></i> New order - Development
                </a>
                <a class="dropdown-item" href="#">
                  <i class="tio-folder dropdown-item-icon"></i> New order - Staging
                </a>
              </div>
            </div>
            <!-- End Unfold -->
          </div>
        </div>

      </div>
      <!-- Nav -->
      <ul class="nav nav-tabs page-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" id="btn-all-order" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Tổng đơn nhập</a>
        </li>

      </ul>

      <!-- End Row -->

      <!-- Nav Scroller -->
      <div class="js-nav-scroller hs-nav-scroller-horizontal">
        <span class="hs-nav-scroller-arrow-prev" style="display: none;">
          <a class="hs-nav-scroller-arrow-link" href="javascript:;">
            <i class="tio-chevron-left"></i>
          </a>
        </span>

        <span class="hs-nav-scroller-arrow-next" style="display: none;">
          <a class="hs-nav-scroller-arrow-link" href="javascript:;">
            <i class="tio-chevron-right"></i>
          </a>
        </span>



        <!-- End Nav -->
      </div>
      <!-- End Nav Scroller -->
    </div>
    <!-- End Page Header -->

    <!-- Card -->
    <div class="card">
      <!-- Header -->
      <div class="card-header">
        <div class="row justify-content-between align-items-center flex-grow-1">
          <div class="col-lg-6 mb-3 mb-lg-0">
            <form>
              <!-- Search -->
              <div class="input-group input-group-merge input-group-flush">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="tio-search"></i>
                  </div>
                </div>
                <input id="datatableSearch" type="search" class="form-control" placeholder="Tìm kiếm đơn xuất" aria-label="Search orders">
              </div>
              <!-- End Search -->
            </form>
          </div>

          <div class="col-lg-6">
            <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
              <!-- Datatable Info -->
              <div id="datatableCounterInfos" class="mr-2 mb-2 mb-sm-0" style="display: none;">
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

              <!-- Unfold -->
              <div class="hs-unfold mr-2">
                <a class="js-hs-unfold-invoker btn btn-sm btn-white dropdown-toggle" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersExportDropdown",
                         "type": "css-animation"
                       }'>
                  <i class="tio-download-to mr-1"></i> Xuất file
                </a>

                <div id="usersExportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                  <span class="dropdown-header">Lựa chọn</span>
                  <a id="export-copy" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\illustrations\copy.svg" alt="Image Description">
                    Sao chép
                  </a>
                  <a id="export-print" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\illustrations\print.svg" alt="Image Description">
                    In
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header"> Lựa chọn xuất file</span>
                  <a id="export-excel" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\brands\excel.svg" alt="Image Description">
                    Excel
                  </a>
                  <a id="export-csv" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\components\placeholder-csv-format.svg" alt="Image Description">
                    .CSV
                  </a>
                  <a id="export-pdf" class="dropdown-item" href="javascript:;">
                    <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\brands\pdf.svg" alt="Image Description">
                    PDF
                  </a>

                </div>

              </div>
              <!-- End Unfold -->

              <!-- Unfold -->
              <div class="hs-unfold">
                <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#showHideDropdown",
                         "type": "css-animation"
                       }'>
                  <i class="tio-table mr-1"></i> Số cột <span class="badge badge-soft-dark rounded-circle ml-1">7</span>
                </a>

                <div id="showHideDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right dropdown-card" style="width: 15rem;">
                  <div class="card card-sm">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Order</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_order">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_order" checked="">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Date</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_date">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_date" checked="">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Customer</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_customer">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_customer" checked="">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Payment status</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_payment_status">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_payment_status" checked="">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Fulfillment status</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_fulfillment_status">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_fulfillment_status">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Payment method</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_payment_method">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_payment_method" checked="">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="mr-2">Total</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_total">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_total" checked="">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>

                      <div class="d-flex justify-content-between align-items-center">
                        <span class="mr-2">Actions</span>

                        <!-- Checkbox Switch -->
                        <label class="toggle-switch toggle-switch-sm" for="toggleColumn_actions">
                          <input type="checkbox" class="toggle-switch-input" id="toggleColumn_actions" checked="">
                          <span class="toggle-switch-label">
                            <span class="toggle-switch-indicator"></span>
                          </span>
                        </label>
                        <!-- End Checkbox Switch -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Unfold -->
            </div>
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Header -->

      <!-- Table -->
      <div class="table-responsive datatable-custom">
        <table id="datatable" class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table" style="width: 100%" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0],
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
              <th class="table-column-pl-0">Mã xuất hàng</th>
              <th>Ngày xuất hàng</th>
              <th>Tên kho</th>

              <th>Nhân viên</th>

              <th>Tùy chọn</th>

            </tr>
          </thead>

          <tbody>
            @php $i = 0; @endphp
            @foreach($export_list as $data)
            @php $i++ @endphp
            <tr>
              <td class="table-column-pr-0">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" value="{{$data['id']}}" class="custom-control-input checked-update" id="ordersCheck{{$i}}">
                  <label class="custom-control-label" for="ordersCheck{{$i}}"></label>
                </div>
              </td>
              <td class="table-column-pl-0">
                <a style="color:blue; cursor: pointer;" data-toggle="modal" data-target="#exampleModal{{$data['id']}}">#{{$data['id']}}</a>
              </td>
              <td>
                {{$data['export_date']}}
              </td>
              <td>
                <a class="text-body" href="">{{$data['store_name']}}</a>
              </td>

              <td>
                {{$data['fullname']}}
              </td>
              <td>
                <div class="d-flex align-items-center">

                  <span class="text-dark"></span>
                </div>




                <div class="btn-group" role="group">
                  <a class="btn btn-sm btn-white" href="#">
                    <i class="tio-visible-outlined"></i>
                  </a>

                  <!-- Unfold -->
                  <div style="z-index: 9;" class="hs-unfold btn-group">
                    <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty" href="javascript:;" data-hs-unfold-options='{
                             "target": "#ordersExportDropdown1",
                             "type": "css-animation",
                             "smartPositionOffEl": "#datatable"
                           }'></a>

                    <div id="ordersExportDropdown1" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                      <span class="dropdown-header">Options</span>
                      <a class="js-export-copy dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\illustrations\copy.svg" alt="Image Description">
                        Copy
                      </a>
                      <a class="js-export-print dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\illustrations\print.svg" alt="Image Description">
                        Print
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Download options</span>
                      <a class="js-export-excel dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\brands\excel.svg" alt="Image Description">
                        Excel
                      </a>
                      <a class="js-export-csv dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\components\placeholder-csv-format.svg" alt="Image Description">
                        .CSV
                      </a>
                      <a class="js-export-pdf dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\brands\pdf.svg" alt="Image Description">
                        PDF
                      </a>


                    </div>
                  </div>
                  <!-- End Unfold -->

                </div>
              </td>
            </tr>

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
              <span class="mr-2">Hiển thị:</span>

              <!-- Select -->
              <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                <option value="8" selected>8</option>
                <option value="12">12</option>
                <option value="14">14</option>
                <option value="16">16</option>
                <option value="18">18</option>
              </select>
              <!-- End Select -->

              <span class="text-secondary mr-2">của</span>

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

<!-- Export Products Modal -->
<div class="modal fade" id="exportProductsModal" tabindex="-1" role="dialog" aria-labelledby="exportProductsModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="exportProductsModalTitle" class="modal-title">Export products</h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <p>This CSV file can update all product information. To update just inventory quantites use the <a href="#">CSV file for inventory.</a></p>

        <!-- Form Group -->
        <div class="form-group">
          <label class="input-label">Export</label>

          <!-- Custom Checkbox -->
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="exportProductsRadio1" name="exportProductsRadio" class="custom-control-input" checked="">
            <label class="custom-control-label" for="exportProductsRadio1">Current page</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="exportProductsRadio2" name="exportProductsRadio" class="custom-control-input">
            <label class="custom-control-label" for="exportProductsRadio2">All products</label>
          </div>
          <div class="custom-control custom-radio">
            <input type="radio" id="exportProductsRadio3" name="exportProductsRadio" class="custom-control-input" disabled="">
            <label class="custom-control-label" for="exportProductsRadio3">Selected: 20 products</label>
          </div>
          <!-- End Custom Checkbox -->
        </div>
        <!-- End Form Group -->

        <label class="input-label">Export as</label>

        <!-- Custom Checkbox -->
        <div class="custom-control custom-radio mb-2">
          <input type="radio" id="exportProductsAsRadio1" name="exportProductsAsRadio" class="custom-control-input" checked="">
          <label class="custom-control-label" for="exportProductsAsRadio1">CSV for Excel, Numbers, or other spreadsheet programs</label>
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" id="exportProductsAsRadio2" name="exportProductsAsRadio" class="custom-control-input">
          <label class="custom-control-label" for="exportProductsAsRadio2">Plain CSV file</label>
        </div>
        <!-- End Custom Checkbox -->
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
        <button type="button" class="btn btn-primary">Export products</button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</div>
<!-- End Export Products Modal -->

<!-- Import Products Modal -->
<div class="modal fade" id="importProductsModal" tabindex="-1" role="dialog" aria-labelledby="importProductsModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- Header -->
      <div class="modal-header">
        <h4 id="importProductsModalTitle" class="modal-title">Import products by CSV</h4>

        <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
          <i class="tio-clear tio-lg"></i>
        </button>
      </div>
      <!-- End Header -->

      <!-- Body -->
      <div class="modal-body">
        <p><a href="#">Download a sample CSV template</a> to see an example of the format required.</p>

        <!-- Form Group -->
        <div class="form-group">
          <!-- Dropzone -->
          <div id="attachFilesNewProjectLabel" class="js-dropzone dropzone-custom custom-file-boxed">
            <div class="dz-message custom-file-boxed-label">
              <img class="avatar avatar-xl avatar-4by3 mb-3" src="assets\svg\illustrations\browse.svg" alt="Image Description">
              <h5 class="mb-1">Choose files to upload</h5>
              <p class="mb-2">or</p>
              <span class="btn btn-sm btn-primary">Browse files</span>
            </div>
          </div>
          <!-- End Dropzone -->
        </div>
        <!-- End Form Group -->

        <!-- Custom Checkbox -->
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="overwriteCurrentProductsCheckbox">
          <label class="custom-control-label" for="overwriteCurrentProductsCheckbox">Overwrite any current products that have the same handle. Existing values will be used for any missing columns.<a href="#">Learn more</a></label>
        </div>
        <!-- End Custom Checkbox -->
      </div>
      <!-- End Body -->

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
        <button type="button" class="btn btn-primary">Upload and continue</button>
      </div>
      <!-- End Footer -->
    </div>
  </div>
</div>
<!-- End Import Products Modal -->

<!-- Product Filter Modal -->
<div id="datatableFilterSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
  <div class="card card-lg sidebar-card sidebar-footer-fixed">
    <div class="card-header">
      <h4 class="card-header-title">Filters</h4>

      <!-- Toggle Button -->
      <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
                "target": "#datatableFilterSidebar",
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
      <small class="text-cap mb-3">Product vendor</small>

      <div class="row">
        <div class="col-6">
          <!-- Custom Checkbox -->
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio1" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio1">Google</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio2" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio2">Topman</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio3" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio3">RayBan</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio4" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio4">Mango</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio5" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio5">Calvin Klein</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio6" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio6">Givenchy</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio7" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio7">Asos</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio8" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio8">Apple</label>
          </div>
          <!-- End Custom Checkbox -->
        </div>

        <div class="col-6">
          <!-- Custom Checkbox -->
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio9" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio9">Times</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio10" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio10">Asos</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio11" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio11">Nike Jordan</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio12" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio12">VA RVCA</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio13" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio13">Levis</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio14" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio14">Beats</label>
          </div>
          <div class="custom-control custom-radio mb-2">
            <input type="radio" id="productVendorFilterRadio15" name="productVendorFilterRadio" class="custom-control-input">
            <label class="custom-control-label" for="productVendorFilterRadio15">Clarks</label>
          </div>
          <!-- End Custom Checkbox -->
        </div>
      </div>
      <!-- End Row -->

      <a class="link mt-2" href="javascript:;">
        <i class="tio-clear"></i> Clear
      </a>

      <hr class="my-4">

      <small class="text-cap mb-3">Availability</small>

      <!-- Custom Checkbox -->
      <div class="custom-control custom-radio mb-2">
        <input type="radio" id="productAvailabilityFilterRadio1" name="productAvailabilityFilterRadio" class="custom-control-input">
        <label class="custom-control-label" for="productAvailabilityFilterRadio1">Available on Online Store</label>
      </div>
      <div class="custom-control custom-radio mb-2">
        <input type="radio" id="productAvailabilityFilterRadio2" name="productAvailabilityFilterRadio" class="custom-control-input">
        <label class="custom-control-label" for="productAvailabilityFilterRadio2">Unavailable on Online Store</label>
      </div>
      <!-- End Custom Checkbox -->

      <a class="link mt-2" href="javascript:;">
        <i class="tio-clear"></i> Clear
      </a>

      <hr class="my-4">

      <small class="text-cap mb-3">Tagged with</small>

      <div class="mb-2">
        <input type="text" class="js-tagify tagify-form-control form-control" name="tagsName" id="tagsLabel" placeholder="Enter tags here" aria-label="Enter tags here">
      </div>

      <a class="link mt-2" href="javascript:;">
        <i class="tio-clear"></i> Clear
      </a>

      <hr class="my-4">

      <small class="text-cap mb-3">Product type</small>

      <!-- Custom Checkbox -->
      <div class="custom-control custom-radio mb-2">
        <input type="radio" id="productTypeFilterRadio1" name="productTypeFilterRadio" class="custom-control-input">
        <label class="custom-control-label" for="productTypeFilterRadio1">Shoes</label>
      </div>
      <div class="custom-control custom-radio mb-2">
        <input type="radio" id="productTypeFilterRadio2" name="productTypeFilterRadio" class="custom-control-input">
        <label class="custom-control-label" for="productTypeFilterRadio2">Accessories</label>
      </div>
      <div class="custom-control custom-radio mb-2">
        <input type="radio" id="productTypeFilterRadio3" name="productTypeFilterRadio" class="custom-control-input">
        <label class="custom-control-label" for="productTypeFilterRadio3">Clothing</label>
      </div>
      <div class="custom-control custom-radio mb-2">
        <input type="radio" id="productTypeFilterRadio4" name="productTypeFilterRadio" class="custom-control-input">
        <label class="custom-control-label" for="productTypeFilterRadio4">Electronics</label>
      </div>
      <!-- End Custom Checkbox -->

      <a class="link mt-2" href="javascript:;">
        <i class="tio-clear"></i> Clear
      </a>

      <hr class="my-4">

      <small class="text-cap mb-3">Collection</small>

      <!-- Input Group -->
      <div class="input-group input-group-merge mb-2">
        <div class="input-group-prepend">
          <span class="input-group-text">
            <i class="tio-search"></i>
          </span>
        </div>

        <input type="search" class="form-control" placeholder="Search for collections" aria-label="Search for collections">
      </div>
      <!-- End Input Group -->

      <!-- Custom Checkbox -->
      <div class="custom-control custom-radio mb-2">
        <input type="radio" id="productCollectionFilterRadio1" name="productCollectionFilterRadio" class="custom-control-input">
        <label class="custom-control-label" for="productCollectionFilterRadio1">Home page</label>
      </div>
      <!-- End Custom Checkbox -->

      <a class="link mt-2" href="javascript:;">
        <i class="tio-clear"></i> Clear
      </a>
    </div>
    <!-- End Body -->

    <!-- Footer -->
    <div class="card-footer sidebar-footer">
      <div class="row gx-2">
        <div class="col">
          <button type="button" class="btn btn-block btn-white">Clear all filters</button>
        </div>
        <div class="col">
          <button type="button" class="btn btn-block btn-primary">Save</button>
        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- End Footer -->
  </div>
</div>
<!-- End Product Filter Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->

<!-- Modal export detail -->

<!-- Modal -->

@foreach($export_list as $data)

<div class="modal fade" id="exampleModal{{$data['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chi tiết xuất kho</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Tên sản phẩm</th>
              <th scope="col">SL</th>
              <th scope="col">Giá</th>
            </tr>
          </thead>
          <tbody>
            @foreach($export_detail as $value)
            @php $i = 0; @endphp
            @foreach($value as $product)
            @if($product['export_id'] == $data['id'])
            @php $i++; @endphp
            <tr>
              <th scope="row">{{$i}}</th>
              <td>{{$product['product_name']}}</td>
              <td>{{number_format($product['quantity'])}}</td>
              <td>{! number_format($product['unit_price']) !} đ</td>
            </tr>
            @endif
            @endforeach
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
@endforeach