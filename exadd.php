<?php

use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
include('db.php');
$id = $_GET['id'];
$sname = $_GET['sname'];
$sid = $_GET['sid'];
$email = $_GET['email'];
$sql = "UPDATE `exapply` SET `status`='Accepted' WHERE id='$id'";
mysqli_query($conn, $sql);
$pass = md5("1234");

$sql1 = "Select * from exregistration where e_id='$sid'";
	$result = mysqli_query($conn, $sql1);
	$data = $result->fetch_assoc() ;
	$num = mysqli_num_rows($result);
	if ($num == 1){
        
header("location: exReq.php");
}
else{

$sql1 = "INSERT INTO `exregistration`(`e_name`, `e_id`, `e_email`, `e_password`) VALUES ('$sname','$sid','$email','$pass')";
mysqli_query($conn, $sql1);

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'little.library261@gmail.com';
$mail->Password = 'wuyomlqgwywhlzpy';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('little.library261@gmail.com');
$mail->addAddress($email);
$mail->Subject = "Your Login Info ";
$mail->Body = "Dear,$sname".". Your Expert Login ID : $sid  & Password is : 1234";
$mail->send();

header("location: exReq.php");
}
?>