-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 24 2017 г., 10:31
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `money_mvc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `balans`
--

CREATE TABLE IF NOT EXISTS `balans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `balans` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `balans`
--

INSERT INTO `balans` (`id`, `user_id`, `balans`) VALUES
(1, 1, 32000);

-- --------------------------------------------------------

--
-- Структура таблицы `operations`
--

CREATE TABLE IF NOT EXISTS `operations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `summ` text NOT NULL,
  `current_balans` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `operations`
--

INSERT INTO `operations` (`id`, `user_id`, `date`, `summ`, `current_balans`) VALUES
(1, 1, '2017-10-24 10:14:49', '1000', '37000'),
(2, 1, '2017-10-24 10:17:35', '2000', '35000'),
(3, 1, '2017-10-24 10:29:29', '1000', '34000'),
(4, 1, '2017-10-24 10:29:35', '2000', '32000');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fio`, `login`, `password`) VALUES
(1, 'Петров Петр Петрович', 'petrov', '827ccb0eea8a706c4c34a16891f84e7b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
