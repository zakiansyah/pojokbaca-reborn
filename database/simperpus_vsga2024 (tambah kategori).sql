-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2025 at 05:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simperpus_vsga2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `sinopsis` varchar(1000) NOT NULL,
  `cover` varchar(50) NOT NULL,
  `link` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `tahun`, `kategori`, `pengarang`, `penerbit`, `sinopsis`, `cover`, `link`) VALUES
(12, 'adada', 0000, 'Pengetahuan', 'eeadd', 'dsds', '                     gggjjb adh ahd ahd akd akda dkad akd ad akd ak dakd akd akdhhdd ad ahd ahkd akhd ahd ad akcbehe cejgc ahc cvkwc kg cacg acdhchcviycbaiycac aceg ad hshsebdedcecycsueeifunshbdha da dwad                                                                                      ', 'uploads/1175-SRI-WINIARTI.jpg', 'https://api.bookbotkids.workers.dev/books/ed06c75c-73a0-4b76-91cd-3090bb634d71/Mau%20Dibawa%20ke%20Mana?.pdf'),
(13, 'sadnad', 2121, 'Fiksi', 'wdajdn', 'dad', '                                     adadad                                   ', 'uploads/1175-SRI-WINIARTI.jpg', 'https://api.bookbotkids.workers.dev/books/ed06c75c-73a0-4b76-91cd-3090bb634d71/Mau%20Dibawa%20ke%20Mana?.pdf'),
(14, 'edaed', 0000, 'Fiksi', 'sada', 'jcjcj', '                                                   xjzjxjxjxj                     ', 'uploads/foto.jpg', 'https:/bykd.pdf'),
(15, 'sasas', 0000, 'Fiksi', 'sash', 'shshsh', '                                  apa tubabaudnaudnanxaxa ahbxauxuax axauxauxnaux a xuaxbaux aux auxuaxbaubaudduadbau dhadbabduaubdaud aud uadbuadbuad  ad uabdaudba dua duadbuadbua duadbuadadh                                      ', 'uploads/Screenshot 2024-12-02 021040.png', 'https:/ssdsd.ss'),
(16, 'Flutter', 2002, 'Cerita Anak', 'Rudi', 'Eka', '                             hsdaaaaakjshadkj       ', 'uploads/107. Zakiansyah_page-0001.jpg', 'https://sdhj.com'),
(17, 'Kancil2', 2002, 'Fiksi', 'Andi', 'Gramedia', '                                                                                                            dsadsaads                                                                        ', 'uploads/skpi 1.png', 'https://dssd.com'),
(18, 'gcvbbcvc', 2002, 'Dongeng', 'Rudi', 'Eka', '                                                                                      sdfdsf                                                          ', 'uploads/struktur folder css.png', 'https://sdhj.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
