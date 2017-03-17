-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 17 Mars 2017 à 16:17
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ppe_4_fredi`
--

-- --------------------------------------------------------

--
-- Structure de la table `adherent`
--

CREATE TABLE `adherent` (
  `numero-licence` int(11) NOT NULL,
  `nom_Adh` varchar(150) NOT NULL,
  `prenom_Adh` varchar(150) NOT NULL,
  `num-ligue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `demandeurs`
--

CREATE TABLE `demandeurs` (
  `adresse-mail` varchar(150) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `rue` varchar(150) NOT NULL,
  `cp` char(5) NOT NULL,
  `ville` varchar(150) NOT NULL,
  `num-recu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lien`
--

CREATE TABLE `lien` (
  `num-licence` int(11) NOT NULL,
  `adresse-mail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lignes_frais`
--

CREATE TABLE `lignes_frais` (
  `adresse-mail` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `motif` varchar(150) NOT NULL,
  `trajet` varchar(150) NOT NULL,
  `km` int(11) NOT NULL,
  `cout-peage` int(11) NOT NULL,
  `cout-repas` int(11) NOT NULL,
  `cout-hebergement` int(11) NOT NULL,
  `km-validé` int(11) NOT NULL,
  `peage-validé` int(11) NOT NULL,
  `repas-validé` int(11) NOT NULL,
  `hebergement-validé` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

CREATE TABLE `ligue` (
  `numéro` int(11) NOT NULL,
  `nom_Ligue` varchar(150) NOT NULL,
  `sigle` varchar(150) NOT NULL,
  `président` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `motifs`
--

CREATE TABLE `motifs` (
  `libelle` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD PRIMARY KEY (`numero-licence`),
  ADD KEY `num-ligue` (`num-ligue`);

--
-- Index pour la table `demandeurs`
--
ALTER TABLE `demandeurs`
  ADD PRIMARY KEY (`adresse-mail`);

--
-- Index pour la table `lien`
--
ALTER TABLE `lien`
  ADD PRIMARY KEY (`num-licence`),
  ADD KEY `adresse-mail` (`adresse-mail`);

--
-- Index pour la table `lignes_frais`
--
ALTER TABLE `lignes_frais`
  ADD PRIMARY KEY (`date`),
  ADD UNIQUE KEY `motif` (`motif`),
  ADD KEY `adresse-mail` (`adresse-mail`),
  ADD KEY `adresse-mail_2` (`adresse-mail`);

--
-- Index pour la table `ligue`
--
ALTER TABLE `ligue`
  ADD PRIMARY KEY (`numéro`);

--
-- Index pour la table `motifs`
--
ALTER TABLE `motifs`
  ADD PRIMARY KEY (`libelle`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `adherent`
--
ALTER TABLE `adherent`
  ADD CONSTRAINT `num-ligue` FOREIGN KEY (`num-ligue`) REFERENCES `ligue` (`numéro`);

--
-- Contraintes pour la table `lignes_frais`
--
ALTER TABLE `lignes_frais`
  ADD CONSTRAINT `motif` FOREIGN KEY (`motif`) REFERENCES `motifs` (`libelle`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
