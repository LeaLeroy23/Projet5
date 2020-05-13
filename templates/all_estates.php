<?php $this->title = "Toute les annonces"; ?>
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Toute les annonces</h3>

        <!-- row -->
        <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                    <table class="table table-striped table-advance table-hover">
                        <h4><i class="fa fa-angle-right"></i> Les annonces </h4>
                        <hr>
                        <thead>
                            <tr>
                                <th> Titre</th>
                                <th><i class="fa fa-bullhorn"></i> Catégorie</th>
                                <th class="hidden-phone"><i class="fa fa-square"></i> Pièces</th>
                                <th class="hidden-phone"><i class="fa fa-home"></i> Type</th>
                                <th class="hidden-phone"><i class="fas fa-comment-alt"></i> Description</th>
                                <th><i class="fa fa-bookmark"></i> Prix</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                foreach ($estates as $estate)
                                {
                            ?>
                            <tr>
                                <td>
                                    <a href="#"><?= htmlspecialchars($estate->getTitle());?></a>
                                </td>
                                <td></td>
                                <td class="hidden-phone"><?= htmlspecialchars($estate->getRooms());?></td>
                                <td class="hidden-phone">Appartement</td>
                                <td class="hidden-phone"><?= htmlspecialchars($estate->getExcerpt());?></td>
                                <td><?= htmlspecialchars($estate->getPrice());?>€</td>
                                <td><span class="label label-info label-mini"><?= htmlspecialchars($estate->getStatus());?></span></td>
                                <td>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
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
