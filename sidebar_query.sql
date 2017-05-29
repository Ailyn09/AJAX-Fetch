-- --------------------------------------------------------
-- Host:                         192.168.5.120
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;

-- Dumping structure for table test.items
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `imagename` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `temdesc` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table test.items: ~0 rows (approximately)
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`id`, `name`, `imagename`, `price`, `temdesc`) VALUES
	(1, 'TEST ONE', 'empty_img.gif', '100', 'In this PHP Tutorial post we are going to learn how to convert or export html text or file to Microsoft Word File format by using PHP programming Language. If you are develop any web application and in that application you want to add one feature like you want to create Word Document from your PHP Web Application then at that time you can use this PHP Tutorial Script for Export HTML text to Microsoft Word. For this I have create one HTML form with two field for entering heading text and description in html format. In PHP script I have used simple PHP HTTP header() function that sends a raw HTTP header to a client. You can also format the word file from html code by putting simple html tag and you can also use inline stylesheet for change color, increase font size etc. The export of HTML file to Microsoft word document by using PHP script is the highest required functionality. Here in video tutorial, I have describe simple step by step with php coding guidance for beginners, who want to'),
	(2, 'TEST TWO', '1.jpg', '200', 'Hello Friends, In this tutorial we are going to learn how to live table Insert, Update, Delete and Fetch data from mysql database using Ajax Jque');
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
