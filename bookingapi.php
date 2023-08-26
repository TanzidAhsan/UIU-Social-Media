<?php
include('db.php');
session_start();
$sname=$_SESSION['s_name'];
$sid=$_SESSION['s_id'];
$id=$_GET['id'];
$date=$_GET['date'];
$sql = "Select * from councelling where id='$id' ";
	$result = mysqli_query($conn, $sql);
	$data = $result->fetch_assoc() ;
	$num = mysqli_num_rows($result);
	if ($num == 1){
		$name=$data['e_name'];
    $eid=$data['e_id'];
    $start=$data['start'];
    $end=$data['end'];
    $location=$data['location'];
    $day=$data['day'];

    $sql1="INSERT INTO `booking`( `e_name`, `e_id`, `date`, `start`, `end`, `s_id`, `s_name`, `day`,Status) VALUES ('$name','$eid','$date','$start','$end','$sid','$sname','$day','Pending')";
    mysqli_query($conn, $sql1);
    header("location:Home.php");
		
	}
?>