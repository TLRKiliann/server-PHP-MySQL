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
        <link rel="stylesheet" href="../css/dysto.css" type="text/css" /> 
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
                    <a>Dystonie</a>
                </div>
                <div id="banniere_description">
                    <a href="neuro.php" class="bouton_rouge2">Neurologie</a>
                    <a href="spas.php" class="bouton_rouge">Spasticité</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/brainlogo.png" alt="Les épilepsies" class="ico_categorie" /><strong>Dystonie</strong></h1>

                    <h3>Définition:</h3>

                        <p>Les patients atteints de dystonie présentent des spasmes ou contractions musculaires involontaires. Ces contractions entrainent 
                           des mouvements brusques et de torsion ainsi que des postures anormales d’une ou plusieurs parties du corps. La dystonie peut 
                           toucher toutes les parties du corps mais la plupart du temps seule une région est atteinte. Les dystonies les plus fréquemment 
                           observées sont :</p>

                            <ul>
                                <li>Des contractions des muscles du cou entrainant une rotation et/ou inclinaison anormales de la tête souvent associées 
                                    à des mouvements brusques et de hochement. Cette affection est appelée dystonie cervicale ou torticolis spasmodique.</li>
                                <li>Des contractions des muscles du visage entrainant des clignements excessifs ou des spasmes des paupières appelés blépharospasme. 
                                    Ceci peut également se produire dans la partie basse du visage et porte alors le nom de syndrome de Meige. Lorsque la mâchoire 
                                    et/ou la langue sont touchés on parle de dystonie oromandibulaire.</li>
                                <li>Les patients présentant une dysphonie spasmodique ont une voix forcée ou chuchotée.</li>
                                <li>D’autres régions telles que la main ou le pied sont fréquemment atteintes. Lorsque la main est atteinte, elle l’est souvent 
                                    pour des activités spécifiques telles que l’écriture ou la pratique d’un instrument. On parle alors de dystonies spécifiques 
                                    de tâche.</li>
                                <li>Dans certains cas plusieurs régions du corps sont atteintes. Parfois, habituellement quand la dystonie débute pendant 
                                    l’enfance, plusieurs régions sont atteintes et on parle alors de dystonie généralisée.</li>
                            </ul>

                    <h3>Causes de la dystonie:</h3>

                        <p>Il y a de nombreuses causes de dystonie. Certaines personnes développent une dystonie car elles ont hérité d’un gène anormal. D’autres, dans les suites d’une 
                           lésion ou infection cérébrale ou d’une exposition à un médicament ou une substance toxique. Certaines personnes peuvent développer une dystonie après plusieurs 
                           années d’une activité répétitive telle que l’écriture (crampe de l’écrivain) ou la pratique d’un instrument (dystonie du musicien). Cependant, la plupart des cas 
                           de dystonies n’ont pas de cause clairement établie.</p>

                    <h3>Diagnostic:</h3>

                        <p>Un médecin, souvent expert dans les maladies du mouvement, fait le diagnostic avec un examen médical. Dans certains cas, un examen sanguin ou une imagerie cérébrale 
                           peuvent être recommandés. Le médecin utilisera les informations suivantes:</p>

                            <ul>
                                <li>L’âge de début de la dystonie</li>
                                <li>La région du corps atteinte</li>
                                <li>Le caractère soudain de l’installation ou l’aggravation progressive de la dystonie</li>
                                <li>L’existence de problèmes médicaux associés</li>
                            </ul>

                        <p>Toutefois, il peut ne pas être possible de trouver la cause exacte et de nombreux patients peuvent ne pas avoir de diagnostic initialement. De plus, des patients 
                           avec une forme légère de dystonie peuvent ne pas avoir consulté en centre expert et donc rester sans diagnostic précis.</p>

                    <h3>Traitement:</h3>

                        <p>Il peut y avoir un traitement de la dystonie. Si votre médecin trouve la cause il/elle peut recommander un traitement spécifique de cette cause. Autrement, 
                           certains médicaments peuvent améliorer les symptômes de la dystonie. Les plus fréquemment utilisés sont:</p>
                            <ul>
                                <li>Les anti-cholinergiques</li>
                                <li>Les benzodiazépines</li>
                                <li>Les myorelaxants</li>
                                <li>Le baclofène (Liorésal)</li>
                            </ul>

                        <p>Il est souvent nécessaire d’essayer plusieurs médicaments afin d’évaluer leurs effets positifs et secondaires. Certains patients peuvent tirer un bénéfice d’injection 
                           de toxine botulique. Celles-ci affaiblissent partiellement et transitoirement les muscles afin de réduire les contractions/spasmes et doivent généralement être répétées 
                           trois à quatre fois par an. Ces injections doivent être réalisées par des spécialistes experts de ces maladies. Lorsque les médicaments et les injections n’améliorent 
                           pas suffisamment les symptômes des traitements chirurgicaux peuvent être envisagés. Le patient devrait parler avec son médecin des différentes options de traitement.</p>

                    <h3>Evolution:</h3>

                        <p>Pour la plupart des patients la dystonie s’installe sur plusieurs mois voir années. Une fois installée la dystonie ne s’aggrave généralement pas. Chez certains, la 
                           dystonie peut s’étendre d’une région du corps à l’autre. Selon la cause de la dystonie, d’autres symptômes peuvent également apparaître.</p>
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
