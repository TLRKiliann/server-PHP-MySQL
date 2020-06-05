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
        <link rel="stylesheet" href="ttt_neuro.css" type="text/css" />
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
                <h2 class="info_user">Les traitements utilisés en neurologie</h2>
            </div>
            <div class="separation">
            </div>

            <div class="loadertwo">
                <h1>07/03/2020</h1>
                <div class="betwinstwo">
                </div>
                <p>Reconnaître l'attaque cérébrale, réagir vite et bien</p>
                <div class="prep">
                    <p>Site que j'ai découvert récemment et qui vaut le coup d'oeil</p>
                </div>
                <a href="https://www.swissheart.ch/fr/qui-sommes-nous/campagnes/campagne-sur-lattaque-cerebrale.html">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>19/06/2019</h1>
                <div class="betwinstwo">
                </div>
                <p>Avancées dans les traitments en neurologie</p>
                <div class="prep">
                    <p>L’ocrélizumab (Ocrevus), un anticorps monoclonal anti-CD20, a été homologué dans le traitement de 
                    la sclérose en plaques. L’éculizumab (Soliris) a été approuvé dans plusieurs pays pour les formes réfractaires 
                    de myasthénie grave généralisée séropositive. Une forme de thérapie génique, le patisiran a montré des résultats 
                    positifs dans l’amyloïdose à transthyrétine. Dans le traitement des céphalées, en particulier des migraines, 
                    les approches non pharmacologiques ont montré quelques avancées. Les critères de la démence à corps de Lewy ont 
                    été révisés. L’utilisation de génériques de la lamotrigine n’engendre pas de recrudescence de crises épileptiques 
                    ni d’effets indésirables.</p>
                </div>
                <a href="https://www.revmed.ch/RMS/2018/RMS-N-588-589/Neurologie">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>19/06/2019</h1>
                <div class="betwinstwo">
                </div>
                <p>Antiépileptiques au cours de la grossesse</p>
                <div class="prep">
                    <p>Etat actuel des connaissances sur les risques de malformations et de troubles neuro-développementaux</p>
                </div>
                <a href="docs/https://ansm.sante.fr/S-informer/Points-d-information-Points-d-information/Antiepileptiques-au-cours-de-la-grossesse-Etat-actuel-des-connaissances-sur-les-risques-de-malformations-et-de-troubles-neuro-developpementaux-Point-d-information">Lien internet</a>
                <div class="infine">
                </div>
            </div>
        </div>
    </body>
</html>
