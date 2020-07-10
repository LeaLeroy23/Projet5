<?php $this->title = 'Modifier mon profil'; ?>
<section id="main-content">
    <section class="wrapper site-min-height">

        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">

                    <h4 class="mb">Modifier mon profil</h4>

                    <form class="form-horizontal style-form" method='post' action="../public/index.php?route=editProfile&agentId=<?= $this->session->get('id'); ?>">
                        <div class="form-group">
                            <label class="col-lg-2 control-label"> Avatar</label>
                            <div class="col-lg-8">
                                <input type="file" id="exampleInputFile" class="file-pos" name="avatar_img" value="<?= $this->session->get('avatar'); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Nom</label>
                            <div class="col-lg-8">
                                <input type="text" id="c-name" class="form-control" name="lastname" value="<?=htmlspecialchars($agent->getLastname());?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Prénom</label>
                            <div class="col-lg-8">
                                <input type="text" placeholder=" " id="lives-in" class="form-control" name="firstname" value="<?= $this->session->get('firstname'); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Téléphone</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="phone" placeholder="Téléphone" value="<?= $this->session->get('phone'); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-8">
                                <input type="text" placeholder=" " id="country" class="form-control" name="email" value="<?= $this->session->get('email'); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Description</label>
                            <div class="col-lg-8">
                                <textarea rows="10" cols="30" class="form-control" name="description" value="<?= $this->session->get('description'); ?>"><?= $this->session->get('description'); ?></textarea>
                            </div>
                        </div>
                                            
                        <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Mettre à jour">
                    </form>
                </div>

                <div class="form-panel">
                </div>             
                    
            </div>
        </div>

    </section>
</section>