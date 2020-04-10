<?php $this->title = "Les agents"; ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tous les agents</h3>

        <!--main content start-->
  
        <div class="row">
            <div class="col-md-12">
                <div class="form-panel">
                    <h4><i class="fa fa-angle-right"></i> Basic Table</h4>
                <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="hidden-phone"><i class="fa fa-user"></i> Fonction</th>
                                <th class="hidden-phone">Nom</th>
                                <th class="hidden-phone">Prénom</th>
                                <th class="hidden-phone"><i class="fa fa-lock"></i> Autorisation</th>
                                <th class="hidden-phone"><i class="fa fa-phone"></i> Téléphone</th>
                                <th class="hidden-phone"><i class="fa fa-enveloppe"></i> Email</th>
                                <th class="hidden-phone"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gérant</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Administrateur</td>
                                <td>06 XX XX XX XX</td>
                                <td>@hestia.fr</td>
                                <td>
                                    <a href="agent.php" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                    <a href="agent.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Responsable transaction</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Contributeur</td>
                                <td>06 XX XX XX XX</td>
                                <td>@hestia.fr</td>
                                <td>
                                <a href="agent.php" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                    <a href="agent.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="agent.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Agent immobilier</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Contributeur</td>
                                <td>06 XX XX XX XX</td>
                                <td>@hestia.fr</td>
                                <td>
                                    <a href="agent.php" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                    <a href="agent.php" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="agent.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

        <form class="form-horizontal style-form" method='POST' action="../public/index.php?route=all_agents" enctype="multipart/form-data">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-plus"></i> Ajouter un agent</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Fonction</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="function" placeholder="Fonction">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lastname" placeholder="Nom">
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Prénom</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="firstname" placeholder="Prénom">
                            </div>
                        </div>

                        
                        <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Autorisation</label>
                            <div class="col-sm-10">
                                <select name="autorisation" class="form-control">
                                    <option value="administrateur">Administrateur</option>
                                    <option value="contributeur">Contributeur</option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Téléphone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="phone" placeholder="Téléphone">
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description longue</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Longue description"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" name="submit" class="btn btn-theme05" value="Ajouté">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </form>

    </section>
</section>
