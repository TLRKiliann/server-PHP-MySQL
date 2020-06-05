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
        <link rel="stylesheet" href="../css/epi.css" type="text/css" /> 
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
                    <a>Epilepsies</a>
                </div>
                <div id="banniere_description">
                    <a href="neuro.php" class="bouton_rouge2">Précédent</a>
                    <a href="mae.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/eclair.png" alt="Les épilepsies" class="ico_categorie" /><strong>Epilepsies</strong></h1>

                    <p><strong>Définition:</strong> Altération neurologique fonctionnelle transitoire. Dépolarisation paroxystique d'un foyer de neurones synchrones. La décharge 
                        électrique peut se propager 
                        dans une hémisphère cérébrale ou dans les 2 (crise généralisée).</p>

                    <h3>Ethymologie</h3>
                    <p>L'épilepsie vient du terme empilanbanein (grec ancien) qui signifie prendre par surprise, ce qui est une demie vérité pour les épileptiques qui ont des 
                       auras (prodrome ou phase prodromique) comme c'est le cas dans le cadre de la crise partielle complexe. Dans la littérature, on peut souvent tomber sur 
                       le terme "mal comitial" qui est un synonyme de crise d'épilepsie. Il tire son origine du temps des comices romains qui se voyaient interrompu par une crise 
                       qui qualifiaient comme étant l'équivalent de mauvais auspices.</p>

                    <h3>Le diagnostique</h3>
                    <p>Le diagnostique de l'épilepsie repose essentiellement sur le tracé de l'EEG. Les manifestations symptomatiques peuvent aider à mettre sur la voix, cependant 
                       le diagnostique se fait toujours par l'EEG qui lui va permettre d'identifier la phase critique ou inter-critique. Un syndrome épileptique n'est pas synonyme 
                       de crise d'épilepsie. Il faut généralement plusieurs crises d'épilepsie avant que le sujet soit diagnostiqué comme étant épileptique. L'épilepsie est 
                   généralement diagnostiquée sur le moyen, long terme. Une crise inaugurale ne peut donc pas être diagnostiquée comme étant une crise d'épilepsie.</p>

                    <p>La prévalence se situe entre 1% à 2% de la population. Les tranche d'âge concernées sont les 0 à 16-18 ans et les personnes âgées depuis 65 ans et plus.</p> 

                    <h3>Les facteurs déclencheurs</h3>
                    <p>Les causes de l'épilepsie sont multiples. Ci-dessous les causes pouvant déclencher une crise:</p>

                    <ul>
                        <li>Encéphalopathie, accouchement difficile, anoxie cérébrale.</li>
                        <li>Rubéole de la mère, toxoplasmose, drogues, etc...</li> 
                        <li>Alcool, drogues, sevrage à l'alcool, sevrage aux benzodiazépines.</li>
                        <li>Gaz (CO2), métaux, intoxication médicamenteuse.</li>
                        <li>Couleurs vives, stroboscope, jeux-vidéos, etc...</li>
                        <li>Hyper...K, Ca, Na ou hypo...K, Ca, Na, déséquilibre électrolytique, acidose.</li>
                        <li>Stress, déshydratation, fatigue.</li>
                        <li>Trauma crânien cérébral, chute, lésions cérébrale.</li>
                        <li>Pharmaco-résistance.</li>
                    </ul>

                    <h3>Les différentes crises d'épilepsie</h3>
                    <p>Il y a plusieurs types de crise d'épilepsie différentes. Chacune étant singulière. Voyons quelles sont celles qui existent:<p/>

                    <p>Crise partielle (focale) simple:</p>
                        <ul>
                            <li>Un foyer (plusieurs neurones) impliqué dans la crise d'épilepsie.</li>
                        </ul>


                    <p>Crise partielle (focale) complexe:</p>
                        <ul>
                            <li>Un foyer qui qui diffuse la propagation électrique vers un autre foyer ou plusieurs foyer(phénomène moteur et végétatif).</li>
                            <li>Ces crises peuvent avoir lieu avec ou sans altération de la conscience. Aussi, c'est principalement dans ce type de crise qu'une aura peut se manifester.</li>
                        </ul>

                    <p>Les crises généralisées:</p>
                        <ul>
                            <li>Ces crises peuvent avoir lieu avec ou sans convulsions, mais toujours avec une altération de la conscience, excepté pour les crises myocloniques. 
                                Les absences en font partie. On peut les distinguer entre les absences typique et atypique.</li>
                        </ul>


                    <p>Crise tonico-clonique généralisée (CTCG) ou état de grand mal épileptique (EGME):</p>
                    <p>Crise se déroulant en 3 phases:</p>
                        <ul class="tonico">
                            <li>Phase tonique: 10-20 sec</li>
                                <p>Contractures musculaires dans tout le corps, perte de connaissance, cri, chute.</p>

                            <li>Phase clonique: 20-30 sec</li>
                                <p>Secousses rythmiques (synchrones).</p>

                            <li>Phase post-ictale: (résolutive)</li>
                                <p>Relâchement, stertor, perte des urines, confusion, agitation, épuisement.</p>
                        </ul>

                    <p>Etat de mal épileptique (EME):</p> 
                        <ul>
                            <li>Au-delà de 30 à 60 min., la crise généralisée est qualifiée d'état de mal épileptique et il est vitale d'agir le plus rapidement possible afin que 
                                la personne puisse éviter de subir des lésions cérébrales trop importantes, notamment à cause de l'hyperthermie et de l'acidose suivant l'EME.</li>
                        </ul>
     
                    <div id="liens">
                        <h3>Evolution des crises</h3>
                    </div>
                        <p>Une crise d'épilepsie peut évoluer vers un autre type de crise. Ci-dessous, les diverses évolutions possibles:</p>
                        <ul>
                            <li>Une crise partielle simple peut engendrer en crise partielle complexe.</li>
                            <li>Une crise partielle simple peut engendrer en crise partielle complexe et secondairement se généraliser.</li>
                            <li>Une crise partielle simple peut secondairement se généraliser.</li>
                            <li>Une crise partielle complexe peut secondairement se généraliser.</li>
                        </ul>
                        <p>3/4 des enfants épileptiques guérissent à l'adolescence, vers 16-18 ans. Il est également possible que les crises mutent (une crise pouvant évoluer vers 
                           un autre type de crise).  </p>

                        <h3>Phase critique - Phase inter-critique - Phase post-critique</h3>
                            <ul>
                                <li>Phase critique:</li>	
                                    <p>Phase au moment de la crise d'épilepsie</p>
                                <li>Phase inter-critique:</li>	
                                    <p>Phase qui se situe entre 2 crises.</p>
                                <li>Phase post-critique:</li>
                                    <p>Phase suivant la crise d'épilepsie.</p>
                            </ul>

                        <h3>Comment agir ?</h3>
                        <p>Dans le cadre d'une crise tonico-clonique généralisée il est important de :</p>
                            <ul>
                                <li>Sécuriser la personne en crise et regarder la montre pour savoir le temps de crise</li>
                                <li>Enlever les lunettes</li>
                                <li>Ne pas retenir la personne le temps de la crise</li>
                                <li>Ne pas mettre les doigts dans la bouche pendant la crise</li>
                                <li>L'écarter d'un plan d'eau</li>
                                <li>Faciliter sa respiration (dénouer la cravate, ouvrir la chemise)</li>
                                <li>Dégager les voies aériennes supérieures si elles sont encombrées en fin de crise (attention si crise à répétition)</li>
                                <li>Mettre la personne en position latérale de sécurité</li>
                                <li>Rassurer la personne et lui expliquant qu'elle a eu une crise</li>
                                <li>Lui poser des questions pour évaluer son état de conscience</li>
                                <li>Si la confusion dure 30 min ou plus -> appeler les urgences!</li>
                                <li>Si crise à répétition sans ttt Midazolam IN -> appler les urgences!</li>
                                <li>Si après administration de Midazolam la personne continue à faire des crises -> appeler les urgences</li>
                                <li>Appeler les urgences si le temps de crise dure plus de 2 min.</li>
                            </ul>
                        <h2>Quelques bonnes pratiques de la Directrice de la Ligue contre l'Epilepsie</h2>
                        <p>Chère lectrice, cher lecteur,</p>
                        <p>Je sais normalement ce qu’il faut faire en cas de crise épileptique. Ce savoir fait partie de mon travail et j’en ai suffisamment souvent parlé 
                           aux autres. Beaucoup de gens ont, à un moment ou un autre, entendu qu’il fallait mettre quelque chose en bouche pour éviter que la victime avale 
                           sa langue. Avec tout le respect que je vous dois, c’est idiot. Notre langue est fermement attachée et insérer rapidement un objet en bouche risque 
                           de faire plus de dégâts qu’autre chose. Le pire, c’est d’utiliser ses propres doigts. Le résultat peut être sanglant.</p>

                        <p>Mais récemment, quand le chat d’une amie proche a eu une crise grand mal, je me suis sentie dépassée. J’ai réussi à me souvenir de rester calme et de 
                           le protéger contre les blessures. Mais regarder ma montre à temps pour mesurer la durée de la crise : raté. Idem, je n’ai pas pensé à sortir mon 
                       smartphone pour filmer les convulsions. Les médecins apprécient les vidéos des crises, mais mon amie n’en a toujours pas. Eh oui, il n’est pas toujours 
                       facile de mettre en pratique ses connaissances. Mais si vous assistez pour la première fois à une crise épileptique sévère : ne paniquez pas protégez 
                       plutôt la tête de la victime avec quelque chose de mou ! C’est déjà une très bonne chose de faite.</p>
                        <p>Julia Franke, directrice de la Ligue contre l’Epilepsie</p>

                        <h3>Quelques crises en vidéo (ATTENTION les vidéos peuvent être choquantes!)</h3>
                        <div class="notabn">
                            <ul>
                                <li><a href="https://www.youtube.com/watch?v=35GJLKZow0Y">Crise tonico-clonique généralisée (état de grand mal)</a></li>
                                <li><a href="https://www.youtube.com/watch?v=25x63rugR2E">Absence</a></li>
                                <li><a href="https://www.youtube.com/watch?v=xzBBezFqVMo">Crise myoclonique</a></li>
                                <li><a href="https://www.youtube.com/watch?v=VhJhpU81bmY">Crise partielle complexe</a></li>
                                <li><a href="https://www.youtube.com/watch?v=BOqgJNpByM0">Crise giratoire</a></li>
                                <li><a href="https://www.youtube.com/watch?v=zu1EmD20588&list=PL22gxnFcmVURsvjb8eQqeGFe54Eru_x00&index=4">Crise atonique</a></li>
                            </ul>
                        </div>
                        <h3>Voir aussi...</h3>
                        <div class="notabn">
                            <ul>
                                <li><a href="https://www.orpha.net/consor/cgi-bin/OC_Exp.php?Lng=FR&Expert=2382">Syndrome de Lennox-Gastaut</a></li>
                                <li><a href="../docs/West.pdf">Syndrome de West</a></li>
                            </ul>
                        </div>
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

