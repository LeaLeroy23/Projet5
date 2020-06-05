<?php $this->title = "Modifictation d'une annonce"; ?>
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Modifier une annonce</h3>

        <form class="form-horizontal style-form" method='post' action="../public/index.php?route=editEstate&estateId=<?=htmlspecialchars($estate->getId());?>" enctype="multipart/form-data">

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Caractéristiques Général</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Type de bien</label>
                                <div class="col-sm-10">
                                    <select name="type_id" class="form-control">
                                        <?php
                                            foreach ($types as $type)
                                            {
                                        ?>
                                        <option value="<?= $type->getId();?>" <?= ($type->getId() === $estate->getType_id()) ? 'selected' : '' ?>><?= $type->getType();?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>

                                </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Catégorie</label>
                            <div class="col-sm-10">
                                <select name="category_id" class="form-control">
                                    <?php
                                        foreach ($categories as $category)
                                        {
                                    ?>
                                    <option value="<?= $category->getId();?>" <?= ($category->getId() === $estate->getCategory_id()) ? 'selected' : '' ?>><?= $category->getName();?></option>
                                    <?php
                                        }
                                            
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Titre</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" placeholder="Titre" value="<?= htmlspecialchars($estate->getTitle());?>">
                                <?= isset($errors['title']) ? $errors['title'] : ''; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Étage</label>
                            
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" value="<?= htmlspecialchars($estate->getFloor());?>" name="floor" placeholder="Etage">
                                    <?= isset($errors['floor']) ? $errors['floor'] : ''; ?>
                                </div>

                                <label class="col-sm-1 col-sm-1 control-label">Surface</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" value="<?= ($estate->getArea());?>" name="area" placeholder="Superficie">
                                    <span>en m2 selon la loi Carrez</span>
                                    <?= isset($errors['area']) ? $errors['area'] : ''; ?>
                                </div>
                            
                        </div> 

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nombre de pièce</label>
                            <div class="col-sm-2">
                                <select name="rooms" class="form-control">
                                    <option value="<?= ($estate->getRooms());?>"<?= $estate->getRooms() ? 'selected' : '' ?>><?= ($estate->getRooms()); ?></option>
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
                                    <option value="<?= ($estate->getBedrooms());?>"><?= ($estate->getBedrooms());?></option>
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
                                    <option value="<?= ($estate->getBathrooms());?>"><?= ($estate->getBathrooms());?></option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4 +">4 +</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Comble aménageable</label>
                            <div class="col-sm-10">
                                <select name="convertible_attic" class="form-control">
                                    <option value="<?= htmlspecialchars($estate->getConvertible_attic());?>"><?= htmlspecialchars($estate->getConvertible_attic());?></option>
                                    <option value="1">oui</option>
                                    <option value="0" selected>non</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Extérieur(s)</label>
                                <div class="col-sm-5">
                                    <select name="outside" id="outside" class="form-control">
                                        <option value="<?= htmlspecialchars($estate->getOutside());?>"><?= htmlspecialchars($estate->getOutside());?></option>
                                        <option value="0">Pas d'extérieur</option>
                                        <option value="balcon">Balcon</option>
                                        <option value="terrasse">Terrasse</option>
                                        <option value="jardin">Jardin</option>
                                    </select>
                            </div>

                            <div class="col-sm-5" id="outside-area">
                                <input type="number" class="form-control" name="outside_area" value="<?= htmlspecialchars($estate->getOutside_area());?>" placeholder="Superficie">
                                <span>en m2</span>
                            </div>
                        </div>

                        <div class="form-group" id="parking">
                            <label class="col-sm-2 col-sm-2 control-label">Stationnement</label>
                            <div class="col-sm-5">
                                <select name="parking" class="form-control">
                                    <option value="<?= htmlspecialchars($estate->getParking());?>"><?= htmlspecialchars($estate->getParking());?></option>
                                    <option value="1">oui</option>
                                    <option value="0">non</option>
                                </select>
                            </div>
                            <div class="col-sm-5" id="parking-type">
                                <select name="parking_type" class="form-control">
                                    <option value="<?= htmlspecialchars($estate->getParking_type());?>"><?= htmlspecialchars($estate->getParking_type());?></option>
                                    <option value="parking">Parking</option>
                                    <option value="garage">Garage</option>
                                    <option value="box">Box</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Energie du bien</label>
                                <div class="col-sm-10">
                                    <select name="energy_id" class="form-control">
                                        <?php
                                            foreach ($energies as $energy)
                                            {
                                        ?>
                                        <option value="<?= $energy->getId();?>" <?= ($energy->getId() === $estate->getEnergy_id()) ? 'selected' : '' ?>><?= $energy->getEnergy();?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>

                                </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Diagnostic Energétique</label>
                            <div class="col-sm-10">

                                <div class="col-sm-6">
                                    <label class="col-sm-3 col-sm-3 control-label">Electrique :</label>
                                        <div class="col-sm-9">
                                            <select name="level_energy_diagnostic" class="form-control">
                                                <option value="<?= htmlspecialchars($estate->getLevel_energy_diagnostic());?>"><?= htmlspecialchars($estate->getLevel_energy_diagnostic());?></option>
                                                <option value="aucun">Aucun</option>
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

                                <div class="col-sm-6">
                                    <label class="col-sm-3 col-sm-3 control-label">GES :</label>
                                        <div class="col-sm-9">
                                            <select name="level_climat_diagnostic" class="form-control">
                                            <option value="<?= htmlspecialchars($estate->getLevel_climat_diagnostic());?>"><?= htmlspecialchars($estate->getLevel_climat_diagnostic());?></option>
                                                <option value="aucun">Aucun</option>
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
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Localisation</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="city" value="<?= htmlspecialchars($estate->getCity());?>" placeholder="Ville">
                                <?= isset($errors['city']) ? $errors['city'] : ''; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Année de construction de l'immeuble</label>
                                <div class="col-sm-5">
                                    <input type="number" name="building_year" class="form-control" value="<?= htmlspecialchars($estate->getBuilding_year());?>">
                                    <?= isset($errors['building_year']) ? $errors['building_year'] : ''; ?>
                                </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Disponible à partir du :</label>
                            <div class="col-sm-10">
                                <input type="date" value="<?= htmlspecialchars($estate->getAvailable());?>" size="16"><?= htmlspecialchars($estate->getAvailable());?>
                            </div>
                        </div>

                    </div>

                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Descriptif</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description courte</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="excerpt" value="<?= htmlspecialchars($estate->getExcerpt());?>" placeholder="Courte description">
                                <?= isset($errors['excerpt']) ? $errors['excerpt'] : ''; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description longue</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Longue description"><?= htmlspecialchars($estate->getDescription());?></textarea>
                                <?= isset($errors['description']) ? $errors['description'] : ''; ?>
                            </div>
                        </div>

                    </div>

                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Télécharger des photos </h4>

                        <div class="form-group last">
                            <div class="col-md-12">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <label>Sélectionnez des images</label><br>
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="../public/img/upload/<?= htmlspecialchars($estate->getPicture_url());?>" height="200" id="preview" alt="Image preview">
                                    </div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <input type="file" name="picture_url" id="file" value="<?= htmlspecialchars($estate->getPicture_url());?>"/>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Tarification</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Charge</label>
                            
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="charge_price" value="<?= htmlspecialchars($estate->getCharge_price());?>" placeholder="Prix des charges en €">
                                <?= isset($errors['charge_price']) ? $errors['charge_price'] : ''; ?>
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
                                    <input type="radio" id="optionsRadios1" name="charge_frequency_id" value="<?= $frequency->getId();?>" <?= ($frequency->getId() === $estate->getCharge_frequency_id()) ? 'checked' : '' ?>><?= $frequency->getFrequency();?>
                                </label>
                                <?php
                                    }
                                ?>

                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Prix</label>
                            
                            <div class="col-sm-5">
                                <input type="number" class="form-control" name="price" value="<?= htmlspecialchars($estate->getPrice());?>" placeholder="Prix en €">
                                <?= isset($errors['price']) ? $errors['price'] : ''; ?>
                            </div>

                            <label class="col-sm-1 col-sm-1 control-label">Honoraire</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="fees" value="<?= htmlspecialchars($estate->getFees());?>" placeholder="Honoraire en €">
                                <?= isset($errors['fees']) ? $errors['fees'] : ''; ?>
                            </div>
                        </div> 

                    </div>

                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Publication</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Status de la publication</label>
                                <div class="col-sm-10">
                                
                                    <label>
                                        <input type="radio" id="optionsRadios1" name="status" value="1">
                                        Publié
                                    </label>
                                    <label>
                                        <input type="radio" id="optionsRadios1" name="status" value="0">
                                        Brouillon
                                    </label>
                                </div>
                            </div>


                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Mettre à jour">
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            </div>


            </form>
    </section>
</section>