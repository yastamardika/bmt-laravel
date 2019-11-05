-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 07:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmtalent_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(10) NOT NULL,
  `nama_artist` varchar(250) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `nama_owner` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `nomor_telepon` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `nama_artist`, `kategori`, `nama_owner`, `deskripsi`, `foto`, `nomor_telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(3, 'Legong', 'Dance', 'Kadek Ayu', 'Legong adalah tarian klasik Bali yang memiliki pembendaharaan gerak yang sangat kompleks yang terikat dengan struktur tabuh pengiring', 'LOGO-02-01.png', '085266889900', 'Jl.malana no 10 jawa timur', '2019-11-04 07:40:24', '0000-00-00 00:00:00'),
(23, 'Wayang Orang', 'Drama', 'Andri Agus Jatmiko', 'seni pertunjukan berupa drama yang khas.yangmenggambarkan bukan hanya mengenai manusia, tapi kehidupan manusia dalam kaitannya dengan manusia lain, alam, dan Tuhan.', '1572930700_image10.png', '087657980978', 'Jl.cendrawasih no 5 jakarta selatan', '2019-11-04 22:11:40', '2019-11-04 22:11:40'),
(24, 'Nws group', 'Music', 'Adh Dhuka', 'Group music yang didirikan tahun 2018 di jogja yang biasa mengisi event seperti pernikahan', '1572930776_image3.png', '085366554433', 'Jl.sitisoyo no 56 pogung baru jogjakarta', '2019-11-04 22:12:56', '2019-11-04 22:12:56'),
(25, 'Tari lilin', 'Dance', 'Hayati', 'tarian ini terdiri dari beberapa orang yang menggunkan piring kecil yang terdapat sebuah lilin yang sedang menyala di tengahnya sebagai properti tarian ini. Tari lilin ini dilakukan dengan sangat hati hati agar pring yang menjadi tempat meletakkan lilin tidak terjatuh dan agar lilin yang di bawa oleh sang penari tidak mudah', '1572930818_image2.png', '089996578908', 'Jl.moh hatta belakang balok no 89 Bukittinggi', '2019-11-04 22:13:38', '2019-11-04 22:13:38'),
(26, 'Krumpyung', 'Music', 'Slamet adi', 'seni pertunjukan rakyat tradidional yang sangat terkenal, khususnya didaerah Jawa Tengah, Jawa Timur, dan DIY. Ketoprak merupakan kesenian Jawa tradisionalyang penyajiannya menggunakan bahasa jawa. Jalan cerita di dalam pementasan Ketoprakbermacam-macam, mulai dialog tentang sejarah, sampai cerita fantasi yangbiasanya selalu didahului dengan alunan tembang-tembang Jawa yang indah. Kostumdan dandanannya selalu disesuasikan dengan adegan dan jalan cerita.\r\nKrumpyung adalah seni musik tradisional Kulon Progo, DIY. Seni musik ini dimainkan dengan iringan alat musik yang semuanya terbuat dari bambu.', '1572930926_image8.png', '083456789076', 'jl .nagasari no 11 kulon progo', '2019-11-04 22:15:26', '2019-11-04 22:15:26'),
(27, 'Karang dodou', 'Musik', 'kahitma', 'musik jenis ritual yang dapat disaksikan pada saat upacara adat tertentu misalnya acara memandikan bayi/memberikan nama bayi', '1572930978_image7.png', '082345678965', 'Jl.gondokusuma no 98 sumatra selatan', '2019-11-04 22:16:18', '2019-11-04 22:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_04_183958_create_talent_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE `talent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_artist` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_owner` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `talent`
--
ALTER TABLE `talent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `talent`
--
ALTER TABLE `talent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
