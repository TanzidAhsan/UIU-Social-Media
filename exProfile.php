<!DOCTYPE html>
<html lang="en">
<head>
    <title>United International University</title>
    <link rel="stylesheet" href="../Little_Library/css/expProfile.css">
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Problems</a></li>
                <li><a href="expertProfile.php">My Profile</a></li>
                <li><a href="index.php">Log Out</a></li>
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
    
          
          <div class="wrapper">
            <a href="<?php ?>" class="icon facebook">
              <div class="tooltip">Facebook</div>
                <span><i class="fab fa-facebook-f"> </i></span>
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
                      
                  
                </div>
          
              <div class=" github icon">
                
              </div>

        </div>
         
          <div class="column">
            <div class="information">
              <h2>Hey There</h2>
              <div class="information_item">
            <p>Name </br><span> <?php session_start(); echo $_SESSION['e_name']?></span></p>
            <p>ID</br><span> <?php echo $_SESSION['e_id']?></span></p>
            <p>Email</br><span> <?php echo $_SESSION['e_email']?></span></p>
            <p>Phone</br><span> <?php echo $_SESSION['e_phone']?></span></p>
            
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