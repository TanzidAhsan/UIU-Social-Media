<?php
$mysqli = new mysqli('localhost', 'root', '', 'little_library');

// Fetch chat messages function
function fetchChatMessages() {
    global $mysqli;
    $query = "SELECT * FROM chat_messages ORDER BY id DESC LIMIT 10";
    $result = $mysqli->query($query);

    $messages = array();

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $message = array(
                'name' => htmlspecialchars($row['s_name']),
                'timestamp' => $row['timestamp'],
                'message' => htmlspecialchars($row['message'])
            );
            $messages[] = $message;
        }
    }

    return $messages;
}

// Fetch chat messages and return as JSON
$chatMessages = fetchChatMessages();
echo json_encode($chatMessages);
?>
