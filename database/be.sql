-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 03:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE `calendar_events` (
  `user_id` varchar(15) NOT NULL,
  `event_id` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `summary` text NOT NULL,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`user_id`, `event_id`, `description`, `summary`, `start_date`, `end_date`, `status`) VALUES
('1590340900', '159034097221', '1.use c++ \n2.make use of loop \n3. Take integer input from use\r\n', 'Question: Write a c++ program to find whether a program is prime or\r\n', '20200128', '20200128', 'snoozed'),
('1590340900', '159034097237', 'Each question has 10 marks https://classroom.google.com/c/NTAzN\r\n', 'Assignment: Assessment test\r\n', '20200128', '20200128', 'completed'),
('1589761482', '159054313821', '1.use c++ \n2.make use of loop \n3. Take integer input from use\r\n', 'Question: Write a c++ program to find whether a program is prime or\r\n', '20200128', '20200128', ' '),
('1589761482', '159054313837', 'Each question has 10 marks https://classroom.google.com/c/NTAzN\r\n', 'Assignment: Assessment test\r\n', '20200128', '20200128', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `fitness_attributes`
--

CREATE TABLE `fitness_attributes` (
  `user_id` varchar(15) NOT NULL,
  `file_name` text NOT NULL,
  `start_time` text NOT NULL,
  `end_time` text NOT NULL,
  `calories` float NOT NULL,
  `distance` float NOT NULL,
  `avg_speed` float NOT NULL,
  `steps` float NOT NULL,
  `minutes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitness_attributes`
--

INSERT INTO `fitness_attributes` (`user_id`, `file_name`, `start_time`, `end_time`, `calories`, `distance`, `avg_speed`, `steps`, `minutes`) VALUES
('1589761482', '15904547001.csv', '00:00:00.000+05:30', '00:15:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '00:15:00.000+05:30', '00:30:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '00:30:00.000+05:30', '00:45:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '00:45:00.000+05:30', '01:00:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '01:00:00.000+05:30', '01:15:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '01:15:00.000+05:30', '01:30:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '01:30:00.000+05:30', '01:45:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '01:45:00.000+05:30', '02:00:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '02:00:00.000+05:30', '02:15:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '02:15:00.000+05:30', '02:30:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '02:30:00.000+05:30', '02:45:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '02:45:00.000+05:30', '03:00:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '03:00:00.000+05:30', '03:15:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '03:15:00.000+05:30', '03:30:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '03:30:00.000+05:30', '03:45:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '03:45:00.000+05:30', '04:00:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '04:00:00.000+05:30', '04:15:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '04:15:00.000+05:30', '04:30:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '04:30:00.000+05:30', '04:45:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '04:45:00.000+05:30', '05:00:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '05:00:00.000+05:30', '05:15:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '05:15:00.000+05:30', '05:30:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '05:30:00.000+05:30', '05:45:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '05:45:00.000+05:30', '06:00:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '06:00:00.000+05:30', '06:15:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '06:15:00.000+05:30', '06:30:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '06:30:00.000+05:30', '06:45:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '06:45:00.000+05:30', '07:00:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '07:00:00.000+05:30', '07:15:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '07:15:00.000+05:30', '07:30:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '07:30:00.000+05:30', '07:45:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '07:45:00.000+05:30', '08:00:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '08:00:00.000+05:30', '08:15:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '08:15:00.000+05:30', '08:30:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '08:30:00.000+05:30', '08:45:00.000+05:30', 0, 0, 0, 2, 0),
('1589761482', '15904547001.csv', '08:45:00.000+05:30', '09:00:00.000+05:30', 18.4933, 103.2, 0.43, 176, 4),
('1589761482', '15904547001.csv', '09:00:00.000+05:30', '09:15:00.000+05:30', 4.62333, 25.8, 0, 44, 1),
('1589761482', '15904547001.csv', '09:15:00.000+05:30', '09:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '09:30:00.000+05:30', '09:45:00.000+05:30', 0, 0, 0, 246, 0),
('1589761482', '15904547001.csv', '09:45:00.000+05:30', '10:00:00.000+05:30', 0, 0, 0, 284, 0),
('1589761482', '15904547001.csv', '10:00:00.000+05:30', '10:15:00.000+05:30', 0, 0, 0, 284, 0),
('1589761482', '15904547001.csv', '10:15:00.000+05:30', '10:30:00.000+05:30', 0, 0, 0, 227, 0),
('1589761482', '15904547001.csv', '10:30:00.000+05:30', '10:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '10:45:00.000+05:30', '11:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '11:00:00.000+05:30', '11:15:00.000+05:30', 0, 0, 0, 86, 0),
('1589761482', '15904547001.csv', '11:15:00.000+05:30', '11:30:00.000+05:30', 0, 0, 0, 86, 0),
('1589761482', '15904547001.csv', '11:30:00.000+05:30', '11:45:00.000+05:30', 0, 0, 0, 86, 0),
('1589761482', '15904547001.csv', '11:45:00.000+05:30', '12:00:00.000+05:30', 0, 0, 0, 86, 0),
('1589761482', '15904547001.csv', '12:00:00.000+05:30', '12:15:00.000+05:30', 0, 0, 0, 86, 0),
('1589761482', '15904547001.csv', '12:15:00.000+05:30', '12:30:00.000+05:30', 0, 0, 0, 86, 0),
('1589761482', '15904547001.csv', '12:30:00.000+05:30', '12:45:00.000+05:30', 0, 0, 0, 16, 0),
('1589761482', '15904547001.csv', '12:45:00.000+05:30', '13:00:00.000+05:30', 0, 0, 0, 40, 0),
('1589761482', '15904547001.csv', '13:00:00.000+05:30', '13:15:00.000+05:30', 0, 0, 0, 13, 0),
('1589761482', '15904547001.csv', '13:15:00.000+05:30', '13:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '13:30:00.000+05:30', '13:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '13:45:00.000+05:30', '14:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '14:00:00.000+05:30', '14:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '14:15:00.000+05:30', '14:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '14:30:00.000+05:30', '14:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '14:45:00.000+05:30', '15:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '15:00:00.000+05:30', '15:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '15:15:00.000+05:30', '15:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '15:30:00.000+05:30', '15:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '15:45:00.000+05:30', '16:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '16:00:00.000+05:30', '16:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '16:15:00.000+05:30', '16:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '16:30:00.000+05:30', '16:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '16:45:00.000+05:30', '17:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '17:00:00.000+05:30', '17:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '17:15:00.000+05:30', '17:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '17:30:00.000+05:30', '17:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '17:45:00.000+05:30', '18:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '18:00:00.000+05:30', '18:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '18:15:00.000+05:30', '18:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '18:30:00.000+05:30', '18:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '18:45:00.000+05:30', '19:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '19:00:00.000+05:30', '19:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '19:15:00.000+05:30', '19:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '19:30:00.000+05:30', '19:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '19:45:00.000+05:30', '20:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '20:00:00.000+05:30', '20:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '20:15:00.000+05:30', '20:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '20:30:00.000+05:30', '20:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '20:45:00.000+05:30', '21:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '21:00:00.000+05:30', '21:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '21:15:00.000+05:30', '21:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '21:30:00.000+05:30', '21:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '21:45:00.000+05:30', '22:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '22:00:00.000+05:30', '22:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '22:15:00.000+05:30', '22:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '22:30:00.000+05:30', '22:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '22:45:00.000+05:30', '23:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '23:00:00.000+05:30', '23:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '23:15:00.000+05:30', '23:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '23:30:00.000+05:30', '23:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547001.csv', '23:45:00.000+05:30', '00:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '00:00:00.000+05:30', '00:15:00.000+05:30', 0, 1.93521, 0, 3, 0),
('1589761482', '15904547002.csv', '00:15:00.000+05:30', '00:30:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '00:30:00.000+05:30', '00:45:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '00:45:00.000+05:30', '01:00:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '01:00:00.000+05:30', '01:15:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '01:15:00.000+05:30', '01:30:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '01:30:00.000+05:30', '01:45:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '01:45:00.000+05:30', '02:00:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '02:00:00.000+05:30', '02:15:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '02:15:00.000+05:30', '02:30:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '02:30:00.000+05:30', '02:45:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '02:45:00.000+05:30', '03:00:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '03:00:00.000+05:30', '03:15:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '03:15:00.000+05:30', '03:30:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '03:30:00.000+05:30', '03:45:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '03:45:00.000+05:30', '04:00:00.000+05:30', 0, 2.07343, 0.00230382, 3, 0),
('1589761482', '15904547002.csv', '04:00:00.000+05:30', '04:15:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '04:15:00.000+05:30', '04:30:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '04:30:00.000+05:30', '04:45:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '04:45:00.000+05:30', '05:00:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '05:00:00.000+05:30', '05:15:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '05:15:00.000+05:30', '05:30:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '05:30:00.000+05:30', '05:45:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '05:45:00.000+05:30', '06:00:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '06:00:00.000+05:30', '06:15:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '06:15:00.000+05:30', '06:30:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '06:30:00.000+05:30', '06:45:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '06:45:00.000+05:30', '07:00:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '07:00:00.000+05:30', '07:15:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '07:15:00.000+05:30', '07:30:00.000+05:30', 0, 2.07343, 0, 3, 0),
('1589761482', '15904547002.csv', '07:30:00.000+05:30', '07:45:00.000+05:30', 0, 1.93521, 0, 3, 0),
('1589761482', '15904547002.csv', '07:45:00.000+05:30', '08:00:00.000+05:30', 32.3633, 152, 0.1875, 257, 0),
('1589761482', '15904547002.csv', '08:00:00.000+05:30', '08:15:00.000+05:30', 69.35, 578.333, 0, 904, 15),
('1589761482', '15904547002.csv', '08:15:00.000+05:30', '08:30:00.000+05:30', 69.35, 578.333, 0.642593, 904, 15),
('1589761482', '15904547002.csv', '08:30:00.000+05:30', '08:45:00.000+05:30', 69.35, 578.333, 0, 904, 15),
('1589761482', '15904547002.csv', '08:45:00.000+05:30', '09:00:00.000+05:30', 41.61, 347.339, 0, 544, 9),
('1589761482', '15904547002.csv', '09:00:00.000+05:30', '09:15:00.000+05:30', 0, 1.01695, 0, 2, 0),
('1589761482', '15904547002.csv', '09:15:00.000+05:30', '09:30:00.000+05:30', 0, 1.01695, 0.00112994, 2, 0),
('1589761482', '15904547002.csv', '09:30:00.000+05:30', '09:45:00.000+05:30', 0, 1.01695, 0, 2, 0),
('1589761482', '15904547002.csv', '09:45:00.000+05:30', '10:00:00.000+05:30', 23.1167, 60.6102, 0, 101, 0),
('1589761482', '15904547002.csv', '10:00:00.000+05:30', '10:15:00.000+05:30', 64.7267, 292.2, 0.2, 459, 3),
('1589761482', '15904547002.csv', '10:15:00.000+05:30', '10:30:00.000+05:30', 32.3633, 373.8, 0.89, 561, 7),
('1589761482', '15904547002.csv', '10:30:00.000+05:30', '10:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '10:45:00.000+05:30', '11:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '11:00:00.000+05:30', '11:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '11:15:00.000+05:30', '11:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '11:30:00.000+05:30', '11:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '11:45:00.000+05:30', '12:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '12:00:00.000+05:30', '12:15:00.000+05:30', 27.74, 242.5, 0, 403, 6),
('1589761482', '15904547002.csv', '12:15:00.000+05:30', '12:30:00.000+05:30', 27.74, 242.5, 0.336806, 403, 6),
('1589761482', '15904547002.csv', '12:30:00.000+05:30', '12:45:00.000+05:30', 32.3633, 279.85, 0.661905, 471, 7),
('1589761482', '15904547002.csv', '12:45:00.000+05:30', '13:00:00.000+05:30', 0, 13.8776, 0, 23, 0),
('1589761482', '15904547002.csv', '13:00:00.000+05:30', '13:15:00.000+05:30', 0, 13.8776, 0, 23, 0),
('1589761482', '15904547002.csv', '13:15:00.000+05:30', '13:30:00.000+05:30', 0, 13.8776, 0, 23, 0),
('1589761482', '15904547002.csv', '13:30:00.000+05:30', '13:45:00.000+05:30', 0, 13.8776, 0, 23, 0),
('1589761482', '15904547002.csv', '13:45:00.000+05:30', '14:00:00.000+05:30', 0, 13.8776, 0.0154195, 23, 0),
('1589761482', '15904547002.csv', '14:00:00.000+05:30', '14:15:00.000+05:30', 0, 13.8776, 0, 23, 0),
('1589761482', '15904547002.csv', '14:15:00.000+05:30', '14:30:00.000+05:30', 0, 13.8776, 0, 23, 0),
('1589761482', '15904547002.csv', '14:30:00.000+05:30', '14:45:00.000+05:30', 0, 13.8776, 0, 23, 0),
('1589761482', '15904547002.csv', '14:45:00.000+05:30', '15:00:00.000+05:30', 0, 13.8776, 0, 23, 0),
('1589761482', '15904547002.csv', '15:00:00.000+05:30', '15:15:00.000+05:30', 18.4933, 218.852, 0.873333, 360, 4),
('1589761482', '15904547002.csv', '15:15:00.000+05:30', '15:30:00.000+05:30', 27.74, 332.257, 0.463095, 533, 6),
('1589761482', '15904547002.csv', '15:30:00.000+05:30', '15:45:00.000+05:30', 9.24667, 109.143, 0, 173, 2),
('1589761482', '15904547002.csv', '15:45:00.000+05:30', '16:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '16:00:00.000+05:30', '16:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '16:15:00.000+05:30', '16:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '16:30:00.000+05:30', '16:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '16:45:00.000+05:30', '17:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '17:00:00.000+05:30', '17:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '17:15:00.000+05:30', '17:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '17:30:00.000+05:30', '17:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '17:45:00.000+05:30', '18:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '18:00:00.000+05:30', '18:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '18:15:00.000+05:30', '18:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '18:30:00.000+05:30', '18:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '18:45:00.000+05:30', '19:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '19:00:00.000+05:30', '19:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '19:15:00.000+05:30', '19:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '19:30:00.000+05:30', '19:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '19:45:00.000+05:30', '20:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '20:00:00.000+05:30', '20:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '20:15:00.000+05:30', '20:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '20:30:00.000+05:30', '20:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '20:45:00.000+05:30', '21:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '21:00:00.000+05:30', '21:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '21:15:00.000+05:30', '21:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '21:30:00.000+05:30', '21:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '21:45:00.000+05:30', '22:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '22:00:00.000+05:30', '22:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '22:15:00.000+05:30', '22:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '22:30:00.000+05:30', '22:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '22:45:00.000+05:30', '23:00:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '23:00:00.000+05:30', '23:15:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '23:15:00.000+05:30', '23:30:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '23:30:00.000+05:30', '23:45:00.000+05:30', 0, 0, 0, 0, 0),
('1589761482', '15904547002.csv', '23:45:00.000+05:30', '00:00:00.000+05:30', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `handwriting_attributes`
--

CREATE TABLE `handwriting_attributes` (
  `user_id` varchar(15) NOT NULL,
  `file_name` text NOT NULL,
  `attribute_name` text NOT NULL,
  `attribute_meaning` text NOT NULL,
  `match_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `module_1`
--

CREATE TABLE `module_1` (
  `user_id` varchar(15) NOT NULL,
  `extraversion` text NOT NULL,
  `agreebleness` text NOT NULL,
  `conscientiousness` text NOT NULL,
  `neuroticism` text NOT NULL,
  `openness` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_1`
--

INSERT INTO `module_1` (`user_id`, `extraversion`, `agreebleness`, `conscientiousness`, `neuroticism`, `openness`) VALUES
('1589761482', 'B', 'A', 'A', 'A', 'A'),
('1590340900', 'A', 'A', 'A', 'A', 'B'),
('1590456820', 'A', 'A', 'A', 'B', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `module_2`
--

CREATE TABLE `module_2` (
  `user_id` varchar(15) NOT NULL,
  `total_tasks` int(11) NOT NULL,
  `completed_tasks` int(11) NOT NULL,
  `snoozed_tasks` int(11) NOT NULL,
  `efficiency` float NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_2`
--

INSERT INTO `module_2` (`user_id`, `total_tasks`, `completed_tasks`, `snoozed_tasks`, `efficiency`, `file`) VALUES
('1589761482', 2, 0, 0, 0, '1590543138.ics'),
('1590340900', 2, 5, 1, 83.3333, '1590340972.ics');

-- --------------------------------------------------------

--
-- Table structure for table `module_3`
--

CREATE TABLE `module_3` (
  `user_id` varchar(15) NOT NULL,
  `file_1` text NOT NULL,
  `file_2` text NOT NULL,
  `distance_1` float NOT NULL,
  `distance_2` float NOT NULL,
  `avg_speed_1` float NOT NULL,
  `avg_speed_2` float NOT NULL,
  `steps_1` float NOT NULL,
  `steps_2` float NOT NULL,
  `minutes_1` float NOT NULL,
  `minutes_2` float NOT NULL,
  `calories_1` float NOT NULL,
  `calories_2` float NOT NULL,
  `peak_1` text NOT NULL,
  `peak_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_3`
--

INSERT INTO `module_3` (`user_id`, `file_1`, `file_2`, `distance_1`, `distance_2`, `avg_speed_1`, `avg_speed_2`, `steps_1`, `steps_2`, `minutes_1`, `minutes_2`, `calories_1`, `calories_2`, `peak_1`, `peak_2`) VALUES
('1589761482', '15904547001.csv', '15904547002.csv', 129, 4578, 0.43, 0.89, 1916, 7283, 5, 95, 23.1167, 545.553, '09:45:00   to  10:00:00 </br>10:00:00   to  10:15:00 </br>09:30:00   to  09:45:00 </br>10:15:00   to  10:30:00 </br>', '08:00:00   to  08:15:00 </br>08:15:00   to  08:30:00 </br>08:30:00   to  08:45:00 </br>10:15:00   to  10:30:00 </br>');

-- --------------------------------------------------------

--
-- Table structure for table `module_4`
--

CREATE TABLE `module_4` (
  `user_id` varchar(15) NOT NULL,
  `file` text NOT NULL,
  `top1` text NOT NULL,
  `top2` text NOT NULL,
  `top3` text NOT NULL,
  `top4` text NOT NULL,
  `top5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` varchar(20) NOT NULL,
  `user_name` text NOT NULL,
  `user_email_id` text NOT NULL,
  `user_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email_id`, `user_password`) VALUES
('1589761482', 'Yogesh Ranode', 'ranode.yogesh@gmail.com', 'abcd'),
('1590340900', 'New person', 'newperson@gmail.com', 'abcd'),
('1590456820', 'Amol Patil', 'ap9112126561@gmail.com', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `module_1`
--
ALTER TABLE `module_1`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `module_2`
--
ALTER TABLE `module_2`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `module_3`
--
ALTER TABLE `module_3`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `module_4`
--
ALTER TABLE `module_4`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;