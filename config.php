<?php
$host = 'localhost'; // please enter your domain
$dbuser = 'pma_user'; // please update with your database user
$password = 'pma_password'; // update with your database password
$database = 'rudraksh-yaan-db';

$projectname = '';

global $con;

$root = '/';
$title = "AAA";
$signature = ' - Gold Coast Eisteddfod';
$meta_des = '';
$meta_key = '';

if ($_SERVER['HTTP_HOST'] == "goldcoasteisteddfod.gcwebdesign.com.au") {
    define("ENV", "Production");
    define("ADMIN_EMAIL", "mail@goldcoasteisteddfod.gcwebdesign.com.au");
} else if ($_SERVER['HTTP_HOST'] == "goldcoasteisteddfod.com.au") {
    define("ENV", "Live");
    define("ADMIN_EMAIL", "darren@gcweb.com.au");
} else {
    define("ENV", "Local");
    define("ADMIN_EMAIL", "phpsmoker@gmail.com");
}

if (ENV == "Live") {
    $curr_site_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
        "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . '/2021/';
} else if (ENV == "Production") {
    $curr_site_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
        "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . '/';
} else {
    $curr_site_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
        "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . '/';
}

$modules = array('convenors', 'event_details', 'reports', 'performance_dates', 'board');

$sub_modules = array('reports' => array('export-dance-candidates.php', 'export-dance-room.php', 'export-email.php', 'export-list-noprogram.php'));

$list_pagetype = array('text', 'php', 'company', 'industry', 'product');
$default_pagetype = 'text';

$list_states = array('QLD', 'NSW', 'VIC', 'ACT', 'SA', 'NT', 'WA', 'TAS');
$default_state = 'QLD';

//$list_gateway=array('Paypal','Direct Deposit','Cheque');
$list_gateway = array('Paypal', 'Direct Deposit');
$default_gateway = 'Paypal';

$list_newstype = array('news', 'event');
$default_newstype = 'news';

$list_type = array('individual', 'Group');
$default_type = 'individual';

$list_pagestatus = array('published', 'draft', 'pending', 'expired', 'trash');
$default_pagestatus = 'pending';

$music_stage = array('On stage', 'Off stage');

$list_dprt = array('general', 'billing');
$default_dprt = 'general';

$list_boolean = array('No', 'Yes');
$default_boolean = 'No';

$list_sendtype = array('Emailed', 'Posted');
$default_sendtype = 'Emailed';

$themes = array('bootstrap', 'cerulean', 'cosmo', 'cyborg', 'darkly', 'flatly', 'journal', 'lumen', 'paper', 'readable', 'sandstone', 'simplex', 'slate', 'spacelab', 'superhero', 'united', 'yeti');
$elements_color = 'primary';

$list_categories = array('Top Sellers', 'Large Format', 'Print Products', 'Packaging', 'Stationery', 'Labels', 'Direct Mail', 'Promotional', 'Office Materials', 'Others');
$default_category = 'Others';

$list_sendfiles = array('Stage_plan');
$today_date = date("Y-m-d");
