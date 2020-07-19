<?php $this->title = $agent->getLastname(); ?>
<!--  Single Property Area Start-->
    <div class="section single-agent-content-area area-pading">
        <div class="container">
            <div class="row">
                <div class="col-md-8 padding-right-zero">
                    <!-- Single Property Post Start -->
                    <div class="single-property-post">
                        <!--  Area Title -->
                        <div class="property-page-title">
                            <h2><?= $agent->getFirstname();?> <?= $agent->getLastname();?></h2>
                        </div>
                        <div class="single-agent-profile-wrap">
                            <div class="agents-profile fix">
                                <div class="row">
                                    <div class="agent-col col-lg-6 col-md-12">
                                        <div class="agent-img fix">
                                            <?php if (empty($agent->getAvatar())){ ?>
                                                <img src='img/agent/default.jpg'>
                                            <?php } else { ?>
                                                <img src="img/agent/<?= ($agent->getAvatar());?>" alt="<?= ($agent->getAvatar());?>">
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="agent-col col-lg-6 col-md-12">
                                        <div class="agent-name-meta fix">
                                            <h3><?= $agent->getFirstname();?> <?= $agent->getLastname();?></h3>
                                            <ul>
                                                <li><i class="fa fa-phone"></i><?= $agent->getPhone();?></li>
                                                <li><i class="fa fa-user"></i><?= $agent->getFunction();?></li>
                                                <li><i class="fa fa-envelope"></i><?= $agent->getEmail();?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Agent Profile -->
                            <div class="agents-details">
                                <!--  Area Title -->
                                <div class="property-page-title">
                                    <h2>Description</h2>
                                </div>
                                <p><?= $agent->getDescription();?></p>
                            </div>
                        </div>
                        <!-- End of Video Content -->
                        <div class="single-property-similar-cat property-2-column-area">
                            <!-- Property Widget Area Title -->
                            <div class="property-page-title ">
                                <h2>Autres biens de <span><?= $agent->getLastname();?> <?= $agent->getFirstname();?></span></h2>
                            </div>
                            <div class="row">
                            <?php 
                                foreach($estatesByAgent as $estateByAgent){
                            ?>
                                <div class="column-single-property">
                                <div class="column-property-img-wrap">
                                    <div class="column-property-img">
                                        <a href="index.php?route=estate&estateId=<?= ($estateByAgent['id']);?>">
                                        <?php if (empty($estateByAgent['picture_url'])){ ?>
                                            <img src='img/slider/default.jpg'>
                                        <?php } else { ?>
                                            <img src="img/slider/<?= ($estateByAgent['picture_url']);?>" alt="<?= ($estateByAgent['picture_url']);?>">
                                        <?php } ?>
                                        </a>
                                    </div>
                                    <div class="column-property-tag">
                                        <p><?= ($estateByAgent['type']);?></p>
                                    </div>
                                    <div class="properties-include opicity-bg">
                                        <ul>
                                            <li> <i class="fa fa-home"></i><?= ($estateByAgent['area']);?> m2</li>
                                            <li><i class="fa fa-square"></i> <?= ($estateByAgent['rooms']);?> Pièce(s)</li>
                                            <li><i class="fa fa-bed"></i><?= ($estateByAgent['bedrooms']);?> Chambre(s)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="column-property-content-wrap">
                                    <div class="column-property-content">
                                        <h2><a href="index.php?route=estate&estateId=<?= ($estateByAgent['id']);?>"><?= ($estateByAgent['title']);?></a> </h2>
                                        <h3><?= ($estateByAgent['city']);?></h3>
                                        <p><?= ($estateByAgent['excerpt']);?></p>
                                    </div>
                                    <div class="column-property-more">
                                        <a href="index.php?route=estate&estateId=<?= ($estateByAgent['id']);?>">Voir Plus</a>
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
                <div class="col-md-4 padding-left-65">
                    <div class="column-widget">
                        
                        <div class="recent-property-widget">
                            <!-- Recent properties Widget Title -->
                            <div class="property-page-title">
                                <h2>Nouveautés</h2>
                            </div>
                            <?php
                                foreach ($latestEstates as $latestEstate)
                                {
                            ?>
                            <div class="single-property-footer-post right-sidebar">
                                <div class="properties-img pull-left">
                                    <a href="index.php?route=estate&estateId=<?= ($latestEstate['id']);?>">
                                        <?php if (empty($latestEstate['picture_url'])){ ?>
                                            <img src='img/slider/default.jpg'>
                                        <?php } else { ?>
                                            <img src="img/slider/<?= ($latestEstate['picture_url']);?>" alt="<?= ($latestEstate['picture_url']);?>">
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="properties-content-footer pull-left">
                                    <h4><a href="index.php?route=estate&estateId=<?= ($latestEstate['id']);?>"><?= ($latestEstate['title']);?></a></h4>
                                    <p><?= ($latestEstate['type']);?>,
                                        <br> <?= ($latestEstate['city']);?></p>
                                    <div class="property-price">
                                        <p><?= ($latestEstate['price']);?> €</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                        <!-- Agent Widget Area -->
                        <div class="agent-widget  hidden-sm">
                            <div class="property-page-title">
                                <h2>L'équipe</h2>
                            </div>
                            <?php
                                foreach ($agents as $agent)
                                {
                            ?>
                            <div class="single-property-footer-post right-sidebar">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="pull-left">
                                            <a href="index.php?route=agent&agentId=<?= ($agent->getId());?>">
                                            <?php if (empty($agent->getAvatar())){ ?>
                                                <img src='img/agent/default.jpg'>
                                            <?php } else { ?>
                                                <img src="img/agent/<?= ($agent->getAvatar());?>" alt="<?= ($agent->getAvatar());?>">
                                            <?php } ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8">
                                        <div class="properties-content-footer pull-left">
                                            <h3><a href="index.php?route=agent&agentId=<?= ($agent->getId());?>"><?= ($agent->getLastname());?> <?= ($agent->getFirstname());?></a></h3>
                                            <p><?= ($agent->getFunction());?></p>
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
