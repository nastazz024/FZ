-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 29 2018 г., 20:27
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
  PRIMARY KEY (`id`),
  KEY `color` (`color`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shirt`
--

INSERT INTO `shirt` (`id`, `name`, `description`, `price`, `image`, `color`, `category`) VALUES
(1, 'GAGE POLO', 'Удобное поло с уникальными деталями. Доступно как в мужском, \r\nтак и в детском размерах.', '30', 'badminton-polo-gage-fzforza_1.png', 5, 1),
(2, 'PORTLAND POLO', 'Удобное поло со стильной графикой. Поло изготовлено из легкого материала, что делает его очень удобным.', '50', 'fzforza_polo_portland_blue.jpg', 5, 1),
(3, 'Palermo tee', 'Майка Palermo изготовлена из 93% полиэстера и 7% эластана, что означает, что он очень мягкий и удобный для ношения.', '70', 'badminton-tee-palermo-fzforza.jpg', 5, 1),
(4, 'Pontiac Tee', 'Майка из сверхлегкого материала, обеспечивающая отличную воздухопроницаемость.', '30', 'badminton-tee-pontiac-fzforza.jpg', 5, 1),
(9, 'Chicago polo', 'Эксклюзивное поло в спортивном зеленом цвете. ', '30', 'badminton-polo-chicago-fzforza.jpg', 8, 1),
(10, 'Dublin Polo', 'Эксклюзивный спортивный вид и потрясающий комфорт.\r\n', '50', 'badminton-polo-dublin.jpg', 2, 1),
(11, 'Dundee Polo', 'Традиционное поло с уникальными деталями в супер удобном качестве.', '70', 'badminton-polo-dundee2.jpg', 5, 2),
(12, 'Dubai Tee', 'Майка с превосходным цветом, обработанная Dry-Forze для обеспечения комфорта и воздухопроницаемости.\r\n', '30', 'badminton-tee-dubai.jpg', 4, 2);

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
(3, 3, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `shirt`
--
ALTER TABLE `shirt`
  ADD CONSTRAINT `shirt_ibfk_1` FOREIGN KEY (`color`) REFERENCES `shirt_color` (`id`),
  ADD CONSTRAINT `shirt_ibfk_2` FOREIGN KEY (`category`) REFERENCES `shirt_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
