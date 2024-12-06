<?php  
include_once('../../service/mysqlcon.php');
$check=$_REQUEST['classid'];
$sql = "SELECT DISTINCT(date) FROM attendance WHERE attendedid='$check' and  MONTH( DATE ) = MONTH( CURRENT_DATE ) and YEAR( DATE )=YEAR( CURRENT_DATE )";
$resmon = $conn->query($sql);
echo "<tr> <<th>Attend Current Month Date:</th></tr>";
while($r=mysqli_fetch_array($resmon))
{
 echo "<tr><td>",$r['date'],"</td></tr>";

}
?>
