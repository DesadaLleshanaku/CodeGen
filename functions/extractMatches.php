<?php

function extractMatches($string, $pattern) {
    $matches = [];
    preg_match_all($pattern, $string, $matches);
    return $matches[0];
}


?>