-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2022 at 11:24 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fz`
--

-- --------------------------------------------------------

--
-- Table structure for table `accs`
--

DROP TABLE IF EXISTS `accs`;
CREATE TABLE IF NOT EXISTS `accs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `count` smallint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accs`
--

INSERT INTO `accs` (`id`, `name`, `description`, `full_description`, `price`, `image`, `count`) VALUES
(1, 'FZ FORZA POWER 999', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '', '30', 'badminton-socks-lakersocks-fzforza-301824.jpg', 10),
(2, 'FZ FORZA POWER 996', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '', '50', 'badminton-racket-power996-fzforza-302000_1.jpg', 10),
(3, 'FZ FORZA PRECISION 5000', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '', '70', 'badminton-racket-fz-forza-precision-50005.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `bag`
--

DROP TABLE IF EXISTS `bag`;
CREATE TABLE IF NOT EXISTS `bag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bag`
--

INSERT INTO `bag` (`id`, `name`, `description`, `price`, `image`, `full_description`) VALUES
(1, 'TYRUS RACKET BAG', 'Посмотрите на этот потрясающий квадратный рюкзак!\r\n(WxHxL) 19 x 32 x 74 см\r\n', '140', 'badminton-racketbag-tyrus-fzforza.jpg', 'Посмотрите на этот потрясающий квадратный рюкзак! (WxHxL) 19 x 32 x 74 см'),
(2, 'CARTON RACKET BAG', '15 шт рюкзак сумка с уникальной печатью! Пространство достаточно для всего, что вам нужно.\r\n(ШхВхЛ) 42 х 30 х 75 см\r\n', '150', 'badminton-racketbag-carton-fzforza.jpg', '15 шт рюкзак сумка с уникальной печатью! Пространство достаточно для всего, что вам нужно. (ШхВхЛ) 42 х 30 х 75 см'),
(3, 'TASHIN RACKET BAG', 'Сумка из рюкзака 6 шт. В стильных цветах.\r\n(WxHxL) 25 x 30 x 73 см\r\n', '80', 'badminton-racketbag-tashin-fzforza3.jpg', 'Сумка из рюкзака 6 шт. В стильных цветах. (WxHxL) 25 x 30 x 73 см'),
(4, 'LENNON BACKPACK', 'Сумка позволяет упаковать свет и легко. Основное оборудование для игроков в бадминтон.\r\n', '80', 'badminton-bags-lennonbackpack-yellow-fzforza-301648_1_1.jpg', 'Правильное оборудование важно, когда вы играете в бадминтон. Рюкзак Леннона позволяет вам легко и легко упаковывать. Сумка для ракетки имеет прохладный дизайн и поставляется в двух разных цветах; вам просто нужно выбрать цвет для вас. Этот рюкзак идеально подходит для любого дня матча или тренировочного мероприятия.\r\n\r\n100% полиэстер\r\nРюкзак рюкзака\r\nРазмер (WxHxL): 23x50x35 см\r\n'),
(5, 'LENNON BACKPACK', 'Сумка позволяет упаковать свет и легко. Основное оборудование для игроков в бадминтон.\r\n', '80', 'badminton-backpack-lennon-fzforza.png', 'Правильное оборудование важно, когда вы играете в бадминтон. Рюкзак Леннона позволяет вам легко и легко упаковывать. Сумка для ракетки имеет прохладный дизайн и поставляется в двух разных цветах; вам просто нужно выбрать цвет для вас. Этот рюкзак идеально подходит для любого дня матча или тренировочного мероприятия.\r\n\r\n100% полиэстер\r\nРюкзак рюкзака\r\nРазмер (WxHxL): 23x50x35 см\r\n'),
(6, 'LENNON BACKPACK', 'Сумка позволяет упаковать свет и легко. Основное оборудование для игроков в бадминтон.\r\n', '80', 'badminton-backpack-lennon-blue-fzforza.jpg', 'Правильное оборудование важно, когда вы играете в бадминтон. Рюкзак Леннона позволяет вам легко и легко упаковывать. Сумка для ракетки имеет прохладный дизайн и поставляется в двух разных цветах; вам просто нужно выбрать цвет для вас. Этот рюкзак идеально подходит для любого дня матча или тренировочного мероприятия.\r\n\r\n100% полиэстер\r\nРюкзак рюкзака\r\nРазмер (WxHxL): 23x50x35 см\r\n'),
(7, 'LENNON BACKPACK', 'Сумка позволяет упаковать свет и легко. Основное оборудование для игроков в бадминтон.\r\n', '80', 'badminton-backpack-lennon-green-fzforza.jpg', 'Правильное оборудование важно, когда вы играете в бадминтон. Рюкзак Леннона позволяет вам легко и легко упаковывать. Сумка для ракетки имеет прохладный дизайн и поставляется в двух разных цветах; вам просто нужно выбрать цвет для вас. Этот рюкзак идеально подходит для любого дня матча или тренировочного мероприятия.\r\n\r\n100% полиэстер\r\nРюкзак рюкзака\r\nРазмер (WxHxL): 23x50x35 см\r\n'),
(8, 'Carlon racket bag', 'Сумка из рюкзака 6 шт. С графической печатью в стильных красных тонах.\r\n(WxHxL) 22 x 30 x 74 см\r\n', '80', 'badminton-racketbag-carlon-fzforza3.jpg', 'Сумка из рюкзака 6 шт. С графической печатью в стильных красных тонах.\r\n(WxHxL) 22 x 30 x 74 см\r\n'),
(9, 'CAPITAL RACKET BAG', '\r\n6 шт рюкзак сумка с графическим принтом в синий и белый.\r\n(WxHxL) 24 x 30 x 75 см\r\n', '80', 'badminton-racketbag-capital-fzforza.jpg', '\r\n6 шт рюкзак сумка с графическим принтом в синий и белый.\r\n(WxHxL) 24 x 30 x 75 см\r\n'),
(10, 'CORONA RACKET BAG', 'Дизайн ракетки для 9 ракеток в свежем синем цвете.\r\n(WxHxL) 30 x 30 x 73 см\r\n', '110', 'badminton-racketbag-corona-fzforza3.jpg', 'Дизайн ракетки для 9 ракеток в свежем синем цвете.\r\n(WxHxL) 30 x 30 x 73 см\r\n'),
(11, 'CALEDON RACKET BAG', 'Перенесите свою экипировку с гордостью нашей сумкой для ракетки, предназначенной для перевозки 9 ракет.\r\n(WxHxL) 30 x 30 x 73 см\r\n', '110', 'badminton-racketbag-caledon-fzforza3.jpg', 'Перенесите свою экипировку с гордостью нашей сумкой для ракетки, предназначенной для перевозки 9 ракет.\r\n(WxHxL) 30 x 30 x 73 см\r\n'),
(12, 'LARSON BACKPACK', 'Маленький рюкзак в свежем цвете.\r\n(WxHxL) 16 x 43 x 29 см\r\n', '30', 'badminton-backpack-larson-blue-fzforza_1.jpg', 'Маленький рюкзак в свежем цвете.\r\n(WxHxL) 16 x 43 x 29 см\r\n'),
(13, 'LARSON BACKPACK', 'Маленький рюкзак в свежем цвете.\r\n(WxHxL) 16 x 43 x 29 см\r\n', '30', 'badminton-backpack-larson-red-fzforza_1.jpg', 'Маленький рюкзак в свежем цвете.\r\n(WxHxL) 16 x 43 x 29 см\r\n'),
(14, 'LAMBERT TRAVEL BAG', 'Просторная дорожная сумка.\r\n', '180', 'badminton-travelbag-lambert-fzforza.png', 'Дорожная сумка Ламберт идеально подходит, если вам нужно путешествовать, чтобы участвовать в турнирах. Дорожная сумка просто супер. Кроме того, в сумке есть колеса, благодаря которым легко перемещаться.\r\n'),
(15, 'BOA VERDE RACKET BAG', 'Обновите свой внешний вид новыми цветами. Идеальная сумка для серьезного игрока в бадминтоне.\r\n', '140', 'badminton-racketbag-boaverde-fzforza.png', 'Наличие правильной ракетки и правильных ботинок имеет важное значение, когда вы играете в бадминтон, но также является правильной сумкой, гарантирующей, что у вас есть все необходимое для практики и турниров. Рюкзак Boa Verde гарантированно улучшит внешний вид бадминтона своими красивыми цветами.\r\nСумка подходит для 15 ракет, что означает, что это идеальный пакет для серьезного игрока, которому нужно носить с собой несколько ракет.\r\n\r\n100% полиэстер\r\n15 Ракетки\r\nBxHxL 40x30x77 см\r\n'),
(16, 'BOA VISTA RACKET BAG', 'Сумка для ракетки с прохладной цветовой смесью и инновационным логотипом FZ сбоку. Идеально подходит для тренировок и турниров.\r\n', '80', 'badminton-racketbag-boavista-fzforza.png', 'Сумка для ракетки Boa Vista идеально подходит, когда вы в бегах и нуждаетесь в сумке, которая может нести ваше снаряжение для бадминтона. Сумка имеет приятную смесь цветов зеленого, желтого, синего и черного цветов. Аналогично, сумка имеет прохладный, инновационный логотип FZ сбоку. Сумка для ракетки подходит для 6 ракет и может использоваться как для тренировок, так и для турниров.\r\n\r\n100% полиэстер\r\n6 Ракетки\r\nBxHxL 24x28x77 см\r\n'),
(17, 'MONT SPORTS BAG', 'ростой и современный должен иметь спортивную сумку. Изготовлен из 100% полиэстера.\r\n', '50', 'badminton-bag-fzforza-301884-mont_1.jpg', 'Сумка Mont Sports состоит из 100% полиэстера. Дизайн сумки прост и современен, что привлекает всех игроков бадминтона. Это идеальный мешок, когда вам нужно учиться или на турнире. Сумка может содержать всю вашу одежду и обувь для бадминтона.\r\n\r\n100% полиэстер\r\nСпортивная сумка\r\n(WxHxL) 30x30x52 см\r\n'),
(18, 'MINE TOILET BAG', 'Туалетная сумка FZ FORZA идеально подходит для путешествующего бадминтона. 100% полиэстер.\r\n(Ш х В х л) 10 х 11 х 25 см\r\n', '30', 'badminton-toiletbag-mine-yellow-fzforza.jpg', 'Туалетная сумка FZ FORZA идеально подходит для путешествующего бадминтона. 100% полиэстер.\r\n(Ш х В х л) 10 х 11 х 25 см\r\n'),
(19, 'MINE TOILET BAG', 'Туалетная сумка FZ FORZA идеально подходит для путешествующего бадминтона. 100% полиэстер.\r\n(Ш х В х л) 10 х 11 х 25 см\r\n', '30', 'badminton-toiletbag-mine-blue2-fzforza.jpg', 'Туалетная сумка FZ FORZA идеально подходит для путешествующего бадминтона. 100% полиэстер.\r\n(Ш х В х л) 10 х 11 х 25 см\r\n'),
(20, 'MELL PENCIL CASE', 'Крутой карандаш от FZ FORZA. Карандаш спроектирован с прохладными деталями и ярко-синим цветом.\r\n', '20', '301890_mellpencil_01103.jpg', 'Крутой карандаш от FZ FORZA. Карандаш спроектирован с прохладными деталями и ярко-синим цветом.\r\n\r\nИзготовлен из 100% полиэстера.\r\nРазмер (WxHxl): 5x11x25 см\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `bag_count`
--

DROP TABLE IF EXISTS `bag_count`;
CREATE TABLE IF NOT EXISTS `bag_count` (
  `bag_id` int(11) NOT NULL,
  `bag_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bag_id`,`bag_size_id`),
  KEY `shirt_id` (`bag_id`),
  KEY `bag_size_id` (`bag_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bag_count`
--

INSERT INTO `bag_count` (`bag_id`, `bag_size_id`, `count`) VALUES
(1, 1, 10),
(2, 1, 11),
(2, 2, 0),
(2, 3, 15),
(2, 4, 0),
(2, 5, 0),
(3, 1, 10),
(4, 4, 11),
(5, 4, 10),
(6, 4, 10),
(7, 4, 10),
(8, 1, 10),
(9, 1, 10),
(10, 2, 10),
(11, 2, 10),
(12, 4, 10),
(13, 4, 10),
(14, 5, 10),
(15, 3, 10),
(16, 1, 10),
(17, 5, 10),
(18, 5, 10),
(19, 5, 10),
(20, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `bag_size`
--

DROP TABLE IF EXISTS `bag_size`;
CREATE TABLE IF NOT EXISTS `bag_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `norder` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bag_size`
--

INSERT INTO `bag_size` (`id`, `name`, `norder`) VALUES
(1, '6', 1),
(2, '9', 2),
(3, '15', 3),
(4, 'Рюкзаки', 4),
(5, 'Туристические', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jacket`
--

DROP TABLE IF EXISTS `jacket`;
CREATE TABLE IF NOT EXISTS `jacket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` int(100) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `full_description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `color` (`color`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jacket`
--

INSERT INTO `jacket` (`id`, `name`, `description`, `price`, `image`, `color`, `category`, `full_description`) VALUES
(1, 'MITE HOODIE UNISEX', 'Удобное поло с уникальными деталями. Доступно как в мужском, \r\nтак и в детском размерах.', '30', 'badminton-sweatshirt-mite-fzforza_2.png', 5, 2, ''),
(2, 'GADEN HALF ZIP PULLI', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '50', 'badminton-halfzippulli-gaden-fzforza.png', 5, 1, ''),
(3, 'Palermo tee', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '70', 'badminton-tee-palermo-fzforza.jpg', 5, 1, ''),
(4, 'Pontiac Tee', 'Майка из сверхлегкого материала, обеспечивающая отличную воздухопроницаемость.', '30', 'badminton-tee-pontiac-fzforza.jpg', 5, 1, ''),
(9, 'Chicago polo', 'Эксклюзивное поло в спортивном зеленом цвете. ', '30', 'badminton-polo-chicago-fzforza.jpg', 8, 1, ''),
(10, 'Dublin Polo', 'Эксклюзивный спортивный вид и потрясающий комфорт.\r\n', '50', 'badminton-polo-dublin.jpg', 2, 1, ''),
(11, 'Dundee Polo', 'Традиционное поло с уникальными деталями в супер удобном качестве.', '70', 'badminton-polo-dundee2.jpg', 5, 2, ''),
(12, 'Dubai Tee', 'Майка с превосходным цветом, обработанная Dry-Forze для обеспечения комфорта и воздухопроницаемости.\r\n', '30', 'badminton-tee-dubai.jpg', 4, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_category`
--

DROP TABLE IF EXISTS `jacket_category`;
CREATE TABLE IF NOT EXISTS `jacket_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jacket_category`
--

INSERT INTO `jacket_category` (`id`, `category`) VALUES
(1, 'Мужская'),
(2, 'Женская'),
(3, 'Детская');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_color`
--

DROP TABLE IF EXISTS `jacket_color`;
CREATE TABLE IF NOT EXISTS `jacket_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jacket_color`
--

INSERT INTO `jacket_color` (`id`, `color`) VALUES
(1, 'Черный'),
(2, 'Белый'),
(4, 'Красный'),
(5, 'Голубой'),
(6, 'Желтый'),
(7, 'Серый'),
(8, 'Зеленый'),
(9, 'Розовый'),
(10, 'Оранжевый'),
(11, 'Коралловый');

-- --------------------------------------------------------

--
-- Table structure for table `jacket_count`
--

DROP TABLE IF EXISTS `jacket_count`;
CREATE TABLE IF NOT EXISTS `jacket_count` (
  `jacket_id` int(11) NOT NULL,
  `jacket_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jacket_id`,`jacket_size_id`),
  KEY `shirt_id` (`jacket_id`),
  KEY `jacket_size_id` (`jacket_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jacket_count`
--

INSERT INTO `jacket_count` (`jacket_id`, `jacket_size_id`, `count`) VALUES
(1, 1, 10),
(1, 2, 11),
(1, 3, 1),
(2, 2, 15),
(3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jacket_size`
--

DROP TABLE IF EXISTS `jacket_size`;
CREATE TABLE IF NOT EXISTS `jacket_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `norder` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jacket_size`
--

INSERT INTO `jacket_size` (`id`, `name`, `norder`) VALUES
(1, 'XS', 10),
(2, 'S', 20),
(3, 'M', 30),
(4, 'L', 40),
(5, 'XL', 50),
(6, 'XXL', 60);

-- --------------------------------------------------------

--
-- Table structure for table `racket`
--

DROP TABLE IF EXISTS `racket`;
CREATE TABLE IF NOT EXISTS `racket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `full_description` varchar(1000) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hole_id` smallint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `racket`
--

INSERT INTO `racket` (`id`, `name`, `description`, `full_description`, `price`, `image`, `hole_id`) VALUES
(1, 'FZ FORZA POWER 999', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', 'Новая развитая структура, которая фокусируется на власти. Аэродинамика для отличной скорости качания, точка баланса 300 и немного шире в верхней части рамы с дополнительной мощностью для вас делает этот ракеткой идеальным выбором для атакующего игрока, который хотел закончить ралли с огромным размахом силы.  Отверстия 88 Вес 88g Баланс 300 мм (HH) Гибкость жесткая (4) Вал 40 T - усиленный CNT U-HM Рама 40 T - усиленная титаном CNT U-HM Мощность 10 Игрок Offensive Натяжение 22-30 фунтов', '260', 'badminton-racket-fz-forza-power-999.jpg', 2),
(2, 'FZ FORZA POWER 996', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', 'С помощью этой ракетки мы вновь запустили нашу инновационную и узнаваемую систему с 96 отверстиями. В ракетке имеется система с 96 отверстиями, которая обеспечивает лучший контроль, в то время как усиленная титаном головка гарантирует превосходную точность, хотя вал Kevlar® дает вам мощность. Эта ракетка предлагает лучший контроль и мощность и предназначена только для элитных и турнирных игроков.  Отверстия 96 Вес 86g Баланс 295 мм Гибкость Очень жесткая (5) Вал 40 T - кевлар усиленный CNT U-HM Рама 40 T CNT U-HM графит с 4 шт. Ti. Мощность 10 Игровой раунд Напряжение 22-28 фунтов', '260', 'badminton-racket-power996-fzforza-302000_1.jpg', 2),
(3, 'FZ FORZA PRECISION 5000', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', 'Средний вал помогает создать мощность, в то время как идеальный баланс помогает создавать точность и контроль.  Благодаря среднему валу эта ракетка помогает создать мощность, в то время как идеальный баланс помогает создавать точность и контроль. Идеальный выбор для игроков, которые ищут качественную ракетку с высшим балансом сил, чувством и повышенной точностью.  Отверстия 88 Вес 87g Баланс 290 мм (М) Гибкость Средний (3) Вал 24 T - CNT U-HM Graphite Рамка 24 T - CNT U-HM Графит Мощность 7 Игровой раунд Напряжение 22-26 фунтов', '130', 'badminton-racket-fz-forza-precision-50005.jpg', 2),
(4, 'FZ FORZA POWER 988 VS', 'Усиленный вал Kevlar® создает максимальную мощность. Ракетка для доминирующего игрока.', 'Отверстия: 88\r\nВес: 87 г\r\nБаланс: 295 мм\r\nГибкость: очень жесткая (5)\r\nВал: 40 T - усиленный CNT U-HM\r\nРама: 40 T - усиленная титаном CNT U-HM\r\nМощность: 10\r\nИгрок: Оскорбительный\r\nНапряжение: 22-28 фунтов', '240', 'badminton-racket-power988vs-fzforza-302001_1.jpg', 2),
(5, 'FZ FORZA POWER 988 S COLOR UP', 'Мощная ракетка, обеспечивающая ваши снимки, остается в пределах линий.', 'Отверстия: 88\r\nВес: 87 г\r\nБаланс: 295 мм\r\nГибкость: жесткая (4)\r\nВал: 40 T - усиленный CNT U-HM\r\nРама: 40 T - усиленная титаном CNT U-HM\r\nМощность: 10\r\nИгрок: Оскорбительный\r\nНапряжение: 22-28 фунтов\r\n', '240', 'badminton-racket-power988s-fzforza.png', 2),
(8, 'FZ FORZA POWER 988 M', 'Ракетка для доминирующего игрока, который хочет власти на суд бадминтона.\r\n', 'Отверстия: 88\r\nВес: 87 г\r\nБаланс: 295 мм\r\nГибкость: Средняя (3)\r\nВал: 40 T - усиленный CNT U-HM\r\nРама: 40 T-Titanium усиленная CNT U-HM\r\nМощность: 9\r\nИгрок: Оскорбительный\r\nНапряжение: 22-28 фунтов', '240', 'badminton-racket-power988m-fzforza-302003_1.jpg', 2),
(9, 'FZ FORZA POWER 988 M COLOR UP', 'Мощная ракетка, обеспечивающая ваши снимки, остается в пределах линий.', 'Отверстия: 88\r\nВес: 87 г\r\nБаланс: 295 мм\r\nГибкость: Средняя (3)\r\nВал: 40 T - усиленный CNT U-HM\r\nРама: 40 T - усиленная титаном CNT U-HM\r\nМощность: 9\r\nИгрок: Оскорбительный\r\nНапряжение: 22-28 фунтов\r\n', '240', 'badminton-racket-power988m-fzforza.png', 2),
(10, 'FZ FORZA POWER 988 F', 'Мощная ракетка с усиленным валом и титановой рамой. Предназначен для доминирующего игрока.\r\n', 'Отверстия: 88\r\nВес: 87 г\r\nБаланс: 295 мм\r\nГибкость: гибкая (2)\r\nВал: 40 T - усиленный CNT U-HM\r\nРама: 40 T - усиленная титаном CNT U-HM\r\nМощность: 9\r\nИгрок: Оскорбительный\r\nНапряжение: 22-28 фунтов\r\n', '240', 'badminton-racket-power988f-fzforza-302004_1.jpg', 2),
(11, 'FZ FORZA POWER 888 F', 'Сила, долговечность и точность описывают эту ракетку. Идеальное оружие для отдыхающего игрока.\r\n', 'С множеством ракеток с валом Kevlar® и титановой головкой эти ракетки предназначены для игроков досуга, которым нужна головная тяжелая ракетка с технологией, которая работает. Футляр FZ Forza Power 888 F имеет систему из 88 отверстий, которая обеспечивает дополнительное ощущение и контроль при игре;\r\nтакже рама усилена титаном для дополнительной точности и долговечности.\r\n', '190', 'badminton-racket-power888f-fzforza-302007_1.jpg', 2),
(12, 'FZ FORZA POWER 888 M', 'Ракетка обеспечивает дополнительный контроль и долговечность. Мощная ракетка для игроков досуга.\r\n', 'С множеством ракеток с валом Kevlar® и титановой головкой эти ракетки предназначены для игроков досуга, которым нужна головная тяжелая ракетка с технологией, которая работает. В ракетке FZ Forza Power 888 M имеется система с цепочкой из 88 отверстий, которая обеспечивает дополнительное ощущение и контроль при игре;\r\nтакже рама усилена титаном для дополнительной точности и долговечности.\r\n', '190', 'badminton-racket-power888m-fzforza-302006_1.jpg', 2),
(13, 'FZ FORZA POWER 888 S', 'Титановая головка, вал Kevlar® и система из 88 отверстий. Идеальная ракетка для игроков досуга.\r\n', 'Вы хотите власти? Мы тебя охватили. С множеством ракеток с валом Kevlar® и титановой головкой эти ракеты идеально подходят для игроков досуга, которым нужна головная тяжелая ракетка с технологией, которая работает. Система стволов с 88 отверстиями обеспечивает дополнительное ощущение и контроль при игре;\r\nтакже рама усилена титаном для дополнительной точности и долговечности.\r\n', '190', 'badminton-racket-power888s-fzforza-302005_1.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `racket_accs`
--

DROP TABLE IF EXISTS `racket_accs`;
CREATE TABLE IF NOT EXISTS `racket_accs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `count` smallint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `racket_accs`
--

INSERT INTO `racket_accs` (`id`, `name`, `description`, `full_description`, `price`, `image`, `count`) VALUES
(4, 'SUPER GRIP', 'Оптимизируйте свою игру с яркой хваткой. Выберите цвет, который подходит вашему взгляду на бадминтон.\r\n', 'Идеальный внешний вид бадминтона представляет собой подходящие аксессуары. FZ Super Grip позволяет оптимизировать вашу игру. Этот захват имеет разные цвета, которые нравятся как мальчикам, так и девочкам. Выберите цвет, который вам нравится, и подвигайте свой взгляд и играйте.\r\n\r\n3 pcs./card\r\n', '8', '300166_supergrip_white.png', 10),
(5, 'SUPER GRIP', 'Оптимизируйте свою игру с яркой хваткой. Выберите цвет, который подходит вашему взгляду на бадминтон.\r\n', 'Идеальный внешний вид бадминтона представляет собой подходящие аксессуары. FZ Super Grip позволяет оптимизировать вашу игру. Этот захват имеет разные цвета, которые нравятся как мальчикам, так и девочкам. Выберите цвет, который вам нравится, и подвигайте свой взгляд и играйте.\r\n\r\n3 pcs./card\r\n', '8', 'badminton-accessories-supergripgrey-fzforza-300166_1_2.jpg', 10),
(6, 'SUPER GRIP', 'Оптимизируйте свою игру с яркой хваткой. Выберите цвет, который подходит вашему взгляду на бадминтон.\r\n', 'Идеальный внешний вид бадминтона представляет собой подходящие аксессуары. FZ Super Grip позволяет оптимизировать вашу игру. Этот захват имеет разные цвета, которые нравятся как мальчикам, так и девочкам. Выберите цвет, который вам нравится, и подвигайте свой взгляд и играйте.\r\n\r\n3 pcs./card\r\n', '8', 'badminton-accessories-supergrippink-fzforza-300166_2.jpg', 10),
(7, 'SUPER GRIP', 'Оптимизируйте свою игру с яркой хваткой. Выберите цвет, который подходит вашему взгляду на бадминтон.\r\n', 'Идеальный внешний вид бадминтона представляет собой подходящие аксессуары. FZ Super Grip позволяет оптимизировать вашу игру. Этот захват имеет разные цвета, которые нравятся как мальчикам, так и девочкам. Выберите цвет, который вам нравится, и подвигайте свой взгляд и играйте.\r\n\r\n3 pcs./card\r\n', '8', '300166_supergrip_black.png', 10),
(8, 'SUPER GRIP', 'Оптимизируйте свою игру с яркой хваткой. Выберите цвет, который подходит вашему взгляду на бадминтон.\r\n', 'Идеальный внешний вид бадминтона представляет собой подходящие аксессуары. FZ Super Grip позволяет оптимизировать вашу игру. Этот захват имеет разные цвета, которые нравятся как мальчикам, так и девочкам. Выберите цвет, который вам нравится, и подвигайте свой взгляд и играйте.\r\n\r\n3 pcs./card\r\n', '8', '300166_supergrip_blue.png', 10),
(9, 'SUPER GRIP', 'Оптимизируйте свою игру с яркой хваткой. Выберите цвет, который подходит вашему взгляду на бадминтон.\r\n', 'Идеальный внешний вид бадминтона представляет собой подходящие аксессуары. FZ Super Grip позволяет оптимизировать вашу игру. Этот захват имеет разные цвета, которые нравятся как мальчикам, так и девочкам. Выберите цвет, который вам нравится, и подвигайте свой взгляд и играйте.\r\n\r\n3 pcs./card\r\n', '8', '300166_supergrip_yellow.png', 10),
(10, 'SUPER GRIP', 'Оптимизируйте свою игру с яркой хваткой. Выберите цвет, который подходит вашему взгляду на бадминтон.\r\n', 'Идеальный внешний вид бадминтона представляет собой подходящие аксессуары. FZ Super Grip позволяет оптимизировать вашу игру. Этот захват имеет разные цвета, которые нравятся как мальчикам, так и девочкам. Выберите цвет, который вам нравится, и подвигайте свой взгляд и играйте.\r\n\r\n3 pcs./card\r\n', '8', '300166_supergrip_purple.png', 10),
(11, 'Towel grip', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', '8', '300501_towelgrip_blue.png', 10),
(12, 'Towel grip', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', '8', '300501_towelgrip_red.png', 10),
(13, 'Towel grip', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', '8', '300501_towelgrip_yellow.png', 10),
(14, 'Towel grip', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', '8', '300501_towelgrip_grey.png', 10),
(15, 'Towel grip', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', '8', '300501_towelgrip_black.png', 10),
(16, 'Towel grip', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', 'Ручка гарантирует, что у вас будет хорошее сцепление и чувство во время игры. Выберите захват, который соответствует вашему стилю игры. 2 шт. карта\r\n', '8', '300501_towelgrip_white.png', 10),
(17, 'Pro super grip reel', 'Один из абсолютных лучших перегрузок от FZ FORZA. Предлагая экстремальный контроль над ракеткой, обеспечивая хорошее ощущение с ракеткой.(10 шт.)\r\n', 'Один из абсолютных лучших перегрузок от FZ FORZA. Предлагая экстремальный контроль над ракеткой, обеспечивая хорошее ощущение с ракеткой.\r\n', '40', '302407_pro_super_grip_22m.jpg', 10),
(18, 'Pro super grip box', 'Один из абсолютных лучших перегрузок от FZ FORZA. Предлагая экстремальный контроль над ракеткой, обеспечивая хорошее ощущение с ракеткой.(40 шт.)\r\n', 'Один из абсолютных лучших перегрузок от FZ FORZA. Предлагая экстремальный контроль над ракеткой, обеспечивая хорошее ощущение с ракеткой.\r\n', '180', '302398-gripbox.jpg', 10),
(19, 'A GRIP', 'Overgrip. Белый, синий, зеленый, розовый желтый и черный. 100 шт', 'Overgrip. Белый, синий, зеленый, розовый желтый и черный. 100 шт\r\n', '120', '301597_a_grip_pink.jpg', 10),
(20, 'Soft grip', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры. 2 шт\r\n', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', '12', '300167_softgrip_pink.png', 10),
(21, 'Soft grip', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n', '12', '300167_softgrip_purple.png', 10),
(22, 'Soft grip', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', '12', '300167_softgrip_yellow.png', 10),
(23, 'Soft grip', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', '12', '300167_softgrip_blue.png', 10),
(24, 'Soft grip', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', '12', '300167_softgrip_black.png', 10),
(25, 'Soft grip', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', '12', '300167_softgrip_grey.png', 10),
(26, 'Soft grip', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', 'Собрать свой бадминтон с подходящими аксессуарами. FZ Forza Soft Grip - это сменный захват, который завершает ваш внешний вид. Мягкое сцепление гарантирует, что вы играете хорошо. Выберите захват, который соответствует вашему стилю игры.\r\n2 шт', '12', '300167_softgrip_white.png', 10),
(27, 'XTREME GRIP', 'Замена FZ Forza оптимизирует вашу игру. Оснастите эти прохладные черные аксессуары.\r\n', 'Замена FZ Forza оптимизирует вашу игру. Оснастите эти прохладные черные аксессуары.\r\n', '12', 'badminton-accessories-xtremegrip-fzforza-3834_1.jpg', 10),
(28, 'TOWEL GRIP REEL', 'Правильный захват оптимизирует игру. Ручка входит в 5 прекрасных цветов для мальчиков и девочек.\r\n', 'Правильный захват оптимизирует игру. Ручка входит в 5 прекрасных цветов для мальчиков и девочек.\r\n', '50', 'badminton-accessories-towelgripreel-fzforza-4877_1.jpg', 10),
(29, 'SUPER GRIP REEL', 'Передавайте каждый раз, когда играете с Super Grip Reel. Поставляется как в черно-белом режиме.\r\n', 'Передавайте каждый раз, когда играете с Super Grip Reel. Поставляется как в черно-белом режиме.\r\n', '30', 'badminton-accessories-supergripreel-fzforza-301571_1.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `racket_balance`
--

DROP TABLE IF EXISTS `racket_balance`;
CREATE TABLE IF NOT EXISTS `racket_balance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `balance` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `racket_balance`
--

INSERT INTO `racket_balance` (`id`, `balance`) VALUES
(1, 'В голову'),
(2, 'Нейтральный'),
(3, 'В ручку');

-- --------------------------------------------------------

--
-- Table structure for table `racket_count`
--

DROP TABLE IF EXISTS `racket_count`;
CREATE TABLE IF NOT EXISTS `racket_count` (
  `racket_id` int(11) NOT NULL,
  `racket_balance_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`racket_id`,`racket_balance_id`),
  KEY `shirt_id` (`racket_id`),
  KEY `racket_balance_id` (`racket_balance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `racket_count`
--

INSERT INTO `racket_count` (`racket_id`, `racket_balance_id`, `count`) VALUES
(1, 1, 10),
(2, 1, 15),
(3, 2, 1),
(4, 1, 11),
(5, 1, 10),
(8, 1, 10),
(9, 1, 10),
(10, 1, 10),
(11, 1, 10),
(12, 1, 10),
(13, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `racket_hole`
--

DROP TABLE IF EXISTS `racket_hole`;
CREATE TABLE IF NOT EXISTS `racket_hole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hole` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `racket_hole`
--

INSERT INTO `racket_hole` (`id`, `hole`) VALUES
(1, '76'),
(2, '88'),
(3, '96');

-- --------------------------------------------------------

--
-- Table structure for table `shirt`
--

DROP TABLE IF EXISTS `shirt`;
CREATE TABLE IF NOT EXISTS `shirt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT '',
  `color` int(100) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `full_description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `color` (`color`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shirt`
--

INSERT INTO `shirt` (`id`, `name`, `description`, `price`, `image`, `color`, `category`, `full_description`) VALUES
(1, 'GAGE POLO!!!24', 'Удобное поло с уникальными деталями. Доступно как в мужском, \r\nтак и в детском размерах.', '30', 'shirt-1.png', 5, 1, ''),
(2, 'PORTLAND POLO', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '50', 'fzforza_polo_portland_blue.jpg', 5, 1, ''),
(3, 'Palermo tee', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '70', 'badminton-tee-palermo-fzforza.jpg', 5, 2, ''),
(4, 'Pontiac Tee', 'Майка из сверхлегкого материала, обеспечивающая отличную воздухопроницаемость.', '30', 'shirt-4.jpg', 5, 1, ''),
(9, 'Chicago polo', 'Эксклюзивное поло в спортивном зеленом цвете. ', '30', 'badminton-polo-chicago-fzforza.jpg', 8, 3, ''),
(10, 'Dublin Polo', 'Эксклюзивный спортивный вид и потрясающий комфорт.\r\n', '50', 'badminton-polo-dublin.jpg', 2, 1, ''),
(11, 'Dundee Polo', 'Традиционное поло с уникальными деталями в супер удобном качестве.', '70', 'badminton-polo-dundee2.jpg', 5, 3, ''),
(12, 'Dubai Tee', 'Майка с превосходным цветом, обработанная Dry-Forze для обеспечения комфорта и воздухопроницаемости.\r\n', '30', 'badminton-tee-dubai.jpg', 4, 3, ''),
(14, 'aaaaaaaaaaaaaaa', 'sadfgdsfgsdfg', '2134', '', 4, 1, 'ASDFASDFASDF'),
(15, 'aaaaa2', 'sdfg', '999', 'shirt-15.png', 5, 2, 'sdfgsdfg');

-- --------------------------------------------------------

--
-- Table structure for table `shirt_category`
--

DROP TABLE IF EXISTS `shirt_category`;
CREATE TABLE IF NOT EXISTS `shirt_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shirt_category`
--

INSERT INTO `shirt_category` (`id`, `category`) VALUES
(1, 'Мужская'),
(2, 'Женская'),
(3, 'Детская');

-- --------------------------------------------------------

--
-- Table structure for table `shirt_color`
--

DROP TABLE IF EXISTS `shirt_color`;
CREATE TABLE IF NOT EXISTS `shirt_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shirt_color`
--

INSERT INTO `shirt_color` (`id`, `color`) VALUES
(1, 'Черный'),
(2, 'Белый'),
(4, 'Красный'),
(5, 'Голубой'),
(6, 'Желтый'),
(7, 'Серый'),
(8, 'Зеленый'),
(9, 'Розовый'),
(10, 'Оранжевый'),
(11, 'Коралловый');

-- --------------------------------------------------------

--
-- Table structure for table `shirt_count`
--

DROP TABLE IF EXISTS `shirt_count`;
CREATE TABLE IF NOT EXISTS `shirt_count` (
  `shirt_id` int(11) NOT NULL,
  `shirt_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shirt_id`,`shirt_size_id`),
  KEY `shirt_id` (`shirt_id`),
  KEY `shirt_size_id` (`shirt_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirt_count`
--

INSERT INTO `shirt_count` (`shirt_id`, `shirt_size_id`, `count`) VALUES
(1, 1, 8),
(1, 2, 11),
(1, 3, 1),
(1, 4, 3),
(1, 5, 3),
(1, 6, 4),
(1, 7, 5),
(2, 2, 15),
(3, 3, 10),
(4, 1, 42),
(4, 2, 1),
(4, 3, 0),
(4, 4, 3),
(4, 5, 12),
(4, 6, 555),
(4, 7, 999),
(9, 2, 10),
(10, 2, 10),
(11, 4, 10),
(12, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `shirt_size`
--

DROP TABLE IF EXISTS `shirt_size`;
CREATE TABLE IF NOT EXISTS `shirt_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `norder` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirt_size`
--

INSERT INTO `shirt_size` (`id`, `name`, `norder`) VALUES
(1, 'XS', 10),
(2, 'S', 20),
(3, 'M', 30),
(4, 'L', 40),
(5, 'XL', 50),
(6, 'XXL', 60),
(7, 'XXXX', 999);

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

DROP TABLE IF EXISTS `shoes`;
CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `price` char(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `full_description` varchar(2500) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `name`, `description`, `price`, `image`, `category`, `full_description`) VALUES
(1, 'PRO TRAINER M V2', 'Прочный ботинок с дополнительной стабильностью. Бадминтонная обувь высокого качества с длительной жизнью.\r\n', '34', 'badminton-shoes-protrainermv2-fzforza.png', 1, 'Благодаря встроенному корпусу TPU этот ботинок обеспечивает превосходную стабильность. Каблук крепкий и крепко обнимает ногу. Сторона ботинка усилена для дополнительной стабильности, а верхняя часть выполнена с уникальным дыхательным слоем сетки. Хотя этот ботинок очень легкий, он по-прежнему очень прочен благодаря использованию нашего высококачественного микроволокна PU верхнего размера, что также означает длительный срок службы обуви.'),
(2, 'Lingus V3', 'Как молния молнии освещала небо FZ FORZA приносит Lingus V3 обратно в суд.', '200', 'badminton-shoes-lingusv3-fzforza.jpg', 1, 'Как молния молнии освещала небо FZ FORZA приносит Lingus V3 обратно в суд. Благодаря новому стильному стилю и дополнительной стабильности, защите и долговечности Lingus V3 предлагает вам легкое перемещение после матча.'),
(3, 'FIERCE M', 'Этот стильный ботинок FZ FORZA обхватит ваши ноги и обеспечит всестороннюю защиту от пятки до передней части стопы.\r\n', '160', '302414_fierce__0099_-_website.jpg', 1, 'Этот стильный ботинок FZ FORZA обхватит ваши ноги и обеспечит всестороннюю защиту от пятки до передней части стопы. Используя дышащую сетку, она легка и удобна, а технология FZorb обеспечивает мгновенную амортизацию при прыжках. Для обеспечения поддержки арки и защиты от завихрения Fierce имеет стойку Carbon Tuck Board и хвостовик TPU на промежуточной подошве.  - Размеры: 36-48 ОБУВНАЯ ТЕХНОЛОГИЯLAT: технология боковой устойчивости повышает долговечность обуви и боковую устойчивость передней части стопы во время интенсивной и быстрой передачи направления. Боковая стабильность важна в обуви для бадминтона при быстром передвижении по суду со стороны на сторону сид. Dura-Coat: Dura-coat - это высокотехнологичная микрофибра PU, обработанная тонким покрытием. Комбинация Dura-coat придает обуви исключительную долговечность и уникальную стойкость к истиранию. Dura-coat применяется на участках, где обувь наиболее подвержена истиранию.Drylex: Drylex состоит из специального слоя сетки и отверстий в обуви, который обеспечивает отличную воздухопроницаемость для ног. Drylex помогает транспортировать влагу от ваших ног, чтобы они были сухими и удобными.'),
(4, 'NEW RESULT M', 'Удобная и дышащая обувь в минималистском и классическом дизайне.\r\n', '130', 'badminton-shoes-newresultm-fzforza.png', 1, 'Очень хороший ботинок по очень выгодной цене. Эта обувь принесет вам результаты, не повредив ваш кошелек. Обувь имеет опору для пятки и усиленный хвостовик ESS для повышения стабильности. Верхняя часть в основном встроена в сетку, чтобы обеспечить комфорт и воздухопроницаемость во время игры.\r\nМы сохранили минимальный дизайн и убедитесь, что вы получаете функциональный ботинок качества, который будет работать.\r\n'),
(5, 'FZ SPEED', 'Добавьте скорость в игру с этим ботинком. Рекомендуется для мужчин и женщин.\r\n', '120', 'badminton-shoe-fzspeed-fzforza-301998.jpg', 2, 'Передайте весь свой бадминтон с помощью ботинка FZ Speed ​​и добавьте скорость к вашей игре. Обувь поставляется в прекрасном синем цвете с прохладной черной деталью. Кроме того, это прочный ботинок и самый важный удобный ботинок, который вы можете наслаждаться годами. Рекомендуется для мужчин, юниоров и женщин.  Размер: 36 - 47'),
(6, 'LEANDER M', 'Удобный и прочный ботинок - подготовьтесь к отличным матчам впереди.\r\n', '150', 'badminton-shoes-leanderm-fzforza.jpg', 1, 'Выступайте на площадке с красивым ботинком Leander. Обувь выпускается в трех разных стилях для мужчин, юниоров и женщин. Эти ботинки супер удобны и долговечны - подготовьтесь к отличным матчам впереди. Завершите свой бадминтон с этими ботинками, выбирая правильный размер именно для вас.\r\n\r\nРазмер: 28 - 49\r\n'),
(7, 'LEANDER M', 'Удобный и прочный ботинок - подготовьтесь к отличным матчам впереди.\r\n', '150', 'badminton-shoes-leanderm-white-fzforza-301677_1.jpg', 1, 'Выступайте на площадке с красивым ботинком Leander. Обувь выпускается в трех разных стилях для мужчин, юниоров и женщин. Эти ботинки супер удобны и долговечны - подготовьтесь к отличным матчам впереди. Завершите свой бадминтон с этими ботинками, выбирая правильный размер именно для вас.\r\n\r\nРазмер: 28 - 49\r\n'),
(8, 'LEANDER M', 'Удобный и прочный ботинок - подготовьтесь к отличным матчам впереди.\r\n', '150', 'badminton-shoes-leanderm-fzforza_1.png', 1, 'Выступайте на площадке с красивым ботинком Leander. Обувь выпускается в трех разных стилях для мужчин, юниоров и женщин. Эти ботинки супер удобны и долговечны - подготовьтесь к отличным матчам впереди. Завершите свой бадминтон с этими ботинками, выбирая правильный размер именно для вас.\r\n\r\nРазмер: 28 - 49\r\n'),
(9, 'LEANDER M', 'Удобный и прочный ботинок - подготовьтесь к отличным матчам впереди.\r\n', '150', 'badminton-shoes-leanderm-fzforza (1).jpg', 1, 'Выступайте на площадке с красивым ботинком Leander. Обувь выпускается в трех разных стилях для мужчин, юниоров и женщин. Эти ботинки супер удобны и долговечны - подготовьтесь к отличным матчам впереди. Завершите свой бадминтон с этими ботинками, выбирая правильный размер именно для вас.\r\n\r\nРазмер: 28 - 49\r\n'),
(10, 'LEANDER W', 'Завершите свой взгляд на бадминтон и подготовьтесь к некоторым захватывающим матчам впереди.\r\n', '150', 'badminton-shoes-leanderw-red-fzforza-301942_1.jpg', 2, 'Обувь для бадминтона Leander очень удобна и долговечна, что делает ее идеальной на суде. Приготовьтесь к отличным матчам впереди, если вы купите этот прекрасный ботинок. Завершите свой бадминтон с помощью этой обуви, выбрав правильный размер именно для вас.\r\n\r\nРазмер: 36 - 43\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `shoes_category`
--

DROP TABLE IF EXISTS `shoes_category`;
CREATE TABLE IF NOT EXISTS `shoes_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shoes_category`
--

INSERT INTO `shoes_category` (`id`, `category`, `type`) VALUES
(1, 'Мужская', 'clothes'),
(2, 'Женская', 'clothes'),
(3, 'Детская', 'clothes');

-- --------------------------------------------------------

--
-- Table structure for table `shoes_count`
--

DROP TABLE IF EXISTS `shoes_count`;
CREATE TABLE IF NOT EXISTS `shoes_count` (
  `shoes_id` int(11) NOT NULL,
  `shoes_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shoes_id`,`shoes_size_id`),
  KEY `shirt_id` (`shoes_id`),
  KEY `shoes_size_id` (`shoes_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes_count`
--

INSERT INTO `shoes_count` (`shoes_id`, `shoes_size_id`, `count`) VALUES
(1, 1, 10),
(2, 2, 15),
(3, 3, 10),
(4, 8, 10),
(5, 6, 10),
(6, 2, 11),
(7, 3, 1),
(8, 5, 10),
(9, 5, 10),
(10, 6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `shoes_size`
--

DROP TABLE IF EXISTS `shoes_size`;
CREATE TABLE IF NOT EXISTS `shoes_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `norder` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes_size`
--

INSERT INTO `shoes_size` (`id`, `name`, `norder`) VALUES
(1, '35', 10),
(2, '36', 20),
(3, '37', 30),
(4, '38', 40),
(5, '39', 50),
(6, '40', 60),
(7, '41', 70),
(8, '42', 80),
(9, '43', 90),
(10, '44', 100),
(11, '45', 110),
(12, '46', 120);

-- --------------------------------------------------------

--
-- Table structure for table `short`
--

DROP TABLE IF EXISTS `short`;
CREATE TABLE IF NOT EXISTS `short` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` int(100) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `full_description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`),
  KEY `color` (`color`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `short`
--

INSERT INTO `short` (`id`, `name`, `description`, `price`, `image`, `color`, `category`, `full_description`) VALUES
(1, 'PERRY PANTS ', 'Удобное поло с уникальными деталями. Доступно как в мужском, \r\nтак и в детском размерах.', '30', '302324_perry_96_1.jpg', 1, 1, ''),
(2, 'LIXTON PANTS', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '50', 'badminton-vibrantvitality-lixtonpants-fzforza-301727_5.jpg', 1, 1, ''),
(3, 'Landers shorts', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '70', 'badminton-shorts-landers-black.jpg', 1, 3, ''),
(4, 'Pontiac Tee', 'Майка из сверхлегкого материала, обеспечивающая отличную воздухопроницаемость.', '30', 'badminton-tee-pontiac-fzforza.jpg', 2, 1, ''),
(9, 'Chicago polo', 'Эксклюзивное поло в спортивном зеленом цвете. ', '30', 'badminton-polo-chicago-fzforza.jpg', 2, 1, ''),
(10, 'Dublin Polo', 'Эксклюзивный спортивный вид и потрясающий комфорт.\r\n', '50', 'badminton-polo-dublin.jpg', 3, 1, ''),
(11, 'Dundee Polo', 'Традиционное поло с уникальными деталями в супер удобном качестве.', '70', 'badminton-polo-dundee2.jpg', 3, 2, ''),
(12, 'Dubai Tee', 'Майка с превосходным цветом, обработанная Dry-Forze для обеспечения комфорта и воздухопроницаемости.\r\n', '30', 'badminton-tee-dubai.jpg', 4, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `short_category`
--

DROP TABLE IF EXISTS `short_category`;
CREATE TABLE IF NOT EXISTS `short_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `short_category`
--

INSERT INTO `short_category` (`id`, `category`, `type`) VALUES
(1, 'Мужская', 'clothes'),
(2, 'Женская', 'clothes'),
(3, 'Детская', 'clothes');

-- --------------------------------------------------------

--
-- Table structure for table `short_color`
--

DROP TABLE IF EXISTS `short_color`;
CREATE TABLE IF NOT EXISTS `short_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `short_color`
--

INSERT INTO `short_color` (`id`, `color`) VALUES
(1, 'Черный'),
(2, 'Белый'),
(3, 'Желтый'),
(4, 'Коралловый');

-- --------------------------------------------------------

--
-- Table structure for table `short_count`
--

DROP TABLE IF EXISTS `short_count`;
CREATE TABLE IF NOT EXISTS `short_count` (
  `short_id` int(11) NOT NULL,
  `short_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`short_id`,`short_size_id`),
  KEY `shirt_id` (`short_id`),
  KEY `short_size_id` (`short_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `short_count`
--

INSERT INTO `short_count` (`short_id`, `short_size_id`, `count`) VALUES
(1, 1, 10),
(1, 2, 11),
(1, 3, 1),
(2, 2, 15),
(3, 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `short_size`
--

DROP TABLE IF EXISTS `short_size`;
CREATE TABLE IF NOT EXISTS `short_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `norder` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `short_size`
--

INSERT INTO `short_size` (`id`, `name`, `norder`) VALUES
(1, 'XS', 10),
(2, 'S', 20),
(3, 'M', 30),
(4, 'L', 40),
(5, 'XL', 50),
(6, 'XXL', 60);

-- --------------------------------------------------------

--
-- Table structure for table `shuttle`
--

DROP TABLE IF EXISTS `shuttle`;
CREATE TABLE IF NOT EXISTS `shuttle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` smallint(30) NOT NULL,
  `count` smallint(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shuttle`
--

INSERT INTO `shuttle` (`id`, `name`, `description`, `full_description`, `image`, `price`, `count`) VALUES
(1, 'FZ FORZA VIP!', 'Shuttles with perfect durability and flight. Tested for speed and stability in flight.', '111', 'badminton-shuttles-fzforzavip-fzforza-301554_1.jpg', 40, 99),
(2, 'FZ FORZA NS-10', 'NS-10 is a unique nylon shuttle with a natural cork head that gives you playability like the best feather shuttles. ', '', '302440_ns-10.jpg', 40, 5);

-- --------------------------------------------------------

--
-- Table structure for table `t_draws`
--

DROP TABLE IF EXISTS `t_draws`;
CREATE TABLE IF NOT EXISTS `t_draws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_id` int(11) NOT NULL,
  `type` enum('group','olymp') NOT NULL,
  `class` enum('SD','SC','SB','DD','DC','DB','XC','WS','MS','XB','XD') NOT NULL,
  `matches_count` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `winners_count` int(10) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tournament_id` (`tournament_id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_draws`
--

INSERT INTO `t_draws` (`id`, `tournament_id`, `type`, `class`, `matches_count`, `completed`, `winners_count`) VALUES
(59, 9, 'group', 'DB', 3, 1, 2),
(60, 9, 'olymp', 'DC', 3, 0, 0),
(61, 9, 'group', 'SB', 3, 0, 1),
(62, 9, 'group', 'SB', 3, 0, 1),
(63, 9, 'group', 'SB', 3, 0, 1),
(64, 9, 'group', 'XD', 3, 0, 1),
(65, 9, 'group', 'XD', 3, 0, 1),
(66, 9, 'olymp', 'DB', 3, 0, 0),
(67, 9, 'olymp', 'WS', 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_draw_players`
--

DROP TABLE IF EXISTS `t_draw_players`;
CREATE TABLE IF NOT EXISTS `t_draw_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `draw_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `draw_id` (`draw_id`),
  KEY `player_id` (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_draw_players`
--

INSERT INTO `t_draw_players` (`id`, `draw_id`, `player_id`) VALUES
(187, 59, 56),
(188, 59, 93),
(189, 59, 103),
(190, 59, 1),
(191, 60, 123),
(192, 60, 108),
(193, 60, 115),
(194, 60, 133),
(195, 60, 140),
(196, 60, 135),
(197, 61, 12),
(198, 61, 137),
(199, 61, 1),
(200, 62, 39),
(201, 62, 36),
(202, 62, 42),
(203, 63, 11),
(204, 63, 19),
(205, 63, 62),
(206, 61, 174),
(207, 63, 154),
(208, 64, 98),
(209, 64, 151),
(210, 64, 108),
(211, 65, 70),
(212, 65, 182),
(213, 65, 147),
(214, 64, 18),
(215, 66, 56),
(216, 66, 93),
(217, 67, 104),
(218, 67, 116),
(219, 67, 128),
(220, 67, 111),
(221, 67, 130),
(222, 67, 142);

-- --------------------------------------------------------

--
-- Table structure for table `t_draw_players_matches`
--

DROP TABLE IF EXISTS `t_draw_players_matches`;
CREATE TABLE IF NOT EXISTS `t_draw_players_matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `draw_id` int(11) NOT NULL,
  `draw_player1` int(11) NOT NULL,
  `draw_player2` int(11) DEFAULT NULL,
  `player1_score` smallint(6) NOT NULL,
  `player2_score` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `draw_player1` (`draw_player1`),
  KEY `draw_player2` (`draw_player2`),
  KEY `t_draw_players_matches_ibfk_3` (`draw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_draw_players_matches`
--

INSERT INTO `t_draw_players_matches` (`id`, `draw_id`, `draw_player1`, `draw_player2`, `player1_score`, `player2_score`) VALUES
(85, 59, 187, 188, 0, 21),
(86, 59, 187, 188, 21, 0),
(87, 59, 187, 188, 0, 21),
(88, 59, 187, 189, 0, 21),
(89, 59, 187, 189, 21, 0),
(90, 59, 187, 189, 0, 21),
(91, 59, 187, 190, 21, 0),
(92, 59, 187, 190, 0, 21),
(93, 59, 187, 190, 21, 0),
(94, 59, 188, 189, 0, 21),
(95, 59, 188, 189, 0, 0),
(96, 59, 188, 189, 0, 21),
(97, 59, 188, 190, 21, 0),
(98, 59, 188, 190, 0, 0),
(99, 59, 188, 190, 21, 0),
(100, 59, 189, 190, 0, 0),
(101, 59, 189, 190, 0, 21),
(102, 59, 189, 190, 0, 21),
(103, 66, 215, 216, 21, 4),
(104, 66, 215, 216, 21, 0),
(105, 66, 215, 216, 0, 0),
(106, 67, 220, 221, 0, 0),
(107, 67, 220, 221, 0, 0),
(108, 67, 220, 221, 0, 0),
(109, 67, 218, 219, 26, 24),
(110, 67, 218, 219, 0, 21),
(111, 67, 218, 219, 21, 0),
(112, 67, 221, 222, 21, 11),
(113, 67, 221, 222, 0, 21),
(114, 67, 221, 222, 0, 21),
(115, 67, 217, 218, 0, 21),
(116, 67, 217, 218, 0, 21),
(117, 67, 217, 218, 21, 0),
(118, 67, 220, 222, 0, 21),
(119, 67, 220, 222, 0, 21),
(120, 67, 220, 222, 0, 0),
(121, 67, 218, 222, 21, 0),
(122, 67, 218, 222, 27, 29),
(123, 67, 218, 222, 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_players`
--

DROP TABLE IF EXISTS `t_players`;
CREATE TABLE IF NOT EXISTS `t_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  `gender` enum('m','w') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_players`
--

INSERT INTO `t_players` (`id`, `name`, `bdate`, `gender`) VALUES
(1, 'Годобрат Мирослава', '1980-03-16', 'm'),
(2, 'Добронрав Братислав', '1991-05-27', 'm'),
(3, 'Светислава Горан', '1953-01-10', 'w'),
(4, 'Будимир Богша', '1986-11-03', 'm'),
(5, 'Дружина Татимир', '1900-03-12', 'w'),
(6, 'Осьмой Новица', '1930-08-11', 'm'),
(7, 'Богуслав Градимир', '1944-10-20', 'm'),
(8, 'Мох Мухомор', '1910-06-17', 'm'),
(9, 'Вадим Витомир', '1902-08-06', 'm'),
(10, 'Радимир Богуслав', '1904-04-19', 'm'),
(11, 'Ярослав Премысл', '1962-08-08', 'm'),
(12, 'Собеслав Войтех', '2010-02-17', 'm'),
(13, 'Мстислав Годобрат', '1992-11-21', 'm'),
(14, 'Душица Богданов', '1988-12-26', 'w'),
(15, 'Снежана Муконос', '1935-01-11', 'w'),
(16, 'Мирослава Жирослав', '1951-12-14', 'w'),
(17, 'Любовь Градислава', '1940-06-22', 'm'),
(18, 'Румяна Тихомиров', '1978-04-15', 'w'),
(19, 'Роговлад Круто', '1945-03-13', 'm'),
(20, 'Мороз Богдан', '1919-06-04', 'm'),
(21, 'Истома Зорица', '1921-02-20', 'w'),
(22, 'Волк Добромила', '1928-07-20', 'm'),
(23, 'Второв Новгород', '1968-10-06', 'm'),
(24, 'Братислава Искра', '2005-07-27', 'w'),
(25, 'Богданин Ждана', '1948-04-11', 'm'),
(26, 'Скалогром Чернавин', '1966-07-18', 'm'),
(27, 'Всесвет Бранимир', '1990-12-28', 'm'),
(28, 'Богуслав Любек', '1966-02-23', 'm'),
(29, 'Мыслимир Добронрав', '1935-07-11', 'm'),
(30, 'Ярослава Ярослав', '1940-08-18', 'w'),
(31, 'Верослав Нажир', '2005-12-18', 'm'),
(32, 'Целыгост Добронега', '1933-01-04', 'm'),
(33, 'Судиша Четвертак', '1946-02-19', 'w'),
(34, 'Беримир Роговлад', '1924-08-05', 'm'),
(35, 'Невзор Владислав', '1914-02-20', 'm'),
(36, 'Щука Монислав', '1975-04-21', 'w'),
(37, 'Властимир Воин', '1921-09-28', 'm'),
(38, 'Ясномысл Радмила', '1953-01-26', 'm'),
(39, 'Добровой Радислав', '1969-04-20', 'm'),
(40, 'Берёза Богдашкин', '1905-04-18', 'w'),
(41, 'Зоран Милорад', '1968-12-01', 'm'),
(42, 'Акамир Годобрат', '1919-09-26', 'm'),
(43, 'Осьмеркин Храбр', '1921-11-09', 'm'),
(44, 'Баянов Мстислав', '1927-04-14', 'm'),
(45, 'Третьяк Богемии', '1985-02-27', 'm'),
(46, 'Ждана Мстислава', '1956-12-04', 'w'),
(47, 'Мокша Миробуд', '1974-06-24', 'w'),
(48, 'Круто Михалап', '1990-07-17', 'm'),
(49, 'Збигнев Михалап', '1904-04-05', 'm'),
(50, 'Светозар Мямля', '1932-07-26', 'm'),
(51, 'Невзор Новгород', '1940-08-20', 'm'),
(52, 'Духовлад Горислав', '1964-05-17', 'm'),
(53, 'Судислав Прибыслава', '1930-12-19', 'm'),
(54, 'Благина Малобуд', '1946-12-25', 'w'),
(55, 'Здебора Цзимислав', '2000-06-20', 'w'),
(56, 'Муковоз Рогволод', '1998-09-15', 'm'),
(57, 'Моймир Собеслав', '1991-09-26', 'm'),
(58, 'Волибор Любава', '1998-02-16', 'm'),
(59, 'Лана Гойник', '1999-05-05', 'w'),
(60, 'Бояна Драган', '2004-08-30', 'w'),
(61, 'Властимир Малуша', '1967-04-22', 'm'),
(62, 'Сбыня Веслав', '1949-10-14', 'm'),
(63, 'Людмила Славомир', '1947-03-23', 'w'),
(64, 'Любовь Звонимир', '1960-08-01', 'm'),
(65, 'Доброгнева Доброслава', '1955-03-08', 'w'),
(66, 'Милана Твердиславов', '1981-05-22', 'w'),
(67, 'Благослава Мужедраг', '1953-04-11', 'w'),
(68, 'Премысл Станислав', '1915-07-01', 'm'),
(69, 'Часлава Некрас', '1926-05-01', 'w'),
(70, 'Мирина Осьмой', '1937-04-09', 'w'),
(71, 'Твердилов Гостевид', '2010-11-10', 'm'),
(72, 'Стоум Мстислав', '1917-11-25', 'm'),
(73, 'Вячеслав Твердимир', '1992-03-02', 'm'),
(74, 'Малобуд Всеслава', '1980-07-03', 'm'),
(75, 'Владимира Всемила', '1903-05-23', 'w'),
(76, 'Видана Градислав', '1930-08-30', 'w'),
(77, 'Доброслав Световлад', '1921-04-30', 'm'),
(78, 'Блага Боголюб', '1961-06-15', 'w'),
(79, 'Веслав Сбыслава', '1999-09-07', 'm'),
(80, 'Владимирский Гостята', '1918-10-07', 'm'),
(81, 'Маломоживый Владислава', '1977-12-25', 'm'),
(82, 'Станислав Ждана', '1913-09-08', 'm'),
(83, 'Зоран Путислав', '1997-01-12', 'm'),
(84, 'Воислав Благослава', '1901-03-01', 'm'),
(85, 'Гардомир Витомир', '1988-10-15', 'm'),
(86, 'Мормагон Судимир', '1972-06-08', 'm'),
(87, 'Светозар Сулислав', '1900-02-11', 'm'),
(88, 'Цветава Борщ', '1945-12-28', 'w'),
(89, 'Радиград Третьяк', '1922-10-13', 'm'),
(90, 'Вышеслав Родислав', '2010-03-05', 'm'),
(91, 'Яробуд Будигост', '1981-05-31', 'm'),
(92, 'Душица Зорица', '1917-01-23', 'w'),
(93, 'Ратмир Божков', '1986-12-19', 'm'),
(94, 'Благана Ярослава', '1940-09-27', 'w'),
(95, 'Бранислав Унедрог', '1987-03-31', 'm'),
(96, 'Акамир Невзор', '1967-12-08', 'm'),
(97, 'Мутимир Любим', '1944-08-17', 'm'),
(98, 'Безсонов Жизнобуд', '1919-08-17', 'm'),
(99, 'Ёлка Радимир', '1973-03-16', 'w'),
(100, 'Володимеров Воислава', '1940-01-17', 'm'),
(101, 'Возгарь Гранислав', '1950-07-02', 'm'),
(102, 'Скалогром Хотен', '2005-07-27', 'm'),
(103, 'Радовлад Любим', '2005-02-05', 'm'),
(104, 'Боголюб Орёл', '1946-05-31', 'm'),
(105, 'Мямля Веселина', '1932-04-27', 'm'),
(106, 'Богдашкин Цветана', '1945-06-01', 'm'),
(107, 'Радислава Душица', '1996-03-03', 'w'),
(108, 'Судислав Доброгост', '1928-11-01', 'm'),
(109, 'Мирина Любава', '1982-11-14', 'w'),
(110, 'Добролюб Станислава', '2007-10-06', 'm'),
(111, 'Богдан Мужедраг', '1951-01-25', 'm'),
(112, 'Мороз Самбор', '1950-01-20', 'm'),
(113, 'Жаворонок Любим', '1964-06-19', 'm'),
(114, 'Моймил Лана', '1913-02-14', 'm'),
(115, 'Всемысл Ясномысл', '1910-09-07', 'm'),
(116, 'Златоцвета Горан', '2003-11-11', 'w'),
(117, 'Гордыня Чернавин', '1986-11-12', 'm'),
(118, 'Мечислав Цветана', '1919-12-20', 'm'),
(119, 'Милодана Мокроус', '1910-09-21', 'w'),
(120, 'Всемила Гойник', '1911-03-13', 'w'),
(121, 'Венцеслав Смиляна', '1971-11-21', 'm'),
(122, 'Болеслав Честимир', '1926-03-25', 'm'),
(123, 'Жирослав Вацлав', '1945-03-04', 'm'),
(124, 'Милана Братислава', '1954-06-22', 'w'),
(125, 'Зима Радиград', '1972-03-11', 'w'),
(126, 'Дарён Судиша', '1945-08-05', 'm'),
(127, 'Горан Мстивой', '1939-07-03', 'm'),
(128, 'Сновид Унедрог', '2006-04-03', 'm'),
(129, 'Боголюб Ель', '2007-01-13', 'm'),
(130, 'Миродар Благина', '1918-08-03', 'm'),
(131, 'Жирослав Горислав', '1997-04-02', 'm'),
(132, 'Новик Добротех', '1956-12-11', 'm'),
(133, 'Блага Цветана', '2004-01-21', 'w'),
(134, 'Жаворонок Лебедь', '1968-03-02', 'm'),
(135, 'Миробуд Светоcлава', '2006-03-14', 'm'),
(136, 'Братислава Лана', '1975-10-20', 'w'),
(137, 'Путислав Добромир', '1933-12-24', 'm'),
(138, 'Молокоед Милодух', '1991-11-13', 'm'),
(139, 'Мстивой Злобыня', '1929-09-11', 'm'),
(140, 'Позвизд Добромир', '1905-11-12', 'm'),
(141, 'Твердислав Звонимир', '1953-02-07', 'm'),
(142, 'Изяслав Радим', '1993-11-16', 'm'),
(143, 'Твердилов Владислава', '1907-01-15', 'm'),
(144, 'Гардомир Володимеров', '1908-03-02', 'm'),
(145, 'Мяун Блуд', '1941-05-09', 'm'),
(146, 'Богдан Добромир', '1991-09-28', 'm'),
(147, 'Добромира Божков', '1959-10-04', 'w'),
(148, 'Мирина Добромил', '1968-01-01', 'w'),
(149, 'Душевлад Добромир', '1908-11-18', 'm'),
(150, 'Рогволод Окомир', '1955-04-10', 'm'),
(151, 'Велимир Моравии', '1953-12-02', 'm'),
(152, 'Радогор Бранимир', '2010-08-12', 'm'),
(153, 'Неждана Миодраг', '1917-02-04', 'w'),
(154, 'Здислава Пламена', '1951-07-06', 'w'),
(155, 'Маломоживый Радомысл', '1981-06-04', 'm'),
(156, 'Гостомысл Лан', '1913-10-13', 'm'),
(157, 'Светоcлав Светоcлава', '1990-02-23', 'm'),
(158, 'Твердилов Властимир', '1997-10-30', 'm'),
(159, 'Казимира Некраса', '1953-02-18', 'w'),
(160, 'Мечислав Росслав', '1978-04-04', 'm'),
(161, 'Добромила Надежда', '1940-02-20', 'w'),
(162, 'Дарён Любица', '1978-06-16', 'm'),
(163, 'Преслава Невзор', '1990-04-17', 'w'),
(164, 'Жировит Жизнобуд', '2000-10-23', 'm'),
(165, 'Лана Лютовлад', '1905-12-18', 'w'),
(166, 'Добряк Родислав', '1916-11-02', 'm'),
(167, 'Лудьслав Яромир', '1971-05-22', 'm'),
(168, 'Светоcлава Мировид', '1985-05-22', 'w'),
(169, 'Мечидраг Беримир', '1969-09-23', 'm'),
(170, 'Владимирский Верослав', '1942-05-07', 'm'),
(171, 'Османов Неженец', '1971-07-22', 'm'),
(172, 'Лютомир Неженец', '1993-07-16', 'm'),
(173, 'Табемысл Борщёв', '1926-01-14', 'm'),
(174, 'Милодана Твердилов', '1955-08-28', 'w'),
(175, 'Горазд Мировид', '1990-02-01', 'm'),
(176, 'Ростих Местятка', '1916-07-29', 'm'),
(177, 'Волк Годогост', '1916-09-02', 'm'),
(178, 'Малоед Мямля', '1922-10-07', 'm'),
(179, 'Лесьяр Блудов', '2007-01-28', 'm'),
(180, 'Яровид Татимир', '1980-11-23', 'm'),
(181, 'Целыгост Любава', '2000-11-25', 'm'),
(182, 'Любомысл Новгород', '1937-11-13', 'm'),
(183, 'Борщёв Яробуд', '1900-05-22', 'm'),
(184, 'Ружица Ростислав', '1934-06-20', 'w'),
(185, 'Миронега Доброслав', '1974-05-26', 'w'),
(186, 'Болеслав Божидара', '1988-01-20', 'm'),
(187, 'Воемил Здебора', '1904-08-08', 'm'),
(188, 'Малобуд Малуша', '1959-02-04', 'm'),
(189, 'Радовлад Казимира', '2004-09-01', 'm'),
(190, 'Осьмой Разумник', '1961-11-19', 'm'),
(191, 'Горислава Златомир', '1915-04-08', 'w'),
(192, 'Всемила Блудов', '1999-10-11', 'w'),
(193, 'Гостемил Всемысл', '1918-09-08', 'm'),
(194, 'Радогор Мал', '1995-09-21', 'm'),
(195, 'Людмила Станимира', '1976-07-18', 'w'),
(196, 'Истислав Лада', '1982-06-17', 'm'),
(197, 'Хотен Родислав', '1921-11-30', 'm'),
(198, 'Голуба Болеслав', '1937-03-03', 'w'),
(199, 'Людмила Миробуд', '1985-03-07', 'w'),
(200, 'Гудислав Путимир', '1915-06-23', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `t_tournament`
--

DROP TABLE IF EXISTS `t_tournament`;
CREATE TABLE IF NOT EXISTS `t_tournament` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `description` text,
  `classes` set('SD','SC','SB','DD','DC','DB','XC','WS','MS','XB','XD') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tournament`
--

INSERT INTO `t_tournament` (`id`, `name`, `date_start`, `date_end`, `description`, `classes`) VALUES
(9, 'Турнир №86640', '2021-11-28', '2021-11-29', '', 'SB,DD,DC,DB,WS,XD'),
(10, 'Турнир №21722', '2020-12-25', '2020-12-28', NULL, 'SD,DD,DC'),
(11, 'Турнир №40531', '2021-05-23', '2021-05-28', '', 'SD,SC,SB,DC,DB,MS,XB'),
(12, 'Турнир №20378', '2021-05-23', '2021-05-26', '', 'SD,SB,DD,DB,XC,XB,XD'),
(13, 'Турнир №12886', '2021-12-18', '2021-12-22', '', 'SD,SC,DC,DB,XC,WS,MS,XB');

-- --------------------------------------------------------

--
-- Table structure for table `t_tournament_players`
--

DROP TABLE IF EXISTS `t_tournament_players`;
CREATE TABLE IF NOT EXISTS `t_tournament_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_id` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  `class` varchar(3) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tournament_id` (`tournament_id`,`player_id`,`class`),
  KEY `player_id` (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tournament_players`
--

INSERT INTO `t_tournament_players` (`id`, `tournament_id`, `player_id`, `class`) VALUES
(141, 9, 1, 'DB'),
(110, 9, 1, 'SB'),
(139, 9, 11, 'SB'),
(123, 9, 12, 'DC'),
(131, 9, 12, 'SB'),
(138, 9, 18, 'XD'),
(114, 9, 19, 'SB'),
(132, 9, 36, 'SB'),
(113, 9, 39, 'SB'),
(104, 9, 40, 'WS'),
(136, 9, 42, 'SB'),
(116, 9, 51, 'WS'),
(118, 9, 56, 'DB'),
(125, 9, 62, 'SB'),
(117, 9, 68, 'DD'),
(108, 9, 69, 'DC'),
(126, 9, 70, 'XD'),
(115, 9, 82, 'DC'),
(133, 9, 84, 'DC'),
(128, 9, 87, 'WS'),
(143, 9, 93, 'DB'),
(120, 9, 93, 'DD'),
(121, 9, 98, 'XD'),
(105, 9, 103, 'DB'),
(127, 9, 106, 'DD'),
(129, 9, 108, 'XD'),
(111, 9, 116, 'WS'),
(124, 9, 117, 'DD'),
(130, 9, 118, 'WS'),
(109, 9, 129, 'DD'),
(142, 9, 129, 'WS'),
(122, 9, 137, 'SB'),
(112, 9, 146, 'DD'),
(106, 9, 147, 'XD'),
(119, 9, 151, 'XD'),
(107, 9, 154, 'SB'),
(137, 9, 174, 'SB'),
(134, 9, 182, 'XD'),
(140, 9, 183, 'DC'),
(135, 9, 186, 'DC');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `is_admin` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `name`, `email`, `phone`, `enabled`, `is_admin`) VALUES
(1, 'user1', 'efe6398127928f1b2e9ef3207fb82663', 'qweqwqwe', 'user1@email.comm', 111, 1, 0),
(2, 'user2', 'c1572d05424d0ecb2a65ec6a82aeacbf', 'user2 user2', 'user2@email.com', 222, 1, 0),
(3, 'user3', '3afc79b597f88a72528e864cf81856d2', 'user3 user3', 'user3@email.com', 333, 0, 0),
(4, 'user4', 'e7f5bfd77f339f3adf83464ff16e22fe', 'user10', 'qwe4@qwe.qwe', 44444444, 1, 0),
(5, 'qwe1', 'efe6398127928f1b2e9ef3207fb82663', 'qwe1', 'qwe1@qwe.com', 123, 1, 1),
(6, 'anastaz', 'efe6398127928f1b2e9ef3207fb82663', 'Анастачия', 'anastasiya@mail.ru', 37529, 1, 0),
(7, 'qwe55', 'efe6398127928f1b2e9ef3207fb82663', 'qwe55', 'qwe@qwe.com', 123123, 1, 0),
(8, 'qwe4', 'efe6398127928f1b2e9ef3207fb82663', 'qwe4', 'qwe4@qwe.com', 1234, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bag_count`
--
ALTER TABLE `bag_count`
  ADD CONSTRAINT `bag_count_ibfk_1` FOREIGN KEY (`bag_size_id`) REFERENCES `bag_size` (`id`),
  ADD CONSTRAINT `bag_count_ibfk_2` FOREIGN KEY (`bag_id`) REFERENCES `bag` (`id`);

--
-- Constraints for table `jacket`
--
ALTER TABLE `jacket`
  ADD CONSTRAINT `jacket_ibfk_1` FOREIGN KEY (`color`) REFERENCES `jacket_color` (`id`),
  ADD CONSTRAINT `jacket_ibfk_2` FOREIGN KEY (`category`) REFERENCES `jacket_category` (`id`);

--
-- Constraints for table `jacket_count`
--
ALTER TABLE `jacket_count`
  ADD CONSTRAINT `jacket_count_ibfk_1` FOREIGN KEY (`jacket_id`) REFERENCES `jacket` (`id`),
  ADD CONSTRAINT `jacket_count_ibfk_2` FOREIGN KEY (`jacket_size_id`) REFERENCES `jacket_size` (`id`);

--
-- Constraints for table `racket_count`
--
ALTER TABLE `racket_count`
  ADD CONSTRAINT `racket_count_ibfk_1` FOREIGN KEY (`racket_balance_id`) REFERENCES `racket_balance` (`id`),
  ADD CONSTRAINT `racket_count_ibfk_2` FOREIGN KEY (`racket_id`) REFERENCES `racket` (`id`);

--
-- Constraints for table `shirt`
--
ALTER TABLE `shirt`
  ADD CONSTRAINT `shirt_ibfk_1` FOREIGN KEY (`color`) REFERENCES `shirt_color` (`id`),
  ADD CONSTRAINT `shirt_ibfk_2` FOREIGN KEY (`category`) REFERENCES `shirt_category` (`id`);

--
-- Constraints for table `shirt_count`
--
ALTER TABLE `shirt_count`
  ADD CONSTRAINT `shirt_count_ibfk_1` FOREIGN KEY (`shirt_size_id`) REFERENCES `shirt_size` (`id`),
  ADD CONSTRAINT `shirt_count_ibfk_2` FOREIGN KEY (`shirt_id`) REFERENCES `shirt` (`id`);

--
-- Constraints for table `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`category`) REFERENCES `shoes_category` (`id`);

--
-- Constraints for table `shoes_count`
--
ALTER TABLE `shoes_count`
  ADD CONSTRAINT `shoes_count_ibfk_1` FOREIGN KEY (`shoes_id`) REFERENCES `shoes` (`id`),
  ADD CONSTRAINT `shoes_count_ibfk_2` FOREIGN KEY (`shoes_size_id`) REFERENCES `shoes_size` (`id`);

--
-- Constraints for table `short`
--
ALTER TABLE `short`
  ADD CONSTRAINT `short_ibfk_1` FOREIGN KEY (`category`) REFERENCES `short_category` (`id`),
  ADD CONSTRAINT `short_ibfk_2` FOREIGN KEY (`color`) REFERENCES `short_color` (`id`);

--
-- Constraints for table `short_count`
--
ALTER TABLE `short_count`
  ADD CONSTRAINT `short_count_ibfk_1` FOREIGN KEY (`short_id`) REFERENCES `short` (`id`),
  ADD CONSTRAINT `short_count_ibfk_2` FOREIGN KEY (`short_size_id`) REFERENCES `short_size` (`id`);

--
-- Constraints for table `t_draws`
--
ALTER TABLE `t_draws`
  ADD CONSTRAINT `t_draws_ibfk_1` FOREIGN KEY (`tournament_id`) REFERENCES `t_tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_draw_players`
--
ALTER TABLE `t_draw_players`
  ADD CONSTRAINT `t_draw_players_ibfk_1` FOREIGN KEY (`draw_id`) REFERENCES `t_draws` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_draw_players_ibfk_2` FOREIGN KEY (`player_id`) REFERENCES `t_players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_draw_players_matches`
--
ALTER TABLE `t_draw_players_matches`
  ADD CONSTRAINT `t_draw_players_matches_ibfk_1` FOREIGN KEY (`draw_player1`) REFERENCES `t_draw_players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_draw_players_matches_ibfk_2` FOREIGN KEY (`draw_player2`) REFERENCES `t_draw_players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_draw_players_matches_ibfk_3` FOREIGN KEY (`draw_id`) REFERENCES `t_draws` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_tournament_players`
--
ALTER TABLE `t_tournament_players`
  ADD CONSTRAINT `t_tournament_players_ibfk_1` FOREIGN KEY (`tournament_id`) REFERENCES `t_tournament` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `t_tournament_players_ibfk_2` FOREIGN KEY (`player_id`) REFERENCES `t_players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
