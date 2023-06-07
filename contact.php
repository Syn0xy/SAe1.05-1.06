<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.8">
  <title>Contact - Ubisoft Mobilities</title>
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
  <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
  <script src="script.js"></script>
</head>
<script src="./js/menu.js"></script>
<body>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <section id="principal">
        <div id="titre">
            <p>Contact</p>
            <p>Une question ? Une suggestion ? N'hésitez-pas à nous écrire.</p>
        </div>
        <form method="POST" class="form">
            <div class="email">
                <p>Adresse E-Mail</p>
                <input type="email" name="email" id="email" placeholder="✉ Email..." required>
            </div>
            <div class="sujet">
                <p>Sujet</p>
                <input type="text" name="sujet" id="sujet" placeholder="💭 Sujet..." required>
            </div>
            <div class="message">
                <p>Texte</p>
                <textarea name="message" id="message" placeholder="✎ Message..." required></textarea>
            </div>
            <div id="send">
                <div class="valider">
                    <input type="submit" name="valider" id="valider" value="Envoyer" required>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST["message"])){
            $message = "Ce message a été envoyé via le formulaire de contact UbiSoftMobilities.fr
            De : " . $_POST["email"] . "
            Sujet : " . $_POST["sujet"] . "
            Message : " . $_POST["message"];

            $retour = mail("contact@ubisoftmobilities.fr", $_POST["sujet"], $message, "");
        }
        ?>
        <div id="reseaux">
            <div>
                <p>Réseaux</p>
            </div>
            <div>
                    <div>
                        <i class="fa-brands fa-tiktok"></i>
                        <p>@ubisoft_mobilities</p>
                    </div>
                    <div>
                        <i class="fa-brands fa-instagram"></i>
                        <p>@ubisoft_mobility</p>
                    </div>
                    <div>
                        <i class="fa-brands fa-youtube"></i>
                        <p>Ubisoft Mobilities</p>
                    </div>
            </div>
        </div>
    </section>
    <?php include("./includes/footer.php"); ?>
</body>
</html>
