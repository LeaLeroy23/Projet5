<?php $this->title = "Ajouter des images"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Ajout de plusieurs images</h3>
        <?= $this->session->show('deletePicture'); ?>
        <?= $this->session->show('addPictures'); ?>
        <div class="row mt">
            <div class="col-lg-12">
                <div class="form-panel">

                    <form action="index.php?route=addPictures&estateId=<?= $estate->getId();?>" class="dropzone"
                        id="dropzoneFrom">
                        <input type="hidden" name="estate_id" value="<?=$estate->getId();?>" />
                    </form>

                    <div>
                        <button type="button" name="submit" class="btn btn-info" id="submit">Ajouté</button>
                    </div>
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

                        <tbody id="preview">
                            <?php 
                            print_r($pictures);
                                foreach($pictures as $picture){
                            ?>
                            <tr>
                                <td><img src="img/upload/<?=$picture->getFile();?>" height="150px"></td>
                                <td><?=htmlspecialchars($picture->getFile());?></td>
                                <td>
                                    <a href="index.php?route=deletePicture&pictureId=<?=$picture->getId();?>"><button
                                            class="btn btn-danger btn-xs" title="Supprimer"><i
                                                class="fa fa-trash-o "></i> Supprimer</button></a>
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
<script src="lib/jquery/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>


<script>
    $(document).ready(function () {
        Dropzone.options.dropzoneFrom = {
            autoProcessQueue: false,
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
            init: function () {
                let submitButton = document.querySelector('#submit');
                myDropzone = this;
                submitButton.addEventListener("click", function () {
                    myDropzone.processQueue();
                });
                this.on("complete", function () {
                    if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length ==
                        0) {
                        var _this = this;
                        _this.removeAllFiles();
                    }
                    list_image();
                });
            },
        };

        //list_image();

        function list_image() {
            $.ajax({
                url: "index.php?route=uploadPictures&estateId=<?= $estate->getId();?> ",
                success: function (data) {
                    $('#preview').html(data);
                    console.log(data);
                    console.log('upload ok');
                },
                error: function (resultat, status, erreur) {}

            });
        }

        $(document).on('click', '.remove_image', function () {
            console.log('hello again');
            var name = $(this).attr('id');
            $.ajax({
                url: "index.php?route=deletePictures&estateId=<?= $estate->getId();?>",
                method: "POST",
                data: {
                    name: file
                },
                success: function (data) {
                    list_image();
                }
            })
        });

    });
</script>