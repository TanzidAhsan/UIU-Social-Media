<?php
session_start();
include('db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> <!-- Add your custom styles here -->
    <style>
        /* Your custom styles here */

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            
        }

        .container {
            margin-top: 30px;
        }

        .post-creation {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .recent-posts {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        .recent-posts .card {
            margin-bottom: 20px;
        }

        .card-text {
            color: #333;
            font-size: 16px;
            line-height: 1.5;
        }

        .card-text.text-muted {
            font-size: 14px;
        }

        .custom-file-label::after {
            content: "Browse";

        }

        .menu{
  width: 100px;
  float: left;
  height: 70px;
  text-decoration: none;
  
}

ul{
  float: left;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: -45px;
  width: max-content;
  text-decoration: none;
}

.logo{
  color: #ff7200;
  font-size: 35px;
  font-family: Arial;
  padding-left: 20px;
  float: left;
  padding-top: 10px;
  margin-top: 5px;
  
}
.uiu_logo{
  width: 200px;
  float: left;
  height: 80px;
  padding-top: 12px;
 padding-left: 20px;
 text-decoration: none;
}
.logo{
  color: #ff7200;
  font-size: 35px;
  font-family: Arial;
  padding-left: 20px;
  float: left;
  padding-top: 10px;
  margin-top: 5px;
  text-decoration: none;
  
}



ul li{
  list-style: none;
  margin-left: 62px;
  margin-top: 27px;
  font-size: 14px;
  text-decoration: none;
  text-align: center;
  text-decoration: none;
}

ul li a{
  text-decoration: none;
  color: #fff;
  font-family: Arial;
  font-weight: bold;
  transition: 0.4s ease-in-out;
}

ul li a:hover{
  color: #ff7200;
  text-decoration: none;
}

body {
    min-height: 100vh;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(../Little_Library/image/uiub.jpg);
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    background-size: cover;
}



.navbar{
  width: 1200px;
  height: 75px;
  margin: auto;
  text-decoration: none;
  padding-right: 225px;
  
}

.container{

    background-color: #fff5;

backdrop-filter: blur(7px);
box-shadow: 0 .4rem .8rem #0005;
border-radius: .8rem;
margin-top: 40px;
margin-right: 20px;
margin-left: 260px;
margin-bottom: 40px;
padding: 40px;


   
}

.information span {
      display: block;
      margin: 5px 0 5px;
      padding: 2px 10px;
      border: 2px solid #DF6E31;
      background-color: rgba(242, 242, 242, 0.8);
      color: #333;
      font-size: 13px;
      font-weight: bold;
      border-radius: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    .information span:hover {
      background-color: #FF7200;
    }

    h3 {
        display: block;
      margin: 5px 0 5px;
      padding: 2px 10px;
      border: 2px solid #DF6E31;
      background-color: rgba(242, 242, 242, 0.8);
      color: #333;
      font-size: 13px;
      font-weight: bold;
      border-radius: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

   h3 {
    
    background-color: #FF7200;
   }
   .open{
     flex-basis: calc((100% -90px) / 5);
  /* border: 2px solid #DF6E31; */
  padding: 10px;
  
  color: #F2F2F2;
  text-align: left;
  background-color: transparent;
  margin-top: 40px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  margin-bottom: 40px;
  color:black;
  margin-left: 10px;
  margin-right: 10px;
  

   }
   

        
    </style>
    <title>Posts</title>
</head>
<body>

<div>
    <nav class="navbar">
<div class="icon">
                <div class="uiu_logo">
                  <img src="..//Little_Library/image/uiu logo.png" height="70px" width="80px" >
                </div>           
            </div>
            

        <ul>
        <li><a href="Home.php">Home</a></li>
         <li><a href="video1.php">Video</a></li>
                <li><a href="course_table.php">Course List</a></li>
                <li><a href="stdnProfile.php">Problems</a></li>
               <li><a href="posts.php">Event</a></li>
               <li><a href="chat.php">Chat</a></li>
                <li><a href="sLogout.php">Log out</a></li>
             </ul>
    </nav>
    <div class="open">

    <h1 class="text-center fw-bold"  ><a href="#" class="text-decoration-none text-white" >POST YOUR THOUGHTS</a></h1>
   
  
    <div class="container" >
   
     
        <div class="row">
         
      
            <div class="col-md-12">
            
            
            <div  class="information " style="#">
                <?php
               
                // Check if the user is logged in using the unique identifier
                if (!isset($_SESSION['s_name'])) {
                    echo '<p class="text-center">You need to <a href="index.php">login</a> to view and create posts.</p>';
                } else {
                    // Post creation form
                    echo '<div class="post-creation">';
                    echo '<h3>Create a new Post</h3>';
                    echo '<form action="submit_post.php" method="POST" enctype="multipart/form-data">';
                    echo '<textarea name="postContent" class="form-control mb-3" placeholder="Write your post..." required></textarea>';
                    echo '<div class="custom-file">';
                    echo '<input type="file" name="postImage" class="custom-file-input" id="postImage">';
                    echo '<label class="custom-file-label" for="postImage" id="postImageLabel">Choose image...</label>';
                    echo '</div>';
                    echo '<button type="submit" name="submitPost" class="btn btn-primary mt-3">Post</button>';
                    echo '</form>';
                    echo '</div>';
                }
                ?>
            </div>
            
            </div>
            <div class="col-md-12">
            <div  class="information " style="#">
             
                <?php
                if (isset($_SESSION['s_id'])) {
                    // Display recent posts
                    echo '<div class="recent-posts" >';
                    echo '<h3 class="mb-4" >Timeline</h3>';

                    $sql = "SELECT posts.*, sregistration.s_name FROM posts
                            JOIN sregistration ON posts.id = sregistration.id
                            ORDER BY created_at DESC";
                    $result = mysqli_query($conn, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="card mb-3">';
                            echo '<div class="card-body">';
                            echo '<p class="card-text">' . $row["content"] . '</p>';

                            // Check if image_path is not empty and construct the complete URL
                            if (!empty($row["image_path"])) {
                                $imagePath = $row["image_path"];
                                echo '<img src="' . $imagePath . '" class="img-fluid mb-3" alt="Posted Image">';
                            }

                            echo '<p class="card-text text-muted">Posted by: ' . $row["s_name"] . ' on ' . $row["created_at"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p class="text-center">No posts found.</p>';
                    }

                    echo '</div>';
                }
                ?>
                 
            </div>
            </div>
        </div>
    </div>
    </div>
            </div>
            </div>
            </div>
            </div>
    
    <script>
        // Get the file input element and its associated label
        const fileInput = document.getElementById('postImage');
        const fileInputLabel = document.getElementById('postImageLabel');
        
        // Maximum length for displaying the file name
        const maxFileNameLength = 10;
        
        // Add an event listener to the file input
        fileInput.addEventListener('change', function() {
            // Get the selected file name
            const selectedFileName = fileInput.files[0].name;
            
            // Truncate the file name if it's too long
            const displayFileName = selectedFileName.length > maxFileNameLength
                ? selectedFileName.substring(0, maxFileNameLength) + '...'
                : selectedFileName;
            
            // Update the label with the selected (possibly truncated) file name
            fileInputLabel.textContent = displayFileName;
        });
    </script>
</body>
</html>