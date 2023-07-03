<?php

    if(isset($_GET['longitude']) && isset($_GET['latitude'])) {
        $longitude = $_GET['longitude'];
        $latitude = $_GET['latitude'];
        //$_SESSION['longitude'] = $longitude;
        //$_SESSION['latitude'] = $latitude;
        $arr = array( 'response' => 'located', 'longitude' => $longitude, 'latitude' => $latitude );
        echo "SETTINGS = ".json_encode($arr);
    }
    else {
        $arr = array ( 'response' => 'failed' );
        echo json_encode($arr);
    }

?>