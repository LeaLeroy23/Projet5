class UpdateProfile {
    constructor(){
        this.linkBtn();
    }

    linkBtn(){
        var btnProfile = document.getElementById('btn-profile');
        var liEdit =  document.getElementById("li-edit-profile");
        var liProfile =  document.getElementById("li-profile");
        var activePanel = document.getElementById("updateProfile");
        var activeInfos = document.getElementById("infos");

        btnProfile.addEventListener( "click", function(){
            liProfile.classList.remove('active');
            activeInfos.classList.remove('active');
            liEdit.classList.add("active");
            activePanel.classList.add("active");
            
        });
    }

}
