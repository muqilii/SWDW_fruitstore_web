-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost:3306
-- 生成日期： 2023-05-15 12:11:51
-- 服务器版本： 8.0.33-0ubuntu0.22.04.1
-- PHP 版本： 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `jpair42`
--

-- --------------------------------------------------------

--
-- 表的结构 `inventory`
--

CREATE TABLE `inventory` (
  `pid` int NOT NULL,
  `fruit` varchar(25) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `cost` varchar(25) NOT NULL,
  `price` varchar(25) NOT NULL,
  `cash` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- 转储表的索引
--

--
-- 表的索引 `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`pid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `inventory`
--
ALTER TABLE `inventory`
  MODIFY `pid` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
