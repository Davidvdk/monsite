<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Symfony</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home1.css"/>
    <link rel="stylesheet" href="CSS/nav1.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="CSS/prism.css" rel="stylesheet" />
    <script src="JS/prism.js"></script>
    <link rel="icon" href="data:,">
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
    <h1>Symfony</h1>
    <div class="post-info">
        <span class="thetime date updated"><i class="fa fa-calendar"></i> Mis à jour le 21 Novembre 2021</span>
    </div>
<p>Symfony est un ensemble de composants PHP ainsi qu'un framework MVC libre écrit en PHP.<br> 
Il fournit des fonctionnalités modulables et adaptables qui permettent de faciliter et d’accélérer le développement d'un site web.</p>
<figure>
    <img img="" width="150" height="75" src="images/symfony.png" alt="image">
    </figure>
    <div id="toc_container" class="toc_light_blue no_bullets">
    <p class="toc_title">Table des matières</p>
    <ul class="toc_list">
        <li><a href="#Créer_un_dossier_site1"><span class="toc_number toc_depth_1">1.</span> Créer un dossier site 1</a></li>
        <li><a href="#Vérifier_votre_version_de_Composer"><span class="toc_number toc_depth_1">2.</span> Vérifier votre version de Composer</a></li>
        <li><a href="#Installer_Symfony"><span class="toc_number toc_depth_1">3.</span> Installer Symfony</a></li>
        <li><a href="#Exécuter_Symfony"><span class="toc_number toc_depth_1">4.</span> Exécuter Symfony</a></li>
        <li><a href="#Vérification_des_vulnérabilités_de_sécurité"><span class="toc_number toc_depth_1">5.</span> Vérification des vulnérabilités de sécurité</a></li>
    </ul>
    </div>
    <br>
    <hr>
    <h2 class="h2soustitre">
        <span id="Créer_un_dossier_site1">1. Créer un dossier site 1 :</span>
    </h2>
    <p>Dans le tutorial NGINX nous avons deja créer le site 1 <a href="https://david-tuto.be/nginx.php#Creer_plusieurs_sites" target="_blank">ICI</a></p>
    <p>Maintenant il faut supprimer la page index.html :</p>
    <pre><code class="language-html">sudo rm /var/www/site1/index.html</code></pre>
    <br>
    <h2 class="h2soustitre">
        <span id="Vérifier_votre_version_de_Composer">2. Vérifier votre version de Composer :</span>
    </h2>
    <br>
    <pre><code class="language-html">composer -V</code></pre>
    <pre><code class="language-html">Composer version 2.1.9 2021-10-05 09:47:38</code></pre>
    <p>Si vous avez la version 1 il faut suivre le tuto <a href="https://david-tuto.be/composer2.php" target="_blank">ICI</a></p>
    <br>
    <h2 class="h2soustitre">
        <span id="Installer_Symfony">3. Installer Symfony :</span>
    </h2>
    <br>
    <pre><code class="language-html">cd /var/www/site1</code></pre>
    <pre><code class="language-html">composer create-project symfony/website-skeleton .</code></pre>
    <pre><code class="language-html">wget https://get.symfony.com/cli/installer -O - | bash</code></pre>
    <pre><code class="language-html">export PATH="$HOME/.symfony/bin:$PATH"</code></pre>
    <p>Vérifier dans le repertoire site1 que Symfony est installer :</p>
    <pre><code class="language-html">cd /var/www/site1</code></pre>
    <pre><code class="language-html">total 456
drwxr-xr-x 12 david david   4096 Nov 21 02:09 ./
drwxr-xr-x  8 root  root    4096 Nov 21 02:31 ../
-rw-r--r--  1 david david   1522 Nov 21 02:09 .env
-rw-r--r--  1 david david    215 Nov 21 02:09 .env.test
-rw-r--r--  1 david david    375 Nov 21 02:09 .gitignore
drwxr-xr-x  2 david david   4096 Nov 21 02:09 bin/
-rw-r--r--  1 david david   2927 Nov 21 02:09 composer.json
-rw-r--r--  1 david david 368936 Nov 21 02:09 composer.lock
drwxr-xr-x  4 david david   4096 Nov 21 02:09 config/
-rw-r--r--  1 david david    247 Nov 21 02:09 docker-compose.override.yml
-rw-r--r--  1 david david    717 Nov 21 02:09 docker-compose.yml
drwxr-xr-x  2 david david   4096 Nov 21 02:09 migrations/
-rw-r--r--  1 david david   1367 Nov 21 02:09 phpunit.xml.dist
drwxr-xr-x  2 david david   4096 Nov 21 02:09 public/
drwxr-xr-x  5 david david   4096 Nov 21 02:09 src/
-rw-r--r--  1 david david  14929 Nov 21 02:09 symfony.lock
drwxr-xr-x  2 david david   4096 Nov 21 02:09 templates/
drwxr-xr-x  2 david david   4096 Nov 21 02:09 tests/
drwxr-xr-x  2 david david   4096 Nov 21 02:09 translations/
drwxrwxrwx  4 david david   4096 Nov 21 02:09 var/
drwxr-xr-x 22 david david   4096 Nov 21 02:09 vendor/</code></pre>
    <br>
    <h2 class="h2soustitre">
        <span id="Exécuter_Symfony">4. Exécuter Symfony :</span>
    </h2>
    <br>
    <pre><code class="language-html">cd /var/www/site1</code></pre>
    <pre><code class="language-html">symfony server:start</code></pre>
    <p><strong>OU</strong>
    <pre><code class="language-html">php -S 127.0.0.1:8000 -t public</code></pre>
    <p>Ouvrir une page internet <a href="http://localhost:8000/" target="_blank">localhost:8000</a> ou <a href="http://127.0.0.1:8000" target="_blank">http://127.0.0.1:8000</a></p>
    <figure>
    <img img width="800" height="550" src="images/symfony1.png" alt="image" />
    </figure>   
    <h2 class="h2soustitre">
        <span id="Vérification_des_vulnérabilités_de_sécurité">5. Vérification des vulnérabilités de sécurité :</span>
    </h2>
    <p>Le symfonybinaire créé lorsque vous installez Symfony CLI fournit une commande pour vérifier si les dépendances de votre projet contiennent une vulnérabilité de sécurité connue :</p>
    <pre><code class="language-html">symfony check:security</code></pre>
    <p>Une bonne pratique de sécurité consiste à exécuter cette commande régulièrement pour pouvoir mettre à jour ou remplacer les dépendances compromises dès que possible.<br> 
    Le contrôle de sécurité se fait localement en récupérant la base de données publique des avis de sécurité PHP , ainsi votre composer.lockfichier n'est pas envoyé sur le réseau.</p>
    <br>
    </div>
</div>
<script src="JS/main.js"></script>
</body>
</html>