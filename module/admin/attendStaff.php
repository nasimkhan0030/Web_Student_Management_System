<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if($_POST['submit']){
    $id = $_POST['id'];
    $cdate = date("Y-m-d");
    $sql = "INSERT INTO attendance VALUES('','$cdate','$id')";
    $success = $conn->query($sql);
    if(!$success) {
        die('Attendance Error: ');
    }
    echo "Attendance Complete\n";
    header("Location:../admin/staffAttendance.php");
}
?>
