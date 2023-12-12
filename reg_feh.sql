-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2023 at 09:11 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg_time`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `telPhone` varchar(45) NOT NULL,
  `emailAddress` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `firstName`, `lastName`, `telPhone`, `emailAddress`, `date`) VALUES
(5, 'ibrahim', 'kolawole', '0902896428', 'ibrahimkolawole564@gmail.com', '2024-08-12 11:14:54'),
(6, 'kola', 'wole', '09023212344', 'kenny@gmail.com', '2023-08-12 11:14:54'),
(7, 'aliyu', 'jaima', '0803899478', 'ali@gmail.com', '2023-12-05 08:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1');
