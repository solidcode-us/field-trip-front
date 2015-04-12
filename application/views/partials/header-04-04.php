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
  
  <script  src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script  src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
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
                    
<header class="main-white-nav">
  <div class="ft-logo-btn">
  	<a class="home-menu" href="#" style="background-image:url(<?php echo base_url(); ?>public/assets/images/logo_badge2.png);"></a>
  </div>

  <ul class="main-nav-menus">
    <li><a title="Itinerary" href="<?php echo base_url(); ?>itinerary"><img src="<?php echo base_url(); ?>public/assets/images/icons/calendar.png"/></a></li>
    <li><a title="Notification" href="<?php echo base_url(); ?>user/inbox"><img src="<?php echo base_url(); ?>public/assets/images/icons/inbox.png"/><span class="badge">9</a></li>
<!--    <li><a href="<?php echo base_url(); ?>guidebook">Guidebook</a></li>-->
  </ul>
  
  <div class="home-nav left-nav">
      <ul class="main-nav-submenus">
        <li><a href="<?php echo base_url(); ?>offers" title="Activities"><img src="<?php echo base_url(); ?>public/assets/images/icons/todo.png"/>Activities</a></li>
        <li><a href="<?php echo base_url(); ?>offers/food" title="Food"><img src="<?php echo base_url(); ?>public/assets/images/icons/food.png"/>Food</a></li>
        <li><a href="<?php echo base_url(); ?>offers/lodging" title="Lodging"><img src="<?php echo base_url(); ?>public/assets/images/icons/lodging.png"/>Lodging</a></li>
<!--        <li><a href="<?php echo base_url(); ?>offers/travel" title="Travel"><img src="<?php echo base_url(); ?>public/assets/images/icons/travel.png"/>Travel</a></li> --> 
        <li><a href="<?php echo base_url(); ?>offers/vacation" title="Vacations"><img src="<?php echo base_url(); ?>public/assets/images/icons/vacation.png"/>Vacations</a></li>
       
        <hr>
        <li><a href="<?php echo base_url(); ?>user/profile"><span class="main-nav-thumb" style="background-image:url(<?php echo base_url(); ?>public/assets/images/img_user_1.png);"></span> My Profile</a></li>
        <li><a href="<?php echo base_url(); ?>settings"><img src="<?php echo base_url(); ?>public/assets/images/icons/settings.png"/>Account Settings</a></li>
        <hr>
        <li><a href="<?php echo base_url(); ?>login" style="color:#f00;text-align:center;">Log Out</a></li>
      </ul>
  </div>

</header>

<style type="text/css">
* {margin: 0;}
*, *:before, *:after {
    box-sizing: border-box;
}
html,body {padding:0;text-shadow:none;height:100%;font-size:14px;}
header h1, header h2, header h3, header h4 {color:#555;}
.errorBorder{border: 1px solid red !important;}
</style>


<script type="text/javascript">
$(function() {	
	$('#acct-menu').click(function() {
		$('#acct-nav').toggle("slide", { direction: "right" }, 300);
		$('.left-nav').fadeOut();
	});

	$('.home-menu').click(function() {
		$('.home-nav').toggle("slide", { direction: "left" }, 300);
		$('.right-nav').fadeOut();
	});

	$('.wrap').click(function() {
		$('#acct-nav').fadeOut();
		$('.home-nav').fadeOut();
	});
});      
</script>

<!-- Wrap -->
<section class="wrap"><div class="main-content">
