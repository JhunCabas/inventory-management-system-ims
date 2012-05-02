-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2012 at 11:47 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `cons`
--

CREATE TABLE IF NOT EXISTS `cons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` text NOT NULL,
  `date` text NOT NULL,
  `no` int(11) NOT NULL,
  `action` text NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `cons`
--

INSERT INTO `cons` (`id`, `item`, `date`, `no`, `action`, `balance`) VALUES
(1, 'Pen', '28/01/2012', 5, 'received', 5),
(2, 'Pen', '28/01/2012', 2, 'issued', 3),
(3, 'Note book', '29/01/2012', 4, 'received', 4),
(4, 'Note book', '29/01/2012', 2, 'issued', 2),
(5, 'Pen', '29/01/2012', 4, 'received', 7),
(6, 'Pen', '29/01/2012', 4, 'received', 11),
(7, 'Pen', '29/01/2012', 2, 'received', 13),
(8, 'Pencil', '29/01/2012', 4, 'received', 4),
(9, 'Pencil', '29/01/2012', 2, 'received', 6),
(10, 'Pencil', '17/02/2012', 5, 'received', 11);

-- --------------------------------------------------------

--
-- Table structure for table `currentstatus`
--

CREATE TABLE IF NOT EXISTS `currentstatus` (
  `idno` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `location` text NOT NULL,
  PRIMARY KEY (`idno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentstatus`
--

INSERT INTO `currentstatus` (`idno`, `status`, `location`) VALUES
('123', 'removed', 'null'),
('UJ/COMPSC/419/OE/04/001', 'in', 'CSC dept'),
('UJ/COMPSC/419/OE/04/002', 'in', 'CSC dept'),
('UJ/COMPSC/419/OE/04/003', 'in', 'CSC dept'),
('UJ/COMPSC/402/LE/02/002', 'in', 'CSC dept'),
('UJ/COMPSC/425/LE/04/001', 'in', 'CSC dept'),
('UJ/COMPSC/425/LE/04/002', 'in', 'CSC dept'),
('UJ/COMPSC/425/LE/04/003', 'in', 'CSC dept'),
('UJ/COMPSC/425/LE/04/004', 'in', 'CSC dept'),
('UJ/COMPSC/425/LE/04/005', 'in', 'CSC dept'),
('UJ/COMPSC/402/LE/02/001', 'in', 'CSC dept'),
('UJ/COMPSC/402/LE/02/003', 'in', 'CSC dept'),
('UJ/COMPSC/402/LE/02/004', 'in', 'CSC dept'),
('UJ/COMPSC/418/F/04/001', 'in', 'CSC dept'),
('UJ/COMPSC/418/F/04/002', 'in', 'CSC dept');

-- --------------------------------------------------------

--
-- Table structure for table `fu`
--

CREATE TABLE IF NOT EXISTS `fu` (
  `articles` text NOT NULL,
  `idno` text NOT NULL,
  `fno` text NOT NULL,
  `date` text NOT NULL,
  `supna` text NOT NULL,
  `up` text NOT NULL,
  `ofinch` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fu`
--

INSERT INTO `fu` (`articles`, `idno`, `fno`, `date`, `supna`, `up`, `ofinch`, `remarks`) VALUES
('Chair(Arm)', 'UJ/COMPSC/418/F/04/001', '04', '01/02/2012', 'Nitharsan', '1000', 'tharsan', 'cair'),
('Chair(Arm)', 'UJ/COMPSC/418/F/04/002', '04', '01/02/2012', 'Nitharsan', '1000', 'tharsan', 'cair');

-- --------------------------------------------------------

--
-- Table structure for table `le`
--

CREATE TABLE IF NOT EXISTS `le` (
  `articles` text NOT NULL,
  `idno` text NOT NULL,
  `fno` text NOT NULL,
  `date` text NOT NULL,
  `supna` text NOT NULL,
  `up` text NOT NULL,
  `ofinch` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `le`
--

INSERT INTO `le` (`articles`, `idno`, `fno`, `date`, `supna`, `up`, `ofinch`, `remarks`) VALUES
('Computers & Tabulaters', 'UJ/COMPSC/425/LE/04/005', '04', '31/01/2012', 'tharsan', '35000', 'nitharsan', 'computer'),
('Computers & Tabulaters', 'UJ/COMPSC/425/LE/04/004', '04', '31/01/2012', 'tharsan', '35000', 'nitharsan', 'computer'),
('Computers & Tabulaters', 'UJ/COMPSC/425/LE/04/001', '04', '31/01/2012', 'tharsan', '35000', 'nitharsan', 'computer'),
('Computers & Tabulaters', 'UJ/COMPSC/425/LE/04/002', '04', '31/01/2012', 'tharsan', '35000', 'nitharsan', 'computer'),
('Computers & Tabulaters', 'UJ/COMPSC/425/LE/04/003', '04', '31/01/2012', 'tharsan', '35000', 'nitharsan', 'computer'),
('Air Conditioner', 'UJ/COMPSC/402/LE/02/002', '02', '31/01/2012', 'Nitharsan', '50000', 'tharsan', 'cooling'),
('Air Conditioner', 'UJ/COMPSC/402/LE/02/001', '02', '31/01/2012', 'Nitharsan', '50000', 'tharsan', 'cooling'),
('Air Conditioner', 'UJ/COMPSC/402/LE/02/003', '02', '02/03/2012', 'nitha', '50000', 'tharsan', 'cooling'),
('Air Conditioner', 'UJ/COMPSC/402/LE/02/004', '02', '02/03/2012', 'nitha', '50000', 'tharsan', 'cooling');

-- --------------------------------------------------------

--
-- Table structure for table `loanissue`
--

CREATE TABLE IF NOT EXISTS `loanissue` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `article` text NOT NULL,
  `id` text NOT NULL,
  `issued_date` text NOT NULL,
  `issued_by` text NOT NULL,
  `received_by` text NOT NULL,
  `received_dept` text NOT NULL,
  `status` text NOT NULL,
  `return_date` text NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `loanissue`
--

INSERT INTO `loanissue` (`loan_id`, `article`, `id`, `issued_date`, `issued_by`, `received_by`, `received_dept`, `status`, `return_date`, `remarks`) VALUES
(3, 'Air Conditioner', 'UJ/COMPSC/402/LE/02/002', '05/02/2012', 'Ravi', 'Raja', 'Phy dept', '0', '', ''),
(4, 'Computers & Tabulaters', 'UJ/COMPSC/425/LE/04/003', '10/02/2012', 'Mala', 'Kala', 'Che dept', '1', '21/2/2012', 'Computer');

-- --------------------------------------------------------

--
-- Table structure for table `loantaken`
--

CREATE TABLE IF NOT EXISTS `loantaken` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `article` text NOT NULL,
  `id` text NOT NULL,
  `issued_dept` text NOT NULL,
  `received_date` text NOT NULL,
  `received_by` text NOT NULL,
  `status` text NOT NULL,
  `return_date` text NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `loantaken`
--

INSERT INTO `loantaken` (`loan_id`, `article`, `id`, `issued_dept`, `received_date`, `received_by`, `status`, `return_date`, `remarks`) VALUES
(6, 'Chair(Arm)', 'UJ/COMPSC/418/F/04/001', 'Phy dept', '10/02/2012', 'Ravi', '0', '', ''),
(7, 'Chair(Dining)', 'UJ/COMPSC/419/OE/04/001', 'Maths dept', '08/01/2012', 'Raja', '1', '21/02/2012', 'Chair');

-- --------------------------------------------------------

--
-- Table structure for table `mai`
--

CREATE TABLE IF NOT EXISTS `mai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` text NOT NULL,
  `date` text NOT NULL,
  `no` int(11) NOT NULL,
  `action` text NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mai`
--

INSERT INTO `mai` (`id`, `item`, `date`, `no`, `action`, `balance`) VALUES
(1, 'Bulb', '02/02/2012', 5, 'received', 5),
(3, 'Bulb', '02/02/2012', 5, 'received', 10);

-- --------------------------------------------------------

--
-- Table structure for table `oe`
--

CREATE TABLE IF NOT EXISTS `oe` (
  `articles` text NOT NULL,
  `idno` text NOT NULL,
  `fno` text NOT NULL,
  `date` text NOT NULL,
  `supna` text NOT NULL,
  `up` text NOT NULL,
  `ofinch` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oe`
--

INSERT INTO `oe` (`articles`, `idno`, `fno`, `date`, `supna`, `up`, `ofinch`, `remarks`) VALUES
('Chair(Dining)', 'UJ/COMPSC/419/OE/04/003', '04', '31/01/2012', 'tharsan', '1000', 'nitharsan', 'chair'),
('Chair(Dining)', 'UJ/COMPSC/419/OE/04/001', '04', '31/01/2012', 'tharsan', '1000', 'nitharsan', 'chair'),
('Chair(Dining)', 'UJ/COMPSC/419/OE/04/002', '04', '31/01/2012', 'tharsan', '1000', 'nitharsan', 'chair');

-- --------------------------------------------------------

--
-- Table structure for table `remove`
--

CREATE TABLE IF NOT EXISTS `remove` (
  `idno` varchar(23) NOT NULL,
  `article` text NOT NULL,
  `reason` text NOT NULL,
  `date` text NOT NULL,
  `authorized_by` text NOT NULL,
  PRIMARY KEY (`idno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remove`
--

INSERT INTO `remove` (`idno`, `article`, `reason`, `date`, `authorized_by`) VALUES
('UJ/COMPSC/403/OE/03/002', 'Almyrah', 'broken', '03.02.2012', 'raja'),
('UJ/COMPSC/403/OE/03/004', 'Almyrah', 'broken', '03.02.2012', 'ravi'),
('UJ/COMPSC/401/LE/01/003', 'Accounting Machine', 'broken', '03.02.2012', 'bala'),
('UJ/COMPSC/410/F/06/001', 'Bucket', 'broken', '03.02.2012', 'mala');

-- --------------------------------------------------------

--
-- Table structure for table `sta`
--

CREATE TABLE IF NOT EXISTS `sta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` text NOT NULL,
  `date` text NOT NULL,
  `no` int(11) NOT NULL,
  `action` text NOT NULL,
  `balance` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sta`
--

INSERT INTO `sta` (`id`, `item`, `date`, `no`, `action`, `balance`) VALUES
(1, 'Pen', '01/02/2012', 4, 'received', 4),
(2, 'Pen', '02/02/2012', 5, 'received', 9),
(3, 'Pencil', '02/03/2012', 5, 'received', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `ulevel` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `username`, `password`, `ulevel`) VALUES
(1, 'Maheswaran', 'Nitharsan', 'mnitharsan@yahoo.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Mahes', 'Nithar', 'mnitharsan25@gmail.com', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
