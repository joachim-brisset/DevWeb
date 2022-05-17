-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2022 at 10:40 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoeszone`
--
CREATE DATABASE IF NOT EXISTS `shoeszone` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `shoeszone`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'product id',
  `brand` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'product brand',
  `img_path` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'overview img of the product',
  `reference` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'product reference',
  `description` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'product description',
  `stock` int(11) NOT NULL DEFAULT '0' COMMENT 'product stock',
  `price` int(11) NOT NULL DEFAULT '0' COMMENT 'product price',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='liste all products';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand`, `img_path`, `reference`, `description`, `stock`, `price`) VALUES
(1, 'puma', '/img/shoes/puma/puma1.jpg', 'P20220101-001', 'Chaussure Puma stylisé', 6, 126),
(2, 'puma', '/img/shoes/puma/puma2.jpg', 'P20220101-002', 'Chaussure Puma stylisé', 6, 180),
(3, 'puma', '/img/shoes/puma/puma3.jpg', 'P20220101-003', 'Chaussure Puma noir et grise. Semelle renforcé.', 6, 95),
(4, 'puma', '/img/shoes/puma/puma4.jpg', 'P20220101-004', 'Chaussure Puma de course grise et bleu', 6, 134),
(5, 'puma', '/img/shoes/puma/puma5.jpg', 'P20220101-005', 'Chaussure Puma à semelle plate, noir et blanche avec lacet jaune', 6, 80),
(6, 'adidas', '/img/shoes/adidas/adidas%201.jfif', 'A20220101-001', 'Chaussure Puma rouge et noir', 6, 126),
(7, 'adidas', '/img/shoes/adidas/adidas%202.jfif', 'A20220101-002', 'Chaussure Puma rouge et noir', 6, 126),
(8, 'adidas', '/img/shoes/adidas/adidas%203.jfif', 'A20220101-003', 'Chaussure Puma rouge et noir', 6, 126),
(9, 'adidas', '/img/shoes/adidas/adidas%204.jfif', 'A20220101-004', 'Chaussure Puma rouge et noir', 6, 126),
(10, 'adidas', '/img/shoes/adidas/adidas%205.jfif', 'A20220101-005', 'Chaussure Puma rouge et noir', 6, 126),
(11, 'adidas', '/img/shoes/adidas/adidas%206.jfif', 'A20220101-006', 'Chaussure Puma rouge et noir', 6, 126),
(12, 'nike', '/img/shoes/nike/nike1.jpg', 'N20220101-001', 'Chaussure Nike crater impact noire', 12, 109),
(13, 'nike', '/img/shoes/nike/nike2.jpg', 'N20220101-002', 'Chaussure Nike Tuned 1 essential blanche', 6, 169),
(14, 'nike', '/img/shoes/nike/nike3.jpg', 'N20220101-003', 'Chaussure en cuire Nike blazer mid blanche', 24, 99),
(15, 'nike', '/img/shoes/nike/nike4.jpg', 'N20220101-004', 'Chaussure Nike bleu et noir avec logo et lacets à semelle plate', 9, 80),
(16, 'nike', '/img/shoes/nike/nike5.jpg', 'N20220101-005', 'Chaussure de tennis Nike bleu. Semelle renforcée pour un meilleur rebond et assurant un bon maintien du pied', 3, 120);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
