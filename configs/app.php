<?php
$config['app'] = [
    'service' => [
        HtmlHelper::class,
        ProcessImage::class
    ],
    'routeMiddleware' => [
        'san-pham' => AuthMiddleware::class
    ],
    'globalMiddleware' => [
        ParamsMiddleware::class
    ],
    'boot' => [
        AppServiceProvider::class
    ]
];
?>