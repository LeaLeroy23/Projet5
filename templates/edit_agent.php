<?php $this->title = "Modifier un agent"; ?>

<section id="main-content">
    <section class="wrapper">
    
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
                            <label class="col-sm-2 col-sm-2 control-label">Mot de passe</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="password" value="<?= htmlspecialchars($agent->getPassword());?>">
                                <?= isset($errors['password']) ? $errors['password'] : ''; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Téléphone</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="phone" value="<?= htmlspecialchars($agent->getPhone());?>">
                                <?= isset($errors['phone']) ? $errors['phone'] : ''; ?>
                            </div>

                            <label class="col-sm-2 col-sm-2 control-label">Avatar</label>
                            <div class="form-group last">
                                <div class="col-md-4"> 
                                    <input type="file" name="avatar" value="<?= $agent->getAvatar();?>" class="form-control">
                                    <img src="../public/img/agent/<?=$agent->getAvatar();?>" height="150px">
                                </div>
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
    </section>
</section>