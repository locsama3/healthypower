<div class="container" >
   
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3 body-main" style="background: #ffffff;
                border-bottom: 15px solid #1E1F23;
                border-top: 15px solid #1E1F23;
                margin-top: 30px;
                margin-bottom: 30px;
                padding: 40px 30px !important;
                position: relative;
                box-shadow: 0 1px 21px #808080;
                font-size: 10px">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"> <img height="100px" class="img" alt="Invoce Template" src="http://pngimg.com/uploads/shopping_cart/shopping_cart_PNG59.png" /> </div>
                        <div class="col-md-8 text-right">
                            <h4 style="color: #F81D2D;"><strong>HealthyPower</strong></h4>
                            <p>Bình Tân</p>
                            <p>0907 234 980</p>
                            <p>healthypower@gmail.com</p>
                        </div>
                    </div> <br />
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>ĐẶT HÀNG THÀNH CÔNG</h2>
                        </div>
                    </div> <br />
                    <div>
                        <table class="table">
                            <thead style="background: #1E1F23; color: #fff">
                                <tr>
                                    <th>
                                        <h5>Tên sản phẩm</h5>
                                    </th>
                                    <th>
                                        <h5>Giá</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty(Session::data('cart')))
                                    @foreach(Session::data('cart') as $data)
                                    <tr>
                                        <td class="col-md-9">{{$data['product_name']}} x {{$data['qty']}}</td>
                                        <td class="col-md-3"><i class="fas fa-rupee-sign" area-hidden="true"></i> {! number_format($data['list_price']*$data['qty']) !} đ</td>
                                    </tr>
                                    @endforeach
                                @endif
                              
                                <tr>
                                    <td class="text-right">
                                        <p> <strong>Phí giao hàng:</strong> </p>
                                        <p> <strong>Tạm tính: </strong> </p>
                                        <p> <strong>Đã giảm: </strong> </p>
                                        <p> <strong>Tổng cộng: </strong> </p>
                                    </td>
                                    <td>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> {! number_format($ship ?? null) !} đ</strong> </p>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> {! ($sub_total ?? null) ? number_format($sub_total ?? null) : (number_format($price)) !} đ</strong> </p>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> {! (empty($amount)) ? 0 : number_format($amount ?? null) !} đ</strong> </p>
                                        <p> <strong><i class="fas fa-rupee-sign" area-hidden="true"></i> {! ($total_after_voucher ?? null) ? number_format(($total_after_voucher ?? null) + $ship) : number_format(($price ?? null) + $ship) !} đ</strong> </p>
                                    </td>
                                </tr>
                                <tr style="color: #F81D2D;">
                                    <td class="text-right">
                                        <h4><strong>Tổng cộng:</strong></h4>
                                    </td>
                                    <td class="text-left">
                                        <h4><strong><i class="fas fa-rupee-sign" area-hidden="true"></i> {! ($total_after_voucher ?? null) ? number_format(($total_after_voucher ?? null) + $ship) : number_format(($price ?? null) + $ship) !}đ </strong></h4>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{_WEB_ROOT.'/ket-thuc-thanh-toan-online'}}" class="btn btn-success">Trở về trang chủ</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>