<?php
// Include your database connection file
include('../header.php');
include('user_navbar.php');


// Query to get package services from the database
$sql_package = "SELECT * FROM package_list";
$result_package = $conn->query($sql_package);

$sql_about = "SELECT * FROM about";
$result_about = $conn->query($sql_about);


?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../images/fevicon.png" type="image/x-icon">
    <title>Rapide</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="../css/style4.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="../css/responsive.css" rel="stylesheet" />


    <!-- Map -->
    <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.2.2/maptiler-sdk.umd.min.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.2.2/maptiler-sdk.css" rel="stylesheet" />





    <style>
    /* Styling for the user tab and dropdown */
    .user_tab {

        display: flex;
        align-items: center;
        justify-content: flex-end;
    }

    /* User button */
    .user-btn {

        background-color: transparent;
        border: none;
        padding: 5px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .user-btn:hover {
        transform: scale(1.05);
    }

    /* User photo styling */
    .user_photo img {
        border-radius: 50%;
        height: 50px;
        width: 50px;
        object-fit: cover;
        border: 2px solid #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Dropdown menu styling */
    .dropdown-menu {
        background-color: yellow;
        padding: 10px;
        margin-top: 10px;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        width: 200px;
    }

    /* Dropdown container */
    .dropdown_container {
        background-color: yellow;
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 10px;
    }



    #dropdownMenuButton1 {
        background-color: transparent;
        height: 50px;
        border-radius: 50%;
        border: none;
    }

    #dropdown>div>li:nth-child(1)>form>button {
        width: 100%;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
    }

    #dropdown>div>li:nth-child(2)>form>button {
        width: 100%;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
    }

    /* Responsive design */
    @media (max-width: 768px) {
        .dropdown-menu {
            width: 100%;
        }

        .user-btn {
            height: 60px;
            width: 60px;
        }

        .user_photo img {
            height: 45px;
            width: 45px;
        }

        .dropdown-item {
            padding: 12px;
            font-size: 18px;
        }
    }
    </style>
</head>

<body>

    <div class="chat">
        <a href="..\chat_system\user\chatroom.php?id=3">
            <button value=" <?php echo $row['chatroomid']; ?>" type="button" class="btn  border-0"
                data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                <img src="img\chat_icon.png" />
            </button>
        </a>
    </div>
    <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                if ($result_package->num_rows > 0) {
                    $isActive = true; // To make the first item active
                    while ($row = $result_package->fetch_assoc()) {
                        // Add the "active" class to the first carousel item
                        $activeClass = $isActive ? 'active' : '';
                        echo '<div class="carousel-item ' . $activeClass . '">';
                        echo '<div class="container">';
                        echo '<div class="row">';
                        echo '<div class="col-lg-10 col-md-11 mx-auto">';
                        echo '<div class="detail-box">';
                        echo '<h1>' . $row["name"] . '</h1>';
                        echo '<h3>' . $row["services_inclusion"] . '</h3>';
                        echo '<p> Starts at ₱ 1600</p>';
                        echo '<div class="btn-box">';
                        echo '<a href="login.php" class="btn1">Book Now</a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';

                    // After the first item, don't add the active class
                    $isActive = false;
                }
            } else {
                echo '<p>No package services available at the moment.</p>';
            }
            ?>
            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- end slider section -->
    </div>


    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center ">
                <h2 class="">
                    Our Services
                </h2>
                <p class="col-lg-8 px-0">

                    "Our auto repair shop offers expert maintenance and repair services, including engine diagnostics,
                    brake repairs, oil changes, tire services, and more. We ensure fast, reliable work to keep your
                    vehicle running smoothly and safely. Your car, our care!"
                </p>
            </div>
            <div class="service_container">
                <div class="carousel-wrap ">
                    <div class="service_owl-carousel owl-carousel">
                        <div class="item">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="../images/s1.png" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Home Welding
                                    </h5>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="../images/s4.png" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Machine Welding
                                    </h5>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="../images/s6.png" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Car Welding
                                    </h5>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="../images/s1.png" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Home Welding
                                    </h5>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="images/s4.png" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Machine Welding
                                    </h5>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="../images/s6.png" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        Car Welding
                                    </h5>
                                    <p>
                                        when looking at its layout. The point of using Lorem Ipsum is
                                        that it has a more-or-less normal
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    Read More
                </a>
            </div>
        </div>
    </section>

    <!-- service section ends -->

    <!-- about section -->

    <section class="about_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 offset-md-1">
                    <div class="detail-box pr-md-2">
                        <div class="heading_container">
                            <h2 class="">
                                About Us
                            </h2>
                        </div>
                        <p class="detail_p_mt">
                            Rapidé’s quality assurance can be summed up in these words: CASA-quality
                            services at affordable prices.
                            Our team of skilled technicians, coupled with state of the art equipment, allow us to fulfil
                            this vision. This vision is what we now refer to as the Rapidé Way,
                            and it’s something that separates us from every other competitor out there.
                            Curious about the #RapidéWay and what makes it so good? Come and experience it for yourself!
                        </p>
                        <a href="about.html" class="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="img-box ">
                        <img src="../images/bg1.jpg" class="box_img" alt="about img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- team section -->

    <section class="page-section bg-light" id="team">
        <div class="container mt-5">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Map</h2>
                <h3 class="section-subheading text-muted">Where are you?</h3>
            </div>
            <div class="row">
                <div id="map" style="width: 50%; height: 300px;"></div>
                <script>
                maptilersdk.config.apiKey = 'Pn4vxcWgqoFGN0zJ9Osd'; // Your API key
                const map = new maptilersdk.Map({
                    container: 'map', // container's id or the HTML element to render the map
                    style: 'basic-v2-light', // or choose another style from MapTiler
                    center: [120.90164, 14.444426], // Kawit coordinates [lng, lat]
                    zoom: 13, // Zoom level to show a 10-15 km radius
                });

                // Optional: Add a marker for Kawit
                const marker = new maptilersdk.Marker()
                    .setLngLat([120.9300, 14.4852]) // Marker position for Kawit
                    .setPopup(new maptilersdk.Popup({
                        offset: 25
                    }).setText('Kawit, Cavite')) // Popup with Kawit name
                    .addTo(map);

                // Optional: Add a circle to indicate the radius
                const circle = new maptilersdk.Circle({
                    center: [120.9300, 14.4852], // Center of the circle
                    radius: 15000, // Radius in meters (15 km)
                    color: 'rgba(0, 0, 255, 0.2)', // Color with transparency
                    strokeColor: 'rgba(0, 0, 255, 0.5)', // Circle border color
                    strokeWidth: 2 // Border width
                });
                circle.addTo(map);
                </script>
            </div>

        </div>
    </section>

    <!-- end team section -->

    <!-- contact section -->
    <section class="contact_section mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img-box ">
                        <img src="../images/bg3.jpg" class="box_img" alt="about img">
                    </div>
                </div>
                <div class="col-md-5 mx-auto">
                    <div class="form_container">
                        <div class="heading_container heading_center">
                            <h2>Get In Touch</h2>
                        </div>
                        <form action="">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Your Name" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" placeholder="Phone Number" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <select name="" id="" class="form-control wide">
                                        <option value="">Select Service</option>
                                        <option value="">Service 1</option>
                                        <option value="">Service 2</option>
                                        <option value="">Service 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="email" class="form-control" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="message-box form-control" placeholder="Message" />
                                </div>
                            </div>
                            <div class="btn_box">
                                <button>
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- client section -->
    <!-- 
    <section class="client_section layout_padding">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Testimonial
                </h2>
                <hr>
            </div>
            <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-7 col-md-9 mx-auto">
                                <div class="client_container ">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            Jone Mark
                                        </h5>
                                        <p>
                                            Editors now use Lorem Ipsum as their default model text, and a search for
                                            'lorem ipsum' will uncover many web sites still in their infancy. Various
                                            versions have evolved over the years, sometimes by
                                        </p>
                                        <span>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-7 col-md-9 mx-auto">
                                <div class="client_container ">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            Jone Mark
                                        </h5>
                                        <p>
                                            Editors now use Lorem Ipsum as their default model text, and a search for
                                            'lorem ipsum' will uncover many web sites still in their infancy. Various
                                            versions have evolved over the years, sometimes by
                                        </p>
                                        <span>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-7 col-md-9 mx-auto">
                                <div class="client_container ">
                                    <div class="img-box">
                                        <img src="images/client.jpg" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <h5>
                                            Jone Mark
                                        </h5>
                                        <p>
                                            Editors now use Lorem Ipsum as their default model text, and a search for
                                            'lorem ipsum' will uncover many web sites still in their infancy. Various
                                            versions have evolved over the years, sometimes by
                                        </p>
                                        <span>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                        <span>
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                        <span>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section> -->

    <!-- end client section -->

    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="info_top">
                <div class="row">
                    <div class="col-md-3 ">
                        <a class="navbar-brand" href="../index.html">
                            Rapide
                        </a>
                    </div>
                    <div class="col-md-5 ">
                        <div class="info_contact">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call : 0966 061 9979
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info_bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="info_detail">
                            <h5>
                                Company
                            </h5>
                            <p>
                                Randomised words which don't look even slightly believable. If you are going to use a
                                passage of
                                Lorem
                                Ipsum, you need to be sure
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="info_form">
                            <h5>
                                NEWSLETTER
                            </h5>
                            <form action="">
                                <input type="text" placeholder="Enter Your Email" />
                                <button type="submit">
                                    Subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info_detail">
                            <h5>
                                Services
                            </h5>
                            <p>
                                Randomised words which don't look even slightly believable. If you are going to use a
                                passage of
                                Lorem
                                Ipsum, you need to be sure
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="">
                            <h5>
                                Useful links
                            </h5>
                            <ul class="info_menu">
                                <li>
                                    <a href="index.html">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="about.html">
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="service.html">
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="team.html">
                                        Team
                                    </a>
                                </li>
                                <li class="mb-0">
                                    <a href="contact.html">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="">Rapide.ph</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="../js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76A7a9Hr8lFztXXwjbK6g3Kbt1Lz6Y3auD8r5c6EwHgjV4ldtJgROZXB6ZGdvep" crossorigin="anonymous">
    </script>
    <!-- End Google Map -->
</body>

</html>