<?php $this->title = "Tableau de bord"; ?>
<section id="main-content">
    <section class="wrapper">
       
                <div class="row">
                    <div class="col-lg-9 main-chart">
                    <h3><i class="fa fa-angle-right"></i> Tableau de Bord</h3>
                    <?= $this->session->show('notAdmin'); ?>

                        <div class="row mt">
                            <!-- col-md-4 -->
                            <div class="col-md-6 col-sm-6 mb">
                                <!-- START WHITE PANEL - NB ESTATE -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>TOUTES LES ANNONCES</h5>
                                    </div>
                                    <p><i class="fa fa-tags" id="landing-dashboard"></i></p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <p class="small mt">EN LIGNE</p>
                                            <p><?= $count; ?></p>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <p class="small mt">BROUILLON</p>
                                            <p><?= $countDraft; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END WHITE PANEL - NB ESTATE -->
                            </div>
                            <!-- /col-md-4 -->

                            <!-- col-md-4 -->
                            <div class="col-md-6 col-sm-6 mb">
                                <!-- START WHITE PANEL - NB RENT -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>MES ANNONCES</h5>
                                    </div>
                                    <p><i class="fa fa-home" id="landing-dashboard"></i></p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <p class="small mt">EN LIGNE</p>
                                            <p><?= $estateByAgentCount; ?></p>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <p class="small mt">BROUILLON</p>
                                            <p><?= $countEstateByAgentDraft; ?></p>
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
                            <div class="col-md-12 col-sm-12 mt">
                                <!-- REVENUE PANEL -->
                                <div class="message-p pn conetnt-panel">
                                    <div class="message-header">
                                        <h5>Vos dernières annonces</h5>
                                    </div>
                                    <section id="no-more-tables" class="mb">
                                        <table class="table table-hover table-striped table-condensed cf">
                                            <thead class="cf">
                                                <tr>
                                                    <th>Categorie</th>
                                                    <th>Type</th>
                                                    <th>Pièces</th>
                                                    <th>Titre</th>
                                                    <th>Prix</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach($estatesByAgent as $estateByAgent){
                                                ?>
                                                <tr>
                                                    <td data-title="Categorie"><?=$estateByAgent['category'];?></td>
                                                    <td data-title="type"><?=$estateByAgent['type'];?></td>
                                                    <td data-title="Pièces"><?=$estateByAgent['rooms'];?></td>
                                                    <td data-title="Titre"><?=$estateByAgent['title'];?></td>
                                                    <td data-title="Prix"><?=$estateByAgent['price'];?> €</td>
                                                </tr>
                                                <?php 
                                                } 
                                                ?>
                                            </tbody>

                                        </table>
                                    </section>
           
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 ds">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="nav notify-row" id="top_menu">
                                    <!--  notification start -->
                                        <ul class="nav top-menu">
                                            <!-- settings start -->
                                            <li class="dropdown">
                                                <a href="../public/index.php?route=allEstates">
                                                    <i class="fa fa-home"></i>
                                                    <span class="badge bg-theme"><?= $count; ?></span>
                                                </a>
                                            </li>
                                            <!-- settings end -->
                                            <!-- inbox dropdown start-->
                                            <li id="header_inbox_bar" class="dropdown">
                                                <a href="../public/index.php?route=allAgents">
                                                    <i class="fa fa-users"></i>
                                                    <span class="badge bg-theme"><?= $countAgent; ?></span>
                                                </a>
                                            </li>
                                            <!-- inbox dropdown end -->
                                            <!-- notification dropdown start-->
                                            <li id="header_notification_bar" class="dropdown">
                                                <a href="../public/index.php?route=allEstates">
                                                    <i class="fa fa-edit"></i>
                                                    <span class="badge bg-warning"><?= $countDraft; ?></span>
                                                </a>
                                            </li>
                                            
                                            <!-- notification dropdown end -->
                                        </ul>
                                    <!--  notification end -->
                                </div>
                            </div>
                        </div>

                        <!-- USERS ONLINE SECTION -->
                        <div class="row">
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
                        <div class="ow">
                            <h4 class="centered mt cog-title">Support Technique</h4>
                            <!-- Start contact form -->
                            <div class="row mt">
                                <div class="col-lg-12">
                                    <form class="form-horizontal style-form" method='POST' action="" enctype="multipart/form-data">
                                        <div class="col-sm-12 dashboard-contact">
                                            <label class="col-sm-10 col-md-10 control-label">Email</label>
                                            <input type="text" class="form-control form-landing-sm" name="email" placeholder="email">
                                        </div>
                                        <div class="col-sm-12 dashboard-contact">
                                            <label class="col-sm-10 col-md-10 control-label">Décrivez nous votre problème</label>
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
