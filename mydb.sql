-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 juil. 2020 à 09:47
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
  `description` text DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `password` varchar(70) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `firstname`, `lastname`, `phone`, `email`, `function`, `description`, `avatar`, `password`, `status`, `created_at`) VALUES
(3, 'Christophe', 'Gilles', '06 00 00 00 00', 'gls.christophe@icloud.com', 'Directeur', '', '5efdd15591142.jpg', '$2y$10$QukAbH4gjoolzKkvwcL25eBXKLcg0MkWYtdBu7zCCD7UdoKX9MyB.', 80, '2020-04-24 12:55:43'),
(17, 'Lea', 'Leroy', '06 09 93 59 67', 'lea.leroy23@gmail.com', 'dev', 'je suis la développeuse web du projet Hestia', '5f0b034fd9d8e.jpg', '$2y$10$UB2e3gxUUaQaYiqFa/x6IetrHHt46TxwdLSwaEKAihfgDOGBMobJ6', 99, '2020-05-08 13:44:21'),
(18, 'Jean', 'Valjean', '06 24 02 87 94', 'jean.valjean@hestia.com', 'Transactionnaire', 'Je ne suis pas natif de la région. Je ne pensais pas devenir transactionnaire dans un entreprise comme Hestia. Mais je suis fière de ce que je fais et je me lève chaque matin en ayant le sourire aux lèvres. Mon métier consiste à trouver pour chaque personne le bien de ses rêves. Je suis comme le génie dans la lampe. J’exhausse les vœux.', '5efdc9b92b365.jpg', '$2y$10$dQtdbAdjde1izHK50mTRie.L3PJwzLR9bVEDlUteoqyYNvsONCcA.', 50, '2020-06-12 14:06:42'),
(19, 'Dorian', 'Gray', '06 89 54 55 63', 'dorian.gray@hestia.com', 'Transactionnaire', 'Je ne suis pas du coin en réalité je viens d\'ireland. Quand je suis arrivé j\'espérais trouver un poste dans un journal local mais j\'ai rencontré Jean et je suis devenu transactionnaire dans un entreprise chez Hestia. Mais je suis fière de ce que je fais et je me lève chaque matin en ayant le sourire aux lèvres. Mon métier consiste à trouver pour chaque personne le bien de ses rêves. Je suis comme le génie dans la lampe. J’exhausse les vœux.', '5efdcc94cf7d1.jpg', '$2y$10$IRvvx4suB7xS9LJrGzx70.6BJvkBqw39L1reCeBpvV39T6AdgbWrm', 50, '2020-06-16 12:20:37'),
(20, 'Irène', 'Adler', '06 58 78 95 45', 'irene.adler@hestia.com', 'Gestionnaire', 'Originaire de Londres je connais très le type de clientèle anglosaxone. De ce fait je connais les différents types de taxation pour l’Angleterre mais aussi les Etats-unis et les pays nordique comme la suède et le danemark. Je suis donc la mieux placé pour m\'occuper du patrimoine de tous les ressortissants étranger.', '5efdcea0a6f18.jpg', '$2y$10$QjjrLZ7XwlDilg6BfoBiCu1JXMQA.AJsTgQkr/UBIn0DJmi/J/Yr.', 50, '2020-06-16 12:23:06'),
(26, 'Eurus', 'Holmes', '07 85 95 74 85', 'eurus.holmes@hestia.com', 'Gestionnaire', 'Je suis dans le métier depuis une dizaine années. Mes missions principales sont de trouver des locataires, gérer les travaux quand il y en a, m’occuper des différents impôts et taxes liées au patrimoine cela peut même allée jusqu’à participer aux assemblées général pour les propriétaires. Mon objectif est de permettre aux propriétaires de vivre sans ce soucier des problèmes lié à la gestion de leurs biens. Et de leurs permettent d’accroitre votre patrimoine en toute sérénité.', '5efcad903c6be.jpg', '$2y$10$a8yMG1o8uDbOlRBFAFn2vukUP8zjuL2ok8fOwBDxtV2jXDF7IUF4G', 50, '2020-07-01 15:36:48'),
(27, 'Bruce', 'Waynes', '07 55 85 65 28', 'bruce.wayne@hestia.com', 'Apporteur d\'affaires', 'J\'aide l\'entreprise Hestia à trouver des nouveaux clients et à vendre des produits spécifique', '5efde850f231c.jpg', '$2y$10$V7kXb0H5MeDtF6bDuXbe3.vNqDk/7O8lKQjoweg6tsgkoY7WPbEJ2', 50, '2020-07-02 13:59:44');

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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(24, 'Location'),
(26, 'Location Etudiante'),
(25, 'Location Saisonnière'),
(21, 'Vente'),
(65, 'Viager');

-- --------------------------------------------------------

--
-- Structure de la table `charge_frequency`
--

DROP TABLE IF EXISTS `charge_frequency`;
CREATE TABLE IF NOT EXISTS `charge_frequency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `frequency` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `charge_frequency`
--

INSERT INTO `charge_frequency` (`id`, `frequency`) VALUES
(3, 'Trimestriel'),
(4, 'Annuel'),
(5, 'Semestriel'),
(6, 'Mensuel');

-- --------------------------------------------------------

--
-- Structure de la table `energy`
--

DROP TABLE IF EXISTS `energy`;
CREATE TABLE IF NOT EXISTS `energy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `energy` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `energy`
--

INSERT INTO `energy` (`id`, `energy`) VALUES
(1, 'gaz'),
(3, 'fioul'),
(4, 'electricite'),
(5, 'Aucune');

-- --------------------------------------------------------

--
-- Structure de la table `estate`
--

DROP TABLE IF EXISTS `estate`;
CREATE TABLE IF NOT EXISTS `estate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `floor` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `convertible_attic` tinyint(4) DEFAULT NULL,
  `outside` varchar(50) NOT NULL,
  `outside_area` int(11) DEFAULT NULL,
  `parking` tinyint(4) NOT NULL,
  `parking_type` varchar(45) DEFAULT NULL,
  `energy_id` int(11) NOT NULL,
  `level_energy_diagnostic` varchar(20) DEFAULT NULL,
  `level_climat_diagnostic` varchar(20) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `building_year` int(4) NOT NULL,
  `excerpt` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `picture_url` varchar(255) DEFAULT NULL,
  `charge_price` float DEFAULT NULL,
  `charge_frequency_id` int(11) DEFAULT NULL,
  `price` float NOT NULL,
  `fees` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `agent_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_estate_type_idx` (`type_id`),
  KEY `fk_estate_category1_idx` (`category_id`),
  KEY `fk_estate_agent1_idx` (`agent_id`),
  KEY `fk_estate_charge_frequency1_idx` (`charge_frequency_id`),
  KEY `energy_id` (`energy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `estate`
--

INSERT INTO `estate` (`id`, `type_id`, `category_id`, `title`, `floor`, `area`, `rooms`, `bedrooms`, `bathrooms`, `convertible_attic`, `outside`, `outside_area`, `parking`, `parking_type`, `energy_id`, `level_energy_diagnostic`, `level_climat_diagnostic`, `city`, `building_year`, `excerpt`, `description`, `picture_url`, `charge_price`, `charge_frequency_id`, `price`, `fees`, `created_at`, `agent_id`, `status`) VALUES
(4, 9, 65, 'Jolie maison de compagne', 0, 150, 4, 3, 2, 0, 'jardin', 200, 1, '', 1, '331 à 450 F', '331 à 450 F', 'cagnes sur mer', 1920, 'Belle maison de campagne à rénové', 'proche de cagnes sur mer nous vous proposons une maison de campagne en résidence secondaire ou première avec un magnifique jardin avec vue sur la mer', '5f072784ed550.jpg', 1500, 4, 500000, 2000, '2020-05-14 00:00:00', 17, 1),
(7, 8, 24, 'garage en sous-sol centre ville', -2, 9, 0, 0, 0, 0, 'Pas d\'extérieur', 0, 1, 'garage', 0, NULL, NULL, '6000', 1980, 'courte description', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '5ed8b88b595cd.jpg', 50, 4, 105, 105, '2020-06-04 00:00:00', 17, 0),
(8, 11, 24, 'Box en plein centre ville de Nice une place de choix', -2, 9, 1, 0, 0, 0, 'Pas d\'extérieur', 0, 1, 'box', 1, '', '', '', 1977, 'Box de 9m2 au coeur de la ville de nice', 'Cet emplacement est accessible facilement juste après la deuxième descente de la rampe. De plus le bien ce trouve proche de la place massena en plein centre ville de nice', '5f05c7434c2e7.jpg', 50, 4, 130, 130, '2020-06-22 00:00:00', 19, 1),
(9, 13, 21, 'Magnifique péniche typique de la seine', 2, 125, 3, 2, 1, 0, 'terrasse', 30, 1, 'parking', 3, '151 à 230 D', '231 à 330 E', 'paris', 1975, 'Très jolie péniche à moderniser sur les quais de seine', 'Cette péniche à besoin d\'être revue au gout du jour mais sa structure est seine et ne nécessite pas de travaux particulier. Il est situé proche du quai Branly et pourra stationner n\'importe ou le long de la seine.', '5ef1ac0d29cc4.jpeg', 150, 6, 650000, 15000, '2020-06-23 00:00:00', 20, 1),
(10, 8, 26, 'Petit 2 pièce proche de la fac de lettre', 4, 35, 2, 1, 1, 1, 'balcon', 5, 0, 'parking', 4, '91 à 150 C', '151 à 230 D', 'Rouen', 1985, '2 pièces remis au gout du jour parfait pour un étudiant ou un couple d\'étudiant', 'Location étudiante de septembre à juin. Jolie 2 pièces proche de la faculté de lettre de rouen. Refait à neuf au gout du jour. Comprennent des combles qui peuvent être aménagé en mezzanine si souhaité. L\'appartement possède un balcon orienté à l\'est ce qui permet d\'avoir du soleil le matin.', '5ef1af1f8356b.jpeg', 35, 6, 550, 500, '2020-06-23 00:00:00', 20, 1),
(11, 9, 65, 'Jolie maison de campagne en viager', 1, 150, 4, 3, 2, 0, 'jardin', 300, 1, 'parking', 1, '91 à 150 C', '151 à 230 D', 'Cagnes-sur-mer', 1956, 'Maison de campagne en viager typique de la région avec un grand jardin et vue sur mer', 'Couple de personnes agés souhaite mettre en viager sa maison qui est à 10 minutes de cagnes sur mer. La maison est un peu vétuste mais sa structure est saine, elle n\'a besoin que d\'un coup de jeunesse. Possibilité de faire construire une piscine dans le jardin. Le bouquet est de 1350€ par mois + le prix de la maison.', '5f081ca5de92f.jpg', 0, NULL, 350000, 7500, '2020-06-23 00:00:00', 20, 1),
(12, 8, 24, 'Loft d\'artiste spacieux dans le vieille antibes', 4, 85, 1, 1, 1, 0, 'Pas d\'extérieur', 0, 0, 'parking', 1, '151 à 230 D', '91 à 150 C', 'Antibes', 1985, 'Très beau loft proche du centre d\'antibes parfait pour un artiste', 'Dans un immeuble art déco très beau loft spacieux comprenant une chambre ouverte et une salle de bain. De grande verrières permettent un fort apport de lumière.', '5ef1c13c85151.jpg', 56, 6, 1350, 1350, '2020-06-23 00:00:00', 20, 1),
(13, 9, 25, 'Belle maison de ville parfaite pour se promener', 0, 69, 3, 2, 1, 0, 'terrasse', 50, 1, 'parking', 4, '91 à 150 C', '51 à 90 B', 'Juan-les-pins', 1978, 'Maison de ville sur deux étages idéal pour visiter juan les pins en famille', 'Maison de ville proche de la plage et à deux minutes du centre ville de juan les pins. La maison comprend deux chambres très bien pour une famille de 4 personnes. la location ce fait eu mois.', '5ef1c70f82ad4.jpg', 0, NULL, 980, 980, '2020-06-23 00:00:00', 20, 1),
(14, 19, 21, 'Garage a vendre dans une résidence surveillé', -3, 9, 1, 0, 0, 0, 'Pas d\'extérieur', 0, 1, 'garage', 5, 'aucun', 'aucun', 'Lille', 2005, 'Garage en sous sol d\'une résidence sécurisé', 'Garage en sous sol d\'une résidence sécurisé tout type de véhicule. ', '5ef1c9cc7c6d4.jpg', 90, 4, 25000, 5000, '2020-06-23 00:00:00', 18, 1),
(15, 9, 21, 'Maison de banlieue avec un jolie terrain', 0, 95, 4, 3, 2, 1, 'jardin', 200, 1, 'garage', 3, '91 à 150 C', '51 à 90 B', 'Vidauban', 2010, 'Maison de banlieue à 10 minutes de la ville avec un magnifique jardin', 'Jolie Maison de banlieue à 10 minutes de la ville et très proche de l\'entrée de l\'autoroute avec un magnifique jardin pouvant accueillir une piscine et des éléments de jardin', '5ef1ce3b0184e.jpg', 600, 3, 380000, 3800, '2020-06-23 00:00:00', 18, 1),
(16, 12, 21, 'Parking en rez de chaussé dans une résidence de luxe', 0, 9, 1, 0, 0, 0, 'Pas d\'extérieur', 0, 1, 'parking', 5, 'aucun', 'aucun', 'strasbourg', 2003, 'Parking en rez de chaussé dans une résidence de luxe', 'Parking en rez de chaussé dans une résidence de luxe', '5ef1d46beeef3.jpg', 90, 4, 15000, 1500, '2020-06-23 00:00:00', 18, 1);

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

DROP TABLE IF EXISTS `picture`;
CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) DEFAULT NULL,
  `estate_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`estate_id`),
  KEY `fk_picture_estate1_idx` (`estate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `picture`
--

INSERT INTO `picture` (`id`, `file`, `estate_id`) VALUES
(11, '5ed2c760607fb.jpg', 4),
(16, '5ed4c965448e4.png', 4),
(30, '5ed6129824c0d.png', 4),
(59, 'Création-site-web.png', 14),
(60, 'building-4885295_1921.jpg', 14),
(61, '63d53ac4584c2e86052a2d5c11fb311fbf2c13f6.jpg', 16),
(74, '3257950035e5d4354267c06.48191533_1920.jpg', 15),
(77, '5f057ffd72437.jpg', 15),
(78, '5f0583051de5e.jpg', 15),
(80, '5f0584b74596f.PNG', 15),
(82, '5f0588a980645.jpg', 15);

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(8, 'Appartement'),
(11, 'Box'),
(19, 'Garage'),
(9, 'Maison'),
(12, 'Parking'),
(13, 'Peniche');

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
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `fk_picture_estate1` FOREIGN KEY (`estate_id`) REFERENCES `estate` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
