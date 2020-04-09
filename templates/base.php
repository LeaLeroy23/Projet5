<!doctype html>
<html lang="fr">
    <head>
        <!-- Basic page needs 
        ======================================-->
        <title><?= $title ?></title>
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Mobile specific meat 
        ==============================================-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="../public/img/favicon.ico">		

        <!-- Template Fonts form google 
        =============================================-->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Template CSS files -->

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="../public/css/normalize.css">

        <!-- Bootstrap CSS 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/bootstrap.min.css">

        <!-- Fontawesome CSS 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/fontawesome/all.min.css">
        <link rel="stylesheet" href="../public/css/fontawesome/regular.min.css">
        <link rel="stylesheet" href="../public/css/fontawesome/solid.min.css">
        <link rel="stylesheet" href="../public/css/fontawesome/fontawesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

        <!-- Owl carousle CSS 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/owl.carousel.css">

        <!-- Owl Theme CSS 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/owl.theme.css">

        <!-- Owl Transition CSS 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/owl.transitions.css">

        <!-- Animate CSS 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/animate.css">

        <!-- BX Slider CSS 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/jquery.bxslider.css">

        <!-- Meanmenu CSS (For mobile menu) 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/meanmenu.min.css">

        <!-- Theme main CSS File 
        ==========================================================-->
        <link rel="stylesheet" href="../public/style.css">

         <!-- Theme dashboard CSS File 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/dashboard.css">
        <link rel="stylesheet" href="../public/css/dashboard.min.css">
        <link rel="stylesheet" href="../public/css/mdb.min.css">
        <link rel="stylesheet" href="../public/css/mdb.lite.min.css">

        <!-- responsive CSS 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/responsive.css">

        <!-- Mordernizer Js -->
        <script src="../public/js/modernizr-2.8.3.min.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

    <!-- Start Header Top area -->
    <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="phone-mail-area">
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-phone"></i>+33 45 67 89 00</a>
                                </li>
                                <li>
                                    <a href="mailto:admin@bootexperts.com"><i class="fa fa-envelope-o"></i>contact@hestia.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <div class="login-bookmark-area">
                           <div class="register-login">
                                <a href="login.php"><i class="fa fa-user"></i>Connexion</a>
                           </div>
                           <div class="top-bookmark">
                               <ul>
                                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               </ul>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Header Top area -->
        <!-- Header Area Start -->
        <header class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- Logo Start -->
                        <div class="logo-wrap">
                            <a href="home.php"><img src="../public/img/logo.png" alt=""></a>
                        </div>
                        <!-- Logo End -->
                    </div>
                    <div class="col-md-9">
                        <!-- Main Menu Start -->
                        <div class="main-menu">
                            <nav>
                                <ul id="nav">
                                    <li class="active"><a href="home.php">Accueil</a></li>
                                    <li><a href="#">Biens</a>
                                        <ul class="sub-menu">
                                            <li></li><a href="properties_sale.php">Biens à la Vente</a></li>
                                            <li></li><a href="properties_rent.php">Biens à la location</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="team.php">L'équipe</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Main Menu End -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End -->
        <!-- mobile-menu-area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <div class="logo">
                                <a href="home.php"><img src="../public/img/logo2.jpg" alt="" /></a>
                            </div>
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="home.php">Accueil</a></li>
                                    <li><a href="#">Biens</a>
                                        <ul>
                                            <li><a href="properties_sale.php">Biens à la vente</a></li>
                                            <li><a href="properties_rent.php">Biens à la location</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="team.php">L'équipe</a></li>
                                   
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->  

        <div id="content">
            <?= $content; ?>
        </div>
        

        <!-- Footer Area Start Hear-->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="copy-right-text">
                            <p>Copyright &copy; <a href="https://stratos-consulting.fr/">Stratos Consulting </a> 2020 All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <!--<div class="trams-poly pull-right">
                            <ul>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>-->
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Hear-->
        
    <!-- Placed js at the end of the document so the pages load faster -->
        <!-- Main jQuery file -->
        <script src="../public/js/jquery-1.11.3.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="../public/js/bootstrap.min.js"></script>
        <!-- Owl carousel js -->
        <script src="../public/js/owl.carousel.min.js"></script>
        <!-- scroll up js -->
        <script src="../public/js/jquery.scrollUp.min.js"></script>
        <!-- BX Slider js -->
        <script src="../public/js/jquery.bxslider.min.js"></script>
        <!-- wow js -->
        <script src="../public/js/wow.min.js"></script>
        <!-- meanmenu js -->
        <script src="../public/js/jquery.meanmenu.js"></script>
        <!-- dashboard js -->
        <script src="../public/js/jquery-3.4.1.min.js"></script>
        <script src="../public/js/popper.min.js"></script>
        <script src="../public/js/mdb.min.js"></script>
        <!-- Initialize WOW js for Animation-->
        <script>
            new WOW().init();
        </script>
        <!-- Theme jQuery Codes goes hear -->
        <script src="../public/js/script.js"></script>
    
    </body>
    <!-- Body End  -->
</html>


    