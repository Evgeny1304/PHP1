-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Май 30 2019 г., 22:38
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gbphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fio` varchar(50) DEFAULT 'anonim',
  `login` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Дата первой регистрации',
  `count` int(11) NOT NULL DEFAULT 0 COMMENT 'Количество просмотров'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `login`, `password`, `date`, `count`) VALUES
(2, 'Alex Pro', 'Alex', 'd41a2e876cd74bb324b0e15380beae79', '2019-05-14 17:41:15', 0),
(4, NULL, 'admin', 'f8a8075d7c724f18ddf01867a86366b1', '2019-05-17 17:37:40', 0),
(19, 'anonim', '123', '123', '2019-05-21 17:41:20', 0),
(21, 'Evgeny H', 'jenek', 'e0a5e52aa2bc7eb6bead3f3d4060d821', '2019-05-26 11:08:29', 0),
(22, 'John Black', 'john123', '33e701c033bf73fa94156289b733a385', '2019-05-26 11:11:19', 0),
(23, 'Jake Hobs', 'jake53', 'a6c32042af58202079495c85cf02a665', '2019-05-30 18:41:54', 0),
(24, 'Hans Anderson', 'hans', 'd41a2e876cd74bb324b0e15380beae79', '2019-05-30 18:46:40', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
