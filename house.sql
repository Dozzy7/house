/*
Navicat MySQL Data Transfer

Source Server         : APP
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : house

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-06-21 06:38:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ausername` varchar(20) NOT NULL,
  `apassword` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin');

-- ----------------------------
-- Table structure for agents
-- ----------------------------
DROP TABLE IF EXISTS `agents`;
CREATE TABLE `agents` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `contact` int(12) NOT NULL,
  `apassword` char(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agents
-- ----------------------------
INSERT INTO `agents` VALUES ('2', 'pea', 'Pea', 'Ngesheya', '1884167103', '12345', 'pea@yahoo.com');

-- ----------------------------
-- Table structure for agent_houses
-- ----------------------------
DROP TABLE IF EXISTS `agent_houses`;
CREATE TABLE `agent_houses` (
  `agentID` int(11) NOT NULL,
  `houseID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of agent_houses
-- ----------------------------

-- ----------------------------
-- Table structure for appoinments
-- ----------------------------
DROP TABLE IF EXISTS `appoinments`;
CREATE TABLE `appoinments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `houseID` int(11) NOT NULL,
  `choosen_date` date NOT NULL,
  `choosen_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of appoinments
-- ----------------------------

-- ----------------------------
-- Table structure for buyers
-- ----------------------------
DROP TABLE IF EXISTS `buyers`;
CREATE TABLE `buyers` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `contact` int(12) NOT NULL,
  `upassword` char(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buyers
-- ----------------------------
INSERT INTO `buyers` VALUES ('2', 'pea', 'Pea ', 'Ngesheya', '1884167103', '12345', 'pea@yahoo.com');

-- ----------------------------
-- Table structure for buyer_favorites
-- ----------------------------
DROP TABLE IF EXISTS `buyer_favorites`;
CREATE TABLE `buyer_favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `houseID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buyer_favorites
-- ----------------------------

-- ----------------------------
-- Table structure for houses
-- ----------------------------
DROP TABLE IF EXISTS `houses`;
CREATE TABLE `houses` (
  `houseID` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `price` double NOT NULL,
  `rooms` int(11) NOT NULL,
  `listing` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`houseID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of houses
-- ----------------------------

-- ----------------------------
-- Table structure for house_images
-- ----------------------------
DROP TABLE IF EXISTS `house_images`;
CREATE TABLE `house_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `houseID` int(11) NOT NULL,
  `image_name` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of house_images
-- ----------------------------
