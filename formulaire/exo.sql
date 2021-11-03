-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 03 nov. 2021 à 09:19
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exo`
--

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `password` varchar(256) NOT NULL,
  `login` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `password`, `login`) VALUES
(4, '$2y$10$QyRW5TGtNbv951tt0CofmOtC9k5NdZ6VWkgYOVk95BL0hGWjzjQ1C', 'admin'),
(5, '$2y$10$pRxYKZvlba/Ko2fgeno2wOaqnClv3s8utDIUS1FpejbSLFGPPeIMm', 'w'),
(6, '$2y$10$j17Ane7UP84JJ643CxPsb.GjJnYfBb9MOGuCwNtu8Rr.SkKhqg5DS', 'aa'),
(7, '$2y$10$EBvkd8fxPhPYvzKee4jkROUk4JothRqmm4HTo1mpSGnaOmReLRVU2', 'fanny'),
(8, '$2y$10$7SfJHU8l5cNACygYyhs6nOwzBxlLK58Jr1RIbXLUEgVxUeOMP0ZV.', 'aze'),
(9, '$2y$10$ARORNJ1QYHSaeFOs.lDW7O0Ntbz0AyXmNIjPETSooE8fb03O4B44G', '11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
