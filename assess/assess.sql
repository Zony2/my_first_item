/*
Navicat MySQL Data Transfer

Source Server         : assess
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : assess

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-03-14 11:40:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `classify`
-- ----------------------------
DROP TABLE IF EXISTS `classify`;
CREATE TABLE `classify` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calss` varchar(50) NOT NULL,
  `bianhao` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of classify
-- ----------------------------
INSERT INTO `classify` VALUES ('1', '蔬菜', '1');
INSERT INTO `classify` VALUES ('2', '水果', '2');
INSERT INTO `classify` VALUES ('3', '电子', '3');
INSERT INTO `classify` VALUES ('4', '服饰', '4');

-- ----------------------------
-- Table structure for `commodity`
-- ----------------------------
DROP TABLE IF EXISTS `commodity`;
CREATE TABLE `commodity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `postage` varchar(50) NOT NULL,
  `putaway` enum('上架','下架') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of commodity
-- ----------------------------
INSERT INTO `commodity` VALUES ('1', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('2', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('3', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('4', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('5', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('6', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('7', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('8', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '下架');
INSERT INTO `commodity` VALUES ('9', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '下架');
INSERT INTO `commodity` VALUES ('10', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('11', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('12', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('13', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('14', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('15', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('16', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('17', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('18', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('19', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('20', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('21', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('22', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('23', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('24', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('25', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('26', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('27', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('28', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('29', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('30', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('31', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('32', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('33', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('34', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('35', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('36', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('37', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('38', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('39', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('40', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('41', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('42', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('43', './public/images/15524643469649.jpg', '猕猴桃', '500￥', '500￥', '上架');
INSERT INTO `commodity` VALUES ('44', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('45', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('46', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('47', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('48', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('49', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('50', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('51', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('52', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '下架');
INSERT INTO `commodity` VALUES ('53', './public/images/list_033.jpg', '唐僧肉', '200￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('54', './public/images/list_033.jpg', '舍利子', '300￥', '100￥', '上架');
INSERT INTO `commodity` VALUES ('55', './public/images/list_033.jpg', '人生果', '100￥', '100￥', '下架');
INSERT INTO `commodity` VALUES ('56', './public/images/15524689496491.jpg', '唐僧肉', '200￥', '100￥', '下架');
INSERT INTO `commodity` VALUES ('57', './public/images/15524692238141.jpg', '舍利子', '300￥', '100￥', '下架');
INSERT INTO `commodity` VALUES ('59', './public/images/15524691632851.jpg', '唐僧肉', '200￥', '100￥', '下架');
INSERT INTO `commodity` VALUES ('62', './public/images/15524692163988.jpg', '张三', '500￥', '500￥', '下架');
INSERT INTO `commodity` VALUES ('63', './public/images/15524711015064.jpg', '张三', '500￥', '500￥', '下架');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '老大', '123');
INSERT INTO `user` VALUES ('2', '老二', '123');
INSERT INTO `user` VALUES ('3', '老三', '123');
INSERT INTO `user` VALUES ('4', '老四', '123');
INSERT INTO `user` VALUES ('5', '小弟', '123');
