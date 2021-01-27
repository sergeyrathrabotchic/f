-- phpMyAdmin SQL Dump
-- version 
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 27 2021 г., 11:37
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
-- Структура таблицы `k`
--

CREATE TABLE `k` (
  `id` int(11) NOT NULL,
  `fio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `k`
--

INSERT INTO `k` (`id`, `fio`) VALUES
(1, 'ivan'),
(2, 'ivan'),
(3, 'ivan'),
(4, 'ivan'),
(5, 'ivan'),
(6, 'ivan'),
(7, 'Sergey'),
(8, 'Pavel'),
(9, 'Alex'),
(10, 'ivan');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `k`
--
ALTER TABLE `k`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `k`
--
ALTER TABLE `k`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
