<?php
include('db.php');
$sid=$_GET['sid'];

$sql = "Select * from sregistration where s_id='$sid' ";
	$result = mysqli_query($conn, $sql);
	$data = $result->fetch_assoc() ;
	$num = mysqli_num_rows($result);
	if ($num == 1){
$name=$data['s_name'];
$cgpa=$data['cgpa'];
$email=$data['s_email'];
$dob=$data['s_dob'];


  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>United International University</title>
    <link rel="stylesheet" href="../Little_Library/css/sProfile.css">
</head>
<body>

    <div class="main">
        <div class="navbar-new">
            <div class="icon">
                <div class="uiu_logo">
              <img src="../Little_Library/image/uiu logo.png" height="70px" width="70px" >
                </div>           
            </div>

            <div class="menu">
            <ul>
				<li><a href="admin.php">Home</a></li>
				<li><a href="eventform.php">Events</a></li>
				<li><a href="course_add.php">Courses</a></li>
				<li><a href="exReq.php">Expert</a></li>
			</ul>
            </div>

            <!-- <div class="search">
              <input class="srch" type="search" name="" placeholder="Type To text">
              <a href="#"> <button class="btn-new">Search</button></a>
          </div> -->
        </div> 


        <div class="content">
          <div class="column">
            <div class="image">
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="300" height="300">
          </div>
    
          
          <!-- <div class="wrapper">
            <a href="#" class="icon facebook">
              <div class="tooltip">Facebook</div>
                <span><i class="fab fa-facebook-f"></i></span>
                      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
                      </a>
        
                      <a href="#" class="icon github">
                        <div class="tooltip">Github</div>
                        <span><i class="fab fa-github"></i></span>
                      </a>

                      <a href="#" class="icon linkedin">
                        <div class="tooltip">LinkedIn</div>
                        <span><i class="fab fa-linkedin"></i></span>
                      </a>
                      
                  
                </div> -->
          
              <div class=" github icon">
                
              </div>

        </div>
         
          <div class="column">
            <div class="information">
              <h2>My Info.</h2>
              <div class="information_item">
            <p>Name: </br><span> <?php  echo $name?></span></p>
            <p>ID:</br><span> <?php  echo $sid?></span></p>
            <p>Email:</br><span>  <?php  echo $email?></span></p>
            <p>DOB:</br><span>  <?php  echo $dob?></span></p>
            <p>CGPA:</br><span>  <?php  echo $cgpa?></span></p>
            </div>
          </div>
          </div>
        </div>
        
        
        <!-- <footer>
          <div class="logout-button">
            <a href="index.php">Logout</a>
          </div>
        </footer> -->

      
  </div>
  
</body>
</html>