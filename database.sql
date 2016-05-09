-- Adminer 4.2.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` text COLLATE utf8mb4_bin NOT NULL,
  `album` text COLLATE utf8mb4_bin NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `album` (`id`, `artist`, `album`, `year`) VALUES
(6,	'Green Day',	'Dookie',	1994),
(7,	'Glenn Miller',	'In The Mood',	1939),
(18,	'äöüß',	'äöüß',	1234);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(9,	'test',	'$2y$10$xqskiG2nLDUbncF8p1.VKOO8AvPqWdipFJnb5n5lrltchFGADvYGu');

-- 2016-05-09 08:33:41
