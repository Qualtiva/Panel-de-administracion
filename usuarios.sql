/*
Navicat MySQL Data Transfer

Source Server         : Qualtiva
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : Panel_Administracion

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-12-18 13:39:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(30) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'administrador', 'administrador', 'd033e22ae348aeb5660fc2140aec35850c4da997');
INSERT INTO `usuarios` VALUES ('2', 'editor', 'editor', 'ab41949825606da179db7c89ddcedcc167b64847');
INSERT INTO `usuarios` VALUES ('3', 'suscriptor', 'suscriptor', '1a248d7a471ad8d5993aa523c8397ce1d0bafe78');
