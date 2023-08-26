<?php
session_start();
include('db.php');

if (isset($_POST['submitPost']) && isset($_SESSION['s_email'])) {
    $postContent = mysqli_real_escape_string($conn, $_POST['postContent']);
    $userId = $_SESSION['id'];
    
    $uploadDir = 'up/'; // Directory to store uploaded images

    if (!empty($postContent)) {
        $insertQuery = "INSERT INTO posts (id, content) VALUES ('$userId', '$postContent')";
        if (mysqli_query($conn, $insertQuery)) {
            if (!empty($_FILES['postImage']['name'])) {
                $fileName = $_FILES['postImage']['name'];
                $tmpName = $_FILES['postImage']['tmp_name'];
                $uploadPath = $uploadDir . $fileName;
                move_uploaded_file($tmpName, $uploadPath);
                
                // Insert image path into the database
                $imageQuery = "UPDATE posts SET image_path = '$uploadPath' WHERE id = '$userId' AND content = '$postContent' ORDER BY created_at DESC LIMIT 1";
                mysqli_query($conn, $imageQuery);
            }
            
            header("Location: posts.php");
            die();
        } else {
            echo '<p>Error submitting post.</p>';
        }
    }
}
?>
