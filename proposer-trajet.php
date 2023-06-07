<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Proposer un trajet - Ubisoft Mobilities</title>
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
      <h1>Proposer un trajet</h1>
    </div>
    <form method="post" action="/propose-location" enctype="multipart/form-data">
      <label for="depart">Depart :</label><br>
      <input type="text" id="titre" name="titre"><br>
      <br>
      <label for="arrive">Arrive :</label><br>
      <input type="text" id="arrive" name="arrive"><br>
      <br>
      <label for="type">Type de voiture :</label><br>
      <input type="text" id="type" name="type"><br>
      <br>
      <label for="prix">Prix du trajet :</label><br>
      <input type="number" id="prix" name="prix"><br>
      <br>
      <label for="date">Date :</label>
      <input type="date" id="date" name="date">
      <label for="time">Heure :</label>
      <input type="time" id="time" name="time">
      <input type="submit" value="Proposer le trajet">
    </form> 
    <?php include("./includes/footer.php"); ?>
</body>
</html>
