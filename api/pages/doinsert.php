<?php

    $insert = doinsert($_GET['table'], $_POST);
    if($insert) { echo "Success"; }
    else { echo "Failed"; }

?>