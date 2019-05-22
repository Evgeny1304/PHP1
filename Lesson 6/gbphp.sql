-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 17 2019 г., 22:30
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Дата первой регистрации',
  `count` int(11) NOT NULL DEFAULT '0' COMMENT 'Количество просмотров'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `login`, `password`, `date`, `count`) VALUES
(1, 'КЕнТ ро Пист', 'admin1', 'admin21', '2019-05-14 17:39:12', 2),
(2, 'Alex Pro', 'Alex', 'admin', '2019-05-14 17:41:15', 0),
(3, 'Admin', 'admin1', 'admin1', '2019-05-15 17:43:09', 0),
(4, NULL, 'admin', '123', '2019-05-17 17:37:40', 0),
(5, NULL, 'qqwe', '123', '2019-05-17 17:39:38', 0),
(6, 'anonim', 'qqwe', '123', '2019-05-17 17:40:19', 0),
(7, 'anonim', 'qqwe', '123', '2019-05-17 17:40:36', 0),
(8, 'anonim', 'qqwe', '123', '2019-05-17 17:40:38', 0),
(9, 'anonim', 'qqwe', '123', '2019-05-17 17:40:39', 0),
(10, 'anonim', 'qqwe', '123', '2019-05-17 17:40:39', 0),
(11, 'anonim', 'asd', '123', '2019-05-17 17:43:28', 0),
(12, 'anonim', 'asd', '123', '2019-05-17 17:44:02', 0),
(13, 'anonim', '123', '123', '2019-05-17 17:44:11', 0),
(14, 'anonim', '111111', '2222222', '2019-05-17 17:44:25', 0),
(15, 'anonim', '124', '124', '2019-05-17 17:46:06', 0),
(16, 'anonim', '124', '124', '2019-05-17 17:46:28', 0),
(17, 'anonim', '124', '111', '2019-05-17 17:46:54', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
