<?php
if (!defined('fileIncluded')) {
    exit();
}
?>
<!DOCTYPE html>

<html class="wow-animation desktop landscape rd-navbar-static-linked" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="<?php echo $metakey; ?>" >
        <meta name="description" content="<?php echo $metades; ?>" >

        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">

        <link rel="shortcut icon" href="assets/images/favicon.ico"/>
        <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

        <link href="assets/css/plugins/mega_menu.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>        
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>      
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>        
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themify-icons.css" rel="stylesheet" type="text/css"/>    
        <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>

    </head
    <body>
        <!-- Page-->



        <div class="wrapper">

            <!--=================================
             preloader -->

            <div id="pre-loader">
                <img src="assets/images/pre-loader/loader-01.svg" alt="">
            </div>

            <!--=================================
             preloader -->

            <!--=================================
             header -->

            <header id="header" class="header transparent">
                <div class="topbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 xs-mb-10">
                                <div class="topbar-call text-center text-md-left">
                                    <ul>
                                        <li><i class="fa fa-envelope-o theme-color"></i> info@nturebeyond.org</li>
                                        <li><i class="fa fa-phone"></i> <a href="tel:+91 0353 250 0656"> <span>+(91) 0353 250 0656 </span> </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="topbar-social text-center text-md-right">
                                    <ul>
                                        <li><a href="#"><span class="ti-facebook"></span></a></li>
                                        <li><a href="#"><span class="ti-instagram"></span></a></li>

                                        <li><a href="#"><span class="ti-twitter"></span></a></li>
                                        <li><a href="#"><span class="ti-linkedin"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--=================================
                 mega menu -->

                <div class="menu">  
                    <!-- menu start -->
                    <nav id="menu" class="mega-menu">
                        <!-- menu list items container -->
                        <section class="menu-list-items">
                            <div class="container"> 
                                <div class="row"> 
                                    <div class="col-lg-12 col-md-12"> 
                                        <!-- menu logo -->
                                        <ul class="menu-logo">
                                            <li>
                                                <a href="index.php"><img id="logo_img" src="assets/images/logo.png" alt="logo"> </a>
                                            </li>
                                        </ul>
                                        <!-- menu links -->
                                        <div class="menu-bar">
                                            <ul class="menu-links">
                                                <?php
                                                foreach ($menuarray as $key => $val) {

                                                    if ($key == "index") {
                                                        ?>
                                                        <li><a href="index.php"><?php echo $val['name']; ?></a></li>                                        </li>
                                                        <?php
                                                    } else if ($key == "about_us") {
                                                        ?>
                                                        <li><a href="<?php echo $key; ?>.php"><?php echo $val['name']; ?><i class = "fa fa-angle-down fa-indicator"></i></a>
                                                            <ul class="drop-down-multilevel">
                                                                <li><a href="our_company.php">Our Company</a></li>
                                                                <li><a href="our_team.php">Our Team</a></li>
                                                                <li><a href="our_values.php">Our Values</a></li>
                                                                <li><a href="our_associations.php">Our Associations</a></li>
                                                                <li><a href="career_with_us.php">Career with us</a></li>
                                                            </ul>
                                                        </li>  
                                                        <?php
                                                    } else if ($key == "business_units") {
                                                        ?>
                                                        <li><a href="<?php echo $key; ?>.php"><?php echo $val['name']; ?><i class = "fa fa-angle-down fa-indicator"></i></a>
                                                            <ul class="drop-down-multilevel">
                                                                <li><a href="inbound_tours.php">Inbound Tours</a></li>
                                                                <li><a href="b2b_consolidation.php">B2B Consolidation</a></li>
                                                                <li><a href="tour_consultant.php">Tour Consultant</a></li>
                                                                <li><a href="homestay.php">Homestay</a></li>
                                                                <li><a href="tourist_transport.php">Tourist Transport</a></li>
                                                                <li><a href="hotels_and_resorts.php">Hotels and Resorts</a></li>
                                                            </ul>
                                                        </li> 
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <li><a href="<?php echo $key; ?>.php"><?php echo $val['name']; ?></a></li>  
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </nav>
                    <!--menu end -->
                </div>
            </header>

            <!-- === === === === === === === === === === === header -->

            <!-- === === === === === === === === === === === banner -->
            <div class="owl-carousel align-items-center owl-theme" id="topslide">
                <div class="owl-slide d-flex align-items-center cover" style="background: url('assets/revolution/slider-02/4fd8a-bg.jpg')">
                    <div class="container"> 
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h2 class="owl-slide-animated owl-slide-title">
                                        <!-- content here -->
                                        <p class="text-white">nature beyond - best of the best multipurpose tourism</p>
                                    </h2>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                        <!-- content here -->
                                        <p class="text-white">Travel specialist in West Bengal</p>
                                    </div>
                                    <a class="button owl-slide-animated owl-slide-cta" href="our_company.php" role="button">
                                        <!-- content here -->
                                        Explore now
                                    </a>
                                </div><!-- /owl-slide-text -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-slide d-flex align-items-center cover" style="background: url('assets/revolution/slider-02/71766-bg.jpg')">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-10 col-md-6 static">
                                <div class="owl-slide-text">
                                    <h2 class="owl-slide-animated owl-slide-title">
                                        <!-- content here -->
                                        <p class="text-white"> nature beyond - best of the best multipurpose tourism</p>
                                    </h2>
                                    <div class="owl-slide-animated owl-slide-subtitle mb-3">
                                        <!-- content here -->
                                        <p class="text-white">Travel specialist in West Bengal</p>
                                    </div>
                                    <a class="button owl-slide-animated owl-slide-cta" href="our_company.php" role="button">
                                        <!-- content here -->
                                        Explore now
                                    </a>
                                </div><!-- /owl-slide-text -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Slider Section End-->


            <?php
            if (is_readable("./pages/$pagefile.php")) {
                include ("./pages/$pagefile.php");
            } else {
                echo $sys->showError('danger', '! 404 file not found. Please try after some time');
            }
            ?>


            <!-- Default footer-->
            <section class="our-clients theme-bg text-white page-section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="owl-carousel" id="footer-scroll">
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="assets/images/clients/light/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="assets/images/clients/light/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="assets/images/clients/light/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="assets/images/clients/light/4.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="assets/images/clients/light/5.jpg" alt="">
                                </div>

                            </div>
                        </div>
                    </div> 
                </div>
            </section>

            <!--=================================
             Our Clients -->

            <!--=================================
             footer -->
            <footer class="footer page-section-pt black-bg">
                <div class="container">
                    <div class="footer-contact white-bg">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 bottom-m3">
                                <div class="contact-box">
                                    <div class="contact-icon">
                                        <i class="ti-direction-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <div class="text-center">
                                            <h5 class="mt-10 mb-10">Siliguri Central Office, </h5>
                                            <span>Calcutta Branch Office</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 bottom-m3">
                                <div class="contact-box">
                                    <div class="contact-icon">
                                        <i class="ti-headphone-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <div class="text-center">
                                            <h5 class="mt-10 mb-10">+ 91 0353 250 0656</h5>
                                            <span>Mon-Fri 10:00am-7:00pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="contact-box">
                                    <div class="contact-icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="contact-info">
                                        <div class="text-center">
                                            <h5 class="mt-10 mb-10"> info@naturebeyond.org</h5>
                                            <span>24 X 7 online support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-lg-6 col-md-6">
                            <img class="img-fluid" id="logo-footer" src="assets/images/logo-dark.png" alt="">
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="social text-left sm-mt-0 text-md-right xs-mt-20">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>



                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="divider mt-50 mb-50"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 sm-mt-30">
                            <div class="footer-useful-link footer-hedding">
                                <h6 class="text-white mb-20 text-uppercase">About us</h6>
                                <p>The company came into existence in 2002 when its two founders Partha and Pallab decided to start a venture in tourism. Over the last few years we have come a long way and have diversified into a number of areas related to tourism.</p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 sm-mt-30 sm-mb-30">
                            <h6 class="text-white mb-20 text-uppercase">Useful Links</h6>
                            <div class="footer-useful-link footer-hedding">
                                <div class="row">
                                    <div class="col-lg-3 col-sm-3">
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about_us.php">About Us</a></li>
                                            <li><a href="our_company.php">Our Company</a></li>
                                            <li><a href="our_team.php">Our Team</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-sm-3">
                                        <ul>
                                            <li><a href="our_values.php">Our Values</a></li>
                                            <li><a href="our_associaions.php">Our Associations</a></li>
                                            <li><a href="career_with_us.php">Career With Us</a></li>
                                            <li><a href="business_units.php">Business Units</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-sm-3">
                                        <ul>
                                            <li><a href="inbound_tours.php">Inbound Tours</a></li>
                                            <li><a href="b2b_consolidation">B2B Consolidation</a></li>
                                            <li><a href="travel_agent.php">Travel Agent</a></li>
                                            <li><a href="homestay.php">Home Stay</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-sm-3">
                                        <ul>
                                            <li><a href="tourist_transport.php">Tourist Transport</a></li>
                                            <li><a href="hotels_and_resorts.php">Hotel and Resorts</a></li>
                                            <li><a href="glimpses.php">Glimpses</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright mt-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="text-left ">
                                    <li class="list-inline-item"><a href="#">Terms & Conditions </a> &nbsp;&nbsp;&nbsp;|</li>

                                    <li class="list-inline-item"><a href="#">Privacy Policy </a> </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="text-left text-md-right xs-mt-15">
                                    <p>  <a href="#"> naturebeyond </a> All Rights Reserved. Created &amp; Cared By <a href="https://www.apexinvention.com" target="_blank">Apex Invention</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--=================================
             footer -->

        </div>
        <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

        <!--</div>-->
        <!--</div>-->
        <!-- Global Mailform Output-->
        <div class="snackbars" id="form-output-global"></div>
        <!-- Java script-->

        <script src="assets/js/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="assets/js/plugins-jquery.js" type="text/javascript"></script>
        <!-- plugin_path -->
        <script>var plugin_path = 'assets/js/';</script>

        <script src="assets/js/custom.js" type="text/javascript"></script>
        <script src="assets/js/owl-carousel.min.js" type="text/javascript"></script>

        <script>

            $(document).ready(function () {
                $("#footer-scroll").owlCarousel({
                    items: 5,
                    loop: true,
                    nav: false,
                    margin: 10,
                    autoplay: true,
                    autoplayHoverPause: true,
                    autoplayTimeout: 300,
                    smartSpeed: 500

                });
            });

            $("#topslide").on("initialized.owl.carousel", () => {
                setTimeout(() => {
                    $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
                    $("section").show();
                }, 200);
            });

            const $owlCarousel = $("#topslide").owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayHoverPause: true,
                autoplayTimeout: 300,
                smartSpeed: 500,
                nav: true,
                navText: [
                    '<i class="tp-leftarrow tparrows erinyen" </i>',
                    '<i class="tp-rightarrow tparrows erinyen" </i>'
                ]
            });

            $owlCarousel.on("changed.owl.carousel", e => {
                $(".owl-slide-animated").removeClass("is-transitioned");

                const $currentOwlItem = $(".owl-item").eq(e.item.index);
                $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");

                //const $target = $currentOwlItem.find(".owl-slide-text");

                //doDotsCalculations($target);
            });

            /*$owlCarousel.on("resize.owl.carousel", () => {
             setTimeout(() => {
             setOwlDotsPosition();
             }, 50);
             });*/

            /*if there isn't content underneath the carousel*/
//$owlCarousel.trigger("refresh.owl.carousel");

            //setOwlDotsPosition();

            /*function setOwlDotsPosition() {
             const $target = $(".owl-item.active .owl-slide-text");
             doDotsCalculations($target);
             }
             
             function doDotsCalculations(el) {
             const height = el.height();
             const {top, left} = el.position();
             const res = height + top + 20;
             
             $(".owl-carousel .owl-dots").css({
             top: `${res}px`,
             left: `${left}px`
             });
             }*/
        </script>

        <div id="fb-root"></div>
    </body>

</html>