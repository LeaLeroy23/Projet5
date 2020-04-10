<?php $this->title = "Ajouter un agent"; ?>

<section id="main-content">
    <section class="wrapper">
    <?= $this->session->show('add_agent'); ?>
        <h3><i class="fa fa-angle-right"></i> Ajouter un agent</h3>        
        <form class="form-horizontal style-form" method='POST' action="../public/index.php?route=all_agents" enctype="multipart/form-data">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-plus"></i> Ajouter un agent</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Fonction</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="function" placeholder="Fonction">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">Autorisation</label>
                            <div class="col-sm-4">
                                <select name="autorisation" class="form-control">
                                    <option value="Superadministrateur">Superadministrateur</option>
                                    <option value="administrateur">Administrateur</option>
                                    <option value="contributeur">Contributeur</option>
                                </select>
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
                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">Mot de passe</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="password" placeholder="password">
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Téléphone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" placeholder="Téléphone">
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