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
        <link rel="stylesheet" href="../css/mae.css" type="text/css" /> 
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
                    <a>Inhibiteurs de la cholinestérase</a>
                </div>
                <div id="banniere_description">
                    <a href="benzo.php" class="bouton_rouge2">BZD</a>
                    <a href="antipk.php" class="bouton_rouge">Antiparkinsoniens</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/eclair.png" alt="Les épilepsies" class="ico_categorie" /><strong>Inhibiteurs de la cholinestérase</strong></h1>
                    <p><strong class="redti">Inhibiteurs de la cholinestérase:</strong> dopénézil (Ariecpt); galantamine (Reminyl); rivastigmine (Exelon); mémantine (Axura)</p>

                    <p>La maladie d'Alzheimer est la cause la plus courante de démence chez les personnes âgées. Elle est associée à la perte de 
                    	neurones cholinergiques dans certaines parties du cerveau. Les inhibiteurs de la cholinestérase (ICh), donépézil, galantamine 
                    	et rivastigmine, retardent la rupture de l'acétylcholine libérée dans les fentes synaptiques et améliorent ainsi la 
                    neurotransmission cholinergique.</p>

                    <h3>Indications/Possibilités d’emploi avec donépézil, galantamine, rivastigmine</h3>

                    <p>Traitement symptomatique de la démence de type Alzheimer dans ses formes légères à modérées.</p>


                    <h3>Indications/Possibilités d’emploi avec mémantine</h3>

                    <p>Traitement symptomatique des patients atteints de la maladie d'Alzheimer de forme modérée à sévère (Mini-Mental 
                    State Examination (MMSE) valeurs 3 jusqu'à 19 y compris).</p>


                    <h3>Contre-indications avec donépézil</h3>

                    <p>Hypersensibilité au principe actif, aux dérivés pipéridiniques ou à l'un des excipients (voir «Composition»). 
                    Donepezil-Mepha ne doit pas être administré aux patients souffrant de cirrhose hépatique décompensée (Child Pugh C).</p>


                    <h3>Contre-indications avec galantamine</h3>

                    <p>Galantamin SR Helvepharm ne doit pas être administré aux patients qui ont une hypersensibilité connue au bromhydrate 
                    de galantamine ou à d'autres composants du médicament.</p>

                    <p>Comme on ne dispose pas de données concernant l'application de Galantamin SR Helvepharm chez les patients qui souffrent 
                    de troubles graves des fonctions hépatique (CHILD-Pugh-Score >9) ou rénale (Clcr <9 ml/min), Galantamin SR Helvepharm est 
                    contre-indiqué chez ces patients.</p>


                    <h3>Contre-indications avec rivastigmine</h3>

                    <p>Exelon est contre-indiqué chez les malades présentant une hypersensibilité connue à la rivastigmine, aux autres 
                    dérivés des carbamates ou aux autres composants du médicament.</p>

                    <p>Exelon ne doit pas être administré en cas d'antécédents de réactions au site d'application d'Exelon Patch, évocatrices 
                    d'une dermatite allergique de contact (cf. «Mises en garde et précautions»).</p>

                    <p>L'efficacité et la tolérance de la rivastigmine n'ont pas été étudiées en cas d'insuffisance hépatique grave.</p>


                    <h3>Contre-indications avec mémantine</h3>

                    <p>Hypersensibilité au principe actif ou à l'un des excipients. Prise simultanée de produits contenant du dextrométhorphane, 
                    un antagoniste du N-méthyl-D-aspartate (NMDA) et intégré dans de nombreux produits contre la toux.</p>


                    <h3>Effets secondaires avec donépézil, galantamine, rivastigmine</h3>

                    <p>Seuls ou associés à d’autres médicaments, les inhibiteurs de la ChE peuvent avoir des effets indésirables ou aggraver d’autres 
                    	maladies présentes. C’est pourquoi le médecin traitant doit être informé avant le début du traitement des autres affections dont 
                    	souffre le patient et de tous les médicaments qui lui sont administrés. Il s’agit en particulier d’éviter la prise de médicaments qui 
                    	annulent ou diminuent l’effet des inhibiteurs de la ChE (médicaments à effet anticholinergique ou antimuscarinique). En présence de 
                    	certaines autres maladies, le médecin préférera éviter un traitement par inhibiteurs de la ChE. En général, les inhibiteurs de la 
                    	ChE sont bien tolérés. Leurs principaux effets secondaires sont : nausées, vomissements, diarrhées et perte d’appétit. Ils 
                    	apparaissent surtout en début de traitement et tendent à disparaître avec le temps. Parmi les effets plus rares figurent un 
                        ralentissement du rythme cardiaque, un collapsus cardio-vasculaire, des chutes ou une incontinence. L’augmentation par paliers du 
                    dosage du médicament permet d’atténuer les effets indésirables.</p>


                    <h3>Effets secondaires avec mémantine</h3>

                    <p>Effets secondaires de la mémantineComme la plupart des médicaments, la mémantine peut avoir des effets secondaires, des interactions 
                    	avec d’autres médicaments ou encore aggraver d’autres maladies. Avant le début du traitement, le médecin traitant doit donc être 
                    	informé en détail sur les éventuelles autres maladies du patient et sur la liste complète des médicaments qu’il prend. En général, 
                    	la mémantine est bien tolérée. Parmi ses effets secondaires figurent : les maux de tête, la somnolence, la constipation, les 
                    	vertiges et l’hypertension. Ces effets secondaires apparaissent surtout en début de traitement et disparaissent souvent par la 
                    suite. L’augmentation du dosage se fait par paliers afin de minimiser les effets indésirables du traitement.</p>


                    <h3>Surdosage</h3>

                    <p>Un surdosage par les inhibiteurs de la cholinestérase peut provoquer une crise cholinergique caractérisée par des nausées 
                        sévères, des vomissements, une hypersalivation, des sueurs, une bradycardie, une hypotension artérielle, une dépression 
                        respiratoire, un collapsus et des convulsions. Une faiblesse musculaire croissante est possible, pouvant conduire ou décès 
                    si les muscles respiratoires sont affectés.</p>


                    <p>Comme dans tous les cas de surdosage, les mesures générales de première urgence seront mises en oeuvre. Des anticholinergiques 
                        tertiaires tels que l'atropine peuvent servir d'antidote en cas de surdosage de <a class="anticho">donépézil</a>. 
                    L'administration de sulfate d'atropine en i.v. en augmentant progressivement la dose jusqu'à l'obtention de l'effet désiré est recommandée.</p>

                    <p>Des réactions atypiques de la pression artérielle et de la fréquence cardiaque ont été observées lors de l'administration 
                        concomitante d'autres cholinomimétiques et d'anticholinergiques quaternaires (comme par ex. le glycopyrrolate). On ignore si 
                    le <a class="cholino">donépézil</a> et/ou ses métabolites sont dialysables (par hémodialyse, dialyse péritonéale ou hémofiltration).</p>

                    <p>Les cas de surdosage de <a class="cholino">rivastigmine</a> et le lien avec la rivastigmine n'a pas été éclairci.</p>

                    <p>En cas de prise accidentelle/surdosage de <a class="cholino">galantamine</a>, des observations post-commercialisation font état 
                    	de torsades de pointes, prolongation de l'intervalle QT, bradycardie, tachycardie ventriculaire et brèves pertes de conscience. 
                    Dans un cas pour lequel la dose ingérée est connue, 8 comprimés de 4 mg (32 mg au total) furent pris le même jour.</p>


                    <p>Dans le cas le plus extrême de surdosage à la mémantine, le patient a survécu à la prise orale totale de 2'000 mg de 
                    	<a class="cholino">mémantine</a> et présenté des troubles du système nerveux central (10 jours de coma suivis d'une diplopie 
                    	et d'une agitation). Le patient a reçu un traitement symptomatique et des plasmaphérèses. Le patient a guéri sans séquelles 
                    	permanentes.<br />
                        Traitement: en cas de surdosage, le traitement doit être symptomatique. Aucun antidote spécifique en cas d'intoxication ou de 
                    	surdosage n'est disponible. Des moyens de prise en charge habituels pour éliminer le principe actif tels que lavage gastrique, 
                    	charbon activé (interruption d'un potentiel cycle entéro-hépatique), acidification des urines, diurèse forcée doivent être 
                    utilisés en fonction des besoins.</p>

                    <p>Que faut-il savoir sur la prise du médicament? Il y a lieu de suivre les instructions du médecin quant à la prise de médicaments. 
                    	D’une façon générale, pour qu’ils agissent, les médicaments procognitifs doivent être pris sans interruption sur une période 
                    	prolongée et toujours au même moment de la journée. Le dosage ne doit pas être modifié sans en référer au médecin. Si on oublie 
                    	une prise du médica-ment, il faut attendre la prochaine prise prévue et prendre la dose normale – il ne faut donc pas prendre deux 
                    	doses en une fois. Si le médicament n’est pas pris pendant plus de trois jours d’affilée, il convient de discuter la suite avec le 
                    	médecin.Il est déterminant que les instructions de prise des médicaments procognitifs soient correctement sui-vies. Les proches ou 
                    	les soignants, ou pour les personnes vivant seules les soins à domicile, doivent impérativement superviser la prise du médicament. 
                    	Le semainier est une aide très pratique : il facilite le contrôle et assure la régularité de la prise des médica-ments. Attention : 
                    en cas de surdosage, il faut immé-diatement contacter le médecin ou <a class="urgent">Tox Info Suisse au 145 (numéro d'urgence 24h/24)</a>.</p>

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

