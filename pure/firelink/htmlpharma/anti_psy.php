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
        <link rel="stylesheet" href="../css/antipsy.css" type="text/css" /> 
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
                    <a>Antipsychotiques</a>
                </div>
                <div id="banniere_description">
                    <a href="mae.php" class="bouton_rouge2">Précédent</a>
                    <a href="atd.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Antipsychotiques</strong></h1>

                    <p><strong>Antipsychotiques de première génération :</strong> Chlorpromazine(n'est plus utilisé); Clopin(Leponex); Clopixol; Enthumine; Fluanxol; 
                       Haldol; Nozinan; Tiapridal.</p>
                    <p><strong>Antipsychotiques de seconde génération :</strong> Abilify; Dogmatil; Invega; Olanzapine(Zyprexa); Orap; Risperdal(Risperdone); Semap; 
                       Seroquel(Sequase, Quétiapine); Solian.</p>

                    <h3>PROPRIETES DES ANTIPSYCHOTIQUES</h3>
                    <p>Tous les antipsychotiques sont des antagonistes des récepteurs dopaminergiques de type D2, c'est leur plus petit dénominateur commun. Il s'agit là de leur cible primaire, 
                       sans que leurs effets subséquents sur le long terme (stimulation de la synthèse de la dopamine, hypersensiblité des récepteurs, …), ou leurs conséquences fonctionnelles, 
                       voir sur l'expression génomique soit précisément connues.</p>

                    <p>En théorie, la moindre incidence <a href="sep.php">d'effets extrapyramidaux</a> avec les antipsychotiques atypiques, ou un meilleur bénéfice obtenu sur la symptomatologie 
                       négative, pourrait s'expliquer par une action préférentielle sur un récepteur dopaminergique autre que D2 ou par l'antagonisme simultané de récepteurs appartenant à d'autres 
                       systèmes de neurotransmission.</p>

                    <p>Physiologiquement, la dopamine freine la libération d'acétylcholine. Le blocage des récepteurs dopaminergiques, cible principale des antipsychotiques, lève ce frein et induit 
                       une libération excessive d'acétylcholine et un déséquilibre entre les concentrations de dopamine et d'acétylcholine, à l'origine de <a href="neuro.php">mouvements anormaux.</a></p>

                    <p>Si un même médicament possède à la fois des propriétés antagonistes des récepteurs dopaminergiques et muscariniques, il permettra une autolimitation de la surstimulation 
                       cholinergique et un moindre risque de voir apparaître des <a href="sep.php">effets extrapyramidaux</a>. Parmi les antipsychotiques conventionnels, ceux qui possèdent des propriétés atropiniques 
                       induisent moins d'effets de ce type que les autres.</p>

                    <p>Un raisonnement similaire se fait avec le système sérotoninergique. La sérotonine inhibe la libération de la dopamine, mais le degré de contrôle varie selon les structures. 
                       La fixation conjointe d'un antipsychotique sur les récepteurs D2 et sur les hétérorécepteurs de type 5-HT2A, localisés sur des neurones dopaminergiques, autolimite le blocage 
                       dopaminergique dans les structures renfermant une forte densité de récepteurs sérotoninergiques. Cette double action rendrait compte du moindre risque <a href="sep.php">d'effets 
                       extrapyramidaux</a> (moins d'effets sur la voie nigrostriée) et de la plus grande efficacité sur les symptômes négatifs (moins de blocage cortical dopaminergique).</br>
                       Une autre approche postule que tous les antipsychotiques atypiques auraient une plus faible affinité et surtout se dissocieraient plus rapidement du récepteur D2 (hit and run).</p>
 
                    <p>Une nouvelle molécule, l'aripiprazole, possédant un mécanisme d’action original est maintenant disponible, il s’agit d’un agoniste partiel dopaminergique D2, qui se comporterait 
                       comme un antagoniste dans un environnement où le tonus dopaminergique est élevé.</p>

                    <h3>EFFETS SECONDAIRES DES ANTIPSYCHOTIQUES</h3>

                    <p><strong>Les neuroleptiques classiques :</strong>
                       Tremblements, hypertonie musculaire, akathisie (agitation motrice prédominante dans les membres inférieurs), dystonie aiguë, dyskinésies tardives, <a href="snm.php">syndrome 
                       neuroleptique malin</a>, effets endocriniens, sédation, prise de poids, taux de prolactine élevé, hypotension, vertiges, effets subjectifs...</p>

                    <p><strong>Les neuroleptiques atypiques :</strong>
                       Sédation, prise de poids, agranulocytose (clozapine), syndrome extrapyramidal, tremblements, raideurs, agitation, baisse de libido, suivant le dosage, certains atypiques 
                       peuvent avoir les mêmes ES (effets secondaires) que les classiques.</p>

                    <p>Les symptômes extrapyramidaux des NL (neuroleptiques) classiques peuvent être atténués par des correcteurs anticholinergiques (antiparkinsonien, ex: Akineton retard, Kemadrine). 
                       Ceux-ci peuvent aggraver les troubles cognitifs.</p>

                    <p>La chlorpromazine et la lévomépromazine induisent des effets indésirables <a href="antico.php">anticholinergiques</a> importants, contrairement à la pipampérone.</p> 

                    <h3>INTERACTIONS</h3>

                        <ul>
                          <li>Pamplemousse</li>
                          <li>L Dopa</li>
                          <li>Antihypertenseurs (adrénolytique)</li>
                          <li>Alcool (dépresseur du SNC)</li>
                          <li>IMAO (risque hypotension)</li>
                          <li>Lithium (syndrome confusionnel</li>
                          <li>AD TCC (trouble du rythme cardiaque augmente, <a href="antico.php">anticholinergiques</a> (même propriété)).</li>
                        </ul>

                    <p>Avec la clozapine (clopin, léponex), la carbamazépine est déconseillée en raison de son potentiel myélodépresseur.</br> 
                       Avec les autres médicaments anticonvulsivants, une éventuelle interaction pharmacocinétique doit être prise en compte.<mark> Des cas mortels de 
                       convulsions ont été rapportés.</mark></br> 
                       Occasionnellement, des cas de <a href="snm.php">syndrome neuroleptique malin</a> ont été rapportés chez des patients traités avec de la clozapine administrée seule 
                       ou associée au lithium ou à d'autres médicaments à action centrale. Cette manifestation nécessite l'arrêt immédiat du médicament et l'instauration de soins intensifs. 
                       <a href="snm.php">Le syndrome neuroleptique malin</a> se manifeste par les principaux symptômes suivants: <strong class="redti">rigidité, hyperthermie, modifications psychiques, 
                       labilité végétative.</strong></p>

                        <ul>
                            <li>Clopixol a un effet à action sédative centrale et les barbituriques renforcent l'action sédative.</br>
                            <li>Modification de la pression sanguine, blocage de l'effet antihypertenseur avec des antihypertenseurs.</br> 
                            <li>Risque accru de neurotoxicité avec Lithium.</br>
                            <li>Inhibition réciproque du métabolisme.</br>
                            <li>Renforcement des effets secondaires des neuroleptiques/antidépresseurs avec AD TCC.</br> 
                            <li>Réduction de l'effet de la L-Dopa avec L-Dopa.</br>
                            <li>Réduction de l'effet des adrénergiques avec les adrénergiques.</p>
                        </ul>

                    <p>Risque accru de <a href="sep.php">symptômes extrapyramidaux</a> avec Métoclopramide, pipérazine.</p>

                    <p>Le zuclopenthixol (clopixol) devrait être utilisé avec précaution chez les patients souffrant <a href="epilepsie.php">d'épilepsie</a> (le médicament abaisse le seuil épileptogène), de 
                       lésions cérébrales organiques ou de maladies hépatiques ou rénale à un stade avancé.</p>

                    <p>Clopixol devrait être administré avec précaution chez les patients souffrant du <a href="sep.php">syndrome de Parkinson</a> ou d'un syndrome psycho-organique ainsi que chez 
                       les patients souffrant de myasthénie grave.</br>
                       L'administration de Clopixol requiert une prudence particulière surtout chez les personnes âgées présentant une prédisposition pour les dysrégulations orthostatiques. 
                       Des <a href="antico.php">symptômes anticholinergiques</a> n'ont été que rarement observés; toutefois, l'administration de Clopixol à des patients présentant une hypertrophie 
                       de la prostate ou un glaucome à angle fermé requiert une prudence particulière.</br>
                       Le zuclopenthixol (Clopixol) ne doit pas être utilisé pendant la grossesse sauf en cas de nécessité absolue.</p>
 
                    <h3>Allongement de l'intervalle QT</h3>

                    <p><mark>Un allongement de l'intervalle QT induit par des neuroleptiques peut s'aggraver en cas d'administration d'autres médicaments entraînant un allongement significatif 
                       de l'intervalle QT. Il convient d'éviter l'administration concomitante de tels médicaments.</mark></p>

                    <p><strong>Les classes de médicaments concernées sont :</strong></p>
                        <ul>
                            <li>antiarythmiques des classes Ia et III (par ex. quinidine, amiodarone, sotalol, dofétilide)</li>
                            <li>certains neuroleptiques (par ex. halopéridol, quétiapine)</li>
                            <li>certains macrolides (par ex. érythromycine)</li>
                            <li>certains antihistaminiques (par ex. terfénadine, astémizole)</li>
                            <li>certaines quinolones (par ex. gatifloxacine, moxifloxacine)</li>
                        </ul>

                    <p>Cette liste n'est pas exhaustive; certains autres médicaments connus pour allonger l'intervalle QT (par ex. cisapride, lithium) doivent également être évités.
                       En cas de surdosage: Vidange et lavage gastrique après administration perorale. Traitement au charbon actif.</br>
                       Appliquer des mesures de soutien pour la respiration et le système cardiovasculaire. <strong class="rougeot">L'épinéphrine (adrénaline) ne devrait pas être utilisée, car elle pourrait
                       provoquer une chute supplémentaire de la pression artérielle (effet adrénolytique).</strong> Les convulsions peuvent être traitées avec du diazépam et les symptômes extrapyramidaux avec du bipéridène.
                       Les NL ne doivent pas être administrés pendant la grossesse, sauf en cas de nécessité absolue.</br>
                       La plupart des NL agissent sur le système nerveux central, il faut être prudent quand on l'associe à d'autres médicaments d'effet central et éviter la consommation 
                       concomitante d'alcool. Souvent, les études et les recherches tendent à démontrer une toxicité de la reproduction chez les animaux.</p>
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


