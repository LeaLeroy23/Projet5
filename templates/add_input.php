<?php $this->title = "Ajouter des caractéristiques"; ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tous les agents</h3>

        <!--main category start-->
        <div class="row">
            <div class="col-md-12">
                <div class="form-panel">
                    <h4><i class="fa fa-angle-right"></i> Basic Table</h4>
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
                                <a href="agent.php" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                    <a href="../public/index.php?route=update_profile" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="agent.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>

                    <!-- Start add category -->
                    <div class="form-group">
                            <form class="form-horizontal style-form" method='POST' action="../public/index.php?route=addCategory">
                                <label class="col-sm-2 col-sm-2 control-label">Ajouter une catégorie</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" placeholder="Ajouter une catégorie">
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Ajouter">
                                    </div>
                            </form>
                        </div>
                        <!-- End add category -->
                </div>
            </div>
            
        </div>
        <!--main category end-->

    </section>
</section>
