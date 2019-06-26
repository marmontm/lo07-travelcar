
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
