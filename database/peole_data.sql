-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-07-15 05:00:05
-- 伺服器版本： 10.4.19-MariaDB
-- PHP 版本： 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `makecase`
--

-- --------------------------------------------------------

--
-- 資料表結構 `peole_data`
--

CREATE TABLE `peole_data` (
  `name` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `phone_number` text NOT NULL,
  `case_title` text NOT NULL,
  `discritble_case` text NOT NULL,
  `case_kind` text NOT NULL,
  `people_need` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-01-01 00:00:00',
  `case_code` int(10) NOT NULL,
  `joiner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `peole_data`
--

INSERT INTO `peole_data` (`name`, `email`, `phone_number`, `case_title`, `discritble_case`, `case_kind`, `people_need`, `date`, `case_code`, `joiner`) VALUES
('黃瑞伯', 'asdfsadfa@gmail.com', '094546545', '拯救學長', '本次黑克松，分到一個學長一個，一個同學，\r\n學長==企劃(幽靈)\r\n同學==css店神', '_food', '下次分給我一個人', '2021-07-15 04:27:42', 62315104, ''),
('劉政廷', 'a142758369@gmail.com', '0978705477', '在黃海中廷下來，只為給你留下officer企劃媒合平台', '將所以sdgs有興趣的人聚集在這', '_energy', '需要會寫程式的人\r\n\r\n需要錢', '2021-07-15 04:33:31', 63800206, ''),
('qrtqert', 'a142758369@gmail.com', '0978705477', 'asdfa', 'afgdfg', '', 'adfgdfg', '2021-07-15 04:41:48', 61373653, ''),
('田海若', 'a142758369@gmail.com', '0978705477', '拯救學長', '下次黑克松不要讓我破隊到他', '', '主辦單位協助', '2021-07-15 04:49:49', 69307038, ''),
('田海若', 'a142758369@gmail.com', '0978705477', '拯救學長', '下次黑克松在現場舉辦，這樣學長就不會一直跟幽靈一樣，搞消失', '', '主辦單位系統配對支援\r\n人脈\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n1', '2021-07-15 04:55:02', 61475674, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
