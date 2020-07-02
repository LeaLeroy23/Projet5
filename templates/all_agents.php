<?php $this->title = "Les agents"; ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tous les agents</h3>
        <?= $this->session->show('addAgent'); ?>
        <?= $this->session->show('editAgent'); ?>
        <?= $this->session->show('deleteAgent'); ?>

        <!--main content start-->
  
        <div class="row">
            <div class="col-md-12">
                <section id="no-more-tables">
                    <div class="form-panel">
                            <h4><i class="fa fa-angle-right"></i> Liste des Agents </h4>
                        <hr>
                        <table class="table table-bordered table-striped table-condensed table-advance cf">
                            <thead>
                                <tr>
                                    <th class="hidden-phone">Avatar</th>
                                    <th class="hidden-phone"><i class="fa fa-user"></i> Fonction</th>
                                    <th class="hidden-phone"> Prénom</th>
                                    <th class="hidden-phone"> Nom</th>
                                    <th class="hidden-phone"><i class="fa fa-lock"></i> Autorisation</th>
                                    <th class="hidden-phone"><i class="fa fa-phone"></i> Téléphone</th>
                                    <th class="hidden-phone"> Email</th>
                                    <?php
                                        if ($this->session->get('status') === "99") {
                                    ?>
                                    <th class="hidden-phone"> Action</th>
                                    <?php
                                        }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($agents as $agent)
                                {
                            ?>
                                <tr>
                                    <td data-title="Avatar">
                                        <img class="img-circle" src="../public/img/agent/<?=$agent->getAvatar();?>" width="35px" height="35px">
                                    </td>
                                    <td data-title="Fonction"><?=htmlspecialchars($agent->getFunction());?></td>
                                    <td data-title="Prénom"><?= htmlspecialchars($agent->getFirstname());?></td>
                                    <td data-title="Nom"><?= htmlspecialchars($agent->getLastname());?></td>
                                    <td data-title="Status"><?= htmlspecialchars($agent->getStatus());?></td>
                                    <td data-title="Téléphone"><?= htmlspecialchars($agent->getPhone());?></td>
                                    <td data-title="Email"><?= htmlspecialchars($agent->getEmail());?></td>
                                    <?php
                                        if ($this->session->get('status') === "99") {
                                    ?>
                                    <td data-title="Action">
                                    <a href="../public/index.php?route=editAgent&agentId=<?=  $agent->getId(); ?>"><button class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil"></i></button></a>
                                    <a href="../public/index.php?route=deleteAgent&agentId=<?= $agent->getId(); ?>"><button class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash-o "></i></button></a>
                                    </td>
                                    <?php
                                        }
                                    ?>
                                    
                                </tr>
                            <?php
                                }
                            ?>
                            
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            
        </div>

    </section>
</section>
