<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

include("db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(isset( $_POST['expert'])){
		$username=$_POST['username'];
		$id=$_POST['id'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$Medialink=$_POST['Medialink'];
		$pass=md5($_POST['password']);
		
		// Check if expert is already registered
		$sql = "SELECT * FROM exregistration WHERE e_id='$id'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			// Expert is already registered, display error message
			echo "Expert with this id is already registered!";
		} else {
			// Expert is not already registered, add them as a new record
			$sql="INSERT INTO `exregistration`(`e_name`, `e_id`, `e_email`, `e_phone`,`e_mlink`, `e_password`) VALUES ('$username','$id','$email','$phone','$Medialink','$pass')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				$ok="\n";
				
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
				$mail->Subject="Your Login Info ";
				$mail->Body="Dear,$username".". Your Expert Login ID : $id  & Password is : 1234";
				$mail->send();
			}
			header("location:admin.php");
		}
	}
	
	if(isset( $_POST['Student'])){
		$username=$_POST['username'];
		$id=$_POST['id'];
		$email=$_POST['email'];
		$date=$_POST['date'];
		$phone=$_POST['phone'];
		$password=md5($_POST['password']);
		
		// Check if student is already registered
		$sql = "SELECT * FROM sregistration WHERE s_id='$id'";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			// Student is already registered, display error message
			echo '<script>alert("Student with this email is already registered!");</script>';

		} else {
			// Student is not already registered, add them as a new record
			$sql="INSERT INTO `sregistration`(`s_name`, `s_id`, `s_email`, `s_dob`, `s_password`, `phone`) VALUES ('$username','$id','$email','$date','$password','$phone')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				$ok="\n";
				
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
        $mail->Subject="Your Login Info ";
        $mail->Body="Dear,$username".". Your student Login ID : $id  & Password is : 1234";
        $mail->send();

    }
	header("location:login.php");
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>USM</title>
	<link rel="stylesheet" href="..//Little_Library/css/Admin.css">
	<style>
		.extra-box{
			 margin-left: 180px;
			 width: 400px;
			 padding-top: 10px;
			 margin-bottom: 20px;
		}
		</style>
</head>
<body>
<div class="main">
	<div class="navbar">
		<div class="logo">
			<img src="./image/uiu logo.png" height="95px" width="95px">
		</div>
		<div class="menu">
			<!-- <ul>
				<li><a href="admin.php">Home</a></li>
				<li><a href="eventform.php">Events</a></li>
				<li><a href="course_add.php">Courses</a></li>
				<li><a href="exReq.php">Expert</a></li>
			</ul> -->
		</div>
	</div>
	<div class="form-section ">
		<div class="column1">
			<div class="extra-box" >
				<form action="" method="Post">
					<div class="extra-box1">
						<h2>Student Form</h2>
						<label for="username">Username:</label>
						<input type="text" id="username" name="username" required>
						<label for="id">Enter Your ID Number</label>
						<input type="id" id="id" name="id" required>
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" required>
						<label for="date" >Date of Birth</label>
						<input type="date" name="date" required>
						<label for="id">Phone</label>
						<input type="phone" id="phone" name="phone" required>
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" required>
						<button class="btn"type="submit" name="Student">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<!-- <div class="column2">
			<div class="extra-box">
				<form action="" method="Post">
					<div class="extra-box1">
						<h2>Expart Form</h2>
						<label for="username">Username:</label>
						<input type="text" id="username" name="username" required>
						<label for="id">Enter Your ID Number</label>
						<input type="id" id="id" name="id" required>
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" required>
						<label for="phone">Phone:</label>
						<input type="text" id="phone" name="phone" required>
						
						<label for="Medialink">Media Link:</label>
						<input type="link" id="Medialink" name="Medialink" required>
						<label for="password">Password:</label>
						<input type="password" id="password" name="password" required>
						<button class="btn" type="submit"name="expert">Submit</button>
					</div> -->
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>

<!-- <form>
	<h2>Column 2 Form</h2>
	<label for="email">Email:</label>
	<input type="email" id="email" name="email"><br><br>
	<label for="phone">Phone:</label>
	<input type="text" id="phone" name="phone"><br><br>
	<input type="submit" value="Submit">
</form> -->

<!-- 
<form>
	<h2>Column 1 Form</h2>
	<label for="username">Username:</label>
	<input type="text" id="username" name="username"><br><br>
	<label for="password">Password:</label>
	<input type="password" id="password" name="password"><br><br>
	<input type="submit" value="Submit">
</form> -->