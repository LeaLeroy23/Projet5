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
                                    <a href="../public/index.php?route=agent&agentId=<?= htmlspecialchars($agent->getId());?>"><img src="../public/img/agent/<?= htmlspecialchars($agent->getAvatar());?>" alt="<?= htmlspecialchars($agent->getAvatar());?>"></a>
                                </div>
                            </div>
                            <div class="column-property-content-wrap">
                                <div class="column-property-content">
                                    <h4><a href="../public/index.php?route=agent&agentId=<?= htmlspecialchars($agent->getId());?>"><?= htmlspecialchars($agent->getFirstname());?> <?= htmlspecialchars($agent->getLastname());?></a> </h4>
                                    <p class="ag-position"><?= htmlspecialchars($agent->getFunction());?> </p>
                                    <p class="ag-details"><?= htmlspecialchars($agent->getDescription());?></p>
                                </div>
                                <div class="column-property-more">
                                    <a href="../public/index.php?route=agent&agentId=<?= htmlspecialchars($agent->getId());?>">Details</a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <!-- End of Single Team Member -->
                        <!-- Start of Single Team Member -->
                        <div class="column-single-property">
                            <div class="column-property-img-wrap">
                                <div class="column-property-img">
                                    <a href="#"><img src="../public/img/agent/6.jpg" alt=""></a>
                                </div>
                                <div class="properties-include opicity-bg">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column-property-content-wrap">
                                <div class="column-property-content">
                                    <h4><a href="single-agent.html">Michael Scott</a> </h4>
                                    <p class="ag-position">Land Agent </p>
                                    <p class="ag-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                </div>
                                <div class="column-property-more">
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Single Team Member -->
                        <!-- Start of Single Team Member -->
                        <div class="column-single-property">
                            <div class="column-property-img-wrap">
                                <div class="column-property-img">
                                    <a href="#"><img src="../public/img/agent/7.jpg" alt=""></a>
                                </div>
                                <div class="properties-include opicity-bg">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column-property-content-wrap">
                                <div class="column-property-content">
                                    <h4><a href="single-agent.html">Michael Scott</a> </h4>
                                    <p class="ag-position">Land Agent </p>
                                    <p class="ag-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                </div>
                                <div class="column-property-more">
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Single Team Member -->
                        <!-- Start of Single Team Member -->
                        <div class="column-single-property">
                            <div class="column-property-img-wrap">
                                <div class="column-property-img">
                                    <a href="#"><img src="../public/img/agent/8.jpg" alt=""></a>
                                </div>
                                <div class="properties-include opicity-bg">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column-property-content-wrap">
                                <div class="column-property-content">
                                    <h4><a href="single-agent.html">Michael Scott</a> </h4>
                                    <p class="ag-position">Land Agent </p>
                                    <p class="ag-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                </div>
                                <div class="column-property-more">
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Single Team Member -->
                        <!-- Start of Single Team Member -->
                        <div class="column-single-property">
                            <div class="column-property-img-wrap">
                                <div class="column-property-img">
                                    <a href="#"><img src="../public/img/agent/9.jpg" alt=""></a>
                                </div>
                                <div class="properties-include opicity-bg">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="column-property-content-wrap">
                                <div class="column-property-content">
                                    <h4><a href="single-agent.html">Michael Scott</a> </h4>
                                    <p class="ag-position">Land Agent </p>
                                    <p class="ag-details">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. </p>
                                </div>
                                <div class="column-property-more">
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Single Team Member -->
                        <div class="scroll-for-btn">
                            <a href="#">Voir plus</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 padding-left-65">
                        <div class="column-widget">
                            
                            <div class="recent-property-widget">
                                <!-- Recent properties Widget Title -->
                                <div class="property-page-title">
                                    <h2>Biens Récents</h2>
                                </div>
                                <div class="single-property-footer-post right-sidebar">
                                    <div class="properties-img pull-left">
                                        <a href="#"><img src="../public/img/widget/5.jpg" alt=""></a>
                                    </div>
                                    <div class="properties-content-footer pull-left">
                                        <h4><a href="#">Relax Home Villa</a></h4>
                                        <p>100 CB Villa Park Avenue,
                                            <br> New York, USA</p>
                                        <div class="property-price">
                                            <p>$1,256,000</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Agent Widget Area -->
                            <div class="agent-widget hidden-sm">
                                <div class="property-page-title">
                                    <h2>Notre équipe</h2>
                                </div>
                                <div class="single-property-footer-post right-sidebar">
                                    <div class="properties-img pull-left">
                                        <a href="#"><img src="../public/img/agent/5.png" alt=""></a>
                                    </div>
                                    <div class="properties-content-footer pull-left">
                                        <h3><a href="#">William Brooks</a></h3>
                                        <p>Land & Apartment</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Property Page Main content Area End Hear-->
