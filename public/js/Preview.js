class Preview {
    constructor(){
        this.previewImage();
    }
    previewImage(){
        let preview = document.querySelector('img');
        let file = document.querySelector('input[type=file]').files[0];
        let reader = new FileReader();

        reader.addEventListener("load", function () {
            // convert image file to base64 string
            preview.src = reader.result;
          }, false);
        
          if (file) {
            reader.readAsDataURL(file);
          }
    }


}