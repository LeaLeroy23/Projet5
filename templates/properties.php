<?php $this->title = "Tous les biens"; ?>

    <!--Property  Page Main Content Area Start-->
    <div class="section property-page-content-area property-2-column-area area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12  padding-right-zero">
                    <!-- Property Area Title -->
                    <div class="property-page-title">
                        <h2>Toutes les propriétés</h2>
                    </div>
                    <!-- Start of Single Property -->
                        <?php
                            foreach ($estates as $estate)
                            {
                        ?>
                            <div class="column-single-property">
                                <div class="column-property-img-wrap">
                                    <div class="column-property-img">
                                        <a href="index.php?route=estate&estateId=<?= ($estate['id']);?>"><img src="../public/img/upload/<?= ($estate['picture_url']);?>" alt=""></a>
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
                                        <h2><a href="single-property.php"><?= ($estate['title']);?></a> </h2>
                                        <h3><?= ($estate['city']);?></h3>
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

                </div>

                <div class="col-md-4 col-sm-12 padding-left-65">
                    <div class="column-widget">
                        <div class="feature-property-widget">
                            <!-- Property Widget Area Title -->
                            <div class="property-page-title">
                                <h2>Les derniers biens</h2>
                            </div>
                            <?php
                                foreach ($latestEstates as $latestEstate)
                                {
                            ?>
                            <div class="single-sp-widget">
                                <div class="widget-property-img">
                                    <a href="index.php?route=estate&estateId=<?= ($latestEstate['id']);?>"><img src="../public/img/upload/<?= ($latestEstate['picture_url']);?>" alt=""></a>
                                </div>
                                <div class="column-property-tag">
                                    <p><?= ($latestEstate['category']);?></p>
                                </div>
                                <h3><a href="index.php?route=estate&estateId=<?= ($latestEstate['id']);?>"><?= ($latestEstate['title']);?></a></h3>
                                <p><?= ($latestEstate['excerpt']);?></p>
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
    <!--Property Page Main content Area End Hear-->
