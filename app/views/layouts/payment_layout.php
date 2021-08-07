<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
        <?php 
            echo !empty($page_title) ? $page_title : 'Dashboard';
         ?>
        </title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo _WEB_ROOT; ?>/public/vnpay/bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link href="<?php echo _WEB_ROOT; ?>/public/vnpay/jumbotron-narrow.css" rel="stylesheet">  
        <script src="<?php echo _WEB_ROOT; ?>/public/vnpay/jquery-1.11.3.min.js"></script>
    </head>

    <body>
            <?php
                if(!empty($sub_content)){
                    $this->view($content, $sub_content); 
                }else{
                    $this->view($content); 
                }

            ?>

          
        <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
        <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
        

    </body>
</html>
