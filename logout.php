<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

session_start();

$_SESSION = [];

session_destroy();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.html");
    exit();
}
?>