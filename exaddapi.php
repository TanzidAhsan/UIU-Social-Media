<?php
include('db.php');
$id=$_GET['id'];
$sql="UPDATE `booking` SET `Status`='Accepted' WHERE id='$id'";
mysqli_query($conn, $sql);
header("location:exHome.php");




?>