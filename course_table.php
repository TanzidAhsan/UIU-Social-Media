<?php
include("db.php");



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


.table {
    width: 72vw;
    height: 75vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;
    margin-top: 110px;
    margin-left: 120px;
     
   
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
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
    overflow: overlay;
}

.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
    padding-left: 30px;
     
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
        background-color: #4CAF50;
        color: white;
        padding: 5px 10px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }
      button:hover {
        background-color: #3e8e41;
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


   </style>
</head>

<body>
    <div class="main">
        <div class="navbar-new">
            <div class="icon">
                <div class="uiu_logo">
                  <img src="..//Little_Library/image/uiu logo.png" height="70px" width="70px"   >
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





    <div class="table">
        <section class="table__header">
            <h1>Course List</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div>
           
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Course Name <span class="icon-arrow">&UpArrow;</span></th>
                       
                      </tr>
                </thead>

                
                 <tbody>  
                 <?php
                              

                              $sqli = "select*
                              from courses ";
                              $result = mysqli_query($conn, $sqli);
                              while ($row = mysqli_fetch_array($result)) {
                                
                                   $course=$row['course_name'];
                                   $id=$row['course_code'];


                              ?>
                        <tr>
                          <td><?php  echo"<a href='Ptable.php?id=$id'> $course </a>"?></td>
                        </tr>
                                

                </tbody>
                <?php } ?>
            </table>
            
        </section>
         
        
    </main>
</body>

<script>
    const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}

// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}


</script>

</html>

