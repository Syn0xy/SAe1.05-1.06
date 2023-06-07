<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Proposer une location - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/proposer-location.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
</head>
<script src="./js/menu.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <div id="presentation">
      <br>
      <h1>Proposer une location</h1>
    </div>
    <form method="post" action="/propose-location" enctype="multipart/form-data">
      <label for="titre">Titre de l'annonce :</label><br>
      <input type="text" id="titre" name="titre"><br>
      <br>
      <label for="description">Description de la voiture :</label><br>
      <textarea id="description" name="description"></textarea><br>
      <br>
      <label for="couleur">Couleur de la voiture :</label><br>
      <input type="text" id="couleur" name="couleur"><br>
      <br>
      <label for="puissance">Puissance du véhicule (en chevaux) :</label><br>
      <input type="number" id="puissance" name="puissance"><br>
      <br>
      <label for="image">Image de la voiture :</label><br>
      <input type="file" id="image" name="image"><br>
      <br>
      <label for="prix">Prix de la location par jour :</label><br>
      <input type="number" id="prix" name="prix"><br>
      <br>
      <input type="submit" value="Proposer la voiture">
    </form> 
    <?php include("./includes/footer.php"); ?>
</body>
</html>
