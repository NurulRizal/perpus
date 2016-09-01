-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2016 at 11:30 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_anggota` int(11) NOT NULL,
  `id_divisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nis`, `nama`, `email`, `jk`, `status`, `image`, `phone`, `password`, `no_anggota`, `id_divisi`) VALUES
('2131231231', 'anggota', 'anggoya@mail.com', 'L', 'Premium', '', '12312312', 'anggota', 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(10) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `klasifikasi` varchar(200) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `stock` int(3) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `ebook` varchar(100) NOT NULL,
  `kodepanggil` varchar(255) NOT NULL,
  `isbn` varchar(255) NOT NULL,
  `id_subject` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `thn_terbit` varchar(255) NOT NULL,
  `tmpt_terbit` varchar(255) NOT NULL,
  `pengarang2` varchar(255) NOT NULL,
  `pengarang3` varchar(255) NOT NULL,
  `publish` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul`, `pengarang`, `klasifikasi`, `image`, `lokasi`, `stock`, `barcode`, `ebook`, `kodepanggil`, `isbn`, `id_subject`, `id_jenis`, `penerbit`, `thn_terbit`, `tmpt_terbit`, `pengarang2`, `pengarang3`, `publish`) VALUES
('1', 'coba', 'a', '<p>dimensi buku = 3x3</p>\r\n<p>lebar buku 2x1</p>\r\n<p>berat 1 ton</p>', 'Untitled.jpeg', '123', 1, '0', '', '1', '1', 1, 1, 'a', 'a', 'a', 'a', 'a', 1),
('1234', 'coba lah', 'asdas', '<p>&nbsp;required</p>\r\n<p>&nbsp;required</p>\r\n<p>&nbsp;required</p>\r\n<p>&nbsp;required</p>\r\n<p>&nbsp;required</p>\r\n<p>&nbsp;required</p>\r\n<p>&nbsp;required</p>\r\n<p>&nbsp;required</p>\r\n<p>&nbsp;</p>\r\n<', 'ktp3.png', '23', 2, '0', '', '23123213', '213123', 4, 1, 'asdasd', 'aasd', 'asdasd', 'dasdas', 'da', 1),
('2', 'Sirah Nabawiyah', 'lupa', '<p>gjgslkdaj</p>', '13320082_1763404420559654_621990967_n.jpg', '123', 5, '14716274642.png', '', '1', '1230912.12312098', 4, 4, 'gak tau', '2016', 'Jakarta', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'Keuangan'),
(2, 'SDM');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id_email` int(11) NOT NULL,
  `dari` varchar(255) NOT NULL,
  `ke` varchar(255) NOT NULL,
  `cc` varchar(255) NOT NULL,
  `bcc` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL,
  `in_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id_email`, `dari`, `ke`, `cc`, `bcc`, `subject`, `body`, `status`, `in_out`) VALUES
(1, '', 'xzcasd', '', '', 'zxcasd', '', 0, 1),
(2, '', 'fdg', '', '', 'dfg', '<p>dfg</p>', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Kamus'),
(3, 'Ensiklopedia'),
(4, 'Jurnal'),
(5, 'jujur');

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `publish` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `body`, `publish`, `image`) VALUES
(2, 'Berita satu', '<div id="lipsum">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae fringilla magna, sit amet egestas justo. Praesent et hendrerit nibh. Donec egestas felis sed ullamcorper eleifend. Etiam nec accumsan lectus, vitae pretium ex. Ut vel elit mi. In egestas malesuada magna, in posuere nisl molestie hendrerit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dapibus, justo sed hendrerit dictum, ipsum arcu consequat dui, vel consequat lorem ligula sit amet mi. Morbi egestas ante at justo blandit, vitae volutpat neque vehicula. Suspendisse dapibus eget diam vel hendrerit. Aliquam imperdiet sollicitudin ipsum, vitae fermentum enim porta ac.</p>\r\n<p>Etiam a felis in libero luctus ornare. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc ac tortor eu nunc lacinia dapibus at eu dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque sed nunc purus. Sed at faucibus metus, at fringilla orci. Vivamus accumsan ligula neque, non mattis nibh ultrices vulputate. Nulla mauris orci, blandit nec feugiat quis, dictum facilisis neque. Phasellus vel pharetra nisi. Proin euismod augue lacus, lacinia venenatis magna interdum non.</p>\r\n<p>Mauris porta dui eu mollis luctus. Phasellus euismod bibendum sem, sed mollis arcu gravida et. Sed nec ultrices dolor, vel tincidunt ipsum. Maecenas pretium congue convallis. Nam malesuada, lorem ac tincidunt faucibus, nisi nisi dictum neque, quis faucibus risus dui non diam. Maecenas porttitor ipsum vulputate, sagittis lectus tincidunt, lacinia neque. Nam porta pellentesque nisi, a convallis orci tristique eu. Fusce laoreet diam et ligula elementum, sit amet lacinia nibh pretium. Nunc sodales arcu eros, et finibus nulla ornare eget. In venenatis, lectus a hendrerit iaculis, eros eros tincidunt orci, sed lacinia ligula elit vitae leo. Nam tristique, massa quis ullamcorper interdum, nulla nulla facilisis sapien, et consequat ante leo at augue.</p>\r\n<p>Nunc laoreet, ipsum nec maximus feugiat, augue sem tincidunt mauris, vitae tincidunt mi ipsum id nisl. Donec porttitor tincidunt sem vel bibendum. Nunc et nisl velit. Nulla facilisi. Proin orci libero, volutpat sit amet nisl et, scelerisque faucibus odio. Aliquam condimentum auctor tellus vel commodo. Donec commodo molestie libero, et ultrices lacus ultricies ut. Pellentesque ut risus mauris. Curabitur massa tortor, tincidunt sit amet lobortis vel, venenatis in arcu. Maecenas vel mauris nec mi dignissim cursus. Proin dictum diam odio, eu pulvinar nisl placerat eu. Pellentesque risus elit, scelerisque ac lorem volutpat, commodo accumsan nisi. Quisque lobortis massa diam, vel rhoncus arcu eleifend eu. Cras bibendum erat sed dui accumsan luctus.</p>\r\n<p>Vivamus hendrerit molestie dolor, et feugiat mi vulputate et. Donec suscipit nunc a hendrerit aliquet. Fusce tempus metus nec erat porta suscipit. Fusce tincidunt libero id tellus sodales ornare. Vestibulum tincidunt vitae dolor et lacinia. Donec faucibus porta consequat. Nam egestas diam a nisi dignissim condimentum. Mauris dolor libero, tristique ac orci eu, luctus tristique dolor. Aenean eu arcu eget orci congue hendrerit.</p>\r\n</div>', 1, 'Untitled1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `denda` varchar(2) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id_transaksi`, `tgl_pengembalian`, `denda`, `nominal`, `id_petugas`) VALUES
('20160809001', '2016-08-09', 'N', 0, NULL),
('20160809001', '2016-08-09', 'N', 0, NULL),
('20160731001', '2016-08-15', 'N', 0, NULL),
('20160731001', '2016-08-15', 'N', 0, NULL),
('20160817001', '2016-08-19', 'N', 0, NULL),
('20160817001', '2016-08-19', 'N', 0, NULL),
('20160819001', '2016-08-19', 'N', 0, NULL),
('20160819001', '2016-08-19', 'N', 0, NULL),
('20160819002', '2016-08-19', '', 0, NULL),
('20160819002', '2016-08-19', '', 0, NULL),
('20160819002', '2016-08-19', '', 0, NULL),
('20160819002', '2016-08-19', '', 0, NULL),
('20160819002', '2016-08-19', '', 0, NULL),
('20160819002', '2016-08-19', '', 0, NULL),
('20160819003', '2016-08-19', '', 0, NULL),
('20160819003', '2016-08-19', '', 0, NULL),
('20160819004', '2016-08-19', '', 0, NULL),
('20160819004', '2016-08-19', '', 0, NULL),
('20160819005', '2016-08-19', '', 0, NULL),
('20160819006', '2016-08-19', 'N', 0, NULL),
('20160819007', '2016-08-19', 'N', 0, NULL),
('20160819008', '2016-08-19', 'N', 0, NULL),
('20160819009', '2016-08-19', 'N', 0, NULL),
('20160819010', '2016-08-19', 'N', 0, NULL),
('20160819011', '2016-08-19', 'N', 0, NULL),
('20160819012', '2016-08-19', 'N', 0, NULL),
('20160819013', '2016-08-19', '', 0, NULL),
('20160819013', '2016-08-19', '', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  `password` text,
  `kode_staff` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tlp` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `user`, `password`, `kode_staff`, `email`, `tlp`, `role`, `gambar`) VALUES
(3, 'admin', '0192023a7bbd73250516f069df18b500', '123', 'rizal.tenro@gmail.co', '13156467', 'Staff', '13165836_1032542166794661_5373366682193129007_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id_subject` int(11) NOT NULL,
  `nama_subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id_subject`, `nama_subject`) VALUES
(1, 'Politik'),
(3, 'Agama Islam'),
(4, 'Sejarah'),
(5, 'Kesehatan'),
(6, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE `tmp` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `kode_buku` varchar(5) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nis`, `kode_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `id_petugas`) VALUES
('20160731001', '1308030', '001', '2016-07-31', '2016-08-07', 'Y', NULL),
('20160809001', '1234', '001', '2016-08-09', '2016-08-16', 'Y', NULL),
('20160817001', '1234567890', '1234', '2016-08-17', '2016-08-24', 'Y', NULL),
('20160819001', '1234567890', '1', '2016-08-19', '2016-08-26', 'Y', NULL),
('20160819002', '1234567890', '1', '2016-08-19', '2016-08-26', 'Y', NULL),
('20160819003', '1234567890', '1', '2016-08-19', '2016-08-26', 'Y', NULL),
('20160819004', '1234567890', '1', '2016-08-19', '2016-08-26', 'N', NULL),
('20160819005', '1234567890', '1', '2016-08-19', '2016-08-26', 'N', NULL),
('20160819006', '1234567890', '1', '2016-08-19', '2016-08-26', 'N', NULL),
('20160819007', '1234567890', '1', '2016-08-19', '2016-08-26', 'N', NULL),
('20160819008', '1234567890', '2', '2016-08-19', '2016-08-26', 'N', NULL),
('20160819009', '1234567890', '2', '2016-08-19', '2016-08-26', 'N', NULL),
('20160819010', '1234567890', '2', '2016-08-19', '2016-08-26', 'N', NULL),
('20160819011', '1234567890', '2', '2016-08-19', '2016-08-26', 'N', NULL),
('20160819012', '1234567890', '2', '2016-08-19', '2016-08-26', 'N', NULL),
('20160819013', '1234567890', '1234', '2016-08-19', '2016-08-26', 'Y', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indexes for table `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`kode_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
