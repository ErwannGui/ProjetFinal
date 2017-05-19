-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Mai 2017 à 16:24
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
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `articleId` int(10) NOT NULL,
  `articleTitre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `articleAuteur` varchar(50) CHARACTER SET utf8 NOT NULL,
  `articleDate` date NOT NULL,
  `texteId` int(10) NOT NULL,
  `imageId` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`articleId`, `articleTitre`, `articleAuteur`, `articleDate`, `texteId`, `imageId`) VALUES
(1, 'Conseils pour bien gérer son food truck', 'Antonin', '2017-05-16', 6, 7),
(2, 'Traiteur en food truck', 'Erwann', '2017-05-16', 9, 8),
(3, 'La cuisine créole : nouvelle à Nantes', 'Antonin', '2017-05-16', 6, 9),
(4, 'Points stratégiques de l’activité d’un food truck', 'Erwann', '2017-05-16', 8, 10),
(5, 'L’évolution du marché des food trucks', 'Geoffrey', '2017-05-16', 10, 11),
(6, 'Le food truck de demain', 'Quentin', '2017-05-17', 11, 12);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`),
  ADD KEY `texteId` (`texteId`),
  ADD KEY `imageId` (`imageId`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
