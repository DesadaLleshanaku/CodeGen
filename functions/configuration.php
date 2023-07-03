<?php
ob_start();
SESSION_START();

$baseurl = "https://www.sites.lleshanaku.com/codegen/";
$projectname = "Code Generator";
$projectdescription = "Generates code quickly and securely.";
$projectkeywords = "Code Generator, Code Developer";
$timezone = "Australia/Brisbane";
date_default_timezone_set($timezone);
$currenturl = "https://www.".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$datetime = new DateTime('now');
$currenttime = $datetime->format('Hi');
$todaydate = $datetime->format('Ymd');
$fulldate = $datetime->format('YmdHi');

/* Error Reporting */

error_reporting(0);

/* Database details */

$dbhost = "localhost";
$dbuser = "mt_desada";
$dbpass = "36JEuXlXWVJ8";
$dbname = "mt_mydb";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

/* Special Settings */

$allowindexing = false;
$theme = "mt_default";
$multilogin = false;
$mobile = true;
$location = false;

?>