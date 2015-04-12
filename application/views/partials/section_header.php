<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">

  <title>Admin Panel | Field-Trip!&#153</title>

  <meta name="description" content="Authorized Personel Only" />
  
  <meta name="keywords" content="" />

<!-- Important CSS and JS files -->  
  
  <script  src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script  src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
  <script  src="<?php echo base_url(); ?>public/assets/js/jquery.js"></script>
  <script  src="<?php echo base_url(); ?>public/assets/js/jquery-ui.js"></script>
  <link type="text/css" href="<?php echo base_url(); ?>public/assets/css/jquery-ui.css" rel="stylesheet" />
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/style.css"> 

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/font-awesome.min.css">  

  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>/public/assets/css/jquery.mmenu.all.css"/>
  <script  src="<?php echo base_url(); ?>public/assets/js/jquery.mmenu.min.all.js"></script>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<!-- Important CSS and JS files END --> 
  <link rel="icon" type="image/png"  href="<?php echo base_url(); ?>public/assets/images/favicon.ico">
  <link rel="apple-touch-icon"  href="<?php echo base_url(); ?>public/assets/images/apple-touch-icon.png">
  <link href="<?php echo base_url(); ?>public/assets/css/bootstrap-responsive.css" rel="stylesheet">

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

<body style="margin:0; padding:0; height:100%; position:relative;">
<div class="row-fluid" style="min-height:100%; position: absolute; padding-bottom:60px;">

<style type="text/css">
body {background-color:#EEE;}

.logo {
    display: block;
    float: none;
    margin: 0 0 10px;
    padding: 0;
    text-align: center;
    width: auto;
}
.logo img { height:55px;margin:0 auto;}

.container.small {width:350px;padding:30px 20px;color:#fff;}
.container.mid { width:600px;padding:30px 20px;color:#fff;}
.container.large{ width:1024px;padding:30px 20px;color:#fff;}

.login-div, .signup-div {
    background-color: #FFFFFF;
    border: 1px solid #DEDEDE;
	border-bottom: 2px solid #DEDEDE;
    border-radius: 5px;
	color:#555;
    font-size: 14px;
    margin-bottom:0;
    margin-left: auto;
    margin-right: auto;
    overflow: hidden;
    padding: 15px;
	width:100%;
	-webkit-border-radius:6px;
	   -moz-border-radius:6px;
			border-radius:6px;
}

input[type="text"],
input[type="email"],
input[type="password"] {width:90%;}

.signup-div select + select {margin-left:3%;}

.field-group {float:left; width:100%; display:block; margin-bottom:20px;}
.field-group .field {float: left;padding-right: 15px;width: 50%;}
.field-group .field + .field {padding-right:0;padding-left:10px;}

.field-group .input-prepend {width:100%;}

.input-append .add-on, .input-prepend .add-on {width:30px;}

@media (min-width: 320px) and (max-width: 599px){
h1 {font-size:24px;}
.container.small, .container.mid, .container.large{width:100%;padding:10px;}
.field-group .field {width:100%;padding:0;}
.field-group .field + .field {padding:0;margin-top:15px;}
.col-2 {width:100%;padding:0;}
.col-2 + .col-2 {margin-left:0;}
}

@media (min-width: 600px) and (max-width: 1024px){
.container.large{width:100%;}
}

* {margin: 0;}
*, *:before, *:after {
    box-sizing: border-box;
}
html,body {padding:0;text-shadow:none;height:100%;font-size:14px;}
header h1, header h2, header h3, header h4 {color:#777;}
.errorBorder{border: 1px solid red !important;}
</style>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/bootstrap-datetimepicker.min.css">
<script  src="<?php echo base_url(); ?>public/assets/js/bootstrap-datetimepicker.min.js"></script>
