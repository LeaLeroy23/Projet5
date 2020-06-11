<?php $this->title = "Tableau de bord"; ?>
<section id="main-content">
    <section class="wrapper">
       
                <div class="row">
                    <div class="col-lg-9 main-chart">
                    <h3><i class="fa fa-angle-right"></i> Ajouter une annonce</h3>
                    <?= $this->session->show('notAdmin'); ?>

                        <div class="row mt">
                            <!-- col-md-4 -->
                            <div class="col-md-6 mb">
                                <!-- START WHITE PANEL - NB ESTATE -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>TOUTES LES ANNONCES</h5>
                                    </div>
                                    <p><i class="fa fa-tags" id="landing-dashboard"></i></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">EN LIGNE</p>
                                            <p><?= $count; ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="small mt">BROUILLON</p>
                                            <p><?= $countDraft; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END WHITE PANEL - NB ESTATE -->
                            </div>
                            <!-- /col-md-4 -->

                            <!-- col-md-4 -->
                            <div class="col-md-6 mb">
                                <!-- START WHITE PANEL - NB RENT -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>MES ANNONCES</h5>
                                    </div>
                                    <p><i class="fa fa-home" id="landing-dashboard"></i></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">EN LIGNE</p>
                                            <p><?php ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="small mt">BROUILLON</p>
                                            <p><?php $countByAgent;?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END WHITE PANEL - NB RENT -->
                            </div>
                            <!-- /col-md-4 -->

                        </div>

                        <div class="row mt">
                            <!-- SERVER STATUS PANELS -->

                            <!-- /col-md-4 -->
                            <div class="col-md-12 col-sm-12 mb">
                                <!-- REVENUE PANEL -->
                                <div class="green-panel pn">
                                    <div class="green-header">
                                        <h5>Vos dernières annonces</h5>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 ds">
                        <div class="col-lg-12">
                            <div class="nav notify-row" id="top_menu">
                                <!--  notification start -->
                                <ul class="nav top-menu">
                                    <!-- settings start -->
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php?route=allEstates">
                                        <i class="fa fa-home"></i>
                                        <span class="badge bg-theme"><?php ?></span>
                                        </a>
                                    </li>
                                    <!-- settings end -->
                                    <!-- inbox dropdown start-->
                                    <li id="header_inbox_bar" class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php?route=allAgents">
                                        <i class="fa fa-users"></i>
                                        <span class="badge bg-theme">0</span>
                                        </a>
                                    </li>
                                    <!-- inbox dropdown end -->
                                    <!-- notification dropdown start-->
                                    <li id="header_notification_bar" class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.php?route=allEstates">
                                        <i class="fa fa-edit"></i>
                                        <span class="badge bg-warning">0</span>
                                        </a>
                                    </li>
                                    <!-- notification dropdown end -->
                                </ul>
                                <!--  notification end -->
                            </div>
                        </div>
                        <!-- USERS ONLINE SECTION -->
                        <div class="col-lg-12">
                            <h4 class="centered mt">Membre de l'équipe</h4>
                            <!-- First Member -->
                            <?php 
                                foreach($agents as $agent){
                                ?>
                            <div class="desc">
                                <div class="thumb">
                                    <img class="img-circle" src="../public/img/agent/<?=$agent->getAvatar();?>" width="35px" height="35px">
                                </div>
                                <div class="details">
                                    <p>
                                    <a href="#"><?=$agent->getFirstname();?> <?=$agent->getLastname();?></a><br/>
                                    <?=$agent->getEmail();?>
                                    </p>
                                </div>
                            </div>
                            <?php 
                                }
                            ?>
                        </div>
                        <div class="col-lg-12">
                            <h4 class="centered mt cog-title">Support Technique</h4>
                            <!-- Start contact form -->
                            <div class="row mt">
                                <div class="col-lg-12">
                                    
                                        <form class="form-horizontal style-form" method='POST' action="" enctype="multipart/form-data">
                                            <div class="col-sm-12">
                                                <label class="col-sm-8 col-sm-8 control-label">Email</label>
                                                <input type="text" class="form-control form-landing-sm" name="email" placeholder="email">
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="col-sm-8 col-sm-8 control-label">Décrivez nous votre problème</label>
                                                <textarea class="form-control form-landing-sm" placeholder="message"></textarea>
                                            </div>
                                            <div class="col-sm-12 form-landing">
                                                <input type="submit" class="btn btn-theme05" value="Envoyé">
                                            </div>
                                        </form>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End  contact form -->

                    </div>

                </div>
             </section>
        </section>
    </body>