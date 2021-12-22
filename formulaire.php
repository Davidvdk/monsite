<!DOCTYPE html>
<html lang="fr">

<head>
    <title>David/Les formulaires</title>
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
        <h1>Formulaire</h1>
        <ul class="site">
            <li id="tuto">Créer un formulaire :</li>
            <pre><code class="language-html">&#x3C;form&#x3E; &#x3C;/form&#x3E;</code></pre>
            <p>C'est la balise principale du formulaire, elle permet d'en indiquer le début et la fin.</p>
            <p>Toute page HTML peut être enrichie de formulaires interactifs, notez qu'il faut obligatoirement mettre
                des balises de type block
                <strong>&#x3C;p&#x3E;&#x3C;/p&#x3E;:</strong> à l'intérieur de votre formulaire si vous souhaitez y
                faire figurer du texte.
                Nous arrivons cependant aux limites du langage HTML</p>
                <br>
            <li id="tuto">Les Attributs a connaitres :</li>
            <p><strong>method="post":</strong> c'est la méthode la plus utilisée pour les formulaires car elle permet
                d'envoyer un grand nombre d'informations.</p>
            <p><strong>methode="get":</strong> c'est une méthode en général assez peu adaptée car elle est limitée à 255
                caractères.</p>
            <p><strong>action="traitement":</strong> c'est une page php qui traite les données. (voir autre cours).</p>
            <pre><code class="language-html">&#x3C;form method=&#x22;post&#x22; action=&#x22;traitement.php&#x22;&#x3E;
   &#x3C;p&#x3E;Texte &#xE0; l&#x27;int&#xE9;rieur du formulaire&#x3C;/p&#x3E;
&#x3C;/form&#x3E;</code></pre>
            <pre><code class="language-html">&#x3C;form method=&#x22;get&#x22; action=&#x22;traitement.php&#x22;&#x3E;
   &#x3C;p&#x3E;Texte &#xE0; l&#x27;int&#xE9;rieur du formulaire&#x3C;/p&#x3E;
&#x3C;/form&#x3E;</code></pre>
            <br>
            <br>
            <li id="tuto">Insérer des zones de texte, des boutons et des cases à cocher dans votre page web :</li>
            <p>Il faut savoir qu'il y a deux zones de texte différentes<br>
            <br> 
            <strong>La zone de texte monoligne</strong> comme son nom l'indique, on ne peut y écrire qu'une seule ligne.
                Elle sert à saisir des textes courts, par exemple un pseudo.</p>
            <p><strong>La zone de texte multiligne</strong> cette zone de texte permet d'écrire une quantité importante de texte
                sur plusieurs lignes.</p>
            <p>Pour insérer une zone de texte dans une ligne, on va utiliser la balise
                <strong>&#x3C;input/&#x3E;</strong></p>
                <br>
            <li id="tuto">Créer une zone de texte à une ligne, on doit écrire :</li>
            <pre><code class="language-html">&#x3C;input type=&#x22;text&#x22; name=&#x22;pseudo&#x22;/&#x3E;</code></pre>
            <p>Essayons donc de créer un formulaire très basique avec notre champ de texte</p>
            <pre><code class="language-html">&#x3C;form method=&#x22;post&#x22; action=&#x22;traitement.php&#x22;&#x3E;
   &#x3C;p&#x3E;&#x3C;input type=&#x22;text&#x22; name=&#x22;pseudo&#x22;/&#x3E;&#x3C;/p&#x3E;
&#x3C;/form&#x3E;</code></pre>
            <p id="exemple">Résultat</p>
            <form method="post" action="traitement.php">
                <p><input type="text" name="pseudo" /></p>
            </form>
            <br>
            <li id="tuto">Les libellés :</li>
            <p>Cette zone de texte est bien jolie mais si votre visiteur tombe dessus, il ne sait pas ce
                qu'il doit
                écrire. C'est justement le rôle de la balise <strong>&#x3C;label&#x3E;</strong></p>
            <pre><code class="language-html">&#x3C;form method=&#x22;post&#x22; action=&#x22;traitement.php&#x22;&#x3E;
    &#x3C;p&#x3E;
        &#x3C;label&#x3E;Votre pseudo&#x3C;/label&#x3E; : &#x3C;input type=&#x22;text&#x22; name=&#x22;pseudo&#x22;/&#x3E;
    &#x3C;/p&#x3E;
&#x3C;/form&#x3E;</code></pre>
            <p id="exemple">Résultat</p>
            <form method="post" action="traitement.php">
                <p>
                    <label>Votre pseudo</label> : <input type="text" name="pseudo" />
                </p>
            </form>
            <br>
            <h3>Mais cela ne suffit pas. Il faut lier le label à la zone de texte.</h3>
            <div class="code">Pour ce faire, on doit donner un nom à la zone de texte, non pas avec l'attribut name mais
                avec
                l'attribut id (que l'on peut utiliser sur toutes les balises).<br>
                <br>
            </div>
            <br>
            <h3>Un <strong>name</strong> et un <strong>id</strong> sur le champ ? Cela ne va-t-il pas faire double
                emploi ?<br></h3>
            <div class="code">Pas du tout ! En fait, l'id est utilisé pour <strong>identifier</strong> l'élément HTML
                pour pouvoir y
                accéder et le manipuler.<br>
                Il est donc unique pour cet élément.<br>
                <br>
                Le <strong>name</strong>, lui réfère à la variable du formulaire que l’élément concerne.<br>
                Ici, il n’y a qu’un seul élément qui pourra référer à la variable pseudo, <strong>name</strong> et
                <strong>id</strong> auront donc la même valeur.<br>
                <br>
                Mais lorsque nous utiliserons des <strong>checkbox</strong> ou des <strong>radio</strong> , plusieurs
                éléments
                correspondront à la même variable.<br>
                Par exemple, la variable couleur avec un élément pour rouge, un pour bleu et un pour vert.<br>
                Ils auront donc le même <strong>name</strong> , mais pas le même <strong>id</strong>.<br>
                <br>
                Pour lier le label au champ, il faut lui donner un attribut <strong>for</strong> qui a la même valeur
                que l'<strong>id</strong>
                du champ…
            </div>
            <br>
            <h4>Exemple</h4>
            <pre><code class="language-html">&#x3C;form method=&#x22;post&#x22; action=&#x22;traitement.php&#x22;&#x3E;
    &#x3C;p&#x3E;
        &#x3C;label for=&#x22;pseudo&#x22;&#x3E;Votre pseudo&#x3C;/label&#x3E; : &#x3C;input type=&#x22;text&#x22; name=&#x22;pseudo&#x22; id=&#x22;pseudo&#x22;/&#x3E;
    &#x3C;/p&#x3E;
&#x3C;/form&#x3E;</code></pre>
            <h4>Résultat</h4>
            <form method="post" action="traitement.php">
                <p>
                    <label for="pseudo">Votre pseudo</label> : <input type="text" name="pseudo" id="pseudo" />
                </p>
            </form>
            <h4>Essayez de cliquer sur le texte « Votre pseudo » : vous allez voir que le curseur se place
                automatiquement dans la
                zone de texte correspondante.</h4>
            <br>
            <h3>Quelques attributs supplémentaires</h3>
            <div class="code">On peut ajouter un certain nombre d'autres attributs à la balise <strong>input</strong>
                pour
                personnaliser son fonctionnement :<br>
                <br>
                On peut agrandir le champ avec <strong>size</strong>.<br>
                <br>
                On peut limiter le nombre de caractères que l'on peut saisir avec <strong>maxlength</strong>.<br>
                <br>
                On peut pré-remplir le champ avec une valeur par défaut à l'aide de <strong>value</strong>.<br>
                <br>
                On peut donner une indication sur le contenu du champ avec <strong>placeholder</strong>.<br>
                <br>
                Cette indication disparaîtra dès que le visiteur aura cliqué à l'intérieur du champ.
            </div>
            <h4>Exemple</h4>
            <pre><code class="language-html">&#x3C;form method=&#x22;post&#x22; action=&#x22;traitement.php&#x22;&#x3E;
    &#x3C;p&#x3E;
        &#x3C;label for=&#x22;pseudo&#x22;&#x3E;Votre pseudo :&#x3C;/label&#x3E;
        &#x3C;input type=&#x22;text&#x22; name=&#x22;pseudo&#x22; id=&#x22;pseudo&#x22; placeholder=&#x22;Ex : Zozor&#x22; size=&#x22;30&#x22; maxlength=&#x22;10&#x22;/&#x3E;
    &#x3C;/p&#x3E;
&#x3C;/form&#x3E;</code></pre>
            <div class="code">Dans l'exemple suivant, la zone de texte contient une indication permettant de comprendre
                ce qu'il
                faut saisir ; le champ fait 30 caractères de long mais on ne peut écrire que 10 caractères maximum à
                l'intérieur<br>
                <br>
            </div>
            <h4>Résultat</h4>
            <form method="post" action="traitement.php">
                <p>
                    <label for="pseudo">Votre pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Ex : Zozor" size="30" maxlength="10" />
                </p>
            </form>
            <br>
            <h3>Zone de mot de passe</h3>
            <div class="code">Vous pouvez facilement faire en sorte que la zone de texte se comporte comme une « zone de
                mot de
                passe », c'est-à-dire une zone où on ne voit pas à l'écran les caractères saisis.<br>
                Pour créer ce type de zone de saisie, utilisez l'attribut <strong>type="password"</strong>.<br>
                <br>
                Je complète mon formulaire. Il demande maintenant au visiteur son pseudo et son mot de passe.
            </div>
            <pre><code class="language-html">&#x3C;form method=&#x22;post&#x22; action=&#x22;traitement.php&#x22;&#x3E;
   &#x3C;p&#x3E;
       &#x3C;label for=&#x22;pseudo&#x22;&#x3E;Votre pseudo :&#x3C;/label&#x3E;
       &#x3C;input type=&#x22;text&#x22; name=&#x22;pseudo&#x22; id=&#x22;pseudo&#x22;/&#x3E;

       &#x3C;br/&#x3E;
       &#x3C;label for=&#x22;pass&#x22;&#x3E;Votre mot de passe :&#x3C;/label&#x3E;
       &#x3C;input type=&#x22;password&#x22; name=&#x22;pass&#x22; id=&#x22;pass&#x22;/&#x3E;

   &#x3C;/p&#x3E;
&#x3C;/form&#x3E;</code></pre>
            <h4>Résultat</h4>
            <form method="post" action="traitement.php">
                <p>
                    <label for="pseudo">Votre pseudo :</label>
                    <input type="text" name="pseudo" id="pseudo" />

                    <br />
                    <label for="pass">Votre mot de passe :</label>
                    <input type="password" name="pass" id="pass" />

                </p>
            </form>
            <div class="code">Testez la zone de mot de passe : vous verrez que les caractères ne s'affichent pas à
                l'écran, comme
                sur la figure suivante.
            </div>
            <br>
            <h3>- Zone de texte multiligne</h3>
            <div class="code">Pour créer une zone de texte multiligne, on change de balise : nous allons utiliser
                <strong>&#x3C;textarea&#x3E; &#x3C;/textarea&#x3E;</strong><br>
                <br>
                Comme pour tout autre élément du formulaire, il faut lui donner un nom avec <strong>name</strong> et
                utiliser un
                <strong>label</strong> qui explique de quoi il s'agit.
            </div>
            <pre><code class="language-html">&#x3C;form method=&#x22;post&#x22; action=&#x22;traitement.php&#x22;&#x3E;
   &#x3C;p&#x3E;
       &#x3C;label for=&#x22;ameliorer&#x22;&#x3E;Comment pensez-vous que je pourrais am&#xE9;liorer mon site ?&#x3C;/label&#x3E;&#x3C;br/&#x3E;
       &#x3C;textarea name=&#x22;ameliorer&#x22; id=&#x22;ameliorer&#x22;&#x3E;&#x3C;/textarea&#x3E;
   &#x3C;/p&#x3E;
&#x3C;/form&#x3E;</code></pre>
            <h4>Résultat</h4>
            <form method="post" action="traitement.php">
                <p>
                    <label for="ameliorer">Comment pensez-vous que je pourrais améliorer mon site ?</label><br />
                    <textarea name="ameliorer" id="ameliorer"></textarea>
                </p>
            </form>
            <div class="code">Comme vous pouvez le constater, c'est un peu petit ! Heureusement, on peut modifier la
                taille du <strong>&#x3C;textarea&#x3E;</strong> de deux façons différentes<br>
                <br>
                En CSS : il suffit d'appliquer les propriétés CSS <strong>width</strong> et <strong>height</strong> au
                <strong>textarea.</strong><br>
                <br>
                Avec des attributs : on peut ajouter les attributs <strong>rows</strong> et <strong>cols</strong> à la
                balise
                <strong>textarea.</strong><br>
                <br>
                Le premier indique le nombre de lignes de texte qui peuvent être affichées simultanément, et le second
                le nombre de
                colonnes.
            </div>
            <br>
            <h3>Pourquoi ouvre-t-on la balise <strong>textarea</strong> pour la fermer juste après ?</h3>
            <div class="code">Vous pouvez pré-remplir le <strong>textarea</strong> avec une valeur par défaut.<br>
                <br>
                Dans ce cas, on n'utilise pas l'attributvalue: on écrit tout simplement le texte par défaut entre la
                balise ouvrante
                et la balise fermante !
            </div>
            <pre><code class="language-html">&#x3C;form method=&#x22;post&#x22; action=&#x22;traitement.php&#x22;&#x3E;
   &#x3C;p&#x3E;
       &#x3C;label for=&#x22;ameliorer&#x22;&#x3E;
       Comment pensez-vous que je puisse am&#xE9;liorer mon site ?
       &#x3C;/label&#x3E;
       &#x3C;br/&#x3E;

       &#x3C;textarea name=&#x22;ameliorer&#x22; id=&#x22;ameliorer&#x22; rows=&#x22;10&#x22; cols=&#x22;50&#x22;&#x3E;
       Am&#xE9;liorer ton site ?!
       Mais enfin ! Il est tellement g&#xE9;nialissime qu&#x27;il n&#x27;est pas n&#xE9;cessaire de l&#x27;am&#xE9;liorer !
       &#x3C;/textarea&#x3E;
   &#x3C;/p&#x3E;
&#x3C;/form&#x3E;</code></pre>
            <h4>Résultat</h4>
            <form method="post" action="traitement.php">
                <p>
                    <label for="ameliorer">
                        Comment pensez-vous que je puisse améliorer mon site ?
                    </label>
                    <br>

                    <textarea name="ameliorer" id="ameliorer" rows="10" cols="50">
       Améliorer ton site ?!
       Mais enfin ! Il est tellement génialissime qu'il n'est pas nécessaire de l'améliorer !
       </textarea>
                </p>
            </form>
            <br>
            <pre><code class="language-html">&#x3C;input type=&#x22;email&#x22;/&#x3E;            /* Une adresse e-mail*/
&#x3C;input type=&#x22;url&#x22;/&#x3E;              /* Un URL */
&#x3C;input type=&#x22;tel&#x22;/&#x3E;              /* Un num&#xE9;ro de tel */
&#x3C;input type=&#x22;number&#x22;/&#x3E;           /* Un nombre */
&#x3C;input type=&#x22;range&#x22;/&#x3E;            /* Un curseur */
&#x3C;input type=&#x22;color&#x22;/&#x3E;            /* Une couleur */
&#x3C;input type=&#x22;search&#x22;/&#x3E;           /* Une recherche */

&#x3C;input type=&#x22;date&#x22;/&#x3E;             /* pour la date (05/08/1985 par exemple) */
&#x3C;input type=&#x22;time&#x22;/&#x3E;             /* pour l&#x27;heure (13:37 par exemple) */
&#x3C;input type=&#x22;week&#x22;/&#x3E;             /* pour la semaine */
&#x3C;input type=&#x22;month&#x22;/&#x3E;            /* pour le mois */
&#x3C;input type=&#x22;datetime&#x22;/&#x3E;         /* pour la date et l&#x27;heure (avec gestion du d&#xE9;calage horaire) */
&#x3C;input type=&#x22;datetime-local&#x22;/&#x3E;   /* pour la date et l&#x27;heure (sans gestion du d&#xE9;calage horaire) */</code></pre>
        </ul>
</div>
</div>
<script src="JS/main.js"></script>
</body>

</html>