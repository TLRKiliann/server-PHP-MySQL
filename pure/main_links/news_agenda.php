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
        <link rel="stylesheet" href="mep_agenda.css" type="text/css" />
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
                <h2 class="info_user">AGENDA</h2>
            </div>
            <div class="separation">
            </div>

            <div class="date">
                <h1>19/03/2020 :</h1>
                <div class="betwinstwo">
                </div>
                <p>Colloque des neurosciences cliniques (Axon degeneration from a fly's perspective)</p>
                <div class="deux">
                    <p>Colloque du CHUV : Auditoire Charlotte Olivier</p>
                </div>
                <a href="https://www.chuv.ch/fr/neurologie/nlg-home/agenda/detail/news/45997-colloque-des-neurosciences-cliniques/">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="date">
                <h1>14 au 21/03/2020 :</h1>
                <div class="betwinstwo">
                </div>
                <p>Journée de la schizophrénie</p>
                <div class="deux">
                    <p>Se rétablir de la schizophrénie n'est plus une fiction ! Conférences, ciné-débats,
                    stands, …tout un programme pour les Journées de la schizophrénie 2020...</p>
                </div>
                <a href="https://www.chuv.ch/fr/psychiatrie/dp-home/agenda/detail/news/45954-14-21-mars-journees-de-la-schizophrenie/">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="date">
                <h1>04 et 18/04/2020 :</h1>
                <div class="betwinstwo">
                </div>
                <p>Faire face à l’épilepsie</p>
                <div class="deux">
                    <p>Lausanne - Riponne</p>
                </div>
                <a href="https://epi-suisse.ch/fr/manifestation/faire_a_lepilepsie_2020/">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="date">
                <h1>05/05/2020 :</h1>
                <div class="betwinstwo">
                </div>
                <p>La Loi sur le travail dans les services publics</p>
                <p>SSP (Syndicat des Services Publics)</p>
                <div class="deux">
                    <p>Lausanne - Hôtel Continental</p>
                </div>
                <a href="https://ssp-vpod.ch/calendrier/">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="date">
                <h1>28/05/2020 :</h1>
                <div class="betwinstwo">
                </div>
                <p>Repérer et accompagner l'enfant d'âge préscolaire avec TSA</p>
                <div class="deux">
                    <p>Journée de sensibilisation aux troubles du spectre de l'autisme proposée à Lausanne à
                	l'attention des éducatrices et éducateurs de la petite enfance et des directrices et directeurs
                    des structures accueillant des enfants d’âge préscolaire </p>
                </div>
                <a href="https://www.chuv.ch/fr/psychiatrie/dp-home/agenda/detail/news/45952-reperer-et-accompagner-lenfant-dage-prescolaire-avec-tsa/">Lien internet</a>
                <div class="infine">
                </div>
            </div>
        </div>
    </body>
</html>