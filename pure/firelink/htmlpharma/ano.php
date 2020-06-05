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
        <link rel="stylesheet" href="../css/ano.css" type="text/css" /> 
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
                    <a>Anorexie mentale</a>
                </div>
                <div id="banniere_description">
                    <a href="conver.php" class="bouton_rouge2">Précédent</a>
                    <a href="accueil.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/ssn_2.png" alt="Les épilepsies" class="ico_categorie" /><strong>Anorexie mentale</strong></h1>
                        <p></p>
                        <p>La dysmorphophobie est une préoccupation concernant un défaut imaginaire ou léger de l'apparence physique qui suscite une souffrance importante ou perturbe la vie sociale,
                           professionnelle ou d'autres domaines. Le diagnostic repose sur l'anamnèse. Le traitement comprend une traitement pharmacologique et une psychothérapie.</p>

                    <h3>Symptomatologie</h3>
                        <p>Les symptômes peuvent apparaître insidieusement ou de façon soudaine. Bien que d'intensité variable, il y a généralement peut d'intervalles asymptomatiques. Les préoccupations
                           concernent principalement le visage et la tête, intéressent parfois une ou plusieurs parties du corps, et varient d'une partie à l'autre. Les préoccupations peuvent concerner la perte
                           de cheveux, l'acnée, les rides, les cicatrices d'angiomes, le teint ou une pilosité faciale excessive. La proccupation peut porter sur la forme ou la longueur du nez, les yeux,
                           les oreilles, la bouche, les seins, les fesses, le pénis ou toute autre partie du corps. Les hommes présentent une forme particulière de la maladie, appelée dysmorphie musculaire,
                           préoccupation centrée sur le fait que le corps n'est pas assez musclé et maigre.</p>

                        <p>Le patient est généralement préoccupé plusieurs heures par jour par son défaut corporel imaginaire. La plupart des patients se regardent souvent dans un miroir, d'autres évitent
                           les miroirs, d'autres encore alternent les 2 comportements. La majorité des patients cherchent à dissimuler leur défaut imaginaire. Nombre de patients évitent d'apparaître en public.
                           Certains ne sortent de leur appartement que la nuit, d'autres jamais. Un isolement social, des hospitalisations répétées, un comportement suicidaire peuvent en résulter.</p>

                    <h3>Diagnostic et traitement</h3>
                        <p>Le trouble peut passer longtemps inaperçu du fait des difficultés du patient à parler de ses symptômes. La dysmorphophobie se distingue des préoccupations normales concernant
                           l'apparence physique par son retentissement sur le fonctionnement (perte de temps) et la souffrance clinique importante.</p>

                        <p>Le diagnostic repose sur l'anamnèse. Si les préoccupations portent sur le poids et la forme corporel, le diagnostic le plus probable est l'anorexie mentale.
                           si la préoccupations concerne des caractéristiques sexuelles, untrouble de l'identité sexuel peut être évoqué. Les ISRS sont en général efficaces, bien que des doses
                           relativements élevées soient souvent requises. La thérapie cognitivocomportementale peut être utile.</p>

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
