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

    $routes['blogs-category-status'] = 'blogcategory/status';

    $routes['blogs-category-destroy'] = 'blogcategory/destroy';

    // routes product

    $routes['products'] = 'product/index';

    $routes['products-create'] = 'product/create';

    // routes products categories

    $routes['products-category'] = 'productcategory/index';

    $routes['products-category-create'] = 'productcategory/create';

    $routes['products-category-store'] = 'productcategory/store';

    $routes['products-category-edit/.+-(\d+)'] = 'productcategory/edit/$1';

    $routes['products-category-update/.+-(\d+)'] = 'productcategory/update/$1';

    $routes['products-category-status'] = 'productcategory/status';

    $routes['products-category-destroy'] = 'productcategory/destroy';

    // routes warehouse

    $routes['warehouse'] = 'warehouse/index';

    $routes['warehouse-create'] = 'warehouse/create';

    $routes['warehouse-store'] = 'warehouse/store';

    $routes['warehouse-edit/.+-(\d+)'] = 'warehouse/edit/$1';

    $routes['warehouse-update/.+-(\d+)'] = 'warehouse/update/$1';

    $routes['warehouse-status'] = 'warehouse/status';

    $routes['warehouse-destroy'] = 'warehouse/destroy';
?>