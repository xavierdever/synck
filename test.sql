-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 11 avr. 2019 à 15:27
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
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `f_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `f_filename` varchar(255) DEFAULT NULL,
  `f_filesize` int(10) UNSIGNED DEFAULT '0',
  `f_date` datetime DEFAULT NULL,
  `f_type` varchar(10) DEFAULT NULL,
  `f_owner_pseudo` varchar(100) NOT NULL,
  PRIMARY KEY (`f_id`),
  UNIQUE KEY `f_id` (`f_id`),
  KEY `f_owner_pseudo` (`f_owner_pseudo`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `files`
--

INSERT INTO `files` (`f_id`, `f_filename`, `f_filesize`, `f_date`, `f_type`, `f_owner_pseudo`) VALUES
(1, 'Passeport Quentin.pdf', 215543, '2019-03-01 10:38:18', 'pdf', 'quentin'),
(2, 'bul-DUT_Informatique_semestre_1-3_DE_VERDUN.pdf', 631353, '2019-04-08 19:31:41', 'pdf', 'xavdv'),
(3, 'bul-DUT_Informatique_semestre_1-3_DE_VERDUN.pdf', 631353, '2019-04-08 19:31:53', 'pdf', 'xavdv'),
(4, 'Dossier de candidature L3 2019 P5.pdf', 1467057, '2019-04-08 20:12:40', 'pdf', 'xavdv'),
(5, 'bul-DUT_Informatique_semestre_1-3_DE_VERDUN.pdf', 631353, '2019-04-08 20:16:11', 'pdf', 'xavdv'),
(6, 'Dossier de candidature L3 2019.pdf', 434903, '2019-04-09 18:58:44', 'pdf', 'xavdv'),
(7, 'CV_Xavier_de_Verdun.pdf', 1875019, '2019-04-10 20:32:56', 'pdf', 'xavdv'),
(8, 'CV_Xavier_de_Verdun.pdf', 1875019, '2019-04-10 20:32:59', 'pdf', 'xavdv'),
(9, 'bul-DUT_Informatique_semestre_3-2019-02-06-DE_VERDUN.pdf', 763553, '2019-04-10 22:09:13', 'pdf', 'xavdv'),
(10, 'certificatScolarite_DE_VERDUN_XAVIER_03_06_13_21_05.pdf', 902204, '2019-04-10 22:11:29', 'pdf', 'xavdv'),
(11, 'Dossier de candidature L3 2019.pdf', 434903, '2019-04-10 22:14:25', 'pdf', 'xavdv');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `pseudo` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`pseudo`, `first_name`, `last_name`, `password`, `email`) VALUES
('xavdv', 'xavdv', 'xavdv', '$2y$10$BLm/lXNvLK0zUx0t35pXc.oZ1Q/Df.PMUg8J3UOj.ckG3W/A8uSYO', 'xavierdever@hotmail.fr'),
('mdour', 'mdour', 'mdour', '$2y$10$tGxG0EvxLkp5iQwFUACk1O6MtIxhZe/7/Ig7ZgnOe/97sokZPe9Pe', 'mdour@outlook.fr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
