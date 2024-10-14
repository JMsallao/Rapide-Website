<?php
include('../connection.php');
include('../sessioncheck.php');
include('../header.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
    body {
        background-color: rgb(221, 221, 221);
    }


    .user_photo {
        width: 100px;
        /* Set the desired width */
        height: 100px;
        /* Set the desired height */
        overflow: hidden;
        /* Hide overflow */
        border-radius: 50%;
        /* Make it a circle if needed */
        display: flex;
        /* Center the image */
        justify-content: center;
        /* Center the image */
        align-items: center;
        /* Center the image */
    }

    .user_photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensure the image covers the entire container */
        border-radius: 50%;
        /* Make it a circle if needed */
    }

    .dropdown_container {
        list-style-type: none;
        /* Remove default list styling */
        background-color: #ffffff;
        border-radius: 10px;
    }



    .dropdown_container button {
        background-color: #ff0000;
        /* Initial background color */
        color: white;
        /* Initial text color */
        text-align: center;
        /* Center text */
        text-decoration: none;
        /* No underline */
        display: inline-block;
        /* Inline-block display */
        font-size: 16px;
        /* Font size */
        cursor: pointer;
        /* Pointer cursor on hover */
        transition: background-color 0.3s, color 0.3s;
        /* Smooth transition */
        border-radius: 20px;
    }

    .dropdown_container button:hover {
        background-color: #717171;
        /* Background color on hover */
        color: rgb(255, 255, 255);
        /* Text color on hover */
    }

    .body>div.main_body.rounded.p-2.my-3>div>div.cart_item.rounded.p-2.my-2.mx-2>div>div.w-50.d-flex.align-items-start.flex-column>div>img {
        border-radius: 50%;
    }

    .accordion-body img {
        background-color: gray;
        width: 100%;
        /* height: 1000px; */
    }

    .check_out_box {
        /* background-color: #007bff; */
        width: 90%;
        /* height: 50%; */
        margin-left: 50%;
        transform: translateX(-50%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;

    }

    .delivery_details,
    .place_order {
        background-color: white;
        width: 100%;
        /* height: 250px; */
    }

    .details {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .details button {
        border: none;
        background-color: darkgray;
    }

    .product_total {
        background-color: white;
        width: 100%;
    }

    .product {
        border-top: 1px solid gray;
        border-bottom: 1px solid gray;
    }

    .product_item {
        display: flex;
        justify-content: space-between;

    }

    .sub_total,
    .total {
        display: flex;
        justify-content: space-between;

    }

    .place_order button {
        border: none;
        width: 100%;
        background-color: red;
        color: white;
    }

    /* .address-box h2 {
      margin-left: 20px;
      margin-top: 0;
  }
  
  .input-group {
      margin-left: 20px;
      margin-bottom: 15px;
  }
  
  .input-group label {
      display: block;
      margin-bottom: 5px;
  }
  
  .input-group input[type="text"],
  .input-group textarea {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
  }
  
  .input-group textarea {
      resize: vertical;
  }
  
  .input-group input[type="text"]:focus,
  .input-group textarea:focus {
      border-color: #007bff;
      outline: none;
  }
  
  .input-group input[type="text"]::placeholder,
  .input-group textarea::placeholder {
      color: #999;
  }
  
  .input-group input[type="text"]:required:invalid,
  .input-group textarea:required:invalid {
      border-color: red;
  }
  
  .input-group input[type="text"]:required:valid,
  .input-group textarea:required:valid {
      border-color: green;
  }
  
  .switch {
      margin-left: 20px;
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
      margin-bottom: 10px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #bf2323;
      -webkit-transition: .4s;
      transition: .4s;
      border-radius: 20px;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
      border-radius: 20px;
    }
    
    input:checked + .slider {
      background-color: #8e8e8e;
      border-radius: 20px;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
   */


    .price {
        color: red;
    }

    .cart_header {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        background-color: white;
    }

    .cart_header a {
        text-decoration: none;
        color: black;

        width: 100%;
        /* height: 100%; */
        text-align: center;
        transition: .3s;
    }

    .cart_header a:hover,
    .cart_header a.active {
        background-color: red;
        color: white;
    }

    .cart_container {
        background-color: white;

    }

    .cart_item {
        /* background-color: gray; */
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid gray;
    }

    .product_photo img {
        border-radius: 50%;
        width: 100px;
    }


    .product_buttons {
        display: flex;
        flex-direction: column;
        height: 100px;
        width: 70px;
        /* background-color: gray; */
    }

    .product_buttons button {
        color: white;
        font-size: 15px;
        border: none;
        height: 100%;
    }

    .product_total {
        background-color: white;
    }

    .total_header {
        /* background-color: gray; */
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid gray;
    }

    .total_details .details {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .check_out {
        width: 100%;

        border-top: 1px solid gray;
        /* background-color: gray; */
    }

    .check_out button {
        color: white;
        width: 100%;
        border: none;
        background-color: red;
        transition: .3s;
    }

    .check_out button:hover {
        background-color: rgb(168, 0, 0);

    }

    .main_body .Atags {
        text-decoration: none;
        color: black;
    }

    .product_details {
        width: 100%;
        display: flex;
        justify-content: space-between;
        /* background-color: gray; */
    }

    .product_photo {
        margin-top: 10px;
        margin-bottom: 10px;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .product_photo img {
        height: 300px;
        width: 300px;
    }

    .submit_buttton {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .submit_buttton button {
        height: 40px;
        width: 100%;
        border: none;
        outline: none;
        background-color: red;
        border-radius: 5px;
    }

    .submit_buttton button:hover {
        background-color: rgb(53, 57, 59);
        color: aliceblue;
    }


    /* profile */


    .container {
        width: 100%;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group textarea {
        width: 100%;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .form-group button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>

    <?php

    $sql = "SELECT * FROM usertable WHERE uname='" . $_SESSION['uname'] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_array($result);


        if (count($_POST) > 0) {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $sex = $_POST['sex'];
            $phone = $_POST['phone'];
            $username = $_POST['uname'];
            $address = $_POST['address'];
            $city = $_POST['city'];
            $province = $_POST['province'];
            $zip = $_POST['zip'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $image_file = $_POST['image_file'];

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            mysqli_query($conn, "UPDATE usertable SET
            fname='$fname',
            lname='$lname',
            sex='$sex',
            phone='$phone',
            address='$address',
            city='$city',
            province='$province',
            zip='$zip',
            uname='$username',
            email='$email',
            image_file='$image_file',
            password='$hashed_password' WHERE id='" . $_POST['id'] . "'");
            echo "<script>
          alert('Record Successfully modified');
          window.location='user_profile.php';
          </script>";
        }
        ?>

    <div class="modal fade" id="change_profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="update_photo.php" method="post" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Change Profile Picture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>">
                            <input type="file" class="form-control" id="image_file" name="image_file"
                                accept=".jpg, .jpeg, .png">
                            <label class="input-group-text" for="image_file">Upload</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update_photo" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>

            </form>
        </div>
    </div>




    <div class="main_body rounded p-2 my-3">
        <button><a href="user_homepage.php"><img src="images\logo\home.png" alt=""></a></button>
        <div class="cart_container rounded p-2 mt-2">
            <h2 class="ms-3">
                <p class="card-text">Profile ID: <?php echo $row['id']; ?></p>
            </h2>

            <div class="cart_item rounded p-2 my-2 mx-2">
                <div class="w-100 pro duct_id_container justify-content-space-between d-flex align-items-start ">
                    <div class=" w-50 d-flex align-items-start flex-column">
                        <div class="product_photo">
                            <img class="w-60 m-0" src="profile_picture/<?php echo $row['image_file'] ?>" alt="">
                            <button type="button" class="btn btn-primary p-0" data-bs-toggle="modal"
                                data-bs-target="#change_profile">
                                <h1 class="mt-2">+</h1>
                        </div>
                    </div>

                    <div class="w-100 pro duct_id_container justify-content-space-between d-flex align-items-start ">
                        <div class="container ">
                            <h2>User Details</h2>
                            <form action="setting_update_details.php" method="POST">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="fname" name="fname" required
                                                placeholder="First name:" value="<?php echo $row['fname']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <div class="form-group">
                                                <input type="text" id="name" name="lname" required
                                                    placeholder="Last name:" value="<?php echo $row['lname']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-select" id="sex" name="sex" value="<?php echo $row['sex']; ?>">
                                        <option selected><?php echo $row['sex']; ?></option>
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" name="email" required placeholder="Email:"
                                        value="<?php echo $row['email']; ?>" />
                                </div>
                                <div class="form-group">
                                    <input type="number" id="phone" name="phone" required placeholder="Phone: 09"
                                        value="<?php echo $row['phone']; ?>" />
                                </div>
                                <div class="submit_buttton">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <div class="cart_container rounded p-2 mt-2">
                <h2 class="ms-2">Address</h2>
                <div class="cart_item rounded p-2 my-2 mx-2">
                    <div
                        class="w-100 pro duct_id_container justify-content-space-between d-flex align-items-start mt-3">
                        <div class="container">
                            <form action="setting_update_delivery_details.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" id="blockLot" name="blockLot"
                                                placeholder="House No./Block/Lot/Phase/Street"
                                                value="<?php echo $row['blockLot']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                            <div class="form-group">
                                                <input type="text" id="subdivision" name="subdivision"
                                                    placeholder="Subdivision"
                                                    value="<?php echo $row['subdivision']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div>
                                            <div class="form-group">
                                                <input type="text" id="barangay" name="barangay" placeholder="Barangay"
                                                    value="<?php echo $row['barangay']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" id="city" name="city" placeholder="City"
                                                value="<?php echo $row['city']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div>
                                            <div class="form-group">
                                                <input type="text" id="province" name="province" placeholder="Province">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div>
                                            <div class="form-group">
                                                <input type="number" id="zip" name="zip" placeholder="Zip"
                                                    value="<?php echo $row['zip']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit_buttton">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>





            <div class="cart_container rounded p-2 mt-2">
                <h2 class="ms-2">Username and Password</h2>
                <div class="cart_item rounded p-2 my-2 mx-2">
                    <div class="w-100 pro duct_id_container justify-content-space-between d-flex align-items-start ">
                        <div class="container">
                            <form action="setting_update_account_details.php" method="POST">
                                <div class="row">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="uname" name="uname" placeholder="Username"
                                                value="<?php echo $row['uname']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <div class="form-group">
                                                <input type="password" id="password" name="password"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="submit_buttton">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <?php
    } else {
        echo "User not found.";
    }
    ?>






</body>

</html>