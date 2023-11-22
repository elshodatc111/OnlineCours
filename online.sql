-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 22 2023 г., 14:49
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
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(25) NOT NULL,
  `UserID` varchar(15) NOT NULL,
  `FIO` varchar(150) NOT NULL,
  `Phone` varchar(25) NOT NULL,
  `Vaqt` varchar(25) NOT NULL,
  `Text` varchar(180) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `CoursID`, `UserID`, `FIO`, `Phone`, `Vaqt`, `Text`, `Data`) VALUES
(1, '7000008', '1700590270', 'Elshod', '998908830450', '22-Nov 2023', 'Assalomu Alaykum', '2023-11-22 13:19:49'),
(2, '7000009', '170059027', 'Elshod', '998908830450', '22-Nov 2023', 'Assalomu alaykum kurs juda yaxshi ekan', '2023-11-22 13:34:50'),
(3, '7000009', '1700590270', 'Elshod', '998908830450', '22-Nov 2023', 'Juda yaxshu kurs ekan', '2023-11-22 13:35:23');

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

--
-- Дамп данных таблицы `cours`
--

INSERT INTO `cours` (`id`, `CoursID`, `CoursName`, `Video`, `About`, `Image`, `Summa`, `Mavzular`, `DarsVaqt`, `Til`, `Daraja`, `Techer`, `AzolikVaqt`, `Data`) VALUES
(1, '7000008', 'Birinchi online kursning nomi', 'video/video.mp4', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem aperiam eaque quidem magnam eos accusamus aliquam ut voluptates, eum maiores ratione soluta esse sapiente quisquam. Sit quibusdam magni doloremque laborum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem aperiam eaque quidem magnam eos accusamus aliquam ut voluptates, eum maiores ratione soluta esse sapiente quisquam. Sit quibusdam magni doloremque laborum.', '01.jpg', '50000', '15', '17:15:23', 'O\'zbek', 'Boshlang\'ich', 'Abdullayev Abdulla', '30 kun', '2023-11-22 12:21:20'),
(2, '7000009', 'Birinchi online kursning nomi', 'video/video.mp4', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem aperiam eaque quidem magnam eos accusamus aliquam ut voluptates, eum maiores ratione soluta esse sapiente quisquam. Sit quibusdam magni doloremque laborum. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem aperiam eaque quidem magnam eos accusamus aliquam ut voluptates, eum maiores ratione soluta esse sapiente quisquam. Sit quibusdam magni doloremque laborum.', '01.jpg', '50000', '15', '17:15:23', 'O\'zbek', 'Boshlang\'ich', 'Abdullayev Abdulla', '30 kun', '2023-11-22 12:22:06');

-- --------------------------------------------------------

--
-- Структура таблицы `cours_mavzu`
--

CREATE TABLE `cours_mavzu` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(25) NOT NULL,
  `MavzuID` varchar(25) NOT NULL,
  `Mavzu` varchar(35) NOT NULL,
  `TR` int(11) NOT NULL,
  `Video` varchar(180) NOT NULL,
  `About` text NOT NULL,
  `TimeLine` varchar(25) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cours_mavzu`
--

INSERT INTO `cours_mavzu` (`id`, `CoursID`, `MavzuID`, `Mavzu`, `TR`, `Video`, `About`, `TimeLine`, `Data`) VALUES
(1, '7000008', '0000001', '1-mavzular', 1, 'sdasdas', 'sdvsdvsdvs', '15:25', '2023-11-22 12:54:44'),
(2, '7000008', '0000002', '5-mavzular', 5, 'sdasdass', 'sdvsdvsdvs', '10:25', '2023-11-22 12:56:17'),
(3, '7000008', '0000003', '2-mavzular', 2, 'sdasdadasdass', 'asdvsdvsdvs', '15:20', '2023-11-22 12:56:17'),
(4, '7000008', '0000004', '3-mavzular', 3, 'sdasdaaaaas', 'sdvssssdvsdvs', '5:25', '2023-11-22 12:56:17'),
(5, '7000008', '0000005', '4-mavzular', 4, 'sdscasasdas', 'sdvsdvsssssdvs', '17:25', '2023-11-22 12:56:17');

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
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cours_mavzu`
--
ALTER TABLE `cours_mavzu`
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
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `cours_mavzu`
--
ALTER TABLE `cours_mavzu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
