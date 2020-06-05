<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
// On récupère nos variables de session
if (isset($_SESSION['pseudo'])) 
{
    // On teste pour voir si nos variables ont bien été enregistrées
    echo 'Votre pseudo est '.$_SESSION['pseudo'];
    echo '<br />';
}
else 
{
    echo 'La variable n\'est pas déclarée.';
    header('Location:conn.php');
}
?>
<?php
setcookie('pseudo', $_COOKIE['pseudo'], time() + 365*24*3600, null, null, false, true);
if (isset($_COOKIE['pseudo'])) 
{
    // On teste pour voir si nos variables ont bien été enregistrées
    echo 'Votre variable cookie est '.$_COOKIE['pseudo'];
}
else 
{
    echo 'La variable cookie n\'est pas déclarée.';
    header('Location:conn.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8" />
        <title>Minichat</title>
    </head>
    <body>

 
<?php
// Connexion à la base de données
# $mdp = '';
# $user = '';
$bdd = new PDO('mysql:host=localhost;dbname=chat4ever;charset=utf8', '', '', 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// Réception données formulaire par method post
$pseudo     = htmlspecialchars(strip_tags($_POST['pseudo']));  // Pseudo
$message    = htmlspecialchars(strip_tags($_POST['message'])); // Messsage
// Preparation requete + execution
$requete = $bdd->prepare('INSERT INTO minichat2(
                                               pseudo,
                                               message,
                                               date
                                               ) 
                                        VALUES(
                                               :pseudo, 
                                               :message,
                                               NOW()
                                               )');
$requete->bindParam(':pseudo',        $pseudo,    PDO::PARAM_STR);
$requete->bindParam(':message',       $message,   PDO::PARAM_STR);
$requete->execute();

if ($requete) {
    header('Location: ichat.php'); // Retour automatique à la liste
} else {
    echo '<p>L\enregistrement a échoué<br><a href="ichat.php">Retour à la liste des messages</a></p>';
}
?>
    </body>
<html>