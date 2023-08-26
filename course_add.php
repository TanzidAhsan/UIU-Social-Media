<?php
include("db.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   $code=$_POST['code'];
   $name=$_POST['name'];
   $sql1="INSERT INTO `courses`( `course_code`, `course_name`) VALUES ('$code','$name')";
		$result = mysqli_query($conn, $sql1);
        


}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/course_add.css">
    <title>The Little Library</title>
</head>
<body>
    <!-- Manin class -->
    <div class="main">
        <!-- navigation bar -->
        <div class="navbar">
            <div class="logo">
            <img src="image/uiu logo.png" height="75px" width="75px">
            </div>
            <div class="menu">
            <ul>
				<li><a href="admin.php">Home</a></li>
				<li><a href="eventform.php">Events</a></li>
				<li><a href="course_add.php">Courses</a></li>
				<!-- <li><a href="exReq.php">Expert</a></li> -->
			</ul>
            </div> 

        </div>

        <div class="form-section">
        <div class="column1">
			<div class="extra-box">
				<form action="" method="post">
					<div class="extra-box1">
                        <h2>Add couurse</h2>
                        <!-- <label for="department">Department</label>
                        <input type="department" id="department" name="department" required> -->
                        <label for="course-code">Course code</label>
                        <input type="course-code" id="course-code" name="code" required>
                        
                        <label for="course-name">Course Name</label>
                        <input type="course-name" id="course-name" name="name" required>

                        

                        <button class="btn" type="submit">Submit</button>
					</div>
				</form>
			</div>
		</div>
        
    </div>
    </div>
    <!-- form-section -->
    

    
</body>
</html>