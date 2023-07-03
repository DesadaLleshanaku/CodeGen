<?php

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    else if(isset($_GET['username']) && isset($_GET['password'])) {
        $username = $_GET['username'];
        $password = $_GET['password'];
    }

    if(checklogin($username, $password)) {
        $arr = array( 'response' => 'authenticated' );
        echo json_encode($arr);
    }
    else {
        $arr = array ( 'response' => 'failed' );
        echo json_encode($arr);
    }

?>