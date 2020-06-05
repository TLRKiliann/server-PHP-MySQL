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
        <link rel="stylesheet" href="../css/alcool.css" type="text/css" /> 
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
                    <a>Alcoolisme</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Psychiatrie</a>
                    <a href="ampheta.php" class="bouton_rouge">Amphétamines</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>alcoolisme</strong></h1>

                        <p>Un excès d'alcool peut entraîner de graves problèmes mentaux et physiques. Une consommation chronique excessive qui implique une compulsion à boire, une tolérance accrue à des 
                           symptômes de sevrage, est appelée dépendance à l'alcool ou encore alcoolisme.</p>

                        <p>L'abus d'alcool se réfère généralement à une habitude inadéquate de boire par intermittence, induisant une incapacité à remplir ses obligations, l'exposition à des situations 
                           physiquement dangeureuses, des problèmes avec la justice ou des problèmes sociaux et interpersonnels sans preuve de la dépendance.</p>

                        <p>La dépendance à l'alcool se réfère à une consommation fréquente de grandes quantités d'alcool pendant des années, induisant tolérance, dépendance psychologique, dépendance 
                           physique et syndrome de sevrage dangeureux. L'alcoolisme est souvent utilisé comme terme équivalent à la dépendance à l'alcool, en particulier lorsque le fait de boire induit 
                           une intoxication cliniquement importante et des lésions des tissus.</p>

                        <p>Près de 2/3 des Américains adultes boivent de l'alcool. Il existe près de 4 fois plus d'hommes alcooliques que de femmes. La prévalence au cours d'une vie de l'alcoolisme et de
                           la dépendance associée est de près de 15%.</p>

                        <p>La personne qui abuse ou est dépendante de l'alcool connaît généralement de grâves conséquences sociales du fait de son alcoolisme. L'intoxication fréquente est évidente et 
                           dégradante. Elle gêne l'intégration sociale et professionnelle. Finalement, l'ébriété peut induire la perte relationnelle et la perte de son travail pour absentéisme. La personne
                           peut être arrêtée pour état d'ébriété ou pour conduite en état d'ivresse, ce qui s'ajoute aux conséquences sociales de son alcoolisme.</p>

                        <p>La femme alcoolique a en général tendance à boire de manière solitaire, et le stigmate sociale est moins fréquent. L'alcoolique peut exiger des ttt médicaux pour sa consommation 
                           d'alcool. Enfin, il peut être hospitalisé pour <strong>delirium tremens (DT)</strong> ou cirrhose. Les blessures sont fréquentes. Plus ces signes apparaissent tôt dans la vie, 
                           plus l'intoxication est grave.</p>

                    <h3>Etiologie des pathologies</h3>

                        <p>Le fait de boire au point de devenir intoxiqué ou de contracter une habitude maladaptée à boire qui constitue l'alcoolisme, commence par le désir d'atteindre un <strong>sentiment de 
                           plénitude.</strong> Certains buveurs qui trouvent se sentiment gratifiant recherchent alors à atteindre régulièrement cet état.</p>

                        <p>Certains traits de personnalité sont plus fréquents chez ceux qui abusent chroniquement de l'alcool ou deviennent dépendant à l'alcool:</p>
                            <ul>
                                <li><a>Isolement</a></li>
                                <li><a>Solitude</a></li>
                                <li><a>Timidité</a></li>
                                <li><a>Dépression</a></li>
                                <li><a>Dépendance</a></li>
                                <li><a>Impulsion hostile et autodestructrice</a></li>
                                <li><a>Immaturité sexuelle</a></li>
                                <li><a>Milieu familial divisé et relations conflictuelles avec les parents</a></li>
                                <li><a>Les facteurs sociaux</a></li>
                                <li><a>Les attitudes culturellement transmises</a></li>
                                <li><a>L'éducation des enfants</a></li>
                            </ul>

                        <p>L'incidence de l'alcoolisme est plus élevée chez l'enfant biologique d'alcooliques que chez l'enfant adoptif, et le pourcentage d'enfants descendant d'alcooliques qui ont des 
                           problèmes liés à l'alcool est plus élevé que celui de la population générale. Ainsi, dans certaines populations et certains pays, la prévalence est élevée. Il existe des éléments 
                           en faveur de la prédisposition génétique ou biochimique, incluant les données qui évoquent que certaines personnes devenant alcooliques sont moins facilement intoxiquées, c'est-à-dire,
                           elles ont un seuil plus élevé d'effets SNC.</p>

                    <h3>Symptomatologie</h3>

                        <p><strong>Utilisation intense:</strong> Le passage de l'alcool dans la circulation sanguine se fait principalement au niveau de l'intestin grêle. Il s'accumule dans le sang, car
                           l'absorption est plus rapide que l'oxydation et l'élimination. Près de 5 à 10% de l'alcool ingéré est éliminé sans modification dans les urines, l'air expiré ou la sueur, le 
                           reste est oxydé en CO2 et en eau au rythme de 5-10ml/h(oh absolu). Chaque millilitre fournit près de 7 Kcal. L'alcool déprime principalement le SNC.</p>
                        <p><strong>Une concentration d'alcool dans le sang (CAS):</strong></p>
                            <ul>
                                <li><a>50mg/dl -> donne une sédation ou une sensation de calme</a></li>
                                <li><a>50-150mg/dl -> des difficultés de la coordination</a></li>
                                <li><a>150-200mg/dl -> un syndrome confusionnel</a></li>
                                <li><a>300-400mg/dl -> l'inconscience</a></li>
                                <li><a>Au-delà de 400mg/dl -> peut être fatale!</a></li>
                            </ul>
                        <p>Une mort subite provoquée soit par la dépression respiratoire, soit par l'arythmie, peut survenir lorsque de grandes quantités sont bues rapidement.</p>

                        <p><strong>Utilisation chronique:</strong> La personne qui boit de grandes quantités d'alcool de manière répétée développe une tolérance à ses effets, telle que des doses similaires 
                           ont finalement moins d'effet. La tolérance est due à une adaptation des cellules du SNC. La personne qui développe une tolérance peut atteindre un CAS extrêmement élevé. 
                           Cependant, la tolérance à l'éthanol est incomplète et des signes d'intoxication et des troubles surviennent avec des posologies suffisamment élevées. Même les buveurs tolérants 
                           peuvent décéder d'une dépression respiratoire résultant d'un surdosage de l'alcool. L'individu tolérant à l'alcool est sensible à l'acidocétose alcoolique, en particulier pendant
                           les orgies d'alcool. La personne tolérante à l'alcool présente une tolérance croisée à de nombreux autres dépresseurs du SNC (barbituriques, non-barbituriques, sédatifs, benzodiazépines).</p>

                        <p>La dépendance physique accompagnant la tolérance à l'alcool est profonde, et l'abstinence entraîne des effets indésirables potentiellement fatals. L'alcoolisme conduit finalement à:
                            <ul>
                                <li><a>Lésions organiques (le plus souvent hépatite et cirrhose)</a></li>
                                <li><a>Gastrite</a></li>
                                <li><a>Pancréatite</a></li>
                                <li><a>Myocardiopathie (souvent accompagnée d'arythmie)</a></li>
                                <li><a>Neuropathie périphérique (névrite périphérique)</a></li>
                                <li><a>Lésions cérébrales incluant:</a></li>
                                <ul>
                                    <li><a>Encéphalopathie de Wernicke</a></li>
                                    <li><a>Psychopolynévrite de Korsakoff</a></li>
                                    <li><a>Maladie de Marchiafava-Bignami</a></li>
                                    <li><a>Démence alcoolique</a></li>
                                </ul>
                            </ul>

                        <p>Le continium symptomatologique début généralement dans les 12-48h suivant l'arrêt de la consomation. Les signes mineurs sont:</p>
                            <ul>
                                <li><a>des tremblements</a></li>
                                <li><a>une asthénie</a></li>
                                <li><a>une sudation</a></li>
                                <li><a>une hyperréflexie</a></li>
                                <li><a>une symptomatologie intestinale</a></li>
                            </ul>

                        <p>Certains patients peuvent présenter des convulsions généralisées, mais en général pas plus de 2 dans une période rapprochée <strong>(épilepsie alcoolique).</strong></p>

                        <p>L'état hallucinatoire alcoolique apparaît après un arrêt brutal de la consommation excessive prolongée d'alcool. Les symptomes sont des hallucinations auditives et des hallucinations 
                           qui sont accusatrices et menaçantes. Le patient est en général inquiet et peut être terrifié par des halucinations et des rêves effrayants et intenses. Le syndrome peut ressembler à la
                           schizophrénie, bien qu'il n ait pas en général de troubles du cours de la pensée, et l'histoire n'est pas caractéristique de la schizophrénie. Les symptômes ne font pas penser au délire
                           du syndrome mental organique aigu autant que le fait le <strong>DT (delirium tremens)</strong> ou les autres états pathologique associés au sevrage. Le patient reste normalement conscient 
                           et les signes de labilité végétative du DT sont généralement absents. Quand l'hallucinose se produit, elle précède généralement le DT et est passagère. Le retour à la normale s'effectue 
                           généralement après 1-3 semaines. Les rechutes sont à prévoir si le patient recommence à boire.</p>

                        <p>Le DT débute généralement après 48-72h après le sevrage alcoolique, accompagné d'accès anxieux, de confusion croissante et de troubles du sommeil, s'accompagnant:</p>
                            <ul>
                                <li><a>de rêves effrayants</a></li>
                                <li><a>d'hallucinations nocturnes</a></li>
                                <li><a>d'une hypersudation</a></li>
                                <li><a>d'une dépression profonde</a></li>
                            </ul>

                        <p>Les hallucinations fugaces qui sont responsables de frayeur et d'agitation, et même la terreur sont fréquentes. Caractéristiques du délir initial et de l'état de confusion et de 
                           désorientation et le reflet de l'activité habituelle. Par exemple, le patient s'imagine fréquemment qu'il est de retour à son travail et tente de faire une activité qui y est liée. Une
                           dépression profonde neuro-végétative, caractérisée par une diaphorèse, un pouls accéléré et une hyperthermie, accompagne et évolue parallèlement au syndrome confusionnel. La confusion 
                           modérée se traduit en général par:</p>
                            <ul>
                                <li><a>des sueurs importantes</a></li>
                                <li><a>une fréquence cardiaque entre 100-120 bpm</a></li>
                                <li><a>une température vers 37.2 37.8°C</a></li>
                            </ul>

                        <p>Un syndrome confusionnel plus grave, s'accompagne de : </p>
                            <ul>
                                <li><a>une grande désorientation</a></li>
                                <li><a>une perturbation intellectuelle</a></li>
                                <li><a>une agitation importante</a></li>
                                <li><a>une fréquence cardiaque supérieure à 120 bpm</a></li>
                                <li><a>une température supérieure à 37.8°C</a></li>
                            </ul>

                        <p>Au cours du DT, le patient est sensible à tous les stimuli sensoriels, en particulier aux objets vus dans la pénombre. Les troubles vestibulaires font croire au patient que le sol bouge,
                           que les mûrs s'écroulent que la pièce est en train de tourner. Au fur et à mesure que le syndrome confusionnel progresse, des tremblements au repos de la main s'installe, s'étendant parfois 
                           au tronc et à la tête. L'ataxie est importante, il faut faire attention que le patient ne se blesse pas. Les symptômes varient selon les patients, mais sont en général les mêmes à chaque 
                           récidive pour un patient donné.</p>

                    <h3>Voir aussi</h3>
                            <ul>
                                <li><a href="encowerni.php">Encéphalopathie de Wernicke</a></li>
                                <li><a href="psychokorsa.php">Psychopolynévrite de Korsakoff</a></li>
                                <li><a href="https://fr.wikipedia.org/wiki/Syndrome_de_Wernicke-Korsakoff">Syndrome de Wernicke-Korsakoff</a></li>
                                <li><a href="mmb.php">Maladie de Marchiafava-Bignami</a></li>


                            </ul>

                    <h3>Traitement</h3>

                        <p><strong>Utilisation intense:</strong> Lorsqu'une personne boit au point d'être intoxiqué, la priorité du ttt est d'arrêter de le faire boire toute quantité supplémentaires d'alcool qui 
                           pourrait entraîner l'inconscience et la mort. La 2ème priorité et d'assurer sa sécurité et la sécurité des autres en interdisant au buveur d'utiliser un véhicule à moteur ou tout autre mode
                           de transport. Le patient somnolent peut devenir alerte et coopéatif lorsque son CAS diminue.</p>

                        <p><strong>Utilisation chronique:</strong> Le bilan médical initial doit chercher toute maladie intercurrente qui pourrait compliquer le sevrage et également éliminer un tramatisme du SNC 
                           qui peut ressembler à un syndrome de sevrage ou être masqué par celui-ci. Il faut procéder par étapes pour prévenir le <a href="https://fr.wikipedia.org/wiki/Syndrome_de_Wernicke-Korsakoff">
                           syndrome de Wernicke-Korsakoff.</a></p>

                    <h3>Entretiens</h3>

                        <p>Le maintient de la sobriété est difficile. Le patient doit être averti qu'après quelques semaines, lorsqu'il se sera remis de sa dernière crise, il trouvera probablement une bonne excuse 
                           pour reprendre un verre.</br>
                           Les programmes de réhabilitation combinent une surveillance médicale et une psychothérapie individuelle, incluant des thérapies de groupes. La psychothérapie implique des techniques qui
                           augmente la motivation et qui apprennent au patient d'éviter les circonstances qui déclenchent la prise d'alcool. Le soutien social à l'abstinence est important, dont le soutien par les
                           amis et la famille.</br>
                           Les alcooliques anonymes (AA) sont, plus que toute autre approche, bénéfiques aux alcooliques. Le patient peut écouter les autres et exposer devant le groupes des arguments qu'il a utilisé
                           lui-même pour justifier sa consommation d'alcool. L'aide apportée aux autres alcoolique renforce l'estime de soi et l'assurance qu'il n'obtenait antérieurement que par l'alcool. De nombreux
                           alcooliques sont réticents pour aller au AA et trouvent l'assistance individuelle, le conseil familial ou les traitements de groupe ou familiaux plus acceptables.</p>

                    <h3>Médicaments</h3>

                        <p>La psychothérapie doit être associée aux médicaments. Tout patient en sevrage est susceptible de recevoir des tranquilisants, mais tous n'en ont pas besoin. <a href="benzo.php">
                           Les benzodiazépines</a> sont les médicaments les plus utilisés. La posologie dépend des fonctions vitales. Dans la plupart des cas, le chlordiazépoxyde, initialement des doses de 
                           <strong>50-100mg PO</strong>, est indiqué. Il peut-être nécessaire de répéter les doses toutes les 2-4 heures. Le diazépam à la dose de <strong>5-10mg IV ou PO toutes les heures</strong> 
                           jusqu'à l'apparition de la sédation, est une alternative utile.</br> 
                           Comparés aux benzodiazépines à demie-vie courte (lorazépam, oxazépam), les benzodiazépines à demie-vie longue (chlordiazépxide, diazépam) permettent des prises moins fréquentes et, 
                           quand la dose est atteinte, une diminution plus graduelle des concentrations plasmatiques. Une benzodiazépine à demie-vie courte (lorazépam) ou une qui est métabolisée par conjugaison 
                           avec l'acide glucuronique (oxazépam) est préférable en cas de lésions hépatiques graves.</p> 

                        <p><a href="mae.php">La carbamazépine (MAE)</a> <strong>200mg PO 4x/j</strong> peut être une alternative avant d'être diminuée progressivement. Les crises épileptiques isolées ne nécessitent 
                           pas de ttt spécifiques. Les crises convulsives récidivantes répondent au diazépam <strong>1-3 mg IV</strong>. L'administration systématique de phénytoïne n'est pas nécessaire. Le ttt 
                           ambulatoire de phénytoïne est presque toujours une perte de temps, car les crises épileptiques surviennent que sous l'effet du stress produit par le sevrage alcoolique, et le patient en 
                           cours de sevrage ou qui a beaucoup bu ne prend pas ses antiépileptiques.</p>

                        <p>Bien que le DT puisse commencer à se normaliser en 24h, l'issue peut être fatale et doit donc être rapidement traitée. Le patient atteint de DT est très influençable et est sensible au 
                           soutient psychologique. Il ne faut en général pas l'attacher. L'équilibre électrolytique doit être maintenu, et d'importantes doses de vitamines B et C, en particulier de thiamine doivent 
                           être administrées rapidement. Une fièvre élevée associée au DT est un signe de mauvais pronostic. Si l'amélioration ne se fait pas sentir au bout de 24h, d'autres pathologies, telles
                           qu'un hématome sous-dural, une maladie hépatique ou rénale, ou d'autres perturbations mentales sont à suspecter.</p>

                        <p>Le disulfirame perturbe le métabolisme de l'acétaldéhyde, lequel s'accumle alors. La consommation d'alcool dans les 12h qui suivent la prise de disulfirame entraîne des bouffées
                           vasomotrices au niveau du visage survenant 5-15min, puis se produit une intense vasodilatation de la face et du cou associant injection conjonctivale, céphalées pulsatiles, tachycardie,
                           dyspnée et sudations. Avec de forte dose d'alcool, les nausées et les vomissements peuvent apparaître dans les 30-60min et peuvent aboutir à une hypotension et parfois aux évanouissements
                           et au collapsus. La réaction peut durer jusqu'à 3h. Peu de patients se risquent à ingérer de l'alcool pendant qu'ils prennent du disulfirame du fait de l'intense gêne ressentie.</br>
                           Les médicaments contenant de une solution d'alcool doivent être évités. Le disulfirame est contre-indiqué en cas de grossesse et chez le patient cardiaque décompensé. Cela peut être
                           administré au patient en ambulatoire après 4-5 jours d'abstinence. La posologie initiale est de <strong>0.5 g/j PO pdt 1-3 sem</strong>, suivie d'une posologie d'entretien de 
                           <strong>0.25 g/j.</strong> Les effets peuvent persister <strong>3-7 jours</strong> après la dernière prise. Les visites médicales périodiques sont nécessaires à la poursuite de la 
                           prise de disulfirame qui fait partie du ttt de l'abstinence. L'observation de l'ingestion du médicament est importante.</p>

                        <p>La naltrexone, un opiacé antagoniste diminue le taux de rechutes chez la plupart des patients qui le prennent constamment. La naltrexone est administrée à une posologie de 
                           <strong>50 mg/j PO</strong>. Il est peu probable qu'elle soit utile si elle n'est pas accompagnée d'un conseil de soutien. L'acamprosate, un analogue synthétique de l'acide g-aminobutyrique, 
                           est administré en <strong>dose de 2 g/j PO</strong>. L'acamprosate diminue le taux de rechute du patient, comme la naltrexone, il fonctionne mieux quand il est associé au conseil. 
                           Le nalméfène et le topiramate sont au stade expérimental du fait de leur capacité à diminuer le besoin d'alcool.</p>

                        <p><i>Manuel Merck - 4ème édition - Merck research Laboratories - Division de Merck & Co., Inc., Whithouse Station, N.J. 2006, p. 1685-1688.</i></p>
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
