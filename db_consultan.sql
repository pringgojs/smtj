-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2016 pada 16.21
-- Versi Server: 5.5.32
-- Versi PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_consultan`
--
CREATE DATABASE IF NOT EXISTS `db_consultan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_consultan`;

-- --------------------------------------------------------

--
-- Stand-in structure for view `files_attachement`
--
CREATE TABLE IF NOT EXISTS `files_attachement` (
`id_file` int(11)
,`nama` text
,`ukuran` varchar(15)
,`tanggal` datetime
,`link` varchar(100)
,`type` varchar(50)
,`trash` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `files_audio`
--
CREATE TABLE IF NOT EXISTS `files_audio` (
`id_file` int(11)
,`nama` text
,`ukuran` varchar(15)
,`tanggal` datetime
,`link` varchar(100)
,`type` varchar(50)
,`trash` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `files_img`
--
CREATE TABLE IF NOT EXISTS `files_img` (
`id_file` int(11)
,`nama` text
,`ukuran` varchar(15)
,`tanggal` datetime
,`link` varchar(100)
,`type` varchar(50)
,`trash` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `files_video`
--
CREATE TABLE IF NOT EXISTS `files_video` (
`id_file` int(11)
,`nama` text
,`ukuran` varchar(15)
,`tanggal` datetime
,`link` varchar(100)
,`type` varchar(50)
,`trash` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `max_file`
--
CREATE TABLE IF NOT EXISTS `max_file` (
`last_id` int(11)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `pages_view`
--
CREATE TABLE IF NOT EXISTS `pages_view` (
`id_post` int(11)
,`kategori` varchar(100)
,`judul` varchar(100)
,`isi` text
,`diterbitkan` date
,`last_update` datetime
,`jumlah_baca` int(11)
,`link` varchar(100)
,`nama_link` varchar(100)
,`link_asli` varchar(150)
,`id_user` int(11)
,`status` int(10)
,`komen` int(11)
,`label` varchar(100)
,`jam` varchar(20)
,`lokasi` varchar(200)
,`type` varchar(100)
,`parent` int(11)
,`order` int(11)
,`fitur_img` varchar(300)
,`alt_img` varchar(120)
,`deskripsi` varchar(120)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `page_parent_view`
--
CREATE TABLE IF NOT EXISTS `page_parent_view` (
`id_post` int(11)
,`kategori` varchar(100)
,`judul` varchar(100)
,`isi` text
,`diterbitkan` date
,`last_update` datetime
,`jumlah_baca` int(11)
,`link` varchar(100)
,`nama_link` varchar(100)
,`link_asli` varchar(150)
,`id_user` int(11)
,`status` int(10)
,`komen` int(11)
,`label` varchar(100)
,`jam` varchar(20)
,`lokasi` varchar(200)
,`type` varchar(100)
,`parent` int(11)
,`order` int(11)
,`fitur_img` varchar(300)
,`alt_img` varchar(120)
,`deskripsi` varchar(120)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `post_trash`
--
CREATE TABLE IF NOT EXISTS `post_trash` (
`id_post` int(11)
,`kategori` varchar(100)
,`judul` varchar(100)
,`isi` text
,`diterbitkan` date
,`last_update` datetime
,`jumlah_baca` int(11)
,`link` varchar(100)
,`id_user` int(11)
,`status` int(10)
,`komen` int(11)
,`label` varchar(100)
,`jam` varchar(20)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `post_view`
--
CREATE TABLE IF NOT EXISTS `post_view` (
`id_post` int(11)
,`kategori` varchar(100)
,`judul` varchar(100)
,`isi` text
,`diterbitkan` date
,`last_update` datetime
,`jumlah_baca` int(11)
,`link` varchar(100)
,`nama_link` varchar(100)
,`link_asli` varchar(150)
,`id_user` int(11)
,`status` int(10)
,`komen` int(11)
,`label` varchar(100)
,`jam` varchar(20)
,`lokasi` varchar(200)
,`type` varchar(100)
,`parent` int(11)
,`order` int(11)
,`fitur_img` varchar(300)
,`alt_img` varchar(120)
,`deskripsi` varchar(120)
);
-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file`
--

CREATE TABLE IF NOT EXISTS `tb_file` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `tanggal` datetime NOT NULL,
  `link` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `trash` int(11) NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=197 ;

--
-- Dumping data untuk tabel `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `nama`, `ukuran`, `tanggal`, `link`, `type`, `trash`) VALUES
(182, '182-IMG-20151229-WA0001.jpg', '73536', '2016-02-13 03:41:58', 'upload/182-IMG-20151229-WA0001.jpg', 'jpg', 0),
(186, '183-13 Dramatic Into.mp3', '704026', '2016-02-13 04:24:39', 'upload/183-13 Dramatic Into.mp3', 'mp3', 0),
(187, '187-Diavel-Titanium_2015_Studio_C01_1920X1080_1.mediagallery_output_image_[1920x1080].jpg', '497527', '2016-02-13 05:49:58', 'upload/187-Diavel-Titanium_2015_Studio_C01_1920X1080_1.mediagallery_output_image_[1920x1080].jpg', 'jpg', 0),
(188, '188-dcds (1).jpg', '5614', '2016-02-17 05:17:46', 'upload/188-dcds (1).jpg', 'jpg', 0),
(189, '189-dcds.jpg', '5614', '2016-02-17 05:19:21', 'upload/189-dcds.jpg', 'jpg', 0),
(190, '190-DSC_0233.jpg', '0', '2016-02-17 05:22:04', 'upload/190-DSC_0233.jpg', 'jpg', 0),
(191, '191-6.jpg', '4026', '2016-02-23 07:22:38', 'upload/191-6.jpg', 'jpg', 0),
(192, '192-2.jpg', '198028', '2016-02-23 07:23:12', 'upload/192-2.jpg', 'jpg', 0),
(193, '193-140-Pengukuhan mahasiswa baru.docx', '16267', '2016-02-27 05:19:25', 'upload/193-140-Pengukuhan mahasiswa baru.docx', 'docx', 0),
(194, '194-13 Dramatic Into.mp3', '704026', '2016-02-27 07:59:42', 'upload/194-13 Dramatic Into.mp3', 'mp3', 0),
(195, '195-team_fortress_2__the_engineer_by_onosaka_yuha-d47vyqv1.jpg', '79428', '2016-03-01 08:24:32', 'upload/195-team_fortress_2__the_engineer_by_onosaka_yuha-d47vyqv1.jpg', 'jpg', 0),
(196, '196-IMG-20151205-WA0002-1.jpg', '288277', '2016-03-01 08:36:42', 'upload/196-IMG-20151205-WA0002-1.jpg', 'jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama`) VALUES
(5, 'Programmer'),
(6, 'Flashing'),
(12, 'Animation'),
(13, 'New Update'),
(14, 'Event'),
(15, 'new');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_label`
--

CREATE TABLE IF NOT EXISTS `tb_label` (
  `id_label` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_label`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data untuk tabel `tb_label`
--

INSERT INTO `tb_label` (`id_label`, `nama`) VALUES
(116, 'future'),
(117, 'technology'),
(118, 'education'),
(119, 'culture'),
(120, 'beautifull');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE IF NOT EXISTS `tb_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `posisi` int(11) NOT NULL,
  `urut` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `deskripsi`, `nama`, `link`, `parent`, `posisi`, `urut`) VALUES
(1, 'Lorem ipsum dolor sitamet', 'Service', 'http://www.consultan.com/service', 0, 1, 1),
(2, '', 'About Us', 'http://www.consultan.com/about', 0, 1, 1),
(4, 'Hospital', 'Hospital', 'http://www.consultan.com/service/hospitals-education', 1, 1, 3),
(6, '', 'Electronics', 'http://www.consultan.com/service/electro-engineering', 1, 1, 1),
(8, '', 'Our History', 'http://www.consultan.com/about/our-history', 2, 1, 3),
(9, '', 'Location', 'http://www.consultan.com/about/locations', 2, 1, 4),
(12, '', 'Consultant Service', 'http://www.consultan.com/service/consultant-engineering', 1, 1, 2),
(13, '', 'About', '', 0, 2, 1),
(14, '', 'Services', '', 0, 2, 2),
(15, '', 'Markets', '#', 0, 2, 3),
(16, '', 'News and Event', '#', 0, 2, 4),
(17, '', 'On The Board', '#', 0, 2, 4),
(18, '', 'Blog', '#', 0, 2, 5),
(19, '', 'Term & Kondition', '#', 0, 3, 1),
(20, '', 'Privacy', '#', 0, 3, 2),
(21, '', 'Carrers', '#', 0, 3, 3),
(22, '', 'Sitemap', '#', 0, 3, 4),
(23, '', 'Markets', 'http://www.consultan.com/about/our-markets-12', 0, 1, 3),
(24, '', 'Community Involvement', 'http://www.consultan.com/about/community-involvement', 2, 1, 4),
(25, '', 'News and Event', 'http://www.consultan.com/news', 0, 2, 4),
(26, '', 'News and Event', 'http://www.consultan.com/news', 0, 2, 4),
(27, '', 'News and Event', 'http://www.consultan.com/news', 0, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE IF NOT EXISTS `tb_post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(100) NOT NULL COMMENT 'post || page',
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `diterbitkan` date NOT NULL,
  `last_update` datetime NOT NULL,
  `jumlah_baca` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `nama_link` varchar(100) NOT NULL,
  `link_asli` varchar(150) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(10) NOT NULL,
  `komen` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `jam` varchar(20) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `fitur_img` varchar(300) NOT NULL,
  `alt_img` varchar(120) NOT NULL,
  `deskripsi` varchar(120) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=183 ;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `kategori`, `judul`, `isi`, `diterbitkan`, `last_update`, `jumlah_baca`, `link`, `nama_link`, `link_asli`, `id_user`, `status`, `komen`, `label`, `jam`, `lokasi`, `type`, `parent`, `order`, `fitur_img`, `alt_img`, `deskripsi`) VALUES
(83, '', 'Digital Library AKN Ponorogo ', '<p><img src="http://www.consultan.com/upload/187-Diavel-Titanium_2015_Studio_C01_1920X1080_1.mediagallery_output_image_[1920x1080].jpg" alt="" width="560" height="315" /></p>\r\n<p>Perpustakaan digital ini berfungsi sebagai media informasi tentang buku-buku yang ada diperpustakaan khususnya di lingkungan kampus AKN Ponorogo.</p>\r\n<p>Selain sebagai media informasi bagi pengunjung yang hendak meminjam buku, perpustakaan digital ini juga sebagai alat dalam pencatatan kegiatan pinjam-meminjam buku yang dilakukan mahasiswa dengan admin (pengguna aplikasi).</p>\r\n<p>Aplikasi ini memberikan rekap laporan dan transaksi peminjaman dalam bentuk excel maupun pdf.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'digital-library-akn-ponorogo', 'digital-library-akn-ponorogo', 'http://www.consultan.com/news/83/digital-library-akn-ponorogo', 1, 1, 1, '117,116,119,120', '15:31:02', 'Ponorogo', 'news', 0, 0, '', '', ''),
(84, '12-6', 'Cashier AKN Ponorogo ', '<p>Adalah aplikasi kasir yang dapat digunakan oleh sebuah toko ataupun cafe. Aplikasi ini mampu mendata barang-barang yang dijual oleh pemilik toko.</p><p>Selain dapat mencatat proses transaksi antara pembeli dan pemilik toko, aplikasi ini juga dapat mencatat proses pembelian barang yang dilakukan oleh Owner toko dengan supplier. Sehingga aplikasi ini mempu memberikan rincian <strong><em>utung-rugi</em></strong> toko tersebut.</p><p>Aplikasi ini memberikan rekap laporan dan transaksi peminjaman dalam bentuk excel maupun pdf. Setiap transaksi penjualan yang dilakukan, aplikasi ini mengeluarkan output yang berupa <strong>nota pembelian.</strong></p>', '2016-02-17', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/news/84', 'cashier-akn-ponorogo', 'http://www.consultan.com/news/84/cashier-akn-ponorogo', 1, 1, 1, '117,116', '07:11:44', '', 'news', 0, 0, '', '', ''),
(85, '14-13', 'Saveloc (save location) ', '<p>Adalah aplikasi yang berbasis mobile android yang berfungsi sebagai pengingat atau pencatat rute dengan memanfaatkan fasilitas GPS dan Google Maps yang sudah ditanamkan di ANDROID SYSTEM.</p><p>Cara kerja aplikasi ini ialah dengan merekam route perjalanan user dan menyimpannya di database.</p><p>Jadi apabila user ingin pergi ke suatu tempat namun takut pulang tersesat, aplikasi ini bisa membantu. Dan apabila user ingin pergi ke suatu tempat yang pernah di kunjungi sebelumnya, aplikasi ini dapat memandu arah.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/news/85', 'saveloc-(save-location)', 'http://www.consultan.com/news/85/saveloc-(save-location)', 1, 1, 0, '117,116', '08:39:44', '', 'news', 0, 0, '', '', ''),
(161, '15-14-13', 'berita baru hari ini', '<p><img src="http://www.consultan.com/upload/192-2.jpg" alt="" width="595" height="364" />Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles. <a href="http://www.consultan.com/consultant/news.php">Readmore</a></p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'berita-baru-hari-ini', 'berita-baru-hari-ini', 'http://www.consultan.com/news/161/berita-baru-hari-ini', 1, 1, 0, '116,117', '15:12:35', '', 'news', 0, 0, '', '', ''),
(171, '15-14-13', 'Our Location', '<p><img src="http://www.consultan.com/upload/196-IMG-20151205-WA0002-1.jpg" alt="" width="466" height="528" />Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the changing needs of their students. New experiences, interests and skills are brought to the classroom by the volunteers. Benefits for Volunteers Volunteers derive satisfaction from making an important contribution to the school community. Volunteers receive recognition, affection and respect of students and staff for their contribution. University and college volunteers apply classroom experience towards career choices and post-graduate studies. Volunteers develop new skills, new opportunities for networking and new friendships. Benefits for the School The presence of the school in the community is enhanced when volunteers become advocates for the children and the staff. Positive partnerships between school and community are effective public relations tools.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/news/171', 'our-location', 'http://www.consultan.com/news/171/our-location', 1, 1, 0, '116,118', '15:13:47', '', 'news', 0, 0, '', '', ''),
(172, '', 'About', '<p><img src="http://www.consultan.com/upload/192-2.jpg" alt="" width="435" height="266" />Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning&nbsp;environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the changing needs of their students. New experiences, interests and skills are brought to the classroom by the volunteers. Benefits for Volunteers Volunteers derive satisfaction from making an important contribution to the school community. Volunteers receive recognition, affection and respect of students and staff for their contribution. University and college volunteers apply classroom experience towards career choices and post-graduate studies. Volunteers develop new skills, new opportunities for networking and new friendships. Benefits for the School The presence of the school in the community is enhanced when volunteers become advocates for the children and the staff. Positive partnerships between school and community are effective public relations tools.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/', 'about', 'http://www.consultan.com/about', 1, 1, 0, '0', '11:17:20', '', 'pages', 0, 0, '', '', ''),
(173, '', 'Our History', '<p><img src="http://www.consultan.com/upload/187-Diavel-Titanium_2015_Studio_C01_1920X1080_1.mediagallery_output_image_[1920x1080].jpg" alt="" width="701" height="400" />Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the changing needs of their students. New experiences, interests and skills are brought to the classroom by the volunteers. Benefits for Volunteers Volunteers derive satisfaction from making an important contribution to the school community. Volunteers receive recognition, affection and respect of students and staff for their contribution. University and college volunteers apply classroom experience towards career choices and post-graduate studies. Volunteers develop new skills, new opportunities for networking and new friendships. Benefits for the School The presence of the school in the community is enhanced when volunteers become advocates for the children and the staff. Positive partnerships between school and community are effective public relations tools.</p><p>', '2016-03-03', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/about/', 'our-history', 'http://www.consultan.com/about/our-history', 1, 1, 0, '0', '00:10:12', '', 'pages', 172, 0, '', '', ''),
(174, '', 'Location', '<p><img src="http://www.consultan.com/upload/192-2.jpg" alt="" width="552" height="338" />Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning&nbsp;environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the changing needs of their students. New experiences, interests and skills are brought to the classroom by the volunteers. Benefits for Volunteers Volunteers derive satisfaction from making an important contribution to the school community. Volunteers receive recognition, affection and respect of students and staff for their contribution. University and college volunteers apply classroom experience towards career choices and post-graduate studies. Volunteers develop new skills, new opportunities for networking and new friendships. Benefits for the School The presence of the school in the community is enhanced when volunteers become advocates for the children and the staff. Positive partnerships between school and community are effective public relations tools.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/about/', 'locations', 'http://www.consultan.com/about/locations', 1, 1, 0, '0', '11:53:38', '', 'pages', 172, 0, '', '', ''),
(175, '', 'Service', '<p><img src="http://www.consultan.com/upload/192-2.jpg" alt="" width="472" height="289" /></p>\r\n<p>Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the changing needs of their students. New experiences, interests and skills are brought to the classroom by the volunteers. Benefits for Volunteers Volunteers derive satisfaction from making an important contribution to the school community. Volunteers receive recognition, affection and respect of students and staff for their contribution. University and college volunteers apply classroom experience towards career choices and post-graduate studies. Volunteers develop new skills, new opportunities for networking and new friendships. Benefits for the School The presence of the school in the community is enhanced when volunteers become advocates for the children and the staff. Positive partnerships between school and community are effective public relations tools.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/', 'service', 'http://www.consultan.com/service', 1, 1, 0, '0', '11:12:30', '', 'pages', 0, 0, 'http://www.consultan.com/upload/187-Diavel-Titanium_2015_Studio_C01_1920X1080_1.mediagallery_output_image_[1920x1080].jpg', 'Our service', 'We love to take about service in the home and in the office, take me out.'),
(176, '', 'Consultant Engineering', '<p><img src="http://www.consultan.com/upload/192-2.jpg" alt="" /></p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/service/', 'consultant-engineering', 'http://www.consultan.com/service/consultant-engineering', 1, 1, 0, '0', '05:00:37', '', 'pages', 175, 0, '', '', ''),
(177, '', 'Electro Engineering', '<p><img src="http://www.consultan.com/upload/187-Diavel-Titanium_2015_Studio_C01_1920X1080_1.mediagallery_output_image_[1920x1080].jpg" alt="" width="486" height="273" />Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/service/', 'electro-engineering', 'http://www.consultan.com/service/electro-engineering', 1, 1, 0, '0', '05:53:50', '', 'pages', 175, 0, '', '', ''),
(179, '', 'Hospitals Education', '<p><img src="http://www.consultan.com/upload/192-2.jpg" alt="" width="426" height="261" /></p>\r\n<p>Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the changing needs of their students. New experiences, interests and skills are brought to the classroom by the volunteers. Benefits for Volunteers Volunteers derive satisfaction from making an important contribution to the school community. Volunteers receive recognition, affection and respect of students and staff for their contribution. University and college volunteers apply classroom experience towards career choices and post-graduate studies. Volunteers develop new skills, new opportunities for networking and new friendships. Benefits for the School The presence of the school in the community is enhanced when volunteers become advocates for the children and the staff. Positive partnerships between school and community are effective public relations tools.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/service/', 'hospitals-education', 'http://www.consultan.com/service/hospitals-education', 1, 1, 0, '0', '06:02:20', '', 'pages', 175, 0, '', '', ''),
(180, '', 'Our Markets', '<p>Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning&nbsp;environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the changing needs of their students. New experiences, interests and skills are brought to the classroom by the volunteers. Benefits for Volunteers Volunteers derive satisfaction from making an important contribution to the school community. Volunteers receive recognition, affection and respect of students and staff for their contribution. University and college volunteers apply classroom experience towards career choices and post-graduate studies. Volunteers develop new skills, new opportunities for networking and new friendships. Benefits for the School The presence of the school in the community is enhanced when volunteers become advocates for the children and the staff. Positive partnerships between school and community are effective public relations tools.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/about/', 'our-markets-12', 'http://www.consultan.com/about/our-markets-12', 1, 1, 0, '0', '11:25:49', '', 'pages', 172, 0, '', '', ''),
(181, '', 'Community Involvement', '<p>Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the changing needs of their students. New experiences, interests and skills are brought to the classroom by the volunteers. Benefits for Volunteers Volunteers derive satisfaction from making an important contribution to the school community. Volunteers receive recognition, affection and respect of students and staff for their contribution. University and college volunteers apply classroom experience towards career choices and post-graduate studies. Volunteers develop new skills, new opportunities for networking and new friendships. Benefits for the School The presence of the school in the community is enhanced when volunteers become advocates for the children and the staff. Positive partnerships between school and community are effective public relations tools.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/about/', 'community-involvement', 'http://www.consultan.com/about/community-involvement', 1, 1, 0, '0', '11:49:19', '', 'pages', 172, 0, '', '', ''),
(182, '', 'Take Me Him Out', '<p>Benefits for Students Students gain exposure to a wide range of life experiences which adds to a positive learning environment. Students receive more individual attention, support and encouragement. This helps them to overcome obstacles, increase motivation and develop self-confidence. Students benefit from expanded services in libraries, labs, lunch rooms and other non-classroom activities. Benefits for Teachers Teachers can delegate tasks for the provision of extra help and support for designated groups or individuals. Teachers can expand programs to meet the changing needs of their students. New experiences, interests and skills are brought to the classroom by the volunteers. Benefits for Volunteers Volunteers derive satisfaction from making an important contribution to the school community. Volunteers receive recognition, affection and respect of students and staff for their contribution. University and college volunteers apply classroom experience towards career choices and post-graduate studies. Volunteers develop new skills, new opportunities for networking and new friendships. Benefits for the School The presence of the school in the community is enhanced when volunteers become advocates for the children and the staff. Positive partnerships between school and community are effective public relations tools.</p>', '2016-03-01', '0000-00-00 00:00:00', 0, 'http://www.consultan.com/service/', 'take-me-him-out', 'http://www.consultan.com/service/take-me-him-out', 1, 1, 0, '0', '11:56:12', '', 'pages', 175, 0, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jabatan` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `jabatan`, `status`, `last_login`) VALUES
(1, 'Pringgo Juni S', 'admin', 'a', 1, 1, '2016-01-12 00:00:00');

-- --------------------------------------------------------

--
-- Struktur untuk view `files_attachement`
--
DROP TABLE IF EXISTS `files_attachement`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `files_attachement` AS select `tb_file`.`id_file` AS `id_file`,`tb_file`.`nama` AS `nama`,`tb_file`.`ukuran` AS `ukuran`,`tb_file`.`tanggal` AS `tanggal`,`tb_file`.`link` AS `link`,`tb_file`.`type` AS `type`,`tb_file`.`trash` AS `trash` from `tb_file` where (`tb_file`.`type` not in ('webm','mkv','flv','vob','ogv','ogg','drc','avi','wmv','mp4','m4p','mpg','mpeg','m4v','3gp','JPG','jpg','jpeg','PNG','png','GIF','gif','ico','ICO','bmp','BMP','N\r\n\r\nEF','nef','tif','TIF','RAW','raw','mp3'));

-- --------------------------------------------------------

--
-- Struktur untuk view `files_audio`
--
DROP TABLE IF EXISTS `files_audio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `files_audio` AS select `tb_file`.`id_file` AS `id_file`,`tb_file`.`nama` AS `nama`,`tb_file`.`ukuran` AS `ukuran`,`tb_file`.`tanggal` AS `tanggal`,`tb_file`.`link` AS `link`,`tb_file`.`type` AS `type`,`tb_file`.`trash` AS `trash` from `tb_file` where (`tb_file`.`type` = 'mp3');

-- --------------------------------------------------------

--
-- Struktur untuk view `files_img`
--
DROP TABLE IF EXISTS `files_img`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `files_img` AS select `tb_file`.`id_file` AS `id_file`,`tb_file`.`nama` AS `nama`,`tb_file`.`ukuran` AS `ukuran`,`tb_file`.`tanggal` AS `tanggal`,`tb_file`.`link` AS `link`,`tb_file`.`type` AS `type`,`tb_file`.`trash` AS `trash` from `tb_file` where (`tb_file`.`type` in ('JPG','jpg','jpeg','PNG','png','GIF','gif','ico','ICO','bmp','BMP','NEF','nef','\r\n\r\ntif','TIF','RAW','raw'));

-- --------------------------------------------------------

--
-- Struktur untuk view `files_video`
--
DROP TABLE IF EXISTS `files_video`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `files_video` AS select `tb_file`.`id_file` AS `id_file`,`tb_file`.`nama` AS `nama`,`tb_file`.`ukuran` AS `ukuran`,`tb_file`.`tanggal` AS `tanggal`,`tb_file`.`link` AS `link`,`tb_file`.`type` AS `type`,`tb_file`.`trash` AS `trash` from `tb_file` where (`tb_file`.`type` in ('webm','mkv','flv','vob','ogv','ogg','drc','avi','wmv','mp4','m4p','mpg','mpeg','m4v','3gp'));

-- --------------------------------------------------------

--
-- Struktur untuk view `max_file`
--
DROP TABLE IF EXISTS `max_file`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `max_file` AS select max(`tb_file`.`id_file`) AS `last_id` from `tb_file` where 1;

-- --------------------------------------------------------

--
-- Struktur untuk view `pages_view`
--
DROP TABLE IF EXISTS `pages_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pages_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`status` in (1,2)) and (`tb_post`.`type` = 'pages'));

-- --------------------------------------------------------

--
-- Struktur untuk view `page_parent_view`
--
DROP TABLE IF EXISTS `page_parent_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `page_parent_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`type` = 'pages') and (`tb_post`.`parent` = 0));

-- --------------------------------------------------------

--
-- Struktur untuk view `post_trash`
--
DROP TABLE IF EXISTS `post_trash`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_trash` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam` from `tb_post` where (`tb_post`.`status` = 3);

-- --------------------------------------------------------

--
-- Struktur untuk view `post_view`
--
DROP TABLE IF EXISTS `post_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `post_view` AS select `tb_post`.`id_post` AS `id_post`,`tb_post`.`kategori` AS `kategori`,`tb_post`.`judul` AS `judul`,`tb_post`.`isi` AS `isi`,`tb_post`.`diterbitkan` AS `diterbitkan`,`tb_post`.`last_update` AS `last_update`,`tb_post`.`jumlah_baca` AS `jumlah_baca`,`tb_post`.`link` AS `link`,`tb_post`.`nama_link` AS `nama_link`,`tb_post`.`link_asli` AS `link_asli`,`tb_post`.`id_user` AS `id_user`,`tb_post`.`status` AS `status`,`tb_post`.`komen` AS `komen`,`tb_post`.`label` AS `label`,`tb_post`.`jam` AS `jam`,`tb_post`.`lokasi` AS `lokasi`,`tb_post`.`type` AS `type`,`tb_post`.`parent` AS `parent`,`tb_post`.`order` AS `order`,`tb_post`.`fitur_img` AS `fitur_img`,`tb_post`.`alt_img` AS `alt_img`,`tb_post`.`deskripsi` AS `deskripsi` from `tb_post` where ((`tb_post`.`status` in (1,2)) and (`tb_post`.`type` = 'news'));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
