-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 10:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nike', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(2, 'Adidas', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(3, 'Puma', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(4, 'Reebok', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(5, 'New Balance', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(6, 'Asics', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(7, 'Converse', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(8, 'Vans', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(9, 'Under Armour', '2025-01-06 01:49:08', '2025-01-06 01:49:08', '2025-01-06 04:39:12'),
(10, 'Fila', '2025-01-06 01:49:08', '2025-01-06 01:49:08', '2025-01-06 04:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `size_id` int(10) UNSIGNED NOT NULL,
  `status` enum('cart','waiting_payment','checking_payment','success_payment','under_packaging','waiting_for_courier','sent','finished','cancelled') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `user_id`, `size_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 1, 'cancelled', '2025-01-05 19:57:12', '2025-01-06 01:40:25', NULL),
(2, 1, 2, 4, 'finished', '2025-01-05 23:27:12', '2025-01-06 01:43:43', NULL),
(3, 2, 2, 9, 'sent', '2025-01-05 23:42:29', '2025-01-06 22:01:58', NULL),
(4, 4, 3, 1, 'finished', '2025-01-07 00:55:35', '2025-01-07 01:00:53', NULL),
(5, 1, 3, 4, 'finished', '2025-01-07 00:55:53', '2025-01-07 01:00:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'all', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(2, 'top_selling', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(3, 'new_arrival', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `product_id`, `file_path`, `file_name`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '/assets/images/1736132206_92626fc9a5682f9af1d4.webp', '01-CONVERSE-FFSSBCONA-CON162050C-Black.webp', 'webp', '2025-01-05 19:56:46', '2025-01-05 19:56:46', NULL),
(2, 1, '/assets/images/1736132206_ba6bb4467531641b9db0.webp', '02-CONVERSE-FFSSBCONA-CON162050C-Black.webp', 'webp', '2025-01-05 19:56:46', '2025-01-05 19:56:46', NULL),
(3, 1, '/assets/images/1736132206_71b3506a40cfb0eedd77.webp', '03-CONVERSE-FFSSBCONA-CON162050C-Black.webp', 'webp', '2025-01-05 19:56:46', '2025-01-05 19:56:46', NULL),
(4, 1, '/assets/images/1736132206_461686dae25d497e2bb5.webp', '04-CONVERSE-FFSSBCONA-CON162050C-Black.webp', 'webp', '2025-01-05 19:56:46', '2025-01-05 19:56:46', NULL),
(5, 2, '/assets/images/1736136824_af4896c64aeab5911f14.webp', '01-NEW-BALANCE-F55CQNEWA-NEWMR530FRN-Grey.webp', 'webp', '2025-01-05 21:13:44', '2025-01-05 21:13:44', NULL),
(6, 2, '/assets/images/1736136824_afcb8fcbc6759438f8eb.webp', '02-NEW-BALANCE-F55CQNEWA-NEWMR530FRN-Grey.webp', 'webp', '2025-01-05 21:13:44', '2025-01-05 21:13:44', NULL),
(7, 2, '/assets/images/1736136824_565587b09263ba3cd127.webp', '03-NEW-BALANCE-F55CQNEWA-NEWMR530FRN-Grey.webp', 'webp', '2025-01-05 21:13:44', '2025-01-05 21:13:44', NULL),
(8, 2, '/assets/images/1736136824_5777fc2e4c7bc6910a47.webp', '04-NEW-BALANCE-F55CQNEWA-NEWMR530FRN-Grey.webp', 'webp', '2025-01-05 21:13:44', '2025-01-05 21:13:44', NULL),
(9, 3, '/assets/images/1736216521_e81b420b2e778c70bf01.webp', '01-NEW-BALANCE-FFSTYNEWA-NEWM1906REE-Silver.webp', 'webp', '2025-01-06 19:22:01', '2025-01-06 19:22:01', '2025-01-07 02:24:16'),
(10, 3, '/assets/images/1736216521_9b5c004763a4ac87ee65.webp', '03-NEW-BALANCE-FFSTYNEWA-NEWM1906REE-Silver.webp', 'webp', '2025-01-06 19:22:01', '2025-01-06 19:22:01', '2025-01-07 02:24:19'),
(11, 3, '/assets/images/1736216521_9066bc6a79bc407349f7.webp', '04-NEW-BALANCE-FFSTYNEWA-NEWM1906REE-Silver.webp', 'webp', '2025-01-06 19:22:01', '2025-01-06 19:22:01', '2025-01-07 02:24:22'),
(12, 3, '/assets/images/1736216521_79431da9e1417de4c16d.webp', '06-NEW-BALANCE-FFSTYNEWA-NEWM1906REE-Silver.webp', 'webp', '2025-01-06 19:22:01', '2025-01-06 19:22:01', '2025-01-07 02:24:25'),
(13, 4, '/assets/images/1736216923_509d0facfc54844a17ea.webp', '01-NEW-BALANCE-FFSTYNEWA-NEWM1906REE-Silver.webp', 'webp', '2025-01-06 19:28:43', '2025-01-06 19:28:43', NULL),
(14, 4, '/assets/images/1736216923_cb468657d14d6745c895.webp', '03-NEW-BALANCE-FFSTYNEWA-NEWM1906REE-Silver.webp', 'webp', '2025-01-06 19:28:43', '2025-01-06 19:28:43', NULL),
(15, 4, '/assets/images/1736216923_7d18746dc9c30a4c06a5.webp', '04-NEW-BALANCE-FFSTYNEWA-NEWM1906REE-Silver.webp', 'webp', '2025-01-06 19:28:43', '2025-01-06 19:28:43', NULL),
(16, 4, '/assets/images/1736216923_bb945de3793986f94c5b.webp', '06-NEW-BALANCE-FFSTYNEWA-NEWM1906REE-Silver.webp', 'webp', '2025-01-06 19:28:43', '2025-01-06 19:28:43', NULL),
(17, 5, '/assets/images/1736219531_9ace40405829a9cb0808.webp', '01-ADIDAS-FFSSBADI5-ADIB75806-White.webp', 'webp', '2025-01-06 20:12:11', '2025-01-06 20:12:11', NULL),
(18, 5, '/assets/images/1736219531_7075dd99d98205766a0b.webp', '03-ADIDAS-FFSSBADI5-ADIB75806-White.webp', 'webp', '2025-01-06 20:12:11', '2025-01-06 20:12:11', NULL),
(19, 5, '/assets/images/1736219531_66e2e7cef6db2c115755.webp', '04-ADIDAS-FFSSBADI5-ADIB75806-White.webp', 'webp', '2025-01-06 20:12:11', '2025-01-06 20:12:11', NULL),
(20, 5, '/assets/images/1736219531_22c63ee051e73f046853.webp', '05-ADIDAS-FFSSBADI5-ADIB75806-White.webp', 'webp', '2025-01-06 20:12:11', '2025-01-06 20:12:11', NULL),
(21, 6, '/assets/images/1736219679_69e98fd44eac626afc57.webp', '01-NIKE-FFSSBNIK5-NIKFJ4151003-Grey.webp', 'webp', '2025-01-06 20:14:39', '2025-01-06 20:14:39', NULL),
(22, 6, '/assets/images/1736219679_cad72b51bc849bf9be34.webp', '03-NIKE-FFSSBNIK5-NIKFJ4151003-Grey.webp', 'webp', '2025-01-06 20:14:39', '2025-01-06 20:14:39', NULL),
(23, 6, '/assets/images/1736219679_6fd6294e762438ac8f91.webp', '04-NIKE-FFSSBNIK5-NIKFJ4151003-Grey.webp', 'webp', '2025-01-06 20:14:39', '2025-01-06 20:14:39', NULL),
(24, 6, '/assets/images/1736219679_cba2b30a9629f53e661e.webp', '05-NIKE-FFSSBNIK5-NIKFJ4151003-Grey.webp', 'webp', '2025-01-06 20:14:39', '2025-01-06 20:14:39', NULL),
(25, 7, '/assets/images/1736220380_5f9a699905d462fefaab.webp', '01-NIKE-F34KBNIK5-NIK553558092-Black.webp', 'webp', '2025-01-06 20:26:20', '2025-01-06 20:26:20', NULL),
(26, 7, '/assets/images/1736220380_72e1c1357b7151d84b9f.webp', '03-NIKE-F34KBNIK5-NIK553558092-Black.webp', 'webp', '2025-01-06 20:26:20', '2025-01-06 20:26:20', NULL),
(27, 7, '/assets/images/1736220380_fd66b3c5b18c4cfd2b24.webp', '04-NIKE-F34KBNIK5-NIK553558092-Black.webp', 'webp', '2025-01-06 20:26:20', '2025-01-06 20:26:20', NULL),
(28, 7, '/assets/images/1736220380_6204798a8c60d2026d35.webp', '05-NIKE-F34KBNIK5-NIK553558092-Black.webp', 'webp', '2025-01-06 20:26:20', '2025-01-06 20:26:20', NULL),
(29, 8, '/assets/images/1736220503_a484f5880094dc694a61.webp', '01-NEW-BALANCE-FFSCSNEWA-NEWBB550FF1-Black.webp', 'webp', '2025-01-06 20:28:23', '2025-01-06 20:28:23', NULL),
(30, 8, '/assets/images/1736220503_b49128c07129bd2514d6.webp', '02-NEW-BALANCE-FFSCSNEWA-NEWBB550FF1-Black.webp', 'webp', '2025-01-06 20:28:23', '2025-01-06 20:28:23', NULL),
(31, 8, '/assets/images/1736220503_be05a0537254e3a7cb1c.webp', '03-NEW-BALANCE-FFSCSNEWA-NEWBB550FF1-Black.webp', 'webp', '2025-01-06 20:28:23', '2025-01-06 20:28:23', NULL),
(32, 8, '/assets/images/1736220503_6819461450ab6f1bc007.webp', '04-NEW-BALANCE-FFSCSNEWA-NEWBB550FF1-Black.webp', 'webp', '2025-01-06 20:28:23', '2025-01-06 20:28:23', NULL),
(33, 10, '/assets/images/1736220710_3ffd6e0619a5d3485e7b.webp', '01-VANS-FFSSBVAS5-VAS000D269X1-Black.webp', 'webp', '2025-01-06 20:31:50', '2025-01-06 20:31:50', NULL),
(34, 10, '/assets/images/1736220710_fe494a002decde53a4e0.webp', '02-VANS-FFSSBVAS5-VAS000D269X1-Black.webp', 'webp', '2025-01-06 20:31:50', '2025-01-06 20:31:50', NULL),
(35, 10, '/assets/images/1736220710_812b68bd74918c73560a.webp', '03-VANS-FFSSBVAS5-VAS000D269X1-Black.webp', 'webp', '2025-01-06 20:31:50', '2025-01-06 20:31:50', NULL),
(36, 10, '/assets/images/1736220710_a6f9ed9ea9c4bc38a9c8.webp', '04-VANS-FFSSBVAS5-VAS000D269X1-Black.webp', 'webp', '2025-01-06 20:31:50', '2025-01-06 20:31:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(8, '2025-01-02-080152', 'App\\Database\\Migrations\\Brands', 'default', 'App', 1736128112, 1),
(9, '2025-01-02-081818', 'App\\Database\\Migrations\\Categories', 'default', 'App', 1736128112, 1),
(10, '2025-01-02-081936', 'App\\Database\\Migrations\\Users', 'default', 'App', 1736128112, 1),
(11, '2025-01-02-081948', 'App\\Database\\Migrations\\Products', 'default', 'App', 1736128112, 1),
(12, '2025-01-02-082004', 'App\\Database\\Migrations\\Sizes', 'default', 'App', 1736128112, 1),
(13, '2025-01-02-082040', 'App\\Database\\Migrations\\Cart', 'default', 'App', 1736128112, 1),
(14, '2025-01-02-082957', 'App\\Database\\Migrations\\Files', 'default', 'App', 1736128112, 1),
(15, '2025-01-03-134458', 'App\\Database\\Migrations\\Payments', 'default', 'App', 1736128112, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `total` int(100) NOT NULL,
  `proof_of_transfer` varchar(100) NOT NULL,
  `status` enum('waiting_confirmation','confirmed','rejected','') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `user_id`, `total`, `proof_of_transfer`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1299000, '/assets/images/1736132399_e0e6dfc9210bdfdd798a.png', 'waiting_confirmation', '2025-01-05 19:59:37', '2025-01-05 19:59:59', NULL),
(2, 2, 2898000, '/assets/images/1736145770_5ebf5149dd594a911ca8.png', 'confirmed', '2025-01-05 23:42:43', '2025-01-05 23:42:50', NULL),
(3, 3, 3898000, '/assets/images/1736236643_e2618ce43c09d5584d40.jpg', 'confirmed', '2025-01-07 00:56:07', '2025-01-07 00:59:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `rating` int(10) NOT NULL,
  `price` int(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `brand_id`, `product_name`, `description`, `rating`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 7, 'chuck 70 hi unisex sneakers - black', 'Di tahun 1970, Chuck Taylor All Star berubah menjadi salah satu sneakers basket terbaik yang pernah ada. Chuck 70 merayakan warisan tersebut dengan menyatukan detail yang berasal dari arsip-arsip dengan pembaharuan modern. Bantalan insole Ortholite dan jahitan lidah bersayap menjadikan kenyamanan jauh lebih baik lagi. Midsole egret glossy dan patch bintang pergelangan kaki yang khas menguarkan gaya vintage dan ikonik dari sepatu ini. Terbaharui dalam warna-warna arsip pada kanvas premium.', 5, 1299000, '2025-01-05 19:56:46', '2025-01-05 19:56:46', NULL),
(2, 3, 5, '530 unisex sneakers shoes - grey', 'Sepasang sepatu lari serbaguna dengan tampilan berperforma tinggi yang kini hadir dengan penuh gaya.', 4, 1599000, '2025-01-05 21:13:44', '2025-01-05 21:13:44', NULL),
(3, 2, 5, '1906 men\'s sneakers shoes - silver', 'Sepatu pria 1906R yang ikonis ini kembali dengan gaya yang segar. Terpilih sebagai produk New Balance tahun ini, sepatu ini diperbarui dengan upper yang terinspirasi oleh desain sepatu lari di tahun 2000-an, sepatu klasik ini terus menjadi yang terbaik di dunia lari. Sol luar N-ergy yang menyerap hentakan dilengkapi Stability Web untuk dukungan lengkung tambahan, sementara itu, sol tengah ACTEVA LITE dan bantalan tumit ABZORB SBS menawarkan kenyamanan dan stabilitas. Dengan 1906R yang klasik ini, kamu akan mendapatkan sepatu lari yang penuh gaya dan penuh performa.', 5, 2599000, '2025-01-06 19:22:00', '2025-01-06 19:22:00', '2025-01-07 02:23:56'),
(4, 2, 5, '1906 men\'s sneakers shoes - silver', 'Sepatu pria 1906R yang ikonis ini kembali dengan gaya yang segar. Terpilih sebagai produk New Balance tahun ini, sepatu ini diperbarui dengan upper yang terinspirasi oleh desain sepatu lari di tahun 2000-an, sepatu klasik ini terus menjadi yang terbaik di dunia lari. Sol luar N-ergy yang menyerap hentakan dilengkapi Stability Web untuk dukungan lengkung tambahan, sementara itu, sol tengah ACTEVA LITE dan bantalan tumit ABZORB SBS menawarkan kenyamanan dan stabilitas. Dengan 1906R yang klasik ini, kamu akan mendapatkan sepatu lari yang penuh gaya dan penuh performa.', 5, 2599000, '2025-01-06 19:28:43', '2025-01-06 19:28:43', NULL),
(5, 2, 2, 'samba og men\'s sneaker shoes - ftwr white', 'Lahir di lapangan, Samba merupakan ikon street style yang tak lekang oleh waktu. Sepatu ini tetap setia pada warisan mereka dengan bahan premium. Sepatu ini terbuat dari kulit dengan lapisan suede dan \"Samba\" berwarna emas di atas 3-Stripes.', 4, 2000000, '2025-01-06 20:12:11', '2025-01-06 20:12:11', NULL),
(6, 2, 1, 'nike zoom vomero 5 men\'s sneakers shoes - wolf grey', 'Raih apapun keinginan dan tujuan yang telah anda tentukan dengan sepatu Zoom Vomero 5. Dengan menggunakan desai yang memadukan tekstil yang terasa sejuk dengan material kulit sintetis dan aksen plastik secara berlapis, kami menghadirkan sebuah sepatu dengan upper yang complex untuk melengkapi setiap gaya pilihan anda. Tidak hanya itu, sepatu ini juga memiliki midsole yang kami buat sebagai bentuk penghormatan pada pelatih lari terkenal serta co-founder Nike, yaitu Bill Bowerman.', 5, 1742300, '2025-01-06 20:14:39', '2025-01-06 20:14:39', NULL),
(7, 3, 1, 'Air Jordan 1 low men\'s basketball shoes - black', 'Unit Air-Sole yang dienkapsulasi memberikan bantalan yang ringan. Kulit asli di bagian atas menawarkan daya tahan dan tampilan premium. Sol luar dari karet yang kokoh meningkatkan traksi di berbagai permukaan.', 5, 1729000, '2025-01-06 20:26:20', '2025-01-06 20:26:20', NULL),
(8, 3, 5, '550 unisex sneakers shoes - black', 'Versi original dari sepatu 550 ini memulai debutnya pada tahun 1989 dan menjadi sebuah sepatu yang terkenal di dalam lapangan basket manapun. Setelah itu, sepatu 550 masuk ke dalam kumpulan arsip, sebelum akhirnya muncul kembali di akhir tahun 2020, dan diproduksi kembali secara full-time pada tahun 2021 setelah menjadi sepatu terfavorit pada saat yang bersamaan. Sepatu 550 ini memiliki tampilan low-top streamline yang merupakan sebuah inspirasi dari desain khas tahun 80-an, serta konstruksi upper berbahan kulit yang menampilkan gaya klasik yang tetap populer di era manapun.', 4, 2099000, '2025-01-06 20:28:23', '2025-01-06 20:28:23', NULL),
(10, 3, 8, 'XT - 6 men lifestyle shoes - black', 'HYLANE', 3, 1499000, '2025-01-06 20:31:50', '2025-01-06 20:31:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(10) UNSIGNED NOT NULL,
  `size_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`size_id`, `size_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'EU 37', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(2, 'EU 38', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(3, 'EU 39', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(4, 'EU 40', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(5, 'EU 41', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(6, 'EU 42', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(7, 'EU 43', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(8, 'EU 44', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(9, 'EU 45', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `address`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', '$2y$10$xEHmeKXdy7G1YrLBPPoqbug.RlT.yQn/AB1dyyb.sqB1dxxxcwg.m', 'Jaksel', 'admin', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(2, 'tian', 'tian@gmail.com', '$2y$10$v8j2Im3ltXBmSkSiD4ORz.gxH8YXrK9t7mNJBS756mjzjkbwKSwrC', 'Malang', 'customer', '2025-01-06 01:49:08', '2025-01-06 01:49:08', NULL),
(3, 'Eka', 'eka@gmail.com', '$2y$10$WuVb8ir2Izsxjl7UQwcyFeAodU6RLynwNYdf54GHoZD51VZ5ILexC', 'Kalimantan', 'customer', '2025-01-07 00:54:28', '2025-01-07 00:54:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_product_id_foreign` (`product_id`),
  ADD KEY `cart_user_id_foreign` (`user_id`),
  ADD KEY `cart_size_id_foreign` (`size_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `files_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `cart_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`size_id`),
  ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
