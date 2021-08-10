<div class="main-container col2-right-layout">
    <div class="main container">
      <div class="row">
        <section class="col-main col-sm-8 wow">
          <div class="page-title">
            <h1>Thanh toán</h1>
          </div>
          <ol class="one-page-checkout" id="checkoutSteps">
            <li id="opc-billing" class="section allow active">
              <div class="step-title"> <span class="number">1</span>
                <h3>Thông tin</h3>
                <!--<a href="#">Edit</a> --> 
              </div>
              <div id="checkout-step-billing" class="step a-item">
             
                <form id="co-billing-form" method="post">
                  <input type="hidden" value="" id="payment-hidden" name="_token">
                  <fieldset class="group-select">
                    <ul>
                      <li>
                        <label for="billing-address-select">Vui lòng nhập địa chỉ giao hàng của bạn</label>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" id="address">
                            <div class="form-message"></div>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="1" type="radio" name="payment" id="flexRadioDisabled" >
                          <label class="form-check-label" for="flexRadioDisabled">
                            Thanh toán khi nhận hàng
                          </label>  
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" value="2" type="radio" name="payment" id="flexRadioCheckedDisabled" checked>
                          <label class="form-check-label" for="flexRadioCheckedDisabled">
                            Thanh toán online
                          </label>
                        </div>
                      </li>
                  
                    </ul>
                    
                    <button type="submit" class="button continue"><span>XÁC NHẬN THANH TOÁN</span></button>
                  
                  </fieldset>
                  
                  
                </form>
              </div>
            </li>
         

           
          </ol>
        </section>
        <aside class="col-right sidebar col-sm-4 wow">
          <div class="block block-progress">
            <div class="block-title ">Thông tin hóa đơn</div>
            
            <div class="block-content">
              <dl>
                <dd class="complete">
                    <div style="font-family:cursive; font-size: 1.4rem">
                        <div class="p-2 bd-highlight"><b>Họ tên khách hàng</b>: {{ Session::data('user_data')['username'] ?? null }} </div>
                        <div class="p-2 bd-highlight"><b>Email</b>: {{ Session::data('user_data')['user_email'] ?? null }}</div>
                        <div class="p-2 bd-highlight"><b>Phone</b>: {! format_phone(Session::data('user_data')['user_phone'] ?? null) !} </div>
                        <div class="p-2 bd-highlight" style="font-size: 1.5rem"><b>Tổng hóa đơn: </b> {! (Session::data('total_after_price')) ? number_format((Session::data('total_after_voucher') ?? null) + (Session::data('shipping_fee') ?? null)) : number_format((Session::data('total') ?? null) + (Session::data('shipping_fee') ?? null)) !} đ</div>
                    </div>
                </dd>
              </dl>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
  