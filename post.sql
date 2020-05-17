-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-05-17 13:36:46
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `web work`
--

-- --------------------------------------------------------

--
-- 資料表結構 `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(5) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `post`
--

INSERT INTO `post` (`id`, `user_id`, `title`, `content`, `date`) VALUES
(4, 20, 'test111541654165', '<h1>sdfsdfsadfsadfsdsdfsadfs</h1>\r\n\r\n<h2>sdfsdfsdsdfsdf</h2>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>ad</td>\r\n			<td>asd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ffasd</td>\r\n			<td>asd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>asd</td>\r\n			<td>fsdafs</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2><br />\r\n&nbsp;</h2>\r\n', '2020-05-16 16:00:00'),
(7, 19, 'test', '<h1>sdfsdf</h1>\r\n\r\n<h2>sdfsdfsd</h2>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>ad</td>\r\n			<td>asd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ffasd</td>\r\n			<td>asd</td>\r\n		</tr>\r\n		<tr>\r\n			<td>asd</td>\r\n			<td>fsdafs</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2><br />\r\n&nbsp;</h2>\r\n', '2020-05-13 16:00:00');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
