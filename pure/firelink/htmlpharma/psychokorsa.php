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
        <link rel="stylesheet" href="../css/psychokorsa.css" type="text/css" /> 
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
                    <a>Psychopolynévrite de Korsakoff</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Psychiatrie</a>
                    <a href="entaf.php" class="bouton_rouge">Amphétamines</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Psychopolynévrite de Korsakoff</strong></h1>

                    <h3>Définition</h3>

                        <p>La psychopolynévrite de Korsakoff est une complication tardive de l'encéphalopathie de Wernicke persistante, qui induit des troubles de la mémoire, la confusion et des anomalies du comportement.</p>

                        <p>La psychopolynévrite de Korsakoff (syndrome amnésique de Korsakoff) apparaît chez environ 80% des patients non traités ayant une encéphalopathie de Wernicke. Un accès grave, ou plusieurs accès de
                           délirium tremens postalcoolique peut déclencher la psychopolynévrite de Korsakoff, précédé ou non d'un accès caractéristique d'encéphalopathie de Wernicke. D'autres médiateurs comprennent hémorragie
                           sous-arachnoïdienne, hémorragie thalamique, accident vasculaire ischémique du thalamus ou, plus rarement, tumeurs infiltrant les structures thalamiques paramédianes. La raison pour laquelle la
                           psychopolynévrite de Korsakoff ne se développe que chez certains patients qui présentent une encéphalopathie de Wernicke n'est pas claire.</p>

                    <h3>Symptomatologie</h3>

                        <p>La mémoire immédiate est sévèrement atteinte. L'amnésie rétrograde et antérograde se manifestent à des degrés variés. Le patient a tendance à tirer sur la mémoire des évéements lointains, qui
                           semble moins atteinte que la mémoire des événements récents. La désorientation temporelle est fréquente. Les changements émotionnels sont fréquents, ils incluent apathie, neutralité affective, 
                           ou légère euphorie avec peu ou pas de réponse aux événements extérieurs, y compris aux situations anxiogènes. La spontanéité et l'initiative peuvent être diminuées.</p>

                        <p>L'affabulation est souvent une manifestation précoce. Le patient atteint fabrique souvent des événements imaginaires ou confus dont il ne paeut pas se rappeler. Ces fabrications peuvent être
                           si convaincantes que le trouble sous-jacent n'est pas détecté.</p>
                         
                    <h3>Traitement et pronostic</h3>

                        <p>Le pronostic est excellent dans le cadre d'un traumatisme crânien, d'une hémorragie sous-arachnoïdienne ou des deux; l'amnésie est donc passagère. Le pronostic est mauvais lorsque la cause est l'
                           insuffisance de thiamine ou l'infarctus. Les soins institutionnels prolongés sont nécessaires chez près de 25% des patients, et seuls près de 20% guérissent complètement. Cependant, une amélioration
                           peut être observée jusqu'à 12-24 mois après le début, et on doit se garder d'un internement prématuré. Le traitement se fonde sur la thiamine et sur une hydratation adéquate.</p>

                        <p><i>Manuel Merck - 4ème édition - Merck research Laboratories - Division de Merck & Co., Inc., Whithouse Station, N.J. 2006, p. 1689.</i></p>
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
