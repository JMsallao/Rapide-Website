<?php
include('../header.php');
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



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.umd.js"></script>
    <link href="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.css" rel="stylesheet" />
    <script src="https://cdn.maptiler.com/leaflet-maptilersdk/v2.0.0/leaflet-maptilersdk.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.maptiler.com/maptiler-sdk-js/v2.0.3/maptiler-sdk.umd.min.js"></script>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
    google.charts.load('current', {
        'packages': ['corechart', 'bar']
    });

    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Crimes', 'Count'],
            <?php
                if (isset($data_json)) {
                    $data_array = json_decode($data_json, true);
                    foreach ($data_array as $crime) {
                        echo "['" . $crime[0] . "', " . $crime[1] . "],";
                    }
                }
                ?>
        ]);
        var options = {
            title: 'Crime Reports'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawBarChart);

    function drawBarChart() {
        var data = google.visualization.arrayToDataTable([
            ['Crime', 'Percentage'],
            <?php
                if (isset($data_json)) {
                    $data_array = json_decode($data_json, true);
                    foreach ($data_array as $crime) {
                        echo "['" . $crime[0] . "', " . $crime[1] . "],";
                    }
                }
                ?>
        ]);
        var options = {
            title: 'Crime Reports',
            width: 900,
            legend: {
                position: 'none'
            },
            chart: {
                title: 'Bar Graph Crime Reports',
                subtitle: 'crime by percentage'
            },
            bars: 'horizontal',
            axes: {
                x: {
                    0: {
                        side: 'top',
                        label: 'Percentage'
                    }
                }
            },
            bar: {
                groupWidth: "40%"
            }
        };
        var chart = new google.visualization.BarChart(document.getElementById('dual_x_div'));
        chart.draw(data, options);
    }
    </script>
    <style>
    #dual_x_div>div>div:nth-child(1)>div>svg>rect {
        width: 100px;
    }
    </style>

</head>

<body class="sub_page">
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
</body>

</html>