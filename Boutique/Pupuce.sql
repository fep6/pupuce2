-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 août 2018 à 07:05
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pupuce`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `clientId` int(11) NOT NULL AUTO_INCREMENT,
  `clientNom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientPrenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientMail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientAdresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientCodePostal` int(5) NOT NULL,
  `clientVille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientDateAnniversaire` date NOT NULL,
  `clientDateCreation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `clientPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`clientId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `commandeId` int(11) NOT NULL AUTO_INCREMENT,
  `commandeNumCommande` int(11) NOT NULL,
  `commandeDateCommande` datetime NOT NULL,
  `commandeDateLivraison` datetime NOT NULL,
  `commandeNumPanier` int(11) NOT NULL,
  PRIMARY KEY (`commandeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `employeId` int(11) NOT NULL AUTO_INCREMENT,
  `employeNom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employePrenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeMail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeAdresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeCodePostal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeVille` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeDateDeNaissance` date NOT NULL,
  `employeNumSecu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeFonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeSalaire` int(11) NOT NULL,
  `employePassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`employeId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `fournisseurId` int(11) NOT NULL AUTO_INCREMENT,
  `fournisseurNom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fournisseurPrenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fournisseurMail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fournisseurAdresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fournisseurCodePostal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fournisseurVille` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fournisseurDateDeNaissance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fournisseurCodeComptable` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`fournisseurId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`fournisseurId`, `fournisseurNom`, `fournisseurPrenom`, `fournisseurMail`, `fournisseurAdresse`, `fournisseurCodePostal`, `fournisseurVille`, `fournisseurDateDeNaissance`, `fournisseurCodeComptable`) VALUES
(1, 'fdgdf', 'dgfdfg', 'dgdf', '13 impasse Fragoanrd', 'dgfdg', 'dgf', 'dfgd', 'dgffdg'),
(2, 'fdgdf', 'dgfdfg', 'dgdf', '13 impasse Fragoanrd', 'dgfdg', 'dgf', 'dfgd', 'dgffdg'),
(3, 'Barland', 'Franck', 'cxw', '13 impasse Fragoanrd', 'wxc', 'cwx', 'wc', 'cwx'),
(4, 'vcxv', 'xvcx', 'xvcx', 'xvc', 'xcvcx', 'xvcx', 'xvcx', 'xvcvx'),
(5, 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxx');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `clientId` int(11) NOT NULL,
  `produitId` int(11) NOT NULL,
  `panierNumPanier` int(11) NOT NULL,
  KEY `fk_client_clientId` (`clientId`),
  KEY `fk_produit_produitId` (`produitId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `produitId` int(11) NOT NULL,
  `produitNom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produitDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produitImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produitPrix` double NOT NULL,
  `produitQuantitéEnStock` int(11) NOT NULL,
  PRIMARY KEY (`produitId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produitfournisseur`
--

DROP TABLE IF EXISTS `produitfournisseur`;
CREATE TABLE IF NOT EXISTS `produitfournisseur` (
  `fournisseurId` int(11) NOT NULL,
  `produitId` int(11) NOT NULL,
  KEY `fournisseurID` (`fournisseurId`),
  KEY `produitID` (`produitId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Users_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Users_Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Users_Login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Users_Mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Users_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`Users_Id`, `Users_Nom`, `Users_Login`, `Users_Mdp`) VALUES
(1, 'Moi', 'rlanney', 'rlanney');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`clientId`) REFERENCES `client` (`clientId`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
