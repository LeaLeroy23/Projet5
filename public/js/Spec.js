class Spec {
    constructor(){
        this.outsideSpec();
        this.parkingSpec();
    }

    outsideSpec(){
        let outside = document.getElementById("outside");
        outside.addEventListener("change", function (e) {
            let outsideArea = document.getElementById("outside-area");
            if(e.target.value){
                outsideArea.style.display = "block";
            } else {
                outsideArea.style.display = "none";
            }
        });
    }

    parkingSpec(){
        let parking = document.getElementById("parking")
        parking.addEventListener("change", function (e) {
            let parkingType = document.getElementById("parking-type");
            
            if(e.target.value = "1"){
                parkingType.style.display = "block";
            } else {
                parkingType.style.display = "none";
            }
        });
    }
}