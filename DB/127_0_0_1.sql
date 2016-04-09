-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 06:32 AM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud`
--
CREATE DATABASE IF NOT EXISTS `cloud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cloud`;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `lastname` text NOT NULL,
  `year` int(1) NOT NULL,
  `semester` int(1) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='used for signup page';

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstname`, `middlename`, `lastname`, `year`, `semester`, `emailid`, `password`) VALUES
('Ramakant', 'Uddhao', 'Burde', 4, 8, 'ramburde99@gmail.com', 'burderu'),
('aa', 'aa', 'aa', 3, 4, 'anuragtomar91@gmail.com', 'aa'),
('Ashish', 'Shankar ', 'Sabu', 4, 8, 'ashishsabu07@gmail.com', 'sabuasa'),
('Ajay', 'Rameshwar', 'Kabra', 3, 6, 'kabrar@gmail.com', 'kabrara'),
('Anmol', 'Varun', 'Jaisawal', 4, 8, 'jaiswalav@rknec.edu', 'jaiswal');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `emailid` varchar(60) NOT NULL,
  `heading` varchar(60) NOT NULL,
  `subject` int(1) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `size` bigint(20) NOT NULL,
  `data` longblob NOT NULL,
  `time` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`emailid`, `heading`, `subject`, `description`, `name`, `mime`, `size`, `data`, `time`) VALUES
('ramburde99@gmail.com', 'google', 4, 'fbdhdgbbxfbdf', 'aa.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 13328, 0x433a77616d703634096d70706870363032382e746d70, '2016-04-04'),
('ashishsabu07@gmail.com', 'ashish file', 2, 'this is file upload demo', 'dd.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 13328, 0x433a77616d703634096d70706870374243392e746d70, '2016-04-04'),
('ashishsabu07@gmail.com', 'second file example', 4, 'this is second file by sabu', 'aa.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 13328, 0x433a77616d703634096d70706870384530352e746d70, '2016-04-04'),
('kabrar@gmail.com', 'ajay', 5, 'ajay file', 'dd.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 13328, 0x433a77616d703634096d70706870363446302e746d70, '2016-04-04'),
('jaiswalav@rknec.edu', 'my file 1', 1, 'this is file which store info', 'aa.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 13328, 0x433a77616d703634096d70706870383643302e746d70, '2016-04-06'),
('jaiswalav@rknec.edu', 'file2', 3, 'This is second file...!', '', '', 0, '', '2016-04-06'),
('jaiswalav@rknec.edu', 'new file deadlock', 4, 'waiting state for new file', 'dd.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 13328, 0x433a77616d703634096d70706870373738392e746d70, '2016-04-06'),
('jaiswalav@rknec.edu', 'do not touch file', 4, 'take a chance', 'Inder.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 22094, 0x433a77616d703634096d70706870434341302e746d70, '2016-04-06'),
('jaiswalav@rknec.edu', 'file2', 3, 'This is second file...!', '', '', 0, '', '2016-04-06'),
('ramburde99@gmail.com', 'new file deadlock', 3, 'what is a deadlock', 'insta.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 26383, 0x433a77616d703634096d70706870343533442e746d70, '2016-04-06'),
('ramburde99@gmail.com', 'new file to test', 4, 'new file to test', 'Inder.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 22094, 0x433a77616d703634096d70706870313634452e746d70, '2016-04-06'),
('ramburde99@gmail.com', 'new file second', 4, 'new file this is', 'Instagram.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 53607, 0x433a77616d703634096d70706870363939342e746d70, '2016-04-07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
