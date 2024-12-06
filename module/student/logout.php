<?php
include ('../../service/mysqlcon.php');
session_start();
session_destroy();

header("Location: ../../");
?>