-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2013 at 12:12 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cakephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `user_id` int(6) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `display_name` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` int(1) NOT NULL,
  `address_1` text NOT NULL,
  `address_2` text NOT NULL,
  `country` varchar(30) NOT NULL,
  `security_question_1` varchar(50) NOT NULL,
  `security_answer_1` varchar(20) NOT NULL,
  `security_question_2` varchar(50) NOT NULL,
  `security_answer_2` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `display_name`, `date_of_birth`, `gender`, `address_1`, `address_2`, `country`, `security_question_1`, `security_answer_1`, `security_question_2`, `security_answer_2`, `created`, `modified`) VALUES
(1, 1, 'Shaharia', 'Azam', 'shaharia', '2013-09-18', 1, 'test address one', 'Test address two', 'Bangladesh', 'What is your pet name?', 'tiger', 'what is your favorite actor', 'Van Diesel', '2013-09-16 15:32:28', '2013-09-16 15:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='default password = 123456' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `created`, `modified`) VALUES
(1, 'testone', 'b9034f4b561bcbe85cb340881043912c59dface3', 0, '2013-09-16 15:32:28', '2013-09-16 15:32:28');