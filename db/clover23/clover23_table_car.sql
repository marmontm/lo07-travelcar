
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
