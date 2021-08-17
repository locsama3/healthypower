<?php
/**
 * 0: đường dẫn chung cho tất cả quản trị viên
 * 1: quản lý tài khoản
 * 2: quản lý sản phẩm
 * 3: quản lý khách hàng
 * 4: quản lý kho hàng
 * 5: quản lý đặt hàng
 * 6: quản lý bài viết
 * 
 */
$config['decentralization'] = [
    '0' => [
        'admin/dashboard/index',
        'admin/voucher/index',
        'admin/voucher/create',
        'admin/voucher/store',
        'admin/voucher/edit',
        'admin/voucher/update',
        'admin/voucher/destroy',
        'admin/user/logout'
    ],
    '1' => [
        'admin/adminaccount/index',
        'admin/adminaccount/create',
        'admin/adminaccount/load_table',
        'admin/adminaccount/create_success',
        'admin/adminaccount/store',
        'admin/adminaccount/status',
        'admin/adminaccount/change_password',
        'admin/adminaccount/change_address',
        'admin/adminaccount/change_info',
        'admin/adminaccount/detail',
        'admin/adminaccount/destroy',
        'admin/role/index',
        'admin/role/create',
        'admin/role/store',
        'admin/role/edit',
        'admin/role/update',
        'admin/role/destroy',
        'admin/permission/index',
        'admin/permission/create',
        'admin/permission/store',
        'admin/permission/edit',
        'admin/permission/update',
        'admin/permission/destroy',
    ],
    '2' => [
        'admin/product/index',
        'admin/product/create',
        'admin/product/store',
        'admin/product/edit',
        'admin/product/update',
        'admin/product/status',
        'admin/product/destroy',
        'admin/product/uploadexcel',
        'admin/productcategory/index',
        'admin/productcategory/create',
        'admin/productcategory/store',
        'admin/productcategory/edit',
        'admin/productcategory/update',
        'admin/productcategory/status',
        'admin/productcategory/destroy',
        'admin/supplier/index',
        'admin/supplier/create',
        'admin/supplier/store',
        'admin/supplier/edit',
        'admin/supplier/update',
        'admin/supplier/status',
        'admin/supplier/destroy',
        'admin/productreview/manage_review',
        'admin/productreview/view_comment',
        'admin/productreview/reply_comment',
        'admin/productreview/status_comment',
        'admin/productreview/destroy_comment',
        'admin/productreview/child_comment'
    ],
    '3' => [
        'admin/customer/index',
        'admin/customer/create',
        'admin/customer/store',
        'admin/customer/edit',
        'admin/customer/update',
        'admin/customer/destroy',
    ],
    '4' => [
        'admin/warehouse/index',
        'admin/warehouse/create',
        'admin/warehouse/store',
        'admin/warehouse/edit',
        'admin/warehouse/update',
        'admin/warehouse/status',
        'admin/warehouse/destroy',
        'admin/warehouse/export',
        'admin/warehouse/import',
        'admin/warehouse/getProduct',
        'admin/warehouse/createImport',
        'admin/warehouse/insertImport',
    ],
    '5' => [
        'admin/orderhandling/index',
        'admin/orderhandling/update_status',
        'admin/orderhandling/show',
        'admin/orderhandling/edit',
        'admin/orderhandling/load_address',
        'admin/orderhandling/update_contact',
        'admin/orderhandling/load_contact',
        'admin/delivery/index',
        'admin/paymenttype/index',
        'admin/paymenttype/create',
        'admin/paymenttype/store',
        'admin/paymenttype/edit',
        'admin/paymenttype/update',
        'admin/paymenttype/status',
        'admin/paymenttype/destroy',
    ], 
    '6' => [
        'admin/blog/index',
        'admin/blog/create',
        'admin/blog/store',
        'admin/blog/edit',
        'admin/blog/update',
        'admin/blog/status',
        'admin/blog/destroy',
        'admin/blogcategory/index',
        'admin/blogcategory/create',
        'admin/blogcategory/store',
        'admin/blogcategory/edit',
        'admin/blogcategory/update',
        'admin/blogcategory/status',
        'admin/blogcategory/destroy',
        'admin/blogcomment/manage_review',
        'admin/blogcomment/view_comment',
        'admin/blogcomment/status_comment',
        'admin/blogcomment/destroy_comment',
    ]
];