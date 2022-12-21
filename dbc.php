<?php
// Report all errors except E_NOTICE
// This is the default value set in php.ini
error_reporting(E_ALL & ~E_NOTICE);
session_start();
$time = time();
global $con;

include_once("config.php");
include_once("functions.php");
// include_once("formlib.php");
// include_once("imageresizer.php");
// include_once("smtp-config.php");

$con = mysqli_connect($host, $dbuser, $password, $database);
if (!$con) {
	die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con, $database) or die(mysqli_error($con));

// $user = $_SESSION['user'];

// $url = $_SERVER['PHP_SELF'];
// $baseurl = getandreturn('setting', 'code', 'siteurl', 'value');
// $url = str_replace($baseurl . 'admin/', '', $url);
// $permaurl = '';
// $sorturl = '';
// $request_url = $_SERVER['REQUEST_URI'];
// $root_url = getandreturn('setting', 'code', 'root_url', 'value');
// $this_url = str_replace($root_url, '', $request_url);
// $this_url = explode('?', $this_url);
// $this_url = $this_url[0];
