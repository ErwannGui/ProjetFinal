-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 24, 2017 at 04:15 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `food_truck`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `articleId` int(10) NOT NULL,
  `articleTitre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `articleAuteur` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ArticleCategorie` varchar(25) DEFAULT NULL,
  `articleDate` date DEFAULT NULL,
  `texteId` int(10) NOT NULL,
  `imageId` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`articleId`, `articleTitre`, `articleAuteur`, `ArticleCategorie`, `articleDate`, `texteId`, `imageId`) VALUES
(1, 'Conseils pour bien gérer son food truck', 'Antonin', 'all foodtruck', '2017-05-16', 6, 7),
(2, 'Traiteur en food truck', 'Erwann', 'all foodtruck', '2017-05-16', 9, 8),
(3, 'La cuisine créole : nouvelle à Nantes', 'Antonin', 'all cook', '2017-05-16', 7, 9),
(4, 'Points stratégiques de l’activité d’un food truck', 'Erwann', 'all foodtruck', '2017-05-16', 8, 10),
(5, 'L’évolution du marché des food trucks', 'Geoffrey', 'all foodtruck', '2017-05-16', 10, 11),
(6, 'Le food truck de demain', 'Quentin', 'all foodtruck', '2017-05-17', 5, 12);

-- --------------------------------------------------------

--
-- Table structure for table `equipe`
--

CREATE TABLE `equipe` (
  `membreId` int(10) NOT NULL,
  `membreNom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `membrePrenom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `texteId` int(10) DEFAULT NULL,
  `imageId` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipe`
--

INSERT INTO `equipe` (`membreId`, `membreNom`, `membrePrenom`, `texteId`, `imageId`) VALUES
(5, 'Guillevic', 'Erwann', 20, 23),
(6, 'Dijoux', 'Quentin', 22, 25),
(7, 'Douillard', 'Antonin', 23, 22),
(8, 'Moreau', 'Geoffrey', 21, 24);

-- --------------------------------------------------------

--
-- Table structure for table `evenement`
--

CREATE TABLE `evenement` (
  `eventId` int(10) NOT NULL,
  `eventTitre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `eventDate` date DEFAULT NULL,
  `eventType` varchar(50) CHARACTER SET utf8 NOT NULL,
  `texteId` int(10) NOT NULL,
  `imageId` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evenement`
--

INSERT INTO `evenement` (`eventId`, `eventTitre`, `eventDate`, `eventType`, `texteId`, `imageId`) VALUES
(1, 'Repas d\'entreprise', '2017-05-31', 'Repas d\'entreprise', 40, 36),
(2, 'Baptême', '2017-05-06', 'Baptême', 41, 37),
(3, 'Mariage', '2017-05-12', 'Mariage', 24, 27),
(4, 'Anniversaire', '2017-05-06', 'Anniversaire', 25, 26);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageId` int(10) NOT NULL,
  `imageSource` varchar(255) CHARACTER SET utf8 NOT NULL,
  `imagePage` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`imageId`, `imageSource`, `imagePage`) VALUES
(1, 'images/bg/bg_home.png', 'Accueil'),
(2, 'images/index/carrousel01.png', 'Accueil'),
(3, 'images/index/carrousel02.png', 'Accueil'),
(4, 'images/index/carrousel03.png', 'Accueil'),
(5, 'images/index/pic_BouchonGratine.png', 'Accueil'),
(6, 'images/index/pic_rougail.png', 'Accueil'),
(7, 'images/articles/articleOne.jpg', 'Actualités'),
(8, 'images/articles/articleTwo.jpg', 'Actualités'),
(9, 'images/articles/articleThree.jpg', 'Actualités'),
(10, 'images/articles/articleFour.jpg', 'Actualités'),
(11, 'images/articles/articleFive.jpg', 'Actualités'),
(12, 'images/articles/articleSix.jpg', 'Actualités'),
(13, 'images/bg/bg_blog.png', 'Actualités'),
(14, 'images/testimonials/testimonyOne.jpg', 'Actualités'),
(15, 'images/testimonials/testimonyTwo.jpg', 'Actualités'),
(16, 'images/testimonials/testimonyThree.jpg', 'Actualités'),
(17, 'images/bg/bg_menu.png', 'Nos menus'),
(18, 'images/bg/bg_contact.png', 'Contact'),
(19, 'images/bg/bg_events.png', 'Prestations privées'),
(20, 'images/bg/bg_apropos.png', 'A propos'),
(22, 'images/pics/ProfilAntonin.jpg', 'A propos'),
(23, 'images/pics/ProfilErwann.jpg', 'A propos'),
(24, 'images/pics/ProfilGeoffrey.jpg', 'A propos'),
(25, 'images/pics/ProfilQuentin.jpg', 'A propos'),
(26, 'images/events/eventsOne.jpg', 'Evenements'),
(27, 'images/events/eventsTwo.jpg', 'Evenements'),
(28, 'images/logos/bourbon.png', 'A propos'),
(29, 'images/logos/coca.png', 'A propos'),
(30, 'images/logos/curenantais.png', 'A propos'),
(31, 'images/logos/ecolo_reunion.png', 'A propos'),
(32, 'images/logos/ferme.png', 'A propos'),
(33, 'images/logos/leffet-pei.png', 'A propos'),
(34, 'images/logos/logo-vertical-distram.png', 'A propos'),
(35, 'images/logos/min_nantes.png', 'A propos'),
(36, 'images/events/eventsThree.jpg', 'Evenements'),
(37, 'images/events/eventsFour.jpg', 'Evenements'),
(38, 'test', 'Actualites');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuId` int(10) NOT NULL,
  `menuTitre` varchar(255) CHARACTER SET utf8 NOT NULL,
  `menuComposition` varchar(255) NOT NULL,
  `menuPrixL` float NOT NULL,
  `menuPrixXL` float DEFAULT NULL,
  `menuEntree` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `menuPlat` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `menuDessert` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `menuBoisson` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `Disponibilité` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuId`, `menuTitre`, `menuComposition`, `menuPrixL`, `menuPrixXL`, `menuEntree`, `menuPlat`, `menuDessert`, `menuBoisson`, `Disponibilité`) VALUES
(1, '-- Formule 1 --', 'Plat + Boisson (L ou XL)', 6, 8, 'Aucune', 'Rougail saucisse - Carry poulet', 'Pâtisserie - Fruits créoles (litchi et mangue)', 'Eau - Sodas - Bière - Vin de Loire', 'Midi et soir'),
(2, '-- Formule 2 --', 'Plat + Entrée ou Dessert + Boisson (L ou XL)', 8, 10, 'Samossa et bonbons piment', 'Rougail saucisse - Carry poulet', 'Pâtisserie - Fruits créoles (litchi et mangue)', 'Eau - Sodas - Bière - Vin de Loire', 'Midi et soir'),
(3, '-- Formule 3 --', 'Entrée + Plat + Dessert + Boisson (L ou XL)', 12, 15, 'Samossa et bonbons piment', 'Rougail saucisse - Carry poulet', 'Pâtisserie - Fruits créoles (litchi et mangue)', 'Eau - Sodas - Bière - Vin de Loire', 'Soir');

-- --------------------------------------------------------

--
-- Table structure for table `message`
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
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageId`, `messageNomEnvoyeur`, `messageMail`, `messageTel`, `messageObjet`, `messageContenu`) VALUES
(19, 'Guillevic Erwann', 'erwann.guillevic@ynov.com', '0600000000', 'Prestation privée', 'Message test'),
(21, 'Dijoux Quentin', 'quentin.dijoux@ynov.com', '0600000000', 'Prestation privée', 'Message test 02');

-- --------------------------------------------------------

--
-- Table structure for table `nourriture`
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
-- Dumping data for table `nourriture`
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
-- Table structure for table `partenaire`
--

CREATE TABLE `partenaire` (
  `partenaireId` int(10) NOT NULL,
  `partenaireNom` varchar(100) NOT NULL,
  `partenaireLieu` varchar(255) NOT NULL,
  `partenaireLien` varchar(255) DEFAULT NULL,
  `texteId` int(10) NOT NULL,
  `imageId` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partenaire`
--

INSERT INTO `partenaire` (`partenaireId`, `partenaireNom`, `partenaireLieu`, `partenaireLien`, `texteId`, `imageId`) VALUES
(1, 'Bourbon', 'Réunion', 'http://www.ladodo.com', 26, 28),
(2, 'Coca-Cola', 'France', 'https://www.coca-cola-france.fr/', 27, 29),
(3, 'Le Curé Nantais', 'Nantes', 'http://www.curenantais.com/', 28, 30),
(4, 'Ecologie Réunion', 'Réunion', 'https://ecologie-reunion.com/', 29, 31),
(5, 'La petite Ferme', 'Nantes', 'http://www.lapetitefermecarquefou.fr/', 30, 32),
(6, 'L\'effet Péi', 'Réunion', 'http://www.leffetpei.re/', 31, 33),
(7, 'Distram', 'Nantes', 'https://www.distram.com/', 32, 34),
(8, 'Min Nantes', 'Nantes', 'http://www.minnantes.com/', 33, 35);

-- --------------------------------------------------------

--
-- Table structure for table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `adminId` int(10) NOT NULL,
  `adminPseudo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `adminMdp` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proprietaire`
--

INSERT INTO `proprietaire` (`adminId`, `adminPseudo`, `adminMdp`) VALUES
(1, 'Q.Dijoux', 'P@ssw0rd!'),
(4, 'E.Guillevic', 'P@ssw0rd!'),
(3, 'G.Moreau', 'P@ssw0rd!'),
(2, 'A.Douillard', 'P@ssw0rd!');

-- --------------------------------------------------------

--
-- Table structure for table `texte`
--

CREATE TABLE `texte` (
  `texteId` int(10) NOT NULL,
  `texteContenu` text CHARACTER SET utf8 NOT NULL,
  `textePage` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `texte`
--

INSERT INTO `texte` (`texteId`, `texteContenu`, `textePage`) VALUES
(1, 'Chez Fifi', 'Accueil'),
(63, 'Nos spécialités', 'Accueil'),
(3, 'Bienvenue sur le site web du food truck \"Chez Fifi\". Situés dans la région nantaise, nous vous proposons de la nourriture réunionnaise de qualité avec des produits frais cultivés en Loire-Atlantique. Des produits sont aussi importés de la réunion comme \"La dodo\" qui est la bière locale de l\'île de la Réunion.', 'Accueil'),
(6, 'Le food truck “Chez Fifi” vient de s’installer dans les rues de Nantes et permet enfin de manger de la nourriture traditionnelle créole de La Réunion. En effet, aujourd’hui dans l’agglomération nantaise seulement 2 restaurants permettent de manger réunionnais.\n\nGrace à “Chez Fifi” certaines personnes n’ayant jamais goûté de nourriture réunionnaise vont pouvoir l’expérimenter. De plus, les personnes réunionnaises d’origine vont pouvoir manger ce qu’elles aiment sans payer trop cher. En effet, le prix maximal du restaurant sera de 15€, mais il est tout à fait possible de manger pour moins de 10€.\n\nIl est important de gouter au moins une fois dans sa vie la cuisine traditionnelle réunionnaise, qui est une des cuisines les moins représentées en France.\n', 'Actualités'),
(7, 'De plus en plus d\'entrepreneurs se lancent aujourd’hui à la conquête du marché de la streetfood avec leur camion. Mais beaucoup d\'entre eux ignorent ou négligent certaines précautions à prendre concernant leur clientèle et leurs finances. Savoir se vendre, connaître les retours, ne pas confondre chiffre d\'affaires et bénéfices, … On vous donne ainsi aujourd’hui quelques conseils déterminants afin de maintenir son camion et son commerce « sur les roues » afin de mener votre business vers le succès.\r\nLe bouche à oreille ne suffira pas à assurer la rentabilité de vote food truck. Avec le développement des réseaux sociaux des nouveau différents moyens de communication, il est plus facile et rapide de se faire connaitre et repérer et à moindre coût. Tous les concepts sont bons mais la présence online est tout autant importante si ce n’est plus que la présence offline. Pleins de moyens permettent d’être mieux référencés sur le web, que ça soit à l’aide d’une application mobile de géolocalisation, d’une page Facebook professionnelle, sur un site de réservation de food truck, voire même son propre site.\r\nLes food trucks sont de plus en plus recherchés pour des prestations événementielles, qu’elles soient pour des particuliers (un food truck pour un mariage, un anniversaire ou une soirée entre amis à domicile) ou pour des entreprises (séminaire, réunion, fête de fin d’année, …). En pleine saison (mai – septembre) il sera ainsi judicieux de faire un maximum d’événements de la sorte afin de générer de l’argent pour tenir lorsque l’hiver arrivera, et que l’activité sera moindre.\r\nFace à un client mécontent, mieux vaut ne pas s’énerver. Si un client vous signale qu’il est insatisfait, essayez de comprendre pourquoi (repas froid, problème de qualité ou de quantité ?) et si cela est justifié, offrez-lui un repas ou un plat gratuit pour vous excuser. Peut-être changera-t-il d’opinion et se transformera en client fidèle.\r\nMaintenant, à vous de jouer et de faire de votre food truck un véritable succès !', 'Actualités'),
(8, 'Avec la diversification du business des food truck, il est de plus en plus difficile de se faire une place reconnue sur le marché et de séduire de nouveaux consommateurs. Il est certes important de trouver une cible idéale mais s’il est un paramètre qui déterminera la réussite ou l’échec de votre commerce, c’est bel et bien les emplacements de vente. Il faut donc correspondre le mieux possible aux points de passage de vos cibles au moment des repas, pour ainsi maximiser l’effet coup de cœur.\r\n\r\nLes mairies, administrations fiscales, préfectures, tribunaux, ministères, bibliothèques, bureaux, centres d’affaires. Certains y travaillent, d’autres les fréquentent, mais il est certain que tous déjeunent à midi. Les chambres d’hôtes, hôtels, gîtes ruraux, il faut se documenter sur le nombre de chambres, mais aussi leur niveau de qualité. Les stations balnéaires, stations thermales, stations de ski sont aussi des points stratégiques en fonction des saisons. Il faut aussi sauter sur l’occasion pour profiter des foires, festivals et salons. Attention toutefois à la redevance. Elle sera sans doute plus élevée qu’en moyenne.', 'Actualités'),
(9, 'Depuis peu, et du fait de l’augmentation des camions repas, les propriétaires de food trucks se voient obligés de diversifier leurs activités. La grande majorité propose désormais ses services en tant que traiteurs et sont appelés à intervenir à domicile, pour des évènements privés tel que des mariages, anniversaires, ou fêtes en tout genre. Les clients peuvent ainsi profiter d’une carte concoctée à l’aide de produits de qualité tout en ayant un budget moins élevé qu’un traiteur traditionnel.\r\n\r\nDe plus, pour les organisateurs de l’évènement, cela garanti une bonne ambiance car le traiteur préparera la cuisine dans son camion. Ce camion va susciter l’intérêt des invités qui vont tour à tour passer devant le camion. De plus le traiteur fera la cuisine devant les invités, ce qui inspirera confiance aux clients.\r\n\r\nC’est un concept encore insolite pour la plupart des personnes, de plus le prix par personne est nettement inférieur à un traiteur traditionnel. En effet, avec un traiteur traditionnel, il faut compter environ 50 à 150€ par personne. Avec un food truck, la note peut baisser à 25€ par personne, même si le service à table est optionnel.\r\n', 'Actualités'),
(10, 'Le food truck est un concept importé des États Unis qui est arrivé en France en 2009 à Paris puis depuis 2011 dans les autres villes de France. Le principe du food truck est d’utiliser un camion pour cuisiner et vendre de la nourriture aux passants. Ainsi le cuisinier peut changer d’endroit en fonction des événements et des habitudes de déplacement des gens.\r\n\r\nCe concept s’est beaucoup développé en France ces dernières années. En effet depuis 2011 le nombre de camions a littéralement explosé ! Ainsi en 2015 on comptabilisait déjà plus de 400 food trucks dans l’hexagone dont une grande partie dans la capitale.\r\n\r\nAvec ce développement on peut retrouver toute sorte de cuisine : pizzas, sandwichs, sushis mais aussi des cuisines plus exotiques comme de la cuisine chinoise ou réunionnaise.\r\n\r\nLes marques de grande distribution ont aussi misé sur ces food truck pour aller à la rencontre des consommateurs dans l’espoir de vendre encore plus et de faire découvrir de nouveaux produits aux clients.\r\n\r\nAujourd’hui le food truck est en perpétuel mouvement, de nouveaux food truck sont créés chaque semaine avec de nouveaux concepts pour être orignal et ainsi récupérer de nouveaux clients.\r\n', 'Actualités'),
(11, '\"Merci à \"Chez Fifi\" pour ce très bon moment passé. La cuisine est de qualité et on y est très bien reçus.\"', 'Actualités'),
(12, '\"Habitué depuis peu j\'y retourne les yeux fermés, la nourriture est de très bonne qualité, le service impeccable, l\'accueil parfaite, les serveurs sont plus qu\'agréable !\"', 'Actualités'),
(13, '\"Je vous recommande le food truck \"Chez Fifi\", placé à côté de mon lycée une fois par semaine. Je mange la formule à 6€ qui est dans mes moyens étudiants.\"', 'Actualités'),
(14, 'Un bouchon est une petite bouchée de viande de porc ou de poulet entourée de pâte cuite à la vapeur que l\'on sert généralement en tant qu\'apéritif chaud sur l\'île de La Réunion, département d\'outre-mer français dans l\'océan Indien.', 'Accueil'),
(15, 'Le Rougail saucisse est un plat traditionnelle réunionnais, à base de saucisses créoles souvent fumées artisanales ou encore fraîches. Celles-ci sont ensuite coupées en morceaux, accompagnées de riz et de rougail (tomates coupées en petits dés, gingembre pilé, oignons émincés et piments).', 'Accueil'),
(20, 'Erwann est un jeune développeur back-end. Il va vous créer la meilleur base de données possible.', 'Equipe'),
(21, 'Geoffrey possède une bonne capacité à créer des designs pour vos futurs sites internet.', 'Equipe'),
(22, 'Quentin est un développeur possédant plus d\'expérience que ses collègues. Il a une vision d\'ensemble et est chef sur chaque projet.', 'Equipe'),
(23, 'Antonin est développeur possédant des capacités en front et back-end. Il peut donc travailler sur la partie visible mais aussi non visible de votre site.', 'Equipe'),
(24, 'Lors d\'un mariage, nous avons préparé à bord de notre food truck du rougail saucisse pour plus de 90 personnes, dans la bonne humeur !', 'Evenements'),
(25, 'Pour les 65 ans d\'une retraitée, nous avons préparé des bouchons gratinés pour 30 personnes. ', 'Evenements'),
(26, 'La Dodo, la bière préférée des Réunionnais !', 'A propos'),
(27, 'Le seul et l\'unique !', 'A propos'),
(28, 'Le Curé Nantais issu de la fromagerie artisanale à Pornic, en  Pays de Loire, est un fromage de tradition au lait cru affiné au Muscadet.', 'A propos'),
(29, 'Association agréée au titre de la protection de l\'environnement Ile de La Réunion', 'A propos'),
(30, 'Notre petit producteur de volailles et boeuf !', 'A propos'),
(31, 'Marque réunionnaise de prêt-à-porter, L\'effet Péi représente la Réunion et la culture réunionnaise à travers ses collections.', 'A propos'),
(32, 'Distram, expert et conseiller en restauration.', 'A propos'),
(33, 'La marché d\'intérêt national de Nantes, un acteur économique de l\'agglomération nantaise.', 'A propos'),
(34, 'Food truck réunnionnais à Nantes', 'Accueil'),
(35, 'La cuisine traditionnelle : notre vocation, vos dégustations', 'Menus'),
(36, 'Food truck, mais aussi traiteur !', 'Prestations privées'),
(37, 'Et si on vous parlait un peu de nous', 'A propos'),
(38, 'Ici on ne vous cache rien, et vous pouvez tout nous dire', 'Actualités'),
(39, 'Plus d\'informations ? Des questions ? Vous êtes au bon endroit', 'Contact'),
(40, 'Une entreprise nous a contacté pour offrir à ses employés de la nourriture créole afin de les remercier pour un projet. ', 'Evenements'),
(41, 'Lors du baptême d\'un enfant nous avons préparé les plats typiques de la réunion.', 'Evenements'),
(42, 'test', 'Actualites'),
(64, 'Bouchons gratinés', 'Accueil'),
(65, 'Rougail saucisse', 'Accueil'),
(66, 'Evenements spéciaux', 'Accueil'),
(67, 'Interventions', 'Accueil'),
(68, 'Bienvenue sur le site web du food truck \"Chez Fifi\". Situés dans la région nantaise, nous vous proposons de la nourriture réunionnaise de qualité avec des produits frais cultivés en Loire-Atlantique. Des produits sont aussi importés de la réunion comme \"La dodo\" qui est la bière locale de l\'île de la Réunion.', 'Accueil'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in dapibus est. Proin gravida ornare ligula, at lacinia leo laoreet et. Quisque finibus quis purus ac ultrices. Cras efficitur porttitor augue vitae molestie. Fusce quis sem consequat, tincidunt nisi sed, tincidunt urna. Etiam ut enim elementum, lacinia dui quis, dapibus nisi. Vivamus congue elementum finibus. Nam accumsan feugiat lectus.\r\n\r\nQuisque placerat euismod elit in mattis. Curabitur lacus quam, finibus eget dapibus sodales, pharetra vitae mi. Quisque euismod efficitur nisl sed condimentum. Suspendisse sollicitudin lectus at massa suscipit, mattis auctor nunc malesuada. Phasellus vitae sollicitudin arcu. Suspendisse lorem diam, efficitur vitae suscipit id, congue sit amet turpis. In malesuada non diam luctus molestie. Vestibulum et turpis at sem gravida vehicula non sagittis lorem. Curabitur vel vehicula velit. Maecenas non nulla risus. Pellentesque non nunc lacinia, suscipit tortor eget, molestie tortor. Duis mollis vitae tortor non finibus. Proin malesuada leo rutrum orci consectetur ullamcorper. Proin maximus nibh quis nisi fringilla imperdiet.', 'Actualités'),
(69, 'Chez Fifi est un Food Truck proposant une offre à partir de produits frais, locaux et réunionnais. Pour vos événements nous élaborons avec vous une offre sur mesure: rougails saucisses, cari de poulet ... Notre camion au design original, notre cuisine faite maison et la qualité des produits utilisés laisseront un souvenir visuel et gustatif à vos convives. Ainsi si vous êtes intéressés par nos prestations de traiteur, n\'hésitez plus pour apporter originalité et goût à votre réception, optez pour notre camion ! Pour permettre que cet évènement soit la plus belle des fêtes, et ce jusque dans vos assiettes!', 'Evenements'),
(70, 'Nos menus', 'Menus'),
(71, 'CONTACT', 'Contact'),
(72, 'Blog et actualités', 'Actualités'),
(73, 'Prestations privées', 'Evenements'),
(74, 'A propos de nous', 'A propos'),
(75, 'Largement inspiré de la street food en provenance des Etats Unis, le food truck est un nouveau concept de restauration nomade qui propose un service de restauration de qualité à emporter à bord d’un camion dit « truck ».', 'A propos'),
(76, 'UN FOOD-TRUCK, C\'EST QUOI ?', 'A propos');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `typeId` int(10) NOT NULL,
  `typeNom` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`typeId`, `typeNom`) VALUES
(1, 'Entrée'),
(2, 'Plat'),
(3, 'Dessert'),
(4, 'Boisson');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`articleId`),
  ADD KEY `texteId` (`texteId`),
  ADD KEY `imageId` (`imageId`);

--
-- Indexes for table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`membreId`),
  ADD KEY `texteId` (`texteId`),
  ADD KEY `imageId` (`imageId`);

--
-- Indexes for table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`eventId`),
  ADD KEY `texteId` (`texteId`),
  ADD KEY `imageId` (`imageId`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageId`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuId`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `nourriture`
--
ALTER TABLE `nourriture`
  ADD PRIMARY KEY (`nourritureId`),
  ADD KEY `typeId` (`typeId`);

--
-- Indexes for table `partenaire`
--
ALTER TABLE `partenaire`
  ADD PRIMARY KEY (`partenaireId`),
  ADD KEY `texteId` (`texteId`),
  ADD KEY `imageId` (`imageId`);

--
-- Indexes for table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `texte`
--
ALTER TABLE `texte`
  ADD PRIMARY KEY (`texteId`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`typeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `articleId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `membreId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `eventId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `nourriture`
--
ALTER TABLE `nourriture`
  MODIFY `nourritureId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `partenaire`
--
ALTER TABLE `partenaire`
  MODIFY `partenaireId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `texte`
--
ALTER TABLE `texte`
  MODIFY `texteId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `typeId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;