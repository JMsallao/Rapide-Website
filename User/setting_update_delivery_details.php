<?php
include ("sessioncheck.php");
include ("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["blockLot"], $_POST["subdivision"], $_POST["barangay"], $_POST["city"], $_POST["province"], $_POST["zip"], $_POST["id"])) {
        // Sanitize and validate input data
        $blockLot = htmlspecialchars(trim($_POST['blockLot']));
        $subdivision = htmlspecialchars(trim($_POST['subdivision']));
        $barangay = htmlspecialchars(trim($_POST['barangay']));
        $city = htmlspecialchars(trim($_POST['city']));
        $province = htmlspecialchars(trim($_POST['province']));
        $zip = htmlspecialchars(trim($_POST['zip']));
        $id = intval($_POST['id']);

        // Prepare an SQL statement to prevent SQL injection
        $stmt = $conn->prepare("UPDATE usertable SET blockLot=?, subdivision=?, barangay=?, city=?, province=?, zip=? WHERE id=?");
        $stmt->bind_param("ssssssi", $blockLot, $subdivision, $barangay, $city, $province, $zip, $id);

        if ($stmt->execute()) {
            echo "<script>
                alert('Record Successfully modified');
                window.location='user_profile.php';
                </script>";
        } else {
            echo "<script>
                alert('Error updating record: " . $stmt->error . "');
                window.location='user_profile.php';
                </script>";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "<script>
            alert('All fields are required.');
            window.location='user_profile.php';
            </script>";
    }
}

// Close the database connection
$conn->close();
?>