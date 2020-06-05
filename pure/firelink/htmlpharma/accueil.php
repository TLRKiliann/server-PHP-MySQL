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

<?php
# $usr = '';
# $mdp='';
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=barre_search;charset=utf8', '', '');
}
catch (Exception $e)
{
    die ('Error :' .$e->getMessage());
}

$articles = $bdd->query('SELECT titre FROM articles WHERE art=\'Barre_info\'');
//$articles = $bdd->query('SELECT titre FROM articles ORDER BY id DESC');

if(isset($_GET['q']) AND !empty($_GET['q'])) {
	$q = htmlspecialchars($_GET['q']);
    // $q_array = explode(' ', $q);
    $articles = $bdd->query('SELECT titre FROM articles WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
    if($articles->rowCount() == 0) {
    $articles = $bdd->query('SELECT titre FROM articles WHERE CONCAT(titre, art) LIKE "%'.$q.'%" ORDER BY id DESC');
   }
}
?>

<!DOCTYPE html>
<html>
    <head>
	<meta charset="Utf-8" />
        <!-- <link rel="stylesheet" href="../css/init_file3.css" type="text/css" /> -->
        <link rel="stylesheet" href="../css/init_file4.css" type="text/css" /> 
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
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge">Psychiatrie</a>
                    <a href="neuro.php" class="bouton_rouge2">Neurologie</a>
                </div>
                <div class="corbeaufly">
                    <img src="../images/fly2.png" class="corbeaunicky" alt>
                </div>
            </div>

            <section>
                <article>
                    <div class="intro">
                    	<div class="ddart">
	                        <!-- <h1><img src="../images/DrEB77.png" alt="Les épilepsies" class="ico_categorie" /></h1> -->
	                        <div class="boxright">
	                        	<div class="tital">
	                        		<form>
	                        			<input type="search" name="q" placeholder="Recherche..." />
	                        			<input type="submit" value="search" />
	                        		</form>
	                        		<?php if($articles->rowCount() > 0) { ?>
	                        			<ul>
	                        			<?php while($a = $articles->fetch()) { ?>
                                            <li><?= $a['titre'] ?></li>
	                        			<?php } ?>
	                        			</ul>
	                        		<?php } else { ?>
	                        		Aucun résultat pour: <?= $q ?>...
	                        	    <?php } ?>
	                        	</div>
	                        </div>
	                    </div>
	                    <h3>Un site pour...</h3>
	                        <p>...tenter d'éclaircir les notions de complexités pouvant survenir dans les domaines de la neurologie et de la psychiatrie.
	                        	En effet, il m'a paru intéressant de structurer et de mettre à profit un accès facilité à des connaissances, susceptibles d'offrir 
	                            une meilleure compréhension des sujets traités pour ces domaines.</p>
	                            <ul>
	                            	<li><strong>"La barre de recherche"</strong>, figurant sur cette page, sert à faciliter l'accès aux données.</li>
		                        	<li><strong>"Des mots ont été écris volontairement en bleu"</strong>, dans les textes, afin d'accéder à de plus amples informations 
		                        	en 1 click.</li>
		                        	<li><strong>"Les pages comprises dans le <a href="../../alpha.php">menu principal"</a></strong> traitent principalement de l'actualités 
		                        	sur la neurologie, la psychiatrie et les médicaments, dans le menu principal.</li>
		                        	<li><strong><a href="http://kemy79inf.unblog.fr/category/labo/">"Link-Unblog"</a></strong> vous renverra sur un autre site doté de lexique de quelques 
		                        	terminologies neuro et psy. C'est moi qui ai écris le contenu de ce blog (il s'agit là d'un complément d'infos).</li>
		                        	<li><strong>"Les liens <a href="neuro.php">Vidéos"</a></strong> tirés de youtube permettent de peut-être mieux clarifier certains 
		                        		symptômes, tels que: les divers tremblements, les divers crises d'épilepsie, etc..</li>
		                        	<li><strong>"La tabel de gauche"</strong> permet soit de se rendre soit à la rubrique neurologie, psychiatrie, médicaments ou syndromes.</li>
		                        	<li><strong><a href="contact.php">"Contact"</a></strong> je reste joignable par e-mail si vous avez des questions.</li>
		                        </ul>
                    </div>

                    <div class="navigate">
                        <h3>Utilisation :</h3>
                        <p>Les pathologies figurant sous la rubrique <a href="neuro.php">neurologie</a> se présentent sous la forme de liens permettant d'accéder, soit à des 
                           sites universitaires, à des pages tirées du Manual Merk, à des pdf, ou encore à des vidéos (pour la plupart de youtube, je sais ça fait partie de la
                           GAFAM, mais heureusement qu'il y a "protonvpn" ;).</p>

                        <p>Sous la rubrique <a href="psy.php">psychiatrie</a>, un ensemble de pathologies est présentée de manière analogue à celle de la rubrique "neurologie".</br>
                           Dans ce menu, vous pouvez également accéder aux différentes classes de traitements psychotropes les plus couramment utilisés.</br>
                           Quelques syndromes sont présentés à la fin du menu de gauche.</p>
                    </div>

                    <div class="chat">
                        <h3>Discussions, échanges, dialogues !</h3>
                        <p>Un <a href="/pure/ichatroom/ichat.php">chat (Heidi-Chat)</a> ainsi qu'un <a href="/pure/MVC_blog/Blogcon/Links/index.php">blog (Heidi-Blog)</a> sont mis à 
                        disposition afin de pouvoir échanger, partager, transmettre des connaissances, poser des questions, etc.</p> 
                        <p>Le chat est destiné à un usage en temps réel, alors que le blog ne nécessite pas forcément de réponse, avis, etc, 
                           dans l'immédiat.</p> 
                        <p>Chacun à la possibilité de me faire des propositions, que ce soit de titre, ou de sujet de discussion pour "Heidi-Blog".</p>  
                        <p class="def">Inutile de préciser que tout comportement irrespecteux ou emprunt au harcèlement, à des pressions psychologique, ou à des atteintes 
                        à l'intégrité des autres membres du site, risque d'être sanctionné par une expulsion du site !</p>  
                    </div>    
                </article>

                <aside>
                    <div id="cote2">
                        <div class="tit2">
                            <h1>"Code is law"!</h1>
                        </div>
                        <p id="img_serp"><img src="../images/serp.png" alt="img_serp" />
                        <div class="tit3">
                            <h3>Forums, Manifs en quelques dates</h3>

                            <p>le 19 mars 2020 :</p>
                            <p><a href="https://www.svmed.ch/formation-pratique/calendrier-medical/">-Échange de pratiques visant à promouvoir l’élimination de l’hépatite C (EPE-HCV) </a></p><br />

                            <p>du 14 au 21 mars 2020 :</p>
                            <p><a href="https://schizinfo.com/">-Journées de la schizophrénie</a></p><br />

                            <p>le 14 juin 2019</p>
                            <p><a href="../docs/revendic.pdf">-Revendications Egalité - Ville de Lausanne</a></p><br />

                            <p>le 25 juin 2019 de 17h30 à 18h30</p>
                            <p><a href="../docs/flyer.pdf">-Peut-on prévenir la démence ? De la théorie à la pratique</a></p><br />

                            <h3>Emissions TV:</h3>
                            <p><a href="https://pages.rts.ch/emissions/temps-present/9215734-une-vie-de-jeune-en-psychiatrie.html">-36.9: Une vie de jeune en psychiatrie.</a></p>

                            <p>-Pour tous commentaires ou autres veuillez m'envoyer un e-mail qui se trouve à la page -> <a href="contact.php">contact.</a></p>
                        </div>
                        <div class="audio">
                            <audio src="farahr.mp3" controls></audio>
                        </div>
                    </div>
                </aside>
            </section>

            <div class="bibi">
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
            </div>

            <div class="prog_tabs">
                <h3>Application en open source</h3>
                <p>Ci-dessous, un programme open source qui regroupe les différentes classes de psychotropes.
                   Compatible avec les platformes: Linux, Windows et Mac (developed with Python GUI).</p> 
                <p>Si l'application vous intéresse, vous pouvez la télécharger sur:<br />
                   <a class="progh" href="https://github.com/TLRKiliann">https://github.com/TLRKiliann</a> ;)</p>
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
                                    <li><a href="http://www.psychomedia.qc.ca/categorie/1186">Avancées généralitées</a></li>
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

