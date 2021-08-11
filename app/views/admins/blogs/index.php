<!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->
    

    
    <!-- End Navbar Vertical -->

    <main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-end">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Quản lý bài viết</a></li>
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="javascript:;">Bài viết</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Danh sách bài viết</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Danh sách bài viết</h1>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-primary" href="{{_WEB_ROOT.'/blogs-create'}}">
                <i class="tio-user-add mr-1"></i> Thêm bài viết
              </a>
            </div>
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Card -->
        <div class="card">
          <!-- Header -->
          <div class="card-header">
            <div class="row justify-content-between align-items-center flex-grow-1">
              <div class="col-sm-6 col-md-4 mb-3 mb-sm-0">
                <form>
                  <!-- Search -->
                  <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="tio-search"></i>
                      </div>
                    </div>
                    <input id="datatableSearch" type="search" class="form-control" placeholder="Tìm kiếm bài viết" aria-label="Tìm kiếm bài viết">
                  </div>
                  <!-- End Search -->
                </form>
              </div>

              <div class="col-sm-6">
                <div class="d-sm-flex justify-content-sm-end align-items-sm-center">
                  <!-- Datatable Info -->
                  <div id="datatableCounterInfo" class="mr-2 mb-2 mb-sm-0" style="display: none;">
                    <div class="d-flex align-items-center">
                      <span class="font-size-sm mr-3">
                        <span id="datatableCounter">0</span>
                        Đang chọn
                      </span>
                      <a id="btn-delete-all" class="btn btn-sm btn-outline-danger" href="javascript:;">
                        <i class="tio-delete-outlined"></i> Xóa
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
                      <i class="tio-download-to mr-1"></i> Xuất
                    </a>

                    <div id="usersExportDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right">
                      <span class="dropdown-header">Tùy chọn</span>
                      <a id="export-copy" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{_WEB_ROOT.'\public\admin\svg\illustrations\copy.svg'}}" alt="Image Description">
                        Sao chép
                      </a>
                      <a id="export-print" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{_WEB_ROOT.'\public\admin\svg\illustrations\print.svg'}}" alt="Image Description">
                        In
                      </a>
                      <div class="dropdown-divider"></div>
                      <span class="dropdown-header">Tải xuống</span>
                      <a id="export-excel" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{_WEB_ROOT.'\public\admin\svg\brands\excel.svg'}}" alt="Image Description">
                        Excel
                      </a>
                      <a id="export-csv" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{_WEB_ROOT.'\public\admin\svg\components\placeholder-csv-format.svg'}}" alt="Image Description">
                        .CSV
                      </a>
                      <a id="export-pdf" class="dropdown-item" href="javascript:;">
                        <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{_WEB_ROOT.'\public\admin\svg\brands\pdf.svg'}}" alt="Image Description">
                        PDF
                      </a>
                    </div>
                  </div>
                  <!-- End Unfold -->

                  <!-- Unfold -->
                  <div class="hs-unfold">
                    <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                         "target": "#usersFilterDropdown",
                         "type": "css-animation",
                         "smartPositionOff": true
                       }'>
                      <i class="tio-filter-list mr-1"></i> Lọc <span class="badge badge-soft-dark rounded-circle ml-1">2</span>
                    </a>

                    <div id="usersFilterDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-sm-right dropdown-card card-dropdown-filter-centered" style="min-width: 22rem;">
                      <!-- Card -->
                      <div class="card">
                        <div class="card-header">
                          <h5 class="card-header-title">Lọc bài viết</h5>

                          <!-- Toggle Button -->
                          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-secondary ml-2" href="javascript:;" data-hs-unfold-options='{
                              "target": "#usersFilterDropdown",
                              "type": "css-animation",
                              "smartPositionOff": true
                             }'>
                            <i class="tio-clear tio-lg"></i>
                          </a>
                          <!-- End Toggle Button -->
                        </div>

                        <div class="card-body">
                          <form>
                            <div class="form-row">
                              <div class="col-sm form-group">
                                <small class="text-cap mb-2">Chuyên mục</small>

                                <!-- Select -->
                                <select class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;" data-target-column-index="2" data-hs-select2-options='{
                                          "minimumResultsForSearch": "Infinity"
                                        }'>
                                  <option value="">Tất cả</option>

                                  @foreach ($blog_categories_parent as $key => $value)
                                  <option value="{{ $value['name'] }}">{{ $value['name'] }}</option>
                                    @foreach ($blog_categories_child as $ckey => $cvalue)
                                      @if ($value['id'] == $cvalue['parent_id'])
                                        <option value="{{ $cvalue['name'] }}" style="margin-left: 22px;">{{ $cvalue['name'] }}</option>
                                      @endif
                                    @endforeach
                                  @endforeach

                                </select>
                                <!-- End Select -->
                              </div>

                              <div class="col-sm form-group">
                                <small class="text-cap mb-2">Trạng thái</small>

                                <!-- Select -->
                                <select class="js-select2-custom js-datatable-filter custom-select" size="1" style="opacity: 0;" data-target-column-index="4" data-hs-select2-options='{
                                          "minimumResultsForSearch": "Infinity"
                                        }'>
                                  <option value="">Bất kỳ</option>
                                  <option value="Xuất bản" data-option-template='<span class="legend-indicator bg-success"></span>Xuất bản'>Xuất bản</option>
                                  <option value="Đang xử lý" data-option-template='<span class="legend-indicator bg-warning"></span>Đang xử lý'>Đang xử lý</option>
                                  <option value="Ngưng hiệu lực" data-option-template='<span class="legend-indicator bg-danger"></span>Ngưng hiệu lực'>Ngưng hiệu lực</option>
                                </select>
                                <!-- End Select -->
                              </div>

                            </div>
                            <!-- End Row -->

                            <a class="js-hs-unfold-invoker btn btn-block btn-primary" href="javascript:;" data-hs-unfold-options='{
                                "target": "#usersFilterDropdown",
                                "type": "css-animation",
                                "smartPositionOff": true
                               }'>Áp dụng</a>
                          </form>
                        </div>
                      </div>
                      <!-- End Card -->
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
            <table id="datatable" class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                     "columnDefs": [{
                        "targets": [0, 6],
                        "orderable": false
                      }],
                     "order": [],
                     "info": {
                       "totalQty": "#datatableWithPaginationInfoTotalQty"
                     },
                     "search": "#datatableSearch",
                     "entries": "#datatableEntries",
                     "pageLength": 15,
                     "isResponsive": false,
                     "isShowPaging": false,
                     "pagination": "datatablePagination"
                   }'>
              <thead class="thead-light">
                <tr>
                  <th class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input id="datatableCheckAll" type="checkbox" class="custom-control-input">
                      <label class="custom-control-label" for="datatableCheckAll"></label>
                    </div>
                  </th>
                  <th class="table-column-pl-0">Tiêu đề</th>
                  <th>Chuyên mục</th>
                  <th>Thời gian đăng</th>
                  <th>Trạng thái</th>
                  <th>Tác giả</th>
                  <th></th>
                </tr>
              </thead>

              <tbody id = "table_body">
                @foreach ($list_blogs as $key => $value)
                <tr id = "admin_row{{$value['id']}}">
                  <td class="table-column-pr-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input checkbox-input" id="usersDataCheck{{$value['id']}}" value="{{ $value['id'] }}">
                      <label class="custom-control-label" for="usersDataCheck{{$value['id']}}"></label>
                    </div>
                  </td>
                  <td class="table-column-pl-0">
                    <a class="d-flex align-items-center" href="{{'bai-viet/'.$value['slug']}}">
                      <div class="avatar avatar-circle">
                        <img class="avatar-img" alt="{{$value['slug']}}"
                        src="{{_WEB_ROOT.'/public/uploads/blogs/'.$value['thumbnail']}}" >
                      </div>
                      <div class="ml-3">
                        <span class="d-block h5 text-hover-primary mb-0">{{$value['title']}} <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                      </div>
                    </a>
                  </td>
                  <td>
                    <span class="d-block h5 mb-0">{{$value['category_name']}}</span>
                  </td>
                  <td>{{$value['created_at']}}</td>
                  <td>
                    @php

                      if($value['status'] == 1){
                        echo '<span class="legend-indicator bg-success"></span>Xuất bản';
                      }elseif($value['status'] == 2){
                        echo '<span class="legend-indicator bg-danger"></span>Ngưng hiệu lực';
                      }else{
                        echo '<span class="legend-indicator bg-warning"></span>Đang xử lý';
                      }

                    @endphp

                  </td>
                  <td>{{ $value['author'] }}</td>
                  <td>
                    <div class="btn-group" role="group">
                      <a class="btn btn-sm btn-white" 
                      href="{{_WEB_ROOT.'/blogs-edit/editid-'.$value['id']}}">
                        <i class="tio-edit"></i> Sửa
                      </a>
                      
                      <!-- Unfold -->
                      <div class="hs-unfold btn-group">
                        <a class="js-hs-unfold-invoker btn btn-icon btn-sm btn-white dropdown-toggle dropdown-toggle-empty" href="javascript:;" data-hs-unfold-options='{
                             "target": "#productsEditDropdown{{$value["id"]}}",
                             "type": "css-animation",
                             "smartPositionOffEl": "#datatable"
                           }'></a>

                        <div id="productsEditDropdown{{$value['id']}}" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right mt-1">
                          <button id = "deleteid_{{$value['id']}}" type = "button" class="dropdown-item delete_item"
                          data-id = "{{$value['id']}}">
                            <i class="tio-delete-outlined dropdown-item-icon"></i> Xóa
                          </button>
                          <a id = "pubid_{{$value['id']}}" class="dropdown-item publish-item" href="#" data-pubid = "{{$value['id']}}"
                          {! $value['status'] == 1 ? 'style = "display: none; "' : '' !}>
                            <i class="tio-publish dropdown-item-icon"></i> Xuất bản
                          </a>
                          <a id = "unpubid_{{$value['id']}}" class="dropdown-item unpublish-item" href="#" data-unpubid = "{{$value['id']}}"
                          {! $value['status'] == 2 ? 'style = "display: none; "' : '' !}>
                            <i class="tio-clear dropdown-item-icon"></i> Hủy xuất bản
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
                  <span class="mr-2">Đang hiện:</span>

                  <!-- Select -->
                  <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm custom-select-borderless",
                            "dropdownAutoWidth": true,
                            "width": true
                          }'>
                    <option value="10">10</option>
                    <option value="15" selected="">15</option>
                    <option value="20">20</option>
                  </select>
                  <!-- End Select -->

                  <span class="text-secondary mr-2">trong</span>

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
                        <i class="tio-command-key"></i>
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
          <h4 class="card-header-title">Hoạt động</h4>

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
    <!-- ========== END SECONDARY CONTENTS ========== -->