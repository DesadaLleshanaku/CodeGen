<?php

/* Header Includes Start */
include('functions/configuration.php');
include('functions/general.php');
include('functions/dbqueries.php');
include('functions/settings.php');
include('functions/authentication.php');
include('includes/header.php');
/* Header Includes Ends */

include('themes/' . $GLOBALS['theme'] . '/desktop/header.php');
include('themes/' . $GLOBALS['theme'] . '/desktop/menu-item.php');
include('themes/' . $GLOBALS['theme'] . '/desktop/slider.php');

/* Header Includes Ends */

echo '<div class="ui segment wrapper">';
/* Main Part Start */
if (strlen($_GET['page']) > 0) {
    $page = $_GET['page'] . '.php';
} else {
    $page = "homepage.php";
}
if (file_exists('pages/desktop/' . $page)) {
    include('pages/desktop/' . $page);
} else {
    include('pages/desktop/error-404.php');
}
/* Main Part End */

echo '</div>';

include('themes/' . $GLOBALS['theme'] . '/desktop/footer.php');

/* Footer Includes Start */
include('includes/footer.php');
/* Footer Includes Ends */
?>