<?php
    $routes['default_controller'] = 'home';
    /*
     * Đường dẫn ảo => Đường dẫn thật
     *
    * */

    // routes clients

    $routes['trang-chu'] = 'home/index';
    $routes['tim-kiem'] = 'home/search';

    $routes['list'] = 'home/list';

    $routes['chi-tiet-sp/.+-(\d+)'] = 'products/product_details/$1'; //function gi_do($as)

    /* ---------------------------------------------------------------------------------------- */

    // routes admin

    $routes['dashboard'] = 'dashboard/index';

    // routes blogs

    $routes['blogs'] = 'blog/index';

    $routes['blogs-create'] = 'blog/create';
    
    // routes blogs categories

    $routes['blogs-category'] = 'blogcategory/index';

    $routes['blogs-category-create'] = 'blogcategory/create';

    $routes['blogs-category-store'] = 'blogcategory/store';

    $routes['blogs-category-edit/.+-(\d+)'] = 'blogcategory/edit/$1';

    $routes['blogs-category-update/.+-(\d+)'] = 'blogcategory/update/$1';

    $routes['blogs-category-destroy'] = 'blogcategory/destroy';

    // routes product

    $routes['products'] = 'product/index';

    $routes['products-create'] = 'product/create';

    // routes products categories

    $routes['products-category'] = 'productcategory/index';

    $routes['products-category-create'] = 'productcategory/create';
?>