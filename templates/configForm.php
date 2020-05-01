<?php $this->title = "Ajouter des caractéristiques"; ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Configuration</h3>

        <!--main category start-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-panel">
                    <h4><i class="fa fa-angle-right"></i> Les catégories d'habitation</h4>
                <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="hidden-phone"><i class="fa fa-user"></i> Fonction</th>
                                <th class="hidden-phone"> Prénom</th>
                                <th class="hidden-phone"> Nom</th>
                                <th class="hidden-phone"><i class="fa fa-lock"></i> Autorisation</th>
                                <th class="hidden-phone"><i class="fa fa-phone"></i> Téléphone</th>
                                <th class="hidden-phone"><i class="fa fa-enveloppe"></i> Email</th>
                                <th class="hidden-phone"></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>Responsable transaction</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Contributeur</td>
                                <td>06 XX XX XX XX</td>
                                <td>@hestia.fr</td>
                                <td>
                                    <a href="agent.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div> 

            <div class="col-md-6">
                <div class="form-panel">
                    <h4><i class="fa fa-angle-right"></i> Les Types d'habitation</h4>
                <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="hidden-phone"><i class="fa fa-user"></i> Fonction</th>
                                <th class="hidden-phone"> Prénom</th>
                                <th class="hidden-phone"> Nom</th>
                                <th class="hidden-phone"><i class="fa fa-lock"></i> Autorisation</th>
                                <th class="hidden-phone"><i class="fa fa-phone"></i> Téléphone</th>
                                <th class="hidden-phone"><i class="fa fa-enveloppe"></i> Email</th>
                                <th class="hidden-phone"></th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            <tr>
                                <td>Responsable transaction</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Contributeur</td>
                                <td>06 XX XX XX XX</td>
                                <td>@hestia.fr</td>
                                <td>
                                    <a href="agent.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div> 


        </div>

                    <!-- Start add category -->
        <div class="row">

            <div class="col-md-6">
                <div class="form-panel">
                <h4><i class="fa fa-angle-right"></i> Ajout d'une catégorie</h4>
                    <div class="form-group">
                        <form class="form-horizontal style-form" method='POST' action="../public/index.php?route=addCategory">
                            <label class="col-sm-3 col-sm-3 control-label">Ajouter une catégorie</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="Ajouter une catégorie">
                                </div>
                                <div class="col-sm-3">
                                    <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Ajouter">
                                </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-panel">
                <h4><i class="fa fa-angle-right"></i> Ajout d'une catégorie</h4>
                    <div class="form-group">
                        <form class="form-horizontal style-form" method='POST' action="../public/index.php?route=addCategory">
                            <label class="col-sm-3 col-sm-3 control-label">Ajouter une catégorie</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="name" placeholder="Ajouter une catégorie">
                                </div>
                                <div class="col-sm-3">
                                    <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Ajouter">
                                </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- End add category -->
        <!--main category end-->

    </section>
</section>
