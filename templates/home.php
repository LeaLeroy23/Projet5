<?php $this->title = "Accueil"; ?>

        <!-- Slider area Start -->   
        <section class="slider-section ">

        <?php
        foreach ($sliderEstates as $sliderEstate)
        {
            ?>

                <div class="item">
                    <img src="../public/img/upload/<?= $sliderEstate['picture_url'];?>" alt="slider">
                    <div class="slide-content carousel-caption hidden-xs">
                        <div class="slide-content-top">
                            <h1><?= htmlspecialchars($sliderEstate['type']);?></h1>
                            <h2><?= htmlspecialchars($sliderEstate['title']);?></h2>
                            <p><?= htmlspecialchars($sliderEstate['excerpt']);?></p>
                        </div>
                        <div class="slide-property-detail">
                            <ul>
                                <li><?= ($sliderEstate['rooms']);?> Pièces</li>
                                <li><?= htmlspecialchars($sliderEstate['bedrooms']);?> Chambres</li>
                                <li><?= htmlspecialchars($sliderEstate['area']);?> m2</li>
                                <li><?= ($sliderEstate['price']);?> €</li>
                                <li class="slider-btn"><a href="../public/index.php?route=estate&estateId=<?= ($sliderEstate['id']);?>"><?= ($sliderEstate['category']);?></a></li> 
                            </ul>
                        </div>
                    </div>
                </div>

                <?php
                }
                ?> 
            
        </section>
        <!-- Slider Area End -->
        
        <!-- Start Welcome area -->
        <section class="welcome-area area-pading fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-heading-style-one text-center">
                            <h2>Bienvenue</h2>
                            <p>L'agence Hestia vous propose un large panel de biens Atypique qui sauront satisfaire tous vos besoins. Nos agents ont tous une spécialité en fonction de la localité et du type de propriété.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="single-promotion text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="promo-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="promo-content">
                                <h3><a href="#">Nos agents ont de l'expérience</a></h3>
                                <p>Chacun de nos collaborateurs est spécialisé dans un secteur de la région PACA. Nous trouverons pour vous le biens qui correspont le mieux à vos attentes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="single-promotion text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".5s">
                            <div class="promo-icon">
                                <i class="fa fa-street-view"></i>
                            </div>
                            <div class="promo-content">
                                <h3><a href="#">Des biens d'exception</a> </h3>
                                <p>Notre agencece spécialise dans les bien atypique et d'exception. Vous pourrez trouver chez nous des propriétés d'architecte ou des lofts d'artistes contemporain.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="single-promotion text-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".7s">
                            <div class="promo-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="promo-content">
                                <h3><a href="#">Nous vous accompagnons </a> </h3>
                                <p>Nous savons que la plupart des jeunes acquérant souhaite faire des travaux dans leur nouvelle propriété. C'est la raison pour laquelle nous nous occupons de vos travaux pour que vous puissiez déménager en paix</p>
                            </div>
                        </div>
                    </div> 
                    <!--End of Single Promo Area-->
                </div>
            </div> 
        </section>
        <!-- End of Welcome area-->
        <!--Start of Properties Area-->
        <section class="properties-area area-pading fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-title">
                            <h2>Les biens à vendre</h2>
                            <a href="properties_sale.php" class="view-more">voir tout</a>
                        </div>
                    </div>
                </div>
                <div class="row">

                <?php
               foreach ($estates as $estate)
               {
                ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-featured-properties">
                            <div class="properties-image">
                                <a href="index.php?route=estate&estateId=<?= ($estate['id']);?>"><img src="../public/img/upload/<?= ($estate['picture_url']);?>" alt="<?= ($estate['picture_url']);?>"></a>
                            </div>
                            <div class="sale-tag">
                                <p><?=($estate['category']);?></p>
                            </div>
                            <div class="properties-include">
                                <ul>
                                    <li><i class="fa fa-home"></i> <?= ($estate['area']);?> m2</li>
                                    <li><i class="fa fa-square"></i><?= ($estate['rooms']);?> Pièce(s)</li>
                                    <li><i class="fa fa-bed"></i> <?= ($estate['bedrooms']);?> Chambre(s)</li>
                                </ul>
                            </div>
                            <div class="properties-content">
                                <h3><a href="single-property.php"><?= ($estate['title']);?></a></h3>
                                <p><i class="fa fa-map-marker"></i> <?= ($estate['city']);?></p>
                                <p class="detail-text"><?= ($estate['excerpt']);?></p>
                                <div class="price-detail">
                                    <p class="price-range pull-left"><?= ($estate['price']);?> €</p>
                                    <a href="index.php?route=estate&estateId=<?= ($estate['id']);?>" class="price-detail pull-right">Detail <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> 

                <?php
                }
                ?>

                </div>
                <!-- Start of Recent Properties Title Area-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-title margintop100">
                            <h2>Les biens à la location</h2>
                            <a href="#" class="view-more">Voir tout</a>
                        </div>
                    </div>
                </div> 
                <!-- End of Recent Properties Title Area-->
                <!--Start of Recent Single Recent Properties  Area -->
                <div class="row">

                <?php
                foreach ($estates as $estate)
                {
                ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-featured-properties">
                            <div class="properties-image">
                                <a href="index.php?route=estate&estateId=<?= ($estate['id']);?>"><img src="../public/img/properties/4.jpg" alt=""></a>
                            </div>
                            <div class="rent-tag">
                                <p>A louer</p>
                            </div>
                            <div class="properties-include">
                                <ul>
                                    <li><i class="fa fa-home"></i><?= ($estate['area']); ?> m2</li>
                                    <li><i class="fa fa-square"></i><?= ($estate['rooms']); ?> Pièces</li>
                                    <li><i class="fa fa-bed"></i><?= ($estate['bedrooms']); ?> Chambres</li>
                                </ul>
                            </div>
                            <div class="properties-content">
                                <h3><a href="index.php?route=estate&estateId=<?= ($estate['id']);?>"><?= ($estate['title']);?></a></h3>
                                <p><i class="fa fa-map-marker"></i> <?= ($estate['city']);?></p>
                                <p class="detail-text"><?= ($estate['excerpt']);?></p>
                                <div class="price-detail">
                                    <p class="price-range pull-left"><?= ($estate['price']);?> €</p>
                                    <a href="index.php?route=estate&estateId=<?= ($estate['id']);?>" class="price-detail pull-right">Detail <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>

                </div> 
                <!-- End of Recent Single Recent Properties  Area -->
            </div>
        </section>
        <!-- End of Properties Area-->
        <!-- Dream Creation Area Start hear-->
        <section class="dream-area area-pading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dream-content text-center wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".5s">
                            <h1>Notre objectif est de réaliser vos rêves</h1>
                            <p>Confiez nous vos plus grands désirs et nous saurons les réalisés pour vous</p>
                            <a href="contact.php" class="join-team">Contactez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dream Creation Area End hear. --> 
        <!-- Agents Area Start hear.-->
        <section class="agents-area area-pading fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-heading-style-one text-center">
                            <h2>Notre Equipe</h2>
                            <p>Notre Equipe saura répondre à toute vos demandes même les plus hallucinantes !</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php
                        foreach ($agents as $agent)
                        {
                    ?>

                        <div class="col-md-3 col-sm-6">
                            <div class="single-agent wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                                <div class="agentimg-social">
                                    <img src="../public/img/agent/<?= ($agent->getAvatar());?>" alt="">
                                    
                                    <div class="overlay"></div>
                                </div>
                                <div class="agent-detail text-center">
                                    <h3><a href="index.php?route=agent&agentId=<?= ($agent->getId());?>"><?= ($agent->getFirstname());?> <?= ($agent->getLastname());?></a> </h3>
                                    <p><?= ($agent->getFunction());?></p>
                                </div>
                            </div>
                        </div> 

                    <?php
                        }
                    ?>
                     
                   
                </div>
            </div>
        </section>
        <!-- Agents Area End hear.-->
        <!--Testimonial Area Start-->
        <div class="testimonial-area area-pading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="testimonial-wrap wow fadeIn" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <div class="single-testimonial">
                                <p>Ludivine a su trouver le bien parfait pour moi et ma famille. Et ses partenaires ont fait un travail à la hauteur de nos attentes.</p>
                                <p class="client-name">- Sandra Martin</p>
                                <img src="../public/img/testi1.png" alt="">
                            </div>

                            <div class="single-testimonial">
                                <p>Grâce à Hestia j'ai trouvé un appartement totalement Atypique, qui ne ressemble à aucun autre.</p>
                                <p class="client-name">- Albert Dubervil</p>
                                <img src="../public/img/testi1.png" alt="">
                            </div>

                            <div class="single-testimonial">
                                <p>Première expérience dans l'immobiler grâce à Donovan j'ai trouver un bien qui correspond à tous mes critères.</p>
                                <p class="client-name">- Emilie Sanders</p>
                                <img src="../public/img/testi1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End-->
        <!--Partners Area Started Hear-->
        <section class="partner-area area-pading fix">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="area-heading-style-one text-center">
                            <h2>Nos partenaires</h2>
                            <p>Un agent immobilier ce doit d'avoir des partenaires de qualité qui pourront répondre à toute les demandes pour ses clients.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners-logo-area wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                            <ul class="partners-logo-carosel">
                                <li><a href="#"><img src="../public/img/partners/2.png" alt=""></a></li>
                                <li><a href="#"><img src="../public/img/partners/1.png" alt=""></a></li>
                                <li><a href="#"><img src="../public/img/partners/3.png" alt=""></a></li>
                                <li><a href="#"><img src="../public/img/partners/4.png" alt=""></a></li>
                                <li><a href="#"><img src="../public/img/partners/1.png" alt=""></a></li>
                                <li><a href="#"><img src="../public/img/partners/2.png" alt=""></a></li>
                                <li><a href="#"><img src="../public/img/partners/3.png" alt=""></a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- Partners Area End Hear-->
