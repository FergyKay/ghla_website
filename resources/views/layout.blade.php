<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ghana Library Authority | @yield('title') </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="/assets/lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/lib/lightslider/css/lightslider.css" rel="stylesheet">
    <!-- Libraries CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/new.css" rel="stylesheet">
</head>
<body>
<header id="header" style="overflow: hidden">
    <nav class="navbar navbar-expand-lg fixed-top justify-content-center" style="background-color: #033600">
        <div id="logo" class="pull-left">
            <h1><a href="../" class="scrollto"><img src="../assets/img/coat-of-arms.png" alt="" title="" height="50px"
                                                    width="50px"/>GhLA</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a> -->
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars" style="color: white"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://192.168.1.5/eg/opac">Catalogue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Staff Portal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#footer-contact">Contact Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Join Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Become a patron</a>
                        <a class="dropdown-item" href="#">Become a member</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

{{--<nav id="nav-menu-container">--}}
{{--<ul class="nav-menu">--}}
{{--<li class="menu"><a href="../">Home</a></li>--}}
{{--<li class="menu-has-children"><a href="">Services</a>--}}
{{--<ul>--}}
{{--<li><a href="#">Lending</a></li>--}}
{{--<li><a href="#">xx</a></li>--}}
{{--<li><a href="#">xx</a></li>--}}
{{--<li><a href="#">xx</a></li>--}}
{{--</ul>--}}
{{--<li class="menu-has-children"><a href="">Programs & Support</a>--}}
{{--<li class="menu-has-children"><a href="">Staff Portal</a>--}}
{{--<li class="menu"><a href="">Online Catalog</a>--}}
{{--<li class="menu-has-children"><a href="#footer">Contact</a>--}}
{{--</ul>--}}
{{--</nav><!-- #nav-menu-container -->--}}
{{--</header><!-- #header -->--}}
@yield('content')
<footer id="footer">
    <!--<div class="row" style="width: inherit">-->
    <!--<div class="col-4" style="background: red; height: 4px"></div>-->
    <!--<div class="col-4" style="background: yellow; height: 4px"></div>-->
    <!--<div class="col-4" style="background: green; height: 4px"></div>-->
    <!--</div>-->
    <div class="bar"></div>
    <div class="footer-top" id="footer-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#services">Services</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        <strong>Ghana Post GPS Address</strong> GA-x<br>
                        <strong>Phone:</strong> +233(0)302-665-083<br>
                        <strong>Email:</strong> info@ghla.gov.gh<br>
                    </p>
                    <div>
                        <div class="social-links">
                            <a href="https://twitter.com/ghanalibraries" target="_blank" class="twitter"><i
                                        class="fab fa-twitter"></i></a>
                            <a href="https://facebook.com/ghanalibraries" target="_blank" class="facebook"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a href="https://instagram.com/ghanalibraries" target="_blank" class="instagram"><i
                                        class="fab fa-instagram"></i></a>
                            <a href="https://linkedin.com/ghanalibraries" target="_blank" class="linkedin"><i
                                        class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to get the best and latest updates from Ghana Library Authority.</p>
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Type your Email Address"><input type="submit"
                                                                                                      value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong>2018 Ghana Library Authority</strong>. All Rights Reserved
        </div>
        <!-- <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
    </div>
</footer><!--#footer-->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>
</body>

<!-- JavaScript Libraries -->
<script src="/assets/lib/jquery/jquery.min.js"></script>
<script src="/assets/lib/jquery/jquery-migrate.min.js"></script>
<script src="/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/lib/easing/easing.min.js"></script>
<script src="/assets/lib/superfish/hoverIntent.js"></script>
<script src="/assets/lib/superfish/superfish.min.js"></script>
<script src="/assets/lib/wow/wow.min.js"></script>
<script src="/assets/lib/waypoints/waypoints.min.js"></script>
<script src="/assets/lib/counterup/counterup.min.js"></script>
<script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/assets/lib/lightbox/js/lightbox.min.js"></script>
<script src="/assets/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<script src="/assets/lib/card-carousel/card-carousel.js"></script>
<script src="/assets/lib/lightslider/js/lightslider.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"></script>
<!-- Contact aForm JavaScript File -->
<!-- Template Main Javascript File -->
<script src="../assets/js/main.js"></script>
</html>
