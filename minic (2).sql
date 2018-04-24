-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2012 at 06:31 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minic`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_share`
--

CREATE TABLE IF NOT EXISTS `data_share` (
  `Date` varchar(15) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `File` varchar(255) NOT NULL,
  `Author` varchar(255) NOT NULL,
  `desc` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_share`
--

INSERT INTO `data_share` (`Date`, `Time`, `File`, `Author`, `desc`) VALUES
('8March2012', '20 : 29', 'Hacking Gmail 2006.pdf', 'svit', 'gmail hack'),
('8March2012', '16 : 22', 'Virus book.doc', 'svit', 'virus related '),
('8March2012', '18 : 4', 'Hacking.pdf', 'vrushali', 'hacking guide'),
('8March2012', '16 : 1', 'Online renewal.doc', '', 'this doc contains online renewal help'),
('9March2012', '17 : 27', 'ReadMe.txt', 'svit', 'demo'),
('11March2012', '13 : 19', 'IMAG0059.jpg', 'vrushali', 'image\r\n'),
('11March2012', '18 : 0', '01. guzarish.mp3', 'rohit tajane', 'song gujarish');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `Date` text NOT NULL,
  `Time` text NOT NULL,
  `User Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`Date`, `Time`, `User Name`) VALUES
('x/y/z', 's:12', 'sgr'),
('8March2012', '16 : 49', 'svit'),
('8March2012', '17 : 27', 'svit'),
('8March2012', '17 : 48', 'vrushali'),
('8March2012', '17 : 49', 'svit'),
('8March2012', '18 : 7', 'svit'),
('8March2012', '20 : 28', 'svit'),
('8March2012', '20 : 30', 'svit'),
('9March2012', '17 : 23', 'svit'),
('9March2012', '17 : 29', 'svit'),
('9March2012', '17 : 32', 'svit'),
('10March2012', '17 : 4', 'vrushali'),
('10March2012', '17 : 26', 'sagar'),
('10March2012', '17 : 30', 'Prof Ganesh Gaikwad'),
('11March2012', '12 : 10', 'VRUSHALI'),
('11March2012', '12 : 27', 'vrushali'),
('11March2012', '12 : 38', 'vrushali'),
('11March2012', '12 : 40', 'vrushali'),
('11March2012', '12 : 42', 'vrushali'),
('11March2012', '12 : 46', 'vrushali'),
('11March2012', '17 : 57', 'rohit tajane'),
('11March2012', '17 : 58', 'Prof Ganesh Gaikwad'),
('11March2012', '18 : 4', 'rohit tajane');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE IF NOT EXISTS `msg` (
  `Date` varchar(15) NOT NULL,
  `Time` varchar(15) NOT NULL,
  `To` varchar(50) NOT NULL,
  `From` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`Date`, `Time`, `To`, `From`, `msg`) VALUES
('8March2012', '18 : 1', '', 'vrushali', ''),
('8March2012', '17 : 54', 'vrushali', 'svit', 'hii'),
('8March2012', '17 : 55', 'vrushali', 'svit', 'heloooo hws u'),
('8March2012', '17 : 58', 'svit', 'vrushali', 'kutes ahes sadhyaaa??'),
('11March2012', '18 : 1', 'rohit tajane', 'Prof Ganesh Gaikwad', 'i m f9..'),
('11March2012', '17 : 59', 'Prof Ganesh Gaikwad', 'rohit tajane', 'hii sir hws u'),
('8March2012', '18 : 1', '', 'vrushali', ''),
('11March2012', '17 : 59', 'rohit tajane', 'Prof Ganesh Gaikwad', 'i m f9..'),
('11March2012', '17 : 59', 'Prof Ganesh Gaikwad', 'rohit tajane', 'hii sir hws u'),
('8March2012', '18 : 1', 'vrushali', 'svit', 'heloooo hws u'),
('11March2012', '12 : 10', '', 'VRUSHALI', ''),
('10March2012', '16 : 54', 'svit', 'vrushali', 'hw was ur clg today??'),
('9March2012', '17 : 29', '', 'svit', ''),
('8March2012', '18 : 0', 'svit', 'vrushali', 'boree naakoo karus byeee'),
('8March2012', '18 : 3', 'vrushali', 'svit', 'asnjajshjkahjkhs'),
('8March2012', '18 : 1', '', 'vrushali', ''),
('8March2012', '17 : 58', 'vrushali', 'svit', 'heloooo hws u'),
('8March2012', '17 : 54', 'svit', 'vrushali', 'hellooo');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `Title` varchar(100) NOT NULL,
  `File` varchar(255) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Time` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`Title`, `File`, `Date`, `Time`) VALUES
('Revaluation', 'Hacking GPS.pdf', '8March2012', '18 : 7'),
('Exam Section', 'IMP Registry Tips.doc', '8March2012', '17 : 16'),
('commite', '216 Hacking The Genome.pdf', '8March2012', '20 : 30'),
('gathering Notice', 'bill.doc', '11March2012', '18 : 4');

-- --------------------------------------------------------

--
-- Table structure for table `registration_table`
--

CREATE TABLE IF NOT EXISTS `registration_table` (
  `Name` varchar(100) NOT NULL,
  `Enrollment No.` varchar(20) NOT NULL,
  `Branch` varchar(25) NOT NULL,
  `Academic Year` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BDate` text NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `BloodGroup` varchar(2) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_table`
--

INSERT INTO `registration_table` (`Name`, `Enrollment No.`, `Branch`, `Academic Year`, `Gender`, `BDate`, `Address`, `Contact`, `Email`, `BloodGroup`, `Password`, `profile`, `id`) VALUES
('Prof Ganesh Gaikwad', '7515323', 'Computer Technology', '3rd Year', 'M', '16 / 03 / 2004', 'thkde colony cidco nasik', '2147483647', 'prof_gaikwad@roketmail.com', 'ab', '12345', 'uploads/IMAG0137.jpg', '1'),
('rohit tajane', '02789541', 'Computer Technology', '3rd Year', 'M', '17 / 03 / 1993', 'Pandav nagari plot no trimurti nasik 422009', '9762253305', 'stylsh_sgr@rediff.com', 'Ab', '12345', 'uploads/IMAG0158.jpg', '0'),
('', '', 'Computer Technology', '1st Year', '', '01 / 01 / 1992', '', '', '', '', '', 'uploads/', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
