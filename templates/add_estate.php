<?php $this->title = "Ajouter une annonce"; ?>
    <section id="main-content">
        <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Ajouter une annonce</h3>

            <form class="form-horizontal style-form" method='POST' action="../public/index.php?route=addEstate" enctype="multipart/form-data">

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                    <h4 class="mb"><i class="fa fa-angle-right"></i> Caractéristiques Général</h4>

                        <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Catégorie</label>
                            <div class="col-sm-9">
                                <div class="radio">
                                    <label>
                                        <input type="radio" id="optionsRadios1" name="category" value="a vendre">
                                        A Vendre
                                    </label>
                                    <label>
                                        <input type="radio" iid="optionsRadios1" name="category" value="a louer">
                                        A Louer
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-1" id="adding-category">
                                <a href="" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>

                        <!-- Start add category -->
                        <div class="form-group">
                            <form class="form-horizontal style-form" method='POST' action="../public/index.php?route=addCategory">
                                <label class="col-sm-2 col-sm-2 control-label">Ajouter une catégorie</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" placeholder="Ajouter une catégorie">
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="submit" name="submit" id="submit" class="btn btn-theme05" value="Ajouter">
                                    </div>
                            </form>
                        </div>
                        <!-- End add category -->


                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Type de bien</label>
                                <div class="col-sm-9">
                                    <select name="type" class="form-control">
                                        <option value="maison">Maison</option>
                                        <option value="appartement">Appartement</option>
                                        <option value="parking">Parking</option>
                                        <option value="garage">Garage</option>
                                        <option value="local_commercial">Local Commercial</option>
                                    </select>
                                </div>
                                <div class="col-sm-1" id="adding-type">
                                    <a href="../public/index.php?route=addType" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></a>
                                </div>
                        </div>

                        <!-- Start add type -->
                        <div class="form-group" id="add-type">
                            <form class="form-horizontal style-form" method='POST' action="../public/index.php?route=addType" enctype="">
                                <label class="col-sm-2 col-sm-2 control-label">Ajouter un Type de bien</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="type" placeholder="Ajouter un type">
                                </div>
                                <div class="col-sm-1">
                                    <input type="submit" class="btn btn-theme05" value="Ajouter">
                                </div>
                            </form>
                        </div>
                        <!-- End add type -->

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
                                <select name="parking_type" class="form-control">
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
                        <label class="col-sm-2 col-sm-2 control-label">Energie</label>
                            <div class="col-sm-9">
                                <select name="energy" class="form-control">
                                    <option value="">Type d'énergie</option>
                                    <option value="Gaz">Gaz</option>
                                    <option value="électricité">Electricité</option>
                                </select>
                            </div>
                            <div class="col-sm-1" id="adding-energy">
                                <a href="../public/index.php?route=addEnergy" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>

                        <!-- Start add energy -->
                        <div class="form-group">
                            <form class="form-horizontal style-form" method='POST' action="../public/index.php?route=addEnergy">
                                <label class="col-sm-2 col-sm-2 control-label">Ajouter un type d'énergie</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="category" placeholder="Ajouter un type d'énergie">
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="submit" class="btn btn-theme05" value="Ajouter">
                                    </div>
                            </form>
                        </div>
                        <!-- End add energy -->

                        <div class="form-group">
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
                                </div>

                                <div class="col-sm-6">
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
                        </div>

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
                                <input type="date" readonly="" value="01-01-2020" size="16" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--<div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Descriptif</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="short_description" placeholder="Courte description">
                                <span>Description courte de moins de 250 caractères</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Description longue</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" placeholder="Longue description"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Télécharger des photos </h4>

                        <div class="form-group last">
                                <div class="col-md-12">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                            <input type="file" class="default" />
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                    </div>
                </div>
            </div>


            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Tarification</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Charge</label>
                            
                                <div class="col-sm-5">
                                    <input type="number" class="form-control" name="charge_price" placeholder="Prix des charges en €">
                                </div>

                                <label class="col-sm-1 col-sm-1 control-label">Fréquence</label>
                                <div class="col-sm-3">
                                    <select name="charge_frequence" class="form-control">
                                        <option value="par mois">Par mois</option>
                                        <option value="par trimestre">Par trimestre</option>
                                        <option value="par an">Par an</option>
                                    </select>
                                </div>
                                <div class="col-sm-1">
                                    <a href="../public/index.php?route=" class="btn btn-success btn-xs"><i class="fa fa-plus"></i></a>
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
                </div>
            </div>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Validation</h4>

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Date de la mise en ligne</label>
                            <div class="col-sm-10">
                                <input type="date" readonly="" value="01-01-2020" size="16" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-theme05" value="Publié">
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-theme06" type="button"><a href="">Brouillon</a></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>-->


        </form>

        </section>
    </secction>

