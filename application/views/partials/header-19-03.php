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
        <script  src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script  src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

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

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner"><div class="container">
                    <!-- LOGO -->
                    <div class="logo-2">
                        <a href="<?php echo base_url(); ?>admin"><img src="<?php echo base_url() ?>/public/assets/images/logo.png"></a>
                    </div>
                    <!-- LOGO END -->
                    <?php  if ($this->ion_auth->logged_in()) { ?>
                    <ul class="nav">
                        <li class="divider-vertical"></li>      
                       <?php if(user_has_roll_view('Manage Tags','del')) { ?>   
                                <li  class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="">Manage Tags <b class="caret"></b></a>
                                     <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>tags/listing">Manage Tags</a></li>
                                        <li><a href="<?php echo base_url(); ?>tags/categories">Manage Tag Categories</a></li>
                                    </ul>
                                </li> 
                    <?php }  
                        if(user_has_roll_view('Manage Interests','del')){?>
                            <li><a href="<?php echo base_url(); ?>interests">Manage Interest Levels</a></li>
                
                    <?php } if(user_has_roll_view('Manage Users','del')){?>
                        <li  class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="">Manage Users <b class="caret"></b></a>
                             <ul class="dropdown-menu">

                                <li><a href="<?php echo base_url(); ?>users/listing">Manage Users</a></li>
                                <?php if(user_has_roll_view('Manage User Groups','del')){?>
                                <li><a href="<?php echo base_url(); ?>users/groups">Manage User Groups</a></li>
                                <?php } if(user_has_roll_view('Permissions','del')){?>
                                <li><a href="<?php echo base_url(); ?>permission">Permissions</a></li>
                                <?php }?>
                            </ul>
                        </li>
                    <?php } ?> 
                    </ul>
                     
                    <ul class="nav pull-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ucfirst($this->user->first_name); ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                               <li><a href="<?php echo base_url(); ?>users/edit_profile"  role="button">Edit Profile</a></li>
			     <li><a href="<?php echo base_url(); ?>users/change_passowrd"   class="am-remote-popup1">Change Password</a></li>
                                <li><a href="<?php echo base_url(); ?>account/logout">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                  <?php } ?> 
                </div></div>
        </div>


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

       <script type="text/javascript"
                src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDEsz793VJ7dX9nGm1LOuc2fqYtrQspQL8&sensor=false&libraries=places,geometry">
        </script>

        <script type="text/javascript">
            function get_locality(place)
            {
                var locality = false;

                var components = place.address_components;

                for (var r in components)
                {
                    if (components[r].types[0] == "locality")
                        locality = components[r].long_name;
                }

                return locality;
            }

            function get_country(place)
            {
                var country = false;

                var components = place.address_components;

                for (var r in components)
                {
                    if (components[r].types[0] == "country")
                        country = components[r].long_name;

                }
                return country;
            }

            function get_state(place)
            {
                var state = false;
                var components = place.address_components;
                for (var r in components)
                {
                    if (components[r].types[0] == "administrative_area_level_1")
                        state = components[r].short_name;
                }
                return state;
            }

            $(function() {

                var input = document.getElementById('address');
                var autocomplete = new google.maps.places.Autocomplete(input);
                google.maps.event.addListener(autocomplete, 'place_changed', function() {

                    var place = autocomplete.getPlace();
                  
                    if (place.name && place.name != "") {

                        $("#destination_small").val(place.name);
                    }
                    if (place.geometry) {
                        var lat = place.geometry.location.lat();
                        var lon = place.geometry.location.lng();
                    }else{
                        var lat = "";
                        var lon = "";
                    }
                        document.getElementById('lat').value = lat;
                        document.getElementById('lon').value = lon;
                        document.getElementById('locality').value = get_locality(place);
                        document.getElementById('country').value = get_country(place);
                        document.getElementById('state').value = get_state(place);
                    
                });
            });
        </script>

        <!-- Wrap -->
        <section class="wrap"><div class="container" style="padding-bottom:50px;">