<section class="main-container col1-layout">
    <div class="main container">
      <div class="col-main">
        <div class="cart wow">
          <div class="page-title">
            <br>
            <h2>Giỏ hàng</h2>
          </div>
          <div class="table-responsive">
            <form method="post">
        
              <input type="hidden" value="Vwww7itR3zQFe86m" name="form_key">
              <fieldset>
                <table class="data-table cart-table" id="shopping-cart-table">
                  <colgroup>
                  <col width="1">
                  <col>
                  <col width="1">
                  <col width="1">
                  <col width="1">
                  <col width="1">
                  <col width="1">
        
                  </colgroup>
                  <thead>
                    <tr class="first last">
                      <th rowspan="1">&nbsp;</th>
                      <th rowspan="1"><span class="nobr">Tên Sản phẩm</span></th>
                      <th colspan="1" class="a-center"><span class="nobr">Giá</span></th>
                      <th class="a-center" rowspan="1">Số lượng</th>
                      <th colspan="1" class="a-center">Tổng</th>
                      <th class="a-center" rowspan="1">&nbsp;</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr class="first last">  
                      <td class="a-right last" colspan="50"><button onclick="location.href=`{{_WEB_ROOT}}`;" class="button btn-continue" title="Continue Shopping" type="button"><span><span>Tiếp tục mua hàng</span></span></button>
                        <button class="button btn-update" type="button" title="Update Cart" value="update_qty" name="update_cart_action" onclick="updateCart()"><span><span>Cập nhật giỏ hàng</span></span></button>
                        <a style="cursor:pointer; background:red; color: white; font-weight: bold" onclick="location.href=`{{_WEB_ROOT.'/xoa-het-gio-hang'}}`;" id="empty_cart_button" class="button btn-empty"><span><span>Xóa giỏ hàng</span></span></a></td>
                    </tr>
                  </tfoot>
                  <tbody>
                    @if(!empty($product))
                    @foreach($product as $data)
                    <tr class="first odd">
                      <td class="image"><a class="product-image" title="Sample Product" href="#"><img width="75" alt="Sample Produc1t" src="{{_WEB_ROOT.'/public/uploads/products/'.$data['image']}}"></a></td>
                      <td><h2 class="product-name"> <a href="#/women-s-crepe-printed-black/">{{$data['product_name']}}</a> </h2></td>
    
                      <td class="a-right"><span class="cart-price"> <span class="price">{! number_format($data['list_price']) !} đ</span> </span></td>
                      <td class="a-center movewishlist"><input type="number" class="input-text qty-cl" id="qty" min="1" value="{{$data['qty']}}" data-id="<?=$data['id']?>" name="qty[<?=$data['id']?>]"></td>
                      <td class="a-right movewishlist"><span class="cart-price"> <span class="price"></span>{! number_format($data['list_price']*$data['qty']) !}đ</span></td>
                      <td class="a-center last"><a class="button remove-item" title="Remove item" href="{{_WEB_ROOT.'/xoa-tung-san-pham/id-'.$data['id']}}"><span><span>Remove item</span></span></a></td>
                    </tr>
                   @endforeach
                   @endif
                  </tbody>
                </table>
              </fieldset>
            </form>
          </div>
          <!-- BEGIN CART COLLATERALS -->
          <div class="cart-collaterals row">
            <div class="col-sm-4">
              <div class="shipping">
                <h3>Nơi vận chuyển</h3>
                <div class="shipping-form">
                  <form id="shipping-zip-form" method="post" action="#estimatePost/">
                    @if(!empty($customer_address_info) || !empty(Session::data('address_code')))
                    <input type="hidden" value="{{$ward}}" id="hidden_ward">
                    <h5>Địa chỉ nhận hàng:</h5>
                    
                    <div style="font-weight:bold; padding: 6px 0" id="load_address" data-street="{{Session::data('address_code')['street'] ?? $customer_address_info['street']}}" data-ward="{{Session::data('address_code')['ward'] ?? $customer_address_info['ward_id']}}" data-district="{{Session::data('address_code')['district'] ?? $customer_address_info['district_id']}}" data-province="{{Session::data('address_code')['province'] ?? $customer_address_info['province_id']}}">
                      {{Session::data('address_code')['address'] ?? $customer_address_info['address']}}
                    </div>
                    <!-- <p>Nhập điểm đến của bạn để nhận ước tính vận chuyển.</p> -->
                    <div class="buttons-set11">
                      <button class="button get-quote" data-toggle="modal" data-target="#exampleModal" title="Get a Quote" type="button"><span>Thay đổi địa chỉ</span></button>
                    </div>
                    @else
                    <input type="hidden" id="load_address" data-street="" data-ward="" data-district="" data-province="">
                    <p>Nhập điểm đến của bạn để nhận ước tính vận chuyển.</p>
                    <div class="buttons-set11">
                      <button class="button get-quote" data-toggle="modal" data-target="#exampleModal" title="Get a Quote" type="button"><span>CHỌN địa chỉ để tính cước phí</span></button>
                    </div>
                    @endif
                    <!--buttons-set11-->
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="discount">
                <h3>Mã giảm giá</h3>
                <form method="post" action="" id="discount-coupon-form">
                  <label for="coupon_code">Hãy nhập mã giảm giá (nếu có).</label>
                  <input type="hidden" value="0" id="remove-coupone" name="remove">
                  <input type="text" value="" name="coupon_code" id="coupon_code" class="input-text fullwidth">
                  <button id="coupon_id" value="Apply Coupon" onclick="handleVoucher()" class="button coupon" title="Apply Coupon" type="button"><span>Xác thực</span></button>
                  <button id="list_coupon" class="button coupon" title="Apply Coupon" type="button" data-toggle="modal" data-target="#exampleModalScrollable"><span>Voucher Đã Nhập</span></button>
                </form>
              </div>
            </div>
            <div class="totals col-sm-4">
              <h3>TỔNG TIỀN</h3>
              <div class="inner">
                <table class="table shopping-cart-table-total" id="shopping-cart-totals-table">
                  <colgroup>
                  <col>
                  <col width="1">
                  </colgroup>
                  <tfoot>
                    <tr>
                    <!-- {! number_format($price + $ship) !} đ -->
                      <td colspan="1" class="a-left" style=""><strong>TỔNG HÓA ĐƠN</strong></td>
                      <td class="a-right" style=""><strong><span id="total" class="price">{! ($total_after_voucher ?? null) ? number_format(($total_after_voucher ?? null) + $ship) : number_format(($price ?? null) + $ship) !} đ</span></strong></td>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td colspan="1" class="a-left" style=""> TẠM TÍNH </td>
                      <td class="a-right" style=""><span class="price" data-price="{{Session::data('total') ?? NULL}}" value="{{Session::data('total') ?? NULL}}" id="sub-total">{! ($sub_total ?? null) ? number_format($sub_total ?? null) : (number_format($price)) !} đ</span></td>
                    </tr>
                    <tr>
                      <td colspan="1" class="a-left" style=""> PHÍ GIAO HÀNG </td>
                      <td class="a-right" ><span id="feeTotal"  class="price">{! number_format($ship) !}</span> đ</td>
                      <td id="feeSession"></td>
                    </tr>
                    <tr>
                      <td colspan="1" class="a-left" style="">ĐÃ GIẢM (VOUCHER):  </td>
                      <td class="a-right" ><span id="voucher" data-voucher="{{ ($total_after_voucher ?? null)  ? (($price ?? null) - ($total_after_voucher ?? null)) : 0 }}"  class="price">{! (empty($amount)) ? 0 : number_format($amount ?? null) !}</span> đ</td>
                    </tr>
                  </tbody>
                </table>
                <form action="">
                  <ul class="checkout">
                    <li>
                      <button class="button btn-proceed-checkout" onclick="handleCart()" title="Proceed to Checkout" type="button"><span>TIẾP TỤC THANH TOÁN</span></button>
                    </li>
                    <br>
                    
                    
                  </ul>
                </form>
              </div>
              <!--inner--> 
              
            </div>
          </div>
          
          <!--cart-collaterals--> 
          
        </div>
        
      </div>
    </div>
  </section>

  <!-- modal phí vận chuyện -->
  <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><i><b>TRA CỨU PHÍ VẬN CHUYỂN</b></i></h4>

      </div>
      <div class="modal-body">
        <form id ="form-delivery" class="content container-fluid"\>
          <!-- Thông tin địa chỉ kho -->
          <input type="hidden" id="provinceShop" value="202">
          <input type="hidden" id="districtShop" value="1458">
          <input type="hidden" id="wardShop" value="21904">
    
          <div class="row">
            <div class="mx-auto col-lg-12">
  
              <!-- Địa chỉ giao hàng -->
              <div class="card">
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
                          <select name = "province" id = "province" class="js-select2-custom custom-select  load_province form-control" size="1" style="opacity: 1;" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                              <option value="" disabled="" selected="">---Chọn Tỉnh/Thành phố---</option>
                            
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
                          <select name = "district" id = "district" class="js-select2-custom custom-select form-control" size="1" style="opacity: 1;" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                              <option value="" disabled="" selected="">---Chọn Quận/Huyện---</option>
                            
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
                          <select name = "ward" id = "ward" class="js-select2-custom custom-select form-control" size="1" style="opacity: 1;" data-hs-select2-options='{
                                    "minimumResultsForSearch": "Infinity"
                                  }'>
                              <option value="" disabled="" selected="">---Chọn Xã/Phường/Thị trấn---</option>
                            
                          </select>
                          <!-- End Select -->
                        </div>
                        <span class="form-message">
                          
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- End Xã - Phường - Thị trấn -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-4">
                        <label for="ward" class="input-label">Số nhà/Đường <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Tỉnh/Thành phố"></i></label>
                      </div>
                      
                      <div class="col-8">
                        <div class="input-group-prepend">
                          <input type="text" class="form-control" name="street" id="street">
                        </div>
                        <span class="form-message">
                          
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Body -->
              </div>
              <!-- End Địa chỉ giao hàng -->
              <!-- Coupon -->
              <div class="form-group">
                <label for="couponShip" class="input-label">Mã giảm giá phí giao hàng <i class="tio-help-outlined text-body ml-1" data-toggle="tooltip" data-placement="top" title="Mã giảm giá phí giao hàng"></i></label>

                <input type="text" class="form-control" name="couponShip" id="couponShip" 
                placeholder="Mã giảm giá phí giao hàng" aria-label="Mã giảm giá phí giao hàng">
              </div>
              <!-- End Coupon -->
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
                    <label class="col-sm-2 col-form-label input-label">Dịch vụ</label>
                    <div class="col-sm-10">
                      <div id = "ship_service" class="input-group input-group-sm-down-break">
                        <!-- <div class="form-control">
                              <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="shipServiceRadio" id="shipServiceRadio${i}" value="${elem.service_id}">
                                <label class="custom-control-label" for="shipServiceRadio${i}">${elem.short_name}</label>
                              </div>
                        </div> -->
                       
                      </div>
                      <span class = "form-message">

                      </span>
                    </div>
                  </div>
                  <!-- Loại Vận chuyển -->
                </div>
                <!-- Body -->
              </div>
              <!-- End Phương thức vận chuyển -->
              <!-- Thông tin hàng hóa -->
              <input type="hidden" id="widthProducts" name="widthProducts" value="{{$packing_data['width']}}">
              <input type="hidden" id="heightProducts" name="heightProducts" value="{{$packing_data['height']}}">
              <input type="hidden" id="lengthProducts" name="lengthProducts" value="{{$packing_data['length']}}">
              <input type="hidden" id="weightProducts" name="weightProducts" value="{{$packing_data['weight']}}">
              <input type="hidden" id="insurance_value" name="insurance_value" value="100000">
              <!-- End Thông tin hàng hóa -->
            </div>

          </div>
          <!-- End Row -->

          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button id = "check_delivery" type="submit" class="btn btn-primary" data-dismiss="modal">
              Tra cứu phí vận chuyển
        </button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Voucher -->

<div class="modal " id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">DANH SÁCH VOUCHER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="table_voucher" class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Mã</th>
              <th scope="col">Mô tả</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @if(!empty($voucher))
              @php $i=0; @endphp
              @foreach($voucher as $key => $data)
              <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$data['voucher_code']}}</td>
                <td>{{$data['voucher_name']}}</td>
                <td><button onclick="deleteVoucher(`{{$key}}`)" class="btn btn-danger">Xóa</button></td>
              </tr>
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>