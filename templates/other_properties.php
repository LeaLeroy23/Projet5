<?php $this->title = "Autres Biens"; ?>

    <!--Property  Page Main Content Area Start-->
    <div class="section property-page-content-area property-2-column-area area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12  padding-right-zero">
                    <!-- Property Area Title -->
                    <div class="property-page-title">
                        <h2>Les autres propriétés</h2>
                    </div>
                    <!-- Start of Single Property -->
                        <?php
                            foreach ($otherProperties as $otherPropertie)
                            {
                        ?>
                            <div class="column-single-property">
                                <div class="column-property-img-wrap">
                                    <div class="column-property-img">
                                        <a href="index.php?route=estate&estateId=<?= ($otherPropertie['id']);?>"><img src="img/slider/<?= ($otherPropertie['picture_url']);?>" alt="<?= ($otherPropertie['picture_url']);?>"></a>
                                    </div>
                                    <div class="column-property-tag">
                                        <p><?= ($otherPropertie['type']);?></p>
                                    </div>
                                    <div class="properties-include opicity-bg">
                                        <ul>
                                            <li> <i class="fa fa-home"></i><?= ($otherPropertie['area']);?> m2</li>
                                            <li><i class="fa fa-square"></i> <?= ($otherPropertie['rooms']);?> Pièce(s)</li>
                                            <li><i class="fa fa-bed"></i><?= ($otherPropertie['bedrooms']);?> Chambre(s)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column-property-content-wrap">
                                    <div class="column-property-content">
                                        <h2><a href="index.php?route=estate&estateId=<?= ($otherPropertie['id']);?>"><?= ($otherPropertie['title']);?></a> </h2>
                                        <h3><?= ($otherPropertie['city']);?></h3>
                                        <p><?= ($otherPropertie['excerpt']);?></p>
                                    </div>
                                    <div class="column-property-more">
                                        <a href="index.php?route=estate&estateId=<?= ($otherPropertie['id']);?>">Voir Plus</a>
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
                                    <p><?= ($latestEstate['type']);?>
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

                <div class="col-md-4 col-sm-12 padding-left-65">
                    <div class="column-widget">
                        <div class="recent-property-widget">
                            <!-- START Recent properties Widget Title -->
                            <div class="property-page-title">
                                <h2>L'Équipe</h2>
                            </div>
                            <?php
                                foreach ($limitAgents as $limitAgent)
                                {
                            ?>
                            <div class="single-property-footer-post right-sidebar">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="pull-left">
                                            <a href="index.php?route=agent&agentId=<?= ($limitAgent->getId());?>">
                                                <img src="img/agent/<?= ($limitAgent->getAvatar());?>" alt="<?= ($limitAgent->getAvatar());?>">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="properties-content-footer pull-left">
                                            <h3><a href="index.php?route=agent&agentId=<?= ($limitAgent->getId());?>"><?= ($limitAgent->getLastname());?> <?= ($limitAgent->getFirstname());?></a></h3>
                                            <p><?= ($limitAgent->getFunction());?></p>
                                        </div>
                                    </div>
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
    <!--Property Page Main content Area End Hear-->
