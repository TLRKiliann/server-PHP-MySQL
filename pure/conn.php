<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8" />
        <link rel="stylesheet" href="conn.css" type="text/css" />
        <link rel="shortcut icon" href="firelink/images/havicon.png" type="image/png">
        <link rel="icon" href="firelink/images/havicon.png" type="image/png">
        <title>Connexion:</title>
    </head>

    <body>
        <div class="frame_table" align="center">
            <h2>Connexion :</h2>
            <form action="conn_post.php" method="POST">
                <table>
                    <tr>
                        <td align="left">
                            <label for="pseudo">Pseudo :</label>
                        </td>
                        <td align="left">
                            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo"
                            value="<?php 
                            if (isset($_COOKIE['pseudo'])) // On associe le pseudo au COOKIE avec sécurité
                            { 
                                echo htmlspecialchars($_COOKIE['pseudo']);
                            }
                            ?>"><br>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td align="left">
                            <label for="email">E-mail :</label>
                        </td>
                        <td>
                            <input type="e-mail" name="email" id="email" placeholder="Mail" /><br />
                        </td>
                    </tr> -->
                    <tr>
                        <td align="left">
                            <label for="mdp">Mot de passe :</label>
                        </td>
                        <td align="left">
                            <input type="password" name="mdp" id="mdp" placeholder="Password" /><br />
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center">
                            <input type="submit" value="Se connecter" />
                        </td>
                    </tr>
                </table>                
            </form>
        </div>
        <div class="content2">
            <p>En cas d'oubli du mot de passe (mdp), veuillez m'envoyer un e-mail à l'adresse suivante :</p>
            <p id="mail">philogenie@protonmail.com</p>
            <p>Veuillez me laisser votre pseudo dans l'e-mail, afin que je puisse supprimer votre compte complètement.</p>
        </div>
    </body>
</html>
