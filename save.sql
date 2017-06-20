/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : liuyansave

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-06-21 00:07:44
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `save`
-- ----------------------------
DROP TABLE IF EXISTS `save`;
CREATE TABLE `save` (
  `intime` int(255) NOT NULL DEFAULT '0',
  `content` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of save
-- ----------------------------
INSERT INTO `save` VALUES ('1497974724', '			\r\n		çˆ±åƒvå¤§æ˜¯', 'æ™“è™Ž', '77');
INSERT INTO `save` VALUES ('1497973191', '			\r\n		ssssssssssss', 'ssssssssssssssssss', '73');
INSERT INTO `save` VALUES ('1497974025', '			\r\n		asscds', 'axsa', '75');
INSERT INTO `save` VALUES ('1497974716', '			\r\n		svdsds', 'sdcsd', '76');
INSERT INTO `save` VALUES ('1497974017', '			\r\n	asas	', 'asca', '74');
