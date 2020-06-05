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
        <link rel="stylesheet" href="../css/sui.css" type="text/css" />
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
                    <a>Comportement suicidaire</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Comportement suicidaire</strong></h1>

                    <p>Le comportement suicidaire comprends 3 types d'actes autodestructeurs : le suicide, la tentative de suicide, et les gestes à visée suicidaire. Les pensées et les projets
                       de suicide constituent les idéations suicidaires.</br>
                       Le suicide est un acte suicidaire qui entraîne la mort. La tentative de suicide est un acte ayant pour objectif sa propre mort, mais qui n'entraîne pas le décès. Fréquemment,
                       les tentatives de suicide mettent en jeu au moins quelques ambivalences sur la volonté de décéder et peuvent être un appel à l'aide. Les gestes suicidaires sont des tentatives
                       qui impliquent une action à très faible potentiel létal. Les gestes et les idéations suicidaires sont le plus souvent des appels à l'aide de personne qui veulent encore vivre.
                       Ce sont des moyens pour communiquer préférentiellement leurs sentiments de détresse et de désespoir. <strong>Cependant, ils ne doivent pas être pris à la légère</strong>.</p>

                    <h3>Epidémiologie</h3>

                    <p>Les statistiques sur les comportements suicidaires sont fondés principalement sur les certificats de décès et les rapports d'enquêtes, et on sous-estime l'incidence réelle.
                       Le suicide se classe au 11è rang des causes de décès aux USA. C'est la tranche d'âge 15-24 ans. Les hommes >= 75 ans ont le plus fort taux de mort par suicide. Parmi tous les
                       groupes d'âge, les décès des hommes par suicide sont plus nombreux dans un ratio de 4/1 que ceux des femmes.</br>
                       Les personnes engagées dans une relation stable ont un taux de suicide beaucoup plus faible que les célibataires. Les tentatives de suicides et les suicides sont plus nombreux 
                       chez les gens isolés.</br>
                       Le suicide en groupe, impliquant soit de nombreuses personnes, soit 2 individus (comme des amants ou des époux), représentent une forme extrême d'identification aux autres.
                       Une lettre est laissée par près de 1 suicidé sur 6. Le contenu peut indiquer le trouble mental qui a conduit à l'acte suicidaire.</p>

                    <h3>Etiologie</h3>

                    <p>Le principal facteur de risque curable du suicide est la dépression. Les autres facteurs sont les facteurs sociaux (déception et sentiments de perte) et les troubles de la personnalité.
                       (impulsivité et agressivité). Les expériences infantiles traumatisantes, en particulier la souffrance due à un foxer brisé, à une carence parentale et des abus, sont significativement
                        plus important chez la personne qui commet un acte suicidaire. Le suicide est parfois un acte final dans un cycle de comportements autodestructeurs, tel que l'alcoolisme, la conduite 
                        imprudente et les actes antisociaux violents. Souvent un seul de ces facteurs (souvent une rupture relationnelle importante) est la goutte d'eau qui fait déborder le vase. Les maladies
                        organiques graves, en particulier si elles sont chroniques et douloureuses, jouent un rôle important dans près de 20% des suicides chez la personne âgée.</br>
                        L'alcool est les abus de médicaments peuvent augmenter la déshinibtion et l'impulsivité, et déprimer l'humeur.</br>
                        Certains patients qui souffrent de schizophrénie commettent un suicide, parfois dû à une dépression, à laquelle ils sont sujets. La méthode de suicide peut être étrange et violente.
                        Les tentatives de suicide ne sont pas courantes bien qu'elles puissent être le premier signe d'une perturbation psychiatrique survenant aux stades initiaux de la schizophrénie.
                        Le patient atteint de troubles de la personnalité est sujet aux tentatives de suicide, surtout la personne affectivement immature, ayant une personnalité limite ou psychopathique,
                        car elle tolère mal les frustrations et réagit impulsivement au stress avec violence et agressivité.</br>
                        L'agression envers les autres est parfois évidente dans un comportement suicidaire. Dans de rare cas, d'anciens amants ou des conjoints séparés sont impliquer dans un assassinats 
                        associés à un suicide, où une personne en tue une autre, puis se suicide.</p>

                    <h3>Facteurs de risque et signes d'alerte du risque suicidaire</h3>
                    
                    <h4>Facteurs personnels et sociaux :</h4>
                        <ul>
                            <li>Sexe masculin</li>
                            <li>Âge > 65 ans</li>
                            <li>Antécédents de tentative de suicide</li>
                            <li>Projets suicidaires détaillés actuels, mesure prise pour mettre ce plan à exécution (obtention d'un pistolet, comprimés), prises de précaution pour ne pas être découvert.</li>
                            <li>Dates d'anniversaires ayant une signification personnelle</li>
                            <li>Antécédents familiaux de suicides ou de troubles thymiques</li>
                            <li>Chômage ou difficultés financières</li>
                            <li>Séparation récente, divorce ou veuvage</li>
                            <li>Isolement social avec une attitude non empathique réelle ou imaginaire des parents ou des amis.</li>
                        </ul>

                    <h4>Signes cliniques :</h4>
                        <ul>
                            <li>Maladie dépressive</li>
                            <li>Agitation motrice importante, anxiété avec insomnie grave</li>
                            <li>Sentiment marqué de culpabilité, d'inadéquation et de désespoir, autodénigrement ou idées délirantes nihilistes</li>
                            <li>Conviction délirante ou quasi-délirante d'une maladie physique (par ex. cancer, maladie cardiaque, maladie sexuellement transmissible)</li>
                            <li>Commandements hallucinatoires</li>
                            <li>Personnalité impulsive, hostile</li>
                            <li>Abus d'alcool ou de médicaments</li>
                            <li>Trouble physique chronique, douloureux ou invalidant</li>
                            <li>Arrêt brutal de la paroxetine et de certains autres antidépresseurs peut provoquer une augmentation de la dépression et de l'anxiété, qui augmente à son tour le risque suicidaire.</li>
                        </ul>

                    <p><i>Manuel Merck - 4ème édition - Merck research Laboratories - Division de Merck & Co., Inc., Whithouse Station, N.J. 2006, p. 1741-1743.</i></p>

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