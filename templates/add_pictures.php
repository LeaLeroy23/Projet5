<?php $this->title = "Ajouter des images"; ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />

<!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Ajout de plusieurs images</h3>

            <div class="row mt">
                <div class="col-lg-12">
                    <div class="form-panel">
                        <form action="../public/index.php?route=addPictures" class="dropzone" id="dropzoneFrom"></form>
                        <br />
                        <br />
                        <div align="center">
                            <button type="button" name="button" class="btn btn-info" id="submit-all">Upload</button>
                        </div>
                        <br />
                        <br />
                        <!--<div id="preview"></div>-->
                        <br />
                        <br />
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
                                    <td><img src="..\public\img\upload\"<?=$picture->getFile();?> height="150"></td>
                                    <td><?=htmlspecialchars($picture->getFile());?></td>
                                    <td>
                                        <a href="../public/index.php?route=deletePicture&pictureId=<?=$picture->getId();?>"><button class="btn btn-danger btn-xs" title="Supprimer"><i class="fa fa-trash-o "></i> Supprimer</button></a>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script>

$(document).ready(function(){
 
 Dropzone.options.dropzoneFrom = {
  autoProcessQueue: false,
  acceptedFiles:".png,.jpg,.gif,.bmp,.jpeg",
  init: function(){
   var submitButton = document.querySelector('#submit-all');
   myDropzone = this;
   submitButton.addEventListener("click", function(){
    myDropzone.processQueue();
   });
   /*this.on("complete", function(){
        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
        {
            var _this = this;
            _this.removeAllFiles();
        }
        list_image();
    });*/
  },
 };

 //list_image();

 /*function list_image()
 {
  $.ajax({
   url:"../public/index.php?route=addPictures",
   success:function(data){
    $('#preview').html(data);
   }
  });
 }*/

/* $(document).on('click', '.remove_image', function(){
  var name = $(this).attr('id');
  $.ajax({
   url:"../public/index.php?route=addPictures",
   method:"POST",
   data:{name:name},
   success:function(data)
   {
    list_image();
   }
  })
 });*/
 
});
</script>