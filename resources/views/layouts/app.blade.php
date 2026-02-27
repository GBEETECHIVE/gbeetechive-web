<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Braintech - IT Solutions and Technology Startup HTML Template</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href="css/off-canvas.css">
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <!-- Main Menu css -->
    <link rel="stylesheet" href="css/rsmenu-main.css">
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href="css/rs-spacing.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="defult-home">

    <!--Preloader area start here-->
    <div id="loader" class="loader">
        <div class="loader-container"></div>
    </div>
    <!--Preloader area End here-->

    <!-- Full width header Start -->
    @include('includes.header')
    <!-- Full width header End -->

    <!-- Main content Start -->
    <div class="main-content">
        @yield('content')
    </div>
    <!-- Main content End -->

    <!-- Footer Start -->
    @include('includes.footer')
    <!-- Footer End -->

    <!-- start scrollUp  -->
    <div id="scrollUp" class="orange-color">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- End scrollUp  -->

    <!-- Search Modal Start -->
    <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="flaticon-cross"></span>
        </button>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="search-block clearfix">
                    <form>
                        <div class="form-group">
                            <input class="form-control" placeholder="Search Here..." type="text">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

    <!-- modernizr js -->
    <script src="js/modernizr-2.8.3.min.js"></script>
    <!-- jquery latest version -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap v4.4.1 js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Menu js -->
    <script src="js/rsmenu-main.js"></script>
    <!-- op nav js -->
    <script src="js/jquery.nav.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- Skill bar js -->
    <script src="js/skill.bars.jquery.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- counter top js -->
    <script src="js/waypoints.min.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- particles js -->
    <script src="js/particles.min.js"></script>
    <!-- magnific popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- pointer js -->
    <script src="js/pointer.js"></script>
    <!-- contact form js -->
    <script src="js/contact.form.js"></script>
    <!-- appointment form js -->
    <script src="js/appointment.form.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>

</body>

</html>
