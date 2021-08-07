<section class="main-container col1-layout">
    <div class="main container">
        <div class="account-login">
            <div class="page-title">
                <h2>Đăng nhập hoặc tạo tài khoản mới</h2>
            </div>
            <fieldset class="col2-set">
                <legend>Đăng nhập hoặc tạo tài khoản mới</legend>
                <div class="col-1 new-users"><strong>Bạn là khách hàng mới</strong>
                    <div class="content">
                        <p>Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể thực hiện quy trình thanh toán nhanh hơn,
                             lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi các đơn đặt hàng trong tài khoản của bạn và hơn thế nữa. </p>
                        <div class="buttons-set mt-5">
                            <a class="button create-account" href="{{ _WEB_ROOT }}/dang-ky"><span>Tạo tài khoản</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-2 registered-users"><strong>Đăng nhập</strong>
                    <form action="" method="post" id="formLogin">
                        
                        <div class="content">
                            <ul class="form-list">
                                <li>
                                    <div class="form-group">
                                        <label for="email">Email <span class="required">*</span></label><br>
                                        <input type="text" title="Email Address" class="input-text required-entry" id="email" name="email" placeholder="healthpower@gmail.com"><br>
                                        <span class="form-message"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label for="pass">Mật khẩu <span class="required">*</span></label><br>
                                        <input type="password" title="Password" id="pass" class="input-text required-entry validate-password" name="password" placeholder="Nhập mật khẩu"><br>
                                        <span class="form-message"></span>
                                    </div>
                                </li>
                                <li class="d-flex text-align-center">
                                    <input type="checkbox" name="save" style="margin: 0 6px;">
                                    <span>Ghi nhớ trạng thái đăng nhập trên trình duyệt này</span>
                                </li>
                            </ul>
                            <div class="buttons-set">
                                <button id="send2" name="send" type="submit" class="button login"><span>Đăng nhập</span></button>
                                <a class="forgot-word" href="{{ _WEB_ROOT }}/quen-mat-khau">Quên mật khẩu</a>
                            </div>
                        </div>
                    </form>
                </div>
            </fieldset>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>