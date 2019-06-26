
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
