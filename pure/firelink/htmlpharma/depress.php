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
                    <a>Troubles dépressifs</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Troubles dépressifs</strong></h1>

                    <h3>Symptomatologie et diagnostic</h3>

                    <p>Les troubles dépressifs sont caractérisés par une tristesse suffisamment sévère ou suffisamment persistante pour interférer avec le fonctionnement quotidien et parfois par une
                       diminution de l'intérêt ou du plaisir dans les activités (anhédonie). La cause exacte est inconnue, mais elle est probablement multifactorielle, impliquant hérédité avec modifications
                       dans les taux des neurotransmetteurs, altération des fonctions neuroendocrines, et des facteurs psychosociaux. Le diagnostic est fondée sur l'anamnèse. Le traitement comprend normalement
                       les médicaments, la psychothérapie ou les deux, et parfois les électrochocs.</p>

                    <p>Le terme de dépression est souvent utilisé en référence à n'importe quel trouble dépressif. 3 d'entre eux sont classés dans le DSM-IV par symptômes spécifiques: syndrome dépressif majeur,
                       (appelé aussi dépression majeure), dysthimie, trouble dépressif non spécifié. 2 autres sont classés par étiologie: le trouble dépressif dû à une pathologie somatique et le trouble dépressif
                       induit par une substance. Les troubles dépressifs peuvent survenir à tout âge, mais se développent entre 15 et 30 ans. Le terme dépressif est souvent utilisé pour décrire une humeur triste
                       et découragée, résultat de déceptions ou de pertes. Cependant, le terme "démoralisation" est plus approprié pour décrire une telle humeur. Les sentiments négatifs contrairement à ceux de la
                       dépression, se résorbent lorsque le contexte s'améliore ou les événements causals sont mis à distance. L'humeur triste dure généralement quelques jours plutôt que des semaines ou des mois,
                       et les idées suicidaires et l'altération du fonctionnement socioprofessionnel sont beaucoup moins susceptibles de se produire.</p>

                    <h3>Etiologie</h3>
                    <p>La cause exacte n'est pas connue. L'hérédité joue un rôle incertain. La dépression est plus fréquente parmi les parents du 1er degré des patients déprimés, et la concordance entre jumeaux
                       identiques est élevée. Le polymorphisme génétique héréditaire pour le transporteur actif de la sérotonine dans le cerveau peut être déclenché par le stress. Le patient qui a connu des 
                       antécédents de maltraitance dans l'enfance ou d'autres stress majeurs existentiels et qui est porteur de l'allèle court pour ce transporteur a près de 2 fois plus de risque de développer 
                       une dépression que celui qui a l'allèle long.</p>

                    <p>Les autres théories se concentrent sur des taux de neurotransmetteurs, dont la régulation anormale des neurotransmissions cholinergiques, catécholaminergique (soit adrénergique, soit dopaminergique),
                       et sérotoninergique (hydroxytryptamine 5). Le neurodysfonctionnement neuroendocrine peut être un facteur, avec surtout l'implication de 3 axes: hypothalamohypophysosurrénal, 
                       hypothalamohypophysothyroïdien et hormone de croissance (TSH).</p>

                    <p>Les facteurs psychosociaux semble également impliqués. Les événements majeurs de la vie, en particulier les séparations et les pertes, précèdent souvent les épisodes de dépression majeure.
                       Cependant, ces événements n'entraînent généralement pas de dépression durable et sévère, sauf chez le patient prédisposé à un trouble de l'humeur.</p>

                    <p>Le patient qui a connu un épisode de dépression majeure a un risque plus élevé d'épisodes ultérieurs. Le patient introverti et qui a des tendances anxieuses est plus susceptible de développer
                       un trouble dépressif. Ce patient manque souvent de compétences sociales pour s'adapter aux événements stressants de la vie. La dépression peut également se développer chez le patient qui 
                       présente d'autres pathologies psychiatriques.</p>

                    <p>La femme est exposée à unplus haut risque, mais aucune théorie n'en explique la raison. Les facteurs possibles comprennent une exposition plus importante ou une réponse accrue aux stress
                       quotidiens, des taux plus élevés de monoamine-oxydase (l'enzyme qui dégrade les neurotransmetteurs considérés comme importants pour l'humeur) et les modification endocriniennes qui 
                       interviennent au moment des menstruations de la ménopause.</p>

                    <p>Dans l'état dépressif du post-partum, les symptômes se développent au cours des 4 semaines suivant l'accouchement. Les modifications endocriniennes ont été mises en cause, mais l'étiologie
                       précise reste inconnue. De plus, le fonctionnement thyroïdien est plus souvent altéré chez la femme, ce qui entraîne une plus grande vulnérabilité à la dépression.</p>

                    <p>En cas de troubles thymiques saisonniers, les symptômes apparaissent suivant un modèle saisonnier, survenant généralement pendant l'automne ou l'hiver. Le trouble a tendance à survenir 
                       surtout dans les pays ayant des hivers longs et sévères.</p>

                    <p>Certains médicaments, tels que les corticoïdes, certains béta-bloquants, les antipsychotiques (en particulier chez la personne âgée) et la réserpine, peuvent déclencher des troubles dépressifs.
                       L'effet toxique et le sevrage de médicaments peuvent déclencher des symptômes dépressifs transitoires.</p>

                    <h3>Symptomatologie</h3>

                    <p>La dépression entraîne des dysfonctionnements cognitifs, psychomoteurs, une diminution de la concentration (ex: fatigue, baisse de libido, troubles menstruels), mais également une humeur triste.
                       D'autres symptômes ou troubles psychiques, tels que (ex: l'anxiété et les attaques de panique coexistent souvent, compliquant parfois le diagnostic et le traitement). Le patient présentant une
                       dépression, sous n'importe quelle forme est plus susceptible d'abuser de l'alcool ou d'autres substances "récréatives", afin de tenter d'autotraiter les troubles du sommeil ou la symptomatologie 
                       anxieuse. Cependant la dépression est une cause moins fréquente d'alcoolisme ou d'abus de substances qu'on ne l'a pensé pendant un certain temps. Le patient est également plus susceptible
                       de devenir un gros fumeur et de négliger sa santé, augmentant ainsi le risque de développer ou d'aggraver d'autres pathologies (ex: BPCO). La dépression peut réduire les réponses immunitaires
                       protectrices. La dépression accroît le risque d'infarctus du myocarde et d'accidents vasculaires cérébraux, car les cytokines et les facteurs qui favorisent la coagulation du sang augmentent
                       pendant une dépression.</p>

                    <h4>Dépression majeure (trouble uni-polaire)</h4>
                    <p>Voir site internet <a href="http://www.psychomedia.qc.ca/dsm-5/2016-04-04/criteres-diagnostiques-depression-majeure">"dépression majeure"</a></p>

                    <h4>Dysthymie</h4>
                    <p>Voir site internet <a href="http://www.psychomedia.qc.ca/depression/2010-04-22/qu-est-ce-que-la-dysthymie-ou-trouble-dysthymique">"dysthymie"</a></p>

                    <h4>Dépression non spécifique</h4>
                    <p>Des groupes de symptômes qui ne satisfont pas les critères pour d'autres troubles dépressifs sont classés comme dépression non spécifique. Par exemple, le trouble dépressif mineur peut impliquer
                       tous les symptômes de la dépression majeure pendant >= 2 semaines, mais ces symptômes restent moins nombreux que les 5 nécessaires pour diagnostiquer une dépression majeure. Un trouble dépressif
                       bref implique les mêmes symptômes que ceux qui sont nécessaires au diagnostic de la dépression majeure, mais ils ne durent de 2j à 2 semaines. Le syndrome dysphorique prémenstruel implique une 
                       humeur dépressive, une anxiété et une diminution de l'intérêt pour les activités journalières, mais seulement pendant la période du cycle menstruel, qui débute dans la phase lutéale et finit en
                       quelques jours après le début des menstruations.</p>

                    <p>Voir aussi <a href="http://www.psychomedia.qc.ca/dsm-5/2016-04-04/criteres-diagnostiques-depression-majeure">la nouvelle classification du DSM-V</a></p>

                    <h4>Trouble mixte anxiodépressif</h4>
                    <p>Bien qu'elle ne soit pas considérée comme un type de dépression dans le DSM-IV, cette affection, également appelée dépression anxieuse, se réfère à des symptômes modérés et concomitants
                       de type anxieux et dépressif. Le cours est généralement chronique et intermittent. Le patient qui présente une pathologie anxiodépressive doit d'abord être traité pour sa dépression, car
                       les troubles dépressifs sont plus graves dans le pronostic immédiat. Obsessions, panique et phobie sociale associées à une dépression avec hypersomnie évoquent un trouble bipolaire de 
                       type 2.</p>

                    <h4>Voir aussi les divers <a href="atd.php">antidépresseurs</a></h4>

                    <p><i>Manuel Merck - 4ème édition - Merck research Laboratories - Division de Merck & Co., Inc., Whithouse Station, N.J. 2006, p. 1704-1707</i></p>

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