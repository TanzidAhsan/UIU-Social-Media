<?php
include('db.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){
  session_start();
$course=$_POST['course'];
echo $course;
$sname=$_SESSION['s_name'] ;
$sid=$_SESSION['s_id'] ;
$email=$_SESSION['s_email'];
$sql="INSERT INTO `exapply`( `cname`, `sid`, `sname`, email,`status`) VALUES ('$course','$sid','$sname','$email','pending')";
mysqli_query($conn, $sql);





header("location: apply.php");

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
                <li><a href="admin_course_list.php">Councelling</a></li>
                <li><a href="course_table.php">Course List</a></li>
                <li><a href="stdnProfile.php">Problems</a></li>
                <li><a href="apply.php">Apply</a></li>
                <li><a href="sProfile.php">My Profile</a></li>
                <li><a href="index.php">Log out</a></li>
          </ul>
        </div>

        
    </div> 

    <div class="table">
        <section class="table__body">
            <div class="course-select">
                <table>
                  <thead>
                    <tr>
                      <th>
                        <div class="dropdown">
                          <button class="dropbtn">Select Course</button>
                          <div class="dropdown-content">
                            <a href="#">Database Management System </a>
                            <a href="#">Structure Programming Language</a>
                            <a href="#">Data Structure and Algorithm 1</a>
                            <a href="#">Data Structure and Algorithm 2</a>
                            <a href="#">Object Oriented Programming</a>
                            <a href="#">Advanced Object Oriented Programming</a>
                            <a href="#">System Analysis and Design</a>
                            <a href="#">Software Enginnering</a>
                           
                           
                            
                          </div>
                        </div>
                      </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <form action=""method="post">
                      <td><input type="text" id="selected-course" name="course" placeholder="Selected course will be shown here" readonly></td>
                      <td><button class="btn-submit" type="submit">Submit</button></td>
                      </form>
                    </tr>
                  </tbody>
                </table>
              </div>
              
            
        </section>
        
    </div>
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
    width: 65vw;
    height: 70vh;
    background-color: transparent;
    margin-top: 3%;
    margin-left: 10%;
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
    background-color: #F68B1F;
    color: #006b21;
}

.status.cancelled {
    background-color: #F68B1F;
    color: #b30021;
}

.status.pending {
    background-color: #F68B1F;
}

.status.shipped {
    background-color: #F68B1F;
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


.course-select {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
  background-color: transparent;
}

table {
  border-collapse: collapse;
  width: 95%;
}

th {
  background-color: #c2c2c2;
  text-align: center;
  padding: 10px;
}

td {
  text-align: center;
  padding: 10px;
}

input[type=text] {
  width: 100%;
  padding: 10px;
  border: none;
  background-color: #f2f2f2;
}

.btn-submit {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px;
  cursor: pointer;
}

.btn-submit:hover {
  background-color: #3e8e41;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-left: -80%;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  z-index: 1;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  margin-top: 5px;
}

.dropdown-content {
  overflow-y: scroll;
  max-height: 380px; 
}

.dropdown-content::-webkit-scrollbar {
  width: 5px; 
}

.dropdown-content::-webkit-scrollbar-track {
  background: #f1f1f1; 
}

.dropdown-content::-webkit-scrollbar-thumb {
  background: #888; 
  border-radius: 5px; 
}

.dropdown-content::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

.dropdown-content a {
  color: black;
  padding: 6px 8px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color:  #F68B1F;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}



   </style>
</body>

<script>
 
    var dropdownBtn = document.querySelector(".dropbtn");
    var dropdownContent = document.querySelector(".dropdown-content");
    var selectedCourseField = document.querySelector("#selected-course");

    function toggleDropdown() {
      dropdownContent.classList.toggle("show");
    }

    dropdownBtn.addEventListener("click", toggleDropdown);

    dropdownContent.addEventListener("click", function(event) {
      if (event.target.tagName === "A") {
        var selectedCourse = event.target.textContent;
        selectedCourseField.value = selectedCourse;
        toggleDropdown();
      }
    });
    
    selectedCourseField.addEventListener("keydown", function(event) {
      if (event.keyCode === 8) {
        selectedCourseField.value = "";
      }
    });
    
    var submitBtn = document.querySelector(".btn-submit");
    submitBtn.addEventListener("click", function() {
      var selectedCourse = selectedCourseField.value;
      console.log("Selected course:", selectedCourse);
    });
    
    </script>
    


</html>