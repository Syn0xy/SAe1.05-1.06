<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Obtenir un trajet - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/trajets.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
</head>
<script src="./js/menu.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <section id="principal">
      <h1>Trajets de covoiturage disponibles</h1>

      <!-- Recherche de trajets -->
      <form >
        <label for="departure">Départ :</label>
        <input type="text" id="departure" name="departure">
        <label for="arrival">Arrivée :</label>
        <input type="text" id="arrival" name="arrival">
        <div class="rechercher" onclick="recherche()"><p>Rechercher</p></div>
      </form>
      <section class="result" id="result">
      <!-- Résultats de la recherche -->
      <h2>Résultats de la recherche</h2>

      <!-- Trajet 1 -->
      <h3>De Paris à Marseille</h3>
      <p>Le trajet sera effectué par <strong>Jean Dupont</strong> dans sa voiture de type <strong>Berline</strong>.</p>
      <p>Date de départ : <strong>mercredi 3 juillet</strong></p>
      <p>Heure de départ : <strong>9h00</strong></p>
      <p>Prix : <strong>30€</strong></p>
      <p><a href="/reservation/trajet-1">Réserver ce trajet</a></p>

      <!-- Trajet 2 -->
      <h3>De Lyon à Bordeaux</h3>
      <p>Le trajet sera effectué par <strong>Marie Durand</strong> dans sa voiture de type <strong>SUV</strong>.</p>
      <p>Date de départ : <strong>vendredi 5 juillet</strong></p>
      <p>Heure de départ : <strong>14h00</strong></p>
      <p>Prix : <strong>40€</strong></p>
      <p><a href="/reservation/trajet-2">Réserver ce trajet</a></p>

      <!-- Trajet 3 -->
      <h3>De Nice à Toulouse</h3>
      <p>Le trajet sera effectué par <strong>Paul Martin</strong> dans sa voiture de type <strong>Cabriolet</strong>.</p>
      <p>Date de départ : <strong>dimanche 7 juillet</strong></p>
      <p>Heure de départ : <strong>8h30</strong></p>
      <p>Prix : <strong>50€</strong></p>
      <p><a href="/reservation/trajet-3">Réserver ce trajet</a></p>
      </section>
    </section>
    <?php include("./includes/footer.php"); ?>
</body>
</html>
