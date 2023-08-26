<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
// $id=$_GET['id'];
// $sid=$_GET['sid'];
// echo $sid;
include('db.php');
// echo $comment=$_POST["x"];
// echo $comment=$_POST["id"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $comment = $_POST['comment'];
    $id = $_POST['id'];

    //$comment=$_POST['x'];
    // echo $comment=$_GET["x"];
    // echo $comment;


    $sql = "UPDATE `booking` SET `comment`='$comment' WHERE id='$id'";
    mysqli_query($conn, $sql);

    $sql2 = "SELECT * FROM `booking` WHERE id=$id";
    $result = mysqli_query($conn, $sql2);
    $data = $result->fetch_assoc();
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $sid=$data['e_id'];
        

    }
    


    $sql1 = "Select * from sregistration where s_id='$sid'";
	$result = mysqli_query($conn, $sql1);
	$data = $result->fetch_assoc() ;
	$num = mysqli_num_rows($result);
	if ($num == 1){
        $email=$data['s_email'];
        $sanme=$data['s_name'];
        echo$email;
        $mail=new PHPMailer(true);
			$mail->isSMTP();
			$mail->Host='smtp.gmail.com';
			$mail->SMTPAuth=true;
			$mail->Username='little.library261@gmail.com';
			$mail->Password='wuyomlqgwywhlzpy';
			$mail->SMTPSecure='ssl';
			$mail->Port=465;
			$mail->setFrom('little.library261@gmail.com');
			$mail->addAddress($email);
			$mail->Subject="Counselling info. ";
			$mail->Body="Dear, $sanme . $comment ";
			$mail->send();

       }

    header("location:exHome.php");



}



?>