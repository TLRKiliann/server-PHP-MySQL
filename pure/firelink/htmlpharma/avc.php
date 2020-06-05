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
        <link rel="stylesheet" href="../css/avc.css" type="text/css" /> 
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
                    <a>Accident vasculaire cérébral</a>
                </div>
                <div id="banniere_description">
                    <a href="accueil.php" class="bouton_rouge2">accueil</a>
                    <a href="neuro.php" class="bouton_rouge">neuro</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/brainlogo.png" alt="Les épilepsies" class="ico_categorie" /><strong>Accident Vasculaire Cérébral</strong></h1>

                    <h3>Définition</h3>

                    <p>Interruption soudaine et focale du flux sanguin cérébral, entraînant un déficit neurologique. Les déficits neurologiques 
                    	reflètent la région du cerveau atteinte (ou cérébro-lésée).<p>

                    <h4>Les AVC peuvent être soit :</h4>
                        <ul>
                            <li><a>ischémiques (80%) résultant d’une thrombose ou d’une embolie</a></li>
                            <li><a>hémorragique (20%) résultant d’une rupture vasculaire</a></li>
                        </ul>

                    <p>Les AVC dont les symptômes durent moins d’une heure sont nommés AIT (accident ischémique transitoire). Ce qui différencie 
                    	l’AIT de l’AVC, c’est qu’il ne provoque pas des lésions du tissu cérébral ou si une lésion se produit, elle est moins 
                    importante que l’AVC.</p>

                    <h4>L’AVC atteint les artères cérébrales, soit au niveau de :</h4>
                        <ul>
                            <li><a>la vascularisation antérieure (branches de l’artère carotide interne)</a></li>
                            <li><a>l’hémodynamique postérieure (branches des artères vertébrales et basilaires)</a></li>
                        </ul>

                    <h3>Symptomatologie et localisation</h3>

                    <h4>Hémorragie sous-arachnoïdienne :</h4>
                        <ul>
                            <li><a>Céphalées brutales et intenses</a></li>
                        </ul>

                    <h4>Augmentation de la pression intracrânienne :</h4>
                    	<ul>
                            <li><a>Troubles de la conscience, coma souvent accompagnés de nausées et vomissements</a></li>
                        </ul>

                    <h4>Artère cérébrale antérieure (rare) :</h4>
                        <ul>
                            <li><a>Hémiparésie controlatérale, incontinence urinaire, apathie, confusion, faiblesse du jugement, 
                            	mutisme, réflexe de préhension forcée, apraxie à la marche</a></li>
                        </ul>

                    <h4>Artère cérébrale moyenne (fréquent) :</h4>
                        <ul>
                            <li><a>Hémiparésie controlatérale (plus important au niveau du visage, du bras qu’à la jambe), dysarthrie, 
                            	hémianesthésie controlatérale homonyme, hémianopsie, aphasie (si l’hémisphère dominante est atteint), 
                            	ou apraxie et négligence sensorielle (si l’hémisphère non dominant est atteint), perte de la vision 
                            	monoculaire (si la carotide interne est atteinte)</a></li>
                        </ul>

                    <h4>Artère cérébrale postérieure :</h4>
                        <ul>
                            <li><a>Hémianopsie controlatérale, cécité corticale unilatérale, perte de mémoire, paralysie nerveuse 
                            	unilatérale du troisième nerf crânien, hémiballisme</a></li>
                        </ul>

                    <h4>Artère vertébrobasilaire :</h4>
                        <ul>
                            <li><a>Déficits des nerfs crâniens unilatéraux ou bilatéraux (nystagmus, vertiges, dysphagie, dysarthrie, diplopie, 
                            	cécité, parésie spastique, déficits sensitifs et moteurs croisés), trouble de la conscience, coma, décès (si 
                            	l’occlusion de l’artère basilaire est complète)</a></li>
                        </ul>

                    <h4>Infarctus lacunaire :</h4>
                        <ul>
                            <li><a>-Déficits unilatéraux purement sensitifs ou moteurs sans déficits corticaux</a></li>
                        </ul>

                    <h3>Les nerfs crâniens</h3>

                    <h4>Nerf I – nerfs olfactifs (sensitif) – odorat</h4>

                    <h4>Nerf II – nerfs optiques (sensitif) – vision</h4>

                    <h4>Nerf III – nerfs oculomoteurs communs (mixte) :</h4>
                        <ul>
                        	<li><a>Moteur – plupart des mouvement des muscles extra-oculaire, ouverture des paupières</a></li>
                        	<li><a>Parasympathique – constriction de la pupille, forme du cristallin</a></li>
                        </ul>
                 
                    <h4>Nerf IV – nerfs trochléaires (moteur) – mouvement de l’oeil vers le bas et vers l’intérieur</h4>

                    <h4>Nerf V – nerfs trijumeaux (mixte) :</h4>
                        <ul>
                            <li><a>Moteur – muscles de la mastication</a></li>
                            <li><a>Sensitif – sensation du visage et du cuir chevelu, cornée, muqueuse de la bouche et du nez</a></li>
                        </ul>

                    <h4>Nerf VI – nerfs oculomoteurs externes (moteur) – mouvement latéral externe de l’oeil</h4>

                    <h4>Nerf VII – nerfs faciaux (mixte) :</h4>
                        <ul>
                            <li><a>Moteur – muscles faciaux, fermeture des yeux, discours labial, fermeture de la bouche</a></li>
                            <li><a>Sensitif – goût sur les 2/3 antérieurs de la langue</a></li>
                            <li><a>Parasympathique – sécrétion de la salive et des larmes</a></li>
                        </ul>

                    <h4>Nerf VIII – nerfs auditifs (sensitif) – audition et équilibre.</h4>

                    <h4>Nerf IX – nerfs glossopharagiens (mixte) :</h4>
                        <ul>
                            <li><a>Moteur – phonation et déglutition (pharynx)</a></li>
                            <li><a>Sensitif – goût tiers postérieur de la langue (amer), pharynx (réflexe nauséeux)</a></li>
                            <li><a>Parasympathique – glande parotide, réflexe des carotides</a></li>
                        </ul>

                    <h4>Nerf X – nerfs vagues (mixte) :</h4>

                        <ul>
                            <li><a>Moteur – pharynx et larynx (parler et avaler)</a></li>
                            <li><a>Sensitif – sensation générale de la carotide, du sinus carotidien, du pharynx et des viscères</a></li>
                            <li><a>Parasympathique – réflexe carotidien</a></li>
                        </ul>

                    <h4>Nerf XI – nerfs accessoires spinaux (moteur) – mouvements des muscles trapèzes et sternocléidomastoïdiens</h4>

                    <h4>Nerf XII – nerfs hypoglosses (moteur) – mouvements de la langue</h4>

                    <h3>Facteurs de risques</h3>

                    <h4>Hygiène de vie</h4>
                        <ul>
                            <li><a>Tabagisme</a></li>
                            <li><a>Alcool</a></li>
                            <li><a>Stress</a></li>
                            <li><a>Hypercholestérolémie</a></li>
                            <li><a>Diabète</a></li>
                            <li><a>Surpoids</a></li>
                            <li><a>Hypertension</a></li>
                        </ul>

                    <h3>Quelques AVC</h3>
                        <ul>
                            <li><a>Sylvien</a></li>
                            <li><a>Sous-corticale</a></li>
                            <li><a>Sous-arachnoïdien</a></li>
                            <li><a>Bilatéral</a></li>
                            <li><a>Parenchymateux</a></li>
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