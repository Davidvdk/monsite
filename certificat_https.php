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
<h1>Let's Encrypt</h1>
    <div class="post-info">
        <span class="thetime date updated"><i class="fa fa-calendar"></i> Mis à jour le 21 Novembre 2021</span>
    </div>
<p>Depuis quelques années maintenant, il est possible de bénéficier d'un certificat SSL gratuitement par l'intermédiaire de Let's Encrypt. 
Cette autorité de certification publie des certificats reconnus par les navigateurs. 
Les certificats délivrés sont valables pour une durée de 90 jours renouvelables. 
Sa configuration ne pourra se faire qu'avec un domaine et un DNS actif qui garantit un minimum la véracité du contenu (une méthode existe pour produire un certificat local si nécessaire).</p> 
<p>Il faudra donc remplacer le nom <strong>exemple.com</strong> dans les lignes ci-dessous par le nom de votre domaine.</p>
    <figure>
        <img img="" width="250" height="125" src="images/logo-lets-encrypt-free-ssl.png" alt="image">
    </figure>
    <div id="toc_container" class="toc_light_blue no_bullets">
        <p class="toc_title">Table des matières</p>
        <ul class="toc_list">
            <li><a href="#Installer_un_certificat_Let's_Encrypt"><span class="toc_number toc_depth_1">1.</span> Installer un certificat Let's Encrypt</a></li>
                <ul>
                    <li><a href="#on_active_le_module_SSL"><span class="toc_number toc_depth_1">1.2.</span> On active le module SSL pour Apache</a></li>
                    <li><a href="#on_relance_le_serveur_Web"><span class="toc_number toc_depth_1">1.3.</span> Relancer le serveur Web</a></li>
                </ul>      
             </li>
        </ul>
    </div>
    <h2 class="h2soustitre">
        <span id="Installer_un_certificat_Let's_Encrypt">1. Installer un certificat Let's Encrypt :</span>
    </h2>
    <p>Télécharger le client cerbot-auto de Let's Encrypt et de le sauvegarder dans le répertoire /usr/bin du serveur :</p>
    <pre><code class="language-html">sudo wget https://dl.eff.org/certbot- auto -0 /usr/sbin/certbot-auto</code></pre>
    <pre><code class="language-html">sudo chmod a+x /usr/sbin/certbot-auto</code></pre>
    <p>Récupérer un certificat de Let's Encrypt. Après vérification de l'authenticité, le certificat est alors envoyé :</p>
    <pre><code class="language-html">sudo certbot-auto certonly --standalone -d exemple.com -d www.exemple.com</code></pre>
    <p>À la suite de quoi on vous demande une adresse email qui sera utilisée pour l'envoi d'alertes concernant le certificat. 
    C'est ce script qui va créer et envoyer le fameux certificat SSL dans le répertoire vHost d'Apache. 
    Si toutes les étapes se sont bien déroulées, on peut vérifier la présence des certificats :</p>
    <pre><code class="language-html">ls /etc/letsencrypt/live/exemple.com 
cert.pem 
chain.pem 
fullchain.pem 
privkey.pem</code></pre>
    <p>Pour la suite, il est nécessaire d'adapter le fichier vHost pour qu'il prenne en compte ce nouveau certificat en ajoutant quelques lignes.</p>
    <pre><code class="language-html">cd /etc/apache2/sites-enabled/</code></pre>
    <pre><code class="language-html">sudo vim exemple.com.conf</code></pre>
    <p>Puis on ajoute les lignes suivantes et on enregistre :</p>
    <pre><code class="language-html">SSLEngine on
SSLCertificateFile
/etc/letsencrypt/live/exemple.com/cert.pem SSLCertificateKeyFile
/etc/letsencrypt/live/exemple.com/privkey- pem
SSLCertificateChainFile
/etc/letsencrypt/live/exemple.com/chain. pem</code></pre>
<br>
    <ul class="site">
        <li id="tuto1">
            <span id="on_active_le_module_SSL">Maintenant, on active le module SSL pour Apache :</span>
        </li>
    </ul> 
    <pre><code class="language-html">sudo a2enmod ssl</code></pre>
    <br>
    <ul class="site">
        <li id="tuto1">
            <span id="on_relance_le_serveur_Web">On relance le serveur Web :</span>
        </li>
    </ul> 
    <pre><code class="language-html">sudo Systeemat1 roload apache2</code></pre>
    <p>Pour finir, on ajoute une ligne au fichier crontab pour lancer le renouvellement automatique du certificat avant son échéance :</p>
    <pre><code class="language-html">0 2 * * * sudo /usr/sbin/certbot-auto -q renew</code></pre>
    <p>Ici, cette ligne va déclencher une demande de certificat tous les jours à 2h du matin, Attention, on ne recevra pas pour autant un nouveau certificat tous les jours, mais uniquement quand il arrive à expiration.</p>
    </ul>
    </div>
</div>
<script src="JS/main.js"></script>
</body>
</html>