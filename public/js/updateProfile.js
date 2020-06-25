class UpdateProfile {
    constructor(){
        this.linkBtn();
    }

    linkBtn(){
        console.log("je suis là");
        var btnProfile = document.getElementById('btn-profile');
        btnProfile.addEventListener( "click", function(e){
            console.log("je encore suis là");
            var liProfile =  document.getElementById("li-profile");
            liProfile.classList.remove("active");
            var liEdit =  document.getElementById("li-edit-profile");
            liEdit.classList.add("active");
            e.href("#uploadProfile");
            
        });
    }

}
