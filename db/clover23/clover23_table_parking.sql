
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
