-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 03:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duiet`
--

-- --------------------------------------------------------

--
-- Table structure for table `empposts`
--

CREATE TABLE `empposts` (
  `pid` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `pname` varchar(200) NOT NULL,
  `pdegree` varchar(200) NOT NULL,
  `psalary` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empposts`
--

INSERT INTO `empposts` (`pid`, `pdate`, `pname`, `pdegree`, `psalary`, `status`) VALUES
(3, '2020-12-26', 'Himu', 'B.TEC', 2378998, -1),
(4, '2020-12-27', 'Ratna', 'B.TECH', 1234567, 1),
(5, '2020-12-27', 'Gotia', 'B.TECH', 2222222, -1),
(6, '2020-12-28', '', '', 0, -1),
(7, '2020-12-28', 'SAZID AHMED', 'B.TECH', 12345, 1),
(8, '2020-12-28', 'piku', 'B.TECH', 10000000, 1),
(9, '2020-12-28', 'lol', 'bca', 10, 1),
(10, '2020-12-28', 'SAZID AHMED', 'B.TECH', 123344, -1),
(11, '2020-12-28', 'debo', 'B.TECH', 123, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empposts`
--
ALTER TABLE `empposts`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empposts`
--
ALTER TABLE `empposts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
