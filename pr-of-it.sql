-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2020 г., 22:57
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pr-of-it`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category_news`
--

CREATE TABLE `category_news` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `category`) VALUES
(1, 'Три человека погибли при перестрелке в Ингушетии', 'Ранее СМИ со ссылкой на источники сообщили о произошедшей в Назрани перестрелке из-за бытового конфликта. По их данным, погибли четыре человека, в том числе сотрудник полиции.', 1),
(3, 'Сенатор предложил в 2021 году сократить новогодние каникулы', '«В целях компенсации количества вынужденных нерабочих дней для поддержания экономики предприятий и организаций законопроектом предлагается сократить в 2021 году период новогодних каникул и сделать рабочую неделю с 4 по 8 января, за исключением 7 января», — цитирует 16 июня документ «РИА Новости».', 1),
(4, 'В Госдуму внесли законопроект о регулировании удаленной работы', 'В Госдуму внесли законопроект о регулировании условий дистанционного режима работы. Документ появился в электронной базе данных нижней палаты парламента во вторник, 16 июня.', 3),
(5, 'В московском метро проведут эксперимент по снижению стоимости проезда', 'Власти Москвы планируют провести эксперимент по снижению стоимости проезда в метро. Об этом заместитель мэра по вопросам транспорта Максим Ликсутов рассказал в колонке на едином транспортном портале. По его словам, пилотный проект уже согласовали с Сергеем Собяниным.', 2),
(6, 'В российских школах установят камеры с функцией распознавания лиц', 'В российских школах установят камеры с функцией распознавания лиц Orwell 2k, которые должны помочь обеспечить безопасность детей. Об этом сообщают «Ведомости» во вторник, 16 июня. По информации издания, с помощью таких камер можно будет отследить, когда ученик пришел в школу, а когда — покинул ее.', 3),
(9, 'В КНДР подтвердили уничтожение межкорейского офиса связи', 'Об уничтожении здания ранее со ссылкой на министерство объединения Южной Кореи сообщило агентство Bloomberg. Глава ведомства Ким Ён Чул подчеркнул, что взрыв в Кэсоне был ожидаемым событием, но от дальнейших комментариев отказался, отметив, что в Сеуле изучают поступившую информацию.', 1),
(10, 'Лукашенко заявил, что Белоруссия может найти замену российскому газу', 'Президент Белоруссии Александр Лукашенко заявил, что Минск может найти замену российскому газу. Об этом сообщает агентство \"БелТА\". По его словам, в мире хватает нефти и газа с приемлемыми для республики цены.', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desk` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `desk`, `price`) VALUES
(1, 'Iphone 8', 'Описание айфона 8x', '300.00'),
(2, 'Samsung Galaxy', 'Описание Samesung Galaxy', '230.00'),
(3, 'Nokia 8300', 'Описание Nokia 8300', '100.00'),
(4, 'Iphone 11', 'Описание айфона 11', '1300.00'),
(5, 'Motorola c350', 'Описание айфона Motorola c350', '50.00');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Kolya', 'kolya@yandex.ru', 'qwerty'),
(2, 'Alex', 'alex@yandex.ru', 'zxcvb');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT для таблицы `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
