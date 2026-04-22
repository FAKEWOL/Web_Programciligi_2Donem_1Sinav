-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2025 at 09:38 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kitaplar`
--

CREATE TABLE IF NOT EXISTS `kitaplar` (
  `kitap_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `kitap_adi` varchar(255) NOT NULL,
  `kitap_tur` varchar(255) NOT NULL,
  `kitap_yazar` varchar(255) NOT NULL,
  `kitap_sayfa` int(4) unsigned NOT NULL,
  PRIMARY KEY (`kitap_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7;

--
-- Dumping data for table `kitaplar`
--

INSERT INTO `kitaplar` (`kitap_id`, `kitap_adi`, `kitap_tur`, `kitap_yazar`, `kitap_sayfa`) VALUES
(1, 'Pinokyo', 'Masal', 'Pinokyo', 255),
(2, 'Siyaset Bilimi', 'Biyografi', 'Siyaset', 555),
(3, 'Savaş Sanatı', 'Tarihi', 'Savaş', 1350),
(4, 'Kazanma Sanatı', 'Ekonomi', 'Kazanma', 5500),
(5, 'Aklından Bir Sayı Tut', 'Roman', 'John', 1000),
(6, 'Hayvan Mezarlığı', 'Roman', 'George Orwell', 652);

-- --------------------------------------------------------

--
-- Table structure for table `kitaplar1`
--

CREATE TABLE IF NOT EXISTS `kitaplar1` (
  `kitap_id` int(4) DEFAULT NULL,
  `kitap_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kitap_tur` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kitap_yazar` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kitap_sayfa` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kitaplar1`
--

INSERT INTO `kitaplar1` (`kitap_id`, `kitap_adi`, `kitap_tur`, `kitap_yazar`, `kitap_sayfa`) VALUES
(1, 'Pinokyo', 'Masal', 'Pinokyo', 255),
(2, 'Siyaset Bilimi', 'Biyografi', 'Siyaset', 555);
