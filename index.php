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
    <title>Rapide.ph</title>

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
    <link href="css\style3.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

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








































    body {
        font-family: 'Poppins', sans-serif;
        color: #0c0c0c;
        background-color: #ffffff;
        overflow-x: hidden;
    }

    .user-btn {
        background-color: black;
        /* Set the background color */
        border-radius: 50%;
        /* Make it round */
        height: 60px;
        width: 70px;
        padding: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        /* Remove border */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease;
        /* Smooth hover effect */
    }

    .user-btn:hover {
        transform: scale(1.05);
        /* Slight zoom on hover */
    }

    .user_photo img {
        border-radius: 50%;
        height: 50px;
        width: 50px;
        object-fit: cover;
        /* Keep the aspect ratio */
        border: 2px solid white;
        /* Add a border around the image */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Small shadow for better focus */
    }

    /* General dropdown menu styling */
    .dropdown-menu {
        list-style: none;
        padding: 0;
        margin: 0;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 200px;
        transform-origin: top right;
        transition: all 0.3s ease;
    }

    /* Dropdown items */
    .dropdown-item {
        padding: 10px 15px;
        color: #333;
        text-decoration: none;
        display: block;
        transition: background-color 0.2s;
    }

    .dropdown-item:hover {
        background-color: #f1f1f1;
        color: #007bff;
    }

    /* Log out button */
    .logout-btn {
        background: none;
        border: none;
        color: #007bff;
        width: 100%;
        text-align: left;
        padding: 10px 15px;
        transition: background-color 0.2s;
    }

    .logout-btn:hover {
        background-color: #f1f1f1;
        color: #dc3545;
        cursor: pointer;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .dropdown-menu {
            width: 100%;
        }

        .dropdown-item,
        .logout-btn {
            padding: 12px;
            font-size: 16px;
        }

        .user-btn {
            width: 60px;
            height: 60px;
        }

        .user_photo img {
            height: 45px;
            width: 45px;
        }
    }

































    /*  */


    .layout_padding {
        padding: 90px 0;
    }

    .layout_padding2 {
        padding: 75px 0;
    }

    .layout_padding2-top {
        padding-top: 75px;
    }

    .layout_padding2-bottom {
        padding-bottom: 75px;
    }

    .layout_padding-top {
        padding-top: 90px;
    }

    .layout_padding-bottom {
        padding-bottom: 90px;
    }

    .heading_container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    .heading_container h2 {
        position: relative;
        font-weight: bold;
    }

    .heading_container h2 span {
        color: #fb0;
    }

    .heading_container.heading_center {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
    }

    a,
    a:hover,
    a:focus {
        text-decoration: none;
    }

    a:hover,
    a:focus {
        color: initial;
    }

    .btn,
    .btn:focus {
        outline: none !important;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    /*header section*/
    .hero_area {
        position: relative;
        min-height: 100vh;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
    }

    .hero_area .hero_bg_box {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }

    .hero_area .hero_bg_box img {
        width: auto;
        height: auto;
        min-width: 100%;
        min-height: 100%;
    }

    .hero_area .hero_bg_box::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.9)), to(rgba(0, 0, 0, 0.7)));
        background: linear-gradient(to right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.7));
    }

    .sub_page .hero_area {
        min-height: auto;
    }

    .header_section .header_top {
        padding: 15px 0;
        border-bottom: 1px solid #ffffff;
    }

    .header_section .header_top .header_top_container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .header_section .header_top .contact_nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
    }

    .header_section .header_top .contact_nav a {
        color: #ffffff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .header_section .header_top .contact_nav a i {
        margin-right: 5px;
        background-color: #fb0;
        width: 35px;
        height: 35px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #ffffff;
        border-radius: 100%;
    }

    .header_section .header_top .contact_nav a:hover i {
        background-color: #fb0;
    }

    .header_section .header_top .social_box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        min-width: 200px;
    }

    .header_section .header_top .social_box a i {
        margin-right: 5px;
        background-color: #fb0;
        width: 28px;
        height: 28px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #ffffff;
        border-radius: 100%;
    }

    .header_section .header_top .social_box a:hover i {
        background-color: #fb0;
    }

    .header_section .header_bottom {
        padding: 15px 0;
    }

    .header_section .header_bottom .container-fluid {
        padding-right: 25px;
        padding-left: 25px;
    }

    .navbar-brand {
        color: #ffffff;
        font-weight: bold;
        font-size: 24px;
    }

    .navbar-brand span {
        color: #fb0;
    }

    .navbar-brand:hover {
        color: inherit;
    }

    .custom_nav-container {
        padding: 0;
    }

    .custom_nav-container .navbar-nav {
        margin-left: auto;
    }

    .custom_nav-container .navbar-nav .nav-item .nav-link {
        padding: 5px 30px;
        color: #ffffff;
        text-align: center;
        text-transform: uppercase;
        border-radius: 5px;
        font-size: 15px;
        -webkit-transition: all .3s;
        transition: all .3s;
    }

    .custom_nav-container .navbar-nav .nav-item .nav-link i {
        margin-right: 5px;
    }

    .custom_nav-container .navbar-nav .nav-item:hover .nav-link {
        color: #fb0;
    }

    .custom_nav-container .nav_search-btn {
        width: 35px;
        height: 35px;
        padding: 0;
        border: none;
        color: #ffffff;
    }

    .custom_nav-container .nav_search-btn:hover {
        color: #fb0;
    }

    .custom_nav-container .navbar-toggler {
        outline: none;
    }

    .custom_nav-container .navbar-toggler {
        padding: 0;
        width: 37px;
        height: 42px;
        -webkit-transition: all .3s;
        transition: all .3s;
    }

    .custom_nav-container .navbar-toggler span {
        display: block;
        width: 35px;
        height: 4px;
        background-color: #ffffff;
        margin: 7px 0;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        position: relative;
        border-radius: 5px;
        -webkit-transition: all .3s;
        transition: all .3s;
    }

    .custom_nav-container .navbar-toggler span::before,
    .custom_nav-container .navbar-toggler span::after {
        content: "";
        position: absolute;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: #ffffff;
        top: -10px;
        border-radius: 5px;
        -webkit-transition: all .3s;
        transition: all .3s;
    }

    .custom_nav-container .navbar-toggler span::after {
        top: 10px;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] span {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] span::before,
    .custom_nav-container .navbar-toggler[aria-expanded="true"] span::after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        top: 0;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] .s-1 {
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        margin: 0;
        margin-bottom: -4px;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] .s-2 {
        display: none;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="true"] .s-3 {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        margin: 0;
        margin-top: -4px;
    }

    .custom_nav-container .navbar-toggler[aria-expanded="false"] .s-1,
    .custom_nav-container .navbar-toggler[aria-expanded="false"] .s-2,
    .custom_nav-container .navbar-toggler[aria-expanded="false"] .s-3 {
        -webkit-transform: none;
        transform: none;
    }

    /*end header section*/
    /* slider section */
    .slider_section {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .slider_section .row {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .slider_section #customCarousel1 {
        width: 100%;
        position: unset;
    }

    .slider_section .detail-box {
        color: #ffffff;
        text-align: center;
    }

    .slider_section .detail-box h1 {
        font-weight: 600;
        margin-bottom: 15px;
        color: #ffffff;
    }

    .slider_section .detail-box .btn-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-top: 20px;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .slider_section .detail-box .btn-box a {
        text-align: center;
        width: 165px;
    }

    .slider_section .detail-box .btn-box .btn1 {
        display: inline-block;
        padding: 10px 15px;
        background-color: #fb0;
        color: #ffffff;
        border-radius: 0;
        -webkit-transition: all .3s;
        transition: all .3s;
        border: 1px solid #fb0;
    }

    .slider_section .detail-box .btn-box .btn1:hover {
        background-color: transparent;
        color: #fb0;
    }

    .slider_section .img-box img {
        width: 100%;
    }

    .slider_section .carousel_btn-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin: 45px auto 0 auto;
        width: 110px;
        height: 50px;
    }

    .slider_section .carousel_btn-box a {
        top: 50%;
        width: 50px;
        height: 50px;
        background-color: #ffffff;
        opacity: 1;
        color: rgb(192, 142, 4);
        font-size: 14px;
        -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.25);
        -webkit-transition: all .2s;
        transition: all .2s;
    }

    .slider_section .carousel_btn-box a:hover {
        background-color: #2c7873;
        color: #ffffff;
    }

    .slider_section .carousel_btn-box .carousel-control-prev {
        left: 25px;
    }

    .slider_section .carousel_btn-box .carousel-control-next {
        right: 25px;
    }

    .service_section .heading_container {
        margin-bottom: 35px;
    }

    .service_section .box {
        margin: 10px;
        text-align: center;
        -webkit-box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.15);
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.15);
        padding: 25px 15px;
        -webkit-transition: all .3s;
        transition: all .3s;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .service_section .box .img-box {
        width: 65px;
        height: 65px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .service_section .box .img-box img {
        max-height: 100%;
        max-width: 100%;
        -webkit-transition: all .3s;
        transition: all .3s;
    }

    .service_section .box .detail-box {
        margin-top: 15px;
    }

    .service_section .box .detail-box h5 {
        font-weight: bold;
    }

    .service_section .box .detail-box p {
        margin: 0;
    }

    .service_section .btn-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-top: 45px;
    }

    .service_section .btn-box a {
        display: inline-block;
        padding: 10px 45px;
        background-color: #fb0;
        color: #ffffff;
        border-radius: 0;
        -webkit-transition: all .3s;
        transition: all .3s;
        border: 1px solid #fb0;
    }

    .service_section .btn-box a:hover {
        background-color: transparent;
        color: #fb0;
    }

    .service_section .owl-stage .owl-item.active {
        -webkit-transform: scale(0.85);
        transform: scale(0.85);
        -webkit-transition: 0.6s ease;
        transition: 0.6s ease;
    }

    .service_section .owl-stage .owl-item.active.center {
        -webkit-transform: scale(1);
        transform: scale(1);
    }

    .service_section .owl-stage .owl-item.active.center .box {
        background-color: #fb0;
        color: #ffffff;
    }

    .service_section .owl-stage .owl-item.active.center .box .img-box img {
        -webkit-filter: brightness(0) invert(1);
        filter: brightness(0) invert(1);
    }

    .service_section .owl-nav {
        display: none;
    }

    .service_section .owl-dots {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-top: 25px;
    }

    .service_section .owl-dots .owl-dot {
        width: 15px;
        height: 15px;
        border: none;
        border-radius: 100%;
        margin: 0 2px;
        background-color: #ccc;
        border: none;
        outline: none;
    }

    .service_section .owl-dots .owl-dot.active {
        background: #fb0;
    }

    .about_section .row {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .about_section .img-box {
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .about_section .img-box img {
        width: 100%;
    }

    .about_section .detail-box p {
        color: #1f1f1f;
        margin-top: 15px;
    }

    .about_section .detail-box a {
        display: inline-block;
        padding: 10px 35px;
        background-color: #fb0;
        color: #ffffff;
        border-radius: 0px;
        -webkit-transition: all .3s;
        transition: all .3s;
        border: 1px solid #fb0;
        margin-top: 15px;
    }

    .about_section .detail-box a:hover {
        background-color: transparent;
        color: #fb0;
    }

    .team_section .box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        background-color: #fb0;
        border-radius: 10px;
        overflow: hidden;
        margin-top: 45px;
    }

    .team_section .box .img-box {
        width: 100%;
    }

    .team_section .box .img-box img {
        width: 100%;
    }

    .team_section .box .detail-box {
        width: 100%;
        color: #ffffff;
        padding: 25px 15px;
        text-align: center;
    }

    .team_section .btn-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        margin-top: 45px;
    }

    .team_section .btn-box a {
        display: inline-block;
        padding: 10px 45px;
        background-color: #fb0;
        color: #ffffff;
        border-radius: 5px;
        -webkit-transition: all .3s;
        transition: all .3s;
        border: 1px solid #fb0;
    }

    .team_section .btn-box a:hover {
        background-color: transparent;
        color: #fb0;
    }

    .contact_section {
        position: relative;
        background-color: #f9f9f9;
    }

    .contact_section .heading_container {
        margin-bottom: 45px;
    }

    .contact_section .row {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .contact_section .form_container {
        padding: 45px;
    }

    .contact_section .form_container .form-control {
        width: 100%;
        border: none;
        height: 50px;
        margin-bottom: 15px;
        padding-left: 15px;
        outline: none;
        color: #101010;
        border-radius: 0;
        -webkit-box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.05);
        box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.05);
    }

    .contact_section .form_container .form-control::-webkit-input-placeholder {
        color: #565554;
    }

    .contact_section .form_container .form-control:-ms-input-placeholder {
        color: #565554;
    }

    .contact_section .form_container .form-control::-ms-input-placeholder {
        color: #565554;
    }

    .contact_section .form_container .form-control::placeholder {
        color: #565554;
    }

    .contact_section .form_container .form-control.message-box {
        height: 95px;
    }

    .contact_section .form_container .btn_box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .contact_section .form_container .btn_box button {
        border: none;
        display: inline-block;
        padding: 12px 55px;
        background-color: #fb0;
        color: #ffffff;
        border-radius: 0px;
        -webkit-transition: all .3s;
        transition: all .3s;
        border: 1px solid #fb0;
        width: 100%;
    }

    .contact_section .form_container .btn_box button:hover {
        background-color: transparent;
        color: #fb0;
    }

    .contact_section .img-box {
        overflow: hidden;
    }

    .contact_section .img-box img {
        min-width: 100%;
    }

    .client_section .client_container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
        margin: auto;
        margin-top: 15px;
    }

    .client_section .client_container .img-box {
        width: 125px;
    }

    .client_section .client_container .img-box img {
        width: 100%;
        border-radius: 5px;
    }

    .client_section .client_container .detail-box {
        margin-top: 25px;
    }

    .client_section .client_container .detail-box h5 {
        color: #1d1b28;
        margin-bottom: 15px;
    }

    .client_section .client_container .detail-box p {
        color: #1d1b28;
        margin: 20px;
    }

    .client_section .client_container .detail-box span {
        margin-top: 25px;
        color: #1eb36a;
        font-size: 28px;
    }

    .client_section .carousel-control-prev,
    .client_section .carousel-control-next {
        width: 50px;
        height: 50px;
        border-radius: 0px;
        background-color: #000000;
        opacity: 1;
        top: 28%;
        color: #ffffff;
        font-size: 12px;
        margin: 0 2.5px;
    }

    .client_section .carousel-control-prev {
        left: 15%;
    }

    .client_section .carousel-control-next {
        right: 15%;
    }

    .client_section .carousel_btn-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .info_section {
        background-color: rgb(184, 135, 0);
        color: #ffffff;
        padding: 45px 0 10px 0;
    }

    .info_section h5 {
        margin-bottom: 20px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .info_section .info_top {
        margin-bottom: 25px;
    }

    .info_section .info_top .row {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .info_section .info_contact {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        min-width: 245px;
    }

    .info_section .info_contact a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        color: #ffffff;
    }

    .info_section .info_contact a i {
        margin-right: 5px;
        font-size: 24px;
    }

    .info_section .social_box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
    }

    .info_section .social_box a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        width: 45px;
        height: 45px;
        border-radius: 5px;
        color: #ffffff;
        margin-right: 5px;
        font-size: 24px;
    }

    .info_section .info_bottom .row>div {
        margin-bottom: 30px;
    }

    .info_section .info_menu {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
    }

    .info_section .info_menu li {
        list-style-type: none;
        margin-bottom: 10px;
    }

    .info_section .info_menu li a {
        color: #ffffff;
    }

    .info_section .info_form input {
        width: 100%;
        border: none;
        height: 45px;
        margin-bottom: 25px;
        padding-left: 25px;
        background-color: #eaeaea;
        outline: none;
        color: #101010;
    }

    .info_section .info_form button {
        display: inline-block;
        padding: 10px 45px;
        background-color: #fb0;
        color: #ffffff;
        border-radius: 5px;
        -webkit-transition: all .3s;
        transition: all .3s;
        border: 1px solid #fb0;
    }

    .info_section .info_form button:hover {
        background-color: transparent;
        color: #fb0;
    }

    /* footer section*/
    .footer_section {
        position: relative;
        background-color: #ffffff;
        text-align: center;
    }

    .footer_section p {
        color: #252525;
        padding: 25px 0;
        margin: 0;
    }

    .footer_section p a {
        color: inherit;
    }
    </style>
</head>

<body>
    <div class="hero_area">
        <div class="hero_bg_box">
            <img src="images/hero-bg.jpg" alt="">
        </div>
        <!-- header section strats -->
        <header class="header_section">

            <div class="header_bottom">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container ">
                        <a class="navbar-brand " href="user_landing.php"> Rapide </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""> </span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="user_landing.php">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user_about.php"> About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user_service.php">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>
                                            Login
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-10 col-md-11 mx-auto">
                                    <div class="detail-box">
                                        <h1>
                                            We Provide <br>
                                            Automotive Services
                                        </h1>
                                        <p>
                                            The automotive industry is a vast and dynamic sector that designs,
                                            manufactures, and sells vehicles, including cars, trucks, motorcycles, and
                                            buses. It plays a crucial role in global economies, with major contributions
                                            to employment, innovation, and trade.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-10 col-md-11 mx-auto">
                                    <div class="detail-box">
                                        <h1>
                                            We Provide <br>
                                            Automotive Services
                                        </h1>
                                        <p>
                                            The automotive industry is a vast and dynamic sector that designs,
                                            manufactures, and sells vehicles, including cars, trucks, motorcycles, and
                                            buses. It plays a crucial role in global economies, with major contributions
                                            to employment, innovation, and trade.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-lg-10 col-md-11 mx-auto">
                                    <div class="detail-box">
                                        <h1>
                                            We Provide <br>
                                            Automotive Services
                                        </h1>
                                        <p>
                                            The automotive industry is a vast and dynamic sector that designs,
                                            manufactures, and sells vehicles, including cars, trucks, motorcycles, and
                                            buses. It plays a crucial role in global economies, with major contributions
                                            to employment, innovation, and trade.
                                        </p>
                                        <div class="btn-box">
                                            <a href="" class="btn1">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <img src="images/s1.png" alt="" />
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
                                    <img src="images/s6.png" alt="" />
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
                                    <img src="images/s1.png" alt="" />
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
                                    <img src="images/s6.png" alt="" />
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
                        <img src="images/bg1.jpg" class="box_img" alt="about img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about section ends -->

    <!-- team section -->



    <!-- end team section -->

    <!-- contact section -->
    <section class="contact_section mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img-box ">
                        <img src="images/bg3.jpg" class="box_img" alt="about img">
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
                        <a class="navbar-brand" href="index.html">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76A7a9Hr8lFztXXwjbK6g3Kbt1Lz6Y3auD8r5c6EwHgjV4ldtJgROZXB6ZGdvep" crossorigin="anonymous">
    </script>
    <!-- End Google Map -->
</body>

</html>