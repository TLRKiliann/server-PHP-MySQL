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
        <link rel="stylesheet" href="../css/schizof.css" type="text/css" /> 
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
                    <a>Schizophrénie</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Schizophrénie</strong></h1>


                    <h3>Définition</h3>
                    <p>La schizophrénie est caractérisée par la psychose, des hallucinations, des idées délirantes, un comportement et une parole désorganisés, une affectivité lisse,
                       des déficiences cognitives et un dysfonctionnement social et professionnel. Elle peut survenir au début de l'adolescence ou avant l'âge adulte. Dans le monde, la fréquence de la schizophrénie
                       est de près de 1%.</p>

                    <h3>Ethiologie</h3>
                    <p>Bien que la cause spécifique soit inconnue, la schizophrénie a une base biologique mise en évidence par des altérations structurelles cérébrales. Plusieurs régions du cerveau sont concernées
                       en plus des modifications des neurotransmetteurs.</br>
                       La vulnérabilité neurodéveloppementale à la schizophrénie peut être due à des prédispositions génétiques; à des complications intra-utérines, natales ou postnatales; à des infections virales du SNC.
                       L'exposition maternelle à la malnutrition et à la grippe pendant le 2ème trimestre de grossesse, un poids de naissance inférieur à 2500g, l'incompatibilité RH lors d'une 2ème grossesse et l'hypoxie
                       augmentent les risques.</p>

                    <p>Bien que la plupart des schizophrènes n'aient pas d'ATCD familiaux, les facteurs génétiques jouent un rôle. Les personnes ayant un parent de 1er degré atteint de schizophrénie présentent un risque 
                       de manifester le trouble de près de 10%, par rapport à un risque de 1% dans la population générale. Les jumeaux monozygotes ont une concordance de près de 50%.</p>

                    <p>Des facteurs de stress environnemental peuvent déclencher l'apparition ou la récidive des symptômes chez les patients vulnérables. Les facteurs de stress peuvent être biochimiques ou sociaux.</br>
                       Les facteur protecteurs qui peuvent atténuer l'effet du stress sur l'apparition et l'exacerbation des symptômes incluent un bon soutien social, des capacités d'adaptation et des antipsychotiques.</p>

                    <h3>Sous-types</h3>
                    <p>5 sous-types à la schizophrénie ont été décrits.</p>
                        <ul>
                            <li>Paranoïde</li>
                            <li>Désorganisée</li>
                            <li>Catatonique</li>
                            <li>Résiduelle</li>
                            <li>Indifférenciée</li>
                        </ul>
                    <p><strong>Schizophrénie paranoïde:</strong></br>
                       Caractérisée par des idées délirantes ou des hallucinations auditives, associées à la conservation relative des capacités intellectuelles et de l'affect.</p>

                    <p><strong>Schizophrénie désorganisé (hébéphrène):</strong></br>
                       Désorganistion du discours et du comportement et affects émoussés ou inadéquats.</p>

                    <p><strong>Schizophrénie catatonique:</strong></br>
                       Immobilité, inactivité et postures étranges.</p>

                    <p><strong>Schizophrénie résiduelle:</strong></br>
                       Antécédents clairs de schizophrénie avec symptômes négatifs légers.</p>

                    <p><strong>Schizophrénie indifférenciée:</strong></br>
                       Symptômes mixtes.</p>

                    <h3>Schizophrénie et trouble de la personnalité</h3>
                    <p><strong>La personnalité paranoïaque</strong> est caractérisée par la méfiance soupçonneuse envers les autres dont les intentions sont interprérées comme malveillantes.</p>
                    <p><strong>La personnalité schizoïde</strong> est caractérisée par un détachement des relations sociales et une restriction de la variété des expressions émotionnelles.</p>
                    <p><strong>La personnalité schizotypique</strong> est caractérisée par une gêne aiguë dans les relations proches, par des distorsions cognitives et perceptuelles et des conduites excentriques.</p>

                    <h3>Les psychoses et la co-morbidité</h3>
                    <p>Tableau des co-morbidités (prévalences)</p>
                        <ul>
                            <li>Drogues - 60%</li>
                            <li>Alcool - 30%</li>
                            <li>Dépression - 15%</li>
                            <li>Phobies - 7%</li>
                            <li>TOC - 5%</li>
                        </ul>

                    <h3>Evolution et suivi</h3>
                    <p>L'évolution favorable dépend de la durée du suivi.</p>
                    <p>Quand le suivi s'allonge l'évolution tend a être défavorable.</p>
                        <ul>
                            <li>43,7% de 1 à 2 ans</li>
                            <li>40% de 2 à 4 ans</li>
                            <li>38% de 4 à 10 ans</li>
                            <li>29% de 10 à 20 ans</li>
                        </ul>

                    <h3>Problèmes cliniques</h3>
                        <ul>
                            <li>Le poids des facteurs génétiques</li>
                            <li>L'importance des altérations du fonctionnement</li>
                            <li>La vulnérabilité au stress</li>
                        </ul>
      
                    <h3>Symptomatologie</h3>

                    <p><strong>Symptomatologie positive:</strong></p>
                    <p>Les symptômes positifs sont caractérisés par un excès ou une altération des fonctions normales.</p>
                        <ul>
                            <li>idées délirantes</li>
                            <li>hallucinations pouvant impliquer l’ensemble des sens</li>
                            <li>déréalisation (impression d’étrangeté du monde, qui paraît irréel, flou, qui manque de sens)</li>
                            <li>dépersonnalisation (impression de sortir de son propre corps)</li>
                            <li>désorganisation ou troubles du cours de la pensée</li>
                        </ul>
                    <p><strong>Symptomatologie négative:</strong></p>
                    <p>Les symptômes négatifs sont caractérisés par une diminution ou une perte des fonctions normales.</p>
                        <ul>
                            <li>émoussement des affects</li>
                            <li>pauvreté du discours</li>
                            <li>alogie</li>
                            <li>avolition</li>
                            <li>apathie</li>
                            <li>anhédonie</li>
                            <li>retrait social</li>
                            <li>manque d'attention</li>
                            <li>apragmatisme</li>
                            <li>perte de l'élan vital</li>
                        </ul>

                    <h3>Psychose et traitement</h3>
                        <ul>
                            <li>Pharmacologique <a href="anti_psy.php">(neuroleptique)</a></li>
                            <li>Psychodynamique (thérapie systémique)</li>
                            <li>Thérapies comportementales</li>
                            <li>Exercices d'habiletés</li>
                            <li>Thérapies cognitives</li>
                            <li>Thérapies émotionnelles</li>
                        </ul>

                    <h3>Suicide</h3>
                    <p>Près de 10% des patients qui souffrent de schizophrénie se suicident. Le suicide est la principale cause de décès prématuré chez les personnes schizophrène.</p>

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
