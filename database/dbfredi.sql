-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 06 Mai 2017 à 23:13
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

CREATE TABLE `adherent` (
  `id_pers` int(5) NOT NULL,
  `id_adhe` int(5) NOT NULL,
  `licence_adhe` varchar(30) NOT NULL,
  `id_assoc` int(11) NOT NULL,
  `id_demand` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `id_assoc` int(5) NOT NULL,
  `nom_assoc` varchar(50) NOT NULL,
  `adr_assoc` varchar(200) NOT NULL,
  `cp_assoc` varchar(5) NOT NULL,
  `ville_assoc` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `bordereau`
--

CREATE TABLE `bordereau` (
  `id_bord` int(5) NOT NULL,
  `date_bord` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_demand` int(5) NOT NULL,
  `total_bord` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demandeur`
--

CREATE TABLE `demandeur` (
  `id_pers` int(5) NOT NULL,
  `id_demand` int(5) NOT NULL,
  `adr_demand` varchar(200) NOT NULL,
  `cp_demand` varchar(5) NOT NULL,
  `ville_demand` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_frais`
--

CREATE TABLE `ligne_frais` (
  `id_bord` int(11) NOT NULL,
  `id_ligne` int(10) NOT NULL,
  `motif` varchar(50) NOT NULL,
  `cp_ville_depart` varchar(5) NOT NULL,
  `cp_ville_arrive` varchar(5) NOT NULL,
  `km_ligne` int(5) NOT NULL,
  `cout_trajet` float NOT NULL,
  `peage` float NOT NULL,
  `repas` float NOT NULL,
  `hebergement` float NOT NULL,
  `total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_pers` int(5) NOT NULL,
  `nom_pers` varchar(50) NOT NULL,
  `prenom_pers` varchar(50) NOT NULL,
  `dateNaiss_pers` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `cp_ville` varchar(5) NOT NULL,
  `nom_ville` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  MODIFY `id_adhe` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `association`
--
ALTER TABLE `association`
  MODIFY `id_assoc` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `bordereau`
--
ALTER TABLE `bordereau`
  MODIFY `id_bord` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ligne_frais`
--
ALTER TABLE `ligne_frais`
  MODIFY `id_ligne` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_pers` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
