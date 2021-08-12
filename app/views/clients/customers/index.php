<main class="block-user container">
    <div class="container">
        <div class="row">
            <div class="block-user-left col-sm-3 col-lg-3">
                <div class="avatar">
                    <div class="avatar-img">
                        <img src="{{ _WEB_ROOT }}/public/uploads/customer/{{ $customer['avatar'] }}" alt="">
                        <!-- <div><i class="fas fa-user-edit"></i></div> -->
                    </div>
                    <div class="avatar-name">
                        <span>{{ $customer['fullname'] }}</span>
                    </div>
                </div>
                <div class="action">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    <i class="fas fa-user"></i> Tài khoản
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="card-boy-list">
                                        <li><a href="user.html">Hồ sơ</a></li>
                                        <li><a href="user_address.html">Địa chỉ</a></li>
                                        <li><a href="user_payment.html">Thanh toán</a></li>
                                        <li><a href="user_reset.html">Đổi mật khẩu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    <i class="fas fa-file-alt"></i> Đơn hàng
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="card-boy-list">
                                        <li><a href="user_all_donhang.html">Tất cả</a></li>
                                        <li><a href="">Đã giao</a></li>
                                        <li><a href="">Đang giao</a></li>
                                        <li><a href="">Chờ xác nhận</a></li>
                                        <li><a href="">Đã hủy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    <i class="fas fa-bookmark"></i> Kho voucher
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="card-boy-list">
                                        <li><a href="">Sắp hết hạn</a></li>
                                        <li><a href="">Đã sử dụng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                    <i class="fas fa-bullhorn"></i> Thông báo
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="card-boy-list">
                                        <li><a href="">Khuyến mãi</a></li>
                                        <li><a href="">Đơn hàng</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" block-user-right col-sm-9 col-lg-9">
                <div class="user">
                    <h1>Quản lý hồ sơ</h1>
                    <hr>
                    <div class="container col-lg-9">
                        <div class="user-img">
                            <img src="{{ _WEB_ROOT }}/public/uploads/customer/{{ $customer['avatar'] }}" alt="" style="border-radius:50%" ; width="100px;" height="100px;">
                            <p style="font-size: 15px;"><i class="far fa-edit"></i></p>
                        </div>
                        <hr>
                        <div class="user-info">
                            <p>Email: <span>{{ $customer['email'] }}</span></p>
                            <p>Họ và tên: <span>{{ $customer['fullname'] }}</span></p>
                            <p>Số điện thoại: <span>{{ $customer['phone'] }}</span></p>
                            @if ($customer['gender'] == 1)
                            <p>Giới tính: <span>Nam</span></p>
                            @else 
                            <p>Giới tính: <span>Nữ</span></p>
                            @endif
                            @if (!empty($customer['birthday']))
                                @php
                                $date = date_create($customer['birthday']);
                                @endphp
                                <p>Ngày sinh: <span>{{ date_format($date, "d - m - Y") }}</span></p>
                            @else
                                <p>Ngày sinh: <span></span></p>
                            @endif
                            <p>Địa chỉ: <span>{{ $customer['shipping_address'] }}</span></p>
                        </div>
    
                        <div class="user-info-edit" style="display: none;">
                            <form action="" id="formUserInfo" method="post">
                                <input type="hidden" name="customer-id" value="{{ $customer['id'] }}">
                                <div class="form-group">
                                    <label for="">Email:</label> <span>{{ $customer['email'] }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Họ và tên: </label>
                                    <input class="form-control" name="username" type="text" value="{{ $customer['fullname'] }}">
                                    <div class="form-message"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại: </label>
                                    <input class="form-control" name="phone" type="text" value="{{ $customer['phone'] }}">
                                    <div class="form-message"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Địa chỉ: </label>
                                    <input class="form-control" type="text" name="address" value="{{ $customer['shipping_address'] }}">
                                    <div class="form-message"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Tỉnh / Thành phố: </label>
                                    <select class="form-select load_province" id="province" style="width: 100%;" name="province" data-id="{{ $customer['province_id'] }}">
                                        <option value="">--- Tỉnh, TP ---</option>
                                    </select>
                                    <div class="form-message"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Quận / Huyện: </label>
                                    <select class="form-select" id="district" style="width: 100%;" name="district"  data-id="{{ $customer['district_id'] }}">
                                        <option value="">--- Quận, huyện ---</option>
                                    </select>
                                    <div class="form-message"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Phường / Xã: </label>
                                    <select class="form-select" id="ward" style="width: 100%;" name="ward"  data-id="{{ $customer['ward_id'] }}">
                                        <option value="">--- Phường, xã ---</option>
                                    </select>
                                    <div class="form-message"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Giới tính:</label>
                                    <input class="" type="radio" name="gender" value="1" <?php echo ($customer['gender'] == 1) ? 'checked' : ''; ?>> <span style="font-size: 16px; margin-right: 20px;">Nam</span>
                                    <input class="" type="radio" name="gender" value="2" <?php echo ($customer['gender'] == 2) ? 'checked' : ''; ?>> <span style="font-size: 16px; margin-right: 20px;">Nữ</span>
                                    <input class="" type="radio" name="gender" value="0" <?php echo ($customer['gender'] == 0) ? 'checked' : ''; ?>> <span style="font-size: 16px; margin-right: 20px;">Khác</span>
                                    <div class="form-message"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Ngày sinh: </label>
                                    <input class="form-control" type="date" name="birthday" value='{{ $customer["birthday"] }}'>
                                    <div class="form-message"></div>
                                </div>
                            </form>
                        </div>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-success btn-edit-user">Chỉnh sửa hồ sơ</button>
                            <button type="button" class="btn btn-primary btn-comeback" style="display: none; margin-left: 4px">Hủy chỉnh sửa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
