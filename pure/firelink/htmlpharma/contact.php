<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
// On récupère nos variables de session
if (isset($_SESSION['pseudo'])) 
{
    // On teste pour voir si nos variables ont bien été enregistrées
    $_SESSION['pseudo'] = htmlspecialchars(strip_tags($_SESSION['pseudo']));
}
else 
{
    echo 'La variable n\'est pas déclarée.';
    header('Location:conn.php');
}
setcookie('pseudo', $_COOKIE['pseudo'], time() + 365*24*3600, null, null, false, true);
?>

<!DOCTYPE html>
<html>
    <head>
	<meta charset="Utf-8" />
        <link rel="stylesheet" href="../css/contact.css" type="text/css" /> 
        <link rel="shortcut icon" href="../images/havicon.png" type="image/png">
        <link rel="icon" href="../images/havicon.png" type="image/png">
        <title>Heidi-Site</title>
    </head>

    <body>
        <div class="systema">
            <div class="pseudocount">  
                <a class="pseudodeco"><?php echo 'Votre compte : ' .htmlspecialchars(strip_tags($_SESSION['pseudo'])); ?></a><br />
            </div>  
            <div class="deconnect">  
                <a class="decodeco" href="/pure/deconn.php">Déconnexion</a>
            </div>  
        </div> 
        <div id="bloc_page1">  
            <div id="bloc_page2"> 
                <header>
                    <div id="titre_principal">
                        <div class="logo">
                            <img src="../images/ps.png" alt="Logo de C" />
                                <div class="tits">
                                <h1>Heidi-Pharmaco</h1>   
                                </div>
                        </div>
                        <h2>Référentiel de neurologie et psychiatrie</h2>
                    </div>
                    
                    <div id="abc">
                        <nav>
                            <ul>
                                <li><a href="accueil.php">Accueil</a></li>
                                <li><a href="http://kemy79inf.unblog.fr/category/labo/">Link-Unblog</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </header>

                <div id="banniere_image">
                    <div id="banniere_description">
                        <a href="accueil.php" class="bouton_rouge2">Accueil</a>
                        <a href="psy.php" class="bouton_rouge">Psychiatrie</a>
                    </div>
                </div>

                <section>
                        <h1>Contact</h1>
                        <p>Vous pouvez me laisser un commentaire ou une question à l'adresse figurant ci-dessous :</p>
                        
                        <a>philogenie@protonmail.com</a>

                </section>

                <footer>
                    <div class="black_band">
                        <img src="../images/sepa.jpg" alt="Logo de D" />
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>

