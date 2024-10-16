<?php
include('../../connection.php');
session_start();

if (isset($_POST['msg'])) {		
    $msg = $_POST['msg'];
    $recipient_id = $_POST['recipient_id']; // Expecting recipient_id to be passed in the request
    $sender_id = $_SESSION['user_id']; // Get the logged-in user's ID from the session

    // Insert the message into the `message` table
    $query = "INSERT INTO `message` (sender_id, recipient_id, message, created_at) VALUES ('$sender_id', '$recipient_id', '$msg', NOW())";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
}
?>
