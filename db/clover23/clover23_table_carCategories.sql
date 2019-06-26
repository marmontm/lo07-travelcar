
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
