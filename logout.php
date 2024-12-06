<?php
// Start the session
session_start();

// Check if the session is already initialized
if (session_status() === PHP_SESSION_ACTIVE) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();
}
    header("Location: index.php");
    exit();