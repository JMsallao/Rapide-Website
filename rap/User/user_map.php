<?php


include('header.php');
include('user_navbar.php');
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
    <link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">
    <title>Finter</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

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
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css\style2.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />



    <!-- Map -->
    <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.2.2/maptiler-sdk.umd.min.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.2.2/maptiler-sdk.css" rel="stylesheet" />


</head>

<body class="sub_page">


    <!-- team section -->

    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Map</h2>
                <h3 class="section-subheading text-muted">Where are you?</h3>
            </div>
            <div class="row">
                <div id="map" style="width: 100%; height: 300px;"></div>
                <script>
                maptilersdk.config.apiKey = 'Pn4vxcWgqoFGN0zJ9Osd';
                const map = new maptilersdk.Map({
                    container: 'map', // container's id or the HTML element to render the map
                    style: "basic-v2-light",
                    center: [16.62662018, 49.2125578], // starting position [lng, lat]
                    zoom: 14, // starting zoom
                });
                </script>
            </div>

        </div>
    </section>
    <!-- end team section -->

    <!-- info section -->
    <section class="info_section ">
        <div class="container">
            <div class="info_top">
                <div class="row">
                    <div class="col-md-3 ">
                        <a class="navbar-brand" href="index.html">
                            Finter
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
                                    +01 1234567890
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="social_box">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
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
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- owl slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- nice select -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"
        integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76A7a9Hr8lFztXXwjbK6g3Kbt1Lz6Y3auD8r5c6EwHgjV4ldtJgROZXB6ZGdvep" crossorigin="anonymous">
    </script>
</body>

</html>