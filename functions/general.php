<?php

/**
 * Created by PhpStorm.
 * User: km
 * Date: 8/04/2015
 * Time: 1:55 PM
 */

/* This function processes Insert Queries */
function con_dateformat($input) {
    return date("d/m/Y", strtotime($input));
}

function writeerror($error) {
    $file = '/reports/errors/sql_errors.txt';
    $current = file_get_contents($file);
    $current .= $error . "\n";
    file_put_contents($file, $current);
}

function redirectto($page) {
    header("Location: ".$page);
    die();
    return null;
}

function pagetitle() {
     return $GLOBALS['projectname'] . " - ";
}

function pagedescription($description) {
        echo '<script>
        var meta=document.getElementsByTagName("meta");
        for (var i=0; i<meta.length; i++) {
            if (meta[i].name.toLowerCase()=="description") {
                meta[i].content="'.$description.'";
            }
        }
        </script>';
    return null;
}

function pagekeywords($keywords) {
        echo '<script>
        var meta=document.getElementsByTagName("meta");
        for (var i=0; i<meta.length; i++) {
            if (meta[i].name.toLowerCase()=="keywords") {
                meta[i].content="'.$keywords.'";
            }
        }
        </script>';
    return null;
}

function gethash($length = 32) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function isMobile() {
    if((preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])) && ($GLOBALS['mobile'])) {
        return true;
    }
    else {
        return false;
    }
}

function checkimagesize($image) {
    if($image < 1000000) { return true; }
    else { return false; }
}

function uploadimage($image, $name) {
    $uploadfile = "images/blog/".$name.".jpg";
    move_uploaded_file($image, $uploadfile);
}

function getimage($imagekey, $image = "logo") {
    $imagelocation = "images/uploads/".$imagekey."/".$image.".jpg";
    if(file_exists($imagelocation)) {
        return $imagelocation."?id=".$GLOBALS['fulltime'];
    }
    else {
        return "images/wireframe/white-image.png";
    }
}

function callurl($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($retcode == 200) {
        return true;
    }
    else {
        return false;
    }
}

function createform($data) {
    $formdata = explode(",", $data);
    $output .= '<form method="post" class="ui form">';
    foreach($formdata as $form) {
        if(strpos($form, "text") !== false) {
            $output .= '<div class="field">';
            $form = str_replace("text-", "", $form);
            $trimmedform = str_replace(" ", "", $form);
            $output .= '<input type="text" placeholder="'.$form.'" name="'.strtolower($trimmedform).'" />';
            $output .= '</div>';
        }
    }
    $output .= '<div class="field">';
    $output .= '<button>Submit</button>';
    $output .= '</div>';
    $output .= '</form>';
    echo $output;
}
function googleanalytics() {
    echo "<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
              ga('create', 'UA-49956991-1', 'auto');
              ga('send', 'pageview');
        </script>";
}


function encryptData($data, $key) {
    $ivLength = openssl_cipher_iv_length('AES-256-CBC');
    $iv = openssl_random_pseudo_bytes($ivLength);
    $encrypted = openssl_encrypt($data, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
    $encryptedData = base64_encode($iv . $encrypted);
    return $encryptedData;
}

function decryptData($encryptedData, $key) {
    $encryptedData = base64_decode($encryptedData);
    $ivLength = openssl_cipher_iv_length('AES-256-CBC');
    $iv = substr($encryptedData, 0, $ivLength);
    $encrypted = substr($encryptedData, $ivLength);
    $decrypted = openssl_decrypt($encrypted, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
    return $decrypted;
}


?>
