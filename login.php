<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Dummy credentials for validation
$valid_username = "admin";
$valid_password = "password123";

if ($username === $valid_username && $password === $valid_password) {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}
?>
