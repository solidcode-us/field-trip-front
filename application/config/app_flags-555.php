<?php
/*
This is a configuration file, having most of the app's flags, which could be numeric or charcters.
This is being used to avoid magic numbers directly on the application.
*/

//General Settings
$config['separator'] = "____";

//Experience Types Flags
$config['experience_vacation'] = 1;
$config['experience_event'] = 2;
$config['experience_adventure'] = 3;
$config['experience_activity'] = 4;

//Card Types Priority Type
$config['primary'] = 1;
$config['alternate'] = 0;

if($_SERVER['HTTP_HOST'] == 'local.cms-field-trip')
{
    $config['ft_live_login_url'] = 'http://local.cms-field-trip/login';
    $config['ft_pages_url'] = 'http://local.cms-field-trip/';
    $config['cdn_images_http_path'] = "http://local.cms-field-trip/public/assets/user_uploads/experience/";
    $config['cdn_images_server_path'] = "public/assets/user_uploads/experience/";
    
    
}else
{

    $config['ft_live_login_url'] = 'http://solidcode.field-trip.com/login';
    $config['ft_pages_url'] = 'http://solidcode.field-trip.com/';
    $config['cdn_images_http_path'] = "http://images.field-trip.com/";
    $config['cdn_images_server_path'] = "/home/admin/public_html/images/";
}

// for activity creation

$config['any_max_age_value'] = 0;

// % of tax

$config['tax'] = 20;

$config['group_megadmin'] = 1;
$config['group_admin'] = 2;
$config['group_vendor'] = 3;
#$config['group_curator'] = 4;
#$config['group_taggers'] = 5;
#$config['group_coordinator'] = 6;
#$config['group_account_manager'] = 7;



// Suspend

$config['not_suspend'] = 0;
$config['suspend'] = 1;