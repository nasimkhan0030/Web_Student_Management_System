<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
if($_POST['submit']){
    $id = $_POST['id'];
    $sql = "DELETE FROM parents WHERE id = '$id';";
    $success = $conn->query($sql);
    $sql = "DELETE FROM users WHERE userid = '$id';";
    $success = $conn->query($sql);
    if(!$success) {
        die('Could not Delete data: ');
    }
    echo "Delete data successfully\n";
    header("Location:../admin/deleteParent.php");
}
?>
