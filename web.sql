-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2018 at 08:12 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_cos` int(10) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_cos`, `comment`, `email`) VALUES
(1, 'งุ้ยๆๆ', 'john@example.com'),
(2, 'eiei say ', 'thanita27@hotmail.co.th'),
(3, 'sefsafs', 'thanita27@hotmail.co.th'),
(4, 'ได้แล้วเว้ยยยยยยยยยยยยยยยยยยยย', 'grdsg@sefs.com'),
(5, 'รักนะ', 'std56@email.com'),
(6, 'เสร็จสักที', 'darlingka@hotmail.co.th'),
(7, 'เทสๆ ฮัลโหลเทส', 'luckyka@hotmail.co.th'),
(8, 'ทดสอบของ 30', 'chawanvit@email.com'),
(9, 'เสร็จจริงๆหละนะ', 'adk@email.com'),
(10, 'อิอิ', 'thanita27@hotmail.co.th'),
(11, 'dDa', 'grdsg@sefs.com');

-- --------------------------------------------------------

--
-- Table structure for table `graph1`
--

CREATE TABLE `graph1` (
  `id` int(13) NOT NULL,
  `types` char(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `count` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graph1`
--

INSERT INTO `graph1` (`id`, `types`, `result`, `count`) VALUES
(1, 'title', 'ปกติ', 80),
(2, 'title', 'ไม่ปกติ', 22),
(3, 'male', 'ปกติ', 58),
(4, 'male', 'ไม่ปกติ', 17),
(5, 'female', 'ปกติ', 24),
(6, 'female', 'ไม่ปกติ', 11);

-- --------------------------------------------------------

--
-- Table structure for table `graph2`
--

CREATE TABLE `graph2` (
  `id` int(13) NOT NULL,
  `types` char(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `count` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graph2`
--

INSERT INTO `graph2` (`id`, `types`, `result`, `count`) VALUES
(1, 'title', 'ปกติ', 13),
(2, 'title', 'ไม่ปกติ', 3),
(3, 'male', 'ปกติ', 20),
(4, 'male', 'ไม่ปกติ', 8),
(5, 'female', 'ปกติ', 28),
(6, 'female', 'ไม่ปกติ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `graph3`
--

CREATE TABLE `graph3` (
  `id` int(13) NOT NULL,
  `types` char(30) NOT NULL,
  `result` varchar(30) NOT NULL,
  `count` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graph3`
--

INSERT INTO `graph3` (`id`, `types`, `result`, `count`) VALUES
(1, 'title', 'ปกติ', 34),
(2, 'title', 'ไม่ปกติ', 11),
(3, 'male', 'ปกติ', 15),
(4, 'male', 'ไม่ปกติ', 6),
(5, 'female', 'ปกติ', 18),
(6, 'female', 'ไม่ปกติ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `position` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `link` text NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`position`, `address`, `tel`, `link`, `name`) VALUES
('89,277,266,305', 'ที่ตั้ง 23 หมู่ 8 ถนนพุทธมณฑลสาย 4 เขตทวีวัฒนา กรุงเทพมหานคร 10170', '02 441 6100', '', 'สถาบันกัลยาณราชนครินทร์'),
('406,503,638,529', 'ที่ตั้ง112 ถนนสมเด็จเจ้าพระยา แขวงคลองสาน เขตคลองสาน กรุงเทพฯ 10600', '02 4422500', '', 'สถาบันจิตเวชศาสตร์สมเด็จเจ้าพระยา'),
('45,74,255,103', 'ที่ตั้ง 196 หมู่ 10 ถนนเชียงใหม่-พร้าว ต.ดอนแก้ว อ.แม่ริม จ.เชียงใหม่ 50180', '053 908 300', '', 'สถาบันพัฒนาการเด็กราชนครินทร์'),
('407,456,526,479', 'ที่ตั้ง 4737 แขวงดินแดง ถนนดินแดง เขตดินแดง กรุงเทพมหานคร 10400', '064 054 1930', '', 'สถาบันราชานุกูล'),
('630,162,854,211', 'ที่ตั้ง 282 หมู่ 15 ตำบลพระลับ อำเภอเมือง จังหวัดขอนแก่น 40000', '043 910770', '', 'สถาบันสุขภาพจิตเด็กและวัยรุ่นภาคตะวันออกเฉียงเหนือ'),
('25,418,264,442', 'ที่ตั้ง เลขที่ 298 ถ.ธราธิบดี ต.ท่าข้าม อ.พุนพิน จ.สุราษฎร์ธานี 84130', '077 312179', '', 'สถาบันสุขภาพจิตเด็กและวัยรุ่นภาคใต้'),
('407,480,697,502', 'ที่ตั้ง 75/1 ถนนพระราม 6 แขวงพญาไท เขตราชเทวี กรุงเทพมหานคร 10400', '02 442 2500', '', 'สถาบันสุขภาพจิตเด็กและวัยรุ่นราชนครินทร์'),
('629,137,877,161', 'ที่ตั้ง 169 ถนนชาตะผดุง ต.ในเมือง อ.เมือง จ.ขอนแก่น 40000', '043 209 999', '', 'โรงพยาบาลจิตเวชขอนแก่นราชนครินทร์'),
('607,95,857,124', 'ที่ตั้ง 210 หมู่ 11 ถนนนครพนม-ท่าอุเทน ต.อาจสามารถ อ.เมือง จ.นครพนม 48000', '042 539000', '', 'โรงพยาบาลจิตเวชนครพนมราชนครินทร์'),
('514,288,766,318', 'ที่ตั้ง 86, ถนนช้างเผือก, ตำบลในเมือง อำเภอเมือง จ.นครราชสีมา, 30000', '043 233 999', '', 'โรงพยาบาลจิตเวชนครราชสีมาราชนครินทร์'),
('9,152,263,180', 'ที่ตั้ง 2 หมู่ 4 ต.ท่าน้ำอ้อย อ.พยุหะคีรี จ.นครสวรรค์ 60130', '056 219 444', '', 'โรงพยาบาลจิตเวชนครสวรรค์ราชนครินทร์'),
('29,531,258,566', 'ที่ตั้ง 472 ถนนไทรบุรี ต.บ่อยาง อ.เมือง จ.สงขลา 90000', '074 317 400', '', 'โรงพยาบาลจิตเวชสงขลาราชนครินทร์'),
('489,341,734,376', 'ที่ตั้ง 176 หมู่ 3 ต.หนองน้ำใส อ.วัฒนานคร จ.สระแก้ว 27160', '037 262 998', '', 'โรงพยาบาลจิตเวชสระแก้วราชนครินทร์'),
('482,49,690,80', 'ที่ตั้ง 440 หมู่ 4 ต.นาอาน อ.เมือง จ.เลย 42000', '042 814 895', '', 'โรงพยาบาลจิตเวชเลยราชนครินทร์'),
('610,232,781,263', 'ที่ตั้ง 212 ถนนแจ้งสนิท ต.ในเมือง อ.เมือง จ.อุบลราชธานี 34000', '045 352555', '', 'โรงพยาบาลพระศรีมหาโพธิ์'),
('447,398,667,430', 'ที่ตั้ง 61 ซอยเทศบาล19 ต.ปากน้ำ ถนนสุขุมวิท อ.เมือง จ.สมุทรปราการ 10270', '02 528 7800', '', 'โรงพยาบาลยุวประสาทไวทโยปถัมภ์'),
('127,217,264,248', 'ที่ตั้ง47 หมู่ 4 ตำบลตลาดขวัญ อำเภอเมือง จังหวัดนนทบุรี 11000', '02 5287800', '', 'โรงพยาบาลศรีธัญญา'),
('46,47,174,73', 'ที่ตั้ง 131 ถนนช่างหล่อ ต.หายยา อ.เมือง จ.เชียงใหม่ 50100', '0 53 90 8500', '', 'โรงพยาบาลสวนปรุง'),
('26,390,189,417', 'ที่ตั้ง 289 ถนนธราธิบดี ต.ท่าข้าม อ.พุนพิน จ.สุราษฎร์ธานี 84130', '077 916500', '', 'โรงพยาบาลสวนสราญรมย์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cos`);

--
-- Indexes for table `graph1`
--
ALTER TABLE `graph1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graph2`
--
ALTER TABLE `graph2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graph3`
--
ALTER TABLE `graph3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
