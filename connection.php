<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "rapide_db";

    $conn = mysqli_connect ($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die("byeee" . $conn->connect_error);
    }

?>