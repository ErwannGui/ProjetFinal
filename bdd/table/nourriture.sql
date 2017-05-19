-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Mai 2017 à 16:25
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `food_truck`
--

-- --------------------------------------------------------

--
-- Structure de la table `nourriture`
--

CREATE TABLE `nourriture` (
  `nourritureId` int(10) NOT NULL,
  `nourriturePrixL` float NOT NULL,
  `nourriturePrixXL` float DEFAULT NULL,
  `nourritureNom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nourritureIngredient` text CHARACTER SET utf8,
  `typeId` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `nourriture`
--

INSERT INTO `nourriture` (`nourritureId`, `nourriturePrixL`, `nourriturePrixXL`, `nourritureNom`, `nourritureIngredient`, `typeId`) VALUES
(1, 1, 1.5, 'Samoussa poulet', 'Pomme de terre, poulet fermier, oignon, épices', 1),
(2, 1, 1.5, 'Bonbon piment', 'Pois, piment, épices', 1),
(3, 7, 9, 'Rougail saucisse', 'Saucisse de Nantes, riz, tomates, grain de saison, ail, épices', 2),
(4, 7, 9, 'Carry poulet', 'Poulet fermier, riz, grain de saison, épices', 2),
(5, 3, NULL, 'Pâtisserie maison', 'Farine, sucre, œufs, fruits de saison', 3),
(6, 2.5, NULL, 'Coupelle de fruits', 'Mangue, litchi, passion, papaye, etc.', 3),
(7, 3.5, NULL, 'Bière Dodo', NULL, 4),
(8, 3, 18, 'Vin de Loire', NULL, 4),
(9, 1.1, 1.5, 'Eau', NULL, 4),
(10, 1.3, 1.9, 'Soda', NULL, 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `nourriture`
--
ALTER TABLE `nourriture`
  ADD PRIMARY KEY (`nourritureId`),
  ADD KEY `typeId` (`typeId`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `nourriture`
--
ALTER TABLE `nourriture`
  MODIFY `nourritureId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
