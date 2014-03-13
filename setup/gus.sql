-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2014 at 12:50 AM
-- Server version: 5.5.35
-- PHP Version: 5.4.25-1+sury.org~precise+2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gus`
--
DROP DATABASE `gus`;
CREATE DATABASE `gus` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gus`;

-- --------------------------------------------------------

--
-- Table structure for table `Can`
--

DROP TABLE IF EXISTS `Can`;
CREATE TABLE IF NOT EXISTS `Can` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `type` smallint(6) NOT NULL,
      `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=82 ;

    -- --------------------------------------------------------

--
-- Table structure for table `Client`
--

DROP TABLE IF EXISTS `Client`;
CREATE TABLE IF NOT EXISTS `Client` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `domain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

    -- --------------------------------------------------------

--
-- Table structure for table `Dlpcan`
--

DROP TABLE IF EXISTS `Dlpcan`;
CREATE TABLE IF NOT EXISTS `Dlpcan` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `can_id` int(11) DEFAULT NULL,
      `data` longtext COLLATE utf8_unicode_ci NOT NULL,
      PRIMARY KEY (`id`),
      KEY `IDX_8E8BB0C9D9091EB8` (`can_id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

    --
-- RELATIONS FOR TABLE `Dlpcan`:
--   `can_id`
--       `Can` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `Emailcan`
--

DROP TABLE IF EXISTS `Emailcan`;
CREATE TABLE IF NOT EXISTS `Emailcan` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `can_id` int(11) DEFAULT NULL,
      `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `body` longtext COLLATE utf8_unicode_ci NOT NULL,
      `attachment` longblob NOT NULL,
      PRIMARY KEY (`id`),
      KEY `IDX_5439DC7DD9091EB8` (`can_id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

    --
-- RELATIONS FOR TABLE `Emailcan`:
--   `can_id`
--       `Can` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `General`
--

DROP TABLE IF EXISTS `General`;
CREATE TABLE IF NOT EXISTS `General` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

    -- --------------------------------------------------------

--
-- Table structure for table `Ipaddress`
--

DROP TABLE IF EXISTS `Ipaddress`;
CREATE TABLE IF NOT EXISTS `Ipaddress` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `interface` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
      `address` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
      `netmask` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
      `broadcast` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `UNIQ_A84A809DD4E6F81` (`address`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

    -- --------------------------------------------------------

--
-- Table structure for table `Job`
--

DROP TABLE IF EXISTS `Job`;
CREATE TABLE IF NOT EXISTS `Job` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `type` smallint(6) NOT NULL,
      `schedule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=64 ;

    -- --------------------------------------------------------

--
-- Table structure for table `Jobcan`
--

DROP TABLE IF EXISTS `Jobcan`;
CREATE TABLE IF NOT EXISTS `Jobcan` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `job_id` int(11) NOT NULL,
      `can_id` int(11) NOT NULL,
      PRIMARY KEY (`id`),
      KEY `IDX_931347DD9091EB8` (`can_id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

    --
-- RELATIONS FOR TABLE `Jobcan`:
--   `can_id`
--       `Can` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `Webcan`
--

DROP TABLE IF EXISTS `Webcan`;
CREATE TABLE IF NOT EXISTS `Webcan` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `can_id` int(11) DEFAULT NULL,
      `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      PRIMARY KEY (`id`),
      KEY `IDX_FCC93D99D9091EB8` (`can_id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=75664 ;

    --
-- RELATIONS FOR TABLE `Webcan`:
--   `can_id`
--       `Can` -> `id`
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Dlpcan`
--
ALTER TABLE `Dlpcan`
  ADD CONSTRAINT `FK_8E8BB0C9D9091EB8` FOREIGN KEY (`can_id`) REFERENCES `Can` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `Emailcan`
--
ALTER TABLE `Emailcan`
  ADD CONSTRAINT `FK_5439DC7DD9091EB8` FOREIGN KEY (`can_id`) REFERENCES `Can` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `Jobcan`
--
ALTER TABLE `Jobcan`
  ADD CONSTRAINT `FK_931347DD9091EB8` FOREIGN KEY (`can_id`) REFERENCES `Can` (`id`);

--
-- Constraints for table `Webcan`
--
ALTER TABLE `Webcan`
  ADD CONSTRAINT `FK_FCC93D99D9091EB8` FOREIGN KEY (`can_id`) REFERENCES `Can` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

