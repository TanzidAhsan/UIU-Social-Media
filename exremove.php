<?php
include('db.php');
$id=$_GET['id'];
$sql="UPDATE `exapply` SET `status`='Reject' WHERE id='$id'";
mysqli_query($conn, $sql);
header("location: exReq.php");
?>