-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 04, 2018 at 12:50 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_iservice`
-- 
CREATE DATABASE `db_iservice` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_iservice`;

-- --------------------------------------------------------

-- 
-- Table structure for table `device_types`
-- 

CREATE TABLE `device_types` (
  `id` int(11) NOT NULL auto_increment,
  `device_type_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `device_types`
-- 

INSERT INTO `device_types` VALUES (1, 'คอมพิวเตอร์');
INSERT INTO `device_types` VALUES (2, 'ปริ้นเตอร์');
INSERT INTO `device_types` VALUES (3, 'กล่องวงจรปิด');
INSERT INTO `device_types` VALUES (4, 'โปรแกรม');
INSERT INTO `device_types` VALUES (5, 'อุปกรณ์อื่นๆ');
INSERT INTO `device_types` VALUES (7, 'INSERT[EDIT]');

-- --------------------------------------------------------

-- 
-- Table structure for table `devices`
-- 

CREATE TABLE `devices` (
  `id` int(11) NOT NULL auto_increment,
  `device_type_id` int(11) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_brand_name` varchar(255) NOT NULL,
  `device_code` varchar(100) NOT NULL,
  `device_price` int(6) NOT NULL,
  `device_created_date` datetime NOT NULL,
  `device_buy_date` date NOT NULL,
  `device_garantee_expire_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `devices`
-- 

INSERT INTO `devices` VALUES (1, 1, 'CPU', 'INTEL', '101', 15230, '2018-05-04 11:22:42', '2018-05-01', '2018-05-31');
INSERT INTO `devices` VALUES (2, 1, 'GeForce GTX 1050 Ti', 'Nvidia', '102', 687500, '2018-05-04 11:43:25', '2018-05-09', '2018-05-30');

-- --------------------------------------------------------

-- 
-- Table structure for table `employees`
-- 

CREATE TABLE `employees` (
  `id` int(11) NOT NULL auto_increment,
  `employee_username` varchar(255) NOT NULL,
  `employee_password` varchar(255) NOT NULL,
  `employee_fname` varchar(100) NOT NULL,
  `employee_lname` varchar(100) NOT NULL,
  `employee_sex` enum('f','m') NOT NULL,
  `employee_code` varchar(20) NOT NULL,
  `employee_level` enum('admin','engineer','user','manager') NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_tel` varchar(50) NOT NULL,
  `employee_image` varchar(255) NOT NULL,
  `employee_created_date` datetime NOT NULL,
  `employee_status` enum('active','unactive','block') NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=89 ;

-- 
-- Dumping data for table `employees`
-- 

INSERT INTO `employees` VALUES (1, 'admin', '1234', 'Admin', 'System', 'f', 'eieizahahaplus', 'admin', 'abcdefghijk@email.lnwGod.ac.th', '0000000000', '', '2018-03-23 11:04:48', 'active', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `groups`
-- 

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `groups`
-- 

INSERT INTO `groups` VALUES (1, 'ผ่ายการตลาด', 101);
INSERT INTO `groups` VALUES (2, 'ผ่ายขาย', 102);
INSERT INTO `groups` VALUES (3, 'ผ่ายบัญชี', 103);
INSERT INTO `groups` VALUES (4, 'ผ่าย IT', 104);

-- --------------------------------------------------------

-- 
-- Table structure for table `project_types`
-- 

CREATE TABLE `project_types` (
  `id` int(11) NOT NULL auto_increment,
  `project_type_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `project_types`
-- 

INSERT INTO `project_types` VALUES (1, 'งานด้านเน็ตเวิร์ค2');
INSERT INTO `project_types` VALUES (2, 'งานเขียนโปรแกรม');
INSERT INTO `project_types` VALUES (3, 'งานกราฟฟิก และการออกแบบ');
INSERT INTO `project_types` VALUES (4, 'อื่นๆ');

-- --------------------------------------------------------

-- 
-- Table structure for table `repair_types`
-- 

CREATE TABLE `repair_types` (
  `id` int(11) NOT NULL auto_increment,
  `repair_type_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `repair_types`
-- 

INSERT INTO `repair_types` VALUES (1, 'ซ่อมเอง3');
INSERT INTO `repair_types` VALUES (2, 'ส่งซ่อมร้าน');
INSERT INTO `repair_types` VALUES (3, 'ส่งเคลม');
INSERT INTO `repair_types` VALUES (7, 'INSERT[EDIT]');

-- --------------------------------------------------------

-- 
-- Table structure for table `requests`
-- 

CREATE TABLE `requests` (
  `id` int(11) NOT NULL auto_increment,
  `employee_id` int(11) NOT NULL,
  `device_id` int(11) NOT NULL,
  `request_remark` varchar(255) NOT NULL,
  `request_problem` varchar(200) NOT NULL,
  `request_detail` text NOT NULL,
  `request_created_date` datetime NOT NULL,
  `request_start_repair_date` datetime NOT NULL,
  `request_end_repair_date` datetime NOT NULL,
  `request_get_date` datetime NOT NULL,
  `request_clame_date` datetime NOT NULL,
  `request_clame_remark` varchar(500) NOT NULL,
  `request_close_date` datetime NOT NULL,
  `engineer_id` int(11) NOT NULL,
  `requester_id` int(11) NOT NULL,
  `closer_id` int(11) NOT NULL,
  `request_repair_detail_work` text NOT NULL,
  `request_answer` text NOT NULL,
  `request_status` enum('wait','get','repair','forward','repair_o') NOT NULL,
  `request_end_remark` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `requests`
-- 

INSERT INTO `requests` VALUES (3, 1, 1, 'กกก', 'cpu พีง', 'ฟหกกก', '2018-05-04 11:23:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0, 0, 0, '', '', 'wait', '');
INSERT INTO `requests` VALUES (4, 1, 2, 'หมายเหตุ ไม่มีจ้าาาา', 'มันพังครับบบบบ', 'รายละเอียดมันก็พังงครับบบบบ', '2018-05-04 11:44:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0, 0, 0, '', '', 'wait', '');
