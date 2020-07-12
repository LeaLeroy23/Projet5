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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="../public/img/favicon.png">			

        <!-- Template Fonts form google
        =============================================-->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Template CSS files -->

        <!-- Meanmenu CSS (For mobile menu) 
        ==========================================================-->
        <link rel="stylesheet" href="../public/css/meanmenu.min.css">

        <!-- Bootstrap core CSS -->
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <!--external css-->
        <link href="../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template-->
        <link href="../public/css/dashboard.css" rel="stylesheet">
        <link href="../public/css/dashboard-responsive.css" rel="stylesheet">
        <link href="../public/css/style-responsive.css" rel="stylesheet">
        <link href="../public/css/table-responsive.css" rel="stylesheet">


    </head>

    <body>
        <section id="container">
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right"></div>
                </div>
                <a href="index.php" class="logo"><img src="../public/img/logo-min.png" /></a>
                
                
                
                <div class="top-manu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="../public/index.php?route=logout">Déconnexion</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="main-menu nav-collapse">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav nav-accordion">
                        <p class="centered"><a href="index.php?route=profile"><img src="../public/img/agent/<?= $this->session->get('avatar'); ?>" class="img-circle" width="80" height="80"></a></p>
                        <h5 class="centered">
                        <?= $this->session->show('login'); ?>
                        <?= $this->session->get('firstname'); ?> <?= $this->session->get('lastname'); ?>
                        </h5>
                            
                            <li class="mt">
                                <a href="index.php?route=dashboard">
                                <i class="fa fa-dashboard"></i>
                                <span>Tableau de bord</span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=addEstate">
                                <i class="fa fa-plus"></i>
                                <span>Nouvelle annonce</span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=allEstates">
                                <i class="fa fa-copy"></i>
                                <span>Les annonces</span>
                                </a>
                            </li>

                            <?php
                                if ($this->session->get('status') === "99") {
                            ?>

                            <li class="mt">
                                <a href="index.php?route=addAgent">
                                <i class="fa fa-plus"></i>
                                <span>Nouvelle Agent</span>
                                </a>
                            </li>

                            <?php
                                }
                            ?>

                            <li class="mt">
                                <a href="index.php?route=allAgents">
                                <i class="fa fa-users"></i>
                                <span>Les agents</span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=profile&agentId=<?= $this->session->get('id'); ?>">
                                <i class="fa fa-user-circle"></i>
                                <span>Mon Profil</span>
                                </a>
                            </li>

                            <?php
                                if ($this->session->get('status') === "99") {
                            ?>

                            <li class="mt">
                                <a href="index.php?route=configuration">
                                <i class="fa fa-cogs"></i>
                                <span>Configuration</span>
                                </a>
                            </li>

                            <?php
                                }
                            ?>

                        </ul>
                        <!-- sidebar menu end-->
                    </div>
                </aside>
                <!--sidebar end-->

                 <!-- **********************************************************************************************************************************************************
                MAIN MOBILE MENU
                *********************************************************************************************************************************************************** -->
                <!--mobile menu start-->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu">
                                        <ul>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--mobile menu end-->

                <?= $content; ?>

                    <!-- /MAIN CONTENT -->
                </section>
                <!--main content end-->
                <!--footer start-->
            <footer class="site-footer">
                    <div class="text-center">
                    <p>
                        &copy; Copyrights <strong>Stratos Consulting</strong>. All Rights Reserved
                    </p>
                    <div class="credits">
                    
                        Created with Dashio template by <a href="https://stratos-consulting.fr/">TemplateMag</a>
                    </div>
                    <a href="form_validation.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                        </a>
                    </div>
            </footer>
                <!--footer end-->
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="../public/lib/jquery/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
        <script src="../public/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../public/lib/jquery.scrollTo.min.js"></script>
        <script src="../public/lib/jquery.nicescroll.js" type="text/javascript"></script>
        <script class="include" type="text/javascript" src="../public/lib/jquery.dcjqaccordion.2.7.js"></script>
        <!-- meanmenu js -->
        <script src="../public/js/jquery.meanmenu.js"></script>
        <!--common script for all pages-->
        <script src="../public/lib/common-scripts.js"></script>
        <!--script for this page-->
  </body>
  
</html>