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

// Vérifier si tout a bien été rentré.
if(isset($_POST['forminscription']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $email = htmlspecialchars($_POST['email']);
    $email2 = htmlspecialchars($_POST['email2']);
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // Hachage du mdp

    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])
    AND !empty($_POST['email']) AND !empty($_POST['email2']))
    {
        // pseudo sécurisé
        $pseudolength = strlen($pseudo);
        if($pseudolength <= 255)
        {
            $reqpseudo = $bdd->prepare("SELECT * FROM members WHERE pseudo = :pseudo");
            $reqpseudo->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            $reqpseudo->execute();        
            $pseudoexist = $reqpseudo->rowCount();
            if($pseudoexist == 0)
            {
                if($email==$email2)
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        $reqmail = $bdd->prepare("SELECT * FROM members WHERE email = :email");
                        $reqmail->bindParam(':email', $email, PDO::PARAM_STR);
                        $reqmail->execute();        
                        $mailexist = $reqmail->rowCount();
                        if($mailexist == 0)
                        {
                            $entermbr = $bdd->prepare('INSERT INTO members(pseudo, mdp ,email, date_ins) 
                                                       VALUES( :pseudo, :mdp, :email, NOW())');
                            $entermbr->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
                            $entermbr->bindParam(':mdp', $mdp, PDO::PARAM_STR);
                            $entermbr->bindParam(':email', $email, PDO::PARAM_STR);
                            $entermbr->execute();

                            $erreur = "Le compte a bien été enregistré !"; 
                            header('refresh:2;url=conn.php');
                        }
                        else
                        {
                            $erreur = "Cette adresse mail est déjà utilisée";
                        }
                    }
                    else
                    {
                        $erreurs = "Votre adresse mail n'est pas valide !";
                    }
                }
                else
                {
                    $erreur = "Vos adresses mails ne correspondent pas !";
                }
            }
            else
            {
                $erreur = "Votre pseudo est déjà attribué à un autre membre !";
            }
        }
        else
        {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }
    }
    else
    {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8" />
        <link rel="stylesheet" href="inscript.css" type="text/css" />
        <link rel="shortcut icon" href="firelink/images/havicon.png" type="image/png">
        <link rel="icon" href="firelink/images/havicon.png" type="image/png">
        <title>Connexion:</title>
    </head>

    <body>
        <div class="loginshell" align="center">
            <h2>Inscription :</h2><br />
            <form action="" method="POST">
                <table>
                    <tr>
                        <td align="left">
                            <label for="pseudo">Pseudo :</label>
                        </td>
                        <td>
                            <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo"
                            value="<?php 
                            if (isset($pseudo))
                            { 
                                echo $pseudo;
                            }
                            ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label for="email">Mail :</label>
                        </td>
                        <td align="right">
                            <input type="email" name="email" id="email" placeholder="Votre e-mail"
                            value="<?php 
                            if (isset($email)) 
                            { 
                                echo $email;
                            }
                            ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label for="email2">Confirmez votre mail :</label>
                        </td>
                        <td align="left">
                            <input type="email2" name="email2" id="email2" placeholder="Confirmation e-mail"
                            value="<?php 
                            if (isset($email2)) 
                            { 
                                echo $email2;
                            }
                            ?>">
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <label for="mdp">Mot de passe :</label>
                        </td>
                        <td align="left">
                            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" />
                        </td>
                    </tr>

                    <tr>
                        <td></td>
                        <td align="center">
                            <br />
                            <input type="submit" name="forminscription" value="Je m'inscris" />
                        </td>
                    </tr>
                </table>
            </form>
            <?php
            if(isset($erreur))
            {
                echo '<br /><font color="red">' . $erreur . "</font>";
            }
            ?>
        </div>
        <div class="content">
            <p>Le pseudo permet d'ouvrir une session utilisateur et garanti la sécurité du site.</p>
            <p>L'adresse e-mail sert à envoyer des e-mails sur les dernières MAJ (max 1x/sem).</p>
            <p>Le mot de passe est encrypté et n'est pas lisible, même pour l'administrateur du site.<br/>
               Idéalement, il est préférable de choisir 8 caractères avec un mélange de lettres minuscules et majuscules,
               des caractères spéciaux, ainsi que des chiffres (ne jamais utiliser le même mdp (mot de passe) 
               pour un autre site, e-mail, etc...).</p>
            <p>Ces données sont protégées et ne seront en aucun cas divulguées ou exploitées.</p>
            <p>ko@l@tr33 (l'administrateur)</p>
        </div>
    </body>
</html>
