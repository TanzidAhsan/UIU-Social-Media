<?php
include("db.php");
session_start();
$sid = $_SESSION['s_id'];

$pid = isset($_GET['id']) ? $_GET['id'] : null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Little Library</title>
    <style>
        /* Your CSS styles here */
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
  padding-bottom: 90px;
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

.event{
  text-align: center;
  padding-right: 80px;
  padding-top: 40px;
  color: white;
}

.details{
  padding-left: 30px;
   
}
    </style>
</head>
<body>
    <div class="main">
        <div class="navbar-new">
            <div class="icon">
                <div class="uiu_logo">
                    <img src="..//Little_Library/image/uiu logo.png" height="70px" width="70px">
                </div>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="Home.php">Home</a></li>
                    <li><a href="posts.php">Post</a></li>
                    <li><a href="video1.php.">Video</a></li>
                    <li><a href="course_table.php">Course List</a></li>
                    <li><a href="stdnProfile.php">Problems</a></li>
                    <li><a href="eventform.php">Event</a></li>
                    
                   
                    <li><a href="chat.php">Chat</a></li>
                     
                    <li><a href="index.php">Log out</a></li>
                </ul>
            </div>
        </div><br><br><br>
 
        <?php
        if ($pid !== null) {
            $s = "SELECT * FROM `events` WHERE id='$pid'";
            $result = mysqli_query($conn, $s);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $details = $row['details'];
                $title = $row['tittle']; // Corrected 'tittle' to 'title'
                $link = $row['link'];
        ?>
        <div class="event" >
        <h2><?php echo $title; ?></h2>
            
            <br>
            
            <div class="details">
                <p><?php echo $details; ?></p>
                <a href='<?php echo $link; ?>'><button class="apply-btn">Source</button></a>
                <?php
                $sqli = "SELECT * FROM `interest` WHERE sid='$sid' AND pid='$pid'";
                $result_interest = mysqli_query($conn, $sqli);
                $num = mysqli_num_rows($result_interest);

                if ($num == 1) {
                    $data = $result_interest->fetch_assoc();
                    $interestId = $data['id'];
                    echo "<a href='removelike.php?id=$interestId&&pid=$pid'><button type='button' name='interestCount'>
                        <span style='color:red'>&#x2764;</span> Interested
                    </button></a>";
                } else {
                    echo "<a href='interest.php?id=$pid'><button type='button' name='interestCount'>
                        <span>&#x2764;</span> Interested?
                    </button></a>";
                }
                ?>
                <br><br>
                <p>
                    Total: <?php
                    $sql = "SELECT COUNT(pid) as total FROM `interest` WHERE pid = $pid";
                    $result_total_interest = mysqli_query($conn, $sql);
                    $total_interest_data = mysqli_fetch_assoc($result_total_interest);
                    echo $total_interest_data['total'];
                    ?>
                </p>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</body>
</html>
