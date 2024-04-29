<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.html"); // Redirect to admin login page if not logged in
    exit();
}

// Your delete reservation logic here
// This script should handle deleting reservations from the database
?>
