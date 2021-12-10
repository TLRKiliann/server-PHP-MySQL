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
if (isset($_COOKIE['pseudo'])) 
{
    // On teste pour voir si nos variables ont bien été enregistrées
    $_COOKIE['pseudo'] = htmlspecialchars(strip_tags($_COOKIE['pseudo']));
}
else 
{
    echo 'La variable cookie n\'est pas déclarée.';
    header("refresh:5;url=conn.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="Utf-8" />
        <link rel="stylesheet" href="mainmenu.css" type="text/css" />
        <link rel="shortcut icon" href="firelink/images/havicon.png" type="image/png">
        <link rel="icon" href="firelink/images/havicon.png" type="image/png">
        <title>Heidi-Site</title>
    </head>

    <body>
    	<div class="all">
	        <div class="title_heidi" align="center">
	            <h1>Heidi</h1>
	        </div>
	        <div class="box">
	            <div>
	                <span></span>
	                <span></span>
	                <span></span>
	                <span></span>
	            </div>
	        </div>
	        <div classe="basdp">
	        	<div class="pgview">
	        		<?php
	        		$monfichier = fopen('idsessions.txt', 'r+');
	        		$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
	        		$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
	        		fseek($monfichier, 0); // On remet le curseur au début du fichier
	        		fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
	        		fclose($monfichier);

			        echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
			        ?>
			    </div>
			    <div class="addrip">
			        <?php
			        // Récupération d'adresse IP
			        function get_ip()
			        {
			            if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			            {
			                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			            }
			            elseif(isset($_SERVER['HTTP_CLIENT_IP']))
			            {
			                $ip = $_SERVER['HTTP_CLIENT_IP'];
			            }
			            else
			            { 
			                $ip = $_SERVER['REMOTE_ADDR'];
			            }
			            return $ip;
			        }

			        $ip = get_ip();
			        //Affichage de l'IP:
			        echo '<p>Votre ip publique : ' . $ip . '</p>';
			        //Récupération de la Date et Heure
			        $date = date("d-m-Y");
			        $heure = date("H:i");
			 
			        // Enregistrement dans un fichier.txt
			        $fp =fopen("ip_registrer.txt","a");
			        fputs ($fp,  " $ip || $date || $heure\n ");
			        fclose($fp);
			        ?>
			    </div>
			    <?php        
			    header("refresh:5;url=alpha.php");
		        ?>
	        </div>
	    </div>
    </body>
</html>