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
        <link rel="stylesheet" href="../css/benzo.css" type="text/css" /> 
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
                    <a>Benzodiazépines</a>
                </div>
                <div id="banniere_description">
                    <a href="somni.php" class="bouton_rouge2">Précédent</a>
                    <a href="idlc.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/bzd_2.png" alt="benzo" class="ico_categorie" />Les benzodiazépines</h1>

                    <p><strong class="redti">Benzo:</strong> Dormicum, Halcion, Stilnox, Imovane, Sonata, Xanax, Lexotanil, Rohypnol, Temesta, Noctamid, Seresta, Urbanyl, Rivotril, Tranxilium, 
                       Valium, Dalmadorm, Demetrin.</p>

                    <h3>Recommandations pour la prescription de benzodiazépines</h3>
                        <ul>
                            <li>1. ne prescrire idéalement qu’une seule benzodiazépine, en aucun cas plus de deux.</li>
                            <li>2. commencer par la posologie la plus faible possible.</li>
                            <li>3. prévoir une durée limitée de la prescription, sauf exceptions.</li>
                            <li>4. éviter une reconduction systématique de l’ordonnance.</li>
                            <li>5. expliquer au patient le risque de dépendance associé à une prise ininterrompue et prolongée.</li>
                            <li>6. favoriser les autres stratégies thérapeutiques, y.c. non médicamenteuses.</li>
                        </ul>

                    <h3>Choix d’une benzodiazépine</h3>
                        <ul>
                            <li>Benzodiazépines à demi-vie prolongée pour : anxiété généralisée, dose quotidienne unique, action régulière souhaitée.</li>
                            <li>Benzodiazépines à demi-vie moyenne pour : insomnies à réveil précoce avec troubles de l’endormissement, paroxysmes anxieux, patients à métabolisme altéré.</li>
                            <li>Sénescence,  affections  hépatiques, si la BZD évite somnolence résiduelle le lendemain matin.</li>
                            <li>Benzodiazépines à demi-vie brève pour : difficultés d’endormissement, prémédication lors de petites interventions.</li>
                        </ul>

                    <h3>Mise en garde</h3>
                        <p>Anexate® (principe actif: flumazénil), antagoniste des benzodiazépines, n'est pas indiqué chez les patients atteints d'épilepsie ayant reçu des benzodiazépines
                           à titre thérapeutique. L'antagonisation de l'effet de benzodiazépines chez ces patients peut déclencher des convulsions.</p>

                    <h3>Contre-indication</h3>
                        <p>Myasthénie, insuffisances respiratoires graves, apnées du sommeil, 1er et 3ème trimestres de grossesse, patients alcooliques (potentialisation des effets de l’alcool).</p>

                        <p>Médicaments dépresseurs du système nerveux central. Lors de l'association avec des antipsychotiques (neuroleptiques), des hypnotiques, des anxiolytiques/sédatifs,
                           des antidépresseurs, des narcoanalgésiques, des antiépileptiques, des anesthésiques ou des antihistaminiques sédatifs, l'effet dépresseur sur le système nerveux
                           central de ces substances peut être renforcé. Une accentuation de l'euphorie peut aussi se produire avec les analgésiques narcotiques, ce qui élève le risque de
                           dépendance psychique. La consommation d'alcool lors de la prise du médicament. L'effet sédatif peut être renforcé lorsque le médicament est pris en association 
                           avec de l'alcool.</p>


                    <h3>Effets secondaires des BZD</h3>
                        <p>Les effets indésirables ont une sédation éventuelle au début du traitement, des amnésies antérogrades et lacunaires et parfois des réactions paradoxales (déshinibition et agressivité).</p>

                        <p>On ne dispose d'aucune étude clinique contrôlée et les études animales ont mis en évidence un fort potentiel tératogène du dichlorhydrate d'hydroxyzine à hautes doses.</p>

                    <h3>Effets indésirables communs à toute la classe des benzodiazépines</h3>
                        <ul>
                            <li>Insensibilité émotionnelle, baisse de la vigilance, maux de tête, ataxie, diplopie, troubles gastro-intestinaux, troubles de la libido, effets amnésiants pouvant être associés
                                à un comportement inapproprié.</li>

                            <li>Réactions psychiatriques et paradoxales: agitation incessante, irritabilité, agressivité, illusions, colères, cauchemars, hallucinations, psychoses, comportement inapproprié et autres
                                effets adverses sur le comportement.</li>

                            <li>Une dépression préexistante au traitement peut être révélée pendant le traitement par les benzodiazépines.</li>

                            <li>Une dépendance psychique peut survenir.</li>

                            <li>Des abus d'utilisation des benzodiazépines ont été rapportés.</li>

                            <li>Les effets des benzodiazépines sur le système nerveux central sont dose-dépendants; les doses élevées causent une dépression plus marquée du système nerveux central.</li>
                        </ul>


                        <p>Les benzodiazépines (BZD) sont des agonistes GABAergiques qui agissent comme modulateurs allostériques positifs en se liant au récepteur GABA-A. Il s'agit d'un
                           récepteur du type canal à chlore. Le site de liaison des BZD se situe sur le récepteur GABA-A, mais est distinct de celui du GABA (acide gamma-amino-butyrique).</br>
                           En l'absence de GABA, les BZD n'ont aucun effet sur le récepteur. En revanche, en combinaison, le GABA et les BZD permettent d'augmenter la conductance au
                           chlore au-delà de la limite naturelle imposée au GABA. Cette activité pharmacologique explique les 6 propriétés des BZD, à savoir leur effet sédatif, hypnotique,
                           anxiolytique, anticonvulsivant, myorelaxant et amnésiant. Il existe un antagoniste à l’action des BZD, le flumazénil. Le zolpidem est une imidazopyridine à action
                           hypnotique, indiquée uniquement dans les troubles du sommeil. Sans parenté chimique avec les BZD, le zolpidem se fixe également sur le récepteur GABA-A,
                           préférentiellement ceux qui possèdent une sous-unité α1. Il est donc fonctionnellement un modulateur allostérique GABAergique et en possède potentiellement les
                           mêmes effets et effets indésirables. Le zopiclone est un hypnotique du groupe des cyclopyrrolones ayant également une forte affinité pour le récepteur GABA-A.</br>
                           Les limitations d'emploi sont similaires à celles des BZD. Sauf dans quelques situations particulières, dont l'épilepsie, l'administration de barbituriques,
                           également des modulateurs allostériques du récepteur GABA-A, n'est plus recommandée compte tenu de leur marge thérapeutique trop étroite.</p>

                        <p>Un risque de dépendance physique aux benzodiazépines est attesté après quelques semaines de traitement. L’arrêt brusque du médicament peut alors donner lieu à un 
                           phénomène de sevrage (anxiété, troubles mnésiques et de concentration, insomnies et cauchemars, attaques de panique, phénomènes hallucinatoires, sentiments 
                           d’irréalité et de dépersonnalisation, nausées, vomissements, crampes abdominales, céphalées, douleurs, paresthésies,  hyperesthésie, tremor, crises convulsives).</p>

                    <h3>Interactions</h3>
                        <p>Jamais de pamplemousse!</p>
                        <p>Les benzodiazépines sont des médicaments peu toxiques n'entraînant pas de décès lors de tentatives de suicide. Les suicides réussissent généralement lors d'une association 
                           médicamenteuse en plus d'un BZD.</p>

                        <p>Symptômes d'une intoxication aiguë aux Benzodiazépines<p>
                        <p>Somnolence, vertiges, ataxie, état confusionnel, un coma, une dépression respiratoire.</p>
 
                        <p>Une pharmacodépendance peut s'installer, c'est pourquoi l'arrêt se fait par un schéma dégressif.<p>
                        <div class="redti">
                            <p><strong>Important: prescrire idéalement qu’une seule benzodiazépine à la fois. En aucun cas plus de 2.</strong><p>
                        </div>
                    <h3>Autres interactions</h3>
                        <p>Les interactions médicamenteuses suivantes ont été observées sous lormétazépam:</p>
                        <p><strong>Glycosides cardiaques:</strong> l'utilisation simultanée peut augmenter la concentration plasmatique des glycosides cardiaques.</br>
                           <strong>Bêta-bloquants:</strong> le traitement simultané peut potentialiser l'effet clinique de la BZD.</p>
  
                        <p>Les interactions médicamenteuses suivantes ont été décrites pour les benzodiazépines, dont le métabolisme est comparable à celui de lormétazépam:</p>
                        <p><strong>Méthylxanthine:</strong> l'utilisation concomitante peut diminuer l'effet sédatif.</p>

                        <p><strong>Médicaments contenant des estrogènes:</strong> l'utilisation concomitante peut réduire la concentration plasmatique des benzodiazépines.</p>
                        <p><strong>La Rifampicine:</strong> en traitement concomitant elle peut réduire l'effet sédatif.</p>

                        <p><mark>Quelques anciennes études faites avec d'autres benzodiazépines ont clairement montré un risque élevé de malformations congénitales pour le foetus humain lors de l'administration 
                           de benzodiazépines durant le premier trimestre de grossesse.</mark></p>
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

