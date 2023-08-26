<?php
include('db.php');
$id=$_GET['id'];
$s="DELETE FROM `exapply` WHERE id='$id'";
mysqli_query($conn, $s);
header("location:exReq.php");

?>