<?php
include_once('main.php');

?>
<html>
    <head>
		    <link rel="stylesheet" type="text/css" href="../../source/CSS/style.css">
			<script type="text/javascript" src="jquery-1.12.3.js"></script>
			<script type="text/javascript" src="studentClassCourse.js"></script>
			<script src = "JS/login_logout.js"></script>
			
				
	            
		</head>
    <body  onload="ajaxRequestToGetMyCourse();">
             		 
			<?php include('index.php'); ?>
			  <div align="center" style="background-color: orange;">
			 Select Class:<select id="myclass" style="background-color: cyan;" name="myclass" onchange="ajaxRequestToGetMyCourse();"><?php  


$sql = "SELECT  * FROM class where id in(select DISTINCT classid from course where teacherid='$check')";
$res= $conn->query($sql);

while($cln=mysqli_fetch_array($res))
{
 echo '<option value="',$cln['id'],'" >',$cln['name'],'</option>';
   
}


?>

</select>
<div style="background-color: black; color: white;">
<label id="mycourse" onload="ajaxRequestToGetMyC();" name="mycourse">
</div>
<hr/>



			</div>					
							
		</body>
</html>

