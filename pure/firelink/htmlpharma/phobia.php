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
        <link rel="stylesheet" href="../css/phobia.css" type="text/css" /> 
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
                    <a>Troubles phobiques</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>


            <section>
                <article>
                    <h1><img src="../images/psy.png" alt="Les épilepsies" class="ico_categorie" /><strong>Troubles phobiques</strong></h1>

                    <h3>Symptomatologie et diagnostic</h3>

                    <p>Les troubles phobiques sont des peurs persistantes, déraisonnables et intenses (phobies) de situations, de circonstances ou bien d'objets. La peur délenche l'anxiété
                       et l'évitement. Les troubles phobiques sont classés en généraux (agoraphobie et phobie sociale) ou spécifiques. Les causes des phobies sont inconnues. Les troubles
                       phobiques sont diagnostiqués par l'anamnèse. Les traitements de l'agoraphobie et de la phobie sociale sont les traitements médicamenteux et la psychothérapie (thérapie
                       par immersion, thérapie cognitivo-comportementale ou les deux). Certaines phobies sont principalement traitées par la thérapie d'immersion.</p>


                    <h3>Catégorie</h3>

                    <h4>Agoraphobie</h4>
                    <p>L'agoraphobie est la peur d'une anxiété anticipatrice d'être piégé dans des situations ou des endroits sans moyens de s'échapper facilement et sans aide si une anxiété
                       intense se développe. L'agoraphobie peut être observée seule ou faisant partie d'un <a href="crisepan.php">trouble panique</a>.</br>
                       Les exemples fréquents de situations ou de lieux provoquant peur ou anxiété pour les personnes agoraphobes sont : faire la queue dans une banque, ou aux caisses d'un
                       supermarché, s'assoir au milieu d'une longue rangée de places dans un théâtre ou une école, utiliser les transports en commun. Certains patients deviennent agoraphobe
                       après une attaque de panique. D'autres se sentent mal à l'aise et peuvent développer une attaque de panique par la suite. L'agoraphobie perturbe souvent les activités
                       quotidiennes et, lorsqu'elle est assez grave, elle peut conduire au confinement de la personne chez elle.</p>

                    <h4>Phobie sociale</h4>
                    <p>La phobie sociale est la peur concernant le fait d'être exposé à certaines situations sociales ou de représentation. Le patient reconnaît que sa peur est déraisonnable
                       et excessive. La peur et l'anxité sont souvent rattachés au fait d'être embarassé ou humilier en cas d'échec à satisfaire les attentes des autres. Souvent sa préoccupation
                       est que son anxiété soit visible sous forme de sudation, d'érythème, de vomissements ou de tremblements (parfois sous forme de trémulation de la voix), ou bien de la perte
                       de capacité à garder le fil de ses pensées ou à trouver les mots pour s'exprimer. Un type plus généralisé de phobie sociale entraîne de l'anxiété dans de nombreuses 
                       situations sociales.</p>

                    <h4>Phobies particulières</h4>
                    <p>Une phobie spécifique est la peur et l'anxiété face à une situation ou un objet donné. La situation ou l'objet est généralement évitée quand cela est possible, mais si 
                       l'exposition se produit, l'anxiété se développe rapidement. L'anxiété peut s'intensifier jusqu'à devenir une <a href="crisepan.php">attaque de panique</a>. Parmi les phobies spécifiques les plus
                       fréquentes on retrouve la peur des animaux (zoophobie), du vide (acrophobie), et de l'orage (astrophobie, brontophobie), les ascensseurs (claustrophobie), le sang (hémophobie
                       avec risque d'évanouissement par réflexe vaso-vagal exagéré (bradycardie avec hypoTA)), des injections et des aiguilles (trypanophobie, bélonéphobie), ou des plaies (traumatophobie).</p>


                    <h3>Traitement</h3>
                    <p>L'agoraphobie peut disparaître sans traitement spécifique, car certains patients touchés dirigent leur propre thérapie d'exposition.</br>
                       La phobie sociale est presque toujours chronique et un traitement est toujours nécessaire.</br>
                       Le pronostic pour la phobie spécifique est plus variable lorsqu'elle n'est pas traitée en fonction de la possibilité d'éviter ou pas la situation ou l'objet phobogènes.</p>

                    <p>Comme de nombreuses phobies impliquent des conduites d'évitement, le traitement de choix est l'immersion, une forme de psychothérapie. Méthodiquement et avec le soutien d'un médecin,
                       le patient recherche, affronte et reste face à ce qu'il craint et fuit, jusqu'à ce que, par le biais d'un mécanisme appelé adaptation progressive, son anxiété s'estompe peu à peu.
                       Un traitement à très court terme par <a href="benzo.php">BZD</a> (lorazépam 0.5-1mg PO) ou un béta-bloquant (propanolol 10-40mg PO) 1 à 2 heures avant l'exposition, est occasionnellement
                       utile lorsqu'une exposition à un objet ou à une situation ne peut être évitée.</p>

                    <p>Beaucoup de patients souffrant d'agoraphobie présentent également un trouble panique, un bon nombre d'entre eux tirrent bénéfice d'un traitement médicamenteux avec un autre 
                       <a href="atd.php">ISRS</a>.</br>
                       Les ISRS et les BZD sont efficaces contre la phobie sociale, mais les ISRS sont généralement préférables pour ne pas interférer avec la thérapie cognitivo-comportementale.</br>
                       Les béta-bloquants sont utiles contre les phobies de performances.</p>

                    <p><i>Manuel Merck - 4ème édition - Merck research Laboratories - Division de Merck & Co., Inc., Whithouse Station, N.J. 2006, p. 1676-1677</i></p>

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