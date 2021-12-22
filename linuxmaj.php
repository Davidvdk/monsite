<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Linux MAJ</title>
    <meta charset="utf-8"/>
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
<h1>Mettre à jour Linux</h1>
<ul class="site">
<li id="tuto">Mettre à jour la liste des paquets :</li>
    <pre><code class="language-html">sudo apt update</code></pre>
    <br>
    <li id="tuto">Affichez les paquets pour les quels une mise à jour est disponible :</li>
    <pre><code class="language-html">apt list --upgradable</code></pre>
    <br>
    <li id="tuto">Mettez à jour les paquets installés sur le système avec au choix :</li>
    <pre><code class="language-html">sudo apt upgrade</code></pre>
    upgade : les paquets seront remplacés par des versions plus récentes, mais sans qu’aucun autre paquet ne soit ajouté ou supprimé.<br>
    Par exemple, une nouvelle version de Firefox sera installée avec apt upgrade.
    <br>
    <br>
    <br>
    <li id="tuto">Mettez à jour les paquets installés sur le système avec au choix :</li>
    <pre><code class="language-html">sudo apt full-upgrade</code></pre>
    full-upgrade : même chose que apt upgrade, mais supprime des paquets si cela est nécessaire pour installer les nouvelles versions des paquets.
    <br>
    <br>
    <br>
    <li id="tuto">Supprimez tous les paquets devenus obsolètes et qui ne sont plus nécessaires :</li>
    <pre><code class="language-html">sudo apt autoremove</code></pre>
    <br>
    <li id="tuto">Supprimez le cache des paquets qui ne peuvent plus être téléchargés :</li>
    <pre><code class="language-html">sudo apt autoclean</code></pre>
    <br>
    Et voilà, votre Ubuntu est à jour ! Tous les paquets du système ont été mis à jour. 😉
</ul>
</div>
</div>
</body>
</html>