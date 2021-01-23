-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2021 at 08:28 AM
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
('4ef1dbe95fe4b1128ede9b16ff2dcacfc6fd6ab8', 'System Admin', 'sysadmin@kea-hotel-erp.org', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2020-09-23 05:10:23');

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
('4606c74889e9447373351307a73ebfd014687ab4689109d60aa8e55417c80fe1843765ab4e5e10a58ea40144572f1d593fe703aed715eb15aa14ad73e4429a77dcaa113acddba9d62a19e73b2558578cae27d24feaf80c981f405043c38ffe8', 'Cookers', 'LOCDN-87302', '<p><strong>Cooker</strong> may refer to several types of cooking appliances and devices used for <a href=\"https://en.wikipedia.org/wiki/Cooking\" title=\"Cooking\">cooking</a> foods.</p>\r\n\r\n<h2>Cookers</h2>\r\n\r\n<div class=\"thumbinner\" style=\"width:222px\"><a class=\"image\" href=\"https://en.wikipedia.org/wiki/File:Kookplaat_inductie.JPG\"><img alt=\"Glassy smooth featureless rectangular cooktop set nearly flush with a kitchen counter\" height=\"165\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Kookplaat_inductie.JPG/220px-Kookplaat_inductie.JPG\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/3/39/Kookplaat_inductie.JPG/330px-Kookplaat_inductie.JPG 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/3/39/Kookplaat_inductie.JPG/440px-Kookplaat_inductie.JPG 2x\" width=\"220\" /></a>\r\n\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\">&nbsp;</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\" style=\"width:222px\">\r\n<div class=\"thumbcaption\">Top view of an <a href=\"https://en.wikipedia.org/wiki/Induction_cooking\" title=\"Induction cooking\">induction stove</a></div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\" style=\"width:222px\"><a class=\"image\" href=\"https://en.wikipedia.org/wiki/File:Solar_funnel_cooker_with_hot_dogs.jpg\"><img alt=\"\" height=\"124\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Solar_funnel_cooker_with_hot_dogs.jpg/220px-Solar_funnel_cooker_with_hot_dogs.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Solar_funnel_cooker_with_hot_dogs.jpg/330px-Solar_funnel_cooker_with_hot_dogs.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Solar_funnel_cooker_with_hot_dogs.jpg/440px-Solar_funnel_cooker_with_hot_dogs.jpg 2x\" width=\"220\" /></a>\r\n\r\n<div class=\"thumbcaption\">\r\n<div class=\"magnify\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"thumb tright\">\r\n<div class=\"thumbinner\" style=\"width:222px\">\r\n<div class=\"thumbcaption\">Hot dogs being cooked with a <a href=\"https://en.wikipedia.org/wiki/Solar_cooker\" title=\"Solar cooker\">solar funnel cooker</a></div>\r\n</div>\r\n</div>\r\n\r\n<ul>\r\n	<li><a href=\"https://en.wikipedia.org/wiki/AGA_cooker\" title=\"AGA cooker\">AGA cooker</a> &ndash; a heat storage <a href=\"https://en.wikipedia.org/wiki/Stove\" title=\"Stove\">stove</a> and cooker, which works on the principle that a heavy frame made from <a href=\"https://en.wikipedia.org/wiki/Cast_iron\" title=\"Cast iron\">cast iron</a> components can absorb heat from a relatively low-intensity but continuously-burning source, and the accumulated heat can then be used when needed for cooking. Originally heated by slow-burning <a href=\"https://en.wikipedia.org/wiki/Coal\" title=\"Coal\">coal</a>, the Aga cooker was invented in 1922 by the <a href=\"https://en.wikipedia.org/wiki/Nobel_Prize\" title=\"Nobel Prize\">Nobel Prize</a>-winning Swedish physicist <a href=\"https://en.wikipedia.org/wiki/Gustaf_Dal%C3%A9n\" title=\"Gustaf DalÃ©n\">Gustaf Dal&eacute;n</a> (1869&ndash;1937), who was employed first as the chief engineer of the Swedish <a href=\"https://en.wikipedia.org/wiki/AGA_AB\" title=\"AGA AB\">AGA</a> company.</li>\r\n	<li><a href=\"https://en.wikipedia.org/wiki/Cook_stove\" title=\"Cook stove\">Cook stove</a> &ndash; heated by burning <a href=\"https://en.wikipedia.org/wiki/Wood\" title=\"Wood\">wood</a>, <a href=\"https://en.wikipedia.org/wiki/Charcoal\" title=\"Charcoal\">charcoal</a>, <a href=\"https://en.wikipedia.org/wiki/Feces\" title=\"Feces\">animal dung</a> or <a href=\"https://en.wikipedia.org/wiki/Crop_residue\" title=\"Crop residue\">crop residue</a>. Cook stoves are commonly used for cooking and heating food in <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Developing_countries\" title=\"Developing countries\">developing countries</a>.</li>\r\n	<li><a href=\"https://en.wikipedia.org/wiki/Electric_cooker\" title=\"Electric cooker\">Electric cooker</a> &ndash; an electric powered cooking device for heating and cooking of food</li>\r\n	<li><a href=\"https://en.wikipedia.org/wiki/Gas_stove\" title=\"Gas stove\">Gas stove</a> (British English) &ndash; uses <a href=\"https://en.wikipedia.org/wiki/Natural_gas\" title=\"Natural gas\">natural gas</a>, <a href=\"https://en.wikipedia.org/wiki/Propane\" title=\"Propane\">propane</a>, <a href=\"https://en.wikipedia.org/wiki/Butane\" title=\"Butane\">butane</a>, <a href=\"https://en.wikipedia.org/wiki/Liquefied_petroleum_gas\" title=\"Liquefied petroleum gas\">liquefied petroleum gas</a> or other <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Flammable\" title=\"Flammable\">flammable</a> <a href=\"https://en.wikipedia.org/wiki/Gas\" title=\"Gas\">gas</a> as a <a href=\"https://en.wikipedia.org/wiki/Fuel\" title=\"Fuel\">fuel</a> source. Most modern stoves come in a unit with built-in <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Extractor_hood\" title=\"Extractor hood\">extractor hoods</a>.</li>\r\n	<li><a href=\"https://en.wikipedia.org/wiki/Induction_cooking\" title=\"Induction cooking\">Induction cooker</a> &ndash; heats a <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Cooking_vessel\" title=\"Cooking vessel\">cooking vessel</a> with <a href=\"https://en.wikipedia.org/wiki/Induction_heating\" title=\"Induction heating\">induction heating</a>, instead of <a href=\"https://en.wikipedia.org/wiki/Heat_transfer\" title=\"Heat transfer\">infrared radiation</a> from electrical wires or a gas flame as with a traditional cooking stove. For all models of induction cooktop, a cooking vessel must be made of a <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Ferromagnetic\" title=\"Ferromagnetic\">ferromagnetic</a> metal such as cast iron or stainless steel or at least compounded with a steel inlay. Copper, glass and aluminum vessels can be placed on a ferromagnetic interface disk which enables these materials to be used.</li>\r\n	<li><a href=\"https://en.wikipedia.org/wiki/Kitchen_stove\" title=\"Kitchen stove\">Kitchen stove</a> (British English) &ndash; a <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Kitchen_appliance\" title=\"Kitchen appliance\">kitchen appliance</a> designed for the purpose of cooking food. Kitchen stoves rely on the application of <a href=\"https://en.wikipedia.org/wiki/Heat_transfer#Conduction\" title=\"Heat transfer\">direct heat</a> for the cooking process and may also contain an <a href=\"https://en.wikipedia.org/wiki/Oven\" title=\"Oven\">oven</a>, used for <a href=\"https://en.wikipedia.org/wiki/Baking\" title=\"Baking\">baking</a>.</li>\r\n	<li><a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Pressure_cooker\" title=\"Pressure cooker\">Pressure cooker</a> &ndash; heats food quickly because the internal steam pressure from the boiling liquid causes <a href=\"https://en.wikipedia.org/wiki/Superheated_steam#Saturated_steam\" title=\"Superheated steam\">saturated steam</a> (or &quot;wet steam&quot;) to bombard and permeate the food. Thus, higher temperature water vapour (i.e., increased energy), which transfers heat more rapidly compared to dry air, cooks food very quickly.</li>\r\n	<li><a href=\"https://en.wikipedia.org/wiki/Rice_cooker\" title=\"Rice cooker\">Rice cooker</a> &ndash; also referred to as a rice steamer, is an electric <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Kitchen_appliance\" title=\"Kitchen appliance\">kitchen appliance</a> used to boil or steam <a href=\"https://en.wikipedia.org/wiki/Rice\" title=\"Rice\">rice</a>. Electric rice cookers were developed in Japan, where they are known as <em>suihanki</em> (Jap.: ç‚Šé£¯å™¨).<sup><a href=\"https://en.wikipedia.org/wiki/Cooker#cite_note-1\">[1]</a></sup></li>\r\n	<li><a href=\"https://en.wikipedia.org/wiki/Slow_cooker\" title=\"Slow cooker\">Slow cooker</a> &ndash; also known as a <strong>Crock-Pot</strong>, (a trademark that is sometimes used <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Genericized_trademark\" title=\"Genericized trademark\">generically</a> in the US, Canada, Australia and New Zealand), is a <a href=\"https://en.wikipedia.org/wiki/Countertop\" title=\"Countertop\">countertop</a> electrical cooking <a href=\"https://en.wikipedia.org/wiki/Small_appliance\" title=\"Small appliance\">appliance</a> that is used for <a href=\"https://en.wikipedia.org/wiki/Simmering\" title=\"Simmering\">simmering</a>, which requires maintaining a relatively low temperature. It allows for the unattended cooking for many hours of <a href=\"https://en.wikipedia.org/wiki/Pot_roast\" title=\"Pot roast\">pot roast</a>, <a href=\"https://en.wikipedia.org/wiki/Stew\" title=\"Stew\">stews</a>, <a href=\"https://en.wikipedia.org/wiki/Soup\" title=\"Soup\">soups</a>, <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Boiled_dinner\" title=\"Boiled dinner\">&quot;boiled&quot; dinners</a> and other suitable dishes, including dips, desserts and beverages.</li>\r\n	<li><a href=\"https://en.wikipedia.org/wiki/Solar_cooker\" title=\"Solar cooker\">Solar cooker</a> &ndash; a device which uses the energy of direct sunlight to heat, cook or <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Pasteurize\" title=\"Pasteurize\">pasteurize</a> food or drink. Many solar cookers presently in use are relatively inexpensive, <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Low-tech\" title=\"Low-tech\">low-tech</a> devices, although some are as powerful or as expensive as traditional stoves,<sup><a href=\"https://en.wikipedia.org/wiki/Cooker#cite_note-2\">[2]</a></sup> and advanced, large-scale solar cookers can cook for hundreds of people.<sup><a href=\"https://en.wikipedia.org/wiki/Cooker#cite_note-3\">[3]</a></sup></li>\r\n	<li>The Cooker is the given name to a coin-activated robot made out of an oven and storage cabinet that patrols the moon, as seen in the 1989 <a href=\"https://en.wikipedia.org/wiki/Wallace_and_Gromit\" title=\"Wallace and Gromit\">Wallace and Gromit</a> short, <em><a href=\"https://en.wikipedia.org/wiki/A_Grand_Day_Out\" title=\"A Grand Day Out\">A Grand Day Out</a></em>. It is very protective of the moon and becomes hostile when it discovers that <a href=\"https://en.wikipedia.org/wiki/Wallace_and_Gromit\" title=\"Wallace and Gromit\">Wallace and Gromit</a> have landed there. It secretly has a lifelong dream of skiing. As well as being called The Cooker, an audio adaptation of <em>A Grand Day Out</em> refers to it as The Moon Machine.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Cookers</li>\r\n	<li>\r\n	<div style=\"width:235px\">\r\n	<div class=\"thumb\" style=\"width:230px\">\r\n	<div style=\"margin-bottom:15px; margin-left:15px; margin-right:15px; margin-top:15px\"><a class=\"image\" href=\"https://en.wikipedia.org/wiki/File:Gas_stove.jpg\"><img alt=\"\" height=\"160\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Gas_stove.jpg/104px-Gas_stove.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/9/99/Gas_stove.jpg/156px-Gas_stove.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/9/99/Gas_stove.jpg/208px-Gas_stove.jpg 2x\" width=\"104\" /></a></div>\r\n	</div>\r\n\r\n	<div class=\"gallerytext\">\r\n	<p>A <a href=\"https://en.wikipedia.org/wiki/Gas_stove\" title=\"Gas stove\">gas stove</a></p>\r\n	</div>\r\n	</div>\r\n	</li>\r\n	<li>\r\n	<div style=\"width:235px\">\r\n	<div class=\"thumb\" style=\"width:230px\">\r\n	<div style=\"margin-bottom:15px; margin-left:15px; margin-right:15px; margin-top:15px\"><a class=\"image\" href=\"https://en.wikipedia.org/wiki/File:Iron_stove.jpg\"><img alt=\"\" height=\"160\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Iron_stove.jpg/160px-Iron_stove.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/5/53/Iron_stove.jpg/240px-Iron_stove.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/53/Iron_stove.jpg/320px-Iron_stove.jpg 2x\" width=\"160\" /></a></div>\r\n	</div>\r\n\r\n	<div class=\"gallerytext\">\r\n	<p>A wood-burning iron <a href=\"https://en.wikipedia.org/wiki/Kitchen_stove\" title=\"Kitchen stove\">kitchen stove</a></p>\r\n	</div>\r\n	</div>\r\n	</li>\r\n	<li>\r\n	<div style=\"width:235px\">\r\n	<div class=\"thumb\" style=\"width:230px\">\r\n	<div style=\"margin-bottom:30px; margin-left:30px; margin-right:30px; margin-top:30px\"><a class=\"image\" href=\"https://en.wikipedia.org/wiki/File:Pressure_cooker.jpg\"><img alt=\"\" height=\"130\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Pressure_cooker.jpg/200px-Pressure_cooker.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/5/58/Pressure_cooker.jpg/300px-Pressure_cooker.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/5/58/Pressure_cooker.jpg/400px-Pressure_cooker.jpg 2x\" width=\"200\" /></a></div>\r\n	</div>\r\n\r\n	<div class=\"gallerytext\">\r\n	<p>A <a class=\"mw-redirect\" href=\"https://en.wikipedia.org/wiki/Pressure_cooker\" title=\"Pressure cooker\">pressure cooker</a></p>\r\n	</div>\r\n	</div>\r\n	</li>\r\n	<li>\r\n	<div style=\"width:235px\">\r\n	<div class=\"thumb\" style=\"width:230px\">\r\n	<div style=\"margin-bottom:20px; margin-left:20px; margin-right:20px; margin-top:20px\"><a class=\"image\" href=\"https://en.wikipedia.org/wiki/File:Oval_Crock_Pot2.jpg\"><img alt=\"\" height=\"150\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Oval_Crock_Pot2.jpg/200px-Oval_Crock_Pot2.jpg\" srcset=\"//upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Oval_Crock_Pot2.jpg/300px-Oval_Crock_Pot2.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Oval_Crock_Pot2.jpg/400px-Oval_Crock_Pot2.jpg 2x\" width=\"200\" /></a></div>\r\n	</div>\r\n\r\n	<div class=\"gallerytext\">\r\n	<p>A <a href=\"https://en.wikipedia.org/wiki/Slow_cooker\" title=\"Slow cooker\">slow cooker</a> with button controls and a digital timer</p>\r\n	</div>\r\n	</div>\r\n	</li>\r\n</ul>\r\n', 'Operational', '2020-09-26 10:14:55');

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
('08b0d4590b7c1f680a6da9835c4fe8956c017d3ea342645005ffe1dbe3e116adace947f4bdccb35eb5cb27597430e4d557007de129ce308af6ef518211cde936bf4819317f99e02174fe19468d6995f5fa01ea1f2a2f70f7965ee70b55ef092', 'S63EDU5M79', '12500', 'MartDevelopers Inc', 'Reservations', 'Credit Card', '', 'Sep', '2020-09-28 07:46:30'),
('4a032d62d0426f9f866ce947436982c004a466f9e15acaf9a6b708572fb9908a09dd7eff9a6fc76b86549beb0a09565b209bfda631655aab2e20151db08b9ae3e85dede062af05d0c5ca902e056fb62285c8d380e5498fe6dee448c5a8f960d', '0AQWK6PD9M', '56000', 'Jane q', 'Reservations', 'Mpesa', '', 'Sep', '2020-09-28 07:46:39'),
('4acfa7a04df86791a7515352b39a33c67317f8e53c2685ce9fdb1b95596176cf2b0a67342e455d8b82ace1ae361f9a7407f6fc188c2dcd1674d6738dfa6b39ca7b16745d1ef84f894786eb1dc7d6f2cb363c4c9f9a6be7ed3c179b9da23dc41', 'QK084EL56B', '24000', 'JFK INC', 'Reservations', 'Airtel Money', '', 'Sep', '2020-09-28 07:46:48'),
('652706108061f396cc06ed6e032884b669f276e59598c62fc41a63ffef40af830c1274de87eb1126148aea4a30d0162b8d490d233db1e423829ba7d017ac1fa2c9fe0ababb2d07fbf31689a15da02d093bbaaebe4ad643b8bc7dca330704326', '5OYXEBWQT7', '15000', 'Lorem G Ipsum', 'Reservations', 'Credit Card', '', 'Sep', '2020-09-28 11:02:06'),
('7a5505530702c3f01b91b0803d032416b8b04a881fe9f9620054eadbdee028be47cccf11d8c68b1e36a19975a9f9d88daa4839f6ca2b192186f785a7e99e49136824fc825c0d75b1fd0aea229f19df45cdfca74803bbcef9f5fa262e53db44b', '2XTGP9VFI0', '4500', 'Jane F Doe', 'Resturant Sales', 'Cash', '', 'Jan', '2020-09-25 11:53:23'),
('8d13e4d0154af6e52dd9f22d8979c38b702052a53e4ac9a038f15124a89c47b88f14c0432e5207c8df48aa006fc851ab2d9396dc6ddf15f83401390c7aedc88e028306996e1d81b096f98521806c8584672a2db688f599033ce7ae66b3ba86b', 'S2D7NBWX8I', '16500', 'Lorem Ipsum', 'Reservations', 'Mpesa', '', 'Sep', '2020-09-27 16:38:01'),
('b4d7d61d2b8bcac6cd09a9d35d6fed1a4cd92d1b65e73ba64bc22245aa7f35d02ef3a04224737e700a058ed8d8d5920aa42da2ef5474eb4386918e5fd089456ad18e7968521eef94b3f770f02e4a3f2a8aede4ca6235497d6243deaca918c11', 'SONXT7DY5W', '22000', 'Jane F Doe', 'Reservations', 'Cash', '', 'Sep', '2020-09-26 10:46:07'),
('b83f43c3dc0dd231642efc39af12db93fe54bb0acf357af62386843c034b7067e2ec050badf8e6e450b60396256e89aeed3082d5837136dbe32f7a59809be9b2c5f5dd140a546d37be5e77f9f7152e5bf6eea0ca8fc71eac46b17b674dcaf0d', '650X7ZL2MW', '12500', 'Jane F Doe', 'Reservations', 'Credit Card', '', 'Sep', '2020-09-25 11:51:20'),
('c702b3ca741b6c89ec2173980e0ab1802457627d86f830567e6fdc0edd2f1323f0f9de3c7d02aa6b3b86f1ff77dab328b5df3361426b6f322767f000bb40803d1305fc7f64fa7218fc33e78f8e4d315af63f9c9e56e2220d966a1b4f32b736d', 'F9R8M4DO1P', '3500', 'Jane F Doe', 'Resturant Sales', 'Credit Card', '', 'Sep', '2020-09-25 09:52:17'),
('cf71ed4ee7e543913d175cc058d0ae3545fc98b9aee0b43ed38b5fd70e936a406351e1f4a5b4a61d09f06c686d9c272beb4e01db66905af3324784afd64abdbb6a2ed5f336db34fbbb424745a23beb76003769d83339a3d7b33e124b578cd11', 'HP0VRYZI48', '25000', 'MartDevelopers  Crew', 'Reservations', 'Credit Card', '', 'Sep', '2020-09-28 07:46:19'),
('ff9d2ef8b20e536561e10f6cc763607ed801c6f11612029b9fd99d41402a00cc3c0069dd7e8df25984a7fd126be3685eac7a37df2acaee67c892edd0f3f2d98bbab1f50850822b35d225bc010cf0ae6200da451d249080e281446eab34bebce', 'K3LDUQXEYB', '5690', 'FJKF567Inc', 'Resturant Sales', 'Cash', '', 'Sep', '2020-09-28 10:54:00');

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
('8ed6032767014826d0b38c5a265965', 'RKPEF-30415', 'January', 'e28362d26eb1bb3c8cff880563ee638b23ad6ad73038fba9f8ea43eedde076ae72e409652d40ed3f514e19f6a5790ee61f2417dd7111b15e0c51c09198f2a98bd2b171fe396f103a4fa08f2e89b2eae3db01fd40e1b224bb6c4f9769e02ad9e', 'Jane Doe', '5600', '2020-09-24 08:48:41'),
('d01a59e225d7329ef2cd2b1fc31929', 'BPKCV-86391', 'January', '43ab1faceab515fcb1fcf737eda4ad52dcbd99a6bd2b7007739c4db35e917a7d739c2eef5de444a7fd5c6236b10941239f1c64a8f42f3e540be4488d71ae5f0f6d0a959135e1408e32e62e427aabc4acad69f3141b02463dda5061d5dbac0b0', 'Martdevelopers Inc', '4500', '2020-09-24 09:05:10');

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
('0b8afd6949ae2d99ab632570ccba065facee09ecf70828756c662b1f558ecc7d4fc32da61351b5fecf25e14d5006ea8a5e770c0c9bd1995ef3022c341792cf1cf7058586e760d61bd83ebb796c00a3f4cc581aad0f8dac2281a56a0377d8f82', '8b06b2f2e0e3a49dab2390265b89ddca05db0c6fac5dacb86be1d75bf1a9b39907fefd9c28a109380acf899628ea19c71667273d02c15fed3dff12477a246f5378da7ebff7a9e62462fb0e2823f1fe010347ac033219046f5b2a7b824afc7b1', 'URAXQ-90416', '12000', 'Regular Suite', '2020-09-28', '2020-09-30', 'JFK INC', '65453423245678', '856454390', 'jfkinc@mail.com', '12890', 'Paid', '2020-09-28 07:46:48'),
('133db5d855466cd83362905cdb21a57aed274aac36c700b0440f8735f0ea3ef567650495df56ab64c1a02833ff2cb9e6875453c4dac1131e61c31a22a5b628ccb7d3281aea89c2d790aad9fde98fc6a50ad900d3bf44971e97185d4723deeea', 'aab8e6b55f219c44eb0c599fae9b9eb707bb54aec6241a2b9b743db9b0ee0cec924f9ad830f93afde5b3895388314e400d6574e9006f253c9968849d22afaec157732bd9b7af9a547a34b501a2de1b3e69376510339a9976aae63fe74ef78e6', 'APFQW-06324', '2500', 'Single Rooms', '2020-09-29', '2020-10-09', 'MartDevelopers  Crew', '34589754', '+25473722987', 'crew@martdev.info', '127001  - Localhost', 'Paid', '2020-09-28 07:46:19'),
('484a0e595727a219c62c847f765e84e4acc176c5a1d66b43b445d9fa10f4117f969f0ee49afdaa58109b2f79c9e8bc07ba4c2490adf32d30d4d03ff1c4ec92d52d91c552b608bc146a2dd643808d5fccd763a399b927f0af9c417c27b962c33', 'aab8e6b55f219c44eb0c599fae9b9eb707bb54aec6241a2b9b743db9b0ee0cec924f9ad830f93afde5b3895388314e400d6574e9006f253c9968849d22afaec157732bd9b7af9a547a34b501a2de1b3e69376510339a9976aae63fe74ef78e6', 'APFQW-06324', '2500', 'Single Rooms', '2020-09-25', '2020-09-30', 'Jane F Doe', '355765986', '+254737229776', 'janefdoe@mail.com', '127-001-Localhost', 'Paid', '2020-09-25 11:51:21'),
('59542433d7edcb6efb31300cce41fe636f7448581f7afb367db00f4ee244d159d7dee527f772d6cb090d23a4a3535d61a3a164a064a9be6ae5cdb854052d8265f4aefe5814ffdb2f23a1e25239655872c666c09e6ae7d544a1c9af14e4675ff', 'cbdaea0daf511218d65548cc8c52b4d99a23d5fe60705c41f1b9b8e47e142beaacb9653ba954dead702a0ac0f2b172922f661709a43287ccafcbfd4315c53f97293a1f2084f2cd718dd2b55a172558935545c03112ed2ef14f4bb7816551329', 'XDWEC-89731', '1500', 'Single Rooms', '2020-09-30', '2020-10-10', 'Lorem G Ipsum', '12309865', '+89743211908', 'loremg@mail.com', '127001 - Localhost', 'Paid', '2020-09-28 11:02:06'),
('5c297f6e6c74d6842ae00b7659fb071ca7c25c24fe7fd1d2b916095f4cdedf7d1a09a8b1e95b95643acbe6dba91939a99192b583497c045db22f07ce838cf0deec21b11975296767794f6313fcdfef7191bc417c795049f95925ec45bc6ecb1', 'de354046e932fa2569d3877751138de8cb69e973025ac491dc3f4756c91c70fbfdb53739ad6811007111977c2673b9607a39f1936e87b7382a4ee8fe5803d79e89cbcc24a97d7f2d992ce949734a9a5005485a7aeba354c695df70aaf091d01', 'FLKGE-08274', '7000', 'Deluxe Rooms', '2020-10-01', '2020-10-09', 'Jane q', '126754309', '+90842694827', 'jane@mail.com', '127001 - Localhost', 'Paid', '2020-09-28 07:46:39'),
('861b65f3563f4b8fa6c62fc3c40ded42f91e6c4cd32e39c73f8dec4f903bd5fe3b092d8e832d15e9051ea2479871c0749aad44f610748ebed31b3ba21705f194cfdf33cb08817e8008d41858a3092a411658b503091da3a6b0cff786d7e244e', '1cb9c0741c113696b3f2ac8933e8142e105477591da5bdc2bfe361890ed8075ac164d3a3ad807b60917349951d7029488d98766fa55f348f0f281582b62c87fb830534ad141a23c3c465d2855dbf69a97f4b6b6fd1dbe4bb14f43dc0c92de24', 'OTICN-26084', '5500', 'Double Rooms', '2020-09-27', '2020-09-30', 'Lorem Ipsum', '355765986', '+254737229776', 'lorem@mail.com', '127-001-Localhost', 'Paid', '2020-09-27 16:38:01'),
('b4ebfb29d0a8035c11cb4f00f768e813853f4cb51183098169d1281e68ceb36b34e24754d989f847fb3a12e0eac795125322cdc9b5a4825c09f0d41164a4f58195ddb7beb82653d84402d7e2f3ff14fef260e3f6ed82a754c3f4a7c5ba5ae3c', 'aab8e6b55f219c44eb0c599fae9b9eb707bb54aec6241a2b9b743db9b0ee0cec924f9ad830f93afde5b3895388314e400d6574e9006f253c9968849d22afaec157732bd9b7af9a547a34b501a2de1b3e69376510339a9976aae63fe74ef78e6', 'APFQW-06324', '2500', 'Single Rooms', '2020-09-28', '2020-10-03', 'MartDevelopers Inc', '35574881', '+254737229776', 'mart@martdev.info', '127001-machakos', 'Paid', '2020-09-28 07:46:30'),
('c9f38c1cce49883bdce0c1830fb5f41c00c40e9d328108f73fa41e992965b82ddf5dbc163209d4a6d70e98e8d5c8d484bb8232508a16cad3d6f041aab42e6ede389cb9e0f82173872cb400f4d2888366d1a9a0feabd1710663535500f25719d', '1cb9c0741c113696b3f2ac8933e8142e105477591da5bdc2bfe361890ed8075ac164d3a3ad807b60917349951d7029488d98766fa55f348f0f281582b62c87fb830534ad141a23c3c465d2855dbf69a97f4b6b6fd1dbe4bb14f43dc0c92de24', 'OTICN-26084', '5500', 'Double Rooms', '2020-09-26', '2020-09-30', 'Jane F Doe', '654329089', '+254737229776', 'janefdoe@mail.com', '127-001-Localhost', 'Paid', '2020-09-26 10:46:07');

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
('1cb9c0741c113696b3f2ac8933e8142e105477591da5bdc2bfe361890ed8075ac164d3a3ad807b60917349951d7029488d98766fa55f348f0f281582b62c87fb830534ad141a23c3c465d2855dbf69a97f4b6b6fd1dbe4bb14f43dc0c92de24', 'OTICN-26084', 'Double Rooms', 'standard-double-room.jpg', '5500', 'Occupied', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-25 11:38:58'),
('42bf39a56bbe0d5f94ab34ce72235675e04de38d808a2e4b39e77b0803979d5582693eae91a41ecb52889ee82911681d89c13556ba10a649a48d97aed866fcedae8a5b387e9aa6260f85f7eeacf96e7b090153e30844e59c18b9e65deb9cc19', 'MCDQI-45210', 'Penthouse Suites', 'penthouse-suite.jpg', '25000', 'Vacant', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-25 09:17:25'),
('8b06b2f2e0e3a49dab2390265b89ddca05db0c6fac5dacb86be1d75bf1a9b39907fefd9c28a109380acf899628ea19c71667273d02c15fed3dff12477a246f5378da7ebff7a9e62462fb0e2823f1fe010347ac033219046f5b2a7b824afc7b1', 'URAXQ-90416', 'Regular Suite', 'regular_suites.jpg', '12000', 'Occupied', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-28 07:44:44'),
('aab8e6b55f219c44eb0c599fae9b9eb707bb54aec6241a2b9b743db9b0ee0cec924f9ad830f93afde5b3895388314e400d6574e9006f253c9968849d22afaec157732bd9b7af9a547a34b501a2de1b3e69376510339a9976aae63fe74ef78e6', 'APFQW-06324', 'Single Rooms', 'Single-room1.jpg', '2500', 'Vacant', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n', '2020-09-28 10:58:04'),
('b6ff834267fd3928e443b85eb3ce049ede61de7f491e06591fb99b0c225a279cd509f2cba6838237a7d580f32e1236689164dd3bdae4974969c7806a49eb9cba13abcc97e521a25004bb517f8501da8244e34f1cb777ed4274a21f07adaab88', 'ZYGMV-17624', 'Presidential Suites', 'Presidential-suite.jpg', '30000', 'Vacant', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-28 07:27:47'),
('cbdaea0daf511218d65548cc8c52b4d99a23d5fe60705c41f1b9b8e47e142beaacb9653ba954dead702a0ac0f2b172922f661709a43287ccafcbfd4315c53f97293a1f2084f2cd718dd2b55a172558935545c03112ed2ef14f4bb7816551329', 'XDWEC-89731', 'Single Rooms', 'Single-room1.jpg', '1500', 'Occupied', '<p>Standard Rooms provides guests with a:</p>\r\n\r\n<ul>\r\n	<li>King Sized/twin beds,</li>\r\n	<li>color TV with satellite channels,</li>\r\n	<li>attached bath room with 24 hrs. hot and cold water</li>\r\n	<li>Free Wi-Fi Internet access</li>\r\n	<li>telephone facilities.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '2020-09-28 07:39:22'),
('de354046e932fa2569d3877751138de8cb69e973025ac491dc3f4756c91c70fbfdb53739ad6811007111977c2673b9607a39f1936e87b7382a4ee8fe5803d79e89cbcc24a97d7f2d992ce949734a9a5005485a7aeba354c695df70aaf091d01', 'FLKGE-08274', 'Deluxe Rooms', 'deluxe-king-2.jpg', '7000', 'Occupied', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-28 07:42:02');

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
('6003849721583c13bdd94d529f4f56aae6c8f981e282db40f172e38014934bac76ea0214c354624ff06c26c27f4f667b7fc9870a4ce458d82d6f1d58c1aff3aa586427f7c6aa6fb72971c219404fd16982c536f235b1883d014f6ae418bc5f13908dfd11', 'de354046e932fa2569d3877751138de8cb69e973025ac491dc3f4756c91c70fbfdb53739ad6811007111977c2673b9607a39f1936e87b7382a4ee8fe5803d79e89cbcc24a97d7f2d992ce949734a9a5005485a7aeba354c695df70aaf091d01', '7287fc24d6e09a28a235b96ff7981f5849f5c18302a45a0d03af1c3291fb8d54fb6c389b1fc97f3581161cdcf4e533d3cc275f0ea27123d3c430eb30dc0c1f3ff0b4c1b04059edbd71fc9bc1b80161a7ae18c25df48648e68f65d11b0ad9c8a', 'Priscilla R. Morales', 'XKFIW-64023', 'FLKGE-08274', '2020-09-25 09:20:38'),
('7291c44a38ac4525b8ee736d46b810e7f17ae7484ff8d8c1f1707313ad1292cfd48b3641d4b4b573621cb637fafb91288ad2f7223c116b884f357895389fe1038f30100cd6abb6e58a48a63853895ad0a26b78b1e1c9f6a6e4f14df2f3cab73d3357f950', 'aab8e6b55f219c44eb0c599fae9b9eb707bb54aec6241a2b9b743db9b0ee0cec924f9ad830f93afde5b3895388314e400d6574e9006f253c9968849d22afaec157732bd9b7af9a547a34b501a2de1b3e69376510339a9976aae63fe74ef78e6', '43ab1faceab515fcb1fcf737eda4ad52dcbd99a6bd2b7007739c4db35e917a7d739c2eef5de444a7fd5c6236b10941239f1c64a8f42f3e540be4488d71ae5f0f6d0a959135e1408e32e62e427aabc4acad69f3141b02463dda5061d5dbac0b0', 'Martdevelopers Inc', 'ERKDB-64075', 'APFQW-06324', '2020-09-24 13:47:11'),
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
  `dpic` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `number`, `phone`, `email`, `adr`, `password`, `dpic`, `bio`, `created_at`) VALUES
('43ab1faceab515fcb1fcf737eda4ad52dcbd99a6bd2b7007739c4db35e917a7d739c2eef5de444a7fd5c6236b10941239f1c64a8f42f3e540be4488d71ae5f0f6d0a959135e1408e32e62e427aabc4acad69f3141b02463dda5061d5dbac0b0', 'Martdevelopers Inc', 'ERKDB-64075', '+254723473411', 'martdevelopers254@gmail.com', '127001-Machakos', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'header.jpg', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-24 08:27:21'),
('630877b16604abb4068e93aa67b8b80f9774b72fdb4cecac2930bf9ca1b3d13db3e8516fee8e167904b1c003d4fbfd7f519021497f916e0e74555121f3c4e99a5f95fa9b62e79e9e570e253f3f3a146a91ac85fafc3ce7ff27b6882360b7c9e', 'Irene M. Florence', 'UDIJG-47023', '619-399-6851', 'IreneMFlorence@rhyta.com ', '4477 Ashcraft Court California, CA 02110 ', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'header.jpg', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-24 08:32:47'),
('7287fc24d6e09a28a235b96ff7981f5849f5c18302a45a0d03af1c3291fb8d54fb6c389b1fc97f3581161cdcf4e533d3cc275f0ea27123d3c430eb30dc0c1f3ff0b4c1b04059edbd71fc9bc1b80161a7ae18c25df48648e68f65d11b0ad9c8a', 'Priscilla R. Morales', 'XKFIW-64023', '707-735-9720', 'PriscillaRMorales@armyspy.com ', '3958 Davis Avenue Fremont, CA 94539 ', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'header.jpg', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-24 08:35:18'),
('8ef516fdeba0c8204cedd46c6f46be2b4f1ad9e79c9605ad925a22e85daf0d9a182cf8f36f180b75ceb47dbb89ac9c58c2cff1ad1472bb3802202c66373702771e3ba4502e88203e114c29970f7761bd190cda7f3fd61d78fd32d66f73b0563', 'Susan B. Dunbar', 'ONJKQ-14927', '  +1 703-321-2328', 'SusanBDunbar@jourrapide.com ', '635 Golf Course Drive Fairfax, VA 22032 ', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'header.jpg', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-24 08:33:50'),
('a8a57ebc40e272fae23e34f8d1925b72ae893acd61864f0ee1d1e200d7ab8a073dbfdfdc8c7ae1480581b257338671a23ad24da323c87c0ed6395bff9911c7beea8638555a51f942cce805dd0f53e2b2ddd16314856681a7bb1a5fe46289900', 'John Doe', 'VCAFN-71293', '+254 715 099769', 'johndoe@gmail.com', '127001-Localhost', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'header.jpg', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-24 08:29:23'),
('e28362d26eb1bb3c8cff880563ee638b23ad6ad73038fba9f8ea43eedde076ae72e409652d40ed3f514e19f6a5790ee61f2417dd7111b15e0c51c09198f2a98bd2b171fe396f103a4fa08f2e89b2eae3db01fd40e1b224bb6c4f9769e02ad9e', 'Jane Doe', 'SYWTH-76941', '+254723473411', 'johndoe@gmail.com', '127001 Localhost', 'adcd7048512e64b48da55b027577886ee5a36350', 'header.jpg', '<div class=\"jqDnR\" id=\"idTextPanel\">\r\n<p style=\"text-align:left\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>\r\n</div>\r\n', '2020-09-28 10:11:51');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
