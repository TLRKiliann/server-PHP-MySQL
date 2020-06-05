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
                    <a>Parkinson</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Psychiatrie</a>
                    <a href="accueil.php" class="bouton_rouge">Rechercher</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/brainlogo.png" alt="Les épilepsies" class="ico_categorie" /><strong>Maladie de Parkinson</strong></h1>

                    <h3>Maladie de Parkinson</h3>

                    <p>La maladie de Parkinson est une maladie neurologique chronique affectant le système nerveux central 
                       responsable de troubles essentiellement moteurs d’évolution progressive. <strong>Affection dégénérative du SNC 
                       touchant le locus niger</strong>.
                       Ses causes sont mal connues. Le tableau clinique est la conséquence de la perte de neurones du <a href="../images/park.jpg">locus niger 
                       (ou « substance noire » (substantia nigra))</a> et d’une atteinte des faisceaux nigro-striés.
                       Contrairement à l’hypertonie spastique et au fameux signe de la lame de canif, la résistance du membre lors 
                       de l’allongement passif est ici constante. Chez certains patients, il est également possible d’observer une 
                       résistance cédant par à coups lors de l’allongement du membre, <strong>un phénomène appelé phénomène de la roue dentée</strong>.</p>

                    <h3>Diagnostic</h3>

                       <p>Le diagnostique cible les troubles moteurs existants.</p>

                    <h3>Symptômes</h3>

                       <p><a href="sep.php">Le tremblement au repos</a>, <a href="sep.php">l’akinésie</a>, <a href="sep.php">la rigidité</a>, 
                       	<a href="sep.php">la bradykinésie</a>, ainsi que <a href="sep.php">l’instabilité posturale</a>.</p>

                    <p>La diminution des expressions faciales et du clignement des yeux, l’aspect figé du visage, la micrographie, 
                       la difficulté à articuler (dysarthrie) avec souvent une voix assourdie, des blocages interrompant la fluidité 
                       du discours, baisse de l’olfaction, etc..</p>

                    <h3>Traitement</h3>

                    <p>Le but premier des traitements pharmacologiques est de compenser le déficit en dopamine et le déséquilibre 
                       dopamine/acétylcholine dans le striatum. Il existe actuellement quatre type de médicaments sur le marché : 
                       la L-Dopa, les agonistes dopaminergiques, les médicaments réduisant le turn-over de la dopamine, et les 
                       anticholinergiques.</p>

                    <p><i>Référence: http://www.medecine.unige.ch/enseignement/apprentissage/module4/immersion/archives/2008_2009/travaux/09_r_parkinson.pdf</i></p>

                    <h3>Suite et liens pour aller plus loin</h3>
                        <ul>
                        	<li><a href="antipk.php">Les traitements antiparkinsoniens</a></li>
                        	<li><a href="sep.php">Le syndrome parkinsonien et syndrome extrapyramidal</a></li>
                        </ul>
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

