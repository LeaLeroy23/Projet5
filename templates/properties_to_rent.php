<?php $this->title = "Les biens à la vente"; ?>

    <!--Property  Page Main Content Area Start-->
    <div class="section property-page-content-area property-2-column-area area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12  padding-right-zero">
                    <!-- Property Area Title -->
                    <div class="property-page-title">
                        <h2>Toutes les propriétés à la location</h2>
                    </div>
                    <!-- Start of Single Property -->
                        <?php
                            foreach ($allPropertiesForRents as $allPropertiesForRent)
                            {
                        ?>
                            <div class="column-single-property">
                                <div class="column-property-img-wrap">
                                    <div class="column-property-img">
                                        <a href="index.php?route=estate&estateId=<?= ($allPropertiesForRent['id']);?>"><img src="../public/img/upload/<?= ($allPropertiesForRent['picture_url']);?>" alt=""></a>
                                    </div>
                                    <div class="column-property-tag">
                                        <p><?= ($allPropertiesForRent['type']);?></p>
                                    </div>
                                    <div class="properties-include opicity-bg">
                                        <ul>
                                            <li> <i class="fa fa-home"></i><?= ($allPropertiesForRent['area']); m2?></li>
                                            <li><i class="fa fa-square"></i> <?= ($allPropertiesForRent['rooms']);?> Pièce(s)</li>
                                            <li><i class="fa fa-bed"></i><?= ($allPropertiesForRent['bedrooms']);?> Chambre(s)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column-property-content-wrap">
                                    <div class="column-property-content">
                                        <h2><a href="index.php?route=estate&estateId=<?= ($allPropertiesForRent['id']);?>"><?= ($allPropertiesForRent['title']);?></a> </h2>
                                        <h3><?= ($allPropertiesForRent['city']);?></h3>
                                        <p><?= ($allPropertiesForRent['excerpt']);?></p>
                                    </div>
                                    <div class="column-property-more">
                                        <a href="index.php?route=estate&estateId=<?= ($allPropertiesForRent['id']);?>">Voir Plus</a>
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
                                <h2>Les biens en vente</h2>
                            </div>
                            <?php
                                foreach ($estatesForSales as $estateForSale)
                                {
                            ?>
                            <div class="single-sp-widget">
                                <div class="widget-property-img">
                                    <a href="index.php?route=estate&estateId=<?= ($estateForSale['id']);?>"><img src="../public/img/upload/<?= ($estateForSale['picture_url']);?>" alt="<?= ($allPropertiesForRent['title']);?>"></a>
                                </div>
                                <div class="column-property-tag">
                                    <p><?= ($estateForSale['category']);?></p>
                                </div>
                                <h3><a href="index.php?route=estate&estateId=<?= ($estateForSale['id']);?>"><?= ($estateForSale['title']);?></a></h3>
                                <p><?= ($estateForSale['excerpt']);?></p>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        
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
                                        <img src="../public/img/upload/<?= ($latestEstate['picture_url']);?>" alt="<?= ($latestEstate['picture_url']);?>">
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
