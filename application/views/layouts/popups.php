<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <?php
        if (!isset($title)): $title = "Admin Panel";
        endif;
        ?>
        <title><?php echo $title; ?> | Field-Trip!&#153</title>
        <meta name="description" content="Authorized Personel Only" />
        <meta name="keywords" content="" />
        <!-- Important CSS and JS files -->    

          <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/bootstrap-timepicker.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/style.css">  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
                <!-- Important CSS and JS files END --> 
        <link rel="icon" type="image/png"  href="<?php echo base_url(); ?>public/assets/images/favicon.ico">
        <link rel="apple-touch-icon"  href="<?php echo base_url(); ?>public/assets/images/apple-touch-icon.png">
        <link href="<?php echo base_url(); ?>public/assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url(); ?>public/assets/css/select2.css"/>

        <script  src="<?php echo base_url(); ?>public/assets/js/jquery.js"></script>
        <script  src="<?php echo base_url(); ?>public/assets/js/jquery-ui.js"></script>
        <link type="text/css" href="<?php echo base_url(); ?>public/assets/css/jquery-ui.css" rel="stylesheet" />
        <script src="<?php echo $this->config->base_url(); ?>public/assets/js/select2.js"></script>
        <script src="<?php echo $this->config->base_url(); ?>public/assets/js/common_functions.js"></script>
        <script src="<?php echo $this->config->base_url(); ?>public/assets/js/bootstrap-timepicker.min.js"></script>

         
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>public/assets/masterslider/jquery.easing.min.js"></script>

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png"> 
    </head>
    <body style="margin:0; padding:0; height:100%;"> 
        <style type="text/css">
            * {margin: 0;}
            *, *:before, *:after {
                box-sizing: border-box;
            }
            html,body {padding:0;text-shadow:none;height:100%;font-size:14px;}
            header h1, header h2, header h3, header h4 {color:#777;}
            .errorBorder{border: 1px solid red !important;}

            .btn-lg {
                font-weight: 700;
                padding: 10px 30px;
                text-transform: uppercase;
            }
        </style>
        <!-- Wrap -->
        <section class="wrap"><div class="container" style="padding-bottom:10px;">

		<?php 	echo isset($template['body'])? $template['body'] : "";?>
		</section><!-- Wrap End-->  
	</body> 
</html> 
 