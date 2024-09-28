<?php
include('connection.php');
include('sessioncheck.php');
include('header.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css\user_products.css" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</head>

<body>
    <?php
      $sql = "SELECT * FROM usertable WHERE uname='" . $_SESSION['uname'] . "'";
      $result = $conn->query($sql);
  
      while ($row = $result->fetch_assoc()) {
      ?>
    <nav class="nav_bar">

        <button id="offcanvas_focus" class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
            aria-controls="offcanvasTop">
            <div class="logo_toggler"><i class='bx bx-menu'></i><img src="images\blacklogo.jpeg" alt=""></div>
        </button>

        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasTopLabel">Takozaki<img src="images\blacklogo.jpeg" alt=""></h5>
                <button id="offcanvas_focus" type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="tab">
                    <a href="user_homepage.php">Home</a>
                    <a href="user_about_us.php">About</a>
                    <a href="user_product.php">Products</a>
                    <a href="user_pendings_order.php">Orders</a>
                    <a href="user_cart _pickup.php">Cart</a>
                    <a href="user_contact.php">Contact us</a>
                </div>
            </div>
        </div>

        <div class="right_body">
            <div class="user_tab">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user">
                            <div class="user_name">
                                <p> <?php echo $_SESSION['uname'] ?> </p>
                            </div>
                            <div class="user_photo">
                                <img src="profile_picture/<?php echo $row['image_file'] ?>" alt="">
                            </div>
                        </div>
                    </button>
                    <ul id="dropdown" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <div class="dropdown_container">
                            <li>
                                <form action="user_profile.php" method="post"><button>Profile</button></form>
                            </li>
                            <li>
                                <form action="logout.php" method="post"><button type="submit"
                                        name="logout">Logout</button></form>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php } ?>

    <div class="main_body rounded p-2 my-3">



        <div class="cart_container rounded p-2 mt-2">
            <div class="cart_item rounded p-2 my-2 mx-2">
                <div class="w-100 pro duct_id_container justify-content-space-between d-flex align-items-start ">
                    <div class="w-100 d-flex align-items-start flex-column">
                        <div class="product_details">
                            <div class="ms-2">
                                <h5>Address Details</h5>
                            </div>
                        </div>
                        <div class="product_description ms-2 mt-1" style="">
                            <p class="m-0">Customer name: </p>
                            <p class="m-0">Phone Number: </p>
                            <p class="m-0">Address: </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="cart_container rounded p-2 mt-2">
            <div class="cart_item rounded p-2 my-2 mx-2">
                <div class="w-100 pro duct_id_container justify-content-space-between d-flex align-items-start ">
                    <div class="w-100 d-flex align-items-start flex-column">
                        <div class="product_details">
                            <div>
                                <h5>Order ID</h5>
                            </div>
                            <div>
                                <p class="mt-0" style="color: gray;">Completed</p>
                            </div>
                        </div>
                        <div class="product_photo">
                            <img class="rounded" src="images\3.png" alt="">
                            <div class="product_description ms-2 mt-1" style="">
                                <h5>Product Name</h5>
                                <p class="m-0">₱ 00.00</p>
                                <p class="m-0 mt-2">Quantity: 00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cart_item rounded p-2 my-2 mx-2">
                <div class="w-100 pro duct_id_container justify-content-space-between d-flex align-items-start ">
                    <div class="w-100 d-flex align-items-start flex-column">
                        <div class="product_details">
                            <div>
                                <h5>Order ID</h5>
                            </div>
                            <div>
                                <p class="mt-0" style="color: gray;">Completed</p>
                            </div>
                        </div>
                        <div class="product_photo">
                            <img class="rounded" src="images\3.png" alt="">
                            <div class="product_description ms-2 mt-1" style="">
                                <h5>Product Name</h5>
                                <p class="m-0">₱ 00.00</p>
                                <p class="m-0 mt-2">Quantity: 00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cart_container rounded p-2 mt-2">
            <div class="cart_item rounded p-2 my-2 mx-2">
                <div class="w-100 pro duct_id_container justify-content-space-between d-flex align-items-start ">
                    <div class="w-100 d-flex align-items-start flex-column">
                        <div class="product_details">
                            <div class="ms-2">
                                <h5>Payment</h5>
                            </div>
                        </div>
                        <div class="product_description ms-2 mt-1" style="">
                            <div class="product_total rounded mt-2 p-2">
                                <h4 class="m-0">Total: </h4>
                                <p class=" m-0">Subtotal</p>
                                <p class="price m-0">₱ 00.00</p>
                                <p class=" m-0" style="font-size:14px; color:gray;">Product Name</p>
                                <p class=" m-0" style="font-size:14px; color:gray;">₱ 00.00</p>
                                <p class=" m-0" style="font-size:14px; color:gray;">Product Name</p>
                                <p class=" m-0" style="font-size:14px; color:gray;">₱ 00.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="confirm_buttton">
        <button>Confirm</button>
    </div>
    </div>

    <footer class="footer">
        <div><img src="images\Logo.jpg" alt=""></div>
        <div class="footer_content">
            <p><i class='bx bxs-home p-2'></i>GST Town Center Rosario, Cavite</p>
            <p><i class='bx bxs-phone p-2'></i>Phone: +0936-600-9206</p>
            <p>&copy; 2024 Takozaki. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>