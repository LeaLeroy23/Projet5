<?php $this->title = "Toute les annonces"; ?>
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Toute les annonces</h3>
        <?= $this->session->show('addPictures'); ?>
        <?= $this->session->show('deletePicture'); ?>
        <?= $this->session->show('addEstate'); ?>
        <?= $this->session->show('editEstate'); ?>
        <?= $this->session->show('deleteEstate'); ?>
        <?= $this->session->show('exist'); ?>
        <?= $this->session->show('format'); ?>
        <?= $this->session->show('size'); ?>
        <?= $this->session->show('error'); ?>

        <!-- row -->
        <div class="row mt">
            <div class="col-md-12">
                <div class="content-panel">
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed table-advance cf">
                            <h4><i class="fa fa-angle-right"></i> Les annonces </h4>
                            <hr>
                            <thead class="cf">
                                <tr>
                                    <th> Catégorie</th>
                                    <th> Titre</th>
                                    <th class="hidden-phone"> Pièces</th>
                                    <th class="hidden-phone"><i class="fa fa-home"></i> Type</th>
                                    <th class="hidden-phone"><i class="fas fa-comment-alt"></i> Description</th>
                                    <th class="hidden-phone"><i class="fa fa-user"></i> Agent</th>
                                    <th> Prix</th>
                                    <th><i class=" fa fa-edit"></i> Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    foreach ($estates as $estate)
                                    {
                                ?>
                                <tr>
                                    <td data-title="Categorie"><?= $estate['category'];?></td>
                                    <td data-title="Titre">
                                        <a href="index.php?route=estate&estateId=<?= ($estate['id']);?>"><?= htmlspecialchars( $estate['title']);?></a>
                                    </td>
                                    <td data-title="Pièces" class="hidden-phone"><?= htmlspecialchars( $estate['rooms']);?></td>
                                    
                                    <td data-title="Type" class="hidden-phone"><?= $estate['type'];?></td>
                                    
                                    <td data-title="Extrait" class="hidden-phone"><?= htmlspecialchars($estate['excerpt']);?></td>
                                    <td data-title="Agent"><?= htmlspecialchars( $estate['firstname']);?> <?= htmlspecialchars( $estate['lastname']);?></td>
                                    <td data-title="Prix"><?= htmlspecialchars( $estate['price']);?>€</td>
                                    <td data-title="Status">
                                        <button class="btn btn-info btn-xs" title="Mise en ligne">
                                            <span class="label label-info label-mini"><?= $estate['status'] ? 'Publié' : 'Non Publié';?>
                                            </span>
                                        </button>
                                    </td>
                                    <td data-title="Actions">
                                        <!--<a href="../public/index.php?route=getPublishEstate&estateId=<?=  $estate['id']; ?>"><button class="btn btn-success btn-xs" title="Publier"><i class="fa fa-check"></i></button></a>-->
                                        <a href="../public/index.php?route=editEstate&estateId=<?=  $estate['id']; ?>"><button class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil"></i></button></a>
                                        <a href="../public/index.php?route=deleteEstate&estateId=<?=  $estate['id']; ?>"><button class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash-o "></i></button></a>
                                        <a href="../public/index.php?route=addPictures&estateId=<?=  $estate['id']; ?>"><button class="btn btn-primary btn-xs" title="Ajouter des images"><i class="fa fa-camera "></i></button></a>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                ?>
                            
                            </tbody>
                        </table>
                    </section>
                </div>
                <!-- /content-panel -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /row -->

    </section>
</section>
