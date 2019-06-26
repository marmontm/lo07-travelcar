-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 26 juin 2019 à 20:34
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `clover23`
--
CREATE DATABASE IF NOT EXISTS `clover23` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `clover23`;

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `owner` varchar(30) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(30) NOT NULL,
  `year` year(4) NOT NULL,
  `category` int(11) DEFAULT '0',
  `licencePlate` varchar(12) NOT NULL,
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`id`, `owner`, `brand`, `model`, `year`, `category`, `licencePlate`, `color`) VALUES
(1, 'maxmrmt', 'Tesla', 'Model S 100D', 2018, 2, 'EV222MM', 'White'),
(2, 'maxmrmt', 'Audi', 'Q2', 2017, 5, 'EA312AM', 'Red'),
(3, 'clover', 'Tesla', 'Model X 100D', 2017, 6, 'EV123AD', 'Black');

-- --------------------------------------------------------

--
-- Structure de la table `carCategories`
--

CREATE TABLE `carCategories` (
  `id` int(11) NOT NULL,
  `label` varchar(20) NOT NULL,
  `priceRentDay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `carCategories`
--

INSERT INTO `carCategories` (`id`, `label`, `priceRentDay`) VALUES
(0, 'non-rentable', 0),
(1, 'Hatchback', 40),
(2, 'Sedan', 50),
(3, 'Compact MPV', 60),
(4, 'MPV', 60),
(5, 'SUV', 70),
(6, 'Crossover AWD', 80),
(7, 'Coupe', 50),
(8, 'Convertible', 60),
(9, 'Supercar', 500);

-- --------------------------------------------------------

--
-- Structure de la table `parking`
--

CREATE TABLE `parking` (
  `id` int(11) NOT NULL,
  `site_id` int(11) DEFAULT NULL,
  `label` varchar(50) NOT NULL,
  `address` tinytext NOT NULL,
  `totalSlots` int(11) NOT NULL DEFAULT '0',
  `priceReservDay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `parking`
--

INSERT INTO `parking` (`id`, `site_id`, `label`, `address`, `totalSlots`, `priceReservDay`) VALUES
(1, 1, 'LYS P1 Nord', '69125 Colombier-Saugnieu, France', 10, 24),
(2, 1, 'LYS P2 Sud', '69125 Colombier-Saugnieu, France', 15, 25),
(3, 1, 'VINCI Place Bellecour 1', '33 Place Bellecour, 69002 Lyon, France', 4, 14),
(7, 2, 'CDG 1', 'Roissy-en-France, France', 100, 34),
(8, 2, 'CDG 2', 'Roissy-en-France, France', 100, 34),
(9, 5, 'Valkea Oulu City Centre', 'Oulu, Finland', 20, 20);

-- --------------------------------------------------------

--
-- Structure de la table `rental`
--

CREATE TABLE `rental` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `tenant` varchar(30) NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rental`
--

INSERT INTO `rental` (`id`, `reservation_id`, `tenant`, `dateStart`, `dateEnd`) VALUES
(1, 3, 'hermione.granger', '2019-07-24', '2019-07-26');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `parking_id` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `parking_id`, `car_id`, `dateStart`, `dateEnd`) VALUES
(1, 1, 1, '2019-07-25', '2019-07-27'),
(2, 1, 1, '2019-07-30', '2019-07-31'),
(3, 1, 3, '2019-07-22', '2019-07-28'),
(4, 1, 3, '2019-07-29', '2019-07-30');

--
-- Déclencheurs `reservation`
--
DELIMITER $$
CREATE TRIGGER `check_available_slot_before_insert_reservation` BEFORE INSERT ON `reservation` FOR EACH ROW BEGIN
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `location` tinytext,
  `area` tinytext NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id`, `label`, `location`, `area`, `type`) VALUES
(1, 'Aéroport Lyon Saint-Exupéry (LYS)', '69125 Colombier-Saugnieu, France', 'Lyon, France', 'airport'),
(2, 'Aéroport Paris Charles-de-Gaulle (CDG)', '95700 Roissy-en-France, France', 'Paris, France', 'airport'),
(3, 'Aéroport Paris Orly (ORY)', '94390 Orly, France', 'Paris, France', 'airport'),
(4, 'Hôtel Imperial Palace Annecy', 'Allée de l\'Impérial, 74000 Annecy, France', 'Annecy, France', 'hotel'),
(5, 'Oulun Lentoasema (OUL)', 'Lentokentäntie 720, 90410 Oulu, Finland', 'Oulu, Finland', 'airport');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `login` varchar(30) NOT NULL,
  `role` varchar(20) DEFAULT 'customer',
  `secret` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `country` varchar(20) NOT NULL,
  `numDrivingLicence` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`login`, `role`, `secret`, `email`, `surname`, `firstname`, `birthdate`, `country`, `numDrivingLicence`) VALUES
('clover', 'customer', '$2y$10$j1tSVzxsX3SAvAMHHzpFm.j4H.5UPPwkmI.Z0m.WFZln1vPzU8Wum', 'clover@maxmr.mt', 'BEVERLY', 'Clover', '2000-01-02', 'US', '2468013579'),
('dmbldr', 'admin', '$2y$10$id8oxF1wYbgSSKuJ0Tx3a.tq2GOKAaDeib78A2.7ZDCf4DUl/.JZu', 'noreply@hogwarts.co.uk', NULL, 'Dumbledore', NULL, 'UK', NULL),
('hermione.granger', 'customer', '$2y$10$jFePDvoDTB81iDIc2w/PrelpowIsIUb0d6XVXoWx7/UPPepAhN5.y', 'hermione.granger@hogwarts.co.uk', 'GRANGER', 'Hermione', '2000-07-07', 'UK', '12345678909876543'),
('maxmrmt', 'customer', '$2y$10$1HJ8ZPR1lxKtm7CuqY7SnezRbVa.woCb1WGVc36kFcCWiZaCHLh4K', 'noreply@maxmr.mt', 'MARMONT', 'Maxime', '1990-01-02', 'FR', '012345678901234567');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_car_user_id` (`owner`),
  ADD KEY `fk_car_cat_id` (`category`);

--
-- Index pour la table `carCategories`
--
ALTER TABLE `carCategories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_site_parking_id` (`site_id`);

--
-- Index pour la table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rent_reserv_id` (`reservation_id`),
  ADD KEY `fk_rent_user_id` (`tenant`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reserv_parking_id` (`parking_id`),
  ADD KEY `fk_reserv_car_id` (`car_id`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `carCategories`
--
ALTER TABLE `carCategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `rental`
--
ALTER TABLE `rental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `fk_car_cat_id` FOREIGN KEY (`category`) REFERENCES `carCategories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_car_user_id` FOREIGN KEY (`owner`) REFERENCES `user` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `parking`
--
ALTER TABLE `parking`
  ADD CONSTRAINT `fk_site_parking_id` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `fk_rent_reserv_id` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_rent_user_id` FOREIGN KEY (`tenant`) REFERENCES `user` (`login`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `fk_reserv_car_id` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reserv_parking_id` FOREIGN KEY (`parking_id`) REFERENCES `parking` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
