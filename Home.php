<?php
include('db.php');
 session_start();
  $sid= $_SESSION['s_id'];
  


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>USM</title>
    
    
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <div class="uiu_logo">
                    <img src="../Little_Library/image/uiu logo.png" height="70px" width="70px" >
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

                <!-- <li><a href="sProfile.php">My Profile</a></li> -->
                <li><a href="chat.php">Chat</a></li>
                <li><a href="sProfile.php">My Profile</a></li>
                
                <li><a href="sLogout.php">Log out</a></li>
              </ul>
            </div>
        <div class="content">

          <div class="column">

            <div class="table">
              
                  
                   <video class="video" autoplay=1 loop="" controls=" " width="90%" height="100%" style="mergin" border-radius=" .8rem"
  margin-top="55px"
   > 
                    <source src="uiu.mp4" type="video/mp4">
                  </video>
 
<!-- 
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/k01PU4efd-k?si=L9dEaxa07grbp1xrautoplay=1&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen border-radius: .8rem;></iframe> -->
              </section>
              
                             <!-- <thead>
                      <tr>
                        
                        <th > Expert Name </th>
                        <th>Status</th>
                        <th> Day</th>
                        <th > Date</th>
                        <th > Delete</th>
                      </tr>
                     
                    </thead> -->
                    <!--
                      
                      
                      
                      
                       <?php 
                                
    

                                $s = "select* 
                                from booking
                               where s_id='$sid'";
                                $result = mysqli_query($conn, $s);
                                while ($row = mysqli_fetch_array($result)) {
                                  $id=$row['id'];
                                  $ename=$row['e_name'];
                                  $eid=$row['e_id'];
                                ?>
                     -->
                       <tbody id="tableBody">
                        <tr>
                          <td><?php echo "<a href='exView.php?id=$eid'>$ename </a>" ?></td>
                          <td><?php echo $row['Status'] ?></td>
                          <td><?php echo $row['day'] ?></td>
                          <td><?php echo $row['date'] ?></td>
                          <td><?php echo" <a href='sDeleteapi.php?id=$id'><button>Delete</button></a>"?></td>
                        </tr>
        
        
                         
                      </tbody>
                      <?php } ?> -->
                    
                  </table>
              </section>
              </div>

          </div>
            <div class="column">
              <h2>Events</h2>
              <?php 
              $sqli = "SELECT * 
              FROM `events`
              GROUP BY id DESC";
              $result = mysqli_query($conn, $sqli);
              while ($row = mysqli_fetch_array($result)) {
                
                   $title=$row['tittle'];
                   $id=$row['id'];
              
              
              ?>
              <ul>
                
              <td><?php echo "<a href='event.php?id=$id'>$title </a>" ?></td>
              
              </ul>
              <?php } ?>
            </div>
            <div class="column">
              <h2>Logged in as</h2>
              <p>Name </br><span>   <?php  echo $_SESSION['s_name'] ?></span></p>
              <p>ID</br><span> <?php echo $_SESSION['s_id'] ?></span></p>
              <p>Email</br><span> <?php echo $_SESSION['s_email'] ?></span></p>
              <p>DOB</br><span> <?php echo $_SESSION['s_dob'] ?></span></p>
              <p>PHONE</br><span> <?php echo $_SESSION['phone'] ?></span></p>
            </div>
          </div>


        </div>





        <style>

*{
    margin: 0;
    padding: 0;
}

.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(../Little_Library/image/uiub.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
    
}


.navbar{
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

.search{
    width: 300px;
    float: left;
    margin-left: 600px;
    
}

.srch{
    font-family: 'Times New Roman';
    width: 180px;
    height: 26px;
    background: transparent;
    border: 1px solid #ff7200;
    margin-top: 20px;
    color: #fff;
    border-right: none;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 20px;
    border-top-left-radius: 20px;
}

.btn{
    width: 70px;
    height: 26px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 20px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 20px;
    border-top-right-radius: 20px;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}

.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content {
  display: flex;
  justify-content: space-between;
  margin-top: 35px;
  gap: 30px;
}

.column {
  flex-basis: calc((100% -90px) / 5);
  /* border: 2px solid #DF6E31; */
  padding: 10px;
  height: 400px;
  color: #F2F2F2;
  text-align: left;
  background-color: transparent;
  margin-top: 55px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

.column:nth-child(2) {
  overflow-y: scroll;
  
  
}

.column:nth-child(2)::-webkit-scrollbar {
  width: 5px;
}

.column:nth-child(2)::-webkit-scrollbar-track {
  background-color: #f1f1f1;
}


.column:nth-child(2)::-webkit-scrollbar-thumb {
  background-color:#DF6E31;
  border-radius: 10px;
}

.column:nth-child(2)::-webkit-scrollbar-thumb:hover {
  background-color: #DF6E31;
}

.column:nth-child(2) {
  margin-left: 30px;
  text-align: left;
}

.column h2 {
  font-weight: bold;
  font-size: 28px;
  margin-bottom: 20px;
  text-align: center;
  border-bottom: 2px solid #DF6E31;
  padding-bottom: 10px;
}

.column:nth-child(2) h2 {
  color: #F2F2F2;
}

.column:nth-child(2) h3 {
  color: #DF6E31;
  font-size: 18px;
  margin-top: 20px;
  text-align: left;
}

.column:nth-child(2) ul {
  margin: 10px 0;
  padding: 0;
  list-style: none;
  display: block;
}

.column:nth-child(2) ul a {
    margin-bottom: 5px;
    font-size: 16px;
    line-height: 1.3;
    text-align: left;
    color: #F2F2F2;
    text-decoration: none;
}

.column:nth-child(2) ul a:hover{
  color: #ff7200;
}



.column:nth-child(3) span {
  display: block;
  margin-bottom: 10px;
  padding: 10px;
  border: 2px solid #DF6E31;
  background-color: #F2F2F2;
  color: #333;
  font-size: 18px;
  font-weight: bold;
}

.column:nth-child(3) span {
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
  
  .column:nth-child(3) span:hover {
    background-color: #FF7200;
  }



  
.table {
  width: 40vw;
  height: 67vh;
  background-color: thistle ;  /* #fff5;  #fff5 */
    

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;
   
}
.video{
  padding-left: 25px;
}

.table__header {
    width: 40%;
    height: 8%;
    padding: .8rem 1rem;

    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table__header .input-group {
    width: 35%;
    height: 100%;
    background-color: #fff5;
    padding: 0 .8rem;
    border-radius: 2rem;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: .2s;
}


.content h1 {
  font-family: 'Times New Roman';
  font-size: 30px;
  padding-left: 20px;
  margin-top: 0%;
  letter-spacing: 2px;
}



.table__header .input-group:hover {
    width: 45%;
    background-color: #fff8;
    box-shadow: 0 .1rem .4rem #0002;
}

.table__header .input-group img {
    width: 2rem;
    height: 2rem;
}

.table__header .input-group input {
    width: 100%;
    padding: 0 .5rem 0 .3rem;
    background-color: transparent;
    border: none;
    outline: none;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
    overflow: overlay;
    margin-top: -5px;
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
    color: #000;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
    color: #000;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
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

tbody tr.hide td img {
    width: 0;
    height: 0;
    transition: .2s ease-in-out .5s;
}

.status {
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.status.delivered {
    background-color: #86e49d;
    color: #006b21;
}

.status.cancelled {
    background-color: #d893a3;
    color: #b30021;
}

.status.pending {
    background-color: #ebc474;
}

.status.shipped {
    background-color: #6fcaea;
}


@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

thead th span.icon-arrow {
    display: inline-block;
    width: 1.3rem;
    height: 1.3rem;
    border-radius: 50%;
    border: 1.4px solid transparent;
    
    text-align: center;
    font-size: 1rem;
    
    margin-left: .5rem;
    transition: .2s ease-in-out;
}

thead th:hover span.icon-arrow{
    border: 1.4px solid #6c00bd;
}

thead th:hover {
    color: #6c00bd;
}

thead th.active span.icon-arrow{
    background-color: #6c00bd;
    color: #fff;
}

thead th.asc span.icon-arrow{
    transform: rotate(180deg);
}

thead th.active,tbody td.active {
    color: #6c00bd;
}


.thead::-webkit-scrollbar {
  display: none;
}


.thead::-webkit-scrollbar {
  width: 12px;
}
.thead::-webkit-scrollbar-thumb {
  background-color: #fff;
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5);
}
.thead::-webkit-scrollbar-track {
  background-color: #b3aeaeea;
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
}



button {
  background-color: #b30021;
  color: white;
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
button:hover {
  background-color: #b30021;
}


        </style>

    
</body>
</html>