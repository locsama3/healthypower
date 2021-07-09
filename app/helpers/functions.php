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