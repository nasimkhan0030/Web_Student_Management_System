<?php  
include_once('main.php');
 $emn = $_REQUEST['classid'];


$sql = "SELECT distinct id , name FROM course WHERE classid='$emn' and teacherid='$check'";
$rescourse = $conn->query($sql);

while($r=mysqli_fetch_array($rescourse))
{
 echo $r['name'];

}


?>
