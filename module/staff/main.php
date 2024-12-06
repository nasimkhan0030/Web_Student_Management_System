<?php
include_once('../../service/mysqlcon.php');
$check=$_SESSION['login_id'];
$sql="SELECT name  FROM staff WHERE id='$check' ";
$session=$conn->query($sql);
$row=mysqli_fetch_array($session);
$login_session = $loged_user_name = $row['name'];
if(!isset($login_session))
{
header("Location:../../");
}

?>
