<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Composer 2</title>
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
<div class="menu1"> 
<div class="articles">
        <button class="go-top-btn">
            <img src="images/backtop1.png" alt="arrow up">
        </button>
    <h1>Composer 2.1.9</h1>
    <div class="post-info">
        <span class="thetime date updated"><i class="fa fa-calendar"></i>&nbsp;10 Novembre 2021</span>
    </div>
    <p>Composer est un logiciel gestionnaire de dépendances libre écrit en PHP. Il permet à ses utilisateurs de déclarer et d'installer les bibliothèques dont le projet principal a besoin.</p> 
    <div id="toc_container" class="toc_light_blue no_bullets">
    <p class="toc_title">Table des matières</p>
    <ul class="toc_list">
        <li><a href="#Installer_composer_2.1.9"><span class="toc_number toc_depth_1">1.</span> Installer composer 2.1.9</a></li>
        <li><a href="#Voir_la_version"><span class="toc_number toc_depth_1">2.</span> Voir la version</a></li>
        <li><a href="#Supprimer_les_fichiers_installations"><span class="toc_number toc_depth_1">3.</span> Supprimer les fichiers installations</a></li>
    </ul>
</div>
<h2 class="h2soustitre">
    <span id="Installer_composer_2.1.9">1. Installer composer 2.1.9</span>
</h2>
<p>Si un composer est installer supprimer le :</p>
<pre><code class="language-html">rm /usr/bin/composer</code></pre>
<p>mettre yes</p>
<p>puis taper cd puis</p>
<pre><code class="language-html">php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"</code></pre>
<pre><code class="language-html">php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"</code></pre>
<pre><code class="language-html">php composer-setup.php --install-dir=/usr/bin/ --filename=composer</code></pre>
<pre><code class="language-html">sudo php composer-setup.php --install-dir=/usr/bin/ --filename=composer</code></pre>
<h2 class="h2soustitre">
    <span id="Voir_la_version">2. Voir la version</span>
</h2>
<br>
<pre><code class="language-html">composer -V</code></pre>
<p>normalement il vous affiche (version 2.1.9)</p>
<h2 class="h2soustitre">
    <span id="Supprimer_les_fichiers_installations">3. Supprimer les fichiers installations</span>
</h2>
<br>
<pre><code class="language-html">rm composer-setup-php</code></pre>
<pre><code class="language-html">cd /var/www/site1</code></pre>
<pre><code class="language-html">ls -la</code></pre>
<pre><code class="language-html">rm -rf*</code></pre>
<p>Si il reste des fichiers</p>
<pre><code class="language-html">rm -rf .*</code></pre>
<p>Puis</p>
<pre><code class="language-html">composer create-project symfony/website-skeleton .</code></pre>
<br>
<br>
</div>
</div>
<script src="JS/main.js"></script>
    </body>
</html>