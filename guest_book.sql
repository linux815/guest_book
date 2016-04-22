-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Апр 21 2016 г., 02:11
-- Версия сервера: 5.6.28-log
-- Версия PHP: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guest_book`
--

-- --------------------------------------------------------

--
-- Структура таблицы `entry`
--

CREATE TABLE `entry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sid` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `entry`
--

INSERT INTO `entry` (`id`, `name`, `email`, `text`, `sid`) VALUES
(1, 'Ivan', 'ivan.bazhenov@gmail.com', 'Helo world!!!', ''),
(2, 'Test', 'test@test.ru', 'Hello test', ''),
(3, 'hhhhh', 'hello@hello.ru', 'jhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjg', ''),
(4, 'df', 'hello@hello.ru', 'jhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjgjhgjkgkjgkjg', ''),
(5, 'jhgjhgjhg', 'hello@hello.ru', 'jgkjgkgkjgkjgkjhgkjhgkjhgkjhgjkg', ''),
(7, 'Nikole', 'l@l.ru', 'Mister and Missis Smidth', ''),
(11, 'hjkhkjhkh', 'jhlkjhkjh@list.ru', '436543653653653653654365435643453643', ''),
(14, 'hjkhkjhkh', 'hello@hello.ru', 'handleRequest', 'ikg37aT7ls'),
(15, 'kkjkjfq', 'kjkj@mail.ru', 'hgjgjhgkjgkjgjhg', '3gypPQhNEO'),
(16, 'kkjkjfq', 'kjkj@mail.ru', '765685858658765865875', 'hKck9jM1MY'),
(17, 'kkjkjfq', 'kjkj@mail.ru', 'jhkjhlkjhlkjhlkhljkh', 'JGowtVCgPN'),
(18, 'kkjkjfq', 'kjkj@mail.ru', 'gfjhfjhfjhfjhfjfjgfjhfjhf', 'VHcqxj7BLx'),
(19, 'kkjkjfq', 'kjkj@mail.ru', 'jkhlkhljkhljkhljkhl', 'BsoU8e0qCR'),
(23, 'First', 'kjkj@mail.ru', 'hELLO MY FRIEND', 'a9jOlVSzBe'),
(25, 'Gomer', 'kjkj@mail.ru', 'Hello! My name is Gomer Simpson!!!', 'a9jOlVSzBe');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `entry`
--
ALTER TABLE `entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
