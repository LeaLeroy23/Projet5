<?php $this->title = "Les biens"; ?>

    <!--Property  Page Main Content Area Start-->
    <div class="section property-page-content-area property-2-column-area area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12  padding-right-zero">
                    <!-- Property Area Title -->
                    <div class="property-page-title">
                        <h2>Nombre de propriété</h2>
                    </div>
                    <!-- Start of Single Property -->
                        <?php
                            foreach ($estates as $estate)
                            {
                        ?>
                            <div class="column-single-property">
                                <div class="column-property-img-wrap">
                                    <div class="column-property-img">
                                        <a href="#"><img src="../public/img/properties/7.jpg" alt=""></a>
                                    </div>
                                    <div class="column-property-tag">
                                        <p><?= ($estate['type']);?></p>
                                    </div>
                                    <div class="properties-include opicity-bg">
                                        <ul>
                                            <li> <i class="fa fa-home"></i><?= ($estate['area']); m2?></li>
                                            <li><i class="fa fa-square"></i> <?= ($estate['rooms']);?> Pièce(s)</li>
                                            <li><i class="fa fa-bed"></i><?= ($estate['bedrooms']);?> Chambre(s)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column-property-content-wrap">
                                    <div class="column-property-content">
                                        <h2><a href="single-property.php"><?= ($estate['title']);?> €</a> </h2>
                                        <h3><?= ($estate['zip_code']);?></h3>
                                        <p><?= ($estate['excerpt']);?></p>
                                    </div>
                                    <div class="column-property-more">
                                        <a href="index.php?route=estate&estateId=<?= ($estate['id']);?>">Voir Plus</a>
                                    </div>
                                </div>
                            </div>
                        <!-- End of Single Property -->
                        <?php
                            }
                        ?>

                    
                    <div class="scroll-for-btn">
                        <a href="single-property.php">Voir plus</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 padding-left-65">
                    <div class="column-widget">
                        <div class="feature-property-widget">
                            <!-- Property Widget Area Title -->
                            <div class="property-page-title">
                                <h2>Autres Bien</h2>
                            </div>
                            <div class="single-sp-widget">
                                <div class="widget-property-img">
                                    <a href="#"><img src="../public/img/widget/4.jpg" alt=""></a>
                                </div>
                                <div class="column-property-tag">
                                    <p>A Louer</p>
                                </div>
                                <h3><a href="single-property.php">Titre</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                            </div>
                            
                        </div>
                        
                        <div class="recent-property-widget">
                            <!-- START Recent properties Widget Title -->
                            <div class="property-page-title">
                                <h2>Récemment Ajouté</h2>
                            </div>
                            <div class="single-property-footer-post right-sidebar">
                                <div class="properties-img pull-left">
                                    <a href="#"><img src="../public/img/widget/5.jpg" alt=""></a>
                                </div>
                                <div class="properties-content-footer pull-left">
                                    <h4><a href="single-property.php">Titre</a></h4>
                                    <p>Ville
                                        <br> Code Postal</p>
                                    <div class="property-price">
                                        <p>Prix €</p>
                                    </div>

                                </div>
                            </div>
                            <!-- END Recent properties Widget Title -->                    
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Property Page Main content Area End Hear-->
