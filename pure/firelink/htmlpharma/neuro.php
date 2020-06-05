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
        <link rel="stylesheet" href="../css/neuro.css" type="text/css" /> 
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
                    <a>Neurologie</a>
                </div>
                <div id="banniere_description">
                    <a href="accueil.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/brainlogo.png" alt="Les épilepsies" class="ico_categorie" /><strong>Neurologie</strong></h1> 

                    <h3>Lexique</h3>
                            <ul>
                                <li><a href="https://www.chuv.ch/fr/neurochirurgie/nch-home/patients-et-familles/lexique/">Lexique du CHUV</a></li>
                                <li><a href="https://fr.wiktionary.org/wiki/Cat%C3%A9gorie:Lexique_en_fran%C3%A7ais_de_la_neurologie">Lexique de Wiki</a></li>
                            </ul>

                    <h3>Généralités et définitions</h3>
                            <ul>
                                <li><a href="https://www.who.int/features/qa/55/fr/">Définition de la neurologie selon l'OMS</a></li>
                                <li><a href="../docs/FichesCerveau-Chapitre14.pdf">Trauma et maladies en neurologie (PDF)</a></li>
                                <li><a href="https://www.youtube.com/watch?v=6M2-X1mhNDE">Système nerveux central et périphérique en 3 min!</a></li>
                                <li><a href="../docs/semioneuro.pdf">Sémiologie complete! (PDF)</a></li>
                            </ul>

                    <h3>Quelques pathologies et troubles neurologiques</h3>
                            <ul>
                                <li><a href="avc.php">Accident vasculaire cérébral</a></li>
                                <li><a href="../docs/25-28_0.pdf">Encéphalopathie chez le nouveau-né (pdf)</a></li>
                                <li><a href="epilepsie.php">L'épilepsie (+ syndrome de West + Lennox-Gastaut)</a></li>
                            </ul>
                            <ul>
                                <li><a href="http://www.medecine.ups-tlse.fr/dcem3/module15/neurologie/hp/Sclerose_laterale_amyotrophique.pdf">Sclérose 
                                latérale amyotrophique</a></li>
                                <li><a href="http://www.esculape.com/geriatrie/camptocormie.pdf">Camptocormie</a></li>
                                <li><a href="http://www.medecine.ups-tlse.fr/DCEM2/module8/item122/pdf/item122.pdf">Guilain-Barré</a></li>
                            </ul>
                            <ul>
                                <li><a href="https://www.cen-neurologie.fr/deuxieme-cycle/mouvements-anormaux">Dyskinésie</a></li>
                                <li><a href="dysto.php">Dystonie</a></li>
                                <li><a href="spas.php">Spasticité</a></li>
                                <li><a href="spasdys.php">Spasticité et dystonie</a></li>
                            </ul>

                    <h3>Maladies dégénératives et démences</h3>

                            <ul>
                            	<li><a href="https://www.alzheimer-schweiz.ch/fr/les-demences/article/quest-ce-quune-demence/">Démences</a></li>
                                <li><a href="alzheimer.php">Maladie d'Alzheimer</a></li>
                                <li><a href="parkinson.php">Maladie de Parkinson</a></li>
                                <li><a href="../docs/09_r_parkinson.pdf">Maladie de Parkinson (PDF)</a></li>
                                <li><a href="http://www.ffn-neurologie.fr/grand-public/maladies/maladie-de-parkinson">Maladie de Parkinson (Fédération française 
                                de neurologie)</a></li>
                                <li><a href="../docs/other_dementia.pdf">Maladie de Creutzfeldt-Jakob (PDF)</a></li>
                                <li><a href="../docs/pnds.pdf">Maladie de Huntington (PDF)</a></li>
                                <li><a href="../docs/04.pdf">Maladie à corps de Lewy (PDF)</a></li>
                                <li><a href="../docs/sep.pdf">Sclérose en plaque (PDF)</a></li>
                                <li><a href="../docs/SyndromeFrontal.pdf">Syndrome frontal (PDF)</a></li>
                            </ul>

                    <h5>Maladie de von Recklinghausen</h5>

                            <ul>
                                <li><a href="https://www.has-sante.fr/portail/upload/docs/application/pdf/2016-12/pnds_-_neurofibromatose_de_type_1.pdf">Neurofibromatose 
                                de type 1 (NF-1)</a></li>
                                <li><a href="http://www.info-radiologie.ch/neurofibromatose-2.php">Neurofibromatose de type 2 (NF-2)</a></li>
                            </ul>

                    <h3>Quelques syndromes</h3>
                            <ul>
                                <li><a href="antico.php">Syndrome anticholinergique</a></li>
                                <li><a href="https://pharmacomedicale.org/medicaments/par-specialites/item/agonistes-dopaminergiques">Agonistes dopaminergiques</a></li>
                                <li><a href="../docs/RevNeuropsy.pdf">Syndrome de conversion (PDF)</a></li>
                                <li><a href="sep.php">Syndrome extrapyramidal et syndrome parkinsonien</a></li>
                                <li><a href="https://archipel.uqam.ca/6947/1/D2681.pdf">Syndrome de Gilles de la Tourette (PDF)</a></li>
                                <li><a href="../docs/sdjsr.pdf">Syndrome des jambes sans repos (PDF)</a></li>
                            </ul>

                    <h3>Les tremblements</h3>
                            <ul>
                                <li><a href="https://www.cen-neurologie.fr/deuxieme-cycle/mouvements-anormaux">Mouvements anormaux</a></li>
                                <li><a href="https://www.cen-neurologie.fr/premier-cycle/s%C3%A9miologie-analytique/syndrome-myogene-myopathique/syndrome-myogene-myopathique-2">Mouvements 
                                involontaires</a></li>
                            </ul>

                    <h3>Quelques documents pour infirmiers et médecins</h3>
                        <nav>
                            <ul>
                                <li><a href="../docs/gsp-12-2010-personne-c3a2gc3a9e.pdf">Soins palliatifs chez la personne âgée. (Démence et soins palliatifs - p. 13) (PDF)</a></li>
                                <li><a href="https://www.svmed.ch/association/publications-svm/publications-thematiques/">Pour aller plus loin : 
                                Publications Thématiques (SVM + CHUV)</a></li>
                            </ul>
                        </nav>

                    <h3>Quelques vidéos</h3>  
                        <nav>                   
                            <ul>
                            	<li><a href="https://www.youtube.com/watch?v=5gJTb_1Kgvc">Clonies (épilepsie)</a></li>
                                <li><a href="https://www.youtube.com/watch?v=G6Gm0HK4uCs">Dystonie</a></li>
                                <li><a href="https://www.youtube.com/watch?v=FMc90ZDo-gY">Myoclonie (épilepsie)</a></li>
                                <li><a href="https://www.youtube.com/watch?v=k7vuJZEugwA">Syndrome frontal (examen)</a></li>
                                <li><a href="https://www.youtube.com/watch?v=iVL6_jkn9Tk">Tremblements au repos (parkinsonien)</a></li>
                                <li><a href="https://www.youtube.com/watch?v=k7nCjgNIvXw">Tremblements essentiels</a></li>
                                <li><a href="https://www.youtube.com/watch?v=y4xNOz0ovQ0">Tremblements cérébelleux</a></li>
                                <li><a href="https://www.youtube.com/watch?v=pvM3F3xzJBY">Tremblements choréiques (Huntington)</a></li>
                                <li><a href="https://www.youtube.com/watch?v=-JUJ2PEQ7yM">Examen neurologique</a></li>
                            </ul>
                        </nav>
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
                                <li><a href="https://www.alzheimer-schweiz.ch/fr/les-demences/">Alzheimer Suisse</a></li>
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

