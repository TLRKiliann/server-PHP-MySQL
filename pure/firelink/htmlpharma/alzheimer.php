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
        <link rel="stylesheet" href="../css/alz.css" type="text/css" />
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
                    <a>Alzheimer</a>
                </div>
                <div id="banniere_description">
                    <a href="neuro.php" class="bouton_rouge2">Neurologie</a>
                    <a href="accueil.php" class="bouton_rouge">Rechercher</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>La maladie d'Alzheimer</strong></h1>

                    <h3>Définition</h3>

                        <p>La maladie d'Alzheimer entraîne une détérioration cognitive progressive et est caractérisée par des 
                            plaques séniles, des dépôts de B-amyloïdes et des structures neurofibrilaires (dégénérescence 
                        neurofibrillaire) du <a href="../images/sub_grise.jpg">"cortex cérébral" et de la "substance grise sous-corticale".</a></p>

                    <h3>Ethiologie et physiopathologie</h3>

                        <p>La plupart des cas sont sporadiques avec un début tardif (>60 ans) et une éthiologie mal connue. Cependant, 
                            près de 5-15% des cas sont familiaux. 50% parmi ces cas ont un début précoce (<60 ans) et sont généralement 
                        corrélés à des mutations génétiques spécifiques.</p>

                        <p>De manière caractéristique, les dépôts de protéines B-amyloïdes extracellulaire, des lésions de 
                            dégénérescence neurofibrillaire intracellulaires (filaments hélicoïdaux appariés) et des plaques séniles 
                            se développent, et entraîne une perte neuronale. L'atrophie corticale est fréquente, et la consommation de 
                        glucose neuronale est diminuée, de même que la perfusion pariétale, temporale et préfrontale.</p>

                        <p>Au moins 5 locus génétiques distincts, localisés sur les chromosomes 1, 12, 14, 19 et 21, prédisposent à 
                            l'apparition et à l'évolution de la maladie d'Alzheimer. Les gènes des protéines précurseurs préseniline I 
                            et préseniline II sont en cause. Des mutations dans ces gènes peuvent modifier l'élaboration du précurseur 
                            du peptide aboutissant à un dépôt et à une aggrégation fibrillaire de B-amyloïde. La protéine B-amyloïde 
                            peut conduire à une mort neuronale et à la formation de dégénérescence neurofibrillaire et de plaques 
                            séniles qui sont constitués par des processus axonaux ou dendritiques dégénérés, des astrocytes et des 
                        cellules gliales autour d'un dépôt d'amyloïde.</p>

                        <p>Il existe d'autres facteurs génétiques prédisposant notamment l'apolipoprotéine (apo) allèle E (E). Les 
                            apolipoprotéines E influencent le dépôt de B-amyloïde, l'intégrité du cytosquelette et l'efficacité de 
                            la réparation neuronale. Le risque de maladie d'Alzheimer est nettement augmenté chez les patients qui 
                        présentent 2 allèles E4 et peut être diminué chez les patients qui ont l'allèle E3.</p>

                        <p>Il peut également fréquemment exister une augmentation des concentrations des protéines tau (un constituant 
                            de la dégénérescence neurofibrillaire B-amyloïde) dans le cerveau et le LCR, et des niveau abaissés de choline 
                        acétyltransférase et de divers neurotransmetteurs (p.ex. somatostatine).</a></p>

                    <h3>Diagnostic et symptomatologie</h3>

                        <p>La symptomatologie de la maladie d'Alzheimer est comparable à celle d'autres démences avec stade précoce, 
                            intermédiaire et tardif. L'atteinte de la mémoire à court terme est souvent le premier signe de la maladie. 
                            La maladie évolue progressivement, mais peut être stable à certaines périodes. Les troubles du comportement 
                        (p.ex. agitation, cris, déambulation) sont fréquents.</p>

                        <p>Les critères diagnostiques traditionnels pour la maladie d'Alzheimer comprennent une démence confirmée par 
                        les examens cliniques et documentée par une évaluation cognitive codifiée.</p>
                        
                        <p>Une atteinte >= 2 fonctions cognitives; une apparition progressive et une aggravation évolutive de la 
                            mémoire et des autres fonctions cognitives; une absence de troubles de la vigilance; l'apparition de la 
                            maladie après 40 ans; le plus souvent après 65 ans; et le défault de perturbation systémique ou cérébrale 
                            qui puissent expliquer l'atteinte progressive de la mémoire et de la cognition. Cependant, si un patient 
                        ne rempli pas entièrement ces critères, le diagnostic de maladie d'Alzheimer n'est pas forcément exclu.</p>

                        <p>La distinction entre la maladie d'Alzheimer et les autres démences est difficile. Le score ischémique 
                            d'Haschinski est utile pour distinguer la "démence vasculaire" de la maladie d'Alzheimer. Des fluctuations 
                            cognitives, des symptômes parkinsoniens, des hallucinations visuelles fréquentes et une relative 
                            conservation de la mémoire à court terme suggéreront une <a href="../docs/04.pdf">démence à corps de Lewy</a> 
                            plutôt qu'une maladie d'Alzheimer. Les patients souffrant de la maladie d'Alzheimer ont souvent une apparence 
                        plus soignée et plus propre que les patients atteints d'autres démences.</p>

                    <h3>Traitement</h3>

                        <p>Même si la rapidité d'évolution est variable, le déclin cognitif est inévitable. Le délai moyen du décès 
                            après le diagnostic est de 7 ans. Le traitement général de la maladie d'Alzheimer est identique à celui 
                        de toutes les démences.</p>

                        <p>Les <a href="idlc.php">"inhibiteurs de la cholinestérase"</a> améliorent modestement la fonction intellectuelle et la mémoire chez 
                        certains patients.</p>
                        
                        <p>Il est admis que le <a href="idlc.php">"donépézil", la "rivastigmine" et la "galantamine"</a> 
                        	ont une efficacité comparable, mais la tacrine est rarement utilisée du fait de son hépatotoxicité. Le donépézil est un 
                        	médicament de première ligne, car il est administré 1x/j et il est bien toléré. La posologie recommandée est de 
                        	5mg 1x/j pdt 4-6 semaines, ensuite augmentée à 10mg 1x/j. Le traitement doit être poursuivi si une amélioration fonctionnelle 
                            est confirmée après plusieurs mois, mais dans le cas contraire, le traitement doit être arrêté. Les effets 
                            secondaires les plus fréquents sont les troubles digestifs (nausées, diarrhées). De façon rare, des vertiges 
                            et des arythmies cardiaques peuvent survenir. 
                            La <a href="idlc.php">"mémantine"</a> antagoniste des récepteurs N-méthyl-D-aspartate a récemment reçu l'AMM (5-10mg PO en 2 
                        prises) et semble ralentir la progression de la maladie d'Alzheimer.</p>

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
                                    <li><a href="http://www.psychomedia.qc.ca/categorie/1186">Avancées généralitées</a></li>
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
