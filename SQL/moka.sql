-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 19 mai 2022 à 13:10
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moka`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Arabica'),
(2, 'Mocha'),
(3, 'Robusta'),
(4, 'Décaféiné'),
(5, 'Bio'),
(6, 'Assemblages'),
(7, 'Équitable');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip_code` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `town` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(130) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `address`, `zip_code`, `town`, `mail`, `phone`) VALUES
(1, 'Maureene', 'Brabban', '24447 Hanson Crossing', '94368', 'Saint Louis', 'mbrabban0@123-reg.co.uk', '984829744'),
(2, 'Vick', 'Sandercock', '67304 Weeping Birch Street', '25328', 'Saint-Priest', 'vsandercock1@fastcompany.com', '462717067'),
(3, 'Kendell', 'Sysland', '0183 Burning Wood Crossing', '55826', 'Taichung', 'ksysland2@amazon.co.jp', '412736873'),
(4, 'Meryl', 'Bernini', '69260 Helena Parkway', '71956', 'Quatro Barras', 'mbernini3@usa.gov', '669035302'),
(5, 'Abramo', 'Grigolashvill', '2873 Warbler Parkway', '57372', 'Guyancourt', 'agrigolashvill4@indiatimes.com', '531442701'),
(6, 'Virgil', 'Glasser', '87 Paget Park', '34838', 'Garahan', 'vglasser5@tmall.com', '556343365'),
(7, 'Talbot', 'Sowerbutts', '45420 Ridgeway Terrace', '68224', 'Banjarkemuning', 'tsowerbutts6@instagram.com', '793487158'),
(8, 'Costanza', 'Heller', '539 Valley Edge Point', '35991', 'Hengfeng', 'cheller7@chronoengine.com', '105915465'),
(9, 'Brigit', 'Torrie', '978 Towne Trail', '49808', 'San Antonio', 'btorrie8@biblegateway.com', '66701720'),
(10, 'Mead', 'Streak', '0306 Walton Pass', '82179', 'Bihoro', 'mstreak9@abc.net.au', '465748421'),
(11, 'Taffy', 'Gothliff', '3462 Sycamore Way', '50781', 'Korotych', 'tgothliffa@google.es', '854219228'),
(12, 'Pancho', 'Beazley', '631 Paget Crossing', '29562', 'Donskoy', 'pbeazleyb@qq.com', '341982587'),
(13, 'Wendi', 'Lartice', '49101 Vidon Street', '57092', 'Lewo', 'wlarticec@discuz.net', '828183839'),
(14, 'Aveline', 'Cooksley', '781 Mosinee Court', '16166', 'Sarkanjut', 'acooksleyd@admin.ch', '784798924'),
(15, 'Hyacinth', 'Wildash', '8 Di Loreto Plaza', '95854', 'Perivólia', 'hwildashe@people.com.cn', '649923386'),
(16, 'Brook', 'Kilner', '9630 Coolidge Crossing', '14161', 'Wunat', 'bkilnerf@hao123.com', '940678836'),
(17, 'Elia', 'Brimmell', '09684 Stuart Lane', '87193', 'Ore', 'ebrimmellg@loc.gov', '716936750'),
(18, 'Aubert', 'Jowling', '781 Bultman Circle', '62908', 'Cajicá', 'ajowlingh@dell.com', '569999075'),
(19, 'Vernor', 'Dorling', '05720 Emmet Terrace', '11489', 'Goshogawara', 'vdorlingi@reverbnation.com', '179916197'),
(20, 'Tucky', 'Yaneev', '4619 Coleman Terrace', '85604', 'Obrera', 'tyaneevj@slashdot.org', '176708557'),
(21, 'Findley', 'Titterton', '419 Johnson Crossing', '25938', 'Jalapa', 'ftittertonk@ask.com', '265920779'),
(22, 'Rosalyn', 'Treweek', '65 Cardinal Pass', '75001', 'Providencia', 'rtreweekl@e-recht24.de', '212209748'),
(23, 'Gabrielle', 'McDavid', '169 Sugar Junction', '30285', 'Malaba', 'gmcdavidm@weather.com', '862829087'),
(24, 'Hazlett', 'Pointon', '5 Hoard Drive', '94895', 'Sukamaju', 'hpointonn@ibm.com', '33694874'),
(25, 'Melly', 'Pitceathly', '5822 Main Junction', '32813', 'Ghāt', 'mpitceathlyo@hao123.com', '498695002'),
(26, 'Mattie', 'Spenceley', '651 Kennedy Trail', '23355', 'Roboré', 'mspenceleyp@timesonline.co.uk', '739744988'),
(27, 'Nikkie', 'Kubczak', '55 Shasta Road', '74995', 'Kabankalan', 'nkubczakq@artisteer.com', '288200419'),
(28, 'Mannie', 'Sharplin', '8535 Dahle Hill', '45437', 'Sovetskaya Gavan’', 'msharplinr@stumbleupon.com', '531201510'),
(29, 'Drew', 'Rosini', '2 Larry Place', '75210', 'Klatakan', 'drosinis@examiner.com', '397031886'),
(30, 'Ethan', 'Clemmen', '28993 Buhler Way', '62129', 'Baishi', 'eclemment@whitehouse.gov', '255010220'),
(31, 'Cesare', 'Bownd', '7 Leroy Point', '25254', 'Shijie', 'cbowndu@wufoo.com', '899583246'),
(32, 'Dael', 'Roose', '4122 Bonner Road', '30388', 'Brinkmann', 'droosev@github.com', '356240812'),
(33, 'Judas', 'Meritt', '1918 Anthes Pass', '88748', 'Danirai', 'jmerittw@list-manage.com', '834672125'),
(34, 'Germaine', 'Dible', '26 Meadow Ridge Parkway', '34076', 'Töysä', 'gdiblex@google.ca', '660189501'),
(35, 'Raynor', 'Hearfield', '0893 Esch Avenue', '44385', 'Nechanice', 'rhearfieldy@wunderground.com', '663358044'),
(36, 'Ellyn', 'Darby', '1 New Castle Way', '60485', 'Yangzhuang', 'edarbyz@plala.or.jp', '824350363'),
(37, 'Drucill', 'Boissier', '52 Bobwhite Junction', '14505', 'Šabac', 'dboissier10@umich.edu', '258859267'),
(38, 'Dorian', 'Lipman', '05950 School Crossing', '96238', 'Conchamarca', 'dlipman11@disqus.com', '691356386'),
(39, 'Deane', 'Cowland', '702 Spenser Court', '94306', 'Voronezh', 'dcowland12@geocities.com', '936044504'),
(40, 'Banky', 'Sherrin', '38717 Jenifer Court', '43663', 'Rezh', 'bsherrin13@tripod.com', '218374515'),
(41, 'Land', 'Seifenmacher', '03 Di Loreto Point', '40038', 'Antofagasta', 'lseifenmacher14@a8.net', '939852632'),
(42, 'Libbie', 'Hamlen', '77797 Rusk Parkway', '49908', 'Wajir', 'lhamlen15@uiuc.edu', '290653472'),
(43, 'Teresa', 'Neely', '9553 Ohio Park', '68763', 'Huangrangping', 'tneely16@dailymail.co.uk', '606934961'),
(44, 'Tate', 'Paulus', '9623 Porter Crossing', '59389', 'Wang Yang', 'tpaulus17@sfgate.com', '205568881'),
(45, 'Aurea', 'Keers', '245 Vidon Terrace', '98743', 'Bayanhoshuu', 'akeers18@paypal.com', '168361221'),
(46, 'Travers', 'Androlli', '0 Anthes Avenue', '99406', 'Brest', 'tandrolli19@wordpress.com', '501746144'),
(47, 'Georgiana', 'Riquet', '5 Farwell Circle', '45451', 'Moanemani', 'griquet1a@tripod.com', '282387954'),
(48, 'Dominick', 'Jiggins', '2 Sommers Terrace', '40314', 'Zhongjiapu', 'djiggins1b@ning.com', '905370903'),
(49, 'Marylin', 'Poff', '84 Larry Trail', '84157', 'Austin', 'mpoff1c@taobao.com', '289654604'),
(50, 'Reuben', 'Clark', '5 4th Lane', '69030', 'Ashikaga', 'rclark1d@elegantthemes.com', '194592777');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `quantity_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `supplier_id`, `category_id`, `quantity_id`, `type_id`, `name`, `description`, `image`, `price`) VALUES
(57, 2, 1, 3, 4, 'Finca La Joya Salvador', 'Le café Finca La Joya Salvador est un café rare grand cru en provenance \r\nd\'Amérique Latine. Découvrez toute l’intensité des arômes de ce café longue \r\nconservation que nos caféologues ont sélectionné pour son goût equilibré et intense. \r\nLaissez-vous séduire à votre tour, par les saveurs de ce café robe de moine, torréfié à cœur par Cafés Henri.', 'finca-la-joya-salvador.jpg', 15),
(58, 8, 1, 5, 2, 'Dosettes Expresso - Mexique Custepec', 'Le café 25 dosettes Expresso - Mexique Custepec est un grand cru en provenance d\'Amérique Latine. \r\nDécouvrez toute l’intensité des arômes de ce café longue conservation que nos \r\ncaféologues ont sélectionné pour son goût equilibré et léger. Compatible avec votre machine \r\nSystème ESE, laissez-vous séduire par les saveurs de ce café torréfié à cœur par Cafés Henri.', '25-dosettes-expresso-mexique-custepec.jpg', 12),
(59, 6, 6, 6, 2, 'Dosettes Elsass Café', 'ELSASS CAFE est un merveilleux assemblage de 4 arabicas issus de 3 continents différents: Afrique, Amérique et Asie.\r\nCrée par Frédéric Steiner, le patron lui-même, et torréfié dans nos établissements en Alsace suivant une méthode lente unique en Europe.\r\nLa méthode lente permet le développement complet des arômes. Son goût remarquable est absolument unique ; c\'est un café que l\'on n\'oublie pas, qui reste gravé dans notre mémoire gustative.\r\nDoux, riche en arômes avec un zeste de vigueur, très long en bouche. \r\nDosettes souples compatibles pour machine Senseo®', 'lot-de-36-dosettes-elsass-cafe-2-offertes-format-xl.jpg', 18),
(60, 4, 5, 4, 2, 'Elsass-cafe-bio', 'Le café Pochon de 18 dosettes Elsass Café BIO est un bio assemblage d\'origine mixte (blend). \r\nDécouvrez toute l’intensité des arômes de ce café longue conservation que nos \r\ncaféologues ont sélectionné pour son goût equilibré. Compatible avec votre machine Senseo ®, \r\nlaissez-vous séduire par les saveurs de ce café torréfié à cœur par Cafés Henri.', 'elsass-cafe-bio.jpg', 17),
(61, 11, 1, 1, 4, 'Papouasie Nouvelle-Guignée Morobe', 'Le café Papouasie Nouvelle-Guignée Morobe \r\n125g est un café rare grand cru bio en provenance d\'Océanie. Découvrez toute l’intensité \r\ndes arômes de ce café longue conservation que nos caféologues ont sélectionné pour son goût equilibré et léger. \r\nLaissez-vous séduire à votre tour, par les saveurs de ce café robe de moine, torréfié à cœur par Cafés Henri.', 'papouasie-nouvelle-guignee-morobe.jpg', 5),
(62, 8, 7, 1, 4, 'Zambie Kachipapa', 'Arabica du Zambie\r\nCultivé dans une ferme familiale de la région de Serenje, ce grand cru pousse à 1450m d’altitude, \r\ndans un sol sablonneux rouge profond, avec des niveaux de nutriments élevés.\r\nLes fruits sont cueillis et triés à la main. \r\nLes grains sont ensuite lavés et séchés avec le plus grand soin.\r\nDes arômes de baies et de fruits à noyaux, un corps juteux \r\net une longueur en bouche remarquable  avec des notes de caramel sucré,\r\n en font un  breuvage  hors du commun…', 'zambie-kachipapa.jpg', 6),
(63, 10, 4, 7, 3, 'Décaféiné - Capsules compatibles Nespresso', 'Pure Premium Arabica Décaféiné à l\'eau, un café d\'exception.\r\nL\'assemblage harmonieux d\'Arabicas venant des meilleures plantations du monde, une décaféination selon un procédé moderne sans aucun solvant et l\'art d\'une torréfaction traditionnelle, font de Pure Arabica Décaféiné à l\'eau un café qui préservera votre sommeil et vous surprendra par l\'authenticité de ses arômes.\r\nCompatibles Nespresso*\r\n*Capsules compatibles avec les machines suivantes: Citiz®, Inissia0174, Latissima®, Maestria®, Pixie®, Essenza®, Prodigio®.', 'decafeine-etui-de-10-capsules-compatibles-nespresso.jpg', 4),
(64, 3, 4, 7, 3, 'Colombie Supremo - Capsules compatibles Nespresso', 'Cultivé à 2000 m d\'altitude à l\'ombre des bananiers sur les terres volcaniques de la cordillère des Andes, les Supremo comptent parmi les plus fameux cafés.\r\nCafé au goût fruité.\r\nCompatibles Nespresso*\r\n*Capsules compatibles avec les machines suivantes: Citiz®, Inissia®, Latissima®, Maestria®, Pixie®, Essenza®, Prodigio®', 'colombie-supremo-etui-de-10-capsules-compatibles-nespresso.jpg', 4),
(65, 11, 3, 7, 3, 'Guatemala Antigua - Capsules compatibles Nespresso', 'Café cultivé sur les hauts plateaux de la région d\'Antigua sur la côte pacifique du Guatemala. Le climat et le terrain exceptionnel produisent un café au goût riche et à l\'arôme généreux.\r\nCompatibles Nespresso*\r\n*Capsules compatibles avec les machines suivantes: Citiz®, Inissia®, Latissima®, Maestria®, Pixie®, Essenza®, Prodigio®', 'guatemala-antigua-etui-de-10-capsules-compatibles-nespresso.jpg', 4),
(66, 2, 6, 7, 3, 'Guatemala Antigua - Capsules compatibles Nespresso', 'Café cultivé sur les hauts plateaux de la région d\'Antigua sur la côte pacifique du Guatemala. Le climat et le terrain exceptionnel produisent un café au goût riche et à l\'arôme généreux.\r\nCompatibles Nespresso*\r\n*Capsules compatibles avec les machines suivantes: Citiz®, Inissia®, Latissima®, Maestria®, Pixie®, Essenza®, Prodigio®', 'guatemala-antigua-etui-de-10-capsules-compatibles-nespresso.jpg', 4),
(67, 11, 6, 7, 3, 'Expresso - Capsules compatibles Nespresso', 'Une sélection de cafés de tout PREMIER CHOIX venus des meilleures régions de culture du monde, ainsi que l’art d’une torréfaction traditionnelle qui préserve et développe les arômes, font ded cafés PURES PREMIUM des cafés d’exception.\r\nPURE PREMIUM EXPRESSO, assemblage à la saveur corsée et aux arômes intenses des cafés typiquement italiens.\r\n*Capsules compatibles avec les machines suivantes: Citiz®, Inissia®, Latissima®, Maestria®, Pixie®, Essenza®, U®, Prodigio®. ', 'espresso-capsules-etui-de-10.jpg', 4),
(68, 1, 7, 2, 1, 'Colombie Supremo', 'Cultivé à 2000 m d’altitude à l’ombre des bananiers sur les terres volcaniques de la cordillère des Andes, les Supremo comptent parmi les plus fameux cafés\r\nde Colombie. Café au goût fruité. Gamme Pure Originel.', 'colombie-supremo.jpg', 5),
(69, 1, 3, 1, 2, 'Dégustation', 'Moka d’Ethiopie Arabica d’Afrique, ce café est un grand cru au goût puissant, onctueux et parfumé provenant de la culture de caféiers semi-sauvages poussant en forêt et en plantations traditionnelles.\r\nTeneur faible en caféine', 'degustation.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `quantities`
--

CREATE TABLE `quantities` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `quantities`
--

INSERT INTO `quantities` (`id`, `name`) VALUES
(1, '250g '),
(2, '500g'),
(3, '1 kg'),
(4, '18 dosettes'),
(5, '25 dosettes'),
(6, '36 dosettes'),
(7, '10 capsules');

-- --------------------------------------------------------

--
-- Structure de la table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`) VALUES
(1, 'Terre d\'origine'),
(2, 'Gayor'),
(3, 'Café Massat'),
(4, 'Wolrd café'),
(5, 'Okakao'),
(6, 'Café Henri'),
(7, 'RÜEGG\'S KAFFEE'),
(8, 'Café Liègeois'),
(9, 'Les cafés du père Jaco'),
(10, 'Zalapong'),
(11, 'KOFFIECAFE');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'café moulu'),
(2, 'café dosette'),
(3, 'café capsule'),
(4, 'café en grains');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `quantity_id` (`quantity_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Index pour la table `quantities`
--
ALTER TABLE `quantities`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `quantities`
--
ALTER TABLE `quantities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`quantity_id`) REFERENCES `quantities` (`id`),
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
