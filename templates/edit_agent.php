<?php $this->title = "Modifier un agent"; ?>

<section id="main-content">
    <section class="wrapper">
    <?= $this->session->show('wrongPassword'); ?>
    <?= $this->session->show('editAgent'); ?>

        <h3><i class="fa fa-angle-right"></i> Modifier un agent</h3>        
        <form class="form-horizontal style-form" method='post' action="../public/index.php?route=editAgent&agentId=<?=htmlspecialchars($agent->getId());?>" enctype="multipart/form-data">
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-plus"></i> Modification de l'agent <?= htmlspecialchars($agent->getFirstname());?> <?= htmlspecialchars($agent->getLastname());?></h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Fonction</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="function" value="<?= htmlspecialchars($agent->getFunction());?>">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label">Autorisation</label>
                            <div class="col-sm-4">
                                <select name="status" class="form-control">
                                    <option value="<?= ($agent->getStatus());?>"<?= $agent->getStatus() ? 'selected' : '' ?>><?= ($agent->getStatus()); ?></option>
                                    <option value="0">Aucun</option>
                                    <option value="99">Superadministrateur</option>
                                    <option value="80">Administrateur</option>
                                    <option value="50">Contributeur</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Prénom</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="firstname" value="<?= htmlspecialchars($agent->getFirstname());?>">
                                <?= isset($errors['firstname']) ? $errors['firstname'] : ''; ?>
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="lastname" value="<?= htmlspecialchars($agent->getLastname());?>">
                                <?= isset($errors['lastname']) ? $errors['lastname'] : ''; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="email" value="<?= htmlspecialchars($agent->getEmail());?>">
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Téléphone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="phone" value="<?= htmlspecialchars($agent->getPhone());?>">
                                <?= isset($errors['phone']) ? $errors['phone'] : ''; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Avatar</label>
                            <div class="col-md-4"> 
                                <input type="file" name="avatar" value="<?= $agent->getAvatar();?>"class="form-control">
                            </div>
                            <label class="col-sm-2 col-sm-2 control-label"></label>
                            <div class="col-md-4"> 
                                <img src="img/agent/<?=$agent->getAvatar();?>" height="150px">
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description longue</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" value="<?= htmlspecialchars($agent->getDescription());?>"><?= htmlspecialchars($agent->getDescription());?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Modifié">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </form>


        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Modification du mot de passe</h4>

                    <form class="form-horizontal style-form" method='post' action="../public/index.php?route=updatePassword&agentId=<?=$agent->getId();?>">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Nouveau mot de passe</label>
                                    <div class="col-lg-8">
                                        <input type="password" id="addr1" class="form-control" name="newPassword">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Retaper votre mot de passe</label>
                                    <div class="col-lg-8">
                                        <input type="password" id="addr2" class="form-control" name="confirmPassword">
                                    </div>
                                </div>
                                    <div class="col-lg-offset-3 col-lg-10">
                                        <input class="btn btn-theme" type="submit" name="submit" value="Réinitialiser">
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>   
        </div>

    </section>
</section>