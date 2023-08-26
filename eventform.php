<?php
include('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tittle=$_POST['title'];
  $details=$_POST['details'];
  $link=$_POST['link'];

  $sql="INSERT INTO `events`( `tittle`, `details`, `link`) VALUES ('$tittle','$details','$link')";
		$result = mysqli_query($conn, $sql);
    header("location:eventform.php");
}

                                                            
                                
?>




<html lang="en" title="Coding design"><head>
    <title>
      The Little Library
    </title>
   
</head>

<body>
    <div class="main">
    <div class="navbar-new">
        <div class="icon">
            <div class="uiu_logo">
                <img src="..//Little_Library/image/uiu logo.png" height="70px" width="70px" >
            </div>           
        </div>

        <div class="menu">
        <ul>
        <li><a href="Home.php">Home</a></li>
                    <li><a href="posts.php">Post</a></li>
                    <li><a href="video1.php">Video</a></li>
                    <li><a href="course_table.php">Course List</a></li>
                    <li><a href="stdnProfile.php">Problems</a></li>
                    <li><a href="eventform.php">Event</a></li>
                    
                   
                    <li><a href="chat.php">Chat</a></li>
                     
                    <li><a href="index.php">Log out</a></li>
			</ul>
        </div>

        
    </div> 

    <div class="table">
      <section class="table__body">
        <form action="" method="post">
        <div class="form-container">
          <div class="form-input">
            <label for="event-title">Event Title:</label>
            <input type="text" id="title" name="title" required>
          </div>
        
          <!-- <div class="form-input">
            <label for="event-date">Event Date:</label>
            <input type="date" id="date" name="date" required>
          </div>
         -->
          <div class="form-input">
            <label for="event-details">Event Details:</label>
            <textarea id="details" name="details" required></textarea>
          </div>
        
          <div class="form-input">
            <label for="event-title">Source Link:</label>
            <input type="text" id="link" name="link" required>
          </div>
        
          <div class="form-input">
            <button type="submit" class="submit-btn">Submit</button>
          </div>
        </div>
        </form>
        
      </section>
    </div>
    <br>
    <br>
    
</div>
<style>
        * {
    margin: 0;
    padding: 0;

    box-sizing: border-box;
    font-family: sans-serif;
}


body {
  min-height: 100vh;
    background: url(../Little_Library/image/uiub.jpg) center / cover;
    display: flex;
    justify-content: center;
    align-items: center;
}


.navbar-new{
  width: 1200px;
  height: 75px;
  margin: auto;
  
}

.icon{
  
  width: 200px;
  float: left;
  height: 70px;

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
.menu{
  width: 100px;
  float: left;
  height: 70px;
  
}

ul{
  float: left;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: -45px;
  width: max-content;
}


ul li{
  list-style: none;
  margin-left: 62px;
  margin-top: 27px;
  font-size: 14px;
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
}




.table {
    width: 80vw;
    height: 90vh;
    background-color: transparent;
    margin-top: 3%;
    margin-left: 6%;
    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
}


.table__body {
    width: 95%;
    height: 95%;
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: hidden;
    overflow: hidden;
}
.btn-add{

    height: 30px;
    width: 60px;
    color: white;
    background-color: #25c357;
}
.btn-send{
    background-color: blue;
    border: 1px sollid blue;
    border-radius: 8px;
    font-size: 17px;
    font-weight: bold;
    color: #fff;
    padding: 2px 8px;

}
.send{
    text-align: center;
}


.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
    visibility: visible;
}

table {
    width: 100%;
}

td img {
    width: 36px;
    height: 36px;
    margin-right: .5rem;
    border-radius: 50%;

    vertical-align: middle;
}

table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color:  #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
    overflow: hidden;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #fff6 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
    transition: .2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}



/* form */

.form-container {
  width: 100%;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
}

.form-input {
  margin-bottom: 20px;

}

.form-input label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.form-input input,
.form-input textarea {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  line-height: 1.5;
  box-sizing: border-box;
}

.form-input textarea {
  height: 150px;
  resize: vertical;
}

.form-input button {
    background-color: #1ccf47;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}

.form-input button:hover {
  background-color: #0069d9;
}




   </style>
</body> 
</html>