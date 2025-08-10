<?php
session_start();

// Check if the user is logged in (you can modify this check based on your authentication method)
if (isset($_SESSION['user_id'])) {
    // Clear the session data
    session_unset();
    session_destroy();
    header('Location: login.html'); // Redirect to the login page or any other page
    exit();
} else {
    // If the user is not logged in, redirect to the login page
    header('Location: login.html'); // Redirect to the login page or any other page
    exit();
}
?>
