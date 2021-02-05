-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2021 at 11:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `KEA_Hotel_ERP`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `created_at`) VALUES
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd6ab8', 'Sys Admin', 'sysadmin@kea-hotel-erp.org', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-03 10:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `code`, `details`, `status`, `created_at`) VALUES
('0b8f18a47ea85bada12945ed8fc5d545dbf0788d61', 'Asset 001', 'XSBNW-42750', 'Lorem Ipsum Assseteesdp[awe;sdfpj\\\\\\\'omaleksd pk[,;lqwasczdxc[p\\\\\\\';/w.ASDc', 'Faulty', '2021-02-04 08:49:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_09_10_090517_create_sessions_table', 1),
(7, '2020_09_23_093603_create_admin_table', 1),
(8, '2020_09_23_093712_create_staffs_table', 1),
(9, '2020_09_23_093726_create_rooms_table', 1),
(10, '2020_09_23_093756_create_reservations_table', 1),
(11, '2020_09_23_093826_create_resturants_table', 1),
(12, '2020_09_23_093854_create_assets_table', 1),
(13, '2020_09_23_093909_create_payrolls_table', 1),
(14, '2020_09_23_093931_create_vendors_table', 1),
(15, '2020_09_23_094001_create_house-keeping_table', 1),
(16, '2020_09_23_094025_create_payments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sysadmin@kea-hotel-erp.org', '2a63ae7c3ee35cb720c0872cb8408a5bccd24dee4fde5a5100494b64d79351f05828f977b04642b59b7781f1f9bf1f2f49009970efb1f74767cde8707a604794dbfafe3c3af390e17531794493cd92a5953e14ebf6414212cc088048eb36034', '2020-09-23 12:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_means` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `code`, `amt`, `cust_name`, `service_paid`, `payment_means`, `status`, `month`, `created_at`) VALUES
('1db8b00bbdb31ecf4b65eb3911b88179fcd6cc47c6', 'N65728IDR1', '5500', 'Customer 001', 'Resturant Sales', 'Mpesa', '', 'Feb', '2021-02-04 08:43:05'),
('6e721092b1799f0a1c3fe52b397f8e2064552f214f', 'HN18D5VR0S', '5500', 'Customer 001', 'Reservations', 'Mpesa', '', 'Feb', '2021-02-04 08:41:15'),
('ba553705145906b0b9ec41495283753e82eb3226d0', 'ZCHV4JPAUD', '38500', 'Customer 001', 'Reservations', 'Cash', '', 'Feb', '2021-02-04 08:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`id`, `code`, `month`, `staff_id`, `staff_name`, `salary`, `created_at`) VALUES
('121827df432ce15df2906bda038234', 'UEJTV-48596', 'January', '8ef516fdeba0c8204cedd46c6f46be2b4f1ad9e79c9605ad925a22e85daf0d9a182cf8f36f180b75ceb47dbb89ac9c58c2cff1ad1472bb3802202c66373702771e3ba4502e88203e114c29970f7761bd190cda7f3fd61d78fd32d66f73b0563', 'Susan B. Dunbar', '5500', '2020-09-24 08:48:27'),
('47569a3c0cf92945e7b7926805ac28cf232591bc4d', 'DQJX9-93617', 'February', 'e4f2c219f414223be9f1825ceb1dd81ea4abc0000', 'Staff 000', '25000', '2021-02-02 10:44:20'),
('8ed6032767014826d0b38c5a265965', 'RKPEF-30415', 'January', 'e28362d26eb1bb3c8cff880563ee638b23ad6ad73038fba9f8ea43eedde076ae72e409652d40ed3f514e19f6a5790ee61f2417dd7111b15e0c51c09198f2a98bd2b171fe396f103a4fa08f2e89b2eae3db01fd40e1b224bb6c4f9769e02ad9e', 'Jane Doe', '5600', '2021-02-02 10:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_in` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_out` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cust_adr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `room_id`, `room_number`, `room_cost`, `room_type`, `check_in`, `check_out`, `cust_name`, `cust_id`, `cust_phone`, `cust_email`, `cust_adr`, `status`, `created_at`) VALUES
('07f08ee7e8198aa45e81970132ea2a5397c8b68355', '4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0014', 'FLKGE-08281', '7000', 'Deluxe Rooms', '2021-02-26', '2021-03-12', 'Customer 00678', '45467898', '098765434567', 'cust00678@mail.com', '127001 Localhost', 'Pending', '2021-02-05 10:22:53'),
('19eb1af1a134732c1e23521e6f1efd0af783d64fa8', '4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0038', 'FLKGE-08305', '12000', 'Regular Suite', '2021-02-05', '2021-02-23', 'Customer 001', '127001', '+90127563', 'cust001@mail.com', '127001 Localhost', 'Pending', '2021-02-05 10:19:54'),
('3d1c96322ce1715dc7b0d3562774576b63bd8bed8c', '1cb9c0741c113696b3f2ac8933e8142e105477591da5bdc2bfe361890ed8075ac164d3a3ad807b60917349951d7029488d98766fa55f348f0f281582b62c87fb830534ad141a23c3c465d2855dbf69a97f4b6b6fd1dbe4bb14f43dc0c92de24', 'OTICN-26084', '5500', 'Double', '2021-02-04', '2021-02-05', 'Customer 001', '127001', '+90127563', 'cust001@mail.com', '127001 Localhost', 'Paid', '2021-02-04 08:41:15'),
('7208ca3f836c5c0c1b0059336fff68d3c30c283590', '1cb9c0741c113696b3f2ac8933e8142e105477591da5bdc2bfe361890ed8075ac164d3a3ad807b60917349951d7029488d98766fa55f348f0f281582b62c87fb830534ad141a23c3c465d2855dbf69a97f4b6b6fd1dbe4bb14f43dc0c92de24', 'OTICN-26084', '5500', 'Double Rooms', '2021-02-04', '2021-02-11', 'Customer 001', '127001', '+90127563', 'cust001@mail.com', '127001 Localhost', 'Paid', '2021-02-04 08:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `resturants`
--

CREATE TABLE `resturants` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tables_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_categories` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `number`, `type`, `image`, `price`, `status`, `details`, `created_at`) VALUES
('1cb9c0741c113696b3f2ac8933e8142e105477591da5bdc2bfe361890ed8075ac164d3a3ad807b60917349951d7029488d98766fa55f348f0f281582b62c87fb830534ad141a23c3c465d2855dbf69a97f4b6b6fd1dbe4bb14f43dc0c92de24', 'OTICN-26084', 'Double Rooms', 'standard-double-room.jpg', '5500', 'Occupied', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2021-02-04 08:39:07'),
('42bf39a56bbe0d5f94ab34ce72235675e04de38d808a2e4b39e77b0803979d5582693eae91a41ecb52889ee82911681d89c13556ba10a649a48d97aed866fcedae8a5b387e9aa6260f85f7eeacf96e7b090153e30844e59c18b9e65deb9cc19', 'MCDQI-45210', 'Penthouse Suites', 'penthouse-suite.jpg', '25000', 'Vacant', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2021-01-30 08:29:47'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0000', 'OTICN-26085', 'Double Rooms', '', '5500', 'Vacant', '', '2021-02-04 08:34:17'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0001', 'MCDQI-45210', 'Penthouse Suites', '', '25000', 'Vacant', '', '2021-02-04 08:34:25'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0002', 'URAXQ-90416', 'Regular Suite', '', '12000', 'Vacant', '', '2021-02-04 08:34:38'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0003', 'APFQW-06324', 'Single Rooms', '', '2500', 'Vacant', '', '2021-01-29 10:51:08'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0004', 'ZYGMV-17624', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-02-04 08:34:33'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0005', 'XDWEC-89731', 'Single Rooms', '', '1500', 'Vacant', '', '2021-01-29 10:51:08'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0006', 'AR76O-73894', 'Single Rooms', '', '5600', 'Vacant', '', '2021-01-29 10:51:08'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0007', 'FLKGE-08274', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-02-04 08:34:29'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0008', 'FLKGE-08275', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:08'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0009', 'FLKGE-08276', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:08'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0010', 'FLKGE-08277', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:08'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0011', 'FLKGE-08278', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:08'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0012', 'FLKGE-08279', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:08'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0013', 'FLKGE-08280', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0014', 'FLKGE-08281', 'Deluxe Rooms', '', '7000', 'Occupied', '', '2021-02-05 10:22:53'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0015', 'FLKGE-08282', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0016', 'FLKGE-08283', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0017', 'FLKGE-08284', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0018', 'FLKGE-08285', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0019', 'FLKGE-08286', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0020', 'FLKGE-08287', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0021', 'FLKGE-08288', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0022', 'FLKGE-08289', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0023', 'FLKGE-08290', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0024', 'FLKGE-08291', 'Presidential Suites', '', '30000', 'Vacant', '', '2021-01-29 10:51:09'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0025', 'FLKGE-08292', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0026', 'FLKGE-08293', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0027', 'FLKGE-08294', 'Deluxe Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0028', 'FLKGE-08295', 'Double Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0029', 'FLKGE-08296', 'Double Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0030', 'FLKGE-08297', 'Double Rooms', '', '7000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0031', 'FLKGE-08298', 'Regular Suite', '', '12000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0032', 'FLKGE-08299', 'Regular Suite', '', '12000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0033', 'FLKGE-08300', 'Regular Suite', '', '12000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0034', 'FLKGE-08301', 'Regular Suite', '', '12000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0035', 'FLKGE-08302', 'Regular Suite', '', '12000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0036', 'FLKGE-08303', 'Regular Suite', '', '12000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0037', 'FLKGE-08304', 'Regular Suite', '', '12000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0038', 'FLKGE-08305', 'Regular Suite', '', '12000', 'Occupied', '', '2021-02-05 10:19:54'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0039', 'FLKGE-08306', 'Regular Suite', '', '12000', 'Vacant', '', '2021-01-29 10:51:10'),
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd0040', 'FLKGE-08307', 'Regular Suite', '', '12000', 'Vacant', '', '2021-01-29 10:51:10'),
('8b06b2f2e0e3a49dab2390265b89ddca05db0c6fac5dacb86be1d75bf1a9b39907fefd9c28a109380acf899628ea19c71667273d02c15fed3dff12477a246f5378da7ebff7a9e62462fb0e2823f1fe010347ac033219046f5b2a7b824afc7b1', 'URAXQ-90416', 'Regular Suite', 'regular_suites.jpg', '12000', 'Vacant', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2021-02-04 08:35:37'),
('aab8e6b55f219c44eb0c599fae9b9eb707bb54aec6241a2b9b743db9b0ee0cec924f9ad830f93afde5b3895388314e400d6574e9006f253c9968849d22afaec157732bd9b7af9a547a34b501a2de1b3e69376510339a9976aae63fe74ef78e6', 'APFQW-06324', 'Single Rooms', 'Single-room1.jpg', '2500', 'Vacant', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n', '2021-01-23 10:57:52'),
('b6ff834267fd3928e443b85eb3ce049ede61de7f491e06591fb99b0c225a279cd509f2cba6838237a7d580f32e1236689164dd3bdae4974969c7806a49eb9cba13abcc97e521a25004bb517f8501da8244e34f1cb777ed4274a21f07adaab88', 'ZYGMV-17624', 'Presidential Suites', 'Presidential-suite.jpg', '30000', 'Vacant', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2021-02-04 08:35:41'),
('cbdaea0daf511218d65548cc8c52b4d99a23d5fe60705c41f1b9b8e47e142beaacb9653ba954dead702a0ac0f2b172922f661709a43287ccafcbfd4315c53f97293a1f2084f2cd718dd2b55a172558935545c03112ed2ef14f4bb7816551329', 'XDWEC-89731', 'Single Rooms', 'Single-room1.jpg', '1500', 'Vacant', '<p>Standard Rooms provides guests with a:</p>\r\n\r\n<ul>\r\n	<li>King Sized/twin beds,</li>\r\n	<li>color TV with satellite channels,</li>\r\n	<li>attached bath room with 24 hrs. hot and cold water</li>\r\n	<li>Free Wi-Fi Internet access</li>\r\n	<li>telephone facilities.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-01-23 10:58:08'),
('d51dad3cb24f70582ba7416147ede28dee145b3b38', 'AR76O-73894', 'Single Rooms', 'Single Hotel Room 1.jpg', '5600', 'Vacant', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\\\\\\\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-01-29 10:05:51'),
('de354046e932fa2569d3877751138de8cb69e973025ac491dc3f4756c91c70fbfdb53739ad6811007111977c2673b9607a39f1936e87b7382a4ee8fe5803d79e89cbcc24a97d7f2d992ce949734a9a5005485a7aeba354c695df70aaf091d01', 'FLKGE-08274', 'Deluxe Rooms', 'deluxe-king-2.jpg', '7000', 'Vacant', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2021-02-04 08:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `room_service`
--

CREATE TABLE `room_service` (
  `id` varchar(200) NOT NULL,
  `room_id` varchar(200) NOT NULL,
  `staff_id` varchar(200) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  `staff_number` varchar(200) NOT NULL,
  `room_number` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_service`
--

INSERT INTO `room_service` (`id`, `room_id`, `staff_id`, `staff_name`, `staff_number`, `room_number`, `created_at`) VALUES
('1522e490fa403c708cdb9ef2663ee5ca02fca5dcff85a41997e2e69fccb20e31601d5df923fbb695671c7e07c4b0979ac9061abcd52b2874383382e5f8d2942981362001ceb520e240ca3754e1d7d43852dd40a0b029a54e53fbf7f4738fc33dec1156ce', '42bf39a56bbe0d5f94ab34ce72235675e04de38d808a2e4b39e77b0803979d5582693eae91a41ecb52889ee82911681d89c13556ba10a649a48d97aed866fcedae8a5b387e9aa6260f85f7eeacf96e7b090153e30844e59c18b9e65deb9cc19', '630877b16604abb4068e93aa67b8b80f9774b72fdb4cecac2930bf9ca1b3d13db3e8516fee8e167904b1c003d4fbfd7f519021497f916e0e74555121f3c4e99a5f95fa9b62e79e9e570e253f3f3a146a91ac85fafc3ce7ff27b6882360b7c9e', 'Irene M. Florence', 'UDIJG-47023', 'MCDQI-45210', '2020-09-25 09:20:51'),
('32acd81c190d85384f106c603ab528c6eccb881cd83fc5b72a732843b52b46009b69865af3854cc9cfec4918cfaf074c64d7922cc69e0a65d03342c76e11cac28e873df899258bfd3fd2af83cfd2b2b4652c3cc769278286f09e170578e6f28338199a99', 'cbdaea0daf511218d65548cc8c52b4d99a23d5fe60705c41f1b9b8e47e142beaacb9653ba954dead702a0ac0f2b172922f661709a43287ccafcbfd4315c53f97293a1f2084f2cd718dd2b55a172558935545c03112ed2ef14f4bb7816551329', '7287fc24d6e09a28a235b96ff7981f5849f5c18302a45a0d03af1c3291fb8d54fb6c389b1fc97f3581161cdcf4e533d3cc275f0ea27123d3c430eb30dc0c1f3ff0b4c1b04059edbd71fc9bc1b80161a7ae18c25df48648e68f65d11b0ad9c8a', 'Priscilla R. Morales', 'XKFIW-64023', 'XDWEC-89731', '2020-09-24 13:46:13'),
('7291c44a38ac4525b8ee736d46b810e7f17ae7484ff8d8c1f1707313ad1292cfd48b3641d4b4b573621cb637fafb91288ad2f7223c116b884f357895389fe1038f30100cd6abb6e58a48a63853895ad0a26b78b1e1c9f6a6e4f14df2f3cab73d3357f950', 'aab8e6b55f219c44eb0c599fae9b9eb707bb54aec6241a2b9b743db9b0ee0cec924f9ad830f93afde5b3895388314e400d6574e9006f253c9968849d22afaec157732bd9b7af9a547a34b501a2de1b3e69376510339a9976aae63fe74ef78e6', '43ab1faceab515fcb1fcf737eda4ad52dcbd99a6bd2b7007739c4db35e917a7d739c2eef5de444a7fd5c6236b10941239f1c64a8f42f3e540be4488d71ae5f0f6d0a959135e1408e32e62e427aabc4acad69f3141b02463dda5061d5dbac0b0', 'Martdevelopers Inc', 'ERKDB-64075', 'APFQW-06324', '2020-09-24 13:47:11'),
('8a7f228ab50813ca97a7281cfcd40de35f9b6dfed1', '1cb9c0741c113696b3f2ac8933e8142e105477591da5bdc2bfe361890ed8075ac164d3a3ad807b60917349951d7029488d98766fa55f348f0f281582b62c87fb830534ad141a23c3c465d2855dbf69a97f4b6b6fd1dbe4bb14f43dc0c92de24', 'e4f2c219f414223be9f1825ceb1dd81ea4abc0000', 'Staff 000', '7AOQL_0000', 'OTICN-26084', '2021-02-03 08:37:07'),
('ea70cecaa9ef74ef4da39468352b36633ebe72dd8094907064c07e62280013a0b4d07a02fa3517b280257e2f8850185f1038d41a1c0eef62b27cb2fe2645a3de9a1eba1300da0180eafe66ae095c398f16c524140cae3d067fd00eb86faf11098a7d6002', '42bf39a56bbe0d5f94ab34ce72235675e04de38d808a2e4b39e77b0803979d5582693eae91a41ecb52889ee82911681d89c13556ba10a649a48d97aed866fcedae8a5b387e9aa6260f85f7eeacf96e7b090153e30844e59c18b9e65deb9cc19', 'e28362d26eb1bb3c8cff880563ee638b23ad6ad73038fba9f8ea43eedde076ae72e409652d40ed3f514e19f6a5790ee61f2417dd7111b15e0c51c09198f2a98bd2b171fe396f103a4fa08f2e89b2eae3db01fd40e1b224bb6c4f9769e02ad9e', 'Jane Doe', 'SYWTH-76941', 'MCDQI-45210', '2020-09-28 10:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `number`, `phone`, `email`, `adr`, `password`, `created_at`) VALUES
('e4f2c219f414223be9f1825ceb1dd81ea4abc0000', 'Jane Doe', '7AOQL_0000', '90-127-00972', 'janedoe@kerp.org', '127001 Localhost', 'adcd7048512e64b48da55b027577886ee5a36350', '2021-02-04 08:15:42'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0001', 'Staff 001', '7AOQL_0001', '90-127-00973', 'staff@keahotelserp.001', '127002 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:50'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0002', 'Staff 002', '7AOQL_0002', '90-127-00974', 'staff@keahotelserp.002', '127003 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:50'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0003', 'Staff 003', '7AOQL_0003', '90-127-00975', 'staff@keahotelserp.003', '127004 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:50'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0004', 'Staff 004', '7AOQL_0004', '90-127-00976', 'staff@keahotelserp.004', '127005 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:50'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0005', 'Staff 005', '7AOQL_0005', '90-127-00977', 'staff@keahotelserp.005', '127006 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0006', 'Staff 006', '7AOQL_0006', '90-127-00978', 'staff@keahotelserp.006', '127007 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0007', 'Staff 007', '7AOQL_0007', '90-127-00979', 'staff@keahotelserp.007', '127008 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0008', 'Staff 008', '7AOQL_0008', '90-127-00980', 'staff@keahotelserp.008', '127009 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0009', 'Staff 009', '7AOQL_0009', '90-127-00981', 'staff@keahotelserp.009', '127010 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0010', 'Staff 010', '7AOQL_0010', '90-127-00982', 'staff@keahotelserp.010', '127011 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0011', 'Staff 011', '7AOQL_0011', '90-127-00983', 'staff@keahotelserp.011', '127012 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0012', 'Staff 012', '7AOQL_0012', '90-127-00984', 'staff@keahotelserp.012', '127013 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0013', 'Staff 013', '7AOQL_0013', '90-127-00985', 'staff@keahotelserp.013', '127014 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0014', 'Staff 014', '7AOQL_0014', '90-127-00986', 'staff@keahotelserp.014', '127015 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0015', 'Staff 015', '7AOQL_0015', '90-127-00987', 'staff@keahotelserp.015', '127016 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0016', 'Staff 016', '7AOQL_0016', '90-127-00988', 'staff@keahotelserp.016', '127017 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0017', 'Staff 017', '7AOQL_0017', '90-127-00989', 'staff@keahotelserp.017', '127018 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0018', 'Staff 018', '7AOQL_0018', '90-127-00990', 'staff@keahotelserp.018', '127019 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0019', 'Staff 019', '7AOQL_0019', '90-127-00991', 'staff@keahotelserp.019', '127020 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0020', 'Staff 020', '7AOQL_0020', '90-127-00992', 'staff@keahotelserp.020', '127021 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0021', 'Staff 021', '7AOQL_0021', '90-127-00993', 'staff@keahotelserp.021', '127022 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0022', 'Staff 022', '7AOQL_0022', '90-127-00994', 'staff@keahotelserp.022', '127023 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:51'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0023', 'Staff 023', '7AOQL_0023', '90-127-00995', 'staff@keahotelserp.023', '127024 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0024', 'Staff 024', '7AOQL_0024', '90-127-00996', 'staff@keahotelserp.024', '127025 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0025', 'Staff 025', '7AOQL_0025', '90-127-00997', 'staff@keahotelserp.025', '127026 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0026', 'Staff 026', '7AOQL_0026', '90-127-00998', 'staff@keahotelserp.026', '127027 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0027', 'Staff 027', '7AOQL_0027', '90-127-00999', 'staff@keahotelserp.027', '127028 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0028', 'Staff 028', '7AOQL_0028', '90-127-01000', 'staff@keahotelserp.028', '127029 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0029', 'Staff 029', '7AOQL_0029', '90-127-01001', 'staff@keahotelserp.029', '127030 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0030', 'Staff 030', '7AOQL_0030', '90-127-01002', 'staff@keahotelserp.030', '127031 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0031', 'Staff 031', '7AOQL_0031', '90-127-01003', 'staff@keahotelserp.031', '127032 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0032', 'Staff 032', '7AOQL_0032', '90-127-01004', 'staff@keahotelserp.032', '127033 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0033', 'Staff 033', '7AOQL_0033', '90-127-01005', 'staff@keahotelserp.033', '127034 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0034', 'Staff 034', '7AOQL_0034', '90-127-01006', 'staff@keahotelserp.034', '127035 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0035', 'Staff 035', '7AOQL_0035', '90-127-01007', 'staff@keahotelserp.035', '127036 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0036', 'Staff 036', '7AOQL_0036', '90-127-01008', 'staff@keahotelserp.036', '127037 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0037', 'Staff 037', '7AOQL_0037', '90-127-01009', 'staff@keahotelserp.037', '127038 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0038', 'Staff 038', '7AOQL_0038', '90-127-01010', 'staff@keahotelserp.038', '127039 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0039', 'Staff 039', '7AOQL_0039', '90-127-01011', 'staff@keahotelserp.039', '127040 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0040', 'Staff 040', '7AOQL_0040', '90-127-01012', 'staff@keahotelserp.040', '127041 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0041', 'Staff 041', '7AOQL_0041', '90-127-01013', 'staff@keahotelserp.041', '127042 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:52'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0042', 'Staff 042', '7AOQL_0042', '90-127-01014', 'staff@keahotelserp.042', '127043 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0043', 'Staff 043', '7AOQL_0043', '90-127-01015', 'staff@keahotelserp.043', '127044 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0044', 'Staff 044', '7AOQL_0044', '90-127-01016', 'staff@keahotelserp.044', '127045 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0045', 'Staff 045', '7AOQL_0045', '90-127-01017', 'staff@keahotelserp.045', '127046 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0046', 'Staff 046', '7AOQL_0046', '90-127-01018', 'staff@keahotelserp.046', '127047 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0047', 'Staff 047', '7AOQL_0047', '90-127-01019', 'staff@keahotelserp.047', '127048 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0048', 'Staff 048', '7AOQL_0048', '90-127-01020', 'staff@keahotelserp.048', '127049 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0049', 'Staff 049', '7AOQL_0049', '90-127-01021', 'staff@keahotelserp.049', '127050 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0050', 'Staff 050', '7AOQL_0050', '90-127-01022', 'staff@keahotelserp.050', '127051 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0051', 'Staff 051', '7AOQL_0051', '90-127-01023', 'staff@keahotelserp.051', '127052 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0052', 'Staff 052', '7AOQL_0052', '90-127-01024', 'staff@keahotelserp.052', '127053 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0053', 'Staff 053', '7AOQL_0053', '90-127-01025', 'staff@keahotelserp.053', '127054 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0054', 'Staff 054', '7AOQL_0054', '90-127-01026', 'staff@keahotelserp.054', '127055 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0055', 'Staff 055', '7AOQL_0055', '90-127-01027', 'staff@keahotelserp.055', '127056 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0056', 'Staff 056', '7AOQL_0056', '90-127-01028', 'staff@keahotelserp.056', '127057 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0057', 'Staff 057', '7AOQL_0057', '90-127-01029', 'staff@keahotelserp.057', '127058 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0058', 'Staff 058', '7AOQL_0058', '90-127-01030', 'staff@keahotelserp.058', '127059 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0059', 'Staff 059', '7AOQL_0059', '90-127-01031', 'staff@keahotelserp.059', '127060 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:53'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0060', 'Staff 060', '7AOQL_0060', '90-127-01032', 'staff@keahotelserp.060', '127061 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0061', 'Staff 061', '7AOQL_0061', '90-127-01033', 'staff@keahotelserp.061', '127062 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0062', 'Staff 062', '7AOQL_0062', '90-127-01034', 'staff@keahotelserp.062', '127063 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0063', 'Staff 063', '7AOQL_0063', '90-127-01035', 'staff@keahotelserp.063', '127064 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0064', 'Staff 064', '7AOQL_0064', '90-127-01036', 'staff@keahotelserp.064', '127065 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0065', 'Staff 065', '7AOQL_0065', '90-127-01037', 'staff@keahotelserp.065', '127066 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0066', 'Staff 066', '7AOQL_0066', '90-127-01038', 'staff@keahotelserp.066', '127067 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0067', 'Staff 067', '7AOQL_0067', '90-127-01039', 'staff@keahotelserp.067', '127068 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0068', 'Staff 068', '7AOQL_0068', '90-127-01040', 'staff@keahotelserp.068', '127069 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0069', 'Staff 069', '7AOQL_0069', '90-127-01041', 'staff@keahotelserp.069', '127070 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0070', 'Staff 070', '7AOQL_0070', '90-127-01042', 'staff@keahotelserp.070', '127071 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0071', 'Staff 071', '7AOQL_0071', '90-127-01043', 'staff@keahotelserp.071', '127072 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0072', 'Staff 072', '7AOQL_0072', '90-127-01044', 'staff@keahotelserp.072', '127073 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0073', 'Staff 073', '7AOQL_0073', '90-127-01045', 'staff@keahotelserp.073', '127074 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0074', 'Staff 074', '7AOQL_0074', '90-127-01046', 'staff@keahotelserp.074', '127075 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0075', 'Staff 075', '7AOQL_0075', '90-127-01047', 'staff@keahotelserp.075', '127076 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0076', 'Staff 076', '7AOQL_0076', '90-127-01048', 'staff@keahotelserp.076', '127077 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0077', 'Staff 077', '7AOQL_0077', '90-127-01049', 'staff@keahotelserp.077', '127078 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0078', 'Staff 078', '7AOQL_0078', '90-127-01050', 'staff@keahotelserp.078', '127079 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc0079', 'Staff 079', '7AOQL_0079', '90-127-01051', 'staff@keahotelserp.079', '127080 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:48:54'),
('e4f2c219f414223be9f1825ceb1dd81ea4abc29544', 'Staff 001', '7AOQL-01468', '90-127-00972', 'staff@keahotelserp.001', '127001 Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2021-02-02 09:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `sys_id` int(20) NOT NULL,
  `sys_name` longtext NOT NULL,
  `sys_license` longblob NOT NULL,
  `sys_logo` varchar(200) NOT NULL,
  `sys_tagline` longtext NOT NULL,
  `welcome_heading` longtext NOT NULL,
  `welcome_content` longtext NOT NULL,
  `contacts_phone` longtext NOT NULL,
  `contacts_email` longtext NOT NULL,
  `contacts_addres` longtext NOT NULL,
  `social_fb` longtext NOT NULL,
  `social_ig` longtext NOT NULL,
  `social_twitter` longtext NOT NULL,
  `contact_about` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`sys_id`, `sys_name`, `sys_license`, `sys_logo`, `sys_tagline`, `welcome_heading`, `welcome_content`, `contacts_phone`, `contacts_email`, `contacts_addres`, `social_fb`, `social_ig`, `social_twitter`, `contact_about`) VALUES
(1, 'Kea Hotels Inc', 0x436f70797269676874203230323020204d617274446576656c6f7065727320496e632e20205065726d697373696f6e20697320686572656279206772616e7465642c2066726565206f66206368617267652c20746f20616e7920706572736f6e206f627461696e696e67206120636f7079206f66207468697320736f66747761726520616e64206173736f63696174656420646f63756d656e746174696f6e2066696c657320287468652022536f66747761726522292c20746f206465616c20696e2074686520536f66747761726520776974686f7574207265737472696374696f6e2c20696e636c7564696e6720776974686f7574206c696d69746174696f6e207468652072696768747320746f207573652c20636f70792c206d6f646966792c206d657267652c207075626c6973682c20646973747269627574652c207375626c6963656e73652c20616e642f6f722073656c6c20636f70696573206f662074686520536f6674776172652c20616e6420746f207065726d697420706572736f6e7320746f2077686f6d2074686520536f667477617265206973206675726e697368656420746f20646f20736f2c207375626a65637420746f2074686520666f6c6c6f77696e6720636f6e646974696f6e733a20205468652061626f766520636f70797269676874206e6f7469636520616e642074686973207065726d697373696f6e206e6f74696365207368616c6c20626520696e636c7564656420696e20616c6c20636f70696573206f72207375627374616e7469616c20706f7274696f6e73206f662074686520536f6674776172652e202054484520534f4654574152452049532050524f564944454420224153204953222c20574954484f55542057415252414e5459204f4620414e59204b494e442c2045585052455353204f5220494d504c4945442c20494e434c5544494e4720425554204e4f54204c494d4954454420544f205448452057415252414e54494553204f46204d45524348414e544142494c4954592c204649544e45535320464f52204120504152544943554c415220505552504f534520414e44204e4f4e494e4652494e47454d454e542e20494e204e4f204556454e54205348414c4c2054484520415554484f5253204f5220434f5059524947485420484f4c44455253204245204c4941424c4520464f5220414e5920434c41494d2c2044414d41474553204f52204f54484552204c494142494c4954592c205748455448455220494e20414e20414354494f4e204f4620434f4e54524143542c20544f5254204f52204f54484552574953452c2041524953494e472046524f4d2c204f5554204f46204f5220494e20434f4e4e454354494f4e20574954482054484520534f465457415245204f522054484520555345204f52204f54484552204445414c494e475320494e2054484520534f4654574152452e, 'DevLogo.png', 'Experience Life Live The Moment', 'Amazing Hotel in front of the Sea', 'Maecenas sollicitudin tincidunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scelerisque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperd iet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus sollicitudin tinci dunt maximus. Morbi tempus malesuada erat sed pellentesque. Donec pharetra mattis nulla, id laoreet neque scele risque at. Quisque eget sem non ligula consectetur ultrices in quis augue. Donec imperdiet leo eget tortor dictum, eget varius eros sagittis. Curabitur tempor dignissim massa ut faucibus.', '+254 7 37 229776', 'hello@keahotels.inc', '127.0.0.1 Localhost', 'KeaHotels', '@keahotels', '@kea_hotels', 0x49742069732061206c6f6e672065737461626c6973686564206661637420746861742061207265616465722077696c6c206265206469737472616374656420627920746865207265616461626c6520636f6e74656e74206f6620612070616765207768656e206c6f6f6b696e6720617420697473206c61796f75742e2054686520706f696e74206f66207573696e67204c6f72656d20497073756d2069732074686174206974206861732061206d6f72652d6f722d6c657373206e6f726d616c20646973747269627574696f6e206f66206c6574746572732c206173206f70706f73656420746f207573696e67205c27436f6e74656e7420686572652c20636f6e74656e7420686572655c272c206d616b696e67206974206c6f6f6b206c696b65207265616461626c6520456e676c6973682e204d616e79206465736b746f70207075626c697368696e67207061636b6167657320616e6420776562207061676520656469746f7273206e6f7720757365204c6f72656d20497073756d2061732074686569722064656661756c74206d6f64656c20746578742c20616e6420612073656172636820666f72205c276c6f72656d20697073756d5c272077696c6c20756e636f766572206d616e7920776562207369746573207374696c6c20696e20746865697220696e66616e63792e20566172696f75732076657273696f6e7320686176652065766f6c766564206f766572207468652079656172732c20736f6d6574696d6573206279206163636964656e742c20736f6d6574696d6573206f6e20707572706f73652028696e6a65637465642068756d6f757220616e6420746865206c696b65292e);

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `admin_id_unique` (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD UNIQUE KEY `assets_id_unique` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD UNIQUE KEY `payrolls_id_unique` (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD UNIQUE KEY `reservations_id_unique` (`id`);

--
-- Indexes for table `resturants`
--
ALTER TABLE `resturants`
  ADD UNIQUE KEY `resturants_id_unique` (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD UNIQUE KEY `rooms_id_unique` (`id`);

--
-- Indexes for table `room_service`
--
ALTER TABLE `room_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD UNIQUE KEY `staffs_id_unique` (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`sys_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD UNIQUE KEY `vendors_id_unique` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `sys_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
