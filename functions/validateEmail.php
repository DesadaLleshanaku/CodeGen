<?php
function validateEmail($email) {
    // Use filter_var function to validate email format
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true; // Valid email address
    } else {
        return false; // Invalid email address
    }
}
?>