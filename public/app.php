<?php

define('ROOT',realpath(__DIR__).DIRECTORY_SEPARATOR);
define('DISPLAY_ERROR',false);  // паказать ошибки = true

if(DISPLAY_ERROR === true) {
    error_reporting(E_ALL|E_NOTICE|E_STRICT);
}

require_once ROOT.'init/Common.php';

$common = new \Common();

if($common->headers() === true){
    switch($common->url){
        case '/login_search':$common->search('login');
            break;
        case '/email_search':$common->search('email');
            break;
        case '/captcha':$common->captcha();
            break;
        case '/register':$common->register();
            break;
        default: header("HTTP/1.1 404 Not Found");
            break;
    }
}else{

    function getCaptcha(){
        $captcha = new \Captcha();
        $captcha->setFont('init/font/');
        $captcha->generation();
        $_SESSION['captcha'] = $captcha->getCode();
        $captcha->run();
    }

    if($common->url === '/captcha.gif') {
        getCaptcha();
    }elseif(strpos($common->url,'/captcha.gif') !== false){
        getCaptcha();
    }else{
        header("HTTP/1.1 404 Not Found");
    }
}
