<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>">
    <!-- Load các thẻ meta -->
     <?php 

        if(!empty($dataMeta)){
            $this->view('blocks.admins.meta', $dataMeta); 
        }
            
     ?> 

    <!-- Title -->
    <title>
        <?php 
            echo !empty($page_title) ? $page_title : 'Dashboard';
         ?>
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT; ?>/public/admin/favicon/favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/admin/css/vendor.min.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/admin/vendor/icon-set/style.css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/admin/css/mycss.css">
    
    
    
    
    <!-- Load thư viện css cần sử dụng -->
     <?php 

        if(!empty($libraryCSS)){
            $this->view('blocks.admins.lib_css', $libraryCSS); 
        }
            
     ?> 

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/admin/css/theme.min.css?v=1.0">

    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/admin/css/sweetalert.css">
    <script src="<?php echo _WEB_ROOT; ?>/public/admin/js/sweetalert.js"></script>

  </head>

  <body class="   footer-offset">
    
    <script src="<?php echo _WEB_ROOT; ?>/public/admin/vendor/hs-navbar-vertical-aside/hs-navbar-vertical-aside-mini-cache.js"></script>

    <!-- load header -->
    <?php 

        if(!empty($data_header)){
            $this->view('blocks.admins.header', $data_header); 
        }else{
            $this->view('blocks.admins.header'); 
        }
            
    ?>
    
    <!-- load content --> 
    <?php 

        if(!empty($sub_content)){
            $this->view($content, $sub_content); 
        }else{
            $this->view($content); 
        }
            
    ?>

    <!-- load footer -->
    <?php 

        if(!empty($data_footer)){
            $this->view('blocks.admins.footer', $data_footer); 
        }else{
            $this->view('blocks.admins.footer'); 
        }
            
    ?>
    
    
    <!-- Load thư viện js cần sử dụng -->
     <?php 

        if(!empty($libraryJS)){
            $this->view('blocks.admins.lib_js', $libraryJS); 
        }
            
     ?>
     

    <!-- load script thêm -->
    <?php 

        if(!empty($data_js)){
            foreach ($data_js as $key => $value) {
                $this->view($value); 
            }
        }
            
    ?> 

</body>
</html>