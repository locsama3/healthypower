<?php
class Response{
    public function redirect($uri=''){
        if (preg_match('~^(http|https)~is', $uri)){
            $url = $uri;
        }else{
            $url = _WEB_ROOT.'/'.$uri;
        }

        header("Location: ".$url);
        exit;
    }

    public function back()
    {
        $url = $_SERVER['HTTP_REFERER'];
        header("Location: ".$url);
        exit;
    }
    
}