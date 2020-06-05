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
        <link rel="stylesheet" href="../css/toc.css" type="text/css" /> 
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
                            <li><a href="http://kemy79inf.unblog.fr/category/labo/">Blog</a></li>
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
                    <a>Troubles Obsessionnels Compulsifs</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Les Troubles Obsessionnels Compulsifs (TOC)</strong></h1>

                        <p><strong>Définition:</strong> Le Trouble Obsessionnel Compulsif (TOC) est un trouble de l’anxiété. Il se caractérise par des obsessions et des compulsions.</p>

                        <p>Le Trouble Obsessionnel Compulsif (TOC) est un trouble de l’anxiété. Les obsessions sont des pensées ou des images qui surgissent à répétition et
                           qui sont difficiles à chasser de l’esprit. Ces obsessions sont dérangeantes, parfois effroyables ou désagréables. Elles peuvent générer beaucoup de détresse,
                           de peur, de malaise ou de dégoût.</p>

                        <p>Pour essayer de réprimer ou de se débarrasser des obsessions, la personne atteinte se sent obligée d’accomplir des gestes répétitifs, des rituels, appelés compulsions. 
                           Les compulsions sont une tentative de contrôler les obsessions par la pratique de vérifications ou rituels.</p>

                        <p>Les obsessions et compulsions provoquent détresse, matériellement une perte de temps considérable. Elles peuvent interférer de façon significative avec
                           les activités habituelles de la personne, son fonctionnement professionnel (ou scolaire) ou ses activités ou relations sociales habituelles.</br>
                           Les rituels compulsifs peuvent occuper plusieurs heures par jour. Malheureusement, les compulsions n’apportent qu’un soulagement temporaire et le cycle 
                           obsession compulsion reprend.</p>

                        <p>Certaines personnes sont aux prises avec tellement de compulsions qu’elles ne peuvent pas quitter leur domicile, pour une quelconque activité professionnelle 
                           ou de loisir. Elles cachent parfois leurs symptômes et cela les amène à s’isoler.</p>

 

                        <p><strong>Obsessions / Compulsions souvent observées :</strong></p>
                            <ul>
                                <li><a>Peur de la contamination, (par la saleté, les microbes, la maladie ou les excréments / Se laver, prendre plusieurs douches 
                                       longues, nettoyer sans fin)</li></a>
                                <li><a>Peur de faire du mal aux autres à cause d’un manque d’attention (peur de causer un accident de voiture ou autre) / Rituels 
                                       de répétition, vérifier que rien de terrible n’est arrivé)</li></a>
                                <li><a>Préoccupation excessive avec l’organisation et la symétrie (Disposer les choses selon un agencement précis, ranger les choses 
                                       ou les plier d’une certaine façon</li></a>
                                <li><a>Crainte d’attraper une maladie grave, (comme le cancer ou le SIDA / Prendre toutes mesure pour supprimer le contact avec des éléments contaminants)</li></a>
                                <li><a>Impulsions, images ou pensées perverses à propos de la sexualité / Besoin de toucher, compter mentalement</li></a>
                                <li><a>Souci exagéré d’une partie de son corps (peur que son nez soit déformé, que sa peau soit imparfaite / Vérifier dans le miroir)</li></a>
                                <li><a>Peur d’être responsable d’une catastrophe / Vérifier que les portes sont verrouillées, les appareils électriques débranchés</li></a>
                                <li><a>Peur du sacrilège, du blasphème ou de la moralité / Prières ritualisées, chiffres ou mots spéciaux utilisés pour neutraliser la pensée</li></a>
                                <li><a>Peur de jeter un objet dont on pourrait avoir besoin / Ramasser et entreposer des objets ou des papiers inutiles</li></a>
                            </ul>

                        <p>La personne qui souffre de TOC a conscience de l’absurdité de ses pensées et/ou de son comportement, mais sans aide, elle ne parvient pas à s’arrêter. 
                           Ces idées et ces comportements sont incontrôlables.</p>

                        <p><i>Tiré du site -> http://www.frcneurodon.org/comprendre-le-cerveau/le-cerveau-malade-et-ses-maladies-neurologiques/les-maladies-psychiatriques-
                            et-les-troubles-du-comportement/</i></p>
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