
<?php $this->title = htmlspecialchars($estate->getTitle()); ?>

    <!-- Single Property Area Start-->
    <div class="section property-page-content-area area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-12 padding-right-zero">
                    <div class="property-page-title">
                        <h2><?= htmlspecialchars($estate->getTitle());?></h2>
                    </div>

                    <!-- Single Property Post Start -->
                    <div class="single-property-post">
                        <div class="single-property-slider">
                            <ul class="bxslider">
                                <li>
                                    <a href="#"><img src="../public/img/slider/<?= htmlspecialchars($estate->getPicture_url());?>" alt=""></a>
                                </li>
                                <?php 
                                    foreach($pictures as $picture){
                                ?>
                                <li>
                                    <a href="#"><img src="../public/img/upload/<?=$picture->getFile();?>" alt="<?=$picture->getFile();?>"></a>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <!-- Thumbnail Images -->
                            <div id="bx-pager">
                                <a data-slide-index="0" href="#"><img src="../public/img/upload/<?= htmlspecialchars($estate->getPicture_url());?>"  alt="<?= htmlspecialchars($estate->getPicture_url());?>" /></a>
                                <?php 
                                    foreach($pictures as $picture){
                                ?>
                                <a data-slide-index="1" href="#"><img src="../public/img/upload/<?=$picture->getFile();?>"  alt="<?=$picture->getFile();?>" /></a>
                                <?php
                                    }
                                ?>
                                <a data-slide-index="2" href="#"><img src="../public/img/slider/thumb3.jpg" alt="" /></a>
                                <a data-slide-index="3" href="#"><img src="../public/img/slider/thumb4.jpg" alt="" /></a>
                                <a data-slide-index="4" href="#"><img src="../public/img/slider/thumb5.jpg" alt="" /></a>
                                <a data-slide-index="5" href="#"><img src="../public/img/slider/thumb1.jpg" alt="" /></a>
                                <a data-slide-index="6" href="#"><img src="../public/img/slider/thumb3.jpg" alt="" /></a>
                            </div>
                        </div>
                        <!-- End of property Slider  -->
                        <div class="single-property-tab-content">
                            <!-- Single property tabs List-->
                            <ul class="property-tab">
                                <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                                <li><a href="#details" data-toggle="tab">Details</a></li>
                                <li><a href="#diagnostic" data-toggle="tab">Diagnostic</a></li>
                                <li><a href="#pictures" data-toggle="tab">Photo</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="description">
                                    <div class="description-tab-content tab-content-padding">
                                        <p>Description</p>
                                        <h4><?= htmlspecialchars($estate->getDescription());?></h4>
                                        
                                    </div>
                                </div>
                                <!-- End of Description Tab Content Area -->
                                <div class="tab-pane fade" id="details">
                                    <div class="details-content tab-content-padding fix">
                                        <div class="col-md-6 col-sm-6">

                                            <div class="single-pt-list">
                                                <ul>        
                                                    <li><strong>Type:</strong></li>
                                                    <li><strong>Catégorie:  </strong></li>
                                                    <li><strong>Surface carrez</strong><?= htmlspecialchars($estate->getArea());?> m2</li>
                                                    <li><strong>Pièces :</strong><?= htmlspecialchars($estate->getRooms());?></li>
                                                    <li><strong>Chambres :</strong><?= htmlspecialchars($estate->getBedrooms());?></li>
                                                    <li><strong>Salle de bain :</strong><?= htmlspecialchars($estate->getBathrooms());?></li>
                                                    <li><strong>Extérieur : <?= htmlspecialchars($estate->getOutside());?></strong></li>
                                                    <li><strong>Garage / Parking :</strong><?= htmlspecialchars($estate->getParking_type());?></li>
                                                    <li><strong>Extérieur:</strong><?= htmlspecialchars($estate->getOutside());?> <?= htmlspecialchars($estate->getOutside_area());?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="single-pt-list">
                                                <ul>        
                                                <li><strong>Prix :</strong><?= htmlspecialchars($estate->getPrice());?> €</li>
                                                    <li><strong>Charge :</strong><?= htmlspecialchars($estate->getCharge_price());?> €/Par an</li>
                                                    <li><strong>Honoraire :</strong><?= htmlspecialchars($estate->getFees());?> €</li>
                                                    <li><strong>Etage  :</strong><?= htmlspecialchars($estate->getFloor());?></li>
                                                    <li><strong>Année de construction: </strong><?= htmlspecialchars($estate->getBuilding_year());?></li>
                                                    <li><strong>Comble aménageable :</strong><?= htmlspecialchars($estate->getConvertible_attic());?></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Details Tab Content Area -->

                                <div class="tab-pane fade" id="diagnostic">
                                    <div class="diagnostic-content tab-content-padding fix">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="single-pt-list">
                                                <ul>
                                                    <li><strong>Diagnostique Electrique :</strong> <?= htmlspecialchars($estate->getLevel_energy_diagnostic());?></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="single-pt-list">
                                                <ul>
                                                    <li><strong>Diagnostique Gaz :</strong> <?= htmlspecialchars($estate->getLevel_climat_diagnostic());?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- End of amenities Tab Content Area -->
                                <div class="tab-pane fade  tab-content-padding fix" id="pictures">
                                    <div class="col-md-6 col-sm-6">
                                        
                                        <div class="single-floor-img">
                                            <img src="../public/img/properties/fp1.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="single-floor-img">
                                            <img src="../public/img/properties/fp2.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div id="single-property-map"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of address Tab Content Area -->
                            </div>
                        </div>
                        <!-- End of Tabe -->
                        
                        <div class="single-property-similar-cat">
                            <!-- Property Widget Area Title -->
                            <div class="property-page-title">
                                <h2>Biens récents</h2>
                            </div>
							<div class="row">
                                <div class="similar-cat-wrap">
                                <?php
                                    foreach ($latestEstates as $latestEstate)
                                    {
                                ?>
                                    <div class="col-md-3">
                                         <div class="single-similar-cat">
                                            <div class="similar-property-img">
                                                <a href="#"><img src="../public/img/upload/<?= htmlspecialchars($latestEstates['picture_url']);?>" alt=""></a>
                                            </div>
                                            <div class="similar-property-tag">
                                                <p><?= htmlspecialchars($latestEstates['category']);?></p>
                                            </div>
                                        </div>                                                                             
                                    </div>
                                <?php
                                    }
                                ?>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End of Similar Category Post -->
                    </div>
                    <!-- Single Property Post End -->


                </div>
                <div class="col-md-4 padding-left-65">
                    <div class="column-widget">
                        <div class="feature-property-widget">
                            
                            <!-- Recent properties Widget Title
                            <div class="property-page-title">
                                <h2>Nouveauté</h2>
                            </div>
                            <div class="single-property-footer-post right-sidebar">
                                <div class="properties-img pull-left">
                                    <a href="#"><img src="../public/img/widget/5.jpg" alt=""></a>
                                </div>
                                <div class="properties-content-footer pull-left">
                                    <h4><a href="#">Titre</a></h4>
                                    <p>Ville,
                                        <br> Code Postal</p>
                                    <div class="property-price">
                                        <p>Prix €</p>
                                    </div>
                                </div>
                            </div>-->
                         
                        </div>
                        <!-- Agent Widget Area -->
                        <div class="agent-widget hidden-sm">
                            <div class="property-page-title">
                                <h2>L'équipe</h2>
                            </div>
                            <?php
                                foreach ($agents as $agent)
                                {
                            ?>
                            <div class="single-property-footer-post right-sidebar">
                                <div class="properties-img pull-left">
                                    <a href="../public/index.php?route=agent&agentId=<?= htmlspecialchars($agent->getId());?>"><img src="../public/img/agent/<?= htmlspecialchars($agent['avatar']);?>" alt="<?= htmlspecialchars($agent['avatar']);?>"></a>
                                </div>
                                <div class="properties-content-footer pull-left">
                                    <h3><a href="../public/index.php?route=agent&agentId=<?= htmlspecialchars($agent->getId());?>"><?= htmlspecialchars($agent['firstname']);?> <?= htmlspecialchars($agent['lastname']);?></a></h3>
                                    <p><?= htmlspecialchars($agent['function']);?></p>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Single Post Main content end -->