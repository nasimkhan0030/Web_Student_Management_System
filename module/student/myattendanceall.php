<?php  
include_once('main.php');
$sql = "SELECT DISTINCT(date) FROM attendance WHERE attendedid='$check'";
$resmon = $conn->query($sql);
echo "<tr> <th>Attend All Dates:</th></tr>";
while($r=mysqli_fetch_array($resmon))
{
 echo "<tr><<td>",$r['date'],"</td></tr>";

}
?>
