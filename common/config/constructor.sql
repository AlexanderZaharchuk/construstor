-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 28 2016 г., 12:44
-- Версия сервера: 10.1.16-MariaDB
-- Версия PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `constructor`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about_school`
--

CREATE TABLE `about_school` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about_school`
--

INSERT INTO `about_school` (`id`, `text`) VALUES
(1, '<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>\r\n\r\n<p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых клиентов недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</p>\r\n\r\n<p><img alt="" src="http://localhost/other_projects/constructor/backend/web/files/AboutSchoolPhoto/Diploma-1.jpg" style="height:253px; width:186px" /></p>\r\n'),
(2, '<p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы использовали небезызвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.</p>\r\n\r\n<p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых клиентов недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `about_school_photo`
--

CREATE TABLE `about_school_photo` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about_school_photo`
--

INSERT INTO `about_school_photo` (`id`, `photo`, `link`) VALUES
(3, 'Diploma-1.jpg', 'http://localhost/other_projects/constructor/backend/web/files/AboutSchoolPhoto/Diploma-1.jpg'),
(4, '2h__glyanets5-копия.jpg', 'http://localhost/other_projects/constructor/backend/web/files/AboutSchoolPhoto/2h__glyanets5-копия.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password_hash`, `auth_key`, `created_at`, `updated_at`) VALUES
(0, 'alex', '$2y$13$Q7h39gtmfd2hap/OrBu3EeyH5mbLaFy3Lm4/y7hi1aArAU37U5.Cy', 'dpG6hiP-YAZVZh_xyB789U5c_6MySjr5', 1479645190, 1479645190);

-- --------------------------------------------------------

--
-- Структура таблицы `callback`
--

CREATE TABLE `callback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `commands`
--

CREATE TABLE `commands` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `capture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `commands`
--

INSERT INTO `commands` (`id`, `category`, `photo`, `first_name`, `last_name`, `capture`) VALUES
(20, 'categ', 'Diploma-2.jpg', 'Alex11', 'Alecseev', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмыс'),
(21, 'categ', '2999ef7a6860080ffae15f6e4174559f.jpg', 'Alex', 'Degtev', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмыс'),
(22, 'rere', '2999ef7a6860080ffae15f6e4174559f.jpg', 'Oleg', 'Monitornyi', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмыс'),
(23, 'rere', '2999ef7a6860080ffae15f6e4174559f.jpg', 'Pavel', 'Batbkov', 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмыс');

-- --------------------------------------------------------

--
-- Структура таблицы `commands_photo`
--

CREATE TABLE `commands_photo` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `commands_photo`
--

INSERT INTO `commands_photo` (`id`, `photo`, `player_id`) VALUES
(2, '456654.png', 21),
(3, '456654.png', 22),
(4, '2999ef7a6860080ffae15f6e4174559f.jpg', 20),
(5, 'Diploma-1.jpg', 20),
(6, '2999ef7a6860080ffae15f6e4174559f.jpg', 20),
(7, '2999ef7a6860080ffae15f6e4174559f.jpg', 21);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `description`, `telephone`, `email`) VALUES
(1, 'Днепропетровская область, г. Днепр, Универсальная ул., 18а', '<p>(Стадион ВРЗ)</p>\r\n', '063-321-05-59', 'fcstars@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `graduates`
--

CREATE TABLE `graduates` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `graduates`
--

INSERT INTO `graduates` (`id`, `photo`, `name`) VALUES
(1, 'abcd123.jpg', '2222222'),
(2, 'Diploma-1.jpg', '222');

-- --------------------------------------------------------

--
-- Структура таблицы `honors`
--

CREATE TABLE `honors` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1479642715),
('m130524_201442_init', 1479642717);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `content`, `created_at`, `updated_at`) VALUES
(23, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы ис', 1479670409, 1479742912),
(24, 'По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых клиентов недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и пр', 1479670415, 1479743350),
(25, 'Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы ис', 1479670425, 1479743358),
(28, 'По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых клиентов недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и пр', 1479742848, 1479743365);

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`id`, `photo`) VALUES
(2, 'Diploma-1.jpg'),
(3, 'Diploma-1.jpg'),
(4, 'Diploma-1.jpg'),
(5, 'Diploma-1.jpg'),
(6, 'Diploma-1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `photo`) VALUES
(5, 'Diploma-1.jpg'),
(6, '2999ef7a6860080ffae15f6e4174559f.jpg'),
(7, '15 (1).jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `photo`, `content`) VALUES
(14, '', 'sdfdsf'),
(24, '', 'sdfdsf'),
(25, '', 'sdfdsf'),
(26, '', 'sdfdsf');

-- --------------------------------------------------------

--
-- Структура таблицы `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `capture` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shop`
--

INSERT INTO `shop` (`id`, `photo`, `capture`, `price`) VALUES
(1, 'Diploma-1.jpg', 'Футболка', '350 грн'),
(2, '2999ef7a6860080ffae15f6e4174559f.jpg', 'Футболка', '350 грн'),
(3, 'luxfon.com_4025.jpg', 'Футболка', '350 грн'),
(4, 'moj-php-mvc-framework-wide.jpg', 'Футболка', '350 грн'),
(5, 'diploma-big.jpg', 'Футболка', '350 грн'),
(6, 'diploma-big.jpg', 'Футболка', '350 грн'),
(7, 'diploma-big.jpg', 'Футболка', '350 грн'),
(8, 'diploma-big.jpg', 'Футболка', '350 грн'),
(9, 'diploma-big.jpg', 'Футболка', '350 грн'),
(10, 'diploma-big.jpg', 'Футболка', '350 грн'),
(11, 'diploma-big.jpg', 'Футболка', '350 грн'),
(12, 'diploma-big.jpg', 'Футболка', '350 грн'),
(13, 'diploma-big.jpg', 'Футболка', '350 грн'),
(14, 'diploma-big.jpg', 'Футболка', '350 грн'),
(15, 'diploma-big.jpg', 'Футболка', '350 грн'),
(16, 'diploma-big.jpg', 'Футболка', '350 грн'),
(17, 'kartinka-3d-dikaya-koshka.jpg', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `user_name`, `photo`, `name`, `auth_key`, `password_hash`, `status`, `created_at`, `updated_at`) VALUES
(7, 'alex1', '456654.png', '12345', 'NHCv7HTHAYqeQlRkFj6J7gHrz7ideHJf', '$2y$13$YL/8FMbRvW3Mv7nGtVc05u4vojmVVsYqfiUS2/yyhAVBZ1igUwKzi', 1, 1479700743, 1480081141);

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `video`) VALUES
(1, 'https://www.youtube.com/embed/eFU_wJes-xE'),
(2, 'https://www.youtube.com/embed/eFU_wJes-xE');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about_school`
--
ALTER TABLE `about_school`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `about_school_photo`
--
ALTER TABLE `about_school_photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `callback`
--
ALTER TABLE `callback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `commands_photo`
--
ALTER TABLE `commands_photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `honors`
--
ALTER TABLE `honors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`user_name`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about_school`
--
ALTER TABLE `about_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `about_school_photo`
--
ALTER TABLE `about_school_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `callback`
--
ALTER TABLE `callback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `commands`
--
ALTER TABLE `commands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `commands_photo`
--
ALTER TABLE `commands_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `graduates`
--
ALTER TABLE `graduates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `honors`
--
ALTER TABLE `honors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
