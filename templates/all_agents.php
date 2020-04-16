<?php $this->title = "Les agents"; ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tous les agents</h3>

        <!--main content start-->
  
        <div class="row">
            <div class="col-md-12">
                <div class="form-panel">
                    <h4><i class="fa fa-angle-right"></i> Basic Table</h4>
                <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="hidden-phone"><i class="fa fa-user"></i> Fonction</th>
                                <th class="hidden-phone"> Nom</th>
                                <th class="hidden-phone"> Prénom</th>
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
                                <td><?= htmlspecialchars($agent->getFname());?></td>
                                <td><?= htmlspecialchars($agent->getLname());?></td>
                                <td><?= htmlspecialchars($agent->getAutorisation());?></td>
                                <td><?= htmlspecialchars($agent->getPhone());?></td>
                                <td><?= htmlspecialchars($agent->getEmail());?></td>
                                <td>
                                    <a href="agent.php" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                    <a href="../public/index.php?route=update_profile" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                            <tr>
                                <td>Responsable transaction</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Contributeur</td>
                                <td>06 XX XX XX XX</td>
                                <td>@hestia.fr</td>
                                <td>
                                <a href="agent.php" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                    <a href="../public/index.php?route=update_profile" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="agent.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Agent immobilier</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Contributeur</td>
                                <td>06 XX XX XX XX</td>
                                <td>@hestia.fr</td>
                                <td>
                                    <a href="agent.php" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                                    <a href="../public/index.php?route=update_profile" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a href="agent.php" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

    </section>
</section>
