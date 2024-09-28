<?php
include('connection.php');

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['confirm']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname']; 
    $email = $_POST['email']; 
    $username = $_POST['uname']; 
    $password = $_POST['password']; 
    $confirm= $_POST['confirm'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usertable (fname, lname, email, uname, password, confirm) VALUES ('$fname', '$lname', '$email','$username','$hashed_password', '$confirm')";

    if($conn->query($sql) == TRUE) {
        echo '<script>
        alert("New record created successfully.");
        window.location =  "index.php";
        </script>';
    }  
}

$conn->close();
?>