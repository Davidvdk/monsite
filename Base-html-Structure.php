<!DOCTYPE html>
<html lang="fr">

<head>
    <title>nginx</title>
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
    <h1>Structure d'une page internet</h1>
    <ul class="site">
    <li id="tuto">Page HTML</li>
        <pre><code class="language-html">&#x3C;!DOCTYPE html&#x3E;
&#x3C;html lang=&#x22;fr&#x22;&#x3E;
    &#x3C;head&#x3E;
        &#x3C;title&#x3E;Titre de la page&#x3C;/title&#x3E;
        &#x3C;meta charset=&#x22;utf-8&#x22;&#x3E;
    &#x3C;/head&#x3E;
&#x3C;body&#x3E;

&#x3C;/body&#x3E;
&#x3C;/html&#x3E;</code></pre>
<br>
<li id="tuto">Format mobile</li>
    <pre><code class="language-html">&#x3C;!DOCTYPE html&#x3E;
&#x3C;html lang=&#x22;fr&#x22;&#x3E;
    &#x3C;head&#x3E;
        &#x3C;title&#x3E;Titre de la page&#x3C;/title&#x3E;
        &#x3C;meta charset=&#x22;utf-8&#x22;&#x3E;
        &#x3C;meta name=&#x22;viewport&#x22; content=&#x22;width=device-width, initial-scale=1.0&#x22;&#x3E;
    &#x3C;/head&#x3E;
&#x3C;body&#x3E;

&#x3C;/body&#x3E;
&#x3C;/html&#x3E;</code></pre>
<br>
<li id="tuto">Structure d'une page</li>
    <pre><code class="language-html">&#x3C;header&#x3E;  &#x3C;/header&#x3E;     //en-t&#xEA;te
&#x3C;nav&#x3E;     &#x3C;/nav&#x3E;        //menu
&#x3C;section&#x3E; &#x3C;/section&#x3E;    //section de page
&#x3C;article&#x3E; &#x3C;/article&#x3E;    //article
&#x3C;aside&#x3E;   &#x3C;/aside&#x3E;      //informations compl&#xE9;mentaire
&#x3C;footer&#x3E;  &#x3C;/footer&#x3E;     //pied de page</code></pre>
    <br>
    <p><img src="images/structurepagehtml.png" alt="image" /></p>
    </ul>
    </div>
</div>
<script src="JS/main.js"></script>
</body>
</html>