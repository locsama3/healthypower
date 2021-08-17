<?php
$config['app'] = [
    'service' => [
        HtmlHelper::class,
        ProcessImage::class,
        OrderHelper::class
    ],
    'globalMiddleware' => [
        ParamsMiddleware::class,
        VerifyCsrfToken::class,
        LoginMiddleware::class,
    ],
    'routeAdminMiddleware' => [
        AuthAdminMiddleware::class,
    ],
    'routeDecentralizationMiddleware' => [
        DecentralizationMiddleware::class,
    ],
    'routeMiddleware' => [
        'san-pham'  => AuthMiddleware::class,
        'dang-nhap' => CheckLogin::class,
        'thong-tin-tai-khoan' => AuthUserMiddleware::class,
    ],
    'boot' => [
        AppServiceProvider::class
    ]
];
?>