<?php $this->title = "Ajouter une annonce"; ?>
    <section id="main-content">
        <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Ajouter une annonce</h3>

            <form class="form-horizontal style-form" method='post' action="../public/index.php?route=addEstate" enctype="multipart/form-data">

                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Caractéristiques Général</h4>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Catégorie</label>
                                <div class="col-sm-10">
                                    <select name="category" class="form-control">
                                        <?php
                                            foreach ($categories as $category)
                                            {
                                        ?>
                                        <option value="<?= htmlspecialchars($category->getId());?>"><?= htmlspecialchars($category->getName());?></option>
                                        <?php
                                            }
                                            
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Type de bien</label>
                                    <div class="col-sm-10">
                                        <select name="type" class="form-control">
                                            <?php
                                                foreach ($types as $type)
                                                {
                                            ?>
                                            <option value="<?= htmlspecialchars($type->getId());?>"><?= htmlspecialchars($type->getType());?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>

                                    </div>

                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Titre</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" placeholder="Titre">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Étage</label>
                                
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control" name="floor" placeholder="Etage">
                                    </div>

                                    <label class="col-sm-1 col-sm-1 control-label">Surface</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" name="estate_area" placeholder="Superficie">
                                        <span>en m2 selon la loi Carrez</span>
                                    </div>
                                
                            </div> 

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Nombre de pièce</label>
                                <div class="col-sm-2">
                                    <select name="rooms" class="form-control">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="plus">5 +</option>
                                    </select>
                                </div>

                                <label class="col-sm-2 col-sm-2 control-label">Chambre(s)</label>
                                <div class="col-sm-2">
                                    <select name="bedrooms" class="form-control">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4 +">4 +</option>
                                    </select>
                                </div>

                                <label class="col-sm-2 col-sm-2 control-label">Salle de bain</label>
                                <div class="col-sm-2">
                                    <select name="bathrooms" class="form-control">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4 +">4 +</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Extérieur(s)</label>
                                    <div class="col-sm-5">
                                        <select name="outside" class="form-control">
                                            <option value="0">Pas d'extérieur</option>
                                            <option value="balcon">Balcon</option>
                                            <option value="terrasse">Terrasse</option>
                                            <option value="jardin">Jardin</option>
                                        </select>
                                </div>

                                <div class="col-sm-5">
                                    <input type="number" class="form-control" name="outside_area" placeholder="Superficie">
                                    <span>en m2</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Stationnement</label>
                                <div class="col-sm-5">
                                    <select name="parking" class="form-control">
                                        <option value="oui">oui</option>
                                        <option value="non">non</option>
                                    </select>
                                </div>
                                <div class="col-sm-5">
                                    <select name="parking_type" class="form-control">
                                        <option value="parking">Parking</option>
                                        <option value="garage">Garage</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Energie du bien</label>
                                    <div class="col-sm-10">
                                        <select name="energy" class="form-control" multiple>
                                            <?php
                                                foreach ($energies as $energy)
                                                {
                                            ?>
                                            <option value="<?= htmlspecialchars($energy->getId());?>"><?= htmlspecialchars($energy->getEnergy());?></option>
                                            <?php
                                                }
                                            ?>
                                        </select>

                                    </div>

                            </div>

                            <!--<div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Diagnostic Energétique</label>
                                <div class="col-sm-10">

                                    <div class="col-sm-6">
                                        <label class="col-sm-3 col-sm-3 control-label">Electrique :</label>
                                            <div class="col-sm-9">
                                                <select name="level_energy_diagnostic" class="form-control">
                                                    <option value="< 50 A">< 50 A</option>
                                                    <option value="51 à 90 B">51 à 90 B</option>
                                                    <option value="91 à 150 C">91 à 150 C</option>
                                                    <option value="151 à 230 D">151 à 230 D</option>
                                                    <option value="231 à 330 E">231 à 330 E</option>
                                                    <option value="331 à 450 F">331 à 450 F</option>
                                                    <option value="> 450 G">> 450 G</option>
                                                </select>
                                            </div>
                                    </div>-->

                                    <!--<div class="col-sm-6">
                                        <label class="col-sm-3 col-sm-3 control-label">GES :</label>
                                            <div class="col-sm-9">
                                                <select name="level_climat_diagnostic" class="form-control">
                                                    <option value="< 50 A">< 50 A</option>
                                                    <option value="51 à 90 B">51 à 90 B</option>
                                                    <option value="91 à 150 C">91 à 150 C</option>
                                                    <option value="151 à 230 D">151 à 230 D</option>
                                                    <option value="231 à 330 E">231 à 330 E</option>
                                                    <option value="331 à 450 F">331 à 450 F</option>
                                                    <option value="> 450 G">> 450 G</option>
                                                </select>
                                            </div>
                                    </div>

                                </div>
                            </div>-->

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Localisation</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="zip_code" placeholder="Code Postal">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Année de construction de l'immeuble</label>
                                    <div class="col-sm-5">
                                        <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="01/2014" class="input-append date dpMonths">
                                            <input type="text" readonly="" value="01/2014" size="16" class="form-control">
                                            <span class="input-group-btn add-on">
                                                <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                            </span>
                                        </div>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Disponible à partir du :</label>
                                <div class="col-sm-10">
                                    <input type="date" value="01-01-2020" size="16">
                                </div>
                            </div>

                        </div>

                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Descriptif</h4>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Description courte</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="short_description" placeholder="Courte description">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Description longue</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" placeholder="Longue description"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Télécharger des photos </h4>

                            <div class="form-group last">
                                <div class="col-md-12">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <label>Sélectionnez des images</label>
                                            <input type="file" name="filename" class="default" id="file"/>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Tarification</h4>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Charge</label>
                                
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" name="charge_price" placeholder="Prix des charges en €">
                                </div>
                            </div>

                            <div class="form-group" id="frequency">
                                <label class="col-sm-2 col-sm-2 control-label">Fréquence des Charges</label>
                                <div class="col-sm-9">
                                    <?php
                                        foreach ($frequencies as $frequency)
                                        {
                                    ?>
                                    <label>
                                        <input type="radio" id="optionsRadios1" name="frequency" value="<?= htmlspecialchars($frequency->getId());?>">
                                        <?= htmlspecialchars($frequency->getFrequency());?>
                                    </label>
                                    <?php
                                        }
                                    ?>

                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Prix</label>
                                
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" name="price" placeholder="Prix en €">
                                </div>

                                <label class="col-sm-1 col-sm-1 control-label">Honoraire</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" name="fees" placeholder="Honoraire en €">
                                </div>
                            </div> 

                        </div>

                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Validation</h4>

                            <div class="form-group">
                                <label class="col-sm-2 col-sm-2 control-label">Date de la mise en ligne</label>
                                <div class="col-sm-10">
                                    <input type="date" value="01-01-2020" size="16">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Publié">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>


            </form>

    </section>
</secction>

