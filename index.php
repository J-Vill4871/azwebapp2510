<?php
// Function to check password strength
function checkPasswordStrength($password) {
    // Minimum length requirement
    $minLength = 8;

    // Check if the password meets the minimum length
    if (strlen($password) < $minLength) {
        return "Password must be at least $minLength characters long.";
    }

    // Check for uppercase letters
    if (!preg_match('/[A-Z]/', $password)) {
        return "Password should contain at least one uppercase letter.";
    }

    // Check for lowercase letters
    if (!preg_match('/[a-z]/', $password)) {
        return "Password should contain at least one lowercase letter.";
    }

    // Check for numbers
    if (!preg_match('/[0-9]/', $password)) {
        return "Password should contain at least one number.";
    }

    // Check for special characters (optional)
    if (!preg_match('/[^A-Za-z0-9]/', $password)) {
        return "Password should contain at least one special character.";
    }

    // Password is strong
    return "Password is strong!";
}

// Example usage
$userPassword = "MySecureP@ssw0rd";
$result = checkPasswordStrength($userPassword);
echo $result;
?>
