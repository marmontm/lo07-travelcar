
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
