<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>David</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/home.css"/>
        <link rel="stylesheet" href="CSS/nav1.css"/>
        <link rel="icon" href="data:,">
    </head>
    <!--
    <div class="topnav">*/
    <form method="POST" action="">
        <input type="email" name="mailconnect" placeholder="Mail" />
        <input type="password" name="mdpconnect" placeholder="Mot de passe" />
        <input type="submit" name="formconnexion" value="Se connecter !" />
    </form>-->
        <?php
        if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
        }
        ?>
    </div>
    <body>
        <header>
            <?php include("mobilemenu.php"); ?>
            <?php include("heuredate.php"); ?>
        </header>
        <div class="menu1">
        
        <p class="introduction"><a href="https://david-tuto.be/"><br>News adresse https://david-tuto.be/</a></p>
        
        <p class="introduction"><img src="images/acceuil2.jpg" alt="image"</p>
        <footer>
            Copyright David - Tous droits réservés<br>
            <br>
                <a href="">Me contacter !</a>
        </footer>
    </body>
    </div>
    </div>
</html>
