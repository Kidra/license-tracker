-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2012 at 05:52 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `defacto_license_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE IF NOT EXISTS `computers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `serial` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `serial`, `os`) VALUES
(1, 'CK8320KBXYL', 'Mac OS X Lion 10.7.3 (11D50)');

-- --------------------------------------------------------

--
-- Table structure for table `licenses`
--

CREATE TABLE IF NOT EXISTS `licenses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `license_key_id` int(10) unsigned DEFAULT NULL,
  `computer_id` int(10) unsigned DEFAULT NULL,
  `date_installed` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `license_license_keys` (`license_key_id`),
  KEY `license_computers` (`computer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `licenses`
--


-- --------------------------------------------------------

--
-- Table structure for table `license_keys`
--

CREATE TABLE IF NOT EXISTS `license_keys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `software_version_id` int(10) unsigned DEFAULT NULL,
  `date_purchased` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `license` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `license_keys_software_versions` (`software_version_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `license_keys`
--


-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE IF NOT EXISTS `manufacturers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`) VALUES
(1, 'Adobe');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `manufacturer_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `software_manufacturers` (`manufacturer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `software`
--


-- --------------------------------------------------------

--
-- Table structure for table `software_versions`
--

CREATE TABLE IF NOT EXISTS `software_versions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `software_id` int(10) unsigned DEFAULT NULL,
  `version` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `software_versions_software` (`software_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `software_versions`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `computer_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_computers` (`computer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `computer_id`) VALUES
(1, 'Nathan Edwards', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `licenses`
--
ALTER TABLE `licenses`
  ADD CONSTRAINT `license_computers` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `license_license_keys` FOREIGN KEY (`license_key_id`) REFERENCES `license_keys` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `license_keys`
--
ALTER TABLE `license_keys`
  ADD CONSTRAINT `license_keys_software_versions` FOREIGN KEY (`software_version_id`) REFERENCES `software_versions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `software_manufacturers` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `software_versions`
--
ALTER TABLE `software_versions`
  ADD CONSTRAINT `software_versions_software` FOREIGN KEY (`software_id`) REFERENCES `software` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_computers` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
