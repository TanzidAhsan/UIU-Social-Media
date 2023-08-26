<?php
include('db.php');
$id=$_GET['id'];
$s="DELETE FROM `problems` WHERE id='$id'";
mysqli_query($conn, $s);
header("location:stdnProfile.php");

?>