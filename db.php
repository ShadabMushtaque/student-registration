<?php
$host = 'localhost';
$user = 'root';
$pass = '1198';
$db = 'student';
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>