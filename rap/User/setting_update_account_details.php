<?php
include ("sessioncheck.php");
include ("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["uname"], $_POST["password"], $_POST["confirm"], $_POST["id"])) {
        // Sanitize and validate input data
        $username = htmlspecialchars(trim($_POST['uname']));
        $password = trim($_POST['password']);
        $confirm = trim($_POST['confirm']);
        $id = intval($_POST['id']);

        // Check if the passwords match
        if ($password === $confirm) {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare an SQL statement to prevent SQL injection
            $stmt = $conn->prepare("UPDATE usertable SET uname=?, password=? WHERE id=?");
            $stmt->bind_param("ssi", $username, $hashed_password, $id);

            if ($stmt->execute()) {
                echo "<script>
                    alert('Record Successfully modified');
                    window.location='User\user_profile.php';
                    </script>";
            } else {
                echo "<script>
                    alert('Error updating record: " . $stmt->error . "');
                    window.location='User\user_profile.php';
                    </script>";
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "<script>
                alert('Passwords do not match.');
                window.location='User\user_profile.php';
                </script>";
        }
    } else {
        echo "<script>
            alert('All fields are required.');
            window.location='User\user_profile.php';
            </script>";
    }
}

// Close the database connection
$conn->close();
?>