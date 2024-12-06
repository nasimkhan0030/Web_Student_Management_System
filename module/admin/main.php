<?php
include_once('../../service/mysqlcon.php');
$check=$_SESSION['login_id'];
$sql="SELECT name  FROM admin WHERE id='$check'";
$query=$conn->query($sql);
$row=mysqli_fetch_array($query);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session)){
    header("Location:../../");
}
?>
