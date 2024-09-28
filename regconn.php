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

    if ($password != $confirm){
        echo  "<script>
        alert ('Password and Confirm Password do not match!');
        window.location='login.php';
        </script>";
        exit;
    } else{

        
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usertable (fname, lname, email, uname, password) VALUES ('$fname', '$lname', '$email','$username','$hashed_password')";
    
    $username_checker = "SELECT * FROM usertable WHERE uname='$username'";
    $username_checker_result = $conn->query($username_checker);

    if($username_checker_result->num_rows > 0){
        echo "<script>
        alert ('Username already exist.');
        window.location='login.php';
        </script>";
        exit;
    }

    else if ($conn->query($sql) === TRUE){
        echo "<script>
        alert('Registration successful');
        window.location='index.php';
        </script>";
        exit;
    } }

    
}

$conn->close();
?>