<?php

function generateToken($length) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $token = '';

    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, $charactersLength - 1);
        $token .= $characters[$randomIndex];
    }

    return $token;
}
?>