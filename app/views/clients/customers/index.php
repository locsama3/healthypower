<main class=" block-user container-fluid">
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
                        <img src="{{ _WEB_ROOT }}/public/uploads/customer/{{ $customer['avatar'] }}" alt="" style="border-radius:50%" ; width="150px;" height="150px;">
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
                        <p>Ngày sinh: <span>{{ $customer['birthday'] }}</span></p>
                    </div>

                    <div class="user-info-edit" style="display: none;">
                        <form action="">
                            <div class="form-group">
                                <label for="">Email:</label> <span>{{ $customer['email'] }}</span>
                            </div>
                            <div class="form-group">
                                <label for="">Họ và tên: <input class="form-control" style="width: 350px;" type="text" value="Đinh Tiến Phương"></label>
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại: <input class="form-control" style="width: 350px;" type="text" value="0123 456 789"></label>
                            </div>
                            <div class="form-group">
                                <label for="">Địa chỉ: <input class="form-control" style="width: 350px;" type="text" value="123 Phan Văn Trị"></label>
                                <label for="">Phường / Xã: <input class="form-control" style="width: 350px;" type="text" value="Phường 5"></label>
                                <label for="">Quận / Huyện: <input class="form-control" style="width: 350px;" type="text" value="Quận Gò Vấp"></label>
                                <label for="">Tỉnh / Thành phố: <input class="form-control" style="width: 350px;" type="text" value="Tp.HCM"></label>
                            </div>
                            <div class="form-group">
                                <label for="">Giới tính:</label>
                                <input class="" type="radio" name="gender" value="Nam"> <span style="font-size: 16px; margin-right: 20px;">Nam</span>
                                <input class="" type="radio" name="gender" value="Nữ"> <span style="font-size: 16px; margin-right: 20px;">Nữ</span>
                                <input class="" type="radio" name="gender" value="Bê đê"> <span style="font-size: 16px; margin-right: 20px;">Khác</span>
                            </div>
                            <div class="form-group">
                                <label for="">Ngày sinh: <input class="form-control" style="width: 350px;" type="date"></label>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <button type="submit" class=" btn btn-success btn-edit-user" onclick="editUser()">Chỉnh sửa hồ
                            sơ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
