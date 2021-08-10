<main id="content" role="main" class="main">
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header d-print-none">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ _WEB_ROOT }}/order">Danh sách đơn hàng</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
                </ol>
              </nav>
              
              <div class="d-sm-flex align-items-sm-center">
                <h1 class="page-header-title">Đơn hàng #{{$orderById['order_id']}}</h1>
                
                {!$orderById['status']!}
                <!-- <span class="ml-2 ml-sm-3">
                  <i class="tio-date-range"></i> Aug 17, 2020, 5:48 (ET)
                </span> -->
              </div>

              <div class="mt-2">
                <a class="text-body mr-3" href="javascript:;" onclick="window.print(); return false;">
                  <i class="tio-print mr-1"></i> In đơn hàng
                </a>
                
                <!-- Unfold -->
                <div class="hs-unfold">
                  <a class="js-hs-unfold-invoker text-body" href="javascript:;" data-hs-unfold-options='{
                       "target": "#moreOptionsDropdown",
                       "type": "css-animation"
                     }'>
                    Tùy chọn <i class="tio-chevron-down"></i>
                  </a>

                  <div id="moreOptionsDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                    <a class="dropdown-item" href="#">
                      <i class="tio-copy dropdown-item-icon"></i> Duplicate
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-clear dropdown-item-icon"></i> Cancel order
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-archive dropdown-item-icon"></i> Archive
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-visible dropdown-item-icon"></i> View order status page
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="tio-edit dropdown-item-icon"></i> Edit order
                    </a>
                  </div>
                </div>
                <!-- End Unfold -->
              </div>
            </div>

            <div class="col-sm-auto">
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle mr-1" href="#" data-toggle="tooltip" data-placement="top" title="Previous order">
                <i class="tio-arrow-backward"></i>
              </a>
              <a class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" href="#" data-toggle="tooltip" data-placement="top" title="Next order">
                <i class="tio-arrow-forward"></i>
              </a>
            </div>
          </div>
        </div>
        <!-- End Page Header -->
  
        <div class="row">
          <div class="col-lg-8 mb-3 mb-lg-0">
            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Chi tiết đơn hàng
                  <span class="badge badge-soft-dark rounded-circle ml-1">
                   @php
                      $totalQuantity = 0;
                      foreach($detailById as $data){
                        $totalQuantity += $data['quantity'];
                      }
                      echo $totalQuantity;
                   @endphp 
                  </span>
                </h4>
            
              </div>
              <!-- End Header -->
          
              <!-- Body -->
              <input type="hidden" value="{{$orderById['order_id']}}" id="idOrder">
              <div class="card-body">
                @foreach ($detailById as $data)
                <!-- Media -->
                <div class="media">
                  <div class="avatar avatar-xl mr-3">
                    <img class="img-fluid" src="{{_WEB_ROOT}}\public\uploads\products\{{$data['image']}}" alt="Image Description">
                  </div>

                  <div class="media-body">
                    <div class="row">
                      <div class="col-md-4 mb-3 mb-md-0">
                        <a class="h5 d-block" href="ecommerce-product-details.html">{{$data['product_name']}}</a>

                        <div class="font-size-sm text-body">
                          <span>Mã sản phẩm: </span> <br>
                          <span class="font-weight-bold">{{$data['product_code']}}</span>
                        </div>
      
                      </div>

                      <div class="col col-md-3 align-self-center">
                        <h5>{{number_format($data['unit_price'])}} đ</h5>
                      </div>

                      <div class="col col-md-1 align-self-center">
                        <h5>{{number_format($data['quantity'])}}</h5>
                      </div>

                      <div class="col col-md-3 align-self-center text-right">
                        <h5>{{number_format($data['quantity']*$data['unit_price'])}} đ</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Media -->

                <hr>
                @endforeach
            
                <div class="row justify-content-md-end mb-3">
                  <div class="col-md-8 col-lg-7">
                    <dl class="row text-sm-right">
                      <dt class="col-sm-6">Tạm tính:</dt>
                      <dd class="col-sm-6">{{number_format($orderById['total'] - $orderById['shipping_fee'])}} đ</dd>
                      <dt class="col-sm-6">Phí giao hàng:</dt>
                      <dd class="col-sm-6">{{number_format($orderById['shipping_fee'])}} đ</dd>
                      <dt class="col-sm-6">Thuế:</dt>
                      <dd class="col-sm-6">0 đ</dd>
                      <dt class="col-sm-6">Đã giảm (Voucher):</dt>
                      <dd class="col-sm-6">{! number_format($orderById['total'] - $orderById['total_after_voucher']) !} đ</dd>
                      <dt class="col-sm-6">Tổng cộng:</dt>
                      <dd class="col-sm-6">{! number_format($orderById['total_after_voucher']) !} đ</dd>
                      <dt class="col-sm-6">Đã trả:</dt>
                      <dd class="col-sm-6">{! number_format($orderById['total_after_voucher']) !} đ</dd>
                    </dl>
                    <!-- End Row -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
           
            <!-- End Card -->
          </div>

          <div class="col-lg-4">
            <!-- Card -->
            <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Khách hàng</h4>
              </div>
              <!-- End Header -->
          
              <!-- Body -->
              <div class="card-body">
                <a class="media align-items-center" href="ecommerce-customer-details.html">
                  <div class="avatar avatar-circle mr-3">
                    <!-- <img class="avatar-img" src="{{_WEB_ROOT}}\public\admin\img\160x160\img10.jpg" alt="Image Description"> -->
                  </div>
                  <div class="media-body">
                    <span class="text-body text-hover-primary">{{$orderById['fullname']}}</span>
                  </div>
                  <div class="media-body text-right">
                    <i class="tio-chevron-right text-body"></i>
                  </div>
                </a>
                
                <hr>

                <a class="media align-items-center" href="{{_WEB_ROOT}}/customer-edit/id-{{$orderById['customer_id']}}">
                  <div class="icon icon-soft-info icon-circle mr-3">
                    <i class="tio-shopping-basket-outlined"></i>
                  </div>
                  <div class="media-body">
                    <span class="text-body text-hover-primary">{{$orderById['count_order']}} Orders</span>
                  </div>
                  <div class="media-body text-right">
                    <i class="tio-chevron-right text-body"></i>
                  </div>
                </a>

                <hr>
                
                <div class="d-flex justify-content-between align-items-center">
                  <h5>Thông tin liên lạc</h5>
                  <input type="hidden" id="id_customer" value="{{$orderById['customer_id']}}">
                  <a class="aalink" id="edit1" href="javascript:;">Edit</a>
                </div>

                <ul class="list-unstyled list-unstyled-py-2">
                  <li id="email-content">
                    <i class="tio-online mr-2"></i>
                    {{$orderById['email']}}
                  </li>
      
                  <input type="text" id="email" class="form-control form-blur" style="display:none">
                 
                  <li id="phone-content">
                    <i class="tio-android-phone-vs mr-2"></i>
                    {{format_phone($orderById['phone'])}}
                  </li>
                  <input type="text" id="phone" class="form-control form-blur" style="display:none">
                </ul>

                <hr>

                <div class="d-flex justify-content-between align-items-center">
                  <h5>Địa chỉ nhận hàng</h5>
                  
                  <a id="edit" href="javascript:;">Edit</a>
                </div>

                <span id="address">
                  <span>{{$orderById['ship_address1']}}</span> <img class="avatar avatar-xss avatar-circle ml-1" src="{{_WEB_ROOT}}\public\admin\vendor\flag-icon-css\flags\1x1\vn.svg" alt="Great Britain Flag">
                </span>
                
                
                <textarea spellcheck="false" class="form-control" name="" id="area" cols="20" rows="3" style="resize: none;display:none; min-width:100%">
              </textarea>
                

                <hr>
                
                <div class="mt-3">
                  <h5 class="mb-0">Mastercard</h5>
                  <span class="d-block">Số tài khoản: ********{{substr($orderById['payment_code'], -4)}}</span>
                </div>
              </div>
              <!-- End Body -->
            </div>
            <!-- End Card -->
          </div>
        </div>
        <!-- End Row -->
      </div>
      <!-- End Content -->

      <!-- Footer -->
      <div class="d-print-none">
        
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
        

      </div>
      <!-- End Footer -->
      
    </main>
    <div id="keyboardShortcutsSidebar" class="hs-unfold-content sidebar sidebar-bordered sidebar-box-shadow">
      <div class="card card-lg sidebar-card">
        <div class="card-header">
          <h4 class="card-header-title">Keyboard shortcuts</h4>

          <!-- Toggle Button -->
          <a class="js-hs-unfold-invoker btn btn-icon btn-xs btn-ghost-dark ml-2" href="javascript:;" data-hs-unfold-options='{
                "target": "#keyboardShortcutsSidebar",
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
          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Formatting</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="font-weight-bold">Bold</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">b</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <em>italic</em>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">i</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <u>Underline</u>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">u</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <s>Strikethrough</s>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span class="small">Small text</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <mark>Highlight</mark>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">e</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Insert</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Mention person <a href="#">(@Brian)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">@</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Link to doc <a href="#">(+Meeting notes)</a></span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">+</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <a href="#">#hashtag</a>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">#hashtag</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Date</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/date</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">/datetime</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Time</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/time</kbd>
                  <kbd class="d-inline-block mb-1">Space</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Note box</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">/note</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">/note red</kbd>
                  <kbd class="d-inline-block mb-1">Enter</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
            <div class="list-group-item">
              <h5 class="mb-1">Editing</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find and replace</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">r</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find next</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Find previous</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Un-indent</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Tab</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line up</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-upward-outlined"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Move line down</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1"><i class="tio-arrow-large-downward-outlined font-size-sm"></i></kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Add a comment</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">m</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Undo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">z</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Redo</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">y</kbd>
                </div>
              </div>
            </div>
          </div>

          <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
            <div class="list-group-item">
              <h5 class="mb-1">Application</h5>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Create new doc</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Alt</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">n</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Present</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">p</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Share</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">s</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Search docs</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">o</kbd>
                </div>
              </div>
            </div>
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-5">
                  <span>Keyboard shortcuts</span>
                </div>
                <div class="col-7 text-right">
                  <kbd class="d-inline-block mb-1">Ctrl</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">Shift</kbd> <small class="text-muted">+</small> <kbd class="d-inline-block mb-1">/</kbd>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Keyboard Shortcuts -->

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
                  <img class="step-avatar-img" src="{{_WEB_ROOT}}\public\admin\img\160x160\img9.jpg" alt="Image Description">
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
                                <img class="avatar avatar-xs" src="{{_WEB_ROOT}}\public\admin\svg\brands\excel.svg" alt="Image Description">
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
                                <img class="avatar avatar-xs" src="{{_WEB_ROOT}}\public\admin\svg\brands\word.svg" alt="Image Description">
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
                  <img class="step-avatar-img" src="{{_WEB_ROOT}}\public\admin\img\160x160\img3.jpg" alt="Image Description">
                </div>

                <div class="step-content">
                  <h5 class="h5 mb-1">Crane</h5>

                  <p class="font-size-sm mb-1">Added 5 card to <a href="#">Payments</a></p>

                  <ul class="list-group list-group-sm">
                    <li class="list-group-item list-group-item-light">
                      <div class="row gx-1">
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{_WEB_ROOT}}\public\admin\svg\illustrations\card-1.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{_WEB_ROOT}}\public\admin\svg\illustrations\card-2.svg" alt="Image Description">
                        </div>
                        <div class="col">
                          <img class="img-fluid rounded ie-sidebar-activity-img" src="{{_WEB_ROOT}}\public\admin\svg\illustrations\card-3.svg" alt="Image Description">
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
                  <img class="step-avatar-img" src="{{_WEB_ROOT}}\public\admin\img\160x160\img7.jpg" alt="Image Description">
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
                  <img class="step-avatar-img" src="{{_WEB_ROOT}}\public\admin\img\160x160\img5.jpg" alt="Image Description">
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
                <img class="img-fluid" src="{{_WEB_ROOT}}\public\admin\svg\illustrations\graphs.svg" alt="Image Description">
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
                  <img class="img-fluid ie-welcome-brands" src="{{_WEB_ROOT}}\public\admin\svg\brands\gitlab-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{_WEB_ROOT}}\public\admin\svg\brands\fitbit-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{_WEB_ROOT}}\public\admin\svg\brands\flow-xo-gray.svg" alt="Image Description">
                </div>
                <div class="col">
                  <img class="img-fluid ie-welcome-brands" src="{{_WEB_ROOT}}\public\admin\svg\brands\layar-gray.svg" alt="Image Description">
                </div>
              </div>
            </div>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>
    <!-- End Welcome Message Modal -->

    <!-- Export Orders Modal -->
    <div class="modal fade" id="exportOrdersModal" tabindex="-1" role="dialog" aria-labelledby="exportOrdersModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Header -->
          <div class="modal-header">
            <h4 id="exportOrdersModalTitle" class="modal-title">Export orders</h4>

            <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
              <i class="tio-clear tio-lg"></i>
            </button>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="modal-body">
            <!-- Form Group -->
            <div class="form-group">
              <!-- Custom Checkbox -->
              <div class="custom-control custom-radio mb-2">
                <input type="radio" id="ordersRadio1" name="ordersRadio" class="custom-control-input" checked="">
                <label class="custom-control-label" for="ordersRadio1">Current page</label>
              </div>
              <div class="custom-control custom-radio mb-2">
                <input type="radio" id="ordersRadio2" name="ordersRadio" class="custom-control-input">
                <label class="custom-control-label" for="ordersRadio2">All orders</label>
              </div>
              <div class="custom-control custom-radio mb-2">
                <input type="radio" id="ordersRadio3" name="ordersRadio" class="custom-control-input" disabled="">
                <label class="custom-control-label" for="ordersRadio3">Selected: 20 orders</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="ordersRadio4" name="ordersRadio" class="custom-control-input">
                <label class="custom-control-label" for="ordersRadio4">Order by date</label>
              </div>
              <!-- End Custom Checkbox -->
            </div>
            <!-- End Form Group -->
  
            <label class="input-label">Export as</label>
        
            <!-- Custom Checkbox -->
            <div class="custom-control custom-radio mb-2">
              <input type="radio" id="orderAsRadio1" name="orderAsRadio" class="custom-control-input" checked="">
              <label class="custom-control-label" for="orderAsRadio1">CSV for Excel, Numbers, or other spreadsheet programs</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="orderAsRadio2" name="orderAsRadio" class="custom-control-input">
              <label class="custom-control-label" for="orderAsRadio2">Plain CSV file</label>
            </div>
            <!-- End Custom Checkbox -->
          </div>
          <!-- End Body -->

          <!-- Footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-white mr-2" data-dismiss="modal" aria-label="Close">Cancel</button>
            <button type="button" class="btn btn-primary">Export orders</button>
          </div>
          <!-- End Footer -->
        </div>
      </div>
    </div>

  