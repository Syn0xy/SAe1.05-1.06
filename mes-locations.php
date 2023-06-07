<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Mes locations - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/mes-locations.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
</head>
<script src="./js/menu.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <div id="principal">
        <section id="sec1">
            <div class="presentation"><h1>Vos véhicules</h1></div>
            <div><h2>Vous n'avez aucun véhicules en location</h2></div>
            <div class="bouton" onclick="location.href='proposer-location.php';"><h2>Mettre un véhicule <br> en location</h2></div>
        </section>
        <section id="sec2">
            <div class="presentation"><h1>Vous louez actuellement</h1></div>
            <ul>
                <li>
                <img src="./images/annonces/twingo.jpg" alt="Image de la Twingo">
                <h2>RENAULT TWINGO E-TECH</h2>
                <p>Pétillante, personnalisable et toujours aussi maniable, Twingo E-Tech 100% électrique reste fidèle à sa personnalité attachante tout en affirmant sa nouvelle identité 100% électrique.</p>
                <p>Couleur : Gris</p>
                <p>Puissance : 60 kW (82 ch)</p>
                <p>Prix de la location par jour : 12 €</p>
                <p>Loué depuis : 1 jours</p>
                <p>Temps restant de la location : 2 jours</p>
                </li>
            </ul>
        </section>
    </div>
    <?php include("./includes/footer.php"); ?>
</body>
</html>
