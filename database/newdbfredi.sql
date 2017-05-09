-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 09 Mai 2017 à 02:42
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbfredi`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

DROP TABLE IF EXISTS `adherent`;
CREATE TABLE `adherent` (
  `id_pers` int(5) NOT NULL,
  `id_adhe` int(5) NOT NULL,
  `licence_adhe` varchar(30) NOT NULL,
  `id_assoc` int(11) NOT NULL,
  `id_demand` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adherent`
--

INSERT INTO `adherent` (`id_pers`, `id_adhe`, `licence_adhe`, `id_assoc`, `id_demand`) VALUES
(2, 1, '170540010338', 2, 1),
(3, 2, '17054001340', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE `association` (
  `id_assoc` int(5) NOT NULL,
  `nom_assoc` varchar(50) NOT NULL,
  `adr_assoc` varchar(200) NOT NULL,
  `cp_assoc` varchar(5) NOT NULL,
  `ville_assoc` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `association`
--

INSERT INTO `association` (`id_assoc`, `nom_assoc`, `adr_assoc`, `cp_assoc`, `ville_assoc`) VALUES
(1, 'test', 'une adresse', '12345', 'nul part'),
(2, 'Salle d\'Armes de Villers lès Nancy', '1 rue Rodin', '54600', 'Villers lès Nancy');

-- --------------------------------------------------------

--
-- Structure de la table `bordereau`
--

DROP TABLE IF EXISTS `bordereau`;
CREATE TABLE `bordereau` (
  `id_bord` varchar(50) NOT NULL,
  `date_bord` date DEFAULT NULL,
  `id_demand` int(5) NOT NULL,
  `total_bord` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `bordereau`
--

INSERT INTO `bordereau` (`id_bord`, `date_bord`, `id_demand`, `total_bord`) VALUES
('1', '2017-05-06', 1, NULL),
('201705081', '2017-05-08', 1, NULL),
('2', '2017-05-08', 1, NULL),
('201705091', '2017-05-08', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

DROP TABLE IF EXISTS `demandeur`;
CREATE TABLE `demandeur` (
  `id_pers` int(5) NOT NULL,
  `id_demand` int(5) NOT NULL,
  `email_demand` varchar(150) NOT NULL,
  `password_demand` varchar(200) NOT NULL,
  `adr_demand` varchar(200) NOT NULL,
  `cp_demand` varchar(5) NOT NULL,
  `ville_demand` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `demandeur`
--

INSERT INTO `demandeur` (`id_pers`, `id_demand`, `email_demand`, `password_demand`, `adr_demand`, `cp_demand`, `ville_demand`) VALUES
(1, 1, 'mercan.brandon@outlook.fr', '22021997', 'maisoncelle', '97131', 'PETIT-CANAL'),
(7, 2, 'lise.laffont@orange.fr', 'admin', '', '97107', 'Capesterre-Belle-Eau'),
(6, 3, 'chb.baudet@gmail.com', 'admin', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_frais`
--

DROP TABLE IF EXISTS `ligne_frais`;
CREATE TABLE `ligne_frais` (
  `id_bord` int(11) NOT NULL,
  `id_ligne` int(10) NOT NULL,
  `date_ligne` date DEFAULT NULL,
  `motif` varchar(50) NOT NULL,
  `cp_ville_depart` varchar(50) NOT NULL,
  `cp_ville_arrive` varchar(50) NOT NULL,
  `km_ligne` int(5) NOT NULL,
  `cout_trajet` float NOT NULL,
  `peage` float NOT NULL,
  `repas` float NOT NULL,
  `hebergement` float NOT NULL,
  `total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ligne_frais`
--

INSERT INTO `ligne_frais` (`id_bord`, `id_ligne`, `date_ligne`, `motif`, `cp_ville_depart`, `cp_ville_arrive`, `km_ligne`, `cout_trajet`, `peage`, `repas`, `hebergement`, `total`) VALUES
(1, 1, NULL, 'un motif', '97129', '97131', 20, 5, 0, 10, 0, 15),
(123456, 2, NULL, '$motif', '97123', '97123', 9, 8, 8, 9, 7, 96),
(201705091, 3, NULL, 'RÃ©union', 'LAM', 'PTC', 22, 123, 321, 147, 963, 1554),
(201705091, 4, NULL, 'RÃ©union', 'LAM', 'PTC', 22, 123, 321, 147, 963, 1554),
(201705091, 5, NULL, 'RÃ©union', 'LAM', 'PTC', 22, 123, 321, 147, 963, 1554),
(201705091, 6, NULL, 'RÃ©union', 'LAM', 'PTC', 22, 123, 321, 147, 963, 1554),
(201705091, 7, NULL, 'RÃ©union', 'LAM', 'PTC', 22, 123, 321, 147, 963, 1554),
(201705091, 8, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 9, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 10, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 11, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 12, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 13, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 14, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 15, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 16, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 17, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205),
(201705091, 18, '2017-05-08', 'RÃ©union', 'PETIT-CANAL', 'LAMENTIN', 33, 36, 74, 95, 0, 205);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE `personne` (
  `id_pers` int(5) NOT NULL,
  `nom_pers` varchar(50) NOT NULL,
  `prenom_pers` varchar(50) NOT NULL,
  `dateNaiss_pers` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id_pers`, `nom_pers`, `prenom_pers`, `dateNaiss_pers`) VALUES
(1, 'mercan', 'brandon', '1997-02-22'),
(2, 'Berbier', 'Théo', NULL),
(3, 'Berbier', 'Lucille', NULL),
(7, 'LAFFONT', 'Lise', NULL),
(6, 'BAUDET', 'Christine', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE `ville` (
  `cp_ville` varchar(5) NOT NULL,
  `nom_ville` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`cp_ville`, `nom_ville`) VALUES
('97131', 'PETIT-CANAL'),
('97129', 'LAMENTIN'),
('54600', 'Villers lès Nancy');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`id_adhe`);

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`id_assoc`);

--
-- Index pour la table `bordereau`
--
ALTER TABLE `bordereau`
  ADD PRIMARY KEY (`id_bord`);

--
-- Index pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD PRIMARY KEY (`id_demand`);

--
-- Index pour la table `ligne_frais`
--
ALTER TABLE `ligne_frais`
  ADD PRIMARY KEY (`id_ligne`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_pers`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`cp_ville`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `id_adhe` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `association`
--
ALTER TABLE `association`
  MODIFY `id_assoc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `id_demand` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `ligne_frais`
--
ALTER TABLE `ligne_frais`
  MODIFY `id_ligne` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_pers` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
