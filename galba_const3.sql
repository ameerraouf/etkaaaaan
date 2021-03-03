-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2020 at 10:42 PM
-- Server version: 5.7.32
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galba_const3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `users` int(11) NOT NULL,
  `admingroup` int(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `links` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `banners` int(11) NOT NULL,
  `reports` int(11) NOT NULL,
  `departments` int(11) NOT NULL,
  `news` int(11) NOT NULL,
  `formspdf` int(11) NOT NULL,
  `orders` int(11) NOT NULL,
  `orders2` int(11) NOT NULL,
  `orders3` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `settings`, `country`, `users`, `admingroup`, `pages`, `links`, `comments`, `contact`, `banners`, `reports`, `departments`, `news`, `formspdf`, `orders`, `orders2`, `orders3`, `created_at`, `updated_at`) VALUES
(1, 'مشرف عام', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-02-08 20:00:00', '2017-03-18 14:52:56'),
(2, 'الموظفين', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 1, '2017-04-11 14:46:45', '2017-04-11 14:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `one` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tow` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `three` varchar(255) DEFAULT NULL,
  `four` varchar(255) DEFAULT NULL,
  `link_one` varchar(255) DEFAULT NULL,
  `link_two` varchar(255) DEFAULT NULL,
  `link_three` varchar(255) DEFAULT NULL,
  `link_four` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `albumes`
--

CREATE TABLE `albumes` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(2, 'الرياض', '1', '2017-02-19 01:54:56', '2017-03-02 07:55:00'),
(3, 'الدمام', '1', '2017-02-19 01:55:10', '2017-03-02 07:55:06'),
(4, 'مكة', '1', '2017-02-19 01:55:23', '2017-03-02 07:55:14'),
(5, 'المدينة المنورة', '1', '2017-02-19 01:55:42', '2017-03-02 07:55:23'),
(6, 'نجد', '1', '2017-02-19 01:55:55', '2017-03-02 07:55:29');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('text','code','photo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` enum('right','left','top','bottom','all') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_to` int(11) NOT NULL,
  `expire_to` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `user_id`, `title`, `type`, `place`, `start_to`, `expire_to`, `content`, `url`, `width`, `height`, `active`, `created_at`, `updated_at`) VALUES
(5, 1, 'مساحة إعلانية', 'photo', 'top', 1540944000, 1546214400, 'banners/1540978614//34491540978614.png', 'http://g-alba.com/', NULL, NULL, 1, '2018-10-31 06:36:54', '2019-10-27 19:40:28'),
(6, 1, 'تصدق', 'photo', 'top', 1540944000, 1551312000, 'banners/1540978788//42711540978788.png', 'http://g-alba.com/', NULL, NULL, 1, '2018-10-31 06:39:48', '2019-10-27 19:40:58'),
(7, 1, 'شعار الجمعية', 'photo', 'top', 1540944000, 1551312000, 'banners/1540978815//44721540978815.png', 'http://g-alba.com/', NULL, NULL, 1, '2018-10-31 06:40:15', '2019-10-27 19:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `area_id`, `created_at`, `updated_at`) VALUES
(2, 'الرياض', 1, 2, '2017-02-19 01:56:39', '2017-02-19 01:56:39'),
(3, 'الدمام', 1, 3, '2017-02-19 01:56:51', '2017-02-19 01:56:51'),
(4, 'حائل', 1, 5, '2017-02-19 01:57:12', '2017-02-19 01:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `news_id`, `comment`, `active`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 'test', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `reading` int(11) NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `move_to` enum('inbox','archive','trash') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `country`, `title`, `content`, `user_id`, `reading`, `mobile`, `move_to`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'x-ars', 'c-ns@hotmail.com', NULL, 'جديد', 'aaaaaaaaa', 0, 1, '+966500876876', 'inbox', NULL, '2020-11-30 18:27:00', '2020-11-30 18:48:17'),
(2, 'NdTnvebiKmG', 'tsushitarikitsu@gmail.com', NULL, 'qRMBmwCZUYj', 'cxGMOFzUmN', 0, 0, '2663911129', 'inbox', NULL, '2020-12-02 07:06:44', '2020-12-02 07:06:44'),
(3, 'Henrydem', 'wildhawk8504@yahoo.com', NULL, 'الروبوت المالي هو الأداة المالية الأكثر فعالية في الشبكة! رابط - https://is.gd/HWDxGZ', 'الروبوت هو الحل الأفضل لكل من يريد أن يكسب \r\nرابط - https://is.gd/HWDxGZ', 0, 0, '89031501716', 'inbox', NULL, '2020-12-02 15:24:23', '2020-12-02 15:24:23'),
(4, 'Melvin Kelsey', 'melvin.a.kelsey@gmail.com', NULL, 'URGENT TRADE', 'Dear Sir / Madam \r\n \r\nJohn Lewis PLC is a British well-known retail store with over 40 stores all over the United Kingdom,furnished with European products. \r\nWe are looking for new Suppliers and would like to ask you the information required to become one of your regular distributors? \r\n \r\nPlease, we would appreciate if you could send us your stock list availability via email?. \r\nIndeed we are interested in your products, we would like to know if you can provide them. \r\n \r\nKind Regards \r\n \r\nJohn Lewis PLC \r\nMelvin Kelsey \r\nSenior Executive Purchase \r\n \r\n171 Victoria Street, London \r\nUnited Kingdom SW1E 5NN \r\nPhone: +44 33 3303 4178 \r\nEmail: melvin-kelsey@johnlewispartnerships.com \r\nWebsite: http://www.johnlewis.com', 0, 0, '84574593176', 'inbox', NULL, '2020-12-02 15:42:28', '2020-12-02 15:42:28'),
(5, 'Henrydem', 'geoffhatfield@hotmail.com', NULL, 'ويتوافر الآن دخل إضافي لأي شخص في جميع أنحاء العالم. رابط - https://is.gd/YxWs9a', 'الدخل الإضافي لكل شخص. \r\nرابط - https://is.gd/YxWs9a', 0, 0, '89038718171', 'inbox', NULL, '2020-12-02 17:40:38', '2020-12-02 17:40:38'),
(6, 'Henrydem', 'mikethebull2002@yahoo.com', NULL, 'أفضل وظيفة على الإنترنت للمتقاعدين اجعل عمرك القديم غنيا رابط - https://is.gd/YxWs9a', 'أموالك تعمل حتى عندما تنام \r\nرابط - https://is.gd/YxWs9a', 0, 0, '89036639674', 'inbox', NULL, '2020-12-02 18:44:46', '2020-12-02 18:44:46'),
(7, 'Henrydem', 'xxxxxxxx@gmail.com', NULL, 'الوظيفة على الإنترنت يمكن أن تكون فعالة حقا إذا كنت تستخدم هذا الروبوت.  رابط - https://is.gd/FdmIfm', 'إجعل حاسوبك لكي يكون آلة كسب. \r\nرابط - https://is.gd/FdmIfm', 0, 0, '89037977780', 'inbox', NULL, '2020-12-03 06:34:25', '2020-12-03 06:34:25'),
(8, 'Henrydem', 'biglaurx@yahoo.com', NULL, 'No need to worry about the future if your use this financial robot.  Link - https://is.gd/FdmIfm', 'جرب أفضل روبوت مالي في الإنترنت \r\nرابط - https://is.gd/FdmIfm', 0, 0, '89037167221', 'inbox', NULL, '2020-12-03 08:51:28', '2020-12-03 08:51:28'),
(9, 'Henrydem', 'jbhangers1@yahoo.com', NULL, 'حتى الطفل يعرف كيف يجني 100 دولار اليوم بمساعدة هذا الروبوت رابط - https://is.gd/FdmIfm', 'راقب أموالك تنمو بينما تستثمر مع الروبوت \r\nرابط - https://is.gd/FdmIfm', 0, 0, '89031409955', 'inbox', NULL, '2020-12-03 09:54:13', '2020-12-03 09:54:13'),
(10, 'Henrydem', 'bleu@hotmail.it', NULL, 'The best way for everyone who rushes for financial independence. Link - https://is.gd/FdmIfm', 'Trust your dollar to the Robot and see how it grows to $100. \r\nLink - https://is.gd/FdmIfm', 0, 0, '89032600856', 'inbox', NULL, '2020-12-03 10:53:38', '2020-12-03 10:53:38'),
(11, 'ContactSit', 'no-replyNex@gmail.com', NULL, 'Mailing via the feedback form.', 'Gооd dаy!  g-alba.com \r\n \r\nDid yоu knоw thаt it is pоssiblе tо sеnd businеss prоpоsаl fully lеgаl? \r\nWе tеndеr а nеw uniquе wаy оf sеnding lеttеr thrоugh соntасt fоrms. Suсh fоrms аrе lосаtеd оn mаny sitеs. \r\nWhеn suсh prоpоsаls аrе sеnt, nо pеrsоnаl dаtа is usеd, аnd mеssаgеs аrе sеnt tо fоrms spесifiсаlly dеsignеd tо rесеivе mеssаgеs аnd аppеаls. \r\nаlsо, mеssаgеs sеnt thrоugh fееdbасk Fоrms dо nоt gеt intо spаm bесаusе suсh mеssаgеs аrе соnsidеrеd impоrtаnt. \r\nWе оffеr yоu tо tеst оur sеrviсе fоr frее. Wе will sеnd up tо 50,000 mеssаgеs fоr yоu. \r\nThе соst оf sеnding оnе milliоn mеssаgеs is 49 USD. \r\n \r\nThis lеttеr is сrеаtеd аutоmаtiсаlly. Plеаsе usе thе соntасt dеtаils bеlоw tо соntасt us. \r\n \r\nContact us. \r\nTelegram - @FeedbackFormEU \r\nSkype  live:feedbackform2019 \r\nWhatsApp - +375259112693', 0, 0, '88951659644', 'inbox', NULL, '2020-12-03 11:56:04', '2020-12-03 11:56:04'),
(12, 'Henrydem', 'rico.rcmail@gmail.com', NULL, 'ألم تصبح مليونيرا بعد ؟  الروبوت المالي سيجعلك مثله رابط - https://is.gd/FdmIfm', 'ابدأ بجني آلاف الدولارات كل أسبوع \r\nرابط - https://is.gd/FdmIfm', 0, 0, '89039861304', 'inbox', NULL, '2020-12-03 13:18:21', '2020-12-03 13:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'المملكة العربية السعودية', 966, '2017-02-09 13:01:24', '2017-02-09 13:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `parent`, `created_at`, `updated_at`) VALUES
(5, 'أخبار الجمعية', 0, '2017-02-27 09:00:39', '2017-03-14 20:42:56'),
(8, 'اقسام الفيديوهات', 0, '2017-03-11 09:38:02', '2017-03-11 09:38:02'),
(9, 'اقسام الصور', 0, '2017-03-11 09:38:40', '2017-03-11 09:38:40'),
(10, 'صور الجمعية', 9, '2017-03-11 09:51:00', '2017-03-11 09:51:00'),
(11, 'فيديوهات الجمعية', 8, '2017-03-11 09:51:16', '2017-03-11 09:51:16'),
(12, 'برامج الجمعية', 0, '2018-11-01 00:02:55', '2018-11-01 00:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `mosque` varchar(255) NOT NULL,
  `emam_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(10) UNSIGNED NOT NULL,
  `uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slide` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `build_id` int(11) DEFAULT NULL,
  `invite_id` int(11) DEFAULT NULL,
  `tmp_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mimtype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `success` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `add_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `uid`, `slide`, `post`, `build_id`, `invite_id`, `tmp_id`, `cat_id`, `news_id`, `file`, `path`, `ext`, `mimtype`, `name`, `size`, `success`, `add_date`, `created_at`, `updated_at`) VALUES
(7, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '95341488210505.mp3', 'news/attachfile/1488210505', 'mp3', 'audio/mpeg', '08.ya bkht el nom.mp3', '4.34 MB', NULL, '1488210506', '2017-02-27 13:48:26', '2017-02-27 13:48:26'),
(8, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '21821488210528.mp3', 'news/attachfile/1488210528', 'mp3', 'audio/mpeg', '08.ya bkht el nom.mp3', '4.34 MB', NULL, '1488210528', '2017-02-27 13:48:48', '2017-02-27 13:48:48'),
(9, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '60201488210613.mp3', 'news/attachfile/1488210613', 'mp3', 'audio/mpeg', '08.ya bkht el nom.mp3', '4.34 MB', NULL, '1488210614', '2017-02-27 13:50:14', '2017-02-27 13:50:14'),
(10, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '76191488210641.mp3', 'news/attachfile/1488210641', 'mp3', 'audio/mpeg', '08.ya bkht el nom.mp3', '4.34 MB', NULL, '1488210642', '2017-02-27 13:50:42', '2017-02-27 13:50:42'),
(11, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '49261488358628.png', 'news/attachfile/1488358628', 'png', 'image/png', '289c7c5c9e350f8c540de3859577ca33_usa-today-dec-23rd-woman-clipart-woman-kicking-out-a-man_725-800.png', '308.14 KB', NULL, '1488358628', '2017-03-01 06:57:08', '2017-03-01 06:57:08'),
(12, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '92781488358660.png', 'news/attachfile/1488358660', 'png', 'image/png', '289c7c5c9e350f8c540de3859577ca33_usa-today-dec-23rd-woman-clipart-woman-kicking-out-a-man_725-800.png', '308.14 KB', NULL, '1488358660', '2017-03-01 06:57:40', '2017-03-01 06:57:40'),
(15, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '86661488358948.png', 'news/attachfile/1488358948', 'png', 'image/png', 'large-Exclamation-mark-66.6-2395.png', '45.87 KB', NULL, '1488358948', '2017-03-01 07:02:28', '2017-03-01 07:02:28'),
(18, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '97581488359118.png', 'news/attachfile/1488359118', 'png', 'image/png', 'large-Exclamation-mark-66.6-2395.png', '45.87 KB', NULL, '1488359118', '2017-03-01 07:05:18', '2017-03-01 07:05:18'),
(19, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '27201488729079.png', 'slide/1488729079/', 'png', 'image/png', '289c7c5c9e350f8c540de3859577ca33_usa-today-dec-23rd-woman-clipart-woman-kicking-out-a-man_725-800.png', '308.14 KB', NULL, '1488729079', '2017-03-05 13:51:19', '2017-03-05 13:51:19'),
(20, '1', NULL, NULL, NULL, NULL, NULL, NULL, '14', '82841540979273.jpg', 'news/attachfile/1540979273', 'jpg', 'image/jpeg', 'طرق_الصدقة.jpg', '11.09 KB', NULL, '1540979273', '2018-10-31 06:47:53', '2018-10-31 06:48:46'),
(21, '1', NULL, NULL, NULL, NULL, NULL, NULL, '15', '22321540979453.jpg', 'news/attachfile/1540979453', 'jpg', 'image/jpeg', 'بر-الوالدين3.jpg', '28.59 KB', NULL, '1540979453', '2018-10-31 06:50:53', '2018-10-31 06:51:17'),
(22, '1', NULL, NULL, NULL, NULL, NULL, NULL, '16', '29641540979777.jpg', 'news/attachfile/1540979777', 'jpg', 'image/jpeg', 'wp584570.jpg', '31.14 KB', NULL, '1540979777', '2018-10-31 06:56:17', '2018-10-31 06:56:25'),
(23, '1', NULL, NULL, NULL, NULL, NULL, NULL, '17', '30581540979969.jpg', 'news/attachfile/1540979969', 'jpg', 'image/jpeg', 'طريقة-كفالة-اليتيم.jpg', '15.27 KB', NULL, '1540979969', '2018-10-31 06:59:29', '2018-10-31 06:59:55'),
(24, '1', NULL, NULL, NULL, NULL, NULL, NULL, '18', '85991540980091.jpg', 'news/attachfile/1540980091', 'jpg', 'image/jpeg', 'maw2.jpg', '141.10 KB', NULL, '1540980091', '2018-10-31 07:01:31', '2018-10-31 07:02:36'),
(25, '1', NULL, NULL, NULL, NULL, NULL, NULL, '19', '23001540980379.jpg', 'news/attachfile/1540980379', 'jpg', 'image/jpeg', 'maw2.jpg', '141.10 KB', NULL, '1540980379', '2018-10-31 07:06:19', '2018-10-31 07:06:39'),
(27, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '44141571693889.png', 'news/attachfile/1571693889', 'png', 'image/png', 'zo.png', '37.57 KB', NULL, '1571693889', '2019-10-21 18:38:09', '2019-10-21 18:38:09'),
(28, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '55201571693910.png', 'news/attachfile/1571693910', 'png', 'image/png', 'zo.png', '37.57 KB', NULL, '1571693910', '2019-10-21 18:38:30', '2019-10-21 18:38:30'),
(29, '1', NULL, NULL, NULL, NULL, NULL, NULL, '26', '65181571693934.png', 'news/attachfile/1571693934', 'png', 'image/png', 'zo.png', '37.57 KB', NULL, '1571693934', '2019-10-21 18:38:54', '2019-10-21 18:38:59'),
(30, '1', NULL, NULL, NULL, NULL, NULL, NULL, '27', '88921571694201.png', 'news/attachfile/1571694201', 'png', 'image/png', 'at.png', '37.28 KB', NULL, '1571694201', '2019-10-21 18:43:21', '2019-10-21 18:43:56'),
(31, '1', NULL, NULL, NULL, NULL, NULL, NULL, '28', '86601571694585.png', 'news/attachfile/1571694585', 'png', 'image/png', 'as.png', '37.43 KB', NULL, '1571694585', '2019-10-21 18:49:45', '2019-10-21 18:50:04'),
(32, '1', NULL, NULL, NULL, NULL, NULL, NULL, '29', '1711571694668.png', 'news/attachfile/1571694668', 'png', 'image/png', 'kss.png', '38.23 KB', NULL, '1571694668', '2019-10-21 18:51:08', '2019-10-21 18:51:30'),
(33, '1', NULL, NULL, NULL, NULL, NULL, NULL, '30', '8701571694727.png', 'news/attachfile/1571694727', 'png', 'image/png', 'shh.png', '37.63 KB', NULL, '1571694727', '2019-10-21 18:52:07', '2019-10-21 18:52:29'),
(35, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '38641605079760.jpg', 'news/attachfile/1605079760', 'jpg', 'image/jpeg', 'Instagram-photo-rmaziaty-08.jpg', '54.37 KB', NULL, '1605079760', '2020-11-11 04:29:20', '2020-11-11 04:29:20'),
(36, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '79641605107913.jpg', 'news/attachfile/1605107913', 'jpg', 'image/jpeg', '1.jpg', '93.43 KB', NULL, '1605107913', '2020-11-11 12:18:33', '2020-11-11 12:18:33'),
(37, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '69061605108403.JPG', 'news/attachfile/1605108403', 'JPG', 'image/jpeg', 'شعار الجمعية .JPG', '94.78 KB', NULL, '1605108403', '2020-11-11 12:26:43', '2020-11-11 12:26:43');

-- --------------------------------------------------------

--
-- Table structure for table `forms_pdf`
--

CREATE TABLE `forms_pdf` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forms_pdf`
--

INSERT INTO `forms_pdf` (`id`, `title`, `content`, `pdf`, `created_at`, `updated_at`) VALUES
(2, 'نموذج جهة وزارة العدل', 'هذا النموذج الخاص بوزارة العدل', '/pdf/77801488974927.pdf', '2017-03-08 10:08:47', '2017-03-08 10:09:01'),
(3, 'نموذج وزارة الداخلية', 'هذا النموذج خاص بجهة وزارة الداخلية للتأشيرة عليه', '/pdf/13691488974971.pdf', '2017-03-08 10:09:31', '2017-03-08 10:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dir` int(11) DEFAULT NULL,
  `typelink` enum('header','footer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `name`, `url`, `dir`, `typelink`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'اخبار الجمعية', 'http://g-alba.com/all/category', 2, 'header', 0, '2017-03-07 07:12:51', '2018-11-19 23:56:16'),
(2, 'اخبار عامة', 'http://g-alba.com/category', NULL, 'header', 1, '2017-03-07 07:13:17', '2018-11-19 23:56:30'),
(3, 'اتصل بنا', 'http://g-alba.com/contactus', 6, 'header', 0, '2017-03-07 07:13:50', '2018-11-19 23:57:17'),
(4, 'عن الجمعية', 'http://g-alba.com/page/2', 3, 'header', 0, '2017-03-14 20:38:02', '2018-11-19 23:56:40'),
(7, 'الحسابات البنكية', 'http://g-alba.com/page/3', 4, 'header', 7, '2017-03-19 15:50:23', '2018-12-23 12:10:56'),
(8, 'طلب خدمة', 'http://g-alba.com/contactus', 5, 'header', 0, '2018-10-31 23:52:22', '2018-11-19 23:58:10'),
(9, 'برامج الجمعية', 'http://g-alba.com', NULL, 'header', 0, '2019-02-14 03:13:49', '2019-02-14 03:13:49'),
(10, 'مساعدة عينية', 'http://g-alba.com/news/25/%D9%85%D8%B3%D8%A7%D8%B9%D8%AF%D8%A9%20%D8%B9%D9%8A%D9%86%D9%8A%D8%A9', NULL, 'header', 9, '2019-02-14 03:14:33', '2019-10-21 19:23:28'),
(11, 'مساعدات الزواج', 'http://g-alba.com/news/26/%D9%85%D8%B3%D8%A7%D8%B9%D8%AF%D8%A7%D8%AA%20%D8%A7%D9%84%D8%B2%D9%88%D8%A7%D8%AC', NULL, 'header', 9, '2019-02-14 03:15:13', '2019-10-21 19:23:53'),
(12, 'الوقف والاستثمار', '/page/9', NULL, 'header', 0, '2019-10-21 19:15:30', '2019-10-21 19:18:01'),
(13, 'إعانات دعم الايتام', 'http://g-alba.com/news/27/%D8%A5%D8%B9%D8%A7%D9%86%D8%A7%D8%AA%20%D8%AF%D8%B9%D9%85%20%D8%A7%D9%84%D8%A7%D9%8A%D8%AA%D8%A7%D9%85', NULL, 'header', 9, '2019-10-21 19:25:02', '2019-10-21 19:25:02'),
(14, 'إعانات دعم الاسر', 'http://g-alba.com/news/28/%D8%A5%D8%B9%D8%A7%D9%86%D8%A7%D8%AA%20%D8%AF%D8%B9%D9%85%20%D8%A7%D9%84%D8%A7%D8%B3%D8%B1', NULL, 'header', 9, '2019-10-21 19:25:52', '2019-10-21 19:25:52'),
(15, 'كسوة العيد', 'http://g-alba.com/news/29/%D9%83%D8%B3%D9%88%D8%A9%20%D8%A7%D9%84%D8%B9%D9%8A%D8%AF', NULL, 'header', 9, '2019-10-21 19:26:48', '2019-10-21 19:26:48'),
(16, 'كسوة شتوية', 'http://g-alba.com/news/30/%D9%83%D8%B3%D9%88%D8%A9%20%D8%B4%D8%AA%D9%88%D9%8A%D8%A9', NULL, 'header', 9, '2019-10-21 19:27:21', '2019-10-21 19:27:21'),
(23, 'الهيكل التنظيمي', 'https://g-alba.com/page/15', NULL, 'header', 0, '2019-12-22 03:36:38', '2019-12-22 03:36:38'),
(25, 'السياسات', 'http://g-alba.com/Policie', NULL, 'header', 0, '2020-11-10 14:25:56', '2020-11-10 14:25:56'),
(30, 'الميزانية التقدرية', 'https://g-alba.com/page/23', NULL, 'header', 0, '2020-11-12 10:46:23', '2020-11-12 10:46:23'),
(33, 'الميزانية التقديرية لعام 2018م', 'https://g-alba.com/page/27', NULL, 'header', 30, '2020-11-29 13:51:03', '2020-11-29 13:56:21'),
(34, 'الميزانية التقديرية لعام 2019م', 'https://g-alba.com/page/28', NULL, 'header', 30, '2020-11-29 13:51:25', '2020-11-29 13:57:39'),
(35, 'الميزانية التقديرية لعام 2020م', 'https://g-alba.com/page/26', NULL, 'header', 30, '2020-11-29 13:52:31', '2020-11-29 13:52:31'),
(36, 'اجتماع الجمعية العمومية', 'https://g-alba.com/', NULL, 'header', 0, '2020-11-29 14:09:21', '2020-11-29 14:09:21'),
(37, 'اجتماع الجمعية العمومية العادية لعام 2015م', 'https://g-alba.com/page/35', NULL, 'header', 36, '2020-11-29 14:11:55', '2020-11-29 14:52:10'),
(38, 'اجتماع الجمعية العمومية لعام 2018م ( 1 ) ‫‬', 'https://g-alba.com/page/30', NULL, 'header', 36, '2020-11-29 14:13:13', '2020-11-29 14:13:13'),
(39, 'اجتماع الجمعية العمومية لعام 2018م ( 2 )', 'https://g-alba.com/page/31', NULL, 'header', 36, '2020-11-29 14:14:48', '2020-11-29 14:14:48'),
(40, 'اجتماع الجمعية العمومية العادية لعام 2020م', 'https://g-alba.com/page/32', NULL, 'header', 36, '2020-11-29 14:16:16', '2020-11-29 14:16:16'),
(41, 'اجتماع الجمعية العمومية الغير عادية لعام 2020م', 'https://g-alba.com/page/33', NULL, 'header', 36, '2020-11-29 14:17:13', '2020-11-29 14:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `mail_lists`
--

CREATE TABLE `mail_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  `send_to` enum('admin','store','email') COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cronjob_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mail_lists`
--

INSERT INTO `mail_lists` (`id`, `admin_id`, `subject`, `message`, `send_to`, `email`, `cronjob_status`, `created_at`, `updated_at`) VALUES
(3, 1, 'test', '<p>test</p>\r\n', 'admin', NULL, 1, '2017-01-30 09:56:40', '2017-01-30 10:20:23'),
(4, 1, 'تجررررررر', '<p>سسسسسسسسسسس</p>\r\n', 'admin', NULL, 0, '2017-02-05 15:48:34', '2017-02-05 15:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `markets`
--

CREATE TABLE `markets` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `price` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, '2017_01_18_111205_create_users_groups_table', 1),
(4, '2017_01_18_111234_create_settings_table', 1),
(5, '2017_01_19_160726_create_countries_table', 1),
(6, '2017_01_19_173947_create_areas_table', 1),
(7, '2017_01_19_182554_create_cities_table', 1),
(8, '2017_01_19_192033_create_sections_table', 1),
(9, '2017_01_21_123330_create_pages_table', 1),
(10, '2017_01_21_134934_create_links_table', 1),
(11, '2017_01_22_094136_create_contacts_table', 1),
(12, '2017_01_22_094517_create_replay_contacts_table', 1),
(13, '2017_02_01_154946_create_admins_table', 1),
(14, '2017_02_04_133504_create_banners_table', 1),
(29, '2017_02_13_143003_create_packages_table', 5),
(30, '2017_02_13_143422_create_order_packages_table', 6),
(32, '2017_02_18_131612_create_notifcations_table', 7),
(33, '2017_02_27_103156_create_departments_table', 8),
(35, '2017_02_27_110723_create_news_table', 9),
(36, '2017_03_01_082552_create_comments_table', 10),
(37, '2017_03_01_140740_create_reports_table', 11),
(38, '2017_03_05_152652_create_slides_table', 12),
(42, '2017_03_05_172444_create_orders_table', 13),
(44, '2017_03_06_081900_create_order2s_table', 14),
(45, '2017_03_08_111702_create_form_p_d_fs_table', 15),
(46, '2017_03_08_131531_create_order3s_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `user_id`, `department`, `photo`, `youtube`, `created_at`, `updated_at`) VALUES
(6, 'فيديو٢', '<p>فيديو٢</p>', 1, 8, '', 'https://www.youtube.com/watch?v=-HL9HZtEY4s||https://www.youtube.com/watch?v=-HL9HZtEY4s', '2017-03-11 10:11:41', '2017-03-11 10:11:41'),
(8, 'تبرع بالورق الان ...', '<p>يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...يمكنكم الان التبرع بالورق للجميعة وكسب الاجر ...</p>', 1, 5, 'news/1489510056/42011489510056.jpg', '||', '2017-03-14 20:47:36', '2017-03-14 20:48:09'),
(9, 'الصدقة', '<p>الصدقة</p>', 1, 8, 'news/1489510503/62971489510503.png', 'https://www.youtube.com/watch?v=c8ZgD_iENgw||', '2017-03-14 20:53:54', '2017-03-14 20:55:59'),
(10, 'صدقة جارية', '<p>صدقة جارية</p>', 1, 8, '', 'https://www.youtube.com/watch?v=utGuiGF1uYk||', '2017-03-14 20:57:57', '2017-03-14 20:57:57'),
(11, 'اذكار الصباح', '<p>اذكار الصباح</p>', 1, 8, '', 'https://www.youtube.com/watch?v=KHUHrS_ZO9A||', '2017-03-14 20:59:37', '2017-03-14 20:59:37'),
(12, 'تبرع بالورق', '<p>تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..تبرع بالورق ..</p>', 1, 10, 'news/1489510918/37041489510918.jpg', '||', '2017-03-14 21:01:58', '2017-03-14 21:01:58'),
(13, 'صدقة السر', '<p>صدقة السر</p>', 1, 10, 'news/1489511133/27111489511133.jpg', '||', '2017-03-14 21:04:32', '2017-03-14 21:05:33'),
(14, 'صدقة جارية', '<p>صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية&nbsp;صدقة جارية ر</p>', 1, 5, 'news/1540979325/24411540979325.jpg', '||', '2018-10-31 06:48:45', '2018-10-31 06:48:45'),
(15, 'بر الوالدين', '<p>بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين&nbsp;بر الوالدين ر</p>', 1, 5, 'news/1540979477/36201540979477.jpg', '||', '2018-10-31 06:51:17', '2018-10-31 06:51:17'),
(16, 'لا تهجر القران', '<p>لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;لا تهجر القران&nbsp;</p>', 1, 10, 'news/1540979784/1401540979784.jpg', '||', '2018-10-31 06:56:24', '2018-10-31 06:56:24'),
(17, 'كفالة يتيم', '<p>كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;كفالة يتيم&nbsp;</p>', 1, 10, 'news/1540979994/12191540979994.jpg', '||', '2018-10-31 06:59:54', '2018-10-31 06:59:54'),
(18, 'توزيع السلال الغذائية', '<p>توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية توزيع السلال الغذائية توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;</p>', 1, 10, 'news/1540980156/57521540980156.jpg', '||', '2018-10-31 07:02:36', '2018-10-31 07:02:36'),
(19, 'توزيع السلال الغذائية', '<p>توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية توزيع السلال الغذائية توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية&nbsp;توزيع السلال الغذائية توزيع السلال الغذائية&nbsp;</p>', 1, 5, 'news/1540980399/19421540980399.jpg', '||', '2018-10-31 07:06:39', '2018-10-31 07:06:39'),
(23, 'اتقو الله بالصدقة', '<p><span style=\"font-family: DroidArabicKufi-Regular, sans-serif, Arial; font-size: 16px;\">مساعدة الناس بعضهم البعض لا تقف عند حدّ، ولا تقتصر على وسيلة واحدة، ولعلَّ أبرز الطرق التي يمكن للإنسان الغني مساعدة الفقير المحتاج بها هي الصدقة، إذ يجود الغني صاحب المال على الفقير بمبلغ نقديّ أو أيّ شيء آخر يُساعد هذا المحتاج على سدّ احتياجاته، والصدقة لا تكون فقط من الغنيّ للفقير، وإنّما قد تكون من الفقير للفقير، وهو ما يسمّى بالإيثار، أيّ أن تفضّل الآخر على نفسك في الأعطيات، وكل هذه الأعمال سواء الصدقات أم الزكوات أم الإيثار لها أجور عظيمة جدّاً عند الله تعالى، لأنّها تظهر حجم التعاون الذي يوجد بين البشر أنفسهم. يعطي الله للمتصدق أجران؛ أجرٌ في الدنيا، وأجر في الآخرة، فمن منع الله تعالى عنه أجر الدنيا، أعطاه إياه في الآخرة مضافعاً، فالصدقة لم تكن يوماً ما نقصاناً في المال بل على العكس هي زيادة حقيقية ونماء. الأهم من هذا أن المُتصدِّق يكون وجيهاً عند الله تعالى ومُقرَّباً منه في الدنيا والآخرة.</span><br style=\"font-family: DroidArabicKufi-Regular, sans-serif, Arial; font-size: 16px;\" />\r\n<br style=\"font-family: DroidArabicKufi-Regular, sans-serif, Arial; font-size: 16px;\" />\r\n&nbsp;</p>', 1, 5, 'news/1489509894/12191540979994.jpg', '||', '2017-03-02 08:13:24', '2017-03-14 20:44:54'),
(25, 'مساعدة عينية', '<p><strong><span dir=\"RTL\">عبارة عن مواد غذائية أساسية</span>&nbsp;<span dir=\"RTL\">تقدمها الجمعية للفقراء والمحتاجين وهي </span><br />\r\n&nbsp;<span dir=\"RTL\">&quot; أرز دقيق سكر حليب شاهي زيت تمور</span> <span dir=\"RTL\">معجون طماطم دجاج وغيرها من المواد الأساسية ......</span></strong></p>', 1, 12, 'news/1573029366/67081573029366.jpg', '||', '2019-10-21 17:37:03', '2019-11-06 05:36:06'),
(26, 'مساعدات الزواج', '<p><strong>عبارة عن مساعدة نقدية تقدمها الجمعية&nbsp; على الراغبين بالزواج وشروط الحصول عليها كالتالي :</strong></p>\r\n\r\n<ul>\r\n	<li dir=\"RTL\"><strong>أن تكون إقامتك ضمن نطاق خدمات الجمعية الخيرية بمركز علباء .</strong></li>\r\n	<li dir=\"RTL\"><strong>أن يكون هذا هو زواجك الأول .</strong></li>\r\n	<li dir=\"RTL\"><strong>أن يكون تم عقد القران و لم يمضي عليه أكثر من 6 أشهر .</strong></li>\r\n	<li dir=\"RTL\"><strong>أن يكون الزوجين سعوديين .</strong></li>\r\n	<li dir=\"RTL\"><strong>أن تكون تعمل و راتبك شامل البدلات أقل من (6000) ريال .</strong></li>\r\n	<li dir=\"RTL\"><strong>لم يسبق لك أن استفدت بمساعدة مالية من الجمعية الخيرية بمركز علباء .</strong></li>\r\n</ul>\r\n\r\n<p><big><strong>​</strong><strong style=\"text-align: right;\">الاوراق الرسمية المطلوب</strong></big></p>\r\n\r\n<ul>\r\n	<li dir=\"RTL\">&nbsp;<strong>الهوية الوطنية ( الأصل و صورة منها ) .</strong></li>\r\n	<li dir=\"RTL\"><strong>سجل الأسرة ( الأصل و صورة منه ) .</strong></li>\r\n	<li dir=\"RTL\"><strong>عقد النكاح ( الأصل و صورة منه</strong>&nbsp;<strong> ) .</strong></li>\r\n	<li dir=\"RTL\"><strong>إثبات السكن ( صك ملكية أو عقد إيجار ) .</strong></li>\r\n	<li dir=\"RTL\"><strong>تعريف بالراتب شامل البدلات ( وشهادة من التأمينات الاجتماعية للقطاع الخاص ) .</strong></li>\r\n	<li dir=\"RTL\"><strong>تنبيه مهم </strong>&nbsp;إذا تخلف شرط من الشروط المذكورة أعلاه فللجمعية الحق في إلغاء الطلب<span dir=\"LTR\">.</span></li>\r\n</ul>\r\n', 1, 12, 'news/1571693467/3351571693467.png', '||', '2019-10-21 18:31:07', '2019-10-21 18:38:59'),
(27, 'إعانات دعم الايتام', '<p><strong><span dir=\"RTL\">هذه الإعانات تصرف للأسر التي تقوم بحضانة الأيتام ورعايتهم</span><span dir=\"RTL\"> وتحدد قيمة الاعانة من قبل مجلس الادارة في</span> <span dir=\"RTL\">حينها .</span></strong></p>', 1, 12, 'news/1573029483/41171573029484.jpg', '||', '2019-10-21 18:43:56', '2019-11-06 05:38:04'),
(28, 'إعانات دعم الاسر', '<p><strong><span dir=\"RTL\">هذي الاعانات تصرف لأب الاسرة الذي لا يتجاوز دخله أقل من ثلاثة ألاف ريال &quot; ذو الدخل المحدود &quot; وتحدد قيمة الاعانة من قبل مجلس الادارة في حينها .</span></strong></p>', 1, 12, 'news/1573029501/39761573029502.jpg', '||', '2019-10-21 18:50:03', '2019-11-06 05:38:22'),
(29, 'كسوة العيد', '<p><strong><span dir=\"RTL\">هذي الاعانات تصرف لجميع الفئات المستفيدة بالجمعية وهي عبارة عن إعانات مادية وعينية وتصرف بمواسم الاعياد .</span></strong></p>', 1, 12, 'news/1573029552/23411573029552.jpg', '||', '2019-10-21 18:51:29', '2019-11-06 05:39:12'),
(30, 'كسوة شتوية', '<p><strong><span dir=\"RTL\">هذي الاعانات تصرف لجميع الفئات المستفيدة بالجمعية وهي عبارة عن مواد عينية وبطاقات مشتريات .</span></strong></p>', 1, 12, 'news/1573029581/16001573029581.jpg', '||', '2019-10-21 18:52:29', '2019-11-06 05:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `notifcations`
--

CREATE TABLE `notifcations` (
  `id` int(10) UNSIGNED NOT NULL,
  `addby` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `accept_application` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifcations`
--

INSERT INTO `notifcations` (`id`, `addby`, `title`, `content`, `accept_application`, `created_at`, `updated_at`) VALUES
(2, 1, 'test', '<p>test</p>', 0, '2017-02-18 11:37:59', '2017-02-18 11:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `numbers`
--

CREATE TABLE `numbers` (
  `id` int(11) NOT NULL,
  `users` int(11) NOT NULL,
  `teachers` int(11) NOT NULL,
  `sessions` int(11) NOT NULL,
  `keeps` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order2s`
--

CREATE TABLE `order2s` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `housing_type` enum('property','rent','stood','mutual') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `housing_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_home` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retirement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `retirement_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `financial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `financial_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `financial_information` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `financial_information_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('panding','accept','refused') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_pdf_download` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refused_reason` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order2s`
--

INSERT INTO `order2s` (`id`, `user_id`, `housing_type`, `housing_text`, `district_home`, `home_no`, `employer`, `employer_name`, `mobile1`, `mobile2`, `mobile3`, `mobile4`, `salary`, `monthly`, `monthly_salary`, `retirement`, `retirement_salary`, `financial`, `financial_salary`, `financial_information`, `financial_information_salary`, `insurance`, `insurance_salary`, `total`, `balance`, `status`, `file_pdf_download`, `refused_reason`, `created_at`, `updated_at`) VALUES
(4, 1, 'property', '10000', NULL, '111/الديرة', 'وزارة التعليم', 'مراقب أمن وسلامة', '0557096523', '0556330341', '055293825', '0557096523', NULL, 'no', NULL, 'no', NULL, 'no', NULL, 'no', NULL, 'no', NULL, '0', '-15', 'accept', '2,3', NULL, '2017-04-11 14:20:04', '2017-04-11 14:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `order3s`
--

CREATE TABLE `order3s` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pdf_files` longtext COLLATE utf8mb4_unicode_ci,
  `pdf_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('panding','accept','refused') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refused_reason` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` int(11) DEFAULT NULL,
  `birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_of_family` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handicapped` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `handicapped_num` int(11) DEFAULT NULL,
  `sick` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sick_num` int(11) DEFAULT NULL,
  `social_status` enum('male_married','male_unmarried','male_widowed','female_married','female_unmarried','female_widowed') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pension_insurance` enum('pension','insurance','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `ensure_monthly` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yearly_guarantee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_income` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_income` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `have_job` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finance_climate` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finance_climate_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transport_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sheep` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sheep_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camel` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camel_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `farm` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `farm_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_property` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employment_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forestry` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forestry_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basta` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basta_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corporation` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corporation_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('panding','accept','refused') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refused_reason` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `id_card`, `birth`, `gender`, `age`, `num_of_family`, `handicapped`, `handicapped_num`, `sick`, `sick_num`, `social_status`, `pension_insurance`, `salary`, `ensure_monthly`, `yearly_guarantee`, `other_income`, `type_income`, `type_salary`, `have_job`, `title_job`, `finance_climate`, `finance_climate_salary`, `total_salary`, `transport`, `transport_salary`, `sheep`, `sheep_salary`, `camel`, `camel_salary`, `farm`, `farm_salary`, `home_property`, `home_salary`, `employment`, `employment_salary`, `forestry`, `forestry_salary`, `basta`, `basta_salary`, `corporation`, `corporation_salary`, `details`, `status`, `refused_reason`, `created_at`, `updated_at`) VALUES
(2, 1, 'فيحان بركة راشد الرشيدي', 1056287053, '1387/7/1', 'male', '51', '15', 'no', NULL, 'no', NULL, 'male_married', 'no', 5796, 'مراقب أمن وسلامة', NULL, 'yes', 'زوجة موظفة', '3800', 'yes', 'التربية والتعليم', 'no', NULL, '9,596', 'no', NULL, 'no', NULL, 'no', NULL, 'no', NULL, 'yes', NULL, 'no', NULL, 'no', NULL, 'no', NULL, 'no', NULL, 'لايوجد', 'accept', NULL, '2017-03-14 21:15:50', '2017-04-11 14:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `content`, `active`, `created_at`, `updated_at`) VALUES
(1, 'تعليمات التسجيل', '<p>تعليمات التسجيل&nbsp;</p>', 1, '2017-02-19 01:58:47', '2017-03-07 09:40:09'),
(2, 'عن الجمعية', '\r\n<head>\r\n<style type=\"text/css\">\r\ntable.MsoTableGrid\r\n	{border:solid windowtext 1.0pt;\r\n	font-size:11.0pt;\r\n	font-family:\"Calibri\",sans-serif;\r\n	}\r\n p.MsoNormal\r\n	{margin-top:0cm;\r\n	margin-right:0cm;\r\n	margin-bottom:10.0pt;\r\n	margin-left:0cm;\r\n	text-align:right;\r\n	line-height:115%;\r\n	direction:rtl;\r\n	unicode-bidi:embed;\r\n	font-size:11.0pt;\r\n	font-family:\"Calibri\",sans-serif;\r\n	}\r\n.auto-style1 {\r\n	font-size: medium;\r\n	background-color: #FFFF00;\r\n}\r\n.auto-style3 {\r\n	font-weight: bold;\r\n	background-color: #9FF639;\r\n}\r\n.auto-style4 {\r\n	font-weight: normal;\r\n	background-color: #9FF639;\r\n}\r\n.auto-style5 {\r\n	font-size: small;\r\n}\r\n.auto-style6 {\r\n	font-weight: bold;\r\n	background-color: #D5F4B2;\r\n}\r\n.auto-style7 {\r\n	background-color: #D5F4B2;\r\n}\r\n.auto-style8 {\r\n	font-family: Arial, Helvetica, sans-serif;\r\n}\r\n.auto-style9 {\r\n	font-family: Arial, Helvetica, sans-serif;\r\n	font-weight: bold;\r\n}\r\n.auto-style10 {\r\n	font-family: Arial, Helvetica, sans-serif;\r\n	background-color: #FFFF00;\r\n}\r\n.auto-style12 {\r\n	font-family: Arial, Helvetica, sans-serif;\r\n	font-weight: bold;\r\n	font-size: medium;\r\n}\r\n.auto-style13 {\r\n	font-family: Arial, Helvetica, sans-serif;\r\n	font-size: medium;\r\n}\r\n.auto-style14 {\r\n	font-weight: bold;\r\n}\r\n.auto-style15 {\r\n	font-family: \"Adobe Arabic\", serif;\r\n	font-weight: bold;\r\n	font-size: 20pt;\r\n	text-align: center;\r\n}\r\n.auto-style16 {\r\n	text-align: center;\r\n}\r\n.auto-style17 {\r\n	font-size: medium;\r\n}\r\n.auto-style2 {\r\n	border-style: solid;\r\n	border-width: 1px;\r\n	background-color: #9FF639;\r\n}\r\n</style>\r\n</head>\r\n\r\n<p align=\"center\" class=\"MsoNormal\" dir=\"RTL\" style=\"text-align: center; height: 31px;\">\r\n<b>\r\n<span lang=\"AR-SA\" style=\"font-size:16.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:\r\nCalibri;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">\r\n<span class=\"auto-style2\">نبذة تعريفيه عن الجمعية</span> <o:p></o:p></span></b>\r\n</p>\r\n<p align=\"center\" class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:center\"><b>\r\n<span lang=\"AR-SA\" style=\"font-size:16.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif;\r\nmso-ascii-font-family:Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:\r\nCalibri;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\"><o:p>&nbsp;</o:p></span></b></p>\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;tab-stops:283.75pt\">\r\n<span class=\"auto-style17\" lang=\"AR-SA\" style=\"line-height: 115%;\">\r\n<span class=\"auto-style10\"><strong>الجمعية الخيرية بمركز علباء :</strong></span></span><b><span class=\"auto-style8\" lang=\"AR-SA\" style=\"font-size: 20.0pt; line-height: 115%;\">\r\n</span></b><span class=\"auto-style13\" lang=\"AR-SA\" style=\"line-height: 115%;\">\r\n<b>تم تسجيلها في سجل الجمعيات الخيرية تحت رقم ( 579 ) وتاريخ</b><span class=\"auto-style14\" style=\"mso-spacerun:yes\">&nbsp;\r\n</span><b>08/08/1431 هـ وجرى نشر نظامها الاساسي بجريدة أم القرى العدد ( 4317 ) \r\nالصادر في تاريخ 25/08/1431هـ </b></span><b>\r\n<span class=\"auto-style13\" lang=\"AR-SA\" style=\"line-height: 115%;\">\r\n<span style=\"mso-spacerun:yes\">&nbsp;</span>وهي تخدم</span></b><span class=\"auto-style12\" lang=\"AR-SA\" style=\"line-height: 115%;\"> \r\nالفقراء والمحتاجين في مركز علباء والقرى المجاورة لها والفضل يرجع لله أولاً ثم \r\nلولاة أمرنا حفظهم الله ثم لدعم أهل البر والاحسان , جعل الله ما تقدمون في ميزان \r\nحسناتكم</span><span class=\"auto-style8\" lang=\"AR-SA\" style=\"font-size: 18.0pt; line-height: 115%;\"> \r\n.</span><b><span lang=\"AR-SA\" style=\"font-size:20.0pt;line-height:115%;font-family:&quot;Adobe Arabic&quot;,serif\"> <o:p></o:p>\r\n</span></b></p>\r\n<p class=\"auto-style15\" dir=\"RTL\" style=\"tab-stops: 283.75pt\">\r\n<o:p>\r\n----------------------------------------------------------------------------------------------------------------------------</o:p></p>\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;tab-stops:283.75pt\">\r\n<span class=\"auto-style9\" lang=\"AR-SA\" style=\"line-height: 115%;\">\r\n<span class=\"auto-style1\">عدد المستفيدين لدى الجمعية :</span></span><span class=\"auto-style9\" lang=\"AR-SA\" style=\"font-size: 20.0pt; line-height: 115%;\"><span style=\"mso-spacerun:yes\">&nbsp;\r\n</span></span>\r\n<span class=\"auto-style12\" lang=\"AR-SA\" style=\"line-height: 115%;\">مئة وخمسة عشر \r\nمستفيد</span><b><span class=\"auto-style13\" lang=\"AR-SA\" style=\"line-height: 115%;\"> \r\n.</span><span class=\"auto-style8\" lang=\"AR-SA\" style=\"font-size: 20.0pt; line-height: 115%;\"> <o:p></o:p>\r\n</span></b></p>\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"tab-stops:283.75pt\">\r\n<span class=\"auto-style13\" lang=\"AR-SA\" style=\"line-height: 115%;\"><strong>\r\nالرسالة التي تقدمها الجمعية : </strong></span>\r\n<span class=\"auto-style12\" lang=\"AR-SA\" style=\"line-height: 115%;\">منشئة خيرية \r\nتسعى للارتقاء بمستوى حياة المجتمع عامة والمحتاجين خاصة في كل المجالات وفق الشرع \r\nالحنيف بشفافية ومهنية عالية ومن خلال التعاون مع الجهات ذات العلاقة واعتماد العمل \r\nالمتميز . <o:p></o:p></span></p>\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"tab-stops:283.75pt\"><o:p></o:p>\r\n</p>\r\n<p class=\"auto-style16\" dir=\"RTL\" style=\"tab-stops:283.75pt\">\r\n<o:p>\r\n----------------------------------------------------------------------------------------------------------------------------<br></o:p>\r\n<span lang=\"AR-SA\" style=\"font-size:18.0pt;line-height:115%;font-family:&quot;Adobe Arabic&quot;,serif\">\r\n<o:p>&nbsp;<table align=\"center\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" class=\"MsoTableGrid\" dir=\"rtl\" style=\"width:466.1pt;border-collapse:collapse;\r\n border:none;mso-border-alt:double windowtext 1.5pt;mso-yfti-tbllook:1184;\r\n mso-table-lspace:9.0pt;margin-left:6.75pt;mso-table-rspace:9.0pt;margin-right:\r\n 6.75pt;mso-table-anchor-vertical:page;mso-table-anchor-horizontal:margin;\r\n mso-table-left:center;mso-table-top:435.8pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;\r\n mso-table-dir:bidi;mso-border-insideh:1.5pt double windowtext;mso-border-insidev:\r\n 1.5pt double windowtext\" width=\"621\">\r\n	<tr style=\"mso-yfti-irow:0;mso-yfti-firstrow:yes;height:25.5pt\">\r\n		<td class=\"auto-style3\" style=\"width:168.4pt;border:double windowtext 1.5pt;padding:\r\n  0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span class=\"auto-style5\" lang=\"AR-SA\" style=\"font-family: &quot;Arial&quot;,sans-serif; mso-ascii-font-family: Calibri; mso-ascii-theme-font: minor-latin; mso-hansi-font-family: Calibri; mso-hansi-theme-font: minor-latin; mso-bidi-theme-font: minor-bidi\">\r\n		اسم الجمعية<o:p></o:p></span></p>\r\n		</td>\r\n		<td class=\"auto-style4\" colspan=\"2\" style=\"width:297.7pt;border:double windowtext 1.5pt;\r\n  border-right:none;mso-border-right-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"397\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\"><strong>\r\n		الجمعية الخيرية بمركز علباء </strong> <o:p></o:p></span></p>\r\n		</td>\r\n	</tr>\r\n	<tr style=\"mso-yfti-irow:1;height:25.5pt\">\r\n		<td style=\"width:168.4pt;border:double windowtext 1.5pt;border-top:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:16.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">رئيس مجلس \r\n		الادارة<o:p></o:p></span></p>\r\n		</td>\r\n		<td style=\"width:153.25pt;border-top:none;border-left:double windowtext 1.5pt;\r\n  border-bottom:double windowtext 1.5pt;border-right:none;mso-border-top-alt:\r\n  double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"204\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<b>\r\n		<span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">هزاع ماجد \r\n		أبالصفاء<o:p></o:p></span></b></p>\r\n		</td>\r\n		<td style=\"width:144.45pt;border-top:none;border-left:double windowtext 1.5pt;\r\n  border-bottom:double windowtext 1.5pt;border-right:none;mso-border-top-alt:\r\n  double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"193\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<b>\r\n		<span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">0595666677<o:p></o:p></span></b></p>\r\n		</td>\r\n	</tr>\r\n	<tr style=\"mso-yfti-irow:2;height:25.5pt\">\r\n		<td class=\"auto-style7\" style=\"width:168.4pt;border:double windowtext 1.5pt;border-top:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:16.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">المدير \r\n		التنفيذي<o:p></o:p></span></p>\r\n		</td>\r\n		<td class=\"auto-style6\" style=\"width:153.25pt;border-top:none;border-left:double windowtext 1.5pt;\r\n  border-bottom:double windowtext 1.5pt;border-right:none;mso-border-top-alt:\r\n  double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"204\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">محمد سند \r\n		المطيري<o:p></o:p></span></p>\r\n		</td>\r\n		<td class=\"auto-style6\" style=\"width:144.45pt;border-top:none;border-left:double windowtext 1.5pt;\r\n  border-bottom:double windowtext 1.5pt;border-right:none;mso-border-top-alt:\r\n  double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"193\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">0580999030<o:p></o:p></span></p>\r\n		</td>\r\n	</tr>\r\n	<tr style=\"mso-yfti-irow:3;height:25.5pt\">\r\n		<td style=\"width:168.4pt;border:double windowtext 1.5pt;border-top:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:16.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">رقم وتاريخ \r\n		التسجيل<o:p></o:p></span></p>\r\n		</td>\r\n		<td colspan=\"2\" style=\"width:297.7pt;border-top:none;border-left:\r\n  double windowtext 1.5pt;border-bottom:double windowtext 1.5pt;border-right:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"397\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<b>\r\n		<span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">579 بتاريخ \r\n		08/08/1431هـ <o:p></o:p></span></b></p>\r\n		</td>\r\n	</tr>\r\n	<tr style=\"mso-yfti-irow:4;height:25.5pt\">\r\n		<td class=\"auto-style7\" style=\"width:168.4pt;border:double windowtext 1.5pt;border-top:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:16.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">جهة الاشراف<o:p></o:p></span></p>\r\n		</td>\r\n		<td class=\"auto-style6\" colspan=\"2\" style=\"width:297.7pt;border-top:none;border-left:\r\n  double windowtext 1.5pt;border-bottom:double windowtext 1.5pt;border-right:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"397\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">وزارة العمل \r\n		والتنمية الاجتماعية<o:p></o:p></span></p>\r\n		</td>\r\n	</tr>\r\n	<tr style=\"mso-yfti-irow:5;height:25.5pt\">\r\n		<td style=\"width:168.4pt;border:double windowtext 1.5pt;border-top:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:16.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">نطاق عمل \r\n		الجمعية<o:p></o:p></span></p>\r\n		</td>\r\n		<td colspan=\"2\" style=\"width:297.7pt;border-top:none;border-left:\r\n  double windowtext 1.5pt;border-bottom:double windowtext 1.5pt;border-right:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"397\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<b>\r\n		<span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">مركز علباء \r\n		والقرى المجاورة لها<o:p></o:p></span></b></p>\r\n		</td>\r\n	</tr>\r\n	<tr style=\"mso-yfti-irow:6;height:25.5pt\">\r\n		<td class=\"auto-style7\" style=\"width:168.4pt;border:double windowtext 1.5pt;border-top:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:16.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">العنوان<o:p></o:p></span></p>\r\n		</td>\r\n		<td class=\"auto-style6\" colspan=\"2\" style=\"width:297.7pt;border-top:none;border-left:\r\n  double windowtext 1.5pt;border-bottom:double windowtext 1.5pt;border-right:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"397\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">القصيم – \r\n		محافظة البدائع - مركز علباء<o:p></o:p></span></p>\r\n		</td>\r\n	</tr>\r\n	<tr style=\"mso-yfti-irow:7;height:25.5pt\">\r\n		<td style=\"width:168.4pt;border:double windowtext 1.5pt;border-top:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:16.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">الموقع \r\n		الإلكتروني<o:p></o:p></span></p>\r\n		</td>\r\n		<td colspan=\"2\" style=\"width:297.7pt;border-top:none;border-left:\r\n  double windowtext 1.5pt;border-bottom:double windowtext 1.5pt;border-right:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"397\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<b><span dir=\"LTR\" style=\"font-size:12.0pt\">www.g-alba.com</span><span lang=\"AR-SA\" style=\"font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\"><o:p></o:p></span></b></p>\r\n		</td>\r\n	</tr>\r\n	<tr style=\"mso-yfti-irow:8;height:25.5pt\">\r\n		<td class=\"auto-style7\" style=\"width:168.4pt;border:double windowtext 1.5pt;border-top:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:16.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">البريد \r\n		الإلكتروني<o:p></o:p></span></p>\r\n		</td>\r\n		<td class=\"auto-style6\" colspan=\"2\" style=\"width:297.7pt;border-top:none;border-left:\r\n  double windowtext 1.5pt;border-bottom:double windowtext 1.5pt;border-right:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"397\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span dir=\"LTR\" style=\"font-size:12.0pt\">alabaociation@gmail.com<o:p></o:p></span></p>\r\n		</td>\r\n	</tr>\r\n	<tr style=\"mso-yfti-irow:9;mso-yfti-lastrow:yes;height:25.5pt\">\r\n		<td style=\"width:168.4pt;border:double windowtext 1.5pt;border-top:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;padding:0cm 5.4pt 0cm 5.4pt;\r\n  height:25.5pt\" width=\"225\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<span lang=\"AR-SA\" style=\"font-size:16.0pt;font-family:&quot;Arial&quot;,sans-serif;mso-ascii-font-family:\r\n  Calibri;mso-ascii-theme-font:minor-latin;mso-hansi-font-family:Calibri;\r\n  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-bidi\">صفحة تويتر <o:p></o:p>\r\n		</span></p>\r\n		</td>\r\n		<td colspan=\"2\" style=\"width:297.7pt;border-top:none;border-left:\r\n  double windowtext 1.5pt;border-bottom:double windowtext 1.5pt;border-right:\r\n  none;mso-border-top-alt:double windowtext 1.5pt;mso-border-right-alt:double windowtext 1.5pt;\r\n  padding:0cm 5.4pt 0cm 5.4pt;height:25.5pt\" width=\"397\">\r\n		<p align=\"center\" dir=\"RTL\" style=\"margin-bottom: 0cm; line-height: normal; mso-element: frame; mso-element-frame-hspace: 9.0pt; mso-element-wrap: around; mso-element-anchor-vertical: page; mso-element-anchor-horizontal: margin; mso-element-left: center; mso-element-top: 435.8pt; mso-height-rule: exactly\">\r\n		<b><span dir=\"LTR\" style=\"font-size:12.0pt\">@ic_d6<o:p></o:p></span></b></p>\r\n		</td>\r\n	</tr>\r\n</table>\r\n</o:p></span></p>\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"tab-stops:283.75pt\"><b>\r\n<span lang=\"AR-SA\" style=\"font-size:20.0pt;line-height:115%;font-family:&quot;Adobe Arabic&quot;,serif\"><o:p>\r\n&nbsp;</o:p></span></b></p>\r\n<p class=\"MsoNormal\" dir=\"RTL\" style=\"text-align:justify;line-height:150%;\r\ntab-stops:138.15pt 281.8pt\">\r\n<span dir=\"LTR\" style=\"font-size:14.0pt;line-height:\r\n150%\"><o:p>&nbsp;</o:p></span></p>\r\n', 1, '2017-03-14 20:35:16', '2019-02-14 03:12:50'),
(4, 'الرؤية', '<p>الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;الرؤية هنا&nbsp;</p>', 1, '2018-10-31 23:49:52', '2018-10-31 23:49:52'),
(5, 'الرسالة', '<p><em><strong>منشئة خيرية تسعى للإرتقاء لمستوى حياة المجتمع عامة والمحتاجين خاصة بكل المجالات وفق الشرع الحنيف بشفافية ومهنية عالية ومن خلال تعاون الجهات ذات العلاقة بالعمل الخيري وأعتماد العمل المؤسسي المتميز .</strong></em></p>', 1, '2018-10-31 23:50:44', '2018-12-30 10:27:52'),
(6, 'خدمات المستفيدين', 'تعد خدمات المستفيدين من اهم اولويات الجميعة الخيرية بمركز علباء وذلك بحرص  دائم على أن نكون دائما وابدا عند حسن ظن الجميع بتقديم افضل الخدمات للجميع ...مرحبين بأي استفسار او تواصل من قبل الجميع', 1, '2018-10-31 23:57:14', '2018-10-31 23:57:14'),
(7, 'الاسر المتعففه', 'الاسر ا لمتعففة نحن هنا لخدمتهم وتقديم يد العون بعد الله سبحانه وتعالى', 1, '2018-10-31 23:57:37', '2018-10-31 23:57:37');
INSERT INTO `pages` (`id`, `name`, `content`, `active`, `created_at`, `updated_at`) VALUES
(8, 'الحسابات البنكية', '\r\n<head>\r\n<style type=\"text/css\">\r\n.auto-style1 {\r\n	text-align: right;\r\n	text-indent: -18.0pt;\r\n	line-height: 115%;\r\n	direction: rtl;\r\n	font-size: 11.0pt;\r\n	font-family: Calibri, sans-serif;\r\n	margin-left: 0cm;\r\n	margin-right: 36.0pt;\r\n	margin-top: 0cm;\r\n	margin-bottom: .0001pt;\r\n}\r\n.auto-style4 {\r\n	background-color: #F1EB91;\r\n}\r\n p.MsoNormal\r\n	{margin-top:0cm;\r\n	margin-right:0cm;\r\n	margin-bottom:10.0pt;\r\n	margin-left:0cm;\r\n	text-align:right;\r\n	line-height:115%;\r\n	direction:rtl;\r\n	unicode-bidi:embed;\r\n	font-size:11.0pt;\r\n	font-family:\"Calibri\",\"sans-serif\";\r\n	}\r\n.auto-style2 {\r\n	text-align: right;\r\n	line-height: 115%;\r\n	direction: rtl;\r\n	font-size: 11.0pt;\r\n	font-family: Calibri, sans-serif;\r\n	margin-left: 0cm;\r\n	margin-right: 36.0pt;\r\n	margin-top: 0cm;\r\n	margin-bottom: .0001pt;\r\n}\r\n.auto-style3 {\r\n	text-align: right;\r\n	line-height: 115%;\r\n	direction: rtl;\r\n	font-size: 11.0pt;\r\n	font-family: Calibri, sans-serif;\r\n	margin-left: 0cm;\r\n	margin-right: 36.0pt;\r\n	margin-top: 0cm;\r\n	margin-bottom: 10.0pt;\r\n}\r\n.auto-style5 {\r\n	font-family: Tahoma;\r\n}\r\n.auto-style6 {\r\n	font-family: Tahoma;\r\n	font-size: small;\r\n	background-color: #F1EB91;\r\n}\r\n.auto-style7 {\r\n	font-family: Tahoma;\r\n	font-weight: bold;\r\n	font-size: small;\r\n}\r\n.auto-style8 {\r\n	font-family: Tahoma;\r\n	font-size: small;\r\n}\r\n.auto-style9 {\r\n	font-size: small;\r\n}\r\n</style>\r\n</head>\r\n\r\n<table style=\"width: 100%\">\r\n	<tr>\r\n		<td>\r\n		<img alt=\"نتيجة بحث الصور عن مصرف الانماء\" src=\"data:image/jpeg;base64,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\"></td>\r\n		<td>\r\n		<img alt=\"RnQTn5f7vg38STnejS6rvXr16tWrV69evXr16tWrV69evXr16tWrV69evXp1pf8BZOKqQMdh2jcAAAAASUVORK5CYII= (386×130)\" src=\"data:image/png;base64,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\"></td>\r\n	</tr>\r\n	<tr>\r\n		<td class=\"auto-style8\">\r\n		<p class=\"auto-style1\" dir=\"RTL\" style=\"mso-list: l0 level1 lfo1; unicode-bidi: embed;\">\r\n		<![if !supportLists]><b style=\"mso-ansi-font-weight:normal\">\r\n		<span style=\"font-size:20.0pt;line-height:\r\n115%;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\"><span style=\"mso-list:Ignore\">·<span class=\"auto-style8\" style=\"font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;&nbsp;\r\n		</span></span></span></b><![endif]><b>\r\n		<span class=\"auto-style6\" lang=\"AR-SA\" style=\"line-height: 115%;\">حسابات \r\n		الجمعية لدى مصرف الانماء : </span>\r\n		<span dir=\"LTR\" style=\"font-size:20.0pt;\r\nline-height:115%;font-family:&quot;Adobe Arabic&quot;,&quot;serif&quot;\"><o:p></o:p>\r\n		</span></b></p>\r\n		<p class=\"auto-style2\" dir=\"RTL\" style=\"unicode-bidi: embed;\">\r\n		<span class=\"auto-style7\" dir=\"LTR\" style=\"line-height: 115%;\"><o:p>&nbsp;</o:p></span></p>\r\n		<p class=\"auto-style2\" dir=\"RTL\" style=\"unicode-bidi: embed;\"><b>\r\n		<span class=\"auto-style8\" lang=\"AR-SA\" style=\"line-height: 115%;\">الحساب \r\n		العام : </span>\r\n		<span class=\"auto-style8\" dir=\"LTR\" style=\"line-height: 115%;\">\r\n		SA5905000068288819900000<o:p></o:p></span></b></p>\r\n		<p class=\"auto-style2\" dir=\"RTL\" style=\"unicode-bidi: embed;\"><b>\r\n		<span class=\"auto-style8\" lang=\"AR-SA\" style=\"line-height: 115%;\">حساب \r\n		الزكاة : </span>\r\n		<span class=\"auto-style8\" dir=\"LTR\" style=\"line-height: 115%;\">\r\n		SA3205000068288819900001<o:p></o:p></span></b></p>\r\n		<p class=\"auto-style2\" dir=\"RTL\" style=\"unicode-bidi: embed;\"><b>\r\n		<span class=\"auto-style8\" lang=\"AR-SA\" style=\"line-height: 115%;\">حساب \r\n		الوقف : </span>\r\n		<span class=\"auto-style8\" dir=\"LTR\" style=\"line-height: 115%;\">\r\n		SA0505000068288819900002<o:p></o:p></span></b></p>\r\n		<p class=\"auto-style3\" dir=\"RTL\" style=\"unicode-bidi: embed;\"><b>\r\n		<span class=\"auto-style8\" lang=\"AR-SA\" style=\"line-height: 115%;\">حساب \r\n		ترميم المساجد : </span>\r\n		<span class=\"auto-style8\" dir=\"LTR\" style=\"line-height: 115%;\">\r\n		SA7505000068288819900003</span><span style=\"font-size:20.0pt;\r\nline-height:115%;font-family:&quot;Adobe Arabic&quot;,&quot;serif&quot;\">\r\n		<span lang=\"AR-SA\"><o:p></o:p></span></span></b></p>\r\n		</td>\r\n		<td>\r\n		<p class=\"auto-style1\" dir=\"RTL\" style=\"mso-list: l0 level1 lfo1; unicode-bidi: embed;\">\r\n		<![if !supportLists]><b style=\"mso-ansi-font-weight:normal\">\r\n		<span style=\"font-size:20.0pt;line-height:\r\n115%;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\"><span style=\"mso-list:Ignore\">·<span class=\"auto-style8\" style=\"font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;\">&nbsp;&nbsp;&nbsp;\r\n		<span class=\"auto-style4\">&nbsp;</span></span></span></span></b><![endif]><b><span class=\"auto-style6\" lang=\"AR-SA\" style=\"line-height: 115%;\">حسابات \r\n		الجمعية لدى مصرف الراجحي :</span><span class=\"auto-style8\" lang=\"AR-SA\" style=\"line-height: 115%;\"><o:p>&nbsp;</o:p></span></b></p>\r\n		<p class=\"MsoNormal\" dir=\"RTL\"><b>\r\n		<span class=\"auto-style9\" lang=\"AR-SA\" style=\"line-height: 115%;\">\r\n		<span class=\"auto-style5\" style=\"mso-spacerun:yes\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n		</span></span>\r\n		<span class=\"auto-style8\" lang=\"AR-SA\" style=\"line-height: 115%;\">الحساب \r\n		العام : </span>\r\n		<span class=\"auto-style8\" dir=\"LTR\" style=\"line-height: 115%;\">\r\n		SA5780000167608010134335<o:p></o:p></span></b></p>\r\n		<p class=\"MsoNormal\" dir=\"RTL\"><b>\r\n		<span class=\"auto-style9\" lang=\"AR-SA\" style=\"line-height: 115%;\">\r\n		<span class=\"auto-style5\" style=\"mso-spacerun:yes\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n		</span></span>\r\n		<span class=\"auto-style8\" lang=\"AR-SA\" style=\"line-height: 115%;\">حساب \r\n		الوقف : </span>\r\n		<span class=\"auto-style8\" dir=\"LTR\" style=\"line-height: 115%;\">\r\n		SA9080000167608010600020<o:p></o:p></span></b></p>\r\n		<p class=\"MsoNormal\" dir=\"RTL\"><b>\r\n		<span class=\"auto-style9\" lang=\"AR-SA\" style=\"line-height: 115%;\">\r\n		<span class=\"auto-style5\" style=\"mso-spacerun:yes\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n		</span></span>\r\n		<span class=\"auto-style8\" lang=\"AR-SA\" style=\"line-height: 115%;\">حساب \r\n		الزكاة<span style=\"mso-spacerun:yes\">&nbsp; </span>: </span>\r\n		<span class=\"auto-style8\" dir=\"LTR\" style=\"line-height: 115%;\">\r\n		SA8980000167608010600038</span><span style=\"font-size:20.0pt;\r\nline-height:115%;font-family:&quot;Adobe Arabic&quot;,&quot;serif&quot;\">\r\n		<span lang=\"AR-SA\"><o:p></o:p></span></span></b></p>\r\n		<p class=\"MsoNormal\" dir=\"RTL\"><b>\r\n		<span class=\"auto-style9\" lang=\"AR-SA\" style=\"line-height: 115%;\">\r\n		<span class=\"auto-style5\" style=\"mso-spacerun:yes\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n		</span></span>\r\n		<span class=\"auto-style8\" lang=\"AR-SA\" style=\"line-height: 115%;\">حساب \r\n		الايتام : </span>\r\n		<span class=\"auto-style8\" dir=\"LTR\" style=\"line-height: 115%;\">\r\n		SA1580000167608010600012<o:p></o:p></span></b></p>\r\n		</td>\r\n	</tr>\r\n</table>\r\n', 1, '2018-12-23 12:56:43', '2018-12-23 12:58:52'),
(9, 'أوقاف الجمعية واستثماراتها', '<h2 dir=\"RTL\"><strong>أوقاف الجمعية واستثماراتها : </strong></h2>\r\n\r\n<p dir=\"RTL\"><strong>تم بحمد لله ورعايته الموافقة بالإجماع تفويض مجلس الادارة العمومية لأعضاء مجلس الادارة باستثمار أموال الجمعية وذلك باجتماع الجمعية العمومية العادية والمنعقدة يوم الثلاثاء الموافق 16/07/1436هـ وبحضور مندوب وزارة العمل والتنمية الاجتماعية الاستاذ / أحمد علي النجيبان .</strong></p>\r\n\r\n<h2 dir=\"RTL\"><strong>موقع الاستثمار : </strong></h2>\r\n\r\n<p dir=\"RTL\"><strong>الواقع في حي القادسية بمدينة الرياض .</strong></p>\r\n\r\n<h2 dir=\"RTL\"><strong>قيمة الاستثمار : </strong></h2>\r\n\r\n<p dir=\"RTL\"><strong>بثمن وقدرة 3750000 ثلاثة مليون وسبعمائة وخمسون ألف ريال .</strong></p>', 1, '2019-10-21 19:16:55', '2019-10-21 19:16:55'),
(15, 'الهيكل التنظيمي لمؤسسي الجمعية', '<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\r\n<html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n\r\n<head>\r\n<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />\r\n<title>Untitled 2</title>\r\n<style type=\"text/css\">\r\n.auto-style1 {\r\n	text-align: center;\r\n}\r\n</style>\r\n</head>\r\n\r\n<body>\r\n<p class=\"auto-style1\"><img src=\"https://c.top4top.io/p_17958t3fc1.jpg\" /></p>\r\n</body>\r\n\r\n</html>\r\n', 1, '2019-10-21 19:16:55', '2019-10-21 19:16:55');
INSERT INTO `pages` (`id`, `name`, `content`, `active`, `created_at`, `updated_at`) VALUES
(16, 'آلية تعيين المدير التنفيذي وشؤونه الوظيفية وتعويضاته المالية بالجمعية الخيرية بمركز علباء', '<h1><span dir=\"RTL\">آلية تعيين المدير التنفيذي وشؤونه الوظيفية وتعويضاته المالية بالجمعية الخيرية بمركز علباء</span></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><span dir=\"RTL\">أولاً </span></strong><strong><span dir=\"RTL\">/ </span></strong><strong><span dir=\"RTL\">مهام المدير التنفيذي :&nbsp; يتولى المدير التنفيذي الأعمال الإدارية كافة ومنها على وجه الخصوص .&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- رسم خطط الجمعية وفق مستوياتها انطلاقا من السياسة العامة وأهدافها ومتابعة تنفيذه بعد اعتمادها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- رسم أسس والمعايير لحوكمة الجمعية لا تتعارض مع أحكام النظام واللائحة التنفيذية وهذه اللائحة والإشراف على تنفيذها ومراقبة مدى فاعليتها بعد اعتمادها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- إعداد اللوائح الإجرائية والتنظيمية اللازمة التي تضمن قيام الجمعية بأعمالها وتحقيق أهدافها ومتابعة تنفيذها بعد اعتمادها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- تنفيذ أنظمة الجمعية ولوائحها وقراراتها وتعليماتها وتعميمها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- توفير احتياجات الجمعية من البرامج والمشروعات والموارد والتجهيزات اللازمة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">6- اقتراح قواعد استثمار الفائض من أموال الجمعية وآليات تفعيلها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">7- رسم وتنفيذ الخطط والبرامج التطويرية والتدريبية التي تنعكس على تحسين أداء منسوبي الجمعية وتطويرها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">8- رسم سياسة مكتوبة تنظم العلاقة مع المستفيدين من خدمات الجمعية وتضمن تقديم العناية اللازمة لهم والإعلان عنها بعد اعتمادها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">9- تزويد الوزرة بالبيانات والمعلومات عن الجمعية وفق النماذج المعتمدة من الوزارة والتعاون في إعداد التقارير التبعية والسنوية بعد عرضها على مجلس الإدارة واعتمادها وتحديث بيانات الجمعية بصفة دورية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">10- الرفع بترشيح أسماء كبار الموظفين في الجمعية لمجلس الإدارة مع تحديد صلاحياتهم ومسؤولياتهم للاعتماد .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">11- متابعة سير أعمال الجمعية ووضع المؤشرات لقياس الأداء والانجازات فيها على مستوى الخطط والموارد والتحقق من اتجاهها نحو الأهداف ومعالجة المشكلات وإيجاد الحلول لها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">12- مشاركته في إعداد التقارير المالية ومشروع الموازنة التقديرية للجمعية&nbsp; وفقا للمعايير المعتبرة تمهيدا لاعتمادها </span></strong>&nbsp;</p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">13- إعداد التقويم الوظيفي للعاملين في الجمعية ورفعه لاعتماده .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">14- تولي أمانة مجلس الإدارة وإعداد جدول أعمال اجتماعاته وكتابة محاضر الجلسات والعمل على تنفيذ القرارات الصادرة عنه .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">15- الإشراف على الأنشطة والمناسبات التي تقوم بها الجمعية كافة وتقديم تقارير عنها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">16- إعداد التقارير الدورية لأعمال الجمعية كافة توضح الإنجازات والمعوقات وسبل علاجها وتقديمها لمجلس الإدارة لاعتمادها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">17- أي مهام أخرى يكلف بها من قبل مجلس الإدارة في مجال اختصاصه . &nbsp;</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">ثانياً /</span></strong> <strong><span dir=\"RTL\">للمدير التنفيذي في سبيل&nbsp; انجاز المهام المناطة به الصلاحيات الآتية : </span></strong>&nbsp;&nbsp;</p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- انتداب منسوبي الجمعية لإنهاء أعمال خاصة بها أو حضور مناسبات أو لقاءات أو زيارات أو دورات أو غيرها وحسب ما تقتضيه مصلحة العمل وبما لا يتجاوز شهرا في السنة على ألا تزيد الأيام المتصلة عن عشرة أيام .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- متابعة قرارات تعيين الموارد البشرية اللازمة بالجمعية وإعداد عقودهم ومتابعة أعمالهم والرفع لمجلس الإدارة بتوقيع العقود وإلغائها وقبول الاستقالات للاعتماد .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- اعتماد تقارير الأداء للمدير وتكليف الموظفين لتنفيذ جميع البرامج والأنشطة على مستوى الجمعية وفق الخطط المعتمدة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- اعتماد إجازات منسوبي الجمعية كافة بعد موافقة مجلس الإدارة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- تفويض صلاحيات رؤساء الأقسام وفق الصلاحيات الممنوحة له .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">6- تطبيق مواد لائحة تنظيم العمل بالجمعية المعتمدة من مجلس الإدارة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">ثالثاً / علاقات العمل :</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- معاملة المدير بشكل لائق من قبل مجلس إدارة الجمعية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- إعطاء المدير الوقت الكافي اللازم لممارسة&nbsp; حقوقه دون المساس بأجره وفق ما نصت عليه الفقرة ( 2 ) من المادة 61 من نظام العمل السعودي .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;</p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- تمكين المدير من أداء عمله في الوقت المحدد وفق ما جاء في المادة 62 من نظام العمل السعودي .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- يجب على المدير التنفيذي تنفيذ كافة التعليمات والأوامر الصادرة من رؤسائه على الوجه الأكمل ما لم يكن في هذه التعليمات ما يخالف النظام أو العقد أو الآداب العامة أو يعرضه للخطر .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- يجب على المدير التنفيذي احترام نظم ومواعيد العمل ويقصد بذلك المحافظة على نظم ومواعيد العمل الحالية والمستقبلية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">6- يجب على المدير التنفيذي المحافظة على أموال وممتلكات الجمعية وحقوقها لدى الغير وخاصة تلك المسلمة إليه والتي يستخدمها في عمله .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">7- لا يجوز للمدير الجمع بين العمل بالجمعية وأي عمل أخر إلا بأذن كتابي من صاحب الصلاحية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">8- يتعين على المدير التنفيذي المحافظة على أسرار العمل وعلى المعلومات التي قد تصل إليه بحكم وظيفته حتى بعد تركه الخدمة، وخاصة تلك التي من شأنها الإضرار بمصالح الجمعية </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">9- على المدير ألا يستغل وظيفته أو علاقاته في تحقيق أية مكاسب شخصية مادية كانت أم معنوية </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">رابعاً / الشروط التي يجب أن تتوفر في التقدم لشغل وظيفة المدير التنفيذي : </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- أن يكون سعودي الجنسية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- أن يكون كامل الأهلية المعتبرة شرعا .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- ألا يقل عمره عن&nbsp; (25 ) سنة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- أن يمتلك خبر ة لا تقل عن&nbsp; ( 3 ) سنوات في العمل الإداري .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- ألا تقل شهادته عن دبلوم .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">6- أن يكون متفرغاً لإدارة الجمعية بعد ترشيحه .</span></strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">خامساً / آلية توظيف المدير التنفيذي :</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- تشكيل لجنة إعداد معايير اختيار وترشيح مدير الجمعية برئاسة رئيس مجلس الإدارة أو الأمين العام وعضوية 3 من أعضاء مجلس الإدارة والاستعانة بأهل الاختصاص </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- الإعلان عبر وسائل التواصل الاجتماعي الخاصة بالجمعية&nbsp; وموقع الجمعية&nbsp; الالكتروني مع إيضاح الشروط والمزايا للوظيفة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- استقبال طلبات التقدم لوظيفة المدير مرفقاً بها السير الذاتية للمتقدمين وصور عن المؤهلات العلمية والشهادات المهنية وشهادات الخبرة والوثائق المعززة للمهارات والقدرات القيادية عبر الايميل فقط .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- يُرسل لمقدم الطلب إشعار الكتروني يفيد وصول طلبه .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- تحديد موعد المقابلة وإجراء الاختبارات المختارة من قبل اللجنة المشكلة</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">6- فرز النتائج وإعلانها</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">7- اعتماد ترشيحه بقرار إداري من مجلس إدارة الجمعية</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">9- رفع مصوغات ترشيحه للوزارة للموافقة حسب النظام .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">10- تسجيل المدير في نظام التأمينات الاجتماعية بعد حصوله على موافقة الوزارة على التعيين .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">11- يخضع المدير التنفيذي&nbsp; لفترة اختبار مدتها ثلاثة أشهر ولا تحتسب منها فترات الإجازات فيما عدا إجازات الأعياد أو أي غياب آخر باستثناء أيام الراحة الأسبوعية إذا وقعت خلال فترة الاختبار وتبدأ مدة الاختبار من تاريخ مباشرة العمل الفعلية فإذا لم يثبت صلاحية الموظف أثناء هذه المدة يجوز إنهاء خدمته خلالها من جانب الجمعية دون أي تعويض أو مكافأة في نطاق حكم المادة (54.53) من نظام العمل السعودي وعند ثبوت صلاحيته للعمل تحتسب فترة التجربة ضمن مدة الخدمة في الجمعية</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"center\">&nbsp;</p>\r\n\r\n<p align=\"center\"><strong><span dir=\"RTL\">تحديد التعويضات المالية للمدير : </span></strong></p>\r\n\r\n<p align=\"center\"><strong><span dir=\"RTL\">أولاً / الأجور : </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- يجب دفع أجر المدير التنفيذي&nbsp; وكل مبلغ مستحق له بالعملة السعودية طبقاً للأحكام الواردة بالمادة تسعين من نظام العمل السعودي .</span></strong></p>\r\n\r\n<p align=\"right\"><strong>. </strong><strong><span dir=\"RTL\">2- يستحق المدير التنفيذي راتبه اعتبارا من تاريخ مباشرته العمل فعلاً ويُصرف في نهاية كل شهر ميلادي</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- إذا تسبب&nbsp; المدير التنفيذي&nbsp; في فقد أو إتلاف أو تدمير آلات تمتلكها الجمعية أو هي في عهدته وكان ذلك ناشئاً عن خطأ منه أو مخالفته تعليمات صاحب الصلاحية ولم يكن نتيجة لخطأ الغير أو ناشئاً عن قوة قاهرة، جاز للجمعية أن تقتطع من أجره وفق ما جاء بالمادة الواحدة والتسعين من نظام العمل السعودي .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- لا يجوز حسم أي مبلغ من أجور&nbsp; المدير التنفيذي&nbsp; لقاء حقوق خاصة دون موافقة خطية منه , إلا في الحالات الواردة بالمادة الثانية والتسعين من نظام العمل السعودي .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- لا يجوز (في جميع الأحوال) أن تزيد نسبة المبالغ المحسومة على نصف أجر المدير التنفيذي المستحق، ما لم يثبت لدى هيئة تسوية الخلافات العمالية إمكان الزيادة في الحسم على تلك النسبة، أو يثبت لديها حاجة المدير التنفيذي إلى أكثر من نصف أجره ، وفي هذه الحالة الأخيرة لا يُعطى المدير التنفيذي&nbsp; أكثر من ثلاثة أرباع أجره مهما كان الأمر . </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">6- يُراعى عند اقتطاع جزء من أجر المدير التنفيذي&nbsp; بالجمعية ما جاء بالمواد ( 97.96.95.94 ) من نظام العمل السعودي</span></strong>&nbsp;</p>\r\n\r\n<p align=\"right\">&nbsp;</p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">ثانياً / الرواتب : </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;. </span></strong><strong><span dir=\"RTL\">&nbsp;الراتب الأساسي لحاملي مؤهل دبلوم وأعلى &nbsp;( 7000 ) ريال</span></strong><strong>- &nbsp;</strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">- في حالة حصول المدير المعين بمؤهل اقل من المؤهل المطلوب للوظيفة على مؤهل (بكالوريوس) وهو على رأس العمل فإنه لا تتغير مخصصات الوظيفة له ويتم تقييم سنين خدمته عن طريق مجلس الإدارة . </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">ثالثاً / العلاوة :</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">- يستحق المدير علاوة سنوية 5% من راتبة الاساسي ويشترط لمنح العلاوة أن يكون قد أمضى سنة على تعيينه </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">رابعاً / البدلات : </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;. 1- يصرف للمدير بدل نقل شهري بمبلغ ( 300 ) ريال</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- يمنح المدير بدل سكن بحد أعلى ثلاثة أشهر نسبة (25%) للمتزوج ونسبة (10%) للأعزب في الحال ما لم يوفر له السكن ويصرف على أساس قسط شهري مع الراتب</span></strong> <strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">خامساً / بدل الانتداب :</span></strong></p>\r\n\r\n<p align=\"right\"><strong>&nbsp;. </strong><strong><span dir=\"RTL\">1- يُصرف للمدير التنفيذي المنتدب داخل المملكة بدل انتداب عن اليوم الواحد 5% من راتبه الأساسي الشهري </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- يُصرف للمدير التنفيذي المنتدب خارج المملكة العربية السعودية بدل انتداب عن اليوم الواحد 10% من راتبه الأساسي الشهري</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- يجب ألا تقل مسافة الانتداب عن 150كم من المدينة التي تقع في نطاقها الجمعية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- يُمنح&nbsp; للمدير التنفيذي المُنتدب تذكرة سفر ذهاباً وإياباً على الدرجة السياحية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- عند عدم توفر رحلة جوية أو مطار بالمدينة المنتدب إليها المدير وجب تعويضه عن تكاليف النقل بما يُعادل قيمة أقرب مطار للمدينة المُنتدب إليها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">6- يجب على المدير عند اُنتدابه تعبئة نموذج الانتداب المعمول به لدى الجمعية</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">سادساً / المكافئات : </span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;<strong><span dir=\"RTL\">يكون منح المكافآت على أساس تقدير مجلس الإدارة لنشاط المدير وجده ومواظبته ودرجة إتقانه للعمل المنوط به وإنتاجه وتفانيه في العمل وذلك بناء على توصية رئيس المجلس أو نائبه </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">سابعاً / التدريب والتأهيل : </span></strong><strong><span dir=\"RTL\">تهدف سياسة التدريب في الجمعية بصفه عامة إلى ما يلي :</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- رفع مستوى الأداء لدى المدير إلى درجة تمكنه من أداء واجبات العمل على أفضل وجه ورفع كفاءته الوظيفية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- تهيئة المدير لأتباع أسلوب جديد في العمل أو استعمال آلات حديثة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- منصب المدير يحتاج شغله إلى إعداد و تدريب خاص</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- تحسين وتطوير البيئة الإدارية في الجمعية . </span></strong>&nbsp;</p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- توطين التدريب في المؤسسة من خلال تأهيل المدير .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;<strong><span dir=\"RTL\">6- يلتزم المدير أن يعمل لدى الجمعية فترة تعادل فترة التدريب أو الالتزام برد كافة ما صرف عليه وأنفقته الجمعية على تدريبه خلال فترة التدريب عن المدة التي لم يقضها بالعمل في الجمعية بما لا يتعارض وأحكام المادة ( 48 ) من نظام العمل السعودي .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">7- يعتبر التدريب بالنسبة للمدير من واجبات العمل سواء داخل أو خارج أوقات الدوام الرسمي&nbsp; ويكون ذلك ضمن إطار الخطة المرسومة من قبل صاحب الصلاحية بالجمعية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">8- يكون التدريب للمدير عن طريق حضور دورات تدريبية أو ندوات متخصصة أو عن طريق العمل بقصد اكتساب الخبرة بحيث يكون التدريب في أحد الأجهزة المؤهلة سواء في داخل المملكة أو خارجها .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">9- تشجع الجمعية المدير على التحصيل العلمي والتدريب وتحفزه على ذلك وتتحمل الجمعية جميع المصاريف اللازمة داخل المملكة أو خارجها المتعلقة بالعملية التدريبي .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;&nbsp;<strong><span dir=\"RTL\">10- يضع مجلس الإدارة أو من يفوضه اللوائح الداخلية لتدريب الموظفين وتطوير كفاءتهم ومصاريف وبدلات التدريب .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">ثامناً / ساعات العمل :</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- فيما لا يتعارض وأحكام المادة الثامنة والتسعون من نظام العمل السعودي تكون أيام العمل خمسة أيام في الأسبوع ويكون&nbsp; يومي الجمعة والسبت أيام الراحة الأسبوعية ويكون الحد الأدنى لساعات العمل (40) ساعة فـي الأسـبوع تُخفـض إلـى 6 ساعات يومياً خلال شهر رمضان المبارك للمسلمين .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- مع عدم الإخلال بالمواد (103.102.101) من نظام العمل السعودي يجوز لصاحب الصلاحية تحديد أوقات بداية ونهاية الدوام الرسمي وفق ما تقتضيه مصلحة العمل بالجمعية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- يتعين على المدير أن يحضر للعمل في غير ساعات العمل الرسمية في حالة الاحتياج إليه حسب حاجة العمل .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- يجوز التكليف بالعمل خارج وقت الدوام وفقا للاحتياجات كما يجوز التكليف بالعمل في أيام العطلات الأسبوعية والأعياد الرسمية وذلك ضمن الإعتمادات في الميزانية وبناءا على ما تتطلبه مصلحة العمل، ويضع رئيس/ نائب الجمعية القواعد الخاصة بشروط التكليف بالعمل الإضافي وتحديد ساعاته والأيام اللازمة لذلك ثم يعرض على مجلس الإدارة لاعتماده </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">ساعات العمل الإضافية</span></strong><strong><span dir=\"RTL\"> :</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- في أيام العمل الرسمية يمنح المكلفون بالعمل الإضافي أجرا إضافيا يعادل الراتب العادي للساعات التي عملها في أيام العمل الرسمية وتحتسب قيمة أجر الساعة &nbsp;(الراتب الشهري * 1) تقسيم &nbsp;240</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- في أيام الإجازات الأسبوعية يمنح المكلفون بالعمل الإضافي أجرا إضافيا يعادل (1,5) من الراتب العادي للساعات التي عملها وتحسب قيمة أجر الساعة &nbsp;(الراتب الشهري * 1,50) تقسيم &nbsp;240</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- في أيام إجازات الأعياد يمنح المكلفون بالعمل الإضافي أجرا إضافيا يعادل ضعف الراتب العادي للساعات التي عملها وتحتسب قيمة أجر الساعة (الراتب الشهري تقسيم&nbsp; * 2) تقسيم&nbsp; 240</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- يجوز لصاحب الصلاحية عدم التقيد بأحكام المواد الثامنة والتسعين والأولى بعد المائة والفقرة( 1 ) من المادة الرابعة بعد المائة من نظام العمل السعودي في الحالات الآتية :</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- أعمال الجرد السنوي، وإعداد الميزانية، والتصفية، وقفل الحسابات والاستعداد للبيع بأثمان مخفضة والاستعداد للموسم بشرط ألا يزيد عدد الأيام التي يشغل فيها المدير التنفيذي على ثلاثين يوماً في السنة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">إذا كان العمل لمنع وقوع حادث خطر، أو إصلاح ما نشأ عنه، أو تلافي خسارة محققة لمواد قابلة للتلف .</span></strong><strong> -</strong><strong><span dir=\"RTL\">6</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">&nbsp;إذا كان التشغيل بقصد مواجهة ضغط عمل غير عادي</span></strong><strong><span dir=\"RTL\"> .</span></strong><strong>-</strong><strong><span dir=\"RTL\">7</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">8- الأعياد والمواسم والمناسبات الأخرى والأعمال الموسمية التي تحدد بقرار من مجلس الإدارة</span></strong> <strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">9- لا يجوز في جميع الحالات المتقدمة أن تزيد ساعات العمل الفعلية على عشر ساعات في اليوم، أو ستين ساعة في الأسبوع </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">تاسعاً / الإجازات : </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- يستحق المدير التنفيذي عن كل عام إجازة سنوية ميلادية مدتها ستة و ثلاثون يوماً وتكون الإجازة مدفوعة الأجر . 2- يجوز له بعد موافقة صاحب الصلاحية تجزئة رصيد إجازته إلى ثلاث مرات خلال العام الواحد بحيث لا تقل مدة كل إجازة عن خمسة أيام متصلة كما يجوز له الحصول على إجازة عرضية متقطعة لا تزيد مدتها عن خمسة أيام في السنة على أن تحتسب من رصيد إجازته السنوية ولا يحق له التمتع بإجازته السنوية إذا لم يكمل ستة أشهر متواصلة من تاريخ مباشرته العمل لدى الجمعية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- يجب أن يتمتع المدير التنفيذي بإجازته في سنة استحقاقها ولا يجوز النزول عنها أو أن يتقاضى بدلاً نقدياً عوضاً عن الحصول عليها أثناء خدمته .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- </span></strong><span dir=\"RTL\">للمدير التنفيذي بموافقة صاحب الصلاحية أن يؤجل إجازته السنوية أو أياماً منها إلى السنة التالية .</span></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- لصاحب الصلاحية حق تأجيل إجازة المدير التنفيذي بعد نهاية سنة استحقاقها إذا اقتضت ظروف العمل ذلك لمدة لا تزيد على تسعين يوماً فإذا اقتضت ظروف العمل استمرار التأجيل وجب الحصول على موافقة&nbsp; المدير التنفيذي كتابة على ألا يتعدى التأجيل نهاية السنة لتالية لسنة استحقاق الإجازة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">6- للمدير التنفيذي الحق في الحصول على أجرة عن أيام الإجازة المستحقة إذا ترك العمل قبل استعماله لها وذلك بالنسبة إلى المدة التي لم يحصل على إجازته عنها كما يستحق أجرة الإجازة عن أجزاء السنة بنسبة ما قضاه منها في العمل . </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">7- يحتسب الأجر على أساس أخر أجر كان يتقاضاه المدير عند ترك العمل .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">8- للمدير التنفيذي الحق في إجازة بأجر كامل في الأعياد والمناسبات التي يحددها مجلس الإدارة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">9- للمدير التنفيذي الحق في إجازة بأجر لمدة يوم واحد في حالة ولادة مولود له وثلاثة أيام لمناسبة زواجه أو في حالة &nbsp;وفاة زوجه أو أحد أصوله أو فروعه على أن تُقدم الوثائق المؤيدة للحالات المشار إليها .</span></strong>&nbsp;&nbsp;</p>\r\n\r\n<p align=\"right\"><span dir=\"RTL\">10- للمدير التنفيذي الحق في<strong> الحصول على إجازة بأجر لا تقل مدتها عن عشرة أيام ولا تزيد على خمسة عشر يوماً بما فيها إجازة عيد الأضحى وذلك لأداء فريضة الحج لمرة واحدة طوال مدة خدمته إذا لم يكن أداها من قبل ويُشترط لاستحقاق هذه الإجازة أن يكون المدير قد أمضى في العمل لدى صاحب العمل سنتين متصلتين على الأقل .</strong></span>&nbsp;</p>\r\n\r\n<p align=\"right\">&nbsp; <strong><span dir=\"RTL\">11- للمدير التنفيذي الحاصل على موافقة صاحب الصلاحية لإكمال دراسته بالانتساب الحق في إجازة بأجر كامل لتأدية الامتحان عن سنة غير مُعادة تحدد مدتها بعدد أيام الامتحان الفعلية إما إذا كان الامتحان عن سنة معادة فيكون للمدير التنفيذي&nbsp; الحق في إجازة دون أجر لأداء الامتحان ، ولصاحب الصلاحية أن يطلب من الموظف تقديم الوثائق المؤيدة لطلب</span></strong> <strong><span dir=\"RTL\">الإجازة وكذلك ما يدل على أدائه للامتحان وعلى المدير التنفيذي أن يتقدم بطلب الإجازة قبل موعدها بخمسة عشر يوماً على الأقل ، ويُحرم&nbsp; من أجر هذه الإجازة إذا ثبت أنه لم يُؤد الامتحان مع عدم الإخلال بالمسائلة التأديبية</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp; <strong><span dir=\"RTL\">12- للمدير التنفيذي الذي يثبت مرضه الحق في إجازة مرضية بأجر عن الثلاثين يوماً الأولى وبثلاثة أرباع الأجر عن الستين يوماً التالية ودون أجر للثلاثين يوماً التي تلي ذلك خلال السنة الواحدة سواءً كانت هذه الإجازة متصلة أم متقطعة ويُقصد بالسنة الواحدة&nbsp; السنة التي تبدأ من تاريخ أول إجازة مرضية</span></strong> <strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">13- للمدير الحق في إجازة طارئة مدفوعة الأجر لفترة لا تتجاوز خمسة أيام في السنة تبدأ ببداية العام الميلادي وتسقط جميعا أو ما تبقى منها بنهاية العام وذلك نظرا للظروف التي يقدرها الرئيس المباشر على ألا تزيد تلك الإجازة عن ثلاثة أيام في المرة الواحدة وعلى المدير تقديم ما يثبت حاجته إلى تلك الإجازة عند عودته</span></strong> <strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">14- يجوز في حالات الضرورة قطع إجازة المدير على ألا يخل ذلك بحقه في تأجيل الأيام المتبقية من إجازته للسنة التالية فقط .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">15- لا يجوز للمدير أثناء تمتعه بإجازته المنصوص عليها أن يعمل لدى صاحب عمل آخر فإذا ثبت&nbsp; أن المدير قد خالف ذلك يتم تطبيق ما ينص عليه نظام العمل بهذا الخصوص .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">يستحق الموظف حسب ما ينص عليه نظام العمل إجازة مرضيه على الوجه التالي</span></strong> :</p>\r\n\r\n<p align=\"right\"><strong>.&nbsp; </strong><strong><span dir=\"RTL\">1- الثلاثون يوما الأولى : بأجر كامل</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- الستون يوما التالية : ثلاثة أرباع الأجر .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- وبعد ذلك تنظر الإدارة في احتمال استمرار الموظف أو إنهاء خدماته بعد استنفاذ كامل رصيده من الإجازات العادية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- يعتمد الرئيس أو نائبه الإجازة المرضية بناءا على تقرير من الجهة الطبية المختصة التي تحددها الجمعية بعد توقيع الكشف الطبي على المريض وإحضار تقرير من الطبيب المختص </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">عاشراً / قواعد التأديب : </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">- الإجراءات التأديبية التي يجوز لصاحب الصلاحية بالجمعية توقيعها على المدير التنفيذي على أن تكون وفق التسلسل التالي : </span></strong>&nbsp;</p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- التنبيه: وهو تذكير شفهي يوجه إلى المدير من قبل رئيسه يشار فيه إلى المخالفة التي أرتكبها المدير ويطلب منه التقيد بالنظام والقيام بواجباته على وجه صحيح</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">2- الإنذار الكتابي : وهو كتاب يوجه إلى المدير في حالة ارتكابه مخالفة متضمن لفت نظره إلى المخالفة وإلى إمكان تعرضه لجزاء أشد في حالة استمرار المخالفة أو تكرارها</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- </span></strong><span dir=\"RTL\">الغرامة: وتكون بحسم جزء من أجر المدير يتراوح بين اجر يوم كامل وأجر خمسة أيام عن المخالفة الواحدة .</span></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- الإيقاف عن العمل دون أجر : وهو منع المدير من ممارسة عمله مدة من الزمن دون أن يتقاضى عنها أجر أو تعويض ويفرض هذا الجزاء من يوم إلى خمسة أيام</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- الحرمان من العلاوة أو تأجيلها لمدة لا تزيد على سنة متى كانت مقررة من صاحب الصلاحية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">6- </span></strong><span dir=\"RTL\">تأجيل الترقية مدة لا تزيد على سنة متى كانت مقررة من صاحب الصلاحية .</span></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">7- الإيقاف عن العمل مع الحرمان من الأجر وهو منع المدير من ممارسة عمله مدة من الزمن دون أن يتقاضى عنها أجر أو تعويض ويفرض هذا الجزاء من يوم إلى خمسة أيام .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">8- الفصل من الخدمة مع المكافأة : ويعتبر إنهاء خدمة المدير بسبب ارتكابه مخالفة من المخالفات المنصوص عليها لا تمنع صرف كامل المكافأة المستحقة عن مدة خدمته حسب نظام العمل .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">9- </span></strong><span dir=\"RTL\">لا يجوز لصاحب الصلاحية أن يوقع على المدير التنفيذي&nbsp; جزاءً غير وارد في هذا اللائحة أو في نظام العمل .</span></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">10- لا يجوز تشديد الجزاء في حالة تكرار المخالفة إذا كان قد انقضى على المخالفة السابقة مائة وثمانون يوما من تاريخ إبلاغ المدير التنفيذي&nbsp; بتوقيع الجزاء عليه عن تلك المخالفة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">11- لا يجوز اتهام&nbsp; المدير التنفيذي بمخالفة مضى على كشفها أكثر من ثلاثين يوماً . </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">12- لا يجوز توقيع جزاء تأديبي بعد تاريخ انتهاء التحقيق في المخالفة وثبوتها في حق المدير التنفيذي&nbsp; بأكثر من ثلاثين يوما .</span></strong></p>\r\n\r\n<p align=\"right\"><span dir=\"RTL\">13- لا يجوز توقيع جزاء تأديبي على المدير التنفيذي لأمر ارتكبه خارج منشأة الجمعية ما لم يكن متصلاً بالجمعية أو بأصحاب الصلاحية فيها . </span>&nbsp;</p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">14- كما لا يجوز أن يوقع على&nbsp; المدير التنفيذي عن المخالفة الواحدة غرامة تزيد قيمتها عن أجرة خمسة أيام .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">15- لا يجوز توقيع جزاء تأديبي على المدير التنفيذي إلا بعد إبلاغه كتابة بما نسب إليه واستجوابه وتحقيق دفاعه وإثبات ذلك في محضر يودع في ملفه الخاص . </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">16- يجوز أن يكون الاستجواب شفاهه في المخالفات البسيطة التي لا يتعدى الجزاء المفروض على مرتكبها الإنذار أو الغرامة باقتطاع ما لا يزيد على أجر يوم واحد , على أن يثبت ذلك في المحضر .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">17- يجب أن يبلغ&nbsp; المدير التنفيذي بقرار توقيع الجزاء عليه كتابة , فإذا امتنع عن الاستلام أو كان غائباً فيرسل البلاغ بكتاب مسجل على عنوانه المبين في ملفه&nbsp; أو اخذ توقيع شاهدين عن امتناع الاستلام، و للمدير التنفيذي&nbsp; حق الاعتراض على القرار الخاص بتوقيع الجزاء عليه خلال خمسة عشر يوماً (عدا أيام العطل الرسمية) من تاريخ&nbsp; إبلاغه بالقرار النهائي بإيقاع الجزاء عليه، ويقدم الاعتراض إلى هيئة تسويق الخلافات العمالية . كما جاء بالمادة 72 من نظام العمل السعودي .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">18- يجب أن&nbsp; يتناسب الجزاء الموقع على المدير مع&nbsp; حجم المخالفة المرتكبة .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">19- إذا كان الفعل الذي أرتكبه المدير يشكل أكثر من مخالفة فيكتفي بتوقيع العقوبة الأشد من بين العقوبات المقررة لها</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">20- يجب كتابة الغرامات التي توقع على المدير التنفيذي في سجل خاص مع بيان أسمه ومقدار أجره ومقدار الغرامة وسبب توقيعها وتاريخ ذلك .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">21- يعتبر مخالفة تأديبية تستوجب الجزاء ارتكاب المدير لفعل من الأفعال الواردة بجدول الجزاءات المرفق .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">الحادي عشر/ مخاطر وإصابات العمل والخدمات الصحية والاجتماعية : </span></strong></p>\r\n\r\n<p align=\"right\"><strong>. </strong><strong><span dir=\"RTL\">على الجمعية توفير بيئة آمنة ومحفزة على العمل</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;<strong><span dir=\"RTL\">يطبق بحق المدير التنفيذي في شأن إصابات العمل والإمراض أحكام فرع الأخطار المهنية من نظام التأمينات الاجتماعية الصادر بالمرسوم الملكي رقم م/ 33 في 3/9/1421هـ </span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">الثاني عشر/ انتهاء عقد العمل :</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">1- ينتهي عقد العمل في أي من الأحول المنصوص عليها في المادة 74 من نظام العمل السعودي .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;<strong><span dir=\"RTL\">2- إذا كان العقد غير محدد المدة جاز لأي من طرفيه إنهاؤه بناءً على سبب مشروع يجب بيانه بموجب إشعار يوجه إلى الطرف الآخر كتابة قبل الإنهاء بمدة لا تقل عن ثلاثين يوماً إذا كان أجر المدير التنفيذي يدفع شهرياً , ولا يقل عن خمسة عشر يوماً بالنسبة إلى غيره </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">3- إذا أُنهي العقد لسبب غير مشروع كان للطرف الذي أصابه ضرر من هذا الإنهاء الحق في تعويض تقدره هيئة تسوية الخلافات العمالية ,يراعى فيه ما لحقه من أضرار مادية وأدبية حالة واحتمالية وظروف الإنهاء .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">4- يجوز للمدير التنفيذي إذا يُفصل من عمله بغير سبب مشروع أن يطلب إعادته إلى العمل وينظر في هذه الطلبات وفق أحكام نظام العمل ولائحة المرافعات أمام هيئات تسوية الخلافات العمالية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">5- لا ينقضي عقد العمل بوفاة صاحب الصلاحية , ما لم تكن شخصيته قد روعيت في إبرام العقد ولكنه ينتهي بوفاة المدير التنفيذي أو بعجزه عن أداء عمله , وذلك بموجب شهادة طبية معتمدة من الجهات الصحية المخولة أو من الطبيب المخول الذي يعينه صاحب الصلاحية .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp; <strong><span dir=\"RTL\">6- لا يجوز لصاحب الصلاحية فسخ العقد دون مكافأة أو إشعار المدير التنفيذي أو تعويضه إلا في الحالات الواردة بالمادة ( 80 ) من نظام العمل شريطة أن تتاح الفرصة&nbsp; للمدير التنفيذي لكي يبدي أسباب معارضته للفسخ .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp; &nbsp;&nbsp;<strong><span dir=\"RTL\">7- يحق&nbsp; للمدير التنفيذي أن يترك العمل دون إشعار , مع احتفاظه بحقوقه النظامية كلها في أي من الحالات الواردة بالمادة ( 81 ) من نظام العمل .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;<strong><span dir=\"RTL\">8- لا يجوز لصاحب الصلاحية إنهاء خدمة المدير التنفيذي&nbsp; بسبب المرض , قبل استنفاذه المدد المحددة للإجازة المنصوص عليها في نظام العمل وللمدير التنفيذي الحق في أن يطلب وصل إجازته السنوية بالمرضية .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">9- أن يتم تسليم الإخطار&nbsp; للمدير في مقر العمل ويوقع المرسل إليه باستلامه مع توضيح تاريخ الاستلام وفي حالة امتناع المدير عن الاستلام مع إثبات الواقعة في محضر رسمي يوقع عليه اثنان من زملائه في العمل .</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">10- يسلم للمدير عند إنهاء خدمته شهادة من واقع ملف خدمته مبينا بها تاريخ التحاقه بالعمل وتاريخ انتهاء عمله ومسمى الوظيفة والأجر والامتيازات الممنوحة له وذلك في ميعاد أقصاه أسبوع من تاريخ طلبه لها (عمل نموذج شهادة خدمة</span></strong><strong><span dir=\"RTL\"> )</span></strong><strong><span dir=\"RTL\"> .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;</p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">الثالث عشر/ مكافأة نهاية الخدمة :</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;<strong><span dir=\"RTL\">1- إذا انتهت علاقة العمل وجب على الجمعية أن تدفع إلى للمدير التنفيذي مكافأة عن مدة خدمته تحسب على أساس أجر نصف شهر عن كل سنة من السنوات الخمس الأولى، وأجر شهر عن كل سنة من السنوات التالية , ويتخذ الأجر الأخير أساساً لحساب المكافأة، ويستحق المدير التنفيذي مكافأة عن أجزاء السنة بنسبة ما قضاه منها في العمل .</span></strong></p>\r\n\r\n<p align=\"right\">&nbsp;<strong><span dir=\"RTL\">2- إذا كان انتهاء علاقة العمل بسبب استقالة المدير التنفيذي يستحق في هذه الحالة ثلث المكافأة بعد خدمة لا تقل مدتها عن سنتين متتاليتين، ولا تزيد عن خمس سنوات، ويستحق ثلثيها إذا زادت مدة خدمته على خمس سنوات متتالية ولم تبلغ عشر سنوات ويستحق المكافأة كاملة إذا بلغت مدة خدمته عشر سنوات فأكثر .</span></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p align=\"right\"><span dir=\"RTL\">3- يستحق المدير التنفيذي المكافأة كاملة في حالة تركه للعمل نتيجة لقوة قاهرة خارجه عن إرادته . </span></p>\r\n\r\n<p align=\"right\">&nbsp;<strong><span dir=\"RTL\">4- إذا انتهت خدمة&nbsp; المدير التنفيذي وجب على الجمعية دفع أجره وتصفية حقوقه خلال أسبوع &ndash; على الأكثر &ndash; من تاريخ انتهاء العلاقة العقدية ، أما إذا كان المدير التنفيذي&nbsp; هو الذي أنهى العقد , وجب على الجمعية تصفية حقوقه</span></strong></p>\r\n\r\n<p align=\"right\"><strong><span dir=\"RTL\">&nbsp;كاملة خلال مدة لا تزيد على أسبوعين، ولصاحب الصلاحية أن يحسم أي دين مستحق له بسبب العمل من المبالغ المستحقة للموظف </span></strong><strong><span dir=\"RTL\">.</span></strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>\r\n\r\n<p dir=\"RTL\"><strong>المراجع : </strong></p>\r\n\r\n<p dir=\"RTL\">اعتمد مجلس إدارة الجمعية في الاجتماع (&nbsp; الثالثة &nbsp;&nbsp;) في دورته الثانية ألية تعين المدير التنفيذي وتحديد تعويضاته &nbsp;الموافق 10/07/1439هـ - 27/03/2018م .</p>\r\n', 1, '2019-10-21 19:16:55', '2019-10-21 19:16:55'),
(21, 'اعمال التطوعية', 'فرص التطوعية', 1, '2020-11-12 10:31:13', '2020-11-12 10:31:13'),
(26, 'الميزانية التقديرية لعام 2020م', 'الميزانية التقديرية لعام 2020م', 1, '2020-11-29 13:41:38', '2020-11-29 13:41:38'),
(27, 'الميزانية التقديرية لعام 2018م', 'الميزانية التقديرية لعام 2018م', 1, '2020-11-29 13:55:33', '2020-11-29 13:55:33'),
(28, 'الميزانية التقديرية لعام 2019م', 'الميزانية التقديرية لعام 2019م', 1, '2020-11-29 13:57:14', '2020-11-29 13:57:14'),
(29, 'اجتماع الجمعية العمومية العادية لعام 2015م', 'اجتماع الجمعية العمومية العادية لعام 2015م', 1, '2020-11-29 14:11:00', '2020-11-29 14:49:12'),
(30, 'اجتماع الجمعية العمومية لعام 2018م ( 1 ) ‫‬', 'اجتماع الجمعية العمومية لعام 2018م ( 1 ) ‫‬', 1, '2020-11-29 14:12:36', '2020-11-29 14:12:36'),
(31, 'اجتماع الجمعية العمومية لعام 2018م ( 2 )', 'اجتماع الجمعية العمومية لعام 2018م ( 2 )', 1, '2020-11-29 14:13:52', '2020-11-29 14:13:52'),
(32, 'اجتماع الجمعية العمومية العادية لعام 2020م', 'اجتماع الجمعية العمومية العادية لعام 2020م', 1, '2020-11-29 14:15:42', '2020-11-29 14:15:42'),
(33, 'اجتماع الجمعية العمومية الغير عادية لعام 2020م', 'اجتماع الجمعية العمومية الغير عادية لعام 2020م', 1, '2020-11-29 14:16:45', '2020-11-29 14:16:45'),
(35, 'اجتماع الجمعية العمومية العادية لعام 2015م', 'اجتماع الجمعية العمومية العادية لعام 2015م', 1, '2020-11-29 14:50:43', '2020-11-29 14:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `pages_files`
--

CREATE TABLE `pages_files` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages_files`
--

INSERT INTO `pages_files` (`id`, `page_id`, `file`) VALUES
(2, 53, '516881.txt'),
(3, 53, '466578.txt'),
(4, 55, '123162.txt'),
(42, 56, 'idm.-3.txt'),
(43, 24, 'اللائحة الأساسية الملحق 3.-8.pdf'),
(44, 24, 'اللائحة الأساسية2.-5.pdf'),
(45, 24, 'الميثاق الأخلاقي للعاملين في القطاع الخيري.-6.pdf'),
(46, 24, 'دليل الصلاحيات.-7.pdf'),
(47, 24, 'سياسة الإبلاغ عن المخالفات.-4.pdf'),
(48, 24, 'سياسة التعامل مع الشركاء والأطراف الثالثة .-9.pdf'),
(49, 24, 'سياسة تعارض المصالح .-5.pdf'),
(50, 24, 'سياسة تنظيم العلاقة مع المستفيدين .-5.pdf'),
(51, 24, 'سياسة جمع التبرعات.-10.pdf'),
(52, 24, 'سياسة خصوصية البيانات.-5.pdf'),
(53, 24, 'سياسة مكافحة جرائم الارهاب وتمويله وغسل الاموال.-8.pdf'),
(54, 24, 'سياسة وحدة التطوع.-10.pdf'),
(55, 24, 'لائحة اللجان الدائمة والمؤقتة.-8.pdf'),
(56, 24, 'لائحة تنظيم العلاقة بالمستفيدين.-5.pdf'),
(57, 24, 'لائحة تنظيم مكاتب الإشراف.-3.pdf'),
(58, 24, 'مقترح تعديل مهام اللجان في اللائحة الداخلية من رئيس الجمعية.-3.pdf'),
(59, 24, 'نظام الرقابة الداخلي.-5.pdf'),
(60, 48, 'مخطط لمبنى الجمعية.-2.pdf'),
(61, 23, 'اللائحة الأساسية للجمعية.-7.pdf'),
(62, 17, 'لائحة الاساسية.-1.pdf'),
(63, 19, 'لائحة الموظفين.-4.docx'),
(64, 20, 'f.-2.png'),
(65, 22, 'الميزانية التقديرية.-9.pdf'),
(66, 24, 'الميزانية التقديرية لعام 2018م.-9.PDF'),
(67, 25, 'الميزانية التقديرية لعام 2020م .-6.PDF'),
(68, 26, 'الميزانية التقديرية لعام 2020م .-8.PDF'),
(69, 27, 'الميزانية التقديرية لعام 2018م.-8.PDF'),
(70, 28, 'الميزانية التقديرية لعام 2019م.-8.PDF'),
(71, 29, 'اجتماع الجمعية العمومية العادية لعام 2020م.-10.PDF'),
(72, 30, 'اجتماع الجمعية العمومية لعام 2018م ( 1 ) ‫‬.-9.PDF'),
(73, 31, 'اجتماع الجمعية العمومية لعام 2018م ( 2 ).-7.PDF'),
(74, 32, 'اجتماع الجمعية العمومية العادية لعام 2020م.-10.PDF'),
(75, 33, 'اجتماع الجمعية العمومية الغير عادية لعام 2020م .-10.PDF'),
(77, 34, 'اجتماع الجمعية العمومية العادية لعام 2015م .-2.PDF'),
(78, 35, 'اجتماع الجمعية العمومية العادية لعام 2015م .-7.PDF');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `read_it` enum('yes','no') NOT NULL DEFAULT 'no',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `img`, `name`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, '1607013105.png', 'استراجية الجمعية', 'استراجية الجمعية', '1607013105.pdf', '2020-12-03 13:31:45', '2020-12-03 13:31:45'),
(2, '1607013149.png', 'الية ادارة المتطوعين', 'الية ادارة المتطوعين', '1607013149.pdf', '2020-12-03 13:32:29', '2020-12-03 13:32:29'),
(3, '1607013178.png', 'الية تعين المدير التنفيذي وتحديد تعويضاته المالية (2)', 'الية تعين المدير التنفيذي وتحديد تعويضاته المالية (2)', '1607013178.pdf', '2020-12-03 13:32:58', '2020-12-03 13:32:58'),
(4, '1607013197.png', 'خطة سنوية للبرامج والانشطة التي ترغب المنظمة بتنفيذها', 'خطة سنوية للبرامج والانشطة التي ترغب المنظمة بتنفيذها', '1607013197.pdf', '2020-12-03 13:33:17', '2020-12-03 13:33:17'),
(5, '1607013241.png', 'سياسة الاحتفاظ بالوثائق وإتلافها', 'سياسة الاحتفاظ بالوثائق وإتلافها', '1607013241.pdf', '2020-12-03 13:34:01', '2020-12-03 13:34:01'),
(6, '1607013261.png', 'سياسة التبليغ عن المخالفات وحماية المبلغين (1)', 'سياسة التبليغ عن المخالفات وحماية المبلغين (1)', '1607013261.pdf', '2020-12-03 13:34:21', '2020-12-03 13:34:21'),
(7, '1607013302.png', 'سياسة الجمعية في الخصوصية للمانحين', 'سياسة الجمعية في الخصوصية للمانحين', '1607013302.pdf', '2020-12-03 13:35:02', '2020-12-03 13:35:02'),
(8, '1607013319.png', 'سياسة تحديد وفهم مخاطر تمويل الارهاب', 'سياسة تحديد وفهم مخاطر تمويل الارهاب', '1607013319.pdf', '2020-12-03 13:35:19', '2020-12-03 13:35:19'),
(9, '1607013336.png', 'سياسة تعارض المصالح للجمعيات', 'سياسة تعارض المصالح للجمعيات', '1607013336.pdf', '2020-12-03 13:35:36', '2020-12-03 13:35:36'),
(10, '1607013365.png', 'سياسة تنظيم العلاقة مع المستفيدين', 'سياسة تنظيم العلاقة مع المستفيدين', '1607013365.pdf', '2020-12-03 13:36:05', '2020-12-03 13:36:05'),
(11, '1607013381.png', 'سياسة توطين الوظائف الادارية والمالية والمحاسبية', 'سياسة توطين الوظائف الادارية والمالية والمحاسبية', '1607013381.pdf', '2020-12-03 13:36:21', '2020-12-03 13:36:21'),
(12, '1607013431.png', 'سياسة جمع التبرعات', 'سياسة جمع التبرعات', '1607013431.pdf', '2020-12-03 13:37:11', '2020-12-03 13:37:11'),
(13, '1607013450.png', 'سياسة خصوصية البيانات', 'سياسة خصوصية البيانات', '1607013450.pdf', '2020-12-03 13:37:30', '2020-12-03 13:37:30'),
(14, '1607013473.png', 'سياسة صرف المساعدات', 'سياسة صرف المساعدات', '1607013473.pdf', '2020-12-03 13:37:53', '2020-12-03 13:37:53'),
(15, '1607013493.png', 'سياسة واجراءت مكافحةالارهاب وغسل الاموال', 'سياسة واجراءت مكافحةالارهاب وغسل الاموال', '1607013493.pdf', '2020-12-03 13:38:13', '2020-12-03 13:38:13'),
(16, '1607013514.png', 'لائحة الموظفين', 'لائحة الموظفين', '1607013514.pdf', '2020-12-03 13:38:34', '2020-12-03 13:38:34'),
(17, '1607013533.png', 'ميثاق أخلاقيات المهنة وميثاق السلوكيات', 'ميثاق أخلاقيات المهنة وميثاق السلوكيات', '1607013533.pdf', '2020-12-03 13:38:53', '2020-12-03 13:38:53'),
(18, '1607013784.png', 'سياسة خصوصية البيانات', 'سياسة خصوصية البيانات', '1607013784.pdf', '2020-12-03 13:43:04', '2020-12-03 13:43:04'),
(19, '1607013838.png', 'لائحة صلاحيات المجلس', 'لائحة صلاحيات المجلس', '1607013838.pdf', '2020-12-03 13:43:58', '2020-12-03 13:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `rate` enum('bad','good','vreygood','excellent') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `rate`) VALUES
(2, 'good'),
(4, 'excellent'),
(5, 'vreygood'),
(6, 'excellent'),
(7, 'bad'),
(8, 'vreygood'),
(9, 'good'),
(10, 'good'),
(11, 'good'),
(12, 'excellent'),
(13, 'excellent'),
(14, 'bad'),
(15, 'good'),
(16, 'good'),
(17, 'excellent'),
(18, 'bad'),
(19, 'excellent'),
(20, 'excellent');

-- --------------------------------------------------------

--
-- Table structure for table `replay_contacts`
--

CREATE TABLE `replay_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `reading` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `done` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `news_id`, `comment_id`, `to_user_id`, `content`, `done`, `created_at`, `updated_at`) VALUES
(3, 1, 0, 0, 9, '', 0, NULL, '2017-03-01 14:30:40'),
(4, 1, 2, 0, 0, '', 0, NULL, NULL),
(5, 1, 0, 3, 0, '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `saids`
--

CREATE TABLE `saids` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `description` text CHARACTER SET utf8,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sitename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siteurl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_users` enum('auto','email','sms') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_posts` enum('auto','panding') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_comment` enum('auto','panding') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit` int(11) DEFAULT NULL,
  `active_offer` int(11) DEFAULT NULL,
  `status_site` enum('open','close') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_message` longtext COLLATE utf8mb4_unicode_ci,
  `contact_us_info` longtext COLLATE utf8mb4_unicode_ci,
  `keywords` longtext COLLATE utf8mb4_unicode_ci,
  `discription` longtext COLLATE utf8mb4_unicode_ci,
  `paypal_secret_id` longtext COLLATE utf8mb4_unicode_ci,
  `paypal_client_id` longtext COLLATE utf8mb4_unicode_ci,
  `payment` enum('live','sandbox') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_pass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_lat_lng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `watermark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable_watermark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `sitemail`, `siteurl`, `active_users`, `active_posts`, `active_comment`, `profit`, `active_offer`, `status_site`, `status_message`, `contact_us_info`, `keywords`, `discription`, `paypal_secret_id`, `paypal_client_id`, `payment`, `sms_user`, `sms_pass`, `sms_name`, `mobile`, `mobile2`, `fax`, `linkedin`, `skype`, `pinterest`, `youtube`, `twitter`, `facebook`, `address_lat_lng`, `created_at`, `updated_at`, `watermark`, `enable_watermark`) VALUES
(1, 'الجمعية الخيرية بمركز علباء', 'alabaocition@gmail.com', 'http://g-alba.com', NULL, '', 'auto', 0, NULL, 'open', 'الموقع مغلق للصيانة', '', 'جمعية علباء', 'جمعية علباء', NULL, NULL, NULL, '966501315777', 's10652', 'const-tech', NULL, '0595666677 - 0580999030 0538054446', NULL, NULL, NULL, NULL, NULL, 'ic_d6', 'facebook', NULL, NULL, '2020-11-29 12:15:12', 'watermark/1606662912/20011606662912.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `url`, `photo`, `created_at`, `updated_at`) VALUES
(4, 'يا باغي الخير اقبل', 'http://localhost/badaye3/', 'slide//6601488875834.png', '2017-03-05 13:59:29', '2017-03-14 21:14:23'),
(5, 'الجمعية الخيرية بمركز علباء', 'http://g-alba.com/', 'slide//36131488875854.png', '2017-03-07 06:37:34', '2019-11-06 05:30:15');

-- --------------------------------------------------------

--
-- Table structure for table `type_cons`
--

CREATE TABLE `type_cons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_cons`
--

INSERT INTO `type_cons` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'طلب اعانة زواج', '2018-11-03 12:49:56', '2018-11-03 17:32:28'),
(2, 'طلب مساعدة', '2018-11-03 17:32:50', '2018-11-03 17:32:50'),
(3, 'طلب خدمة', '2018-11-03 17:33:02', '2018-11-03 17:33:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `level` enum('user','admin','premium') COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_from` int(11) DEFAULT NULL,
  `expire_to` int(11) DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blocking_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `other_mobile`, `country`, `area`, `city`, `level`, `group_id`, `facebook`, `twitter`, `instagram`, `api_token`, `expire_from`, `expire_to`, `gender`, `active`, `remember_token`, `active_account`, `blocking_user`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'test@test.com', '$2y$10$WgniXUv5YHoYebFa./dfaOkC6G3nIFYwLLg68GrKTNW4JZXf5XaH6', '0123456789', '0111', 1, 1, 1, 'admin', 1, '', '', '', '', 0, 0, 'male', 1, 'BBxp1rbq8yqDjiuifh7NCqIQacle9s1UCCR9oupUM98C7naZxTc9XNd9CSFL', NULL, 0, NULL, '2017-03-01 14:04:43'),
(3, 'dev', 'dev@m.c', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '+201014583424', NULL, NULL, NULL, NULL, 'premium', NULL, NULL, NULL, NULL, '', NULL, NULL, 'female', 1, NULL, NULL, 1, NULL, NULL),
(4, 'FpYbWztEweLRfUyV', 'nferabagcos191@gmail.com', '$2y$10$YvuZOxhDtOqDnCYMe9i9LOPf.stz.MnbpBj..TR4ECWHzPa.m3Eqq', '6200232439', NULL, NULL, NULL, NULL, 'user', NULL, NULL, NULL, NULL, 'jzlaIWpe2u3wUzQsVFZXfmGI0SuW6qwkSEjwjLDRQqE9LtQoLaMlSj527QUn', NULL, NULL, 'male', 0, 'hiKddfqdfMkhlF4jig6dhfODk0QnQ0WZtNKSTHdqq1MddJPxICV9O7jiSinK', 'wY7wuabXNGTelopJpwSqkehkgUOav9K1UYKIOeDtT6weHeP72tPiVrAk69whMr75Cvy7W1gXZNMxZgeaaqMWnj7NMh1Z5175WCog', 0, '2020-10-31 02:21:14', '2020-10-31 02:21:14'),
(5, 'AfKhSRbGN', 'pontatotorite@gmail.com', '$2y$10$How.terSbd9Cf759S2BS3.stgxBdxiEUWlzbA0vTSnjT0xPaYL9TW', '9463773888', NULL, NULL, NULL, NULL, 'user', NULL, NULL, NULL, NULL, 'sGWJFAug5vPo5O997cmVxLZ35oF8QbPkjo5407JhVXr9ZLMInllbfr9Vej8C', NULL, NULL, 'male', 0, 'osgdVgqukEXjbWobkBTIGzsvXti2Imfyjxz53bodrLJ0Mm05V8kPtXMmSqHm', '8fbxFYyxB5L8w2ZtFjQ3wsNCBe3cK8MgBWjS7iBuNLqAwGfFPfbYGq8CMeS6GuuECl1BjjCr4LGhOZwkc7TBbISQ1IiOShGdUkUA', 0, '2020-11-14 20:15:04', '2020-11-14 20:15:04'),
(6, 'hpEmLQUVZu', 'tsushitarikitsu@gmail.com', '$2y$10$jmRTt3QKj1temGCuzNkgeuqvXHxH00c1AEu.qd56UpDCi70FyuHoa', '8059181068', NULL, NULL, NULL, NULL, 'user', NULL, NULL, NULL, NULL, 'eEVFqzvTgTI18akcb77dxme8ft663M9ffNBNKdO2dkZtUibvWcr516pgectC', NULL, NULL, 'male', 0, NULL, 'EiwKWxwr40KRZyQsuljg8r1c3n0hjBay6o0rDtG4FPxKZky0cAUOWtGfaHx7Dj4Bkg8S8MqQbRfaA7JXbnq5bNS7efXZR7YEtXYm', 0, '2020-12-02 07:06:49', '2020-12-02 07:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `settings` int(11) NOT NULL,
  `admins` int(11) NOT NULL,
  `admin_group` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `store` int(11) NOT NULL,
  `posts` int(11) NOT NULL,
  `orders` int(11) NOT NULL,
  `services` int(11) NOT NULL,
  `banners` int(11) NOT NULL,
  `invoices` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `offers` int(11) NOT NULL,
  `reports` int(11) NOT NULL,
  `links` int(11) NOT NULL,
  `contactus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `year_reports`
--

CREATE TABLE `year_reports` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `forms_pdf`
--
ALTER TABLE `forms_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_lists`
--
ALTER TABLE `mail_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `markets`
--
ALTER TABLE `markets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifcations`
--
ALTER TABLE `notifcations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order2s`
--
ALTER TABLE `order2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order3s`
--
ALTER TABLE `order3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages_files`
--
ALTER TABLE `pages_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replay_contacts`
--
ALTER TABLE `replay_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saids`
--
ALTER TABLE `saids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_cons`
--
ALTER TABLE `type_cons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year_reports`
--
ALTER TABLE `year_reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `albumes`
--
ALTER TABLE `albumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `forms_pdf`
--
ALTER TABLE `forms_pdf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `mail_lists`
--
ALTER TABLE `mail_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `markets`
--
ALTER TABLE `markets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notifcations`
--
ALTER TABLE `notifcations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order2s`
--
ALTER TABLE `order2s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order3s`
--
ALTER TABLE `order3s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pages_files`
--
ALTER TABLE `pages_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `replay_contacts`
--
ALTER TABLE `replay_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `saids`
--
ALTER TABLE `saids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `type_cons`
--
ALTER TABLE `type_cons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `year_reports`
--
ALTER TABLE `year_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
