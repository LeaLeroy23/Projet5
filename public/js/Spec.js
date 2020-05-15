class Spec {
    constructor(){
        this.outside = document.getElementById("outside");
        this.outsideArea = $("#outside-area");
        this.parking = $("#parking"); 
        this.parkingName = $("[name='parking']");
        this.parkingType = $("#parking-type");

        this.outsideSpec();
        this.parkingSpec();
    }

    outsideSpec(){
        this.outside.addEventListener("change", function (e) {
            if(e.target.value){
                outsideArea.style.display = "block";
            } else {
                outsideArea.style.display = "none";
            }
        });
    }

    parkingSpec(){
       this.parking.change(() => {
            if(spec.parkingName[0].value == "1"){
                spec.parkingType.css("display", "block");
            } else {
                spec.parkingType.css("display", "none");
            }
        });
    }
}