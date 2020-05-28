<?php $this->title = "Toute les annonces"; ?>
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Toute les annonces</h3>
        <?= $this->session->show('addPictures'); ?>
        <?= $this->session->show('edit_estate'); ?>
        <?= $this->session->show('<div class="alert alert-success" role="alert">' . 'delete_estate' . '</div>'); ?>

        <!-- row -->
        <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> Les annonces </h4>
                        <hr>
                        <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> Catégorie</th>
                                <th> Titre</th>
                                <th class="hidden-phone"><i class="fa fa-square"></i> Pièces</th>
                                <th class="hidden-phone"><i class="fa fa-home"></i> Type</th>
                                <th class="hidden-phone"><i class="fas fa-comment-alt"></i> Description</th>
                                <th><i class="fa fa-bookmark"></i> Prix</th>
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
                                <td><?= $estate['category'];?></td>
                                <td>
                                    <a href="#"><?= htmlspecialchars( $estate['title']);?></a>
                                </td>
                                <td class="hidden-phone"><?= htmlspecialchars( $estate['rooms']);?></td>
                                
                                <td class="hidden-phone"><?= $estate['type'];?></td>
                                
                                <td class="hidden-phone"><?= htmlspecialchars($estate['excerpt']);?></td>
                                <td><?= htmlspecialchars( $estate['price']);?>€</td>
                                <td><span class="label label-info label-mini"><?= $estate['status'] ? 'Publié' : 'Non Publié';?></span></td>
                                <td>
                                    <button class="btn btn-success btn-xs" title="Publier"><i class="fa fa-check"></i></button>
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
                </div>
                <!-- /content-panel -->
            </div>
            <!-- /col-md-12 -->
        </div>
        <!-- /row -->

    </section>
</section>
