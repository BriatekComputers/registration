-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 11:17 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mautech_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE IF NOT EXISTS `admin_tbl` (
  `admin_id` varchar(100) NOT NULL,
  `psn-usname` varchar(200) NOT NULL,
  `admn_fname` text NOT NULL,
  `admn_lname` text NOT NULL,
  `admn_othername` text NOT NULL,
  `admn_password` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biodata_tbl`
--

CREATE TABLE IF NOT EXISTS `biodata_tbl` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `std_regNum` varchar(64) NOT NULL,
  `std_fname` varchar(100) NOT NULL,
  `std_lname` varchar(100) NOT NULL,
  `std_othername` varchar(100) NOT NULL,
  `std_sex` char(32) NOT NULL,
  `std_nationality` varchar(100) NOT NULL,
  `std_state` varchar(100) NOT NULL,
  `std_lga` varchar(100) NOT NULL,
  `std_address` varchar(300) NOT NULL,
  `std_c_address` varchar(100) NOT NULL,
  `std_phoneNo` int(11) NOT NULL,
  `std_email` varchar(64) NOT NULL,
  `std_dob` date NOT NULL,
  `std_mstatus` varchar(64) NOT NULL,
  `std_religion` varchar(100) NOT NULL,
  `nok_fname` varchar(100) NOT NULL,
  `nok_lname` varchar(100) NOT NULL,
  `nok_others` varchar(100) NOT NULL,
  `nok_sex` varchar(100) NOT NULL,
  `nok_address` varchar(500) NOT NULL,
  `nok_phone` int(100) NOT NULL,
  `nok_email` varchar(200) NOT NULL,
  `relationshp` varchar(100) NOT NULL,
  `regdate` date NOT NULL,
  `active flag` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `std_regNum` (`std_regNum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `biodata_tbl`
--

INSERT INTO `biodata_tbl` (`id`, `std_regNum`, `std_fname`, `std_lname`, `std_othername`, `std_sex`, `std_nationality`, `std_state`, `std_lga`, `std_address`, `std_c_address`, `std_phoneNo`, `std_email`, `std_dob`, `std_mstatus`, `std_religion`, `nok_fname`, `nok_lname`, `nok_others`, `nok_sex`, `nok_address`, `nok_phone`, `nok_email`, `relationshp`, `regdate`, `active flag`) VALUES
(1, 'UG14/sccs/1030', 'Abubakar', 'Muhammad', 'Sadiq', 'Male', 'christian', 'islam', 'christian', 'hvhgvchjcjscja', 'hjxjhxvxvbx', 2147483647, 'abmusadeeq@gmail.com', '1999-06-01', 'Married', 'islam', 'Abubakar', 'Sadiq', 'mj', '', '', 0, '08167913802', 'father', '2017-07-26', 1),
(2, 'UG14/sccs/1009', 'beeken', 'beeken', 'beekn', 'Female', 'Non-Nigerian', 'Gombe', 'Abuja', 'Dawaki Quaters Gombe', 'caschca', 56846646, 'abmusadeeq@gmail.com', '2000-01-01', 'Divorce', 'christian', 'Abubakar', 'Sadiq', ',abchachasv', '', '', 0, '08167913802', 'father', '2017-07-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses_tbl`
--

CREATE TABLE IF NOT EXISTS `courses_tbl` (
  `c_id` varchar(100) NOT NULL,
  `cc` int(64) NOT NULL,
  `ct` text NOT NULL,
  `cu` int(64) NOT NULL,
  `c_status` varchar(100) NOT NULL,
  `programe` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_reg_tbl`
--

CREATE TABLE IF NOT EXISTS `course_reg_tbl` (
  `std_id` varchar(32) NOT NULL,
  `std_RegNum` varchar(32) NOT NULL,
  `std_cc` int(11) NOT NULL,
  `std_ct` text NOT NULL,
  `std_cu` int(32) NOT NULL,
  `progrm_id` varchar(64) NOT NULL,
  `c_semester` varchar(100) NOT NULL,
  `c_status` varchar(100) NOT NULL,
  `C_session` varchar(100) NOT NULL,
  `admn_app_Sts` tinyint(1) NOT NULL DEFAULT '0',
  `admn_psn` varchar(100) NOT NULL,
  `dateofapprove` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE IF NOT EXISTS `login_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '1',
  `l_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password` (`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`id`, `username`, `password`, `checked`, `l_date`) VALUES
(1, 'Computer Science', '83212425', 0, '2017-07-25'),
(4, 'Computer Sc', '67913802', 0, '2017-07-25'),
(5, 'abmusadeeq', 'adhgcvac6', 0, '2017-07-25'),
(7, 'aneeta', '8svhcvc53', 0, '2017-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `passport_tbl`
--

CREATE TABLE IF NOT EXISTS `passport_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regNum` varchar(100) NOT NULL,
  `passp_name` varchar(200) NOT NULL,
  `datep` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `passport_tbl`
--

INSERT INTO `passport_tbl` (`id`, `regNum`, `passp_name`, `datep`) VALUES
(1, '', '2016-10-28-0014_Q1.jpg', '2017-07-26'),
(2, '', '2016-10-28-0012.jpg', '2017-07-26'),
(3, '', '2016-10-28-0013_q1_Q1.jpg', '2017-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `programme_tbl`
--

CREATE TABLE IF NOT EXISTS `programme_tbl` (
  `progr_id` varchar(200) NOT NULL,
  `progr_name` text NOT NULL,
  `department` text NOT NULL,
  PRIMARY KEY (`progr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `regnum_tbl`
--

CREATE TABLE IF NOT EXISTS `regnum_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stdformno` varchar(64) NOT NULL,
  `stdRegNum` varchar(32) NOT NULL,
  `stdcourse` varchar(200) NOT NULL,
  `stdpassword` varchar(32) NOT NULL,
  `department` varchar(200) NOT NULL,
  `dateofreg` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `std_RegNum` (`stdRegNum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `regnum_tbl`
--

INSERT INTO `regnum_tbl` (`id`, `stdformno`, `stdRegNum`, `stdcourse`, `stdpassword`, `department`, `dateofreg`) VALUES
(3, '12122', 'UG14/sccs/1036', 'Computer Science', '83212425cs', 'Mathematics', '2017-07-25'),
(4, '56353', 'UG14/sccs/1030', 'Biology', 'Biology', 'Biology', '2017-07-25'),
(6, '8665555', 'UG14/sccs/1037', 'statistics', 'hasssan', 'Mathematics', '2017-07-26'),
(7, '345678', 'adsfndnfd', 'waesrdthfn', 'aaaaaaaaaa', 'aSFDFGB', '2017-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `session_tbl`
--

CREATE TABLE IF NOT EXISTS `session_tbl` (
  `session_id` varchar(64) NOT NULL,
  `session_name` varchar(100) NOT NULL,
  UNIQUE KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
