-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 nov. 2018 à 15:17
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ipi_team`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

DROP TABLE IF EXISTS `actualites`;
CREATE TABLE IF NOT EXISTS `actualites` (
  `id_actualite` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(250) NOT NULL,
  `texte` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `fichier` varchar(250) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_actualite`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `id_profil` int(11) NOT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `id_profil` (`id_profil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `id_forum` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `auteur`, `message`, `id_forum`) VALUES
(30, 'troolDuNet', 'blabla', 9),
(31, 'ingrid', 'blabla', 8);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

DROP TABLE IF EXISTS `cotisation`;
CREATE TABLE IF NOT EXISTS `cotisation` (
  `id_cotisation` int(11) NOT NULL AUTO_INCREMENT,
  `montant` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_cotisation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

DROP TABLE IF EXISTS `don`;
CREATE TABLE IF NOT EXISTS `don` (
  `id_don` int(11) NOT NULL AUTO_INCREMENT,
  `montant` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_don`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

DROP TABLE IF EXISTS `forum`;
CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(250) NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `topic` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `date` text NOT NULL,
  PRIMARY KEY (`id_forum`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `forum`
--

INSERT INTO `forum` (`id_forum`, `sujet`, `auteur`, `titre`, `message`, `topic`, `post`, `date`) VALUES
(13, ' besoin d\'aide pour apprendre a faire une requete sql sur symfony 2', 'ingrid', 'Symfony', 'bdj,djEZY', 54, 447, '2018-11-30');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id_notification` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `commentaire` text NOT NULL,
  `id_actualite` int(11) NOT NULL,
  PRIMARY KEY (`id_notification`),
  KEY `id_actualite` (`id_actualite`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `id_paiement` int(11) NOT NULL AUTO_INCREMENT,
  `id_don` int(11) NOT NULL,
  `id_cotisation` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_paiement`),
  KEY `id_don` (`id_don`,`id_cotisation`,`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `adherant` varchar(250) NOT NULL,
  `editeur` varchar(250) NOT NULL,
  `admin` varchar(250) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_profil`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
