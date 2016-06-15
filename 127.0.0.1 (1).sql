-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 15 2016 г., 00:08
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `pract`
--
CREATE DATABASE `pract` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pract`;

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `uID` int(10) NOT NULL AUTO_INCREMENT,
  `uLogin` varchar(40) NOT NULL,
  `uName` varchar(50) DEFAULT NULL,
  `theme` varchar(200) NOT NULL,
  `bdate` varchar(48) NOT NULL,
  `bfile` varchar(128) NOT NULL,
  `bimg` varchar(128) NOT NULL,
  PRIMARY KEY (`uID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`uID`, `uLogin`, `uName`, `theme`, `bdate`, `bfile`, `bimg`) VALUES
(26, 'qwe1', 'qwer', 'PHP и Upload (Загрузка файлов на сервер)', '2016-06-13', 'f6a7f309ae211945a6018bb969bcf4bb', 'voljin-1920x1200.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `com`
--

CREATE TABLE IF NOT EXISTS `com` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_com` int(4) NOT NULL,
  `name` varchar(48) NOT NULL,
  `comm` varchar(256) NOT NULL,
  `dates` varchar(15) NOT NULL,
  `login` varchar(48) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uID` int(10) NOT NULL AUTO_INCREMENT,
  `uLogin` varchar(40) NOT NULL,
  `uPass` varchar(32) NOT NULL,
  `uName` varchar(50) DEFAULT NULL,
  `uMail` varchar(60) NOT NULL,
  PRIMARY KEY (`uID`),
  UNIQUE KEY `ULOGIN` (`uLogin`),
  UNIQUE KEY `UMAIL` (`uMail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`uID`, `uLogin`, `uPass`, `uName`, `uMail`) VALUES
(1, 'qwe1', '123', 'qwer', 'qwe@mail.ru'),
(2, 'qwe2', '123', 'dsss', 'asds@mail.ru'),
(3, 'qwe3', '123', 'dsfffff ', 'asda@fasdfjds');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
