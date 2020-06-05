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
        <link rel="stylesheet" href="mep_neuro.css" type="text/css" />
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
                <h2 class="info_user">Actualités et liens en neurologie</h2>
            </div>
            <div class="separation">
            </div>

            <div class="loadertwo">
                <h1>Comment évaluer l'état mental</h1>
                <div class="betwinstwo">
                </div>
                <p>Dernière révision totale 2018</p>
                <div class="prep">
                    <p>Examen détaillé et complet sur :</br>
                        > Orientation dans le temps, l'espace et par rapport aux autres</br>
                        > Attention et concentration</br>
                        > Mémoire</br>
                        > Capacités verbales et mathématiques</br>
                        > Jugement</br>
                        > Raisonnement</p>
                </div>    
                <a href="https://www.msdmanuals.com/fr/professional/troubles-neurologiques/examen-neurologique/comment-%C3%A9valuer-l-%C3%A9tat-mental">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>Introduction à l'examen neurologique</h1>
                <div class="betwinstwo">
                </div>
                <p>Dernière révision totale 2018</p>
                <div class="prep">
                    <p>Super site expliquant comment évaluer :</br>            
                       > État mental</br>
                       > Nerfs crâniens</br>
                       > Système moteur</br>
                       > Force musculaire</br>
                       > Marche, posture et coordination</br>
                       > Sensibilité</br>
                       > Réflexes</br>
                       > Système nerveux végétatif</p>
                </div>
                <a href="https://www.msdmanuals.com/fr/professional/troubles-neurologiques/examen-neurologique/introduction-%C3%A0-l-examen-neurologique">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>Méningo-encéphalite à tiques (FSME)</h1>
                <div class="betwinstwo">
                </div>
                <div class="prep">
                    <p>Agent infectieux et transmission, Tableau clinique, Répartition géographique et fréquence, Prévention, Maladies transmises par les tiques.</p>
                </div>
                <a href="https://www.bag.admin.ch/bag/fr/home/krankheiten/krankheiten-im-ueberblick/fsme.html">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>19/06/2019</h1>
                <div class="betwinstwo">
                </div>
                <p>Effet de la stimulation magnétique transcrânienne dans le traitement des paralysies fonctionnelles</p>
                <div class="prep">
                    <p>Etudes menée au CHU de Rouens</p>
                </div>
                <a href="docs/Demas_Alexis.pdf">Doc (PDF)</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>Maladie de Parkinson</h1>
                <div class="betwinstwo">
                </div>
                <p>Troubles de la marche et instabilité posturale</p>
                <a href="docs/flyer_epi.pdf">Doc (PDF)</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>Alzheimer</h1>
                <div class="betwinstwo">
                </div>
                <p>Un court-métrage touchant qui aide à se représenter visuellement la maladie d’Alzheimer</p>
                <a href="https://www.youtube.com/watch?v=CyGGpsbN55A#action=share">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>26-28/03/2020 :</h1>
                <div class="betwinstwo">
                </div>
                <p>48ème Réunion de la Société Européenne de Neurologie Pédiatrique</p>
                <a href="https://www.senp-neuropediatrie.eu/">Lien internet</a>
                <div class="infine">
                </div>
            </div>
        </div>
    </body>
</html>
