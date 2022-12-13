-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 03:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `bcode_find`
--

CREATE TABLE `bcode_find` (
  `id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `No` varchar(20) DEFAULT NULL,
  `Classification_code` varchar(21) DEFAULT NULL,
  `Barcode` varchar(7) DEFAULT NULL,
  `Author` varchar(21) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Year` varchar(4) DEFAULT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `No`, `Classification_code`, `Barcode`, `Author`, `Title`, `Year`, `Category`) VALUES
(3, '1', 'BD-21-V1-2014', '4451', 'Velasquez, Manuel', 'Philosophy: a text with readings', '2014', 'PHILOSOPHY'),
(4, '2', 'BD-418.3-C34-2016', '5155', 'Cain, M.J', 'The Philosophy of Cognitive Science', '2016', 'PHILOSOPHY'),
(5, '3', 'BF-721-K38-2016', '5104', 'Keenan, Thomas', 'An Introduction to Child Development', 'N/A', 'PHILOSOPHY'),
(6, '4', 'BF-76.5-B67-2018', '5222', 'Bordens, Kenneth', 'Research design and methods or process approach', '2018', 'PHILOSOPHY'),
(7, '5', 'BF-76.5-F65-2014', '4227', 'Metzler, Katie ed.', 'An introduction to qualitative research', 'N/A', 'PHILOSOPHY'),
(8, '6', 'CB-59-W38-1995', '3289', 'Chambers, Mortimer', 'The Western experience Vol. 1', '1995', 'HISTORY'),
(9, '7', 'D-209-P26-1995', '3290', 'Palmer, Robert', 'A History of the Modern World', '1995', 'HISTORY'),
(10, '8', 'D-21-P455-1989', '3324', 'Perry, Marvin', 'A History of the World', '1989', 'HISTORY'),
(11, '9', 'G-70.3-S54-1979', '2264', 'Silk, John', 'Statisical Concepts in Geography', '1979', 'HISTORY'),
(12, '10', 'GE-105-E54-2004', '3527', 'Enger, Eldon', 'Environmental Science: A Study of Interpretation', '2004', 'HISTORY'),
(13, '11', 'HA-29-E49-1966', '1755', 'Elzey, F. E.', 'Programmed Introd to statistics', '1966', 'SOCIAL_SCIENCE'),
(14, '12', 'HA-29-H17-1969', '1030', 'Hadley, G.', 'Elementary Statistics', '1969', 'SOCIAL_SCIENCE'),
(15, '13', 'HA-32-F54-2009', '4033', 'Field ,Andy', 'Discovering Statistics Using SPSS', '2009', 'SOCIAL_SCIENCE'),
(16, '14', 'HB-143.7-B35-2011', '4116', 'Baker, Kenneth R.', 'Optimization modeling with Spreadsheets', '2011', 'SOCIAL_SCIENCE'),
(17, '15', 'HB-881-B3723-1966', '2354', 'Beaujeu, J.', 'Geography of Population', '1966', 'SOCIAL_SCIENCE'),
(18, '16', 'HD-30.2-L537-2011', '4090', 'Lientz, Bennet', 'Information Technology Project Management', '2011', 'SOCIAL_SCIENCE'),
(19, '17', 'HD-30.213-O27-1995', '3181', 'O Brien , James', 'Intro to Information System', '1995', 'SOCIAL_SCIENCE'),
(20, '18', 'HF-5500-P3-1962', '2319', 'Packard, Vance', 'The Pyramid climbers', '1962', 'SOCIAL_SCIENCE'),
(21, '19', 'KF-1600-W47-1994', '3300', 'Whitman, Douglas', 'The Legal and Social Environment of Business', '1994', 'SOCIAL_SCIENCE'),
(25, '23', 'NA-2708-J447-2008', '3810', 'Jefferis, Alan', 'Residential design: drafting and detailing', '2008', 'ARTS_LITERATURE'),
(26, '24', 'NK-1584-C19-2018', '5740', 'Shijian, Lim ed.', 'Color Now: color combination for commercial design', '2018', 'ARTS_LITERATURE'),
(27, '25', 'NK-2110-K45-2014', '4463', 'Kilmer, Rosemary', 'Designing interiors', '2014', 'ARTS_LITERATURE'),
(28, '26', 'NK-2115.5-C6-R44-2010', '4002', 'Reed, Ron', 'Color and Design: Transforming Interior Space', '2010', 'ARTS_LITERATURE'),
(29, '27', 'NX-440-082-1978', '2920', 'Dudley, Louise', 'The Humanitiea', '1978', 'ARTS_LITERATURE'),
(30, '28', 'P-40-C63-2013', '4250', 'Coulman, Florian', 'Sociolinguistics: the study of speakers choice', '2013', 'ARTS_LITERATURE'),
(31, '29', 'PB-715-L3-1961', '2344', 'Lado, Robert', 'Language Testing', '1961', 'ARTS_LITERATURE'),
(32, '30', 'PE-1106-B28-2007', '3649', 'Ballard, Kim', 'The Frameworks of English', '2007', 'ARTS_LITERATURE'),
(33, '31', 'PN-4784-E125-2016', '5097', 'Lind, Nyles, ed.', 'Electronic Media: Today and Tomorrow', '2016', 'ARTS_LITERATURE'),
(34, '32', 'PR-83-E64-2017', '5238', 'Poplaueski, Paul Ed.', 'English Literature is Context', '2017', 'ARTS_LITERATURE'),
(35, '33', 'Q-335-R53-1983', '3152', 'Rich, Elaine', 'Artificial Intelligence', '1983', 'SCIENCE'),
(36, '34', 'QA-303-ST49-2019', '5818', 'Stewart, James', 'Calculus concepts and contexts', '2019', 'SCIENCE'),
(37, '35', 'QA-303.2-C355-2017', '5817', 'McCormach, Karson', 'Calculus and its Applications', '2017', 'SCIENCE'),
(38, '36', 'QC-23-M67-1972', '1917', 'William, J.E', 'Modern Physics', '1972', 'SCIENCE'),
(39, '37', 'QR-41.2-P74-1996', '3265', 'Prescot, Lansing M.', 'Microbiology', '1996', 'SCIENCE'),
(40, '38', 'TA-350-835523-2016', '4956', 'Beer, Ferdinand P.', 'Vector Mechanics for Engineers', '2016', 'TECHNOLOGY'),
(41, '39', 'TH-443-657-2013', '5074', 'Goetsch, David L.', 'Construction Safety and Health', '2013', 'TECHNOLOGY'),
(42, '40', 'TJ-1374-B265-2016', '5439', 'Barney, Gina', 'Elevator traffic handbook:Theory and practice', '2016', 'TECHNOLOGY'),
(43, '41', 'TJ-260-638-2015', '5471', 'Angel, Yunes', 'Heat & Mass transfer fundamentals application', '2015', 'TECHNOLOGY'),
(44, '42', 'TK-1191-M64-1953', '3102', 'Morse, Frederick T.', 'Power Plant Engineering', '1953', 'TECHNOLOGY'),
(45, '43', 'TK-484-E46-2004', '3469', 'Nahvi, Mahmood', 'Schaums easy Outline Electric Circuits', '2004', 'TECHNOLOGY'),
(46, '44', 'TS-265-H78-1988', '2661', 'Huang, Francis', 'Engineering Thermodynamics', '1988', 'TECHNOLOGY');

-- --------------------------------------------------------

--
-- Table structure for table `find_book`
--

CREATE TABLE `find_book` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date_save` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(11) NOT NULL,
  `date_scanned` datetime NOT NULL DEFAULT current_timestamp(),
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `classification_code` varchar(100) NOT NULL,
  `barcode` int(11) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bcode_find`
--
ALTER TABLE `bcode_find`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `find_book`
--
ALTER TABLE `find_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bcode_find`
--
ALTER TABLE `bcode_find`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `find_book`
--
ALTER TABLE `find_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
