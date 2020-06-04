<?php $this->title = "Ajouter des caractéristiques"; ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Configuration</h3>
        <?= $this->session->show('addCategory'); ?>
        <?= $this->session->show('addType'); ?>
        <?= $this->session->show('addFrequency'); ?>
        <?= $this->session->show('addEnergy'); ?>
        <?= $this->session->show('deleteCategory'); ?>
        <?= $this->session->show('deleteType'); ?>
        <?= $this->session->show('deleteFrequency'); ?>
        <?= $this->session->show('deleteEnergy'); ?>

        <!--main category start-->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Les catégories accessible</h4>
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Gestion</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            foreach ($categories as $category)
                            {
                        ?>
                            <tr>
                                <td class="td-id"><?= htmlspecialchars($category->getId());?></td>
                                <td><?= htmlspecialchars($category->getName());?></td>
                                <td class="td-btn-right">
                                    <a href="../public/index.php?route=deleteCategory&categoryId=<?= $category->getId(); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  Supprimer</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="col-sm-6">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter une catégorie</h4>
                <div class="form-group config-form" id="adding-category">
                <?= isset($errors['name']) ? $errors['name'] : ''; ?>
                    <form class="form-horizontal style-form" method='post' action="../public/index.php?route=addCategory">
                            <div class="col-sm-10">
                                 <input type="text" class="form-control" name="name">
                            </div>
                            <div class="col-sm-2">
                                <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Ajouter">
                            </div>
                    </form>
                </div>
            </div>
            </div>

        </div>
        <!--main category end-->

        <!--main type start-->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Les Types de bien accessible</h4>
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Gestion</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            foreach ($types as $type)
                            {
                        ?>
                            <tr>
                                <td class="td-id"><?= htmlspecialchars($type->getId());?></td>
                                <td><?= htmlspecialchars($type->getType());?></td>
                                <td class="td-btn-right">
                                    <a href="../public/index.php?route=deleteType&typeId=<?= $type->getId(); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  Supprimer</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="col-sm-6" id="type">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter un Type de bien</h4>
                <div class="form-group config-form" id="adding-type">
                <?= isset($errors['type']) ? $errors['type'] : ''; ?>
                    <form class="form-horizontal style-form" method='post' action="../public/index.php?route=addType">
                            <div class="col-sm-10">
                                 <input type="text" class="form-control" name="type" placeholder="Ajouter un type">
                            </div>
                            <div class="col-sm-2">
                                <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Ajouter">
                            </div>
                    </form>
                </div>
            </div>
            </div>

        </div>
        <!--main type end-->

        <!--main energy start-->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Les énergies accessible</h4>
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Gestion</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            foreach ($energies as $energy)
                            {
                        ?>
                            <tr>
                                <td class="td-id"><?= htmlspecialchars($energy->getId());?></td>
                                <td><?= htmlspecialchars($energy->getEnergy());?></td>
                                <td class="td-btn-right">
                                    <a href="../public/index.php?route=deleteEnergy&energyId=<?= $energy->getId(); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  Supprimer</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="col-sm-6">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter un type d'énergie</h4>
                <div class="form-group config-form" id="adding-energy">
                <?= isset($errors['energy']) ? $errors['energy'] : ''; ?>
                    <form class="form-horizontal style-form" method='post' action="../public/index.php?route=addEnergy">
                            <div class="col-sm-10">
                                 <input type="text" class="form-control" name="energy" placeholder="Ajouter une energy">
                            </div>
                            <div class="col-sm-2">
                                <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Ajouter">
                            </div>
                    </form>
                </div>
            </div>
            </div>

        </div>
        <!--main type end-->

        <!--main frequency start-->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Les Fréquences de charge accessible</h4>
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Gestion</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            foreach ($frequencies as $frequency)
                            {
                        ?>
                            <tr>
                                <td class="td-id"><?= htmlspecialchars($frequency->getId());?></td>
                                <td><?= htmlspecialchars($frequency->getfrequency());?></td>
                                <td class="td-btn-right">
                                    <a href="../public/index.php?route=deleteFrequency&frequencyId=<?= $frequency->getId(); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>  Supprimer</a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="col-sm-6">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter une frequence de charge</h4>
                <div class="form-group config-form" id="adding-frequency">
                <?= isset($errors['frequency']) ? $errors['frequency'] : ''; ?>
                    <form class="form-horizontal style-form" method='post' action="../public/index.php?route=addFrequency">
                            <div class="col-sm-10">
                                 <input type="text" class="form-control" name="frequency" placeholder="Ajouter une frequence">
                            </div>
                            <div class="col-sm-2">
                                <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Ajouter">
                            </div>
                    </form>
                </div>
            </div>
            </div>

        </div>
        <!--main type end-->

    </section>
</section>
