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
        <link rel="stylesheet" href="rotary.css" type="text/css" />
        <title>Heidi-Site</title>
    </head>

    <body>
        <div class="box">
        	<div>
        		<span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <?php        
        header("refresh:5;url=alpha.php");
        ?>
    </body>
</html>
