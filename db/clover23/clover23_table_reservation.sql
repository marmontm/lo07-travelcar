
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
