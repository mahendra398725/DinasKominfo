-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2022 pada 07.16
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fiber`
--

CREATE TABLE `fiber` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_post_perusahaan` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `kecamatan` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_fo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titik_awal` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titik_akhir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_kordinat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jaringan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pj_bentang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_tiang` int(11) NOT NULL,
  `tipe` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_core` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diameter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status` int(10) UNSIGNED NOT NULL,
  `file_ktp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_nib` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_nib` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiang_fo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peta_jaringan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_permohonan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_perijinan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_survey` datetime NOT NULL,
  `file_survey1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_survey2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_survey3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_rekom` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menara`
--

CREATE TABLE `menara` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_post_perusahaan` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `kecamatan` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_menara` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemilik_tanah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kordinat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kontrak` datetime NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `jenis_menara` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_menara` int(11) NOT NULL,
  `id_status` int(10) UNSIGNED NOT NULL,
  `file_ktp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_akta` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_akta` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_nib` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_nib` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_npwp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_permohonan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_perjanjian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pupr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_survey` datetime NOT NULL,
  `file_survey1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_survey2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_survey3` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_rekom` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_11_22_025008_create_table_post', 1),
(4, '2021_11_22_025150_create_table_post_category', 1),
(5, '2021_11_22_025241_create_table_menara', 1),
(6, '2021_11_22_025311_create_table_fiber', 1),
(7, '2021_11_22_025526_create_table_post_perusahaan', 1),
(8, '2021_11_22_025634_create_table_users', 1),
(9, '2021_11_22_025659_create_table_post_role', 1),
(10, '2021_11_22_025721_create_table_post_status', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_post_category` int(10) UNSIGNED NOT NULL,
  `nama_desa` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id`, `id_post_category`, `nama_desa`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bago', '2021-10-10 18:45:28', '2021-10-10 18:45:28'),
(2, 1, 'Botoran', '2021-10-10 18:45:46', '2021-10-10 18:45:46'),
(3, 1, 'Jepun', '2021-10-10 18:46:01', '2021-10-10 18:46:01'),
(5, 1, 'Karangwaru', '2021-10-10 18:46:33', '2021-10-10 18:46:33'),
(6, 1, 'Kauman', '2021-10-10 18:46:44', '2021-10-10 18:46:44'),
(7, 1, 'Kedungsoko', '2021-10-10 18:46:55', '2021-10-10 18:46:55'),
(8, 1, 'Kenayan', '2021-10-10 18:47:05', '2021-10-10 18:47:05'),
(9, 1, 'Kepatihan', '2021-10-10 18:47:17', '2021-10-10 18:47:17'),
(10, 1, 'Kutoanyar', '2021-10-10 18:47:34', '2021-10-10 18:47:34'),
(11, 1, 'Panggungrejo', '2021-10-10 18:47:45', '2021-10-10 18:47:45'),
(12, 1, 'Sembung', '2021-10-10 18:48:00', '2021-10-10 18:48:00'),
(13, 1, 'Tamanan', '2021-10-10 18:48:14', '2021-10-10 18:48:14'),
(14, 1, 'Tertek', '2021-10-10 18:48:25', '2021-10-10 18:48:25'),
(15, 2, 'Beji', '2021-10-10 18:50:00', '2021-10-10 18:50:00'),
(16, 2, 'Bono', '2021-10-10 18:50:19', '2021-10-10 18:50:19'),
(17, 2, 'Boyolangu', '2021-10-10 18:50:39', '2021-10-10 18:50:39'),
(18, 2, 'Gedangsewu', '2021-10-10 18:51:02', '2021-10-10 18:51:02'),
(19, 2, 'Karangrejo', '2021-10-10 18:51:13', '2021-10-10 18:51:13'),
(20, 2, 'Kendalbulur', '2021-10-10 18:51:27', '2021-10-10 18:51:27'),
(21, 2, 'Kepuh', '2021-10-10 18:51:41', '2021-10-10 18:51:41'),
(22, 2, 'Moyoketen', '2021-10-10 18:51:53', '2021-10-10 18:51:53'),
(23, 2, 'Ngranti', '2021-10-10 18:52:10', '2021-10-10 18:52:10'),
(24, 2, 'Pucungkidul', '2021-10-10 18:52:30', '2021-10-10 18:52:30'),
(25, 2, 'Sanggrahan', '2021-10-10 18:52:42', '2021-10-10 18:52:42'),
(26, 2, 'Serut', '2021-10-10 18:52:56', '2021-10-10 18:52:56'),
(27, 2, 'Sobontoro', '2021-10-10 18:53:06', '2021-10-10 18:53:06'),
(28, 2, 'Tanjungsari', '2021-10-10 18:53:22', '2021-10-10 18:53:22'),
(29, 2, 'Wajak Kidul', '2021-10-10 18:53:38', '2021-10-10 18:53:38'),
(30, 2, 'Wajak Lor', '2021-10-10 18:53:51', '2021-10-10 18:53:51'),
(31, 2, 'Waung', '2021-10-10 18:54:03', '2021-10-10 18:54:03'),
(32, 3, 'Bangoan', '2021-10-13 16:58:45', '2021-10-13 16:58:45'),
(33, 3, 'Boro', '2021-10-13 16:59:09', '2021-10-13 16:59:09'),
(34, 3, 'Bulusari', '2021-10-13 16:59:24', '2021-10-13 16:59:24'),
(35, 3, 'Gendingan', '2021-10-13 16:59:40', '2021-10-13 16:59:40'),
(36, 3, 'Kedungwaru', '2021-10-13 16:59:55', '2021-10-13 16:59:55'),
(37, 3, 'Ketanon', '2021-10-13 17:00:08', '2021-10-13 17:00:08'),
(38, 3, 'Loderesan', '2021-10-13 17:00:22', '2021-10-13 17:00:22'),
(39, 3, 'Majan', '2021-10-13 17:00:39', '2021-10-13 17:00:39'),
(40, 3, 'Mangunsari', '2021-10-13 17:02:15', '2021-10-13 17:02:15'),
(41, 3, 'Ngujang', '2021-10-13 17:02:26', '2021-10-13 17:02:26'),
(42, 3, 'Plandaan', '2021-10-13 17:02:38', '2021-10-13 17:02:38'),
(43, 3, 'Plosokandang', '2021-10-13 17:02:51', '2021-10-13 17:02:51'),
(44, 3, 'Rejoagung', '2021-10-13 17:03:10', '2021-10-13 17:03:10'),
(45, 3, 'Ringinpitu', '2021-10-13 17:03:23', '2021-10-13 17:03:23'),
(46, 3, 'Simo', '2021-10-13 17:03:36', '2021-10-13 17:03:36'),
(47, 3, 'Tapan', '2021-10-13 17:03:46', '2021-10-13 17:03:46'),
(48, 3, 'Tawangsari', '2021-10-13 17:03:58', '2021-10-13 17:03:58'),
(49, 3, 'Tunggulsari', '2021-10-13 17:04:44', '2021-10-13 17:04:44'),
(50, 3, 'Winong', '2021-10-13 17:05:04', '2021-10-13 17:05:04'),
(51, 4, 'Banjarsari', '2021-10-13 17:06:05', '2021-10-13 17:06:05'),
(52, 4, 'Batokan', '2021-10-13 17:06:17', '2021-10-13 17:06:17'),
(53, 4, 'Bendosari', '2021-10-13 17:06:30', '2021-10-13 17:06:30'),
(54, 4, 'Kepuhrejo', '2021-10-13 17:06:42', '2021-10-13 17:06:42'),
(55, 4, 'Mojoagung', '2021-10-13 17:06:53', '2021-10-13 17:06:53'),
(56, 4, 'Ngantru', '2021-10-13 17:07:21', '2021-10-13 17:07:21'),
(57, 4, 'Padangan', '2021-10-13 17:07:37', '2021-10-13 17:07:37'),
(58, 4, 'Pakel', '2021-10-13 17:07:46', '2021-10-13 17:07:46'),
(59, 4, 'Pinggirsari', '2021-10-13 17:07:58', '2021-10-13 17:07:58'),
(60, 4, 'Pojok', '2021-10-13 17:08:09', '2021-10-13 17:08:09'),
(61, 4, 'Pucunglor', '2021-10-13 17:08:41', '2021-10-13 17:08:41'),
(62, 4, 'Pulerejo', '2021-10-13 17:08:56', '2021-10-13 17:08:56'),
(63, 4, 'Srikaton', '2021-10-13 17:09:07', '2021-10-13 17:09:07'),
(64, 5, 'Balerejo', '2021-10-13 17:09:26', '2021-10-13 17:09:26'),
(65, 5, 'Banaran', '2021-10-13 17:09:37', '2021-10-13 17:09:37'),
(66, 5, 'Batangsaren', '2021-10-13 17:09:50', '2021-10-13 17:09:50'),
(67, 5, 'Bolorejo', '2021-10-13 17:10:05', '2021-10-13 17:10:05'),
(68, 5, 'Jatimulyo', '2021-10-13 17:10:18', '2021-10-13 17:10:18'),
(69, 5, 'Kalangbret', '2021-10-13 17:11:38', '2021-10-13 17:11:38'),
(70, 5, 'Karanganom', '2021-10-13 17:11:53', '2021-10-13 17:11:53'),
(71, 5, 'Kates', '2021-10-13 17:12:04', '2021-10-13 17:12:04'),
(72, 5, 'Kauman', '2021-10-13 17:12:20', '2021-10-13 17:12:20'),
(73, 5, 'Mojosari', '2021-10-13 17:12:30', '2021-10-13 17:12:30'),
(74, 5, 'Panggungrejo', '2021-10-13 17:12:42', '2021-10-13 17:12:42'),
(75, 5, 'Pucangan', '2021-10-13 17:12:57', '2021-10-13 17:12:57'),
(76, 5, 'Sidorejo', '2021-10-13 17:13:09', '2021-10-13 17:13:09'),
(77, 6, 'Gambiran', '2021-10-13 17:14:56', '2021-10-13 17:14:56'),
(78, 6, 'Gondanggunung', '2021-10-13 17:15:14', '2021-10-13 17:15:14'),
(79, 6, 'Kedungcangkring', '2021-10-13 17:15:32', '2021-10-13 17:15:32'),
(80, 6, 'Kradinan', '2021-10-13 17:15:47', '2021-10-13 17:15:47'),
(81, 6, 'Mulyosari', '2021-10-13 17:16:00', '2021-10-13 17:16:00'),
(82, 6, 'Pagerwojo', '2021-10-13 17:16:13', '2021-10-13 17:16:13'),
(83, 6, 'Penjore', '2021-10-13 17:16:27', '2021-10-13 17:16:27'),
(84, 6, 'Samar', '2021-10-13 17:16:37', '2021-10-13 17:16:37'),
(85, 6, 'Segawe', '2021-10-13 17:16:49', '2021-10-13 17:16:49'),
(86, 6, 'Sidomulyo', '2021-10-13 17:17:04', '2021-10-13 17:17:04'),
(87, 6, 'Wonorejo', '2021-10-13 17:17:15', '2021-10-13 17:17:15'),
(88, 7, 'Dono', '2021-10-13 17:19:45', '2021-10-13 17:19:45'),
(89, 7, 'Geger', '2021-10-13 17:19:55', '2021-10-13 17:19:55'),
(90, 7, 'Kedoyo', '2021-10-13 17:20:08', '2021-10-13 17:20:08'),
(91, 7, 'Krosok', '2021-10-13 17:20:19', '2021-10-13 17:20:19'),
(92, 7, 'Nglurup', '2021-10-13 17:20:35', '2021-10-13 17:20:35'),
(93, 7, 'Nglutung', '2021-10-13 17:20:48', '2021-10-13 17:20:48'),
(94, 7, 'Nyawangan', '2021-10-13 17:20:59', '2021-10-13 17:20:59'),
(95, 7, 'Picisan', '2021-10-13 17:21:09', '2021-10-13 17:21:09'),
(96, 7, 'Sendang', '2021-10-13 17:21:23', '2021-10-13 17:21:23'),
(97, 7, 'Talang', '2021-10-13 17:21:35', '2021-10-13 17:21:35'),
(98, 7, 'Tugu', '2021-10-13 17:21:43', '2021-10-13 17:21:43'),
(99, 8, 'Babadan', '2021-10-13 17:26:01', '2021-10-13 17:26:01'),
(100, 8, 'Bungur', '2021-10-13 17:26:20', '2021-10-13 17:26:20'),
(101, 8, 'Gedangan', '2021-10-13 17:26:31', '2021-10-13 17:26:31'),
(102, 8, 'Jeli', '2021-10-13 17:27:45', '2021-10-13 17:27:45'),
(103, 8, 'Karangrejo', '2021-10-13 17:27:57', '2021-10-13 17:27:57'),
(104, 8, 'Punjul', '2021-10-13 17:28:23', '2021-10-13 17:28:23'),
(105, 8, 'Sembon', '2021-10-13 17:30:13', '2021-10-13 17:30:13'),
(106, 8, 'Sukodono', '2021-10-13 17:30:25', '2021-10-13 17:30:25'),
(107, 8, 'Sukorejo', '2021-10-13 17:30:38', '2021-10-13 17:30:38'),
(108, 8, 'Sukowidodo', '2021-10-13 17:30:51', '2021-10-13 17:30:51'),
(109, 8, 'Sukowiyono', '2021-10-13 17:31:05', '2021-10-13 17:31:05'),
(110, 8, 'Tanjungsari', '2021-10-13 17:31:22', '2021-10-13 17:31:22'),
(111, 8, 'Tulungrejo', '2021-10-13 17:31:35', '2021-10-13 17:31:35'),
(112, 9, 'Bendo', '2021-10-13 17:35:28', '2021-10-13 17:35:28'),
(113, 9, 'Bendungan', '2021-10-13 17:35:40', '2021-10-13 17:35:40'),
(114, 9, 'Blendis', '2021-10-13 17:35:56', '2021-10-13 17:35:56'),
(115, 9, 'Dukuh', '2021-10-13 17:36:07', '2021-10-13 17:36:07'),
(116, 9, 'Gondang', '2021-10-13 17:36:17', '2021-10-13 17:36:17'),
(117, 9, 'Gondosuli', '2021-10-13 17:36:32', '2021-10-13 17:36:32'),
(118, 9, 'Jarakan', '2021-10-13 17:36:41', '2021-10-13 17:36:41'),
(119, 9, 'Kendal', '2021-10-13 17:36:58', '2021-10-13 17:36:58'),
(120, 9, 'Kiping', '2021-10-13 17:37:21', '2021-10-13 17:37:21'),
(121, 9, 'Macanbang', '2021-10-13 17:37:36', '2021-10-13 17:37:36'),
(122, 9, 'Mojoarum', '2021-10-13 17:37:59', '2021-10-13 17:37:59'),
(123, 9, 'Ngrendeng', '2021-10-13 17:38:14', '2021-10-13 17:38:14'),
(124, 9, 'Notorejo', '2021-10-13 17:38:27', '2021-10-13 17:38:27'),
(125, 9, 'Rejosari', '2021-10-13 17:38:42', '2021-10-13 17:38:42'),
(126, 9, 'Sepatan', '2021-10-13 17:38:56', '2021-10-13 17:38:56'),
(127, 9, 'Sidem', '2021-10-13 17:39:08', '2021-10-13 17:39:08'),
(128, 9, 'Sidomulyo', '2021-10-13 17:39:22', '2021-10-13 17:39:22'),
(129, 9, 'Tawing', '2021-10-13 17:39:34', '2021-10-13 17:39:34'),
(130, 9, 'Tiudan', '2021-10-13 17:39:46', '2021-10-13 17:39:46'),
(131, 9, 'Wonokromo', '2021-10-13 17:39:59', '2021-10-13 17:39:59'),
(132, 10, 'Bendiljati Kulon', '2021-10-13 17:41:03', '2021-10-13 17:41:03'),
(133, 10, 'Bendiljati Wetan', '2021-10-13 17:41:21', '2021-10-13 17:41:21'),
(134, 10, 'Bendilwungu', '2021-10-13 17:41:39', '2021-10-13 17:41:39'),
(135, 10, 'Bukur', '2021-10-13 17:41:51', '2021-10-13 17:41:51'),
(136, 10, 'Doroampel', '2021-10-13 17:42:05', '2021-10-13 17:42:05'),
(137, 10, 'Jabalsari', '2021-10-13 17:42:17', '2021-10-13 17:42:17'),
(138, 10, 'Junjung', '2021-10-13 17:42:26', '2021-10-13 17:42:26'),
(139, 10, 'Mirigambar', '2021-10-13 17:42:39', '2021-10-13 17:42:39'),
(140, 10, 'Podorejo', '2021-10-13 17:42:54', '2021-10-13 17:42:54'),
(141, 10, 'Sambidoplang', '2021-10-13 17:43:13', '2021-10-13 17:43:13'),
(142, 10, 'Sambijajar', '2021-10-13 17:43:24', '2021-10-13 17:43:24'),
(143, 10, 'Sambirobyong', '2021-10-13 17:43:42', '2021-10-13 17:43:42'),
(144, 10, 'Sumberdadi', '2021-10-13 17:43:55', '2021-10-13 17:43:55'),
(145, 10, 'Tambakrejo', '2021-10-13 17:44:11', '2021-10-13 17:44:11'),
(146, 10, 'Trenceng', '2021-10-13 17:44:22', '2021-10-13 17:44:22'),
(147, 10, 'Wates', '2021-10-13 17:44:46', '2021-10-13 17:44:46'),
(148, 10, 'Wonorejo', '2021-10-13 17:44:59', '2021-10-13 17:44:59'),
(149, 11, 'Balesono', '2021-10-13 17:48:56', '2021-10-13 17:48:56'),
(150, 11, 'Gilang', '2021-10-13 17:49:07', '2021-10-13 17:49:07'),
(151, 11, 'Kacangan', '2021-10-13 17:49:20', '2021-10-13 17:49:20'),
(152, 11, 'Kalangan', '2021-10-13 17:49:47', '2021-10-13 17:49:47'),
(153, 11, 'Kaliwungu', '2021-10-13 17:50:01', '2021-10-13 17:50:01'),
(154, 11, 'Karangsono', '2021-10-13 17:50:16', '2021-10-13 17:50:16'),
(155, 11, 'Kromasan', '2021-10-13 17:50:30', '2021-10-13 17:50:30'),
(156, 11, 'Ngunut', '2021-10-13 17:50:44', '2021-10-13 17:50:44'),
(157, 11, 'Pandansari', '2021-10-13 17:51:00', '2021-10-13 17:51:00'),
(158, 11, 'Pulosari', '2021-10-13 17:51:14', '2021-10-13 17:51:14'),
(159, 11, 'Pulotondo', '2021-10-13 17:51:29', '2021-10-13 17:51:29'),
(160, 11, 'Purworejo', '2021-10-13 17:53:04', '2021-10-13 17:53:04'),
(161, 11, 'Samir', '2021-10-13 17:53:16', '2021-10-13 17:53:16'),
(162, 11, 'Selorejo', '2021-10-13 17:53:28', '2021-10-13 17:53:28'),
(163, 11, 'Sumberejo Kulon', '2021-10-13 17:53:48', '2021-10-13 17:53:48'),
(164, 11, 'Sumberejo Wetan', '2021-10-13 17:54:08', '2021-10-13 17:54:08'),
(165, 11, 'Sumberingin Kidul', '2021-10-13 17:54:30', '2021-10-13 17:54:30'),
(166, 11, 'Sumberingin Kulon', '2021-10-13 17:54:46', '2021-10-13 17:54:46'),
(167, 12, 'Demuk', '2021-10-13 17:56:52', '2021-10-13 17:56:52'),
(168, 12, 'Kalidawe', '2021-10-13 17:57:05', '2021-10-13 17:57:05'),
(169, 12, 'Kaligentong', '2021-10-13 17:57:17', '2021-10-13 17:57:17'),
(170, 12, 'Manding', '2021-10-13 17:58:41', '2021-10-13 17:58:41'),
(171, 12, 'Panggungkalak', '2021-10-13 17:59:18', '2021-10-13 17:59:18'),
(172, 12, 'Panggunguni', '2021-10-13 17:59:31', '2021-10-13 18:00:02'),
(173, 12, 'Pucanglaban', '2021-10-13 18:00:16', '2021-10-13 18:00:16'),
(174, 12, 'Sumberbendo', '2021-10-13 18:00:32', '2021-10-13 18:00:32'),
(175, 12, 'Sumberdadap', '2021-10-13 18:00:45', '2021-10-13 18:00:45'),
(176, 13, 'Ariyojeding', '2021-10-13 18:01:05', '2021-10-13 18:01:05'),
(177, 13, 'Banjarejo', '2021-10-13 18:01:22', '2021-10-13 18:01:22'),
(178, 13, 'Blimbing', '2021-10-13 18:01:37', '2021-10-13 18:01:37'),
(179, 13, 'Buntaran', '2021-10-13 18:01:52', '2021-10-13 18:01:52'),
(180, 13, 'Jatidowo', '2021-10-13 18:10:40', '2021-10-13 18:10:40'),
(181, 13, 'Karangsari', '2021-10-13 18:20:26', '2021-10-13 18:20:26'),
(182, 13, 'Pakisrejo', '2021-10-13 18:20:43', '2021-10-13 18:20:43'),
(183, 13, 'Panjerejo', '2021-10-13 18:20:59', '2021-10-13 18:20:59'),
(184, 13, 'Rejotangan', '2021-10-13 18:21:10', '2021-10-13 18:21:36'),
(185, 13, 'Sukorejo Wetan', '2021-10-13 18:22:01', '2021-10-13 18:22:01'),
(186, 13, 'Sumberagung', '2021-10-13 18:22:22', '2021-10-13 18:22:22'),
(187, 13, 'Tanen', '2021-10-13 18:22:34', '2021-10-13 18:22:34'),
(188, 13, 'Tegalrejo', '2021-10-13 18:22:49', '2021-10-13 18:22:49'),
(189, 13, 'Tenggong', '2021-10-13 18:23:13', '2021-10-13 18:23:13'),
(190, 13, 'Tenggur', '2021-10-13 18:23:30', '2021-10-13 18:23:30'),
(191, 13, 'Tugu', '2021-10-13 18:23:42', '2021-10-13 18:23:42'),
(192, 14, 'Banyu Urip', '2021-10-13 18:25:23', '2021-10-13 18:33:50'),
(193, 14, 'Betak', '2021-10-13 18:34:04', '2021-10-13 18:34:04'),
(194, 14, 'Domasan', '2021-10-13 18:34:18', '2021-10-13 18:34:18'),
(195, 14, 'Jabon', '2021-10-13 18:35:07', '2021-10-13 18:35:07'),
(196, 14, 'Joho', '2021-10-13 18:35:37', '2021-10-13 18:35:37'),
(197, 14, 'Kalibatur', '2021-10-13 18:35:51', '2021-10-13 18:35:51'),
(198, 14, 'Kalidawir', '2021-10-13 18:36:12', '2021-10-13 18:36:12'),
(199, 14, 'Karangtalun', '2021-10-13 18:36:28', '2021-10-13 18:36:28'),
(200, 14, 'Ngubalan', '2021-10-13 18:37:28', '2021-10-13 18:37:28'),
(201, 14, 'Pagersari', '2021-10-13 18:37:45', '2021-10-13 18:37:45'),
(202, 14, 'Pakisaji', '2021-10-13 18:38:19', '2021-10-13 18:38:19'),
(203, 14, 'Rejosari', '2021-10-13 18:38:33', '2021-10-13 18:38:33'),
(204, 14, 'Salakkembang', '2021-10-13 18:38:48', '2021-10-13 18:38:48'),
(205, 14, 'Sukorejo Kulon', '2021-10-13 18:39:05', '2021-10-13 18:39:05'),
(206, 14, 'Tanjung', '2021-10-13 18:39:27', '2021-10-13 18:39:27'),
(207, 14, 'Tunggangri', '2021-10-13 18:39:54', '2021-10-13 18:39:54'),
(208, 14, 'Winong', '2021-10-13 18:40:17', '2021-10-13 18:40:17'),
(209, 15, 'Besole', '2021-10-13 18:40:32', '2021-10-13 18:40:32'),
(210, 15, 'Besuki', '2021-10-13 18:40:43', '2021-10-13 18:40:43'),
(211, 15, 'Keboireng', '2021-10-13 18:40:58', '2021-10-13 18:40:58'),
(212, 15, 'Sedayugunung', '2021-10-13 18:41:21', '2021-10-13 18:41:21'),
(213, 15, 'Siyotobagus', '2021-10-13 18:41:39', '2021-10-13 18:41:39'),
(214, 15, 'Tanggulkundung', '2021-10-13 18:42:00', '2021-10-13 18:42:00'),
(215, 15, 'Tanggulturus', '2021-10-13 18:42:17', '2021-10-13 18:42:17'),
(216, 15, 'Tanggulwelahan', '2021-10-13 18:42:36', '2021-10-13 18:42:36'),
(217, 15, 'Tulungrejo', '2021-10-13 18:42:53', '2021-10-13 18:42:53'),
(218, 15, 'Wates Kroyo', '2021-10-13 18:44:55', '2021-10-13 18:44:55'),
(219, 16, 'Campurdarat', '2021-10-13 18:45:15', '2021-10-13 18:45:15'),
(220, 16, 'Gamping', '2021-10-13 18:45:31', '2021-10-13 18:45:31'),
(221, 16, 'Gedangan', '2021-10-13 18:45:58', '2021-10-13 18:45:58'),
(222, 16, 'Ngentrong', '2021-10-13 18:46:41', '2021-10-13 18:46:41'),
(223, 16, 'Pelem', '2021-10-13 18:47:31', '2021-10-13 18:47:31'),
(224, 16, 'Pojok', '2021-10-13 18:47:48', '2021-10-13 18:47:48'),
(225, 16, 'Sawo', '2021-10-13 18:53:36', '2021-10-13 18:53:36'),
(226, 16, 'Tanggung', '2021-10-13 18:54:49', '2021-10-13 18:54:49'),
(227, 16, 'Wates', '2021-10-13 18:55:21', '2021-10-13 18:55:21'),
(228, 17, 'Bandung', '2021-10-13 18:55:35', '2021-10-13 18:55:35'),
(229, 17, 'Bantengan', '2021-10-13 18:55:47', '2021-10-13 18:55:47'),
(230, 17, 'Bulus', '2021-10-13 18:56:04', '2021-10-13 18:56:04'),
(231, 17, 'Gandong', '2021-10-13 18:56:22', '2021-10-13 18:56:22'),
(232, 17, 'Kedungwilut', '2021-10-13 18:56:38', '2021-10-13 18:56:38'),
(233, 17, 'Kesambi', '2021-10-13 18:56:52', '2021-10-13 18:56:52'),
(234, 17, 'Mergayu', '2021-10-13 18:57:05', '2021-10-13 18:57:05'),
(235, 17, 'Ngepeh', '2021-10-13 18:57:20', '2021-10-13 18:57:20'),
(236, 17, 'Nglampir', '2021-10-13 18:57:32', '2021-10-13 18:57:32'),
(237, 17, 'Ngunggahan', '2021-10-13 18:57:54', '2021-10-13 18:57:54'),
(238, 17, 'Sebalor', '2021-10-13 18:58:10', '2021-10-13 18:58:10'),
(239, 17, 'Singgit', '2021-10-13 18:58:22', '2021-10-13 18:58:22'),
(240, 17, 'Soko', '2021-10-13 18:58:35', '2021-10-13 18:58:35'),
(241, 17, 'Sukoharjo', '2021-10-13 18:58:47', '2021-10-13 18:58:47'),
(242, 17, 'Suruhan Kidul', '2021-10-13 18:59:02', '2021-10-13 18:59:02'),
(243, 17, 'Suruhan Lor', '2021-10-13 18:59:14', '2021-10-13 18:59:14'),
(244, 17, 'Suwaru', '2021-10-13 18:59:26', '2021-10-13 18:59:26'),
(245, 17, 'Talun Kulon', '2021-10-13 18:59:39', '2021-10-13 18:59:39'),
(246, 18, 'Bangunjaya', '2021-10-13 18:59:57', '2021-10-13 18:59:57'),
(247, 18, 'Bangunmulyo', '2021-10-13 19:00:11', '2021-10-13 19:00:11'),
(248, 18, 'Bono', '2021-10-13 19:00:22', '2021-10-13 19:00:22'),
(249, 18, 'Duwet', '2021-10-13 19:00:34', '2021-10-13 19:00:34'),
(250, 18, 'Gebang', '2021-10-13 19:00:46', '2021-10-13 19:00:46'),
(251, 18, 'Gempolan', '2021-10-13 19:00:58', '2021-10-13 19:00:58'),
(252, 18, 'Gesikan', '2021-10-13 19:01:19', '2021-10-13 19:01:19'),
(253, 18, 'Gombang', '2021-10-13 19:01:31', '2021-10-13 19:01:31'),
(254, 18, 'Kesreman', '2021-10-13 19:01:45', '2021-10-13 19:01:45'),
(255, 18, 'Ngebong', '2021-10-13 19:02:01', '2021-10-13 19:02:01'),
(256, 18, 'Ngrance', '2021-10-13 19:02:17', '2021-10-13 19:02:17'),
(257, 18, 'Pakel', '2021-10-13 19:02:30', '2021-10-13 19:02:30'),
(258, 18, 'Pecuk', '2021-10-13 19:02:42', '2021-10-13 19:02:42'),
(259, 18, 'Sambitan', '2021-10-13 19:02:54', '2021-10-13 19:02:54'),
(260, 18, 'Sanan', '2021-10-13 19:03:08', '2021-10-13 19:03:08'),
(261, 18, 'Sodo', '2021-10-13 19:03:19', '2021-10-13 19:03:19'),
(262, 18, 'Sukoanyar', '2021-10-13 19:03:34', '2021-10-13 19:03:34'),
(263, 18, 'Suwaluh', '2021-10-13 19:03:50', '2021-10-13 19:03:50'),
(264, 18, 'Tamban', '2021-10-13 19:05:25', '2021-10-13 19:05:25'),
(265, 19, 'Jenglungharjo', '2021-10-13 19:05:47', '2021-10-13 19:05:47'),
(266, 19, 'Kresikan', '2021-10-13 19:06:00', '2021-10-13 19:06:00'),
(267, 19, 'Ngepoh', '2021-10-13 19:06:13', '2021-10-13 19:06:13'),
(268, 19, 'Ngrejo', '2021-10-13 19:06:33', '2021-10-13 19:06:33'),
(269, 19, 'Pakisrejo', '2021-10-13 19:06:48', '2021-10-13 19:06:48'),
(270, 19, 'Tanggung Gunung', '2021-10-13 19:07:05', '2021-10-13 19:07:05'),
(271, 19, 'Tenggarejo', '2021-10-13 19:07:25', '2021-10-13 19:07:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_category`
--

CREATE TABLE `post_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kecamatan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post_category`
--

INSERT INTO `post_category` (`id`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'Tulungagung', '2021-10-10 18:41:19', '2021-10-10 18:41:19'),
(2, 'Boyolangu', '2021-10-10 18:41:26', '2021-10-10 18:41:26'),
(3, 'Kedungwaru', '2021-10-10 18:41:33', '2021-10-10 18:41:33'),
(4, 'Ngantru', '2021-10-10 18:41:45', '2021-10-10 18:41:45'),
(5, 'Kauman', '2021-10-10 18:42:35', '2021-10-10 18:42:35'),
(6, 'Pagerwojo', '2021-10-10 18:42:41', '2021-10-10 18:42:41'),
(7, 'Sendang', '2021-10-10 18:42:50', '2021-10-10 18:42:50'),
(8, 'Karangrejo', '2021-10-10 18:43:00', '2021-10-10 18:43:00'),
(9, 'Gondang', '2021-10-10 18:43:13', '2021-10-10 18:43:13'),
(10, 'Sumbergempol', '2021-10-10 18:43:22', '2021-10-10 18:43:22'),
(11, 'Ngunut', '2021-10-10 18:43:36', '2021-10-10 18:43:36'),
(12, 'Pucanglaban', '2021-10-10 18:43:51', '2021-10-10 18:43:51'),
(13, 'Rejotangan', '2021-10-10 18:44:02', '2021-10-10 18:44:02'),
(14, 'Kalidawir', '2021-10-10 18:44:10', '2021-10-10 18:44:10'),
(15, 'Besuki', '2021-10-10 18:44:20', '2021-10-10 18:44:20'),
(16, 'Campurdarat', '2021-10-10 18:44:28', '2021-10-10 18:44:28'),
(17, 'Bandung', '2021-10-10 18:44:37', '2021-10-10 18:44:37'),
(18, 'Pakel', '2021-10-10 18:44:47', '2021-10-10 18:44:47'),
(19, 'Tanggung Gunung', '2021-10-10 18:44:54', '2021-10-10 18:44:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_page`
--

CREATE TABLE `post_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_halaman` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_halaman` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post_page`
--

INSERT INTO `post_page` (`id`, `nama_halaman`, `judul_halaman`, `keterangan`, `gambar`, `berkas`, `status`, `tgl_upload`, `created_at`, `updated_at`) VALUES
(3, 'SOP', 'SOP REKOMENDASI PEMBANGUNAN MENARA TELEKOMUNIKASI', 'Sistem rekomendasi pendirian menara telekomunikasi Kabupaten Tulungagung merupakan sebuah sistem untuk memberikan informasi dan memudahkan pengelolaan bagi para pihak yang terkait dalam proses permohonan rekomendasi menara telekomunikasi, khususnya bagi para pemohon. Pemohon dapat mengajukan rekomendasi pendirian menara telekomunikasi melalui sistem ini apabila memenuhi persyaratan. Selanjutnya pemohon bisa memperoleh surat rekomendasi pendirian menara telekomunikasi.', 'about_02.jpg', '2. SOP Rekomendasi Pembangunan Menara Telekomunikasi.pdf', 'AKTIF', '2021-12-31 16:58:00', '2021-12-31 02:58:08', '2022-01-06 06:13:28'),
(4, 'SOP', 'SOP REKOMENDASI PEMBANGUNAN FIBER OPTIK', 'Sistem rekomendasi pendirian fiber optik  Kabupaten Tulungagung merupakan sebuah sistem untuk memberikan informasi dan memudahkan pengelolaan bagi para pihak yang terkait dalam proses permohonan rekomendasi fiber optik, khususnya bagi para pemohon. Pemohon dapat mengajukan rekomendasi pendirian fiber optik melalui sistem ini apabila memenuhi persyaratan. Selanjutnya pemohon bisa memperoleh surat rekomendasi pendirian fiber optik.', 'about_03.jpg', '5. SOP Rekomendasi Pembangunan Tiang Fiber Optik.pdf', 'AKTIF', '2021-12-31 16:59:00', '2021-12-31 03:00:01', '2022-01-04 20:43:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_perusahaan`
--

CREATE TABLE `post_perusahaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_perusahaan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon_perusahaan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_akta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_nib` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_npwp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_akta` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_akta` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_nib` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_nib` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_npwp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_role`
--

CREATE TABLE `post_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post_role`
--

INSERT INTO `post_role` (`id`, `nama_role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-11-19 08:28:27', '2021-11-19 08:28:27'),
(2, 'User', '2021-11-19 08:28:51', '2021-11-19 08:28:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_status`
--

CREATE TABLE `post_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `post_status`
--

INSERT INTO `post_status` (`id`, `nama_status`, `keterangan`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Pengajuan Baru', 'Pengajuan Anda segera ditindaklanjuti. Silahkan upload kelengkapan berkas.', 'baru', '2021-10-10 18:33:39', '2021-10-10 18:33:39'),
(2, 'Pengajuan Diproses', 'Pengajuan Anda dalam pengecekkan data. Silahkan melakukan pengecekan melalui riwayat', 'proses', '2021-10-10 18:33:45', '2021-10-10 18:33:45'),
(3, 'Verifikasi Pengajuan', 'Pengajuan Anda dalam pengecekkan data. Silahkan melakukan pengecekan melalui riwayat', 'verifikasi', '2021-10-10 18:33:45', '2021-10-10 18:33:45'),
(4, 'Pengajuan Selesai', 'Pengajuan Anda sudah selesai.', 'selesai', '2021-10-10 18:33:45', '2021-10-10 18:33:45'),
(5, 'Pengajuan Ditolak', 'Pengajuan Anda tidak dapat diproses. Silahkan melakukan pengajuan ulang', 'tolak', '2021-10-10 18:33:45', '2021-10-10 18:33:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_k_user` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_user` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_post_role` int(10) UNSIGNED NOT NULL,
  `file_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_user`, `nip_k_user`, `alamat_user`, `no_hp`, `id_post_role`, `file_ktp`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Test', '1234567891234567', 'Tulungagung', '081234567890', 1, '-', 'admin@mail.test', '$2y$10$OqWZpjTAaBlQk4Dg6oVOauxr7MK92MxbhD/VxFKHioZS/FCraNimC', NULL, '2021-12-19 21:59:34', '2022-01-03 20:48:27');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fiber`
--
ALTER TABLE `fiber`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fiber_id_post_perusahaan_foreign` (`id_post_perusahaan`),
  ADD KEY `fiber_id_user_foreign` (`id_user`),
  ADD KEY `fiber_id_status_foreign` (`id_status`);

--
-- Indeks untuk tabel `menara`
--
ALTER TABLE `menara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menara_id_post_perusahaan_foreign` (`id_post_perusahaan`),
  ADD KEY `menara_id_user_foreign` (`id_user`),
  ADD KEY `menara_id_status_foreign` (`id_status`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id_post_category_foreign` (`id_post_category`);

--
-- Indeks untuk tabel `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_perusahaan`
--
ALTER TABLE `post_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_role`
--
ALTER TABLE `post_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `post_status`
--
ALTER TABLE `post_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_post_role_foreign` (`id_post_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fiber`
--
ALTER TABLE `fiber`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `menara`
--
ALTER TABLE `menara`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT untuk tabel `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `post_perusahaan`
--
ALTER TABLE `post_perusahaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `post_role`
--
ALTER TABLE `post_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `post_status`
--
ALTER TABLE `post_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fiber`
--
ALTER TABLE `fiber`
  ADD CONSTRAINT `fiber_id_post_perusahaan_foreign` FOREIGN KEY (`id_post_perusahaan`) REFERENCES `post_perusahaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiber_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `post_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fiber_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menara`
--
ALTER TABLE `menara`
  ADD CONSTRAINT `menara_id_post_perusahaan_foreign` FOREIGN KEY (`id_post_perusahaan`) REFERENCES `post_perusahaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menara_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `post_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menara_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_id_post_category_foreign` FOREIGN KEY (`id_post_category`) REFERENCES `post_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_post_role_foreign` FOREIGN KEY (`id_post_role`) REFERENCES `post_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
