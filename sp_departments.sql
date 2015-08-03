# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.25)
# Database: sela-test1
# Generation Time: 2015-08-03 15:17:36 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table sp_departments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sp_departments`;

CREATE TABLE `sp_departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_department_id` int(11) NOT NULL,
  `origin_id` varchar(32) DEFAULT NULL COMMENT 'Идентификатор отдела в вашей системе.',
  `key` varchar(32) DEFAULT NULL COMMENT 'Секретный ключ (он же store_department_key)',
  `name` varchar(32) DEFAULT NULL COMMENT 'Наименование отдела',
  `last_checked` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `store_department_id` (`store_department_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
