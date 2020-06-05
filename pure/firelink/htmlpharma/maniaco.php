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
        <link rel="stylesheet" href="../css/maniaco.css" type="text/css" /> 
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
                    <a>Trouble bipolaire</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Maniaco-dépression (trouble bipolaire)</strong></h1>

                        <p><strong>Définition: </strong>La bipolarité se définit par la présence d'épisode dépressifs alternés avec des épisodes de polarité inverse (manie ou hypomanie).</p>

                    <h3>Description clinique</h3>

                        <p><strong>Episode dépressif caractérisé au moins par 5 symptômes dépressifs pendant une durée de 2 semaines:</strong></p>
                            <ul>
                                <li>Perte d'intérêt pour les activités agréables</li>
                                <li>Etat de tristesse, de pleurs</li>
                                <li>Sommeil perturbé avec insomnie/mauvais sommeil non récupérateur</li>
                                <li>Appétit perturbé</li>
                                <li>Changement du poids</li>
                                <li>Incapacité de se mettre dans l'action</li>
                                <li>Discours ralenti et assez pauvre</li>
                                <li>Estime de soi négative</li>
                                <li>Sentiment d'inutilité</li>
                                <li>Idées morbides ou de suicide</li>
                                <li>Irritabilité</li>
                                <li>Réduction d'activité</li>
                            </ul>
                        <p><strong>Episode maniaque caractérisé au moins par 3 symptômes si l'humeur est euphorique, 4 si l'humeur est irritable pendant une durée d'une semaine:</strong></p>
                            <ul>
                                <li>Excès d'activité, trop de projets</li>
                                <li>Engagement excessif dans des activités agréables: achats inconsidérables, conduites sexuelles</li>
                                <li>Réduction du temps de sommeil avec l'impression d'être en forme</li>
                                <li>Facilité de contact avec les autres (sociabilité +++)</li>
                                <li>Changement de poids</li>
                                <li>Levé des inhibitions, manque de pudeur</li>
                                <li>Discours rapide et fort (logorrhée)</li>
                                <li>Estime de soi amplifiée, idées de grandeur</li>
                                <li>Pensées accélérées (Tachypsychie)</li>
                                <li>Fuite des idées</li>
                                <li>Sentiment d'irritabilité</li>
                                <li>Etat d'euphorie, d'exaltation</li>
                            </ul>
                        <p><strong>Episode hypomaniaque caractérisé au moins par au moins 3 symptômes tous les jours pendant au moins 4 jours:</strong></p>
                            <ul>
                                <li>Une réducation du temps de sommeil</li>
                                <li>Une sociabilité plus grande/à l'habitude</li>
                                <li>Une augmentation de l'activité physique et/ou psychique</li>
                                <li>Une augmentation de l'estime de soi</li>
                                <li>Une distractibilité plus grande</li>
                                <li>Des achats ou projets inconsidérés</li>
                            </ul>

                    <h3>Différentes formes de Manie</h3>

                        <p>Tous les épisodes maniaques ont en commun un syndrome dit « d'activation ».</p>

                        <p>Il en existe 4 formes:</p>
                            <ul>
                                <li><strong>La forme euphorique</strong></br>
                                    C'est la plus classique avec un sentiment de bien être, exaltation</li>

                                <li><strong>La forme dépressive ou mixte</strong></br>
                                    Il existe une hyperactivité mais avec un sentiment dépressif, culpabilité</li>

                                <li><strong>La forme psychotique ou délirante</strong></br>
                                    23 pour cent des patients présentent des idées délirantes ou hallucinations</li>

                                <li><strong>Les formes comorbides</strong></br> 
                                    Touche surtout les hommes avec abus de substance (alcool, cannabis)</li>
                            </ul>

                    <h3>Formes de troubles bipolaires</h3>

                        <p><strong>Trouble bipolaire de type I :</strong></br>
                           Alternance d'épisodes dépressifs et de phases maniaques (anciennement PMD)</p>

                        <p><strong>Trouble bipolaire de type II :</strong></br>
                           Alternance d'épisodes dépressifs et de phases hypomanes</p>

                        <p><strong>Cyclothymie :</strong></br>
                           Elle se définit par une succession sur une durée minimale de 2 ans de :</p>

                        <p><strong>Périodes d'hypomanie :</strong></br>
                           De dépressions légères (Les patients cyclothymiques du fait des variations fréquentes et rapides de l'humeur sont plus sensibles aux situations de stress et présentent
                           des difficultés d'adaptation)</br>
                           Évolution vers un trouble bipolaire II</p>

                        <p><strong>États mixtes</strong></br>
                           Présence des symptômes maniaques et dépressifs simultanés 6 états mixtes sont possibles</p>

                    <p><i>Tiré du site -> https://www.sante-centre.fr/portail_v1/gallery_files/site/133/996/1541/2330.pdf</i></p>
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
