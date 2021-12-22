<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Réseau windows 10</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home1.css"/>
    <link rel="stylesheet" href="CSS/nav1.css"/>
    <link href="CSS/prism.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="JS/prism.js"></script>
</head>
<header>
<?php include("mobilemenu.php"); ?>
</header>
<body>
<button class="go-top-btn">
            <img src="images/backtop1.png" alt="arrow up">
        </button>
<div class="menu1"> 
<div class="articles">
        
    <h1>Windows 10 : La Découverte du réseau ne fonctionne pas</h1>
    <div class="post-info">
        <span class="thetime date updated"><i class="fa fa-calendar"></i>&nbsp;23 octobre 2021</span>
    </div>
<p>Dans cet article, nous allons abordé les problèmes de découverte réseau sur Windows 10.<br>
Vous possédez plusieurs ordinateurs partagés en réseau et même parfois un NAS.<br>
La découverte du réseau consiste, lorsque vous cliquez sur le réseau à afficher les ordinateurs qui font partie de votre réseau.
Mais dans certains cas, la découverte du réseau ne fonctionne pas, des ordinateurs peuvent manquer ou l'affichage est complètement blanc.
Si vous tentez d'accéder directement à l'ordinateur \\nomordinateur, la connexion se fait bien et vous pouvez visualiser le partages des ressources.</p>
<p>Cet article vous aide à résoudre les problèmes de découverte réseau sur Windows 10.</p> 
    <div id="toc_container" class="toc_light_blue no_bullets">
    <p class="toc_title">Table des matières</p>
    <ul class="toc_list">
        <li><a href="#Résoudre_les_problèmes_de_la_découverte_du_réseau"><span class="toc_number toc_depth_1">1.</span> Résoudre les problèmes de découverte du réseau</a></li>
        <li><a href="#cas_des_vieux_NAS_ou_versions_de_Windows"><span class="toc_number toc_depth_1">2.</span> Comment appliquer le partage SMB dans Windows 10 Pro ?</a></li>
    </ul>
</div>
  
<h2 class="h2soustitre">
    <span id="Résoudre_les_problèmes_de_la_découverte_du_réseau">1. Résoudre les problèmes de la découverte du réseau</span>
</h2>
<p>Dans un premier temps, il faut s'assurer que la découverte du réseau est bien activée sur tous vos appareils et ordinateurs.<br>
Pour cela, il faut se rendre dans les paramètres de partage avancés.</p>
<p>Sur Windows 10, vous pouvez faire une recherche avec le mot <strong>"partage"</strong> voir photo 1, sur les autres versions de Windows, rendez-vous dans le Panneau de configuration > Centre réseau et partage.</p>
<p>Vérifiez que la découverte réseau est bien activée (<strong>Photo 2</strong>).<br>
Pour rappel, il existe deux profils réseau : public et privée.</p>
<figure>
    <img img width="500" height="350" src="images/reseau/01.png" alt="image" />
    <figcaption><strong>Photo 1</strong></figcaption>
</figure>
<figure>
    <img img width="500" height="350" src="images/reseau/02.png" alt="image" />
    <figcaption><strong>Photo 2</strong></figcaption>
</figure>
<p>Théoriquement lorsque vous tentez de lancer la découverte réseau et que celle-ci n'est pas activée, Windows affiche des messages.<br>
Un message doit vous indiquer que la découverte du réseau n'est pas activée voir <strong>photo 3</strong></p>
<p>Un bandeau jaune apparaît et en cliquant dessus, vous pouvez activer celle-ci (<strong>Photo 4</strong>).
<figure>
    <img img width="500" height="350" src="images/reseau/03.png" alt="image" />
    <figcaption><strong>Photo 3</strong></figcaption>
</figure>
<figure>
    <img img width="500" height="350" src="images/reseau/04.png" alt="image" />
    <figcaption><strong>Photo 4</strong></figcaption>
</figure><br>
<br>
<br>
<h2 class="h2soustitre">
    <span id="cas_des_vieux_NAS_ou_versions_de_Windows">Comment appliquer le partage SMB dans Windows 10 Pro ?</span>
</h2>
<p>Les versions de Windows ou vieux NAS peuvent utiliser de vieilles versions de SMB pour le partage réseau.<br>
Ces versions ne sont plus supportées par Windows 10 mais peuvent être réactivées.</p>
<p>Cliquez dans le champ de <strong>recherche</strong> de Windows et tapez <strong>Fonctionnalité</strong>. Cliquez sur la première occurrence qui s'affiche : <strong>Activer ou désactiver des fonctionnalités Windows (voir photo 5).</strong></p>
<figure>
    <img img width="500" height="350" src="images/reseau/06.png" alt="image" />
    <figcaption><strong>Photo 6</strong></figcaption>
</figure>
<p>Une petite fenêtre s'affiche. Faites défiler son contenu jusqu'à l'option Support de partage de fichiers SMB 1.0/CIFS.<br> 
Cliquez sur le petit bouton + à gauche de cette option pour faire apparaître les éléments concernés.</p>
<p>Cochez les trois cases : Client SMB 1.0/CIFS, Serveur SMB 1.0/CIFS et Suppression automatique de SMB 1.0/CIFS (voir Photo7).</p>
<figure>
    <img img width="500" height="350" src="images/reseau/07.png" alt="image" />
    <figcaption><strong>Photo 7</strong></figcaption>
</figure>

<br>
<br>
</div>
</div>
<script src="JS/main.js"></script>
    </body>
</html>