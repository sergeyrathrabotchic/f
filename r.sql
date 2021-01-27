-- phpMyAdmin SQL Dump
-- version 
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 27 2021 г., 11:38
-- Версия сервера: 5.7.32-35-log
-- Версия PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `host1825783`
--

-- --------------------------------------------------------

--
-- Структура таблицы `r`
--

CREATE TABLE `r` (
  `id` int(11) NOT NULL,
  `region` varchar(100) DEFAULT NULL,
  `vrm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `r`
--

INSERT INTO `r` (`id`, `region`, `vrm`) VALUES
(1, 'Санкт-Петербург', 1),
(2, 'Уфа', 2),
(3, 'Нижний Новгород', 3),
(4, 'Владимир', 4),
(5, 'Кострома', 5),
(6, 'Екатеринбург', 6),
(7, 'Ковров', 7),
(8, 'Воронеж', 8),
(9, 'Самара', 9),
(10, 'Астрахань', 10);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `r`
--
ALTER TABLE `r`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `r`
--
ALTER TABLE `r`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
