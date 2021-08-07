<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="<?php echo csrf_token() ?>">
    <!-- Load các thẻ meta -->
    <?php 

        if(!empty($dataMeta)){
            $this->view('blocks.clients.meta', $dataMeta); 
        }
            
    ?>

    <!-- Title -->
    <title>
        <?php 
            echo !empty($page_title) ? $page_title : 'Trang chủ';
         ?>
    </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo _WEB_ROOT; ?>/public/clients/images/favicon.ico">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>

    <!-- CSS Style -->

    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/clients/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/clients/css/styles.css" type="text/css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/clients/css/revslider.css" type="text/css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/clients/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/clients/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/clients/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/clients/css/buttonLoader.css" type="text/css">
  
    
    
    <!-- Load thư viện css cần sử dụng -->
     <?php 

        if(!empty($libraryCSS)){
            $this->view('blocks.clients.lib_css', $libraryCSS); 
        }
            
     ?> 

    <link rel="stylesheet" href="<?php echo _WEB_ROOT; ?>/public/admin/css/sweetalert.css">
    <script src="<?php echo _WEB_ROOT; ?>/public/admin/js/sweetalert.js"></script>

  </head>

  <body class="cms-index-index">

    <!-- Load thư viện js cần sử dụng -->
     <?php 

        if(!empty($libraryJS)){
            $this->view('blocks.clients.lib_js', $libraryJS); 
        }
            
     ?> 

    <!-- load header -->
    <?php 

        if(!empty($data_header)){
            $this->view('blocks.clients.header', $data_header); 
        }else{
            $this->view('blocks.clients.header'); 
        }
            
    ?>

    <!-- load slider -->
    <?php 

        if(!empty($data_slider)){
            $this->view('blocks.clients.slider', $data_slider); 
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
            $this->view('blocks.clients.footer', $data_footer); 
        }else{
            $this->view('blocks.clients.footer'); 
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