<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST['id'];
    $pas=md5($_POST['password']);
    $sql = "Select * from sregistration where s_id='$id' AND s_password='$pas'";
	$result = mysqli_query($conn, $sql);
	$data = $result->fetch_assoc() ;
	$num = mysqli_num_rows($result);
	if ($num == 1){
		$login = true;
        session_start();
		$_SESSION['s_name'] = $data['s_name'] ;
		$_SESSION['s_id'] = $data['s_id'] ;
		$_SESSION['s_email'] = $data['s_email'] ;
		$_SESSION['s_dob'] = $data['s_dob'] ;
        $_SESSION['phone'] = $data['phone'] ;
        $_SESSION['id'] = $data['id'] ;
		

		header("location: Home.php");
		
	}
	else{
		$error_msg = '<script>alert("Incorrect id or password");</script>';
	}
   
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Little Library</title>
    <link rel="stylesheet" href="../Little_Library/css/login.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <div class="uiu_logo">
                    <img src="./image/uiu logo.png" height="80px" width="80px" >
                </div>     

            </div>

        </div> 
        <div class="content">
            <h1>UIU<br><span>SOCIAL</span> <br>MEDIA</h1>           
            <form action=""  method="POST">
                <div class="form">
                    <h2>Student Log in</h2>
                    <input type="id" name="id" placeholder="ID">
                    <input type="password" name="password" placeholder="Password">
                    <button class="btnn" type="submit">Log in</button>
</br>
</br>
                    <?php if (isset($error_msg)) { ?>
                        <p class="error"><?php echo $error_msg; ?></p>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
