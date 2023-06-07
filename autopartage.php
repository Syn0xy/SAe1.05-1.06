<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Autopartage - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/sell_page.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
</head>
<script src="./js/menu.js"></script>
<script src="./js/slider.js"></script>
<script src="./js/buy.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <body>
        <section id="principal">
            <div id="img">
                <img src="./images/autopartage.jpg">
            </div>
            <div id="page">
                <p>RENAULT CLIO en AUTOPARTAGE</p>
                <p>Prix : 8€/jour</p>
                <div id="description">
                    <p>Proprietaire : Ubisoft</p>
                </div>
                <div id="couleur">
                    <div>
                        <p>Couleur : &nbsp;</p>
                        <p id="couleur_nom"></p>
                    </div>
                    <div> 
                        <div class="rond_couleur">
                            <div class="blanc"></div>
                        </div>
                    </div>
                </div>
                <div id="taille">
                    <p>Puissance :</p>
                    <div>
                        <p class="taille">103 kW</p>
                    </div>
                </div>
                <div id="quantite">
                    <p>Durée (jours) :</p>
                    <div>
                        <div class="quantite_moins" onclick="changeQuantite('-')"><i class="fa-solid fa-minus"></i></div>
                        <p id="compteur" class="compteur">1</p>
                        <div class="quantite_plus" onclick="changeQuantite('+')"><i class="fa-solid fa-plus"></i></div>
                    </div>
                </div>
                <div id="maintenant">
                    <p>LOUER MAINTENANT</p>
                </div>
                <div id="specifique">
                    <div>
                        <div onclick="openCompo()">
                            <p>DESCRIPTION</p>
                            <i id="caraCompo" class="fa-solid fa-plus"></i>
                        </div>
                        <div id="compo">
                            <p>RENAULT CLIO V 1.6 E-TECH 140<br>
                                Énergie : électrique<br>
                                Couleur blanc</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="propositions">
            <p>AUSSI DISPONIBLES</p>
            <div>
                <div>
                    <img src="./images/annonces/2008.jfif">
                    <p>Peugeot e-2008</p>
                    <p>17€/jour</p>
                </div>
                <div>
                    <img src="./images/annonces/etron.jpg">
                    <p>Audi e-tron</p>
                    <p>25€/jour</p>
                </div>
                <div>
                    <img src="./images/annonces/fiatlaprima.jfif">
                    <p>Fiat 500 La prima</p>
                    <p>16€/jour</p>
                </div>
                <div>
                    <img src="./images/annonces/zoe.jfif">
                    <p>Renault Zoe LIFE R90</p>
                    <p>9€/jour</p>
                </div>
            </div>
        </div>
    <?php include("./includes/footer.php"); ?>
</body>
</html>
