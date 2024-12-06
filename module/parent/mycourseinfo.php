<?php  
include_once('main.php');
 $id = $_REQUEST['id'];
 $childid = $_REQUEST['childid'];

$sql = "SELECT * FROM grade WHERE courseid='$id' and studentid='$childid'";
$resc = $conn->query($sql);

echo "<tr> <th>Grade</th> </tr>";
while($r=mysqli_fetch_array($resc))
{
 echo "<tr> <td>",$r['grade'],"<td></tr>";

}


?>
