<?php
require_once "./admin/helpers/dbConnection.php";
require_once "./admin/helpers/functions.php";
require_once "./admin/helpers/checkLogin.php";
$me = $_SESSION['user']['user_id'];
$sql = "SELECT * from products";
$op = runQuery($sql);
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- title of site -->
    <title>El-Market</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--linear icon css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>
    <!--welcome-hero start -->
    <header id="home" class="welcome-hero">

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--/.carousel-indicator -->
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
                <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
                <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
            </ol><!-- /ol-->
            <!--/.carousel-indicator -->
        </div>
	<!-- Start Navigation -->
    <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

<!-- Start Top Search -->
<div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div>
<!-- End Top Search -->

<div class="container">            
    <!-- Start Atribute Navigation -->
    <div class="attr-nav">
        <ul>
            <li class="nav-setting">
				<a href="<?php echo url("./users/update.php")."?id=".$me ?>"><span class="btn btn-danger">Edit Me</span></a>
			</li>
            <li class="nav-setting">
				<a href="<?php echo url("./logout.php") ?>"><span class="btn btn-warning">LogOut</span></a>
			</li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                    <span class="lnr lnr-cart"></span>
                    <span class="badge badge-bg-1">2</span>
                </a>
                <ul class="dropdown-menu cart-list s-cate">
                    <li class="single-cart-list">
                        <a href="#" class="photo"><img src="assets/images/collection/arrivals1.png" class="cart-thumb" alt="image" /></a>
                        <div class="cart-list-txt">
                            <h6><a href="#">arm <br> chair</a></h6>
                            <p>1 x - <span class="price">$180.00</span></p>
                        </div><!--/.cart-list-txt-->
                        <div class="cart-close">
                            <span class="lnr lnr-cross"></span>
                        </div><!--/.cart-close-->
                    </li><!--/.single-cart-list -->
                    
                    <li class="total">
                        <span>Total: $0.00</span>
                        <button class="btn-cart pull-right" onclick="window.location.href='#'">view cart</button>
                    </li>
                </ul>
            </li><!--/.dropdown-->
        </ul>
    </div><!--/.attr-nav-->
    <!-- End Atribute Navigation -->

    <!-- Start Header Navigation -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html">sine<span>mkt</span>.</a>

    </div><!--/.navbar-header-->
    <!-- End Header Navigation -->



    </header>


    <!--new-arrivals start -->
    <section id="new-arrivals" class="new-arrivals">
        <div class="container">
            <div class="section-header">
                <h2>Our Products</h2>
            </div>
            <!--/.section-header-->
                <div class="new-arrivals-content">
                    <div class="row">
                       <?php
                        while ($data = mysqli_fetch_assoc($op)) {
                        ?>
                        <div class="col-md-3 col-sm-4">
                            <div class="single-new-arrival">

                                <div class="single-new-arrival-bg">
                                    <img src="./admin/products/uploads/<?php echo $data["product_img"]; ?>" alt="new-arrivals images">
                                    <div class="single-new-arrival-bg-overlay"></div>
                                    <div class="sale bg-1">
                                        <p>sale</p>
                                    </div>
                                    <div class="new-arrival-cart">
                                        <p>
                                            <span class="lnr lnr-cart"></span>
                                            <a href="#">add <span>to </span> cart</a>
                                        </p>
                                        <p class="arrival-review pull-right">
                                            <span class="lnr lnr-heart"></span>
                                            <span class="lnr lnr-frame-expand"></span>
                                        </p>
                                    </div>
                                </div>
                                <h4><a href="#"><?php echo $data["name"] ?></a></h4>
                                <p class="arrival-product-price">$<?php echo $data["price"] ?>.00</p>
                            </div>
                        </div>
                        <?php } ?>

                    </div>

                </div>
        </div>
    </section>
    <!--footer start-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="hm-footer-copyright text-center">
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                <p>
                    &copy;copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
                </p>
                <!--/p-->
            </div>
            <!--/.text-center-->
        </div>
        <!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>

        </div>

    </footer>
    <script src="assets/js/jquery.js"></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!--owl.carousel.js-->
    <script src="assets/js/owl.carousel.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>

</body>

</html>