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
        <link rel="stylesheet" href="../css/syndsero.css" type="text/css" /> 
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
                    <a>Syndrome Sérotoninergique</a>
                </div>
                <div id="banniere_description">
                    <a href="snm.php" class="bouton_rouge2">Précédent</a>
                    <a href="accueil.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/ssn_2.png" alt="Les épilepsies" class="ico_categorie" /><strong>Syndrome serotoninergique</strong></h1>
                        <p></p>
                        <p>Le syndrome sérotoninergique est un effet indésirable potentiellement mortel qui est la conséquence d'un excès d'activité de la sérotonine au niveau central et
                           périphérique. Il peut survenir tant à dose thérapeutique qu'en cas de surdosage, mais il est le plus souvent la conséquence d'une interaction entre plusieurs 
                           médicaments sérotoninergiques. Le syndrome survient le plus souvent dans les 24 heures et même dans les 6 heures qui suivent le début, le changement, l'ajout ou
                           même l'arrêt d'un médicament. Le syndrome sérotoninergique a également été observé au début d'un traitement par un médicament sérotoninergique suivant de trop 
                           près l'arrêt d'un autre médicament sérotoninergique. Il est conseillé de respecter un intervalle de 1 à 2 semaines en fonction de la demi-vie de la molécule 
                           (5 semaines pour la fluoxétine).</p>

                        <h3>Le syndrome se présente comme une triade</h3>
                            <ul>
                                <li><a>Modification de l'état mental (angoisse, agitation, confusion, fébrilité, désorientation, délirium, convulsions, coma).</a></li>
                                <li><a>Symptômes neuromusculaires (rigidité, tremblements, nystagmus, myoclonies, ataxie, hyperréflexie, hypertonie (des membres inférieurs surtout)).</a></li>
                                <li><a>Instabilité du système nerveux autonome : hypertension, hypotension, tachycardie, tachypnée, hyperthermie, mydriase, transpiration abondante, diarrhée.</a></li>
                            </ul>
                        <p>Cette triade n'est pas toujours présente : en pratique clinique, l'apparition de clonies et d'hyperréflexie chez un patient traité par un médicament sérotoninergique
                           doit faire penser au diagnostic.</p>

                        <h3>Quelques interactions</h3>

                        <p>La plupart des patients ayant présenté le syndrome étaient traités par un antidépresseur inhibiteur de la monoamine-oxydase ou par un inhibiteur spécifique de la
                           recapture de la sérotonine en combinaison avec au moins un autre agent sérotoninergique.</p>

                        <p>Une étude française portant sur 125 patients présentant un syndrome sérotoninergique a montré que 40 % d'entre eux ont développé le syndrome au cours d'un traitement avec 
                           un seul médicament sérotoninergique, principalement un inhibiteur spécifique de la recapture de la sérotonine (ISRS) ou la venlafaxine et que dans 60% des cas il s'agissait
                           d'une interaction médicamenteuse, essentiellement entre le <strong>tramadol et un ISRS.</strong></p>

                        <h3>La sérotonine</h3>

                        <p>La sérotonine ou 5-hydroxytryptamine est un neurotransmetteur doué de nombreuses fonctions. La sérotonine ne passe pas la barrière hémato-méningée et est synthétisée au niveau
                           central et périphérique par décarboxylation et hydroxylation d'un acide aminé, le tryptophane. Une fois produite, la sérotonine est stockée ou rapidement inactivée par la 
                           monoamine-oxydase (MAO).</p>
                            <ul>
                                <li><a>La sérotonine est l'un des 3 neurotransmetteurs le plus souvent associé à des symptômes dépressifs.</a></li>
                                <li><a>Toutefois il y a également dans l'organisme 7 sous-types de récepteurs situés en dehors du système nerveux central.</a></li>
                                <li><a>La sérotonine agit comme neurotransmetteur au niveau du système nerveux central, et influence l'humeur, la personnalité, le sommeil, la sexualité, le comportement
                                       affectif, la perception de la douleur, la régulation hormonale et thermique, l'état d'éveil, le comportement alimentaire, les nausées et vomissements...</a></li>
                                <li><a>Au niveau du système nerveux périphérique, la sérotonine agit sur la régulation de la motilité intestinale et la vasomotricité.</a></li>
                                <li><a>Une concentration optimale de sérotonine influence favorablement la qualité de vie mais des quantité excessives ont des conséquences néfastes qui se manifestent par
                                       un syndrome sérotoninergique.</li></a>
                                <li><a>Le syndrome sérotoninergique peut survenir tant chez l'homme que chez l'animal.</a></li>
                            </ul>

                        <h3>On distingue 4 mécanismes principaux par lesquels un médicament peut provoquer un syndrome sérotoninergique</h3>
                            <ul>
                                <li><a>Diminution de l'inactivation de la sérotonine (c'est le cas par exemple des inhibiteurs de la monoamine-oxydase ou du linezolid)</a></li>
                                <li><a>Diminution de la recapture de la sérotonine (par exemple ISRS, inhibiteurs de la recapture de la sérotonine et de la noradrénaline, antidépresseurs tricycliques,
                                       amphétamines, cocaïne, MDMA, tramadol)</a></li>
                                <li><a>Augmentation de la libération de la sérotonine (amphétamines, MDMA, lithium)</a></li>
                                <li><a>Augmentation de la concentration des précurseurs de la sérotonine (L-tryptophane)</a></li>
                            </ul>

                        <h3>Le diagnostic différentiel avec le syndrome malin des neuroleptiques est les plus délicat</h3>
                        <ul>
                            <li><a>Syndrome sérotoninergique: plutôt brutal que progressif, récupération rapide, myoclonies et tremblements, réflexes augmentés, mydriase.</a></li>
                            <li><a>Syndrome neuroleptique malin: plutôt progressif que brutal, longue durée, rigidité diffuse, réflexes diminués, pupilles normales.</a></li>
                        </ul>

                        <h3>Liste (non exhaustive) des médicaments les plus souvent en cause dans le syndrome sérotoninergique</h3>
                        <h4>Antidépresseurs:</h4>
                                <ul>
                                    <li><a>IMAO-A,  irréversible: isocarboxazide, phénelzine</a></li>
                                    <li><a>IMAO-A, réversible: moclobémide</a></li>
                                    <li><a>IMAO-B: sélégiline, rasagiline</a></li>
                                    <li><a>IRSN: duloxétine, venlafaxine</a></li>
                                    <li><a>ISRS: citalopram, escitalopram, fluoxétine, paroxétine, sertraline</a></li>
                                    <li><a>Tricycliques: amitriptyline, amoxapine, clomipramine, désipramine, dosulépine, doxépine, imipramine, nortriptyline, protriptyline</a></li>
                                    <li><a>Autres : bupropion, lithium miansérine, mirtazapine, trazodone.</a></li>
                                    <li><a>Opiacés: buprénorphine, dextrométorphan, fentanyl, morphine, oxycodone, pentazocine, tramadol</a></li>
                                    <li><a>Antimigraineux /triptans (agonistes 5-HT1): triptans: almotriptan,  élétriptan, frovatriptan, naratriptan, rizatriptan, sumatriptan, zolmitriptan, dihydro-ergotamine</a></li>
                                    <li><a>Stimulants du système nerveux central: Amphetamine, atomoxetine, cocaïne, LSD, MDA, MDMA (“ecstasy”)</a></li>
                                    <li><a>Médicaments de l’obésité: Sibutramine, phytopharmacie, millepertuis.</a></li>
                                    <li><a>Antibiotiques: Linezolid</a></li>
                                    <li><a>Antiémétiques: Ondansetron</a></li>
                                    <li><a>Acide aminé: L-tryptophane</a></li>
                                    <li><a>Antiviraux: Ritonavir</a></li>
                                </ul>

                        <h4>Autres:</h4>
                            <ul>
                                <li><a>Dapoxétine, olanzapine, bleu de méthylène</a></li>
                                <li><a>IMAO-A: inhibiteurs de la monoamine oxidase A; IMAO-B: inhibiteurs de la monoamine oxidase B;5-HT1: 5-hydroxytryptamine1</a></li>
                                <li><a>LSD: diéthylamide de l’acide lysergique</a></li>
                                <li><a>MDA: méhylenedioxyamphétamine; MDMA: 3,4-méthylenedioxymethamphétamine</a></li>
                                <li><a>IRNS: inhibiteurs de la recapture de la noradrénaline et de la sérotonine</a></li>
                                <li><a>ISRS: inhibiteurs sélectifs de la recapture de la sérotonine.</a></li>
                            </ul>

                        <h3>Traitements</h3>
                        <p>Hospitalisation, arrêt du ou des médicaments en cause : les symptômes disparaissent souvent 24 à 72 heures après. Surveillance de la fonction rénale, des électrolytes,
                           des créatine kinases et de l'équilibre hydrique. Agitation: benzodiazépines (ex. diazépam). En cas de symptomatologie très importante, une sédation avec intubation
                           et curarisation peut-être nécessaire. Convulsions: benzodiazépines (diazépam, lorazepam ou midazolam) et/ou barbituriques i.v.</p>

                        <p>Hypertension réfractaire à la sédation aux benzodiazépines : choisir un médicament à courte durée d'action: esmolol ou nitroglycérine. Les médicaments à longue durée
                           d'action comme le propranonol sont à éviter: l'instabilité du système nerveux autonome peut évoluer rapidement vers une hypotension importante.
                           Hypotension: hydratation par voie intraveineuse pour combattre l'hypotension et la perte de liquide provoquée par l'hyperthermie.
                           Vasopresseurs: noradrénaline, adrénaline. Les vasopresseurs possédant une action dopaminergique peuvent en théorie aggraver le syndrome sérotoninergique.
                           Hyperthermie: hydratation par voie intraveineuse, refroidissement externe, contrôle de l'hyperactivité musculaire par benzodiazépines et curarisants non dépolarisants.</p>

                        <h3>Antagonistes de la sérotonine</h3>
                            <p>La cyproheptadine est un antihistaminique et un antagoniste de la sérotonine. La cyproheptadine n'accélère pas la guérison, elle constitue un traitement
                            symptomatique qui améliore le confort du patient (recommandation de grade C). Elle peut être proposée lorsque la température dépasse 38,5 C° ou en cas de rigidité
                            musculaire importante.</p>

                        <h3>Nombre de cas de syndrome sérotoninergique annoncés à Swissmedic entre 1998 et 2009 selon le médicament incriminé</h3>
                        <p>Plusieurs médicaments possibles par patient. Médicaments Cas Médicaments Cas ISRS 57 Citalopram 14, Sertraline 12, Escitalopram 10 Paroxétine 9, Fluvoxamine
                           7, Fluoxétine 5, IRSN 33, Venlafaxine 29, Duloxétine 4, Autres anti- 23, dépresseurs Mirtazapine 11, Trazodone 6, Millepertuis 4, Réboxétine 1, Miansérine 1, Tricycliques
                           16, Amitriptyline 6, Clomipramine 5, Trimipramine 4, Opipramol 1, IMAO 5, Moclobémide 5, Thymorégulateurs 12, Lithium 12, Opiacés 22, Tramadol 19, Fentanyl
                           1, Codéine 1, Méthadone 1, Autres médicaments 23, Linézolide 3, Valproate 3, Sibutramine 2, Méthylphénidate 2, Cocaïne 2, Varénicline 2, Quétiapine 2, Carbamazépine 
                           1, Clométhiazole 1, Bleu de méthylène 1, Pipampérone 1, Lévomépromazine 1, Clozapine 1, Amisulpride 1.</p>

                        <p>Circonstances de survenue d’un syndrome sérotoninergique lors de monothérapie et d’association d’agents sérotoninergiques dans les 102 cas annoncés à Swissmedic.
                           Plusieurs circonstances possibles par patient. Circonstances Nombre de cas Monothérapie (38 cas), Introduction du traitement 17, Augmentation de la posologie
                           6, Substitution de traitement 2, Interaction pharmacocinétique 9, Surdosage intentionnel ou accidentel 0, Non précisé 5, Association (64 cas), Introduction du
                           traitement 37, Augmentation de la posologie 10, Substitution de traitement 1, Interaction pharmacocinétique 11, Surdosage intentionnel ou accidentel 9,
                           Non précisé 13.</p>
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
