
<div class="ui pointing menu">
    <?php if(authenticated()) { ?>
    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>">
        <i class="home icon"></i> Home
    </a>
    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>dashboard">
        <i class="idea icon"></i> Dashboard
    </a>
    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>clients">
        <i class="settings icon"></i> Clients
    </a>
    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>sendemails">
        <i class="settings icon"></i> Send Emails
    </a>
    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>add-blog">
        <i class="connectdevelop icon"></i> Add Blog
    </a>
    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>invoice">
        <i class="money icon"></i> Invoice
    </a>
    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>contact">
        <i class="mail icon"></i> Contact us
    </a>
    <div class="right menu">
        <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>logout">
            <i class="lock icon"></i>Logout
        </a>
    </div>
<?php } 
else { ?>
    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>">
        <i class="home icon"></i> Home
    </a>

<div class="ui pointing dropdown link item">
        <span class="text"></i>Validations</span>
        <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>validateEmail">validateEmail</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>sanitizeInput">sanitizeInput</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>validateFile">validateFile</a>
        </div>
    </div>


    <div class="ui pointing dropdown link item">
        <span class = 'db-logo'></i>Database</span>
        <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>sqlinsert">SQL Insert</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>sqlselect">SQL Select</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>sqlupdate">SQL Update</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>sqldelete">SQL Delete</a>
        </div>
    </div>


    <div class="ui pointing dropdown link item">
          </i>Security</span>
        <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>encryptData">encryptData</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>decryptData">decryptData</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>authenticatedpage">Authenticated Page</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>hashPassword">hashPassword</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>generateToken">GenerateToken</a>
        </div>
    </div>

    
    <div class="ui pointing dropdown link item">
          </i>Utility</span>
        <i class="dropdown icon"></i>
        <div class="menu">
             <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>pagetitle">Page Title</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>resizeImage">resizeImage</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>sendHTTPRequest">sendHTTPRequest</a>
        </div>
    </div>

    
       <div class="ui pointing dropdown link item">
          </i>Strings</span>
        <i class="dropdown icon"></i>
        <div class="menu">
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>generateSlug">generateSlug</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>truncateText">truncateText</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>matchPattern">matchPattern</a>
            <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>extractMatches">extractMatches</a>
        </div>
    </div>

    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>generate">createform</a>
    <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>contact">Contact Us</a>
    
    <div class="right menu">
        <a class="item" href="<?php echo $GLOBALS['baseurl']; ?>login">
            <i class="lock icon"></i> Client Login
        </a>
    </div>
    
<?php 
} 
?>
</div>