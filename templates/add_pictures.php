<?php $this->title = "Ajouter des images"; ?>

<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Ajout de plusieurs images</h3>

            <div class="row mt">
                <div class="col-lg-12">

                    <div class="form-panel">
                        <form method="post" action="../public/index.php?route=addPictures" class="dropzone" enctype="multipart/form-data">
                            <div class="fallback">
                                <input type="file"  name="files_upload" multiple />
                                <input type="hidden" name="estate_id" id="estate-id" value="<?= ($estate->getId());?>" />
                                <!--<input type="submit" name="submit" value="valider"/>-->
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="form-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Les images associées aux annonces</h4>
                            <hr>
                            <thead>
                                <tr>
                                    <th><i class="fa fa-picture-o"></i> Les Images</th>
                                    <th><i class="fa fa-folder-open-o"></i> Nom du fichier</th>
                                    <th><i class="fa fa-gear"></i> Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php 
                            foreach($pictures as $picture){
                            ?>
                                <tr>
                                    <td><img src="../public/img/upload/" <?php $picture->getFilename(); ?> height="150"></td>
                                    <td></td>
                                    <td>
                                        <a href="../public/index.php?route=deletePicture&pictureId=<?=htmlspecialchars($picture->getId());?>"><button class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash-o "></i> Supprimer</button></a>
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
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT  -->

    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

    <script>
    
    </script>

