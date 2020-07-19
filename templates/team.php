<?php $this->title = "L'équipe"; ?>
<!-- Agent  Page Main Content Area Start-->
        <div class="section agent-page-content-area area-pading agent-page-default">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-12 padding-right-zero">
                        <!-- Property Area Title -->
                        <div class="property-page-title">
                            <h2>Notre équipe</h2>
                        </div>
                        <!-- Start of Single Team Member -->
                        <?php
                            foreach ($agents as $agent)
                            {
                        ?>
                        <div class="column-single-property">
                            <div class="column-property-img-wrap">
                                <div class="column-property-img">
                                    <a href="index.php?route=agent&agentId=<?= htmlspecialchars($agent->getId());?>">
                                        <?php if (empty($agent->getAvatar())){ ?>
                                            <img src='img/agent/default.jpg'>
                                        <?php } else { ?>
                                            <img src="img/agent/<?= ($agent->getAvatar());?>" alt="<?= ($agent->getAvatar());?>">
                                        <?php } ?>
                                    </a>
                                </div>
                            </div>
                            <div class="column-property-content-wrap">
                                <div class="column-property-content">
                                    <h4><a href="index.php?route=agent&agentId=<?= htmlspecialchars($agent->getId());?>"><?= htmlspecialchars($agent->getFirstname());?> <?= htmlspecialchars($agent->getLastname());?></a> </h4>
                                    <p class="ag-position"><?= htmlspecialchars($agent->getFunction());?> </p>
                                    <p class="ag-details"><?= htmlspecialchars($agent->getDescription());?></p>
                                </div>
                                <div class="column-property-more">
                                    <a href="index.php?route=agent&agentId=<?= htmlspecialchars($agent->getId());?>">Details</a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <!-- End of Single Team Member -->
                    </div>
                    <div class="col-md-4 col-sm-12 padding-left-65">
                        <div class="column-widget">
                            
                            <div class="recent-property-widget">
                                <!-- Recent properties Widget Title -->
                                <div class="property-page-title">
                                    <h2>Biens Récents</h2>
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
                                        <p><?= ($latestEstate['category']);?> - <?= ($latestEstate['type']);?>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Property Page Main content Area End Hear-->
