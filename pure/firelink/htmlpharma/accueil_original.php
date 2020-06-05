<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
	<meta charset="Utf-8" />

        <link rel="stylesheet" href="../css/init_file2.css" type="text/css" />
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
                        </ul>
                            <h4>Syndromes</h4>
                        <ul>
                            <li><a href="sep.php">Syndrome extrapyramidal</a></li>
                            <li><a href="snm.php">Syndrome neuroleptique malin</a></li>
                            <li><a href="syndsero.php">Syndrome sérotoninergique</a></li>
                        </ul>
                            <h4>Espace d'échanges</h4>
                        <ul>
                            <li><a href="/pure/ichatroom/ichat.php">CHAT</a></li>
                            <li><a href="/pure/MVC_blog/Blog/index.php">BLOG</a></li>
                        </ul>
                </nav>
            </div>

            <div id="banniere_image">
                <div id="banniere_description">
                    <a href="neuro.php" class="bouton_rouge">Neurologie</a>
                </div>
                <div class="corbeaufly">
                    <img src="../images/fly2.png" class="corbeaunicky" alt>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/db71.png" alt="Les épilepsies" class="ico_categorie" /><strong>Préambule</strong></h1>

                    <p>Bonjour et bienvenue sur Pharmaco-Site!</p>

                    <p>Ce site a été créé dans l'intention d'aider l'internaute dans ses recherches, que ce soit tant dans la symptomatologie ou pour une pathologie en particulier.</br>
                       Pour ce faire, j'ai mis des liens tel que <strong>"Blog"</strong> qui celui-ci vous renverra à un autre site doté de lexique en terminologie, etc. (très intéressant).</br>
                       J'ai également mis à disposition des <strong>vidéos</strong> youtube qui vous permettront de mieux imager certains symptômes comme les divers tremblements, les divers crises d'épilepsie, etc..</br>
                       Le développement de Pharmaco-Site est axé principalement sur les domaines de la neurologie et de la psychiatrie.</p>

                    <p>Les pathologies figurant sous la rubrique neurologie ne sont pas exhaustives et se présentent sous la forme de liens permettant d'accéder à l'information
                       sur des sites universitaires.</p>  

                    <p>Il manque encore quelques informations, étant donné que Pharmaco-site est encore en cours de travaux. Par conséquent, je vous remercie pour votre indulgence.</p>

                    <p>Un site "homemade" créé pour l'utilité et pour le partage.</p>       

                    <h3>Bibliographie :</h3>
                    <p><strong>Livres :</strong></p>
                        <ul>
                            <li><i>Manuel Merck - 4ème édition - Merck research Laboratories - Division de Merck & Co., Inc., Whithouse Station, N.J. 2006.</i></li>
                            <li><i>Vade-Mecum de thérapeutique psychiatrique - 10ème édition - 2011 Editions Médecine et Hygiène - Genève.</i></li>
                        </ul>
                    <p><strong>Site internet :</strong></p>
                        <ul>
                            <li>http://compendium.ch/</li>
                            <li>http://www.chups.jussieu.fr/polys/neuro/semioneuro/index.html</li>
                            <li>https://pharmacomedicale.org/</li>
                            <li>Ainsi que les sites qui se trouvent sous les rubriques: <a href="psy.php">"psychiatrie"</a> et <a href="neuro.php">"neurologie"</a>.</li>
                        </ul>
                    <p>Excellente navigation! :)</p>
                </article>

                <aside>
                    <div id="cote2">
                        <div class="tit2">
                            <h1>Pour le bien de tous!</h1>
                        </div>
                            <p id="img_serp"><img src="../images/serp.png" alt="img_serp" />

                            <p>Je me suis lancé dans la construction de ce site, car il m'a paru important de structurer et de mettre à profit des connaissances de domaines complexes 
                               tels que ceux de la neurologie et de la psychiatrie.</br>
                               J'ai favorisé l'accès à des documents sucseptibles d'offrir la meilleure réprésentation qu'il soit, afin de permettre de comprendre au mieux les sujets traités.</br>
                               N'hésitez pas à me faire part de vos commentaires ou autres par e-mail (<a href="contact.php">contact</a>).</p>

                            <p>En espérant que Pharmaco-Site puisse vous aider dans vos recherches!</p>
                            <div class="audio">
                                <audio src="a_land_restored.mp3" controls></audio>
                            </div>
                    </div>
                </aside>
            </section>

            <div class="prog_tabs">
                <p>Ci-dessous, le programme Psychotabs qui regroupe les différentes classes de psychotropes.<br /> 
                   Compatible sur Linux, Windows et Mac.</p> 
                <p>Si l'application vous intéresse, veuillez m'envoyer un e-mail pour me le faire savoir (contact).</p>
            </div>
                    <div>   
                        <div id="lediv">
                            <figure>
                                <img src="../images/img1.jpg" alt>
                                <img src="../images/img2.jpg" alt>
                                <img src="../images/img3.jpg" alt>
                                <img src="../images/img5.jpg" alt>
                            </figure>
                        </div>
                    </div>

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

