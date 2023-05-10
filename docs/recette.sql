-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `genres` (`id`, `name`) VALUES
(1,	'vegan'),
(2,	'vegetarien'),
(3,	'épicé'),
(4,	'gourmand'),
(5,	'sain'),
(6,	'cuisine du monde'),
(7,	'apero'),
(8,	'goûter');

DROP TABLE IF EXISTS `genre_recette`;
CREATE TABLE `genre_recette` (
  `recette_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `recipe`;
CREATE TABLE `recipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT 'Nom de la recette',
  `description` text NOT NULL COMMENT 'Recette pas à pas',
  `image` text NOT NULL COMMENT 'Photo de la recette',
  `type` text NOT NULL COMMENT 'Type de recette : entrée, plat, dessert',
  `genre_id` int(11) DEFAULT NULL,
  `items` text DEFAULT NULL,
  `source` text DEFAULT NULL,
  `instructions` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `genre_id` (`genre_id`),
  CONSTRAINT `recipe_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `recipe` (`id`, `name`, `description`, `image`, `type`, `genre_id`, `items`, `source`, `instructions`) VALUES
(1,	'Crêpes',	'Des crêpes légères pour la chandeleur.',	'/images/crepes.png',	'dessert',	NULL,	'(pour 11 grandes crêpes environ)\r\n\r\n350  g de farine de blé\r\n50 g de fécule\r\n2 c. à soupe d’huile\r\n45 cl de lait végétal (amande, soja/vanille ou celui que vous préférez)\r\n25 cl d’eau',	'https://vegan-pratique.fr/recettes/crepes-simplissimes/',	'ÉTAPE 1 Dans un saladier, verser la farine et la fécule avec le sel et le sucre. Mélanger.\r\n\r\nFaire un puits et verser l’huile. Mélanger légèrement.\r\n\r\nAjouter le lait petit à petit, en mélangeant en même temps ou entre chaque ajout. Ceci évite que la pâte fasse des grumeaux (ce qui arrive si on verse le lait d’un coup). Si des grumeaux se forment, passer un coup de mixeur.\r\n\r\nEnfin, ajouter l’eau et remuer jusqu’à obtenir une pâte bien lisse.\r\n\r\nLaisser reposer environ 2 h à température ambiante (moins longtemps si on est pressé !). Ce temps de pause permet aux crêpes d’être bien souples et élastiques et non cassantes.\r\n\r\nMélanger à nouveau. La pâte a dû épaissir. Vous pouvez alors rajouter un peu d’eau jusqu’à ce qu’elle redevienne aussi fluide qu’avant le temps de repos.\r\n\r\nRépartir quelques gouttes d’huile sur la surface d’une poêle et faire chauffer. Lorsque la poêle est bien chaude, verser une louche de pâte et étaler sur toute la surface. Cuire 2 à 3 minutes environ.\r\n\r\nRetourner la crêpe et cuire 1 minute de l’autre côté.\r\n\r\nRecommencer jusqu’à épuisement de la pâte.'),
(2,	'Curry',	'Une recette de curry onctueuse et crémeuse comme vous n\'en avez jamais goûté. Vos papilles vous remercieront.',	'/images/curry.jpg',	'plat',	3,	'Pour 4 personnes :\r\n\r\n400 g de carotte\r\n2 courgettes\r\n1⁄2 c.à.s de cumin\r\npoivre\r\nsel\r\n1 patate douce (300-400 g)\r\n3 échalotes\r\n3 gousses d\'ail\r\n30 cl de crème de coco\r\n50 g de pâte de curry rouge\r\n2 c.à.s de concentré de tomates\r\ncitron vert\r\n1 petit piment\r\nbasilic',	'https://www.marmiton.org/recettes/recette_curry-de-legumes-vegetarien_88522.aspx',	'ÉTAPE 1\r\n\r\nDébiter les carottes en fines tranches et la patate en petits morceaux. Découper les courgettes en quarts de rondelles tout en conservant la peau.\r\n\r\nÉTAPE 2\r\n\r\nDétailler les échalotes et l\'ail et les faire dorer dans une grande sauteuse avec un peu d\'huile. Ajouter les légumes, réduire le feu et couvrir.\r\n\r\nÉTAPE 3\r\n\r\nEn parallèle, dans un saladier, mélanger la crème de coco, le concentré de tomates et la pâte de curry avec le jus des citrons verts. Ajouter le piment et le basilic moulus, le cumin, et napper les légumes de ce mélange bien homogène. Ajouter 1/2 verre d\'eau.\r\n\r\nÉTAPE 4\r\nPoivrer et saler à discrétion.\r\n\r\nÉTAPE 5\r\nBien laisser mijoter sous couvercle à feu minimum.'),
(3,	'Salade grecque',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lobortis orci vitae rutrum. Maecenas egestas turpis ullamcorper sapien mattis, ac posuere tortor molestie. Maecenas luctus hendrerit tellus. Suspendisse potenti. Maecenas non congue magna. Nullam eleifend neque at erat laoreet, hendrerit mattis ex tempus. Sed vel sollicitudin neque, eget efficitur nunc.',	'/images/salade.jpg',	'plat',	NULL,	NULL,	NULL,	NULL),
(4,	'Bourguignon au fruit du jacquier',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lobortis orci vitae rutrum. Maecenas egestas turpis ullamcorper sapien mattis, ac posuere tortor molestie. Maecenas luctus hendrerit tellus. Suspendisse potenti. Maecenas non congue magna. Nullam eleifend neque at erat laoreet, hendrerit mattis ex tempus. Sed vel sollicitudin neque, eget efficitur nunc.',	'/images/food.jpg',	'plat',	NULL,	NULL,	NULL,	NULL),
(5,	'Gratin de pâtes',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lobortis orci vitae rutrum. Maecenas egestas turpis ullamcorper sapien mattis, ac posuere tortor molestie. Maecenas luctus hendrerit tellus. Suspendisse potenti. Maecenas non congue magna. Nullam eleifend neque at erat laoreet, hendrerit mattis ex tempus. Sed vel sollicitudin neque, eget efficitur nunc.',	'/images/food.jpg',	'plat',	NULL,	NULL,	NULL,	NULL),
(6,	'Faire ses yaourts',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lobortis orci vitae rutrum. Maecenas egestas turpis ullamcorper sapien mattis, ac posuere tortor molestie. Maecenas luctus hendrerit tellus. Suspendisse potenti. Maecenas non congue magna. Nullam eleifend neque at erat laoreet, hendrerit mattis ex tempus. Sed vel sollicitudin neque, eget efficitur nunc.',	'/images/food.jpg',	'dessert',	NULL,	NULL,	NULL,	NULL),
(7,	'Salade Caesar',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum blandit lobortis orci vitae rutrum. Maecenas egestas turpis ullamcorper sapien mattis, ac posuere tortor molestie. Maecenas luctus hendrerit tellus. Suspendisse potenti. Maecenas non congue magna. Nullam eleifend neque at erat laoreet, hendrerit mattis ex tempus. Sed vel sollicitudin neque, eget efficitur nunc.',	'/images/food.jpg',	'plat',	NULL,	NULL,	NULL,	NULL),
(8,	'Houmous',	'Le houmous, c\'est bon !',	'/images/houmous.jpg',	'entrée',	NULL,	NULL,	NULL,	NULL);

-- 2023-05-02 18:24:19
