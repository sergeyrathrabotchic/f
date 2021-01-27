-- phpMyAdmin SQL Dump
-- version 
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 27 2021 г., 11:41
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
-- Структура таблицы `rz`
--

CREATE TABLE `rz` (
  `id` int(11) NOT NULL,
  `rID` int(11) DEFAULT NULL,
  `kID` int(11) DEFAULT NULL,
  `datev` date DEFAULT NULL,
  `datep` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rz`
--

INSERT INTO `rz` (`id`, `rID`, `kID`, `datev`, `datep`) VALUES
(1, 1, 1, '2020-01-20', '2022-01-20'),
(2, 2, 2, '2020-01-20', '2020-01-20'),
(3, 3, 3, '2020-01-20', '2025-01-20'),
(4, 4, 4, '2020-03-20', '2022-03-20'),
(5, 5, 5, '2020-01-20', '2020-01-20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rz`
--
ALTER TABLE `rz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rID` (`rID`),
  ADD KEY `kID` (`kID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rz`
--
ALTER TABLE `rz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `rz`
--
ALTER TABLE `rz`
  ADD CONSTRAINT `rz_ibfk_1` FOREIGN KEY (`rID`) REFERENCES `r` (`id`),
  ADD CONSTRAINT `rz_ibfk_2` FOREIGN KEY (`kID`) REFERENCES `k` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
