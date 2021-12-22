<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Swap</title>
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
<h1>Modifier la taille du swap sur Ubuntu</h1>
    <p>Petit rappel, le swap est un espace sur le disque dur que le système d'exploitation peut utiliser lorsque la RAM est pleine.<br> 
    Le fait d'avoir cette espace permet d'éviter les « fameux » freeze de l'ordinateur lorsque la RAM est pleine...</p>
    <div id="toc_container" class="toc_light_blue no_bullets">
        <p class="toc_title">Table des matières</p>
        <ul class="toc_list">
            <li><a href="#désactiver_le_swap"><span class="toc_number toc_depth_1">1.</span> Désactiver le swap</a></li>
                <ul>
                    <li><a href="#on_active_le_module_SSL"><span class="toc_number toc_depth_1">1.2.</span> On active le module SSL pour Apache</a></li>
                    <li><a href="#on_relance_le_serveur_Web"><span class="toc_number toc_depth_1">1.3.</span> Relancer le serveur Web</a></li>
                </ul>      
             </li>
        </ul>
    </div>
    <ul class="site">
        <li id="tuto1">
            <span id="désactiver_le_swap">Avant de modifier la taille, il faut désactiver le swap :</span>
        </li>
    </ul> 
    <pre><code class="language-html">sudo swapoff -a</code></pre>
    <br>
    
    <li>Ensuite, on passe au redimensionnement. Pour cela on va générer un fichier /swapfile qui va être utiliser par le swap.<br> 
    Dans cet exemple, on va allouer un espace de 8 giga.<br> 
    Il faut indiquer à la commande dd le nombre de bloc souhaité et leur taille.<br> 
    Soit ici 8 bloc de 1 giga chacun :</li>
    <pre><code class="language-html">sudo dd if=/dev/zero of=/swapfile bs=1G count=8</code></pre>
    <br>
    <ol>
    <li>On obtient le retour ci-dessous. Attention, le temps de création du fichier peut être assez long :</li>
    <br>
    <pre><code class="language-html">8+0 enregistrements lus<br>
    8+0 enregistrements écrits<br>
    8589934592 octets (8,6 GB, 8,0 GiB) copiés, 125,493 s, 68,4 MB/s</code></pre>
    <br>
    <br>
    <li>Ensuite, on dit au swap d'utiliser le fichier crée précédemment :</li>
    <pre><code class="language-html">sudo mkswap /swapfile</code></pre>
    <br>
    <li>Et finalement, il ne reste plus qu'à activer le swap :</li>
    <pre><code class="language-html">sudo swapon /swapfile</code></pre>
    <br>
    <li>Pour vérifier que tout est bon, vous pouvez utilisez la commande ci-dessous : </li>
    <pre><code class="language-html">sudo swapon --show</code></pre>
    <br>
    <li>La commande affiche le résultat ci-dessous si tout est OK :</li>
    <pre><code class="language-html">NAME      TYPE SIZE USED PRIO<br>
    /swapfile file   8G   0B   -2</code></pre>
</ol>
</div>
</div>
</body>
</html>