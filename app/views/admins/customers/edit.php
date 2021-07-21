<!-- ========== MAIN CONTENT ========== -->
<!-- Navbar Vertical -->


<!-- End Navbar Vertical -->

<main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid container-edit-customer" data-id="{{ $customer_by_id['id'] }}">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-sm mb-2 mb-sm-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-no-gutter">
                            <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ _WEB_ROOT }}/customer">Khách hàng</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Thông tin chi tiết</li>
                        </ol>
                    </nav>

                    <h1 class="page-header-title customer-fullname">{{ $customer_by_id['fullname']}}</h1>
                </div>

                <div class="col-sm-auto">
                    <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle mr-1" href="#" data-toggle="tooltip" data-placement="top" title="Previous customer">
                        <i class="tio-arrow-backward"></i>
                    </a>
                    <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Next customer">
                        <i class="tio-arrow-forward"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <div class="row">
            <div class="col-lg-8">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Body -->
                    <div class="card-body">
                        <!-- Media -->
                        <div class="d-flex align-items-center mb-5">
                            <div class="avatar avatar-lg avatar-circle">
                                <img class="avatar-img" src="{{ _WEB_ROOT }}/public/uploads/customer/{{ $customer_by_id['avatar']}}" alt="Image Description">
                            </div>

                            <div class="mx-3">
                                <div class="d-flex mb-1">
                                    <h3 class="mb-0 mr-3 customer-fullname">{{ $customer_by_id['fullname']}}</h3>

                                    <!-- Unfold -->
                                    <div class="hs-unfold">
                                        <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-white rounded-circle" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Chỉnh sửa" data-hs-unfold-options='{
                             "target": "#editDropdown",
                             "type": "css-animation"
                           }'>
                                            <i class="tio-edit"></i>
                                        </a>

                                        <div id="editDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-card mt-1" style="min-width: 20rem;">
                                            <!-- Card -->
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-row">
                                                        <div class="col-sm-12">
                                                            <label for="lastNameLabel" class="input-label">Họ và Tên</label>
                                                            <input type="text" class="form-control" name="fullName" id="fullNameLabel" placeholder="Nguyễn Đức Tài" aria-label="Boone" value="{{ $customer_by_id['fullname'] }}">
                                                        </div>
                                                    </div>
                                                    <!-- End Row -->

                                                    <div class="d-flex justify-content-end mt-3">
                                                        <button type="button" class="btn btn-sm btn-white mr-2">Hủy</button>
                                                        <button type="button" class="btn btn-sm btn-primary btn-edit-fullName">Lưu</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Body -->
                                        </div>
                                    </div>
                                    <!-- End Unfold -->
                                </div>

                                <span class="font-size-sm">Là khách hàng trong 3 tháng</span>
                            </div>

                            <div class="d-none d-sm-inline-block ml-auto text-right">
                                <!-- Unfold -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-sm btn-white" href="javascript:;" data-hs-unfold-options='{
                           "target": "#actionsDropdown",
                           "type": "css-animation"
                         }'>
                                        Hoạt động <i class="tio-chevron-down"></i>
                                    </a>

                                    <div id="actionsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                                        <a class="dropdown-item" href="#">
                                            <i class="tio-email-outlined dropdown-item-icon"></i> Email
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="tio-call dropdown-item-icon"></i> Gọi
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="tio-sync dropdown-item-icon"></i> Merge
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger btn-delete-customer" href="#">
                                            <i class="tio-delete-outlined dropdown-item-icon text-danger"></i>
                                            Xóa
                                        </a>
                                    </div>
                                </div>
                                <!-- End Unfold -->
                            </div>
                        </div>
                        <!-- End Media -->

                        <label class="input-label">Ghi chú</label>

                        <!-- Quill -->
                        <textarea id="exampleFormControlTextarea1" class="form-control" placeholder="Thêm những điều chúng ta cần nhớ về khách hàng" rows="4"></textarea>
                        <!-- End Quill -->
                    </div>
                    <!-- Body -->

                    <!-- Footer -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-white mr-2">Loại bỏ</button>
                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                        </div>
                    </div>
                    <!-- End Footer -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center flex-grow-1">
                            <div class="col-sm mb-3 mb-sm-0">
                                <h4 class="card-header-title">Thông tin đặt hàng</h4>
                            </div>

                            <div class="col-sm-auto">
                                <!-- Nav -->
                                <ul class="js-tabs-to-dropdown nav nav-segment nav-fill nav-sm-down-break" data-hs-transform-tabs-to-btn-options='{
                          "transformResolution": "sm",
                          "btnClassNames": "btn btn-block btn-white dropdown-toggle justify-content-center"
                        }'>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Tất cả đơn hàng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Mới</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Chưa hoàn thành</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Chưa thanh toán</a>
                                    </li>
                                </ul>
                                <!-- End Nav -->

                                <!-- Datatable Info -->
                                <div id="datatableCounterInfo" style="display: none;">
                                    <div class="d-flex align-items-center">
                                        <span class="font-size-sm mr-3">
                                            <span id="datatableCounter">0</span>
                                            Lựa chọn
                                        </span>
                                        <a class="btn btn-sm btn-outline-danger" href="javascript:;">
                                            <i class="tio-delete-outlined"></i> Xóa
                                        </a>
                                    </div>
                                </div>
                                <!-- End Datatable Info -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Input Group -->
                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="tio-search"></i>
                                </span>
                            </div>

                            <input id="datatableSearch" type="search" class="form-control" placeholder="Tìm kiếm đơn hàng" aria-label="Search orders">
                        </div>
                        <!-- End Input Group -->
                    </div>
                    <!-- End Body -->

                    <!-- Table -->
                    <div class="table-responsive datatable-custom">
                        <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                         "columnDefs": [{
                            "targets": [0, 5],
                            "orderable": false
                          }],
                         "order": [],
                         "info": {
                           "totalQty": "#datatableWithPaginationInfoTotalQty"
                         },
                         "search": "#datatableSearch",
                         "entries": "#datatableEntries",
                         "pageLength": 12,
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
                                    <th class="table-column-pl-0">Đơn hàng</th>
                                    <th>Ngày mua</th>
                                    <th>Trạng thái</th>
                                    <th>Tổng</th>
                                    <th>Hóa đơn</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($order_by_id as $order)
                                <tr>
                                    <td class="table-column-pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="ordersCheck1">
                                            <label class="custom-control-label" for="ordersCheck1"></label>
                                        </div>
                                    </td>
                                    <td class="table-column-pl-0">
                                        <a href="{{_WEB_ROOT}}/order-detail/id-{{$order['id']}}">#{{$order['id']}}</a>
                                    </td>
                                    <td>{{$order['order_date']}}</td>
                                    <td>
                                        {! $order['order_status'] !}
                                    </td>
                                    <td>{! number_format($order['total']) !} đ</td>
                                    <td>
                                        <a class="btn btn-sm btn-white" href="javascript:;" data-toggle="modal" data-target="#invoiceReceiptModal{{$order['id']}}">
                                            <i class="tio-receipt-outlined mr-1"></i> Xem hóa đơn
                                        </a>
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
                                    <span class="mr-2">Showing:</span>

                                    <!-- Select -->
                                    <select id="datatableEntries" class="js-select2-custom" data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select custom-select-sm custom-select-borderless",
                                "dropdownAutoWidth": true,
                                "width": true
                              }'>
                                        <option value="12" selected="">12</option>
                                        <option value="14">14</option>
                                        <option value="16">16</option>
                                        <option value="18">18</option>
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

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Dòng thời gian</h4>

                        <!-- Checkbox -->
                        <div class="custom-control custom-checkbox font-size-sm">
                            <input id="showCommentsCheckbox" type="checkbox" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="showCommentsCheckbox">Hiển thị sự kiện</label>
                        </div>
                        <!-- End Checkbox -->
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Step -->
                        <ul class="step step-icon-sm">
                            <!-- Step Item -->
                            <li class="step-item">
                                <div class="step-content-wrapper">
                                    <span class="step-icon step-icon-soft-primary">A</span>

                                    <!-- Quill -->
                                    <textarea id="exampleFormControlTextarea1" class="form-control" placeholder="Sự kiện kết nối với khách hàng" rows="4"></textarea>
                                    <!-- End Quill -->
                                </div>
                            </li>
                            <!-- End Step Item -->

                            <!-- Step Item -->
                            <li class="step-item">
                                <div class="step-content-wrapper">
                                    <small class="step-divider">Thứ năm, ngày 8 tháng 7</small>
                                </div>
                            </li>
                            <!-- End Step Item -->

                            <!-- Step Item -->
                            <li class="step-item">
                                <div class="step-content-wrapper">
                                    <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                    <div class="step-content">
                                        <h5 class="mb-0">Bạn chấp nhận yêu cầu của khách hàng</h5>
                                        <p class="font-size-sm mb-0">10:19 AM</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Step Item -->

                            <!-- Step Item -->
                            <li class="step-item">
                                <div class="step-content-wrapper">
                                    <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                    <div class="step-content">
                                        <h5 class="mb-0">Bạn thêm thông tin Email cho khách hàng này</h5>
                                        <p class="font-size-sm mb-0">10:18 AM</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Step Item -->

                            <!-- Step Item -->
                            <li class="step-item">
                                <div class="step-content-wrapper">
                                    <span class="step-icon step-icon-soft-dark step-icon-pseudo"></span>

                                    <div class="step-content">
                                        <h5 class="mb-0">Bạn đã thêm khách hàng này</h5>
                                        <p class="font-size-sm mb-0">10:18 AM</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Step Item -->
                        </ul>
                        <!-- End Step -->
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->

                <div class="d-none d-lg-block">
                    <button type="button" class="btn btn-danger btn-delete-customer">Xóa khách hàng</button>
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Body -->
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Thông tin liên hệ</h5>
                            <a class="link btn-edit-info" href="">Chỉnh Sửa</a>
                        </div>

                        <ul class="list-unstyled list-unstyled-py-2">
                            <li class="d-flex align-items-center">
                                <i class="tio-online mr-2"></i>
                                <div class="customer-email-info">{{ $customer_by_id['email'] }}</div>
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="tio-android-phone-vs mr-2"></i>
                                <div class="customer-phone-info">{{ $customer_by_id['phone'] }}</div>
                                <input type="text" class="form-control form-control-flush" id="customer-phone-info-edit" placeholder="0xxxxxxxx" style="display: none;" value="{{ $customer_by_id['phone']}}">
                            </li>
                        </ul>

                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Địa chỉ giao hàng</h5>
                            <a class="link btn-edit-shipping-address" href="">Chỉnh Sửa</a>
                        </div>

                        <!-- Leaflet (Map) -->
                        <div id="map" class="leaflet-custom rounded mt-1 mb-3" style="min-height: 10rem;" data-hs-leaflet-options='{
                       "map": {
                         "scrollWheelZoom": false,
                         "coords": [37.4040344, -122.0289704]
                       },
                       "marker": [
                         {
                           "coords": [37.4040344, -122.0289704],
                           "icon": {
                             "iconUrl": "{{ _WEB_ROOT }}/public/admin/svg/components/map-pin.svg",
                             "iconSize": [50, 45]
                           },
                           "popup": {
                             "text": "153 Williamson Plaza, Maggieberg"
                           }
                         }
                       ]
                      }'></div>
                        <!-- End Leaflet (Map) -->

                        <span class="d-block">
                            <p class="customer-shipping-address">{{ $customer_by_id['shipping_address'] }}</p>
                            <input type="text" class="form-control form-control-flush" id="customer-shipping-address-edit" placeholder="Địa chỉ giao hàng" style="display: none;" value="{{ $customer_by_id['shipping_address'] }}">
                            <img class="avatar avatar-xss avatar-circle ml-1" src="{{ _WEB_ROOT }}\public\admin\vendor\flag-icon-css\flags\1x1\gb.svg" alt="Great Britain Flag">
                        </span>

                        <hr>

                        <div class="d-flex justify-content-between align-items-center">
                            <h5>Địa chỉ thanh toán</h5>
                            <a class="link btn-edit-billing-address" href="">Chỉnh sửa</a>
                        </div>

                        <span class="d-block">
                            <p class="customer-billing-address">{{ $customer_by_id['billing_address'] }}</p>
                            <input type="text" class="form-control form-control-flush" id="customer-billing-address-edit" placeholder="Địa chỉ thanh toán" style="display: none;" value="{{ $customer_by_id['billing_address'] }}">
                            <img class="avatar avatar-xss avatar-circle ml-1" src="{{ _WEB_ROOT }}\public\admin\vendor\flag-icon-css\flags\1x1\gb.svg" alt="Great Britain Flag">
                        </span>
                    </div>
                    <!-- End Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h5>Đăng ký nhận email</h5>
                        <a class="link" href="javascript:;">Chỉnh sửa tình trạng</a>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <span class="h3">
                            <span class="badge badge-soft-dark badge-pill">Đã đăng ký</span>
                        </span>
                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">Tương tác với trang web</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <p>Tương tác trang web cho bạn thấy số lần khách hàng truy cập trang web của bạn và xem các trang của bạn.</p>

                        <!-- Bar Chart -->
                        <div class="chartjs-custom my-5" style="height: 12rem;">
                            <canvas class="js-chart" data-hs-chartjs-options='{
                            "type": "line",
                            "data": {
                               "labels": ["Aug 1", "Aug 2", "Aug 3", "Aug 4", "Aug 5"],
                               "datasets": [{
                                "data": [10, 9, 14, 5, 10],
                                "backgroundColor": "transparent",
                                "borderColor": "#377dff",
                                "borderWidth": 3,
                                "pointRadius": 0,
                                "hoverBorderColor": "#377dff",
                                "pointBackgroundColor": "#377dff",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              },
                              {
                                "data": [15, 13, 18, 7, 26],
                                "backgroundColor": "transparent",
                                "borderColor": "#e7eaf3",
                                "borderWidth": 3,
                                "pointRadius": 0,
                                "hoverBorderColor": "#e7eaf3",
                                "pointBackgroundColor": "#e7eaf3",
                                "pointBorderColor": "#fff",
                                "pointHoverRadius": 0
                              }]
                            },
                            "options": {
                               "scales": {
                                  "yAxes": [{
                                    "gridLines": {
                                      "color": "#e7eaf3",
                                      "drawBorder": false,
                                      "zeroLineColor": "#e7eaf3"
                                    },
                                    "ticks": {
                                      "stepSize": 10,
                                      "fontSize": 12,
                                      "fontColor": "#97a4af",
                                      "fontFamily": "Open Sans, sans-serif",
                                      "padding": 10
                                    }
                                  }],
                                  "xAxes": [{
                                    "display": false
                                  }]
                              },
                              "tooltips": {
                                "hasIndicator": true,
                                "mode": "index",
                                "intersect": false,
                                "lineMode": true,
                                "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                              },
                              "hover": {
                                "mode": "nearest",
                                "intersect": true
                              }
                            }
                          }'>
                            </canvas>
                        </div>
                        <!-- End Bar Chart -->

                        <!-- Legend Indicators -->
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <span class="legend-indicator"></span> Hôm qua
                            </div>
                            <div class="col-auto">
                                <span class="legend-indicator bg-primary"></span> Hôm nay
                            </div>
                        </div>
                        <!-- End Legend Indicators -->
                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Row -->

        <div class="d-lg-none">
            <button type="button" class="btn btn-danger">Delete customer</button>
        </div>
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
                            <img class="step-avatar-img" src="{{ _WEB_ROOT }}\public\admin\img\160x160\img9.jpg" alt="Image Description">
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
                                                    <img class="avatar avatar-xs" src="{{ _WEB_ROOT }}\public\admin\svg\brands\excel.svg" alt="Image Description">
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
                                                    <img class="avatar avatar-xs" src="{{ _WEB_ROOT }}\public\admin\svg\brands\word.svg" alt="Image Description">
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
                            <img class="step-avatar-img" src="{{ _WEB_ROOT }}\public\admin\img\160x160\img3.jpg" alt="Image Description">
                        </div>

                        <div class="step-content">
                            <h5 class="h5 mb-1">Crane</h5>

                            <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                            <ul class="list-group list-group-sm">
                                <li class="list-group-item list-group-item-light">
                                    <div class="row gx-1">
                                        <div class="col">
                                            <img class="img-fluid rounded ie-sidebar-activity-img" src="{{ _WEB_ROOT }}\public\admin\svg\illustrations\card-1.svg" alt="Image Description">
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid rounded ie-sidebar-activity-img" src="{{ _WEB_ROOT }}\public\admin\svg\illustrations\card-2.svg" alt="Image Description">
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid rounded ie-sidebar-activity-img" src="{{ _WEB_ROOT }}\public\admin\svg\illustrations\card-3.svg" alt="Image Description">
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
                            <img class="step-avatar-img" src="{{ _WEB_ROOT }}\public\admin\img\160x160\img7.jpg" alt="Image Description">
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
                            <img class="step-avatar-img" src="{{ _WEB_ROOT }}\public\admin\img\160x160\img5.jpg" alt="Image Description">
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
                        <img class="img-fluid" src="{{ _WEB_ROOT }}\public\admin\svg\illustrations\graphs.svg" alt="Image Description">
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
                            <img class="img-fluid ie-welcome-brands" src="{{ _WEB_ROOT }}\public\admin\svg\brands\gitlab-gray.svg" alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid ie-welcome-brands" src="{{ _WEB_ROOT }}\public\admin\svg\brands\fitbit-gray.svg" alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid ie-welcome-brands" src="{{ _WEB_ROOT }}\public\admin\svg\brands\flow-xo-gray.svg" alt="Image Description">
                        </div>
                        <div class="col">
                            <img class="img-fluid ie-welcome-brands" src="{{ _WEB_ROOT }}\public\admin\svg\brands\layar-gray.svg" alt="Image Description">
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</div>
<!-- End Welcome Message Modal -->

<!-- Invoice Modal -->
@foreach($order_by_id as $data)
<div class="modal fade" id="invoiceReceiptModal{{$data['id']}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-top-cover bg-dark text-center">
                <figure class="position-absolute right-0 bottom-0 left-0 ie-modal-curved-shape">
                    <svg preserveaspectratio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewbox="0 0 1920 100.1" style="margin-bottom: -2px;">
                        <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                    </svg>
                </figure>

                <div class="modal-close">
                    <button type="button" class="btn btn-icon btn-sm btn-ghost-light" data-dismiss="modal" aria-label="Close">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                </div>
            </div>
            <!-- End Header -->

            <div class="modal-top-cover-icon">
                <span class="icon icon-lg icon-light icon-circle icon-centered shadow-soft">
                    <i class="tio-receipt-outlined"></i>
                </span>
            </div>

            <!-- Body -->
            <div class="modal-body pt-3 pb-sm-5 px-sm-5">
                <div class="text-center mb-5">
                    <h2 class="mb-1">Hóa đơn</h2>
                    <span class="d-block">#{{ $data['id'] }}</span>
                </div>

                <div class="row mb-6">
                    <div class="col-md-4 mb-3">
                        <small class="text-cap">Tổng cộng:</small>
                        <span class="text-dark">{! number_format($data['total']) !}</span>
                    </div>

                    <div class="col-md-4 mb-3">
                        <small class="text-cap">Ngày thanh toán:</small>
                        <span class="text-dark"></span>
                        {{ $data['order_date'] }}
                    </div>

                    <div class="col-md-4 mb-3">
                        <small class="text-cap">Phương thức thanh toán:</small>
                        <div class="d-flex align-items-center">
                            <img class="avatar avatar-xss avatar-4by3 mr-2" src="{{ _WEB_ROOT }}\public\admin\svg\brands\mastercard.svg" alt="Image Description">
                            <span class="text-dark">&bull;&bull;&bull;&bull;{{substr($data['payment_code'], -4)}}</span>
                        </div>
                    </div>
                </div>

                <small class="text-cap mb-2">Summary</small>

                <ul class="list-group mb-4">
                    <li class="list-group-item text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Tạm thu</span>
                            <span>{! number_format($data['total'] - $data['shipping_fee']) !} đ</span>
                        </div>
                    </li>

                    <li class="list-group-item text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Phí ship</span>
                            <span>{! number_format($data['shipping_fee']) !} đ</span>
                        </div>
                    </li>

                    <li class="list-group-item list-group-item-light text-dark">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold">Tổng cộng</span>
                            <span class="font-weight-bold">{! number_format($data['total']) !} đ</span>
                        </div>
                    </li>
                </ul>

                <div class="d-flex justify-content-end">
                    <a class="btn btn-sm btn-white mr-2" href="#"><i class="tio-download-to mr-1"></i>Xuất PDF</a>
                    <a class="btn btn-sm btn-white" href="#"><i class="tio-print mr-1"></i>In hóa đơn</a>
                </div>

                <hr class="my-5">

                <p class="modal-footer-text">Nếu bạn có bất cứ thắc mắc gì, vui lòng liên hệ <a href="mailto:example@gmail.com">example@gmail.com</a> hoặc gọi ngay <a href="#">+1 898 34-5492</a></p>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
@endforeach
<!-- End Invoice Modal -->
<!-- ========== END SECONDARY CONTENTS ========== -->