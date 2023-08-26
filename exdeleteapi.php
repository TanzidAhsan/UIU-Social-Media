<?php
include('db.php');
$id=$_GET['id'];
$sql="UPDATE `booking` SET `Status`='Cancelled' WHERE id='$id'";
mysqli_query($conn, $sql);
header("location:exHome.php");




?>