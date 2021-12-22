<!DOCTYPE html>
<html lang="fr">

<head>
    <title>David/Tableaux</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/css-tableau-normal.css" />
    <link rel="stylesheet" href="CSS/home1.css"/>
    <link rel="stylesheet" href="CSS/nav1.css"/>
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
    <h1>Les Tableaux</h1>
    <ul class="site">
        <li id="tuto">Un tableau simple :</li>
        <p>La première balise à connaître <strong>&#x3C;table&#x3E; &#x3C;/table&#x3E;</strong> indique le début et la
            fin d'un tableau. Cette balise est de type bloc, il faut donc la placer en dehors d'un paragraphe.</p>
        <pre><code class="language-html">&#x3C;p&#x3E;Ceci est un paragraphe avant le tableau.&#x3C;/p&#x3E;
&#x3C;table&#x3E;
   &#x3C;!-- Ici, on &#xE9;crira le contenu du tableau --&#x3E;
&#x3C;/table&#x3E;</code></pre>
        <br>
        <li id="tuto">Qu'est-ce qu'on écrit à l'intérieur du tableau ?</li>
        <br>
        <div class="code"><strong>&#x3C;tr&#x3E; &#x3C;/tr&#x3E;:</strong> indique le début et la fin d'une ligne du
            tableau.<br>
            <br>
            <strong>&#x3C;th&#x3E; &#x3C;/th&#x3E;:</strong> indique la ligne d'en-tête sur cette photo (nom, age,
            pays).<br>
            <br>
            <strong>&#x3C;td&#x3E; &#x3C;/td&#x3E;:</strong> indique le début et la fin du contenu d'une cellule.
        </div>
        <br>
        <p><img src="images/tableau.png" alt="image" /><br></p><br>
        <p id="exemple">Exemple :</p>
        <pre><code class="language-html">&#x3C;table&#x3E;
    &#x3C;tr&#x3E;
        &#x3C;th&#x3E;nom&#x3C;/th&#x3E;
        &#x3C;th&#x3E;age&#x3C;/th&#x3E;
        &#x3C;th&#x3E;pays&#x3C;/th&#x3E;
    &#x3C;/tr&#x3E;
    &#x3C;tr&#x3E;
        &#x3C;td&#x3E;Anne&#x3C;/td&#x3E;
        &#x3C;td&#x3E;27 ans&#x3C;/td&#x3E;
        &#x3C;td&#x3E;France&#x3C;/td&#x3E;
    &#x3C;/tr&#x3E;
    &#x3C;tr&#x3E;
        &#x3C;td&#x3E;Carmen&#x3C;/td&#x3E;
        &#x3C;td&#x3E;33 ans&#x3C;/td&#x3E;
        &#x3C;td&#x3E;Espagne&#x3C;/td&#x3E;
    &#x3C;/tr&#x3E;
    &#x3C;tr&#x3E;
        &#x3C;td&#x3E;Michelle&#x3C;/td&#x3E;
        &#x3C;td&#x3E;26 ans&#x3C;/td&#x3E;
        &#x3C;td&#x3E;Etats-Unis&#x3C;/td&#x3E;
    &#x3C;/tr&#x3E;
&#x3C;/table&#x3E;</code></pre>
        <p id="exemple">Résultat</p>
        <img src="images/tableau1.png" alt="image" />
        <p><strong>C'est un tableau ça ? pff il n'y a même pas de bordures !</strong></p>
        <br>
        <li id="tuto">Ajouter dans le fichier CSS :</li>
        <br>
        <pre><code class="language-css">table
{                                       /*collapse: les bordures seront collées entre elles */
    border-collapse: collapse;          /*separate: les bordures seront dissociées (valeur par défaut) */
}
td, th
{
    border: 1px solid black;            /* Mettre une bordure sur les td ET les th */
}</code></pre>
        <br>
        <table>
            <tr>
                <th>nom</th>
                <th>age</th>
                <th>pays</th>
            </tr>
            <tr>
                <td>Anne</td>
                <td>27 ans</td>
                <td>France</td>
            </tr>
            <tr>
                <td>Carmen</td>
                <td>33 ans</td>
                <td>Espagne</td>
            </tr>
            <tr>
                <td>Michelle</td>
                <td>26 ans</td>
                <td>Etats-Unis</td>
            </tr>
        </table>
        <p>Voilà qui est mieux !</p><br>
        <li id="tuto">Titre du tableau :</li>
        <p>Normalement, tout tableau doit avoir un titre.</p>
        <p>Le titre permet de renseigner rapidement le visiteur sur le contenu du tableau.</p>
        <p><strong>&#x3C;caption&#x3E;:</strong> Cette balise se place tout au début du tableau, juste avant l'en-tête.</p>
        <p id="exemple">Code HTML</p>
        <pre><code class="language-html">&#x3C;table&#x3E;
    &#x3C;caption&#x3E;Passagers du vol 377&#x3C;/caption&#x3E;
    &#x3C;tr&#x3E;
        &#x3C;th&#x3E;nom&#x3C;/th&#x3E;
        &#x3C;th&#x3E;age&#x3C;/th&#x3E;
        &#x3C;th&#x3E;pays&#x3C;/th&#x3E;
    &#x3C;/tr&#x3E;
    &#x3C;tr&#x3E;
        &#x3C;td&#x3E;Anne&#x3C;/td&#x3E;
        &#x3C;td&#x3E;27 ans&#x3C;/td&#x3E;
        &#x3C;td&#x3E;France&#x3C;/td&#x3E;
    &#x3C;/tr&#x3E;
    &#x3C;tr&#x3E;
        &#x3C;td&#x3E;Carmen&#x3C;/td&#x3E;
        &#x3C;td&#x3E;33 ans&#x3C;/td&#x3E;
        &#x3C;td&#x3E;Espagne&#x3C;/td&#x3E;
    &#x3C;/tr&#x3E;
    &#x3C;tr&#x3E;
        &#x3C;td&#x3E;Michelle&#x3C;/td&#x3E;
        &#x3C;td&#x3E;26 ans&#x3C;/td&#x3E;
        &#x3C;td&#x3E;Etats-Unis&#x3C;/td&#x3E;
    &#x3C;/tr&#x3E;
&#x3C;/table&#x3E;</code></pre>
        <p id="exemple">Résultat</p>
        <table>
            <caption>Passagers du vol 377</caption>
            <tr>
                <th>nom</th>
                <th>age</th>
                <th>pays</th>
            </tr>
            <tr>
                <td>Anne</td>
                <td>27 ans</td>
                <td>France</td>
            </tr>
            <tr>
                <td>Carmen</td>
                <td>33 ans</td>
                <td>Espagne</td>
            </tr>
            <tr>
                <td>Michelle</td>
                <td>26 ans</td>
                <td>Etats-Unis</td>
            </tr>
        </table>
        <br>
    </ul>
</div>
</div>
<script src="JS/main.js"></script>
</body>

</html>