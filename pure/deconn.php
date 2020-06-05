<?php 
session_start();

// Suppression des variables de session et de la session
$_SESSION = array();
session_destroy();
// Suppression des cookies de connexion automatique
setcookie('pseudo', '');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="deco.css" type="text/css" />
        <link rel="shortcut icon" href="firelink/images/havicon.png" type="image/png">
        <link rel="icon" href="firelink/images/havicon.png" type="image/png">
        <title>Déconnexion</title>
    </head>
    <body>
        <div class="connex" align="center">
            <h2>Déconnexion :</h2>
                <a><?php echo "Vous vous êtes bien déconnectés. <br />
                               Merci de votre visite et à bientôt !";
                ?></a>
        </div>
        <div class="deconnex">
            <h2>Redirection automatique vers la page de login !</h2>
        </div>
        <?php
        if (!isset($SESSION['pseudo']))
        {
            header("refresh:5;url=conn.php");
        }
        else
        {
            echo "Echec de la déconnexion!)";
        }
        ?>
    </body>
</html>