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
        <link rel="stylesheet" href="../css/somni2.css" type="text/css" /> 
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
                    <a>Hypnotiques</a>
                </div>
                <div id="banniere_description">
                    <a href="stab_hum.php" class="bouton_rouge2">Précédent</a>
                    <a href="benzo.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/zzz.png" alt="Les épilepsies" class="ico_categorie" /><strong>Somnifères</strong></h1>
                        <p><strong class="redti">BZD hypno-inducteurs:</strong> Dalmadorm; Dormicum; Halcion; Noctamid.</p>
                        <p><strong class="redti">Sédatifs et anxiolytiques non BZD:</strong> Atarax; Buspar; Imovane; Stilnox.</p>
                        <p><strong class="redti">Antihistaminiques et neuroleptiques:</strong> Atarax; Benocten; Detensor; Melatonine; Nozinan; Phénegran; Truxal.</p>
                        <p><strong class="redti">Benzodiazépines:</strong> Lexotanil; Tranxilium; Rohypnol.</p>
                        <p><strong class="redti">Non-barbituriques:</strong> Distraneurin.</p>
                        <p><strong class="redti">Barbituriques:</strong> Tous ceux finissant par ...barbital.</p>
                        <p><strong class="redti">Autres hypnotiques:</strong> Stilnox CR; Circadin; Sonata.</p>

                    <h3>PROPRIETES DES HYPNOTIQUES</h3>
                        <p>Elles agissent sur des sites cérébraux spécifiques des benzodiazépines qui se situent au niveau du complexe macromoléculaire du récepteur GABA-A. Ce récepteur
                           comprend un canal transmembranaire perméable aux ions chlores dont l’ouverture est contrôlée par le GABA et modulée par différentes substances dont les barbituriques
                           et les benzodiazépines. En se fixant sur leur site, les benzodiazépines facilitent l’action du GABA responsable de l’inhibition pré et post synaptique et augmentent 
                           la perméabilité de la membrane aux ions chlores. Ce complexe-récepteur canal est formé de cinq sous-unités (probablement deux chaînes a, deux chaînes b et une chaîne g) 
                           mais il existe plusieurs sous-types de chaque chaîne possible et donc de multiples combinaisons possibles.</br>
                           La sous unité a serait porteuse du site de liaison des benzodiazépines. L’étude de la répartition topographique des récepteurs dans le système nerveux central suggère
                           l’existence de deux sous types de récepteurs appelés BZ1 et BZ2 (ou w1et w2). Les récepteurs w1 sont localisés dans le cortex, le cervelet et l’hippocampe, alors que
                           les récepteurs w2 se concentrent dans l’hippocampe, le striatum ainsi que dans la moëlle épinière. Des sites de fixation périphériques (récepteurs w3) ont été
                           également identifiés mais leur structure et leur rôle restent encore mal définis.</p>

                        <p>A noter que le récepteur GABA-B (ou BZ2 ou w2) est de nature différente : association hétérodimérique de 2 récepteurs couplés aux protéines G (RCPG). Ce récepteur GABA-B
                           n’est pas associé à des effets sédatifs (le baclofène, le ligand agoniste de référence est dépourvu d’effet hypnotique).</p>

                    <h3>Apparentés aux benzodiazépines:</h3>
                        <p>Leurs effets peuvent être expliqués par une action agoniste sélective du complexe macromoléculaire Récepteur GABA-canal chlore (ou récepteur GABA-A) qui correspond au 1er type
                           central des sites de liaison aux benzodiazépines [BZD] (d’où ses autres noms de site BZ1 encore appelé récepteur w1). On oppose au type de sites
                           liant les BZD, le site BZ2 (ou récepteur de type w2) qui correspond à un dimère de deux récepteurs couplés à des protéines G R-GABA-A un 2ème dont le premier
                           reconnaît le ligand et le deuxième, une fois associé module des effecteurs qui aboutissent à une hyperpolarisation membranaire. Le zolpidem a été décrit comme se
                           fixant de façon préférentielle sur le sous-type w1 (ou BZ1) des sites de liaison des BZD. Il s’agit donc bien - comme pour la zopiclone d’agents modulateurs du
                           complexe R-GABA-A/canal Chlore bien qu’ils n’aient pas de parenté structurale avec les BZD.</p>          

                    <h3>EFFETS SECONDAIRES DES HYPNOTIQUES</h3>
                        <p><strong>Les principaux effets secondaires:</strong></p>
                        <table>
                            <tr>
                                <td>Modification de la conscience lors des réveils nocturnes</td>
                            </tr>
                            <tr>
                                <td>Hypotension au lever</td>
                            </tr>
                            <tr>
                                <td>Confusion</td>
                            </tr>
                            <tr>
                                <td>Symptômes des hypnotiques</td>
                            </tr>
                        </table>
                        <p><strong>Effets indésirables des antihistaminiques:</strong></p>
                            <ul>
                                <li><a>Effets résiduels, entraînant une somnolence diurne, effet atropinique: sécheresse buccale, constipation.</a></li>
                                <li><a>Excitation chez le nouveau-né et l’enfant si surdosage.</a></li>
                                <li><a>Risque de photo-sensibilisation.</a></li>
                            </ul>
                        <p><strong>Effets indésirables des benzodiazépines:</strong></p>
                            <ul>
                                <li><a>Amnésie rétrograde.</a></li>
                                <li><a>Réactions paradoxales (plus particulièrement avec le triazolam mais aussi avec le Flunitrazépam).</a></li>
                                <li><a>Dépendance physique et psychique en cas de traitement prolongé (facteur important de surconsommation, 40 millions de boites par an en France) 
                                       pouvant entraîner à l’arrêt un syndrome de sevrage (anxiété, insomnie, irritabilité, céphalées, myalgies).</a></li>
                                <li><a>Tolérance.</li></a>
                            </ul>
                        <p><strong>Effets indésirables des apparentés aux benzodiazépines:</strong></p>
                            <ul>
                                <li><a>Dépendance.</a></li>
                                <li><a>Goût métallique dans la bouche, amertume.</a></li>
                                <li><a>Amnésie rétrograde.</a></li>
                            </ul>

                        <p>L’un des effets délétères les plus fréquents avec les hypnotiques est la somnolence résiduelle le lendemain de la prise. Cet effet peut d’autant plus survenir que la
                           demie-vie d’élimination est longue.  somnolence diurne, asthénie, impression de faiblesse, sensation vertigineuse. Dans de rares cas, on peut noter une dysarthrie,
                           une ataxie, des difficultés à la marche témoignant le plus souvent d’un surdosage. Ces manifestations peuvent également survenir dans l’heure qui suit la prise si le sujet
                           ne se couche pas ou ne s’endort pas immédiatement.
                           L’association à d’autres dépresseurs du système nerveux central (alcool, neuroleptiques…) potentialise cet effet, conduisant à un ralentissement psychomoteur important, 
                           une apathie, des troubles de la coordination, une confusion mentale.</p>

                        <p>Les benzodiazépines ont un effet amnésiant en aigu, effet utilisé en thérapeutique dans la prémédication. Cet effet peut cependant devenir gênant en dehors de ces
                           circonstances. Il s’agit essentiellement d’une amnésie antérograde qui survient surtout à des doses élevées, dans les heures qui suivent la prise du médicament. Les 
                           personnes âgées sont particulièrement sensibles à cet effet. Des cas de complications liés à cet effet ont été signalés (soumission chimique).</p>

                        <p>La prise prolongée de benzodiazépines expose les patients à un risque de dépendance même lors de l’utilisation à des doses thérapeutiques. La dépendance aux
                           benzodiazépines se manifeste par une dépendance psychique (développement d’une anxiété anticipatoire à la perspective de l’interruption du traitement) et d’une
                           dépendance physique. Celle-ci se traduit par un syndrome de sevrage à l’arrêt du traitement.</p>

                        <p>Des facteurs de risque favorisant le développement d’une dépendance aux benzodiazépines ont été identifiés :</p>
                            <ul>
                                <li><a>une durée de traitement supérieur à 3 mois</a></li>
                                <li><a>prise de forte dose de benzodiazépine</a></li>
                                <li><a>le profil de personnalité du sujet (névrotique, sujet présentant d’autres conduites addictives alcooliques, médicamenteuses ou produits illicites)</a></li>
                            </ul>
                        <p>Il est donc conseiller de respecter la durée de prescription de ces traitements et de pratiquer une diminution progressive de la posologie sur plusieurs jours afin d'éviter
                           ce type d’incident.</p>

                        <p>Le Rebond d’insomnie, il est défini par l’aggravation de l’insomnie initiale (avant traitement) lors de l’arrêt brutal du traitement. Il est d’autant plus fréquent et
                           intense que la dose du traitement est élevée et la durée prolongée. Il peut être évité par une réduction progressive et lente des posologies jusqu’à l’arrêt complet du
                           traitement.</p>

                    <h3>INTERACTIONS DES HYPNOTIQUEs</h3>

                        <p>Jamais de pamplemousse!</p>

                        <p>Contre-indication absolue avec allergie aux BZD ou insuffisance respiratoire sévère.</p>

                        <p>Antihistaminiques: Rebond, difficile à manier chez la personne âgée, posologie difficile à définir en premier lieu, attention à l'association avec des neuroleptiques.</p>

                        <p>Les benzodiazépines: De manière générale, les hypnotiques sont tous des dépresseurs du SNC et peuvent en association avec un autre dépresseur du SNC (dérivés morphiniques alcool)
                           entraîner une majoration de l'effet sédatif. Insuffisance respiratoire, apnée du sommeil, myasthénie, insuffisance hépathique sévère, symptômes de sevrage,
                           amnésie rétrograde.</p>

                        <p><strong>Apparentés aux BZD:</strong></p>
                            <ul>
                                <li><a>Dépendance, amnésie rétrograde, somnolence, céphalées, asthénie, nausées, réactions paradoxales: agressivité, agitation, irritabilité.</a></li>
                            </ul>
                        <p><strong>Autres hypnotiques:</strong></p>
                            <ul>
                                <li><a>Rifampicine (diminution des concentrations plasmatiques et de l'efficacité du Zolpidem, dépendance, amnésie rétrograde, céphalées, troubles visuels, épisode confusionnel).</a></li>
                            </ul>
                        <p><strong>Maniement général des hypnotiques:</strong></p>
                            <ul>
                                <li><a>Allergie aux benzodiazépines.</a></li>
                                <li><a>Insuffisance respiratoire sévère.</a></li>
                            </ul>

                    <h3>NEUROLEPTIQUES ET ANTIHISTAMINIQUES</h3>

                        <p>Nozinan et Truxal: peut diminuer l'insomnie psychotique et venir compléter une thérapie par antidépresseurs.
                           En outre, ils potentialisent les autres hypnotiques.
                           Atarax, Benocten, Phénergan, Detensor: sont des hypnotiques antihistaminiques, car ils ont une action sédative.</p>

                    <h3>BENZODIAZEPINES (BZD)</h3>
                        <ul>
                            <li><a>Bromazépam (Léxomil, Lexotanil): excellent dans l'anxiété nocturne chez la personne âgée.</a></li>
                            <li><a>Clorazépate (Tranxène, Tranxilium): a beaucoup moins d'effets secondaires (myorelaxant, hypotenseur, confusion).</a></li>
                            <li><a>Flunitrazépam (Rohypnol): peut être toxicomatogène. Avec carnet souches dans certains cantons suisses.</a></li>
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
