<?php  
include_once('main.php');
 $em = $_REQUEST['cid'];


$sql = "SELECT * FROM teachers WHERE id in (select teacherid from course where id='$em' and studentid='$check')";
$rescou = $conn->query($sql);
$sql1= "SELECT * FROM class WHERE id in (select classid from course where id='$em' and studentid='$check')";
$rescoud = $conn->query($sql1);
$st=mysqli_fetch_array($rescoud);

while($rn=mysqli_fetch_array($rescou))
{
 echo "Teacher ID: ",$rn['id'],"<br/>";
 echo "Teacher Name: ",$rn['name'],"<br/>";
 echo "Teacher Email: ",$rn['email'],"<br/>";
  echo " Your Section : ",$st['section'],"<br/>";
  echo " Your Class Room : ",$st['room'],"<br/>";
 

}


?>
