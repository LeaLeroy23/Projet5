<?php $this->title = 'Mon profil'; ?>
<section id="main-content">
    <section class="wrapper site-min-height">
    <?= $this->session->show('update_profile'); ?>

        <div class="row mt">
            <div class="col-lg-12">
                <div class="row content-panel">

                    <div class="col-sm-4 profile-text mt mb centered">
                        <div class="right-divider hidden-sm hidden-xs">
                        <h4>Ma Description</h4>
                        <h6><?= $this->session->get('description'); ?></h6>
                        </div>
                    </div>

                    <div class="col-md-4 profile-text">
                        <h3><?= $this->session->get('lastname'); ?> <?= $this->session->get('firstname'); ?></h3>
                        <h6><?= $this->session->get('function'); ?></h6>
                        <p><?= $this->session->get('phone'); ?></p>
                        <p><?= $this->session->get('email'); ?></p>
                        <p><a href=""><button class="btn btn-theme">Voir ma page</button></a></p>
                    </div>

                    <div class="col-md-4 centered">
                        <div class="profile-pic">
                            <p><img src="../public/img/agent/ui-sam.jpg" class="img-circle"></p>
                            
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-lg-12 mt">
                <div class="row content-panel">
                    <!--debut panel heading-->
                    <div class="panel-heading">
                        <ul class="nav nav-tabs nav-justified">
                            <li id="li-profile" class="active">
                                <a data-toggle="tab" href="#infos">Mes informations</a>
                            </li>
                            <li id="li-estate">
                                <a data-toggle="tab" href="#estates">Mes annonces</a>
                            </li>
                            <li id="li-edit-profile">
                                <a data-toggle="tab" href="#updateProfile">Modifier mon profil</a>
                            </li>
                        </ul>
                    </div>
                    <!--fin panel heading-->

                    <!--debut panel body-->
                    <div class="panel-body">
                        <div class="tab-content">

                            <!--debut information-->
                            <div id="infos" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="detailed mt">
                                            <h4>Ma Description</h4>
                                            <div class="recent-activity">
                                                <table class="table table-bordered table-striped table-condensed">
                                                    <tbody>
                                                        <tr>
                                                            <td>Nom</td>
                                                            <td><?= $this->session->get('lastname'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prénom</td>
                                                            <td><?= $this->session->get('firstname'); ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Fonction</td>
                                                            <td><?= $this->session->get('function'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td><?= $this->session->get('email'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Téléphone</td>
                                                            <td><?= $this->session->get('phone'); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Description</td>
                                                            <td><?= $this->session->get('description'); ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button type="button" class="btn btn-theme btn-lg btn-block" id="btn-profile">Modifier mon profil</button>
                                            </div>
                                        </div>

                                      

                                    </div>

                                    <!--debut stat-->
                                    <div class="col-md-6">
                                        <div class="detailed mt">
                                        <h4>Mes statistiques</h4>
                                            <div class="row centered mt mb">
                                                <div class="col-sm-4">
                                                    <h1><i class="fa fa-tags"></i></h1>
                                                    <h3><?= $count; ?></h3>
                                                    <h6>Total d'annonce</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h1><i class="fa fa-home"></i></h1>
                                                    <h3><?= $estateByAgentCount; ?></h3>
                                                    <h6>Toutes mes annonces</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h1><i class="fa fa-pencil"></i></h1>
                                                    <h3><?= $countEstateByAgentDraft ?></h3>
                                                    <h6>Mes annonces en cours</h6>
                                                </div>
                                                
                                            </div>

                                        </div>
                                         <!--fin stat-->

                                        

                                    </div>

                                </div>
                            </div>
                            <!--fin information-->

                            <!--début annonce-->
                            <div id="estates" class="tab-pane">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>Titre</th>
                                                    <th>Catégorie</th>
                                                    <th>Type</th>
                                                    <th class="numeric">Nombre de pièces</th>
                                                    <th class="numeric">Nombre de chambre</th>
                                                    <th>Description</th>
                                                    <th class="numeric">Charge</th>
                                                    <th class="numeric">Honoraire</th>
                                                    <th class="numeric">Price</th>
                                                    <th>Statut</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php 
                                            foreach($estatesByAgent as $estateByAgent){
                                            ?>
                                                <tr>
                                                    <td><?=$estateByAgent['title'];?></td>
                                                    <td><?=$estateByAgent['category'];?></td>
                                                    <td><?=$estateByAgent['type'];?></td>
                                                    <td class="numeric"><?=$estateByAgent['rooms'];?></td>
                                                    <td class="numeric"><?=$estateByAgent['bedrooms'];?></td>
                                                    <td><?=$estateByAgent['excerpt'];?></td>
                                                    <td class="numeric"><?=$estateByAgent['charge_price'];?> €</td>
                                                    <td class="numeric"><?=$estateByAgent['fees'];?> €</td>
                                                    <td class="numeric"><?=$estateByAgent['price'];?> €</td>
                                                    <td>
                                                    <a href="../public/index.php?route=addPictures&estateId=<?=  $estateByAgent['id']; ?>"><button class="btn btn-primary btn-xs" title="Ajouter des images"><i class="fa fa-camera "></i></button></a>
                                                    <a href="../public/index.php?route=editEstate&estateId=<?=  $estateByAgent['id']; ?>"><button class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil"></i></button></a>
                                                    <a href="../public/index.php?route=deleteEstate&estateId=<?=  $estateByAgent['id']; ?>"><button class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash-o "></i></button></a>
                                                    <button class="btn btn-success btn-xs"><?=$estateByAgent['status'] ? 'Publié' : 'Non Publié';?></button>
                                                    </td>
                                                </tr>
                                            <?php 
                                            } 
                                            ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--fin annonce-->

                            <!--début modif profil-->
                            <div class="tab-pane" id="updateProfile">
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10 detailed">
                                        <h4 class="mb">Information Personnel</h4>
                                        <form class="form-horizontal style-form" method='post' action="../public/index.php?route=editProfile&agentId=<?=$agent->getId();?>">
                                            
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Prénom</label>
                                                <div class="col-lg-8">
                                                <input type="text" class="form-control" name="firstname" value="<?=htmlspecialchars($agent->getFirstname());?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nom</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="lastname" value="<?=htmlspecialchars($agent->getLastname());?>">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Téléphone</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="phone" value="<?=htmlspecialchars($agent->getPhone());?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Email</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" name="email" value="<?=htmlspecialchars($agent->getEmail());?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Description</label>
                                                <div class="col-lg-8">
                                                    <textarea rows="10" cols="30" class="form-control" name="description"><?=htmlspecialchars($agent->getDescription());?></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-8">
                                                <label class="col-lg-2 control-label">Avatar</label> 
                                                    <input type="file" id="exampleInputFile" class="file-pos" name="avatar" value="<?=htmlspecialchars($agent->getAvatar());?>">
                                                </div>
                                            </div>

                                            <div class="form-group hidden-part">
                                                <div class="col-lg-8">
                                                    <input type="hidden" class="form-control" name="token" value="<?=$agent->getToken();?>">
                                                    <input type="hidden" class="form-control" name="password" value="<?=htmlspecialchars($agent->getPassword());?>">
                                                    <input type="hidden" class="form-control" name="status" value="<?=$agent->getStatus();?>">
                                                    <input type="hidden" class="form-control" name="created_at" value="<?=$agent->getCreated_at();?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <br />
                                                <div class="col-lg-12">
                                                    <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Mettre à jour">
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="col-md-1"></div>

                                    <!--début modif mdp-->
                                    <div class="col-lg-10 col-lg-offset-2 detailed mt">
                                        <h4 class="mb">Modifier mon mot de passe</h4>

                                        <form class="form-horizontal style-form" method='post' action="../public/index.php?route=updatePassword&agentId=<?=$agent->getId();?>">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nouveau mot de passe</label>
                                                <div class="col-lg-8">
                                                <input type="password" id="addr1" class="form-control" name="newPassword">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Retaper votre mot de passe</label>
                                                <div class="col-lg-8">
                                                    <input type="password" id="addr2" class="form-control" name="confirmPassword">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <input class="btn btn-theme" type="submit" name="submit" value="Réinitialiser">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--fin modif mdp-->

                                <!-- /col-lg-8 -->
                                </div>
                            </div>
                            <!--fin modif profil-->

                        </div>
                    </div>
                    <!--fin panel body-->

                </div>
            </div>

        </div>

    </section>
</section>

<script>
function validatePassword() {
    var newPassword,confirmPassword,output = true;
    newPassword = document.frmChange.newPassword;
    confirmPassword = document.frmChange.confirmPassword;

    if(newPassword.value != confirmPassword.value) {
        newPassword.value="";
        confirmPassword.value="";
        newPassword.focus();
        document.getElementById("confirmPassword").innerHTML = "not same";
        output = false;
    } 	
    return output;
    
}
</script>