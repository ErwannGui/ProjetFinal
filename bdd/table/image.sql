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
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `imageId` int(10) NOT NULL,
  `imageSource` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imagePage` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`imageId`, `imageSource`, `imagePage`) VALUES
(1, 'images/bg_home.png', 'Accueil'),
(2, 'images/carrousel01.png', 'Accueil'),
(3, 'images/carrousel02.png', 'Accueil'),
(4, 'images/carrousel03.png', 'Accueil'),
(5, 'images/bouchon.png', 'Accueil'),
(6, 'images/rougail.png', 'Accueil'),
(7, 'images/articles/articleOne.jpg', 'Actualités'),
(8, 'images/articles/articleTwo.jpg', 'Actualités'),
(9, 'images/articles/articleThree.jpg', 'Actualités'),
(10, 'images/articles/articleFour.jpg', 'Actualités'),
(11, 'images/articles/articleFive.jpg', 'Actualités'),
(12, 'images/articles/articleSix.jpg', 'Actualités'),
(13, 'images/bg_blog.png', 'Actualités'),
(14, 'images/testimonials/testimonyOne.jpg', 'Actualités'),
(15, 'images/testimonials/testimonyTwo.jpg', 'Actualités'),
(16, 'images/testimonials/testimonyThree.jpg', 'Actualités'),
(17, 'images/bg_menu.png', 'Nos menus'),
(18, 'images/bg_contact.png', 'Contact'),
(19, 'images/bg_events.png', 'Prestations privées'),
(20, 'images/bg_apropos.png', 'A propos de nous');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageId`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `imageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
