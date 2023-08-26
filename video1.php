<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
include 'config.php';

 

if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $username = $_POST['username'];
    $description = $_POST['description'];

    $thumbnail = $_FILES['thumbnail']['name'];
    $thumbnail_type = $_FILES['thumbnail']['type'];
    $thumbnail_size = $_FILES['thumbnail']['size'];
    $thumbnail_temp_loc = $_FILES['thumbnail']['tmp_name'];
    $thumbnail_store = "thumbnail/" . $thumbnail;
    move_uploaded_file($thumbnail_temp_loc, $thumbnail_store);

    $video = $_FILES['video']['name'];
    $video_type = $_FILES['video']['type'];
    $video_size = $_FILES['video']['size'];
    $video_temp_loc = $_FILES['video']['tmp_name'];
    $video_store = "video/" . $video;
    move_uploaded_file($video_temp_loc, $video_store);

    $sql = "INSERT INTO video (title, description, thumbnail, video, username) VALUES ('$title', '$description', '$thumbnail', '$video', '$username')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("Location: video1.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>USM</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }

        .upload-section {
            background-color: whitesmoke;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
            padding-right: 100px;
        }

        .video-section {
            background-color: lightgrey;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 10px;
           
        }

        .card {
            transition: box-shadow 0.3s ease-in-out;
            border: none;
            background-color: transparent;
        }

        .card-thumbnail {
            position: relative;
            overflow: hidden;
            padding-top: 56.25%; /* 16:9 aspect ratio for responsive thumbnail */
        }

        .card-thumbnail img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-thumbnail .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 40px;
            opacity: 0.8;
            transition: opacity 0.3s ease-in-out;
        }

        .card-thumbnail .play-btn:hover {
            opacity: 1;
        }

        .card-video {
            width: 100%;
            height: auto;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .upload-form .custom-file-upload {
            display: inline-block;
            padding: 8px 12px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .upload-form .custom-file-upload:hover {
            background-color: #0056b3;
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
  height: 70px;
  padding-top: 12px;
 padding-left: 20px;
}



ul li{
  list-style: none;
  margin-left: 62px;
  margin-top: 27px;
  font-size: 14px;
  text-decoration: none;
  text-align: center;
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
}



.navbar{
  width: 1200px;
  height: 75px;
  margin: auto;
  padding-right: 180px;
}

.container-fluid{
    background-color: transparent;
    padding-left: 80px;
    padding-right: 80px;
    padding-top: 30px;
    padding-bottom: 40px;
    
}
.abc{
    background-color: #fff5;

backdrop-filter: blur(7px);
box-shadow: 0 .4rem .8rem #0005;
border-radius: .8rem;
margin-top: 40px;
margin-right: 20px;
margin-left: 20px;
margin-bottom: 40px;

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
                <li><a href="posts.php">Post</a></li>
                <li><a href="course_table.php">Course List</a></li>
                <li><a href="stdnProfile.php">Problems</a></li>
                <li><a href="chat.php">Chat</a></li>
                <li><a href="sProfile.php">My Profile</a></li>
                <li><a href="sLogout.php">Log out</a></li>
            <!-- Add more navigation items here -->
        </ul>
    </nav>
    <div class="open">
    <div class="abc">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 upload-section">
                <h2>Upload Video</h2>
                <form action="video1.php" method="post" enctype="multipart/form-data" class="upload-form">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Video Title" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Student Id:</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['s_id']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Video Description:</label>
                       
                        <textarea class="form-control" id="description" name="description" rows="8" placeholder="Enter Video Description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="thumbnail">Upload Thumbnail:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail" required>
                            <label class="custom-file-label" for="thumbnail">Choose File</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="video">Upload Video:</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="video" name="video" required>
                            <label class="custom-file-label" for="video">Choose File</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                </form>
            </div>
            <div class="col-md-6 video-section">
                <h2>All Videos</h2>
                <div class="row">
                    <?php
                    include 'config.php';
                    $sql = "SELECT * FROM video";
                    $query = mysqli_query($conn, $sql);
                    while ($info = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-thumbnail">
                                    <img src="thumbnail/<?php echo $info['thumbnail']; ?>" alt="Video Thumbnail">
                                    <a class="play-btn" href="video/<?php echo $info['video']; ?>" target="_blank">
                                        <i class="fas fa-play-circle"></i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $info['title']; ?></h5>
                                    <p class="card-text"><?php echo $info['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
                </div>
                </div>
                </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Display selected file names in file input fields
        $('.custom-file-input').on('change', function () {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass('selected').html(fileName);
        });
    </script>
</body>
</html>

