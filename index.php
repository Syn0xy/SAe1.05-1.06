<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Accueil - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
</head>
<script src="./js/menu.js"></script>
<script src="./js/slider.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <div class="slider" id="slider">
      <img src="./images/decor1.jpg" alt="tg1" class="img_slider">
      <img src="./images/decor2.jpg" alt="tg2" class="img_slider">
      <img src="./images/decor3.jpg" alt="tg3" class="img_slider">
      <div class="suivant" onclick="imageSuivante()"><i class="fas fa-chevron-circle-right"></i></div>
      <div class="precedent" onclick="imagePrecedente()"><i class="fas fa-chevron-circle-left"></i></div>
      <div>
          <div onclick="imgSlide(0)" class="point"><i class="fas fa-regular fa-circle"></i></div>
          <div onclick="imgSlide(1)" class="point"><i class="fas fa-light fa-circle"></i></div>
          <div onclick="imgSlide(2)" class="point"><i class="fas fa-light fa-circle"></i></div>
      </div>
  </div>
  <div id="annonce">
    <h1>UbiSofT Mobilities, les moyens de transport de demain</h1>
  </div>
  <div id="haut">   
    <h1>Ubisoft Mobilities c'est...</h1>
    <div>
        <div>
            <img src="./images/presentation1.jpg">
            <div>
                <p>...des trajets accessibles</p>
                <p><strong>Contribuez à notre communauté en plaine expansion.</strong>Le premier trajet 100% gartuit!*</p>
            </div>
            <div onclick="location.href='trajets.php';">
                <p>Réserver</p>
                <i class="fa-solid fa-angles-right"></i>
            </div>
        </div>
        <div>
            <img src="./images/presentation2.jpg">
            <div>
                <p>...du partage</p>
                <p><strong>Participez a l'expension du projet, en sauvant l'environnement!</strong>Et gagnez jusqu'à 25€/jour*</p>
            </div>
            <div onclick="location.href='proposer-location.php';">
                <p>Proposer une location</p>
                <i class="fa-solid fa-angles-right"></i>
            </div>
        </div>
        <div>
            <img src="./images/presentation3.jpg">
            <div>
                <p>...de l'aide</p>
                <p>Aidez nous à ameliorer le site<strong>Une question ? On peut vous aider !</strong>Prenez part a l'écomobilités</p>
            </div>
            <div onclick="location.href='contact.php';">
                <p>Contact</p>
                <i class="fa-solid fa-angles-right"></i>
            </div>
        </div>
    </div>
  </div>
  <?php include("./includes/location.php"); ?>
  <div id="voirplus">
      <div onclick="location.href='location.php';">
          <h1>Tout découvrir</h1>
      </div>
  </div>
  <div id="bas">
    <div>
        <div>
            <h4>Le co-voiturage</h4>
            <h5>Des dizaine d'usager prêt a partager un trajet autour de chez vous ! Bon pour la santé et l'environnement, le covoiturage diminue le trafic sur les grands axes et la pollution !</h5>
            <div>
                <h5 onclick="location.href='trajets.php';">Commencer</h5>
            </div>
        </div>
        <div></div>
    </div>
    <div>
        <div></div>
        <div>
            <h4>L'auto-partage</h4>
            <h5>Des voitures libres, disponibles juste pour vous ! Ne vous occupez plus de l'entretien, reservez, et le véhicule est a vous !</h5>
            <div>
                <h5 onclick="location.href='autopartage.php';">Réserver</h5>
                <h5 onclick="location.href='autopartage.php';">Réserver</h5>
            </div>
        </div>
    </div>
  </div>
  <?php include("./includes/footer.php"); ?>
</body>
</html>
