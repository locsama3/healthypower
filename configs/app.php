<?php
$config['app'] = [
    'service' => [
        HtmlHelper::class,
        ProcessImage::class,
        OrderHelper::class
    ],
    'routeAdminMiddleware' => [
        AuthAdminMiddleware::class,
    ],
    'routeMiddleware' => [
        'san-pham'  => AuthMiddleware::class,
        'them-gio-hang/.+-(\d+)' => CartLogin::class,
        'dang-nhap' => CheckLogin::class,
        
    ],
    'globalMiddleware' => [
        // ParamsMiddleware::class,
        VerifyCsrfToken::class,
        
    ],
    'boot' => [
        AppServiceProvider::class
    ]
];
?>