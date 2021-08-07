<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Thông tin thanh toán</title>
        <!-- Bootstrap core CSS -->
        <link href="/vnpay_php/assets/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="/vnpay_php/assets/jumbotron-narrow.css" rel="stylesheet">         
        <script src="/vnpay_php/assets/jquery-1.11.3.min.js"></script>
    </head>
    <body>
        <!--Begin display -->
        <div class="container">
            <div class="header clearfix">
                <h3 class="text-muted">Thông tin đơn hàng</h3>
            </div>
            <div class="table-responsive">
                <div class="form-group">
                    <label >Mã đơn hàng:</label>
                    
                    <label>{{ $bill['vnp_TxnRef'] }}</label>
                </div>    
                <div class="form-group">

                    <label >Số tiền:</label>
                    <label>{{ number_format($bill['vnp_Amount'] / 100) }}VNĐ</label>
                </div>  
                <div class="form-group">
                    <label >Nội dung thanh toán:</label>
                    <label>{{ $bill['vnp_OrderInfo'] }}</label>
                </div> 
                <div class="form-group">
                    <label >Mã phản hồi (vnp_ResponseCode):</label>
                    <label>{{ $bill['vnp_ResponseCode'] }}</label>
                </div> 
                <div class="form-group">
                    <label >Mã GD Tại VNPAY:</label>
                    <label>{{ $bill['vnp_TransactionNo'] }}</label>
                </div> 
                <div class="form-group">
                    <label >Mã Ngân hàng:</label>
                    <label> {{ $bill['vnp_BankCode'] }} </label>
                </div> 
                <div class="form-group">
                    <label >Thời gian thanh toán:</label>
                    <label>{{ $bill['time'] }}</label>
                </div> 
                <div class="form-group">
                    <label >Kết quả:</label>
                    <label>
                    @php
                        $msg = Session::flash('msg');
                    @endphp
                    @if (!empty($msg))
                        <div class="alert alert-success" role="alert">
                        {{ $msg }}
                        </div>
                    @endif
                        

                    </label>
                    <br>
                    <a href="{{_WEB_ROOT.'/ket-thuc-thanh-toan-online'}}">
                        <button>Quay lại</button>
                    </a>
                </div> 
            </div>
            <p>
                &nbsp;
            </p>
            <footer class="footer">
                <p>&copy; HealthyPower </p>
            </footer>
        </div>  
    </body>
</html>