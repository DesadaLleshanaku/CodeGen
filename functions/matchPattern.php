
<?php
function matchPattern($string, $pattern) {
    if (preg_match($pattern, $string)) {
        return true; // String matches the pattern
    } else {
        return false; // String does not match the pattern
    }
}

?>