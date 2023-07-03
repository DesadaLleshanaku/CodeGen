<div class="header">
    <div class="header-main">
        <div class="container">
            <div class="ui grid headercontent">
                    <div class="eight wide column">
                        <a href="<?php echo $GLOBALS['baseurl']; ?>">Code Generator - PHP library</a>
                    </div>
                    <div class="eight wide column right aligned">
                    <?php if(authenticated()) { ?>
                        <div class="ui divided relaxed horizontal list">
                            <div class="item custom">
                                <i class="big user icon"></i>
                                <div class="content">
                                    <div class="header"><?php echo $_SESSION['userdata']['firstname']; ?></div>
                                    <?php if(adminlogin()){ echo "Role: ".$_SESSION['userdata']['role']; } ?>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="ui divided relaxed horizontal list">
                           
                        </div>
                        <div class="right aligned" style="margin-right: 15px;"></div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">