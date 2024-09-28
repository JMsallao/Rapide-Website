<?php
include("sessioncheck.php");
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $fieldsToUpdate = [];

    if (isset($_POST["fname"])) {
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $fieldsToUpdate[] = "fname='$fname'";
    }
    if (isset($_POST["lname"])) {
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $fieldsToUpdate[] = "lname='$lname'";
    }
    if (isset($_POST["sex"])) {
        $sex = mysqli_real_escape_string($conn, $_POST['sex']);
        $fieldsToUpdate[] = "sex='$sex'";
    }
    if (isset($_POST["phone"])) {
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $fieldsToUpdate[] = "phone='$phone'";
    }

    if (!empty($fieldsToUpdate)) {
        $updateQuery = "UPDATE usertable SET " . implode(", ", $fieldsToUpdate) . " WHERE id='$id'";
        
        if (mysqli_query($conn, $updateQuery)) {
            echo "<script>
                alert('Record Successfully modified');
                window.location='user_profile.php';
                </script>";
        } else {
            echo "<script>
                alert('Error updating record: " . mysqli_error($conn) . "');
                window.location='user_profile.php';
                </script>";
        }
    } else {
        echo "<script>
            alert('No fields to update');
            window.location='user_profile.php';
            </script>";
    }
}
?>