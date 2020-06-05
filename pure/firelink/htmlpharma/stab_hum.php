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
        <link rel="stylesheet" href="../css/stab_hum.css" type="text/css" /> 
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
                    <a>Thymorégulateurs</a>
                </div>
                <div id="banniere_description">
                    <a href="anxio.php" class="bouton_rouge2">Précédent</a>
                    <a href="somni.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/thymo_2.png" alt="Les épilepsies" class="ico_categorie" /><strong>Stabilisateurs d'humeur</strong></h1>

                    <p><strong class="redti">Stabilisateurs de l'humeur:</strong> Carbamazépine; Dépakine; Lamotrigine; Lithium; Valproate; Zyprexa.</p>

                    <h3>PROPRIETES DES THYMOREGULATEURS</h3>

                    <p>Le mécanisme d’action de chacun des thymorégulateurs prescrits pour traiter les <a href="maniaco.php">troubles bipolaires</a>, i.e. lithium, valproate et carbamazépine est complexe et
                       non complètement compris. Aussi est-il difficile de décrire un mécanisme d’action commun.</p>

                    <p>D’une manière générale, le lithium a un effet en aval du récepteur, au niveau des systèmes de seconds messagers, en inhibant l’inositol monophosphatase ou en
                       régulant l’expression génique de protéine kinase ou de facteur neurotrophique.</p>

                    <p>Quant aux anticonvulsivants ayant obtenus l’AMM dans les <a href="maniaco.php">troubles bipolaires</a>, ils agiraient sur les canaux ioniques sodiques, potassiques et calciques en bloquant
                       le flux de ces ions. En fait, ces médicaments facilitent la neurotransmission inhibitrice par le GABA et réduisent la neurotransmission excitatrice par le glutamate.</p>

                    <p>Le thymorégulateur le plus utilisé dans le traitement de fond est le lithium.
                       D’autres médicaments peuvent également être utilisés dans cette pathologie :</p> 
                        <ul>
                            <li><a>La carbamazépine et l’acide valproïque en traitement de fond.</a></li>
                            <li><a>La lamotrigine, des antidépresseurs, en particulier de la famille des <a href="atd.php">inhibiteurs de la recapture de la sérotonine (IRS)</a> pour traiter les épisodes dépressifs
                                   chez les personnes souffrant de <a href="maniaco.php">troubles bipolaires</a>. Toutefois ces derniers doivent être utilisés avec prudence  en raison du risque d’apparition de troubles 
                                   maniaques.</a></li>
                            <li><a>Des neuroleptiques  atypiques (Aripiprazole,  Rispéridone,  Olanzapine)  pour  prévenir  les récidives des troubles bipolaires ou pour traiter les épisodes maniaques.</a></li>
                            <li><a>Des neuroleptiques sédatifs pour les crises maniaques grave.</a></li>
                        </ul>

                    <h3>EFFETS SECONDAIRES DES STABILISATEURS D'HUMEUR</h3>
                    <p><strong>Le taux de lithium peut-être abaissé par:</strong> non compliance, manie, grossesse, interactions avec théophilline, bicarbonate de sodium.</br>
                       <strong>Le taux de lithium peut-être augmenté par:</strong> déshydratation (diète, diarrhée, vomissements, polyurie, affections fébriles), dépression, baisse de la clearance de 
                       Lithium dans l'âge avancé, période post-partum.</p>

                    <p>Les effets indésirables avec le lithium sont de trois ordres (tableau ci dessous) allant des incidents mineurs aux effets toxiques graves en passant par les effets
                       tardifs. Il ne faut pas oublier le risque d’effets tératogènes.</p>

                    <p><strong>Avec les anticonvulsivants, des signes essentiellement neurologiques et psychiques s'observent fréquemment en début de traitement:</strong> somnolence, vertiges, anorexie,
                       nausées, diarrhée, constipation, sécheresse de la bouche, troubles de l'accommodation, diplopie, céphalées, ataxie ainsi que confusion et agitation chez les personnes
                       âgées.</p>

                    <h3>INTERACTIONS DES THYMOREGULATEURS</h3>
                        <ul>
                            <li><a>Jamais de pamplemousse!</a></li>
                            <li><a>Interactions avec les: Diurétiques, AINS, inhibiteur de l'ECA, ISRS, TTC.</a></li>
                            <li><a>Ne jamais associé du Lithium avec de la carbamazépine!</a></li>
                            <li><a>Le lithium péjore le psoriasis.</a></li>
                        </ul>

                    <h3>Contre-indications absolues</h3>
                    <p>Insuffisance rénale, insuffisance cardiaque compensée, syndrome psycho-organique, grossesse (tératogène), affections thyroïdiennes, régime sans sel (risque
                       d'hyponatrémie grave), maladie d'Addison, patient sous diurétiques, effets toxique avec méthyldopa, indométacine.</p>

                    <h3>Effets indésirables du Lithium</h3>
                    <p>Effets indésirables, habituellement réversibles à l’arrêt du traitement:</p>
                        <ul>
                            <li><a>Digestifs : nausées, vomissements, diarrhées</a></li>
                            <li><a>Psychiques : sédation, léthargie, obnubilation</a></li>
                            <li><a>Neurologiques : tremblements des mains, états convulsifs, vertiges, rarement syndrome sérotoninergique</a></li>
                            <li><a>Prise de poids</a></li>
                            <li><a>Musculaires : hypotonie musculaire</a></li>
                            <li><a>Troubles du rythme cardiaque, accidents cardiaques : une dégénérescence myofibrillaire cardiaque avec infiltrat interstitiel lymphocytaire a été décrite</a></li>
                            <li><a>Goitre isolé (euthyroïdie) ou associé à une hypothyroïdie (parfois hyperthyroïdie)</a></li>
                            <li><a>Anomalies de la numération formule sanguine; accidents sanguins : hyperleucocytose avec hyperneutrophilie et lymphocytopénie</a></li>
                            <li><a>Soif et polyurie : possibilité de diabète insipide néphrogénique et de syndrome néphrotique</a></li>
                            <li><a>Manifestations cutanées : acnés ou éruptions acnéiformes, aggravation ou déclenchement de psoriasis et d’éruptions psoriasiformes.</a></li>
                            <li><a>Chute de cheveux (exceptionnelle).</a></li>
                        </ul>
                

                    <h3>Effets indésirables fréquents de la carbamazépine</h3>
                        <p>Au début du traitement : somnolence, vertiges, troubles digestifs, sécheresse de la bouche, troubles de l’accommodation, diplopie. Ces troubles disparaissent soit
                           spontanément, soit après réduction de la dose.</p>
                        <p>Les effets indésirables de la carbamazépine à surveiller sont principalement les effets hématologiques (agranulocytose, thrombopénie) et hépatiques nécessitant un
                           bilan pré-thérapeutique et un suivi régulier.</p>

                    <h3><strong>Diminution par la carbamazépine des taux plasmatiques ou de l’activité des médicaments associés</strong></h3>
                        <ul>
                            <li><a>Anti-épileptiques (acide valproïque, phénobarbital, hydantoïne) -> Par induction enzymatique. Surveillance des taux plasmatiques si association nécessaire.</a></li>
                            <li><a>AVK (antivitamine K) -> Surveillance du TP et l’INR avec adaptation de posologie de l’AVK.</a></li>
                            <li><a>Antidépresseurs imipraminiques -> Risque de survenue de crises convulsive (surveillance clinique et adaptation posologique).</a></li>
                            <li><a>Contraceptifs oraux -> Risque d’inefficacité par induction enzymatique.</a></li>
                            <li><a>Digoxine -> Surveillance de la digoxinémie.</a></li>
                            <li><a>Saquinavir -> Utiliser avec prudence. Une surveillance de la concentration plasmatique de saquinavir est conseillée.</a></li>
                        </ul>
                    <h3><strong>Augmentation des taux plasmatiques de carbamazépine par des médicaments associés</strong></h3>
                        <ul>
                            <li><a>Macrolides -> Signes de surdosage en cas d’association. Si utilisation incontournable (légionellose), contrôle des taux plasmatiques de carbamazépine.</a></li>
                            <li><a>Inhibiteurs calciques -> Augmentation des concentrations plasmatiques de carbamazépine avec signes de surdosage par inhibition de son métabolisme hépatique.</a></li>
                            <li><a>Isoniazide -> Surveillance clinique et réduction éventuelle de la posologie.</a></li>
                        </ul>
                    <p>La carbamazépine est un inhibiteur de la monoamino oxydase (IMAO). Il est nécessaire de laisser un intervalle de deux semaines entre une cure par un IMAO et un
                       traitement par la carbamazépine.</p>

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
