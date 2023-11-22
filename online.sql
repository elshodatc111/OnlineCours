-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 22 2023 г., 11:53
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `online`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(25) NOT NULL,
  `CoursName` varchar(35) NOT NULL,
  `Video` varchar(150) NOT NULL,
  `About` text NOT NULL,
  `Image` varchar(150) NOT NULL,
  `Summa` varchar(70) NOT NULL,
  `Mavzular` varchar(15) NOT NULL,
  `DarsVaqt` varchar(15) NOT NULL,
  `Til` varchar(15) NOT NULL,
  `Daraja` varchar(15) NOT NULL,
  `Techer` varchar(50) NOT NULL,
  `AzolikVaqt` varchar(40) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `UserID` varchar(11) NOT NULL,
  `FIO` varchar(45) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `Addres` varchar(75) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Dates` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `UserID`, `FIO`, `Phone`, `Addres`, `Email`, `Dates`) VALUES
(1, '1700590270', 'Elshod', '998908830450', '', '', '2023-11-21 18:11:10'),
(2, '1700590294', 'Elshod', '998908830450', '', '', '2023-11-21 18:11:34'),
(3, '1700590533', 'Elshod', '998908830450', '', '', '2023-11-21 18:15:33'),
(4, '1700590655', 'Elshod', '998908830450', '', '', '2023-11-21 18:17:35');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
