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


    <!-- Site Properities -->
    <meta name="generator" content="DocPad v6.78.1" />
    <title><?php echo $GLOBALS['projectname']; ?></title>

    <meta name="description" content="<?php echo $GLOBALS['projectdescription']; ?>" />
    <meta name="keywords" content="<?php echo $GLOBALS['projectkeywords']; ?>" />

    <!-- CSS Files -->
    <script>
        loadCSS("<?php echo $GLOBALS['baseurl']; ?>semantic/semantic.min.css");
        loadCSS("<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; if(isMobile()) { echo '/mobile'; } else { echo '/desktop'; } ?>/style/theme.css");
        loadCSS("<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; if(isMobile()) { echo '/mobile'; } else { echo '/desktop'; } ?>/style/extra.css");
        <?php if(!isMobile()) { ?> loadCSS("<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; ?>/desktop/style/scrollbar.css");<?php } ?>

        function loadCSS(href){
            var cb = function() {
                var l = document.createElement('link'); l.rel = 'stylesheet';
                l.href = href;
                var h = document.getElementsByTagName('head')[0]; h.parentNode.insertBefore(l, h);
            };
            var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
            if (raf) { raf(cb); } else { window.addEventListener('load', cb); }
        }
    </script>
    <noscript>
        <link rel="stylesheet" class="ui" href="<?php echo $GLOBALS['baseurl']; ?>semantic/semantic.min.css">
        <link rel="stylesheet" media="screen" title="Theme" href="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; if(isMobile()) { echo "/mobile"; } else { echo "/desktop"; } ?>/style/theme.css">
        <link rel="stylesheet" media="screen" href="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; if(isMobile()) { echo "/mobile"; } else { echo "/desktop"; } ?>/style/extra.css">
        <?php if(!isMobile()) { ?>
            <link rel="stylesheet" href="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; ?>/desktop/style/scrollbar.css">
        <?php } ?>
    </noscript>
    <!-- JavaScript Files -->
    <script async src="<?php echo $GLOBALS['baseurl']; ?>scripts/jquery-1.11.2.min.js"></script>

</head>
<body>
<div class="ui inverted dimmer"><div class="ui text loader">Please allow location</div></div>