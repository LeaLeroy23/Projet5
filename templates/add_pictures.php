<?php $this->title = "Ajouter des images"; ?>

<!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Ajout de plusieurs images</h3>

                <form method="post" action="../public/index.php?route=addPictures" enctype="multipart/form-data">
                    <input type="file" name="filename"/>
                    <input type="number" name="estate_id" id="estate-id" value="<?= ($estate->getId());?>" />
                    <input type="submit" name="submit" vlaue="valider"/>
                </form>

        </section>
        <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
