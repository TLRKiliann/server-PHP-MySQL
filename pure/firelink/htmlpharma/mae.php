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
        <link rel="stylesheet" href="../css/mae.css" type="text/css" /> 
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
                    <a>Anti-épileptiques</a>
                </div>
                <div id="banniere_description">
                    <a href="psy.php" class="bouton_rouge2">Précédent</a>
                    <a href="anti_psy.php" class="bouton_rouge">Suivant</a>
                </div>
            </div>

            <section>
                <article>
                    <h1><img src="../images/eclair.png" alt="Les épilepsies" class="ico_categorie" /><strong>Médicaments anti-épileptiques (MAE)</strong></h1>

                    <p><strong class="redti">MAE de première génération:</strong> Bromides (n'est plus utilisé); Carbamazépines; Dépakine; Ethosuximide; Mysoline; Phénobarbital; Phénytoïne.</p>
                    <p><strong class="redti">MAE de seconde génération:</strong> Briviact; Fycompa; Gabitril; Inovelon; Keppra; Lamictal; Lyrica; Neurontin; Sabril; Taloxa; Tiapridal; Topamax; 
                       Trileptal; Trobalt; Vimpat; Zonegran.</p>

                    <h3>PROPRIETES DES MAE</h3>

                    <p>Les médicaments anti-épileptiques, de première et de deuxième génération, agissent par trois principaux mécanismes d’action :</p>
                        <ul>
                            <li>(1) inhibition de la transmission glutamatergique;</li>
                            <li>(2) potentialisation de l'action inhibitrice GABAergique;</li>
                            <li>(3) blocage des canaux cationiques (Na+ voltage-dépendants ou Ca2+ de type T)</li>
                        </ul>

                    <p>En effet, l’inhibition de la transmission glutamatergique peut être indirecte par l’inhibition des canaux Na+ voltage-dépendants des neurones glutamatergiques, mais
                       aussi ceux des neurones post-synaptiques responsables des décharges épileptiques <a href="epilepsie.php">(voir epilepsie)</a>.</p>

                    <p>La lamotrigine inhibe directement la libération de glutamate. L’inhibition des voies glutamatergiques peut également résulter d’une action antagoniste au niveau des
                       récepteurs NMDA (topiramate, felbamate). L’acide valproïque et l’éthosuximide inhibent l’hyperexcitabilité neuronale en bloquant les canaux calciques neuronaux 
                       voltage-dépendants et le lévétiracétam bloque l’hyperexcitabilité neuronale par un inhibition complexe de canaux ioniques.</p>

                    <p>L’activation du système GABAergique peut se faire aussi par différents mécanismes. L’activation peut être pré-synaptique par inhibition de la recapture du GABA
                       (tiagabine) ou par inhibition de la GABA-transaminase, enzyme de dégradation du GABA (vigabatrin). Elle peut être post-synaptique par potentialisation de l'effet du
                       GABA après fixation sur le récepteur GABAA (benzodiazépines).</p>

                    <p>Toutefois, pour la majorité des anti-épileptiques de première ou de deuxième génération, les mécanismes d'action sont en grande partie mal ou non connus et aucun
                       mécanisme n'est strictement corrélé à l'action clinique anticonvulsivante. De plus, la similitude des mécanismes d'action des anti-épileptiques de première et de
                       deuxième génération explique pourquoi 25-30% de patients ne pressentent pas d'équilibre optimal de leur épilepsie même sous traitement par nouvelles molécules. Le
                       développement de molécules agissant sur des nouvelles cibles reste privilégié.</p>

                    <h3>Effets secondaires des MAE</h3>

                    <p><strong>De manière générale, les ES des MAE sont les suivants: </strong>somnolence, vertiges, diplopie, céphalées, nausées, ataxie, agitation, BAV, arythmie, éruption cutanées, 
                       fatigue, allongement de l'intervale QT, si risque d'induction enzymatique, il est indiqué d'utiliser en monothérapie.</p>

                    <p><strong class="redti">Risque de syndrome de Stevens-Johnson:</strong> 14 à 19 jours après l'introduction d'une nouvelle molécule (MAE), manifeste une 
                       dermatostomatite ou ectodermose érosive pluriorificielle de Fiessinger-Rendu <a href="https://fr.wikipedia.org/wiki/Syndrome_de_Stevens-Johnson">(voir syndrome
                       de Stevens-Johnson).</a></p>

                    <p><strong class="redti">Surdosage:</strong> généralement pas d'antidote. Il faut arrêter le ttt et le substituer par un autre.</p>
                    <p><a class="redti">En cas de surdosage, les mesures générales de réanimation doivent être mises en oeuvre.</a></p>

                    <p><strong class="redti">Surveillance:</strong> troubles électrolytiques, carence vitaminique, acide folique, anémie, agranulocytose, troubles de la conduction, etc...</p>

                    <p><strong class="redti">Contre-indications:</strong> chez la femme enceinte (risque de malformation).</p>

                    <p>L'introduction d'un MAE se fait toujours de manière <a class="redti">progressive</a> et son arrêt de manière <a class="redti">dégressive.</a></p>

                    <p>Les prescription, le changement ou le remaniement d'un MAE se fait toujours par un <a class="redti">médecin expérimenté en épilepsie.</a></p>

                    <p><a class="redti">Déconseillé durant la grossesse.</a></p>


                    <h3>Interactions</h3>
                        <ul>
                            <li>Jamais de pamplemousse!</li>
                            <li>Avec d'autres <a href="mae.php">MAE</a> (induction ou inhibition enzymatique).</li>
                            <li>Contre-indiqué avec le Primpéran (et Motilium).</li>
                            <li>Interactions avec: ATB, myorelaxant, antimycotique, antihistaminique.</li>
                            <li>Inhibition enzymatique en association avec les contraceptifs oraux.</li>
                        </ul>

                    <p>Depakine peut potentialiser l'effet d'autres neuropsychotropes, tels que :</p>
                        <ul>
                            <li><a href="anti_psy.php">Neuroleptiques</a></li>
                            <li><a href="atd.php">IMAO</a></li>
                            <li><a href="atd.php">Antidépresseurs</a></li>
                            <li><a href="benzo.php">Benzodiazépines</a></li>
                        </ul>

                    <p>Une surveillance clinique et une adaptation éventuelle du traitement sont de rigueur. Il y a énormément d'interraction et d'effets secondaires avec les MAE.</p>

                    <p>Les MAE de 1ère génération provoquent une induction ou une inhibition enzymatique. En association avec d'autre médicaments, les MAE peuvent faire diminuer ou
                       augmenter le dosage d'un autre médicament dans le sang.</p>

                    <p>Le zuclopenthixol (clopixol) devrait être utilisé avec précaution chez les patients souffrant d'épilepsie (le médicament abaisse le seuil épileptogène), de 
                       lésions cérébrales organiques ou de maladies hépatiques ou rénales à un stade avancé.</p>
                           
                    <p><strong class="carbasero">Ne pas associer de la carbamazépine (Tégrétol) avec la quétiapine (Seroquel), à moins de savoir ce que l'on fait.</strong></p>          
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

