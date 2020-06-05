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
        <link rel="stylesheet" href="../css/ampheta.css" type="text/css" />
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
                    <a>Amphétamines</a>
                </div>
                <div id="banniere_description">
                    <a href="alcool.php" class="bouton_rouge2">Alcool</a>
                    <a href="stero.php" class="bouton_rouge">Stéroïdes</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Amphétamines</strong></h1>

                        <p><strong>Les amphétamines peuvent être prises sous formes de pilules, injectées, prisées ou inhalées. Les amphétamines peuvent entraîner une amélioration de l'humeur, une
                           augmentation du temps de veille, de la vigilance, de la concentration et des performances physiques intensifiées, une sensation de bien être. Une utilisation
                           prolongée peut induire une dépendance.</br>
                           Parmi les médicaments classées comme amphétamines, on retrouve l'amphétamine et la méthamphétamine (connues également comme glace, cristal, cristal meth, vitesse, 
                           manivelle ou verre).</strong></p>

                        <p>La méthamphétamine utilisée parfois médicalement (pour le déficit de l'attention, une hyperactivité, l'obésité, la narcolepsie), est facilement fabriquée illégalement,
                           et son utilisation a tendance à devenir étendue en Hollande, GB, et Amérique du Nord. L'utilisation illicite de méthamphétamines est le principal type d'abus en Amérique 
                           du Nord.</p>

                    <h3>Symptomatologie:</h3>

                        <p><strong>Utilisation intense:</strong> les effets psychologiques de la prise d'amphétamines sont similaires à ceux produits par la cocaïne et comprennent la diminution de la 
                           vigilance, l'euphorie et un sentiment de pleine puissance. Les amphétamines entrainnent généralement un dysfonctionnement de l'érection chez l'homme, mais augmentent le désir
                           sexuel. La prise associée à des pratiques sexuelles dangereuses, et l'utilisateur a des risques de contracter des infections sexuellement transmissibles, y compris l'infection
                           au VIH.</p>

                        <p><strong>Utilisation chronique:</strong> il a été démontré que la prise répétée d'amphétamines a pour conséquence la mort d'un grand nombre de cellules du cerveau.
                           La prise répétée induit également la dépendance. La tolérance apparaît lentement, mais des quantités de plusieurs centaines de fois plus importantes que les quantités prises
                           peuvent finalement être ingérées ou injectées. La tolérance aux différents effets se développe de manière inégale, de telle sorte que la tachycardie et la vigilance amplifiée
                           diminuent, alors que les hallucinations et les idées délirantes peuvent apparaître. Cependant, même des doses massives sont rarement mortelles. Les utilisateurs chroniques
                           peuvent s'injecter jusqu'à 15'000 mg par jour sans trouble aigu observable.</p>

                        <p>La toxicomanie aux amphétamines prédispose aux accidents, car la drogue produit de l'excitation et des idées de grandeur suivies de fatigue importante et d'insomnie.
                           L'administration IV de l'amphétamine peut entraîner un comportement antisocial grave ou déclencher un épisode schizophrénique.</p>

                        <p>Une psychose paranoïaque peut résulter de la prise à long terme de doses IV ou PO élevées. Rarement, cette psychose peut être déclenchée par une dose unique importante ou par 
                           des doses modérées chroniques. Les caractéristiques habituelles comportent des idées délirantes, des idées de référence, et un sentiment de toute puissance. Le consommateur de
                           fortes doses IV sait qu'il finira par expérimenter des états paranoïaques et sait souvent les affronter. Cependant, après une utilisation particulièrement importante du produit
                           ou au décours d'une intoxication de longue date, même les défenses intellectuelles s'effondrent, et le sujet sombre dans des idées délirantes. Le retour à la normale d'une
                           psychose amphétaminique, même prolongée, est habituel. Aussi, le consommateur totalement désorganisé et paranoïaque peut guérir lentement, mais complètement. Les symptômes les
                           plus florident s'estompent en quelques jours ou en quelques semaines, bien que quelques troubles confusionnels ou amnésiques, ainsi que des idées délirantes, persistent souvent
                           pendant des mois.</p>

                        <p>Un syndrome d'épuisement apparaît, dû à l'utilisation répétée de méthamphétamines, associant une fatigue intense et le besoin de dormir après la phase d'excitation. La 
                           méthamphétamines peut également entraîner une psychose pendant laquelle le patient interprète mal les actions d'autrui, est halluciné et exagérément méfiant. Certains
                           consommateurs entrent dans un état dépressif prolongé avec risque suicidaire. L'utilisation de méthamphétamines a également provoqué des décès attribués à de graves 
                           déshydratations, une CIVD (coagulation intravasculaire disséminée), une myoglobinurie et une insuffisance rénale. L'utilisation a un taux élevé de sérieuses caries dentaires
                           touchant plusieurs dents. L'éthiologie implique une diminution de la salivation, des produits de combustion acides et une mauvaise hygiène buccale.</p>

                        <p>Bien qu'aucun syndrome de sevrage caractéristique ne se manifeste à l'arrêt de la prise de méthamphétamines ou d'autres amphétamines, des troubles de l'EEG apparaissent.
                           qui pour certains favorisent satisfont les critères physiques d'une dépendance. L'arrêt brutale de l'utilisation peut démasquer une dépression sous-jacente ou déchaîner une
                           réaction de dépression sérieuse. L'abstinence est suivie de 2-3 j de fatigue intense ou d'insomnie et de dépression.</p>
                         
                    <h3>Traitement:</h3>

                        <p><strong>Utilisation intense:</strong> Un patient dans un état psychotique aigu associant agitation, idées délirantes paranoïaques et hallucinations auditives et visuelles répond
                           bien aux phénothiazines 25-50 mg de chlorpromazine IM agissent rapidement sur cet état, mais peuvent entraîner une importante hypotension orthostatique. L'halopéridol de 2.5-5 mg
                           IM est efficace, il ne donne que de façon rare une hypotension, mais augmente beaucoup le risque de réaction aiguës extrapyramidales inquiétantes. Généralement, le soutien 
                           psychologique et un environnement tranquille, non menaçant sont favorables à la guérison et sont souvent la seule chose nécessaire. L'acidification des urines avec 1g PO de
                           chlorure d'ammonium toute les 2-4h favorise l'éliminations des amphétamines.</p>

                        <p><strong>Utilisation chronique:</strong> La thérapie cognitivo-comportementale et efficace chez certains patients. La dépression se manifeste parfois lorsque les amphétamines sont
                           arrêtées et peut résister aux antidépresseurs si les symptômes dépressifs persistent pendant des semaines.</p>

                        <p><i>Manuel Merck - 4ème édition - Merck research Laboratories - Division de Merck & Co., Inc., Whithouse Station, N.J. 2006, p. 1689-1690.</i></p>
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
