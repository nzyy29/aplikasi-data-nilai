-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 03:25 AM
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
-- Database: `db_nilai`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` enum('Siswa','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `jurusan` text NOT NULL,
  `status` enum('Siswa','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`nisn`, `nama`, `kelas`, `jurusan`, `status`) VALUES
('00088087686', 'yusron', 'XII', 'PM', 'Siswa'),
('00665697', 'Dee', 'XII', 'PPLG', 'Siswa'),
('0067887780', 'ipann', 'XII', 'MPLB', 'Siswa'),
('0075939049', 'Naufal Adli S', 'XII', 'PPLG', 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `nisn` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `jurusan` text NOT NULL,
  `mata_pelajaran` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`nisn`, `nama`, `kelas`, `jurusan`, `mata_pelajaran`, `nilai`) VALUES
('0054835962', 'Bagus Deni Firmansyah', 'XII', 'PPLG', 'Matematika', 80),
('0056644294', 'Muhammad Syawal Fauzan', 'XII', 'PPLG', 'Matematika', 80),
('0061506642', 'Doni Erlangga', 'XII', 'PPLG', 'Matematika', 80),
('0061916156', 'Riska Maulina', 'XII', 'PPLG', 'Matematika', 80),
('0062201522', 'Chandra Jun Gani', 'XII', 'PPLG', 'Matematika', 80),
('0062876914', 'Holid Saeful Amri', 'XII', 'PPLG', 'Matematika', 80),
('0062970183', 'Alvino dwi Permana Majid', 'XII', 'PPLG', 'Matematika', 91),
('0063957726', 'Aliya khairun Nisa Nurfadilah', 'XII', 'PPLG', 'Matematika', 80),
('0064872198', 'Muhamad Randi Fernanda', 'XII', 'PPLG', 'Matematika', 1),
('0065247207', 'Yusup Maulana Apriyana', 'XII', 'PPLG', 'Matematika', 91),
('0066095051', 'Ira Octaviani', 'XII', 'PPLG', 'Matematika', 80),
('0066580588', 'Farid Dwi Satriawan', 'XII', 'PPLG', 'Matematika', 80),
('0066597769', 'Andi Maulana', 'XII', 'PPLG', 'Matematika', 91),
('0066854019', 'Mochamad Farhan Elgiana', 'XII', 'PPLG', 'Matematika', 80),
('0067094838', 'Ginggi Putra Arywibawa', 'XII', 'PPLG', 'Matematika', 80),
('0067190497', 'Ilham', 'XII', 'PPLG', 'Matematika', 80),
('0067681071', 'Muhamad Irfan Hilmi', 'XII', 'PPLG', 'Matematika', 80),
('0068498600', 'Topan Hardiansyah', 'XII', 'PPLG', 'Matematika', 80),
('0068596976', 'Muhammad Nendi', 'XII', 'PPLG', 'Matematika', 60),
('0068674547', 'Hendriawan Nuryadi', 'XII', 'PPLG', 'Matematika', 80),
('0069046688', 'Hildan Ramadhan', 'XII', 'PPLG', 'Matematika', 8),
('0069206448', 'Rizqi Subagja', 'XII', 'PPLG', 'Matematika', 80),
('006988444', 'ulen', 'XII', 'MPLB', 'Inggris', 100),
('0073394025', 'Salsabila Febrianty', 'XII', 'PPLG', 'Matematika', 80),
('007377723', 'Eva Yuliana', 'XII', 'PPLG', 'Matematika', 80),
('0075205190', 'Daka Auliana', 'XII', 'PPLG', 'Matematika', 80),
('0075359398', 'Muhamad Fadillah sumbul', 'XII', 'PPLG', 'Matematika', 80),
('00759399049', 'Naufal Adli Saputra', 'XII', 'PPLG', 'Matematika', 80),
('0076162104', 'Ridwan Maulana', 'XII', 'PPLG', 'Matematika', 80),
('00761663698', 'Zaskiya Maharani Chantika', 'XII', 'PPLG', 'Matematika', 80),
('007656442', 'Ardiya', 'XII', 'MPLB', 'IPAS', 91),
('0077117933', 'Kevin Febriansyah', 'XII', 'PPLG', 'Matematika', 80),
('0077643460', 'Ikhsan Putra Pratama', 'XII', 'PPLG', 'Matematika', 80),
('0078193912', 'Muhammad Febriansyah', 'XII', 'PPLG', 'Matematika', 80),
('0078810598', 'Amelia', 'XII', 'PPLG', 'Matematika', 80),
('0079331824', 'Muhammad Raisya Mulyana Putra', 'XII', 'PPLG', 'Matematika', 80),
('0086756556', 'Bagas Kara', 'XII', 'AKL', 'PPKN', 80),
('00987575', 'ubel', 'XII', 'PM', 'Bhs Jepang', 91),
('0106673553', 'Andini', 'XII', 'PM', 'PAI', 91),
('11211212121', 'ubed otoy', 'XII', 'AKL', 'sejarah', 91);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`nisn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
