-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 27, 2018 at 01:06 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_iservice`
-- 

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `devices`
-- 


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
INSERT INTO `employees` VALUES (88, '', '', 'IT', '', 'm', '', 'user', '', '', '', '2018-04-27 11:47:32', 'active', 3);
INSERT INTO `employees` VALUES (87, '', '', '', '', 'm', '', 'user', '', '', '', '2018-04-27 11:43:21', 'active', 1);

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
