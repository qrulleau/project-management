-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 oct. 2022 à 14:28
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project_management`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `host_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `email`, `phone_number`, `role`, `host_id`, `customer_id`) VALUES
(1, 'jacquelotjeff@gmail.com', '0600000000', '', 1, 1),
(2, '', '0611111111', 'user', 2, 2),
(3, 'email3', '0622222222', 'user', 3, 2),
(4, 'email4', '0633333333', 'user', 4, 4),
(5, 'email5', '0644444444', 'user', 3, 1),
(6, 'email6', '0655555555', 'user', 7, 6),
(7, 'email7', '0666666666', 'user', 7, 7),
(8, 'email8', '0677777777', 'user', 4, 3),
(9, 'email9', '0688888888', 'user', 10, 10),
(10, 'email10', '0699999999', 'user', 10, 10);

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`id`, `code`, `name`, `notes`) VALUES
(1, "CUST_SALON_DE_L'AGRICULTURE", "Salon de l'agriculture", "Client : Salon de l'Agriculture"),
(2, "CUST_SAINT-GOBAIN", "Saint-Gobain", "Client : Saint-Gobain"),
(3, "CUST_KWS", "KWS", "Client : KWS"),
(4, "CUST_POCLAIN_HYDRAULICS", "Poclain Hydraulics", "Client : Poclain_Hydraulics"),
(5, "CUST_PMU", "PMU", "Client : PMU"),
(6, "CUST_PHILIPS", "Philips", "Client : Philips"),
(7, "CUST_ORPI", "Orpi", "Client : Orpi"),
(8, "CUST_MINISTÈRE_DE_L'INTERIEUR", "Ministère de l'Emploi et de la Solidarité", "Client : Ministère de l'Intérieur"),
(9, "CUST_INTERMARCHÉ", "Intermarché", "Client : Intermarché"),
(10, "CUST_IPSEC", "IPSEC", "Client : IPSEC");

-- --------------------------------------------------------

--
-- Structure de la table `environment`
--

CREATE TABLE `environment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `ssh_port` int(6) NOT NULL,
  `ssh_username` varchar(255) NOT NULL,
  `phpmyadmin_link` varchar(255) NOT NULL,
  `ip_restriction` tinyint(4) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `environment`
--

INSERT INTO `environment` (`id`, `name`, `link`, `ip_address`, `ssh_port`, `ssh_username`, `phpmyadmin_link`, `ip_restriction`, `project_id`) VALUES
(1, 'name_environment1', 'link1', 'ip_address1', 1, 'ssh_username1', 'phpmyadmin_link1', 0, 1),
(2, 'name_environment2', 'link2', 'ip_address2', 2, 'ssh_username2', 'phpmyadmin_link2', 0, 2),
(3, 'name_environment3', 'link3', 'ip_address3', 3, 'ssh_username3', 'phpmyadmin_link3', 0, 3),
(4, 'name_environment4', 'link4', 'ip_address4', 4, 'ssh_username4', 'phpmyadmin_link4', 0, 4),
(5, 'name_environment5', 'link5', 'ip_address5', 5, 'ssh_username5', 'phpmyadmin_link5', 0, 5),
(6, 'name_environment6', 'link6', 'ip_address6', 6, 'ssh_username6', 'phpmyadmin_link6', 1, 6),
(7, 'name_environment7', 'link7', 'ip_address7', 7, 'ssh_username7', 'phpmyadmin_link7', 1, 7),
(8, 'name_environment8', 'link8', 'ip_address8', 8, 'ssh_username8', 'phpmyadmin_link8', 1, 8),
(9, 'name_environment9', 'link9', 'ip_address9', 9, 'ssh_username9', 'phpmyadmin_link9', 1, 9),
(10, 'name_environment10', 'link10', 'ip_address10', 10, 'ssh_username10', 'phpmyadmin_link10', 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `host`
--

CREATE TABLE `host` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `host`
--

INSERT INTO `host` (`id`, `code`, `name`, `notes`) VALUES
(1, 'code1', 'name1', 'notes1'),
(2, 'code2', 'name2', 'notes2'),
(3, 'code3', 'name3', 'notes3'),
(4, 'code4', 'name4', 'notes4'),
(5, 'code5', 'name5', 'notes5'),
(6, 'code6', 'name6', 'notes6'),
(7, 'code7', 'name7', 'notes7'),
(8, 'code8', 'name8', 'notes8'),
(9, 'code9', 'name9', 'notes9'),
(10, 'code10', 'name10', 'notes10');

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `lastpass_folder` varchar(255) NOT NULL,
  `link_mock_ups` varchar(255) NOT NULL,
  `managed_server` tinyint(4) NOT NULL,
  `notes` text NOT NULL,
  `host_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `name`, `code`, `lastpass_folder`, `link_mock_ups`, `managed_server`, `notes`, `host_id`, `customer_id`) VALUES
(1, 'name_project1', 'code_project1', 'lastpass_foler1', '0', 0, 'notes_project1', 1, 1),
(2, 'name_project2', 'code_project2', 'lastpass_foler2', '1', 0, 'notes_project2', 2, 2),
(3, 'name_project3', 'code_project3', 'lastpass_foler3', '0', 0, 'notes_project3', 3, 3),
(4, 'name_project4', 'code_project4', 'lastpass_foler4', '1', 0, 'notes_project4', 4, 4),
(5, 'name_project5', 'code_project5', 'lastpass_foler5', '0', 0, 'notes_project5', 5, 5),
(6, 'name_project6', 'code_project6', 'lastpass_foler6', '1', 0, 'notes_project6', 6, 6),
(7, 'name_project7', 'code_project7', 'lastpass_foler7', '0', 0, 'notes_project7', 7, 7),
(8, 'name_project8', 'code_project8', 'lastpass_foler8', '1', 0, 'notes_project8', 8, 8),
(9, 'name_project9', 'code_project9', 'lastpass_foler9', '0', 0, 'notes_project9', 9, 9),
(10, 'name_project10', 'code_project10', 'lastpass_foler10', '1', 0, 'notes_project10', 10, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_id` (`host_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `environment`
--
ALTER TABLE `environment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Index pour la table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_id` (`host_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `environment`
--
ALTER TABLE `environment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `host`
--
ALTER TABLE `host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`host_id`) REFERENCES `host` (`id`),
  ADD CONSTRAINT `contact_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Contraintes pour la table `environment`
--
ALTER TABLE `environment`
  ADD CONSTRAINT `environment_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`);

--
-- Contraintes pour la table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`host_id`) REFERENCES `host` (`id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
