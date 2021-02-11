-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `yama_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `ユニーク値` int(12) NOT NULL,
  `書籍名` varchar(64) NOT NULL,
  `書籍URL` text NOT NULL,
  `書籍コメント` text NOT NULL,
  `登録日時` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`ユニーク値`, `書籍名`, `書籍URL`, `書籍コメント`, `登録日時`) VALUES
(5, 'ああ様', 'http:/nnn.jp', 'kkk', '2021-02-11 16:47:30'),
(9, '携帯', 'https:/lll.jp', 'かいせつ', '2021-01-09 01:28:35'),
(10, '自動車', 'https:/carr.jp', '機構', '2021-01-09 01:33:48'),
(11, '知的財産', 'pate@pat.com', '知的財産', '2021-01-21 17:09:08'),
(14, 'sachiああ様', 'http:/testmmm.jp', 'テストだよ', '2021-01-28 01:20:57'),
(15, 'やまtest', 'www//lll.cccm', '楽しい', '2021-01-27 22:58:04'),
(17, 'やま', 'http:/jjj.jp', 'kkk', '2021-01-27 23:57:42'),
(19, '徳川家本', 'www//uuu.kkk.com', '家系図', '2021-01-28 01:21:26'),
(20, 'ああやま', 'かかか', 'マイナー', '2021-02-11 13:19:22'),
(21, 'ああどうだろう', 'ｗww://popopoikeiek＠kkk.com', '内容', '2021-02-11 14:32:19'),
(30, 'ああできた', 'http:/nnn.jp', 'どうだ', '2021-02-11 17:16:29'),
(31, '', '', '', '2021-02-11 17:18:28');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`ユニーク値`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `ユニーク値` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
