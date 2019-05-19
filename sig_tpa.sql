-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sig_tpa
CREATE DATABASE IF NOT EXISTS `sig_tpa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sig_tpa`;

-- Dumping structure for table sig_tpa.administrator
CREATE TABLE IF NOT EXISTS `administrator` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.administrator: ~3 rows (approximately)
/*!40000 ALTER TABLE `administrator` DISABLE KEYS */;
REPLACE INTO `administrator` (`id_admin`, `nama_admin`, `username`, `password`, `hak_akses`) VALUES
	(7, 'Mamet ', 'mamet08', '$2y$10$DENWHI7gz7OpgjqOZp.Rgun1aDWroME5JorPI5Y5xmShnfjl3i.4C', 1),
	(13, 'Cahyo Asyik', 'cahyo', '$2y$10$FWmQPEKmNLfWPBS4VIBIReCXtgs4U6JBMZyOw.CMbA3Z6BO8hy/QO', 3),
	(15, 'Hayatisasi', 'hayat', '$2y$10$xr9X/FGySfyvNr2Yb2s6hOpEvt5soAsZMUlv5m4Hp7.2/7XNqjYzO', 2);
/*!40000 ALTER TABLE `administrator` ENABLE KEYS */;

-- Dumping structure for table sig_tpa.bobot_parameter
CREATE TABLE IF NOT EXISTS `bobot_parameter` (
  `id_bobot` int(11) NOT NULL AUTO_INCREMENT,
  `nama_parameter` varchar(50) NOT NULL,
  `nilai_bobot` int(50) NOT NULL,
  `editby` int(11) NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.bobot_parameter: ~7 rows (approximately)
/*!40000 ALTER TABLE `bobot_parameter` DISABLE KEYS */;
REPLACE INTO `bobot_parameter` (`id_bobot`, `nama_parameter`, `nilai_bobot`, `editby`) VALUES
	(1, 'Kelerengan', 10, 7),
	(2, 'Penggunaan Lahan', 20, 7),
	(3, 'Rawan Longsor', 15, 7),
	(4, 'Curah Hujan ', 15, 7),
	(5, 'Hidrogeologi', 20, 7),
	(6, 'Jenis Tanah', 10, 7),
	(7, 'Rawan Banjir', 10, 7);
/*!40000 ALTER TABLE `bobot_parameter` ENABLE KEYS */;

-- Dumping structure for table sig_tpa.daerah_tpa
CREATE TABLE IF NOT EXISTS `daerah_tpa` (
  `id_daerah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_daerah` varchar(50) NOT NULL,
  `editby` int(11) NOT NULL,
  PRIMARY KEY (`id_daerah`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.daerah_tpa: ~14 rows (approximately)
/*!40000 ALTER TABLE `daerah_tpa` DISABLE KEYS */;
REPLACE INTO `daerah_tpa` (`id_daerah`, `nama_daerah`, `editby`) VALUES
	(1, 'Bodeh', 7),
	(2, 'Ulujami', 7),
	(3, 'Comal', 7),
	(4, 'Ampelgading', 7),
	(5, 'Petarukan', 7),
	(6, 'Taman', 7),
	(7, 'Pemalang', 7),
	(8, 'Bantarbolang', 15),
	(9, 'Randudongkal', 7),
	(10, 'Warungpring', 7),
	(11, 'Moga', 7),
	(12, 'Pulosari', 7),
	(13, 'Watukumpul', 7),
	(14, 'Belik', 7);
/*!40000 ALTER TABLE `daerah_tpa` ENABLE KEYS */;

-- Dumping structure for table sig_tpa.data_curah_hujan
CREATE TABLE IF NOT EXISTS `data_curah_hujan` (
  `id_curah_hujan` int(11) NOT NULL AUTO_INCREMENT,
  `id_daerah` int(11) NOT NULL,
  `nilai_klasifikasi` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `editby` int(11) NOT NULL,
  PRIMARY KEY (`id_curah_hujan`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.data_curah_hujan: ~14 rows (approximately)
/*!40000 ALTER TABLE `data_curah_hujan` DISABLE KEYS */;
REPLACE INTO `data_curah_hujan` (`id_curah_hujan`, `id_daerah`, `nilai_klasifikasi`, `keterangan`, `id_bobot`, `editby`) VALUES
	(1, 1, 2, '1500-2750', 4, 7),
	(2, 2, 2, '1500-2750', 4, 7),
	(3, 3, 2, '1500-2750', 4, 7),
	(4, 4, 2, '1500-2750', 4, 7),
	(5, 5, 2, '1500-2750', 4, 7),
	(6, 6, 2, '1500-2750', 4, 7),
	(7, 7, 2, '1500-2750', 4, 7),
	(8, 8, 1, '2750-4000', 4, 7),
	(9, 9, 1, '2750-4000', 4, 7),
	(10, 10, 1, '2750-4000', 4, 7),
	(11, 11, 0, '>4000', 4, 7),
	(12, 12, 1, '2750-4000', 4, 7),
	(13, 13, 0, '>4000', 4, 7),
	(14, 14, 1, '2750-4000', 4, 0);
/*!40000 ALTER TABLE `data_curah_hujan` ENABLE KEYS */;

-- Dumping structure for table sig_tpa.data_hidrogeologi
CREATE TABLE IF NOT EXISTS `data_hidrogeologi` (
  `id_hidrogeologi` int(11) NOT NULL AUTO_INCREMENT,
  `id_daerah` int(11) NOT NULL,
  `nilai_klasifikasi` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `editby` int(11) NOT NULL,
  PRIMARY KEY (`id_hidrogeologi`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.data_hidrogeologi: ~14 rows (approximately)
/*!40000 ALTER TABLE `data_hidrogeologi` DISABLE KEYS */;
REPLACE INTO `data_hidrogeologi` (`id_hidrogeologi`, `id_daerah`, `nilai_klasifikasi`, `keterangan`, `id_bobot`, `editby`) VALUES
	(1, 1, 2, 'air tanah langka', 5, 7),
	(2, 2, 0, 'akuifer produktif', 5, 7),
	(3, 3, 0, 'akuifer produktif', 5, 7),
	(4, 4, 0, 'akuifer produktif', 5, 7),
	(5, 5, 0, 'akuifer produktif', 5, 7),
	(6, 6, 2, 'air tanah langka', 5, 7),
	(7, 7, 0, 'akuifer produktif', 5, 7),
	(8, 8, 2, 'air tanah langka', 5, 7),
	(9, 9, 0, 'akuifer produktif', 5, 7),
	(10, 10, 2, 'air tanah langka', 5, 7),
	(11, 11, 0, 'akuifer produktif', 5, 7),
	(12, 12, 0, 'akuifer produktif', 5, 7),
	(13, 13, 2, 'air tanah langka', 5, 7),
	(15, 14, 2, 'air tanah langka', 5, 0);
/*!40000 ALTER TABLE `data_hidrogeologi` ENABLE KEYS */;

-- Dumping structure for table sig_tpa.data_jenis_tanah
CREATE TABLE IF NOT EXISTS `data_jenis_tanah` (
  `id_jenis_tanah` int(11) NOT NULL AUTO_INCREMENT,
  `id_daerah` int(11) NOT NULL,
  `nilai_klasifikasi` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `editby` int(11) NOT NULL,
  PRIMARY KEY (`id_jenis_tanah`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.data_jenis_tanah: ~14 rows (approximately)
/*!40000 ALTER TABLE `data_jenis_tanah` DISABLE KEYS */;
REPLACE INTO `data_jenis_tanah` (`id_jenis_tanah`, `id_daerah`, `nilai_klasifikasi`, `keterangan`, `id_bobot`, `editby`) VALUES
	(1, 1, 0, 'gromosol', 6, 7),
	(2, 2, 3, 'alluvial', 6, 7),
	(3, 3, 3, 'alluvial', 6, 7),
	(4, 4, 3, 'alluvial', 6, 7),
	(5, 5, 3, 'alluvial', 6, 7),
	(6, 6, 3, 'alluvial', 6, 7),
	(7, 7, 3, 'alluvial', 6, 7),
	(8, 8, 1, 'latosol', 6, 7),
	(9, 9, 1, 'latosol', 6, 7),
	(10, 10, 2, 'regosol', 6, 7),
	(11, 11, 2, 'regosol', 6, 7),
	(12, 12, 0, 'gromosol', 6, 7),
	(13, 13, 2, 'regosol', 6, 7),
	(14, 14, 2, 'regosol', 6, 7);
/*!40000 ALTER TABLE `data_jenis_tanah` ENABLE KEYS */;

-- Dumping structure for table sig_tpa.data_kelerengan
CREATE TABLE IF NOT EXISTS `data_kelerengan` (
  `id_kelerengan` int(11) NOT NULL AUTO_INCREMENT,
  `id_daerah` int(11) NOT NULL,
  `nilai_klasifikasi` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `editby` int(11) NOT NULL,
  PRIMARY KEY (`id_kelerengan`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.data_kelerengan: ~14 rows (approximately)
/*!40000 ALTER TABLE `data_kelerengan` DISABLE KEYS */;
REPLACE INTO `data_kelerengan` (`id_kelerengan`, `id_daerah`, `nilai_klasifikasi`, `keterangan`, `id_bobot`, `editby`) VALUES
	(1, 1, 3, '8-15%', 1, 7),
	(2, 2, 4, '0-8%', 1, 7),
	(3, 3, 4, '0-8%', 1, 7),
	(4, 4, 4, '0-8%', 1, 7),
	(5, 5, 4, '0-8%', 1, 7),
	(6, 6, 4, '0-8%', 1, 7),
	(7, 7, 4, '0-8%', 1, 7),
	(8, 8, 3, '8-15%', 1, 7),
	(9, 9, 2, '15-25%', 1, 7),
	(10, 10, 3, '8-15%', 1, 7),
	(11, 11, 3, '8-15%', 1, 7),
	(12, 12, 1, '25-40%', 1, 7),
	(13, 13, 0, '>40%', 1, 7),
	(14, 14, 3, '8-15%', 1, 7);
/*!40000 ALTER TABLE `data_kelerengan` ENABLE KEYS */;

-- Dumping structure for table sig_tpa.data_penggunaan_lahan
CREATE TABLE IF NOT EXISTS `data_penggunaan_lahan` (
  `id_penggunaan_lahan` int(11) NOT NULL AUTO_INCREMENT,
  `id_daerah` int(11) NOT NULL,
  `nilai_klasifikasi` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `editby` int(11) NOT NULL,
  PRIMARY KEY (`id_penggunaan_lahan`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.data_penggunaan_lahan: ~14 rows (approximately)
/*!40000 ALTER TABLE `data_penggunaan_lahan` DISABLE KEYS */;
REPLACE INTO `data_penggunaan_lahan` (`id_penggunaan_lahan`, `id_daerah`, `nilai_klasifikasi`, `keterangan`, `id_bobot`, `editby`) VALUES
	(1, 1, 4, 'industri', 2, 7),
	(2, 2, 2, 'sawah/ladang/tambak', 2, 7),
	(3, 3, 3, 'kebun/lapangan', 2, 7),
	(4, 4, 4, 'industri', 2, 7),
	(5, 5, 3, 'kebun/lapangan', 2, 7),
	(6, 6, 4, 'industri', 2, 7),
	(7, 7, 1, 'pemukiman', 2, 7),
	(8, 8, 0, 'hutan', 2, 7),
	(9, 9, 0, 'hutan', 2, 7),
	(10, 10, 1, 'pemukiman', 2, 7),
	(11, 11, 1, 'pemukiman', 2, 7),
	(12, 12, 3, 'kebun/lapangan', 2, 7),
	(13, 13, 0, 'hutan', 2, 7),
	(14, 14, 0, 'hutan', 2, 7);
/*!40000 ALTER TABLE `data_penggunaan_lahan` ENABLE KEYS */;

-- Dumping structure for table sig_tpa.data_rawan_banjir
CREATE TABLE IF NOT EXISTS `data_rawan_banjir` (
  `id_rawan_banjir` int(11) NOT NULL AUTO_INCREMENT,
  `id_daerah` int(11) NOT NULL,
  `nilai_klasifikasi` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `editby` int(11) NOT NULL,
  PRIMARY KEY (`id_rawan_banjir`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.data_rawan_banjir: ~14 rows (approximately)
/*!40000 ALTER TABLE `data_rawan_banjir` DISABLE KEYS */;
REPLACE INTO `data_rawan_banjir` (`id_rawan_banjir`, `id_daerah`, `nilai_klasifikasi`, `keterangan`, `id_bobot`, `editby`) VALUES
	(1, 1, 0, 'rawan banjir', 7, 7),
	(2, 2, 0, 'rawan banjir', 7, 7),
	(3, 3, 0, 'rawan banjir', 7, 7),
	(4, 4, 0, 'rawan banjir', 7, 7),
	(5, 5, 1, 'tidak rawan banjir', 7, 7),
	(6, 6, 1, 'tidak rawan banjir', 7, 7),
	(7, 7, 0, 'rawan banjir', 7, 7),
	(8, 8, 1, 'tidak rawan banjir', 7, 7),
	(9, 9, 1, 'tidak rawan banjir', 7, 7),
	(10, 10, 1, 'tidak rawan banjir', 7, 7),
	(11, 11, 1, 'tidak rawan banjir', 7, 7),
	(12, 12, 1, 'tidak rawan banjir', 7, 7),
	(13, 13, 1, 'tidak rawan banjir', 7, 7),
	(14, 14, 1, 'tidak rawan banjir', 7, 0);
/*!40000 ALTER TABLE `data_rawan_banjir` ENABLE KEYS */;

-- Dumping structure for table sig_tpa.data_rawan_longsor
CREATE TABLE IF NOT EXISTS `data_rawan_longsor` (
  `id_rawan_longsor` int(11) NOT NULL AUTO_INCREMENT,
  `id_daerah` int(11) NOT NULL,
  `nilai_klasifikasi` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_bobot` int(11) NOT NULL,
  `editby` int(11) NOT NULL,
  PRIMARY KEY (`id_rawan_longsor`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table sig_tpa.data_rawan_longsor: ~14 rows (approximately)
/*!40000 ALTER TABLE `data_rawan_longsor` DISABLE KEYS */;
REPLACE INTO `data_rawan_longsor` (`id_rawan_longsor`, `id_daerah`, `nilai_klasifikasi`, `keterangan`, `id_bobot`, `editby`) VALUES
	(1, 1, 0, 'tinggi', 3, 7),
	(2, 2, 2, 'rendah', 3, 7),
	(3, 3, 2, 'rendah', 3, 7),
	(4, 4, 2, 'rendah', 3, 7),
	(5, 5, 2, 'rendah', 3, 7),
	(6, 6, 2, 'rendah', 3, 7),
	(7, 7, 2, 'rendah', 3, 7),
	(8, 8, 1, 'sedang', 3, 7),
	(9, 9, 0, 'tinggi', 3, 7),
	(10, 10, 2, 'rendah', 3, 7),
	(11, 11, 0, 'tinggi', 3, 7),
	(12, 12, 0, 'tinggi', 3, 7),
	(13, 13, 0, 'tinggi', 3, 7),
	(14, 14, 0, 'tinggi', 3, 7);
/*!40000 ALTER TABLE `data_rawan_longsor` ENABLE KEYS */;

-- Dumping structure for view sig_tpa.max_a
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `max_a` (
	`max_kelerengan` DOUBLE NULL,
	`max_lahan` DOUBLE NULL,
	`max_longsor` DOUBLE NULL,
	`max_hujan` DOUBLE NULL,
	`max_hidrogeologi` DOUBLE NULL,
	`max_tanah` DOUBLE NULL,
	`max_banjir` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.min_a
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `min_a` (
	`min_kelerengan` DOUBLE NULL,
	`min_lahan` DOUBLE NULL,
	`min_longsor` DOUBLE NULL,
	`min_hujan` DOUBLE NULL,
	`min_hidrogeologi` DOUBLE NULL,
	`min_tanah` DOUBLE NULL,
	`min_banjir` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.nilai_d
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `nilai_d` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`dmax` DOUBLE NULL,
	`dmin` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.nilai_klasifikasi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `nilai_klasifikasi` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`datkel` INT(50) NOT NULL,
	`datlah` INT(50) NOT NULL,
	`datlong` INT(50) NOT NULL,
	`datcur` INT(50) NOT NULL,
	`dathid` INT(50) NOT NULL,
	`datjen` INT(50) NOT NULL,
	`datban` INT(50) NOT NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.nilai_v
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `nilai_v` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`v` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.normalisasi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `normalisasi` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`kelerengan` DOUBLE NULL,
	`lahan` DOUBLE NULL,
	`longsor` DOUBLE NULL,
	`hujan` DOUBLE NULL,
	`hidrogeologi` DOUBLE NULL,
	`tanah` DOUBLE NULL,
	`banjir` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.pembagi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `pembagi` (
	`pemkel` DOUBLE NULL,
	`pemlah` DOUBLE NULL,
	`pemlong` DOUBLE NULL,
	`pemcur` DOUBLE NULL,
	`pemhid` DOUBLE NULL,
	`pemjen` DOUBLE NULL,
	`pemban` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.terbobot
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `terbobot` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`kelerengan` DOUBLE NULL,
	`lahan` DOUBLE NULL,
	`longsor` DOUBLE NULL,
	`hujan` DOUBLE NULL,
	`hidrogeologi` DOUBLE NULL,
	`tanah` DOUBLE NULL,
	`banjir` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.terbobot_banjir
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `terbobot_banjir` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`banjir` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.terbobot_hidrogeologi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `terbobot_hidrogeologi` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`hidrogeologi` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.terbobot_hujan
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `terbobot_hujan` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`hujan` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.terbobot_kelerengan
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `terbobot_kelerengan` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`kelerengan` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.terbobot_lahan
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `terbobot_lahan` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`lahan` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.terbobot_longsor
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `terbobot_longsor` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`longsor` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.terbobot_tanah
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `terbobot_tanah` (
	`nama_daerah` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`tanah` DOUBLE NULL
) ENGINE=MyISAM;

-- Dumping structure for view sig_tpa.max_a
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `max_a`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `max_a` AS SELECT MAX(terbobot.kelerengan) AS max_kelerengan,MAX(terbobot.lahan) AS max_lahan,MAX(terbobot.longsor) AS max_longsor,MAX(terbobot.hujan) AS max_hujan,MAX(terbobot.hidrogeologi) AS max_hidrogeologi,MAX(terbobot.tanah) AS max_tanah,MAX(terbobot.banjir) AS max_banjir FROM terbobot ;

-- Dumping structure for view sig_tpa.min_a
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `min_a`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `min_a` AS SELECT MIN(terbobot.kelerengan) AS min_kelerengan,MIN(terbobot.lahan) AS min_lahan,MIN(terbobot.longsor) AS min_longsor,MIN(terbobot.hujan) AS min_hujan,MIN(terbobot.hidrogeologi) AS min_hidrogeologi,MIN(terbobot.tanah) AS min_tanah,MIN(terbobot.banjir) AS min_banjir FROM terbobot ;

-- Dumping structure for view sig_tpa.nilai_d
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `nilai_d`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai_d` AS SELECT terbobot.nama_daerah, SQRT(POW(max_a.max_kelerengan - terbobot.kelerengan,2) + POW(max_a.max_lahan - terbobot.lahan,2) + POW(max_a.max_longsor - terbobot.longsor,2) + POW(max_a.max_hujan - terbobot.hujan,2) + POW(max_a.max_hidrogeologi - terbobot.hidrogeologi,2) + POW(max_a.max_tanah - terbobot.tanah,2) + POW(max_a.max_banjir - terbobot.banjir,2)) AS dmax , SQRT(POW(terbobot.kelerengan - min_a.min_kelerengan,2) + POW(terbobot.lahan - min_a.min_lahan,2) + POW(terbobot.longsor - min_a.min_longsor,2) + POW(terbobot.hujan - min_a.min_hujan,2) + POW(terbobot.hidrogeologi - min_a.min_hidrogeologi,2) + POW(terbobot.tanah - min_a.min_tanah,2) + POW(terbobot.banjir - min_a.min_banjir,2)) AS dmin FROM max_a,min_a,terbobot ;

-- Dumping structure for view sig_tpa.nilai_klasifikasi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `nilai_klasifikasi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai_klasifikasi` AS select `daerah_tpa`.`nama_daerah` AS `nama_daerah`,`data_kelerengan`.`nilai_klasifikasi` AS `datkel`,`data_penggunaan_lahan`.`nilai_klasifikasi` AS `datlah`,`data_rawan_longsor`.`nilai_klasifikasi` AS `datlong`,`data_curah_hujan`.`nilai_klasifikasi` AS `datcur`,`data_hidrogeologi`.`nilai_klasifikasi` AS `dathid`,`data_jenis_tanah`.`nilai_klasifikasi` AS `datjen`,`data_rawan_banjir`.`nilai_klasifikasi` AS `datban` from (((((((`daerah_tpa` join `data_kelerengan`) join `data_penggunaan_lahan`) join `data_rawan_longsor`) join `data_curah_hujan`) join `data_hidrogeologi`) join `data_jenis_tanah`) join `data_rawan_banjir`) where ((`data_kelerengan`.`id_daerah` = `daerah_tpa`.`id_daerah`) and (`data_penggunaan_lahan`.`id_daerah` = `daerah_tpa`.`id_daerah`) and (`data_curah_hujan`.`id_daerah` = `daerah_tpa`.`id_daerah`) and (`data_rawan_longsor`.`id_daerah` = `daerah_tpa`.`id_daerah`) and (`data_hidrogeologi`.`id_daerah` = `daerah_tpa`.`id_daerah`) and (`data_jenis_tanah`.`id_daerah` = `daerah_tpa`.`id_daerah`) and (`data_rawan_banjir`.`id_daerah` = `daerah_tpa`.`id_daerah`)) ;

-- Dumping structure for view sig_tpa.nilai_v
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `nilai_v`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nilai_v` AS SELECT nilai_d.nama_daerah, nilai_d.dmin / (nilai_d.dmin + nilai_d.dmax) as v FROM nilai_d ;

-- Dumping structure for view sig_tpa.normalisasi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `normalisasi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `normalisasi` AS select `nilai_klasifikasi`.`nama_daerah` AS `nama_daerah`,(`nilai_klasifikasi`.`datkel` / `pembagi`.`pemkel`) AS `kelerengan`,(`nilai_klasifikasi`.`datlah` / `pembagi`.`pemlah`) AS `lahan`,(`nilai_klasifikasi`.`datlong` / `pembagi`.`pemlong`) AS `longsor`,(`nilai_klasifikasi`.`datcur` / `pembagi`.`pemcur`) AS `hujan`,(`nilai_klasifikasi`.`dathid` / `pembagi`.`pemhid`) AS `hidrogeologi`,(`nilai_klasifikasi`.`datjen` / `pembagi`.`pemjen`) AS `tanah`,(`nilai_klasifikasi`.`datban` / `pembagi`.`pemban`) AS `banjir` from (`nilai_klasifikasi` join `pembagi`) ;

-- Dumping structure for view sig_tpa.pembagi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `pembagi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pembagi` AS select sqrt(sum(pow(`nilai_klasifikasi`.`datkel`,2))) AS `pemkel`,sqrt(sum(pow(`nilai_klasifikasi`.`datlah`,2))) AS `pemlah`,sqrt(sum(pow(`nilai_klasifikasi`.`datlong`,2))) AS `pemlong`,sqrt(sum(pow(`nilai_klasifikasi`.`datcur`,2))) AS `pemcur`,sqrt(sum(pow(`nilai_klasifikasi`.`dathid`,2))) AS `pemhid`,sqrt(sum(pow(`nilai_klasifikasi`.`datjen`,2))) AS `pemjen`,sqrt(sum(pow(`nilai_klasifikasi`.`datban`,2))) AS `pemban` from `nilai_klasifikasi` ;

-- Dumping structure for view sig_tpa.terbobot
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `terbobot`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terbobot` AS select `normalisasi`.`nama_daerah` AS `nama_daerah`,`terbobot_kelerengan`.`kelerengan` AS `kelerengan`,`terbobot_lahan`.`lahan` AS `lahan`,`terbobot_longsor`.`longsor` AS `longsor`,`terbobot_hujan`.`hujan` AS `hujan`,`terbobot_hidrogeologi`.`hidrogeologi` AS `hidrogeologi`,`terbobot_tanah`.`tanah` AS `tanah`,`terbobot_banjir`.`banjir` AS `banjir` from (((((((`normalisasi` join `terbobot_kelerengan`) join `terbobot_lahan`) join `terbobot_longsor`) join `terbobot_hujan`) join `terbobot_hidrogeologi`) join `terbobot_tanah`) join `terbobot_banjir`) where ((`normalisasi`.`nama_daerah` = `terbobot_kelerengan`.`nama_daerah`) and (`normalisasi`.`nama_daerah` = `terbobot_lahan`.`nama_daerah`) and (`normalisasi`.`nama_daerah` = `terbobot_longsor`.`nama_daerah`) and (`normalisasi`.`nama_daerah` = `terbobot_hujan`.`nama_daerah`) and (`normalisasi`.`nama_daerah` = `terbobot_hidrogeologi`.`nama_daerah`) and (`normalisasi`.`nama_daerah` = `terbobot_tanah`.`nama_daerah`) and (`normalisasi`.`nama_daerah` = `terbobot_banjir`.`nama_daerah`)) ;

-- Dumping structure for view sig_tpa.terbobot_banjir
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `terbobot_banjir`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terbobot_banjir` AS select `normalisasi`.`nama_daerah` AS `nama_daerah`,(`normalisasi`.`banjir` * `bobot_parameter`.`nilai_bobot`) AS `banjir` from (`normalisasi` join `bobot_parameter`) where (`bobot_parameter`.`nama_parameter` = 'rawan banjir') ;

-- Dumping structure for view sig_tpa.terbobot_hidrogeologi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `terbobot_hidrogeologi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terbobot_hidrogeologi` AS select `normalisasi`.`nama_daerah` AS `nama_daerah`,(`normalisasi`.`hidrogeologi` * `bobot_parameter`.`nilai_bobot`) AS `hidrogeologi` from (`normalisasi` join `bobot_parameter`) where (`bobot_parameter`.`nama_parameter` = 'hidrogeologi') ;

-- Dumping structure for view sig_tpa.terbobot_hujan
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `terbobot_hujan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terbobot_hujan` AS select `normalisasi`.`nama_daerah` AS `nama_daerah`,(`normalisasi`.`hujan` * `bobot_parameter`.`nilai_bobot`) AS `hujan` from (`normalisasi` join `bobot_parameter`) where (`bobot_parameter`.`nama_parameter` = 'curah hujan') ;

-- Dumping structure for view sig_tpa.terbobot_kelerengan
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `terbobot_kelerengan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terbobot_kelerengan` AS select `normalisasi`.`nama_daerah` AS `nama_daerah`,(`normalisasi`.`kelerengan` * `bobot_parameter`.`nilai_bobot`) AS `kelerengan` from (`normalisasi` join `bobot_parameter`) where (`bobot_parameter`.`nama_parameter` = 'kelerengan') ;

-- Dumping structure for view sig_tpa.terbobot_lahan
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `terbobot_lahan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terbobot_lahan` AS select `normalisasi`.`nama_daerah` AS `nama_daerah`,(`normalisasi`.`lahan` * `bobot_parameter`.`nilai_bobot`) AS `lahan` from (`normalisasi` join `bobot_parameter`) where (`bobot_parameter`.`nama_parameter` = 'penggunaan lahan') ;

-- Dumping structure for view sig_tpa.terbobot_longsor
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `terbobot_longsor`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terbobot_longsor` AS select `normalisasi`.`nama_daerah` AS `nama_daerah`,(`normalisasi`.`longsor` * `bobot_parameter`.`nilai_bobot`) AS `longsor` from (`normalisasi` join `bobot_parameter`) where (`bobot_parameter`.`nama_parameter` = 'rawan longsor') ;

-- Dumping structure for view sig_tpa.terbobot_tanah
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `terbobot_tanah`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `terbobot_tanah` AS select `normalisasi`.`nama_daerah` AS `nama_daerah`,(`normalisasi`.`tanah` * `bobot_parameter`.`nilai_bobot`) AS `tanah` from (`normalisasi` join `bobot_parameter`) where (`bobot_parameter`.`nama_parameter` = 'jenis tanah') ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
