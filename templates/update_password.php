<?php $this->title = "Modification du mot de passse"; ?>

<section id="main-content">
    <section class="wrapper">
    
        <h3><i class="fa fa-angle-right"></i> Modification</h3>        
        <form class="form-horizontal style-form" method='post' action="../public/index.php?route=updatePassword">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-plus"></i> Modification du mot de passse de <?= $this->session->get('lastname'); ?> <?= $this->session->get('lname'); ?></h4>
                        
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                            <div class="col-sm-4">
                                <p><?= $this->session->get('lastname'); ?></p>
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Prénom</label>
                            <div class="col-sm-4">
                            <p><?= $this->session->get('firstname'); ?></p>
                            <p><?php print_r($this->session); ?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <p><?= $this->session->get('email'); ?></p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Mot de passe</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Mettre à jour">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </form>
    </section>
</section>