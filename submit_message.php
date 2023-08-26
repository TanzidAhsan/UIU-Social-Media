<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'little_libary');

$name = $_POST['s_name'];
$message = $_POST['message'];

if (!empty($name) && !empty($message)) {
    $query = "INSERT INTO chat_messages (s_name, message) VALUES (?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ss', $name, $message);
    $stmt->execute();
    $stmt->close();
}

$mysqli->close();
?>
