<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mysql-Ubuntu</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/home1.css"/>
    <link rel="stylesheet" href="CSS/nav1.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="CSS/prism.css" rel="stylesheet" />
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
<h1>MYSQL</h1>
    <div class="post-info">
        <span class="thetime date updated"><i class="fa fa-calendar"></i> Mis à jour le 21 Novembre 2021</span>
    </div>
<p>MySQL est un système de gestion de bases de données relationnelles.</p>
    <figure>
    <img img="" width="150" height="75" src="images/mysql.png" alt="image">
    </figure>
    <div id="toc_container" class="toc_light_blue no_bullets">
    <p class="toc_title">Table des matières</p>
    <ul class="toc_list">
        <li><a href="#Installation_de_MySQL"><span class="toc_number toc_depth_1">1.</span> Installation de MySQL</a></li>
        <li><a href="#Démarrer_le_serveur_mysql"><span class="toc_number toc_depth_1">2.</span> Démarrer le serveur mysql</a></li>
        <li><a href="#Se_connecter_à_mysql"><span class="toc_number toc_depth_1">3.</span> Se connecter à mysql</a></li>
        <ul>
                <li><a href="#Voir_toute_les_bases_de_données"><span class="toc_number toc_depth_1">3.1.</span> Voir toute les bases de données sur le serveur</a></li>
                <li><a href="#Fermer_mysql"><span class="toc_number toc_depth_1">3.1.</span> Fermer mysql</a></li>
            </ul>      
        </li>
        <li><a href="#Créer_un_utilisateur"><span class="toc_number toc_depth_1">4.</span> Créer un utilisateur</a></li>  
    </ul>
    </div>
    <h2 class="h2soustitre">
        <span id="Installation_de_MySQL">1. Installation de MySQL :</span>
    </h2>
    <br>
    <pre><code class="language-html">sudo apt install mysql-server</code></pre>
    <br>
    <h2 class="h2soustitre">
        <span id="Démarrer_le_serveur_mysql">2. Démarrer le serveur mysql :</span>
    </h2>
    <br>
    <pre><code class="language-html">sudo service mysql start</code></pre>
    <pre><code class="language-html">sudo service mysql start
 * Starting MySQL database server mysqld                             [ OK ]</code></pre>
    <br>
    <h2 class="h2soustitre">
        <span id="Se_connecter_à_mysql">3. Se connecter à mysql :</span>
    </h2>
    <br>
    <pre><code class="language-html">sudo mysql</code></pre>
    <pre><code class="language-html">sudo mysql
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 13
Server version: 8.0.26-0ubuntu0.20.04.3 (Ubuntu)

Copyright (c) 2000, 2021, Oracle and/or its affiliates.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql></code></pre>
    <br>
    <ul class="site">
        <li id="tuto1">
            <span id="Voir_toute_les_bases_de_données">Voir toute les bases de données sur le serveur :</span>
        </li>
    </ul>   
    <pre><code class="language-html">show databases;</code></pre>
    <pre><code class="language-html">mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| sys                |
+--------------------+
4 rows in set (0.01 sec)

mysql></code></pre>
<br>
    <ul class="site">  
        <li id="tuto1">
            <span id="Fermer_mysql">Fermer mysql :</span>
        </li>
    </ul>   
    <pre><code class="language-html">exit; ou CTRL+d</code></pre>
    <br>
    <h2 class="h2soustitre">
        <span id="Créer_un_utilisateur">4. Créer un utilisateur :</span>
    </h2>
    <img src="images/construction/concept-en-construction.jpg" alt="image" />

</div>    
</div>
<script src="JS/main.js"></script>
</body>
</html>