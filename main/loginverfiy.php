<?php
$enteredPassword = 'password123'; // Replace with user input from login form
$hashedPasswordFromDB = '$2y$10$C8u6zqgfABz1B/pGZXO3LuB6t89iKZ.Vn2Mb80I/y3qpJs2VhDTKi'; // Example from DB

if (password_verify($enteredPassword, $hashedPasswordFromDB)) {
    echo "Login successful!";
} else {
    echo "Invalid credentials.";
}
?>