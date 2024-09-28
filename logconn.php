<?php
include('connection.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = $_POST['uname'];
    $password = $_POST['password'];

    // Prepare SQL query to prevent SQL injection
    $sql = "SELECT * FROM usertable WHERE uname=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION["uname"] = $uname;
            $_SESSION["id"] = $row['id'];

            if ($row['is_admin'] == 1) {
                header('Location: admin.php');
                exit();
            } else {
                echo '<script type="text/javascript">
                alert("Welcome");
                window.location = "User/user_landing.php";
                </script>';
                exit();
            }
        } else {
            echo '<script type="text/javascript">
            alert("Invalid password");
            window.location = "index.php";
            </script>';
            exit();
        }
    } else {
        echo '<script type="text/javascript">
        alert("Invalid username or password");
        window.location = "index.php";
        </script>';
        exit();
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: index.php");
    exit();
}
?>