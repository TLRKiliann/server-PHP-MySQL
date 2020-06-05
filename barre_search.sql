-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : ---
-- Généré le :  ven. 24 jan. 2020 à 18:33
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `barre_search`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `art`) VALUES
(1, '<a href=\"/pure/firelink/htmlpharma/neuro.php\">Neurologie</a>', 'Tabel'),
(3, '<a href=\"/pure/firelink/htmlpharma/psy.php\">Psychiatrie</a>', 'Tabel'),
(4, '<a href=\"/pure/firelink/htmlpharma/epilepsie.php\">Epilepsie</a>', 'Explicatif'),
(6, '<a href=\"entaf.php\">Dyskinésie</a>', 'Explicatif'),
(8, '<a href=\"/pure/firelink/htmlpharma/toc.php\">TOC (Troubles Obsessionnels Compulsifs)</a>', 'Explicatif'),
(9, '<a href=\"/pure/firelink/htmlpharma/crisepan.php\">Crise de panique et trouble panique</a>', 'Explicatif'),
(10, '<a href=\"/pure/firelink/htmlpharma/phobia.php\">Troubles phobiques</a>', 'Explicatif'),
(11, '<a href=\"/pure/firelink/htmlpharma/alcool.php\">Alcoolisme</a>', 'Explicatif'),
(12, '<a href=\"/pure/firelink/htmlpharma/encowerni.php\">Encéphalopathie de Wernicke</a>', 'Explicatif'),
(13, '<a href=\"/pure/firelink/htmlpharma/psychokorsa.php\">Psychopolynévrite de Korsakoff</a>', 'Explicatif'),
(14, '<a href=\"/pure/firelink/htmlpharma/mmb.php\">Maladie de Marchiafava-Bignami</a>', 'Explicatif'),
(15, '<a href=\"/pure/firelink/htmlpharma/ampheta.php\">Amphétamines</a>', 'Explicatif'),
(16, '<a href=\"/pure/firelink/htmlpharma/depress.php\">Troubles dépressifs</a>', 'Explicatif'),
(17, '<a href=\"/pure/firelink/htmlpharma/maniaco.php\">Maniaco-dépression (trouble bipolaire)</a>\r\n', 'Explicatif'),
(18, '<a href=\"/pure/firelink/htmlpharma/tbl_bl.php\">Trouble de la personnalité état limite (borderline)</a>\r\n', 'Explicatif'),
(19, '<a href=\"/pure/firelink/htmlpharma/schizo.php\">Schizophrénie</a>', 'Explicatif'),
(20, '<a href=\"/pure/firelink/htmlpharma/schizoaff.php\">Trouble schizo-affectif</a>', 'Explicatif'),
(21, '<a href=\"/pure/firelink/htmlpharma/dysmorpho.php\">Dysmorphophobie\r\n</a>', 'Explicatif'),
(22, '<a href=\"/pure/firelink/htmlpharma/conver.php\">Conversion</a>', 'Explicatif'),
(23, '<a href=\"/pure/firelink/htmlpharma/suicide.php\">Comportement suicidaire</a>', 'Explicatif'),
(24, '<a href=\"/pure/firelink/docs/FichesCerveau-Chapitre14.pdf\">Traumatismes et maladies neurologiques</a>', 'Article pdf'),
(25, '<a href=\"/pure/firelink/docs/semioneuro.pdf\">Sémiologie de neurologie</a>', 'Article pdf'),
(26, '<a href=\"/pure/firelink/docs/25-28_0.pdf\">Encéphalopathie chez le nouveau-né</a>\r\n', 'Article pdf'),
(27, '<a href=\"/pure/firelink/htmlpharma/dysto.php\">Dystonie</a>', 'Explicatif'),
(28, '<a href=\"/pure/firelink/htmlpharma/spas.php\">Spasticité</a>', 'Explicatif'),
(29, '<a href=\"/pure/firelink/htmlpharma/spasdys.php\">Spasticité et dystonie (différentiel)</a>\r\n', 'Explicatif'),
(30, '<a href=\"/pure/firelink/docs/09_r_parkinson.pdf\">Maladie de Parkinson (pdf)</a>', 'Explicatif'),
(31, '<a href=\"https://www.ffn-neurologie.fr/grand-public/maladies/maladie-de-parkinson\">Maladie de Parkinson (Fédération française de neurologie)</a>', 'Association'),
(32, '<a href=\"/pure/firelink/docs/other_dementia.pdf\">Maladie de Creutzfeldt-Jakob</a>', 'Article pdf'),
(33, '<a href=\"/pure/firelink/docs/pnds.pdf\">Maladie de Huntington</a>', 'Article pdf'),
(34, '<a href=\"/pure/firelink/docs/04.pdf\">Maladie à corps de Lewy</a>', 'Article pdf'),
(35, '<a href=\"/pure/firelink/htmlpharma/antico.php\">Syndrome anticholinergique</a>\r\n', 'Explicatif'),
(36, '<a href=\"/pure/firelink/docs/RevNeuropsy.pdf\">Syndrome de conversion (neuro-psy)</a>', 'Article pdf'),
(37, '<a href=\"/pure/firelink/docs/SyndromeFrontal.pdf\">Syndrome frontal</a>\r\n', 'Article pdf'),
(38, '<a href=\"entaf.php\">Syndrome de Gilles de la Tourette</a>', 'Article pdf'),
(39, '<a href=\"/pure/firelink/docs/sdjsr.pdf\">Syndrome des jambes sans repos</a>', 'Article pdf'),
(40, 'PS: Vous n\'êtes pas obligés de taper le mot en entier ;)', 'Ref'),
(41, '<a href=\"/pure/firelink/htmlpharma/idlc.php\">Inhibiteurs de la cholinestérase</a>', 'Explicatif'),
(42, '<a href=\"/pure/firelink/htmlpharma/alzheimer.php\">Alzheimer</a>', 'Explicatif'),
(43, '<a href=\"/pure/firelink/htmlpharma/parkinson.php\">Maladie de Parkinson</a>', 'Explicatif');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
