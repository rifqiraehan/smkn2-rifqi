-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 04:32 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tstudent`
--

CREATE TABLE `tstudent` (
  `id` int(100) NOT NULL,
  `nis` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tstudent`
--

INSERT INTO `tstudent` (`id`, `nis`, `name`, `alamat`, `kelas`, `jurusan`) VALUES
(1, 30346, 'Rifqi Raehan Hermawan', 'rifqiraehan86@gmail.com', 'XI', 'RPL 2'),
(2, 30337, 'Muhammad Ilham Ardiansah', 'ilham.ardiansah70@gmail.com', 'XI', 'RPL 2'),
(3, 30334, 'Muhammad Ardian Syah', 'sardian930@gmail.com', 'XI', 'RPL 2'),
(4, 30338, 'Muhammad Naufal Arantxa', 'iniakunnaufal@gmail.com', 'XI', 'RPL 2'),
(5, 30335, 'Muhammad Dwi Afriza', 'muhammaddwiafriza30@gmail.com', 'XI', 'RPL 2'),
(6, 30292, 'Akmal Luthfi', 'akmalluthfi19@gmail.com', 'XI', 'RPL 2'),
(7, 30343, 'Refa Italiano Mashuda', 'refamashuda@gmail.com', 'XI', 'RPL 2'),
(8, 30336, 'Muhammad Farhan Maulana Firdaus', 'm.farhanfirdaus48@gmail.com', 'XI', 'RPL 2'),
(9, 30298, 'Bagus Justine Prasetyo', 'bagusjustine@gmail.com', 'XI', 'RPL 2'),
(10, 30351, 'Syafri Wirawan Tanuwijaya', 'syafriwirawan@gmail.com', 'XI', 'RPL 2'),
(11, 30306, 'Dika Septi Nugraha', 'masdisenu17@gmail.com', 'XI', 'RPL 2'),
(12, 30319, 'Imam Abu Bakar', 'imam.abubakar999@gmail.com', 'XI', 'RPL 2'),
(13, 30314, 'Frinzy Firdianto', 'frinzy374@gmail.com', 'XI', 'RPL 2'),
(14, 30287, 'Abrian Kristian Saputra', 'brian.arpet05@gmail.com', 'XI', 'RPL 2'),
(15, 30354, 'Valencia Elisabeth Putri Natania', 'nataniaelisabeth06@gmail.com', 'XI', 'RPL 2'),
(16, 30332, 'Muhamad Bima Syahputra', 'bima22120@gmail.com', 'XI', 'RPL 2'),
(17, 30339, 'Muhammad Raihan', 'raihanm854@gmail.com', 'XI', 'RPL 2'),
(18, 30320, 'Imelia Trisyananda', 'imeliatrisya1005@gmail.com', 'XI', 'RPL 2'),
(19, 30344, 'Rezha Desthaviano Evan Safiudin', 'rezhadesthaviano@gmail.com', 'XI', 'RPL 2'),
(20, 30318, 'Ilham Bintang', 'ilhambintang2525@gmail.com', 'XI', 'RPL 2'),
(21, 30299, 'Bethanicha Risma Ramadhani', 'bethanicharr06@gmail.com', 'XI', 'RPL 2'),
(22, 30328, 'Moch. Haydar Aviv', 'mochhaydar10@gmail.com', 'XI', 'RPL 2'),
(23, 30308, 'Echo Restu Hidayat', 'echohidayat05@gmail.com', 'XI', 'RPL 2'),
(24, 30316, 'Herodion Supriyanto Bimantara', 'herodion@gmail.com', 'XI', 'RPL 2'),
(25, 30357, 'Rizky Febrian Hidayat', 'rizkyfeb564@gmail.com', 'XI', 'RPL 2'),
(26, 30352, 'Tegar Iman Saputra', 'tegarimans82@gmail.com', 'XI', 'RPL 2'),
(27, 30301, 'Chayyul Fariq Al Abqori', 'fariqalabqori@gmail.com', 'XI', 'RPL 2'),
(28, 30286, 'Aaqilal Hafaafi', 'hafaafidisini@gmail.com', 'XI', 'RPL 2'),
(29, 30317, 'Ica Apriliya Ferlita', 'apriliaica@gmail.com', 'XI', 'RPL 2'),
(30, 30324, 'Juwita Nur Iftitah', 'iftitahjuwita@gmail.com', 'XI', 'RPL 2'),
(31, 30326, 'Lisa Kartika Sari', 'lisarikartika@gmail.com', 'XI', 'RPL 2'),
(32, 30333, 'Muhamad Rafly Ferdiansyah', 'Raflyferdi08@gmail.com', 'XI', 'RPL 2'),
(33, 30341, 'Nathan Evans Wonok', 'nathevan@gmail.com', 'XI', 'RPL 2'),
(34, 30330, 'Moch. Reza Ramadhani', 'ramadrezaa@gmail.com', 'XI', 'RPL 2'),
(35, 30254, 'Ainur Rohman Prayoga Jati', 'yogaainur@gmail.com', 'XI', 'SIJA'),
(36, 20256, 'Arief Rachman Hakim', 'rachmanhakim@gmail.com', 'XI', 'SIJA'),
(37, 30266, 'Krisna Ilham Kusuma Hakky', 'kusuilham@gmail.com', 'XI', 'RPL 2'),
(38, 30202, 'Muhammad Irsyad Virgianto', 'irsyadvirgin@gmail.com', 'XI', 'TKJ'),
(39, 30101, 'Diajengrara Prianchika', 'diachika@gmail.com', 'XI', 'DPIB 1'),
(40, 30505, 'Ilham Maulana Gymnastiar', 'gymham@gmail.com', 'XI', 'TEDK'),
(41, 30156, 'Abdul Aziz', 'azizhere@gmail.com', 'XI', 'TPM 1'),
(42, 30187, 'Putri Hawa Oktaviana', 'hawaviana@gmail.com', 'XI', 'ANI 1'),
(43, 30189, 'Robert Iqbal Baihaqi', 'robaiqi@gmail.com', 'XI', 'TBSM 1'),
(44, 30098, 'Satriyo Bayu Nusantoro', 'nusabay@gmail.com', 'XI', 'TFLM'),
(45, 30045, 'Sayid Femas HIdayat Ramadhan', 'femasay@gmail.com', 'XI', 'TFLM'),
(46, 30137, 'Eby Yulian', 'yulieby@gmail.com', 'XI', 'TMPO'),
(47, 30076, 'Arief Darmawan', 'ariefdarma@gmail.com', 'XI', 'TPM 1'),
(48, 30123, 'Diaz Damar Syaputra', 'diasdamar@gmail.com', 'XI', 'KGSP'),
(49, 30155, 'Hilbran Finadito Sucahyo', 'hilfin@gmail.com', 'XI', 'KGSP'),
(50, 30001, 'Afimam Arisandi', 'mamri@gmail.com', 'XI', 'TAV'),
(51, 33331, 'Magnus Carlsen', 'macarl@gmail.com', 'XI', 'SIJA'),
(52, 33332, 'Akihito Kanbara', 'akikandesu@gmail.com', 'XI', 'TKJ'),
(53, 33333, 'Jeanne d\'Arc', 'jeanned@gmail.com', 'XI', 'DPIB 1'),
(54, 33334, 'Nero Claudius', 'nerodayo@gmail.com', 'XI', 'DPIB 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tstudent`
--
ALTER TABLE `tstudent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tstudent`
--
ALTER TABLE `tstudent`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
