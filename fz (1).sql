-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2021 at 07:47 PM
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
(1, 'FZ FORZA VIP', 'Shuttles with perfect durability and flight. Tested for speed and stability in flight.', '', 'badminton-shuttles-fzforzavip-fzforza-301554_1.jpg', 40, 9),
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
  `class` enum('SD','SC','SB','DD','DC','DB','XC','WS','MS','XB') NOT NULL,
  `matches_count` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `winners_count` int(10) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tournament_id` (`tournament_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_draws`
--

INSERT INTO `t_draws` (`id`, `tournament_id`, `type`, `class`, `matches_count`, `completed`, `winners_count`) VALUES
(32, 8, 'group', 'XB', 3, 1, 2),
(33, 8, 'group', 'XB', 3, 1, 2),
(34, 8, 'group', 'XB', 3, 1, 2),
(35, 8, 'group', 'XB', 3, 1, 2),
(36, 8, 'group', 'DC', 3, 0, 1),
(37, 8, 'group', 'DC', 3, 0, 1),
(50, 8, 'group', 'DB', 3, 0, 1),
(51, 8, 'group', 'DB', 3, 0, 1),
(52, 8, 'group', 'DD', 3, 0, 1),
(53, 8, 'group', 'DD', 3, 0, 1),
(54, 8, 'group', 'DD', 3, 0, 1),
(55, 8, 'olymp', 'XB', 3, 0, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_draw_players`
--

INSERT INTO `t_draw_players` (`id`, `draw_id`, `player_id`) VALUES
(88, 32, 255),
(89, 32, 258),
(90, 32, 479),
(91, 33, 313),
(92, 33, 247),
(93, 33, 512),
(94, 34, 348),
(95, 34, 295),
(96, 34, 463),
(97, 35, 201),
(98, 35, 72),
(99, 35, 73),
(100, 32, 473),
(101, 35, 6),
(102, 33, 75),
(103, 36, 268),
(104, 36, 214),
(105, 36, 424),
(106, 36, 358),
(107, 37, 475),
(108, 37, 23),
(109, 37, 3),
(110, 37, 388),
(111, 36, 360),
(143, 50, 223),
(144, 50, 186),
(145, 50, 4),
(146, 51, 243),
(147, 51, 204),
(148, 51, 125),
(149, 50, 5),
(150, 52, 244),
(151, 52, 483),
(152, 52, 442),
(153, 52, 275),
(154, 53, 99),
(155, 53, 109),
(156, 53, 464),
(157, 53, 278),
(158, 54, 356),
(159, 54, 379),
(160, 54, 124),
(161, 54, 284),
(162, 52, 454),
(163, 55, 255),
(164, 55, 473),
(165, 55, 75),
(166, 55, 512),
(167, 55, 348),
(168, 55, 463),
(169, 55, 201),
(170, 55, 73);

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
  `player2_score` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `draw_player1` (`draw_player1`),
  KEY `draw_player2` (`draw_player2`),
  KEY `draw_id` (`draw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_draw_players_matches`
--

INSERT INTO `t_draw_players_matches` (`id`, `draw_id`, `draw_player1`, `draw_player2`, `player1_score`, `player2_score`) VALUES
(1, 32, 88, 89, 21, 11),
(2, 32, 88, 89, 15, 21),
(3, 32, 88, 89, 21, 15),
(4, 32, 88, 90, 21, 0),
(5, 32, 88, 90, 21, 0),
(6, 32, 88, 90, 21, 0),
(7, 32, 88, 100, 20, 22),
(8, 32, 88, 100, 23, 21),
(9, 32, 88, 100, 24, 26),
(10, 32, 89, 90, 0, 21),
(11, 32, 89, 90, 21, 0),
(12, 32, 89, 90, 0, 21),
(13, 32, 89, 100, 0, 21),
(14, 32, 89, 100, 0, 21),
(15, 32, 89, 100, 21, 0),
(16, 32, 90, 100, 21, 0),
(17, 32, 90, 100, 0, 21),
(18, 32, 90, 100, 21, 0),
(19, 33, 91, 92, 21, 0),
(20, 33, 91, 92, 0, 21),
(21, 33, 91, 92, 21, 0),
(22, 33, 91, 93, 21, 11),
(23, 33, 91, 93, 0, 21),
(24, 33, 91, 93, 21, 19),
(25, 33, 91, 102, 0, 21),
(26, 33, 91, 102, 0, 21),
(27, 33, 91, 102, 0, 21),
(28, 33, 92, 93, 0, 21),
(29, 33, 92, 93, 0, 21),
(30, 33, 92, 93, 0, 21),
(31, 33, 92, 102, 0, 21),
(32, 33, 92, 102, 0, 21),
(33, 33, 92, 102, 0, 21),
(34, 33, 93, 102, 0, 21),
(35, 33, 93, 102, 0, 21),
(36, 33, 93, 102, 0, 21),
(37, 34, 94, 95, 21, 0),
(38, 34, 94, 95, 21, 0),
(39, 34, 94, 95, 21, 0),
(40, 34, 94, 96, 0, 21),
(41, 34, 94, 96, 21, 0),
(42, 34, 94, 96, 21, 0),
(43, 34, 95, 96, 21, 0),
(44, 34, 95, 96, 0, 21),
(45, 34, 95, 96, 0, 21),
(46, 35, 97, 98, 0, 0),
(47, 35, 97, 98, 0, 0),
(48, 35, 97, 98, 0, 0),
(49, 35, 97, 99, 0, 21),
(50, 35, 97, 99, 0, 0),
(51, 35, 97, 99, 0, 0),
(52, 35, 97, 101, 21, 0),
(53, 35, 97, 101, 21, 0),
(54, 35, 97, 101, 0, 0),
(55, 35, 98, 99, 0, 0),
(56, 35, 98, 99, 0, 0),
(57, 35, 98, 99, 0, 0),
(58, 35, 98, 101, 0, 0),
(59, 35, 98, 101, 0, 0),
(60, 35, 98, 101, 0, 0),
(61, 35, 99, 101, 0, 0),
(62, 35, 99, 101, 0, 0),
(63, 35, 99, 101, 0, 0),
(64, 55, 163, 164, 21, 0),
(65, 55, 163, 164, 0, 21),
(66, 55, 163, 164, 21, 0),
(67, 55, 169, 170, 0, 21),
(68, 55, 169, 170, 0, 21),
(69, 55, 169, 170, 0, 21),
(70, 55, 165, 166, 21, 0),
(71, 55, 165, 166, 21, 0),
(72, 55, 165, 166, 21, 0),
(73, 55, 167, 168, 21, 0),
(74, 55, 167, 168, 0, 21),
(75, 55, 167, 168, 0, 21),
(76, 55, 163, 165, 0, 21),
(77, 55, 163, 165, 24, 22),
(78, 55, 163, 165, 26, 28),
(79, 55, 168, 170, 17, 21),
(80, 55, 168, 170, 15, 21),
(81, 55, 168, 170, 0, 0),
(82, 55, 165, 170, 21, 11),
(83, 55, 165, 170, 21, 13),
(84, 55, 165, 170, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_players`
--

DROP TABLE IF EXISTS `t_players`;
CREATE TABLE IF NOT EXISTS `t_players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `bdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=521 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_players`
--

INSERT INTO `t_players` (`id`, `name`, `bdate`) VALUES
(1, 'i1', '1964-11-11'),
(2, 'i2', '1965-11-11'),
(3, 'i3', '1966-11-11'),
(4, '6217322102242111', '1949-03-06'),
(5, '70181731340', '1949-10-29'),
(6, 'Endfy', '1946-02-19'),
(7, 'Jxsdoqlv', '1951-07-30'),
(8, 'Ylagmo Bgiuufwk Hszpbzqh', '1991-05-28'),
(9, 'Rzssq Qpo Zxpvarp', '1989-07-03'),
(10, 'Frgqblywpj Rtmpl', '1976-08-07'),
(11, 'Ylturya Jxv Ihfwabx', '1982-05-11'),
(12, 'Osg', '1945-01-16'),
(13, 'Rjo Ttz Qalavr', '1996-06-03'),
(14, 'Dqrlzsv Lkued Ytsb', '1942-11-11'),
(15, 'Rop Ipkjczfb', '1997-09-29'),
(16, 'Nigmnkhp Iqdkyyfmo', '1988-05-17'),
(17, 'Dqm', '1929-10-15'),
(18, 'Cwtpwjkro Yxt Bummzppn', '1957-10-04'),
(19, 'Bzmcnforv Rqqicsrlz Okwtmwbyjv', '1989-12-26'),
(20, 'Sajkznrf Lfzqvx Ogxyi', '1950-01-10'),
(21, 'Qhepwqvn Qhrydwyma Kky', '1998-07-01'),
(22, 'Hrsltzjwe Yod', '1934-05-11'),
(23, 'Ksuietb Wobahpxtk', '1982-02-02'),
(24, 'Azmdskz Wuj Vqdb', '1926-02-04'),
(25, 'Ytmcwrufhk Okhcv', '2004-08-07'),
(26, 'Kqwasm', '1958-01-22'),
(27, 'Zmcqoyx Gfarsuk', '1995-07-23'),
(28, 'Ejls Njbel', '1942-09-22'),
(29, 'Slwogm', '1916-08-07'),
(30, 'Bbdhpk Mcn Bhjkoe', '1994-04-19'),
(31, 'Hanhbt Acjrlbbq Fljg', '1990-10-25'),
(32, 'Wym', '1992-06-17'),
(33, 'Zczuhui', '1933-04-02'),
(34, 'Nqkbwezbqw Yxgxvxvau Ibsdnuun', '1921-05-25'),
(35, 'Zcd', '1962-12-07'),
(36, 'Gprhkqlf Mwgpbp Idamzgw', '1940-03-04'),
(37, 'Uyzs Yjrlef', '1958-12-15'),
(38, 'Tbcmjs Hncla Zym', '1983-01-20'),
(39, 'Njjj', '2002-12-28'),
(40, 'Bwy Ekgqzkge Eqzu', '1959-05-16'),
(41, 'Fracvg', '1966-04-13'),
(42, 'Exklel Tafqx', '1943-11-07'),
(43, 'Btxxopnh Xpb Yzo', '1922-05-10'),
(44, 'Vnhocnynvy Mwgewiydfb', '2007-07-23'),
(45, 'Bbbx', '1967-08-08'),
(46, 'Mod Ylqhmtr Qmc', '1947-11-23'),
(47, 'Fagvnzdid Iiuqjaqean Psr', '1992-02-07'),
(48, 'Lhwbgsprhn Kpttsyqh', '1974-04-15'),
(49, 'Wqe', '1971-01-26'),
(50, 'Raxmqqffx', '1932-12-29'),
(51, 'Llivvl Rfyhv Npbg', '1974-02-01'),
(52, 'Oowwpf', '1990-06-05'),
(53, 'Cjxno Jirrcg', '1906-12-31'),
(54, 'Pvkbsimmfy Fybdl', '1958-03-23'),
(55, 'Weifd', '1964-12-04'),
(56, 'Cxkbx Mjuze', '1963-06-17'),
(57, 'Hwucizc Gfxsr Iwmfworow', '1947-03-30'),
(58, 'Cwrdgdsers Punbikndi Srmqd', '1964-07-31'),
(59, 'Hla Xcaww Inqkgy', '1902-05-07'),
(60, 'Jjp', '1977-06-02'),
(61, 'Xftmxnz Hjjzuecd', '1957-08-10'),
(62, 'Ayvck', '1930-08-01'),
(63, 'Kfvecdjm Hnfvbdvg', '1914-01-05'),
(64, 'Iobimsn Qryfhmv Aptdpwdly', '1993-03-31'),
(65, 'Evtctzd Oumhxheyo Poovaocty', '1958-01-11'),
(66, 'Ijwagxj', '1996-04-06'),
(67, 'Eoibelsr Xispsgv Xilserr', '1955-06-23'),
(68, 'Ggsdovkya', '1933-10-08'),
(69, 'Ctsludnqi', '1945-05-05'),
(70, 'Snlw Efkdhrpbfm Opt', '1964-09-05'),
(71, 'Pscev Uizzjfo Heywtobz', '1966-04-28'),
(72, 'Uzsfeqz', '2004-01-15'),
(73, 'Enabm', '1982-09-02'),
(74, 'Gtzgkkst Oeitstiay', '1961-05-25'),
(75, 'Xhzwqpnnw Undyzuusa', '1981-12-02'),
(76, 'Kuukjqj Zrmgck Dbdrqbx', '1943-05-06'),
(77, 'Xmpsmicho Yidal', '1936-04-02'),
(78, 'Adrd Vrskebxfhy Verqiymr', '1983-10-28'),
(79, 'Rzpiavjgng', '1926-11-14'),
(80, 'Dummymn', '1981-02-17'),
(81, 'Fyqejq Qezyoc', '1977-11-29'),
(82, 'Dnftexowj', '1993-07-24'),
(83, 'Afxf', '1935-07-07'),
(84, 'Jxr Wuf', '1941-07-04'),
(85, 'Tnx Pebgsncofn', '1909-08-12'),
(86, 'Xnmv Vwpff Ijds', '1931-10-01'),
(87, 'Htrthwgwoi', '1987-10-02'),
(88, 'Sqtqyklysr', '1977-10-13'),
(89, 'Kgrrlyv Kjjjlnawog Epo', '1945-06-20'),
(90, 'Owwzmtyrci Oukbukbz', '1916-03-05'),
(91, 'Hrrin Zbjeinv', '1938-09-28'),
(92, 'Tulepqfg Gjdnh Hrgnpny', '1911-10-30'),
(93, 'Edluxpmyfj Rieqy', '1914-12-15'),
(94, 'Bfxitqrfy', '1921-10-25'),
(95, 'Bgrxgbs Uketgmnu', '1961-03-17'),
(96, 'Vthbngqinc Lvaevrjjr Qpsp', '1950-03-07'),
(97, 'Eiyowkgtfe', '2002-06-21'),
(98, 'Puwemeks', '1926-12-03'),
(99, 'Ofzxuufbps Zhahssack Zhirwf', '1944-09-10'),
(100, 'Stmz Idy', '1918-03-03'),
(101, 'Eva Egsyhfyamb', '1975-08-08'),
(102, 'Ixzfceng Jsvhkwiiam Eus', '1928-01-24'),
(103, 'Gbornuxkr Scwuotrl Horvrp', '1969-05-23'),
(104, 'Aoe Jqgrazkxct', '1910-11-28'),
(105, 'Amxllxm', '2007-01-10'),
(106, 'Thwjpjrs Cve', '1908-09-25'),
(107, 'Pay Lqgicx', '1927-10-14'),
(108, 'Ytemfmqm', '1902-05-09'),
(109, 'Nflqxn', '1929-10-28'),
(110, 'Hdlpvgc', '1935-12-11'),
(111, 'Vghrej Wwfkmp', '1972-04-14'),
(112, 'Ssmryal Qfg Uteruicg', '1977-05-19'),
(113, 'Xgsivmykck', '1970-09-21'),
(114, 'Jdl Nndkjcghn', '1970-08-19'),
(115, 'Smxuyq', '1939-05-15'),
(116, 'Roepfcws Quuvcxysbm Mltxzv', '1954-02-07'),
(117, 'Tiutpzhh Bjzyn', '1966-10-29'),
(118, 'Hzrmhybjd', '1956-06-06'),
(119, 'Meeb Afbbh Tnz', '1995-06-06'),
(120, 'Rkqmvgl Xhbn Voklks', '1905-06-06'),
(121, 'Mafrekln Rqeqgpr Enwehkn', '1927-06-06'),
(122, 'Wyplsogy', '1916-06-06'),
(123, 'Ahq Sgje', '2009-06-06'),
(124, 'Vunofzf', '2002-06-06'),
(125, 'Wcqeu', '1905-06-06'),
(126, 'Qsoooduij', '2007-06-06'),
(127, 'Plnqq', '2001-06-06'),
(128, 'Cgiph Obwelorsei', '1983-06-06'),
(129, 'Ysfq Atswbzj Osqfkbc', '1914-06-06'),
(130, 'Xcvfppanp Vhy Fdmsw', '1921-06-06'),
(131, 'Qjqvjr', '1961-06-06'),
(132, 'Wtk Autzjbegb Xazaijo', '1978-06-06'),
(133, 'Iwnkrud', '1907-06-06'),
(134, 'Goltwf Fnqmui Rdcmbnhzsq', '2003-06-06'),
(135, 'Lxflp', '1905-06-06'),
(136, 'Cicqjd Nicldum Twcupbvy', '1933-06-06'),
(137, 'Tfdlw Pbxykziseh Ldnmu', '1937-06-06'),
(138, 'Eorexf', '1987-06-06'),
(139, 'Npbasj Pbl Asyqvyrw', '1925-06-06'),
(140, 'Wptvdlnz Kzi', '1970-06-06'),
(141, 'Msnyjdbmva Hpzzp', '1916-06-06'),
(142, 'Uvjsrtzg Ypqjfo Njudq', '1946-06-06'),
(143, 'Zhiavj Absabr', '1907-06-06'),
(144, 'Ekixwby', '1949-06-06'),
(145, 'Thrubaif Cbtb', '1907-06-06'),
(146, 'Jsjqh', '1916-06-06'),
(147, 'Dqtdjrh Rlzwphghjb Frkbopbljs', '1948-06-06'),
(148, 'Lyhjsadk Gvj Lvfjtnfabx', '2010-06-06'),
(149, 'Glfos Ocokuvcw Qfy', '1937-06-06'),
(150, 'Wgzhw Zomeuy', '1942-06-06'),
(151, 'Vowb Toitto Ygjk', '1934-06-06'),
(152, 'Fzxik', '1984-06-06'),
(153, 'Flmrnrwzix Uyef', '1937-06-06'),
(154, 'Gcla', '1916-06-06'),
(155, 'Ouhimsehw', '1987-06-06'),
(156, 'Cupfg Imwzzwzbdh', '2002-06-06'),
(157, 'Ccbm Wslsc Ukkws', '1981-06-06'),
(158, 'Puuqs', '1980-06-06'),
(159, 'Cjpfzwxdad Uuhcyk Yfqkonpdjt', '1980-06-06'),
(160, 'Stywilc Mehjjbpg Jxtedcqr', '1956-06-06'),
(161, 'Vserzusl', '1940-06-06'),
(162, 'Fewaninvhn Rxk Mpuowf', '1947-06-06'),
(163, 'Aval', '1977-06-06'),
(164, 'Eyvdnm', '1940-06-06'),
(165, 'Xwe Ermtzcecfh', '1918-06-06'),
(166, 'Fiil', '1978-06-06'),
(167, 'Vjdwyjxq Oqbjgmrx', '1925-06-06'),
(168, 'Plecubuy Idrpzw', '1961-06-06'),
(169, 'Gfyx Iozkz Zerwd', '1912-06-06'),
(170, 'Day Gbozl', '1936-06-06'),
(171, 'Hyaoxc Togihejms Pbemjfwyr', '2008-06-06'),
(172, 'Vjxx Njo', '2003-06-06'),
(173, 'Qwqrgndtg Rmsoxbee', '1994-06-06'),
(174, 'Rpzfsq', '1932-06-06'),
(175, 'Sdqef', '1901-06-06'),
(176, 'Rwq', '1941-06-06'),
(177, 'Ixm Swk Qhkmsagp', '1936-06-06'),
(178, 'Ycyaadsiho', '1922-06-06'),
(179, 'Kjdvc Xkciy Louk', '1957-06-06'),
(180, 'Mrtiaixh Smz Fulust', '1965-06-06'),
(181, 'Jywuggmfr', '1980-06-06'),
(182, 'Ezmigjc', '1940-06-06'),
(183, 'Bzbjbynb Belxhzx', '1938-06-06'),
(184, 'Tgespbvub', '1929-06-06'),
(185, 'Jik Gmunpbnarw', '1916-06-06'),
(186, 'Adq Jrubtikg Dangzyvyvc', '1940-06-06'),
(187, 'Nfsok Hlfbcwvx', '1985-06-06'),
(188, 'Oceobtrh Pbny', '2001-06-06'),
(189, 'Yywpqag', '1983-06-06'),
(190, 'Kojitx Uyssg Mrh', '1948-06-06'),
(191, 'Yvlzevmo Eqdlyxfl', '1920-06-06'),
(192, 'Rfvtb Yakoqusmis Iaxqq', '1987-06-06'),
(193, 'Exyodkcgk Umui Afou', '1939-06-06'),
(194, 'Ctxh', '1990-06-06'),
(195, 'Ylvqjnhh', '1934-06-06'),
(196, 'Lronqc', '1972-06-06'),
(197, 'Ekgod Tljqthmlft', '1965-06-06'),
(198, 'Ndmpqhxbmd', '1903-06-06'),
(199, 'Laky Zdinjpd Zsrjli', '1990-06-06'),
(200, 'Byqgbb Wgmza Qboo', '2003-06-06'),
(201, 'Lxlhrakff', '1966-06-06'),
(202, 'Aluvgs Qrzfqkavum', '1932-06-06'),
(203, 'Qwy Dsff', '1942-06-06'),
(204, 'Ebetrupam Eji Hotwkqtu', '1909-06-06'),
(205, 'Ptgi Zaekus Axmcim', '1978-06-06'),
(206, 'Ughfln Sqcvtq', '1943-06-06'),
(207, 'Luzbik Vdxxbfh Kfbfixtq', '1942-06-06'),
(208, 'Hxcwn', '1942-06-06'),
(209, 'Mvwugpwbo', '1942-06-06'),
(210, 'Cllf Pcoavococ', '1958-06-06'),
(211, 'Ukob Ptxgauqzpz Ysigjjsyx', '1926-06-06'),
(212, 'Hsklikslze Ofsgt Sdcqlig', '1912-06-06'),
(213, 'Olhx Vvakt Xjae', '1990-06-06'),
(214, 'Sobdosay Qgvrtprp', '1922-06-06'),
(215, 'Tgs', '2002-06-06'),
(216, 'Yjua', '1997-06-06'),
(217, 'Xagh Mryfomuac', '2005-06-06'),
(218, 'Frfgrvpnbz', '1970-06-06'),
(219, 'Cbosjhpuns', '1979-06-06'),
(220, 'Ssgiuo', '1960-06-06'),
(221, 'Kriovgoj', '1959-06-06'),
(222, 'Vax Bddmgmo Tzssri', '1964-06-06'),
(223, 'Bydewaww Njwejq', '1935-06-06'),
(224, 'Ghggmcjhyw Zkzn', '1957-06-06'),
(225, 'Ziwi Jwfi', '1902-06-06'),
(226, 'Ctfxz Tvtarj Vvxrhqzql', '1911-06-06'),
(227, 'Wnpxp Cyd', '1977-06-06'),
(228, 'Lcbpyqjtzc Mvloixdry Xhktisjgd', '1986-06-06'),
(229, 'Sfa', '1903-06-06'),
(230, 'Roxfylhd Lzokwflbdn', '1997-06-06'),
(231, 'Wqsdqapr Ltdsjxfo Rkbsyytm', '1930-06-06'),
(232, 'Xrpi', '1944-06-06'),
(233, 'Klplzhn Vvxcj Thaqxdm', '1933-06-06'),
(234, 'Xabijtc', '1922-06-06'),
(235, 'Gdwakvbnv Eccgiav', '1946-06-06'),
(236, 'Hyvyadmzqo Obrxfzexuz Fltfcfvpcb', '1938-06-06'),
(237, 'Oggkjg', '1992-06-06'),
(238, 'Nzofhdnwxl Brucuhpvh', '1908-06-06'),
(239, 'Dmiimjhqj Ndwio', '1930-06-06'),
(240, 'Aknjwzd Shtb', '1948-06-06'),
(241, 'Puhxiy Yviel Kuglarayx', '1958-06-06'),
(242, 'Zcizjkdf Vkd Qkozwi', '1955-11-05'),
(243, 'Aju Hholhtri Xtgqzxagzz', '1953-10-13'),
(244, 'Pndxjn Cwemkcu Zijhrp', '1900-10-29'),
(245, 'Hmwvut Uwmp Vpa', '2009-01-17'),
(246, 'Qcnujavaa Iyuhr', '1904-07-16'),
(247, 'Lzsgoy', '1969-11-15'),
(248, 'Rxspxf', '1991-01-21'),
(249, 'Ueijzoccze Wqnkgbpzju Uhpk', '1944-09-03'),
(250, 'Dfgnd Xis Ttzhznbhjm', '1970-05-31'),
(251, 'Ezv', '2003-09-12'),
(252, 'Lqppzf Ivv', '2009-03-05'),
(253, 'Athgz Beo', '1956-04-10'),
(254, 'Rlfkkhxkee Zst', '1968-04-09'),
(255, 'Ftxvtedrq', '1960-05-11'),
(256, 'Bssfrk', '1946-12-12'),
(257, 'Gwmcm Qxf Rmm', '1947-12-23'),
(258, 'Nvwmyrz', '1918-02-26'),
(259, 'Cdqqudalm Tbks Pcmv', '1924-08-20'),
(260, 'Mqmph Vhk Peyitosj', '1916-01-07'),
(261, 'Kymdf Tagy Dillx', '1982-02-18'),
(262, 'Cezrplclmm Rksuglpklv', '1980-11-04'),
(263, 'Mfc Ibitx', '1999-03-06'),
(264, 'Pfnfdzjnwc Cetfmmnm', '1979-03-22'),
(265, 'Ccookdk Hdioruhbc', '1982-11-12'),
(266, 'Recghlzw Vqiuuttrvd Mqbn', '1927-02-01'),
(267, 'Ltmrirwg Hnur', '1933-08-07'),
(268, 'Wszwbt Sdqljfbb Ffu', '1978-11-06'),
(269, 'Fjtllc Czdyhll', '1929-04-19'),
(270, 'Gopvgbgbh Hzmdjgajju Sfy', '1951-12-17'),
(271, 'Wwmixfo', '1923-02-27'),
(272, 'Pdgnjot', '1978-12-06'),
(273, 'Mskpg Utw', '1955-12-11'),
(274, 'Oxscq Fwswuoys', '1996-03-15'),
(275, 'Pcta', '1908-05-13'),
(276, 'Xukkgdii Ewh', '2002-01-23'),
(277, 'Lfytjylnjt Iikaggzd Vszjjtfz', '1980-05-03'),
(278, 'Mde Qcymapr', '1920-11-17'),
(279, 'Ook', '2009-08-14'),
(280, 'Swtbjhoxjx', '1988-07-30'),
(281, 'Ykmknsvfd Wtuf Bttggtcf', '2002-08-15'),
(282, 'Msuanhowc Fqaiicrdxm', '2004-12-25'),
(283, 'Whxfk Teanph', '1904-05-17'),
(284, 'Min', '1945-07-14'),
(285, 'Jheeyzfdn', '1991-10-14'),
(286, 'Umklm', '1959-08-29'),
(287, 'Eyje', '1965-09-13'),
(288, 'Vgmgqkzw Ogsn Iwtv', '2000-11-09'),
(289, 'Cpowwtlyqt Kadq', '1924-11-13'),
(290, 'Pjt Lus', '1945-04-21'),
(291, 'Yqjynwjic Jvbg', '1966-10-08'),
(292, 'Lfltzlw Vmzstvgo Sopqag', '2003-07-24'),
(293, 'Hphxdgb Udsiz Xuyya', '1928-12-03'),
(294, 'Hgdfbu', '1934-12-14'),
(295, 'Lijo', '1994-05-26'),
(296, 'Fmhujmxl', '1901-04-16'),
(297, 'Yotcuayb', '1950-02-22'),
(298, 'Wxdqjg', '1922-05-16'),
(299, 'Qojhuzda', '1933-10-15'),
(300, 'Nugtpps', '1976-11-27'),
(301, 'Zmimfzhi Zjmw', '1974-04-02'),
(302, 'Zoyegw', '1932-05-09'),
(303, 'Kdjsb Gnox', '1915-06-04'),
(304, 'Wdnegvk Qjtngnlib Ljgczl', '2007-05-31'),
(305, 'Eqdkhojq Xqncxsbxlf Tziqjvyeos', '1923-07-12'),
(306, 'Mpyhamdkzz Azs', '1917-01-04'),
(307, 'Qbe Jgjhekkf Rrl', '2006-10-19'),
(308, 'Madq', '1975-10-14'),
(309, 'Rjktemkrt Ivriecd', '1979-08-25'),
(310, 'Esb', '1954-08-26'),
(311, 'Wfu', '1910-03-01'),
(312, 'Fgciqzjid', '1965-02-13'),
(313, 'Nnr', '1933-08-06'),
(314, 'Tvwd Kkbphfw Svueaniad', '2007-02-24'),
(315, 'Gfyc Exad Nsgudicft', '1977-09-30'),
(316, 'Edhl Jhamobzw', '1994-05-15'),
(317, 'Rqdzn', '1942-03-15'),
(318, 'Ptvmbcqbkg', '1989-12-22'),
(319, 'Edzh Ygx', '1959-04-10'),
(320, 'Lne Selaennb', '1911-08-15'),
(321, 'Vvefcjkqep Mtdycmyke', '1905-09-09'),
(322, 'Auk', '1916-04-25'),
(323, 'Eatrsqgdel Yxbv', '1926-04-07'),
(324, 'Tdxgjczod Sokyp Bhivzk', '1955-06-25'),
(325, 'Qcyt Cjtigolxzo', '2000-04-09'),
(326, 'Ygznsq Ffzqynt', '1901-08-06'),
(327, 'Lxflqfq Bptroka', '1924-01-11'),
(328, 'Xvyss Cxwwcbx Qzdasjaltr', '1997-04-07'),
(329, 'Wnrsyzlmaz Pjg', '1915-03-21'),
(330, 'Qnylue Cupx Hnfri', '1917-05-31'),
(331, 'Hpu', '1941-08-07'),
(332, 'Pnk', '1969-08-11'),
(333, 'Jmgunorlgx', '1918-03-31'),
(334, 'Zio Lrbhhgwb Dskkncs', '1956-09-15'),
(335, 'Qxzbrwgpet Rmykjkfi', '1993-10-29'),
(336, 'Cuiya', '1909-08-30'),
(337, 'Xdyxzjcl Liwmcseaae Krbfqbcjez', '1931-02-12'),
(338, 'Hgviuiuk', '1926-08-08'),
(339, 'Dowqjuft Nyxnjyzy Jhyrjuvnjh', '1969-04-05'),
(340, 'Fmourmi Yjqkjjml Sasqlnk', '1952-04-22'),
(341, 'Pqwimzohkn', '1942-11-07'),
(342, 'Flmlgmk', '1927-04-27'),
(343, 'Jxncwoh Gqxzt Kqimsaswc', '1986-05-16'),
(344, 'Ymvx', '1940-04-13'),
(345, 'Scxxpxnjle', '1939-07-31'),
(346, 'Nny Eaquzzvmzd Sbtkqh', '1900-06-01'),
(347, 'Mgwgjw Xgmfwudv Jtkgedge', '1920-12-01'),
(348, 'Pvjdvnp Apadyd Qexm', '1915-09-17'),
(349, 'Hbprutytql', '1917-03-10'),
(350, 'Neb Yzrho Cbwcvn', '1956-09-11'),
(351, 'Ojmgv Feghx', '1919-04-28'),
(352, 'Xntvktoxp Ebcdb Fyrrqczys', '1960-11-18'),
(353, 'Itjbbjdjv Ntak Albnfw', '1994-04-21'),
(354, 'Qfm', '1989-05-13'),
(355, 'Iej Bhruoel', '1955-02-09'),
(356, 'Tiojd', '1950-05-06'),
(357, 'Rsg Vzsphjdff', '1983-06-11'),
(358, 'Hjc Thtgo Zqqq', '1975-09-05'),
(359, 'Udgvehpjye Zpazpr', '2008-08-14'),
(360, 'Pzy Zzk Lckdykfup', '2009-07-03'),
(361, 'Qitcfuuw', '1929-05-03'),
(362, 'Tloeiuns Fjqgxnfvfx', '1954-06-14'),
(363, 'Rgxgqnavyv Amjok', '1910-06-04'),
(364, 'Hjejpgmk', '1906-12-29'),
(365, 'Tllzahs', '1915-04-10'),
(366, 'Lquztzot Akvumwfup Aturm', '1914-09-27'),
(367, 'Xokgcwpek Ylvubh Lphikryo', '1979-03-11'),
(368, 'Evtuj', '1919-06-06'),
(369, 'Pwlwpnoejn', '1930-08-05'),
(370, 'Dmav Tgn Iylqbedwb', '1947-07-31'),
(371, 'Cpgdbok', '1974-10-08'),
(372, 'Zrdckdexv Svwynm', '1933-12-18'),
(373, 'Qrqvt Iqufr', '1924-08-05'),
(374, 'Oqqpxesrp Qkdjfaqndx', '1942-08-31'),
(375, 'Uckq Fmbvksch Qhznaawt', '1952-05-27'),
(376, 'Krxveletst Erslghk Nyivhdl', '1904-05-01'),
(377, 'Pwjhvq Bctqkghq', '1937-04-27'),
(378, 'Wqefra', '1992-02-26'),
(379, 'Vbg', '1950-06-04'),
(380, 'Ywygbxpc Vuegsytga Yjz', '1915-04-27'),
(381, 'Amod Kymt Zuzofv', '1953-04-11'),
(382, 'Mkcbnjtfj', '1914-10-11'),
(383, 'Uuayoh Zttfctmrb Czd', '1986-06-05'),
(384, 'Cekvxrro Jcitzq', '1953-02-06'),
(385, 'Edtywc', '2009-09-16'),
(386, 'Uoikvhreh Aidommz', '2006-02-18'),
(387, 'Pmzmwnowp', '1962-07-15'),
(388, 'Hxorbleobc', '2004-05-02'),
(389, 'Nerhlp Udb', '1955-10-02'),
(390, 'Qdefmdnbxj', '1923-11-28'),
(391, 'Smkzcgl', '1940-02-26'),
(392, 'Cvaufso Dbqeo', '1977-09-22'),
(393, 'Tonoegac Wrhhndvuh', '1974-12-12'),
(394, 'Ivg', '1929-11-06'),
(395, 'Fzvcgt', '1941-06-29'),
(396, 'Sbedlym', '1966-06-10'),
(397, 'Rkrhtq', '2007-07-30'),
(398, 'Szorsdnta Jxgkvh', '1929-04-22'),
(399, 'Rne', '1995-07-24'),
(400, 'Aklojiomc', '1903-08-11'),
(401, 'Lpysohgwt Mkukfrg', '1958-09-18'),
(402, 'Grhgndaxvz', '1906-07-23'),
(403, 'Jyzzlxfqt Ajriagsk', '1950-04-22'),
(404, 'Qralexreht Edyygs Kyqg', '1996-01-08'),
(405, 'Rknfhw', '1959-11-06'),
(406, 'Fmov Jiybgck Sihpsrtbkp', '1946-04-30'),
(407, 'Sawrrrujkx', '1901-09-05'),
(408, 'Wnlyi', '1908-02-25'),
(409, 'Ptrwkpb Cmsnh Outecp', '1908-06-28'),
(410, 'Ibldmrlraq Ffijdyhh Jgcqgbrdhu', '1909-12-18'),
(411, 'Dhaijhg', '1983-05-22'),
(412, 'Lvdvtqvab', '1945-03-06'),
(413, 'Pbxcvievny', '1963-05-25'),
(414, 'Xyo Hgse', '1949-08-31'),
(415, 'Eipkalwqnu Aaluiwatm Vgmjhgymqc', '2003-10-16'),
(416, 'Pyuoi Hzzgyzsjsv Exufrfzmvo', '1923-05-19'),
(417, 'Hzadzdj', '1976-07-28'),
(418, 'Ldcdf Itf Kpoqgdjwja', '1930-06-20'),
(419, 'Rssdt Dmuwqwk', '1902-02-05'),
(420, 'Thshvawoph', '2005-05-23'),
(421, 'Tteoimxb', '1907-06-09'),
(422, 'Lmpl Ossspwrblq Bqig', '1915-10-16'),
(423, 'Iztbdewlp Ojuw Rkcn', '1997-11-04'),
(424, 'Ojdzzrqk Vbjez Dyztklns', '1963-09-21'),
(425, 'Gulubguez Qhr Ewwl', '1992-11-16'),
(426, 'Gltdyau Cpxhuxkggw Osabfeg', '1939-02-19'),
(427, 'Uplsqcnde Cjgwio', '2002-08-21'),
(428, 'Wzkz Ynfktmno Zidmnroi', '1957-04-07'),
(429, 'Jdvfju Uekpjp Chc', '1955-05-10'),
(430, 'Nfmsouvs', '1993-08-04'),
(431, 'Wrpy', '1942-12-09'),
(432, 'Opmx Dtxxabxboa Cpagypby', '1937-12-17'),
(433, 'Emc Xykuad', '1968-04-17'),
(434, 'Bxgegkuhdm Jilxoih Npdrwpbq', '1942-08-12'),
(435, 'Zgvmdjuu Efjpmi', '1989-02-07'),
(436, 'Jbdobmntpl Drftl Lzt', '1962-09-28'),
(437, 'Hxflhxb', '1987-03-02'),
(438, 'Cktb Tfp Iag', '1923-05-29'),
(439, 'Rhcuo Akhccn Yrftm', '1920-05-20'),
(440, 'Zomv Bbbgzhevg', '1921-09-05'),
(441, 'Tmnviygqi Kfjvtrd Dkpunxdwl', '1958-09-05'),
(442, 'Hsxc Nbjbvjgre', '1966-09-05'),
(443, 'Vrt Hyr', '1939-08-04'),
(444, 'Wmcrcmopcq Hckmfojlf', '1937-06-07'),
(445, 'Prupktzka Lyxlx', '1981-10-13'),
(446, 'Uile Ayg Abvjyibjab', '2009-07-03'),
(447, 'Vsw Bip', '1922-09-26'),
(448, 'Hwn', '1965-12-05'),
(449, 'Jqnz Ynk', '1962-09-12'),
(450, 'Ioqdcqqqw Bacira Kpijsudcu', '1909-05-26'),
(451, 'Ukggvtnzrv Dvdyrsjs Baoqzpbn', '1944-12-01'),
(452, 'Dnippdun Lgui', '1915-09-13'),
(453, 'Nemrya', '1956-10-18'),
(454, 'Ugysuc Olu', '1958-09-20'),
(455, 'Bcfoaz Gizyool', '1917-01-19'),
(456, 'Itbej', '1920-07-22'),
(457, 'Dpzpuh Wezlgx', '1984-07-13'),
(458, 'Wtsajyfvz', '1910-06-10'),
(459, 'Uam', '1994-01-19'),
(460, 'Iktotupkh Lkt', '1999-12-13'),
(461, 'Luqun Cojvjdmad', '1961-12-19'),
(462, 'Htpt Pvpb Zsse', '1986-05-09'),
(463, 'Qxigmk Bkutmkpyk Mtyjruri', '1984-08-12'),
(464, 'Qodahxps', '1950-08-13'),
(465, 'Etaf Wicj', '1930-02-05'),
(466, 'Lmqe Uof Xrwurju', '2003-06-18'),
(467, 'Zmqxl Jcytwn Xeghw', '1976-07-19'),
(468, 'Sjds Yke Vsrob', '1949-11-21'),
(469, 'Paq Bdlirppphd Cjjndyp', '1960-02-09'),
(470, 'Xmbnm Hnujtivd Tzqjaya', '2001-04-15'),
(471, 'Hhw Xvyfkdvtgc Ggdkgx', '1983-05-24'),
(472, 'Ztph Uvfojbfju Enrcyml', '1988-05-25'),
(473, 'Ajkuvuaw', '1937-10-03'),
(474, 'Pdet', '1966-11-18'),
(475, 'Jddpq Uptwq', '1981-02-23'),
(476, 'Ivorxcf Kxzoeaiy Gitbwu', '1985-10-09'),
(477, 'Kdx', '1914-04-19'),
(478, 'Qhgiladrt Uklvd Mre', '1964-10-21'),
(479, 'Hvvawlgxbf Ujllyemfw', '1912-05-18'),
(480, 'Xkfycdofpv Iqmehprq Wojm', '1908-09-01'),
(481, 'Oobc', '1914-06-09'),
(482, 'Pwhfu Nhchorr Uheko', '1974-08-03'),
(483, 'Jhugkdjyl', '1938-06-28'),
(484, 'Qzwcisohj Yltlfo Lnjswnx', '1989-02-07'),
(485, 'Nojl', '1963-12-02'),
(486, 'Dgu Pfcqiol', '1932-09-14'),
(487, 'Pnsdyhgpjk Hsnm Vofvjook', '1940-01-05'),
(488, 'Jnrmfwvjgo Lskxby', '1927-07-09'),
(489, 'Ftqtycpdi Oxc', '1997-05-01'),
(490, 'Xhvy Ozhery', '1919-01-25'),
(491, 'Ezfqmzf', '1942-06-12'),
(492, 'Pemcn', '1980-03-19'),
(493, 'Sbtbh', '1984-01-04'),
(494, 'Wibufn Kntbith', '2000-02-24'),
(495, 'Gpwq Phujg', '1951-11-24'),
(496, 'Zunguukn Ymphla Pmy', '1921-09-30'),
(497, 'Vxhwa', '2010-12-01'),
(498, 'Bqfrgc', '1963-10-01'),
(499, 'Rmzpwoy', '1950-11-03'),
(500, 'Mpmfkzjub Ctryqljal Veykefbz', '1942-01-25'),
(501, 'Ayclkv Opisg Tpd', '1928-01-16'),
(502, 'Vnoxdb Brilt', '1939-04-17'),
(503, 'Dchidm Vmvoue Twacsp', '1934-09-21'),
(504, 'Nrhzvnkksx Jxrmqnw Gskrqwq', '1909-03-16'),
(505, 'Ncsdrce', '1940-07-25'),
(506, 'Gjeyltt Iyu', '1947-07-19'),
(507, 'Bllyvgqlc', '1972-02-03'),
(508, 'Jxnnrvxgi Edhkqp Ksh', '1907-12-13'),
(509, 'Omrivbcv Cpt Jjvgx', '1908-11-16'),
(510, 'Dya Tlrxjhjhh', '1913-11-24'),
(511, 'Wgoesb', '2010-06-05'),
(512, 'Cwwaou', '1906-08-03'),
(513, 'Cjdxbgmj Htdnbsgb Mut', '2001-05-26'),
(514, 'Hxldigbnnu Yphueljbr', '1912-11-08'),
(515, 'Cod Vqm', '1981-01-02'),
(516, 'Wjyhkhwe Rjp', '1927-04-16'),
(517, 'Zqadoujep', '1932-09-02'),
(518, 'Embxzyl Dwxze', '1987-07-29'),
(519, 'Jhg Ejtjpbqr Alx', '1959-12-29'),
(520, 'Tsisbrzge Qprcugg Otfchil', '1976-06-27');

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
  `classes` set('SD','SC','SB','DD','DC','DB','XC','WS','MS','XB','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tournament`
--

INSERT INTO `t_tournament` (`id`, `name`, `date_start`, `date_end`, `description`, `classes`) VALUES
(1, 't11', '2021-10-10', '2021-10-14', 'yo', 'SD,SB,DD,DB'),
(2, 'Jcjkfcae Qluhnxmp Mcwtlvm Ldbrymfp Myvyvznj', '2013-06-15', '2013-06-17', NULL, 'SD,SC,SB,DD,DC,DB,XC,WS,MS,XB'),
(3, 'Tvsjmzheem Nlnuumls', '2018-04-24', '2018-04-29', NULL, 'SD,SC,SB,DD,DC,DB,XC,WS,MS,XB'),
(4, 'Djtkfdcrt Exocacyd Fchzxqd Veastj Eskplq', '2015-07-31', '2015-08-05', NULL, 'SD,SC,SB,DD,DC,DB,XC,WS,MS,XB'),
(5, 'Ulkibb Yrydjxyl Gvypdqm', '2013-09-08', '2013-09-10', NULL, 'SD,SC,SB,DD,DC,DB,XC,WS,MS,XB'),
(6, 'Dfhev', '2010-10-01', '2010-10-03', NULL, 'SD,SC,SB,DD,DC,DB,XC,WS,MS,XB'),
(7, 'Dpsuhtkdfe Sqdihqlj Swiyzvffaf Zsekoa Gpgbagclot', '2014-05-09', '2014-05-12', NULL, 'SD,SC,SB,DD,DC,DB,XC,WS,MS,XB'),
(8, 'Ephfwe Oaljjjrp Hwajhdaqu Kajvkja', '2010-03-13', '2010-03-14', '', 'SD,SC,SB,DD,DC,DB,XC,WS,MS,XB');

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
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tournament_players`
--

INSERT INTO `t_tournament_players` (`id`, `tournament_id`, `player_id`, `class`) VALUES
(2, 1, 4, 'DB'),
(1, 1, 4, 'SD'),
(7, 1, 7, 'DD'),
(8, 1, 10, 'DD'),
(4, 1, 17, 'SB'),
(6, 1, 18, 'DB'),
(3, 1, 19, 'DB'),
(9, 1, 22, 'SB'),
(96, 7, 4, 'DB'),
(97, 7, 5, 'DB'),
(99, 7, 83, 'DB'),
(100, 7, 123, 'DB'),
(103, 7, 163, 'DB'),
(98, 7, 186, 'DB'),
(101, 7, 243, 'DB'),
(102, 7, 253, 'DB'),
(29, 8, 3, 'DC'),
(92, 8, 4, 'DB'),
(95, 8, 5, 'DB'),
(67, 8, 6, 'XB'),
(20, 8, 12, 'WS'),
(35, 8, 13, 'SB'),
(55, 8, 23, 'DC'),
(40, 8, 41, 'SB'),
(83, 8, 41, 'XC'),
(86, 8, 49, 'SD'),
(37, 8, 66, 'WS'),
(69, 8, 72, 'XB'),
(18, 8, 73, 'XB'),
(36, 8, 73, 'XC'),
(66, 8, 75, 'XB'),
(75, 8, 80, 'SC'),
(52, 8, 94, 'SB'),
(42, 8, 99, 'DD'),
(21, 8, 99, 'SB'),
(41, 8, 109, 'DD'),
(14, 8, 110, 'XC'),
(25, 8, 116, 'WS'),
(15, 8, 124, 'DD'),
(49, 8, 125, 'DB'),
(28, 8, 139, 'SB'),
(87, 8, 182, 'SD'),
(94, 8, 186, 'DB'),
(27, 8, 201, 'XB'),
(77, 8, 204, 'DB'),
(38, 8, 214, 'DC'),
(43, 8, 220, 'MS'),
(90, 8, 223, 'DB'),
(13, 8, 223, 'SD'),
(16, 8, 228, 'MS'),
(54, 8, 243, 'DB'),
(65, 8, 244, 'DD'),
(62, 8, 247, 'XB'),
(71, 8, 248, 'MS'),
(34, 8, 251, 'SC'),
(79, 8, 255, 'XB'),
(64, 8, 258, 'XB'),
(39, 8, 268, 'DC'),
(45, 8, 274, 'XC'),
(26, 8, 275, 'DD'),
(10, 8, 278, 'DD'),
(32, 8, 284, 'DD'),
(72, 8, 295, 'XB'),
(74, 8, 297, 'SC'),
(12, 8, 313, 'XB'),
(44, 8, 329, 'XC'),
(88, 8, 334, 'SD'),
(46, 8, 339, 'WS'),
(17, 8, 348, 'XB'),
(30, 8, 356, 'DD'),
(57, 8, 358, 'DC'),
(61, 8, 360, 'DC'),
(11, 8, 364, 'SB'),
(76, 8, 373, 'MS'),
(47, 8, 379, 'DD'),
(22, 8, 388, 'DC'),
(53, 8, 420, 'WS'),
(78, 8, 421, 'SC'),
(51, 8, 424, 'DC'),
(19, 8, 430, 'MS'),
(24, 8, 432, 'SB'),
(59, 8, 442, 'DD'),
(58, 8, 454, 'DD'),
(23, 8, 463, 'XB'),
(80, 8, 464, 'DD'),
(56, 8, 473, 'XB'),
(70, 8, 475, 'DC'),
(81, 8, 479, 'WS'),
(73, 8, 479, 'XB'),
(48, 8, 483, 'DD'),
(60, 8, 486, 'SB'),
(50, 8, 496, 'XC'),
(31, 8, 499, 'MS'),
(33, 8, 501, 'SC'),
(68, 8, 510, 'SC'),
(63, 8, 512, 'XB'),
(89, 8, 514, 'SC');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=cp1251;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `name`, `email`, `phone`, `enabled`, `is_admin`) VALUES
(1, 'user1', 'efe6398127928f1b2e9ef3207fb82663', 'qweqwqwe', 'user1@email.comm', 111, 1, 0),
(2, 'user2', 'c1572d05424d0ecb2a65ec6a82aeacbf', 'user2 user2', 'user2@email.com', 222, 1, 0),
(3, 'user3', '3afc79b597f88a72528e864cf81856d2', 'user3 user3', 'user3@email.com', 333, 0, 0),
(4, 'user4', 'e7f5bfd77f339f3adf83464ff16e22fe', 'user10', 'qwe4@qwe.qwe', 44444444, 1, 0),
(5, 'qwe1', 'efe6398127928f1b2e9ef3207fb82663', 'qwe1', 'qwe1@qwe.com', 123, 1, 1),
(6, 'anastaz', 'efe6398127928f1b2e9ef3207fb82663', 'Анастачия', 'anastasiya@mail.ru', 37529, 1, 0);

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
  ADD CONSTRAINT `t_draw_players_matches_ibfk_3` FOREIGN KEY (`draw_id`) REFERENCES `t_draws` (`id`);

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
