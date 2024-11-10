<?php
$id = $_GET['ID'];
include 'config.php';
mysqli_query($con, "DELETE FROM `tblproduct` WHERE Id = '$id'");
header("location:insert.php");
?>