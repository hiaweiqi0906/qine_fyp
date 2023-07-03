-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 05:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-sistem-pengurusan-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ADMIN_ID` int(11) NOT NULL,
  `NAMA` varchar(50) NOT NULL DEFAULT 'Admin',
  `PASSWORD` varchar(50) NOT NULL,
  `EMEL` varchar(50) NOT NULL,
  `URL_AVATAR` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ADMIN_ID`, `NAMA`, `PASSWORD`, `EMEL`, `URL_AVATAR`) VALUES
(1, 'Admin', 'aaaaaa', 'aaaa@aaa', '');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `APP_ID` int(11) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `KATEGORI` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `EMEL` varchar(100) DEFAULT NULL,
  `NO_KP` varchar(50) DEFAULT NULL,
  `FAKULTI` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `NO_TELEFON` varchar(50) DEFAULT NULL,
  `BIDANG` varchar(50) DEFAULT NULL,
  `URL_AVATAR` varchar(100) DEFAULT NULL,
  `APPLICATION_ID` int(11) DEFAULT 0,
  `VERIFY_TOKEN` varchar(50) DEFAULT NULL,
  `CREATED_DATE` timestamp NULL DEFAULT current_timestamp(),
  `UNIVERSITI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`APP_ID`, `NAMA`, `KATEGORI`, `PASSWORD`, `EMEL`, `NO_KP`, `FAKULTI`, `ALAMAT`, `NO_TELEFON`, `BIDANG`, `URL_AVATAR`, `APPLICATION_ID`, `VERIFY_TOKEN`, `CREATED_DATE`, `UNIVERSITI`) VALUES
(1, 'Wong Leh Qine', 'ISO;;;MQA', 'lehqine', 'lehqine@gmail.com', '', '', '', '', 'Sains Komputer', '', 0, '', '2023-02-20 18:34:34', NULL),
(2, 'Hia', 'ISO;;;MQA', '111111', 'hia@test.com', NULL, NULL, NULL, NULL, 'Sains Komputer', NULL, NULL, NULL, '2023-02-20 18:34:34', NULL),
(5, 'asdf', 'EKSA', 'aaaaaa', 'a@a1', '111111-11-1111', 'asdf', 'hi', '012-345 6789', '', '', 13, ' ', '2023-02-20 18:34:34', NULL),
(6, 'app insert', 'EKSA', 'aaaaaa', 'appinsert@aaa', '010101010101', 'sdfaf', 'adsf', '0123456789', 'sdasf', NULL, 0, NULL, '2023-02-20 20:41:32', NULL),
(7, 'zxcv', 'EKSA', '111111', 'zxcvzv@ad', '111111111111', '111', '1111', '1111111111', '111', NULL, 0, NULL, '2023-02-20 21:14:03', NULL),
(8, 'Hia', 'EKSA', '111111', 'kef@ukm.edu.my', '010101-01-0101', 'asd', 'oiahsd', '012-098 9098', 'CS', 'https://res.cloudinary.com/papero/image/upload/v1683649392/kplqlojgkv4rm4ypygwm.jpg', 15, ' ', '2023-02-22 00:58:16', NULL),
(9, 'Hia', 'EKSA', '111111', 'kef@ukm.edu.my', '010101-01-0101', 'asd', 'oiahsd', '012-098 9098', 'CS', 'https://res.cloudinary.com/papero/image/upload/v1683649392/kplqlojgkv4rm4ypygwm.jpg', 15, ' ', '2023-02-22 01:03:18', NULL),
(13, 'bla', 'ISO', '111111', 'hiaweiqi@g1mail.com', '111111-11-1111', 'psdnfonsf', 'sjdjf', '012-345 6798', '', '', 14, ' ', '2023-02-27 00:29:36', NULL),
(14, 'hia', 'ISO;;;MQA', '111111', 'hiaweiqi@gmail.com', '111111-11-1111', 'Hotel, Restoran & Katering', 'sf', '011-111 1111', 'Jualan Borong & Runcit', 'https://res.cloudinary.com/papero/image/upload/v1683818020/zjgqg9fliqjyf6cg8cuk.jpg', 17, ' ', '2023-03-03 00:03:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appapplication`
--

CREATE TABLE `appapplication` (
  `APPLICATION_ID` int(11) NOT NULL,
  `TARIKH` varchar(50) DEFAULT NULL,
  `MASA` varchar(50) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `LECTURER_ID` int(11) DEFAULT NULL,
  `KELAYAKAN_AKADEMIK` varchar(100) DEFAULT NULL,
  `PENGALAMAN` varchar(100) DEFAULT NULL,
  `PENGANUGERAHAN` varchar(100) DEFAULT NULL,
  `KATEGORI` varchar(50) DEFAULT NULL,
  `UNIVERSITI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `appapplication`
--

INSERT INTO `appapplication` (`APPLICATION_ID`, `TARIKH`, `MASA`, `STATUS`, `LECTURER_ID`, `KELAYAKAN_AKADEMIK`, `PENGALAMAN`, `PENGANUGERAHAN`, `KATEGORI`, `UNIVERSITI`) VALUES
(0, '', '', '', 0, '', '', '', NULL, NULL),
(13, '2023-05-29', '10:36:20pm', 'ACCEPT', 8, 'wqe', 'qwe', 'qwe', NULL, NULL),
(14, '2023-06-02', '11:04:21pm', 'ACCEPT', 4, 'sd', 'a', 'sdfsf', 'ISO', NULL),
(15, '2023-06-05', '11:28:35pm', 'ACCEPT', 1, 'afsd', 'asdf', 'asf', 'EKSA', NULL),
(17, '2023-06-10', '11:13:36pm', 'ACCEPT', 2, 'sf', 'asf', 'asfd', 'ISO;;;MQA', 'usm');

-- --------------------------------------------------------

--
-- Table structure for table `appprogram`
--

CREATE TABLE `appprogram` (
  `APPPROGRAM_ID` int(11) NOT NULL,
  `TARIKH_TERIMA` varchar(50) DEFAULT NULL,
  `APP_ID_PENGERUSI` int(11) DEFAULT NULL,
  `PROGRAM_ID` int(11) DEFAULT NULL,
  `KUALITIUKM_ID` int(11) DEFAULT NULL,
  `APP_ID_PANEL_1` int(11) DEFAULT NULL,
  `APP_ID_PANEL_2` int(11) DEFAULT NULL,
  `TARIKH_MASA_KEMASKINI` varchar(50) DEFAULT NULL,
  `KATEGORI` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `appprogram`
--

INSERT INTO `appprogram` (`APPPROGRAM_ID`, `TARIKH_TERIMA`, `APP_ID_PENGERUSI`, `PROGRAM_ID`, `KUALITIUKM_ID`, `APP_ID_PANEL_1`, `APP_ID_PANEL_2`, `TARIKH_MASA_KEMASKINI`, `KATEGORI`) VALUES
(5, '2022-06-11', 2, 1, 1, 1, NULL, '2023-06-18', 'ISO'),
(16, '2023-06-16', 1, 2, 1, 2, NULL, '2023-06-17', 'ISO'),
(17, '2023-06-16', 1, 3, 1, 2, NULL, '2023-06-17', 'ISO'),
(18, '2023-06-17', 2, 4, 1, 1, NULL, '2023-06-17', 'MQA'),
(19, '2023-07-01', 14, 5, 1, 13, NULL, '2023-07-03', 'ISO');

-- --------------------------------------------------------

--
-- Table structure for table `app_noti`
--

CREATE TABLE `app_noti` (
  `NOTI_ID` int(11) NOT NULL,
  `APP_ID` varchar(15) DEFAULT NULL,
  `TEXT` text DEFAULT NULL,
  `TARIKH` varchar(15) DEFAULT NULL,
  `MASA` varchar(15) DEFAULT NULL,
  `READ_NOTI` varchar(1) DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `app_noti`
--

INSERT INTO `app_noti` (`NOTI_ID`, `APP_ID`, `TEXT`, `TARIKH`, `MASA`, `READ_NOTI`) VALUES
(5, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-29', '21-53-36', 'T'),
(6, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-05-29', '22-23-10', 'T'),
(7, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-05-29', '22-23-10', 'T'),
(8, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 2', '2023-05-29', '22-23-10', 'T'),
(9, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\r\n JAWATAN: AHLI PANEL 2', '2023-05-29', '22-23-10', 'T'),
(10, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '18-35-22', 'T'),
(11, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '20-58-25', 'T'),
(12, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '21-26-55', 'T'),
(13, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '21-29-50', 'T'),
(14, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '21-29-57', 'T'),
(15, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-05-30', '22-25-36', 'T'),
(16, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-05-30', '22-25-36', 'T'),
(17, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '22-26-12', 'T'),
(18, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-05-31', '21-29-39', 'T'),
(19, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-05-31', '21-29-39', 'T'),
(20, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-03', '23-10-22', 'T'),
(21, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-14-17', 'T'),
(22, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-14-17', 'T'),
(23, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-14-49', 'T'),
(24, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-14-49', 'T'),
(25, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-14-58', 'T'),
(26, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-14-58', 'T'),
(27, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-16-28', 'T'),
(28, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-16-28', 'T'),
(29, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-31-21', 'T'),
(30, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-31-21', 'T'),
(31, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-33-06', 'T'),
(32, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-33-06', 'T'),
(33, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-35-06', 'T'),
(34, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-35-06', 'T'),
(35, '2', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-09', '10-00-19', 'T'),
(36, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-11', '17-56-48', 'T'),
(37, '1', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-11', '17-56-48', 'T'),
(38, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-11', '18-05-52', 'T'),
(39, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-11', '18-25-55', 'T'),
(40, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '21-31-59', 'T'),
(41, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '21-50-41', 'T'),
(42, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-04-03', 'T'),
(43, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-14-28', 'T'),
(44, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-15-43', 'T'),
(45, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-27-59', 'T'),
(46, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-29-19', 'T'),
(47, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-41-22', 'T'),
(48, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '16-49-56', 'T'),
(49, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-13', '16-51-47', 'T'),
(50, '1', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-13', '16-51-47', 'T'),
(51, '2', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-13', '16-53-50', 'T'),
(52, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '16-58-18', 'F'),
(53, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-56-55', 'F'),
(54, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-57-19', 'F'),
(55, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-58-29', 'F'),
(56, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-58-47', 'F'),
(57, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-59-58', 'F'),
(58, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '22-07-59', 'F'),
(59, '1', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-16', '23-18-14', 'F'),
(60, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-16', '23-18-14', 'T'),
(61, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-16', '23-18-46', 'T'),
(62, '1', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-16', '23-18-46', 'F'),
(63, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-16', '23-22-27', 'T'),
(64, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-16', '23-22-27', 'T'),
(65, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-16', '23-27-55', 'T'),
(66, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-16', '23-27-55', 'T'),
(67, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-16', '23-28-46', 'T'),
(68, '13', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-16', '23-28-46', 'F'),
(69, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-16', '23-29-34', 'T'),
(70, '13', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-16', '23-29-34', 'F'),
(71, '1', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-16', '23-37-03', 'F'),
(72, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-16', '23-37-03', 'T'),
(73, '1', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-16', '23-37-57', 'F'),
(74, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-16', '23-37-57', 'T'),
(75, '2', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-06-17', '09-58-21', 'T'),
(76, '1', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-06-17', '09-58-21', 'F'),
(77, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-17', '11-34-10', 'F'),
(78, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-17', '22-00-58', 'F'),
(79, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-17', '22-02-43', 'F'),
(80, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-18', '19-14-03', 'F'),
(81, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-18', '19-14-51', 'F'),
(82, '14', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: PENGERUSI', '2023-07-01', '21-40-06', 'F'),
(83, '13', 'ANDA TELAH DIBAHAGIKAN SATU PROGRAM UNTUK MEMBUAT LAPORAN.\n JAWATAN: AHLI PANEL 1', '2023-07-01', '21-40-06', 'F'),
(84, '14', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-07-03', '22-40-33', 'F'),
(85, '13', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-07-03', '22-48-37', 'F'),
(86, '13', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-07-03', '23-03-10', 'F'),
(87, '13', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-07-03', '23-08-21', 'F'),
(88, '13', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-07-03', '23-35-39', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `height` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `fbtwig` varchar(255) NOT NULL,
  `univ` varchar(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `name`, `age`, `sex`, `address`, `email`, `dob`, `height`, `phone`, `color`, `fbtwig`, `univ`, `timestamp`) VALUES
(1, 'Wong Leh Qine', 21, 'female', 'Sibu, Sarawak', 'A180970@siswa.ukm.edu.my', '2001-02-23', 165, '+6011-11557899', '#fadcfe', 'https://www.instagram.com/lehqine/', 'Unive', '2022-05-10 13:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `guessbook`
--

CREATE TABLE `guessbook` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `createdatetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `guessbook`
--

INSERT INTO `guessbook` (`id`, `name`, `comment`, `createdatetime`) VALUES
(1, 'Zaaba4Eva', 'Awesome page: Kipidap!', '2022-04-03 23:19:57'),
(2, 'BoredPanda', 'Good!Good!', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kualitiukm`
--

CREATE TABLE `kualitiukm` (
  `KUALITIUKM_ID` int(11) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `EMEL` varchar(100) DEFAULT NULL,
  `NO_KP` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `NO_TELEFON` varchar(50) DEFAULT NULL,
  `URL_AVATAR` varchar(100) DEFAULT NULL,
  `CREATED_DATE` timestamp NULL DEFAULT current_timestamp(),
  `VERIFY_TOKEN` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kualitiukm`
--

INSERT INTO `kualitiukm` (`KUALITIUKM_ID`, `NAMA`, `PASSWORD`, `EMEL`, `NO_KP`, `ALAMAT`, `NO_TELEFON`, `URL_AVATAR`, `CREATED_DATE`, `VERIFY_TOKEN`) VALUES
(1, 'HiaHia', 'bbbbbb', 'aaaa@aa', '11111', 'hiasdf', '0123', 'https://res.cloudinary.com/papero/image/upload/v1685273584/cgwswrjfjnkevdl9xxro.jpg', '2023-02-20 18:35:16', ''),
(2, 'kukm test', 'aaaaaa', 'kukm@test', '111111-11-1111', 'aefeqewf', '0101234567', NULL, '2023-02-20 21:13:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `kualitiukm_noti`
--

CREATE TABLE `kualitiukm_noti` (
  `NOTI_ID` int(11) NOT NULL,
  `KUALITIUKM_ID` varchar(15) DEFAULT NULL,
  `TEXT` text DEFAULT NULL,
  `TARIKH` varchar(15) DEFAULT NULL,
  `MASA` varchar(15) DEFAULT NULL,
  `READ_NOTI` varchar(1) DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kualitiukm_noti`
--

INSERT INTO `kualitiukm_noti` (`NOTI_ID`, `KUALITIUKM_ID`, `TEXT`, `TARIKH`, `MASA`, `READ_NOTI`) VALUES
(1, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-29', '21-53-36', 'T'),
(2, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-29', '21-53-36', 'T'),
(3, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-27', '21-53-36', 'T'),
(4, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-27', '21-50-00', 'T'),
(5, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-27', '21-50-00', 'T'),
(6, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-05-29', '22-23-10', 'T'),
(7, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '18-35-22', 'T'),
(8, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '20-58-25', 'T'),
(9, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '21-26-55', 'T'),
(10, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '21-29-50', 'T'),
(11, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '21-29-57', 'T'),
(12, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-05-30', '22-25-36', 'T'),
(13, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-05-30', '22-26-12', 'T'),
(14, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-05-31', '21-29-39', 'T'),
(15, '1', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-03', '23-10-22', 'T'),
(16, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-14-17', 'T'),
(17, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-14-49', 'T'),
(18, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-14-58', 'T'),
(19, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-16-28', 'T'),
(20, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-31-21', 'T'),
(21, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-33-06', 'T'),
(22, '1', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-03', '23-35-06', 'T'),
(23, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-09', '10-00-19', 'F'),
(24, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-11', '17-56-48', 'T'),
(25, '', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-11', '18-05-52', 'F'),
(26, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-11', '18-25-55', 'F'),
(27, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '21-31-59', 'F'),
(28, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '21-50-41', 'F'),
(29, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-04-03', 'F'),
(30, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-14-28', 'F'),
(31, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-15-43', 'F'),
(32, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-27-59', 'F'),
(33, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-29-19', 'F'),
(34, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-12', '22-41-22', 'F'),
(35, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '16-49-56', 'F'),
(36, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-13', '16-51-47', 'T'),
(37, '', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-13', '16-53-50', 'F'),
(38, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '16-58-18', 'F'),
(39, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-56-55', 'F'),
(40, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-57-19', 'F'),
(41, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-58-29', 'F'),
(42, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-58-47', 'F'),
(43, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '21-59-58', 'F'),
(44, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-13', '22-07-59', 'F'),
(45, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-16', '23-18-14', 'F'),
(46, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-16', '23-18-46', 'F'),
(47, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-16', '23-22-27', 'F'),
(48, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-16', '23-27-55', 'F'),
(49, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-16', '23-28-46', 'F'),
(50, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-16', '23-29-34', 'F'),
(51, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-16', '23-37-03', 'F'),
(52, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-16', '23-37-57', 'F'),
(53, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-06-17', '09-58-21', 'F'),
(54, '', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-17', '11-34-10', 'F'),
(55, '', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-06-17', '22-00-58', 'F'),
(56, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-17', '22-02-43', 'F'),
(57, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-18', '19-14-03', 'F'),
(58, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-06-18', '19-14-51', 'F'),
(59, '1', 'ANDA TELAH AGIH PROGRAM!', '2023-07-01', '21-40-06', 'F'),
(60, '', 'AHLI PANEL SUDAH BUAT LAPORAN. ', '2023-07-03', '22-40-33', 'F'),
(61, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-07-03', '22-48-37', 'F'),
(62, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-07-03', '23-03-10', 'F'),
(63, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-07-03', '23-08-21', 'F'),
(64, '', 'PENGERUSI SUDAH HANTAR LAPORAN. ', '2023-07-03', '23-35-39', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `LAPORAN_ID` int(11) NOT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `TARIKH_AWAL` varchar(50) DEFAULT NULL,
  `TARIKH_AKHIR` varchar(50) DEFAULT NULL,
  `APPPROGRAM_ID` int(11) DEFAULT NULL,
  `LAMPIRAN_1` text DEFAULT NULL,
  `AKREDASI_PENUH` text DEFAULT NULL,
  `TYPE` int(1) DEFAULT NULL,
  `TARIKH_EFEKTIF` varchar(50) DEFAULT NULL,
  `MAKLUM_BALAS` text DEFAULT NULL,
  `SENTTOUSERFAKULTI` varchar(5) DEFAULT 'F',
  `BAHAGIAN_LAIN` text NOT NULL,
  `TANDATANGAN_0` varchar(1000) DEFAULT NULL,
  `TANDATANGAN_1` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`LAPORAN_ID`, `STATUS`, `TARIKH_AWAL`, `TARIKH_AKHIR`, `APPPROGRAM_ID`, `LAMPIRAN_1`, `AKREDASI_PENUH`, `TYPE`, `TARIKH_EFEKTIF`, `MAKLUM_BALAS`, `SENTTOUSERFAKULTI`, `BAHAGIAN_LAIN`, `TANDATANGAN_0`, `TANDATANGAN_1`) VALUES
(125, 'PREPARING', '2023-06-11', '2023-06-13', 5, '123~123~123~123<oo~oo~oo~oo<oo~oo~oo~oo<oo~oo~oo~oo<oo~oo~oo~oo<oo~oo~oo~oo<oo~oo~oo~oo', '5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.666666666666667;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.411764705882353;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5', 1, '2023-12-11', NULL, 'T', '', NULL, NULL),
(126, 'PREPARING', '2023-06-11', '2023-06-13', 5, 'iiiii~ii~ii~ii<ii~ii~ii~ii<ii~ii~ii~ii<ii~ii~ii~ii<ii~ii~ii~ii<ii~ii~ii~ii<ii~ii~ii~ii', '5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.666666666666667;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.411764705882353;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;05;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5', 0, '2022-12-11', 'ii~asfdfffffffffasd~asdffffffffff~asdfffffffffffffff~asdfffffffff~123adsfasasdf<ii~asdf~asdf~asdf~asdf~123asdfasdf<ii~asdf~asdf~adsf~asdf~123asdfasdf<ii~aas~aas~asas~aas~123asdfadsf<ii~as~sdfasdf~sdfadsf~sdfaasdf~123<ii~sdf~sdf~sdf~sdf~123<ii~sdf~sdf~sdf~sdf~123', 'TT', '', NULL, NULL),
(129, 'SUDAH HANTAR', '2023-06-17', '', 16, 'oo~oo~oo~oo<oo~oo~oo~oo<oo~oo~oo~oo<oo~oo~oo~oo<oo~oo~oo~oo<oo~oo~oo~oo<oo~oo~oo~oo', '5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.666666666666667;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;05;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.411764705882353;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5', 1, '2023-12-17', NULL, 'F', '', NULL, NULL),
(130, 'SUDAH HANTAR', '2023-06-17', '', 17, '~~~<~~~<~~~<~~~<~~~<~~~<~~~', '0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0', 1, '2023-12-17', NULL, 'F', '', NULL, NULL),
(131, 'SUDAH HANTAR', '2023-06-17', '', 18, '~~~<~~~<~~~<~~~<~~~<~~~<~~~', '0;0;5;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0', 0, '2023-12-17', NULL, 'F', '', NULL, NULL),
(132, 'SUDAH HANTAR', '2023-06-18', '', 5, '~~~<~~~<~~~<~~~<~~~<~~~<~~~', '5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.666666666666667;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.411764705882353;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;05;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5', 0, '2023-12-18', NULL, 'F', '', NULL, NULL),
(133, 'SUDAH HANTAR', '2023-06-18', '', 5, '~~~<~~~<~~~<~~~<~~~<~~~<~~~', '5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.666666666666667;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|4.411764705882353;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;05;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5;5;5;5;5;5;5;5;5;5;5', 0, '2023-12-18', NULL, 'F', '', NULL, NULL),
(134, 'SUDAH HANTAR', '', '2023-07-03', 19, 'qwe~ui~ui~ui<oo~oo~oo~oo<5~5~5~5<oo~oo~oo~oo<5~5~5~5<5~5~5~5<5~5~5~5', '5.00;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5.00;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5.00;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5.00;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5.00;5;5;5;5;5;5;5;5;5;5;5;5;5|5.00;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5;5|5.00;5;5;5;5;5;5;5;5;5;5', 1, '', NULL, 'F', '2;asdf;asdf;asdf;', NULL, ''),
(138, 'SUDAH HANTAR', '', '2023-07-03', 19, '~~~<~~~<~~~<~~~<~~~<~~~<~~~', '0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0;0|0;0;0;0;0;0;0;0;0;0;0', 0, '', NULL, 'F', '4;af;asd;adsf;1', 'https://res.cloudinary.com/papero/image/upload/v1688398539/a5jm4ncxwdruijk1d3zy.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `LECTURER_ID` int(11) NOT NULL,
  `KATEGORI_PERMOHONAN` varchar(50) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `NO_KP` varchar(50) DEFAULT NULL,
  `FAKULTI` varchar(100) DEFAULT NULL,
  `EMEL` varchar(100) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `NO_TELEFON` varchar(100) DEFAULT NULL,
  `URL_AVATAR` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `BIDANG` varchar(50) DEFAULT NULL,
  `GELARAN` varchar(5) DEFAULT NULL,
  `POSKOD` int(5) DEFAULT NULL,
  `DAERAH` varchar(30) DEFAULT NULL,
  `NEGERI` varchar(20) DEFAULT NULL,
  `NO_TELEFON_PEJABAT` varchar(15) DEFAULT NULL,
  `CREATED_DATE` timestamp NULL DEFAULT current_timestamp(),
  `UNIVERSITI` varchar(50) DEFAULT NULL,
  `VERIFY_TOKEN` varchar(500) NOT NULL,
  `KELAYAKAN_AKADEMIK` text NOT NULL,
  `PENGALAMAN` text NOT NULL,
  `PENGANUGERAHAN` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`LECTURER_ID`, `KATEGORI_PERMOHONAN`, `NAMA`, `NO_KP`, `FAKULTI`, `EMEL`, `ALAMAT`, `NO_TELEFON`, `URL_AVATAR`, `PASSWORD`, `BIDANG`, `GELARAN`, `POSKOD`, `DAERAH`, `NEGERI`, `NO_TELEFON_PEJABAT`, `CREATED_DATE`, `UNIVERSITI`, `VERIFY_TOKEN`, `KELAYAKAN_AKADEMIK`, `PENGALAMAN`, `PENGANUGERAHAN`) VALUES
(0, '', 'No Lecturer', '', '', 'No Email', '', '', '', 'No Password', '', '', 0, '', '', '', '2023-02-20 18:35:02', NULL, '', '', '', ''),
(1, '', 'Hia', '010101-01-0101', 'asd', 'kef@ukm.edu.my', 'oiahsd', '012-098 9098', 'https://res.cloudinary.com/papero/image/upload/v1683649392/kplqlojgkv4rm4ypygwm.jpg', '111111', 'CS', 'Encik', 1010, 'haoih', 'Melaka', '02-345 6789', '2023-02-20 18:35:02', NULL, '', '', '', ''),
(2, NULL, 'hia', '111111-11-1111', 'cs', 'hiaweiqi@gmail.com', 'sf', '011-111 1111', 'https://res.cloudinary.com/papero/image/upload/v1683818020/zjgqg9fliqjyf6cg8cuk.jpg', '111111', 'Computer Region', 'Encik', 12312, '123123', 'WP Labuan', '01-888 8888', '2023-02-20 18:35:02', 'usm', '', '', '^asdfaf|2325|2323|qwe', ''),
(3, '', 'aaaa@aa', '', '', 'asd@sad', '', '', '', 'aaaaaa', '', NULL, NULL, NULL, NULL, NULL, '2023-02-20 18:35:02', NULL, '', '', '', ''),
(4, '', 'bla', '111111-11-1111', 'psdnfonsf', 'hiaweiqi@g1mail.com', 'sjdjf', '012-345 6798', '', '111111', '', 'Encik', 11414, 'sfno', 'Kedah', '01-777 5589', '2023-02-20 18:35:02', NULL, '', '', '', ''),
(5, '', 'hiaweiqi@gaamail.com', '', '', 'hiaweiqi@gaamail.com', '', '', '', '111111', '', NULL, NULL, NULL, NULL, NULL, '2023-02-20 18:35:02', NULL, '', '', '', ''),
(6, '', 'hiaweiqi@gaamail.com', '', '', 'hiaweiqi@gaamail.com', '', '', '', '111111', '', NULL, NULL, NULL, NULL, NULL, '2023-02-20 18:35:02', NULL, '', '', '', ''),
(7, '', 'hiaweiqi@gaamail.com', '', '', 'hiaweiqi@gaamail.com', '', '', '', '111111', '', NULL, NULL, NULL, NULL, NULL, '2023-02-20 18:35:02', NULL, '', '', '', ''),
(8, '', 'asdf', '111111-11-1111', 'asdf', 'a@a1', 'hi', '012-345 6789', '', 'aaaaaa', '', 'Encik', 11990, 'SS', 'Kedah', '04-123 1231', '2023-02-20 18:35:02', NULL, '', '', '', ''),
(9, '', 'asdf', '111111-11-1111', 'asdf', 'a@a1', 'hi', '012-345 6789', '', 'aaaaaa', '', 'Encik', 11990, 'SS', 'Kedah', '04-123 1231', '0000-00-00 00:00:00', NULL, '', '', '', ''),
(10, '', 'asdf', '111111-11-1111', 'asdf', 'a@a1', 'hi', '012-345 6789', '', 'aaaaaa', '', 'Encik', 11990, 'SS', 'Kedah', '04-123 1231', '2023-02-20 18:37:05', NULL, '', '', '', ''),
(11, '', 'qqqq', '', '', 'wongqine@gmail.com', '', '', '', 'qqqq', '', NULL, NULL, NULL, NULL, NULL, '2023-02-22 19:13:02', NULL, '', '', '', ''),
(13, '', 'lehqine', '', '', 'qqq@qqq', '', '', '', '1234', '', NULL, NULL, NULL, NULL, NULL, '2023-02-25 10:57:20', NULL, '', '', '', ''),
(14, '', 'lehqine', '', '', 'lll@lll', '', '', '', '1234', '', NULL, NULL, NULL, NULL, NULL, '2023-02-25 12:06:11', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_noti`
--

CREATE TABLE `lecturer_noti` (
  `NOTI_ID` int(11) NOT NULL,
  `LECTURER_ID` varchar(15) DEFAULT NULL,
  `TEXT` text DEFAULT NULL,
  `TARIKH` varchar(15) DEFAULT NULL,
  `MASA` varchar(15) DEFAULT NULL,
  `READ_NOTI` varchar(1) DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lecturer_noti`
--

INSERT INTO `lecturer_noti` (`NOTI_ID`, `LECTURER_ID`, `TEXT`, `TARIKH`, `MASA`, `READ_NOTI`) VALUES
(1, '8', 'ANDA SUDAH BUAT PERMOHONAN UNTUK MENJADI APP. ', '2023-05-29', '', 'T'),
(2, '8', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'T'),
(3, '4', 'ANDA SUDAH BUAT PERMOHONAN UNTUK MENJADI APP. ', '2023-06-02', '', 'T'),
(4, '1', 'ANDA SUDAH BUAT PERMOHONAN UNTUK MENJADI APP. ', '2023-06-05', '', 'T'),
(5, '1', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'T'),
(6, '1', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'T'),
(7, '1', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'T'),
(8, '2', 'ANDA SUDAH BUAT PERMOHONAN UNTUK MENJADI APP. ', '2023-06-10', '', 'T'),
(9, '2', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'T'),
(10, '2', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'T'),
(11, '2', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'T'),
(12, '2', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'T'),
(13, '4', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'F'),
(14, '4', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'F'),
(15, '4', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'F'),
(16, '4', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'F'),
(17, '2', 'ANDA SUDAH BUAT PERMOHONAN UNTUK MENJADI APP. ', '2023-06-10', '', 'F'),
(18, '2', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'F'),
(19, '2', 'PERMOHONAN ANDA UNTUK MENJADI APP SUDAH DITERIMA! SILA LOG MASUK SEBAGAI APP DGN KATA LALUAN YANG SAMA. ', '', '', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `myguestbook`
--

CREATE TABLE `myguestbook` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `find` varchar(50) NOT NULL,
  `frontpage` varchar(10) NOT NULL,
  `form` varchar(10) NOT NULL,
  `userinterface` varchar(10) NOT NULL,
  `postdate` date NOT NULL,
  `posttime` time NOT NULL,
  `comment` text NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `myguestbook`
--

INSERT INTO `myguestbook` (`id`, `user`, `email`, `find`, `frontpage`, `form`, `userinterface`, `postdate`, `posttime`, `comment`, `picture`) VALUES
(37, 'masura', 'mas@gmail.com', '', '', '', '', '2022-06-02', '03:16:55', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `ID` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`ID`, `email`, `key`, `expDate`) VALUES
(1, 'hiaweiqi@gmail.com', 'd6e20a022b3f67017f83d3c52bc07ee72ca24070a3', '2023-05-23 07:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `PENGUMUMAN_ID` int(11) NOT NULL,
  `TARIKH` varchar(255) DEFAULT NULL,
  `PENGUMUMAN` varchar(255) DEFAULT NULL,
  `KUALITIUKM_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`PENGUMUMAN_ID`, `TARIKH`, `PENGUMUMAN`, `KUALITIUKM_ID`) VALUES
(8, '2023-06-02', 'Hello this \r\n\r\nis \r\nanother\r\n\r\npengumuman!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `PERTANYAAN_ID` int(11) NOT NULL,
  `TARIKH` varchar(255) DEFAULT NULL,
  `PERKARA` varchar(255) DEFAULT NULL,
  `RINGKASAN` varchar(255) DEFAULT NULL,
  `PERTANYAAN_STATUS` varchar(255) DEFAULT NULL,
  `TINDAKAN` varchar(255) DEFAULT NULL,
  `JENIS` varchar(30) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`PERTANYAAN_ID`, `TARIKH`, `PERKARA`, `RINGKASAN`, `PERTANYAAN_STATUS`, `TINDAKAN`, `JENIS`, `ID`) VALUES
(1, '2023-05-13', '123', '123', 'PROCESSED', 'tukar again', 'app', 1),
(2, '2023-05-13', 'asdf', 'asdf', 'PROCESSING', '', 'app', 1),
(3, '2023-05-13', 'asdfasdf', 'asdfasdf', 'PROCESSING', '', 'app', 1),
(4, '2023-05-13', 'aa', 'aa', 'PROCESSING', '', 'app', 1),
(5, '2023-05-22', 'soalan', 'ringkasan soalan', 'PROCESSING', '', 'lecturer', 13),
(6, '2023-05-23', 'soalan 2', 'ringkasan 2', 'PROCESSING', '', 'lecturer', 13),
(7, '2023-05-23', 'soalan 1', 'soalan 1 ringkasan', 'PROCESSING', '', 'app', 4),
(8, '2023-05-24', 'testing', 'testing ringkasan', 'PROCESSING', '', 'app', 4),
(9, '2023-05-28', 'hia', 'hia', 'PROCESSING', '', 'app', 2),
(10, '2023-05-28', 'adsf', 'asdf', 'PROCESSING', '', 'app', 2),
(11, '2023-05-28', 'asdf', 'asdf', 'PROCESSING', '', 'app', 2),
(12, '2023-05-28', 'a', 'a', 'PROCESSING', '', 'app', 2),
(13, '2023-05-28', 'a', 'a', 'PROCESSING', '', 'app', 2),
(14, '2023-05-28', 'a', 'a', 'PROCESSING', '', 'app', 2),
(15, '2023-05-28', 'asdf', 'asdf', 'PROCESSING', '', 'app', 2),
(16, '2023-05-28', 'asdf', 'asdf', 'PROCESSING', '', 'app', 2),
(17, '2023-05-28', 'asdf', 'asdf', 'PROCESSING', '', 'app', 2),
(18, '2023-05-28', 'asdf', 'asdf', 'PROCESSING', '', 'app', 2),
(19, '2023-05-28', 'asdf', 'asdf1', 'PROCESSING', '', 'app', 2),
(20, '2023-05-28', 'asdf', 'asdf2', 'PROCESSING', '', 'app', 2),
(21, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(22, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(23, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(24, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(25, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(26, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(27, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(28, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(29, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(30, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(31, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(32, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(33, '2023-05-29', 'aa', 'aa', 'PROCESSING', '', 'lecturer', 2),
(34, '2023-06-02', 'PERKARA', 'RINGKASAN', 'PROCESSED', 'hiasdoahsdoihaoshdoasd', 'app', 2),
(35, '2023-06-16', 'gdgdgfg', 'dddd', 'PROCESSING', '', 'lecturer', 1),
(36, '2023-07-01', 'asdf', 'asdf', 'PROCESSING', '', 'app', 14),
(37, '2023-07-01', 'wer', 'wer', 'PROCESSING', '', 'app', 14);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `PROGRAM_ID` int(11) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `TARIKH` varchar(50) DEFAULT NULL,
  `URL_DRIVE` varchar(100) DEFAULT NULL,
  `BIDANG` varchar(50) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `URL_FILE_DRIVE` varchar(100) DEFAULT NULL,
  `UPLOADEDBY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`PROGRAM_ID`, `NAMA`, `TARIKH`, `URL_DRIVE`, `BIDANG`, `STATUS`, `DESCRIPTION`, `URL_FILE_DRIVE`, `UPLOADEDBY`) VALUES
(1, 'test', '5/25/2023', 'https://res.cloudinary.com/papero/image/upload/v1683818020/zjgqg9fliqjyf6cg8cuk.jpg', 'Sains Komputer', 'ACCEPT', 'This is a test program. ', '8am', 1),
(2, 'Program 3', '6/25/2023', 'https://res.cloudinary.com/papero/image/upload/v1683818020/zjgqg9fliqjyf6cg8cuk.jpg', 'Sains Komputer', 'ACCEPT', 'This is a test program. ', '8am', 1),
(3, 'Program 2', '5/25/2023', 'https://res.cloudinary.com/papero/image/upload/v1683818020/zjgqg9fliqjyf6cg8cuk.jpg', 'Sains Komputer', 'ACCEPT', 'This is a test program. ', '8am', 1),
(4, 'test program 1', '2023-12-04', 'https://res.cloudinary.com/papero/image/upload/v1686406651/fe01qwlzl1yr14xzv1iq.png', 'Sains Komputer', 'ASSIGNED', 'asdfasdf', '8am', 1),
(5, 'Example Program', '1/1/2011', 'https://www.example.com/img.png', 'Sains Komputer', 'ASSIGNED', 'Ini contoh program', 'https://drive.google.com/file/d/1kazyfB4JHoZSmczN-FBVXB4C8qN5b46G/view', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers_a180970`
--

CREATE TABLE `tbl_customers_a180970` (
  `fld_customer_num` varchar(255) NOT NULL DEFAULT '',
  `fld_customer_fname` varchar(255) DEFAULT NULL,
  `fld_customer_lname` varchar(255) DEFAULT NULL,
  `fld_customer_gender` varchar(255) DEFAULT NULL,
  `fld_customer_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_customers_a180970`
--

INSERT INTO `tbl_customers_a180970` (`fld_customer_num`, `fld_customer_fname`, `fld_customer_lname`, `fld_customer_gender`, `fld_customer_phone`) VALUES
('C001', 'Maria', 'Garcia', 'Female', '019-2849132'),
('C002', 'Antonio', 'Goldman', 'Male', '011-7226581'),
('C003', 'William', 'Johnson', 'Male', '012-2978911'),
('C004', 'Wong', 'Qine', 'Female', '011-11557899'),
('C005', 'Adrielle', 'Shean', 'Female', '018-2267579');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers_a180970_pt2`
--

CREATE TABLE `tbl_customers_a180970_pt2` (
  `fld_customer_num` varchar(255) NOT NULL DEFAULT '',
  `fld_customer_name` varchar(255) DEFAULT NULL,
  `fld_customer_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_customers_a180970_pt2`
--

INSERT INTO `tbl_customers_a180970_pt2` (`fld_customer_num`, `fld_customer_name`, `fld_customer_phone`) VALUES
('', NULL, ''),
('C001', 'Anna Anjeli', '016-3397087'),
('C002', 'Crystal', '013-0412954'),
('C003', 'Ahmad Lukas', '018-7975533'),
('C004', 'Jonathan', '010-5649811'),
('C005', 'Adrielle', '018-7650930'),
('C006', 'Rahimi', '016-0651778'),
('C007', 'Wong Leh Qine', '0168167679');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders_a180970`
--

CREATE TABLE `tbl_orders_a180970` (
  `fld_order_num` varchar(255) NOT NULL DEFAULT '',
  `fld_order_date` timestamp NULL DEFAULT current_timestamp(),
  `fld_staff_num` varchar(255) DEFAULT NULL,
  `fld_customer_num` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_orders_a180970`
--

INSERT INTO `tbl_orders_a180970` (`fld_order_num`, `fld_order_date`, `fld_staff_num`, `fld_customer_num`) VALUES
('O5603f03a9349f0.39900158', '2015-09-08 12:36:22', 'S002', 'C001'),
('O628af699c01337.56758097', '2022-05-23 02:51:13', 'S004', 'C005'),
('O628af6ac21daa1.50453707', '2022-05-23 02:51:32', 'S005', 'C006'),
('O628af760212383.70174455', '2022-05-23 02:54:32', 'S001', 'C003'),
('O6290619f208bd8.69337747', '2022-05-27 05:29:08', 'S003', 'C004'),
('O62cdc149619427.26346039', '2022-07-12 18:45:35', 'S007', 'C002'),
('O62cdc7962d0ce6.72387653', '2022-07-12 19:12:22', 'S005', 'C005'),
('O62ce26229264b6.78023295', '2022-07-13 01:55:46', 'S007', 'C003'),
('O62cf38a554a6f2.64239208', '2022-07-13 21:27:01', 'S002', 'C004');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders_details_a180970`
--

CREATE TABLE `tbl_orders_details_a180970` (
  `fld_order_detail_num` varchar(255) NOT NULL,
  `fld_order_num` varchar(255) NOT NULL DEFAULT '',
  `fld_product_num` varchar(255) NOT NULL DEFAULT '',
  `fld_order_detail_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_orders_details_a180970`
--

INSERT INTO `tbl_orders_details_a180970` (`fld_order_detail_num`, `fld_order_num`, `fld_product_num`, `fld_order_detail_quantity`) VALUES
('D5603f136f41334.84833440', 'O5603f03a9349f0.39900158', 'P007', 1),
('D5603f172e5c678.94073168', 'O5603f03a9349f0.39900158', 'P015', 2),
('D5603f1d414aec2.66509139', 'O5603f0b95c6b20.25200174', 'P021', 1),
('D5603f1de126174.69346252', 'O5603f0b95c6b20.25200174', 'P011', 1),
('D56066d46220910.95973644', 'O5606610ab9dd86.61877132', 'P007', 4),
('D56066dbbd3f2e9.75768501', 'O5606610ab9dd86.61877132', 'P001', 5),
('D56066dc8acd253.78402201', 'O5606610ab9dd86.61877132', 'P038', 2),
('D5608e3e1079809.75949510', 'O5606610ab9dd86.61877132', 'P013', 10),
('D561b16d33732c4.59935911', 'O5603f03a9349f0.39900158', 'P009', 6),
('D628af7f4114cb2.36775047', 'O628af699c01337.56758097', 'P037', 2),
('D628af7fc174b90.37532955', 'O628af699c01337.56758097', 'P011', 3),
('D628af820189e21.28887214', 'O628af760212383.70174455', 'P017', 1),
('D628af830e44dc0.99482829', 'O628af760212383.70174455', 'P030', 5),
('D628af8454c3132.12591977', 'O628af6ac21daa1.50453707', 'P004', 2),
('D628af84cbbbf73.52983681', 'O628af6ac21daa1.50453707', 'P040', 1),
('D629061f8909159.71756236', 'O6290619f208bd8.69337747', 'P039', 1),
('D629062197bf7b6.24199838', 'O6290619f208bd8.69337747', 'P022', 2),
('D62cdc15ee98e76.50050687', 'O62cdc149619427.26346039', 'P036', 2),
('D62cdc1733b56a5.96076144', 'O62cdc149619427.26346039', 'P028', 1),
('D62cdc55c039965.14067121', 'O62cdc543483903.21912272', 'P016', 1),
('D62cdc565103302.17066112', 'O62cdc543483903.21912272', 'P027', 1),
('D62ce1fa9e95e41.61934707', 'O6290619f208bd8.69337747', 'P009', 1),
('D62ce2630306eb1.32468953', 'O62ce26229264b6.78023295', 'P019', 1),
('D62ce2636436731.70924581', 'O62ce26229264b6.78023295', 'P036', 2),
('D62cf38afe73190.93581737', 'O62cf38a554a6f2.64239208', 'P001', 1),
('D62cf38b36ecc60.54655594', 'O62cf38a554a6f2.64239208', 'P004', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_a180970`
--

CREATE TABLE `tbl_products_a180970` (
  `fld_product_num` varchar(255) NOT NULL DEFAULT '',
  `fld_product_name` varchar(255) DEFAULT NULL,
  `fld_product_price` float DEFAULT NULL,
  `fld_product_brand` varchar(255) DEFAULT NULL,
  `fld_product_condition` varchar(255) DEFAULT NULL,
  `fld_product_year` int(11) DEFAULT NULL,
  `fld_product_quantity` int(11) DEFAULT NULL,
  `fld_product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_products_a180970`
--

INSERT INTO `tbl_products_a180970` (`fld_product_num`, `fld_product_name`, `fld_product_price`, `fld_product_brand`, `fld_product_condition`, `fld_product_year`, `fld_product_quantity`, `fld_product_image`) VALUES
('P001', 'Ninja Zx-14r Abs', 14999, 'Kawasaki', 'New', 2015, 5, 'P001.png'),
('P002', 'Ninja Zx-10r Abs 30th Anniversary', 15599, 'Kawasaki', 'New', 2015, 9, ''),
('P004', 'Ninja Zx-10r Abs', 15299, 'Kawasaki', 'New', 2015, 9, ''),
('P005', 'Ninja Zx-6r Abs 30th Anniversary', 12999, 'Kawasaki', 'New', 2015, 6, ''),
('P006', 'Ninja Zx-6r Abs', 12699, 'Kawasaki', 'New', 2015, 7, ''),
('P007', 'Concours 14 Abs', 16199, 'Kawasaki', 'Used', 2014, 1, ''),
('P008', 'Ninja 1000 Abs', 11999, 'Kawasaki', 'New', 2015, 2, ''),
('P009', 'Z1000 Abs', 11999, 'Kawasaki', 'New', 2015, 1, ''),
('P010', 'Versys 650 Abs', 7599, 'Kawasaki', 'New', 2015, 6, ''),
('P011', 'Ninja 650 Abs', 7599, 'Kawasaki', 'New', 2015, 5, 'P011.png'),
('P012', 'Ninja 300 Abs', 5299, 'Kawasaki', 'Used', 2015, 2, ''),
('P013', 'Ninja 300 Se', 5199, 'Kawasaki', 'New', 2015, 2, ''),
('P014', 'Versys 1000 Lt', 11999, 'Kawasaki', 'New', 2015, 1, ''),
('P015', 'Versys 650 Lt', 7599, 'Kawasaki', 'New', 2015, 6, ''),
('P016', 'Versys 650 Abs', 7599, 'Kawasaki', 'New', 2015, 4, ''),
('P017', 'Vulcan 1700 Voyager Abs', 17399, 'Kawasaki', 'Used', 2015, 1, ''),
('P018', 'Vulcan 1700 Vaquero Abs', 16699, 'Kawasaki', 'New', 2015, 1, ''),
('P019', 'Vulcan 900 Classic', 7999, 'Kawasaki', 'New', 2015, 3, ''),
('P020', 'Vulcan 900 Classic Lt', 8999, 'Kawasaki', 'New', 2015, 8, ''),
('P021', 'Vulcan 900 Custom', 8499, 'Kawasaki', 'New', 2015, 3, ''),
('P022', 'Vulcan S Abs', 7399, 'Kawasaki', 'New', 2015, 2, ''),
('P023', 'Klr 650', 6599, 'Kawasaki', 'New', 2015, 2, ''),
('P024', 'Klx 250s', 5099, 'Kawasaki', 'New', 2014, 3, ''),
('P025', 'Klx 140l', 3399, 'Kawasaki', 'New', 2015, 4, ''),
('P026', 'Klx 140', 3099, 'Kawasaki', 'New', 2015, 1, ''),
('P027', 'Klx 110l', 2499, 'Kawasaki', 'New', 2015, 7, ''),
('P028', 'Klx 110', 2299, 'Kawasaki', 'New', 2015, 6, ''),
('P029', 'Kx 450f', 8699, 'Kawasaki', 'New', 2015, 4, ''),
('P030', 'Kx 250f', 7599, 'Kawasaki', 'New', 2015, 3, ''),
('P031', 'Kx 100', 4599, 'Kawasaki', 'Used', 2015, 1, ''),
('P032', 'Kx 85', 4349, 'Kawasaki', 'New', 2015, 5, ''),
('P033', 'Kx 65', 3699, 'Kawasaki', 'New', 2015, 8, ''),
('P034', 'Gold Wing', 23999, 'Honda', 'New', 2015, 1, ''),
('P035', 'Gold Wing F6b', 23999, 'Honda', 'Used', 2015, 1, ''),
('P036', 'St1300 Abs', 18230, 'Honda', 'New', 2012, 2, ''),
('P037', 'Interstate', 13240, 'Honda', 'New', 2015, 3, ''),
('P038', 'Ctx1300', 15999, 'Honda', 'New', 2014, 5, ''),
('P039', 'Ctx700', 7799, 'Honda', 'Used', 2014, 1, ''),
('P040', 'Nc700x', 7799, 'Honda', 'New', 2014, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_a180970_pt2`
--

CREATE TABLE `tbl_products_a180970_pt2` (
  `fld_product_num` varchar(255) NOT NULL DEFAULT '',
  `fld_product_name` varchar(255) DEFAULT NULL,
  `fld_product_price` float DEFAULT NULL,
  `fld_product_brand` varchar(255) DEFAULT NULL,
  `fld_product_type` varchar(255) DEFAULT NULL,
  `fld_product_quantity` int(11) DEFAULT NULL,
  `fld_product_description` varchar(255) DEFAULT NULL,
  `fld_product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_products_a180970_pt2`
--

INSERT INTO `tbl_products_a180970_pt2` (`fld_product_num`, `fld_product_name`, `fld_product_price`, `fld_product_brand`, `fld_product_type`, `fld_product_quantity`, `fld_product_description`, `fld_product_image`) VALUES
('P001', 'Wilson Prime All Court Tennis Balls (3 Balls)', 43.3, 'Wilson', 'Ball', 257, 'Yellow colour, 0.1 kg, suitable for adult', 'P001.jpg'),
('P002', 'Wilson Advantage Tennis Bag Series', 183.9, 'Wilson', 'Bag', 65, 'Can holds up to 3 adult rackets, Size: 28 x 35 x12 / 71 x 9 x 30.5 cm', 'P002.jpg'),
('P003', 'Wilson Adult Recreational Tennis Rackets', 354.55, 'Wilson', 'Racquet', 102, 'Grid Size 4-4 1/2\', Composite material, 0.3 kg, suitable for adult', 'P003.jpg'),
('P004', 'Wilson Mens Rush Pro 2.5 Tennis Shoe', 455.5, 'Wilson', 'Shoes', 85, 'Made in Usa or Imported, rubber sole', 'P004.jpg'),
('P005', 'Wilson Sporting Goods Tennis Bag', 497.3, 'Wilson', 'Bag', 75, '900D Polyester shell fabric, padded 2-racket compartment with locking zippers, Black in colour', 'P005.jpg'),
('P006', 'Wilson US Open Tennis Racket - 4 1/4 inches', 250.55, 'Wilson', 'Racquet', 89, 'Grid Size 4 1/4, Composite Material, 0.7 pounds', 'P006.jpg'),
('P007', 'Wilson Pro Overgrip Tennis Grip', 22.3, 'Wilson', 'Grip Tape', 285, 'Thin, stretchy, Durable material, 3 overgrips per pack', 'P007.jpg'),
('P008', 'HEAD Microgel Radical Midplus Tennis Racket - Pre-Strung 27 Inch Adult Racquet', 413.75, 'HEAD', 'Racquet', 68, 'Grid Size 4 3/8, Carbon Fiber Material, 0.295 kg, suitable for adult', 'P008.jpg'),
('P009', 'HEAD Mens Revolt Evo Tennis Shoe', 455.5, 'HEAD', 'Shoes', 101, 'Rubber sole, Upper made from lightweight mesh material, outsole made of a non-marking rubber', 'P009.jpg'),
('P010', 'HEAD Leather Tour Tennis Racket Replacement Grip - Racquet Handle Grip Tape', 56.4, 'HEAD', 'Grip Tape', 250, 'Made from 100% authentic leather, True durability, superior feel', 'P010.jpg'),
('P011', 'HEAD Tennis Racquet Cover Bag - Lightweight Padded Racket Carrying Bag w/ Adjustable Shoulder Strap', 104.3, 'HEAD', 'Bag', 77, 'Can hold only 1 racket, Black/White in colour, Nylon material', 'P011.jpg'),
('P012', 'HEAD Tour Team Tennis Backpack 2 Racquet Carrying Bag w/Padded Shoulder Straps & Shoe Compartment', 250.55, 'HEAD', 'Bag', 93, 'Size: Backpack, Blue/Pink in color, Polyester material, Item dimensions (LxWxH): 13x11x20 inches', 'P012.jpg'),
('P013', 'HEAD Ti. S5 CZ Tennis Racket - Pre-Strung Head Heavy Balance 27.5 Inch Racquet', 355.25, 'HEAD', 'Racquet', 64, 'Grip Size 4 3/8, Graphite and Titanium material, for beginner, 1.5 pounds, suitable for adult', 'P013.jpg'),
('P014', 'Head Xtreme Soft Racquet Overgrip - Tennis Racket Grip Tap', 33.25, 'HEAD', 'Grip Tape', 96, 'Made from specially engineered tacky elastomer material, superior feel, easy application', 'P014.jpg'),
('P015', 'HEAD Womens Pro Player Visor', 88.1, 'HEAD', 'Hat', 113, '100% Polyester, hook and loop closure, sweatband inside', 'P015.jpg'),
('P016', 'Wilson EZ Tennis Net', 288.35, 'Wilson', 'Net', 110, 'Easy setup and take down, adjustable, approved for USTA', 'P016.jpg'),
('P017', 'Tennis Ball Pick Up Hopper, Black (WRZ323900)', 190.35, 'Wilson', 'Hooper', 159, 'Black in colour, All steel material, suitable for adult', 'P017.jpg'),
('P018', 'WILSON Unisex Adult', 179, 'Wilson', 'Hat', 293, 'Gris in colour, 100% other fabric, UV protection', 'P018.jpg'),
('P019', 'WILSON Mens Hat', 167.1, 'Wilson', 'Hat', 162, '100% Polyester, imported, hand wash only, waterproof construction', 'P019.jpg'),
('P020', 'Babolat 2021 Pure Drive 26\" Junior Tennis Racquet', 455.5, 'Babolat', 'Racquet', 140, 'Grip Size 4, 8.8 Ounces, suitable for adult', 'P020.jpg'),
('P021', 'Babolat Pure Drive 2021 Junior 26 Inch Tennis Racquet (Blue)', 456, 'Babolat', 'Racquet', 139, 'Grip Size 4, 8.8 Ounces, suitable for adult', 'P021.jpg'),
('P022', 'Babolat - Pro Tour x30 Grip', 150.4, 'Babolat', 'Grip Tape', 299, '30 pack, slightly tacky feel with a confortable grip', 'P022.jpg'),
('P023', 'Babolat Junior Propulse All Court Tennis Shoe', 251, 'Babolat', 'Shoes', 132, 'Rubber sole, comfort and shock absorption', 'P023.jpg'),
('P024', 'Babolat Womens Jet Mach 3 All Court Tennis Shoes', 543.9, 'Babolat', 'Shoes', 157, 'Ethylene Vinyl Acetate sole, provide optimal cushioning at each stage of game', 'P024.jpg'),
('P025', 'Prince 3 Pack Dura Tac Over Grip', 54.3, 'Prince', 'Grip Tape', 218, 'Neon/Black/White in colour', 'P025.jpg'),
('P026', 'Prince T22.5 Womens Tennis Shoe', 414.2, 'Prince', 'Shoes', 140, 'Rubber sole, White/Blue in colour', 'P026.jpg'),
('P027', 'YONEX VCORE 98 6th Gen Tennis Racquet', 763.8, 'YONEX', 'Racquet', 133, 'Grip Size 4 1/2, Material: HM Graphite/2G- Namd Flex Force/VDM, 1g, suitable for adult', 'P027.jpg'),
('P028', 'YONEX Pro 6 Racquet Tennis Bag, Black', 414.2, 'YONEX', 'Bag', 95, 'Item dimensions: 15.75x11.81x11.81 inches, Can hold up 2 racquets', 'P028.jpg'),
('P029', 'YONEX Mens Power Cushion Sonicage 2 Wide Tennis Shoes', 414.2, 'YONEX', 'Shoes', 74, 'Rubber sole, Black/White in colour', 'P029.jpg'),
('P030', 'YONEX 920212 (Deep Blue)(12-Pack) Badminton Tennis Racket Bag', 372.35, 'YONEX', 'Bag', 65, 'Deep Blue in colour, Size L33x25.5x50cm', 'P030.jpg'),
('P031', 'YONEX EZONE ACE Deep Blue Tennis Racquet - Great Racquet for Comfort and Control', 414.2, 'YONEX', 'Racquet', 148, 'Grip Size 4 3/8\', Material: Graphite, 10 Ounces', 'P031.jpg'),
('P032', 'Yonex Super Grap Overgrip (3 ea)', 33.25, 'YONEX', 'Grip Tape', 272, 'Contains one roll of 3 stripsp of overgrip', 'P032.jpg'),
('P033', 'YONEX EZONE ACE Deep Blue Tennis Racquet', 414.2, 'YONEX', 'Racquet', 121, 'Grip Size 4 1/4, For intermediate skill level', 'P033.jpg'),
('P034', 'Dunlop Nitro Junior Tennis Racquets', 104.55, 'Dunlop', 'Racquet', 64, '25\' length, Grip Size 4\', Material: Aluminium, For beginner skill level, 8.5 Ounces, suitable for youth', 'P034.jpg'),
('P035', 'Dunlop Sports Championship Tennis Balls', 57.75, 'Dunlop', 'Ball', 225, '3 balls, Hard Court in colout, USTA and ITF Approved', 'P035.jpg'),
('P036', 'DUNLOP Championship Extra Duty Tennis Balls', 62.7, 'Dunlop', 'Ball', 183, 'Yellow in colour, 300 grams, USTA and ITF approved, 3 balls per can', 'P036.jpg'),
('P037', 'Dunlop 2021 CX Club (6-Pack) Tennis Bags', 292, 'Dunlop', 'Bag', 60, 'Size: 6-pack, Black/Red in colout, Material: Blend', 'P037.jpg'),
('P038', 'Nike Mens Aerobill Rafa Nadal H86 Tennis Hat', 125.4, 'Nike', 'Hat', 281, 'Embroidered eyelets and Bull logo', 'P038.jpg'),
('P039', 'Nike Mens Tennis Shoe', 227, 'Nike', 'Shoes', 57, 'Rubber sole, 1.021 kg, White/Black/White Onyx in colour', 'P039.jpg'),
('P040', 'adidas Men\'s Grand Court Se Tennis Shoe', 368, 'Adidas', 'Shoes', 50, '60% Textile Synthetics/40% Leather, rubber sole', 'P040.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffs_a180970`
--

CREATE TABLE `tbl_staffs_a180970` (
  `fld_staff_num` varchar(255) NOT NULL DEFAULT '',
  `fld_staff_fname` varchar(255) DEFAULT NULL,
  `fld_staff_lname` varchar(255) DEFAULT NULL,
  `fld_staff_gender` varchar(255) DEFAULT NULL,
  `fld_staff_phone` varchar(255) DEFAULT NULL,
  `fld_staff_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_staffs_a180970`
--

INSERT INTO `tbl_staffs_a180970` (`fld_staff_num`, `fld_staff_fname`, `fld_staff_lname`, `fld_staff_gender`, `fld_staff_phone`, `fld_staff_email`) VALUES
('S001', 'Larry', 'Bay', 'Male', '013-3922010', 'larry.bay@bike.com'),
('S002', 'James', 'Martin', 'Male', '019-8321266', 'james.martin@bike.com'),
('S003', 'Jennifer', 'Henderson', 'Female', '017-2887431', 'jennifer.henderson@bike.com'),
('S004', 'Sharon', 'Wong', 'Female', '014-3217548', 'sharon@gmail.com'),
('S005', 'Francis', 'Yap', 'Male', '012-9904321', 'francisyap@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staffs_a180970_pt2`
--

CREATE TABLE `tbl_staffs_a180970_pt2` (
  `fld_staff_num` varchar(255) NOT NULL DEFAULT '',
  `fld_staff_name` varchar(255) DEFAULT NULL,
  `fld_staff_position` varchar(255) DEFAULT NULL,
  `fld_staff_phone` varchar(255) DEFAULT NULL,
  `fld_staff_email` varchar(255) DEFAULT NULL,
  `fld_staff_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_staffs_a180970_pt2`
--

INSERT INTO `tbl_staffs_a180970_pt2` (`fld_staff_num`, `fld_staff_name`, `fld_staff_position`, `fld_staff_phone`, `fld_staff_email`, `fld_staff_password`) VALUES
('S001', 'William', 'Normal Staff', '010-2785643', 'william123@gmail.com', 'abc123'),
('S002', 'Amir', 'Normal Staff', '017-9245315', 'amiram@yahoo.com', 'a123456'),
('S003', 'Babarra', 'Normal Staff', '013-3746898', 'bbr@gmail.com', 'bbr2468'),
('S004', 'Jack', 'Normal Staff', '018-3005280', 'jackwong@gmail.com', 'jw9876'),
('S005', 'Jenny', 'Normal Staff', '012-8907221', 'jenny@yahoo.com', 'Aa3456'),
('S006', 'Sharon', 'Normal Staff', '016-4540208', 'sharon1003@gmail.com', 'sharon1003'),
('S007', 'Wong Leh Qine', 'Admin', '01110557899', 'lehqine@gmail.com', 'wlq1234'),
('S008', 'lehling', 'Admin', '0129904321', 'lehling@gmail.com', 'lehling');

-- --------------------------------------------------------

--
-- Table structure for table `userfakulti`
--

CREATE TABLE `userfakulti` (
  `USERFAKULTI_ID` int(11) NOT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `EMEL` varchar(100) DEFAULT NULL,
  `NO_KP` varchar(50) DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `NO_TELEFON` varchar(50) DEFAULT NULL,
  `URL_AVATAR` varchar(100) DEFAULT NULL,
  `CREATED_DATE` timestamp NULL DEFAULT current_timestamp(),
  `FAKULTI` varchar(50) DEFAULT NULL,
  `VERIFY_TOKEN` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `userfakulti`
--

INSERT INTO `userfakulti` (`USERFAKULTI_ID`, `NAMA`, `PASSWORD`, `EMEL`, `NO_KP`, `ALAMAT`, `NO_TELEFON`, `URL_AVATAR`, `CREATED_DATE`, `FAKULTI`, `VERIFY_TOKEN`) VALUES
(1, 'Sains Komputer', '111111', 'hiaweiqi@gmail.com', '010906070531', 'asdfasdf', '0192345678', 'https://res.cloudinary.com/papero/image/upload/v1686402786/atu2ymnp5orakyekuzoj.png', '2023-02-26 22:31:56', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `userfakulti_noti`
--

CREATE TABLE `userfakulti_noti` (
  `NOTI_ID` int(11) NOT NULL,
  `USERFAKULTI_ID` varchar(15) DEFAULT NULL,
  `TEXT` text DEFAULT NULL,
  `TARIKH` varchar(15) DEFAULT NULL,
  `MASA` varchar(15) DEFAULT NULL,
  `READ_NOTI` varchar(1) DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`APP_ID`),
  ADD KEY `app_ibfk_1` (`APPLICATION_ID`);

--
-- Indexes for table `appapplication`
--
ALTER TABLE `appapplication`
  ADD PRIMARY KEY (`APPLICATION_ID`),
  ADD KEY `appapplication_ibfk_1` (`LECTURER_ID`);

--
-- Indexes for table `appprogram`
--
ALTER TABLE `appprogram`
  ADD PRIMARY KEY (`APPPROGRAM_ID`),
  ADD KEY `appprogram_ibfk_1` (`APP_ID_PENGERUSI`),
  ADD KEY `appprogram_ibfk_3` (`KUALITIUKM_ID`),
  ADD KEY `appprogram_ibfk_4` (`APP_ID_PANEL_1`),
  ADD KEY `appprogram_ibfk_5` (`APP_ID_PANEL_2`),
  ADD KEY `appprogram_ibfk_2` (`PROGRAM_ID`);

--
-- Indexes for table `app_noti`
--
ALTER TABLE `app_noti`
  ADD PRIMARY KEY (`NOTI_ID`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guessbook`
--
ALTER TABLE `guessbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kualitiukm`
--
ALTER TABLE `kualitiukm`
  ADD PRIMARY KEY (`KUALITIUKM_ID`);

--
-- Indexes for table `kualitiukm_noti`
--
ALTER TABLE `kualitiukm_noti`
  ADD PRIMARY KEY (`NOTI_ID`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`LAPORAN_ID`),
  ADD KEY `laporan_ibfk_1` (`APPPROGRAM_ID`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`LECTURER_ID`);

--
-- Indexes for table `lecturer_noti`
--
ALTER TABLE `lecturer_noti`
  ADD PRIMARY KEY (`NOTI_ID`);

--
-- Indexes for table `myguestbook`
--
ALTER TABLE `myguestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`PENGUMUMAN_ID`),
  ADD KEY `KUALITIUKM_ID` (`KUALITIUKM_ID`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`PERTANYAAN_ID`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`PROGRAM_ID`),
  ADD KEY `UPLOADEDBY` (`UPLOADEDBY`);

--
-- Indexes for table `tbl_customers_a180970`
--
ALTER TABLE `tbl_customers_a180970`
  ADD PRIMARY KEY (`fld_customer_num`);

--
-- Indexes for table `tbl_customers_a180970_pt2`
--
ALTER TABLE `tbl_customers_a180970_pt2`
  ADD PRIMARY KEY (`fld_customer_num`);

--
-- Indexes for table `tbl_orders_a180970`
--
ALTER TABLE `tbl_orders_a180970`
  ADD PRIMARY KEY (`fld_order_num`);

--
-- Indexes for table `tbl_orders_details_a180970`
--
ALTER TABLE `tbl_orders_details_a180970`
  ADD PRIMARY KEY (`fld_order_detail_num`);

--
-- Indexes for table `tbl_products_a180970`
--
ALTER TABLE `tbl_products_a180970`
  ADD PRIMARY KEY (`fld_product_num`);

--
-- Indexes for table `tbl_products_a180970_pt2`
--
ALTER TABLE `tbl_products_a180970_pt2`
  ADD PRIMARY KEY (`fld_product_num`);

--
-- Indexes for table `tbl_staffs_a180970`
--
ALTER TABLE `tbl_staffs_a180970`
  ADD PRIMARY KEY (`fld_staff_num`);

--
-- Indexes for table `tbl_staffs_a180970_pt2`
--
ALTER TABLE `tbl_staffs_a180970_pt2`
  ADD PRIMARY KEY (`fld_staff_num`);

--
-- Indexes for table `userfakulti`
--
ALTER TABLE `userfakulti`
  ADD PRIMARY KEY (`USERFAKULTI_ID`);

--
-- Indexes for table `userfakulti_noti`
--
ALTER TABLE `userfakulti_noti`
  ADD PRIMARY KEY (`NOTI_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ADMIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `APP_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `appapplication`
--
ALTER TABLE `appapplication`
  MODIFY `APPLICATION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `appprogram`
--
ALTER TABLE `appprogram`
  MODIFY `APPPROGRAM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `app_noti`
--
ALTER TABLE `app_noti`
  MODIFY `NOTI_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guessbook`
--
ALTER TABLE `guessbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kualitiukm`
--
ALTER TABLE `kualitiukm`
  MODIFY `KUALITIUKM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kualitiukm_noti`
--
ALTER TABLE `kualitiukm_noti`
  MODIFY `NOTI_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `LAPORAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `LECTURER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lecturer_noti`
--
ALTER TABLE `lecturer_noti`
  MODIFY `NOTI_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `myguestbook`
--
ALTER TABLE `myguestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `password_reset_temp`
--
ALTER TABLE `password_reset_temp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `PENGUMUMAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `PERTANYAAN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `PROGRAM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userfakulti`
--
ALTER TABLE `userfakulti`
  MODIFY `USERFAKULTI_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userfakulti_noti`
--
ALTER TABLE `userfakulti_noti`
  MODIFY `NOTI_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `app`
--
ALTER TABLE `app`
  ADD CONSTRAINT `app_ibfk_1` FOREIGN KEY (`APPLICATION_ID`) REFERENCES `appapplication` (`APPLICATION_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appapplication`
--
ALTER TABLE `appapplication`
  ADD CONSTRAINT `appapplication_ibfk_1` FOREIGN KEY (`LECTURER_ID`) REFERENCES `lecturer` (`LECTURER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appprogram`
--
ALTER TABLE `appprogram`
  ADD CONSTRAINT `appprogram_ibfk_1` FOREIGN KEY (`APP_ID_PENGERUSI`) REFERENCES `app` (`APP_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appprogram_ibfk_2` FOREIGN KEY (`PROGRAM_ID`) REFERENCES `program` (`PROGRAM_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appprogram_ibfk_3` FOREIGN KEY (`KUALITIUKM_ID`) REFERENCES `kualitiukm` (`KUALITIUKM_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appprogram_ibfk_4` FOREIGN KEY (`APP_ID_PANEL_1`) REFERENCES `app` (`APP_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appprogram_ibfk_5` FOREIGN KEY (`APP_ID_PANEL_2`) REFERENCES `app` (`APP_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`APPPROGRAM_ID`) REFERENCES `appprogram` (`APPPROGRAM_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD CONSTRAINT `FK_KUALITIUKM_ID` FOREIGN KEY (`KUALITIUKM_ID`) REFERENCES `kualitiukm` (`KUALITIUKM_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `FK_UPLOADEDBY` FOREIGN KEY (`UPLOADEDBY`) REFERENCES `userfakulti` (`USERFAKULTI_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
