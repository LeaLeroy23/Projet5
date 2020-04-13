-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 avr. 2020 à 15:01
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `function` varchar(45) DEFAULT NULL,
  `autorisation` varchar(20) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `token` varchar(45) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `firstname`, `lastname`, `phone`, `email`, `function`, `autorisation`, `description`, `avatar`, `password`, `token`, `status`, `created_at`) VALUES
(1, 'lea', 'leroy', '06', 'lea.leroy23@gmail.com', 'dev', 'super', 'desc', NULL, 'admin', NULL, 99, '2020-04-11 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `charge_frequency`
--

DROP TABLE IF EXISTS `charge_frequency`;
CREATE TABLE IF NOT EXISTS `charge_frequency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frequency` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `energy`
--

DROP TABLE IF EXISTS `energy`;
CREATE TABLE IF NOT EXISTS `energy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `energy_diagnostic` varchar(45) NOT NULL,
  `level_energy_diagnostic` varchar(45) NOT NULL,
  `level_climat_diagnostic` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `estate`
--

DROP TABLE IF EXISTS `estate`;
CREATE TABLE IF NOT EXISTS `estate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `excerpt` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `area` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `parking` tinyint(4) NOT NULL,
  `parking_type` varchar(45) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `outside` tinyint(4) NOT NULL,
  `outside_area` int(11) NOT NULL,
  `floor` int(11) NOT NULL,
  `charge_price` float NOT NULL,
  `price` float NOT NULL,
  `fees` int(11) NOT NULL,
  `available` datetime DEFAULT NULL,
  `building_year` int(11) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `balcony` tinyint(4) NOT NULL,
  `terrace` int(11) NOT NULL,
  `convertible_attic` tinyint(4) NOT NULL,
  `charge_frequency_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estate_type_idx` (`type_id`),
  KEY `fk_estate_category1_idx` (`category_id`),
  KEY `fk_estate_agent1_idx` (`agent_id`),
  KEY `fk_estate_charge_frequency1_idx` (`charge_frequency_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `estate_has_energy`
--

DROP TABLE IF EXISTS `estate_has_energy`;
CREATE TABLE IF NOT EXISTS `estate_has_energy` (
  `estate_id` int(11) NOT NULL,
  `energy_id` int(11) NOT NULL,
  PRIMARY KEY (`estate_id`,`energy_id`),
  KEY `fk_estate_has_energy_energy1_idx` (`energy_id`),
  KEY `fk_estate_has_energy_estate1_idx` (`estate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `estate_id` int(11) NOT NULL,
  `default` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`estate_id`),
  KEY `fk_picture_estate1_idx` (`estate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estate_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`estate_id`),
  KEY `fk_heandline_annoncement_estate1_idx` (`estate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_UNIQUE` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `estate`
--
ALTER TABLE `estate`
  ADD CONSTRAINT `fk_estate_agent1` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estate_category1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estate_charge_frequency1` FOREIGN KEY (`charge_frequency_id`) REFERENCES `charge_frequency` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estate_type` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `estate_has_energy`
--
ALTER TABLE `estate_has_energy`
  ADD CONSTRAINT `fk_estate_has_energy_energy1` FOREIGN KEY (`energy_id`) REFERENCES `energy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estate_has_energy_estate1` FOREIGN KEY (`estate_id`) REFERENCES `estate` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `fk_picture_estate1` FOREIGN KEY (`estate_id`) REFERENCES `estate` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `slider`
--
ALTER TABLE `slider`
  ADD CONSTRAINT `fk_heandline_annoncement_estate1` FOREIGN KEY (`estate_id`) REFERENCES `estate` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
