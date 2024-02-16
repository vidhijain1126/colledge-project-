<?php
session_start();
$conn = new mysqli("localhost", "root", "", "sports_academy");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;

    header("Location: dashboard.php");
    exit();
} else {
    header("Location: login.html?error=invalid_credentials");
    exit();
}
?>
