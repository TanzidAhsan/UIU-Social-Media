<?php
$id=$_GET['id'];
include("db.php");
$sql="DELETE FROM `councelling` WHERE id='$id'";
		$result = mysqli_query($conn, $sql);

    header("location:expertProfile.php");
    






?>