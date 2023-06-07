function index(){
    var index = document.getElementById("index");
    var liste  =document.getElementById("liste");
    if(liste.style.display == "block"){
        liste.style.display="none";
        index.style.backgroundColor="#555";
        index.style.color="#eee";
        index.style.borderRightStyle="solid";
        document.getElementById("caraInd").className = "fa-regular fa-circle-right";
    }else{
        liste.style.display="block";
        index.style.backgroundColor="#eee";
        index.style.color="#555";
        index.style.borderRightStyle="none";
        document.getElementById("caraInd").className = "fa-solid fa-circle-xmark";
    }
}

function indexFermer(){
    var liste  =document.getElementById("liste");
    if(liste.style.display == "block"){
        index();
    }
}