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
        <link rel="stylesheet" href="../css/anxio.css" type="text/css" /> 
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
                    <a>Anxiolytiques</a>
                </div>
                <div id="banniere_description">
                    <a href="atd.php" class="bouton_rouge2">Précédent</a>
                    <a href="stab_hum.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/lotus.png" alt="Les épilepsies" class="ico_categorie" /><strong>Anxiolytiques</strong></h1>
                        <p><strong class="redti2">Anxiolytiques:</strong> Atarax; Buspar; Demetrin; Lexotanil; Rivotril; Rohypnol; Seresta; Temesta; Traxilium; Urbanyl; Valium; Xanax.</p>

                        <p>Les bases physiopathologiques des états anxieux ne sont pas encore complètement élucidées. Il semble néanmoins que les structures cérébrales impliquées dans 
                           la genèse de la symptomatologie anxieuse sont le cortex, le système limbique, la formation réticulée, le locus coeruleus, les noyaux du raphé et l'hypothalamus. 
                           Au sein de ces structures, les neurotransmetteurs impliqués dans les processus sont le GABA, la sérotonine et la noradrénaline.</p>

                        <p>Les BZD agissent sur des sites de liaison spécifiques aux benzodiazépines (BZD) qui se situent au niveau du complexe macromoléculaire du récepteur GABAA. Ce récepteur GABAA comprend
                           un canal transmembranaire perméable aux ions chlores dont l’ouverture est contrôlée par le GABA et modulée par différentes substances dont les barbituriques et les benzodiazépines. 
                           En se fixant sur leur site, les benzodiazépines facilitent l’action du GABA responsable de l’inhibition pré et post-synaptique par une augmentation de la perméabilité de la membrane 
                           aux ions chlores (hyperpolarisation). Ce complexe récepteur GABAA-Canal chlore est formé de cinq sous-unités (deux chaînes alpha, deux chaînes beta et une chaîne gamma) mais il existe 
                           plusieurs sous-types possibles pour chaque chaîne et donc de multiples combinaisons potentielles. La sous-unité a serait porteuse du site de liaison des benzodiazépines.</p>

                        <p>L’étude de la répartition topographique et fonctionnelle des récepteurs couplés aux BZD dans le système nerveux central montre l’existence de deux sous-types de récepteurs
                           centraux appelés BZ1 et BZ2 (ou w1 et w2). Les récepteurs BZ1 (ou w1) sont localisés dans le cortex, le cervelet et l’hippocampe, et sont associés au complexe GABAA-Canal chlore. 
                           Les récepteurs BZ2 (ou w2) se concentrent dans l’hippocampe, le striatum ainsi que dans la moëlle épinière. Ces sites de liaison des BZD sont associés à un hétérodimère de récepteurs 
                           couplés aux protéines G : le récepteur GABAB, qui en plus des BZD reconnaît le baclofène.</p>

                        <p>On décrit aussi des sites de fixation dits « périphériques » des BZD. On leur décrit des fonctions associées au métabolisme mitochondrial. On retiendra que les actions 
                           anxiolytiques, sédatives et anticonvulsivantes dépendent des sites BZ1 alors que l’action myorelaxante s’exerce préférentiellement par les sites BZ2.</p>

                    <h3>EFFETS SECONDAIRE DES ANXIOLYTIQUES</h3>
                        <p>Les effets indésirables ont une sédation éventuelle au début du traitement, des amnésies antérogrades et lacunaires et parfois des réactions paradoxales 
                           (déshinibition et agressivité). On ne dispose d'aucune étude clinique contrôlée et les études animales ont mis en évidence un fort potentiel tératogène du 
                           dichlorhydrate d'hydroxyzine à hautes doses.</p>

                        <p>Effets indésirables communs à toute la classe des benzodiazépines:</p>
                            <ul>
                                <li>Insensibilité émotionnelle, sédation, baisse de la vigilance, maux de tête, ataxie, diplopie, troubles gastro-intestinaux, troubles de la libido, 
                                    effets amnésiants pouvant être associés à un comportement inapproprié.</li>
                                <li>Réactions psychiatriques et paradoxales: agitation incessante, irritabilité, agressivité, illusions, colères, cauchemars, hallucinations, psychoses, 
                                    comportement inapproprié et autres effets adverses sur le comportement.</li>
                                <li>Une dépression préexistante au traitement peut être révélée pendant le traitement par les benzodiazépines.</li>
                                <li>Une dépendance psychique peut survenir.</li>
                                <li>Des abus d'utilisation des benzodiazépines ont été rapportés.</li>
                                <li>Les effets des benzodiazépines sur le système nerveux central sont dose-dépendants; les doses élevées causent une dépression plus marquée du système nerveux central
                                    (dépression respiratoire, forte sédation, état confusionnel chez la personne âgée).</li>
                            </ul>

                        <p>Les benzodiazépines (BZD) sont des agonistes GABAergiques qui agissent comme modulateurs allostériques positifs en se liant au récepteur GABA-A. Il s'agit d'un 
                           récepteur du type canal à chlore. Le site de liaison des BZD se situe sur le récepteur GABA-A, mais est distinct de celui du GABA (acide gamma-amino-butyrique). 
                           En l'absence de GABA, les BZD n'ont aucun effet sur le récepteur. En revanche, en combinaison, le GABA et les BZD permettent d'augmenter la conductance au chlore 
                           au-delà de la limite naturelle imposée au GABA. Cette activité pharmacologique explique les 6 propriétés des BZD, à savoir leur effet sédatif, hypnotique, anxiolytique, 
                           anticonvulsivant, myorelaxant et amnésiant. <mark>Il existe un antagoniste à l’action des BZD, le flumazénil.</mark></br> 
                           Le zolpidem est une imidazopyridine à action hypnotique, indiquée uniquement dans les troubles du sommeil. Sans parenté chimique avec les BZD, le zolpidem se fixe 
                           également sur le récepteur GABA-A, préférentiellement ceux qui possèdent une sous-unité α1. Il est donc fonctionnellement un modulateur allostérique GABAergique 
                           et en possède potentiellement les mêmes effets et effets indésirables. Le zopiclone est un hypnotique du groupe des cyclopyrrolones ayant également une forte affinité 
                           pour le récepteur GABA-A. Les limitations d'emploi sont similaires à celles des BZD. Sauf dans quelques situations particulières, dont l'épilepsie, l'administration 
                           de barbituriques, également des modulateurs allostériques du récepteur GABA-A, n'est plus recommandée compte tenu de leur marge thérapeutique trop étroite.</p>

                        <p>Un risque de dépendance physique aux benzodiazépines est attesté après quelques semaines de traitement. L’arrêt brusque du médicament peut alors donner lieu à un 
                           phénomène de sevrage (anxiété, troubles mnésiques et de concentration, insomnies et cauchemars, attaques de panique, phénomènes hallucinatoires, sentiments d’irréalité 
                           et de dépersonnalisation, nausées, vomissements, crampes abdominales, céphalées, douleurs, paresthésies,  hyperesthésie, tremor, crises convulsives).</p>

                    <h3>INTERACTIONS DES ANXIOLYTIQUES</h3>

                        <p>Jamais de pamplemousse !</p>

                        <p>Les benzodiazépines sont des médicaments peu toxiques n'entraînant pas de décès lors de tentatives de suicide. Les suicides réussissent généralement lors d'une
                           association médicamenteuse en plus d'un BZD.</p>
 
                    <h3>Symptômes d'une intoxication aiguë aux Benzodiazépines</h3>
                        <p>Somnolence, vertiges, ataxie, état confusionnel, un coma, une dépression respiratoire.</p>
 
                        <p>Une pharmacodépendance peut s'installer, c'est pourquoi l'arrêt se fait par un schéma dégressif.</p>

                        <div class="premdi">
                            <p><strong>Important:</strong> prescrire idéalement qu’une seule benzodiazépine à la fois. En aucun cas plus de 2.</p>
                        </div>

                    <h3>Contre-indication</h3>
                        <p>Myasthénie, insuffisances respiratoires graves, apnées du sommeil, 1er et 3ème trimestres de grossesse, patients alcooliques (potentialisation des effets de l’alcool).</p>

                        <p>Médicaments dépresseurs du système nerveux central. Lors de l'association avec des antipsychotiques (neuroleptiques), des hypnotiques, des anxiolytiques/sédatifs, 
                           des antidépresseurs, des narcoanalgésiques, des antiépileptiques, des anesthésiques ou des antihistaminiques sédatifs, l'effet dépresseur sur le système nerveux 
                           central de ces substances peut être renforcé. Une accentuation de l'euphorie peut aussi se produire avec les analgésiques narcotiques, ce qui élève le risque de 
                           dépendance psychique. La consommation d'alcool lors de la prise du médicament. L'effet sédatif peut être renforcé lorsque le médicament est pris en association 
                           avec de l'alcool.</p>

                    <h3>Autres interactions</h3>
                        <p>Les interactions médicamenteuses suivantes ont été observées sous lormétazépam (Noctamid /-Forte)</p>
                        <ul>
                            <li>Glycosides cardiaques: l'utilisation simultanée peut augmenter la concentration plasmatique des glycosides cardiaques.</li>
                            <li>Bêta-bloquants: le traitement simultané peut potentialiser l'effet clinique de la BZD. Les interactions médicamenteuses suivantes ont été décrites pour 
                                les benzodiazépines, dont le métabolisme est comparable à celui de lormétazépam.</li>
                            <li>Méthylxanthine: l'utilisation concomitante peut diminuer l'effet sédatif. </li>
                            <li>Médicaments contenant des estrogènes: l'utilisation concomitante peut réduire la concentration plasmatique des benzodiazépines.</li>
                            <li>Rifampicine: le traitement concomitant peut réduire l'effet sédatif.</li>
                        </ul>

                        <p>Quelques anciennes études faites avec d'autres benzodiazépines ont clairement montré un risque élevé de malformations congénitales 
                            pour le foetus humain lors de l'administration de benzodiazépines durant le premier trimestre de grossesse.</p>

                        <p><mark><strong>Antidote au BZD = Anexate</strong>(flumazénil).</mark></p>
                        

                    <h3>Mise en garde</h3>
                        <p>Anexate® (principe actif: flumazénil), antagoniste des benzodiazépines, n'est pas indiqué chez les patients atteints d'épilepsie ayant reçu des benzodiazépines
                           à titre thérapeutique. L'antagonisation de l'effet des benzodiazépines chez ces patients peut déclencher des convulsions.</p>

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

