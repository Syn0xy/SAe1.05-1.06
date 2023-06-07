<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Historique locations - Ubisoft Mobilities</title>
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
    <h1 id="titre">Historique des locations</h1>
        <!-- Tableau de l'historique -->
        <table>
            <tr>
                <th>Image</th>
                <th>Véhicule</th>
                <th>Propriétaire</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Prix total</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><img class="photo" src="./images/annonces/kangoo.jfif" alt="Voiture 1"></td>
                <td>RENAULT KANGOO EXPRESS ZE</td>
                <td>Mélanie</td>
                <td>01/11/2022</td>
                <td>03/11/2022</td>
                <td>18 €</td>
                <td><button class="indispo">Indisponible</button></td>
            </tr>
            <tr>
                <td><img class="photo" src="./images/annonces/2008.jfif" alt="Voiture 2"></td>
                <td>Peugeot e-2008</td>
                <td>Mathias</td>
                <td>05/12/2022</td>
                <td>09/12/2022</td>
                <td>68 €</td>
                <td><button onclick="location.href='location.php';">Louer à nouveau</button></td>
            </tr>
            <tr class="autopartage">
                <td><img class="photo" src="./images/autopartage.jpg" alt="Voiture 3"></td>
                <td>RENAULT CLIO</td>
                <td>Ubisoft</td>
                <td>11/12/2022</td>
                <td>12/12/2022</td>
                <td>9 €</td>
                <td><button onclick="location.href='autopartage.php';">Autopartage</button></td>
            </tr>
        </table>
    <?php include("./includes/footer.php"); ?>
</body>
</html>
