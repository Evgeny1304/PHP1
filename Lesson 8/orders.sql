-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Май 30 2019 г., 22:37
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
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `user_id` int(30) DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `comment` varchar(300) DEFAULT NULL,
  `order_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `date`, `comment`, `order_items`) VALUES
(1, 21, '2019-05-28 19:37:24', 'Новый заказ', '{\"2\":{\"id\":\"2\",\"url\":\"img/bugatti-big.jpg\",\"name\":\"Bugatti\",\"price\":\"15000000\",\"quantity\":1},\"5\":{\"id\":\"5\",\"url\":\"img/porsche-big.jpg\",\"name\":\"Porsche\",\"price\":\"7000000\",\"quantity\":1}}'),
(2, 22, '2019-05-28 19:40:50', 'Сделан заказ', '{\"1\":{\"id\":\"1\",\"url\":\"img/aston-martin.jpg\",\"name\":\"Aston Martin\",\"price\":\"7000000\",\"quantity\":1},\"4\":{\"id\":\"4\",\"url\":\"img/lambo-big.jpg\",\"name\":\"Lamborghini\",\"price\":\"8000000\",\"quantity\":1},\"5\":{\"id\":\"5\",\"url\":\"img/porsche-big.jpg\",\"name\":\"Porsche\",\"price\":\"7000000\",\"quantity\":1},\"3\":{\"id\":\"3\",\"url\":\"img/ferrari-big.jpg\",\"name\":\"Ferrari\",\"price\":\"8000000\",\"quantity\":1}}'),
(3, 21, '2019-05-30 18:52:31', 'Сделан новый заказ', '{\"2\":{\"id\":\"2\",\"url\":\"img/bugatti-big.jpg\",\"name\":\"Bugatti\",\"price\":\"15000000\",\"quantity\":3},\"6\":{\"id\":\"6\",\"url\":\"img/mclaren-big.jpg\",\"name\":\"Mclaren\",\"price\":\"10000000\",\"quantity\":2}}'),
(4, 24, '2019-05-30 18:53:27', 'Мой заказ', '{\"1\":{\"id\":\"1\",\"url\":\"img/aston-martin.jpg\",\"name\":\"Aston Martin\",\"price\":\"7000000\",\"quantity\":1},\"4\":{\"id\":\"4\",\"url\":\"img/lambo-big.jpg\",\"name\":\"Lamborghini\",\"price\":\"8000000\",\"quantity\":1},\"6\":{\"id\":\"6\",\"url\":\"img/mclaren-big.jpg\",\"name\":\"Mclaren\",\"price\":\"10000000\",\"quantity\":1}}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
