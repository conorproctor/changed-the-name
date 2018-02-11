<?php
include 'connection.php';
session_start();
if (isset($_POST['username'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$password = $_POST['full_name'];

$login = $mysqli->query("SELECT * FROM users WHERE username = '$username' AND password = '.md5($password).' AND full_name = '".md5($full_name)."'");
if ($login->num_rows <= 1) {
$_SESSION['username'] = $username;
header("Location: index.php");
} else {
echo $mysqli->error;
}
}
?>
