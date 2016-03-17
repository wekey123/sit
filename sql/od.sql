-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2016 at 08:50 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `od`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `sname` varchar(50) NOT NULL,
  `des` varchar(100) NOT NULL,
  `clgname` varchar(100) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  `dur` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `cat` varchar(100) NOT NULL,
  `top` varchar(100) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conf`
--

CREATE TABLE `conf` (
  `tit` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `caname` varchar(100) NOT NULL,
  `confname` varchar(100) NOT NULL,
  `clgname` varchar(100) NOT NULL,
  `pubdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jou`
--

CREATE TABLE `jou` (
  `tit` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `caname` varchar(100) NOT NULL,
  `pubdate` varchar(20) NOT NULL,
  `journal` varchar(100) NOT NULL,
  `volume` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `pages` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `doi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `odform`
--

CREATE TABLE `odform` (
  `sname` varchar(50) NOT NULL,
  `des` varchar(50) NOT NULL,
  `cate` varchar(50) NOT NULL,
  `start` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  `dur` varchar(50) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `clg` varchar(50) NOT NULL,
  `loc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `odform`
--

INSERT INTO `odform` (`sname`, `des`, `cate`, `start`, `end`, `dur`, `topic`, `clg`, `loc`) VALUES
('saru', 'Professor - PM', 'Workshop', '10.6.16', '16.6.16', '6', 'OPOR', 'SIT', 'Madurai'),
('sharmi', 'Professor - PM', 'Workshop', '2.3.16', '6.3.16', '4', 'BUG', 'KLN', 'Madurai'),
('d', 'Professor - PM', 'Workshop', 'd', 'h', 'h', 'h', 'hq', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `staffreg`
--

CREATE TABLE `staffreg` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qua` varchar(50) NOT NULL,
  `exp` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffreg`
--

INSERT INTO `staffreg` (`id`, `name`, `qua`, `exp`, `dob`, `sex`, `mailid`, `contactno`, `location`) VALUES
('1', 'saru', 'be', '3', '10/5/94', 'Female', 'rere', '989999879', 'ggjg'),
('a', 'sds', 'dfd', 'dfd', 'dfd', 'radiobutto', 'gf', 'f', 'ff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staffreg`
--
ALTER TABLE `staffreg`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
