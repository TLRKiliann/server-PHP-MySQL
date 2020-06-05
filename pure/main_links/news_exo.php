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
        <link rel="stylesheet" href="mep.css" type="text/css" />
        <link rel="shortcut icon" href="../firelink/images/havicon.png" type="image/png">
        <link rel="icon" href="../firelink/images/havicon.png" type="image/png">
        <title>Heidi</title>
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li class="dwrap"><a>Accueil</a>
                        <ul class="sub">
                            <li><a href="../firelink/htmlpharma/accueil.php">Enter</a></li>
                            <li><a href="../alpha.php">Info user</a></li>
                            <li><a href="news_agenda.php">Agenda</a></li>
                            <!-- <li><a href="main_links/news_plan.php">Plan du site</a></li> -->
                        </ul>
                    </li>
                    <li class="dwrap"><a>Neurologie</a>
                        <ul class="sub">
                            <li><a href="news_neuro.php">Actu neuro</a></li>
                            <li><a href="../firelink/htmlpharma/neuro.php">Tabel Neuro</a></li>
                            <li><a href="ttt_neuro.php">Actu médics</a></li>
                        </ul>
                    </li>
                    <li class="dwrap"><a>Psychiatrie</a>
                        <ul class="sub">
                            <li><a href="news_psy.php">Actu psy</a></li>
                            <li><a href="../firelink/htmlpharma/psy.php">Tabel PSY</a></li>
                            <li><a href="ttt_psy.php">Actu médics</a></li>
                        </ul>
                    </li>
                    <li class="dwrap"><a>Exchanges</a>
                        <ul class="sub">
                            <li><a href="../ichatroom/ichat.php">Chat</a></li>
                            <li><a href="../MVC_blog/Blogcon/Links/index.php">Blog</a></li>
                            <li><a href="http://kemy79inf.unblog.fr/category/labo/">Unblog</a></li>
                            <li><a href="../firelink/htmlpharma/contact.php">Contact</a></li>
                        </ul>
                    </li>
                    <li class="dwrap"><a>Déconnexion</a>
                        <ul class="sub">
                            <li><a href="../deconn.php">Exit</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="all">
            <div class="security">
                <h2 class="info_user">Informations aux utilisateurs :</h2>

                <p>Pour des raisons de sécurité une adresse ip et un cookie sont associés à votre pseudo de session.</p>
                <p>Ces données sont protégées et sont en aucun cas utilisées ou exploitées par l'administrateur du site, excepté lors d'un acte de 
                   vandalisme informatique (piratage) ou de non-respect des moyens mis à contribution pour la réalisation de ce site (serveur, logiciels, 
                   pages du sites, base de données, etc...).</p>

                <p>Lorsque vous vous connectez à mon site, il apparaît une page de mise en garde (qui diffère d'un navigateur à l'autre)
                   indiquant que mon site est dangereux et qu'il est préférable de faire demi-tour...<br />
                   Sachez que cet état de fait est dû à mon certificat TLS qui est un certificat auto-signé et qui n'est pas un certificat 
                   dit "certificate authority" (CA).</p>

                <p>En effet, cela se produit lorsque l'on génère et signe soi-même le certificat, comme je l'ai fait avec "openssl" plutôt 
                   que d'en acheter un chez Verisign, GlobalSign, GoDaddy, DigiCert, etc...<br/>
                   C'est grace à ce certificat que la connexion est protégée par le tunnel https (HTTP+TLS).</p>

                <p>Je recommande à tous les utilisateurs de bien vouloir faire une <strong>exception permanante</strong> dans leur navigateur, afin 
                   d'éviter l'affichage de la page de mise en garde et pour des raisons de sécurité. Il faut savoir qu'à chaque fois que vous vous 
                   connectez sur Heidi et que la page de mise en garde apparaît, des alertes sont générées sur tous les serveurs par lesquels vous passez 
                   avant d'être connecté à https://pharmaco-site.ddns.net (le serveur). Par conséquent, je vous remercie de bien vouloir instaurer 
                   une exception sur votre navigateur pour préserver les échanges client-serveur.</p>

                <p>Veuillez svp vous <strong>déconnecter</strong> une fois la visite terminée.</p>

                <p>Je reste disponible par messagerie électronique pour toutes questions sur l'e-mail suivant : philogenie@protonmail.com</p>

                <ul>
                    <li>Excellent surf à tous!</li>
                        <ul>
                            <li>ko@l@tr33 (l'administrateur)</li>
                        </ul>
                </ul>
            </div>
            <div class="separation">
            </div>

            <div class="loader">
                <h1>Brève présentation du site :</h1>
                <div class="betwins">
                </div>
                <p>Vous pouvez trouver sur Heidi-Pharmaco-Site :</p>
                    <ul>
                        <li><a>Des pathologies neurologiques</a></li>
                        <li><a>Des pathologies psychiatriques</a></li>
                        <li><a>Les principales classes de médicaments utilisées en neuro et en psy</a></li>
                        <li><a>Les dernières news sur :</a></li>
                            <ul>
                                <li><a>La neurologie</a></li>
                                <li><a>La psychiatrie</a></li>
                                <li><a>les médicaments</a></li>
                            </ul>
                        <li><a>Un agenda pour les principales manifestations régionales</a></li>
                        <li><a>Un blog</a></li>
                        <li><a>Un chat</a></li>
                        <li><a>Un site complémentaires "unblog" (données complémentaires)</a></li>
                    </ul>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>08/03/2020 : Mise à jour (MAJ)</h1>
                <div class="betwinstwo">
                </div>
                <p>MAJ du serveur</p>
                <p>MAJ du DNS no-ip</p>
                <p>Correction de faille de sécurité</p>
                <p>Révision des logging (journalisation) du fire-wall</p>
                <p>Révision des logging (journalisation) du site</p>
                <div class="infine">
                </div>
            </div>
        </div>
    </body>
</html>
