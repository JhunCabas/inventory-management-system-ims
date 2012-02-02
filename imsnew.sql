-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2012 at 03:42 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imsnew`
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
(1, 'Pen', '28/01/2012', 5, 'add', 5),
(2, 'Pen', '28/01/2012', 2, 'issue', 3),
(3, 'Note book', '29/01/2012', 4, 'add', 4),
(4, 'Note book', '29/01/2012', 2, 'issue', 2),
(5, 'Pen', '29/01/2012', 4, 'add', 7),
(6, 'Pen', '29/01/2012', 4, 'add', 11),
(7, 'Pen', '29/01/2012', 2, 'add', 13),
(8, 'Pencil', '29/01/2012', 4, 'add', 4),
(9, 'Pencil', '29/01/2012', 2, 'add', 6),
(10, 'Photo Copy Paper', '03/02/2012', 3, 'add', 3);

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
('Chair(Arm)', 'UJ/COMPSC/418/F/04/002', '04', '01/02/2012', 'Nitharsan', '1000', 'tharsan', 'cair'),
('Chair(Reclining)', 'UJ/COMPSC/421/F/04/001', '04', '03/02/2012', 'nitha', '500', 'tharsan', 'c'),
('Chair(Reclining)', 'UJ/COMPSC/421/F/04/002', '04', '03/02/2012', 'nitha', '500', 'tharsan', 'c'),
('Chair(Reclining)', 'UJ/COMPSC/421/F/04/003', '04', '03/02/2012', 'nitha', '500', 'tharsan', 'c'),
('Chair(Reclining)', 'UJ/COMPSC/421/F/04/004', '04', '03/02/2012', 'nitha', '500', 'tharsan', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `invencode`
--

CREATE TABLE IF NOT EXISTS `invencode` (
  `articles` text NOT NULL,
  `code` varchar(3) NOT NULL,
  `fno` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invencode`
--


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
('Air Conditioner', 'UJ/COMPSC/402/LE/02/003', '02', '03/02/2012', 'nitha', '50000', 'tharsan', 'cool');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `loantaken`
--

INSERT INTO `loantaken` (`loan_id`, `article`, `id`, `issued_dept`, `received_date`, `received_by`, `status`, `return_date`, `remarks`) VALUES
(1, 'projecter', 'gffhfhfhfhf0', 'phy', '12/2/2012', 'fghghf', '0', '25/2/2012', 'fddgdfgdfgd'),
(2, 'pen', 'fgdfdf', 'che', '1/2/2011', 'fgj', '1', '5/2/2011', 'ddsfgsdfg'),
(3, 'pencil', 'fgdf', 'fgdf', 'fgdfg', 'dfgdfgdfg', '0', 'gdfgdf', ''),
(4, 'fgdg', 'dfgdf', 'gdfgd', 'gdfg', 'dgdg', '1', 'dfgdfg', ''),
(5, 'fdgd123456', 'fgdf12', 'gdfgfdoo', 'dfgdfg444444444444', 'dgdfgwwwwwwwww', '1', 'dfgfdgd888888888', 'ASsASasASsllllllllll'),
(6, 'gfh', 'sj', 'jsfj', 'fgjsdfgj', 'sgdjgj', '0', 'sfjgj', 'fgj'),
(7, 'gfh', 'sj', 'jsfj', 'fgjsdfgj', 'sgdjgj', '0', 'sfjgj', 'fgj'),
(8, 'gfh', 'sj', 'jsfj', 'fgjsdfgj', 'sgdjgj', '0', 'sfjgj', 'fgj'),
(9, 'gfh', 'sj', 'jsfj', 'fgjsdfgj', 'sgdjgj', '0', 'sfjgj', 'fgj'),
(10, 'mmmmmm', 'sj', 'jsfj', 'fgjsdfgj', 'sgdjgj', '0', 'sfjgj', 'fgj'),
(11, 'nnn', 'sgjdsdj', 'afdh', 'gjsaj', 'adjgf', '1', 'dj', 'adjfd'),
(12, 'aaaa', 'wyhsy', 'eru', 'gg', 'gkgkj', '0', 'gkj', 'gkjg\r\n');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mai`
--

INSERT INTO `mai` (`id`, `item`, `date`, `no`, `action`, `balance`) VALUES
(1, 'Bulb', '02/02/2012', 5, 'add', 5),
(3, 'Bulb', '02/02/2012', 5, 'add', 10),
(4, 'Chalk', '03/02/2012', 2, 'add', 2);

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
('Chair(Dining)', 'UJ/COMPSC/419/OE/04/002', '04', '31/01/2012', 'tharsan', '1000', 'nitharsan', 'chair'),
('Calculaters', 'UJ/COMPSC/417/OE/10/001', '10', '03/02/2012', 'tharsan', '500', 'nithar', 'maths'),
('Calculaters', 'UJ/COMPSC/417/OE/10/002', '10', '03/02/2012', 'tharsan', '500', 'nithar', 'maths'),
('Calculaters', 'UJ/COMPSC/417/OE/10/003', '10', '03/02/2012', 'tharsan', '500', 'nithar', 'maths'),
('Calculaters', 'UJ/COMPSC/417/OE/10/004', '10', '03/02/2012', 'tharsan', '500', 'nithar', 'maths'),
('Calculaters', 'UJ/COMPSC/417/OE/10/005', '10', '03/02/2012', 'tharsan', '500', 'nithar', 'maths');

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
(1, 'Pen', '01/02/2012', 4, 'add', 4),
(2, 'Pen', '02/02/2012', 5, 'add', 9),
(3, 'Stapler pin', '03/02/2012', 4, 'add', 4);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `username`, `password`, `ulevel`) VALUES
(1, 'Maheswaran', 'Nitharsan', 'mnitharsan@yahoo.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'Maheswaran', 'Nitharsan', 'mnitharsan@yahoo.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
