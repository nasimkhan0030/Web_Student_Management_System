<?php  
include_once('main.php');
 $em = $_REQUEST['id'];


$sql = "SELECT * FROM grade WHERE courseid='$em' and teacherid='$check'";
$resc = $conn->query($sql);

echo "<tr> <th>Grade</th> </tr>";
while($r=mysqli_fetch_array($resc))
{
 echo "<tr> <td>",$r['grade'],"<td></tr>";

}


?>
