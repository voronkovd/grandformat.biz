-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 11 2015 г., 15:26
-- Версия сервера: 5.6.27-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `big_format`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `content`) VALUES
(1, 'Россия, г. Новосибирск, '),
(2, 'ул. Коммунистическая, д. 43'),
(3, 'тел./факс: +7 (383) 218-​14-​53, 218-​15-​00'),
(4, 'E-​mail: office@​grandformat.​biz'),
(5, 'Web: http://​www.​grandformat.​biz'),
(6, '646156767 (ICQ-​консультант)');

-- --------------------------------------------------------

--
-- Структура таблицы `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `contents`
--

INSERT INTO `contents` (`id`, `title`, `content`) VALUES
(1, 'Единый стандарт качества', 'Современное оборудование и высококвалифицированные специалисты позволяют выполнять печатные работы любой степени сложности с единым стандартом качества.'),
(2, 'Один подрядчик - Один звонок - один заказ', 'Все просто, понятно, вовремя. С вами работает персональный менеджер, который точно знает, на какой стадии находится ваш заказ и, когда вы его получите.'),
(3, 'Большой объем - низкая цена', 'Мы работаем с большими объемами печати и все расходные материалы закупаются с минимальными наценками, поэтому наши клиенты не переплачивают.'),
(4, 'Доставка по России', 'Мы доставляем все заказы в оговоренные сроки в любой город России. Доставка осуществляеться транспортной компанией <a href="http://nrg-tk.ru/">«Энергия»</a>');

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `name`, `value`) VALUES
(1, 'Прайс', NULL),
(2, 'Банер', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1447233993),
('m151026_064403_user_table', 1447233995),
('m151026_064415_user_create', 1447233996),
('m151026_064916_social_network_table', 1447233996),
('m151026_064926_social_network_create', 1447233996),
('m151026_065138_seo_table', 1447233996),
('m151026_065144_seo_create', 1447233996),
('m151026_072832_file_table', 1447233996),
('m151026_072918_file_create', 1447233996),
('m151029_052048_content_table', 1447233996),
('m151029_052552_content_create', 1447233996),
('m151029_084046_printer_table', 1447233996),
('m151029_092038_requisites_table', 1447233996),
('m151029_092045_requisites_create', 1447233996),
('m151029_092055_contacts_table', 1447233996),
('m151029_092102_contacts_create', 1447233996),
('m151102_130049_scripts_table', 1447233996),
('m151102_130055_scripts_create', 1447233996),
('m151111_073829_calculate_table', 1447233996),
('m151111_082025_calculate_create', 1447233996);

-- --------------------------------------------------------

--
-- Структура таблицы `post_prints`
--

CREATE TABLE IF NOT EXISTS `post_prints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(19,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `post_prints`
--

INSERT INTO `post_prints` (`id`, `name`, `price`) VALUES
(1, 'Карманы по периметру', 10.0000),
(2, 'Ловерсы по периметру', 5.0000),
(3, 'Проклейка по периметру', 10.0000),
(4, 'Поля по 0.1 м', 0.0000),
(5, 'Обрезка в край', 0.0000);

-- --------------------------------------------------------

--
-- Структура таблицы `printers`
--

CREATE TABLE IF NOT EXISTS `printers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `document` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `requisites`
--

CREATE TABLE IF NOT EXISTS `requisites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `requisites`
--

INSERT INTO `requisites` (`id`, `content`) VALUES
(1, 'ООО "Большой Формат - Новосибирск"'),
(2, 'юр. адрес: 630110 г. Новосибирск, ул. Б.Хмельницкого, 71'),
(3, 'почт. адрес: 630011 г. Новосибирск, ул. Красный проспект, 18, а/я 8'),
(4, 'Тел: +7 (383) 218-​14-​53'),
(5, 'ИНН 5410788440'),
(6, 'КПП 541001001'),
(7, 'р/с 40702810611010010130'),
(8, 'в Филиале "Новосибирский" ЗАО "ГЛОБЭКСБАНК"'),
(9, 'к/с 30101810150040000747'),
(10, 'БИК 045004747');

-- --------------------------------------------------------

--
-- Структура таблицы `scripts`
--

CREATE TABLE IF NOT EXISTS `scripts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `scripts`
--

INSERT INTO `scripts` (`id`, `name`, `content`) VALUES
(1, 'Скрипт метрики', NULL),
(2, 'Скрипт карты', '<a class="dg-widget-link" href="http://2gis.ru/novosibirsk/firm/141265769951860/center/82.92336702346803,55.02407393405549/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Новосибирска</a><div class="dg-widget-link"><a href="http://2gis.ru/novosibirsk/firm/141265769951860/photos/141265769951860/center/82.92336702346803,55.02407393405549/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/novosibirsk/center/82.92337,55.023837/zoom/16/routeTab/rsType/bus/to/82.92337,55.023837╎Большой Формат-Новосибирск, ООО, рекламно-производственная компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Большой Формат-Новосибирск, ООО, рекламно-производственная компания</a></div><script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":587,"height":587,"borderColor":"#a3a3a3","pos":{"lat":55.02407393405549,"lon":82.92336702346803,"zoom":16},"opt":{"city":"novosibirsk"},"org":[{"id":"141265769951860"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>');

-- --------------------------------------------------------

--
-- Структура таблицы `seo_settings`
--

CREATE TABLE IF NOT EXISTS `seo_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `name`, `description`, `value`) VALUES
(1, 'Заголовок страницы (html title)', 'По тексту заголовка пользователь получает дополнительную информацию,\n                что это за сайт, на котором он находится и как называется текущая страница', NULL),
(2, 'Описание страницы (html description)', 'Большинство поисковых серверов отображают содержимое поля description\n                при выводе результатов поиска. ', NULL),
(3, 'Ключевые слова страницы (html keywords)', 'Этот метатег был предназначен для описания ключевых слов,\n                встречающихся на странице', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `social_network`
--

CREATE TABLE IF NOT EXISTS `social_network` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `social_network`
--

INSERT INTO `social_network` (`id`, `name`, `link`) VALUES
(1, 'linkedin', NULL),
(2, 'facebook', 'http://www.facebook.com/grandformat'),
(3, 'twitter', 'http://twitter.com/grandformat_nsk');

-- --------------------------------------------------------

--
-- Структура таблицы `source_prints`
--

CREATE TABLE IF NOT EXISTS `source_prints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_print_id` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(19,4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `source_print_type_print_key` (`type_print_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Дамп данных таблицы `source_prints`
--

INSERT INTO `source_prints` (`id`, `type_print_id`, `name`, `price`) VALUES
(1, 1, 'Баннер литой 520 гр', 230.0000),
(2, 1, 'Баннер ламинированный 510 гр Starflex', 190.0000),
(3, 1, 'Баннер ламинированный 440 гр', 170.0000),
(4, 1, 'Баннер ламинированный 340 гр', 160.0000),
(5, 1, 'Баннер транслюцентный', 370.0000),
(6, 1, 'Баннер Blockout (печать с двух сторон)', 410.0000),
(7, 1, 'Бумага BlueBack (с синей подложкой)', 110.0000),
(8, 1, 'Бумага постерная', 210.0000),
(9, 1, 'Бумага синтетическая для скроллеров', 330.0000),
(10, 1, 'Самоклеящаяся пленка', 230.0000),
(11, 1, 'самоклеящаяся пленка транслюцентная', 380.0000),
(12, 1, 'Самоклеящаяся пленка перфорированная', 410.0000),
(13, 1, 'Сетка Starflex', 230.0000),
(14, 1, 'Полиэстр', 210.0000),
(15, 1, 'Пластик рулонный (для призматронов)', 450.0000),
(16, 2, 'баннер литой 520 гр (Европа)', 330.0000),
(17, 2, 'баннер ламинированный 440 гр', 270.0000),
(18, 2, 'баннер транслюцентный', 340.0000),
(19, 2, 'баннер Blockout (печать с двух сторон)', 720.0000),
(20, 2, 'бумага постерная', 210.0000),
(21, 2, 'самоклеящаяся пленка', 300.0000),
(22, 2, 'самоклеящаяся пленка транслюцентная', 475.0000),
(23, 2, 'полиэстр', 270.0000),
(24, 2, 'фотобумага', 420.0000),
(25, 2, 'холст', 560.0000);

-- --------------------------------------------------------

--
-- Структура таблицы `type_prints`
--

CREATE TABLE IF NOT EXISTS `type_prints` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `type_prints`
--

INSERT INTO `type_prints` (`id`, `name`) VALUES
(1, 'Широкоформатная печать 360-540 dpi'),
(2, 'Интерьерная печать 720 dpi');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `auth_key`, `password`) VALUES
(1, 'admin', '6E9Xnj20UQFfTpq3AzJsuAS6pM3jpWw_', '$2y$13$ZTb7/1AjpxoX0dFkyhjl9u4XlLjeGaGKBJ7/IKCcyY18rVfb/WFgG');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `source_prints`
--
ALTER TABLE `source_prints`
  ADD CONSTRAINT `source_print_type_print_key` FOREIGN KEY (`type_print_id`) REFERENCES `type_prints` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
