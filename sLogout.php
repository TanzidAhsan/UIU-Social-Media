<?php
session_start();
unset($_SESSION['s_id']);

header("location: index.php");


?>