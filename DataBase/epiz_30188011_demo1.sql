-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: sql109.epizy.com
-- Время создания: Ноя 07 2021 г., 09:57
-- Версия сервера: 5.7.34-37
-- Версия PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `epiz_30188011_demo1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `demo_table`
--

CREATE TABLE `demo_table` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Bro_Sis` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `demo_table`
--

INSERT INTO `demo_table` (`id`, `name`, `email`, `time`, `Bro_Sis`) VALUES
(1, NULL, 'івапіва@віаіва', '2021-11-04 16:09:42', NULL),
(2, NULL, 'івапіва@віаіваxcv', '2021-11-04 16:09:42', NULL),
(3, NULL, 'івапіва@віаіваxsdffcv', '2021-11-04 16:09:42', NULL),
(13, 'Пол', 'darksouls171@gmail.com', '2021-11-06 16:32:21', 'Bro'),
(16, 'Пол', 'darksouls171@gmail.com', '2021-11-06 16:32:21', 'Sis'),
(17, 'Пол', 'darksouls171@gmail.com', '2021-11-06 16:32:21', 'Bro'),
(18, NULL, NULL, '2021-11-06 19:32:24', NULL),
(19, NULL, NULL, '2021-11-06 19:32:24', 'Sis'),
(20, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-06 19:33:20', 'Bro'),
(21, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-06 19:33:30', 'Sis'),
(22, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-06 19:39:26', 'Bro'),
(23, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-06 16:10:37', 'Sis'),
(24, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-06 16:10:40', 'Bro'),
(25, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-06 16:11:00', 'Bro'),
(26, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-06 16:19:58', 'Bro'),
(27, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-06 16:20:00', 'Sis'),
(28, 'ÐŸÐ¾Ð»', 'darksouls171@gmail.com', '2021-11-06 23:48:03', 'Bro'),
(29, 'ÐŸÐ¾Ð»', 'darksouls171@gmail.com', '2021-11-06 23:48:46', 'Sis'),
(30, 'ÐŸÐ¾Ð»', 'darksouls171@gmail.com', '2021-11-06 23:49:37', 'Bro'),
(31, 'ÐÑ€Ñ‚ÐµÐ¼ Ð“ÑƒÐ´Ð¸Ð¼ÐµÐ½ÐºÐ¾', '', '2021-11-07 16:03:36', 'Bro'),
(32, 'ÐÑ€Ñ‚ÐµÐ¼ Ð“ÑƒÐ´Ð¸Ð¼ÐµÐ½ÐºÐ¾', '', '2021-11-07 16:03:39', 'Sis'),
(33, 'ÐÑ€Ñ‚ÐµÐ¼ Ð“ÑƒÐ´Ð¸Ð¼ÐµÐ½ÐºÐ¾', '', '2021-11-07 16:03:40', 'Bro'),
(34, 'ÐÑ€Ñ‚ÐµÐ¼ Ð“ÑƒÐ´Ð¸Ð¼ÐµÐ½ÐºÐ¾', '', '2021-11-07 16:03:42', 'Sis'),
(35, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-07 16:52:32', 'Sis'),
(36, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-07 16:52:35', 'Sis'),
(37, 'Artem', 'artem.gudymenko@gmail.com', '2021-11-07 16:52:36', 'Bro'),
(38, 'ÐÑ€Ñ‚ÐµÐ¼ Ð“ÑƒÐ´Ð¸Ð¼ÐµÐ½ÐºÐ¾', '', '2021-11-07 16:53:34', 'Sis'),
(39, 'ÐŸÐ¾Ð»', 'darksouls171@gmail.com', '2021-11-07 16:58:36', 'Bro'),
(40, 'ÐŸÐ¾Ð»', 'darksouls171@gmail.com', '2021-11-07 16:58:38', 'Sis'),
(41, 'ÐŸÐ¾Ð»', 'darksouls171@gmail.com', '2021-11-07 17:00:00', 'Bro'),
(42, 'ÐŸÐ¾Ð»', 'darksouls171@gmail.com', '2021-11-07 17:00:02', 'Sis'),
(43, 'ÐÑ€Ñ‚ÐµÐ¼ Ð“ÑƒÐ´Ð¸Ð¼ÐµÐ½ÐºÐ¾', '', '2021-11-07 17:00:29', 'Sis'),
(44, 'ÐÑ€Ñ‚ÐµÐ¼ Ð“ÑƒÐ´Ð¸Ð¼ÐµÐ½ÐºÐ¾', '', '2021-11-07 17:00:32', 'Bro');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `demo_table`
--
ALTER TABLE `demo_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `demo_table`
--
ALTER TABLE `demo_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
