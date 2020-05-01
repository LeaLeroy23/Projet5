<?php $this->title = "Ajouter des caractéristiques"; ?>

<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Configuration</h3>

        <!--main category start-->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Les catégories accessible</h4>
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
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
                                <td><?= htmlspecialchars($category->getName());?></td>
                                <td>
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
                    <form class="form-horizontal style-form" method='post' action="../public/index.php?route=addCategory">
                            <div class="col-sm-10">
                                 <input type="text" class="form-control" name="name" placeholder="Ajouter une catégorie">
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
                                <td><?= htmlspecialchars($type->getType());?></td>
                                <td>
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

            <div class="col-sm-6">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Ajouter un Type de bien</h4>
                <div class="form-group config-form" id="adding-type">
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

        <!--main frequency start-->
        <div class="row">
            <div class="col-sm-6">
                <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Les Fréquences de charge accessible</h4>
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
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
                                <td><?= htmlspecialchars($frequency->getfrequency());?></td>
                                <td>
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
                    <form class="form-horizontal style-form" method='post' action="../public/index.php?route=addFrequency">
                            <div class="col-sm-10">
                                 <input type="text" class="form-control" name="type" placeholder="Ajouter une frequence">
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
