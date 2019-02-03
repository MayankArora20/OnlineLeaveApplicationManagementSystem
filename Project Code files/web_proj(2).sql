-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 11:10 AM
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
-- Database: `web_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`) VALUES
(123, 'Bittu', 'bittu123', 'bittukumarmnnit@gmail.com'),
(456, 'Mubashir', 'mubashir456', 'mayanknimcet@gmail.com'),
(789, 'Azam', 'azam789', 'muhammadazam.mnnit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `applicationId` varchar(14) NOT NULL,
  `course_job` varchar(15) NOT NULL,
  `sem` int(1) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `registration_num` varchar(8) DEFAULT NULL,
  `fromDt` date DEFAULT NULL,
  `tillDt` date DEFAULT NULL,
  `reason` varchar(150) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Address` varchar(70) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'pending',
  `doc1` blob,
  `doc2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`applicationId`, `course_job`, `sem`, `name`, `registration_num`, `fromDt`, `tillDt`, `reason`, `mobile`, `email`, `Address`, `status`, `doc1`, `doc2`) VALUES
('1223ca12', 'mca', 3, 'mayank', '2017ca45', '2018-11-14', '2018-11-16', 'c dcac', 7860934024, 'mkasd@gmail.com', 'varanasi', 'approved', '', ''),
('2017ca01253', 'MCA', 2, 'sdcav', '2017ca01', '2018-11-09', '2018-11-11', 'fee               \r\n           ', 7894561230, 'rtknanda97@gmail.com', 'ee1q3', 'approved', 0x75706c6f61642f73796c76656f6e2e6a7067, ''),
('2017ca01101', 'MCA', 2, 'sdcav', '2017ca01', '2018-11-09', '2018-11-11', 'fee               \r\n           ', 7894561230, 'rtknanda97@gmail.com', 'ee1q3', 'approved', 0x75706c6f61642f73796c76656f6e2e6a7067, ''),
('2017ca01607', 'MCA', 2, 'sdcav', '2017ca01', '2018-11-09', '2018-11-11', 'fee               \r\n           ', 7894561230, 'rtknanda97@gmail.com', 'ee1q3', 'pending', 0x75706c6f61642f73796c76656f6e2e6a7067, ''),
('2017ca01864', 'MCA', 2, 'sdcav', '2017ca01', '2018-11-09', '2018-11-11', 'fee               \r\n           ', 7894561230, 'rtknanda97@gmail.com', 'ee1q3', 'pending', 0x75706c6f61642f73796c76656f6e2e6a7067, ''),
('2017ca01968', 'MCA', 2, 'sdcav', '2017ca01', '2018-11-09', '2018-11-11', 'fee               \r\n           ', 7894561230, 'rtknanda97@gmail.com', 'ee1q3', 'pending', 0x75706c6f61642f73796c76656f6e2e6a7067, ''),
('ac820', 'B.Tech', 1, 'cad', 'ac', '2018-11-09', '2018-11-11', 'cac               \r\n           ', 7894561230, 'rtknanda97@gmail.com', 'ac', 'pending', 0x75706c6f61642f, ''),
('ac312', 'B.Tech', 1, 'cad', 'ac', '2018-11-09', '2018-11-11', 'cac               \r\n           ', 7894561230, 'rtknanda97@gmail.com', 'ac', 'pending', 0x75706c6f61642f, ''),
('ac553', 'B.Tech', 1, 'cad', 'ac', '2018-11-09', '2018-11-11', 'cac               \r\n           ', 7894561230, 'rtknanda97@gmail.com', 'ac', 'pending', '', ''),
('2017ca45517', 'MCA', 3, 'mayank arora', '2017ca45', '2018-11-09', '2018-11-11', 'tired               \r\n           ', 7860934024, 'mkarora1995@gmail.com', 'varanasi', 'pending', 0x75706c6f61642f70696368752e706e67, ''),
('2017ca45934', 'MCA', 3, 'mayank arora', '2017ca45', '2018-11-09', '2018-11-11', 'tired               \r\n           ', 7860934024, 'mkarora1995@gmail.com', 'varanasi', 'pending', 0x75706c6f61642f70696368752e706e67, ''),
('2017ca45316', 'MCA', 3, 'samrat arora', '2017ca45', '2018-11-09', '2018-11-11', 'tired               \r\n           ', 7860934024, 'mkarora1995@gmail.com', 'varanasi', 'pending', 0x75706c6f61642f6172746963756e6f2e706e67, ''),
('2017ca45311', 'MCA', 3, 'samrat arora', '2017ca45', '2018-11-09', '2018-11-11', 'tired               \r\n           ', 7860934024, 'mkarora1995@gmail.com', 'varanasi', 'pending', 0x75706c6f61642f6172746963756e6f2e706e67, ''),
('2017ca45475', 'MCA', 3, 'samrat arora', '2017ca45', '2018-11-09', '2018-11-11', 'tired               \r\n           ', 7860934024, 'mkarora1995@gmail.com', 'varanasi', 'pending', 0x75706c6f61642f6172746963756e6f2e706e67, ''),
('2017ca45914', 'MCA', 3, 'samrat arora', '2017ca45', '2018-11-09', '2018-11-11', 'tired               \r\n           ', 7860934024, 'mkarora1995@gmail.com', 'varanasi', 'pending', 0x75706c6f61642f6172746963756e6f2e706e67, ''),
('2017ca45347', 'MCA', 3, 'samrat arora', '2017ca45', '2018-11-09', '2018-11-11', 'tired               \r\n           ', 7860934024, 'mkarora1995@gmail.com', 'varanasi', 'pending', 0x75706c6f61642f6172746963756e6f2e706e67, '');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `tid` varchar(7) NOT NULL,
  `appId` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`tid`, `appId`) VALUES
('123', '1223ca12'),
('456', '1223ca12'),
('789', '1223ca12'),
('0', '20161819864'),
('0', '20161819645'),
('0', '20161819527'),
('0', '20161819214'),
('0', '20161819789'),
('123', '123123123'),
('456', '2017ca01968'),
('123', 'ac820'),
('456', 'ac820'),
('123', 'ac312'),
('456', 'ac312'),
('123', 'ac553'),
('456', 'ac553'),
('123', '2017ca45517'),
('456', '2017ca45517'),
('789', '2017ca45517'),
('123', '2017ca45934'),
('456', '2017ca45934'),
('789', '2017ca45934'),
('123', '2017ca45316'),
('456', '2017ca45316'),
('789', '2017ca45316'),
('123', '2017ca45311'),
('123', '2017ca45475'),
('456', '2017ca45475'),
('789', '2017ca45475'),
('123', '2017ca45914'),
('456', '2017ca45914'),
('789', '2017ca45914'),
('456', '2017ca45347');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
