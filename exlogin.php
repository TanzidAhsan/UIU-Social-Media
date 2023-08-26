<?php
include 'db.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST['id'];
    $password=md5($_POST['password']);
    $sql = "Select * from exregistration where e_id='$id' AND e_password='$password'";
	$result = mysqli_query($conn, $sql);
	$data = $result->fetch_assoc() ;
	$num = mysqli_num_rows($result);
	if ($num == 1){
		$login = true;
        session_start();
		$_SESSION['e_name'] = $data['e_name'] ;
		$_SESSION['e_id'] = $data['e_id'] ;
		$_SESSION['e_email'] = $data['e_email'] ;
		$_SESSION['e_phone']=$data['e_phone'];
        $_SESSION['e_mlink'] = $data['e_mlink'] ;
        $_SESSION['cname'] = $data['cname'] ;
		

		header("location: exHome.php");
		
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
    <link rel="stylesheet" href="../Little_Library/css/exlogin.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <div class="uiu_logo">
                    <img src="./image/uiu logo.png" height="70px" width="70px" >
                </div>     

            </div>

        </div> 
        <div class="content">
            <h1>THE <br><span>LITTLE</span> <br>LIBRARY</h1>           
            <form action=""  method="POST">
                <div class="form">
                    <h2>Expert Log in</h2>
                    <input type="id" name="id" placeholder="ID">
                    <input type="password" name="password" placeholder="Password">
                    <button class="btnn"type="submit">Log in</button>
                    <?php if (isset($error_msg)) { ?>
                        <p class="error"><?php echo $error_msg; ?></p>
                    <?php } ?>
                </div>
                   </form>
                    </div>
                </div>
        </div>
    </div>
    
</body>
</html>