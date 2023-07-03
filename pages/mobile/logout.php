<?php
pagetitle("Logout");
session_destroy();
$_SESSION["backend"]["auth"] = "failed";
redirectto($GLOBALS['baseurl']);

?>