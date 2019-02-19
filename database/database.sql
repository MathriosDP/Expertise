/*
 Navicat MySQL Data Transfer

 Source Server         : local 
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : site

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 18/02/2019 21:05:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cadastro
-- ----------------------------
DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE `cadastro`  (
  `nomecompleto` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nomeusuario` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `senha` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `usuarioID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`usuarioID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci;

-- ----------------------------
-- Records of cadastro
-- ----------------------------
BEGIN;
INSERT INTO `cadastro` VALUES ('MATHEUS RIOS DE PAULA', 'matheus.rios.paula27@gmail.com', 'Math', 'Rios', 1), ('MATHEUS RIOS DE PAULA', 'matheus.rios.paula27@gmail.com', 'Math', 'rios', 2), ('', '', 'Math', 'rios', 3);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
