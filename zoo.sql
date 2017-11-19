-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 19 2017 г., 23:36
-- Версия сервера: 10.1.25-MariaDB
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zoo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `animal`
--

CREATE TABLE `animal` (
  `animal_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `animal`
--

INSERT INTO `animal` (`animal_id`, `name`) VALUES
(1, 'Лев'),
(2, 'Жираф'),
(3, 'Обезьяна');

-- --------------------------------------------------------

--
-- Структура таблицы `feeding`
--

CREATE TABLE `feeding` (
  `feeding_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `animal_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity_food` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feeding`
--

INSERT INTO `feeding` (`feeding_id`, `date`, `student_id`, `animal_id`, `food_id`, `quantity_food`) VALUES
(1, '2017-11-01', 1, 2, 1, 15),
(2, '2017-11-01', 1, 2, 1, 20),
(3, '2017-11-01', 1, 2, 1, 20),
(4, '2017-11-18', 1, 1, 3, 12),
(5, '2017-10-31', 1, 1, 3, 15),
(6, '2017-11-02', 1, 1, 3, 43),
(7, '2017-11-15', 2, 1, 3, 32),
(12, '2017-11-25', 1, 1, 3, 123),
(13, '2017-11-16', 1, 1, 1, 32);

-- --------------------------------------------------------

--
-- Структура таблицы `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `food`
--

INSERT INTO `food` (`food_id`, `name`) VALUES
(1, 'Трава'),
(2, 'Бананы'),
(3, 'Мясо');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`student_id`, `name`) VALUES
(1, 'Иван'),
(2, 'Петр');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`animal_id`);

--
-- Индексы таблицы `feeding`
--
ALTER TABLE `feeding`
  ADD PRIMARY KEY (`feeding_id`);

--
-- Индексы таблицы `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `animal`
--
ALTER TABLE `animal`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `feeding`
--
ALTER TABLE `feeding`
  MODIFY `feeding_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
