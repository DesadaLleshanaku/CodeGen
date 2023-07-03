<?php
function sanitizeInput($input) {
    // Remove HTML tags and encode special characters
    $sanitizedInput = htmlspecialchars(strip_tags($input));
    return $sanitizedInput;
}
?>