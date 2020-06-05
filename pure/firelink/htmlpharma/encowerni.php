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
        <link rel="stylesheet" href="../css/encowerni.css" type="text/css" /> 
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
                    <a>Encéphalopathie de Wernicke</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Psychiatrie</a>
                    <a href="entaf.php" class="bouton_rouge">Amphétamines</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Encéphalopathie de Wernicke</strong></h1>

                    <h3>Définition</h3>
                        <p>L'encéphalopathie de Wernicke est un trouble caractérisée par un début aigu de confion, un nystagmus, une ophtalmoplégie partielle et une ataxie due à une carence en thiamine. 
                           Le diagnostic est principalement clinique. La maladie peut se résorber sous l'effet du traitement, persister ou dégénérer en une <a href="psychokorsa.php">psychopolynévrite 
                           de Korsakoff</a>. Le ttt comprend la thiamine et des mesures symptomatiques.</p>

	                <p>L'encéphalopathie de Wernicke est causée par l'absorption insuffisante en thiamine, associée en plus à l'ingestion continue 
                    des hydrates de carbone. L'alcoolisme sévère est une condition sous-jacente intiale. Une ingestion excessive d'éthanol perturbe l'absorption de thiamine par le tube digestif et le stockage hépatique en thiamine. L'encéphalopathie de Wernicke peut également entraîner d'autres affections responsables de dénutrition prolongée ou de carence en vitamine (dialyse répétée, vomissements, anorexie, gastrite, cancer, sida). Une charge glucidique chez le patient qui présente une carence en thiamine(c'est-à-dire réalimentation après le jeûne ou les solutions glucidiques concentrées IV) peut déclencher une encéphalopathie de Wernicke.</p>

	                <p>Tous les alcooliques déficitaires en thiamine ne développe pas une encéphalopathie de Wernicke, ce qui suggère que d'autres facteurs peuvent être impliqués. Des anomalies génétiques qui entraînent
                           une déficience en transcétolase, une enzyme qui transforme la thiamine, peuvent être impliquées.</p>

	                <p>Généralement les lésions sont distribuées symétriquement autour du <a href="https://fr.wikibooks.org/wiki/Neurosciences/Les_m%C3%A9ninges_et_le_syst%C3%A8me_ventriculaire">3ème ventricule</a>, 
                           de <a href="https://fr.wikibooks.org/wiki/Neurosciences/Les_m%C3%A9ninges_et_le_syst%C3%A8me_ventriculaire">l'aqueduc</a> et du <a href="https://fr.wikibooks.org/wiki/Neurosciences/Les_m%C3%A9ninges_
                           et_le_syst%C3%A8me_ventriculaire"> 4ème ventricule</a>. Les changement des <a src="../images/corp_mami.jpg">corps mamillaires</a>, du <a href="../images/thala_dorso.jpg"> thalamus dorsomédian</a>, 
                           du <a href="../images/locus_ceru.jpeg"> locus ceruleus</a>, de <a href="https://fr.wikipedia.org/wiki/Substance_grise_p%C3%A9riaqueducale">la substance grise périaqueductale</a>, 
                           des <a href="../images/nerf_cra.gif"> noyaux de la motricité oculaire</a> et des <a href="../images/noy_vesti.png"> noyaux vestibulaires</a> sont fréquents.

                    <h3>Symptomatologie</h3>

	                <p>Des changements cliniques surviennent vivement. Des anomalies oculomotrices, dont un nystagmus horizontal et vertical (paralysie partielle conjuguée à une paralysie du regard), sont fréquentes.
                           Les pupilles peuvent être anormales, elles sont généralement faibles ou inégales.</p>

	                <p>Un trouble vestibulaire sans perte auditive est fréquent, et le réflexe oculovestibulaire peut être atteint. La démarche avec ataxie résulte de troubles vestibulaires et cérébelleux 
                           (démarche élargie et lente, avec steppage).</p>

	                <p>Une confusion globale est souvent présente, caractérisée par une profonde désorientation, une indifférence, une inattention, une somnolence ou une obnubilation. Le seuil nociceptif des nerfs 
                           périphériques est souvent élevé, et nombre de patients souffrent d'un dysfonctionnement du système autonome caractérisé par une hyperactivité du sympathique (tremblements, agitations) ou
                           par une hypoactivité (hypothermie, hypotension orthostatique, syncope). Chez le patient non traité, la stupeur peut progresser jusqu'au coma, puis jusqu'à la mort.</p>

                    <h3>Diagnostic, pronostic et traitement</h3>

	                <p>Le diagnostic est clinique et est fondé sur les identification des dénutritions sous-jacentes ou des carences en vitamines. Il n'existe aucune anomalie caractéristique dans le LCR, les 
                           potentiels évoqués, l'imagerie cérébrale ou l'EEG. Cependant, ces tests, ou les examens de laboratoire (NFS, glucose, tests fonctionnels hépatiques, mesure des gaz sanguins artériels,
                           surveillance toxicologique), devraient être effectués pour exclure d'autres étiologies.</p>

	                <p>Le pronostic dépend de la rapidité du diagnostic. S'il est commencé à temps, le traitement devrait pouvoir corriger toutes les anomalies. Les symptômes oculaires commencent à se calmer 
                           les 24h suivant l'administration précoce de thiamine. Une ataxie ou une confusion peuvent persister quelques jours ou quelques mois. Non traitée, la maladie évolue, la mortalité est de
                           10-20%. <strong>Sur les patients survivant, 80% développent une psychopolynévrite de Korsakoff</strong> (l'association appelée<a href="https://fr.wikipedia.org/wiki/Syndrome_de_Wernicke-Korsakoff">
                           syndrome de Wernicke-Korsakoff</a>).</p>

 	                <p>Le traitement comprend l'administration immédiate de <strong>thiamine 100 mg IV ou IM, répétée journellement pendant au moins 3-5 jours</strong>. 
                        Le Mg est un cofacteur nécessaire au métabolisme thiamine-dépendant, et l'hypomagnésémie doit être corrigée en utilisant du <strong>sulfate de 
                        Mg 1-2 g IM ou IV toutes les 6-8h ou Mg d'azote 400-800 mg PO 1x/j</strong>. Le traitement symptomatique comprend la réhydratation, la correction 
                        des anomalies électrolytiques et une approche nutritionnelle générale, dont des polyvitamines. Le patient présentant une maladie avancée nécessite une 
                        hospitalisation. L'arrêt de l'alcoolisme est indispensable.</p>

                    <p>Comme l'encéphalopathie de Wernicke peut être prévenue, tous les patients dénutris doivent être traités par thiamine (généralement <strong>100 mg 
                        IM suivi par 50 mg PO journellement</strong>) plus de la vitamine B12 et des folates (<strong>1 mg/j PO</strong> pour les deux), en particulier si 
                        du glucose est nécessaire. Il est également prudent d'administrer de la thiamine avant de débuter tout traitement chez le patient qui présente un taux 
                        de conscience réduit. Le patient dénutri doit continuer à recevoir de la thiamine lorsqu'il n'est plus hospitalisé.</p>

                    <p><i>Manuel Merck - 4ème édition - Merck research Laboratories - Division de Merck & Co., Inc., Whithouse Station, N.J. 2006, p. 1688-1689.</i></p>
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
