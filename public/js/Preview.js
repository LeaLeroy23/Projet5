class Preview {
    constructor(){
        this.previewImage();
    }

    previewImage(){
        let btnImage = document.getElementById('file');
        btnImage.addEventListener("change", function (e) {
            
            let file = document.querySelector('input[type=file]').files[0];
            let preview = document.getElementById('preview');
            
            let reader = new FileReader();
            reader.onload = function (e) {
              // convert image file to base64 string
                preview.src = reader.result;
            }, false;
          
            if (file) {
                reader.readAsDataURL(file);
            }
        
        }
    )}

    readUrl(input){
        if (input.files && input.files[0]){
            let reader = new FileReader();

            reader.onload = function(e){
                $('#blah').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]); 
        }
        $("#imgInp").change(function(){
            readURL(this);
        })
    }

}