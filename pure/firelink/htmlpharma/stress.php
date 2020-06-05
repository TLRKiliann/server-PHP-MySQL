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
        <link rel="stylesheet" href="../css/sep.css" type="text/css" /> 
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
                    <a>Troubles du stress</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Troubles du stress</strong></h1>

                    <h3>Symptomatologie et diagnostic :</h3>

                    <p>L'attaque de panique comprend au moins 4 des 13 symptômes listés ci-dessous (Symptomatologie d'une crise de panique). Les symptômes atteignent généralement
                       leur maximum après 10 minutes puis disparaissent. Bien qu'elles soient extrêmement désagréables, elles ne sont pas médicalement dangereuses.</p>

                    <p>Les attaques de panique peuvent survenir dans tous les <a href="psy.php">troubles anxieux</a>.</p>

                    <p>La plupart des patients qui présentent un trouble panique anticipent, craignent une autre crise (anxiété anticipatrice) et évitent les endroits et situations
                       où elles ont paniqué antérieurement.</br>
                       Les patients pensent souvent avoir une grave maladie pulmonaire, cardiaque ou cérébrale, et consultent fréquemment leur médecin traitant ou les services d'urgence.</br>
                       Beaucoup de patients ont également les symptômes d'une <a href="http://www.psychomedia.qc.ca/dsm-5/2016-04-04/criteres-diagnostiques-depression-majeure">dépression majeure</a>.</p>

                    <h3>Symptomatologie d'une crise de panique :</h3>

                    <h4>Cognitive :</h4>
                        <ul>
                            <li>Peur de la mort</li>
                            <li>Peur de devenir fou ou de perdre le contrôle de soi</li>
                            <li>Sentiments d'irréalité, d'étrangeté, ou de détachement vis-à-vis de l'environnement</li>
                        </ul>

                    <h4>Somatique :</h4>
                        <ul>
                            <li>Douleur ou gêne thoracique</li>
                            <li>Sensation de vertiges, d'instabilité ou d'évanouissement</li>
                            <li>Impression d'étouffement</li>
                            <li>Bouffées de chaleur ou frissons</li>
                            <li>Nausées ou douleurs abdominales</li>
                            <li>Paresthésie ou sensations d'engourdissement</li>
                            <li>Palpitations ou fréquence cardiaque accélérée</li>
                            <li>Sensation de souffle coupé ou d'étouffement</li>
                            <li>Transpiration</li>
                            <li>Tremblements ou convulsions</li>
                        </ul>

                    <h3>Traitement :</h3>

                    <p>Certains patients guérissent spontanément, surtout s'ils continuent d'affronter les situations dans lesquelles les crises se sont produites. Pour d'autres, surtout
                       s'ils ne sont pas traités, le trouble panique suit une évolution chronique en dents de scie.</p>

                    <p>Le patient doit être informé que le traitement aide généralement à contrôler les symptômes. Si des comportements d'évitement ne sont pas développés, le soutien 
                       psychologique, l'information par rapport à l'anxiété et l'encouragement à revenir dans les endroits où les crises de paniques se sont produites, peuvent constituer
                       le seul traitement nécessaire. Cependant, dans le cas d'une pathologie ancienne avec crises fréquentes et comportements d'évitement, le traitement pourra nécessiter
                       un traitement médicamenteux associé à une psychothérapie plus intensive.</p>

                    <p>Les médicaments permettant de réduire l'anxiété anticipatrice, les conduites d'évitement, la fréquence et l'intensité des attaques de panique:</p>
                        <ul>
                            <li><a href="atd.php">ISRS:</a> Inhibiteur sélectif de la recapture en sérotonine.</li>
                            <li><a href="atd.php">ISRSN:</a> Inhibiteur sélectif de la recapture en sérotonine-norépinéphrine.</li>
                            <li><a href="atd.php">ATC:</a> Antidépresseurs tricyclique.</li>
                            <li><a href="atd.php">IMAO:</a> Inhibiteurs de la monoamine-oxydase.</li>
                            <li><a href="benzo.php">BZD:</a> Benzodiazépines.</li>
                        </ul>  

                    <p>Les ISRS et les ISRSN ont l'avantage d'avoir moins d'effets indésirables que les autres.</br>
                       Les BZD agissent plus rapidement mais engendrent une dépendance en plus des effets indésirables tels que: ataxie, somnolence et trouble de la mémoire.</br>
                       Les antidépresseurs et les BZD peuvent être utilisés en association avec une réduction de la dose de BZD, le temps que l'antidépresseur devienne efficace.</p>

                    <p>Les crises de panique récidivent souvent lorsque le traitement est interrompu.</p>

                    <p>La thérapie cognitivo-comportementale a pour objectif d'appendre au patient à reconnaître ses distorsions cognitives et ses fausses croyances, ainsi qu'à modifier son comportement.
                       Par exemple le patient qui décrit l'accélération de la fréquence cardiaque ou un essoufflement dans certaines situations ou dans certains endroits, et la peur d'être ne train de faire
                       une crise cardiaque, se voit expliquer que ses inquiétudes sont fondées et qu'il doit plutôt réagir en ayant recours à une respiration lente et contrôlée ou à d'autres méthodes favorisant 
                       la relaxation.</br>
                       Les mises en situation in vivo par expositions progressives aux facteurs de stress, dans la thérapie cognitivo-comportementale, permettent au patient de faire diminuer l'anxiété.
                       La thérapie implique l'évalution de l'intensité des émotions en fonction du degré de stress éprouvé dans la situation. La confrontation aux situations sources d'anxiété doit se
                       faire de manière progressive.   
                       Par exemple, le temps de la confrontation face à la situation anxiogène sera augmenté jusqu'à ce que la situation deviennent acceptable pour le patient. 
                       La relaxation, la respiration associées à l'accompagnement psychiatrique vont aider le patient à modifier ses schémas cognitifs. </p>

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