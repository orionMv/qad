<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>QAD - Quality Assurance Department</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/img/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/icons/favicon-16x16.png">
    <link rel="manifest" href="/img/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="/css/headers/header-default.css">
    <link rel="stylesheet" href="/css/footers/footer-v1.css">

    <!-- SLider styles -->
    <link rel="stylesheet" href="/plugins/parallax-slider/css/parallax-slider.css">
    
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="/plugins/animate.css">
    <link rel="stylesheet" href="/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/plugins/owl-carousel/owl-carousel/owl.carousel.css">

    <!-- Portfolio -->
    <link rel="stylesheet" href="/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="/plugins/cube-portfolio/cubeportfolio/custom/custom-cubeportfolio.css">
    
    <!-- publication -->
    <link rel="stylesheet" href="/css/pages/page_clients.css">
    
    <!-- teachers directory -->
    <link rel="stylesheet" href="assets/css/pages/page_search_inner.css">
    
    <!-- JOB MULTI -->
    <link rel="stylesheet" href="/css/pages/page_job.css">
    <link rel="stylesheet" href="/plugins/image-hover/css/img-hover.css">
    
    <!-- JOB SINGLE -->
    <link rel="stylesheet" href="/css/pages/page_job_inner2.css">
    
    <!-- CSS Customization -->
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/theme-colors/blue.css">
</head>

<body>
<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="/">
                <img src="/img/qad-logo.png" width="100" alt="Logo">
            </a>
            <!-- End Logo -->
            
            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                    <li class="hoverSelector">
                        <i class="fa fa-globe"></i>
                        <a>Languages</a>
                        <ul class="languages hoverSelectorBlock">
                            <li class="active">
                                <a href="/">English <i class="fa fa-check"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li class="topbar-devider"></li>
                    <li><a href="/contact">contact</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href="/teachers">Teachers Login</a></li>
                    
                </ul>
            </div>
            <!-- End Topbar -->

            
            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li><a href="/" >Home</a></li>
                    <li><a href="/publication" >publications</a></li>
                    <li><a href="/standards" >quality assuarance standards</a></li>
                    <li><a href="/reviews" >reviews & reports</a></li>
                    <li><a href="/teachers" >teachers directory</a></li>
                    <li><a href="/gallery" >gallery</a></li>
                    <li><a href="/about" >about</a></li>

                    <!-- Search Block -->
                    <li>
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInDown">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button class="btn-u" type="button">Go</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->

    
                    
    @yield('page')                

               
       
  

    <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-4 md-margin-bottom-40 text-center">
                        <a href="index.html"><img id="logo-footer" class="footer-logo" src="/img/moe-logo.png" alt=""></a>
                        <p>QAD - Quality assuarance department is a direct subsidiary of Ministry of Education, Republic of Maldives.</p>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                   
                    <!-- Link List -->
                    <div class="col-md-4 md-margin-bottom-40">
                        <div class="headline"><h2>Useful Links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">Downloads</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="jobs">Careers</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="www.moe.gov.mv" target="_blank">Ministry of Education</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="/contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class="col-md-4 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Contact Us</h2></div>
                        <address class="md-margin-bottom-40">
                            9th Floor, Edhuru Hiyaa, <br />
                            Male' City, Maldives <br />
                            Phone: +960 338600 <br />
                            Fax: +960 338700<br />
                            Email: <a href="mailto:info@qad.moe.gov.mv" class="">info@qad.moe.gov.mv</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            2015 &copy; All Rights Reserved.
                           <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="/plugins/back-to-top.js"></script>
<script type="text/javascript" src="/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="/plugins/layer-slider/layerslider/js/greensock.js"></script>
<script type="text/javascript" src="/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>

<!-- slider scripts -->
<script type="text/javascript" src="/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="/js/plugins/parallax-slider.js"></script>

<!-- portfolio -->
<script type="text/javascript" src="/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="/js/plugins/cube-portfolio/cube-portfolio-4.js"></script>

<!-- JS Customization -->
<script type="text/javascript" src="/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="/js/app.js"></script>
<script type="text/javascript" src="/js/plugins/owl-carousel.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        OwlCarousel.initOwlCarousel();
        FancyBox.initFancybox();
        ParallaxSlider.initParallaxSlider();
        
    });
</script>
<!--[if lt IE 9]>
    <script src="/plugins/respond.js"></script>
    <script src="/plugins/html5shiv.js"></script>
    <script src="/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>