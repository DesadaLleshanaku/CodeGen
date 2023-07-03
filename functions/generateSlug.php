<?php
function generateSlug($string) {
    // Convert the string to lowercase
    $string = strtolower($string);

    // Remove unwanted characters and spaces
    $string = preg_replace('/[^a-z0-9]+/', '-', $string);
    $string = trim($string, '-');

    // Replace consecutive dashes with a single dash
    $string = preg_replace('/-+/', '-', $string);

    return $string;
}

?>