/*
Navicat MySQL Data Transfer

Source Server         : lbo
Source Server Version : 100108
Source Host           : localhost:3306
Source Database       : usersave

Target Server Type    : MYSQL
Target Server Version : 100108
File Encoding         : 65001

Date: 2017-06-20 19:02:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for save
-- ----------------------------
DROP TABLE IF EXISTS `save`;
CREATE TABLE `save` (
  `intime` int(255) NOT NULL DEFAULT '0',
  `content` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of save
-- ----------------------------
INSERT INTO `save` VALUES ('1497948996', '			\r\n		', '啊实打实的分公司', '68');
INSERT INTO `save` VALUES ('1497948992', '			\r\n		', '阿斯顿', '67');
INSERT INTO `save` VALUES ('1497948988', '			\r\n		', '啊是大富翁', '66');
INSERT INTO `save` VALUES ('1497948980', '   			\r\n		', '权威的大范围', '65');
INSERT INTO `save` VALUES ('1497948973', '			\r\n		   ', ' 啊大神', '64');
SET FOREIGN_KEY_CHECKS=1;
