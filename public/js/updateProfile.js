class UpdateProfile {
    constructor(){
        this.linkBtn();
    }

    linkBtn(){
        console.log("je suis là");
        var btnProfile = document.getElementById('btn-profile');
        var liEdit =  document.getElementById("li-edit-profile");
        var liProfile =  document.getElementById("li-profile");

        btnProfile.addEventListener( "click", function(){
            console.log("je encore suis là");
            liProfile.classList.remove('active');
            liEdit.classList.add("active");

        });
    }

}
