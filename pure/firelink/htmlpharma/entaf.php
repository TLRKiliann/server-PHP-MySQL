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
        <link rel="stylesheet" href="../css/entaf.css" type="text/css" />
        <link rel="shortcut icon" href="../images/havicon.png" type="image/png">
        <link rel="icon" href="../images/havicon.png" type="image/png"> 
        <title>Heidi-Site</title>
    </head>

    <body>
        <div class="hat">
            <header>
                <h1>En développement!</h1>
            </header>
        </div>
        <div class="secto">
            <section>
                <h2>Mise à jour en continue:</h2>
                    <div class="date">
                        <p><strong>Février 2020</strong></p>
                    </div>
                    <p>Merci pour votre compréhension.</p>
            </section>
        </div>
            <footer>
                <a href="accueil.php" class="acc">Retour à l'accueil!</a>
            </footer>   
    </body>
</html>

