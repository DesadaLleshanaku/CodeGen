<?php

function checklogin($username, $password){
    $checkauthentication = sql_select("SELECT `id` FROM `accounts` WHERE ((`username` = '".$username."' OR `emailaddress` = '".$username."') AND `password` = '".$password."') AND (`role` = 'admin' OR `role` = 'user')");
    if($checkauthentication) {
        $_SESSION["auth"] = "authenticated";
        $_SESSION["userid"] = $checkauthentication['id'];
        return true;
    }
    else {
        return false;
    }
}

function authenticated() {
    if($_SESSION["auth"] == "authenticated") {
        return true;
    }
    else {
        return false;
    }
}

function authenticatedpage() {
    if($_SESSION["auth"] == "authenticated") {
        $checkauthenticationkey = sql_select("SELECT `authenticationkey` FROM `accounts` WHERE `username` = '" . $_SESSION['userdata']['username'] . "'");
        if($checkauthenticationkey['authenticationkey'] != $_SESSION['userdata']['authenticationkey']){
            session_destroy();
            $_SESSION["auth"] = "failed";
            redirectto($GLOBALS['baseurl']."login");
        }
    }
    else {
        session_destroy();
        $_SESSION["auth"] = "failed";
        redirectto($GLOBALS['baseurl']."login");
    }
    return null;
}
function getuserdata() {
    if(isset($_SESSION['userid'])) {
        $userdata = sql_select("SELECT * FROM `accounts` WHERE `id` = '" . $_SESSION['userid'] . "'");
        $_SESSION['userdata'] = $userdata;
    }
}
getuserdata();

function adminlogin() {
    if($_SESSION['userdata']['role'] == 'admin') { return true; }
    else { return false; }
}
function userlogin() {
    if($_SESSION['userdata']['role'] == 'user') { return true; }
    else { return false; }
}

?>
