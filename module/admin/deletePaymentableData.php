<?php
include_once('main.php');

    $id = $_REQUEST['id'];
    $sql= "DELETE FROM payment WHERE id = '$id'";
    $success = $conn->query($sql);

    header("Location:deletePayment.php");

?>
