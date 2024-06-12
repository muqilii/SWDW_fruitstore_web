
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `fruitUser` (
  `pid` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

INSERT INTO `fruitUser` (`pid`, `username`,`password`,`usertype`) VALUES
(NULL, 'user1', '111','seller'),
(NULL, 'user2', '222','buyer'),
(NULL, 'user3', '333','seller');