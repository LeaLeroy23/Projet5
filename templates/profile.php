<?php $this->title = 'Mon profil'; ?>
<section id="main-content">
    <section class="wrapper site-min-height">

        <div class="row mt">
            <div class="col-lg-12">
                <div class="row content-panel">

                    <div class="col-sm-1"></div>

                    <div class="col-md-4 profile-text">
                        <h3><?= $this->session->get('lname'); ?> <?= $this->session->get('fname'); ?></h3>
                        <h6><?= $this->session->get('function'); ?></h6>
                        <p><?= $this->session->get('description'); ?></p>
                        <br>
                    </div>

                    <div class="col-md-7 centered">
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
                            <li class="active">
                                <a data-toggle="tab" href="#infos">Mes informations</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#estates">Mes annonces</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#edit">Modifier mon profil</a>
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
                                                    <h3>12</h3>
                                                    <h6>Toutes mes annonces</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h1><i class="fa fa-home"></i></h1>
                                                    <h3>4</h3>
                                                    <h6>Mes annonces à louer</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h1><i class="fa fa-home"></i></h1>
                                                    <h3>8</h3>
                                                    <h6>Mes annnonces à vendre</h6>
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

                                                <tr>
                                                    <td>2P Saint Roch</td>
                                                    <td>à louer</td>
                                                    <td>Appartement</td>
                                                    <td class="numeric">2</td>
                                                    <td class="numeric">1</td>
                                                    <td>Grand 2 pièces refait à neuf</td>
                                                    <td class="numeric">150</td>
                                                    <td class="numeric">850</td>
                                                    <td class="numeric">850</td>
                                                    <td>
                                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i> Publié</button>
                                                    </td>
                                                </tr>

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--fin annonce-->

                            <!--début modif profil-->
                            <div id="edit" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-10 detailed">
                                        <h4 class="mb">Information Personnel</h4>
                                        <form role="form" class="form-horizontal">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label"> Avatar</label>
                                                <div class="col-lg-8">
                                                    <input type="file" id="exampleInputFile" class="file-pos" name="avatar_img" value="<?= $this->session->get('email'); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nom</label>
                                                <div class="col-lg-8">
                                                    <input type="text" placeholder="" id="c-name" class="form-control" name="lastname" value="<?= $this->session->get('lastname'); ?>">
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
                                                    <textarea rows="10" cols="30" class="form-control" id="" name="description">value="<?= $this->session->get('description'); ?>"</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <input class="btn btn-theme" type="submit" value="Sauvegarder">
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-1"></div>

                                    <!--début modif mdp-->
                                    <div class="col-lg-10 col-lg-offset-2 detailed mt">
                                        <h4 class="mb">Modifier mon mot de passe</h4>
                                        <form class="form-horizontal style-form" method='post' action="../public/index.php?route=updateProfile">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Nouveau mot de passe</label>
                                                <div class="col-lg-8">
                                                <input type="text" placeholder=" " id="addr1" class="form-control" name="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Retaper votre mot de passe</label>
                                                <div class="col-lg-8">
                                                <input type="text" placeholder=" " id="addr2" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                    <input class="btn btn-theme" type="submit" value="Réinitialiser">
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