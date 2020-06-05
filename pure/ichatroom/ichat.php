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
        <link rel="stylesheet" href="ichatstyle.css" type="text/css" />
        <title>Heidi-chat</title>
    </head>
    <body>
        <header>
            <h1>Bienvenue sur Heidi-CHAT!</h1>
            <!-- Déconnexion du site -->
            <div class="deconnect">
                <a class="deco" href="/pure/deconn.php">Déconnexion</a>
            </div>
        </header>
        <!-- On attribue la méthode et l'action -->
        <form action="ichat_post.php" method="POST">
            <div class="id_pseudo">
                <label for="pseudo">Pseudo</label> : 
                <input type="text" name="pseudo" id="pseudo"
                value="<?php 
                if (isset($_COOKIE['pseudo'])) // On associe le pseudo au COOKIE avec sécurité
                { 
                    echo htmlspecialchars(strip_tags($_COOKIE['pseudo']));
                }
                else 
                {
                    echo 'Ecrire ici votre Pseudo';
                }
                ?>"><br>
            </div>

            <div class="mesg">
                <label for="message">Message</label> : 
                <input type="text" name="message" id="message" />
            </div>
            <div class="env">
                <input type="submit" value="Envoyer" />
            </div>
        </form>

        <!-- Rafraîchir les messages de la page et retour au menu principal -->
        <div class="alitems">
            <a class="refresh" href="ichat.php">Rafraîchir la liste des messages</a>
            <a class="goback" href="/pure/alpha.php">Retour au menu principal</a>
        </div>
        <section>
        <!-- On se connecte à la base de données -->
        <?php
        # $user = '';
        # $mdp = '';
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=chat4ever;charset=utf8', '', '');
        }
        catch(Exception $e)
        {
                die('Erreur : '.$e->getMessage());
        }

        $limit_msgPage = 10; // On détermine le nbre de message par page
     
        $msg_count = "SELECT COUNT(id) AS message_counter from minichat2";
        $req_count = $bdd->prepare($msg_count);
        $req_count->execute();
        $messages = $req_count->fetch(PDO::FETCH_ASSOC);
        $message_counter = $messages['message_counter'];
        /* On arrondie le nbre de page à l'entier supérieur */
        $nbPage = ceil($message_counter/$limit_msgPage);

        if (isset($_GET['page'])) {
            $current_page = (int) $_GET['page'];
            }
        else {
            $current_page = 1;
        }
        /* On fixe la limite à partir de quel nbre de message pour chaque page 
           (ex: page3->page3 - 1 page = page2*10 = 20messages)
           La limite de début commence après le 20ème message pour la page3 */            
        $limit_start = (int) (($current_page -1) * $limit_msgPage);
        /* On fixe la limite du nbre de message pour chaque page (10) en plus de la limite du début */
        $req = $bdd->query("SELECT id, pseudo, message, date 
                            FROM minichat2 ORDER BY id DESC 
                            LIMIT $limit_start, $limit_msgPage");
        /* Affichage de la date au format français */
        while ($data = $req->fetch()) {
            $new_date_format = (new DateTime($data['date']))->format('d/m/Y à H:i:s');
        ?>

        <p><strong><?php echo htmlspecialchars(strip_tags($data['pseudo'])); ?></strong> à écrit <em> le <?php echo $new_date_format; ?></em></p>

        <a>-> <?php echo htmlspecialchars(strip_tags($data['message'])); ?></a>

        <?php    
        }         
        $req->closeCursor();        // Ferme le curseur, permettant à la requête d'être de nouveau exécutée
        $req_count->closeCursor();  // Ferme le curseur, permettant à la requête d'être de nouveau exécutée
        $bdd = null;                // Fermeture de la connexion à la base 
        ?>
        </section>
        <!-- On affiche les numéros de pages -->
        <footer>
            <table>
                <?php
                echo 'Pages';
                    for ($i = 1; $i <= $nbPage; $i++) {
                        if ($current_page == $i) {
                            echo '';
                        }
                        echo '><a href="ichat.php?page=' . $i . '">' . $i . '</a>'; 
                    }
                ?>
            </table>
        </footer>
    </body>
</html>