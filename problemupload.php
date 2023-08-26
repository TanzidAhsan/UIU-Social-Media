<?php
$cid = $_POST['myCourse'];
$dis=$_POST['dis'];


    session_start();
    include("db.php");

    $sid = $_SESSION['s_id'];
    $sname = $_SESSION['s_name'];
    $cid = $_POST['myCourse'];
    $dis=$_POST['dis'];
    $course='';


    $sqli = "select * from courses where course_code='$cid'";
    $result = mysqli_query($conn, $sqli);
    while ($row = mysqli_fetch_array($result)) {

        $course = $row['course_name'];
       

    

    }
    echo$course;
    echo$sid;
    echo$cid;



    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 215000000) {
            $em = "Sorry, your file is too large.";
            header("Location: stdnProfile.php?error=$em");
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("pdf", "docx", "png", "jpeg", "jpg", "zip","cpp","c","pptx","mp4");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("file-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'uploads/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO `problems`( `course_code`, `course_name`, `description`, `file`,sid) VALUES ('$cid','$course','$dis','$new_img_name','$sid')";




                mysqli_query($conn, $sql);
                header("Location: stdnProfile.php");
            } else {
                $em = "You can't upload files of this type";
                header("Location: stdnProfile.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: stdnProfile.php?error=$em");
    }

