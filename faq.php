<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <title>Accueil - Ubisoft Mobilities</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="//db.onlinewebfonts.com/c/75914226e45d53c888d99c55e1033690?family=Ubisoft+Sans" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="./images/logo/logo.png" type="image/x-icon">
    <title>FAQ - Ubisoft Mobilities</title>
</head>
<main>
    <script src="./js/faq.js"></script>
    <script src="./js/menu.js"></script>
    <?php include("./includes/header.php"); ?>
    <?php include("./includes/monter.php"); ?>
    <div onclick="index()" class="index" id="index">
        <i class="fa-regular fa-circle-right" id="caraInd"></i>
    </div>
    <div class="liste" id="liste">
        <ul>
            <li onclick="location.href='#q1'">Payer et communiquer via Ubisoft Mobilities</li>
            <li onclick="location.href='#q2'">Politique d’annulation pour les covoiturages</li>
            <li onclick="location.href='#q3'">Si vous n'avez pas reçu d'email de confirmation</li>
            <li onclick="location.href='#q4'">Puis-je réserver à la dernière minute ?</li>
            <li onclick="location.href='#q5'">Colis et animaux</li>
            <li onclick="location.href='./contact.php'" class="poserListe">Poser ma question</li>
        </ul>
    </div>
    <body>
        <section id="principal" onclick="indexFermer()">
            <div class="titre" id="q1">
                <p>FAQ</p>
            </div>
            <div>
                <div>
                    <p>Payer et communiquer via Ubisoft Mobilities</p>
                </div>
                <div id="q2">
                    <p>La confirmation de votre réservation et le paiement au conducteur ou à la conductrice se font automatiquement sur la plateforme Ubisoft Mobilities. Nous travaillons sans relâche pour nous assurer que vous pouvez saisir vos informations de paiement et communiquer avec les autres membres de la communauté Ubisoft Mobilities de façon sûre. Notre site et nos applications sont sécurisés, cryptés et nous modérons et bloquons tout message potentiellement dangereux.</p>
                </div>
            </div>
            <div >
                <div>
                    <p>Politique d’annulation pour les covoiturages</p>
                </div>
                <div id="q3">
                    <p>Que se passe-t-il si un passager ou une passagère ne se présente pas le jour du départ ?
Nous versons tout de même au conducteur ou à la conductrice l’intégralité du montant de la réservation. Les conducteurs et conductrices n’ont pas à à attendre leurs passagères et passagers indéfiniment, c’est pourquoi il est essentiel de penser à annuler sa réservation s’ils ou elles ne voyagent pas comme prévu.


Que se passe-t-il si le conducteur ou la conductrice annule ?
Nous remboursons les passagères et passagers intégralement, frais de service compris.


Que se passe-t-il si le conducteur ou la conductrice n’a pas annulé le trajet alors qu’il ou elle aurait dû ?
Il est nécessaire que les passagères et passagers nous disent que le trajet n’a pas eu lieu depuis la page Réservations de leur profil et ce, dans les 24 heures suivant l’heure de départ prévue. Il faudra  choisir une raison parmi celles proposées et nous apporter une explication détaillée.</p>
                </div>
            </div>
            <div>
                <div>
                    <p>Si vous n'avez pas reçu d'email de confirmation</p>
                </div>
                <div id="q4">
                    <p>Si vous n'avez pas reçu un e-mail de confirmation dans les 10 minutes qui suivent votre réservation, vérifiez les différentes boites de votre messagerie (notamment si vous utilisez Gmail) : spam, courriers indésirables, promotions, etc.</p>
                </div>
            </div>
            <div>
                <div>
                    <p>Puis-je réserver à la dernière minute ?</p>
                </div>
                <div id="q5">
                    <p>Même si Ubisoft Mobilities est un bon plan pour vos voyages de dernière minute, nous vous recommandons de réserver votre place plusieurs heures avant le départ. Les places non réservées restent disponibles 15 minutes avant le départ.

Cependant, si vous réservez quelques minutes avant le départ, il est possible que le conducteur ou la conductrice ait déjà pris la route. Dans ces cas là, difficile de décrocher le téléphone pour organiser une rencontre !</p>
                </div>
            </div>
            <div >
                <div>
                    <p>Colis et animaux</p>
                </div>
                <div>
                    <p>Pour des raisons de sécurité, il n’est pas autorisé d’organiser le transport de colis ou d’objets sans accompagnement.

Les animaux peuvent voyager en covoiturage, sous certaines conditions :

Ils voyagent en compagnie de leur propriétaire
Le conducteur ou la conductrice accepte de voyager avec eux - cette information figure sur leur trajet
Après avoir réservé, informez votre conducteur·rice par message afin de vérifier qu’il y aura de la place pour votre animal !

Si votre animal de compagnie prend de la place ou voyage en cage, il vous faudra peut-être réserver une place supplémentaire. Par ailleurs, les propriétaires d’animaux doivent veiller à fournir le matériel et les documents nécessaires à leur voyage (laisse, carnet de santé, etc.).</p>
                </div>
            </div>
            <div class="poser">
                <div onclick="location.href='./contact.php'">
                    <p>Poser ma question</p>
                </div>
            </div>
        </section>
        <?php include("./includes/footer.php"); ?>
    </body>
</main>
</html>