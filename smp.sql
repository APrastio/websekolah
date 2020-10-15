-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 05:19 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', '$2y$10$Yp.xFt57/t.H08GaOrzg7uc.1pgbdXGOWfL.YgyaXGAMrofdWsTQW');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `nisn` varchar(12) NOT NULL,
  `nama_alumni` varchar(25) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `nama_ortu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`nisn`, `nama_alumni`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `nama_ortu`) VALUES
('99962711092', 'Ahmad Maulana', 'Jakarta', '2000-03-11', 'Laki-Laki', 'Jl. Raya Bedahan Rt 01 Rw 02', 'Maulana Hari'),
('99962711299', 'Bastian Sidqi', 'Semarang', '1999-11-28', 'Laki-Laki', 'Jl.Raya Bedahan Rt 04 Rw 01', 'Ikbal Sutisna'),
('99962712860', 'Andika Pratama', 'Jakarta', '2000-06-23', 'Laki-Laki', 'Jl.Raya Cinangka Rt 03 Rw 05', 'Agustin Iwan'),
('99962713971', 'Caca Rahayu', 'Bandung', '2000-02-18', 'Perempuan', 'Jl. Raya Arko Rt 02 Rw 02', 'Ridwan Arif'),
('99962713973', 'Gina Hanafi', 'Semarang', '2000-07-03', 'Perempuan', 'Jl.Pasar Minggu Rt 01 Rw 06', 'C. Arifin'),
('99962714223', 'Arif Nur Septian', 'Bogor', '2000-07-03', 'Laki-Laki', 'Jl. Bojongsari Baru rt 02 rw 01', 'Septian Siswanto'),
('99962719055', 'Bagas Prakoso', 'Tanggerang ', '2001-08-09', 'Laki-Laki', 'Jl.Pasar Minggu Rt 01 Rw 06', 'Gunawan Hadi'),
('99962723473', 'Dini Nurmala', 'Bogor', '2000-03-11', 'Perempuan', 'Jl. Bojongsari Baru rt 20 rw 01', 'Maulana Hamdani'),
('99962773973', 'Dhira Pulungan', 'Jakarta', '2000-03-11', 'Perempuan', 'Jl. Raya Bedahan Rt 03 Rw 02', 'Bagus Baskara'),
('99963713973', 'Tiara Renita', 'Jakarta', '2000-02-18', 'Perempuan ', 'Jl. Raya Bedahan Rt 04 Rw 02', 'Joko Supranojo');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `nopendaftaran` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `nama_ortu` varchar(20) NOT NULL,
  `pekerjaan_ortu` varchar(15) NOT NULL,
  `nun` int(11) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `akte` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`nopendaftaran`, `nama_pendaftar`, `asal_sekolah`, `jenis_kelamin`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `tlp`, `nama_ortu`, `pekerjaan_ortu`, `nun`, `ijazah`, `akte`, `status`) VALUES
(1, 'Khaerul Soleh', 'SDN 06 PETSEL', 'Laki-laki', '99962773973', 'Depok', '2008-09-20', 'Jl. Raya Pasir Putih Rt 01 Rw 04', '085899012076', 'Soleh Arifin', 'Pegawai Swasta', 28, '5e9db6cec8eae.jpg', '5e9db6ceddfea.jpg', 'menunggu'),
(2, 'Laskar Prily', 'SDN 06 TIAS KOTA', 'Perempuan', '99962773973', 'Jakarta', '2008-11-27', 'Jl.Raya Sawangan Rt 02 Rw 01', '082199064081', 'Supardi Nasih', 'Pegawai Swasta', 30, '5e9db712dd842.jpg', '5e9db712de393.jpg', 'menunggu'),
(3, 'Nando Agustin', 'SDN 06 TIAS KOTA', 'Laki-laki', '99962773973', 'Bogor', '2008-08-12', 'Jl. Raya Cinangka Rt 03 Rw 02', '083844092134', 'Fikri Razak', 'Pegawai Swasta', 27, '5e9db744e89d8.jpg', '5e9db744e94c8.jpg', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `detailkelas`
--

CREATE TABLE `detailkelas` (
  `nisn` varchar(12) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailkelas`
--

INSERT INTO `detailkelas` (`nisn`, `id`) VALUES
('9990443951', 6),
('9990443952', 6),
('9990443953', 6),
('9990443954', 6),
('9990443955', 6),
('9990443956', 6),
('9990443957', 6),
('9990443958', 6),
('9990443959', 6),
('9990443960', 6),
('9990443961', 7),
('9990443962', 7),
('9990443963', 7),
('9990443964', 7),
('9990443965', 7),
('9990443966', 7),
('9990443967', 7),
('9990443968', 7),
('9990443969', 7),
('9990443970', 7),
('9990443971', 8),
('9990443972', 8),
('9990443973', 8),
('9990443974', 8),
('9990443975', 8),
('9990443976', 8),
('9990443977', 8),
('9990443978', 8),
('9990443979', 8),
('9990443980', 8),
('9990443981', 9),
('9990443982', 9),
('9990443983', 9),
('9990443984', 9),
('9990443985', 9),
('9990443986', 9),
('9990443987', 9),
('9990443988', 9),
('9990443989', 9),
('9990443990', 9),
('9990443991', 10),
('9990443992', 10),
('9990443993', 10),
('9990443994', 10),
('9990443995', 10),
('9990443996', 10),
('9990443997', 10),
('9990443998', 10),
('9990443999', 10),
('9990444000', 10),
('9990444001', 12),
('9990444002', 12),
('9990444003', 12),
('9990444004', 12),
('9990444005', 12),
('9990444006', 12),
('9990444007', 12),
('9990444008', 12),
('9990444009', 12),
('9990444010', 12);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `Tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `ijazah` varchar(15) NOT NULL,
  `mapel` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `jenis_kelamin`, `Tempat_lahir`, `tanggal_lahir`, `ijazah`, `mapel`) VALUES
('197811072006012000', 'Jelita Amaliah', 'Perempuan', 'Solo', '1981-04-14', '01PA0000087', 'Pendidikan Lingkungan Hidup'),
('197909282007021000', 'Gilang Baskara', 'Laki-Laki', 'Padang', '1979-09-28', '01PA0000085', 'Pendidikan Jasmani'),
('198003302006031000', 'Eko Siswanto', 'Laki-Laki', 'Jakarta', '1980-03-30', '01PA0000083', 'Pendidikan Kewarganegaraan'),
('198101192008092000', 'Fika Ayu Putri', 'Perempuan', 'Kediri', '1981-01-12', '01PA0000084', 'Seni Budaya'),
('198104142007051000', 'Hartanto Iwan', 'Laki-Laki', 'Makasar', '1979-09-28', '01PA0000086', 'Teknologi Informasi Komunikasi'),
('198204252009021000', 'Askar Wisnu', 'Laki-Laki', 'Jakarta', '1982-04-25', '01PA0000080', 'Sejarah'),
('198209122010022000', 'Dena Lestari', 'Perempuan', 'Banten', '1982-09-12', '01PA0000082', 'Bahasa Inggris'),
('198511212007062000', 'Bintang Rahma', 'Perempuan', 'Bandung', '1985-11-21', '01PA0000081', 'Biologi'),
('198609262009031000', 'Ahmad Jaelani', 'Laki-Laki', 'Semarang', '1986-09-26', '01PA0000078', 'Matematika'),
('198803132008041000', 'Ariq Purnama', 'Laki-Laki', 'Solo', '1988-03-13', '01PA0000079', 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nss` varchar(14) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `nama_sekolah` varchar(25) NOT NULL,
  `jumlah_siswa` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nss`, `kelas`, `nama_sekolah`, `jumlah_siswa`) VALUES
(6, '201026602010', 'VII-1', 'SMP NEGERI 1O DEPOK', '10'),
(7, '201026602010', 'VII-2', 'SMP NEGERI 1O DEPOK', '10'),
(8, '201026602010', 'VIII-1', 'SMP NEGERI 1O DEPOK', '10'),
(9, '201026602010', 'VIII-2', 'SMP NEGERI 1O DEPOK', '10'),
(10, '201026602010', 'IX-1', 'SMP NEGERI 1O DEPOK', '10'),
(12, '201026602010', 'IX-2', 'SMP NEGERI 1O DEPOK', '10');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `kdajar` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `jamajar` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`kdajar`, `nip`, `id`, `jamajar`) VALUES
(1, '198609262009031000', 6, '07:00'),
(2, '198609262009031000', 7, '08:00'),
(17, '198609262009031000', 8, '17:00'),
(18, '198609262009031000', 9, '10:00'),
(19, '198609262009031000', 10, '11:00'),
(20, '198609262009031000', 12, '16:00'),
(21, '198803132008041000', 6, '13:00'),
(22, '198803132008041000', 7, '07:00'),
(23, '198803132008041000', 8, '08:00'),
(24, '198803132008041000', 9, '09:00'),
(25, '198803132008041000', 10, '17:00'),
(26, '198803132008041000', 12, '11:00'),
(27, '198204252009021000', 6, '11:00'),
(28, '198204252009021000', 7, '13:00'),
(29, '198204252009021000', 8, '07:00'),
(30, '198204252009021000', 9, '14:00'),
(31, '198204252009021000', 10, '09:00'),
(32, '198204252009021000', 12, '10:00'),
(33, '198511212007062000', 6, '10:00'),
(34, '198511212007062000', 7, '17:00'),
(35, '198511212007062000', 8, '13:00'),
(36, '198511212007062000', 9, '15:00'),
(37, '198511212007062000', 10, '08:00'),
(38, '198511212007062000', 12, '09:00'),
(39, '198209122010022000', 6, '09:00'),
(40, '198209122010022000', 7, '10:00'),
(41, '198209122010022000', 8, '11:00'),
(42, '198209122010022000', 9, '13:00'),
(43, '198209122010022000', 10, '16:00'),
(44, '198209122010022000', 12, '14:00'),
(45, '198003302006031000', 6, '08:00'),
(46, '198003302006031000', 7, '15:00'),
(47, '198003302006031000', 8, '10:00'),
(48, '198003302006031000', 9, '16:00'),
(49, '198003302006031000', 10, '13:00'),
(50, '198003302006031000', 12, '17:00'),
(51, '198101192008092000', 6, '15:00'),
(52, '198101192008092000', 7, '14:00'),
(53, '198101192008092000', 8, '16:00'),
(54, '198101192008092000', 9, '11:00'),
(55, '198101192008092000', 10, '10:00'),
(56, '198101192008092000', 12, '07:00'),
(57, '197909282007021000', 6, '16:00'),
(58, '197909282007021000', 7, '09:00'),
(59, '197909282007021000', 8, '14:00'),
(60, '197909282007021000', 9, '17:00'),
(61, '197909282007021000', 10, '15:00'),
(62, '197909282007021000', 12, '08:00'),
(63, '198104142007051000', 6, '14:00'),
(64, '198104142007051000', 7, '16:00'),
(65, '198104142007051000', 8, '15:00'),
(66, '198104142007051000', 9, '08:00'),
(67, '198104142007051000', 10, '07:00'),
(68, '198104142007051000', 12, '13:00'),
(69, '197811072006012000', 6, '17:00'),
(70, '197811072006012000', 7, '11:00'),
(71, '197811072006012000', 8, '09:00'),
(72, '197811072006012000', 9, '07:00'),
(73, '197811072006012000', 10, '14:00'),
(74, '197811072006012000', 12, '15:00');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `nss` varchar(14) NOT NULL,
  `nama_sekolah` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tahun_didirikan` varchar(4) NOT NULL,
  `tahun_operasi` varchar(4) NOT NULL,
  `stts_tanah` varchar(10) NOT NULL,
  `luas_tanah` varchar(10) NOT NULL,
  `luas_bangunan` varchar(10) NOT NULL,
  `surat_izin` varchar(15) NOT NULL,
  `no_rek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`nss`, `nama_sekolah`, `alamat`, `tahun_didirikan`, `tahun_operasi`, `stts_tanah`, `luas_tanah`, `luas_bangunan`, `surat_izin`, `no_rek`) VALUES
('201026602010', 'SMP NEGERI 12 DEPOK', 'Jalan Raya Talang Kabu Kecamatan Ilir Talo Kabupaten Seluma', '2001', '2002', 'HGB', '20,000 m2', '10,400 m2', '420/TU/184/2001', '238272088');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(12) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `nama_ortu` varchar(20) NOT NULL,
  `pekerjaan_ortu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama_siswa`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `nama_ortu`, `pekerjaan_ortu`) VALUES
('9990443951', 'Abdul Alif', '2001-01-02', 'Tangerang', 'Laki-Laki', 'Jl.Mawar', 'Surya', 'Wiraswasta'),
('9990443952', 'Ahmad Rizal', '1970-01-01', 'Tangerang', 'Laki-Laki', 'Jl.Melati', 'Arman', 'Wiraswasta'),
('9990443953', 'Arisma Yuliandari', '2001-09-05', 'Semarang', 'Perempuan', 'Jl.Suka Karya', 'Bambang', 'Wirausaha'),
('9990443954', 'Bintang Arum Suryanti', '2000-05-04', 'Semarang', 'Perempuan', 'Jl.Suka Karya', 'Joko', 'Guru'),
('9990443955', 'Cristy Putra Pangestu', '1970-01-01', 'Tegal', 'Laki-Laki', 'Jl.Malioboro', 'Toto', 'Polisi'),
('9990443956', 'Dimas Saputra', '2001-03-06', 'Bogor', 'Laki-Laki', 'Jl.Muria', 'Yazid', 'Wiraswasta'),
('9990443957', 'Diki Prayoga', '2001-09-09', 'Jakarta', 'Laki-Laki', 'Jl.Gatot', 'Pawit', 'Wirausaha'),
('9990443958', 'Diah Kusuma', '2000-08-08', 'Jakarta', 'Perempuan', 'Jl.Haji Jamal', 'Yanto', 'Wirausaha'),
('9990443959', 'Fauzi Rahman', '2001-01-10', 'Jambi', 'Laki-Laki', 'Jl.Harum', 'Lurann', 'Desainer'),
('9990443960', 'Fanny Mutiara Hati', '1970-01-01', 'Depok', 'Perempuan', 'Jl.Buaran', 'Bima', 'Polisi'),
('9990443961', 'Gilang Ramadhan', '2001-07-07', 'Depok', 'Laki-Laki', 'Jl.Buaran 2', 'Rizal', 'Dosen'),
('9990443962', 'Intan', '1970-01-01', 'Pati', 'Perempuan', 'Jl.Haji Rean', 'Jasmin', 'Wirausaha'),
('9990443963', 'M.Salfa Irama', '2000-12-05', 'Bandung', 'Laki-Laki', 'Jl.Sehat', 'Sarmin', 'Jurnalis'),
('9990443964', 'M.Rifqi', '2000-02-11', 'Bekasi', 'Laki-Laki', 'Jl.Cepat', 'Ridho', 'Tentara'),
('9990443965', 'M.Ilham', '2000-02-04', 'Suka Bumi', 'Laki-Laki', 'Jl.Raya', 'Irun', 'Wiraswasta'),
('9990443966', 'Nita Irawati', '2001-05-05', 'Garut', 'Perempuan', 'Jl.Gatot', 'Sarmidin', 'Wiraswasta'),
('9990443967', 'Mutiara Afifa', '2000-04-02', 'Jakarta', 'Perempuan', 'Jl.Harum', 'Surat', 'Guru'),
('9990443968', 'Prisila Julias', '2000-01-02', 'Semarang', 'Perempuan', 'Jl.Suka Karya', 'Supri', 'Wirausaha'),
('9990443969', 'Siti Astuti', '2000-01-03', 'Purwokerto', 'Perempuan', 'Jl. Suherman', 'Yadi', 'Polisi'),
('9990443970', 'Tiara', '2000-01-04', 'Magelang', 'Perempuan', 'Jl. Mawar', 'Bima', 'Polisi'),
('9990443971', 'Ahmad Tofa', '2001-02-02', 'Jakarta', 'Laki-Laki', 'Jl. Sunan', 'Tegar', 'Wiraswasta'),
('9990443972', 'Basuki', '2001-05-09', 'Jakarta', 'Laki-Laki', 'Jl.Suka', 'Yoga', 'Wiraswasta'),
('9990443973', 'Bastiyan Rahmat', '2001-12-04', 'Bogor', 'Laki-Laki', 'Jl.Cemara', 'Firmansyah', 'Wirausaha'),
('9990443974', 'Chandra Purnama', '1970-01-01', 'Bekasi', 'Laki-Laki', 'Jl.Cemara', 'Dodi Herman', 'Guru'),
('9990443975', 'Doni Saputra', '2001-10-06', 'Jakarta', 'Laki-Laki', 'Jl.Bumi', 'Hermansyah', 'Guru'),
('9990443976', 'Fiki Nufika', '2001-09-07', 'Tangerang', 'Laki-Laki', 'Jl.Bulan', 'Roto', 'Dosen'),
('9990443977', 'Firman Suherman', '2001-02-09', 'Suka Bumi', 'Laki-Laki', 'Jl.Bunga', 'Roro geget', 'Polisi'),
('9990443978', 'Galih Gunawan', '1970-01-01', 'Semarang', 'Perempuan', 'Jl.Bintang', 'Akbar Sirna', 'Koki'),
('9990443979', 'Hanifa Nur', '2000-07-01', 'Tegal', 'Perempuan', 'Jl.Pajajaran', 'Jupri', 'Desainer'),
('9990443980', 'Irma Sunyi', '1970-01-01', 'Kudus', 'Perempuan', 'Jl.Dengkol', 'Sopo', 'Seniman'),
('9990443981', 'Lisa Mutiara Cinta', '2001-12-12', 'Pati', 'Perempuan', 'JL.Bali', 'Jarwo', 'Pilot'),
('9990443982', 'Lita Putri Rani', '1970-01-01', 'Magelang', 'Perempuan', 'Jl.Kuda', 'Kangnas', 'Wiraswasta'),
('9990443983', 'M.Ridho ', '2001-02-02', 'Purwodadi', 'Laki-Laki', 'Jl.Liar', 'Mahmud', 'Wiraswasta'),
('9990443984', 'M.Fajar', '2001-02-07', 'Pekalongan', 'Laki-Laki', 'Jl.Bersih', 'Ari Yulianto', 'Wirausaha'),
('9990443985', 'M.Riko', '2001-03-03', 'Surabaya', 'Laki-Laki', 'Jl.Baik', 'Dimas Dorna', 'Wirausaha'),
('9990443986', 'Nur Azizah', '2001-02-17', 'Malang', 'Perempuan', 'Jl.Mawar', 'Basir', 'Guru'),
('9990443987', 'Putri Aisyah', '2001-08-10', 'Lampung', 'Perempuan', 'Jl.Melati', 'Rizki Abdulah', 'Desainer'),
('9990443988', 'Ranti Dewi', '2001-11-11', 'Palembang', 'Perempuan', 'Jl.Harum', 'Gilang gurma', 'Polisi'),
('9990443989', 'Sindy', '2001-05-12', 'Padang', 'Perempuan', 'Jl.Sehat', 'Guncaran', 'Koki'),
('9990443990', 'Sandi Pandya', '1970-01-01', 'Jakarta', 'Laki-Laki', 'Jl.Suka Karya', 'Habibi', 'Koki'),
('9990443991', 'Apri Dwi', '2000-02-12', 'Jakarta', 'Laki-Laki', 'Jl.Bangunan', 'Bilal', 'Wirausaha'),
('9990443992', 'Ari Herlambang', '2001-01-01', 'Tangerang', 'Laki-Laki', 'Jl.Kali', 'Ridho', 'Wiraswasta'),
('9990443993', 'Astuti', '2001-05-02', 'Bogor', 'Perempuan', 'Jl.Binatang', 'Nurfika', 'Driver'),
('9990443994', 'Atira Cantik', '2000-09-05', 'Depok', 'Perempuan', 'Jl.Belimbing', 'Berli', 'Polisi'),
('9990443995', 'Bila Azizah', '2001-12-12', 'Tangerang', 'Perempuan', 'Jl.Semangka', 'Doni', 'Guru'),
('9990443996', 'Dahlia Putri', '2000-12-07', 'Bogor', 'Perempuan', 'Jl.Durian', 'Wito', 'Guru'),
('9990443997', 'Dion Putra', '1970-01-01', 'Bandung', 'Laki-Laki', 'Jl.Pasar', 'Febri', 'Wirausaha'),
('9990443998', 'Erma Anisa', '1970-01-01', 'Pati', 'Perempuan', 'Jl.Matahari', 'Edo', 'Wiraswasta'),
('9990443999', 'Eki Firdaus', '2000-07-05', 'Kudus', 'Laki-Laki', 'Jl.Jupiter', 'Edi', 'Koki'),
('9990444000', 'Endang Nurkila', '2000-09-09', 'Magelang', 'Perempuan', 'Jl.Bola', 'Darwanto', 'Seniman'),
('9990444001', 'Fikar Purdadai', '2001-02-04', 'Semarang', 'Laki-Laki', 'Jl.Sehat', 'Marno', 'Tentara'),
('9990444002', 'Gilang Abilowo', '1970-01-01', 'Bekasi', 'Perempuan', 'Jl.Melati', 'Rizal', 'Pns'),
('9990444003', 'Hamdan Nur Aisyah', '1999-07-12', 'Bekasi', 'Perempuan', 'Jl.Buaran', 'Heri', 'Jurnalis'),
('9990444004', 'Isma Rahmawati', '2000-04-04', 'Garut', 'Perempuan', 'Jl.Buaran2', 'Patra', 'Wiraswasta'),
('9990444005', 'Juliana', '2000-03-09', 'Purwokerto', 'Perempuan', 'Jl.Bersih', 'Parwito', 'Wiraswasta'),
('9990444006', 'Kofifah Aini', '2000-03-07', 'Surabaya', 'Perempuan', 'Jl.sehat', 'Susilo', 'Wirausaha'),
('9990444007', 'Leri Ibrahim', '2000-09-05', 'Tegal', 'Laki-Laki', 'Jl.Kemiri', 'Darma', 'Seniman'),
('9990444008', 'Oki Ratna Sari', '2001-09-07', 'Padang', 'Perempuan', 'Jl.Semangka', 'Ekola', 'Jurnalis'),
('9990444009', 'Putra Raja', '2000-01-04', 'Bali', 'Laki-Laki', 'Jl.Belokan', 'Saipudin', 'Guru'),
('9990444010', 'Rizky Ramadhan', '2001-01-10', 'Bengkulu', 'Laki-Laki', 'Jl.Sentul', 'Udin', 'Guru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`nopendaftaran`);

--
-- Indexes for table `detailkelas`
--
ALTER TABLE `detailkelas`
  ADD KEY `id` (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nss` (`nss`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`kdajar`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`nss`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `nopendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `kdajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailkelas`
--
ALTER TABLE `detailkelas`
  ADD CONSTRAINT `detailkelas_ibfk_1` FOREIGN KEY (`id`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `detailkelas_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`nss`) REFERENCES `sekolah` (`nss`);

--
-- Constraints for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD CONSTRAINT `mengajar_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`),
  ADD CONSTRAINT `mengajar_ibfk_2` FOREIGN KEY (`id`) REFERENCES `kelas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
