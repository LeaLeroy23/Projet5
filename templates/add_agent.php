<?php $this->title = "Ajouter un agent"; ?>

<section id="main-content">
    <section class="wrapper">
    
    <?= $this->session->show('addAgent'); ?>
    <?= $this->session->show('login'); ?>

        <h3><i class="fa fa-angle-right"></i> Ajouter un agent</h3>        
        <form class="form-horizontal style-form" method='post' action="../public/index.php?route=addAgent">
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
                                    <option value="">Aucun</option>
                                    <option value="Superadministrateur">Superadministrateur</option>
                                    <option value="administrateur">Administrateur</option>
                                    <option value="contributeur">Contributeur</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Prénom</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="fname" placeholder="Prénom">
                                <?= isset($errors['fname']) ? $errors['fname'] : ''; ?>
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lname" placeholder="Nom">
                                <?= isset($errors['lname']) ? $errors['lname'] : ''; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                                <?= isset($errors['email']) ? $errors['email'] : ''; ?>
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">Mot de passe</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="password" placeholder="password">
                                <?= isset($errors['password']) ? $errors['password'] : ''; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Téléphone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="phone" placeholder="Téléphone">
                                <?= isset($errors['phone']) ? $errors['phone'] : ''; ?>
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Status</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="status" placeholder="Status">
                                <?= isset($errors['status']) ? $errors['status'] : ''; ?>
                            </div>
                        </div>

                        <!--<div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description longue</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Longue description"></textarea>
                            </div>
                        </div>-->

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Ajouté">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </section>
</section>