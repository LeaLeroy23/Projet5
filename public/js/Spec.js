class Spec {
    constructor(){
        this.outside = $("#outside"); 
        this.outsideName = $("[name='outside']");
        this.outsideArea = $("#outside-area");
        this.parking = $("#parking"); 
        this.parkingName = $("[name='parking']");
        this.parkingType = $("#parking-type");

        this.outsideSpec();
        this.parkingSpec();
    }

    outsideSpec(){
        this.outside.change(() => {
            if(spec.outsideName[0].value == "0"){
                spec.outsideArea.css("display", "none");
            } else {
                spec.outsideArea.css("display", "block");
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