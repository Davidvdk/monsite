<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Vim</title>
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
<h1>VIM</h1>
    <div class="post-info">
        <span class="thetime date updated"><i class="fa fa-calendar"></i> Mis à jour le 21 Novembre 2021</span>
    </div>
<ul class="site">
    <p>Vim est un éditeur de texte pour le terminal sous GNU/Linux. Il a une stabilité exemplaire et ne cesse d'être amélioré. Malgré son austérité, c'est un outil très puissant</p>
    <div id="toc_container" class="toc_light_blue no_bullets">
        <p class="toc_title">Table des matières</p>
        <ul class="toc_list">
            <li><a href="#Comment_savoir_si_Vim_est_installer"><span class="toc_number toc_depth_1">1.</span> Comment savoir si Vim est installer</a></li>
            <li><a href="#Installer_VIM"><span class="toc_number toc_depth_1">2.</span> Installer VIM</a></li>
            <li><a href="#Vimtutor_le_programme_qui_vous_apprend"><span class="toc_number toc_depth_1">3.</span> Vimtutor : le programme qui vous apprend à utiliser Vim !</a></li>
            <li><a href="#Utiliser_vim"><span class="toc_number toc_depth_1">4.</span> Utiliser vim</a></li>
            <li><a href="#Les_Commandes_vim"><span class="toc_number toc_depth_1">5.</span> Les Commandes</a></li>
                <ul>
                    <li><a href="#Le_déplacement"><span class="toc_number toc_depth_1">5.1.</span> Le déplacement</a></li>
                    <li><a href="#activer_la_souris"><span class="toc_number toc_depth_1">5.2.</span> Activer la souris</a></li>
                    <li><a href="#Insertion"><span class="toc_number toc_depth_1">5.3.</span> Insertion</a></li>
                    <li><a href="#Enregistrer_et_quitter"><span class="toc_number toc_depth_1">5.4.</span> Enregistrer et quitter</a></li>
                    <li><a href="#Copier_couper_coller"><span class="toc_number toc_depth_1">5.5.</span> Copier / couper / coller</a></li>
                    <li><a href="#Annuler_refaire_une_action"><span class="toc_number toc_depth_1">5.6.</span> Annuler / refaire une action</a></li>
                    <li><a href="#Rechercher_vim"><span class="toc_number toc_depth_1">5.7.</span> Rechercher</a></li>
                    <li><a href="#Afficher_masquer_les_numéros_de_lignes"><span class="toc_number toc_depth_1">5.8.</span> Afficher / masquer les numéros de lignes</a></li>
                    <li><a href="#Remplacer_du_texte"><span class="toc_number toc_depth_1">5.9.</span> Remplacer du texte</a></li>
                    <li><a href="#Coller_du_texte"><span class="toc_number toc_depth_1">6.0.</span> Coller du texte en respectant l’indentation</a></li>
                    <li><a href="#Recharger_un_fichier"><span class="toc_number toc_depth_1">6.1.</span> Recharger un fichier</a></li>
                    <li><a href="#Divers"><span class="toc_number toc_depth_1">6.1.</span> Divers</a></li>
                </ul>      
            </li>
        </ul>
    </div>
</ul>    
    <br>
    <h2 class="h2soustitre">
        <span id="Comment_savoir_si_Vim_est_installer">1. Comment savoir si Vim est installer :</span>
    </h2>
    <br>
    <pre><code class="language-html">apt list vim</code></pre>
    <pre><code class="language-html">Listing... Done
vim/focal-updates,focal-security,now 2:8.1.2269-1ubuntu5.3 amd64 [installed,automatic]
N: There is 1 additional version. Please use the '-a' switch to see it</code></pre>
    <br>
    <h2 class="h2soustitre">
        <span id="Installer_VIM">2. Installer VIM :</span>
    </h2>
<br>
    <pre><code class="language-html">sudo apt-get install vim</code></pre>
    <br>
    <h2 class="h2soustitre">
        <span id="Vimtutor_le_programme_qui_vous_apprend">3. Vimtutor : le programme qui vous apprend à utiliser Vim !</span>
    </h2>
    <p>Pour les nouveaux utilisateurs, Vim intègre un véritable petit tutoriel !<br>
    Ce programme peut être lancé en tapant :</p>
    <pre><code class="language-html">vimtutor fr</code></pre>
    <br>
    <h2 class="h2soustitre">
        <span id="Utiliser_vim">4. Utiliser vim :</span>
    </h2>
    <br>
    <p>Pour éditer un fichier texte existant ou créer un nouveau fichier texte, il suffit de taper :</p>
    <pre><code class="language-html">vim nom_du_fichier</code></pre>
    <p>Si le fichier n'existe pas, il sera créé.</p>
    <p id="exemple">Exemple créer un fichier toto</p>
    <pre><code class="language-html">vim toto</code></pre>
    <p>Nous souhaitons commencer par entrer du texte (quoi de plus normal pour un éditeur de texte 😄)</p>
    <div class="code"><strong>i</strong> : insérer du texte</div>
    <p>Vous basculez alors en mode insertion ; à présent, il vous est possible de taper du texte</p>
    <br>
    <figure>
    <img src="images/vim/1.png" alt="image" />
    <figcaption>-- INSERT -- en bas de l'écran, qui vous confirme que vous êtes en mode insertion..</figcaption>
    </figure><br>
    <br>
    <p>Écrivez quelques lignes comme moi puis appuyez sur la touche <strong>ECHAP</strong> pour revenir au mode interactif (le mode normal dans lequel vous vous trouviez au départ).<br>
    Le message <strong>-- INSERT --</strong> disparaît alors et vous revoilà en mode interactif.<p>
    <br>
    <h2 class="h2soustitre">
        <span id="Les_Commandes_vim">5. Les Commandes :</span>
    </h2>
    <br>
    <ul class="site">
        <li id="tuto1">
            <span id="Le_déplacement">Le déplacement :</span>
        </li>
        <br>
    <div class="code"><strong>h :</strong> aller à gauche<br>
    <strong>j :</strong> aller en bas<br>
    <strong>k :</strong> aller en haut<br>
    <strong>l :</strong> aller à droite</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="activer_la_souris">Pour activer la souris rien de plus simple :</span>
        </li>
    <p>On fait d'abord une copie du fichier vimrc en vimrc_old</p>
    <pre><code class="language-html">sudo cp /etc/vim/vimrc vimrc_old</code></pre>
    <br>
    <p>Puis on édite le fichier <strong>vimrc</strong></p>
    <pre><code class="language-html">sudo vim /etc/vim/vimrc</code></pre>
    <br>
    <p>Chercher la ligne</p>
    <pre><code class="language-html">"set mouse=a            " Enable mouse usage (all modes)</code></pre>
    <p>Modfier la en :</p>
    <pre><code class="language-html">set mouse=r            " Enable mouse usage (all modes)</code></pre>
    <p>(appyer sur <strong>i</strong> puis supprimer juste le <strong>"</strong> devant set mouse=a puis <strong>echap</strong> puis <strong>:x</strong> pour sauvegarder le fichier) </p>
    <p>Voià votre souris est maintenant activé 😉</p>
    <br>
        <li id="tuto1">
            <span id="Insertion">Insertion :</span>
        </li>
    <p>Vim démarre en mode commande lorsqu’on ouvre un fichier. Pour passer du mode commande au mode insertion :</p>
    <div class="code"> <strong>a</strong> (append un caractère après le curseur)<br>
    <strong>A</strong> (pareil en fin de ligne)<br>
    <strong>i</strong> (insertion)<br>
    <strong>I</strong> (insertion en début de ligne)</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="Enregistrer_et_quitter">Enregistrer et quitter :</span>
        </li>
    <br>
    <div class="code"><strong>:w</strong> &nbsp;(enregistrer le fichier en cours d'édition sans quitter)<br>
    <strong>:w</strong> &nbsp;/chemin/vers/le/fichier (enregistrer sous )<br>
    <strong>:x</strong> &nbsp;(enregistrer et quiter)<br>
    <strong>:wq</strong> (enregistrer et quiter)<br>
    <strong>:q</strong> &nbsp;(quitter)</div>
    <br>
    <p><strong>Le !</strong> permet de forcer certaines commandes :</p>
    <br>
    <div class="code"><strong>:q!</strong> (quitter en ignorant les modifications)</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="Copier_couper_coller">Copier / couper / coller :</span>
        </li>
    <br>
    <div class="code"><strong>Y</strong> &nbsp;&nbsp;&nbsp;&nbsp; (copie une ligne)<br>
    <strong>10Y</strong> &nbsp;&nbsp;&nbsp;(copie 10 lignes)<br>
    <strong>dd</strong> &nbsp;&nbsp;&nbsp;&nbsp;(coupe ou supprime une ligne)<br>
    <strong>d10</strong> &nbsp;&nbsp; (coupe ou supprime 10 lignes)<br>
    <strong>dw</strong> &nbsp;&nbsp;&nbsp; (coupe ou supprime un mot)<br>
    <strong>v</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(pour sélectionner du texte en mode visuel)<br>
    <strong>Ctrl+v</strong> (pour sélectionner un bloc de texte en mode visuel)<br>
    <strong>p</strong> &nbsp;&nbsp;&nbsp;&nbsp; (coller)</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="Annuler_refaire_une_action">Annuler / refaire une action :</span>
        </li>
    <br>
    <div class="code"><strong>u</strong> (annuler)<br>
    <strong>.</strong> (refaire)</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="Rechercher_vim">Rechercher :</span>
        </li>
    <br>
    <div class="code"><strong>/test</strong> (recherche le texte test)<br>
    <strong>?test</strong> (recherche le texte test en allant vers le haut)<br>
    <strong>n</strong> &nbsp;&nbsp;&nbsp; (occurence suivante)<br>
    <strong>?</strong> &nbsp;&nbsp;&nbsp; enter (occurence précédente)</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="Afficher_masquer_les_numéros_de_lignes">Afficher / masquer les numéros de lignes :</span>
        </li>
    <br>
    <div class="code"><strong>:set nu</strong> &nbsp;&nbsp;afficher les numéros de lignes<br>
    <strong>:set nu!</strong> &nbsp;masquer les numéros de lignes</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="Remplacer_du_texte">Remplacer du texte :</span>
        </li>
    <br>
    <p>On peut utiliser une syntaxe sed. Exemple pour remplacer <strong>toto</strong> par <strong>toto1</strong> :</p>
    <div class="code">:s/toto/toto1/g</div>
    <br>
    <p>S’il y a des / dans le texte à remplacer on peut utiliser d’autres séparateurs :</p>
    <div class="code">:s@/toto/toto1@/tata/tata1@g</div>
    <br>
    <p>Pour remplacer uniquement entre les lignes 10 et 20 :</p>
    <div class="code">:10,20 s/toto/toto1/g</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="Coller_du_texte">Coller du texte en respectant l’indentation :</span>
        </li>
    <br>
    <div class="code">:set paste</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="Recharger_un_fichier">Recharger un fichier :</span>
        </li>
    <br>
    <div class="code"><strong>:e</strong> &nbsp;&nbsp; (recharge le fichier)<br>
    <strong>:edit</strong> (recharge le fichier)<br>
    <strong>:e!</strong> &nbsp; (recharge le fichier en annulant les modifications)</div>
    <br>
    <br>
        <li id="tuto1">
            <span id="Divers">Divers :</span>
        </li>
    <br>
    <div class="code"><strong>:syntax on</strong> activer la coloration syntaxique<br>
    <strong>:vsp</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; découper l'écran verticalement<br>
    <strong>:sp</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; découper l'écran horizontalement<br>
    <strong>:!</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; lancer une commande externe (commencez par taper <strong>:!</strong> suivi du nom de la commande exemple <strong>:!ls</strong></div>
</ul>
</div>    
</div>
<script src="JS/main.js"></script>
</body>
</html>