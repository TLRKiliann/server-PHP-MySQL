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
        <link rel="stylesheet" href="../css/schizoaff.css" type="text/css" />
        <link rel="shortcut icon" href="../images/havicon.png" type="image/png">
        <link rel="icon" href="../images/havicon.png" type="image/png"> 
        <title>Heidi-Site</title>
    </head>

    <body>
        <div id="bloc_page">  
            <div class="systema">
                <div class="bmenu">  
                    <a class="bmenudeco" href="../../alpha.php">Retour au Menu Principal</a><br />
                </div>  
                <div class="pseudocount">  
                    <a class="pseudodeco"><?php echo 'Votre pseudo : ' .htmlspecialchars(strip_tags($_SESSION['pseudo'])); ?></a><br />
                </div>  
                <div class="deconnect">  
                    <img class="img_dec" src="../images/blue_deco.png" alt="Logo de C" />
                    <a class="decodeco" href="/pure/deconn.php">Déconnexion</a>
                </div>  
            </div> 
            <header>
                <div id="titre_principal">
                    <div class="logo">
                        <img src="../images/ps.png" alt="Logo de C" />
                            <div class="tits">
                                <h1>Heidi-Pharmaco</h1>    
                            </div>
                    </div>
                    <h2>Référentiel de neurologie et psychiatrie</h2>
                </div>
                
                <div id="abc">
                    <nav>
                        <ul>
                            <li><a href="accueil.php">Accueil</a></li>
                            <li><a href="http://kemy79inf.unblog.fr/category/labo/">Link-Unblog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <div class="cote1"> 
                <nav>
                    <h3>Liens</h3>
                            <h4>Pathologies</h4>
                        <ul>
                            <li><a href="neuro.php">Neurologie</a></li>
                            <li><a href="psy.php">Psychiatrie</a></li>
                        </ul>
                            <h4>Médicaments</h4>
                        <ul>
                            <li><a href="mae.php">Antiépileptiques</a></li>
                            <li><a href="anti_psy.php">Antipsychotiques</a></li>
                            <li><a href="atd.php">Antidépresseurs</a></li>
                            <li><a href="anxio.php">Anxiolytiques</a></li>
                            <li><a href="stab_hum.php">Thymorégulateurs</a></li>
                            <li><a href="somni.php">Somnifères</a></li>
                            <li><a href="benzo.php">Benzodiazépines</a></li>
                            <li><a href="idlc.php">Inhibiteurs de la cholinestérase</a></li>
                            <li><a href="antipk.php">Antiparkinsoniens</a></li>
                        </ul>
                            <h4>Syndromes</h4>
                        <ul>
                            <li><a href="sep.php">Syndrome extrapyramidal</a></li>
                            <li><a href="snm.php">Syndrome neuroleptique malin</a></li>
                            <li><a href="syndsero.php">Syndrome sérotoninergique</a></li>
                        </ul>
                            <h4>Espace d'échanges</h4>
                        <ul>
                            <li><a href="/pure/ichatroom/ichat.php">Heidi-CHAT</a></li>
                            <li><a href="/pure/MVC_blog/Blogcon/Links/index.php">Heidi-BLOG</a></li>
                        </ul>
                </nav>
            </div>


            <div id="banniere_image">
                <div class="banni">
                    <a>Trouble schizo-affectif</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Trouble schizo-affectif</strong></h1>

                    <h3>Critères diagnostiques du trouble schizo-affectif selon le DSM-5 (code F25)</h3>

                    <p>A. Période ininterrompue de maladie caractérisée par la présence simultanée, à un moment donné, soit d'un épisode dépressif majeur, soit d'un épisode maniaque, 
                        et de symptômes répondant au critère A de la Schizophrénie qui pour mémoire sont :</p>
                        <ul>
                            <li><a>Idées délirantes</a></li>
                            <li><a>Hallucinations</a></li>
                            <li><a>Discours désorganisé (p. ex., coq-à-l’âne fréquents ou incohérence)</a></li>
                            <li><a>Comportement grossièrement désorganisé ou catatonique</a></li>
                            <li><a>Symptômes négatifs, (c.-à-d., réduction de l'expression émotionnelle ou aboulie)</a></li>
                        </ul>

                    <p>N.B. : L'Épisode dépressif majeur doit comprendre le Critère A1 : humeur dépressive (l'anhédonie étant un symptôme négatif de la schizophrénie).</p>

                    <p>B. Des idées délirantes ou des hallucinations ont été présentes pendant au moins 2 semaines, en l'absence de symptômes thymiques avérés (dépressif ou maniaque) sur l'ensemble de la durée de la maladie.</p>

                    <p>C. Les symptômes qui répondent aux critères d'un trouble majeur de l'humeur sont présents pendant une partie conséquente de la durée totale des périodes actives et résiduelles de la maladie.</p>

                    <p>D. La perturbation n'est pas due aux effets physiologiques directs d'une substance (p. ex. une substance donnant lieu à abus, un médicament) ou d'une affection médicale générale.</p>

                    <p>REM : Les parties mises en caractères gras correspondent aux changements introduits par rapport au DSM IV-R.</p>


                    <h4>Critères pour le sous-type</h4>

                    <p>Type bipolaire (F25.0) : si la perturbation comprend un épisode maniaque. Un épisode dépressif peut aussi survenir.</p>

                    <p>Type dépressif (F25.1): si la perturbation comprend uniquement des épisodes dépressifs majeurs.</p>

                    <p>Remarque : la différenciation entre ces deux sous-types tient à ce que les formes bipolaires sont de meilleur pronostic que les formes dépressives.</p>
                </article>
            </section>

            
            <footer>
                <div class="black_band">
                    <div class="black2">
                        <h1>Avancées/Actualitées :</h1>
                            <div class="tweet">
                                <ul>
                                    <li><a href="https://icm-institute.org/fr/epilepsie/">Epilepsie</a></li>
                                    <li><a href="https://www.fmh.ch/files/pdf19/2017_44_BMS_06151.pdf">Neurologie</a></li>
                                    <li><a href="https://www.ne.ch/autorites/DEF/SEEO/enseignement-specialise/Documents/Autisme%20reconnaitreetcomprendre.pdf">Autisme</a></li>
                                    <li><a href="https://icm-institute.org/wp-content/uploads/2016/01/master_5ans_fr_web.pdf">Avancées majeures</a></li>
                                </ul>
                            </div>
                    </div>     

                    <div id="medics">
                        <h1>Quelques associations Suisses :</h1>
                        <div id="listes_ttt">
                            <ul>
                                <li><a href="https://www.epi.ch/index.php?language=fr">Ligue contre l'épilepsie Suisse</a></li>
                                <li><a href="http://www.alz.ch/index.php/alzheimer-et-autres-demences.html">Alzheimer Suisse</a></li>
                                <li><a href="https://www.autisme.ch/">Association autisme Romandie</a></li>
                                <li><a href="https://www.parkinson.ch/index.php?id=1&no_cache=1&L=2">Parkinson Suisse</a></li>
                            </ul>

                            <ul class="clas2">
                                <li><a href="http://stiftung-shv.ch/fr/">Fondation de l'Association Huntington Suisse</a></li>
                                <li><a href="https://www.tourette-romandie.ch/">Tourette Romandie</a></li>
                                <li><a href="http://www.fragile.ch/fr/suisse/">Fragile Suisse</a></li>
                                <li><a href="http://www.sla-suisse.ch/fr/association_sla_suisse/">Association SLA Suisse</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
