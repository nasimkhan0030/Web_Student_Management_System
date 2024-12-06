<?php  
include_once('main.php');
$password=$_REQUEST['password'];
$sql = "UPDATE parents,users SET parents.password='$password',users.password = '$password' WHERE parents.id = users.userid AND parents.id ='$check'";
$resmon = $conn->query($sql);
header('location:modify.php');
?>
