<?php
include('db.php');
$id=$_GET['id'];
$sql="DELETE FROM `booking` WHERE id='$id'";
mysqli_query($conn, $sql);
header("location:Home.php");




?>