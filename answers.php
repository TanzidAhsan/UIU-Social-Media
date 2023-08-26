<?php
include('db.php');
error_reporting(E_ERROR | E_PARSE);
 $id=$_GET['id'];
// $cname=$_GET['cname'];

?>
<!DOCTYPE html>


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
      background: url(..//Little_Library/image/uiub.jpg) center / cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }



    .navbar {
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


    .table {
      width: 82vw;
      height: 72vh;
      background-color: #fff5;
      backdrop-filter: blur(7px);
      box-shadow: 0 .4rem .8rem #0005;
      border-radius: .8rem;
      margin-top: 110px;
    }

    .table__header {
      width: 100%;
      height: 10%;
      background-color: #fff4;
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
      margin-top: 120px;
      margin-left: 26px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      border-collapse: collapse;
      width: 100%;
      background-color: aliceblue;
    }

    th,
    td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    td span {
      font-weight: bold;
    }

    td a {
      display: block;
    }

    td input[type="text"] {
      width: 100%;
      padding: 8px 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }

    td button {
      margin-top: 5px;
      padding: 8px 10px;
      border: none;
      border-radius: 4px;
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }

    td button:hover {
      background-color: #3e8e41;
    }

    /* 1st row */
    .table__body .row1 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .table__body .row1 .answer-box {
      width: 60%;
      height: 100px;
      overflow-y: auto;
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 10px;
    }

    .table__body .row1 .download-btn {
      padding: 8px 10px;
      border: none;
      border-radius: 4px;
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }

    .table__body .row1 .download-btn:hover {
      background-color: #3e8e41;
    }


    /* Styling for the second row */
    .table__body .row2 {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 15px;
      border-bottom: 1px solid #ddd;
    }

    .table__body .row2 .file-upload {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 60%;
      height: 100%;
      background-color: #f2f2f2;
      border-radius: 5px;
      padding: 20px;
    }

    .table__body .row2 .file-upload i {
      font-size: 50px;
      color: #bbb;
    }

    .table__body .row2 .file-upload p {
      font-size: 16px;
      font-weight: bold;
      color: #bbb;
      margin-left: 20px;
    }

    .table__body .row2 .submit-answer {
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

    .table__body .row2 .submit-answer:hover {
      width: 45%;
      background-color: #fff8;
      box-shadow: 0 .1rem .4rem #0002;
    }

    .table__body .row2 .submit-answer button {
      width: 100%;
      padding: 8px 10px;
      border: none;
      border-radius: 4px;
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }

    .table__body .row2 .submit-answer button:hover {
      background-color: #3e8e41;
    }



    /* file upload button */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');




    .card {
      width: 150%;
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
      border: 3px dotted #a3a3a3;
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
    background-color: #1ba74a;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    outline: none;
    transition: 0.3s;
    margin-top: 198px;

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

    a.download-button {
      text-decoration: none;
    }


    .answer-box {
      width: 100%;
      height: 220px;
      overflow-y: scroll;
      /* Only scroll on the Y-axis */
      margin-top: 10px;
      padding: 10px;
      border: 2px solid #DF6E31;
      background-color: #F2F2F2;
    }



    section.section-one {
      width: 78vw;
      height: 46vh;
      overflow-y: scroll;
      overflow-x: hidden;
    }

    section.section-two {
      width: 78vw;
      margin-top: 30px;
    }

    textarea.submit-textarea {
      width: 400px;
      height: 110px;
      margin-left: 200px;
      overflow-y: scroll;
      overflow-x: hidden;
    }

    button.submit-button {
      margin-left: 200px;
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
                <li><a href="eventform.php">Event</a></li>

                <!-- <li><a href="sProfile.php">My Profile</a></li> -->
                <li><a href="chat.php">Chat</a></li>
                 
                
                <li><a href="sLogout.php">Log out</a></li>
              </ul>
            </div>
    </div>





    <!-- <div class="table">
          <section class="table__header">
            <h1></h1>
          </section> -->
    <section class="table__body">
      <section class="section-one">
        <table>
          <tbody>
          <?php
                              

                              $sqli = "select*
                              from answers where pid='$id' ";
                              $result = mysqli_query($conn, $sqli);
                              while ($row = mysqli_fetch_array($result)) {
                                
                                  
                                   $dis=$row['ans'];
                                   $file=$row['file'];

                              ?>
            <tr>
              <td>
                <div class="answer-box">
                <?php echo $dis ?>
                </div>
              </td>
              <td>
              <a href='Answers/<?php echo$file ?>'><button>Download</button></a>
                <!-- <button><a href="#" class="download-button">Download File</a></button> -->
              </td>
            </tr>
            <?php } ?>

          </tbody>
        </table>
      </section>
      <form action="answersUpload.php" method="POST" enctype="multipart/form-data">
      <section class="section-two">
        <table>
          <tbody>
            <tr>
              <td>
                <div class="card">
                  <h3>Upload Files</h3>
                  <div class="drop_box">
                    <header>
                      <h4>Select File here/</br> Drag and Drop</h4>
                    </header>
                    <p>Files Supported: PDF, TEXT, DOC , DOCX</br>
                      Size Limit 100 MB
                    </p>
                    <input type="file" name="my_image">
                    <input type="hidden" value="<?php echo $id ?>" name="pid">
                  </div>
                </div>
              </td>
              <td>
                <div class="submit-box">
                  <textarea class="submit-textarea" placeholder="Submit your answer here"name="ans" required></textarea>
                </div>
                <!-- <th><button type="button" class="btn btn-submit"name="submit">Submit</button></th> -->
                <th><button type='submit' name="submit">Submit</button></th>

              </td>
            </tr>
          </tbody>
        </table>
      </section>

      </br>
      </br>
      </br>
      </br>
      </br>
      </tbody>
      </table>
    </section>
  </form>
  </div>

  </main>
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
    //   <form action="" method="post">
    //   <div class="form">
    //   <h4>${fileName}</h4>
    //   </br>
    //   </br>
    //   </br>
    //   <button class="btn">Upload</button>
    //   </div>
    //   </form>`;
    dropArea.innerHTML = filedata;
  });

  // Listen for drag events
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
//     <form action="" method="post">
//     <div class="form">
//     <h4>${fileName}</h4>
//     </br>
//     </br>
//     </br>
//     <button class="btn">Upload</button>
//     </div>
//     </form>`;
//   dropArea.innerHTML = filedata;
// }




</script>

</html>