<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Connexion/Inscription - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/connexion.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
</head>
<script src="./js/menu.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <section>
    <div>
    <h2>Connexion</h2>
    <form action="/connexion" method="post">
      <label for="email">Adresse email :</label>
      <input type="email" id="email" name="email">
      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password">
      <div onclick="location.href='espace.php';" class="bouton">Se connecter</div>
    </form>
    </div>
    <div>
    <h2>Inscription</h2>
    <form action="/inscription" method="post">
      <label for="email">Adresse email :</label>
      <input type="email" id="email" name="email">
      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password">
      <label for="password-confirm">Confirmation du mot de passe :</label>
      <input type="password" id="password-confirm" name="password-confirm">
      <div class="bouton">S'inscrire</div>
    </form>
    </div>
    </section>
    <?php include("./includes/footer.php"); ?>
</body>
</html>
