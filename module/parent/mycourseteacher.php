<?php  
include_once('main.php');
 $cid = $_REQUEST['cid'];
 $childid = $_REQUEST['childid'];
$sql = "SELECT * FROM teachers WHERE id in (select teacherid from course where id='$cid' and studentid='$childid')";
$rescou = $conn->query($sql);
$sql= "SELECT * FROM class WHERE id in (select classid from course where id='$cid' and studentid='$childid')";
$rescoud = $conn->query($sql);
$st= mysqli_fetch_array($rescoud);

while($rn=mysqli_fetch_array($rescou))
{
 echo "Teacher ID: ",$rn['id'],"<br/>";
 echo "Teacher Name: ",$rn['name'],"<br/>";
 echo "Teacher Email: ",$rn['email'],"<br/>";
  echo " Your Section : ",$st['section'],"<br/>";
  echo " Your Class Room : ",$st['room'],"<br/>";
 

}
 




?>
