let img = document.getElementsByClassName('img_slider');
let point = document.getElementsByClassName('point');
let actuelle=0;
let nb_img=3;

function imgSlide(modif){
    img[actuelle].style.opacity="0";
    point[actuelle].style.color="rgba(255, 255, 255, 0.496)";
    point[actuelle].style.fontSize="1.3rem";
    point[actuelle].style.marginTop="0px";
    if(modif=="plus"){
        if(actuelle+1>=nb_img){
            actuelle=0;
        }else{
            actuelle++;
        }
    }else if(modif=="moins"){
        if(actuelle-1<0){
            actuelle=nb_img-1;
        }else{
            actuelle--;
        }
    }else{
        actuelle=modif;
    }
    img[actuelle].style.opacity="1";
    point[actuelle].style.color="white";
    point[actuelle].style.marginTop="-2px";
    point[actuelle].style.fontSize="1.8rem";
}

function imageSuivante(){
    imgSlide("plus");
}

function imagePrecedente(){
    imgSlide("moins");
}