<?php

$ans=$_POST['ans'];
$pid=$_POST['pid'];

    include("db.php");
   

    $sqli = "select * from problems where id='$pid'";
    $result = mysqli_query($conn, $sqli);
    while ($row = mysqli_fetch_array($result)) {

        $course = $row['course_name'];
       $code=$row['course_code'];

    

    }
    // echo$course;
    // echo$sid;
    // echo$cid;



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

            $allowed_exs = array("pdf", "docx", "png", "jpeg", "jpg", "zip","cpp","c",".pptx","mp4");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = 'Answers/' . $new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $sql = "INSERT INTO `answers`( `course_code`, `course_name`, `ans`, `file`,pid) VALUES ('$code','$course','$ans','$new_img_name','$pid')";




                mysqli_query($conn, $sql);
                header("Location: answers.php?id=$pid");
            } else {
                $em = "You can't upload files of this type";
                header("Location: answers.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: answers.php?error=$em");
    }

