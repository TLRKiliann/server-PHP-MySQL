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
        <link rel="stylesheet" href="mep_psy.css" type="text/css" />
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
                <h2 class="info_user">Actualités et liens en psychiatrie</h2>
            </div>
            <div class="separation">
            </div>


            <div class="loadertwo">
                <h1>Bilan psychiatrique</h1>
                <div class="betwinstwo">
                </div>
                <p>Site très intéressant et à découvrir</p>
                <div class="prep">
                    <p>> Anamnèse<br>
                    > Examen de l'état mental<br>
                    > L'aspect général<br>
                    > Le langage<br>
                    > L'expression émotionnelle<br>
                    > La pensée et les perceptions<br>
                    > Les fonctions cognitives<br>
                    </p>
                </div>
                <a href="https://www.msdmanuals.com/fr/professional/troubles-psychiatriques/prise-en-charge-du-patient-pr%C3%A9sentant-des-troubles-mentaux/bilan-psychiatrique">Lien internet</a>
                <div class="infine">
                </div>
            </div>



            <div class="loadertwo">
                <h1>Des soignants Lausannois ont fait un travail de recherche portant sur la population schizophrène</h1>
                <div class="betwinstwo">
                </div>
                <div class="prep">
                    <p>Des soignants Lausannois ont mené une étude portant sur l'amélioration du plaisir et 
                        de la motivation dans la schizophrénie (essai clinique). 
                       Vous pouvez avoir accès à l'article en vous rendant sous 
                       la rubrique <a id="psy" href="../firelink/htmlpharma/psy.php">"Psychiatrie"</a>
                       (Improving Pleasure and Motivation in Schizophrenia: A Randomized 
                       Controlled Clinical Trial. Dans le cadre du PEPS).</p>
                </div>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>11/06/2019</h1>
                <div class="betwinstwo">
                </div>
                <p>Hellblade Senua’s Sacrifice - un jeu vidéo réalisé pour mieux comprendre la psychose</p>
                <div class="prep">
                    <p>Dès les premières secondes. Lors du chargement du jeu, un message d'avertissement apparaît 
                        sur l'écran : «Ce jeu contient des représentations de la psychose. Des personnes ayant une 
                        expérience de la psychose ainsi que des professionnels de la psychiatrie ont 
                        participé à leur création. Certaines personnes, y compris celles qui ont déjà vécu des expériences 
                        similaires, pourraient trouver ces représentations dérangeantes.»</p>
                    <p>Ce jeu a été réalisé grace aux développeurs britanniques de Ninja Theory, le studio à 
                        l’origine de ce jeu sorti presque incognito il y a presque 1 an.<br/>
                        Hellblade: Senua’s Sacrifice revendique sa contribution scientifique qui n'aurait jamais 
                        pu se faire sans Paul Fletcher, professeur de neurosciences à l’Université de Cambridge, 
                        et d'autres professionnels de la psychiatrie.<br/>
                        Jeu ultra-réaliste teinté de mythologie scandinave. On assiste à la descente aux enfers 
                        de l'héroïne (Senua's), au sens propre comme figuré, métaphore faisant référence aux 
                        troubles psychotiques dont elle est envahie durant toute son aventure.<br/>
                        Une claque artistique au service d'une aventure saisissante !</p>
                </div>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>03/04/2020</h1>
                <div class="betwinstwo">
                </div>
                <p>La psychothérapie centrée sur les émotions (EFT)</p>
                <div class="prep">
                    <p>Atelier de formation en psychothérapie intitulé "La psychothérapie centrée sur les émotions<br> 
                        (EFT) : une introduction", le 3 avril 2020 à Chauderon 18. Co-animé par le Dr Marc Sanchez,<br> 
                        psychiatre chef de clinique au DP-CHUV</p>
                </div>
                <a href="https://www.chuv.ch/fr/psychiatrie/dp-home/agenda/detail/news/45575-la-psychotherapie-centree-sur-les-emotions-eft-une-introduction/">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>Département de psychiatrie d'Oxford (en)</h1>
                <div class="betwinstwo">
                </div>
                <p>Actualités et news (en)</p>
                <a href="https://www.psych.ox.ac.uk/news">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>Site Americain de psychiatrie (en)</h1>
                <div class="betwinstwo">
                </div>
                <p>The American Journal of Psychiatry (en)</p>
                <div class="prep">
                    <p>Avancées et recherches actualisées</p>
                </div>
                <a href="https://ajp.psychiatryonline.org/toc/ajp/current">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>06-07/05/2020</h1>
                <div class="betwinstwo">
                </div>
                <p>31ème Congrés du Graap: Physique, psychique inséparables</p>
                <div class="prep">
                    <p>Casino de Montbenon, Lausanne</p>
                </div>
                <a href="https://www.chuv.ch/fr/psychiatrie/dp-home/agenda/detail/news/46034-31eme-congres-du-graap-physique-psychique-inseparables/">Lien internet</a>
                <div class="infine">
                </div>
            </div>
        </div>
    </body>
</html>
