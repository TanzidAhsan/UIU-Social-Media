<?php
$id = $_GET['id'];
session_start();
include('db.php');
$sid = $_SESSION['s_id'];
$sname = $_SESSION['s_name'];

$sql = "INSERT INTO `interest`(`sname`, `sid`, `pid`) VALUES ('$sname','$sid','$id')";
$result = mysqli_query($conn, $sql);
header("location:event.php?id=$id");



// $sqli = "SELECT * FROM `events` WHERE id='$id'";
// $result = mysqli_query($conn, $sqli);
// while ($row = mysqli_fetch_array($result)) {
//     $event_id = $row['id'];
// }
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $interestCount = $_POST['interestCount'];
//     $sql = "INSERT INTO `interest`(`event_id`, `counts`, `sid`) VALUES ('$event_id','$interestCount','$sid')";
//     $result = mysqli_query($conn, $sql);
//     header("location:event.php");
// }

?>
