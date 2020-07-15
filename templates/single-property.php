
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
                                    <a href="#"><img src="img/slider/<?= htmlspecialchars($estate->getPicture_url());?>" alt=""></a>
                                </li>
                                <?php 
                                    foreach($pictures as $picture){
                                ?>
                                <li>
                                    <a href="#"><img src="img/upload/<?=$picture->getFile();?>" alt="<?=$picture->getFile();?>"></a>
                                </li>
                                <?php
                                    }
                                ?>
                            </ul>
                            <!-- Thumbnail Images -->
                            <div id="bx-pager">
                                <a data-slide-index="0" href="#"><img src="img/slider/<?= htmlspecialchars($estate->getPicture_url());?>"  alt="<?= htmlspecialchars($estate->getPicture_url());?>" /></a>
                                <?php 
                                    foreach($pictures as $picture){
                                ?>
                                <a data-slide-index="<?=$picture->getId();?>" href="#"><img src="img/upload/<?=$picture->getFile();?>"  alt="<?=$picture->getFile();?>" /></a>
                                <?php
                                    }
                                ?>
                                
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
                                            <img src="img/properties/fp1.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="single-floor-img">
                                            <img src="img/properties/fp2.jpg" alt="" class="img-responsive">
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
                                
                                <?php
                                    foreach ($latestEstates as $latestEstate)
                                    {
                                ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-featured-properties">
                                            <div class="properties-image">
                                                <a href="index.php?route=estate&estateId=<?= ($latestEstate['id']);?>"><img src="img/slider/<?= ($latestEstate['picture_url']);?>" alt="<?= ($latestEstate['picture_url']);?>"></a>
                                            </div>
                                            <div class="sale-tag">
                                                <p><?=($latestEstate['category']);?></p>
                                            </div>
                                            <div class="properties-include">
                                                <ul>
                                                    <li><i class="fa fa-home"></i> <?= ($latestEstate['area']);?> m2</li>
                                                    <li><i class="fa fa-square"></i><?= ($latestEstate['rooms']);?> Pièce(s)</li>
                                                    <li><i class="fa fa-bed"></i> <?= ($latestEstate['bedrooms']);?> Chambre(s)</li>
                                                </ul>
                                            </div>
                                            <div class="properties-content">
                                                <h3><a href="single-property.php"><?= ($latestEstate['title']);?></a></h3>
                                                <p><i class="fa fa-map-marker"></i> <?= ($latestEstate['city']);?></p>
                                                <p class="detail-text"><?= ($latestEstate['excerpt']);?></p>
                                                <div class="price-detail">
                                                    <p class="price-range pull-left"><?= ($latestEstate['price']);?> €</p>
                                                    <a href="index.php?route=estate&estateId=<?= ($latestEstate['id']);?>" class="price-detail pull-right">Detail <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                <?php
                                    }
                                ?>
                                    
                                
                            </div>
                        </div>
                        <!-- End of Similar Category Post -->
                    </div>
                    <!-- Single Property Post End -->

                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        
                        <!-- Agent Widget Area -->
                        <div class="agent-widget hidden-sm">
                            <div class="property-page-title">
                                <h2>L'équipe</h2>
                            </div>
                            <div class="row">
                                <!--<div class="single-property-footer-post right-sidebar">-->
                                    <?php
                                        foreach ($limitAgents as $limitAgent)
                                        {
                                    ?>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="single-property-footer-post">
                                            <div class="properties-images">
                                                <a href="index.php?route=agent&agentId=<?= htmlspecialchars($limitAgent->getId());?>"><img src="img/agent/<?= htmlspecialchars($limitAgent->getAvatar());?>" alt="<?= htmlspecialchars($limitAgent->getAvatar());?>"></a>
                                            </div>
                                            <div class="properties-content">
                                                <h3><a href="index.php?route=agent&agentId=<?= htmlspecialchars($limitAgent->getId());?>"><?= htmlspecialchars($limitAgent->getFirstname());?> <?= htmlspecialchars($limitAgent->getLastname());?></a></h3>
                                                <div class="price-detail">
                                                    <p><?= htmlspecialchars($limitAgent->getFunction());?></p>
                                                    <p><?= htmlspecialchars($limitAgent->getDescription());?></p>
                                                    <a href="index.php?route=agent&agentId=<?= ($limitAgent->getId());?>" class="price-detail pull-right">Detail <i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                <!--</div>-->
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Single Post Main content end -->