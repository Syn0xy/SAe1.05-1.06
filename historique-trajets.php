<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Historique trajets - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/historique-location.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
</head>
<script src="./js/menu.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <h1 id="titre">Historique des trajets</h1>
        <!-- Tableau de l'historique -->
        <table>
            <tr>
                <th>Depart</th>
                <th>Arriver</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Conducteur</th>
                <th>Prix total</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>Paris</td>
                <td>Ubisoft Montreuil</td>
                <td>12:12/2022</td>
                <td>8:55</td>
                <td>Damien</td>
                <td>18 €</td>
                <td><button>Reserver à nouveau</button></td>
            </tr>
            <tr>
                <td>Paris</td>
                <td>Ubisoft Montreuil</td>
                <td>12:12/2022</td>
                <td>9:25</td>
                <td>Kevin</td>
                <td>12 €</td>
                <td><button class="indispo">Indisponible</button></td>
            </tr>
        </table>
    <?php include("./includes/footer.php"); ?>
</body>
</html>
