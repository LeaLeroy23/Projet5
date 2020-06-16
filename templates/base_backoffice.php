<!doctype html>
<html lang="fr">
    <head>
        <!-- Basic page needs 
        ======================================-->
        <title>Hestia - <?= $title ?></title>
        <meta charset="utf-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Mobile specific meat 
        ==============================================-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="../public/css/img/x-icon" href="../public/img/favicon.ico">		

        <!-- Template Fonts form google
        =============================================-->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
        <!-- Template CSS files -->

        <!-- Bootstrap core CSS -->
        <link href="../public/css/bootstrap.min.css" rel="stylesheet">
        <!--external css-->
        <link href="../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles for this template-->
        <link href="../public/css/dashboard.css" rel="stylesheet">
        <link href="../public/css/dashboard-responsive.css" rel="stylesheet">

    </head>

    <body>
        <section id="container">
            <!--header start-->
            <header class="header black-bg">
                
                <!--logo start-->
                <a href="index.php" class="logo"><img src="../public/img/logo-min.png" alt=""></a>
                <!--logo end-->
                
                <div class="top-menu">
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
                    <div id="sidebar" class="nav-collapse ">
                        <!-- sidebar menu start-->
                        <ul class="sidebar-menu" id="nav-accordion">
                            <p class="centered"><a href="index.php?route=profile"><img src="../public/img/agent/ui-sam.jpg" class="img-circle" width="80"></a></p>
                            <h5 class="centered">
                            <?= $this->session->show('login'); ?>
                            <?= $this->session->get('firstname'); ?> <?= $this->session->get('lastname'); ?>
                            </h5>
                            <?php
                                if ($this->session->get('status') === "99") {
                            ?>
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

                            <li class="mt">
                                <a href="index.php?route=addAgent">
                                <i class="fa fa-plus"></i>
                                <span>Nouvelle Agent</span>
                                </a>
                            </li>

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

                            <li class="mt">
                                <a href="index.php?route=configuration">
                                <i class="fa fa-cogs"></i>
                                <span>Configuration</span>
                                </a>
                            </li>

                            <?php
                                } else {
                            ?>

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

                            <li class="mt">
                                <a href="index.php?route=allAgents">
                                <i class="fa fa-users"></i>
                                <span>Les agents</span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=profile">
                                <i class="fa fa-user-circle"></i>
                                <span>Mon Profil</span>
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
        <script src="../public/lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="../public/lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../public/lib/jquery.scrollTo.min.js"></script>
        <script src="../public/lib/jquery.nicescroll.js" type="text/javascript"></script>
        <!--common script for all pages-->
        <script src="../public/lib/common-scripts.js"></script>
        <!--script for this page-->
        
        <!--<script src="../public/js/Spec.js" type="text/javascript"></script>
        <script src="../public/js/Preview.js" type="text/javascript"></script>
        <script src="../public/js/main.js" type="text/javascript"></script>-->
        
  </body>
  
</html>