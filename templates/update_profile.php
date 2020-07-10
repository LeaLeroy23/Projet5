<?php $this->title = "Les agents"; ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Edition</h3>

        <form class="form-horizontal style-form" method='post' action="../public/index.php?route=updateProfile">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-plus"></i> Modifier mon profil</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Fonction</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="function" placeholder="Fonction">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lname" placeholder="Nom">
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Prénom</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="fname" placeholder="Prénom">
                            </div>
                        </div>

                        
                        <!--<div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Autorisation</label>
                            <div class="col-sm-10">
                                <select name="autorisation" class="form-control">
                                    <option value="administrateur">Administrateur</option>
                                    <option value="contributeur">Contributeur</option>
                                    
                                </select>
                            </div>
                        </div>-->

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
                            <label class="col-sm-2 col-sm-2 control-label">Avatar</label>
                            <div class="col-sm-10">
                            <input type="file" name="avatar" class="default" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" name="submit" class="btn btn-theme05" value="Mettre à jour">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </form>

    </section>
</section>
