<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userMessage = $_POST['message'];

    // Simple chatbot logic (can be replaced with more complex logic)
    $botReply = "This is a chatbot reply for: " . htmlspecialchars($userMessage);

    echo $botReply;
}
?>
