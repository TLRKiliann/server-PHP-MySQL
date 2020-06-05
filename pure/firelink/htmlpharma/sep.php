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
        <link rel="stylesheet" href="../css/sep.css" type="text/css" /> 
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
                    <a>Syndrome Extrapyramidal</a>
                </div>
                <div id="banniere_description">
                    <a href="antipk.php" class="bouton_rouge2">Antiparkinsoniens</a>
                    <a href="snm.php" class="bouton_rouge">SNM</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/brainlogo.png" alt="Les épilepsies" class="ico_categorie" /><strong>Le système extrapyramidal</strong></h1>

                    <p>Le système extrapyramidal qui est constitué par:<a href="../images/putamen.jpg"> le striatum (putamen + noyau caudé (caudate nucleus)), 
                        pallidum (globus pallidus), locus niger (LN), thalamus (noyau antérieur et ventro-latéral) et noyaux sous-thalamiques (corps  de  Luys, 
                        noyau rouge...)</a> (pour en voir plus :<a href="../images/noyau_baso.jpg">image 2</a>) joue un rôle majeur dans la régulation du mouvement volontaire. 
                        <strong>L’atteinte de la boucle dopaminergique <a href="../images/vnigros.jpg">nigro-striée</a> est le principal mécanisme des syndromes extrapyramidaux</strong>. 
                    	La diminution de la synthèse de dopamine au niveau du LN (ou le blocage des récepteurs) entraîne une levée de l’inhibition normalement exercée 
                    	sur les neurones cholinergiques du striatum (par l’intermédiaire de neurones GABAergiques). L’akinésie en est la traduction clinique. 
                    L’interprétation des autres signes (tremblement, rigidité) est plus difficile et fait intervenir probablement l’atteinte d’autres voies.</p>

                    <h3>LE SYNDROME EXTRAPYRAMIDAL</h3>

                    <p>Le Syndrome extrapyramidal (syndrome neuroleptique ou syndrome parkinsonien), survient au début du traitement. Il survient généralement avec 
                    	les neuroleptiques incisifs et peut être traité par des antagonistes tels que des antiparkinsoniens anticholinergiques. Leur usage systématique est
                    toutefois contesté. Les principales manifestations cliniques de ce syndrome extrapyramidal sont :</p>
                        <ul>
                            <li><strong>Ataxie</strong></li>
                                <ul>
                                    <li>Trouble de la coordination qui affecte le mouvement volontaire et perturbe les contractions musculaires nécessaires aux ajustements 
                                        posturaux et à la station debout Classiquement, l’ataxie désignait un trouble de la coordination par atteinte de la sensibilité 
                                        profonde ; en fait, on y intègre actuellement l’incoordination cérébelleuse et les déséquilibres vestibulaires</li>
                                    <ul>
                                        <li>Ataxie proprioceptive: aggravée par l’occlusion des yeux Romberg, marche talonnante, épreuve doigt/nez, talon/genou, perte 
                                        de la sensibilité à la pression</li>
                                        <li>Ataxie labyrinthique: troubles de la statique et de l’exécution du mouvement</li>
                                        <li>Ataxie cérebelleuse: trouble de l’équilibre à la marche et la station debout</li>
                                    </ul>
                                </ul>
                            <li><strong>Akinésie</strong></li>
                                <ul>
                                    <li>C'est la réduction et surtout la lenteur d'initiation des gestes. Les mouvements sont rares, lents, parfois impossibles.</li>
                                    <li>L'akinésie se manifeste surtout pour les mouvements automatiques : mimique faciale et marche.</li>
                                        <ul>
                                            <li>Marche à petits pas. L'initiation de la marche est difficile, « bégayante » (abasie trépidante ou freezing) 
                                            et le ballant automatique des bras a disparu.</li>
                                            <li>Faciès figé ou amimie faciale. Perte des mouvements automatiques de la face accompagnant habituellement les 
                                                émotions ou la parole. Disparation ou rareté du clignement.</li>
                                        </ul>
                                    <li>L'akinésie est variable dans le temps, avec des kinésies paradoxales (festinations : la marche s'accélère soudainement 
                                        et peut engendrer une chute), de fluctuations circadiennes (c'est-à-dire au cours du nycthémère). L'akinésie est accrue 
                                        ou déclenchée par l'émotion, la fatigue, un obstacle visuel.</li>
                                </ul>

                            <li><strong>Diction monotone</strong></li>
                                <ul>
                                    <li>Dysarthrie parkinsonienne : l'élocution est monotone avec des troubles du débit, soit ralentie (bradyphémie) 
                                    ou au contraire accélérée (tachyphémie).</li>
                                </ul>
                            <li><strong>Dyskinésies</strong></li>
                                <ul>
                                    <li>Activité motrice involontaire, lente et stéréotypée.</li>
                                </ul>
                            <li><strong>Rigidité (hypertonie extrapyramidale)</strong></li>
                                <ul>
                                    <li>C'est une résistance aux mouvements passifs imposés aux membres par l'examinateur. Elle est plastique, comparée à un tuyau 
                                    de plomb et cède par à coups : phénomènes de la roue dentée.</li>
                                        <ul>
                                            <li>plastique (tuyau de plomb)</li>
                                            <li>signe de Froment et phénomène de la roue dentée</li>
                                            <li>prédomine sur les fléchisseurs</li>
                                        </ul>
                                </ul>
                            <li><strong>Tremblement au repos (oscillations rythmiques involontaires)</strong></li>

                            <li><strong>Tremblement parkinsonien (prédomine aux extrémités des membres, ne touche jamais la tête)</strong></li>

                            <li><strong>Hypersialorrhée</strong></li>
                                <ul>
                                    <li>Salivation excessive ou hyper-salivation.</li>
                                </ul>
                        </ul>
                    <p>Elles peuvent être associées à un syndrome akinéto-hypertonique (akathisie ou impossibilité de rester assis, tasikinésie ou impossibilité 
                    de rester immobile) : Ces dyskinésies précoces peuvent être transitoires et régressives. Les bêta bloquants et les benzodiazépines permettent 
                    de corriger certains effets dyskinétiques.</p>

                    <div id="liens">
                        <h3>Syndrome parkinsonien (extrapyramidal)</h3>
                    </div>

                    <p>L’origine iatrogène (prise de neuroleptiques) doit être recherchée de façon systématique devant tout syndrome parkinsonien.</p>

                    <p>On peut distinguer des syndromes parkinsoniens dégénératifs atypiques:</p>
                        <ul>
                            <li>Atrophie multisystématisée et démence à corps de Lewy dans le cadre des synucléinopathies.</li>
                            <li>Paralysie supranucléaire progressive et dégénérescence corticobasale dans le cadre des tauopathies (<a href="https://www.pourlascience.fr/sd/neurosciences/les-tauopathies-des-agregats-dans-les-neurones-7365.php">dégénérescence fronto-temporale, alzheimer, parkinson, maladie de Steele-Richardson, maladie de Pick...</a>).</li>
                        </ul>

                    <p>Le syndrome extrapyramidal est, en pratique, un ensemble de syndromes moteurs où l'on classe d'une part le syndrome parkinsonien, 
                        d'autre part les <a href="https://www.cen-neurologie.fr/premier-cycle/s%C3%A9miologie-analytique/syndrome-myogene-myopathique/syndrome-myogene-myopathique-2">mouvements 
                        involontaires</a>.</p>

                    <p>Les 3 symptômes majeurs sont:</p>
                        <ul>
                            <li>Le tremblement au repos</li>
                            <li>La bradykinésie ou l'akinésie</li>
                            <li>L'hypertonie (rigidité, mouvement en roue dentée)</li>
                        </ul>  
                    <p>L'examen neurologique pour déceler les symptômes passe par :</p>
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=ZVSYlKyuWZM">La manoeuvre de Froment</a> (permet de tester les extrémités au niveau des pouces des 2 mains.)</li>
                            <li><a href="https://www.youtube.com/watch?v=iVL6_jkn9Tk">Tremblement au repos</a> (l'amplitude augmente aux émotions et au calcul mental, mais disparaît 
                            lors d'un mouvement volontaire (comme boire un verre d'eau). Il peut toucher les lèvres et le menton, mais jamais l'ensemble de la tête.</li>
                            <li><a href="https://www.youtube.com/watch?v=rj5o0kg9BjU">La manoeuvre de Barré.</a></li>
                        </ul>


                    <h3>Diagnostic différentiel</h3>

                    <p><strong>Tremblement d'attitude</strong></p>

                    <p>Il importe de différencier un tremblement de repos d'un tremblement d'attitude. En effet, les deux peuvent s'observer au cours d'un syndrome 
                    parkinsonien, mais seul le tremblement de repos est caractéristique. Le tremblement d'attitude, bien mis en évidence lors de l'épreuve des 
                    bras tendus ou lors de l'épreuve des index mis l'un face à l'autre, est typiquement rapide, et surtout disparaît au repos vrai. Un tremblement 
                    isolé de la tête (tremblement du chef) n'est pas parkinsonien.</p>

                    <p>Plus rarement, le tremblement peut atteindre les membres inférieurs et les pieds, ou encore le contour de la bouche, mais ne touche 
                    jamais la tête (à la différence du tremblement essentiel).</p>


                    <h3>A voir aussi</h3>

                    <p><strong>Liens de site :</strong></p>
                        <ul>
                            <li><a href="http://www.chups.jussieu.fr/polys/neuro/semioneuro/POLY.Chp.3.2.3.html">Syndrome moteur central (site)</a></li>
                            <li><a href="https://www.cen-neurologie.fr/premier-cycle/semiologie-analytique/syndrome-myogene-myopathique/syndrome-myogene-myopathique-11">Syndrome 
                            parkinsonien (site)</a></li>
                        </ul>

                    <p><strong>Liens vidéos :</strong></p>
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=LIcOFJLSbUk">Récapitulatif des symptômes de Parkinson (vidéo)</a></li>
                            <li><a href="https://www.youtube.com/watch?v=sJqKvajUC3k">Examen neurologique d'un Parkinson (vidéo)</a></li>
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