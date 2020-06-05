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
        <link rel="stylesheet" href="../css/tbl_bl.css" type="text/css" /> 
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
                    <a>Trouble de la personnalité état limite</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Trouble de la personnalité état limite (borderline)</strong></h1>
                    <h3>Epidémiologie</h3>
                        <ul>
                            <li>2% de la population générale</li>
                            <li>75% sont des femmes</li>
                            <li>10% des consultations psychiatriques</li>
                            <li>20% des patients hospitalisés en psychiatrie</li>
                            <li>30 à 60% des consultations pour troubles de la personnalité</li>
                        </ul>

                    <h3>Evolution</h3>
                        <ul>
                            <li>Instabilité marquée au début de l'âge adulte.</li>
                                <ul>
                                    <li>Episodes majeurs de perte de contrôle des affects ou des impulsions, et recours important aux systèmes de soins et de santé mentale (risque suicidaire accru).</li>
                                </ul>
                            <li>Atténuation de la suicidalité avec l'âge, atténuation de la symptomatologie (travail, relation) vers 40-50 ans.</li>
                        </ul>

                    <h3>Diagnostique selon DSM-IV</h3>
                    <p>Trouble bipolaire</br>
                       Dysmorphophobie</p>

                    <h3>Trouble de la personnalité: personalité borderline</h3>
                        <ul>
                            <li>Efforts effrénés pour éviter les abandons réels ou imaginés.</li>
                            <li>Mode de relations interpersonnelles instables et intenses caractérisé par l'alternance entre des positions extrêmes d'idéalisation excessive et de dévalorisation.</li>
                            <li>Impulsivité dans au moins 2 domaines potentiellement dommageables pour le sujet: sexualité, toxicomanie, crise de boulimie.</li>
                            <li>Sentiment chronique de vide.</li>
                            <li>Instabilité affective due à une réactivité marquée de l'humeur (irritabilité et anxiété).</li>
                            <li>Colères intenses et inappropriées ou difficultés à contrôler sa colère (mauvaise humeur fréquente, colère constante ou bagarres répétées).</li>
                        </ul>

                    <h3>Shémas précoces inadaptés</h3>
                    <p>Les expérience relationnelle qui se sont mal déroulées durant l'enfance favorisent le développement de schémas précoces inadaptés.</p>
                        <ul>
                            <li>Carence affective, manque de sécurité, manque de compréhension, manque d'amour, etc.</li>
                            <li>Maltraitances, abus physiques, sexuels et psychologiques, etc.</li>
                            <li>Enfant roi, enfant sur-gâté, manque de limites, etc.</li>
                            <li>Identification sélective avec un des donneurs de soins (imitations).</li>
                        </ul>
                    <p>Les schémas inadaptés ont tendance à ce maintenir eux-mêmes et à se rigidifier lors de l'âge adulte.</p>

                    <h3>Comorbidités</h3>
                        <ul>
                            <li>Troubles de l'humeur</li>
                                <ul>
                                    <li>Troubles dépressifs</li>
                                    <li>Troubles bipolaires</li>
                                    <li>Troubles anxieux (stress post-traumatique, agoraphobie, phobie sociale)</li>
                                </ul>
                            <li>Troubles de la personnalité</li>
                                <ul>
                                    <li>Personnalité histrionique</li>
                                    <li>Personnalité antisociale</li>
                                    <li>Traits narcissiques et paranoïaques</li>
                                    <li>Personnalité dépendante</li>
                                </ul>
                            <li>Abus de substances psychotropes</li>
                                <ul>
                                    <li>Abus ou dépendance</li>
                                    <li>Troubles alimentaires</li>
                                </ul>
                            <li>Troubles alimentaires</li>
                                <ul>
                                    <li>Anorexie mentale</li>
                                    <li>Boulimie nerveuse, hyperphagie boulimique</li>
                                </ul>
                        </ul>

                    <h3>Traitements existants</h3>
                        <ul>
                            <li>Modèle de Kernberg</li>
                                <ul>
                                    <li>Thérapie des relations interpersonnelles</li>
                                </ul>
                            <li>Modèle de Young - Thérapie des shémas dysfonctionnels</li>
                                <ul>
                                    <li>Thérapie cognitive et interpersonnelle</li>
                                </ul>
                            <li>Modèle de Marsha Linehan</li>
                                <ul>
                                    <li>Apprentissage de la gestion des émotions</li>
                                </ul>
                            <li>Approche psychiatrique</li>
                        </ul>
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
