-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 19 Mai 2017 à 16:26
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
-- Structure de la table `texte`
--

CREATE TABLE `texte` (
  `texteId` int(10) NOT NULL,
  `texteContenu` text CHARACTER SET utf8 NOT NULL,
  `textePage` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `texte`
--

INSERT INTO `texte` (`texteId`, `texteContenu`, `textePage`) VALUES
(1, 'Chef Fifi', 'Accueil'),
(2, 'Food truck réunionnais', 'Accueil'),
(3, 'A l\'image de notre association, notre cuisine est inspirée des plats réunionnais revisités à la nantaise ! Découvrez ainsi de nouvelles saveurs, et profitez de l\'expertise culinaire traditionnelle créole dans un repas rapide et abordable.', 'Accueil'),
(6, 'Le food truck “Chez Fifi” vient de s’installer dans les rues de Nantes et permet enfin de manger de la nourriture traditionnelle créole de La Réunion. En effet, aujourd’hui dans l’agglomération nantaise seulement 2 restaurants permettent de manger réunionnais.\r\n\r\nGrace à “Chez Fifi” certaines personnes n’ayant jamais goûté de nourriture réunionnaise vont pouvoir l’expérimenter. De plus, les personnes réunionnaises d’origine vont pouvoir manger ce qu’elles aiment sans payer trop cher. En effet, le prix maximal du restaurant sera de 15€, mais il est tout à fait possible de manger pour moins de 10€.\r\n\r\nIl est important de gouter au moins une fois dans sa vie la cuisine traditionnelle réunionnaise, qui est une des cuisines les moins représentées en France.\r\n', 'Actualités'),
(7, 'De plus en plus d\'entrepreneurs se lancent aujourd’hui à la conquête du marché de la streetfood avec leur camion. Mais beaucoup d\'entre eux ignorent ou négligent certaines précautions à prendre concernant leur clientèle et leurs finances. Savoir se vendre, connaître les retours, ne pas confondre chiffre d\'affaires et bénéfices, … On vous donne ainsi aujourd’hui quelques conseils déterminants afin de maintenir son camion et son commerce « sur les roues » afin de mener votre business vers le succès.\r\nLe bouche à oreille ne suffira pas à assurer la rentabilité de vote food truck. Avec le développement des réseaux sociaux des nouveau différents moyens de communication, il est plus facile et rapide de se faire connaitre et repérer et à moindre coût. Tous les concepts sont bons mais la présence online est tout autant importante si ce n’est plus que la présence offline. Pleins de moyens permettent d’être mieux référencés sur le web, que ça soit à l’aide d’une application mobile de géolocalisation, d’une page Facebook professionnelle, sur un site de réservation de food truck, voire même son propre site.\r\nLes food trucks sont de plus en plus recherchés pour des prestations événementielles, qu’elles soient pour des particuliers (un food truck pour un mariage, un anniversaire ou une soirée entre amis à domicile) ou pour des entreprises (séminaire, réunion, fête de fin d’année, …). En pleine saison (mai – septembre) il sera ainsi judicieux de faire un maximum d’événements de la sorte afin de générer de l’argent pour tenir lorsque l’hiver arrivera, et que l’activité sera moindre.\r\nFace à un client mécontent, mieux vaut ne pas s’énerver. Si un client vous signale qu’il est insatisfait, essayez de comprendre pourquoi (repas froid, problème de qualité ou de quantité ?) et si cela est justifié, offrez-lui un repas ou un plat gratuit pour vous excuser. Peut-être changera-t-il d’opinion et se transformera en client fidèle.\r\nMaintenant, à vous de jouer et de faire de votre food truck un véritable succès !', 'Actualités'),
(8, 'Avec la diversification du business des food truck, il est de plus en plus difficile de se faire une place reconnue sur le marché et de séduire de nouveaux consommateurs. Il est certes important de trouver une cible idéale mais s’il est un paramètre qui déterminera la réussite ou l’échec de votre commerce, c’est bel et bien les emplacements de vente. Il faut donc correspondre le mieux possible aux points de passage de vos cibles au moment des repas, pour ainsi maximiser l’effet coup de cœur.\r\n\r\nLes mairies, administrations fiscales, préfectures, tribunaux, ministères, bibliothèques, bureaux, centres d’affaires. Certains y travaillent, d’autres les fréquentent, mais il est certain que tous déjeunent à midi. Les chambres d’hôtes, hôtels, gîtes ruraux, il faut se documenter sur le nombre de chambres, mais aussi leur niveau de qualité. Les stations balnéaires, stations thermales, stations de ski sont aussi des points stratégiques en fonction des saisons. Il faut aussi sauter sur l’occasion pour profiter des foires, festivals et salons. Attention toutefois à la redevance. Elle sera sans doute plus élevée qu’en moyenne.', 'Actualités'),
(9, 'Depuis peu, et du fait de l’augmentation des camions repas, les propriétaires de food trucks se voient obligés de diversifier leurs activités. La grande majorité propose désormais ses services en tant que traiteurs et sont appelés à intervenir à domicile, pour des évènements privés tel que des mariages, anniversaires, ou fêtes en tout genre. Les clients peuvent ainsi profiter d’une carte concoctée à l’aide de produits de qualité tout en ayant un budget moins élevé qu’un traiteur traditionnel.\r\n\r\nDe plus, pour les organisateurs de l’évènement, cela garanti une bonne ambiance car le traiteur préparera la cuisine dans son camion. Ce camion va susciter l’intérêt des invités qui vont tour à tour passer devant le camion. De plus le traiteur fera la cuisine devant les invités, ce qui inspirera confiance aux clients.\r\n\r\nC’est un concept encore insolite pour la plupart des personnes, de plus le prix par personne est nettement inférieur à un traiteur traditionnel. En effet, avec un traiteur traditionnel, il faut compter environ 50 à 150€ par personne. Avec un food truck, la note peut baisser à 25€ par personne, même si le service à table est optionnel.\r\n', 'Actualités'),
(10, 'Le food truck est un concept importé des États Unis qui est arrivé en France en 2009 à Paris puis depuis 2011 dans les autres villes de France. Le principe du food truck est d’utiliser un camion pour cuisiner et vendre de la nourriture aux passants. Ainsi le cuisinier peut changer d’endroit en fonction des événements et des habitudes de déplacement des gens.\r\n\r\nCe concept s’est beaucoup développé en France ces dernières années. En effet depuis 2011 le nombre de camions a littéralement explosé ! Ainsi en 2015 on comptabilisait déjà plus de 400 food trucks dans l’hexagone dont une grande partie dans la capitale.\r\n\r\nAvec ce développement on peut retrouver toute sorte de cuisine : pizzas, sandwichs, sushis mais aussi des cuisines plus exotiques comme de la cuisine chinoise ou réunionnaise.\r\n\r\nLes marques de grande distribution ont aussi misé sur ces food truck pour aller à la rencontre des consommateurs dans l’espoir de vendre encore plus et de faire découvrir de nouveaux produits aux clients.\r\n\r\nAujourd’hui le food truck est en perpétuel mouvement, de nouveaux food truck sont créés chaque semaine avec de nouveaux concepts pour être orignal et ainsi récupérer de nouveaux clients.\r\n', 'Actualités'),
(11, 'Témoignage 1', 'Actualités'),
(12, 'Témoignage 2', 'Actualités'),
(13, 'Témoignage 3', 'Actualités'),
(14, 'Le bouchon gratiné, originaire de Chine et importé à la Réunion, où il est très vite devenu un plat typique de l’île. A base de pain, bouchon et curé nantais, nous vous faisons découvrir cette facette de notre gastronomie.', 'Accueil'),
(15, 'Le rougail saucisse est quant à lui un plat traditionnellement réunionnais préparé dans une marmite et composé de morceaux de saucisse accompagnés de riz et de grain (lentille ou haricot blanc) et bien souvent de piment.', 'Accueil');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `texte`
--
ALTER TABLE `texte`
  ADD PRIMARY KEY (`texteId`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `texte`
--
ALTER TABLE `texte`
  MODIFY `texteId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
