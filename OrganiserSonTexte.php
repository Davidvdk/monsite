<!DOCTYPE html>
<html lang="fr">

<head>
    <title>David/OrganiserSonTexte</title>
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
<body>
<div class="menu1">
    <div class="articles">
        <button class="go-top-btn">
            <img src="images/backtop1.png" alt="arrow up">
        </button>
    <h1>Organiser Le texte</h1>
    <ul class="site">
    <pre><code class="language-html">&#x3C;p&#x3E; &#x3C;/p&#x3E;         un paragraphe

&#x3C;br&#x3E;             retour a la ligne

&#x3C;hr&#x3E;             ligne horizontal

&#x26;nbsp;           pour avoir une espace ins&#xE9;cable

&#x26;ensp;           pour deux espaces

&#x26;emsp;           pour quatre espaces</code></pre>
<br>
    <li id="tuto">Mise en valeur :</li>
    <p>Au sein de vos paragraphes, certains mots sont parfois plus importants que d'autres et vousaimeriez les faire ressortir.</p>
    <pre><code class="language-html">&#x3C;em&#x3E; &#x3C;/em&#x3E;            Texte italique

&#x3C;strong&#x3E; &#x3C;/strong&#x3E;    Mise en gras</code></pre>
    <br>
    <li id="tuto">Titre / Sous titre :</li>
</ul>    
    <pre><code class="language-html">&#x3C;h1&#x3E;&#x3C;/h1&#x3E;   &#x3C;h2&#x3E;&#x3C;/h2&#x3E;   &#x3C;h3&#x3E;&#x3C;/h3&#x3E;    ect ...

&#x3C;title&#x3E; &#x3C;/title&#x3E;      Titre de la page</code></pre>
    <br>
    <pre><code class="language-html">&#x3C;h1&#x3E;Titre niveau 1&#x3C;/h1&#x3E;
&#x3C;h2&#x3E;Titre niveau 2&#x3C;/h2&#x3E;     
&#x3C;h3&#x3E;Titre niveau 3&#x3C;/h3&#x3E;     
&#x3C;h4&#x3E;Titre niveau 4&#x3C;/h4&#x3E;     
&#x3C;h5&#x3E;Titre niveau 5&#x3C;/h5&#x3E;     
&#x3C;h6&#x3E;Titre niveau 6&#x3C;/h6&#x3E;</code></pre>
    <p>Résultat</p>
     <div class="code">
        <h1>Titre niveau 1</h1>
        <h2>Titre niveau 2</h2>
        <h3>Titre niveau 3</h3>
        <h4>Titre niveau 4</h4>
        <h5>Titre niveau 5</h5>
        <h6>Titre niveau 6</h6>
        </div>
</div>
<script src="JS/main.js"></script>
</body>

</html>