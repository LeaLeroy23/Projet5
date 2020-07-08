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
                            <h2>Les derniers biens ajoutés</h2>
                            <a href="../public/index.php?route=allProperties" class="view-more">voir tout</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                <?php
               foreach ($latestEstates as $latestEstate)
               {
                ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-featured-properties">
                            <div class="properties-image">
                                <a href="index.php?route=estate&estateId=<?= ($latestEstate['id']);?>"><img src="../public/img/upload/<?= ($latestEstate['picture_url']);?>" alt="<?= ($latestEstate['picture_url']);?>"></a>
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
  
        <!--Start of Properties Area-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="properties-title margintop100">
                            <h2>Les biens à vendre</h2>
                            <a href="../public/index.php?route=allPropertiesForSale" class="view-more">voir tout</a>
                        </div>
                    </div>
                </div>
                <div class="row">

                <?php
               foreach ($estatesForSale as $estateForSale)
               {
                ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-featured-properties">
                            <div class="properties-image">
                                <a href="index.php?route=estate&estateId=<?= ($estateForSale['id']);?>"><img src="../public/img/upload/<?= ($estateForSale['picture_url']);?>" alt="<?= ($estateForSale['picture_url']);?>"></a>
                            </div>
                            <div class="sale-tag">
                                <p><?=($estateForSale['category']);?></p>
                            </div>
                            <div class="properties-include">
                                <ul>
                                    <li><i class="fa fa-home"></i> <?= ($estateForSale['area']);?> m2</li>
                                    <li><i class="fa fa-square"></i><?= ($estateForSale['rooms']);?> Pièce(s)</li>
                                    <li><i class="fa fa-bed"></i> <?= ($estateForSale['bedrooms']);?> Chambre(s)</li>
                                </ul>
                            </div>
                            <div class="properties-content">
                                <h3><a href="single-property.php"><?= ($estateForSale['title']);?></a></h3>
                                <p><i class="fa fa-map-marker"></i> <?= ($estateForSale['city']);?></p>
                                <p class="detail-text"><?= ($estateForSale['excerpt']);?></p>
                                <div class="price-detail">
                                    <p class="price-range pull-left"><?= ($estateForSale['price']);?> €</p>
                                    <a href="index.php?route=estate&estateId=<?= ($estateForSale['id']);?>" class="price-detail pull-right">Detail <i class="fa fa-angle-right"></i></a>
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
                            <a href="p" class="view-more">Voir tout</a>
                        </div>
                    </div>
                </div> 
                <!-- End of Recent Properties Title Area-->
                <!--Start of Recent Single Recent Properties  Area -->
                <div class="row">

                <?php
                foreach ($estatesForRent as $estateForRent)
                {
                ?>

                    <div class="col-md-4 col-sm-6">
                        <div class="single-featured-properties">
                            <div class="properties-image">
                                <a href="index.php?route=estate&estateId=<?= ($estateForRent['id']);?>"><img src="../public/img/upload/<?= ($estateForRent['picture_url']);?>" alt="<?= ($estateForRent['id']);?>"></a>
                            </div>
                            <div class="rent-tag">
                                <p>A louer</p>
                            </div>
                            <div class="properties-include">
                                <ul>
                                    <li><i class="fa fa-home"></i><?= ($estateForRent['area']); ?> m2</li>
                                    <li><i class="fa fa-square"></i><?= ($estateForRent['rooms']); ?> Pièces</li>
                                    <li><i class="fa fa-bed"></i><?= ($estateForRent['bedrooms']); ?> Chambres</li>
                                </ul>
                            </div>
                            <div class="properties-content">
                                <h3><a href="index.php?route=estate&estateId=<?= ($estateForRent['id']);?>"><?= ($estateForRent['title']);?></a></h3>
                                <p><i class="fa fa-map-marker"></i> <?= ($estateForRent['city']);?></p>
                                <p class="detail-text"><?= ($estateForRent['excerpt']);?></p>
                                <div class="price-detail">
                                    <p class="price-range pull-left"><?= ($estateForRent['price']);?> €</p>
                                    <a href="index.php?route=estate&estateId=<?= ($estateForRent['id']);?>" class="price-detail pull-right">Detail <i class="fa fa-angle-right"></i></a>
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
                                <p>Les agents ont su trouver le bien parfait pour moi et ma famille. Et ses partenaires ont fait un travail à la hauteur de nos attentes.</p>
                                <p class="client-name">- Sandra Martin</p>
                                <img class="img-size" src="../public/img/testimonial/testi1.jpg" alt="testimonial-1">
                            </div>

                            <div class="single-testimonial">
                                <p>Grâce à Hestia j'ai trouvé un appartement totalement Atypique, qui ne ressemble à aucun autre.</p>
                                <p class="client-name">- Albert Dubervil</p>
                                <img class="img-size" src="../public/img/testimonial/testi2.jpg" alt="testimonial-2">
                            </div>

                            <div class="single-testimonial">
                                <p>Première expérience dans l'immobiler grâce à Jean j'ai trouver un bien qui correspond à tous mes critères.</p>
                                <p class="client-name">- Emilie Sanders</p>
                                <img class="img-size" src="../public/img/testimonial/testi3.jpg" alt="testimonial-3">
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
                                <li><a href="http://stratos-consulting.fr/"><img src="../public/img/partners/stratos-consulting.png" alt="stratos-consulting"></a></li>
                                <li><a href="https://www.vinci-construction.fr/"><img src="../public/img/partners/Vinci-construction.png" alt="Vinci-construction"></a></li>
                                <li><a href="https://www.edf.fr/"><img src="../public/img/partners/edf.png" alt="edf"></a></li>
                                <li><a href="https://www.sa.areva.com/"><img src="../public/img/partners/Areva.png" alt="areva"></a></li>
                                <li><a href="https://www.capgemini.com/fr-fr/"><img src="../public/img/partners/Capgemini.png" alt="Capgemini"></a></li>
                                <li><a href="https://www.allianz.fr/"><img src="../public/img/partners/allianz.png" alt="Allianz"></a></li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- Partners Area End Hear-->
