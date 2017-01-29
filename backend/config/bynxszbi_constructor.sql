-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 29, 2017 at 12:50 PM
-- Server version: 5.6.33-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bynxszbi_constructor`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_school`
--

CREATE TABLE IF NOT EXISTS `about_school` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_school`
--

INSERT INTO `about_school` (`id`, `text`) VALUES
(1, '<p><strong>Футбольная школа &laquo;Звёзды&raquo;</strong>&nbsp;- создана в апреле 2013 года. За 3-х летний период работы было проведено свыше 2000 тренировок и 300 игр с другими командами. На данный момент в нашей школе занимается более 60 детей, которые распределены на 5 групп разной возрастной категории (2012, 2011, 2010, 2009, 2008 и 2007 г.р).</p>\r\n\r\n<p>Для всех возрастных групп разработана специальная тренировочная и игровая программа, которая позволяет детям развиваться как физически так и интеллектуально. По окончанию летнего, осеннего, зимнего и весеннего сезонов наши футболисты сдают аттестацию, выполняют те задачи, которые в начале сезона перед ними были поставлены тренером. По итогам месяца лучшие игроки получают грамоты.</p>\r\n\r\n<p><img alt="" src="http://fc-stars.s-host.net/backend/web/files/AboutSchoolPhoto/1.jpg" style="height:202px; width:150px" /></p>\r\n\r\n<p>Тренер</p>\r\n\r\n<p>Петраш Александр Андреевич Воспитанник Днепропетровской футбольной школы &laquo;Днепромайн&raquo; г. Днепропетровск. Имеет дипломы среднего и высшего образование. С 2014 года, является лицензированным специалистом категории &quot;С&quot; &ndash; (владелец &quot;С&quot; лицензии ФФУ имеет право работать тренером на территории Федерации футбола Украины согласно Тренерской конвенции УЕФА).</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `about_school_photo`
--

CREATE TABLE IF NOT EXISTS `about_school_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `about_school_photo`
--

INSERT INTO `about_school_photo` (`id`, `photo`, `link`) VALUES
(1, '1.jpg', 'http://fc-stars.s-host.net/backend/web/files/AboutSchoolPhoto/1.jpg'),
(3, '354270_463.jpg', 'http://fc-stars.s-host.net/backend/web/files/AboutSchoolPhoto/354270_463.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password_hash`, `auth_key`, `created_at`, `updated_at`) VALUES
(4, 'admin', '$2y$13$keyhm9mcr9RsgCM7M.F/G.VobxYMSmZMrP.e8zlqjDXAIhs2m9K.a', 'C6LAgHMB3Lm3MQr5eDH6vBYakYZboHGi', 1484417298, 1484417298);

-- --------------------------------------------------------

--
-- Table structure for table `callback`
--

CREATE TABLE IF NOT EXISTS `callback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commands`
--

CREATE TABLE IF NOT EXISTS `commands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `capture` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `commands`
--

INSERT INTO `commands` (`id`, `category`, `photo`, `first_name`, `last_name`, `capture`) VALUES
(24, 'U-10(2007) U-9(2008)', 'Mb2TJwBPzjQ.jpg', 'Виталий', 'Лысяк', ''),
(25, 'U-10(2007) U-9(2008)', 'fTLWPW0xkhc.jpg', 'Виктор', 'Ведмидь', '');

-- --------------------------------------------------------

--
-- Table structure for table `commands_photo`
--

CREATE TABLE IF NOT EXISTS `commands_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `player_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `commands_photo`
--

INSERT INTO `commands_photo` (`id`, `photo`, `player_id`) VALUES
(12, '1.jpg', 24);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `description`, `telephone`, `email`) VALUES
(1, 'Днепропетровская область, г. Днепр, Универсальная ул., 18а', '<p>(Стадион ВРЗ)</p>\r\n', '063-321-05-59', 'fcstars@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `graduates`
--

CREATE TABLE IF NOT EXISTS `graduates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `honors`
--

CREATE TABLE IF NOT EXISTS `honors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `honors`
--

INSERT INTO `honors` (`id`, `photo`) VALUES
(1, 'img0321.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1479642715),
('m130524_201442_init', 1479642717);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(5000) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<p>В этом году Стадион ВРЗ начнут реконструировать, так что у нас будет для тренировок самый большой стадион с искусственным покрытием на левом берегу! Что в дальнейшем позволит нашим детям развивать свои способности не только в мини футболе а и в большом! Принимать городские и областные игры с другими командами. + Рядом со стадионом построят 2 мини футбольные площадки!</p>\r\n\r\n<p><img alt="" src="http://fc-stars.s-host.net/backend/web/files/AboutSchoolPhoto/354270_463.jpg" style="height:420px; width:310px" /></p>\r\n', 1484691713, 1485688697),
(2, '<p><img alt="" src="http://fc-stars.s-host.net/backend/web/files/AboutSchoolPhoto/354270_463.jpg" style="height:420px; width:310px" /></p>\r\n\r\n<p>Расписание: https://pp.vk.me/c836131/v836131115/1bcfa/fyIKf6YV5mE.jpg</p>\r\n', 1484692012, 1485688685),
(3, 'https://vk.com/news_fc_stars', 1484692054, 1484692054);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `photo`, `link`) VALUES
(1, '354270_463.jpg', 'vk.com');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `photo`) VALUES
(5, '82HLeROr4xw.jpg'),
(6, 'ZMaXrL3MZKI.jpg'),
(7, 'sXGxBQreei0.jpg'),
(8, 'rUgmjYHep2U.jpg'),
(9, 'kzzUzizif3Q.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `photo`, `content`) VALUES
(1, '354270_463.jpg', 'Отзыв 1'),
(2, '354270_463.jpg', 'Отзыв 2');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `capture` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `photo`, `capture`, `price`) VALUES
(1, 'EZ_9hJSir24.jpg', 'Гетры (есть в наличии) ', '60 грн.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `photo`, `name`, `auth_key`, `password_hash`, `status`, `created_at`, `updated_at`) VALUES
(25, '	Aleks', '1.jpg', 'Александр', '5KtD0OczP46iuQGHfQH0_3LYQuUEEZYz', '$2y$13$0Rk/oB/qFNwWshrd3MAIz.e1P7YcGgn6tSAXuwRO3I/XBYjT2poBS', 1, 1484692750, 1484692812),
(26, 'alexander', '354270_463.jpg', '123456789', 'cAAF33aaNSQkerQwzObjUcv084hpmSyv', '$2y$13$LUVUW0SuwdshJtJKvmkiW.f0D3Jz.GrXXmpxD/koHwmT2LGlWqpoW', 1, 1485596033, 1485596045);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `video`) VALUES
(1, 'https://www.youtube.com/watch?v=Ka9db20Tbvo'),
(2, 'https://www.youtube.com/watch?v=TPDEhl8TEWA'),
(3, 'https://vk.com/video?z=video355242115_456239027%2Fpl_cat_updates'),
(4, 'https://www.youtube.com/watch?v=PVT-GfQ0FUs');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
