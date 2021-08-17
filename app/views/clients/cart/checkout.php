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
              <h3>Phương thức thanh toán</h3>

            </div>
            <div id="checkout-step-billing" class="step a-item">

              <form id="co-billing-form" method="post">
                <input type="hidden" value="" id="payment-hidden" name="_token">
                <fieldset class="group-select">
                  <ul>
                    <li>
                      <div class="form-group">
                        <label style="font-weight: 700; letter-spacing: 1px;" for="order_note">Ghi chú cho đơn hàng:</label>
                        <input type="text" class="form-control" name="order_note" id="order_note">
                      </div>
                      <label for="billing-address-select" style="font-weight: bold; font-size: 1.4rem">Vui lòng chọn phương thức thanh toán</label>
                      <br>

                      <div class="form-check">
                        <img width="30px" src="http://hoaquauudam.com/wp-content/uploads/2017/06/phuong-thuc-thanh-toan.jpg" alt="">
                        <input class="form-check-input" value="1" type="radio" name="payment" id="flexRadioDisabled">
                        <label style="font-weight: 500; letter-spacing: 1px;" class="form-check-label" for="flexRadioDisabled">
                          Thanh toán khi nhận hàng
                        </label>
                      </div>
                      <div class="form-check" style="padding-top:15px">
                        <img width="30px" src="https://play-lh.googleusercontent.com/qoTS_Gmo_XoGxR1VXg2mum0BFiVp3AJYzYtpEMFZCqno3ZvtIEs4yiI30-19FiVRvu8" alt="">
                        <input class="form-check-input" value="2" type="radio" name="payment" id="flexRadioCheckedDisabled" checked>
                        <label style="font-weight: 500; letter-spacing: 1px;" class="form-check-label" for="flexRadioCheckedDisabled">
                          Thanh toán qua VNPAY
                        </label>
                      </div>
                    </li>

                  </ul>

                  <button style="margin: 5px 0" type="submit" class="button continue"><span>XÁC NHẬN THANH TOÁN</span></button>

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