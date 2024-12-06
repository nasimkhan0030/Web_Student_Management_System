<?php
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db_name = "schoolmanagementsystemdb";
$conn = mysqli_connect($host, $username, $password, $db_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
