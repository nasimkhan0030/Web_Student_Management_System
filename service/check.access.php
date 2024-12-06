<?php
include_once('mysqlcon.php');
$myid=$_POST['myid'];
$mypassword=$_POST['mypassword'];
$myid = stripslashes($myid);
$mypassword = stripslashes($mypassword);
$myid = mysqli_real_escape_string($conn,$myid);
$mypassword = mysqli_real_escape_string($conn,$mypassword);
$_SESSION['login_id']=$myid;
$sql="SELECT usertype FROM users WHERE userid='$myid' and password='$mypassword'";
$result=$conn->query($sql);
$count=mysqli_num_rows($result);
$type=mysqli_fetch_array($result);
$control=$type['usertype'];
//echo $control;

if($count!=1 || !isset($control)){
    header("Location:../index.php?login=false");
}
else if($count==1 && $control=="admin"){
    header("Location:../module/admin/index.php");
}
else if($count==1 && $control=="teacher"){
    header("Location:../module/teacher");
}

else if($count==1 && $control=="student"){
    header("Location:../module/student");
}
else if($count==1 && $control=="staff"){
    header("Location:../module/staff");
}
else if($count==1 && $control=="parent"){
	 
    header("Location:../module/parent/index.php");
}
else {
    header("Location:../index.php?login=false");
}
?>
