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
        <link rel="stylesheet" href="../css/psychia.css" type="text/css" /> 
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
                    <a>Psychiatrie</a>
                </div>
                <div id="banniere_description">
                    <a href="neuro.php" class="bouton_rouge2">Précédent</a>
                    <a href="mae.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Psychiatrie</strong></h1>

                    <h3>Lexique</h3>
                        <ul>
                            <li><a href="../docs/lexique_psychiatrie.pdf">Lexique de psychiatrie (PDF)</a></li>
                        </ul>

                    <h3>Troubles anxieux</h3>
                        <ul>
                            <li><a href="http://www.psychomedia.qc.ca/dsm-5/2013-04-14/troubles-anxieux-differences-dsm-iv">Trouble anxieux généralisé (TAG)</a></li>
                            <li><a href="toc.php">Les TOC (Troubles Obsessionnels Compulsifs)</a></li>
                            <li><a href="crisepan.php">Crise de panique et trouble panique</a></li>
                            <li><a href="phobia.php">Troubles phobiques</a></li>
                            <li><a href="entaf.php"><del>Troubles du stress</a></li>
                                <ul>
                                    <li><a href="entaf.php"><del>Etat de stress aigu</a></li>
                                    <li><a href="entaf.php"><del>Trouble de stress post-traumatique</a></li>
                                </ul>
                        </ul>

                    <h3>Troubles dissociatifs</h3>
                        <ul>
                            <li><a href="http://www.psychomedia.qc.ca/diagnostics/quels-sont-les-troubles-dissociatifs">Trouble de dépersonnalisation</a></li>
                            <li><a href="https://www.msdmanuals.com/fr/professional/troubles-psychiatriques/troubles-dissociatifs/amn%C3%A9sie-dissociative">Amnésie dissociative</a></li>
                            <li><a href="http://www.psychomedia.qc.ca/diagnostics/quels-sont-les-troubles-dissociatifs">Amnésie dissociative 2</a></li>
                            <li><a href="http://www.psychomedia.qc.ca/diagnostics/quels-sont-les-troubles-dissociatifs">Fugue dissociative</a></li>
                            <li><a href="http://www.psychomedia.qc.ca/diagnostics/quels-sont-les-troubles-dissociatifs">Trouble dissociatif de l'identité</a></li>
                        </ul>

                    <h3>Consommation de drogues et dépendance</h3>
                        <ul>
                            <li><a href="alcool.php">Alcool</a></li>
                                <ul>
                                    <li><a href="encowerni.php">Encéphalopathie de Wernicke</a></li>
                                    <li><a href="psychokorsa.php">Psychopolynévrite de Korsakoff</a></li>
                                    <li><a href="https://fr.wikipedia.org/wiki/Syndrome_de_Wernicke-Korsakoff">Syndrome de Wernicke-Korsakoff</a></li>
                                    <li><a href="mmb.php">Maladie de Marchiafava-Bignami</a></li>
                                </ul>
                            <li><a href="ampheta.php">Amphétamines</a></li>
                        </ul>

                    <h3>Troubles thymiques</h3>
                        <ul>
                            <li><a href="depress.php">Troubles dépressifs</a></li>
                            <ul>
                                <li><a href="http://www.psychomedia.qc.ca/dsm-5/2016-04-04/criteres-diagnostiques-depression-majeure">Dépression (majeure ou caractérisée)</a></li>
                                <li><a href="entaf.php"><del>Trouble mixte anxiodépressif</del></a></li>
                            </ul>
                            <li><a href="maniaco.php">Maniaco-dépression (trouble bipolaire)</a></li>
                            <li><a href="entaf.php"><del>Trouble cyclothymique</del></a></li>
                        </ul>

                    <h3>Troubles de l'alimentation</h3>
                        <ul>
                            <li><a href="ano.php">Anorexie mentale</a></li>
                            <li><a href="entaf.php"><del>Boulimie</del></a></li>
                            <li><a href="entaf.php"><del>Grignotage compulsif</del></a></li>
                        </ul>


                    <h3>Troubles de la personnalité</h3>
                        <ul>
                            <li><a href="http://www.psychomedia.qc.ca/articles-psychologiques/quels-sont-les-troubles-de-la-personnalite">Les troubles de la personnalité</a></li>
                            <li><a href="tbl_bl.php">Trouble border-line (trouble de la personnalité limite)</a></li>
                        </ul>

                    <h3>Schizophrénie et troubles corrélés</h3>
                        <ul>
                            <li><a href="schizo.php">Schizophrénie</a></li>
                            <li><a href="../docs/schizo_motiv.pdf">Schizophrénie (étude de soignants Lausannois sur les personnes schizophrènes)</a></li>
                            <li><a href="schizoaff.php">Trouble schizo-affectif</a></li>
                        </ul>

                    <h3>Trouble somatoformes et troubles factices</h3>
                        <ul>
                            <li><a href="dysmorpho.php">Dysmorphophobie</a></li>
                            <li><a href="conver.php">Conversion</a></li>
                            <li><a href="entaf.php"><del>Hypochondrie</del></a></li>
                            <li><a href="entaf.php"><del>Syndrome de Münchausen</del></a></li>
                                <ul>
                                    <li><a href="entaf.php"><del>Syndrome de Münchausen par procuration</del></a></li>
                                </ul>
                            <li><a href="entaf.php"><del>Trouble douloureux</del></a></li>
                            <li><a href="entaf.php"><del>Somatisation</del></a></li>
                        </ul>

                    <h3>Comportement suicidaire</h3>
                        <ul>
                            <li><a href="suicide.php">Comportement suicidaire</a></li> 
                        </ul>
                    <h4>En cours de développement...</h4>
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
