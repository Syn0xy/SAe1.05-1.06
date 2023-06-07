<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Espace - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/espace.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
</head>
<script src="./js/menu.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <section>
    <h1 class="titre">Espace utilisateur</h1>
    <h1 class="titre">Espace utilisateur</h1>

    <!-- Boutons d'accès aux historiques -->
    <div class="buttons">
      <a onclick="location.href='historique-location.php';" class="button">Historique des locations</a>
      <a onclick="location.href='historique-trajets.php';" class="button">Historique des trajets</a>
    </div>

    <!-- Historique des paiements -->
    <h2>Historique des paiements</h2>
    <table>
      <tr>
        <th>Date</th>
        <th>Montant</th>
        <th>Raison</th>
      </tr>
      <tr>
        <td>01/11/2022</td>
        <td>50€</td>
        <td>Location de véhicule</td>
      </tr>
      <tr>
        <td>15/12/2022</td>
        <td>20€</td>
        <td>Covoiturage</td>
      </tr>
    </table>
    <h2>Options utilisateur</h2>
    <ul>
      <li><a href="/modifier-profil">Me deconnecter</a></li>
      <li><a href="/modifier-mot-de-passe">Modifier mon mot de passe</a></li>
      <li><a href="/supprimer-compte">Supprimer mon compte</a></li>
    </ul>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    </section>
    <?php include("./includes/footer.php"); ?>
</body>
</html>
