<?php $this->title = "Ajouter des images"; ?>

<!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Ajout de plusieurs images</h3>
            <div class="row mt">
                <div class="white-panel mt">
                    <div class="panel-body">

                       <form method="POST" action="../public/index.php?route=addPictures" enctype="multipart/form-data">
                            <input type="file" name="picture_url" />

                            <input type="number" name="estate_id" id="input-estate-id" value="<?= ($estate->getId());?>" />
                            <input type="submit" name="submit" id="submit-all" value="Ajouter les fichiers"  />
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->