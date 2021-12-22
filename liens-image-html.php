<!DOCTYPE html>
<html lang="fr">

<head>
    <title>David/liens</title>
    <meta charset="utf-8" />
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
    <h1>Les liens</h1>
    <ul class="site">
    <li id="tuto1">Ouvre un autre site :</li>
    <pre><code class="language-html">&#x3C;a href=&#x22;https://www.deepl.com/translator&#x22;&#x3E;nom&#x3C;/a&#x3E;</code></pre>
    <br>
    <li id="tuto1">Ouvre un autre onglet :</li>
    <pre><code class="language-html">&#x3C;a href=&#x22;https://www.deepl.com/translator&#x22; target=&#x22;_blank&#x22;&#x3E;message&#x3C;/a&#x3E;</code></pre>
    <br>
    <li id="tuto1">Indique une Info bulle :</li>
    <pre><code class="language-html">&#x3C;a href=&#x22;http:..&#x22; title=&#x22;info bulle&#x22;&#x3E;message&#x3C;/a&#x3E;</code></pre>
    <br>
    <li id="tuto1">e-mail :</li>
    <pre><code class="language-html">&#x3C;p&#x3E;&#x3C;a href=&#x22;mailto:email&#x22; &#x3E;Envoyez-moi un email&#x3C;/a&#x3E;&#x3C;/p&#x3E;</code></pre>
    <br>
    <hr>
    <h2 class="h2soustitre">Les images</h2>
    <br>
        <div class="code">JPG pour les photos<br>
            PNG pour les logos ou illustration<br>
            GIF pour les animations
        </div>
    <br>
    <li id="tuto1">Afficher une image :</li>
    <pre><code class="language-html">&#x3C;img src=&#x22;images/image.jpg&#x22; alt=&#x22;image&#x22; /&#x3E;</code></pre>
    <p>Toujours mettre un l'interieur d'un paragraphe (sauf dans une figure)</p>
    <p id="exemple">Placer mon image dans un paragraphe ou dans une figure ?</p>
    <p>Si elle n'apporte aucune information (c'est juste une illustration pour décorer) : placez l'image dans un
     paragraphe. Si elle apporte une information : placez l'image dans une figure.</p>
    <hr>
    <h2 class="h2soustitre">Les figures</h2>
    <p>Ce sont des éléments qui viennent enrichir le texte pour compléter les informations de la page. les figures peuvent être de différents types : images ; codes source ; citations ; etc.</p>
    <p id="exemple">Exemple :</p>
    <pre><code class="language-html">&#x3C;figure&#x3E;
    &#x3C;img src=&#x22;images/figure.png&#x22; alt=&#x22;image&#x22; /&#x3E;
&#x3C;/figure&#x3E;</code></pre>
        <pre><code class="language-html">&#x3C;figure&#x3E;
    &#x3C;img src=&#x22;images/figure.png&#x22; alt=&#x22;image&#x22; /&#x3E;
    &#x3C;figcaption&#x3E;UNE FIGURE&#x3C;/figcaption&#x3E;
&#x3C;/figure&#x3E;</code></pre>
        <p id="exemple">Résultat</p>
        <figure>
            <img src="images/figure.png" alt="image" />
        </figure>
        <figure>
            <img src="images/figure.png" alt="image" />
            <figcaption>UNE FIGURE</figcaption>
        </figure><br>
        <br>
        <div class="code">La balise figcaption = libellé (commentaire)<br></div>
        <br>
        <li id="tuto1">une figure peut très bien comporter plusieurs images :</li>
        <pre><code class="language-html">&#x3C;figure&#x3E;
    &#x3C;img src=&#x22;images/1.png&#x22; alt=&#x22;commentaire&#x22; /&#x3E;
    &#x3C;img src=&#x22;images/2.png&#x22; alt=&#x22;blablabla&#x22; /&#x3E;
    &#x3C;img src=&#x22;images/3.png&#x22; alt=&#x22;lol&#x22; /&#x3E;
&#x3C;figcaption&#x3E;commentaire&#x3C;/figcaption&#x3E;</code></pre>
</ul>
</div>
</div>
<script src="JS/main.js"></script>
</body>

</html>