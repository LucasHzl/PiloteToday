-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 29 mars 2024 à 15:57
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pilotetoday`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id_car` int(11) NOT NULL,
  `brand` varchar(16) NOT NULL,
  `model` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id_car`, `brand`, `model`) VALUES
(1, 'Toyota', 'Corolla'),
(2, 'Honda', 'Civic'),
(3, 'Ford', 'Mustang');

-- --------------------------------------------------------

--
-- Structure de la table `coachs`
--

CREATE TABLE `coachs` (
  `id_coach` int(11) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coachs`
--

INSERT INTO `coachs` (`id_coach`, `firstName`, `lastName`) VALUES
(1, 'John', 'Doe'),
(2, 'Jane', 'Smith');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id_reservation` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_coach` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id_reservation`, `id_user`, `id_coach`, `date`) VALUES
(1, 1, 1, '2023-03-01'),
(2, 2, 2, '2023-03-02');

-- --------------------------------------------------------

--
-- Structure de la table `reservations_cars`
--

CREATE TABLE `reservations_cars` (
  `id_reservation_cars` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations_cars`
--

INSERT INTO `reservations_cars` (`id_reservation_cars`, `id_car`, `id_reservation`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Bob', 'Johnson', 'bob@example.com', 'password123'),
(2, 'Alice', 'Wonderland', 'alice@example.com', 'password456'),
(3, 'fkhdabakzhb', 'hvivivk', 'hkvhkv', 'hvkkhkhv'),
(5, 'kjazbkjzabdkj', 'kjbkjbjk', 'jkbkjbjk', 'jkbkjbjk'),
(8, 'oaizhzadoiahziod', 'oidazhdoiazhdiozah', 'oihdazoihdiozahzioah', 'oihdzaoihiodzahoaiz'),
(11, 'r', 'dzd', 'zdd', 'dzd'),
(13, 'dqdqz', 'qddzq', 'qdq', 'qzdqd'),
(14, 'dazdad', 'addaa', 'zda', 'dadaz'),
(17, 'hbkhkhkhb', 'jkbkjbkjb', 'jkbkjjkjkb', 'jkbjkbjkbjbk'),
(19, 'yvdzjahvjh', 'hjvhjvjhvjhvj', 'hjvjhvjhvjh', 'jhvhjjh'),
(21, 'jkazbkjzabdjkb', 'kjbdkjabakj', 'jkbdzkjbjk', 'bjkbazkjd'),
(23, 'dazjbdakzjb', 'kbadkbvazkjd', 'abkajbdjk', 'ajbkdzkjda'),
(24, 'dazbkjdjkzabbj', 'jkzdbajkbazjk', 'akjbzadjkbjk', 'akjdbzjkdbjkzab'),
(25, 'ajzknldazkn', 'dzabkjakzjdb', 'azdkjabk', 'dzkjaba'),
(26, 'kejfbakjbf', 'djkzabdjkbk', 'jdkbzkajbdkja', 'kjbdkjbza'),
(27, 'kbdkzabdjk', 'dzkjakjdbjk', 'dzbajkdbzk', 'zdkjbkjzadb'),
(28, 'ouigeafuaefg', 'aufhaukfzh', 'akhazhd', 'ckjazdkjb');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_car`),
  ADD UNIQUE KEY `UQ_id_car` (`id_car`),
  ADD UNIQUE KEY `UQ_model` (`model`);

--
-- Index pour la table `coachs`
--
ALTER TABLE `coachs`
  ADD PRIMARY KEY (`id_coach`),
  ADD UNIQUE KEY `UQ_id_coach` (`id_coach`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD UNIQUE KEY `UQ_id_reservation` (`id_reservation`),
  ADD KEY `FK_users_TO_reservations` (`id_user`),
  ADD KEY `FK_coachs_TO_reservations` (`id_coach`);

--
-- Index pour la table `reservations_cars`
--
ALTER TABLE `reservations_cars`
  ADD PRIMARY KEY (`id_reservation_cars`),
  ADD UNIQUE KEY `UQ_id_reservation_cars` (`id_reservation_cars`),
  ADD KEY `FK_cars_TO_reservations_cars` (`id_car`),
  ADD KEY `FK_reservations_TO_reservations_cars` (`id_reservation`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `UQ_id_user` (`id_user`),
  ADD UNIQUE KEY `UQ_email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `coachs`
--
ALTER TABLE `coachs`
  MODIFY `id_coach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservations_cars`
--
ALTER TABLE `reservations_cars`
  MODIFY `id_reservation_cars` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_coachs_TO_reservations` FOREIGN KEY (`id_coach`) REFERENCES `coachs` (`id_coach`),
  ADD CONSTRAINT `FK_users_TO_reservations` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Contraintes pour la table `reservations_cars`
--
ALTER TABLE `reservations_cars`
  ADD CONSTRAINT `FK_cars_TO_reservations_cars` FOREIGN KEY (`id_car`) REFERENCES `cars` (`id_car`),
  ADD CONSTRAINT `FK_reservations_TO_reservations_cars` FOREIGN KEY (`id_reservation`) REFERENCES `reservations` (`id_reservation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
