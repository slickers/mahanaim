-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2022 at 02:54 PM
-- Server version: 8.0.29
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `id_adm` int NOT NULL,
  `nama_adm` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`id_adm`, `nama_adm`, `username`, `password`, `level`, `keterangan`) VALUES
(1, 'Yopianus Linga', 'ipoilinga', 'Rahasia123', 'admin', 'Superuser Admin'),
(4, 'operator', 'operator', 'password', 'operator', 'operator'),
(5, 'Mahanaim', 'mahanaim', 'password', 'admin', 'Admin Mahanaim');

-- --------------------------------------------------------

--
-- Table structure for table `mst_didik`
--

CREATE TABLE `mst_didik` (
  `id_didik` int NOT NULL,
  `nama_didik` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_didik`
--

INSERT INTO `mst_didik` (`id_didik`, `nama_didik`) VALUES
(1, 'TK'),
(2, 'SD'),
(3, 'SMP'),
(4, 'SMA'),
(5, 'Diploma'),
(6, 'Sarjana'),
(7, 'Doctor'),
(8, 'Professor'),
(9, 'Tidak Sekolah');

-- --------------------------------------------------------

--
-- Table structure for table `mst_goldarah`
--

CREATE TABLE `mst_goldarah` (
  `id_gold` int NOT NULL,
  `gol_darah` varchar(16) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_goldarah`
--

INSERT INTO `mst_goldarah` (`id_gold`, `gol_darah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kerja`
--

CREATE TABLE `mst_kerja` (
  `id_kerja` int NOT NULL,
  `nama_kerja` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_kerja`
--

INSERT INTO `mst_kerja` (`id_kerja`, `nama_kerja`) VALUES
(1, 'ABRI'),
(2, 'Dokter'),
(3, 'Guru'),
(4, 'Ibu Rumah Tangga'),
(5, 'IT'),
(6, 'Karyawan'),
(7, 'Pelaut'),
(8, 'Pelajar/Mahasiswa'),
(9, 'Pengacara'),
(10, 'Pekerja Lepas'),
(11, 'Pelaut'),
(12, 'Profesional/Busines'),
(13, 'Wiraswasta'),
(14, 'Tidak Bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kwp`
--

CREATE TABLE `mst_kwp` (
  `id_kwp` int NOT NULL,
  `nama_kwp` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_kwp`
--

INSERT INTO `mst_kwp` (`id_kwp`, `nama_kwp`) VALUES
(1, 'KWP-1'),
(2, 'KWP-2'),
(3, 'KWP-3'),
(4, 'KWP-4'),
(5, 'KWP-5'),
(6, 'KWP-6'),
(7, 'KWP-7'),
(8, 'KWP-8'),
(9, 'KWP-9');

-- --------------------------------------------------------

--
-- Table structure for table `mst_nikah`
--

CREATE TABLE `mst_nikah` (
  `id_stnikah` int NOT NULL,
  `nama_stnikah` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_nikah`
--

INSERT INTO `mst_nikah` (`id_stnikah`, `nama_stnikah`) VALUES
(1, 'Menikah'),
(2, 'Belum Menikah'),
(3, 'Janda'),
(4, 'Duda');

-- --------------------------------------------------------

--
-- Table structure for table `mst_pelka`
--

CREATE TABLE `mst_pelka` (
  `id_pelka` int NOT NULL,
  `nama_pelka` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_pelka`
--

INSERT INTO `mst_pelka` (`id_pelka`, `nama_pelka`) VALUES
(1, 'Pelka Anak'),
(2, 'Pelka Remaja'),
(3, 'Pelka Pemuda'),
(4, 'Pelka Bapak'),
(5, 'Pelka Ibu'),
(6, 'Pelka Ibu Janda'),
(7, 'Pelka Profesional'),
(8, 'Pelka Lansia');

-- --------------------------------------------------------

--
-- Table structure for table `mst_posisi`
--

CREATE TABLE `mst_posisi` (
  `id_posisi` int NOT NULL,
  `nama_posisi` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_posisi`
--

INSERT INTO `mst_posisi` (`id_posisi`, `nama_posisi`) VALUES
(1, 'Kepala Keluarga'),
(2, 'Istri'),
(3, 'Anak'),
(4, 'Orang Tua'),
(5, 'Cucu'),
(6, 'Adik/Kakak/Ipar'),
(7, 'Saudara/Kemenakan'),
(8, 'Bukan Keluarga');

-- --------------------------------------------------------

--
-- Table structure for table `mst_propinsi`
--

CREATE TABLE `mst_propinsi` (
  `id_propinsi` int NOT NULL,
  `nama_propinsi` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_propinsi`
--

INSERT INTO `mst_propinsi` (`id_propinsi`, `nama_propinsi`) VALUES
(1, 'ACEH'),
(2, 'SUMATERA UTARA'),
(3, 'SUMATERA BARAT'),
(4, 'RIAU'),
(5, 'JAMBI'),
(6, 'SUMATERA SELATAN'),
(7, 'BENGKULU'),
(8, 'LAMPUNG'),
(9, 'KEPULAUAN BANGKA BELITUNG'),
(10, 'KEPULAUAN RIAU'),
(11, 'DKI JAKARTA'),
(12, 'JAWA BARAT'),
(13, 'JAWA TENGAH'),
(14, 'DI YOGYAKARTA'),
(15, 'JAWA TIMUR'),
(16, 'BANTEN'),
(17, 'BALI'),
(18, 'NUSA TENGGARA BARAT'),
(19, 'NUSA TENGGARA TIMUR'),
(20, 'KALIMANTAN BARAT'),
(21, 'KALIMANTAN TENGAH'),
(22, 'KALIMANTAN SELATAN'),
(23, 'KALIMANTAN TIMUR'),
(24, 'KALIMANTAN UTARA'),
(25, 'SULAWESI UTARA'),
(26, 'SULAWESI TENGAH'),
(27, 'SULAWESI SELATAN'),
(28, 'SULAWESI TENGGARA'),
(29, 'GORONTALO'),
(30, 'SULAWESI BARAT'),
(31, 'MALUKU'),
(32, 'MALUKU UTARA'),
(33, 'PAPUA BARAT'),
(34, 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `mst_status`
--

CREATE TABLE `mst_status` (
  `id_status` int NOT NULL,
  `nama_status` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_status`
--

INSERT INTO `mst_status` (`id_status`, `nama_status`) VALUES
(1, 'Sudah'),
(2, 'Belum'),
(3, 'Tidak Diketahui');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"cms_db\",\"table\":\"tbl_jemaat\"},{\"db\":\"cms_db\",\"table\":\"tbl_keluarga\"},{\"db\":\"cms_db\",\"table\":\"tbl_jemaat_del\"},{\"db\":\"cms_db\",\"table\":\"mst_kerja\"},{\"db\":\"cms_db\",\"table\":\"tbl_keluarga_del\"},{\"db\":\"cms_db\",\"table\":\"tbl_pendeta_del\"},{\"db\":\"cms_db\",\"table\":\"tbl_pendeta\"},{\"db\":\"cms_db\",\"table\":\"tbl_majelis_del\"},{\"db\":\"cms_db\",\"table\":\"tbl_majelis\"},{\"db\":\"cms_db\",\"table\":\"admindb\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-08-08 17:28:43', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":329}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jemaat`
--

CREATE TABLE `tbl_jemaat` (
  `id_jmt` int NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `tplahir` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `tglahir` date NOT NULL,
  `gender` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `goldarah` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `keluarga` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `posisi` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `tpbaptis` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tglbaptis` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tpsidi` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tglsidi` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `menikah` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `pelka` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `stat_jmt` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `stat_meninggal` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tglmeninggal` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `info_meninggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stat_baptis` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stat_sidi` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jemaat`
--

INSERT INTO `tbl_jemaat` (`id_jmt`, `nama`, `tplahir`, `tglahir`, `gender`, `goldarah`, `pendidikan`, `pekerjaan`, `keluarga`, `posisi`, `tpbaptis`, `tglbaptis`, `tpsidi`, `tglsidi`, `menikah`, `pelka`, `stat_jmt`, `stat_meninggal`, `tglmeninggal`, `info_meninggal`, `stat_baptis`, `stat_sidi`, `mobile`, `created_by`, `created_time`, `update_by`, `update_time`) VALUES
(149, 'Hamel Himel Stein Anthonie', 'Tagulandang', '1955-06-09', 'PRIA', 'n/a', 'n/a', 'n/a', 'ANTHONIE KAKAMBONG', 'Kepala Keluarga', 'GMIST Tagulandang', '1955-10-02', 'GMIST Mahanaim', '1979-04-13', 'Menikah', 'Pelka Bapak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 13:56:20', 'Yopianus Linga', '2022-08-09 09:20:34'),
(150, 'Lenny Magdalena', 'Pare-pare', '1971-04-30', 'WANITA', 'n/a', 'n/a', 'n/a', 'ANTHONIE KAKAMBONG', 'Istri', 'GPIB Pare-pare', '1971-07-25', 'GPIB Pare-pare', '1991-03-24', 'Menikah', 'Pelka Ibu', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0813-9812-8155', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:20:45'),
(151, 'Christomus N.Immanuel Anthonie', 'Jakarta', '1993-10-13', 'PRIA', 'n/a', 'n/a', 'n/a', 'ANTHONIE KAKAMBONG', 'Anak', 'GPIB Pare-pare', '1994-09-10', 'GMIST Mahanaim', '2011-04-17', 'Belum Menikah', 'Pelka Pemuda', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:21:28'),
(152, 'Andres Gilbert Anthonie', 'Jakarta', '2001-01-08', 'PRIA', 'n/a', 'n/a', 'n/a', 'ANTHONIE KAKAMBONG', 'Anak', 'GMIST Mahanaim', '2002-12-26', '', '', 'Belum Menikah', 'Pelka Pemuda', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:22:32'),
(153, 'Aldrin Lucky Bertje Mawuntu', 'Jakarta', '1969-08-25', 'PRIA', 'n/a', 'n/a', 'n/a', 'ALDRIN MAWUNTU', 'Kepala Keluarga', 'GMIST Mahanaim', '1970-02-08', 'GMIST Mahanaim', '1988-03-27', 'Duda', 'Pelka Bapak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0811-111-7089', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:22:02'),
(154, 'George Bansaleng', 'Siau', '1939-09-14', 'PRIA', 'n/a', 'n/a', 'Tidak Bekerja', 'BANSALENG BOGAR', 'Kepala Keluarga', 'GMIST Siau', '', 'GMIST Siau', '1957-04-12', 'Duda', 'Pelka Manula', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(155, 'Waldo Eduard Bansaleng', 'Siau', '1967-09-23', 'PRIA', 'n/a', 'n/a', 'n/a', 'BANSALENG BOGAR', 'Anak', 'GMIST Bethabara', '1967-12-26', 'GMIST Mahanaim', '', 'Duda', 'Pelka Bapak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:23:20'),
(156, 'Jusrike Sarce', 'Jakarta', '1981-04-17', 'WANITA', 'n/a', 'n/a', 'n/a', 'BANSALENG BOGAR', 'Anak', 'GMIST Mahanaim', '1981-10-04', 'GMIST Mahanaim', '1998-04-05', 'Belum Menikah', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:23:46'),
(157, 'Oswald Levi Adri', 'Jakarta', '1982-10-05', 'PRIA', 'n/a', 'n/a', 'n/a', 'BANSALENG BOGAR', 'Anak', 'GMIST Mahanaim', '', 'GMIST Mahanaim', '1998-04-05', 'Belum Menikah', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(158, 'Lenny Derek', 'Siau', '1963-04-07', 'WANITA', 'n/a', 'n/a', 'n/a', 'BARAMULI DEREK', 'Kepala Keluarga', 'GMIST Sondang Siau', '1964-12-26', 'GMIST Sondang Siau', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-9765-9890', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-07 18:18:52'),
(159, 'Melati Wulandari Baramuli', 'Bekasi', '1997-10-25', 'WANITA', 'n/a', 'n/a', 'n/a', 'BARAMULI DEREK', 'Anak', 'GMIST Mahanaim', '2004-12-26', 'GMIST Mahanaim', '2013-03-24', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(160, 'Dikson Bawuna', 'Tahuna', '1956-01-24', 'PRIA', 'n/a', 'n/a', 'n/a', 'BAWUNA BIDARA', 'Kepala Keluarga', 'GMIST Tahuna', '', 'GMIST Bungalawang', '1974-07-14', 'Menikah', 'Pelka Bapak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-8789-735', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(161, 'Fine Bidara', 'Surabaya', '1962-02-28', 'WANITA', 'n/a', 'n/a', 'n/a', 'BAWUNA BIDARA', 'Istri', 'GPIB Surabaya', '1962-08-05', 'GKI Kwitang', '1979-03-25', 'Menikah', 'Pelka Ibu', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:24:53'),
(162, 'Yonida Bidara', 'Tahuna', '1934-10-30', 'PRIA', 'n/a', 'n/a', 'n/a', 'BAWUNA BIDARA', 'Orang Tua', 'GMIST Tahuna', '', 'GMIST Tahuna', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(163, 'Refaldo Timothi Bawuna', 'Jakarta', '1990-05-08', 'PRIA', 'n/a', 'n/a', 'n/a', 'BAWUNA BIDARA', 'Anak', 'GMIST Mahanaim', '2002-12-26', 'GMIST Mahanaim', '2006-04-09', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(164, 'Reno Bawuna', 'Bekasi', '2000-04-18', 'PRIA', 'n/a', 'n/a', 'n/a', 'BAWUNA BIDARA', 'Anak', 'GMIST Mahanaim', '2003-05-04', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:32:46'),
(165, 'Yuske Bidara', 'Surabaya', '1964-01-26', 'WANITA', 'n/a', 'n/a', 'n/a', 'BAWUNA BIDARA', 'Adik', 'GPIB Surabaya', '1964-08-02', 'GMIST Mahanaim', '1990-04-08', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(166, 'Alfons G.P Bawuna', 'Ulu Siau', '1968-04-18', 'PRIA', 'n/a', 'n/a', 'n/a', 'BAWUNA MANUMPAHI', 'Kepala Keluarga', 'GMIST Ulu', '1968-05-05', 'GMIST Ulu', '1984-04-22', 'Menikah', 'Pelka Bapak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-9970-7496', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:25:57'),
(167, 'Amelia N Manumpahi', 'Ulu Siau', '1975-05-11', 'WANITA', 'n/a', 'n/a', 'n/a', 'BAWUNA MANUMPAHI', 'Istri', 'GMIST Pintu Elok', '1975-12-28', 'GMIST Pintu Elok', '1994-12-25', 'Menikah', 'Pelka Ibu', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:25:32'),
(168, 'Revino Bawuna', 'Ulu Siau', '1994-05-13', 'PRIA', 'n/a', 'n/a', 'n/a', 'BAWUNA MANUMPAHI', 'Anak', 'GMIST Kanang', '1994-12-26', 'GMIST Mahanaim', '2011-04-17', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(169, 'Rigel Hein Bawuna', 'Bogor', '2001-06-06', 'PRIA', 'n/a', 'n/a', 'n/a', 'BAWUNA MANUMPAHI', 'Anak', 'GMIST Mahanaim', '2002-07-21', 'n/a', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:32:37'),
(170, 'Rafael Yohanes Bawuna', 'Bogor', '2007-05-04', 'PRIA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'BAWUNA MANUMPAHI', 'Anak', 'GMIST Mahanaim', '2007-12-26', '', '', 'Belum Menikah', 'Pelka Remaja', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:20:24'),
(171, 'Nur Naomi', 'Palembang', '1962-07-26', 'WANITA', 'n/a', 'n/a', 'n/a', 'BONTE NAOMI', 'Kepala Keluarga', 'n/a', '1983-08-28', 'GEMINDO Bekasi', '1995-10-01', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-8632-5120', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(172, 'Rina Marlita Bonte', 'Palembang', '1986-08-29', 'WANITA', 'n/a', 'n/a', 'n/a', 'BONTE NAOMI', 'Anak', 'n/a', '1989-01-01', 'GKK Bekasi', '2004-04-04', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(173, 'Tanty Novianty Bonte', 'Ternate', '1990-11-28', 'WANITA', 'n/a', 'n/a', 'n/a', 'BONTE NAOMI', 'Anak', 'n/a', '1991-03-24', 'GKK Bekasi', '2007-12-02', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(174, 'Arnold Buisan', 'Purwakarta', '1972-09-22', 'PRIA', 'n/a', 'n/a', 'n/a', 'BUISAN SILITONGA', 'Kepala Keluarga', 'GMIST Ulu', '1980-12-26', 'GMIST Ulu', '1989-12-10', 'Menikah', 'Pelka Bapak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0811-1746-009', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:26:49'),
(175, 'Kristina Silitonga', 'Medan', '1971-04-30', 'WANITA', 'n/a', 'n/a', 'n/a', 'BUISAN SILITONGA', 'Istri', 'HKBP Simarpinggan', '1971-08-22', 'HKBP Simarpinggan', '1985-12-26', 'Menikah', 'Pelka Ibu', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:27:08'),
(176, 'Claudia Jeane S Buisan', 'Bekasi', '1995-08-18', 'WANITA', 'n/a', 'n/a', 'n/a', 'BUISAN SILITONGA', 'Anak', 'GMIST Ulu Siau', '1999-01-03', 'GMIST Mahanaim', '2013-03-24', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(177, 'Andre F. Buisan', 'Bekasi', '1999-09-01', 'PRIA', 'n/a', 'n/a', 'n/a', 'BUISAN SILITONGA', 'Anak', 'GMIST Mahanaim', '2003-05-04', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:32:29'),
(178, 'Japron Dawid', 'Siau', '1952-03-20', 'PRIA', 'n/a', 'n/a', 'n/a', 'DAWID GAGHANA', 'Kepala Keluarga', 'GMIST Ulu', '1952-06-02', 'GMIST Ulu', '1969-12-14', 'Menikah', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:27:51'),
(179, 'Annie Elsye Gaghana', 'Palembang', '1957-04-16', 'WANITA', 'n/a', 'n/a', 'n/a', 'DAWID GAGHANA', 'Istri', 'GPIB Talang Semut', '1958-12-25', 'GMIST Mahanaim', '1979-04-13', 'Menikah', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0813-1701-7529', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-09 09:27:40'),
(180, 'Agnes Lorita Dawid', 'Jakarta', '1997-04-24', 'WANITA', 'n/a', 'n/a', 'n/a', 'DAWID GAGHANA', 'Anak', 'GMIST Mahanaim', '2005-12-26', 'GMIST Mahanaim', '2014-04-13', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(181, 'Max Kurniawan Diamanti', 'Jakarta', '1967-05-31', 'PRIA', 'n/a', 'n/a', 'n/a', 'DIAMANTI SALINDEHO', 'Kepala Keluarga', 'GMIST Mahanaim', '1967-08-06', 'GMIST Mahanaim', '1985-03-30', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0813-1843-0515', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(182, 'Grace Theresia Salindeho', 'Siau', '1967-12-26', 'WANITA', 'n/a', 'n/a', 'n/a', 'DIAMANTI SALINDEHO', 'Istri', 'GMIST Siau', '1967-03-26', 'GMIST Mahanaim', '1987-08-12', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(183, 'Marsya Diamanti', 'Jakarta', '1996-11-24', 'WANITA', 'n/a', 'n/a', 'n/a', 'DIAMANTI SALINDEHO', 'Anak', 'GMIST Mahanaim', '2005-12-26', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:32:18'),
(184, 'Felma Masye Bidara', 'Surabaya', '1968-02-14', 'WANITA', 'n/a', 'n/a', 'n/a', 'FELMA BIDARA', 'Kepala Keluarga', 'GKPII Surabaya', '1971-02-25', 'GMIST Mahanaim', '1988-03-27', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(185, 'Tengku Reitha Bidara', 'Bekasi', '1995-06-10', 'WANITA', 'n/a', 'n/a', 'n/a', 'FELMA BIDARA', 'Anak', 'GMIST Mahanaim', '2008-09-13', 'n/a', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:32:10'),
(186, 'Tengku Reina Bidara', 'Medan', '2001-02-09', 'WANITA', 'n/a', 'n/a', 'n/a', 'FELMA BIDARA', 'Anak', 'GMIST Mahanaim', '2008-09-13', 'n/a', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:32:01'),
(187, 'Tengku Reinhand Bidara', 'Medan', '2002-02-09', 'PRIA', 'n/a', 'n/a', 'n/a', 'FELMA BIDARA', 'Anak', 'GMIST Mahanaim', '2008-09-13', 'n/a', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:31:51'),
(188, 'Tengku Rafia Bidara', 'Medan', '2006-03-13', 'PRIA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'FELMA BIDARA', 'Anak', 'GMIST Mahanaim', '2008-09-13', '', '', 'Belum Menikah', 'Pelka Remaja', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:21:01'),
(189, 'Candra Hartanto', 'Jakarta', '1981-07-26', 'PRIA', 'n/a', 'n/a', 'n/a', 'HARTANTO TAMAKA', 'Kepala Keluarga', 'n/a', '', 'n/a', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(190, 'Angelina Tamaka', 'Jakarta', '1983-09-10', 'WANITA', 'n/a', 'n/a', 'n/a', 'HARTANTO TAMAKA', 'Istri', 'GMIST Mahanaim', '1986-04-13', 'GMIST Mahanaim', '2002-03-24', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-8770-7784', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(191, 'Deandra Rayung Hartanto', 'Bekasi', '2011-01-14', 'WANITA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'HARTANTO TAMAKA', 'Anak', '', '', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:28:45'),
(192, 'Devariel Hartanto', 'Bekasi', '2018-06-18', 'PRIA', 'n/a', 'n/a', 'n/a', 'HARTANTO TAMAKA', 'Anak', '', '', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:15:26'),
(193, 'Tieneke Kansil', 'Jakarta', '1960-06-03', 'WANITA', 'n/a', 'n/a', 'n/a', 'HARTANTO TAMAKA', 'Orangtua', 'n/a', '', 'n/a', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(194, 'Refanus Izaak', 'Ternate', '1966-11-15', 'PRIA', 'n/a', 'n/a', 'n/a', 'IZAAK SANDEHANG', 'Kepala Keluarga', 'n/a', '', 'n/a', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(195, 'Jeane J. Sandehang', 'Tanjung Balai', '1969-07-23', 'WANITA', 'n/a', 'n/a', 'n/a', 'IZAAK SANDEHANG', 'Istri', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-9657-7940', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:38:04'),
(196, 'Josephine R Izaak', 'Bekasi', '2003-01-29', 'WANITA', 'n/a', 'n/a', 'n/a', 'IZAAK SANDEHANG', 'Anak', 'GMIST Mahanaim', '2003-12-26', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:37:49'),
(197, 'Nikita C. Anabel Izaak', 'Bekasi', '2004-06-02', 'WANITA', 'n/a', 'n/a', 'n/a', 'IZAAK SANDEHANG', 'Anak', 'GMIST Mahanaim', '2005-07-30', '', '', 'Belum Menikah', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:37:35'),
(198, 'Thymoti Reinhard Izaak', 'Bekasi', '2008-03-27', 'PRIA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'IZAAK SANDEHANG', 'Anak', '', '', '', '', 'Belum Menikah', 'Pelka Remaja', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:37:09'),
(199, 'Frans Jacob', 'Siau', '1958-10-11', 'PRIA', 'n/a', 'n/a', 'n/a', 'JACOB TAHULENDING', 'Kepala Keluarga', '', '', '', '', 'Menikah', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:36:45'),
(200, 'Yuliana Tahulending', 'Siau', '1957-07-03', 'WANITA', 'n/a', 'n/a', 'n/a', 'JACOB TAHULENDING', 'Istri', '', '', '', '', 'Menikah', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0813-8007-7027', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:36:21'),
(201, 'Michael Alfred Jacob', 'Bekasi', '1993-05-26', 'PRIA', 'n/a', 'n/a', 'n/a', 'JACOB TAHULENDING', 'Anak', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:35:51'),
(202, 'Jacqueline June Mawuntu', 'Tanjung Batu', '1968-01-23', 'WANITA', 'n/a', 'n/a', 'n/a', 'JACQUELINE MAWUNTU', 'Kepala Keluarga', '', '', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0811-886-844', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:35:27'),
(203, 'Juliantje Irianne Lantemona', 'Soa Siau', '1960-07-05', 'WANITA', 'n/a', 'n/a', 'n/a', 'JULIANTJE I LANTEMONA', 'Kepala Keluarga', 'GMIST', '1960-12-26', 'GMIST Mahanaim', '1977-12-11', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0813-1024-3738', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(204, 'Jonathan V. S Kappoh', 'Jakarta', '1991-05-16', 'PRIA', 'n/a', 'n/a', 'n/a', 'JULIANTJE I LANTEMONA', 'Anak', 'GMIST Mahanaim', '1991-06-23', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:34:57'),
(205, 'Jeane Irene Bansaleng', 'Ulu Siau', '1965-07-12', 'WANITA', 'n/a', 'n/a', 'n/a', 'KAARO BANSALENG', 'Kepala Keluarga', 'GMIST Paseng Siau', '1965-08-08', 'GMIST Paseng Siau', '1980-12-14', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-8082-8570', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(206, 'Veyrene Yustina N. Kaaro', 'Jakarta', '2000-03-10', 'WANITA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'KAARO BANSALENG', 'Anak', 'GMIST Mahanaim', '2000-12-26', 'GMIST Mahanaim', '', 'Belum Menikah', 'Pelka Pemuda', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:34:41'),
(207, 'Chevalier George Kaaro', 'Bekasi', '2002-06-24', 'PRIA', 'n/a', 'n/a', 'n/a', 'KAARO BANSALENG', 'Anak', 'GMIST Betlehem', '2003-04-13', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:41:57'),
(208, 'Helni Lydia Kabuhung', 'Jakarta', '1971-11-29', 'WANITA', 'O', 'n/a', 'n/a', 'KABUHUNG LALENOH', 'Kepala Keluarga', 'GMIST Mahanaim', '1973-02-04', 'GKO Kebalen', '1988-12-04', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-3506-1971', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(209, 'Candy Annasye Kabuhung', 'Jakarta', '1976-04-20', 'WANITA', 'O', 'n/a', 'n/a', 'KABUHUNG LALENOH', 'Adik/Kakak/Saudara', 'GMIST Mahanaim', '1977-04-03', 'GMIST Mahanaim', '1993-04-04', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(210, 'Thomas Christopher Lalenoh', 'Malang', '1996-07-30', 'PRIA', 'O', 'n/a', 'n/a', 'KABUHUNG LALENOH', 'Adik/Kakak/Saudara', 'GMIST Mahanaim', '2002-04-07', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:41:48'),
(211, 'Reinhard Kabuhung', 'Siau', '1955-11-20', 'PRIA', 'n/a', 'n/a', 'n/a', 'KABUHUNG MANOPO', 'Kepala Keluarga', 'GMIST', '1956-03-30', 'GMIST', '1974-03-31', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(212, 'Letrientje C Manopo', 'Petta Sangir', '1963-12-20', 'WANITA', 'n/a', 'n/a', 'n/a', 'KABUHUNG MANOPO', 'Istri', 'GMIST', '1964-12-20', 'GMIST', '1980-03-30', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(213, 'Meylisa R Kabuhung', 'Jakarta', '1986-05-30', 'WANITA', 'n/a', 'n/a', 'n/a', 'KABUHUNG MANOPO', 'Anak', 'GMIST', '1987-07-12', 'GMIST', '2004-04-04', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(214, 'Eunike P Kabuhung', 'Jakarta', '1987-11-26', 'WANITA', 'n/a', 'n/a', 'n/a', 'KABUHUNG MANOPO', 'Anak', 'GMIST', '1990-12-26', 'GMIST', '2004-04-04', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0813-1802-6472', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(215, 'Cheester W Kabuhung', 'Jakarta', '1993-03-07', 'PRIA', 'n/a', 'n/a', 'n/a', 'KABUHUNG MANOPO', 'Anak', 'GMIST', '', 'GMIST', '2013-03-24', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:41:36'),
(216, 'Ferren Caroline Kabuhung', 'Jakarta', '2016-02-22', 'WANITA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'KABUHUNG MANOPO', 'Cucu', '', '', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:28:27'),
(217, 'Mario Giovanny Kabuhung', 'Jakarta', '1974-03-01', 'PRIA', 'n/a', 'n/a', 'n/a', 'KABUHUNG MANURUNG', 'Kepala Keluarga', 'n/a', '1974-09-01', 'GMIST Mahanaim', '1993-04-04', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812--1264-9474', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(218, 'Emma Novalina Manurung', 'Jakarta', '1977-11-06', 'WANITA', 'n/a', 'n/a', 'n/a', 'KABUHUNG MANURUNG', 'Istri', '', '', '', '', 'Menikah', 'Pelka Ibu', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:41:23'),
(219, 'Erick J. Setiawan Kabuhung', 'Jakarta', '1970-11-04', 'PRIA', 'n/a', 'n/a', 'n/a', 'KABUHUNG SCHOUTEN', 'Kepala Keluarga', 'GMIST Mahanaim', '', 'GKO Kebalen', '1988-12-04', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0815-8627-2725', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:40:45'),
(220, 'Femmy Sofie Schouten', 'Ujung Pandang', '1970-03-02', 'WANITA', 'n/a', 'n/a', 'n/a', 'KABUHUNG SCHOUTEN', 'Istri', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:40:29'),
(221, 'Gilbert M.D Kabuhung', 'Jakarta', '2004-08-02', 'PRIA', 'n/a', 'n/a', 'n/a', 'KABUHUNG SCHOUTEN', 'Anak', 'Kathedral Jakarta', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:40:13'),
(222, 'Hillary M.A Kabuhung', 'Jakarta', '2006-01-02', 'WANITA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'KABUHUNG SCHOUTEN', 'Anak', 'Kathedral Jakarta', '', '', '', 'Belum Menikah', 'Pelka Remaja', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:39:58'),
(223, 'Silvia A. Schouten', 'Makasar', '1939-04-15', 'WANITA', 'n/a', 'n/a', 'n/a', 'KABUHUNG SCHOUTEN', 'Orangtua', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:39:43'),
(224, 'Juniar Kansil', 'Jakarta', '1983-02-06', 'PRIA', 'n/a', 'n/a', 'Karyawan', 'KANSIL BARAMULI', 'Kepala Keluarga', 'GMIM', '1984-07-15', '', '', 'Menikah', 'Pelka Bapak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-8778-6684', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:39:25'),
(225, 'Bunga Natalia Baramuli', 'Jakarta', '1990-12-13', 'WANITA', 'n/a', 'n/a', 'n/a', 'KANSIL BARAMULI', 'Istri', 'GMIST Mahanaim', '1990-12-26', 'GMIST Mahanaim', '2008-03-16', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(226, 'Wilkens Kuemba', 'Siau', '1959-08-29', 'PRIA', 'n/a', 'n/a', 'n/a', 'KUEMBA MANGERONGKONDA', 'Kepala Keluarga', 'GMIST Siau', '1959-12-26', 'GMIST Siau', '2002-12-15', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(227, 'Freli Megawati', 'Tahuna', '1992-06-10', 'WANITA', 'n/a', 'n/a', 'n/a', 'KUEMBA MANGERONGKONDA', 'Anak', 'GMIST Bebali', '1982-12-26', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0852-1954-0900', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:42:53'),
(228, 'Yopianus Linga', 'Jakarta', '1978-01-25', 'PRIA', 'Gol-O', 'SMA', 'Karyawan', 'LINGA TAMPILANG', 'Kepala Keluarga', 'GMIST Mahanaim', '1978-10-29', 'GMIST Mahanaim', '1994-03-27', 'Menikah', 'Pelka Bapak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0811-9537-550', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 12:54:15'),
(229, 'Evanna Tampilang', 'Jakarta', '1978-06-25', 'WANITA', 'Gol-A', 'Sarjana', 'Ibu Rumah Tangga', 'LINGA TAMPILANG', 'Istri', 'GMIST Mahanaim', '1978-11-05', 'GMIST Mahanaim', '1995-04-09', 'Menikah', 'Pelka Ibu', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(230, 'Timothy Evan Linga', 'Jakarta', '2010-01-30', 'PRIA', 'Gol-A', 'SD', 'Pelajar/Mahasiswa', 'LINGA TAMPILANG', 'Anak', 'GMIST Mahanaim', '2011-02-06', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(231, 'Samuel Jethro Linga', 'Bekasi', '2014-03-14', 'PRIA', 'Gol-A', 'SD', 'Pelajar/Mahasiswa', 'LINGA TAMPILANG', 'Anak', 'GMIST Mahanaim', '2016-12-26', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(232, 'William Sadara Liunsanda', 'Jakarta', '1986-12-11', 'PRIA', 'n/a', 'n/a', 'n/a', 'LIUNSANDA RUUS', 'Kepala Keluarga', 'GMIST Mahanaim', '', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:42:40'),
(233, 'Mei Risnawati Karla Ruus', 'Jakarta', '1987-05-04', 'WANITA', 'n/a', 'n/a', 'n/a', 'LIUNSANDA RUUS', 'Istri', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:45:55'),
(234, 'Pricilia Agustina Liunsanda', 'Bekasi', '2013-08-04', 'WANITA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'LIUNSANDA RUUS', 'Anak', '', '', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:27:56'),
(235, 'Daniel Rafael Liunsanda', 'Bekasi', '2020-08-26', 'PRIA', 'n/a', 'Tidak Sekolah', 'Tidak Bekerja', 'LIUNSANDA RUUS', 'Anak', '', '', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:30:02'),
(236, 'Woi Sawelly Taine', 'Talaud', '1962-03-03', 'WANITA', 'n/a', 'n/a', 'n/a', 'LIUNSANDA TAINE', 'Kepala Keluarga', 'Talaud', '28 Juni 1962', 'GMIST Mahanaim', '1981-04-17', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(237, 'Dortea Liunsanda', 'Jakarta', '1988-02-26', 'WANITA', 'n/a', 'n/a', 'n/a', 'LIUNSANDA TAINE', 'Anak', 'GMIST Mahanaim', '29 Mei 1988', 'GMIST Mahanaim', '2007-04-21', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0878-8515-4000', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(238, 'Octavianus Liunsanda', 'Jakarta', '1991-10-29', 'PRIA', 'n/a', 'n/a', 'n/a', 'LIUNSANDA TAINE', 'Anak', 'GMIST Mahanaim', '1993-12-26', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:45:43'),
(239, 'Bastian Kenzi Tamatompo', 'Bekasi', '2012-09-28', 'PRIA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'LIUNSANDA TAINE', 'Cucu', '', '', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:27:35'),
(240, 'Paulina J. Makawangkel', 'Jakarta', '1924-10-06', 'WANITA', 'n/a', 'n/a', 'n/a', 'MANDIK MAKAWANGKEL', 'Kepala Keluarga', 'GPIB Pasundan', '1924-11-16', 'GPIB', '1952-03-30', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(241, 'Rudolf J. Mandik', 'Tahuna', '1948-05-23', 'PRIA', 'n/a', 'n/a', 'n/a', 'MANDIK MAKAWANGKEL', 'Anak', 'GPIB Kauhis', '', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:45:29'),
(242, 'Joletsin Parauba', 'Talaud', '1957-04-16', 'WANITA', 'n/a', 'n/a', 'n/a', 'MANOPPO PARAUBA', 'Kepala Keluarga', 'GMIST Talaud', '1957-12-16', 'GMIST Talaud', '1976-03-24', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-8042-9746', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(243, 'Jesyurun Q Manoppo', 'Jakarta', '1983-01-25', 'PRIA', 'n/a', 'n/a', 'n/a', 'MANOPPO PARAUBA', 'Anak', 'GMIST Mahanaim', '1983-12-04', 'GMIST Mahanaim', '2000-04-16', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(244, 'Paskalina H. Haribaik', 'Jakarta', '1988-03-28', 'WANITA', 'n/a', 'n/a', 'n/a', 'MANOPPO PARAUBA', 'Anak', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:44:49'),
(245, 'Fredrick Gavriel Manoppo', 'Jakarta', '2018-06-06', 'PRIA', 'n/a', 'n/a', 'Tidak Bekerja', 'MANOPPO PARAUBA', 'Cucu', '', '', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:27:15'),
(246, 'Luter Boda', 'Talaud', '1968-10-25', 'PRIA', 'n/a', 'n/a', 'n/a', 'MANOPPO PARAUBA', 'Adik/Kakak/Saudara', 'GERMITA Tarohan', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:43:58'),
(247, 'Redaldy Wado', 'Talaud', '1998-01-27', 'PRIA', 'n/a', 'n/a', 'n/a', 'MANOPPO PARAUBA', 'Adik/Kakak/Saudara', 'GERMITA BEO', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:43:30'),
(248, 'Junias Sarendeng', 'Talaud', '1965-06-02', 'PRIA', 'n/a', 'n/a', 'n/a', 'MANOPPO PARAUBA', 'Adik/Kakak/Saudara', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:49:38'),
(249, 'Jansiemens Boas Manoppo', 'Jakarta', '1982-01-06', 'PRIA', 'n/a', 'n/a', 'n/a', 'MANOPPO WIWIN', 'Kepala Keluarga', 'GMIST Mahanaim', '1982-06-04', 'GMIST Mahanaim', '2000-04-16', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(250, 'Wiwin Purwaningsih', 'Blitar', '1977-09-28', 'WANITA', 'n/a', 'n/a', 'n/a', 'MANOPPO WIWIN', 'Istri', 'GKJW Blitar', '2008-03-20', 'GKJW Blitar', '2008-03-20', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-1095-2537', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(251, 'Javier Vito Alvaro', 'Kediri', '2017-01-31', 'PRIA', 'n/a', 'n/a', 'Tidak Bekerja', 'MANOPPO WIWIN', 'Anak', '', '', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:26:56'),
(252, 'Ricky Hany Mutara', 'Jayapura', '1976-08-23', 'PRIA', 'n/a', 'n/a', 'n/a', 'MUTARA TAMAKA', 'Kepala Keluarga', 'GPIB', '1977-05-10', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:49:27'),
(253, 'Nidiawati Panjaitan', 'Jakarta', '1979-09-17', 'WANITA', 'n/a', 'n/a', 'n/a', 'MUTARA TAMAKA', 'Istri', 'HKBP', '1982-12-26', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0816-4842-849', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:49:13'),
(254, 'Arthaniqylovia Mutara', 'Bekasi', '2010-04-18', 'WANITA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'MUTARA TAMAKA', 'Anak', '', '2012-08-11', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:26:25'),
(255, 'Samuel G B Imanuell', 'Bekasi', '2017-11-17', 'PRIA', 'n/a', 'n/a', 'Tidak Bekerja', 'MUTARA TAMAKA', 'Anak', '', '', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:29:18'),
(256, 'Nonintje Engelina Diamanti', 'Jakarta', '1960-11-02', 'WANITA', 'n/a', 'n/a', 'n/a', 'NONITJE E. DIAMANTI', 'Kepala Keluarga', 'GMIST Mahanaim', '1961-02-03', 'GMIST Mahanaim', '1977-12-11', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0821-2407-3344', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(257, 'Fredrik Wuisan', 'Jakarta', '1988-02-29', 'PRIA', 'n/a', 'n/a', 'n/a', 'NONITJE E. DIAMANTI', 'Anak', 'GMIST Mahanaim', '1988-10-09', 'GMIST Mahanaim', '2006-04-09', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(258, 'Agustinus Rawuaten', 'Talaud', '1986-08-15', 'PRIA', 'n/a', 'n/a', 'n/a', 'RAWUATEN MANOPPO', 'Kepala Keluarga', 'GERMITA Bukit Moria', '1986-12-14', 'GERMITA Bukit Moria', '2005-02-12', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(259, 'Junia Purnamasari Manopo', 'Jakarta', '1988-06-19', 'WANITA', 'n/a', 'n/a', 'n/a', 'RAWUATEN MANOPPO', 'Istri', 'GMIST Mahanaim', '1989-06-18', 'GMIST Mahanaim', '2005-03-20', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(260, 'Rudolf Salindeho', 'Sangihe', '1955-05-01', 'PRIA', 'n/a', 'n/a', 'n/a', 'SALINDEHO KUEMBA', 'Kepala Keluarga', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:48:20'),
(261, 'Lidya Kuemba', 'Sangihe', '1965-05-01', 'WANITA', 'n/a', 'n/a', 'n/a', 'SALINDEHO KUEMBA', 'Istri', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0813-8486-1327', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:48:11'),
(262, 'Fangli Salindeho', 'Jakarta', '1990-07-19', 'PRIA', 'n/a', 'n/a', 'n/a', 'SALINDEHO KUEMBA', 'Anak', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:48:00'),
(263, 'Bryan Wyne Salindeho', 'Jakarta', '1993-10-23', 'PRIA', 'n/a', 'n/a', 'n/a', 'SALINDEHO KUEMBA', 'Anak', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:47:51'),
(264, 'Winkelman Maloringan', 'Biau', '1974-01-13', 'PRIA', 'n/a', 'n/a', 'n/a', 'SALINDEHO KUEMBA', 'Adik/Kakak/Saudara', '', '', '', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:47:41'),
(265, 'Richard Salmon', 'Ternate', '1961-05-31', 'PRIA', 'n/a', 'n/a', 'n/a', 'SALMON PALOMARIA', 'Kepala Keluarga', 'GMIH Tobelo', '1961-12-26', 'GMIH Tobelo', '1984-04-15', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(266, 'Nella Palomaria', 'Ternate', '1961-11-12', 'WANITA', 'n/a', 'n/a', 'n/a', 'SALMON PALOMARIA', 'Istri', 'Bethania Ambon', '1962-12-26', 'Bethania Ambon', '1981-04-12', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-9087-6262', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(267, 'Charlan A.M Nuda', 'Ambon', '1986-04-17', 'PRIA', 'n/a', 'n/a', 'n/a', 'SALMON PALOMARIA', 'Anak', 'Bethania Ambon', '1988-12-18', 'GMIST Mahanaim', '2009-03-29', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(268, 'Ricky Yohanes Palomaria', 'Ternate', '1986-04-11', 'PRIA', 'n/a', 'n/a', 'n/a', 'SALMON PALOMARIA', 'Adik/Kakak/Saudara', 'n/a', '1991-08-04', 'GMIST Mahanaim', '2009-03-29', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(269, 'Endang Suryatmini', 'Madiun', '1962-10-19', 'WANITA', 'n/a', 'n/a', 'n/a', 'SANGKERING ENDANG', 'Kepala Keluarga', 'GMIST Mahanaim', '1987-11-22', 'GMIST Mahanaim', '1988-03-27', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0813-1963-1883', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(270, 'Panji', 'Jakarta', '1985-10-08', 'PRIA', 'n/a', 'n/a', 'n/a', 'SANGKERING ENDANG', 'Anak', 'GMIST Mahanaim', '1987-11-22', 'GMIST Mahanaim', '2003-04-13', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(271, 'Ronald Jefri Siregar', 'Medan', '1980-10-22', 'PRIA', 'n/a', 'n/a', 'n/a', 'SIREGAR BONTE', 'Kepala Keluarga', 'HKBP', '1983-03-25', 'GKK Bekasi', '2002-03-24', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(272, 'Conny Fransisca Bonte', 'Palembang', '1983-01-13', 'WANITA', 'n/a', 'n/a', 'n/a', 'SIREGAR BONTE', 'Istri', 'n/a', '1983-08-28', 'GKK Bekasi', '2001-01-08', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(273, 'Jessica Deandra Abigail S', 'Bekasi', '2012-10-13', 'WANITA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'SIREGAR BONTE', 'Anak', 'GMIST Mahanaim', '2012-12-26', '', '', 'Belum Menikah', 'Pelka Anak', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:25:31'),
(274, 'Sugiarto Sumardjo', 'Solo', '1955-02-02', 'PRIA', 'n/a', 'n/a', 'n/a', 'SUGIARTO DAUHAN', 'Kepala Keluarga', 'GMIST Mahanaim', '1982-03-21', 'GMIST Galilea', '1995-12-03', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(275, 'Frida Cardina Dauhan', 'Siau', '1960-02-15', 'WANITA', 'n/a', 'n/a', 'n/a', 'SUGIARTO DAUHAN', 'Istri', 'GMIST Mahanaim', '1960-04-18', 'GMIST Galilea', '1995-12-03', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-8111-544', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(276, 'Puspa Aviana', 'Jakarta', '1992-04-13', 'WANITA', 'n/a', 'n/a', 'n/a', 'SUGIARTO DAUHAN', 'Anak', 'GKO', '', 'GMIST Mahanaim', '2009-04-05', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:47:30'),
(277, 'Jemmy Suratno', 'Jakarta', '1962-01-05', 'PRIA', 'n/a', 'n/a', 'n/a', 'SURATNO TAIDI', 'Kepala Keluarga', 'GMIST Mahanaim', '1988-02-07', 'GMIST Mahanaim', '1993-04-04', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(278, 'Jenny Dorkas Taidi', 'Jakarta', '1966-01-10', 'WANITA', 'n/a', 'n/a', 'n/a', 'SURATNO TAIDI', 'Istri', 'GMIST Mahanaim', '1988-02-23', 'GMIST Mahanaim', '', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-5172-0344', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:47:20'),
(279, 'M.C Arthur', 'Jakarta', '1994-04-26', 'PRIA', 'n/a', 'n/a', 'n/a', 'SURATNO TAIDI', 'Anak', 'GMIST Mahanaim', '1995-05-15', 'GKI Kwitang', '2012-03-25', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(280, 'Audrey', 'Jakarta', '1996-08-03', 'WANITA', 'n/a', 'n/a', 'n/a', 'SURATNO TAIDI', 'Anak', 'GMIST Mahanaim', '1997-12-26', 'GKI Kwitang', '2012-03-25', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(281, 'James Rives', 'Jakarta', '1968-06-22', 'PRIA', 'n/a', 'n/a', 'n/a', 'SURATNO TAIDI', 'Adik', 'GMIST Mahanaim', '1975-11-23', 'n/a', '1900-01-01', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(282, 'Max Waldus Tahulending', 'Siau', '1947-05-05', 'PRIA', 'n/a', 'n/a', 'n/a', 'TAHULENDING DANDEL', 'Kepala Keluarga', 'GMIST Beong Siau\n', '1900-01-01', 'GMIST Beong Siau\n', '1900-01-01', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(283, 'Suci Rahayu', 'Kotabumi', '1977-01-07', 'WANITA', 'n/a', 'n/a', 'n/a', 'TAMATOMPO SUCIRAHAYU', 'Kepala Keluarga', 'n/a', '1977-04-03', 'n/a', '1996-04-13', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0812-9859-2287', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(284, 'Angely P. Tamatompo', 'Jakarta', '2004-09-06', 'WANITA', 'n/a', 'n/a', 'n/a', 'TAMATOMPO SUCIRAHAYU', 'Anak', 'GMIM', '2006-01-05', 'n/a', '1900-01-01', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(285, 'Wahyudi Joek Tamatompo', 'Jakarta', '2008-04-12', 'PRIA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'TAMATOMPO SUCIRAHAYU', 'Anak', 'GMIM', '2008-12-28', '', '', 'Belum Menikah', 'Pelka Remaja', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:22:54'),
(286, 'Wansaleng Wado', 'Lobbo', '1953-01-21', 'PRIA', 'n/a', 'n/a', 'n/a', 'WADO TRISTIYANI', 'Kepala Keluarga', 'GMIST Lobbo', '1953-02-22', 'GMIST Beo', '1973-12-09', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0851-5130-0088', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(287, 'Paskalis Nico Satrio Wado', 'Bekasi', '1999-05-23', 'PRIA', 'n/a', 'n/a', 'n/a', 'WADO TRISTIYANI', 'Anak', 'GMIST Mahanaim', '2000-03-19', 'GMIST Mahanaim', '1900-01-01', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(288, 'Patrisia Rita Kristina Wado', 'Bekasi', '2000-10-19', 'WANITA', 'n/a', 'n/a', 'n/a', 'WADO TRISTIYANI', 'Anak', 'GMIST Mahanaim', '2001-10-21', 'GMIST Mahanaim', '1900-01-01', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(289, 'Dio Karol Delaz Wado', 'Jakarta', '2006-10-11', 'PRIA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'WADO TRISTIYANI', 'Anak', 'GMIST Mahanaim', '2006-11-19', '', '', 'Belum Menikah', 'Pelka Remaja', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:23:15'),
(290, 'Wuri Jatmiko', 'Solo', '1979-06-02', 'PRIA', 'n/a', 'n/a', 'n/a', 'WURI SUGIARTO', 'Kepala Keluarga', 'n/a', '1900-01-01', 'n/a', '1900-01-01', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(291, 'Cindy Agustin', 'Jakarta', '1980-08-22', 'WANITA', 'n/a', 'n/a', 'n/a', 'WURI SUGIARTO', 'Istri', 'GMIST Mahanaim', '21 Maret 1982', 'GMIST Mahanaim', '1997-04-23', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', '0877-7700-0313', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(292, 'Angelica Zefanya', 'Jakarta', '2003-10-24', 'WANITA', 'n/a', 'n/a', 'n/a', 'WURI SUGIARTO', 'Anak', 'GMIST Mahanaim\n', '1900-01-01', 'n/a', '1900-01-01', 'n/a', 'n/a', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(293, 'Deven Feodora Dauhan', 'Jakarta', '2005-08-19', 'PRIA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'WURI SUGIARTO', 'Anak', 'GMIST Mahanaim', '1900-01-01', '', '', 'Belum Menikah', 'Pelka Remaja', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:23:31'),
(294, 'Misael Feodora Dauhan', 'Jakarta', '2005-08-19', 'PRIA', 'n/a', 'n/a', 'Pelajar/Mahasiswa', 'WURI SUGIARTO', 'Anak', 'GMIST Mahanaim', '', '', '', 'Belum Menikah', 'Pelka Remaja', 'Aktif', 'Masih Hidup', 'n/a', 'n/a', 'n/a', 'n/a', 'n/a', '0', '2022-08-07 04:17:17', 'Yopianus Linga', '2022-08-08 15:25:06'),
(295, 'Test Person', 'Jakarta', '1990-01-11', 'Pria', 'Gol-O', 'SMA', 'Karyawan', 'KELUARGA COBA', 'Saudara/Kemenakan', '', '', '', '', 'Belum Menikah', 'Pelka Bapak', 'Tidak Aktif', 'Meninggal', '2022-03-01', 'Sakit', 'Sudah', 'Sudah', '0812345678', '0', '2022-08-07 04:17:17', '', '2022-08-07 04:17:17'),
(306, 'Coba Baru', 'Jakarta', '1970-01-11', 'Pria', 'Gol-O', 'SMP', 'Karyawan', 'KELUARGA COBA', 'Saudara/Kemenakan', '', '', '', '', 'Duda', 'Pelka Bapak', 'Aktif', 'Masih Hidup', '', '', 'Sudah', 'Sudah', '', 'Yopianus Linga', '2022-08-07 14:04:20', 'Yopianus Linga', '2022-08-07 14:06:21');

--
-- Triggers `tbl_jemaat`
--
DELIMITER $$
CREATE TRIGGER `before_jemaat_delete` BEFORE DELETE ON `tbl_jemaat` FOR EACH ROW BEGIN
DECLARE vUser varchar(50);

SELECT CURRENT_USER() INTO vUser;

    INSERT INTO tbl_jemaat_del(nama,tplahir,tglahir,gender,goldarah,pendidikan,pekerjaan,keluarga, posisi,tpbaptis,tglbaptis,tpsidi,tglsidi,menikah,pelka,stat_jmt,stat_meninggal,tglmeninggal,info_meninggal,stat_baptis,stat_sidi,mobile,del_date,del_by) 
    VALUES(old.nama,old.tplahir,old.tglahir,old.gender,old.goldarah,old.pendidikan,old.pekerjaan,old.keluarga,old. posisi,old.tpbaptis,old.tglbaptis,old.tpsidi,old.tglsidi,old.menikah,old.pelka,old.stat_jmt,old.stat_meninggal,old.tglmeninggal,old.info_meninggal,old.stat_baptis,old.stat_sidi,old.mobile,SYSDATE(),
     vUser );
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jemaat_del`
--

CREATE TABLE `tbl_jemaat_del` (
  `id_jmt` int NOT NULL,
  `nama` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tplahir` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tglahir` date NOT NULL,
  `gender` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `goldarah` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keluarga` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `posisi` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tpbaptis` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tglbaptis` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tpsidi` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tglsidi` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `menikah` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pelka` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stat_jmt` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stat_meninggal` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tglmeninggal` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `info_meninggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stat_baptis` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `stat_sidi` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `del_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `del_by` varchar(32) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jemaat_del`
--

INSERT INTO `tbl_jemaat_del` (`id_jmt`, `nama`, `tplahir`, `tglahir`, `gender`, `goldarah`, `pendidikan`, `pekerjaan`, `keluarga`, `posisi`, `tpbaptis`, `tglbaptis`, `tpsidi`, `tglsidi`, `menikah`, `pelka`, `stat_jmt`, `stat_meninggal`, `tglmeninggal`, `info_meninggal`, `stat_baptis`, `stat_sidi`, `mobile`, `del_date`, `del_by`) VALUES
(2, 'Coba Empat', 'Jakarta', '1970-01-11', 'Pria', 'Gol-A', 'SMA', 'Karyawan', 'KELUARGA COBA', 'Saudara/Kemenakan', '', '', '', '', 'Belum Menikah', 'Pelka Bapak', 'Aktif', 'Masih Hidup', '', '', 'Sudah', 'Sudah', '', '2022-08-05 09:15:46', ''),
(3, 'Coba Last', 'Jakarta', '1970-01-11', 'Pria', 'Gol-B', 'SMA', 'Karyawan', 'KELUARGA COBA', 'Orang Tua', '', '', '', '', 'Duda', 'Pelka Bapak', 'Aktif', 'Masih Hidup', '', '', 'Sudah', 'Sudah', '', '2022-08-05 09:25:29', 'root@localhost'),
(4, 'Coba Lagi', 'Jakarta', '1990-01-11', 'Pria', 'Gol-A', 'SMA', 'Karyawan', 'KELUARGA COBA', 'Saudara/Kemenakan', '', '', '', '', 'Belum Menikah', 'Pelka Bapak', 'Aktif', 'Masih Hidup', '', '', 'Sudah', 'Sudah', '', '2022-08-05 14:49:44', 'root@localhost'),
(5, 'Coba Minggu', 'Jakarta', '1970-01-11', 'Pria', 'Gol-O', 'Diploma', 'Karyawan', 'KELUARGA COBA', 'Orang Tua', '', '', '', '', 'Duda', 'Pelka Bapak', 'Aktif', 'Masih Hidup', '', '', 'Sudah', 'Sudah', '', '2022-08-07 14:12:31', 'root@localhost');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluarga`
--

CREATE TABLE `tbl_keluarga` (
  `id_kel` int NOT NULL,
  `nama_kel` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `kwp` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `kepala` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tglnikah` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `propinsi` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `kodepos` int NOT NULL,
  `telepon` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stat_kel` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `info_kel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_keluarga`
--

INSERT INTO `tbl_keluarga` (`id_kel`, `nama_kel`, `kwp`, `kepala`, `tglnikah`, `alamat`, `propinsi`, `kodepos`, `telepon`, `stat_kel`, `info_kel`, `created_by`, `created_time`, `update_by`, `update_time`) VALUES
(1, 'ANTHONIE KAKAMBONG', 'KWP-9', 'Hamel Himel Stein Anthonie', '0001-01-01', 'Perum. Permata Regensi Jl. Vitara 3 Blok B3/12, Bekasi Timur', 'Jawa Barat', 1, '', 'Aktif', '', '', '2022-08-07 08:10:34', 'operator', '2022-08-08 17:09:37'),
(2, 'ALDRIN MAWUNTU', 'KWP-9', 'Aldrin Lucky Bertje Mawuntu', '1900-01-01', 'n/a', 'n/a', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', 'operator', '2022-08-08 16:48:00'),
(3, 'BANSALENG BOGAR', 'KWP-9', 'George Bansaleng', '1900-01-01', 'Perum Taman Alinda Kencana Blok M12/1, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(4, 'BARAMULI DEREK', 'KWP-9', 'Lenny Derek', '1900-01-01', 'Rusun Tanjung Priok', 'DKI Jakarta', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(5, 'BAWUNA BIDARA', 'KWP-9', 'Dikson Bawuna', '1900-01-01', 'Perum Pondok Timur Indah, Jl. Elang II Blok E/95, Bekasi Timur', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(6, 'BAWUNA MANUMPAHI', 'KWP-9', 'Alfons G.P Bawuna', '1900-01-01', 'Perum Limus Pratama Regensi\nJl. Cendana 7 Blok F11/36 Cileungsi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(7, 'BONTE NAOMI', 'KWP-9', 'Nur Naomi', '1900-01-01', 'Perum. BJI Kampung Cerewet\nJl. Delima I Blok C8/9, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(8, 'BUISAN SILITONGA', 'KWP-9', 'Arnold Buisan', '1900-01-01', 'Perum Grand Wisata Cluster De Orange', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(9, 'DAWID GAGHANA', 'KWP-9', 'Japron Dawid', '1900-01-01', 'Perum Alamanda Regensi Blok I 6/16, Tambun Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(10, 'DIAMANTI SALINDEHO', 'KWP-9', 'Max Kurniawan Diamanti', '1900-01-01', 'Perum Griya Kenari Mas Blok C1/26\nCileungsi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(11, 'FELMA BIDARA', 'KWP-9', 'Felma Masye Bidara', '1900-01-01', 'Perum Pondok Timur Indah, Jl. Elang II Blok E/95, Bekasi Timur', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(12, 'HARTANTO TAMAKA', 'KWP-9', 'Candra Hartanto', '1900-01-01', 'Perum. Bekasi Timur Regensi Blok R15/1, Bekasi Timur', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(13, 'IZAAK SANDEHANG', 'KWP-9', 'Refanus Izaak', '1900-01-01', 'Perum. Legenda Park Blok C8/16 Tambun, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(14, 'JACOB TAHULENDING', 'KWP-9', 'Frans Jacob', '1900-01-01', 'Taman Cikunir Indah Blok E7/13, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(15, 'JACQUELINE MAWUNTU', 'KWP-9', 'Jacqueline June Mawuntu', '1900-01-01', 'n/a', 'n/a', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(16, 'JULIANTJE I LANTEMONA', 'KWP-9', 'Juliantje Irianne Lantemona', '1900-01-01', 'Perumahan Margahayu\nJl. Mawar 2 Blok B no. 125, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(17, 'KAARO BANSALENG', 'KWP-9', 'Jeane Irene Bansaleng', '1900-01-01', 'Perum Taman Alinda Blok M9/11, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(18, 'KABUHUNG LALENOH', 'KWP-9', 'Helni Lydia Kabuhung', '1900-01-01', 'Perum Babelan Mas Permai Blok A No. 314, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(19, 'KABUHUNG MANOPO', 'KWP-9', 'Reinhard Kabuhung', '1900-01-01', 'n/a', 'n/a', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(20, 'KABUHUNG MANURUNG', 'KWP-9', 'Mario Giovanny Kabuhung', '1900-01-01', 'Grand Emerald Resindence, Kelapa Gading, Jakarta', 'DKI Jakarta', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(21, 'KABUHUNG SCHOUTEN', 'KWP-9', 'Erick J. Setiawan Kabuhung', '1900-01-01', 'Perum Pulo Permatasari Blok A2 No. 5, Galaxy - Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(22, 'KANSIL BARAMULI', 'KWP-9', 'Juniar Kansil', '1900-01-01', 'Perum Bumi Sakinah 1 Tahap 2 Blok B2 No. 11 Pahlawan Setia Tarumajaya, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(23, 'KUEMBA MANGERONGKONDA', 'KWP-9', 'Wilkens Kuemba', '1900-01-01', 'Kel. Kuemba Mangerongkonda\nPerum. Bekasi Timur Regensi Blok Q1/17. Bekasi Timur', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(24, 'LINGA TAMPILANG', 'KWP-9', 'Yopianus Linga', '2009-06-06', 'Vila Mutiara Gading 2 Blok X6/35, Karangsatria, Tambun Utara, Bekasi', 'Jawa Barat', 17510, '', 'Aktif', '', '', '2022-08-07 08:10:34', 'Yopianus Linga', '2022-08-08 12:55:54'),
(25, 'LIUNSANDA RUUS', 'KWP-9', 'William Sadara Liunsanda', '1900-01-01', 'n/a', 'n/a', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(26, 'LIUNSANDA TAINE', 'KWP-9', 'Woi Sawelly Taine', '1900-01-01', 'Perum Babelan Indah Jl. Balinda 14 Blok C/18, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(27, 'MANDIK MAKAWANGKEL', 'KWP-9', 'Paulina J. Makawangkel', '1900-01-01', 'Kampung Sawah, Pd. Gede', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(28, 'MANOPPO PARAUBA', 'KWP-9', 'Joletsin Parauba', '1900-01-01', 'Perum Babelan Indah,\nJl. Balinda 20 Blok C/392, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(29, 'MANOPPO WIWIN', 'KWP-9', 'Jansiemens Boas Manoppo', '1900-01-01', 'Perum Babelan Indah,\nJl. Balinda 20 Blok C/392, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(30, 'MUTARA TAMAKA', 'KWP-9', 'Ricky Hany Mutara', '1900-01-01', 'Perum Bekasi Timur Regensi Blok Q2/10, Bekasi Timur', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(31, 'NONITJE E. DIAMANTI', 'KWP-9', 'Nonintje Engelina Diamanti', '1900-01-01', 'Jl. Teluk Angsan Permai VI Blok D2/90, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(32, 'RAWUATEN MANOPPO', 'KWP-9', 'Agustinus Rawuaten', '1900-01-01', 'Perum Babelan Indah,\nJl. Balinda 20 Blok C/392, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(33, 'SALINDEHO KUEMBA', 'KWP-9', 'Rudolf Salindeho', '1900-01-01', 'Perum. Jati Unggul, Jl. Jati Agung I Blok A9/12, Seroja', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(34, 'SALMON PALOMARIA', 'KWP-9', 'Richard Salmon', '1900-01-01', 'Perum Pondok Timur Indah, Jl. Flamboyan Blok F/74, Bekasi Timur', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(35, 'SANGKERING ENDANG', 'KWP-9', 'Endang Suryatmini', '1900-01-01', 'Kel. Sangkering Endang\nPerum Taman Narogong I Blok C11/3, Bekasi Timur\nPh: 0818192307', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(36, 'SIREGAR BONTE', 'KWP-9', 'Ronald Jefri Siregar', '1900-01-01', 'Perum. BJI Kampung Cerewet\nJl. Delima I Blok C8/9, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(37, 'SUGIARTO DAUHAN', 'KWP-9', 'Sugiarto Sumardjo', '1900-01-01', 'Perum Pondok Ungu Permai Blok B6/7, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(38, 'SURATNO TAIDI', 'KWP-9', 'Jemmy Suratno', '1900-01-01', 'Perum Wisma Jaya Jl. Kusuma Timur 3C Blok F3/14, Bekasi Timur', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(39, 'TAHULENDING DANDEL', 'KWP-9', 'Max Waldus Tahulending', '1900-01-01', 'Taman Cikunir Indah Blok B3/8, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(40, 'TAMATOMPO SUCIRAHAYU', 'KWP-9', 'Suci Rahayu', '1900-01-01', 'Perum. Cluster Alamanda Blok W7/37, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(41, 'WADO TRISTIYANI', 'KWP-9', 'Wansaleng Wado', '1900-01-01', 'Perum Babelan Indah, Jl. Balinda 20 Blok C 376, Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(42, 'WURI SUGIARTO', 'KWP-9', 'Wuri Jatmiko', '1900-01-01', 'Perum Taman Wisata Blok E6/9 (Taman Elok), Candrabaga Bekasi', 'Jawa Barat', 1, 'n/a', 'Aktif', 'n/a', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34'),
(43, 'KELUARGA COBA', 'KWP-1', 'Bapak Coba', '2000-08-01', 'Jakarta', 'DKI Jakarta', 14130, '', 'Aktif', 'Single Parents', '', '2022-08-07 08:10:34', '', '2022-08-07 08:10:34');

--
-- Triggers `tbl_keluarga`
--
DELIMITER $$
CREATE TRIGGER `before_keluarga_delete` BEFORE DELETE ON `tbl_keluarga` FOR EACH ROW BEGIN
DECLARE vUser varchar(50);

SELECT CURRENT_USER() INTO vUser;

    INSERT INTO tbl_keluarga_del(nama_kel,kwp,kepala,tglnikah,alamat,propinsi,kodepos,telepon, stat_kel,info_kel,del_date,del_by) 
    VALUES(old.nama_kel,old.kwp,old.kepala,old.tglnikah,old.alamat,old.propinsi,old.kodepos,old.telepon, old.stat_kel,old.info_kel,SYSDATE(),vUser);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keluarga_del`
--

CREATE TABLE `tbl_keluarga_del` (
  `id_kel` int NOT NULL,
  `nama_kel` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kwp` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kepala` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tglnikah` date DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `propinsi` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kodepos` int NOT NULL,
  `telepon` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `stat_kel` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `info_kel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `del_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `del_by` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_keluarga_del`
--

INSERT INTO `tbl_keluarga_del` (`id_kel`, `nama_kel`, `kwp`, `kepala`, `tglnikah`, `alamat`, `propinsi`, `kodepos`, `telepon`, `stat_kel`, `info_kel`, `del_date`, `del_by`) VALUES
(1, 'Test Delete', 'KWP-1', 'Test Kepala', '2009-01-01', 'Bekasi', 'Jawa Barat', 17510, '', 'Aktif', '', '2022-08-07 17:39:16', 'root@localhost');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_majelis`
--

CREATE TABLE `tbl_majelis` (
  `id_mjl` int NOT NULL,
  `nama_mjl` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `kwp` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan_mjl` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `masa_jabatan` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_majelis`
--

INSERT INTO `tbl_majelis` (`id_mjl`, `nama_mjl`, `gender`, `kwp`, `jabatan_mjl`, `masa_jabatan`, `created_by`, `created_time`, `update_by`, `update_time`) VALUES
(3, 'Juniar Kansil', 'Pria', 'KWP-9', 'Diaken', '2020-2025', NULL, '2022-08-07 17:00:38', NULL, '2022-08-07 17:00:38'),
(4, 'Candy Annasye Kabuhung', 'Wanita', 'KWP-9', 'Penatua', '2020-2025', NULL, '2022-08-07 17:00:38', NULL, '2022-08-07 17:00:38'),
(6, 'Alfons G.P Bawuna', 'Pria', 'KWP-9', 'Penatua', '2020-2025', NULL, '2022-08-07 17:00:38', NULL, '2022-08-07 17:00:38'),
(8, 'Refaldo Timothi Bawuna', 'Pria', 'KWP-3', 'Diaken', '2020-2025', 'operator', '2022-08-08 16:15:49', NULL, '2022-08-08 16:15:49');

--
-- Triggers `tbl_majelis`
--
DELIMITER $$
CREATE TRIGGER `before_majelis_delete` BEFORE DELETE ON `tbl_majelis` FOR EACH ROW BEGIN
DECLARE vUser varchar(50);

SELECT CURRENT_USER() INTO vUser;

    INSERT INTO tbl_majelis_del(nama_mjl,gender,kwp,jabatan_mjl,masa_jabatan,del_date,del_by) 
    VALUES(old.nama_mjl,old.gender,old.kwp,old.jabatan_mjl,old.masa_jabatan,SYSDATE(),vUser);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_majelis_del`
--

CREATE TABLE `tbl_majelis_del` (
  `id_mjl` int NOT NULL,
  `nama_mjl` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kwp` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan_mjl` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `masa_jabatan` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `del_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `del_by` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_majelis_del`
--

INSERT INTO `tbl_majelis_del` (`id_mjl`, `nama_mjl`, `gender`, `kwp`, `jabatan_mjl`, `masa_jabatan`, `del_date`, `del_by`) VALUES
(1, 'Amelia N Manumpahi', 'Wanita', 'KWP-9', 'Diaken', '2020-2025', '2022-08-07 17:30:37', 'root@localhost');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendeta`
--

CREATE TABLE `tbl_pendeta` (
  `id_pdt` int NOT NULL,
  `nama_pdt` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `tplahir` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `tglahir` date NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan_pdt` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `masa_jabatan` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `status_pdt` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_by` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_by` varchar(32) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pendeta`
--

INSERT INTO `tbl_pendeta` (`id_pdt`, `nama_pdt`, `tplahir`, `tglahir`, `gender`, `alamat`, `mobile`, `pendidikan`, `jabatan_pdt`, `masa_jabatan`, `status_pdt`, `created_by`, `created_time`, `update_by`, `update_time`) VALUES
(3, 'John White', 'Jakarta', '1978-01-25', 'Pria', 'Jakarta Utara', '0811-2233-4455', 'STT Jakarta', 'Pendeta Jemaat', '2020-2025', 'Aktif', NULL, '2022-08-07 17:31:32', 'Mahanaim', '2022-08-07 17:31:32'),
(5, 'Peter Black', 'Jakarta', '1990-01-11', 'Pria', 'Jakarta', '0811-1111-2222', 'STT Jakarta', 'Pendeta Jemaat', '2020-2025', 'Aktif', NULL, '2022-08-08 02:51:13', 'Yopianus Linga', '2022-08-08 02:51:13'),
(7, 'Samuel Sam', 'Jakarta', '1970-01-11', 'Pria', 'Jakarta', '081212345678', 'STT Jakarta', 'Pendeta Jemaat', '2020-2025', 'Aktif', NULL, '2022-08-07 17:03:13', NULL, '2022-08-07 17:03:13'),
(8, 'Diana Carl', 'Jakarta', '1990-01-11', 'Pria', 'Jakarta', '081512341234', 'STT Jakarta', 'Pendeta Jemaat', '2020-2025', 'Tidak Aktif', NULL, '2022-08-07 17:03:13', NULL, '2022-08-07 17:03:13');

--
-- Triggers `tbl_pendeta`
--
DELIMITER $$
CREATE TRIGGER `before_pendeta_delete` BEFORE DELETE ON `tbl_pendeta` FOR EACH ROW BEGIN
DECLARE vUser varchar(50);

SELECT CURRENT_USER() INTO vUser;

    INSERT INTO tbl_pendeta_del(nama_pdt,tplahir,tglahir,gender,alamat,mobile,pendidikan,jabatan_pdt,masa_jabatan,status_pdt,del_date,del_by) 
    VALUES(old.nama_pdt,old.tplahir,old.tglahir,old.gender,old.alamat,old.mobile,old.pendidikan,old.jabatan_pdt,old.masa_jabatan,old.status_pdt,SYSDATE(),vUser);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendeta_del`
--

CREATE TABLE `tbl_pendeta_del` (
  `id_pdt` int NOT NULL,
  `nama_pdt` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tplahir` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tglahir` date NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan_pdt` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `masa_jabatan` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_pdt` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `del_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `del_by` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pendeta_del`
--

INSERT INTO `tbl_pendeta_del` (`id_pdt`, `nama_pdt`, `tplahir`, `tglahir`, `gender`, `alamat`, `mobile`, `pendidikan`, `jabatan_pdt`, `masa_jabatan`, `status_pdt`, `del_date`, `del_by`) VALUES
(1, 'Gabriel Soto', 'Jakarta', '1990-01-11', 'Wanita', 'Jakarta', '0811-1111-2222', 'STT Jakarta', 'Pendeta Jemaat', '2020-2025', 'Aktif', '2022-08-07 17:31:50', 'root@localhost');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `mst_didik`
--
ALTER TABLE `mst_didik`
  ADD PRIMARY KEY (`id_didik`);

--
-- Indexes for table `mst_goldarah`
--
ALTER TABLE `mst_goldarah`
  ADD PRIMARY KEY (`id_gold`);

--
-- Indexes for table `mst_kerja`
--
ALTER TABLE `mst_kerja`
  ADD PRIMARY KEY (`id_kerja`);

--
-- Indexes for table `mst_kwp`
--
ALTER TABLE `mst_kwp`
  ADD PRIMARY KEY (`id_kwp`);

--
-- Indexes for table `mst_nikah`
--
ALTER TABLE `mst_nikah`
  ADD PRIMARY KEY (`id_stnikah`);

--
-- Indexes for table `mst_pelka`
--
ALTER TABLE `mst_pelka`
  ADD PRIMARY KEY (`id_pelka`);

--
-- Indexes for table `mst_posisi`
--
ALTER TABLE `mst_posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indexes for table `mst_propinsi`
--
ALTER TABLE `mst_propinsi`
  ADD PRIMARY KEY (`id_propinsi`);

--
-- Indexes for table `mst_status`
--
ALTER TABLE `mst_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `tbl_jemaat`
--
ALTER TABLE `tbl_jemaat`
  ADD PRIMARY KEY (`id_jmt`);

--
-- Indexes for table `tbl_jemaat_del`
--
ALTER TABLE `tbl_jemaat_del`
  ADD PRIMARY KEY (`id_jmt`);

--
-- Indexes for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indexes for table `tbl_keluarga_del`
--
ALTER TABLE `tbl_keluarga_del`
  ADD PRIMARY KEY (`id_kel`);

--
-- Indexes for table `tbl_majelis`
--
ALTER TABLE `tbl_majelis`
  ADD PRIMARY KEY (`id_mjl`);

--
-- Indexes for table `tbl_majelis_del`
--
ALTER TABLE `tbl_majelis_del`
  ADD PRIMARY KEY (`id_mjl`);

--
-- Indexes for table `tbl_pendeta`
--
ALTER TABLE `tbl_pendeta`
  ADD PRIMARY KEY (`id_pdt`);

--
-- Indexes for table `tbl_pendeta_del`
--
ALTER TABLE `tbl_pendeta_del`
  ADD PRIMARY KEY (`id_pdt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindb`
--
ALTER TABLE `admindb`
  MODIFY `id_adm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_didik`
--
ALTER TABLE `mst_didik`
  MODIFY `id_didik` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mst_goldarah`
--
ALTER TABLE `mst_goldarah`
  MODIFY `id_gold` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_kerja`
--
ALTER TABLE `mst_kerja`
  MODIFY `id_kerja` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mst_kwp`
--
ALTER TABLE `mst_kwp`
  MODIFY `id_kwp` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mst_nikah`
--
ALTER TABLE `mst_nikah`
  MODIFY `id_stnikah` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_pelka`
--
ALTER TABLE `mst_pelka`
  MODIFY `id_pelka` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mst_posisi`
--
ALTER TABLE `mst_posisi`
  MODIFY `id_posisi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mst_propinsi`
--
ALTER TABLE `mst_propinsi`
  MODIFY `id_propinsi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `mst_status`
--
ALTER TABLE `mst_status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_jemaat`
--
ALTER TABLE `tbl_jemaat`
  MODIFY `id_jmt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT for table `tbl_jemaat_del`
--
ALTER TABLE `tbl_jemaat_del`
  MODIFY `id_jmt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_keluarga`
--
ALTER TABLE `tbl_keluarga`
  MODIFY `id_kel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_keluarga_del`
--
ALTER TABLE `tbl_keluarga_del`
  MODIFY `id_kel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_majelis`
--
ALTER TABLE `tbl_majelis`
  MODIFY `id_mjl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_majelis_del`
--
ALTER TABLE `tbl_majelis_del`
  MODIFY `id_mjl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pendeta`
--
ALTER TABLE `tbl_pendeta`
  MODIFY `id_pdt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_pendeta_del`
--
ALTER TABLE `tbl_pendeta_del`
  MODIFY `id_pdt` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
