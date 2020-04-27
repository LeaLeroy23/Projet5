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
        <link href="../public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--external css-->
        <link href="../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../public/lib/bootstrap-datepicker/css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="../public/lib/bootstrap-daterangepicker/daterangepicker.css" />
        <!-- Custom styles for this template -->
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
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        <!-- settings start -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php?route=all_estate">
                            <i class="fa fa-home"></i>
                            <span class="badge bg-theme">0</span>
                            </a>
                        </li>
                        <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php?route=all_users">
                        <i class="fa fa-users"></i>
                        <span class="badge bg-theme">0</span>
                        </a>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="public/index.php?route=all_estate">
                        <i class="fa fa-edit"></i>
                        <span class="badge bg-warning">0</span>
                        </a>
                    </li>
                    <!-- notification dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="index.php?route=logout">Déconnexion</a></li>
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
                            <h5 class="centered"><?= $this->session->get('lastname'); ?> <?= $this->session->get('firstname'); ?></h5>
                            <li class="mt">
                                <a href="index.php?route=dashboard">
                                <i class="fa fa-dashboard"></i>
                                <span>Tableau de bord</span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=add_estate">
                                <i class="fa fa-plus"></i>
                                <span>Nouvelle annonce</span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=addInput">
                                <i class="fa fa-plus"></i>
                                <span>Modifier les champs </span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=all_estate">
                                <i class="fa fa-copy"></i>
                                <span>Les annonces</span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=all_agents">
                                <i class="fa fa-users"></i>
                                <span>Les agents</span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=addAgent">
                                <i class="fa fa-plus"></i>
                                <span>Nouvelle Agent</span>
                                </a>
                            </li>

                            <li class="mt">
                                <a href="index.php?route=profile">
                                <i class="fa fa-user-circle"></i>
                                <span>Mon Profil</span>
                                </a>
                            </li>

                        </ul>
                        <!-- sidebar menu end-->
                    </div>
                </aside>
                <!--sidebar end-->

                <?= $content; ?>

                    <!-- /MAIN CONTENT -->
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
        </section>
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="../public/lib/jquery/jquery.min.js"></script>
        <script src="../public/lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="../public/lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="../public/lib/jquery.scrollTo.min.js"></script>
        <script src="../public/lib/jquery.nicescroll.js" type="text/javascript"></script>
        <!--common script for all pages-->
        <script src="../public/lib/common-scripts.js"></script>
        <!--script for this page-->
        <script src="../public/lib/form-validation-script.js"></script>
        <script src="../public/js/main.js" type="text/javascript"></script>
        <script src="../public/js/add-info.js" type="text/javascript"></script>
  
  </body>
  
</html>