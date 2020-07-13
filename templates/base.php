<!doctype html>
<html lang="fr">
    <head>
        <!-- Basic page needs 
        ======================================-->
        <title>Hestia - <?= $title ?></title>
        <meta charset="utf-8">
        <meta name="author" content="Stratos-Consulting">
        <meta name="description" content="Hestia - Real Estate website">
        <meta name="keywords" content="Hestia real-estate real estate immobilier agence-immobilière appartement maison atelier locaux-commerciaux locaux location vente viager saisonnier etudiant nice cagnes-sur-mer lille strasbourg rouen montpellier">

        <!-- Mobile specific meat 
        ==============================================-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">		

        <!-- Template Fonts form google 
        =============================================-->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Template CSS files -->

        <!-- Normalize CSS -->
        <link rel="stylesheet" href="css/normalize.css">

        <!-- Bootstrap CSS 
        ==========================================================-->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Fontawesome CSS 
        ==========================================================-->
        <link rel="stylesheet" href="css/fontawesome/all.min.css">
        <link rel="stylesheet" href="css/fontawesome/regular.min.css">
        <link rel="stylesheet" href="css/fontawesome/solid.min.css">
        <link rel="stylesheet" href="css/fontawesome/fontawesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

        <!-- Owl carousle CSS 
        ==========================================================-->
        <link rel="stylesheet" href="css/owl.carousel.css">

        <!-- Owl Theme CSS 
        ==========================================================-->
        <link rel="stylesheet" href="css/owl.theme.css">

        <!-- Owl Transition CSS 
        ==========================================================-->
        <link rel="stylesheet" href="css/owl.transitions.css">

        <!-- Animate CSS 
        ==========================================================-->
        <link rel="stylesheet" href="css/animate.css">

        <!-- BX Slider CSS 
        ==========================================================-->
        <link rel="stylesheet" href="css/jquery.bxslider.css">

        <!-- Meanmenu CSS (For mobile menu) 
        ==========================================================-->
        <link rel="stylesheet" href="css/meanmenu.min.css">

        <!-- Theme main CSS File 
        ==========================================================-->
        <link rel="stylesheet" href="style.css">

        <!-- responsive CSS 
        ==========================================================-->
        <link rel="stylesheet" href="css/responsive.css">

        <!-- Mordernizer Js -->
        <script src="js/modernizr-2.8.3.min.js"></script>

    </head>

    <body>
    <?= $this->session->show('login'); ?>
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
                                    <a href="mailto:contact@hestia.com"><i class="fa fa-envelope-o"></i>contact@hestia.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <div class="login-bookmark-area">
                           <div class="register-login">
                                <?php
                                    if ($this->session->get('email')) {
                                ?>
                                    <a href="index.php?route=logout"><i class="fa fa-user"></i>Déconnexion</a>
                                <?php
                                    } else {
                                ?>
                                    <a href="index.php?route=login"><i class="fa fa-user"></i>Connexion</a>
                                <?php
                                    }
                                ?>
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
                            <a href="index.php"><img src="img/logo.png" alt="Hestia - real estate"></a>
                        </div>
                        <!-- Logo End -->
                    </div>
                    <div class="col-md-9">
                        <!-- Main Menu Start -->
                        <div class="main-menu">
                            <nav>
                                <ul id="nav">
                                <?php
                                    if ($this->session->get('email')) {
                                ?>
                                    <li class="active"><a href="index.php?route=dashboard">Tableau de bord</a></li>
                                    <li class=""><a href="index.php">Accueil</a></li>
                                    <li><a href="index.php?route=allProperties">Biens</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.php?route=allPropertiesForSale">Biens à la Vente</a></li>
                                            <li><a href="index.php?route=allPropertiesForRent">Biens à la location</a></li>
                                            <li><a href="index.php?route=otherProperties">Les autres biens</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?route=team">L'équipe</a></li>
                                    <li><a href="index.php?route=contact">Contact</a></li>
                                <?php
                                    } else {
                                ?>
                                    <li class="active"><a href="index.php">Accueil</a></li>
                                    <li><a href="index.php?route=allProperties">Biens</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.php?route=allPropertiesForSale">Biens à la Vente</a></li>
                                            <li><a href="index.php?route=allPropertiesForRent">Biens à la location</a></li>
                                            <li><a href="index.php?route=otherProperties">Les autres biens</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?route=team">L'équipe</a></li>
                                    <li><a href="index.php?route=contact">Contact</a></li>
                                <?php
                                    }
                                ?>
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
                            <div class="logo mobile-logo">
                                <a href="index.php"><img src="img/logo-min.png" alt="Hestia - real estate" /></a>
                            </div>
                            <nav id="mobile-menu">
                                <ul>
                                <?php
                                    if ($this->session->get('email')) {
                                ?>
                                    <li class="active"><a href="index.php?route=dashboard">Tableau de bord</a></li>
                                    <li class=""><a href="index.php">Accueil</a></li>
                                    <li><a href="index.php?route=allProperties">Biens</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.php?route=allPropertiesForSale">Biens à la Vente</a></li>
                                            <li><a href="index.php?route=allPropertiesForRent">Biens à la location</a></li>
                                            <li><a href="index.php?route=otherProperties">Les autres biens</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?route=team">L'équipe</a></li>
                                    <li><a href="index.php?route=contact">Contact</a></li>
                                <?php
                                    } else {
                                ?>
                                    <li><a href="index.php">Accueil</a></li>
                                    <li><a href="index.php?route=allProperties">Biens</a>
                                        <ul>
                                            <li><a href="index.php?route=allPropertiesForSale">Biens à la vente</a></li>
                                            <li><a href="index.php?route=allPropertiesForRent">Biens à la location</a></li>
                                            <li><a href="index.php?route=otherProperties">Les autres biens</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="index.php?route=team">L'équipe</a></li>
                                   
                                    <li><a href="index.php?route=contact">Contact</a></li>
                                <?php
                                    }
                                ?>
                                </ul>
                            </nav>
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu-area end -->  

        
            <?= $content; ?>
        
        

        <!-- Footer Area Start Hear-->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="copy-right-text">
                            <p>Copyright &copy; <a href="https://stratos-consulting.fr/">Stratos Consulting </a> 2020 All Rights Reserved</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- Footer Area End Hear-->
        
    <!-- Placed js at the end of the document so the pages load faster -->
        <!-- Main jQuery file -->
        <script src="lib/jquery/jquery.min.js"></script>
        <!-- Bootstrap Js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Owl carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- scroll up js -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- BX Slider js-->
        <script src="js/jquery.bxslider.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- Initialize WOW js for Animation-->
        <script>
            new WOW().init();
        </script>
        <!-- Theme jQuery Codes goes hear -->
        <script src="js/script.js"></script>
    </body>
    <!-- Body End  -->
</html>


    