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
        'thong-tin-tai-khoan' => AuthUserMiddleware::class,
    ],
    'globalMiddleware' => [
        ParamsMiddleware::class,
        VerifyCsrfToken::class,
        LoginMiddleware::class,
    ],
    'boot' => [
        AppServiceProvider::class
    ]
];
?>