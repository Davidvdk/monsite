<!DOCTYPE html>
<html lang="fr">
<head>
    <title>nginx</title>
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
    <h1>NGINX</h1>
    
    <div class="post-info">
        <span class="thetime date updated"><i class="fa fa-calendar"></i> Mis à jour le 18 Novembre 2021</span>
    </div>
<p>NGINX Open Source ou NGINX est un logiciel libre de serveur Web ainsi qu'un proxy inverse écrit par Igor Sysoev.</p>
<div id="toc_container" class="toc_light_blue no_bullets">
    <p class="toc_title">Table des matières</p>
    <ul class="toc_list">
        <li><a href="#Installer_NGINX"><span class="toc_number toc_depth_1">1.</span> Installer NGINX</a></li>
        <li><a href="#CONFIGURATION_DE_NGINX"><span class="toc_number toc_depth_1">2.</span> Configuration de NGINX</a></li>
        <li><a href="#Creer_plusieurs_sites"><span class="toc_number toc_depth_1">3.</span> Créer plusieurs sites</a>
            <ul>
                <li><a href="#Emplacement_des_sites_internet"><span class="toc_number toc_depth_1">3.1.</span> Emplacement des sites internet</a></li>
                <li><a href="#créer_dossier_siteweb"><span class="toc_number toc_depth_1">3.2.</span> Créer dossier sites web</a></li>
                <li><a href="#Modifier_les_droits"><span class="toc_number toc_depth_1">3.3.</span> Modifier les droits</a></li>
                <li><a href="#Créer_fichier_index.html"><span class="toc_number toc_depth_1">3.4.</span> Créer fichier index.html</a></li>
            </ul>      
        </li>       
        <li><a href="#Configuration_passons_d'un_server_block"><span class="toc_number toc_depth_1">4.</span> Configuration d'un server block</a></li>
        <li><a href="#Fichier_HOSTS"><span class="toc_number toc_depth_1">5.</span> Fichier HOSTS</a></li>
        <li><a href="#Créer_des_liens_symboliques"><span class="toc_number toc_depth_1">6.</span> Créer des liens symboliques</a></li>
        <ul>
                <li><a href="#Redémarer_le_serveur"><span class="toc_number toc_depth_1">6.1.</span> Redémarer le serveur</a></li>
                <li><a href="#Ouvrir_le_site1_dans_Visuel_Studio_Code"><span class="toc_number toc_depth_1">6.2.</span> Ouvrir le site1 dans Visuel Studio Code</a></li>
            </ul>      
        </li>  
        <li><a href="#PHP"><span class="toc_number toc_depth_1">7.</span> PHP</a></li>
        <ul>
                <li><a href="#Installer_PHP"><span class="toc_number toc_depth_1">7.1.</span> Installer PHP</a></li>
                <li><a href="#Créer_le_site3"><span class="toc_number toc_depth_1">7.2.</span> Créer le site3</a></li>
                <li><a href="#Créer_un_server_block"><span class="toc_number toc_depth_1">7.3.</span> Créer un server block</a></li>
                <li><a href="#Créer_un_lien_symbolique"><span class="toc_number toc_depth_1">7.4.</span> Créer un lien symbolique</a></li>
                <li><a href="#Redemarer_leserveur"><span class="toc_number toc_depth_1">7.5.</span> Redémarer le serveur</a></li>
            </ul>      
        </li>  
    </ul>
    </div>
    <br>
    <hr>
    <h2 class="h2soustitre">
        <span id="Installer_NGINX">1. Installer NGINX :</span>
    </h2>
    <br>
    <pre><code class="language-html">sudo apt install nginx</code></pre>
    <pre><code class="language-html">sudo service nginx start</code></pre>
    <p>Vous pouvez tester dés à present en ouvrant votre navigateurs web préféré et entrez l’adresse ip de votre serveur ou localhost dans la barre d’adresse :</p>
    <br>
    <figure>
        <img src="images/linux/nginx.png" alt="image" />
    </figure>
</ul>
<hr>
<h2 class="h2soustitre">
    <span id="CONFIGURATION_DE_NGINX">2. Configuration de NGINX :</span>
</h2>
<ul class="site">
    <li>Pour la configuration tout se passe dans le dossier /etc/nginx :</li>
    <pre><code class="language-html">cd /etc/nginx</code></pre>
    <pre><code class="language-html">ls -l</code></pre>
    <pre><code class="language-html">total 64
drwxr-xr-x 2 root root 4096 mai 25 19:10 conf.d
-rw-r--r-- 1 root root 1077 fév  4  2019 fastcgi.conf
-rw-r--r-- 1 root root 1007 fév  4  2019 fastcgi_params
-rw-r--r-- 1 root root 2837 fév  4  2019 koi-utf
-rw-r--r-- 1 root root 2223 fév  4  2019 koi-win
-rw-r--r-- 1 root root 3957 fév  4  2019 mime.types
drwxr-xr-x 2 root root 4096 mai 25 19:10 modules-available
drwxr-xr-x 2 root root 4096 sep 22 17:35 modules-enabled
-rw-r--r-- 1 root root 1490 fév  4  2019 nginx.conf
-rw-r--r-- 1 root root  180 fév  4  2019 proxy_params
-rw-r--r-- 1 root root  636 fév  4  2019 scgi_params
drwxr-xr-x 2 root root 4096 sep 24 04:14 sites-available
drwxr-xr-x 2 root root 4096 sep 22 17:35 sites-enabled
drwxr-xr-x 2 root root 4096 sep 22 17:35 snippets
-rw-r--r-- 1 root root  664 fév  4  2019 uwsgi_params
-rw-r--r-- 1 root root 3071 fév  4  2019 win-utf</code></pre>
<br>
    <strong>nginx.conf</strong> est le fichier de configuration principale<br>
    <strong>conf.d</strong> dossier contenant des fichiers de configuration additionels
    <br>
    <strong>sites-available</strong> dossier contenant la liste des fichiers de configuration des sites
    <br>
    <strong>sites-enable</strong> dossier contenant la liste des fichiers de configuration des sites actifs
    <br>
</ul>
<br>
<hr>
<h2 class="h2soustitre">
    <span id="Creer_plusieurs_sites">3. Créer plusieurs sites :</span>
</h2>
<ul class="site">
    <li id="tuto1">
    <span id="Emplacement_des_sites_internet">Emplacement des sites internet (/var/www/) :</span>
    </li>
    <pre><code class="language-html">cd /var/www/</code></pre>
    <br>
    <li id="tuto1">
    <span id="créer_dossier_siteweb">Nous allons créer notre dossier où l’on va mettre notre ou nos sites web. Puis une page html simpliste :</span>
    </li>
    <pre><code class="language-html">sudo mkdir /var/www/site1</code></pre>
    <pre><code class="language-html">sudo mkdir /var/www/site2</code></pre>
    <br>
    <li id="tuto1">
    <span id="Modifier_les_droits">Maintenant nous allons modifier les droits des dossiers (site1,site2) car le propriétaire c'est root :</span>
    </li>
    <pre><code class="language-html">sudo chown david:david site1 site2</code></pre>
    Normalement si vous faite un <strong>ls -l</strong> vous devriez avoir:
    <pre><code class="language-html">ls -l
total 12
drwxr-xr-x 2 root  root  4096 sep 24 04:16 html
drwxr-xr-x 2 david david 4096 sep 22 19:16 site1
drwxr-xr-x 2 david david 4096 sep 22 19:07 site2</code></pre>
<br>
    <li id="tuto1">
    <span id="Créer_fichier_index.html">Nous allons créer un fichier index.html pour le site1/site2 :</span>
    </li>
    <pre><code class="language-html">touch /var/www/site1/index.html
touch /var/www/site2/index.html</code></pre>
    <br>
    <li id="tuto1">Maintenant nous aller ecrire une page html simpliste pour le site1 faite pareil pour site 2</li>
    <pre><code class="language-html">vim /var/www/site1/index.html</code></pre>
    Sur la fenetre qui s'ouvre taper i puis Bienvenue sur le site 1 puis echap puis taper :x pour fermer est enristrer le fichier
</ul>
<br>
<hr>
<h2 class="h2soustitre">
    <span id="Configuration_passons_d'un_server_block">4. Configuration d'un server block :</span>
</h2>
<ul class="site">
    <li id="tuto1">Créer un server block pour notre <strong>site1</strong> d’abord en copiant le server block par défaut de <strong>nginx</strong>. :</li>
    <pre><code class="language-html">sudo cp /etc/nginx/sites-available/default  /etc/nginx/sites-available/site1</code></pre>
    <br>
    <li id="tuto1">Maintenant ouvrons le fichier <strong>site1</strong> :</li>
    <pre><code class="language-html">sudo vim /etc/nginx/sites-available/site1</code></pre>
    Notre fichier devrait ressembler à ca :
    <pre><code class="language-html"># site1

server {
listen 80;
listen [::]:80;

root /var/www/site1;
index index.html index.htm index.nginx-debian.html;

server_name site1.local;

location / {
# First attempt to serve request as file, then
# as directory, then fall back to displaying a 404.
try_files $uri $uri/ =404;
}

}</code></pre>
    Sauvegarder votre ficher <strong>site1</strong> (esc puis :x) et refaite la même chose chose pour <strong>site2</strong>.<br><br>
    <br><strong>Pour faire simple faites juste une copie de site1 vers site 2</strong>
    <pre><code class="language-html">sudo cp /etc/nginx/sites-available/site1  /etc/nginx/sites-available/site2</code></pre>
    <br>
    <br>
    Maintenant ouvrons le fichier <strong>site2</strong>:
    <pre><code class="language-html">sudo vim /etc/nginx/sites-available/site2</code></pre>
    <br>
    Notre fichier devrait ressembler à ca :
    <pre><code class="language-html"># site2

server {
listen 80;
listen [::]:80;

root /var/www/site2;
index index.html index.htm index.nginx-debian.html;

server_name site2.local;

location / {
# First attempt to serve request as file, then
# as directory, then fall back to displaying a 404.
try_files $uri $uri/ =404;
}

}</code></pre>
Sauvegarder votre ficher <strong>site2</strong> (esc puis :x).<br>
    <br>
    <hr>
    <h2 class="h2soustitre">
        <span id="Fichier_HOSTS">5. Fichier HOSTS :</span>
    </h2>
    <br>
    <p>Maintenant que tous est presque fini nous allons éditer notre fichier hosts et ajouter les correspondances adresse IP et noms de domaines :</p>
    <li id="tuto1">LINUX</li>
    <pre><code class="language-html">sudo vim /etc/hosts</code></pre><br>
    <li id="tuto1">WINDOWS</li>
    <pre><code class="language-html">C:\Windows\System32\drivers\etc\hosts</code></pre>
    <pre><code class="language-html">127.0.0.1       site1.local
127.0.0.1       site2.local</code></pre>
    <br>
    <hr>
    <h2 class="h2soustitre">
        <span id="Créer_des_liens_symboliques">6. Créer des liens symboliques :</span>
    </h2>
    <br>
    <p>L’étape finale de notre configuration consiste à activer les blocs server que nous avons crée.<p>
    <p>Donc nous allons créer des liens symboliques vers le répertoire sites-enable que nginx lit toujours au démarrage. :</p>
    <pre><code class="language-html">sudo ln -s /etc/nginx/sites-available/site1 /etc/nginx/sites-enabled/</code></pre>
    <pre><code class="language-html">sudo ln -s /etc/nginx/sites-available/site2 /etc/nginx/sites-enabled/</code></pre>
    <br>
    <li id="tuto1">Vérifions maintenant que tout se passe bien  avec la commande :</li>
    <pre><code class="language-html">sudo nginx -t</code></pre>
    Si tout se passe bien nous devrons avoir quelque chose qui ressemble à ca :
    <pre><code class="language-html">nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful</code></pre>
    <br>
    <li id="tuto1">
    <span id="Redémarer_le_serveur">Redémarer le serveur :</span>
    </li>
    <pre><code class="language-html">sudo service nginx reload</code></pre>
    <br>
    <br>
    <li id="tuto1">Maintenant que tout est fini lançons les tests :</li>
    <pre><code class="language-html">curl site1.local</code></pre>
    Notre fichier devrait ressembler à ca :
    <pre><code class="language-html">&#x3C;html&#x3E;&#x3C;body&#x3E;Bienvenue sur le site 1&#x3C;/body&#x3E;&#x3C;/html&#x3E;</code></pre>
    <p>Si problème faire sudo service nginx start</p>
    <li id="tuto1">
    <span id="Ouvrir_le_site1_dans_Visuel_Studio_Code">Ouvrir le site 1 dans Visuel studio code :</span>
    </li>
    <pre><code class="language-html">cd  /var/www/site1</code></pre>
    puis
    <pre><code class="language-html">code .</code></pre>
    <p>Voila  maintenant  nous  savons héberger plusieurs sites dans un même serveur avec Nginx. Il n’y pas de limite pour les servers blocks vous pouvez en créer autant que vous voulez mais dépendant de la capacité de votre serveur bien sûr.</p>
    </ul>
    <br>
    <hr>
    <h2 class="h2soustitre">
        <span id="PHP">6. PHP :</span>
    </h2>
    <ul class="site">
    <li id="tuto1">
    <span id="Installer_PHP">Installer PHP :</span>
    </li>
    <pre><code class="language-html">sudo apt install php7.4-fpm</code></pre>
    <pre><code class="language-html">sudo apt install php7.4-cli</code></pre>
    <br>
    <li id="tuto1">
    <span id="Créer_le_site3">Créer le site3 pour un site en PHP :</span>
    </li>
    <pre><code class="language-html">sudo mkdir /var/www/site3</code></pre>
    <br>
    <li id="tuto1">Maintenant nous allons modifier les droits, car le propriétaire c'est root : </li>
    <pre><code class="language-html">cd /var/www</code></pre>
    <pre><code class="language-html">sudo chown david:david site3</code></pre>
    <br>
    <li id="tuto1">Nous allons créer un fichier index.php pour le site3 :</li>
    <pre><code class="language-html">touch /var/www/site3/index.php</code></pre>
    <br>
    <li id="tuto1">Maintenant nous aller ecrire une page php simpliste pour le site3</li>
    <pre><code class="language-html">vim /var/www/site3/index.php</code></pre>
    Sur la fenetre qui s'ouvre taper i puis <pre><code class="language-php">&#x3C;?php phpinfo(); ?&#x3E;</code></pre> puis echap puis taper :x pour fermer est enristrer le fichier
    <br>
    <br>
    <br>
    <li id="tuto1">
    <span id="Créer_un_server_block">Créer un server block pour notre <strong>site3</strong> :</span>
    </li>
    <pre><code class="language-html">sudo vim /etc/nginx/sites-available/site3</code></pre>
    <pre><code class="language-html"># Site3

server {
	listen 80;
	listen [::]:80;

	root /var/www/site3;

	# Add index.php to the list if you are using PHP
	index index.html index.php index.nginx-debian.html;

	server_name site3.local;

        
location ~ \.php$ {
            include snippets/fastcgi-php.conf;
            fastcgi_pass unix:/run/php/php7.4-fpm.sock;      
    }

}</code></pre>
    <br>
    <li id="tuto1">
    <span id="Créer_un_lien_symbolique">Créer un lien symbolique :</span>
    </li>
    <pre><code class="language-html">sudo ln -s /etc/nginx/sites-available/site3 /etc/nginx/sites-enabled/</code></pre>
    <br>
    <li id="tuto1">Vérifions maintenant que tout se passe bien  avec la commande :</li>
    <pre><code class="language-html">sudo nginx -t</code></pre>
    Si tout se passe bien nous devrons avoir quelque chose qui ressemble à ca :
    <pre><code class="language-html">nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful</code></pre>
    <br>
    <li id="tuto1">Modifier le fichier <strong>HOST</strong> sur Windows</li>
    <p>Maintenant que tous est presque fini nous allons éditer notre fichier hosts et ajouter les correspondances adresse IP et noms de domaines :</p>
    <pre><code class="language-html">C:\Windows\System32\drivers\etc\hosts</code></pre>
    <pre><code class="language-html">127.0.0.1       site1.local
127.0.0.1       site2.local
127.0.0.1       site3.local</code></pre>
    <br>
    <li id="tuto1">
    <span id="Redemarer_leserveur">Redemarer le serveur :</span>
    </li>
    <pre><code class="language-html">sudo service nginx reload</code></pre>
    <pre><code class="language-html">sudo service php7.4-fpm restart</code></pre>
    <br>

    </ul>
    </div>
</div>
<script src="JS/main.js"></script>
</body>
</html>