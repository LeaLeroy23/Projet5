<?php $this->title = "Les agents"; ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tous les agents</h3>
        <?= $this->session->show('addAgent'); ?>

        <!--main content start-->
  
        <div class="row">
            <div class="col-md-12">
                
                <div class="form-panel">
                    <h4><i class="fa fa-angle-right"></i> Liste des Agents </h4>
                <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="hidden-phone"><i class="fa fa-user"></i> Fonction</th>
                                <th class="hidden-phone"> Prénom</th>
                                <th class="hidden-phone"> Nom</th>
                                <th class="hidden-phone"><i class="fa fa-lock"></i> Autorisation</th>
                                <th class="hidden-phone"><i class="fa fa-phone"></i> Téléphone</th>
                                <th class="hidden-phone"><i class="fa fa-enveloppe"></i> Email</th>
                                <th class="hidden-phone"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($agents as $agent)
                            {
                        ?>
                            <tr>
                                <td><?= htmlspecialchars($agent->getFunction());?></td>
                                <td><?= htmlspecialchars($agent->getFirstname());?></td>
                                <td><?= htmlspecialchars($agent->getLastname());?></td>
                                <td><?= htmlspecialchars($agent->getStatus());?></td>
                                <td><?= htmlspecialchars($agent->getPhone());?></td>
                                <td><?= htmlspecialchars($agent->getEmail());?></td>
                                <td>
                                    <a href="../public/index.php?route=updateProfile" class="btn btn-warning btn-xs" title="Modifier"><i class="fa fa-pencil"></i></a>
                                    <a href="../public/index.php?route=deleteProfile" class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash-o"></i></a>
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

    </section>
</section>
