<?php

/* Header Includes Start */
include('../functions/configuration.php');
include('../functions/general.php');
include('../functions/dbqueries.php');
include('../functions/authentication.php');
/* Header Includes Ends */

/* Main Part Start */
if(strlen($_GET['page']) > 0) { $page = $_GET['page'].'.php'; }
else { $page = "homepage.php"; }
if(file_exists('pages/'.$page)) {
    include('pages/' . $page);
}
else {
    include('pages/error-404.php');
}
/* Main Part End */

?>