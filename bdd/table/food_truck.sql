-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Mai 2017 à 13:59
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

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `membreId` int(10) NOT NULL,
  `membreNom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `membrePrenom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `texteId` int(10) DEFAULT NULL,
  `imageId` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`membreId`, `membreNom`, `membrePrenom`, `texteId`, `imageId`) VALUES
(1, 'Dijoux', 'Quentin', NULL, NULL),
(2, 'Antonin', 'Douillard', NULL, NULL),
(3, 'Geoffrey', 'Moreau', NULL, NULL),
(4, 'Erwann', 'Guillevic', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `eventId` int(10) NOT NULL,
  `eventTitre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `eventDate` date NOT NULL,
  `eventType` varchar(50) CHARACTER SET utf8 NOT NULL,
  `texteId` int(10) NOT NULL,
  `imageId` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(20, 'images/bg_apropos.png', 'A propos de nous'),
(21, 'test', 'ActualitÃ©s');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `menuId` int(10) NOT NULL,
  `menuNom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `menuPrixL` float NOT NULL,
  `menuPrixXL` float DEFAULT NULL,
  `menuEntree` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `menuPlat` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `menuDessert` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `menuBoisson` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`menuId`, `menuNom`, `menuPrixL`, `menuPrixXL`, `menuEntree`, `menuPlat`, `menuDessert`, `menuBoisson`) VALUES
(1, 'Formule du midi : Plat + Boisson - Spéciale étudiant', 6, NULL, '', NULL, NULL, NULL),
(2, 'Formule 2 : Plat + Entrée ou Dessert + Boisson', 9, 11, '', NULL, NULL, NULL),
(3, 'Formule du soir : Entrée + Plat + Dessert + Boisson', 12, 15, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `messageId` int(10) NOT NULL,
  `messageNomEnvoyeur` varchar(100) CHARACTER SET utf8 NOT NULL,
  `messageMail` varchar(255) CHARACTER SET utf8 NOT NULL,
  `messageTel` varchar(10) NOT NULL,
  `messageObjet` varchar(255) CHARACTER SET utf8 NOT NULL,
  `messageContenu` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`messageId`, `messageNomEnvoyeur`, `messageMail`, `messageTel`, `messageObjet`, `messageContenu`) VALUES
(19, 'Guillevic Erwann', 'erwann.guillevic@ynov.com', '0600000000', 'Prestation privée', 'Message test'),
(21, 'Dijoux Quentin', 'quentin.dijoux@ynov.com', '0600000000', 'Prestation privÃ©e', 'Message test 02');

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
(10, 1.3, 1.9, 'Soda', NULL, 4),
(13, 1, 2, 'Acras', 'Pate, farce', 1),
(14, 6, 9, 'Carry poisson', 'Poisson exotique', 2);

-- --------------------------------------------------------

--
-- Structure de la table `partenaire`
--

CREATE TABLE `partenaire` (
  `partenaireId` int(10) NOT NULL,
  `partenaireNom` int(100) NOT NULL,
  `partenaireLieu` int(255) NOT NULL,
  `texteId` int(10) NOT NULL,
  `imageId` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `adminId` int(10) NOT NULL,
  `adminPseudo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `adminMdp` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `proprietaire`
--

INSERT INTO `proprietaire` (`adminId`, `adminPseudo`, `adminMdp`) VALUES
(1, 'Q.Dijoux', 'P@ssw0rd!'),
(4, 'E.Guillevic', 'P@ssw0rd!'),
(3, 'G.Moreau', 'P@ssw0rd!'),
(2, 'A.Douillard', 'P@ssw0rd!');

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

CREATE TABLE `texte` (
  `texteId` int(10) NOT NULL,
  `texteContenu` text CHARACTER SET utf8 NOT NULL,
  `textePage` varchar(50) CHARACTER SET utf8 NOT NULL,
  `texteIdBis` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `texte`
--

INSERT INTO `texte` (`texteId`, `texteContenu`, `textePage`, `texteIdBis`) VALUES
(1, 'Chef Fifi', 'Accueil', 0),
(2, 'Food truck réunionnais', 'Accueil', 0),
(3, 'A l\'image de notre association, notre cuisine est inspirée des plats réunionnais revisités à la nantaise ! Découvrez ainsi de nouvelles saveurs, et profitez de l\'expertise culinaire traditionnelle créole dans un repas rapide et abordable.', 'Accueil', 0),
(6, 'Le food truck “Chez Fifi” vient de s’installer dans les rues de Nantes et permet enfin de manger de la nourriture traditionnelle créole de La Réunion. En effet, aujourd’hui dans l’agglomération nantaise seulement 2 restaurants permettent de manger réunionnais.\r\n\r\nGrace à “Chez Fifi” certaines personnes n’ayant jamais goûté de nourriture réunionnaise vont pouvoir l’expérimenter. De plus, les personnes réunionnaises d’origine vont pouvoir manger ce qu’elles aiment sans payer trop cher. En effet, le prix maximal du restaurant sera de 15€, mais il est tout à fait possible de manger pour moins de 10€.\r\n\r\nIl est important de gouter au moins une fois dans sa vie la cuisine traditionnelle réunionnaise, qui est une des cuisines les moins représentées en France.\r\n', 'Actualités', 0),
(7, 'De plus en plus d\'entrepreneurs se lancent aujourd’hui à la conquête du marché de la streetfood avec leur camion. Mais beaucoup d\'entre eux ignorent ou négligent certaines précautions à prendre concernant leur clientèle et leurs finances. Savoir se vendre, connaître les retours, ne pas confondre chiffre d\'affaires et bénéfices, … On vous donne ainsi aujourd’hui quelques conseils déterminants afin de maintenir son camion et son commerce « sur les roues » afin de mener votre business vers le succès.\r\nLe bouche à oreille ne suffira pas à assurer la rentabilité de vote food truck. Avec le développement des réseaux sociaux des nouveau différents moyens de communication, il est plus facile et rapide de se faire connaitre et repérer et à moindre coût. Tous les concepts sont bons mais la présence online est tout autant importante si ce n’est plus que la présence offline. Pleins de moyens permettent d’être mieux référencés sur le web, que ça soit à l’aide d’une application mobile de géolocalisation, d’une page Facebook professionnelle, sur un site de réservation de food truck, voire même son propre site.\r\nLes food trucks sont de plus en plus recherchés pour des prestations événementielles, qu’elles soient pour des particuliers (un food truck pour un mariage, un anniversaire ou une soirée entre amis à domicile) ou pour des entreprises (séminaire, réunion, fête de fin d’année, …). En pleine saison (mai – septembre) il sera ainsi judicieux de faire un maximum d’événements de la sorte afin de générer de l’argent pour tenir lorsque l’hiver arrivera, et que l’activité sera moindre.\r\nFace à un client mécontent, mieux vaut ne pas s’énerver. Si un client vous signale qu’il est insatisfait, essayez de comprendre pourquoi (repas froid, problème de qualité ou de quantité ?) et si cela est justifié, offrez-lui un repas ou un plat gratuit pour vous excuser. Peut-être changera-t-il d’opinion et se transformera en client fidèle.\r\nMaintenant, à vous de jouer et de faire de votre food truck un véritable succès !', 'Actualités', 0),
(8, 'Avec la diversification du business des food truck, il est de plus en plus difficile de se faire une place reconnue sur le marché et de séduire de nouveaux consommateurs. Il est certes important de trouver une cible idéale mais s’il est un paramètre qui déterminera la réussite ou l’échec de votre commerce, c’est bel et bien les emplacements de vente. Il faut donc correspondre le mieux possible aux points de passage de vos cibles au moment des repas, pour ainsi maximiser l’effet coup de cœur.\r\n\r\nLes mairies, administrations fiscales, préfectures, tribunaux, ministères, bibliothèques, bureaux, centres d’affaires. Certains y travaillent, d’autres les fréquentent, mais il est certain que tous déjeunent à midi. Les chambres d’hôtes, hôtels, gîtes ruraux, il faut se documenter sur le nombre de chambres, mais aussi leur niveau de qualité. Les stations balnéaires, stations thermales, stations de ski sont aussi des points stratégiques en fonction des saisons. Il faut aussi sauter sur l’occasion pour profiter des foires, festivals et salons. Attention toutefois à la redevance. Elle sera sans doute plus élevée qu’en moyenne.', 'Actualités', 0),
(9, 'Depuis peu, et du fait de l’augmentation des camions repas, les propriétaires de food trucks se voient obligés de diversifier leurs activités. La grande majorité propose désormais ses services en tant que traiteurs et sont appelés à intervenir à domicile, pour des évènements privés tel que des mariages, anniversaires, ou fêtes en tout genre. Les clients peuvent ainsi profiter d’une carte concoctée à l’aide de produits de qualité tout en ayant un budget moins élevé qu’un traiteur traditionnel.\r\n\r\nDe plus, pour les organisateurs de l’évènement, cela garanti une bonne ambiance car le traiteur préparera la cuisine dans son camion. Ce camion va susciter l’intérêt des invités qui vont tour à tour passer devant le camion. De plus le traiteur fera la cuisine devant les invités, ce qui inspirera confiance aux clients.\r\n\r\nC’est un concept encore insolite pour la plupart des personnes, de plus le prix par personne est nettement inférieur à un traiteur traditionnel. En effet, avec un traiteur traditionnel, il faut compter environ 50 à 150€ par personne. Avec un food truck, la note peut baisser à 25€ par personne, même si le service à table est optionnel.\r\n', 'Actualités', 0),
(10, 'Le food truck est un concept importé des États Unis qui est arrivé en France en 2009 à Paris puis depuis 2011 dans les autres villes de France. Le principe du food truck est d’utiliser un camion pour cuisiner et vendre de la nourriture aux passants. Ainsi le cuisinier peut changer d’endroit en fonction des événements et des habitudes de déplacement des gens.\r\n\r\nCe concept s’est beaucoup développé en France ces dernières années. En effet depuis 2011 le nombre de camions a littéralement explosé ! Ainsi en 2015 on comptabilisait déjà plus de 400 food trucks dans l’hexagone dont une grande partie dans la capitale.\r\n\r\nAvec ce développement on peut retrouver toute sorte de cuisine : pizzas, sandwichs, sushis mais aussi des cuisines plus exotiques comme de la cuisine chinoise ou réunionnaise.\r\n\r\nLes marques de grande distribution ont aussi misé sur ces food truck pour aller à la rencontre des consommateurs dans l’espoir de vendre encore plus et de faire découvrir de nouveaux produits aux clients.\r\n\r\nAujourd’hui le food truck est en perpétuel mouvement, de nouveaux food truck sont créés chaque semaine avec de nouveaux concepts pour être orignal et ainsi récupérer de nouveaux clients.\r\n', 'Actualités', 0),
(11, 'Témoignage 1', 'Actualités', 0),
(12, 'Témoignage 2', 'Actualités', 0),
(13, 'Témoignage 3', 'Actualités', 0),
(14, 'Le bouchon gratiné, originaire de Chine et importé à la Réunion, où il est très vite devenu un plat typique de l’île. A base de pain, bouchon et curé nantais, nous vous faisons découvrir cette facette de notre gastronomie.', 'Accueil', 0),
(15, 'Le rougail saucisse est quant à lui un plat traditionnellement réunionnais préparé dans une marmite et composé de morceaux de saucisse accompagnés de riz et de grain (lentille ou haricot blanc) et bien souvent de piment.', 'Accueil', 0);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `typeId` int(10) NOT NULL,
  `typeNom` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`typeId`, `typeNom`) VALUES
(1, 'Entrée'),
(2, 'Plat'),
(3, 'Dessert'),
(4, 'Boisson');

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
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`membreId`),
  ADD KEY `texteId` (`texteId`),
  ADD KEY `imageId` (`imageId`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`eventId`),
  ADD KEY `texteId` (`texteId`),
  ADD KEY `imageId` (`imageId`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageId`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuId`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageId`);

--
-- Index pour la table `nourriture`
--
ALTER TABLE `nourriture`
  ADD PRIMARY KEY (`nourritureId`),
  ADD KEY `typeId` (`typeId`);

--
-- Index pour la table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`partenaireId`),
  ADD KEY `texteId` (`texteId`),
  ADD KEY `imageId` (`imageId`);

--
-- Index pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`adminId`);

--
-- Index pour la table `texte`
--
ALTER TABLE `texte`
  ADD PRIMARY KEY (`texteId`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`typeId`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `membreId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `eventId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `imageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `messageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `nourriture`
--
ALTER TABLE `nourriture`
  MODIFY `nourritureId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `partenaireId` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `texte`
--
ALTER TABLE `texte`
  MODIFY `texteId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `typeId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
