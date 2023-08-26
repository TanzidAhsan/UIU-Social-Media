<?php
session_start();
unset($_SESSION['e_id']);

header("location: index.php");


?>