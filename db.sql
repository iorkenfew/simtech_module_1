-- --------------------------------------------------------
-- Хост:                         95.104.192.212
-- Версия сервера:               5.7.26-0ubuntu0.18.10.1 - (Ubuntu)
-- Операционная система:         Linux
-- HeidiSQL Версия:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных iorken_few
CREATE DATABASE IF NOT EXISTS `iorken_few` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `iorken_few`;

-- Дамп структуры для таблица iorken_few.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `surname` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `gender` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `post` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `textarea` text CHARACTER SET utf8,
  `confirmation` char(10) CHARACTER SET utf8 DEFAULT NULL,
  `ph_name` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `ph_path` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `tmp_path` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=latin1;

-- Экспортируемые данные не выделены.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
