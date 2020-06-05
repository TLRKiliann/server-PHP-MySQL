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
        <link rel="stylesheet" href="../css/atd.css" type="text/css" /> 
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
                    <a>Antidépresseurs</a>
                </div>
                <div id="banniere_description">
                    <a href="anti_psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="anxio.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/suicide.png" alt="Catégorie médicaments" class="ico_categorie" /><strong>Antidépresseurs</strong></h1>
                        <p><strong class="redti">Antidépresseurs TCC (tricycliques):</strong> Anafranil; Ludiomil; Saroten; Surmontil; Tofranil; Trittico.</p>
                        <p><strong class="redti">Antidépresseurs ISRS (inhibiteurs sélectifs de la recapture en sérotonine):</strong> Citalopram (Seropram); 
                                   escitalopram (Cipralex); fluoxétine (Prozac); fluvoxamine (Floxyfral); Deroxat (Paroxétine); Sertraline (Zoloft).</p>
                        <p><strong class="redti">Antidépresseurs IRSNA (inhibiteurs de la recapture de la sérotonine-noradrénaline):</strong> Venlafaxine; Duloxétine.</p>
                        <p><strong class="redti">Inhibiteurs de la recapture de la dopamine-noradrénaline:</strong> Bupropion.</p>
                        <p><strong class="redti">IMAO sélectifs (inhibiteurs de la mono-amine oxydase):</strong> Aurorix; Moclamine.</p>
                        <p><strong class="redti">IMAO non-sélectifs:</strong> Regitine (Phantolamine).</p>
                        <p><strong class="redti">Antidépresseurs sélectifs:</strong> Cymbalta; Effexor; Remeron.</p>

                        <p>Le mécanisme d'action des antidépresseurs le plus fréquemment retrouvé est essentiellement l'inhibition de la recapture des monoamines, qu'il s'agisse 
                           de la noradrénaline, de la sérotonine, ou encore de la dopamine (imipraminiques, IRS, IRSNA). On observe également pour la plupart d'entre eux une 
                           diminution de la dégradation de ces amines (IMAOs), un blocage du rétrocontrôle inhibiteur, une action au niveau du second messager (probablement l'action
                           commune de beaucoup d'antidépresseurs), ainsi qu'une action post-synaptique.</p>

                        <p>Actuellement d’autres médicaments commercialisées, mettent en avant d'autres mécanismes d’action. Ces médicaments peuvent être non seulement des IRSs mais 
                           agissent aussi sur différents sous types de récepteurs (antagoniste 5-HT2C) ou bien encore des antagonistes des récepteurs alpha 2 telle la mirtazapine.</p>

                        <p>Si ces mécanismes d'action modifient la libération des neuromédiateurs, ils ne peuvent pas expliquer complétement l'effet pharmacodynamique des antidépresseurs 
                           en clinique.</p>

                    <h3>EFFETS SECONDAIRES DES ANTIDEPRESSEURS</h3>

                        <p>Les AD à action noradrénergique tendent à déprimer le tonus sympathique par leur action alpha-mimétique centrale, analogue à celle des antihypertenseurs de 
                           type clonidine ou méthyldopa. L'effet adrénolytique peut être renforcé en association avec des <a href="mae.php" class="liendlia">MAE</a>.</p>

                            <ul>
                                <li><strong class="aqua_color">ISRS :</strong></li>
                                    <ul>
                                        <li><a>Nausées</a></li>
                                        <li><a>Vomissements</a></li>
                                        <li><a>Risque de constipation</a></li>
                                        <li><a>Anorexie</a></li>
                                        <li><a>Insomnie</a></li>
                                        <li><a>Céphalées</a></li>
                                        <li><a>Sudations</a></li>
                                        <li><a>Baisse de libido et troubles sexuels</a></li>
                                        <li><a href="syndsero.php" class="liendlia">Syndrome sérotoninergique</a></li>
                                        <li><a>Oedème de Quincke</a></li>
                                        <li><a>Syndrome de sevrage à l'arrêt (schéma dégressif lors de l'arrêt du ttt)</a></li>
                                        <li><a>Risque d'élévation de la pression artérielle</a></li></br>
                                    </ul>

                                <li><strong class="aqua_color">IMAO :</strong></li>
                                    <ul>
                                        <li><a>Hypotension orthostatique</a></li>
                                        <li><a>Accès hypertensifs soudains</a></li>
                                        <li><a>Hypotension avec vertiges et évanouissements</a></li>
                                        <li><a href="syndsero.php" class="liendlia">Syndrome sérotoninergique</a></li>
                                        <li><a>Prise pondérale</a></li>
                                        <li><a>Dysfonctionnement sexuel</a></li>
                                        <li><a>Virages maniaques</a></li></br>
                                    </ul>

                                <li><strong class="aqua_color">IRSNA :</strong></li>
                                    <ul>
                                        <li><a>Nausées</a></li>
                                        <li><a>Vertiges</a></li>
                                        <li><a>Somnolence</a></li>
                                        <li><a>Vomissements</a></li>
                                        <li><a>Tremblements</a></li>
                                        <li><a>Hypersudations</a></li>
                                        <li><a>Troubles sexuels</a></li>
                                        <li><a>Hypertension artérielle</a></li></br>
                                    </ul>

                                <li><strong class="aqua_color">Antagonistes alpha 2-noradrénergiques :</strong></li>
                                    <ul>
                                        <li><a>Prise de poids</a></li>
                                        <li><a>Somnolence</a></li>
                                        <li><a>Effet sédatif</a></li>
                                        <li><a>Hypotension orthostatique</a></li>
                                        <li><a>Accès maniaque</a></li>
                                        <li><a>Convulsions</a></li>
                                        <li><a>Tremblements</a></li>
                                        <li><a>Myoclonies</a></li>
                                        <li><a>Oedèmes</a></li>
                                        <li><a>Exanthème</a></li>
                                        <li><a>Sécheresse buccale</a></li>
                                        <li><a>Artralgie</a></li></br>
                                    </ul>

                                <li><strong class="aqua_color">TCC :</strong></li>
                                    <ul>
                                        <li><a href="https://www.infirmiers.com/etudiants-en-ifsi/cours/cours-intoxication-aux-antidepresseurs-tricycliques.html" class="liendlia">Manifestations neurologiques</a></li>
                                        <li><a>Hypotension</a></li>
                                        <li><a>Hypersudations</a></li>
                                        <li><a>Sécheresse buccale</a></li>
                                        <li><a>Troubles gingivo-dentaires</a></li>
                                        <li><a>Tachycardie et arythmie</a></li>
                                        <li><a>Risque d'iléus paralytique</a></li>
                                        <li><a>Troubles génito-urinaires</a></li>
                                        <li><a>Diminution de la libido</a></li>
                                        <li><a>Perte de l'érection</a></li>
                                        <li><a>Trouble de la vision</a></li></br>
                                    </ul>
                            </ul>

                        <p>Après diagnostic d’une dépression, la prescription du traitement doit être d’au moins 6 mois pour le premier épisode, 12 mois pour le second et 24 mois et plus au-delà. 
                           Une surveillance accrue doit avoir lieu afin de corriger d’éventuels effets indésirables, d'évaluer le risque suicidaire et le risque de virage maniaque.</p>

                        <p><i>Tiré du site: https://pharmacomedicale.org/ medicaments/par-specialites/item/antidepresseurs-les-points-essentiels</i></p>

                    <h3>Intoxication aux AD tricycliques (TCC)</h3>

                        <p>On redoutera principalement les complications cardio-vasculaires avec hypotension et grave trouble du rythme nécessitant une hospitalisation aux soins intensifs. L'intoxication aux
                           AD tricycliques peut être potentiellement mortelle, raison pour laquelle on donnera pas une quantité allant au-delà d'une semaine pour les personnes suicidaires.</p>

                        <p>Le tremor provoqué par les thymoanaleptiques peut être corrigé par des petites dose de propanolol (Indéral, Avlocardyl) ou de l'oxprénolol (Trasicor).</p>

                        <p><strong class="aqua_color">En cas d'hypotension orthostatique, on utilisera de l'Effortil.</strong></p>

                        <p>Les inhibiteurs de la recapture de la sérotonine peuvent être responsables d'un <a href="syndsero.php" class="liendlia">syndrome sérotoninergique</a> caractérisé
                           par <mark>une hyper-réflexie, des myoclonies, des impatiences motrices, des frissons, des troubles du comportement d'allure maniforme, voir confusionnelle.</mark> Comme la plupart 
                           des psychotropes, les AD sont à l'origine de dysfonctions sexuelles (baisse de la libido, retard de l'éjaculation, impuissance).</p>


                    <h3>INTERACTIONS DES ANTIDEPRESSEURS</h3>

                        <p>Jamais de pamplemousse !</p>
                        <p>De manière générale: Les effets sédatifs des substances antipsychotiques, hypnotiques, sédatives, anxiolytiques et antihistaminiques peuvent être renforcés; une diminution de leur
                           dosage est recommandée dans de tels cas.</p> 
                        <p>Le métabolisme des antidépresseurs est accéléré suite à une induction enzymatique hépatique par les contraceptifs oraux, la phénytoïne,
                           la carbamazépine et les barbituriques.</p> 
                        <p>Le métabolisme des antidépresseurs est inhibé par la cimétidine et certaines substances antipsychotiques.</p>

                    <h3>ISRS (inhibiteurs sélectifs de la recapture de la sérotonine)</h3>

                        <p><strong>Citalopram, escitalopram, fluoxétine, fluvoxamine, paroxétine, sertraline.</strong></p>

                        <p>Les ISRS ont une large marge thérapeutique, ils sont relativement facile à administrer, nécessitant à peine l'ajustement des posologies (excepté pour la fluvoxamine).</p>
                            <ul>
                                <li><a>Pas d'effets anticholinergiques centraux, mais beaucoup d'effets secondaires.</a></li>
                            </ul>

                        <p>En inhibant la recapture présynaptique de la 5-HT, les ISRS augmentent la quantité de 5-HT qui stimule les récepteurs 5-HT post-synaptiques. Les ISRS sont sélectifs en
                           en ce qui concerne le système sérotoninergique, mais spécifique des différents récepteurs 5-HT. Ainsi, ils <strong>stimulent les récepteurs 5-HT1</strong>, associant les effets 
                           antidépresseurs et anxiolytique, mais <strong>ils stimulent également les 5-HT2</strong>, provoquant souvent anxiété, insomnie et dysfonctionnement sexuel <strong>et les 
                           récepteurs 5-HT3</strong>, ce qui induit souvent des nausées et des céphalées. Ainsi, les ISRS peuvent paradoxalement soulager ou favoriser l'anxiété.</br>
                           Quelques patients peuvent sembler plus agités, déprimés et anxieux pendant la semaine de démarrage du traitement ou au moment de l'augmentation des posologies. Le patient est
                           ses proches doivent être informés de cette possibilité et éduquer à appeler le médecin si les symptômes s'aggravent sous l'effet du traitement. Cette situation doit être étroitement
                           surveillée car certains patients, <strong>en particulier le jeune enfant et l'adolescent, présentent un risque suicidaire accru</strong> si l'agitation, l'aggravation transitoire 
                           de la symptomatologie et l'anxiété ne sont pas détectées et rapidement traitées. Des études récentes ont déterminé que l'enfant et l'adolescent connaissent un taux plus important 
                           d'idées suicidaires, de gestes suicidaire et de tentatives de suicide au cours des premiers mois de prise ISRS (les mêmes risques peuvent exister pour les molécules modulatrices 
                           de la sérotonine, aux inhibiteurs de la recapture sérotonine-noradrénaline et aux inhibiteurs de recapture sérotonine-noradrénaline et aux inhibiteurs de recapture des 
                           dopamine-noradrénaline). Les médecins doivent prendre en compte ce risque et le comparer avec le bénéfice clinique.</br>
                           Les troubles sexuels (en particulier des difficultés à atteindre l'orgasme, mais également une diminution de la libido et un dysfonctionnement érectile) surviennent chez certains 
                           patients (>1/3). Certains ISRS déclenchent une prise de poids. D'autres, en particulier la fluoxétine, entraînent une perte d'appétit pendant les premiers mois de traitement.
                           Les ISRS ont peu d'activité anticholinergique, adrénolytique et peu d'effet sur la conduction cardiaque. La sédation est minime ou inexistante, mais au cours de premières semaines
                           de traitement, certains patients ont tendance à présenter une somnolence diurne. Des selles molles ou une diarrhée surviennent chez certains patients.</br>
                           Les interactions pharmacologiques sont relativement rares. Cependant, la fluoxétine, la paroxétine et la fluvoxamine peuvent inhiber les isoenzymes du cytochrome 450, ce qui
                           peut induire de graves interactions pharmacologiques. Par exemple, <strong>la fluoxétine et la fluvoxamine peuvent inhiber le métabolisme de certains béta-bloquants, dont le propranolol
                           et le métoprolol, induisant potentiellement l'hypotension et la bradycardie.</strong></p>

                    <h3>Modulateurs de la sérotonine (bloquants 5-HT2)</h3>

                        <p><strong>Néfazodone, trazodone, mirtazapine.</strong></p>
                        <p>Ces molécules bloquent en premier lieu les récepteurs 5-HT2 et inhibent également la recapture de la 5-HT et de la noradrénaline.</p>

                        <p>Les molécules modulatrices de la sérotonine ont des effets antidépresseurs et anxiolytiques, mais n'entraînent pas de dysfonctionnement sexuel. A la différence des antidépresseurs
                           la néfazodone produit un sommeil reposant, mais elle peut aussi perturber de façon significative les enzymes hépatiques participant à la métabolisation des médicaments et peut 
                           déclencher une insuffisance hépatique.</br>
                           La trazodone est proche de la néfazodone, mais elle n'inhibe pas la recapture de la 5-HT de la sérotonine. Contrairement à la néfazodone, la trazodone peut provoquer le priapisme
                           et peut déclencher une hypotension orthostatique en agissant sur les alpha1-noradrénergique. La trazodone est très sédative, son utilisation à des doses antidépressives efficaces
                           (>200mg/j) est limitée par cet effet indésirable. Elle est généralement administrée en doses de 50-100mg au coucher au patient dépressif qui présente une insomnie.</br>
                           La mirtazapine inhibe la recapturede la 5-HT et bloque les autorécepteurs alpha2-adrénergiques ainsi que les récepteurs 5-HT2 et 5-HT3. Il en résulte une fonction sérotoninergique
                           plus efficace et une fonction noradrénergique accrue sans dysfonctionnement sexuel ni nausées. Elle n'a pas d'effet indésirables cardiaques, a une interaction minime avec les enzymes 
                           hépatiques qui métabolise les médicaments et est généralement bien tolérée, excepté pour la sédation et la prise de poids dues au blocage de l'histamine.</p>

                    <h3>IRSNA (inhibiteurs de la recapture de la sérotonine-noradrénaline)</h3>

                        <p><strong>Venlafaxine, Duloxétine.</strong></p>
                        <p>Ces médicaments ont des mécanismes d'action 5-HT et noradrénergiques à la fois, au même titre que les antidépresseurs tricycliques. Cependant, leur toxicité se rapproche du traitement
                           par des ISRS. La nausée et le problème majeur durant les 2 premières semaines. La venlafaxine a certains avantages potentiels par rapport aux ISRS. Elle peut être plus efficace chez un
                           patient souffrant de dépression grave ou résistante, et n'étant pas hautement liée aux protéines, elle n'a pratiquement aucune interaction avec les enzymes hépatiques qui métabolisent les
                           médicaments, elle pose peu de problèmes quand on l'administre en même temps que d'autres médicaments. Cependant, les symptômes de sevrage (irritabilité, résurgence anxieuse, nausées)
                           surviennent souvent lorsque le médicament est arrêté brusquement. La duloxétine ressemble à la venlafaxine dans son efficacité et ses effets indésirables.</p>

                    <h3>Inhibiteurs de la recapture de la dopamine-noradrénaline</h3>

                        <p><strong>Bupropion.</strong></p>
                        <p>Le bupropion est actuellement le seul médicament de cette classe à être utilisé. Il est intéressant chez le patient déprimé souffrant d'un déficit de l'attention ou avec une dépendance
                           à la cocaïne ou s'il veut arrêter de fumer. Le bupropion déclenche de l'hypertension artérielle chez un petit nombre de patients, mais d'autres effets sur le système cardio-vasculaire.
                           Le bupropion peut entraîner des crises comitiales chez 0.4% des patients qui prennent des doses >150mg 3x/j (ou >200mg à libération prolongée 2x/j ou >450mg/j à libération prolongée). 
                           Le risque augmente chez le patient souffrant de boulimie. Il inhibe l'enzyme du cytochrome 450. L'agitation qui est fréquente est considérablement atténuée par l'utilisation de la 
                           forme retard ou à libération prolongée. Le bupropion peut induire une perte de la mémoire récente, réversible par la diminution des doses.</p>

                    <h3>IMAO sélectifs</h3>

                        <p>Contre-indiqué avec : <mark>AD tricycliques (TCC), la L-Dopa, les anti-hypertenseurs, les opiacés, les barbituriques, les alpha et béta bloquants, les sympaticommimétiques, 
                           les alpha et béta stimulants. Si on remplace ces IMAO par un TCC, il est prudent d'observer un intervalle de 10 jours environ.</mark></br>
                           Il faut éviter une nourriture riche en tyramine (voir ci-dessous).</br>
                           Les risques sont ceux d'une hypertension paroxystique. En cas d'accident, on administre du phentolamine (Regitine) 1 amp. 10mg en IM.</br>
                           On ne donnera pas d'IMAO en cas de phéochromocytome et lors d'atteintes hépatique ou rénale importante.</p>

                    <h3>IMAO (inhibiteurs de la monoamine-oxydase)</h3>

                        <p>Ces médicaments inhibent la désamination oxydative des 3 classes d'amines biogènes (noradrénaline, dopamine, 5-HT) et des autres phényléthamines. Les IMAO n'ont aucun effet sur l'humeur
                           normale. Ils sont utilisés en cas de dépression atypique ou lorsque les ISRS sont sans efficacité. Ils peuvent être à l'origine de crises hypertensives sévères si on administre
                           simultanément un médicament sympathomimétique ou un aliment contenant de la thyramine ou de la dopamine. Les IMAO sont peu utilisés. Pour prévenir l'hypertension artérielle et les crises
                           fébriles, <strong>le patient qui prend des IMAO doit éviter les sympathomimétiques, dextrométorphane, réserpine et péthidine, ainsi que les aliments comme la bière au malt, 
                           les viens type chianti, le sherry d'autres liqueurs, les boissons fermentées, les fromages vieillis, bananes, fèves, haricots, les extraits de levure, figues séchées, raisons, 
                           yaourts, fromage, crème aigre, sauce soja, hareng mariné ou salé et séché, saumon fumé, caviar, foie, et les viandes attendries.</strong></br>
                           Le patient porte sur lui des comprimés de 25mg de chlorpromazine et, dès que des signes d'une réaction hypertensive surviennent, prend 1 ou 2 comprimés avant de se rendre aux urgences
                           les plus proches.</br>
                           D'autres effets indésirables fréquents comprennent des difficultés d'érection, l'anxiété, les nausées, les vertiges, l'insomnie, des oedèmes distaux et une prise de poids. 
                           <strong>Les IMAO ne doivent pas être associés à d'autres types d'antidépresseurs, et on doit laisser au moins 2 semaines (5 avec la fluoxétine qui a une demie vie longue) entre 
                           l'utilisation de 2 type de médicaments.</strong></p>
                           <p>Les IMAO utilisés avec des antidépresseurs qui affectent le système 5-HT (ISRS, néfazodone) peuvent déclencher un <a href="snm.php" class="liendlia">syndrome neuroleptique malin</a> (hyperthermie maligne,
                           fonte musculaire, insuffisance rénale, convulsions et, finalement, mort). Si un traitement tel que antiasthmatique, antiallergique, anesthésique devait être utilisé en association avec des 
                           IMAO, le suivi d'un psychiatre, d'un interne, d'un dentiste ou d'un anesthésiste ayant l'expérience dans la neuropsychopharmacologie sera nécessaire.</p>

                    <h3>IMAO non sélectifs</h3>
                            <ul>
                                <li><p>On l'associe avec <a href="benzo.php" class="liendlia">benzodiazépines</a> chez les patients anxieux ou suicidaires, sinon pas d'interactions.</p></li>
                            </ul>

                    <h3>Antidépresseurs tricycliques</h3>
                            <ul>
                                <li><p>L’administration concomitante devrait être évitée vu le risque d’interaction. Le risque d’un <a href="syndsero.php" class="liendlia">syndrome sérotoninergique</a> et d’effets 
                                       indésirables cardiovasculaires devraient être pris en considération.</p></li>
                            </ul>

                    <h3>Antidépresseurs hétérocycliques</h3>

                        <p>Ce groupe de médicaments comprend les tricycliques (amines tertiaires amitriptyline et imipramines et leurs métabolites secondaires nortriptyline et désipramine), les tricycliques 
                           modifiées et les tétracycliques.</p>
                        <p>Ces médicaments augmentent principalement la biodisponibilité de la noradrénaline et en partie la 5-HT, bloquant leur recapture dans l'espace synaptique. L'utilisation à long terme
                           désensibilise les récepteurs alpha1-adrénergiques sur la membrane post-synaptique. Une possible voie finale commune de leur activité antidépressive.</br>
                           Ces médicaments ont plus d'effets indésirables que les ISRS et favorise une toxicité en cas de surdosage, raison pour laquelle ils sont peu utilisés. Dans les effets indésirables
                           les plus fréquents des hétérocycliques sont dus à leur effet de blocage muscarinique, de l'histamine et de leur action alpha1-antiadrénergique. De nombreux hétérocycliques ont des 
                           effets <a href="antico.php" class="liendlia">anticholinergiques</a><mark> et sont donc inutilisable par la personne âgée et le patient qui présente une hypertrophie prostatique bénigne, 
                           un glaucome ou une constipation chronique. Tous les hétérocycliques, en particulier la maprotiline et la clomipramine, abaissent le seuil 
                           épileptogène.</mark></p>

                    <p><i>Manuel Merck - 4ème édition - Merck research Laboratories - Division de Merck & Co., Inc., Whithouse Station, N.J. 2006, p. 1704-1710</i></p>

                    <h4>Voir aussi <a href="depress.php" class="liendlia">troubles dépressifs.</a></h4>

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

