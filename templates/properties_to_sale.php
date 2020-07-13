<?php $this->title = "Les biens à la vente"; ?>

    <!--Property  Page Main Content Area Start-->
    <div class="section property-page-content-area property-2-column-area area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12  padding-right-zero">
                    <!-- Property Area Title -->
                    <div class="property-page-title">
                        <h2>Toutes les propriétés à vendre</h2>
                    </div>
                    <!-- Start of Single Property -->
                        <?php
                            foreach ($allPropertiesSales as $allPropertiesSale)
                            {
                        ?>
                            <div class="column-single-property">
                                <div class="column-property-img-wrap">
                                    <div class="column-property-img">
                                        <a href="index.php?route=estate&estateId=<?= ($allPropertiesSale['id']);?>"><img src="img/slider/<?= ($allPropertiesSale['picture_url']);?>" alt=""></a>
                                    </div>
                                    <div class="column-property-tag">
                                        <p><?= ($allPropertiesSale['type']);?></p>
                                    </div>
                                    <div class="properties-include opicity-bg">
                                        <ul>
                                            <li> <i class="fa fa-home"></i><?= ($allPropertiesSale['area']); m2?></li>
                                            <li><i class="fa fa-square"></i> <?= ($allPropertiesSale['rooms']);?> Pièce(s)</li>
                                            <li><i class="fa fa-bed"></i><?= ($allPropertiesSale['bedrooms']);?> Chambre(s)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column-property-content-wrap">
                                    <div class="column-property-content">
                                        <h2><a href="single-property.php"><?= ($allPropertiesSale['title']);?></a> </h2>
                                        <h3><?= ($allPropertiesSale['city']);?></h3>
                                        <p><?= ($allPropertiesSale['excerpt']);?></p>
                                    </div>
                                    <div class="column-property-more">
                                        <a href="index.php?route=estate&estateId=<?= ($allPropertiesSale['id']);?>">Voir Plus</a>
                                    </div>
                                </div>
                            </div>
                        <!-- End of Single Property -->
                        <?php
                            }
                        ?>

                </div>

                <div class="col-md-4 col-sm-12 padding-left-65">
                    <div class="column-widget">
                        <div class="feature-property-widget">
                            <!-- Property Widget Area Title -->
                            <div class="property-page-title">
                                <h2>Les biens en location</h2>
                            </div>
                            <?php
                                foreach ($estatesForRent as $estateForRent)
                                {
                            ?>
                            <div class="single-sp-widget">
                                <div class="widget-property-img">
                                    <a href="index.php?route=estate&estateId=<?= ($estateForRent['id']);?>"><img src="img/slider/<?= ($estateForRent['picture_url']);?>" alt=""></a>
                                </div>
                                <div class="column-property-tag">
                                    <p><?= ($estateForRent['category']);?></p>
                                </div>
                                <h3><a href="index.php?route=estate&estateId=<?= ($estateForRent['id']);?>"><?= ($estateForRent['title']);?></a></h3>
                                <p><?= ($estateForRent['excerpt']);?></p>
                            </div>
                            
                        </div>

                        <?php
                            }
                        ?>
                        
                        <div class="recent-property-widget">
                            <!-- START Recent properties Widget Title -->
                            <div class="property-page-title">
                                <h2>Récemment Ajouté</h2>
                            </div>
                            <?php
                                foreach ($latestEstates as $latestEstate)
                                {
                            ?>
                            <div class="single-property-footer-post right-sidebar">
                                <div class="properties-img pull-left">
                                    <a href="index.php?route=estate&estateId=<?= ($latestEstate['id']);?>">
                                        <img src="img/slider/<?= ($latestEstate['picture_url']);?>" alt="<?= ($latestEstate['picture_url']);?>">
                                    </a>
                                </div>
                                
                                <div class="properties-content-footer pull-left">
                                    <h4><a href="index.php?route=estate&estateId=<?= ($latestEstate['id']);?>"><?= ($latestEstate['title']);?></a></h4>
                                    <p><?= ($latestEstate['category']);?>
                                        <br> <?= ($latestEstate['city']);?></p>
                                    <div class="property-price">
                                        <p><?= ($latestEstate['price']);?> €</p>
                                    </div>

                                </div>
                            </div>
                            <?php
                                }
                            ?>
                            <!-- END Recent properties Widget Title -->                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Property Page Main content Area End Hear-->
