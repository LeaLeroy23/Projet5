<?php $this->title = "Tableau de bord"; ?>
<section id="main-content">
    <section class="wrapper">
       
                <div class="row">
                    <div class="col-lg-9 main-chart">
                    <h3><i class="fa fa-angle-right"></i> Ajouter une annonce</h3>

                        <div class="row mt">
                            <!-- col-md-4 -->
                            <div class="col-md-4 mb">
                                <!-- START WHITE PANEL - NB ESTATE -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>TOTAL ANNONCE</h5>
                                    </div>
                                    <p><i class="fa fa-tags" id="landing-dashboard"></i></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">EN LIGNE</p>
                                            <p>21</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="small mt">BROUILLON</p>
                                            <p>2</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END WHITE PANEL - NB ESTATE -->
                            </div>
                            <!-- /col-md-4 -->

                            <!-- col-md-4 -->
                            <div class="col-md-4 mb">
                                <!-- START WHITE PANEL - NB RENT -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>LOCATION</h5>
                                    </div>
                                    <p><i class="fa fa-home" id="landing-dashboard"></i></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">EN LIGNE</p>
                                            <p>15</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="small mt">BROUILLON</p>
                                            <p>1</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- END WHITE PANEL - NB RENT -->
                            </div>
                            <!-- /col-md-4 -->

                            <!-- col-md-4 -->
                            <div class="col-md-4 mb">
                                <!-- START WHITE PANEL - NB SALES -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>VENTE</h5>
                                    </div>
                                    <p><i class="fa fa-home" id="landing-dashboard"></i></p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="small mt">EN LIGNE</p>
                                            <p>6</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="small mt">BROUILLON</p>
                                            <p>1</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- START WHITE PANEL - NB SALES -->
                            </div>
                            <!-- /col-md-4 -->
                        </div>

                        <div class="row mt">
                            <!-- SERVER STATUS PANELS -->
                            <div class="col-md-6 col-sm-6 mb">
                                <div class="grey-panel pn donut-chart">
                                    <div class="grey-header">
                                        <h5>Dernières annonces Location</h5>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /grey-panel -->

                            <!-- /col-md-4 -->
                            <div class="col-md-6 col-sm-6 mb">
                                <!-- REVENUE PANEL -->
                                <div class="green-panel pn">
                                    <div class="green-header">
                                        <h5>Dernières annonces Ventes</h5>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 ds">
                    
                        <!-- USERS ONLINE SECTION -->
                        <h4 class="centered mt">Membre de l'équipe</h4>
                        <!-- First Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="../public/img/agent/ui-sam.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                <a href="#">Donovan Blumveast</a><br/>
                                Donovan.B@hestia.com
                                </p>
                            </div>
                        </div>
                        <!-- Second Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="../public/img/agent/ui-divya.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                <a href="#">Ludivine Holmes</a><br/>
                                Ludivine.H@hestia.com
                                </p>
                            </div>
                        </div>
                        <!-- Third Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="../public/img/agent/ui-danro.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                <a href="#">Rudy Cagliari</a><br/>
                                Rudy.C@hestia.com
                                </p>
                            </div>
                        </div>
                        <!-- Fourth Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="../public/img/agent/ui-sherman.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                <a href="#">William Dupont</a><br/>
                                William.D@hestia.com
                                </p>
                            </div>
                        </div>

                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="../public/img/agent/ui-zac.jpg" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                <a href="#">Zac Sniders</a><br/>
                                Zac.S@hestia.com
                                </p>
                            </div>
                        </div>

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

                        <!-- End  contact form -->

                    </div>

                </div>
             </section>
        </section>
    </body>