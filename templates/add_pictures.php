<?php $this->title = "Ajouter des images"; ?>
<!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Ajout de plusieurs images</h3>
            <div class="row mt">
                <div class="white-panel mt">
                    <div class="panel-body">
                        <form method="post" action="../public/index.php?route=addPictures&estateId=<?=($estate->getId());?>" class="dropzone"  id="my-awesome-dropzone" enctype="multipart/form-data">
                            <input type="number" name="estate_id" id="input-estate-id" value="<?= ($estate->getId());?>" />
                            <input type="submit" name="submit" onclick="myDropzone.processQueue()"/>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->