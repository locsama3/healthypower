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
    return '<input type="hidden" name="_token" id="_token" value="'.$token.'"/>';
}

function csrf_token()
{
    $token = md5(uniqid());
    Session::data('_token', $token);
    return $token;
}