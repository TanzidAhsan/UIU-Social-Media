<?php
include("db.php");
session_start();
$sid = $_SESSION['s_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>USM</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif;
    }

    body {
      min-height: 100vh;
      background: url(..//Little_Library/image/uiub.jpg) center / cover fixed;
      display: flex;
      justify-content: center;
      align-items: center;
    }


    .navbar-new {
      width: 1200px;
      height: 75px;
      margin: auto;

    }

    .icon {

      width: 200px;
      float: left;
      height: 70px;

    }

    .logo {
      color: #ff7200;
      font-size: 35px;
      font-family: Arial;
      padding-left: 20px;
      float: left;
      padding-top: 10px;
      margin-top: 5px;

    }

    .uiu_logo {
      width: 200px;
      float: left;
      height: 70px;
      padding-top: 12px;
      padding-left: 20px;
    }

    .menu {
      width: 100px;
      float: left;
      height: 70px;

    }

    ul {
      float: left;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-left: -45px;
      width: max-content;
    }


    ul li {
      list-style: none;
      margin-left: 62px;
      margin-top: 27px;
      font-size: 14px;
    }

    ul li a {
      text-decoration: none;
      color: #fff;
      font-family: Arial;
      font-weight: bold;
      transition: 0.4s ease-in-out;
    }

    ul li a:hover {
      color: #ff7200;
    }

    .search {
      width: 300px;
      float: left;
      margin-left: 600px;

    }

    .srch {
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

    .btn-new {
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

    .btn-new:hover {
      color: #000;
    }

    .btn:focus {
      outline: none;
    }

    .srch:focus {
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

    .information {
      text-align: center;
      background-color: transparent;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      height: 365px;
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

    p {
      text-align: left;
      margin-top: 15px;
      margin-left: 20px;
      margin-right: 20px;
      color: white;
    }


    h2 {
      padding-top: 10px;
      color: white;
    }

    .wrapper {
      margin-left: 60px;
      margin-top: -18px;
    }

    .wrapper .icon {
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

    i.fab.fa-github {
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
      width: 50vw;
      height: 77vh;
      background-color: #fff5;

      backdrop-filter: blur(7px);
      box-shadow: 0 .4rem .8rem #0005;
      border-radius: .8rem;
      margin-top: -30px;

    }

    .table__header {
      width: 40%;
      height: 15%;
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

    h1 {
      margin-top: 10px;
    }





    table {
      width: 95%;
      max-height: calc(89% - 1.6rem);
      background-color: #fffb;
      margin: .8rem auto;
      border-radius: .6rem;
      overflow: auto;
      overflow: overlay;
      margin-top: 0px;
      border-collapse: collapse;
    }

    table::-webkit-scrollbar {
      width: 0.5rem;
      height: 0.5rem;
    }

    table::-webkit-scrollbar-thumb {
      border-radius: .5rem;
      background-color: #0004;
      visibility: hidden;
    }

    table:hover::-webkit-scrollbar-thumb {
      visibility: visible;
    }

    th {
      position: sticky;
      top: 0;
      left: 0;
      background-color: #d5d1defe;
      cursor: pointer;
      text-transform: capitalize;
      padding: 1rem;
    }

    th:first-child {
      width: 40%;
    }

    th:last-child {
      width: 60%;
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
      padding: 1rem;
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

    /* dropdown button */
    .dropdown {
      position: relative;
      display: inline-block;
      margin-left: -60%;
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
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      padding: 12px 16px;
      margin-top: 5px;
    }

    input {
      height: 40px;
      width: 197px;
      margin-left: 73px;
    }

    .dropdown-content {
      overflow-y: scroll;
      max-height: 260px;
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
      background-color: #F68B1F;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #3e8e41;
    }


    textarea {
      width: 80%;
      height: 60px;
    }

    /* file upload button */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');




    .card {
      width: 95%;
      max-height: calc(89% - 1.6rem);
      background-color: #fffb;
      margin: .8rem auto;
      border-radius: .6rem;
      overflow: auto;
      overflow: overlay;
      margin-top: 15px;
      border-collapse: collapse;
    }

    .card h3 {
      font-size: 20px;
      font-weight: 600;
      margin-left: 15px;
      margin-top: 8px;

    }

    .drop_box {
      margin: 10px 0;
      padding: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      /* border: 3px dotted #a3a3a3; */
      border-radius: 5px;
    }

    .drop_box h4 {
      font-size: 16px;
      font-weight: 400;
      color: #2e2e2e;
    }

    .drop_box p {
      margin-top: 10px;
      margin-bottom: 20px;
      font-size: 12px;
      color: #a3a3a3;
    }

    .btn {
    text-decoration: none;
    background-color: #e31913;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    outline: none;
    transition: 0.3s;
}

    .btn:hover {
      text-decoration: none;
      background-color: #ffffff;
      color: #005af0;
      padding: 10px 20px;
      border: none;
      outline: 1px solid #010101;
    }

    .form input {
      margin: 10px 0;
      width: 100%;
      background-color: #e2e2e2;
      border: none;
      outline: none;
      padding: 12px 20px;
      border-radius: 4px;
    }



    /* table 2 */


    /* CSS for table */
    .table2 {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;

    }


    /* CSS for table header */
    .table2 th {
      background-color: #f2f2f2;

      padding: 8px;
      text-align: left;
    }

    /* CSS for table body */
    .table2 td {

      padding: 8px;
      text-align: left;
    }

    /* CSS for textarea */
    textarea {
      width: 100%;
      height: 100%;
      resize: none;
      border: none;
      padding: 5px;
      box-sizing: border-box;
    }

    /* CSS for buttons */
    button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 6px 10px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 4px 2px;
      cursor: pointer;
    }

    th {
      width: 55%;
    }




    #tinfobody span {
      display: block;
      margin-bottom: 10px;
      padding: 10px;
      border: 2px solid #DF6E31;
      background-color: #F2F2F2;
      color: #333;
      font-size: 18px;
      font-weight: bold;
    }

    #tinfobody span {
      height: 50px;
      display: block;
      margin: 5px 0 5px;
      padding: 2px 10px;
      border: 2px solid #DF6E31;
      background-color: rgba(242, 242, 242, 0.8);
      color: #333;
      font-size: 13px;
      font-weight: bold;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }


    .tinfo {
      width: 95%;
      max-height: calc(85% - 1.6rem);
      background-color: #fffb;

      margin: .8rem auto;
      border-radius: .6rem;

      overflow: auto;
      overflow: overlay;
    }

    .tinfo::-webkit-scrollbar {
      width: 0.5rem;
      height: 0.5rem;
    }

    .tinfo::-webkit-scrollbar-thumb {
      border-radius: .5rem;
      background-color: #0004;
      visibility: hidden;
    }

    .tinfo:hover::-webkit-scrollbar-thumb {
      visibility: visible;
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
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    }

    .thead::-webkit-scrollbar-track {
      background-color: #b3aeaeea;
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      border-radius: 10px;
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
                <li><a href="video1.php">Video</a></li>
                <li><a href="course_table.php">Course List</a></li>
                <li><a href="stdnProfile.php">Problems</a></li>
                <li><a href="chat.php">Chat</a></li>
                <!-- <li><a href="sProfile.php">My Profile</a></li> -->
                <li><a href="sLogout.php">Log out</a></li>
              </ul>
            </div>


    </div>


    <div class="content">
      <div class="column">
        <div class="image">
          <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="120"
            height="120">
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


        </div> -->

        <!-- <div class=" github icon">

        </div> -->

      </div>


      <div class="column">

      </div>

      <div class="table">
        <section class="table__header">
          <h1>FORM</h1>

        </section>
        <form action="problemupload.php" method="POST" enctype="multipart/form-data" >

          <section class="table__body">
            <table>
              <thead>
                <tr>
                  <th>
                    <div class="dropdown">

                      <input list="course" name="myCourse"  required/>
                      <datalist id="course">
                        <?php


                        $sqli = "select*
                              from courses ";
                        $result = mysqli_query($conn, $sqli);
                        while ($row = mysqli_fetch_array($result)) {

                          $course = $row['course_name'];
                          $id = $row['course_code'];

                          echo "<option value='$id'>$course </option>";

                        } ?>


                      </datalist>



                    </div>
      </div>
      </th>
      <th>
        <textarea placeholder="Enter Description" name="dis" required></textarea>
      </th>

      </tr>
      </thead>
      </table>


      <div class="card">
        <h3>Upload Files</h3>
        <div class="drop_box">
          <header>
            <h4>Select File here/</br> Drag and Drop</h4>
          </header>
          <p>Files Supported: PDF, TEXT, DOC , DOCX</br>
            Size Limit 100 MB
          </p>
          <input type="file" name="my_image" required>

          <th><button type='submit' name="submit">Submit</button></th>

        </div>

      </div>
     


      </section>
      </form>
      </br>
      </br>
      </br>
      <div class="table">
        <section class="table__header">
          <h1>Uploaded Problems</h1>


        </section>
        <section class="tinfo">
          <table>
            <thead>
              <!-- <tr>
                <th>Course Name</th>
                <th>Description</th>
                <th>File Show</th>
                <th>Delete</th>
              </tr> -->
            </thead>
            <?php


$sqli = "SELECT * FROM `problems` where sid='$sid' ";
              $result = mysqli_query($conn, $sqli);
              while ($row = mysqli_fetch_array($result)) {

                $course = $row['course_name'];
                $cid = $row['course_code'];
                $dis = $row['description'];
                $file = $row['file'];
                $id=$row['id'];
                ?>
            <tbody>
              


                <tr>
                  <td>
                    <?php echo $course ?>
                  </td>
                  <td>
                    <span>
                      <?php echo $dis ?>
                    </span>
                  </td>
                  <td>
                   <a href='uploads/<?php echo$file ?>'><button>Download</button></a>
                  </td>
                  
                  <td>
                    <?php echo " <a href='deleteProblems.php?id=$id'><button class='btn'>Delete</button></a>" ?>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </section>

        </br>
      </div>

    </div>


  </div>

  <div class="information">
    <h2>My Info.</h2>
    <div class="information_item">
      <p>Name </br><span>
          <?php echo $_SESSION['s_name'] ?>
        </span></p>
      <p>ID</br><span>
          <?php echo $_SESSION['s_id'] ?>
        </span></p>
      <p>Email</br><span>
          <?php echo $_SESSION['s_email'] ?>
        </span></p>
      <p>DOB</br><span>
          <?php echo $_SESSION['s_dob'] ?>
        </span></p>
        <p>Phone</br><span>
          <?php echo $_SESSION['phone'] ?>
        </span></p>
    </div>
  </div>





  </div>

</body>

<script>
  const dropArea = document.querySelector(".drop_box"),
    button = dropArea.querySelector("button"),
    dragText = dropArea.querySelector("header"),
    input = dropArea.querySelector("input");

  let file;

  button.onclick = () => {
    input.click();
  };

  // Listen for file input changes
  input.addEventListener("change", function (e) {
    const fileSize = e.target.files[0].size;
    const maxSize = 100 * 1024 * 1024; // 100MB in bytes
    if (fileSize > maxSize) {
      alert("File size exceeds limit of 100MB.");
      return;
    }
    const allowedTypes = ["pdf", "text", "doc", "docx"];
    const fileExt = e.target.files[0].name.split(".").pop().toLowerCase();
    if (!allowedTypes.includes(fileExt)) {
      alert("Only PDF, TEXT, DOC, DOCX files are allowed.");
      return;
    }
    var fileName = e.target.files[0].name;
    // let filedata = `
    // <form action="" method="post">
    // <div class="form">
    // <h4>${fileName}</h4>
    // </br>
    // </br>
    // </br>
    // <button class="btn">Upload</button>
    // </div>
    // </form>`;
    dropArea.innerHTML = filedata;
  });

   Listen for drag events
  dropArea.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropArea.classList.add("active");
    dragText.textContent = "Release to Upload File";
  });

  dropArea.addEventListener("dragleave", () => {
    dropArea.classList.remove("active");
    dragText.textContent = "Drag & Drop to Upload File";
  });

  dropArea.addEventListener("drop", (e) => {
    e.preventDefault();
    dropArea.classList.remove("active");
    file = e.dataTransfer.files[0];
    const fileSize = file.size;
    const maxSize = 100 * 1024 * 1024; // 100MB in bytes
    if (fileSize > maxSize) {
      alert("File size exceeds limit of 100MB.");
      return;
    }
    const allowedTypes = ["pdf", "text", "doc", "docx"];
    const fileExt = file.name.split(".").pop().toLowerCase();
    if (!allowedTypes.includes(fileExt)) {
      alert("Only PDF, TEXT, DOC, DOCX files are allowed.");
      return;
    }
    displayFile();
  });

  // Display the dropped file
  // function displayFile() {
  //   var fileName = file.name;
  //   let filedata = `
  //   <form action="" method="post">
  //   <div class="form">
  //   <h4>${fileName}</h4>
  //   </br>
  //   </br>
  //   </br>
  //   <button class="btn">Upload</button>
  //   </div>
  //   </form>`;
  //   dropArea.innerHTML = filedata;
  // }


</script>


</html>