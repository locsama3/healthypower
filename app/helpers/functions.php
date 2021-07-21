<?php
function toSlug($str){
    return $str;
}

function textShorten($text, $limit = 400)
{
    $text = $text. " ";
    $text = substr($text, 0, $limit);
    $text = substr($text, 0, strrpos($text, ' '));
    $text = $text.".....";
    return $text;
}

function format_date($str_date, $date_format)
{
    $date = date_create($str_date);

    $your_date = date_format($date, $date_format);

    return $your_date;
}

function format_date_vie($datetime)
{
    $timeEng = ['Sun','Mon','Tue','Wed', 'Thu', 'Fri', 'Sat', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    $timeVie = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy','Một', 'Hai', 'Ba', 'Tư', 'Năm', 'Sáu', 'Bảy', 'Tám', 'Chín', 'Mười', 'Mười Một', 'Mười Hai'];
    $time = str_replace( $timeEng, $timeVie, $datetime);

    return $time;
}


function csrf_field()
{
    $token = md5(uniqid());
    Session::data('_token', $token);
    return '<input type="hidden" name="_token" id="_token'.$token.'" value="'.$token.'"/>';
}

function csrf_token()
{
    $token = md5(uniqid());
    Session::data('_token', $token);
    return $token;
}

function getCurURL()
{
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") {
        $pageURL = "https://";
    } else {
      $pageURL = 'http://';
    }
    if (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
    return $pageURL;
}



function debug($data)
{
    echo '<pre>';
    print_r($data);
    die(); 
}

function format_phone($number)
{   
    $number = "+".$number;
    $result = sprintf("%s %s %s",
              substr($number, 1, 4),
              substr($number, 5, 3),
              substr($number, 8));
    return $result;
   
}
// Hàm tính tổng tiền (Đã tính phí ship)
function totalPrice($array, $shipping_fee){
    $total = 0;
    $newArray = [];
    $arrPriceChange = [];
    foreach($array as $data){
        //kiểm tra có mã giảm không
        if($data['discount_amount'] != 0){
            $data['unit_price'] -= $data['discount_amount'];
        }
        if($data['discount_percentage'] != 0){
            $data['unit_price'] -= ($data['unit_price']*$data['discount_percentage'])/100;
        }
        $total += $data['unit_price']*$data['quantity'];
        // tiến hành push giá trị vừa thay đổi (unit_price) vào mảng mới
        array_push($arrPriceChange, $data['unit_price']);
    }
    $total += $shipping_fee;
    $newArray = [$total, $arrPriceChange];
    return $newArray;
}

// Hàm kiểm tra trạng thái đơn hàng
function status($data){
    $newString = "";
    if($data==0){
        $newString .= '<span class="badge badge-soft-dark">
                            <span class="legend-indicator bg-dark"></span>Đang chờ xử lý
                        </span>'; 
    }elseif($data == 1){
        $newString .= '<span class="badge badge-soft-warning">
                            <span class="legend-indicator bg-warning"></span>Đang xử lý
                        </span>'; 
        
    }elseif($data == 2){
        $newString .= '<span class="badge badge-soft-primary">
                            <span class="legend-indicator bg-primary"></span>Đang giao
                        </span>'; 
    }elseif($data == 3){
        $newString .= '<span class="badge badge-soft-success">
                            <span class="legend-indicator bg-success"></span>Đã hoàn thành
                        </span>'; 
    }else{
        $newString .= '<span class="badge badge-soft-danger">
                            <span class="legend-indicator bg-danger"></span>Đã hủy
                        </span>'; 
    }
    return $newString;

}