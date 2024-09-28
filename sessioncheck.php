<?php
session_start();

if (isset($_SESSION['uname']) && isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    // header('Location: user_landing_page.php');
} else {
    echo '<script>
    alert("You must be logged in to view this page.");
    window.location = "index.php";
    </script>';
    exit();
}
?>