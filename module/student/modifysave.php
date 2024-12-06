<?php  
include_once('main.php');
$password=$_REQUEST['password'];
$sql = "UPDATE students, users SET students.password='$password',users.password = '$password' WHERE students.id = users.userid AND students.id ='$check'";
$resmon = $conn->query($sql);
header('location:modify.php');
?>
