<?php 
include('db.php');
$id=$_GET['id'];
$sql = "Select * from exregistration where e_id='$id' ";
	$result = mysqli_query($conn, $sql);
	$data = $result->fetch_assoc() ;
	$num = mysqli_num_rows($result);
	if ($num == 1){
		$name=$data['e_name'];
    $eid=$data['e_id'];
    $email=$data['e_email'];
    $phone=$data['e_phone'];
		
	}
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $date=$_POST['date'];
    $newDate = date('l', strtotime($date));
    
    header("location: book.php?id=$id&&date=$date&&day=$newDate");
    //echo $newDate;
  }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>United International University</title>
    <link rel="stylesheet" href="../Little_Library/css/exView.css">


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

.btn-new{
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
.btn-new:hover{
  color: #000;
}

.btn:focus{
  outline: none;
}

.srch:focus{
  outline: none;
}

.expert {
  border: 2px solid orange;
  background: white;
  padding: 10px 20px;
}




.content {
  display: flex;
  justify-content: space-between;
  margin-top: 75px;
  gap: 30px;
}

.column {
  padding: 10px;
  height: 400px;
  color: #F2F2F2;
  text-align: left;
  background-color: transparent;
}

.information{
  text-align: center;
  background-color: transparent;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  height: 320px;
  width: 400px;
  margin-top: -280px;
  margin-left: 60px;
}


.information span {
  display: block;
  margin-bottom: 10px;
  padding: 10px;
  border: 2px solid #DF6E31;
  background-color: #F2F2F2;
  color: #333;
  font-size: 18px;
  font-weight: bold;
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


  .image {
    margin-left: 60px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    height: 120px;
    width: 120px;
    margin-top: -30px;
}

.p {
  text-align: left;
  margin-top: 15px;
  margin-left: 20px;
  margin-right: 20px;
}


h2 {
  padding-top: 10px;
}





footer {
  position: relative;
  height: 60px;
  background: transparent;
  margin-top: 20px;
}

.logout-button {
  position: absolute;
  top: -20px;
  right: 20px;
  background-color: #007bff;
  color: #fff;
  border-radius: 50%;
  width: 50px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  z-index: 1;
  margin-right: 10px
}

.logout-button a {
  color: #fff;
  font-size: 20px;
  text-decoration: none;
}

.logout-button:hover {
  background-color: #0062cc;
  cursor: pointer;
}



 .wrapper {
  margin-left: 60px;
  margin-top: -18px;
}

.wrapper .icon{
  position: relative;
  background-color: #3b5999;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  line-height: 50px;
  font-size: 22px;
  display: inline-block;
  align-items: center;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  color: #ffffff;
  text-decoration: none;
  margin-top: 30px;
  margin-left: 200px;
}
.wrapper .tooltip {
  position: absolute;
  top: 0;
  line-height: 1.5;
  font-size: 14px;
  background-color: #ffffff;
  color: #ffffff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background-color: #ffffff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}
.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}


.wrapper .github:hover,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip::before {
  background-color: #333333;
  color: #ffffff;
}

.wrapper .linkedin:hover,
.wrapper .linkedin:hover .tooltip,
.wrapper .linkedin:hover .tooltip::before {
  background-color: #3b5999;
  color: #ffffff;
}

i.fab.fa-github{
  margin-left: 10px;
}

a.icon.github {
  margin-left: 136px;
  margin-top: -100px
}

a.icon.linkedin {
  margin-left: 136px;
  margin-top: -40px
}

i.fab.fa-linkedin {
  margin-left: 10px;
}




.table {
  width: 85vw;
  height: 60vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;
    margin-top: -30px;
    margin-left: -300px;
    margin-right: 190px;
}

.table__header {
    width: 40%;
    height: 20%;
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
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
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
textarea {
  width: 100%;
  height: 50px;
  padding: 8px;
  border-radius: 3px;
  border: 1px solid #ccc;
  resize: none;
}

.input-group {
display: flex;
flex-wrap: nowrap;
}

.input-group input {
flex: 1;
margin-right: 5px;
height: 50px;
}

.input-group button {
flex: 0 0 auto;
}






.add_button {
  background-color: green;
  color: white;
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}
.add_button:hover {
  background-color: green;
}

    </style>
    
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
                <li><a href="Home.php">Home</a></li>
                <li><a href="admin_course_list.php">Councelling</a></li>
                <li><a href="course_table.php">Course List</a></li>
                <li><a href="stdnProfile.php">Problems</a></li>
                <li><a href="apply.php">Apply</a></li>
                <li><a href="sProfile.php">My Profile</a></li>
                <li><a href="sLogout.php">Log out</a></li>
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
            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="120" height="120">
          </div>
          <!-- <div class="wrapper">
                      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
                      
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
                
              </div> -->

        </div>
         

          <div class="column">
            
          </div>
            
    <div class="table">
      <section class="table__header">
          <h1>Councelling Time</h1>
 
      </section>
      <section class="table__body">
          <table>
              <thead>
                <tr>
                  
                  <th> Day </th>
                    
                  <th> Start Time </th>
                  <th> End Time </th>
                  <th> Location</br></th>
                  
               
                </tr>
               
              </thead>
              <?php
                                
    

                                $s = "SELECT * FROM `councelling` 
                                where e_id='$id' ";
                                $result = mysqli_query($conn, $s);
                                while ($row = mysqli_fetch_array($result)) {
                                  $id=$row['e_id'];
                                ?>
               <tbody id="tableBody">
                <tr>
                  <td><?php echo $row['day'] ?></td>
                  <td><?php echo $row['start'] ?></td>
                  <td><?php echo $row['end'] ?></td>
                  <td><?php echo $row['location'] ?></td>
                  
                </tr>

               
                 
              </tbody>
              <?php } ?>
            
          </table>
      </section>
      
      <div style="text-align: center;padding-left: 20px;"> <br>
        <br>
        <form action="" method="post">
        <input type="date" name="date" required >
        <button type="submit" class="add_button">ADD</button>
      </form>
      </div>
    </div>


          </div>

          <div class="information">
            <h2>Expert Information</h2>
            <div class="information_item">
          <p>Name: </br><span><?php  echo $name ?></span></p>
          <p>ID:</br><span><?php  echo $eid ?></span></p>
          <p>Email:</br><span> <?php  echo $email ?></span></p>
          <!-- <p>Phone:</br><span><?php  echo $phone ?></span></p> -->
          </div>
        </div>    
      
        
        
        
      
  </div>
  
</body>

<script>
const table = document.querySelector('table');
const tbody = table.querySelector('tbody');
const ths = table.querySelectorAll('thead th');
const trs = Array.from(tbody.querySelectorAll('tr'));

const getCellValue = (tr, idx) => tr.children[idx].textContent.trim();

const comparer = (idx, asc) => (a, b) => ((v1, v2) => 
  v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2.toString())
)(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

ths.forEach((th, idx) => {
  th.addEventListener('click', () => {
    trs.sort(comparer(idx, this.asc = !this.asc));
    trs.forEach((tr) => tbody.appendChild(tr));
  });
});


</script>


</html>