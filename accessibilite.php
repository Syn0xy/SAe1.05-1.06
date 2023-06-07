<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Louer - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/accessibilité.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
</head>
<script src="./js/menu.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <h1 class="titre">Paramètres d'accessibilité</h1>
    <form action="/modifier-parametres-accessibilite" method="post">
      <h2 class="low">Taille de police</h2>
      <input type="radio" id="taille-petite" name="taille-police" value="petite">
      <label for="taille-petite">Petite</label>
      <input type="radio" id="taille-moyenne" name="taille-police" value="moyenne" checked>
      <label for="taille-moyenne">Moyenne</label>
      <input type="radio" id="taille-grande" name="taille-police" value="grande">
      <label for="taille-grande">Grande</label>
      <h2 class="low">Contraste</h2>
      <input type="radio" id="contraste-normal" name="contraste" value="normal" checked>
      <label for="contraste-normal">Normal</label>
      <input type="radio" id="contraste-eleve" name="contraste" value="eleve">
      <label for="contraste-eleve">Élevé</label>
      <br>
      <input type="submit" value="Enregistrer les modifications">
    </form>
    <?php include("./includes/footer.php"); ?>
</body>
</html>
