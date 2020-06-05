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
                <h2 class="info_user">Les traitements utilisés en psychiatrie</h2>
            </div>
            <div class="separation">
            </div>

            <div class="loadertwo">
                <h1>19/06/2019</h1>
                <div class="betwinstwo">
                </div>
                <p>Recommandations thérapeutiques de la SSPP</p>
                <div class="prep">
                    <p>Pour le traitement de la schizophrénie</p>
                </div>
                <a href="https://medicalforum.ch/fr/article/doi/smf.2018.03303/">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>19/06/2019</h1>
                <div class="betwinstwo">
                </div>
                <p>Prescription de médicaments antipsychotiques. Obligation d'enregistrement</p>
                <div class="prep">
                    <p>La motion propose de rendre obligatoire l'enregistrement des prescriptions 
                        de neuroleptiques. Or, le Conseil fédéral estime que cette obligation 
                        représente une atteinte considérable à la 
                        liberté thérapeutique des médecins.</p>
                </div>
                <a href="https://www.parlament.ch/fr/ratsbetrieb/suche-curia-vista/geschaeft?AffairId=20143543">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>19/06/2019</h1>
                <div class="betwinstwo">
                </div>
                <p>Antipsychotiques atypiques à l’âge avancé : à prescrire ou à proscrire ? (2008)</p>
                <div class="prep">
                    <p>Les troubles du comportement avec agitation, l’agressivité, les hallucinations 
                        et d’autres symptômes neuropsychiatriques sont courants chez la personne âgée 
                        en présence d’une démence ou d’un état confusionnel. L’utilisation d’antipsychotiques 
                        est largement répandue pour traiter ces symptômes. Les antipsychotiques atypiques peuvent 
                        être utilement prescrits chez la personne âgée, mais leur efficacité reste limitée et ils 
                        ne sont pas exempts de risques, notamment métaboliques, cardiovasculaires et cérébrovasculaires.</p>
                </div>
                <a href="https://www.revmed.ch/RMS/2008/RMS-153/Antipsychotiques-atypiques-a-l-age-avance-a-prescrire-ou-a-proscrire">Lien internet</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>19/06/2019</h1>
                <div class="betwinstwo">
                </div>
                <p>Brochure Psycom (2015)</p>
                <div class="prep">
                    <p>Brochure survolant les classes de psychotropes. Simple à lire et vite lu! ;)</p>
                </div>
                <a href="docs/psycom.pdf">Doc (PDF)</a>
                <div class="infine">
                </div>
            </div>

            <div class="loadertwo">
                <h1>19/06/2019</h1>
                <div class="betwinstwo">
                </div>
                <p>ANTIPSYCHOTIQUES: PASSAGE DE LA FORME ORALE A LA FORME DEPOT (28/03/2018)</p>
                <div class="prep">
                    <p>Adaptations posologiques liées aux interactions. Précautions, omissions d'injections, passage de la forme orale
                       à la forme dépôt et vis-versa...</p>
                </div>
                <a href="docs/doc_chuv28mars2018.pdf">Doc (PDF)</a>
                <div class="infine">
                </div>
            </div>
        </div>
    </body>
</html>
