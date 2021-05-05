-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.18-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for uts
CREATE DATABASE IF NOT EXISTS `uts` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `uts`;

-- Dumping structure for table uts.wilayah
CREATE TABLE IF NOT EXISTS `wilayah` (
  `ID` varchar(5) NOT NULL DEFAULT 'NULL',
  `Wilayah` text DEFAULT NULL,
  `Positif` int(11) DEFAULT NULL,
  `Dirawat` int(11) DEFAULT NULL,
  `Sembuh` int(11) DEFAULT NULL,
  `Meninggal` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table uts.wilayah: ~4 rows (approximately)
/*!40000 ALTER TABLE `wilayah` DISABLE KEYS */;
REPLACE INTO `wilayah` (`ID`, `Wilayah`, `Positif`, `Dirawat`, `Sembuh`, `Meninggal`) VALUES
	('1', 'DKI JAKARTA', 411157, 3537, 397349, 6788),
	('2', 'BANTEN', 47491, 1478, 44800, 1213),
	('3', 'JAWA BARAT', 282631, 30626, 248247, 3758),
	('4', 'JAWA TENGAH', 187704, 6006, 169832, 11866);
/*!40000 ALTER TABLE `wilayah` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
