<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8" />
        <link rel="stylesheet" href="conn_post.css" type="text/css" />
        <link rel="shortcut icon" href="firelink/images/havicon.png" type="image/png">
        <link rel="icon" href="firelink/images/havicon.png" type="image/png">
    </head>
    <body>
        <div class="connected" align="center">
            <!-- <form action="" method="POST" />
            <input type="submit" value="Continuer"> 
            <input type="email" name="email" id="email"
            value="<?php
            if (isset($email)) 
            { 
                echo $email;
            }                
            ?>">
            </form> --> 
            <?php 
            if(isset($error))
            {
                echo $error;
            }
            ?>
      
            <?php
            # $usr = '';
            # $mdp = '';
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=intermed;charset=utf8', '', '');
            }
            catch (Exception $e)
            {
                die ('Error :' .$e->getMessage());
            }

            $pseudo = htmlspecialchars(strip_tags($_POST['pseudo']));

            // Récupération de l'utilisateur et de son pass hashé
            $requete = $bdd->prepare('SELECT id, mdp FROM members WHERE pseudo = :pseudo');
            $requete->execute(array('pseudo' => $pseudo));
            $resultat = $requete->fetch();
            // Comparaison du pass envoyé via le formulaire avec la base
            $isPasswordCorrect = password_verify($_POST['mdp'], $resultat['mdp']);
        
            if (!$resultat)
            {
                echo 'Identifiant ou mot de passe incorrect !';
            }
            else
            {
                if ($isPasswordCorrect) 
                {
                    session_start();
                    $_SESSION['id'] = $resultat['id'];
                    $_SESSION['pseudo'] = $pseudo;
                    $_COOKIE['pseudo'] = $_SESSION['pseudo'];
                    setcookie('pseudo', $_COOKIE['pseudo'], time() + 365*24*3600, null, null, false, true);

                        if(isset($_SESSION))
                        {
                            $getsess = intval($_SESSION['id']);
                            $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
                            $requser->execute(array($getsess));
                            $userinfo = $requser->fetch();

                            echo 'Vous êtes connectés ' . $pseudo . '. <br />Bienvenue !';
                            echo '<br />Votre pseudo : ' . $pseudo ;
                        
                                if(!empty($pseudo))
                                {
                                    $reqdate = $bdd->prepare("SELECT date_ins FROM members WHERE date_ins = :date");
                                    $reqdate->execute(array(':date' => 'date_ins')); // Ça c'est beau !!!
                                    $datam = $reqdate->fetch();
                                    $new_date_format = (new DateTime($datam['date_ins']))->format('d/m/Y à H:i:s');

                                    echo '<br />Date et heure : ' . $new_date_format ;
                                                     
                                        if(!empty($new_date_format)) //C'est ici qu'il faut chercher !!!
                                        {
                                            $getmail = intval($_SESSION['id']);
                                            $reqmail = $bdd->prepare("SELECT * FROM members WHERE id = ?");
                                            $reqmail->execute(array($getmail)); // Génial !
                                            $datamail = $reqmail->fetch();

                                            echo '<br />Votre e-mail : ' . $datamail['email'] ;
                                            echo '<br /><a href="mainpage.php" class="case">Continuer</a>';   
                                        }
                                        else
                                        {
                                            echo "Pas de date formatée ou définie";
                                        }
                                }
                                else
                                {
                                    echo "Manque le pseudo";
                                }
                        }
                        else
                        {
                            echo "Pas de session!!!";
                        }
                }
                else 
                {
                    echo "Identifiant ou mot de passe incorrect !";
                }
            }        
            $requete->closeCursor();
            ?>
        </div>
    </body>
</html>
