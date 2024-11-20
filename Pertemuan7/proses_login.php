<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_POST["username"];
$password = $_POST["password"]; // Password yang dimasukkan oleh 

if (password_verify($password, $hashed_password_from_database)) {

session_start();
$_SESSION["username"] = $username;

header("Location: dashboard.php");
} else {

echo "Username atau password salah. Coba lagi.";
}
}
?>