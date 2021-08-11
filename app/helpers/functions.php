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
    $timeVie = ['Chủ Nhật,', 'Thứ Hai,', 'Thứ Ba,', 'Thứ Tư,', 'Thứ Năm,', 'Thứ Sáu,', 'Thứ Bảy,','Tháng Một', 'Tháng Hai', 'Tháng Ba', 'Tháng Tư', 'Tháng Năm', 'Tháng Sáu', 'Tháng Bảy', 'Tháng Tám', 'Tháng Chín', 'Tháng Mười', 'Tháng Mười Một', 'Tháng Mười Hai'];
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

function randString($length){
    $chars = 'abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ0123456789';
    $str = '';
    $size = strlen($chars);
    for($i = 0; $i < $length; $i++){
        $str .= $chars[rand(0, $size - 1)];
    }

    return $str;
}


function time_elapsed_string($datetime, $full = false) 
{
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'năm',
        'm' => 'tháng',
        'w' => 'tuần',
        'd' => 'ngày',
        'h' => 'giờ',
        'i' => 'phút',
        's' => 'giây',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v;
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' trước' : '';
}