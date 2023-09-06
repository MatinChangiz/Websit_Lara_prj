-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2023 at 11:58 AM
-- Server version: 10.3.38-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssawooo090_ssawo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO 70 bed DTC - Balkh', 'SSAWO has established a 70 bed drug treatment center in Mazar e Sharif, Balkh. At this center, women, children and out patient beneficiaries and clients are being treated.', '04112023080558643514e6459eb.jpg', '2023-04-11 03:35:58', '2023-04-11 03:35:58'),
(2, 'SSAWO 70 Bed Center - Balkh', 'Since the opening of the center, many women, children and adolescents have been treated and provided with vocational, educational and livelihood programs.', '041120230808266435157a23df8.jpg', '2023-04-11 03:38:26', '2023-04-11 03:38:26'),
(3, '50 Bed Adolescent DTC - Kabul', 'In 2012, SSAWO established a 50 bed adolescent center to treat Afghan adolescents who suffered from addiction in Afghanistan. since then, hundreds of Afghan adolescents have been treated and provided with education programs at this center.', '041120230811416435163d8b74b.jpg', '2023-04-11 03:41:41', '2023-04-11 03:41:41');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_firsts`
--

CREATE TABLE `about_us_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_firsts`
--

INSERT INTO `about_us_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Services Deliveries', 'Since its establishment, SSAWO has delivered services for thousands of Aghan men, women, children and adolescents in different provinces of Afghanistan. As a result of these services, many Afghan men, women, children and adolescents are living a healthy life.', '041120230800246435139831cb9.jpg', '2023-04-11 03:30:24', '2023-04-11 03:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `about_us_headers`
--

CREATE TABLE `about_us_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us_headers`
--

INSERT INTO `about_us_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'SSAWO', 'SSAWO is a local, non-governmental, non-political and women-led organization in Afghanistan. SSAWO is providing services for the targeted beneficiaries and clients in different areas including drug demand reduction, education, livelihood, vocations, literacy and numeracy, democracy and peace.', '04112023075658643512ca18862.jpg', '2023-04-11 03:26:58', '2023-04-11 03:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `career_firsts`
--

CREATE TABLE `career_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `applyBy` date NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_firsts`
--

INSERT INTO `career_firsts` (`id`, `title`, `location`, `applyBy`, `description`, `created_at`, `updated_at`) VALUES
(1, '2 Male Guards', 'Mazar e Sharif, Balkh', '2023-04-30', 'About SSAWO:\r\nThe Social Services for Afghan Women Organization (SSAWO) is an Afghan local non-governmental and women led organization that was established in 2007 Registered with ministry of Economy of Islamic Republic of Afghanistan. SSAWO envisions the well-being of Afghans with a focus on Afghan women and youth by building their capacity and involving them in the educational, health, social, cultural and economic development of the homeland.  SSAWO is based in Kabul with regional offices in Jalalabad and Laghman provinces. \r\nPosition 	Guard \r\nNumber	2\r\nLocation	Balkh\r\nSalary 	As per company policy\r\nDuration 	1 year with extension possibility', '2023-04-12 00:53:18', '2023-04-12 01:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `career_headers`
--

CREATE TABLE `career_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_headers`
--

INSERT INTO `career_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO', 'SSAWO is proud to hire professional and expert Afghan men and women in different positions based on their eligibilities and qualifications and based on the sound and transparent test processes and criteria.', '0412202305182564363f2132025.jpg', '2023-04-12 00:48:25', '2023-04-12 00:49:50');

-- --------------------------------------------------------

--
-- Table structure for table `contact_firsts`
--

CREATE TABLE `contact_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_firsts`
--

INSERT INTO `contact_firsts` (`id`, `title`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Main Office - Kabul', 'Sulaiman Yari St. Dehbouri, Kabul, Afghanistan', '930-798-161-694', 'ssawoaf@gmail.com', '2023-04-12 00:33:33', '2023-04-12 00:36:32'),
(2, 'Provincial Office - Balkh', 'Khaled Ben Valid Project, Mazar e Sharif, Balkh', '930-792-597-376', 'marziadeedar@gmail.com', '2023-04-12 00:40:12', '2023-04-12 00:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact_headers`
--

CREATE TABLE `contact_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_headers`
--

INSERT INTO `contact_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Contact Way', 'Email Add: ssawoaf@gmail.com\r\nWebsite: WWW.ssawo.com', '041120230925026435276e5b1da.jpg', '2023-04-11 04:55:02', '2023-04-11 04:55:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fight_poverties`
--

CREATE TABLE `fight_poverties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `title2` varchar(255) NOT NULL,
  `description2` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `imageicon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fight_poverties`
--

INSERT INTO `fight_poverties` (`id`, `title`, `description`, `title2`, `description2`, `image`, `image2`, `imageicon`, `created_at`, `updated_at`) VALUES
(1, 'Saving Children from Drug and Addiction', 'In the last few years, thousands of addicted beneficiaries and clients have been treated, trained with different vocations and educated. After discharges from these centers, these beneficiaries and clients have reaped benefits from their vocations and education.', 'Addicted Clients and Beneficiaries', 'The addicted clients and beneficiaries have gathered based on community awareness, assessment and evaluation.', '040120230620036427cd1347371.jpg', '040120230630496427cf997176f.jpg', '041220230553106436474632436.jpg', '2023-04-01 01:46:51', '2023-04-12 01:23:10'),
(3, 'Livelihood Skills', 'SSAWO is committed to pave the way for Afghan women to acquire vocational skills, so they can be able to make their own incomes and run their lives financially independently.', 'Carpet Weaving Skills', 'One of the vocational skills SSAWO is creating is carpet weaving. Through this skill, women will be able to make a good living.', '04122023055503643647b74ee78.jpg', '041220230549186436465e18881.jpg', '041220230553336436475d95bd7.jpg', '2023-04-12 01:19:18', '2023-04-12 01:25:03'),
(4, 'Safe Children', 'One of the commitments of SSAWO is to create a safe and sound environment for Afghan children. Through this safe environment, the children grow healthy and smart.', 'Exercise for Children', 'SSAWO has set the schedule for children to do exercise daily to keep a healthy and strong body.', '0412202306025764364991181b9.jpg', '04122023060257643649911891b.jpg', '041220230602576436499118ea0.jpg', '2023-04-12 01:32:57', '2023-04-12 01:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `index_firsts`
--

CREATE TABLE `index_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `index_firsts`
--

INSERT INTO `index_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Drug Demand Reduction', 'SSAWO has endlessly worked since 2007 to reduce or annihilate the substances uses and drug demand in Afghanistan.', '040120230638476427d177b0b61.jpg', '2023-04-01 02:08:47', '2023-04-01 02:08:47'),
(2, 'Handicrafts for Afghan Women', 'SSAWO has created the opportunities for Afghan women to acquire handicrafts skills. Handicrafts skill is one of the best ways to make money.', '0412202306084264364aeac257c.jpg', '2023-04-12 01:37:02', '2023-04-12 01:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `index_headers`
--

CREATE TABLE `index_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `index_headers`
--

INSERT INTO `index_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Drug Treatment Centres', 'SSAWO has created DTCs in different provinces of Afghanistan since 2007 to treat addicted men, women, children and adolescents.', '040120230610006427cab83dfbe.jpg', '2023-04-01 01:38:35', '2023-04-01 01:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `index_seconds`
--

CREATE TABLE `index_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `index_seconds`
--

INSERT INTO `index_seconds` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Rural Based Projects', 'More than 500 addicted men have been treated through the Rural Based Project in Jawzjan Province of Afghanistan by SSAWO.', '04062023082009642e80b919585.jpg', '2023-04-06 03:50:09', '2023-04-06 03:50:49'),
(3, 'Tailoring for Afghan Women', 'Afghan women have talents for tailoring. Therefore, SSAWO has provided this chance for them to learn this skill and find their income sources.', '0412202306125164364be30bc74.jpg', '2023-04-12 01:42:51', '2023-04-12 01:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_19_202953_create_press_models_table', 1),
(6, '2023_02_21_045308_create_fight_poverties_table', 1),
(7, '2023_03_03_192233_create_index_headers_table', 1),
(8, '2023_03_04_042828_create_index_firsts_table', 1),
(9, '2023_03_04_042947_create_index_seconds_table', 1),
(10, '2023_03_04_054235_create_tab_one_headers_table', 1),
(11, '2023_03_04_054443_create_tab_one_firsts_table', 1),
(12, '2023_03_04_054457_create_tab_one_seconds_table', 1),
(13, '2023_03_04_054515_create_tab_one_thirds_table', 1),
(14, '2023_03_05_050919_create_tab_two_headers_table', 1),
(15, '2023_03_05_051123_create_tab_two_firsts_table', 1),
(16, '2023_03_05_051249_create_tab_two_seconds_table', 1),
(17, '2023_03_05_051308_create_tab_two_thirds_table', 1),
(18, '2023_03_05_181345_create_tab_three_firsts_table', 1),
(19, '2023_03_06_050429_create_tab_four_headers_table', 1),
(20, '2023_03_06_050606_create_tab_four_firsts_table', 1),
(21, '2023_03_06_050730_create_tab_five_firsts_table', 1),
(22, '2023_03_06_052106_create_tab_one_sub_one_headers_table', 1),
(23, '2023_03_06_052237_create_tab_one_sub_one_firsts_table', 1),
(24, '2023_03_06_052251_create_tab_one_sub_one_seconds_table', 1),
(25, '2023_03_06_052510_create_tab_one_sub_one_thirds_table', 1),
(26, '2023_03_06_052625_create_tab_one_sub_one_fourths_table', 1),
(27, '2023_03_06_052918_create_tab_one_sub_two_headers_table', 1),
(28, '2023_03_06_053013_create_tab_one_sub_two_firsts_table', 1),
(29, '2023_03_06_053049_create_tab_one_sub_two_seconds_table', 1),
(30, '2023_03_06_053143_create_tab_one_sub_three_headers_table', 1),
(31, '2023_03_06_053316_create_tab_one_sub_three_firsts_table', 1),
(32, '2023_03_06_053352_create_tab_one_sub_three_seconds_table', 1),
(33, '2023_03_06_053407_create_tab_one_sub_three_thirds_table', 1),
(34, '2023_03_06_053604_create_tab_one_sub_four_headers_table', 1),
(35, '2023_03_06_053715_create_tab_one_sub_four_firsts_table', 1),
(36, '2023_03_06_053745_create_tab_one_sub_four_seconds_table', 1),
(37, '2023_03_06_053847_create_tab_one_sub_four_thirds_table', 1),
(38, '2023_03_06_053913_create_tab_one_sub_four_fourths_table', 1),
(39, '2023_03_06_054029_create_tab_two_sub_one_headers_table', 1),
(40, '2023_03_06_054048_create_tab_two_sub_one_firsts_table', 1),
(41, '2023_03_06_054157_create_tab_four_sub_one_firsts_table', 1),
(42, '2023_03_08_022507_create_about_us_table', 1),
(43, '2023_03_08_160036_create_about_us_headers_table', 1),
(44, '2023_03_08_160610_create_about_us_firsts_table', 1),
(45, '2023_03_08_161524_create_mission_and_vision_headers_table', 1),
(46, '2023_03_08_161558_create_mission_and_vision_firsts_table', 1),
(47, '2023_03_08_161718_create_our_leaders_headers_table', 1),
(48, '2023_03_08_162000_create_our_leaders_firsts_table', 1),
(49, '2023_03_08_162022_create_our_leaders_seconds_table', 1),
(50, '2023_03_08_162053_create_our_leaders_thirds_table', 1),
(51, '2023_03_08_164558_create_contact_headers_table', 1),
(52, '2023_03_08_164613_create_contact_firsts_table', 1),
(53, '2023_03_08_185925_create_career_headers_table', 1),
(54, '2023_03_08_185954_create_career_firsts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mission_and_vision_firsts`
--

CREATE TABLE `mission_and_vision_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_and_vision_firsts`
--

INSERT INTO `mission_and_vision_firsts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Vision', 'The vision of SSAWO is to envision the well-being of Afghans with a focus on Afghan women, youth and children by building their capacity and involving them in the educational, health, social, cultural vocational and economic development of the homeland, and ending violence against women, girls and children.', '2023-04-11 03:46:32', '2023-04-11 03:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `mission_and_vision_headers`
--

CREATE TABLE `mission_and_vision_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_and_vision_headers`
--

INSERT INTO `mission_and_vision_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Mission', 'SSAWO’s mission is to address issues of drug demand reduction, the promotion of women rights, youth engagement, ending violence against women and girls, and peace.', '04112023081528643517202b34a.jpg', '2023-04-11 03:45:28', '2023-04-11 03:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `our_leaders_firsts`
--

CREATE TABLE `our_leaders_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_leaders_headers`
--

CREATE TABLE `our_leaders_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_leaders_headers`
--

INSERT INTO `our_leaders_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Leadership', 'SSAWO is led by Dr. Toorpaikay Zazai. She graduated from Kabul Medical University. Dr. Toorpaikay Zazai has served Afghan people regardless of race, language and religion.', '04112023082240643518d097535.jpg', '2023-04-11 03:51:43', '2023-04-11 03:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `our_leaders_seconds`
--

CREATE TABLE `our_leaders_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_leaders_seconds`
--

INSERT INTO `our_leaders_seconds` (`id`, `title`, `position`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Noor Agha Moradi', 'Program Officer', 'Noor Agha Moradi is the Program Officer and is responsible to supervise and report the programs and activities of SSAWO throughout Afghanistan.', '041120230902506435223a36d03.jpg', '2023-04-11 04:32:50', '2023-04-11 04:46:47');

-- --------------------------------------------------------

--
-- Table structure for table `our_leaders_thirds`
--

CREATE TABLE `our_leaders_thirds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_leaders_thirds`
--

INSERT INTO `our_leaders_thirds` (`id`, `title`, `position`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'M. Aseel', 'Admin and Finance Officer', 'M. Aseel Hamdard is responsible to prepare and report all financial reports from all centers of SSAWO.', '0411202309154564352541b5862.jpg', '2023-04-11 04:35:52', '2023-04-11 04:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `press_models`
--

CREATE TABLE `press_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `press_models`
--

INSERT INTO `press_models` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Resuming Multi-Purpose Women Centers - Balkh', 'After long and productive negotiations and dialogues with the de facto government in Balkh Province, SSAWO managed to receive a permit letter from the directorate of Labour and Social Affairs to resume the activities at MPWC - Balkh.', '0411202307375364350e5187e2f.jpg', '2023-04-11 03:07:53', '2023-04-11 03:07:53'),
(2, 'Vocational Activities Resumption', 'SSAWO is going to resume the vocational skills at Multi-Purpose Women Centers - Balkh soon after receiving the permit letter from the directorate of Labour and Social Affairs - Balkh.', '0411202307403564350ef34d7d0.jpg', '2023-04-11 03:10:35', '2023-04-11 03:10:35'),
(3, 'Vocational programs', 'SSAWO has set programs for the vocational skills for the beneficiaries and clients at Multi-Purpose Women Centers - Balkh soon.', '0411202307440864350fc89c4a7.jpg', '2023-04-11 03:14:08', '2023-04-11 03:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `tab_five_firsts`
--

CREATE TABLE `tab_five_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_five_firsts`
--

INSERT INTO `tab_five_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Assessment and Identifying Beneficiaries and Clients', 'SSAWO has successfully assessed and identified the number of beneficiaries and clients since its establishment. During these research, SSAWO has found a significant number of addicted men, women, children and adolescents throughout Afghanistan.', '04112023071849643509d916cae.jpg', '2023-04-11 02:48:49', '2023-04-11 02:48:49'),
(2, 'Eligible Beneficiaries and Clients', 'SSAWO has always been trying to identify the eligible beneficiaries and clients who have suffered from the brunt of addiction, war, poverty and deprivation.', '0411202307270964350bcdbaf4e.jpg', '2023-04-11 02:57:09', '2023-04-11 02:57:09'),
(3, 'Addicted Children', 'SSAWO has set the priority in its activities to identify and treat children who are addicted, and provided them with education programs.', '0411202307334864350d5c5482a.jpg', '2023-04-11 03:03:48', '2023-04-11 03:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `tab_four_firsts`
--

CREATE TABLE `tab_four_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_four_firsts`
--

INSERT INTO `tab_four_firsts` (`id`, `title`, `description1`, `description2`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Successful Stories of Our Impacts', 'SSAWO impacted hundreds of addicted, war-inflicted and deprived Afghan men, women, children and adolescents in the last few years of its activities. By providing services and programs in different areas, SSAWO has managed to deliver a drug-free, violence-free, independent and peaceful Afghan men, women, children and adolescents to the Afghan societies.', 'Many beneficiaries and clients who discharged and delivered to the societies are satisfied with the services SSAWO provided. They are still in touch with SSAWO centers and even in some parts are helping SSAWO in assessments and identifying beneficiaries and clients in their communities.', '04112023070557643506d5382da.jpg', '2023-04-11 02:35:57', '2023-04-11 02:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `tab_four_headers`
--

CREATE TABLE `tab_four_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_four_headers`
--

INSERT INTO `tab_four_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Impacts of its Activities', 'SSAWO has had profound and significant impacts as a result of its activities in the areas of drug demand reduction, education, livelihood, vocations, democracy and peace in Afghanistan.', '04112023065533643504655ab7e.jpg', '2023-04-11 02:25:33', '2023-04-11 02:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `tab_four_sub_one_firsts`
--

CREATE TABLE `tab_four_sub_one_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_four_sub_one_firsts`
--

INSERT INTO `tab_four_sub_one_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Successful Stories', 'SSAWO has had successful programs and activities in different communities of Afghanistan. These programs have been delivered to the people of the communities who suffered from addiction challenges and lack of income sources. SSAWO has assessed and identified them and provided them with treatment and vocational services.', '041120230712276435085b4648a.jpg', '2023-04-11 02:42:27', '2023-04-11 02:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_firsts`
--

CREATE TABLE `tab_one_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_firsts`
--

INSERT INTO `tab_one_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO', 'SSAWO envisions the well-being of Afghans with a focus on Afghan women and youth by building their capacity and involving them in the educational, health, social, cultural and economic development of the homeland.  SSAWO is based in Kabul with regional offices in different provinces of Afghanistan. \r\n\r\nSSAWO is a member of the Afghan NGOs Coordination Bureau (ANCB) and Afghan NGOs against Drug and HIV (Chatar). It believes in partnering with networks of civil society to effect policy changes. SSAWO is a women led organization, but its scope of work is for all Afghans inclusive of all languages and ethnicities.', '0409202305463064325136c3749.jpg', '2023-04-09 01:16:30', '2023-04-09 01:16:30'),
(2, 'SSAWO', 'Multi-Purpose Women Centers (MPWCs) is one of the women centers of SSAWO which was established in Mazar e Sharif, Balkh in 2022. Afghan women come to this center to learn livelihood skills, literacy and numeracy, and feel a comfortable environment.', '0412202306240464364e8432319.jpg', '2023-04-12 01:50:56', '2023-04-12 01:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_headers`
--

CREATE TABLE `tab_one_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_headers`
--

INSERT INTO `tab_one_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Social Services for Afghan Women Organization (SSAWO)', 'The Social Services for Afghan Women Organization (SSAWO) is an Afghan local non-governmental, non-political and women led organization that was established in 2007 registered with ministry of Economy of Islamic Republic of Afghanistan.', '0409202305411664324ffc2c2f1.jpg', '2023-04-09 01:11:16', '2023-04-09 01:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_seconds`
--

CREATE TABLE `tab_one_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_seconds`
--

INSERT INTO `tab_one_seconds` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO', 'SSAWO  has collectively  worked with the community leaders, Mullahs and residents to create a network of communications in the societies.  This network of communications resulted in major achievements of the projects of SSAWO.', '041020230555216433a4c92164d.jpg', '2023-04-10 01:25:21', '2023-04-10 01:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_four_firsts`
--

CREATE TABLE `tab_one_sub_four_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_four_firsts`
--

INSERT INTO `tab_one_sub_four_firsts` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Addicted Beneficiaries and Clients', 'SSAWO is proud to deliver services and treat thousands of addicted children, adolescents, men and women in the last 16 years around Afghanistan. These beneficiaries and clients have also been provided with vocational programs and skills. By acquiring these skills and vocations, these people are now able to stand on their own feet and make their own incomes.', '2023-04-11 01:43:25', '2023-04-11 01:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_four_fourths`
--

CREATE TABLE `tab_one_sub_four_fourths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_four_fourths`
--

INSERT INTO `tab_one_sub_four_fourths` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Treated Beneficiaries and Clients', 'SSAWO has treated many Afghan addicted men, women, children and adolescents. Fortunately, now many of these beneficiaries and clients are able to lead their lives independently. They have their incomes from the skills acquired during their treatments at SSAWO treatment centers.', '041120230619286434fbf0230d5.jpg', '2023-04-11 01:49:28', '2023-04-11 01:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_four_headers`
--

CREATE TABLE `tab_one_sub_four_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_four_headers`
--

INSERT INTO `tab_one_sub_four_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Successful Background', 'SSAWO was established in 2007 and registered in Ministry of Economy of Afghanistan. Since its establishment, SSAWO has successfully delivered services for the Afghan men, women, children and adolescents.', '041120230557436434f6d723fc9.jpg', '2023-04-11 01:27:43', '2023-04-11 01:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_four_seconds`
--

CREATE TABLE `tab_one_sub_four_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_four_seconds`
--

INSERT INTO `tab_one_sub_four_seconds` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Areas of Professionality', 'SSAWO has improved its personnel capacities and professionality in the health, vocational, livelihood, free-violence and education sectors in the last 16 years. During these years, many expert staff have been delivered to the society to take advantage of their expertise on the one hand, and thousands of beneficiaries and clients have benefited as well on the other hand.', '041120230607556434f93bbcb4d.jpg', '2023-04-11 01:37:55', '2023-04-11 01:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_four_thirds`
--

CREATE TABLE `tab_one_sub_four_thirds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_four_thirds`
--

INSERT INTO `tab_one_sub_four_thirds` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Treatment of Addicted Men', 'Besides treatment of addicted women, children and adolescents, SSAWO has provided treatment services for Afghan men as well. As a result of these services, hundreds of addicted men have been treated and provided with vocational programs and skills.', '2023-04-11 01:53:24', '2023-04-11 01:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_one_firsts`
--

CREATE TABLE `tab_one_sub_one_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_one_firsts`
--

INSERT INTO `tab_one_sub_one_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Women Empowerment', 'SSAWO is committed to empowering Afghan adolescent girls and women who have been underprivileged and affected by poverty and illiteracy in Afghanistan in the last decades.', '04092023060600643255c8394a1.jpg', '2023-04-09 01:36:00', '2023-04-09 01:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_one_fourths`
--

CREATE TABLE `tab_one_sub_one_fourths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_one_fourths`
--

INSERT INTO `tab_one_sub_one_fourths` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Afghan Girls and Women', 'In the last years from the SSAWO activities, hundreds of Afghan girls and women have been benefiting from the various programs and activities SSAWO provided. These programs and activities have been in drug treatments, literacy and numeracy, education, vocational trainings, female empowerment, democracy and peace.', '041020230635046433ae182c49f.jpg', '2023-04-10 02:05:04', '2023-04-10 02:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_one_headers`
--

CREATE TABLE `tab_one_sub_one_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_one_headers`
--

INSERT INTO `tab_one_sub_one_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Afghan Women and Adolescent Girls', 'SSAWO gives special attention to women and children suffering from addiction problems, right abuses and the empowerment of women and youth. It is dedicated to supporting the needs and interests of Afghans with a particular focus on women, inclusive of all ethnic and linguistic groups.', '0409202305582664325402e404c.jpg', '2023-04-09 01:28:26', '2023-04-09 01:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_one_seconds`
--

CREATE TABLE `tab_one_sub_one_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_one_seconds`
--

INSERT INTO `tab_one_sub_one_seconds` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Vocational trainings for Adolescent Girls and Women', 'SSAWO has paved the way for the girls and women to learn vocational skills, so they could be able to make their own livings. After completing these programs, they are financially independent.', '041020230627076433ac3b8aafd.jpg', '2023-04-10 01:57:07', '2023-04-10 01:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_one_thirds`
--

CREATE TABLE `tab_one_sub_one_thirds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_one_thirds`
--

INSERT INTO `tab_one_sub_one_thirds` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Afghan Women and Girls Education', 'SSAWO has given a special attention to the education of women since 2007. To educate Afghan girls and women, SSAWO has provided educational programs at different levels and centers which have been established through Afghanistan. As a result, hundreds of these girls and women educated and delivered to the Afghan societies.', '0409202306482864325fbcdee35.jpg', '2023-04-09 02:18:28', '2023-04-09 02:18:28');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_three_firsts`
--

CREATE TABLE `tab_one_sub_three_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_three_firsts`
--

INSERT INTO `tab_one_sub_three_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Technical Staff', 'With the professional and well-educated personnel, SSAWO has treated hundreds of addicted children throughout Afghanistan.', '041120230528286434effc5f976.jpg', '2023-04-11 00:58:28', '2023-04-11 00:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_three_headers`
--

CREATE TABLE `tab_one_sub_three_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_three_headers`
--

INSERT INTO `tab_one_sub_three_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Technical Specialists', 'In the last few years, SSAWO has been poud of having the most professional technical personnel in various areas, especially in the areas of drug treatment, protection and free-violence.', '041120230510436434ebd364b7d.jpg', '2023-04-11 00:40:43', '2023-04-11 00:40:43');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_three_seconds`
--

CREATE TABLE `tab_one_sub_three_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_three_thirds`
--

CREATE TABLE `tab_one_sub_three_thirds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_three_thirds`
--

INSERT INTO `tab_one_sub_three_thirds` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Drug Treatment Specialists', 'SSAWO has employed tens of professional workers in the last 16 years to treat Afghan addicted men, women, children and adolescents in different provinces of Afghanistan.', '041120230534576434f1817ecd9.jpg', '2023-04-11 01:02:42', '2023-04-11 01:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_two_firsts`
--

CREATE TABLE `tab_one_sub_two_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_two_firsts`
--

INSERT INTO `tab_one_sub_two_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Cooperation with Global Networks', 'SSAWO has had successful and prominent cooperation and coordination in the areas of drug demand reduction, women empowerment, female education, democracy and peace with its international partners globally.', '041120230500066434e95631ba9.jpg', '2023-04-11 00:30:06', '2023-04-11 00:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_two_headers`
--

CREATE TABLE `tab_one_sub_two_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_two_headers`
--

INSERT INTO `tab_one_sub_two_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Global Network', 'Since 2007, SSAWO has set a long-lasting global network with the international organizations. As a result, the international agencies have turned their attentions to the Afghan girls and women who have been in extremely bad conditions of health, life conditions and education.', '041120230449496434e6eda06b4.jpg', '2023-04-11 00:19:49', '2023-04-11 00:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_sub_two_seconds`
--

CREATE TABLE `tab_one_sub_two_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_sub_two_seconds`
--

INSERT INTO `tab_one_sub_two_seconds` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO International Partners', 'SSAWO has closely worked with its international partners to reduce drug demands in Afghanistan. Consequently, thousands of Afghan men and women, girls and boys and adolescents have been successfully treated and delivered to society.', '041120230505266434ea9601cd7.jpg', '2023-04-11 00:35:26', '2023-04-11 00:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `tab_one_thirds`
--

CREATE TABLE `tab_one_thirds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_one_thirds`
--

INSERT INTO `tab_one_thirds` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO', 'SSAWO, based on its vast experience of working with multinational community development organizations, and with the grassroots communities, is confident to further strengthen the community bond, establish and strengthen the networks of religious scholars and women rights activists. Having professional and trained staff, SSAWO plays a vital role in community development.', '04092023055255643252b736bd6.jpg', '2023-04-09 01:22:55', '2023-04-09 01:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `tab_three_firsts`
--

CREATE TABLE `tab_three_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_three_firsts`
--

INSERT INTO `tab_three_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Target Areas', 'SSAWO has been working in different provinces of Afghanistan and in various areas of professionality since its establishment.', '04112023065056643503506b440.jpg', '2023-04-11 02:20:56', '2023-04-11 02:20:56');

-- --------------------------------------------------------

--
-- Table structure for table `tab_two_firsts`
--

CREATE TABLE `tab_two_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_two_firsts`
--

INSERT INTO `tab_two_firsts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO Children Services', 'SSAWO has profoundly paid attention to the war-inflicted children of Afghanistan since its establishment. In these years, many Afghan children benefited from the services which have been provided by SSAWO.', '041120230632316434feffc42dd.jpg', '2023-04-11 02:02:31', '2023-04-11 02:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `tab_two_headers`
--

CREATE TABLE `tab_two_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_two_headers`
--

INSERT INTO `tab_two_headers` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO', 'SSAWO has proudly been working in different areas: drug demand reduction, education services, livelihoods, vocational skills, democracy and peace.', '041120230628516434fe23ef3fd.jpg', '2023-04-11 01:58:51', '2023-04-11 01:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `tab_two_seconds`
--

CREATE TABLE `tab_two_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_two_seconds`
--

INSERT INTO `tab_two_seconds` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Adolescent Treatment Services', 'SSAWO established a 50 bed treatment center in 2012 to treat addicted adolescents. After their treatment, these adolescents have been provided with educational and vocational programs.', '2023-04-11 02:05:59', '2023-04-11 02:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `tab_two_sub_one_firsts`
--

CREATE TABLE `tab_two_sub_one_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tab_two_sub_one_headers`
--

CREATE TABLE `tab_two_sub_one_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tab_two_thirds`
--

CREATE TABLE `tab_two_thirds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tab_two_thirds`
--

INSERT INTO `tab_two_thirds` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Services for Women Treatment', 'SSAWO has provided services for Addicted Afghan women. Most of these addicted women have taken to the SSAWO female centers from remote areas in which they were deprived of addiction services.', '041120230643216435018912052.jpg', '2023-04-11 02:09:15', '2023-04-11 02:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SSAWO', 'ssawoaf@gmail.com', NULL, '$2y$10$xh/3bdbvOd1uXyA8zFPAJ.HFQ/knqTu0M21k6xuoM7xv/9PPCg.My', 'Admin', NULL, '2023-03-29 05:38:19', '2023-03-29 05:38:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_firsts`
--
ALTER TABLE `about_us_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us_headers`
--
ALTER TABLE `about_us_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_firsts`
--
ALTER TABLE `career_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_headers`
--
ALTER TABLE `career_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_firsts`
--
ALTER TABLE `contact_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_headers`
--
ALTER TABLE `contact_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fight_poverties`
--
ALTER TABLE `fight_poverties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_firsts`
--
ALTER TABLE `index_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_headers`
--
ALTER TABLE `index_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_seconds`
--
ALTER TABLE `index_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_and_vision_firsts`
--
ALTER TABLE `mission_and_vision_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_and_vision_headers`
--
ALTER TABLE `mission_and_vision_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_leaders_firsts`
--
ALTER TABLE `our_leaders_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_leaders_headers`
--
ALTER TABLE `our_leaders_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_leaders_seconds`
--
ALTER TABLE `our_leaders_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_leaders_thirds`
--
ALTER TABLE `our_leaders_thirds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `press_models`
--
ALTER TABLE `press_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_five_firsts`
--
ALTER TABLE `tab_five_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_four_firsts`
--
ALTER TABLE `tab_four_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_four_headers`
--
ALTER TABLE `tab_four_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_four_sub_one_firsts`
--
ALTER TABLE `tab_four_sub_one_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_firsts`
--
ALTER TABLE `tab_one_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_headers`
--
ALTER TABLE `tab_one_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_seconds`
--
ALTER TABLE `tab_one_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_four_firsts`
--
ALTER TABLE `tab_one_sub_four_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_four_fourths`
--
ALTER TABLE `tab_one_sub_four_fourths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_four_headers`
--
ALTER TABLE `tab_one_sub_four_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_four_seconds`
--
ALTER TABLE `tab_one_sub_four_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_four_thirds`
--
ALTER TABLE `tab_one_sub_four_thirds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_one_firsts`
--
ALTER TABLE `tab_one_sub_one_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_one_fourths`
--
ALTER TABLE `tab_one_sub_one_fourths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_one_headers`
--
ALTER TABLE `tab_one_sub_one_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_one_seconds`
--
ALTER TABLE `tab_one_sub_one_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_one_thirds`
--
ALTER TABLE `tab_one_sub_one_thirds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_three_firsts`
--
ALTER TABLE `tab_one_sub_three_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_three_headers`
--
ALTER TABLE `tab_one_sub_three_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_three_seconds`
--
ALTER TABLE `tab_one_sub_three_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_three_thirds`
--
ALTER TABLE `tab_one_sub_three_thirds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_two_firsts`
--
ALTER TABLE `tab_one_sub_two_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_two_headers`
--
ALTER TABLE `tab_one_sub_two_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_sub_two_seconds`
--
ALTER TABLE `tab_one_sub_two_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_one_thirds`
--
ALTER TABLE `tab_one_thirds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_three_firsts`
--
ALTER TABLE `tab_three_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_two_firsts`
--
ALTER TABLE `tab_two_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_two_headers`
--
ALTER TABLE `tab_two_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_two_seconds`
--
ALTER TABLE `tab_two_seconds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_two_sub_one_firsts`
--
ALTER TABLE `tab_two_sub_one_firsts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_two_sub_one_headers`
--
ALTER TABLE `tab_two_sub_one_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_two_thirds`
--
ALTER TABLE `tab_two_thirds`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_us_firsts`
--
ALTER TABLE `about_us_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_us_headers`
--
ALTER TABLE `about_us_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career_firsts`
--
ALTER TABLE `career_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_headers`
--
ALTER TABLE `career_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_firsts`
--
ALTER TABLE `contact_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_headers`
--
ALTER TABLE `contact_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fight_poverties`
--
ALTER TABLE `fight_poverties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `index_firsts`
--
ALTER TABLE `index_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `index_headers`
--
ALTER TABLE `index_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `index_seconds`
--
ALTER TABLE `index_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `mission_and_vision_firsts`
--
ALTER TABLE `mission_and_vision_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mission_and_vision_headers`
--
ALTER TABLE `mission_and_vision_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_leaders_firsts`
--
ALTER TABLE `our_leaders_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_leaders_headers`
--
ALTER TABLE `our_leaders_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_leaders_seconds`
--
ALTER TABLE `our_leaders_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_leaders_thirds`
--
ALTER TABLE `our_leaders_thirds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `press_models`
--
ALTER TABLE `press_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tab_five_firsts`
--
ALTER TABLE `tab_five_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tab_four_firsts`
--
ALTER TABLE `tab_four_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_four_headers`
--
ALTER TABLE `tab_four_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_four_sub_one_firsts`
--
ALTER TABLE `tab_four_sub_one_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_firsts`
--
ALTER TABLE `tab_one_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tab_one_headers`
--
ALTER TABLE `tab_one_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tab_one_seconds`
--
ALTER TABLE `tab_one_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_four_firsts`
--
ALTER TABLE `tab_one_sub_four_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_four_fourths`
--
ALTER TABLE `tab_one_sub_four_fourths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_four_headers`
--
ALTER TABLE `tab_one_sub_four_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_four_seconds`
--
ALTER TABLE `tab_one_sub_four_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_four_thirds`
--
ALTER TABLE `tab_one_sub_four_thirds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_one_firsts`
--
ALTER TABLE `tab_one_sub_one_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_one_fourths`
--
ALTER TABLE `tab_one_sub_one_fourths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_one_headers`
--
ALTER TABLE `tab_one_sub_one_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_one_seconds`
--
ALTER TABLE `tab_one_sub_one_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_one_thirds`
--
ALTER TABLE `tab_one_sub_one_thirds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_three_firsts`
--
ALTER TABLE `tab_one_sub_three_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_three_headers`
--
ALTER TABLE `tab_one_sub_three_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_three_seconds`
--
ALTER TABLE `tab_one_sub_three_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_one_sub_three_thirds`
--
ALTER TABLE `tab_one_sub_three_thirds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_two_firsts`
--
ALTER TABLE `tab_one_sub_two_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_two_headers`
--
ALTER TABLE `tab_one_sub_two_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_sub_two_seconds`
--
ALTER TABLE `tab_one_sub_two_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_one_thirds`
--
ALTER TABLE `tab_one_thirds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_three_firsts`
--
ALTER TABLE `tab_three_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_two_firsts`
--
ALTER TABLE `tab_two_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_two_headers`
--
ALTER TABLE `tab_two_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_two_seconds`
--
ALTER TABLE `tab_two_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_two_sub_one_firsts`
--
ALTER TABLE `tab_two_sub_one_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_two_sub_one_headers`
--
ALTER TABLE `tab_two_sub_one_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tab_two_thirds`
--
ALTER TABLE `tab_two_thirds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
