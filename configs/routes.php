<?php
    $routes['default_controller'] = 'home';
    /*
     * Đường dẫn ảo => Đường dẫn thật
     *
    * */

    // routes clients

    $routes['trang-chu'] = 'home/index';
    
    $routes['tim-kiem'] = 'home/search';

    // routes products clients

    $routes['danh-sach-san-pham'] = 'product/list';

    $routes['chi-tiet-san-pham/.+-(\d+)'] = 'product/detail/$1'; //function gi_do($as)

    // routes user clients

    $routes['dang-nhap'] = 'customer/login';

    $routes['dang-ky'] = 'customer/register';

    $routes['xac-thuc-dang-ky'] = 'customer/validate_register';

    $routes['xac-thuc-nguoi-dung'] = 'customer/validate';

    $routes['dang-xuat'] = 'customer/logout';

    $routes['quen-mat-khau'] = 'customer/forgot_password';

    $routes['gui-ma-xac-thuc'] = 'customer/send_mail';

    $routes['ma-dat-lai'] = 'customer/check_code';

    $routes['xac-thuc-ma-dat-lai'] = 'customer/validate_code';

    $routes['dat-lai-mat-khau'] = 'customer/reset';

    $routes['chinh-sua-mat-khau-moi'] = 'customer/update_pass';

    $routes['thong-tin-tai-khoan'] = 'customer/index';

    $routes['cap-nhat-thong-tin-khach-hang'] = 'customer/update';

    // routes bài viết
    
    $routes['bai-viet'] = 'blog/show_blogs';

    $routes['bai-viet/(.+)'] = 'blog/show_blog_detail/$1';
    
    $routes['danh-muc-bai-viet/(.+)'] = 'blog/show_category_home/$1';

    $routes['muc-bai-viet/trang-(.+)'] = 'blog/blog_on_page/$1';

    $routes['load-blog-comment'] = 'blogcomment/load_comment';

    $routes['send-blog-comment'] = 'blogcomment/send_comment';

    $routes['manage-blog-comment'] = 'admin/blogcomment/manage_review';

    $routes['view-blog-comment/.+-(\d+)'] = 'admin/blogcomment/view_comment/$1';

    $routes['status-blog-comment'] = 'admin/blogcomment/status_comment';

    $routes['destroy-blog-comment'] = 'admin/blogcomment/destroy_comment';
    
    // routes cart

    $routes['gio-hang'] = 'cart/index';

    $routes['them-gio-hang/.+-(\d+)'] = 'cart/store/$1';

    $routes['cap-nhat-gio-hang'] = 'cart/update';

    $routes['get-shipping-fee'] = 'cart/getshippingfee';
    
    $routes['xoa-het-gio-hang'] = 'cart/clearcart';
    
    $routes['xoa-tung-san-pham/.+-(\d+)'] = 'cart/delete/$1';
    
    $routes['kiem-tra-voucher'] = 'cart/handlevoucher';

    $routes['xoa-voucher'] = 'cart/deletevoucher';

    $routes['thanh-toan'] = 'cart/checkout';

    $routes['handle-checkout'] = 'cart/successcart';

    $routes['payment'] = 'cart/payment';

    $routes['create-vnpay'] = 'cart/createpayment';

    $routes['payment-post'] = 'cart/postpayment';

    $routes['vnpay/return'] = 'cart/vnpayreturn';

    $routes['ket-thuc-thanh-toan-online'] = 'cart/clearpayment';

    $routes['hoan-tat-don-hang'] = 'cart/success';

    //comment and rating product
    $routes['load-comment'] = 'productreview/load_comment';

    $routes['send-comment'] = 'productreview/send_comment';

    $routes['insert-rating'] = 'productreview/insert_rating';

    $routes['manage-review'] = 'admin/productreview/manage_review';

    $routes['view-comment/.+-(\d+)'] = 'admin/productreview/view_comment/$1';

    $routes['reply-comment'] = 'admin/productreview/reply_comment';

    $routes['status-comment'] = 'admin/productreview/status_comment';

    $routes['comment-destroy'] = 'admin/productreview/destroy_comment';

    $routes['view-child-comment/.+-(\d+)'] = 'admin/productreview/child_comment/$1';

    /* ---------------------------------------------------------------------------------------- */

    // routes admin


    $routes['dashboard'] = 'admin/dashboard/index';

    // routes blogs

    $routes['blogs'] = 'admin/blog/index';

    $routes['blogs-create'] = 'admin/blog/create';

    $routes['blogs-store'] = 'admin/blog/store';

    $routes['blogs-edit/.+-(\d+)'] = 'admin/blog/edit/$1';

    $routes['blogs-update/.+-(\d+)'] = 'admin/blog/update/$1';

    $routes['blogs-status'] = 'admin/blog/status';

    $routes['blogs-destroy'] = 'admin/blog/destroy';

    
    // routes blogs categories

    $routes['blogs-category'] = 'admin/blogcategory/index';

    $routes['blogs-category-create'] = 'admin/blogcategory/create';

    $routes['blogs-category-store'] = 'admin/blogcategory/store';

    $routes['blogs-category-edit/.+-(\d+)'] = 'admin/blogcategory/edit/$1';

    $routes['blogs-category-update/.+-(\d+)'] = 'admin/blogcategory/update/$1';

    $routes['blogs-category-status'] = 'admin/blogcategory/status';

    $routes['blogs-category-destroy'] = 'admin/blogcategory/destroy';

    // routes product

    $routes['products'] = 'admin/product/index';


    $routes['products-create'] = 'admin/product/create';

    $routes['products-store'] = 'admin/product/store';

    $routes['products-edit/.+-(\d+)'] = 'admin/product/edit/$1';

    $routes['products-update/.+-(\d+)'] = 'admin/product/update/$1';

    $routes['products-status'] = 'admin/product/status';

    $routes['products-destroy'] = 'admin/product/destroy';

    $routes['products-upload-excel'] = 'admin/product/uploadexcel';

    // routes products categories

    $routes['products-category'] = 'admin/productcategory/index';

    $routes['products-category-create'] = 'admin/productcategory/create';

    $routes['products-category-store'] = 'admin/productcategory/store';

    $routes['products-category-edit/.+-(\d+)'] = 'admin/productcategory/edit/$1';

    $routes['products-category-update/.+-(\d+)'] = 'admin/productcategory/update/$1';

    $routes['products-category-status'] = 'admin/productcategory/status';

    $routes['products-category-destroy'] = 'admin/productcategory/destroy';

    // routes products supplier

    $routes['supplier'] = 'admin/supplier/index';

    $routes['supplier-create'] = 'admin/supplier/create';

    $routes['supplier-store'] = 'admin/supplier/store';

    $routes['supplier-edit/.+-(\d+)'] = 'admin/supplier/edit/$1';

    $routes['supplier-update/.+-(\d+)'] = 'admin/supplier/update/$1';

    $routes['supplier-status'] = 'admin/supplier/status';

    $routes['supplier-destroy'] = 'admin/supplier/destroy';

    // routes warehouse

    $routes['warehouse'] = 'admin/warehouse/index';

    $routes['warehouse-create'] = 'admin/warehouse/create';

    $routes['warehouse-store'] = 'admin/warehouse/store';

    $routes['warehouse-edit/.+-(\d+)'] = 'admin/warehouse/edit/$1';

    $routes['warehouse-update/.+-(\d+)'] = 'admin/warehouse/update/$1';

    $routes['warehouse-status'] = 'admin/warehouse/status';

    $routes['warehouse-destroy'] = 'admin/warehouse/destroy';

    $routes['warehouse-export'] = 'admin/warehouse/export';
    
    $routes['warehouse-import'] = 'admin/warehouse/import';

    $routes['warehouse-import-create'] = 'admin/warehouse/createImport';

    $routes['warehouse-get-product'] = 'admin/warehouse/getProduct';

    $routes['warehouse-success-import'] = 'admin/warehouse/insertImport';

    // routes vouchers

    $routes['vouchers'] = 'admin/voucher/index';

    $routes['vouchers-create'] = 'admin/voucher/create';

    $routes['vouchers-store'] = 'admin/voucher/store';

    $routes['vouchers-edit/.+-(\d+)'] = 'admin/voucher/edit/$1';

    $routes['vouchers-update/.+-(\d+)'] = 'admin/voucher/update/$1';

    $routes['vouchers-destroy'] = 'admin/voucher/destroy';

    // routes payment-types

    $routes['payment-types'] = 'admin/paymenttype/index';

    $routes['payment-types-create'] = 'admin/paymenttype/create';

    $routes['payment-types-store'] = 'admin/paymenttype/store';

    $routes['payment-types-edit/.+-(\d+)'] = 'admin/paymenttype/edit/$1';

    $routes['payment-types-update/.+-(\d+)'] = 'admin/paymenttype/update/$1';

    $routes['payment-types-status'] = 'admin/paymenttype/status';

    $routes['payment-types-destroy'] = 'admin/paymenttype/destroy';

    // routes admin account
    $routes['admin-accounts'] = 'admin/adminaccount/index';

    $routes['admin-accounts-loadtable'] = 'admin/adminaccount/load_table';

    $routes['admin-accounts-create'] = 'admin/adminaccount/create';

    $routes['admin-accounts-cresuccess'] = 'admin/adminaccount/create_success';

    $routes['admin-accounts-store'] = 'admin/adminaccount/store';

    $routes['admin-accounts-status'] = 'admin/adminaccount/status';

    $routes['admin-accounts-change-password'] = 'admin/adminaccount/change_password';

    $routes['admin-accounts-change-address'] = 'admin/adminaccount/change_address';

    $routes['admin-accounts-change-info'] = 'admin/adminaccount/change_info';

    $routes['(.+)asdssmissn'] = 'admin/adminaccount/detail/$1';

    $routes['admin-accounts-destroy'] = 'admin/adminaccount/destroy';

    // routes role

    $routes['roles'] = 'admin/role/index';

    $routes['roles-create'] = 'admin/role/create';

    $routes['roles-store'] = 'admin/role/store';

    $routes['roles-edit/.+-(\d+)'] = 'admin/role/edit/$1';

    $routes['roles-update/.+-(\d+)'] = 'admin/role/update/$1';

    $routes['roles-destroy'] = 'admin/role/destroy';

    // routes permissions

    $routes['permissions'] = 'admin/permission/index';

    $routes['permissions-create'] = 'admin/permission/create';

    $routes['permissions-store'] = 'admin/permission/store';

    $routes['permissions-edit/.+-(\d+)'] = 'admin/permission/edit/$1';

    $routes['permissions-update/.+-(\d+)'] = 'admin/permission/update/$1';

    $routes['permissions-destroy'] = 'admin/permission/destroy';


    // routes customers
    $routes['customers'] = 'admin/customer/index';
    
    $routes['customer-create'] = 'admin/customer/create';


    $routes['customer-store'] = 'admin/customer/store';

    $routes['customer-edit/.+-(\d+)'] = 'admin/customer/edit/$1';

    $routes['customer-update/.+-(\d+)'] = 'admin/customer/update/$1';

    $routes['customer-destroy'] = 'admin/customer/destroy';

    // routes login user

    


    // routes delivery
    $routes['deliveries'] = 'admin/delivery/index';

    // routes orders
    
    $routes['order'] = 'admin/orderhandling/index';

    $routes['order-update'] = 'admin/orderhandling/update_status';

    $routes['order-detail/.+-(\d+)'] = 'admin/orderhandling/show/$1';
    

    $routes['detail-edit'] = 'admin/orderhandling/edit';

    $routes['detail-load-address'] = 'admin/orderhandling/load_address';
    
    $routes['detail-edit-contact'] = 'admin/orderhandling/update_contact';
    
    $routes['detail-load-contact'] = 'admin/orderhandling/load_contact'
    

?>