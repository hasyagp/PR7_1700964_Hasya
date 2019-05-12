/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : localhost:3306
 Source Schema         : kereta_join

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 15/04/2019 22:43:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for gerbong
-- ----------------------------
DROP TABLE IF EXISTS `gerbong`;
CREATE TABLE `gerbong`  (
  `id_gerbong` int(11) NOT NULL AUTO_INCREMENT,
  `kd_gerbong` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_kereta` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_gerbong`) USING BTREE,
  INDEX `kd_gerbong`(`kd_gerbong`) USING BTREE,
  INDEX `fk_krt`(`kd_kereta`) USING BTREE,
  CONSTRAINT `fk_krt` FOREIGN KEY (`kd_kereta`) REFERENCES `lokomotif` (`kd_kereta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of gerbong
-- ----------------------------
INSERT INTO `gerbong` VALUES (1, 'GRB0001', 'KRT0002', 'A01');
INSERT INTO `gerbong` VALUES (2, 'GRB0002', 'KRT0002', 'B01');
INSERT INTO `gerbong` VALUES (3, 'GRB0003', 'KRT0003', 'C01');

-- ----------------------------
-- Table structure for kursi
-- ----------------------------
DROP TABLE IF EXISTS `kursi`;
CREATE TABLE `kursi`  (
  `id_kursi` int(11) NOT NULL AUTO_INCREMENT,
  `kd_kursi` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_gerbong` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kd_kereta` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_kursi`) USING BTREE,
  INDEX `fk_gerbong`(`kd_gerbong`) USING BTREE,
  INDEX `fk_kereta`(`kd_kereta`) USING BTREE,
  CONSTRAINT `fk_gerbong` FOREIGN KEY (`kd_gerbong`) REFERENCES `gerbong` (`kd_gerbong`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_kereta` FOREIGN KEY (`kd_kereta`) REFERENCES `lokomotif` (`kd_kereta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kursi
-- ----------------------------
INSERT INTO `kursi` VALUES (1, 'KRS0001', 'GRB0001', 'KRT0001');
INSERT INTO `kursi` VALUES (2, 'KRS0002', 'GRB0001', 'KRT0001');

-- ----------------------------
-- Table structure for lokomotif
-- ----------------------------
DROP TABLE IF EXISTS `lokomotif`;
CREATE TABLE `lokomotif`  (
  `id_lokomotif` int(11) NOT NULL AUTO_INCREMENT,
  `kd_kereta` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_lokomotif`) USING BTREE,
  INDEX `kd_kereta`(`kd_kereta`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of lokomotif
-- ----------------------------
INSERT INTO `lokomotif` VALUES (1, 'KRT0001', 'Argo Wilis');
INSERT INTO `lokomotif` VALUES (2, 'KRT0002', 'MALABAR');
INSERT INTO `lokomotif` VALUES (3, 'KRT0003', 'KURTOJOYO');

SET FOREIGN_KEY_CHECKS = 1;
