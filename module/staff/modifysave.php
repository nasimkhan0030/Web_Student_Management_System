<?php  
include_once('main.php');
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$address=$_REQUEST['address'];

$sql = "UPDATE staff, users SET staff.phone = '$phone', staff.email='$email',staff.password='$password',staff.address='$address',users.password = '$password' WHERE staff.id = users.userid AND staff.id ='$check'";
$resmon = $conn->query($sql);


header('location:modify.php');
?>
