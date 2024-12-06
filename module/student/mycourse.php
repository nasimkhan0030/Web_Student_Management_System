<?php  
include_once('main.php');
 $emn = $_REQUEST['classname'];


$sql = "SELECT DISTINCT id,name FROM course WHERE classid in (select id from class where  name='$emn') and studentid='$check'";
$rescourse = $conn->query($sql);

while($r=mysqli_fetch_array($rescourse))
{
 echo '<option value="',$r['id'],'" >',$r['name'],'</option>';

}


?>
