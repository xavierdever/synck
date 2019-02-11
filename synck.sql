-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 11 fév. 2019 à 20:56
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
-- Base de données :  `synck`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `pseudo` varchar(100) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`pseudo`, `nom`, `prenom`, `password`, `email`) VALUES
('Quentin', 'Vilcot', 'Quentin', 'ab4f63f9ac65152575886860dde480a1', 'quentin.vilcot@free.fr'),
('Marce', 'Dour', 'Marcellino', 'ab4f63f9ac65152575886860dde480a1', 'marce.dour@free.fr'),
('Xav', 'Verdun', 'Xavier', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'xav.verdun@free.fr'),
('xavdv', 'de Verdun', 'Xavier', '89ccdd13746b0a476c03605c879d675e', 'xavdeverdun@gmail.com'),
('quentinv', 'vilcot', 'quentin', '422b627cd61aaabfd55faa091e0440f2', 'quentin.v@free.fr'),
('test', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@gmail.com'),
('romainb', 'Bauge', 'Romain', '4a8eb3b1d7dc167ab9fbd481da91e9c8', 'romainb@free.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
