</div>
<script defer src="<?php echo $GLOBALS['baseurl']; ?>semantic/semantic.min.js"></script>
<script defer src="<?php echo $GLOBALS['baseurl']; ?>scripts/slick.min.js"></script>
<script defer src="<?php echo $GLOBALS['baseurl']; ?>scripts/script.js"></script>
<?php if($GLOBALS['location']) { ?>
<script defer src="<?php echo $GLOBALS['baseurl']; ?>scripts/location.js"></script>
<script><?php if(!isset($_SESSION['longitude'])) { ?> getLocation(); <?php } ?></script>
<?php } ?>
<script defer src="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; if(isMobile()) { echo "/mobile"; } else { echo "/desktop"; } ?>/scripts/main.js"></script>
<script defer src="<?php echo $GLOBALS['baseurl']; ?>themes/<?php echo $GLOBALS['theme']; if(isMobile()) { echo "/mobile"; } else { echo "/desktop"; } ?>/scripts/printThis.js"></script>
<?php if(!isMobile()) { ?>
<script type="text/javascript">
    var $_Tawk_API={},$_Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/55bcc5d88e8770ff0c641e57/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<?php } ?>
</body>
</html>