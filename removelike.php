<?php
include('db.php');
$id=$_GET['id'];
$pid=$_GET['pid'];
$sql="DELETE FROM `interest` WHERE id='$id'";
mysqli_query($conn, $sql);
header("location:event.php?id=$pid");




?>