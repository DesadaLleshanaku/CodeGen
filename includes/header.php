<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <link rel="image_src" type="image/jpeg" href="<?php echo $GLOBALS['baseurl']; ?>images/design/logo.png" />
    <link rel="shortcut icon" href="<?php echo $GLOBALS['baseurl']; ?>images/design/favicon.ico" type="image/x-icon" />

    <!-- Robots -->

    <?php if($_SERVER['REQUEST_URI'] == "/login") { ?>
        <meta name="robots" content="noindex, nofollow">
    <?php } else { ?>
        <meta name="robots" content="index, follow">
    <?php } ?>

    <!-- Site Properities -->
    <meta name="generator" content="DocPad v6.78.1" />
    <title><?php echo pagetitle(); ?></title>

    <!-- Google Tags -->
    <meta name="keywords" content="<?php echo $GLOBALS['projectkeywords']; ?>" />
    <meta name="rights" content="copyright Malla Technologies" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="<?php echo $GLOBALS['projectdescription']; ?>" />
    <meta name="generator" content="Web Design Brisbane" />
    <meta name="author" content="Malla Technologies">
    <meta name="geo.region" content="AU-QLD" />
    <meta name="geo.placename" content="Brisbane" />
    <meta name="geo.position" content="-27.4703144;153.0305647" />
    <meta name="ICBM" content="-27.4703144, 153.0305647" />
    <meta name="google-site-verification" content="qfwWq9B6_dReDgk55k2Cfuit_r4vCdGKd0g2jeHi63E" />
    <meta name="msvalidate.01" content="606B6A183539D4FF4B24FB67081F7A92" />

    <!-- Facebook Tags -->


    <!-- CSS Files -->
        <link rel="stylesheet" class="ui" href="<?php echo $GLOBALS['baseurl']; ?>semantic/semantic.min.css">
        <link rel="stylesheet" media="screen" title="Theme" href="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; if(isMobile()) { echo "/mobile"; } else { echo "/desktop"; } ?>/style/theme.css">
        <link rel="stylesheet" href="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; if(isMobile()) { echo "/mobile"; } else { echo "/desktop"; } ?>/style/extra.css">
        <?php if(isMobile()) { ?>
            <link rel="stylesheet" href="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; ?>/mobile/style/slick.css">
            <link rel="stylesheet" href="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; ?>/mobile/style/slick-theme.css">
        <?php } else { ?>
            <link rel="stylesheet" href="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; ?>/desktop/style/scrollbar.css">
        <?php } ?>
    <!-- JavaScript Files -->
    <script src="<?php echo $GLOBALS['baseurl']; ?>scripts/jquery-1.11.2.min.js"></script>
</head>
<body>
<?php googleanalytics(); ?>
<div class="ui inverted dimmer"><div class="ui text loader">Please allow location</div></div>