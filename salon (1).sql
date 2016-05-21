-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 21 2016 г., 23:14
-- Версия сервера: 10.0.17-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `salon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(155) UNSIGNED NOT NULL,
  `url` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `url`, `des`) VALUES
(1, 'img/1.png', 'Ð’Ð¿ÐµÑ€Ð²Ñ‹Ðµ! Ð‘Ð°Ñ€Ð±ÐµÑ€ Ð±Ð°Ñ‚Ñ‚Ð» Ð² ÐÑÑ‚Ñ€Ð°Ñ…Ð°Ð½Ð¸!'),
(2, 'img/2.jpg', 'Ð¢Ð¸Ð¼ ÐœÐ¸Ð»Ð»ÐµÑ€ Ð¿Ð¾ÑÐµÑ‚Ð¸Ð» Ð½Ð°Ñˆ barbershop'),
(3, 'img/3.jpg', 'Barber wanted!'),
(4, 'img/4.jpg', 'Ð¡Ñ‚Ð¸Ð»ÑŒ, ÐºÐ¾Ñ‚Ð¾Ñ€Ñ‹Ð¹ Ð¼Ñ‹ Ð¾Ð´Ð¾Ð±Ñ€ÑÐµÐ¼');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `data`, `message`) VALUES
(9, 'skgdf', 'aidana.kalniyazova@is.sdu.edu.kz', '+77711813606', '19.05  16:00', 'dff'),
(10, 'Aidana', 'aidana.kalniyazova@is.sdu.edu.kz', '87711813606', '19.05  10:00', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users2`
--

CREATE TABLE `users2` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users2`
--

INSERT INTO `users2` (`id`, `name`, `login`, `pass`, `email`, `phone`) VALUES
(1, 'admin', 'admin', 'admin', 'aidanakalniyazova@gmail.com', '87711813606'),
(29, 'ÐÐ¹Ð´Ð°Ð½Ð° ÐšÐ°Ð»ÑŒÐ½Ð¸ÑÐ·Ð¾Ð²Ð°', 'aidanak', 'sdu', 'aidana.kalniyazova@is.sdu.edu.kz', '+77711813606'),
(30, 'Aidana', 'kalniyazova', 'sdu', 'aidana.kalniyazova@is.sdu.edu.kz', '87711813606');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(155) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
