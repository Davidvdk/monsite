<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>David/Créez une carte SD Raspbian pour votre Raspberry Pi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home1.css"/>
    <link rel="stylesheet" href="CSS/nav1.css"/>
    <link href="CSS/prism.css" rel="stylesheet" />
    <script src="JS/prism.js"></script>
</head>
<header>
    <?php include("mobilemenu.php"); ?>
</header>
<body>
<div class="menu1">
    <div class="articles">
    <h1>Créer une carte SD depuis Windows, Mac ou Linux avec Raspberry Pi Imager.</h1>
    <p>Le 5 mars la fondation Raspberry Pi a annoncé la sortie d’un outil maison pour faciliter la création des cartes SD, Raspberry Pi Imager, et ce depuis n’importe quel OS.</p>
    <p>Nous allons donc voir comment installer Raspbian (ou autre) sur votre carte SD avec Raspberry Pi Imager.</p>
    <h2 class="h2soustitre">
        <span id="Les_cartes_SD_recommander">1. Les cartes SD recommander</span>
    </h2>
        <p>Pour  une petite installation standard, <a href="https://www.amazon.de/dp/B073S9SFK2/ref=twister_B074B3ZR46?tag=raspbianfra05-21&_encoding=UTF8&th=1" target="_blank">choisissez une carte 16 Go.</a></p>
        <p>Pour une installation gérant un peu plus de multimédia ou de log, <a href="https://www.amazon.de/dp/B073S8LQSL/ref=twister_B074B3ZR46?tag=raspbianfra05-21&_encoding=UTF8&th=1" target="_blank">choisissez une carte 32 Go.</a></p>
        <p>Pour une installation destinée à accueillir pas mal de multimédia et des films, <a href="https://www.amazon.de/dp/B073SB2L3C/ref=twister_B074B3ZR46?tag=raspbianfra05-21&_encoding=UTF8&psc=1" target="_blank">optez pour une carte 64 Go.</a></p>
    <h2>Installer Raspberry Pi Imager</h2>
    <ul class="site">
        <li>la dernière version de la distribution Raspbian <a href="http://downloads.raspberrypi.org/raspbian_latest" target="_blank">Télécharger ici</a></li>
        <li>Win32DiskManager <a href="https://sourceforge.net/projects/win32diskimager/files/latest/download" target="_blank">Télécharger ici</a></li>
        <li>Un lecteur de carte SD externe ou clef usb avec carte sd</li>
    </ul>
    <h2>Installation de Raspbian sur la carte SD du Raspberry Pi.</h2>
    <p>Vous devriez maintenant avoir installé Win32DiskImager, et téléchargé la dernière version de Raspbian.</p>
    <p>Vous avez donc une archive « .zip » de Raspbian, décompressez là et vous devriez obtenir un fichier « .img ».</p>
    <p>Insérez votre carte SD dans le lecteur de votre ordinateur, et une fois celle-ci reconnue, lancez Win32DiskImager et cliquez sur l’icône représentant un dossier à droite du champ « Image File ».</p>
    <br>
    <figure>
        <img src="images/Win32DiskImager.png" alt="image" />
        <figcaption><strong>Étape 1 :</strong>Ouvrir le fichier « .img » obtenu un peu plus tôt.</figcaption>
    </figure><br>
    <br>
    <br>
    <figure>
        <img src="images/Win32DiskImager1.png" alt="image" />
        <figcaption><strong>Étape 2 :</strong>Choisissez le lecteur correspondant à votre carte MicroSD.</figcaption>
    </figure><br>
    <br>
    <br>
    <figure>
        <img src="images/Win32DiskImager2.png" alt="image" />
        <figcaption><strong>Étape 3 :</strong>Cela pourrait être utile si vous pouviez redimensionner légèrement les <br> partitions de la carte SD avant de prendre l’image, puis la copier sur une <br> carte légèrement plus petite et la redimensionner ultérieurement.</figcaption>
    </figure><br>
    <br>
    <br>
    <figure>
        <img src="images/Win32DiskImager3.png" alt="image" />
        <figcaption><strong>Étape 4 :</strong>Cliquez sur le bouton « Ecrire » lancera l’écriture.</figcaption>
    </figure>
    <br>
    <p>Une fois l’écriture terminée, la fenêtre affiche « Done » sous la barre de progression. Il ne vous reste plus qu’à quitter Win32DiskImager, à éjecter votre carte SD !</p>
</div>
</div>
</body>
</html>
