class Add {
    constructor(){
        this.initAddingCategory();
    }

    initAddingCategory(){
        let addingBtn = document.getElementById("btn_submit");
        addingBtn.addEventListener('click', (e) =>{
            console.log('ici');
            let addBlock = document.getElementById("adding-category");
            addBlock.style.display = "block"; 
        });
    }

}