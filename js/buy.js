let quantite = 1;
let taille = 0;
let tailles = document.getElementsByClassName('taille');
let couleur = 0;
let couleurs = document.getElementsByClassName('rond_couleur');


function changeQuantite(modif){
    if(modif == "+"){
        quantite++;
    }else if(modif == "-" && quantite>1){
        quantite--;
    }
    document.getElementById("compteur").textContent = quantite;
}

function choisirTaille(choix){
    tailles[taille].style.borderColor = "lightgray";
    taille = choix-1;
    tailles[taille].style.borderColor = "black";
}

function choisirCouleur(choix){
    couleurs[couleur].style.borderColor = "lightgray";
    couleur = choix-1;
    couleurs[couleur].style.borderColor = "black";
    if(choix == 1){
        document.getElementById("couleur_nom").textContent = "Rouge";
    }
    if(choix == 2){
        document.getElementById("couleur_nom").textContent = "Bleu";
    }
    if(choix == 3){
        document.getElementById("couleur_nom").textContent = "Vert";
    }
    if(choix == 4){
        document.getElementById("couleur_nom").textContent = "Jaune";
    }
}

function openCompo(){
    let contenu = document.getElementById("compo");
    let cara = document.getElementById('caraCompo');
    if (contenu.style.display =="flex"){
        cara.className = "fa-solid fa-plus";
        contenu.style.display = "none";
    }else{
        cara.className = "fa-solid fa-minus";
        contenu.style.display ="flex";
        document.getElementById("guide").style.display ="none";
        document.getElementById('caraGuide').className = "fa-solid fa-plus";
    }
}
function openGuide(){
    let contenu = document.getElementById("guide");
    let cara = document.getElementById('caraGuide');
    if (contenu.style.display =="flex"){
        cara.className = "fa-solid fa-plus";
        contenu.style.display = "none";
    }else{
        cara.className = "fa-solid fa-minus";
        contenu.style.display ="flex";
        document.getElementById("compo").style.display ="none";
        document.getElementById('caraCompo').className = "fa-solid fa-plus";
    }
}