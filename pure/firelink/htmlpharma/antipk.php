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
        <link rel="stylesheet" href="../css/parkin.css" type="text/css" /> 
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
                    <a>Antiparkinsoniens</a>
                </div>
                <div id="banniere_description">
                    <a href="idlc.php" class="bouton_rouge2">Inhibiteurs-ChE</a>
                    <a href="sep.php" class="bouton_rouge">SEP</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/brainlogo.png" alt="Les épilepsies" class="ico_categorie" /><strong>Antiparkinsoniens</strong></h1>

                    <p><strong class="redti">Contre les dyskinésies / Lévodopa + carbidopa</strong> : Duodopa; Carbidopa/Levodopa; Lecapon; Sinemet</p>
                    <p><strong class="redti">Contre les dyskinésies / Lévodopa + inhibiteur de la décarboxylase + inhibiteur de la COMT</strong> : Stalevo</p>
                    <p>Stalevo est destiné au traitement des patients adultes atteints de la maladie de Parkinson et présentant des symptômes de fluctuations motrices 
                    (appelés de fin de dose ou symptômes on-off) qui ne peuvent être stabilisées avec l'association lévodopa/inhibiteur de la dopa décarboxylase.</p>
                    <p><strong class="redti">Contre les dyskinésies / Anticholinergiques</strong> : Akineton; Kemadrin</p>
                    <p><strong class="redti">Contre les dyskinésies / Agonistes de la dopamine</strong> : APO-GO; Apomorphin HCl Amino; Cabaser; Dacepton; 
                    Neupro; Pramipexol; Requip; Ropinirole; Sifrol</p>
                    <p><strong class="redti">Contre les dyskinésies / Inhibiteurs de la MAO-B</strong> : Azilect; Rasagilin</p>
                    <p><strong class="redti">Contre les dyskinésies / Lévodopa + bensérazide</strong> : Madopar</p>
                    <p><strong class="redti">Contre les dyskinésies / Amantadine</strong> : PK-Merz</p>

                    <h3>Physiopathologie</h3>

                        <ul>
                            <li>1. Les neurones dopaminergiques originaires de la substance noire (substantia nigra pars compacta) qui se 
                            projettent vers le striatum (noyau caudé et putamen) : voie nigrostriée, impliquée dans la coordination de la motricité.</li>

                            <li>2. Les neurones dopaminergiques de l'aire tegmentale ventrale (ATV) qui se projettent vers le système limbique 
                                (noyau accumbens, amygdale) : voie mesolimbique, impliquée dans la mémoire et la motivation de nos comportements 
                            (circuit de la récompense)</li>

                            <li>3. les neurones dopaminergiques de l'ATV qui se projettent vers le cortex, en particulier le cortex frontal : 
                            voie mésocorticale, impliquée dans la gestion de nos réactions comportementales.</li>

                            <li>A noter, une quatrième voie dopaminergique, la voie tubéro-infundibulaire, dont les neurones dopaminergiques se 
                                situent dans l'hypothalamus et se projettent dans l'hypophyse et qui influence la sécrétion de certaines hormones 
                            comme la prolactine.</li>
                        </ul>

                    <p>Le neurone dopaminergique synthétise la dopamine à partir d’un acide aminé, la tyrosine, qui est hydroxylée par la tyrosine 
                        hydroxylase en L-Dopa. La L-Dopa est alors décarboxylée en dopamine par la dopa-decarboxylase. La dopamine, stockée dans 
                    les vésicules est alors libérée dans la fente synaptique lors de l’arrivée d’un potentiel d’action.</p>

                    <p>La dopamine peut alors :</p>

                        <ul>
                            <li>se fixer aux récepteurs dopaminergiques</li>
                            <li>être dégradée par les enzymes du catabolisme : Monoamine Oxydase-B (MAO-B) et catechol-O-Methyltransférase (COMT)</li>
                            <li>être recaptée par un transporteur spécifique</li>
                        </ul>

                    <p>On ne peut pas administrer directement de la dopamine exogène car elle ne peut pas traverser la barrière hematoencéphalique. 
                        On peut cependant utiliser un précurseur de la dopamine : la L-Dopa exogène. La L-Dopa exogène sera captée par le neurone 
                        dopaminergique pour être ensuite transformée en dopamine. L’adjonction d’un inhibiteur de la dopa-décarboxylase périphérique 
                        (benzérazide ou carbidopa) permet de limiter la conversion périphérique de la L-Dopa en dopamine et ainsi de diminuer les 
                    effets indésirables périphériques (voir effets indésirables).</p>

                    <p>Les agonistes dopaminergiques se fixent directement sur les récepteurs dopaminergiques où ils miment l’action de la dopamine. 
                        Il existe deux principaux sous types de récepteurs dopaminergiques presents au niveau nigro-striée : les récepteurs D1 et D2. 
                        Les agonistes commercialisés actuellement se fixent tous sur les récepteurs D2. Ils agissent directement sur les récepteurs 
                        dopaminergiques post-synaptiques et ne nécessitent pas de transformation ou de métabolisation au niveau des neurones 
                    dopaminergiques nigrostriés.</p>

                    <p>Les inhibiteurs du catabolisme de la dopamine (ICOMT et IMAO-B) prolongent les effets de celle-ci en inhibant sa dégradation enzymatique.</p>

                    <p>Certains médicaments comme l’amantadine pourraient posséder plusieurs mécanismes d’action comme une augmentation de la libération de dopamine, 
                    une inhibition de la recapture présynaptique de la dopamine et surtout un blocage des récepteurs glutamaergiques de type NMDA.</p>

                    <p>Les antagonistes muscariniques diminuent quant à eux la transmission cholinergique en agissant au niveau de la synapse des interneurones 
                    cholinergiques striataux.</p>


                    <h3>Interactions médicamenteuses</h3>

                        <ul>
                            <li>Neuroleptiques/antipsychotiques : ils antagonisent l’action de tous les médicaments dopaminergiques. Il faut se méfier des nombreux 
                            neuroleptiques cachés : benzamides, anti-H1, antiémétiques ou antivertigineux.</li>
                            <li>Médicaments hypotenseurs : antihypertenseurs centraux, alpha bloquants, diurétiques ainsi que les médicaments possédant des propriétés 
                            alpha bloquantes latérales (antidépresseurs tricycliques, neuroleptiques) voient leurs effets hypotenseurs majorés par l’association avec 
                            les médicaments dopaminergiques.</li>
                            <li>Psychotropes : tous les psychotropes (benzodiazépines, antidépresseurs notamment) peuvent entraîner des syndromes confusionnels et 
                            doivent être utilisés prudemment en association avec les médicaments dopaminergiques et anticholinergiques.</li>
                        </ul>


                    <h3>Effets indésirables</h3>

                    <p>La plupart des effets indésirables des médicaments antiparkinsoniens sont liés à leurs propriétés dopaminergiques périphériques et centrales.</p>

                    <p>La présence des récepteurs dopaminergiques dans des organes très divers comme le cerveau, le tube digestif ou le système cardiovasculaire, 
                        explique que tout agent dopaminergique exerce des effets sur chacun de ces organes. On distingue schématiquement des effets dits centraux 
                        (l’impact du médicament se situe à l’intérieur de la barrière hémato-encéphalique) de type neurologique et psychiatrique et des effets 
                    périphériques (l’impact du médicament se situe à l’extérieur de la barrière hémato-encéphalique) de type digestif et vasculaire.</p>


                    <h3>Effets indésirables périphériques dopaminergiques</h3>
                    
                        <ul>
                            <li>Nausées et vomissements, anorexie : la dopamine agit sur les récepteurs dopaminergiques de la paroi de l’estomac et de la zone gâchette 
                            du vomissement (area postrema)</li>
                            <li>Hypotension orthostatique : stimulation des récepteurs dopaminergiques vasculaires (vasodilatation) et rénaux (natriurèse)</li>
                        </ul>


                    <h3>Effets indésirables centraux dopaminergiques</h3>

                        <ul>
                            <li>Sédation, somnolence excessive, endormissement brusques</li>
                            <li>Troubles du comportement à type de comportement compulsifs et répétitives tels que addiction au jeu, achats compulsifs, 
                            punding (comportement répétitif sans but) et hypersexualité</li>
                            <li>Troubles psychiatriques : agitation, anxieté, délire interprétatif, hallucinations visuelles et/ou auditives seraient 
                                la conséquence d’une stimulation excessive des récepteurs dopaminergiques mésocorticolimbiques et/ou d’une hyperactivité 
                            sérotoninergique (interaction dopamine-sérotonine)</li>
                            <li>Pseudosyndrome malin des neuroleptiques à l’arrêt brutal du traitement dopaminergique.</li>
                        </ul>


                    <h3>Aprés plusieurs années de traitement, des effets indésirables moteurs apparaissent</h3>

                        <ul>
                            <li>Les fluctuations motrices qui se définissent comme la résurgence des signes parkinsoniens. Elles peuvent être prévisibles 
                            c’est à dire rythmées par les prises médicamenteuses (akinésie de fin de doses) ou imprévisibles (effet ON/OFF).</li>
                            <li>Les <a href="https://www.cen-neurologie.fr/deuxieme-cycle/mouvements-anormaux">"dyskinésies"</a> sont des mouvements anormaux involontaires parasitant les gestes de la vie quotidienne. Les 
                            dyskinésies de milieu de doses, les plus fréquents, apparaissent lorsque les taux plasmatiques de L-Dopa sont élevés.</li>
                        </ul>

                    <p>La physiopathologie des troubles moteurs reste encore mal comprise. Toutefois, les principaux facteurs seraient la courte demi-vie 
                        d’élimination de la L-Dopa et la progression de la maladie (perte progressive des neurones dopaminergiques et ainsi des capacités 
                        de stockage et de relargage progressive de la dopamine).Ainsi, dans les premieres années de la maladie, les  capacités de stockage 
                        neuronaux suffisent à amortir la cinétique plasmatique de la L-Dopa et la réponse motrice est optimale. Plus tard, l'état moteur 
                        tend à suivre préécisement les variations plasmatique de la L-Dopa.</p>

                    <p>A coté des effets indésirables dopaminergiques, il existe d’autres types d’effets indésirables des médicaments antiparkinsoniens, 
                        liés au fait qu’ils possèdent alors une autre propriété pharmacodynamique, antimuscarinique par exemple pour les anticholinergiques 
                        et l’amantadine ou liés au fait qu’ils possèdent une structure chimique particulière dérivée de l’ergot de seigle pour certains agonistes.</p>
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

