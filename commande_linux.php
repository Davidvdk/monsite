<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Commande Linux</title>
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
<h1>Commande Linux</h1>
<ul class="site">
    <li id="tuto1">Pour vous loguer en root ?</li>
    <pre><code class="language-html">su</code></pre>
    <br>
    <li id="tuto1">Dans quel répertoire suis-je actuellement ?</li>
    <pre><code class="language-html">pwd</code></pre>
    <br>
    <li id="tuto1">Revenir répertoire defaut :</li>
    <pre><code class="language-html">cd</code></pre>
    <br>
    <li id="tuto1">Créer un dossier :</li>
    <pre><code class="language-html">mkdir nomrépertoire</code></pre>
    <br>
    <li id="tuto1">renommer le dossier toto :</li>
    <pre><code class="language-html">mv toto toto1</code></pre>
    <br>
    <li id="tuto1">Suppression d'un dossier non vide :</li>
    <pre><code class="language-html">rm -fr /chemin/repertoire</code></pre>
    <br>
    <li id="tuto1">Suppression d'un dossier :</li>
    <pre><code class="language-html">rm -r /chemin/dossier1</code></pre>
    <p>Pour supprimer un dossier vide, on utilise plutôt l'option -d 😉</p>
    <br>
    <br>
    <li id="tuto1">Information dossier :</li>
    <pre><code class="language-html">ls</code></pre>
    <br>
    <li id="tuto1">Information dossier date, taille, utilsateur, grp ect.. :</li>
    <pre><code class="language-html">ls -l</code></pre>
    <br>
    <li id="tuto1">Lister un dossier :</li>
    <pre><code class="language-html">ls -l dossier</code></pre>
    <br>
    <li id="tuto1">Créer un fichier (toto) :</li>
    <pre><code class="language-html">touch toto</code></pre>
    <br>
    <li id="tuto1">Suppression d'un fichier (toto) :</li>
    <pre><code class="language-html">rm toto</code></pre>
    <br>
    <li id="tuto1">Copier un fichier toto en toto1 :</li>
    <pre><code class="language-html">cp toto toto1</code></pre>
    <br>
    <li id="tuto1">Lire un fichier :</li>
    <pre><code class="language-html">cat nomfichier</code></pre>
    <br>
    <li id="tuto1">Lire un fichier avec numérotation :</li>
    <pre><code class="language-html">cat -n nomfichier</code></pre>
    <br>
    <li id="tuto1">Lire un fichier Pour passer d’une page à l’autre, tapez surla touche ESPACE :</li>
    <pre><code class="language-html">more nomfichier</code></pre>
    <br>
    <li id="tuto1">Modifier un fichier :</li>
    <pre><code class="language-html">nano nomfichier</code></pre>
    <br>
    <li id="tuto1">Déplacer toto qui se trouve dans test1 dans test2 :</li>
    <pre><code class="language-html">mv test1/toto test2</code></pre>
    <br>
    <li id="tuto1">Utilisation des capteurs de température sous Linux :</li>
    <pre><code class="language-html">sensor</code></pre>
    <br>
    <li id="tuto1">Contrôler les ressources utilisées par les processus :</li>
    <pre><code class="language-html">top</code></pre>
    <br>
    <li id="tuto1">Revenir au debut d'une commande :</li>
    <pre><code class="language-html">CTRL A</code></pre>
    <br>
</ul>
</div>
</div>
<script src="JS/main.js"></script>
</body>
</html>