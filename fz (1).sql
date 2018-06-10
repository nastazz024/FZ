-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 10 2018 г., 00:18
-- Версия сервера: 5.7.21
-- Версия PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fz`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accs`
--

DROP TABLE IF EXISTS `accs`;
CREATE TABLE IF NOT EXISTS `accs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `accs`
--

INSERT INTO `accs` (`id`, `name`, `description`, `full_description`, `price`, `image`) VALUES
(1, 'FZ FORZA POWER 999', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '', '30', 'badminton-socks-lakersocks-fzforza-301824.jpg'),
(2, 'FZ FORZA POWER 996', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '', '50', 'badminton-racket-power996-fzforza-302000_1.jpg'),
(3, 'FZ FORZA PRECISION 5000', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '', '70', 'badminton-racket-fz-forza-precision-50005.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `bag`
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bag`
--

INSERT INTO `bag` (`id`, `name`, `description`, `price`, `image`, `full_description`) VALUES
(1, 'TRICK RACKET BAG', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '30', 'badminton-racketbag-trick-fzforza.png', ''),
(2, 'CARTON RACKET BAG', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '50', 'badminton-racketbag-carton-fzforza.jpg', ''),
(3, 'TASHIN RACKET BAG', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '70', 'badminton-racketbag-tashin-fzforza3.jpg', '');

-- --------------------------------------------------------

--
-- Структура таблицы `bag_count`
--

DROP TABLE IF EXISTS `bag_count`;
CREATE TABLE IF NOT EXISTS `bag_count` (
  `jacket_id` int(11) NOT NULL,
  `jacket_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jacket_id`,`jacket_size_id`),
  KEY `shirt_id` (`jacket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `bag_count`
--

INSERT INTO `bag_count` (`jacket_id`, `jacket_size_id`, `count`) VALUES
(1, 1, 10),
(1, 2, 11),
(1, 3, 1),
(2, 2, 15),
(3, 3, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `bag_size`
--

DROP TABLE IF EXISTS `bag_size`;
CREATE TABLE IF NOT EXISTS `bag_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `norder` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bag_size`
--

INSERT INTO `bag_size` (`id`, `name`, `norder`) VALUES
(1, '6', 1),
(2, '9', 2),
(4, '15', 3),
(5, 'Рюкзаки', 4),
(6, 'Туристические', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `jacket`
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
-- Дамп данных таблицы `jacket`
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
-- Структура таблицы `jacket_category`
--

DROP TABLE IF EXISTS `jacket_category`;
CREATE TABLE IF NOT EXISTS `jacket_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jacket_category`
--

INSERT INTO `jacket_category` (`id`, `category`, `type`) VALUES
(1, 'Мужская', 'clothes'),
(2, 'Женская', 'clothes'),
(3, 'Детская', 'clothes');

-- --------------------------------------------------------

--
-- Структура таблицы `jacket_color`
--

DROP TABLE IF EXISTS `jacket_color`;
CREATE TABLE IF NOT EXISTS `jacket_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `jacket_color`
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
-- Структура таблицы `jacket_count`
--

DROP TABLE IF EXISTS `jacket_count`;
CREATE TABLE IF NOT EXISTS `jacket_count` (
  `jacket_id` int(11) NOT NULL,
  `jacket_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`jacket_id`,`jacket_size_id`),
  KEY `shirt_id` (`jacket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `jacket_count`
--

INSERT INTO `jacket_count` (`jacket_id`, `jacket_size_id`, `count`) VALUES
(1, 1, 10),
(1, 2, 11),
(1, 3, 1),
(2, 2, 15),
(3, 3, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `jacket_size`
--

DROP TABLE IF EXISTS `jacket_size`;
CREATE TABLE IF NOT EXISTS `jacket_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `norder` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `jacket_size`
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
-- Структура таблицы `racket`
--

DROP TABLE IF EXISTS `racket`;
CREATE TABLE IF NOT EXISTS `racket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `racket`
--

INSERT INTO `racket` (`id`, `name`, `description`, `full_description`, `price`, `image`) VALUES
(1, 'FZ FORZA POWER 999', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '', '30', 'badminton-racket-fz-forza-power-999.jpg'),
(2, 'FZ FORZA POWER 996', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '', '50', 'badminton-racket-power996-fzforza-302000_1.jpg'),
(3, 'FZ FORZA PRECISION 5000', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '', '70', 'badminton-racket-fz-forza-precision-50005.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `racket_accs`
--

DROP TABLE IF EXISTS `racket_accs`;
CREATE TABLE IF NOT EXISTS `racket_accs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  `price` char(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `racket_accs`
--

INSERT INTO `racket_accs` (`id`, `name`, `description`, `full_description`, `price`, `image`) VALUES
(1, 'FZ FORZA POWER 999', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '', '30', '300166_supergrip_blue.png'),
(2, 'FZ FORZA POWER 996', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '', '50', 'badminton-racket-power996-fzforza-302000_1.jpg'),
(3, 'FZ FORZA PRECISION 5000', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '', '70', 'badminton-racket-fz-forza-precision-50005.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `racket_balance`
--

DROP TABLE IF EXISTS `racket_balance`;
CREATE TABLE IF NOT EXISTS `racket_balance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `balance` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `racket_balance`
--

INSERT INTO `racket_balance` (`id`, `balance`) VALUES
(1, 'В голову'),
(2, 'Нейтральный'),
(3, 'В ручку');

-- --------------------------------------------------------

--
-- Структура таблицы `racket_count`
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
-- Дамп данных таблицы `racket_count`
--

INSERT INTO `racket_count` (`racket_id`, `racket_balance_id`, `count`) VALUES
(1, 1, 10),
(1, 2, 11),
(1, 3, 1),
(2, 2, 15),
(3, 3, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `racket_hole`
--

DROP TABLE IF EXISTS `racket_hole`;
CREATE TABLE IF NOT EXISTS `racket_hole` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hole` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `racket_hole`
--

INSERT INTO `racket_hole` (`id`, `hole`) VALUES
(1, '76'),
(2, '88'),
(3, '96');

-- --------------------------------------------------------

--
-- Структура таблицы `shirt`
--

DROP TABLE IF EXISTS `shirt`;
CREATE TABLE IF NOT EXISTS `shirt` (
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
-- Дамп данных таблицы `shirt`
--

INSERT INTO `shirt` (`id`, `name`, `description`, `price`, `image`, `color`, `category`, `full_description`) VALUES
(1, 'GAGE POLO', 'Удобное поло с уникальными деталями. Доступно как в мужском, \r\nтак и в детском размерах.', '30', 'badminton-polo-gage-fzforza_1.png', 5, 2, ''),
(2, 'PORTLAND POLO', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '50', 'fzforza_polo_portland_blue.jpg', 5, 1, ''),
(3, 'Palermo tee', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '70', 'badminton-tee-palermo-fzforza.jpg', 5, 2, ''),
(4, 'Pontiac Tee', 'Майка из сверхлегкого материала, обеспечивающая отличную воздухопроницаемость.', '30', 'badminton-tee-pontiac-fzforza.jpg', 5, 1, ''),
(9, 'Chicago polo', 'Эксклюзивное поло в спортивном зеленом цвете. ', '30', 'badminton-polo-chicago-fzforza.jpg', 8, 3, ''),
(10, 'Dublin Polo', 'Эксклюзивный спортивный вид и потрясающий комфорт.\r\n', '50', 'badminton-polo-dublin.jpg', 2, 1, ''),
(11, 'Dundee Polo', 'Традиционное поло с уникальными деталями в супер удобном качестве.', '70', 'badminton-polo-dundee2.jpg', 5, 3, ''),
(12, 'Dubai Tee', 'Майка с превосходным цветом, обработанная Dry-Forze для обеспечения комфорта и воздухопроницаемости.\r\n', '30', 'badminton-tee-dubai.jpg', 4, 3, '');

-- --------------------------------------------------------

--
-- Структура таблицы `shirt_category`
--

DROP TABLE IF EXISTS `shirt_category`;
CREATE TABLE IF NOT EXISTS `shirt_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shirt_category`
--

INSERT INTO `shirt_category` (`id`, `category`, `type`) VALUES
(1, 'Мужская', 'clothes'),
(2, 'Женская', 'clothes'),
(3, 'Детская', 'clothes');

-- --------------------------------------------------------

--
-- Структура таблицы `shirt_color`
--

DROP TABLE IF EXISTS `shirt_color`;
CREATE TABLE IF NOT EXISTS `shirt_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shirt_color`
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
-- Структура таблицы `shirt_count`
--

DROP TABLE IF EXISTS `shirt_count`;
CREATE TABLE IF NOT EXISTS `shirt_count` (
  `shirt_id` int(11) NOT NULL,
  `shirt_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shirt_id`,`shirt_size_id`),
  KEY `shirt_id` (`shirt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shirt_count`
--

INSERT INTO `shirt_count` (`shirt_id`, `shirt_size_id`, `count`) VALUES
(1, 1, 10),
(1, 2, 11),
(1, 3, 1),
(2, 2, 15),
(3, 3, 10),
(4, 5, 10),
(9, 2, 10),
(10, 2, 10),
(11, 4, 10),
(12, 1, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `shirt_size`
--

DROP TABLE IF EXISTS `shirt_size`;
CREATE TABLE IF NOT EXISTS `shirt_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `norder` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shirt_size`
--

INSERT INTO `shirt_size` (`id`, `name`, `norder`) VALUES
(1, 'XS', 10),
(2, 'S', 20),
(3, 'M', 30),
(4, 'L', 40),
(5, 'XL', 50),
(6, 'XXL', 60);

-- --------------------------------------------------------

--
-- Структура таблицы `shoes`
--

DROP TABLE IF EXISTS `shoes`;
CREATE TABLE IF NOT EXISTS `shoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `price` char(5) NOT NULL,
  `image` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shoes`
--

INSERT INTO `shoes` (`id`, `name`, `description`, `price`, `image`, `category`, `full_description`) VALUES
(1, 'PRO TRAINER M V2', 'A durable shoe with extra stability. A badminton shoe of high quality with a prolonged life.', '34', 'badminton-shoes-protrainermv2-fzforza.png', 1, ''),
(2, 'Lingus V3', 'Like a bolt of lightning lit up the sky FZ FORZA brings Lingus V3 back to court. ', '52', 'badminton-shoes-lingusv3-fzforza.jpg', 3, ''),
(3, 'FIERCE M', 'This stylish FZ FORZA shoe will hug your feet and give all-around protection from heel to forefoot.', '85', '302414_fierce__0099_-_website.jpg', 2, '');

-- --------------------------------------------------------

--
-- Структура таблицы `shoes_category`
--

DROP TABLE IF EXISTS `shoes_category`;
CREATE TABLE IF NOT EXISTS `shoes_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shoes_category`
--

INSERT INTO `shoes_category` (`id`, `category`, `type`) VALUES
(1, 'Мужская', 'clothes'),
(2, 'Женская', 'clothes'),
(3, 'Детская', 'clothes');

-- --------------------------------------------------------

--
-- Структура таблицы `shoes_count`
--

DROP TABLE IF EXISTS `shoes_count`;
CREATE TABLE IF NOT EXISTS `shoes_count` (
  `shoes_id` int(11) NOT NULL,
  `shoes_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`shoes_id`,`shoes_size_id`),
  KEY `shirt_id` (`shoes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shoes_count`
--

INSERT INTO `shoes_count` (`shoes_id`, `shoes_size_id`, `count`) VALUES
(1, 1, 10),
(1, 2, 11),
(1, 3, 1),
(2, 2, 15),
(3, 3, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `shoes_size`
--

DROP TABLE IF EXISTS `shoes_size`;
CREATE TABLE IF NOT EXISTS `shoes_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `norder` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shoes_size`
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
-- Структура таблицы `short`
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
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `short`
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
-- Структура таблицы `short_category`
--

DROP TABLE IF EXISTS `short_category`;
CREATE TABLE IF NOT EXISTS `short_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `short_category`
--

INSERT INTO `short_category` (`id`, `category`, `type`) VALUES
(1, 'Мужская', 'clothes'),
(2, 'Женская', 'clothes'),
(3, 'Детская', 'clothes');

-- --------------------------------------------------------

--
-- Структура таблицы `short_color`
--

DROP TABLE IF EXISTS `short_color`;
CREATE TABLE IF NOT EXISTS `short_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `short_color`
--

INSERT INTO `short_color` (`id`, `color`) VALUES
(1, 'Черный'),
(2, 'Белый'),
(3, 'Желтый'),
(4, 'Коралловый');

-- --------------------------------------------------------

--
-- Структура таблицы `short_count`
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
-- Дамп данных таблицы `short_count`
--

INSERT INTO `short_count` (`short_id`, `short_size_id`, `count`) VALUES
(1, 1, 10),
(1, 2, 11),
(1, 3, 1),
(2, 2, 15),
(3, 3, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `short_size`
--

DROP TABLE IF EXISTS `short_size`;
CREATE TABLE IF NOT EXISTS `short_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `norder` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `short_size`
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
-- Структура таблицы `shuttle`
--

DROP TABLE IF EXISTS `shuttle`;
CREATE TABLE IF NOT EXISTS `shuttle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `full_description` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` smallint(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shuttle`
--

INSERT INTO `shuttle` (`id`, `name`, `description`, `full_description`, `image`, `price`) VALUES
(1, 'FZ FORZA VIP', 'Shuttles with perfect durability and flight. Tested for speed and stability in flight.', '', 'badminton-shuttles-fzforzavip-fzforza-301554_1.jpg', 40),
(2, 'FZ FORZA NS-10', 'NS-10 is a unique nylon shuttle with a natural cork head that gives you playability like the best feather shuttles. ', '', '302440_ns-10.jpg', 40);

-- --------------------------------------------------------

--
-- Структура таблицы `shuttle_count`
--

DROP TABLE IF EXISTS `shuttle_count`;
CREATE TABLE IF NOT EXISTS `shuttle_count` (
  `short_id` int(11) NOT NULL,
  `short_size_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`short_id`,`short_size_id`),
  KEY `shirt_id` (`short_id`),
  KEY `short_size_id` (`short_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shuttle_count`
--

INSERT INTO `shuttle_count` (`short_id`, `short_size_id`, `count`) VALUES
(1, 1, 10),
(1, 2, 11),
(1, 3, 1),
(2, 2, 15),
(3, 3, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `shuttle_pcs`
--

DROP TABLE IF EXISTS `shuttle_pcs`;
CREATE TABLE IF NOT EXISTS `shuttle_pcs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(5) NOT NULL,
  `norder` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `shuttle_pcs`
--

INSERT INTO `shuttle_pcs` (`id`, `name`, `norder`) VALUES
(1, '3', 10),
(2, '6', 20),
(3, '9', 30);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `racket_count`
--
ALTER TABLE `racket_count`
  ADD CONSTRAINT `racket_count_ibfk_1` FOREIGN KEY (`racket_balance_id`) REFERENCES `racket_balance` (`id`),
  ADD CONSTRAINT `racket_count_ibfk_2` FOREIGN KEY (`racket_id`) REFERENCES `racket` (`id`);

--
-- Ограничения внешнего ключа таблицы `shirt`
--
ALTER TABLE `shirt`
  ADD CONSTRAINT `shirt_ibfk_1` FOREIGN KEY (`color`) REFERENCES `shirt_color` (`id`),
  ADD CONSTRAINT `shirt_ibfk_2` FOREIGN KEY (`category`) REFERENCES `shirt_category` (`id`);

--
-- Ограничения внешнего ключа таблицы `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`category`) REFERENCES `shoes_category` (`id`);

--
-- Ограничения внешнего ключа таблицы `short`
--
ALTER TABLE `short`
  ADD CONSTRAINT `short_ibfk_1` FOREIGN KEY (`category`) REFERENCES `short_category` (`id`);

--
-- Ограничения внешнего ключа таблицы `short_count`
--
ALTER TABLE `short_count`
  ADD CONSTRAINT `short_count_ibfk_1` FOREIGN KEY (`short_id`) REFERENCES `short` (`id`),
  ADD CONSTRAINT `short_count_ibfk_2` FOREIGN KEY (`short_size_id`) REFERENCES `short_size` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
