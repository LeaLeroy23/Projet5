<?php $this->title = "Ajouter des images"; ?>

<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="../public/css/filepond-plugin-image-preview.css" rel="stylesheet">

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
    <!-- /MAIN CONTENT  -->
    <script src="https://unpkg.com/filepond-plugin-file-metadata/dist/filepond-plugin-file-metadata.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
    <script src="../public/js/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <script>
        // Register the plugin with FilePond
        FilePond.registerPlugin(
                FilePondPluginFileMetadata, 
                FilePondPluginImageCrop,
                FilePondPluginImagePreview
        );
        
        // Get a reference to the file input element
        const inputElement = document.querySelector('input[type=file]');

        // Create the FilePond instance
        const pond = FilePond.create(inputElement, {
            allowMultiple: true,
            allowReorder: true,
            imageCropAspectRatio: '1:1',
            fileMetadataObject: {
                'markup': [
                    [
                        'rect', {
                            left: 0,
                            right: 0,
                            bottom: 0,
                            height: '60px',
                            backgroundColor: 'rgba(0,0,0,.5)'
                        },
                    ],
                    [
                        'image', {
                            right: '10px',
                            bottom: '10px',
                            width: '30px',
                            height: '30px',
                            src: '',
                            fit: 'contain'
                        }
                    ]
                ]
            }
        });

        // Easy console access for testing purposes
        window.pond = pond;
    </script>

