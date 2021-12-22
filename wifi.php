<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Wifi</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home1.css"/>
    <link rel="stylesheet" href="CSS/nav1.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="CSS/prism1.css" rel="stylesheet" />
    <script src="JS/prism.js"></script>
</head>
<header>
    <?php include("mobilemenu.php"); ?>
</header>
<body>
<div class="menu1">
<div class="articles">
    <h1 id="h1titre">Retrouver en clair le mot de passe d’un réseau wifi</h1>
<div class="post-info">
    <span class="thetime date updated"><i class="fa fa-calendar"></i>&nbsp;17 octobre 2021</span>
</div>
<p>Il arrive parfois qu’on doive retrouver la clé d’un réseau wifi en mémoire dans notre ordinateur, pour le transmettre à quelqu’un.</p>
<p>Difficile de se souvenir de tous les mots de passe des réseaux auxquels on se connecte, et nous n’avons pas tous la présence d’esprit de les noter dans nos gestionnaires de mots de passe</p>

<div class="post-image"> <img img width="1040" height="350" src="images/wifi.jpg" alt="Mot de passe wifi" style=""></div>  
    
    <h2 class="h2soustitre">
        <span id="Retrouver_son_mot_de_passe_Wifi_en_ligne_de_commande">Retrouver son mot de passe Wifi en ligne de commande</span>
    </h2>
    <ul class="site">
    <li id="tuto">Sous Windows :</li>
    <p>Ouvrir une invite de commande et entrer la ligne suivante, en remplaçant NOM_DU_RESEAU_WIFI par le vrai nom du réseau wifi sur lequel vous êtes connecté :</p>
    <pre><code class="language-html">netsh wlan show profile NOM_DU_RESEAU_WIFI key=clear</code></pre>
    <li id="tuto">Sous Linux :</li>
    <p>Ouvrir un terminal et entrez la commande suivante :</p>
    <pre><code class="language-html">sudo cat /etc/NetworkManager/system-connections/NOM_DU_RESEAU_WIFI | grep psk=</code></pre>
    <li id="tuto">Sous macOS :</li>
    <p>Ouvrir un terminal et entrez la commande suivante :</p>
    <pre><code class="language-html">security find-generic-password -wa NOM_DU_RESEAU_WIFI</code></pre>
    <br>
</div>
</div>
</body>
</html>