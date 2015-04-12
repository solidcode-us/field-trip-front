<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">
  <meta name="apple-mobile-web-app-capable" content="yes">
  
    <script type="text/javascript">
        (function(document,navigator,standalone) {
            // prevents links from apps from oppening in mobile safari
            // this javascript must be the first script in your <head>
            if ((standalone in navigator) && navigator[standalone]) {
                var curnode, location=document.location, stop=/^(a|html)$/i;
                document.addEventListener('click', function(e) {
                    curnode=e.target;
                    while (!(stop).test(curnode.nodeName)) {
                        curnode=curnode.parentNode;
                    }
                    // Condidions to do this only on links to your own app
                    // if you want all links, use if('href' in curnode) instead.
                    if('href' in curnode && ( curnode.href.indexOf('http') || ~curnode.href.indexOf(location.host) ) ) {
                        e.preventDefault();
                        location.href = curnode.href;
                    }
                },false);
            }
        })(document,window.navigator,'standalone');
    </script>
  <title>Field-Trip!&#153 Lifestyle Management</title>

  <meta name="description" content="Design and book your own unique experiences - from outdoor activities, travel packages, best places to eat, vacation rental, Private transportation, and concierge services." />
  
  <meta name="keywords" content="travel, outdoor activities, indoor activities, unique experiences, fun things to do, things to do for couples, things to do for family, group travel, travel packages, travel the world, do new things" />

<!-- Important CSS and JS files -->  
   
  <script  src="<?php echo base_url(); ?>public/assets/js/jquery.js"></script>
  <script  src="<?php echo base_url(); ?>public/assets/js/jquery-ui.js"></script>
  <link type="text/css" href="<?php echo base_url(); ?>public/assets/css/jquery-ui.css" rel="stylesheet" />
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/style_main.css"> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/style_desktop.css">  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/assets/css/font-awesome.min.css"> 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>
<!-- Important CSS and JS files END --> 
  <link rel="icon" type="image/png"  href="<?php echo base_url(); ?>public/assets/images/favicon.ico">
  <link rel="apple-touch-icon"  href="<?php echo base_url(); ?>public/assets/images/apple-touch-icon.png">

  <link href="<?php echo base_url(); ?>public/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/assets/css/style_responsive.css" rel="stylesheet">

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

<body style="margin:0; padding:0; height:100%;"><section class="row-fluid" style="padding-top:0;min-height:100%;position:relative;">
                    
<style type="text/css">
body, .wrap {background-color:#333;}
.wrap {padding:50px 0 60px;}
.container.login {max-width:300px;}
.container {max-width:500px; width:500px;}

.login {padding:50px 0;}
.ft-logo {
   display: block;
    height: auto;
    margin-bottom: 10px;
    margin-left: 0;
    margin-right: 0;
    margin-top: 0;
    text-align: center;
    width: 100%;
}
.ft-logo img {height:50px;}

.login .menu-list {
    border-bottom: 1px solid #666;
    border-top: medium none;
    margin:0;
}
.login-box {margin:10px 0 0;}
.login-box .btn {width:100%;margin-top:10px;}
.singup-box {color:#999;font-size:14px;padding:60px 0 0;}

.login .forgot {font-size: 12px;margin: 10px 0 0;text-align:right;}
.login .forgot a {color: #999;}

select, textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    background-color: transparent;
    color: #333;
    display: inline-block;
    font-size: 16px;
    font-weight: 400;
    height: auto;
    line-height: normal;
    margin: 0;
    padding: 0;
    vertical-align: middle;
	width:100%;
	-webkit-appearance: none;
    -moz-appearance: none;
	border: none;
	-webkit-box-shadow: inset 0px 0px 0px 0px rgba(255, 255, 255, 0);
	   -moz-box-shadow: inset 0px 0px 0px 0px rgba(255, 255, 255, 0);
			box-shadow: inset 0px 0px 0px 0px rgba(255, 255, 255, 0);
	-webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
	   -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
		 -o-transition: border linear 0.2s, box-shadow linear 0.2s;
			transition: border linear 0.2s, box-shadow linear 0.2s;
}
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus {
    border-color: #fff;
    box-shadow: none;
    outline: 0 none;
}

* {margin: 0;}
*, *:before, *:after {box-sizing: border-box;}
html,body {padding:0;text-shadow:none;height:100%;font-size:14px;}
header h1, header h2, header h3, header h4 {color:#777;}
.errorBorder{border: 1px solid red !important;}
</style>

<!-- Wrap -->
<section class="wrap"><div class="main-content">
