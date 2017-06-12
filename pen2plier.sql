-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 12:21 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pen2plier`
--

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int(5) NOT NULL,
  `machine_name` varchar(10) NOT NULL,
  `time_on` timestamp NULL DEFAULT NULL,
  `time_off` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `machine_name`, `time_on`, `time_off`) VALUES
(23, 'mach1', '2017-02-14 16:33:52', '2017-02-14 16:35:23'),
(24, 'mach1', '2017-02-14 16:34:27', '2017-02-14 16:35:23'),
(25, 'mach1', '2017-02-14 16:35:08', '2017-02-14 16:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `author` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `number` int(15) NOT NULL,
  `seen` int(1) NOT NULL,
  `submit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `author`, `email`, `phone_no`, `subject`, `comment`, `number`, `seen`, `submit`) VALUES
(34, 'g', 'arorathegreat1994@gmail.com', 123, '', 'kjlk', 0, 0, ''),
(35, 'gaura', 'arorathegreat1994@gmail.com', 56623, 'nwjvwl', 'nckellw', 0, 0, 'Send Message'),
(36, 'g', 'arorathegreat1994@gmail.com', 0, '', 'nklk', 47966, 0, 'Send Message'),
(37, 'g', 'arorathegreat1994@gmail.com', 0, '', 'nklk', 47966, 0, 'Send Message'),
(38, 'g', 'arorathegreat1994@gmail.com', 0, '', 'nklk', 47966, 0, 'Send Message'),
(39, 'g', 'arorathegreat1994@gmail.com', 0, '', 'nklk', 47966, 0, 'Send Message'),
(40, 'gaurav', 'arorathegreat1994@gmail.com', 0, 'bvhkwj', ' knsllsmsl', 12124, 0, 'Send Message'),
(41, 'gaurav', 'arorathegreat1994@gmail.com', 0, 'bvhkwj', ' knsllsmsl', 12124, 0, 'Send Message'),
(42, 'gaurav', 'arorathegreat1994@gmail.com', 0, 'bvhkwj', ' knsllsmsl', 12124, 0, 'Send Message'),
(43, 'gaurav', 'arorathegreat1994@gmail.com', 0, 'cbavwgvih', 'b bdak halj ala jalka.ma.', 123456789, 0, 'Send Message');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_letter_emails`
--

CREATE TABLE `news_letter_emails` (
  `id` int(10) NOT NULL,
  `email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_letter_emails`
--

INSERT INTO `news_letter_emails` (`id`, `email_id`) VALUES
(1, 'reachgauravarora@outlook.com'),
(11, 'ayushichhawla200@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(1) NOT NULL,
  `machine_name` varchar(10) NOT NULL,
  `state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `machine_name`, `state`) VALUES
(1, 'mach1', 0),
(2, 'mach2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `statics`
--

CREATE TABLE `statics` (
  `id` int(11) NOT NULL,
  `schools` int(5) NOT NULL,
  `innovators` int(5) NOT NULL,
  `trainers` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statics`
--

INSERT INTO `statics` (`id`, `schools`, `innovators`, `trainers`) VALUES
(0, 4, 110, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pen2plier', 'pen2plier@gmail.com', 'india123.', 'pen2plier', NULL, '2016-07-16 08:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `count` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`count`, `date`) VALUES
(16, '2016-07-06'),
(17, '2016-07-06'),
(18, '2016-07-06'),
(19, '2016-07-06'),
(20, '2016-07-06'),
(21, '2016-07-06'),
(22, '2016-07-06'),
(23, '2016-07-06'),
(24, '2016-07-06'),
(25, '2016-07-06'),
(26, '2016-07-06'),
(27, '2016-07-06'),
(28, '2016-07-06'),
(29, '2016-07-06'),
(30, '2016-07-06'),
(31, '2016-07-06'),
(32, '2016-07-07'),
(33, '2016-07-08'),
(34, '2016-07-08'),
(35, '2016-07-08'),
(36, '2016-07-08'),
(37, '2016-07-08'),
(38, '2016-07-08'),
(39, '2016-07-08'),
(40, '2016-07-08'),
(41, '2016-07-08'),
(42, '2016-07-08'),
(43, '2016-07-08'),
(44, '0000-00-00'),
(45, '0000-00-00'),
(46, '0000-00-00'),
(47, '0000-00-00'),
(48, '0000-00-00'),
(49, '0000-00-00'),
(50, '0000-00-00'),
(51, '0000-00-00'),
(52, '0000-00-00'),
(53, '0000-00-00'),
(54, '0000-00-00'),
(55, '0000-00-00'),
(56, '0000-00-00'),
(57, '0000-00-00'),
(58, '0000-00-00'),
(59, '0000-00-00'),
(60, '0000-00-00'),
(61, '0000-00-00'),
(62, '0000-00-00'),
(63, '0000-00-00'),
(64, '0000-00-00'),
(65, '0000-00-00'),
(66, '0000-00-00'),
(67, '0000-00-00'),
(68, '0000-00-00'),
(69, '0000-00-00'),
(70, '0000-00-00'),
(71, '0000-00-00'),
(72, '0000-00-00'),
(73, '0000-00-00'),
(74, '0000-00-00'),
(75, '0000-00-00'),
(76, '0000-00-00'),
(77, '0000-00-00'),
(78, '0000-00-00'),
(79, '0000-00-00'),
(80, '0000-00-00'),
(81, '0000-00-00'),
(82, '0000-00-00'),
(83, '0000-00-00'),
(84, '0000-00-00'),
(85, '0000-00-00'),
(86, '0000-00-00'),
(87, '0000-00-00'),
(88, '0000-00-00'),
(89, '0000-00-00'),
(90, '0000-00-00'),
(91, '0000-00-00'),
(92, '0000-00-00'),
(93, '0000-00-00'),
(94, '0000-00-00'),
(95, '0000-00-00'),
(96, '0000-00-00'),
(97, '0000-00-00'),
(98, '0000-00-00'),
(99, '0000-00-00'),
(100, '0000-00-00'),
(101, '0000-00-00'),
(102, '0000-00-00'),
(103, '0000-00-00'),
(104, '0000-00-00'),
(105, '0000-00-00'),
(106, '0000-00-00'),
(107, '0000-00-00'),
(108, '0000-00-00'),
(109, '0000-00-00'),
(110, '0000-00-00'),
(111, '0000-00-00'),
(112, '0000-00-00'),
(113, '0000-00-00'),
(114, '0000-00-00'),
(115, '0000-00-00'),
(116, '0000-00-00'),
(117, '0000-00-00'),
(118, '0000-00-00'),
(119, '0000-00-00'),
(120, '0000-00-00'),
(121, '0000-00-00'),
(122, '0000-00-00'),
(123, '0000-00-00'),
(124, '0000-00-00'),
(125, '0000-00-00'),
(126, '0000-00-00'),
(127, '0000-00-00'),
(128, '0000-00-00'),
(129, '0000-00-00'),
(130, '0000-00-00'),
(131, '0000-00-00'),
(132, '0000-00-00'),
(133, '0000-00-00'),
(134, '0000-00-00'),
(135, '0000-00-00'),
(136, '0000-00-00'),
(137, '0000-00-00'),
(138, '0000-00-00'),
(139, '0000-00-00'),
(140, '0000-00-00'),
(141, '0000-00-00'),
(142, '0000-00-00'),
(143, '0000-00-00'),
(144, '0000-00-00'),
(145, '0000-00-00'),
(146, '0000-00-00'),
(147, '0000-00-00'),
(148, '0000-00-00'),
(149, '0000-00-00'),
(150, '0000-00-00'),
(151, '0000-00-00'),
(152, '0000-00-00'),
(153, '0000-00-00'),
(154, '0000-00-00'),
(155, '0000-00-00'),
(156, '0000-00-00'),
(157, '0000-00-00'),
(158, '0000-00-00'),
(159, '0000-00-00'),
(160, '0000-00-00'),
(161, '0000-00-00'),
(162, '0000-00-00'),
(163, '0000-00-00'),
(164, '2016-07-16'),
(165, '2016-08-07'),
(166, '2016-08-07'),
(167, '0000-00-00'),
(168, '0000-00-00'),
(169, '0000-00-00'),
(170, '0000-00-00'),
(171, '0000-00-00'),
(172, '0000-00-00'),
(173, '0000-00-00'),
(174, '0000-00-00'),
(175, '0000-00-00'),
(176, '0000-00-00'),
(177, '0000-00-00'),
(178, '0000-00-00'),
(179, '0000-00-00'),
(180, '0000-00-00'),
(181, '0000-00-00'),
(182, '0000-00-00'),
(183, '0000-00-00'),
(184, '0000-00-00'),
(185, '0000-00-00'),
(186, '0000-00-00'),
(187, '0000-00-00'),
(188, '0000-00-00'),
(189, '0000-00-00'),
(190, '0000-00-00'),
(191, '0000-00-00'),
(192, '0000-00-00'),
(193, '0000-00-00'),
(194, '0000-00-00'),
(195, '0000-00-00'),
(196, '0000-00-00'),
(197, '0000-00-00'),
(198, '0000-00-00'),
(199, '0000-00-00'),
(200, '0000-00-00'),
(201, '0000-00-00'),
(202, '0000-00-00'),
(203, '0000-00-00'),
(204, '0000-00-00'),
(205, '0000-00-00'),
(206, '0000-00-00'),
(207, '0000-00-00'),
(208, '0000-00-00'),
(209, '0000-00-00'),
(210, '0000-00-00'),
(211, '0000-00-00'),
(212, '0000-00-00'),
(213, '0000-00-00'),
(214, '0000-00-00'),
(215, '0000-00-00'),
(216, '0000-00-00'),
(217, '0000-00-00'),
(218, '0000-00-00'),
(219, '0000-00-00'),
(220, '0000-00-00'),
(221, '0000-00-00'),
(222, '0000-00-00'),
(223, '0000-00-00'),
(224, '0000-00-00'),
(225, '0000-00-00'),
(226, '0000-00-00'),
(227, '0000-00-00'),
(228, '0000-00-00'),
(229, '0000-00-00'),
(230, '0000-00-00'),
(231, '0000-00-00'),
(232, '0000-00-00'),
(233, '0000-00-00'),
(234, '0000-00-00'),
(235, '0000-00-00'),
(236, '0000-00-00'),
(237, '0000-00-00'),
(238, '0000-00-00'),
(239, '0000-00-00'),
(240, '0000-00-00'),
(241, '0000-00-00'),
(242, '0000-00-00'),
(243, '0000-00-00'),
(244, '0000-00-00'),
(245, '0000-00-00'),
(246, '0000-00-00'),
(247, '0000-00-00'),
(248, '0000-00-00'),
(249, '0000-00-00'),
(250, '0000-00-00'),
(251, '0000-00-00'),
(252, '0000-00-00'),
(253, '0000-00-00'),
(254, '0000-00-00'),
(255, '0000-00-00'),
(256, '0000-00-00'),
(257, '0000-00-00'),
(258, '0000-00-00'),
(259, '0000-00-00'),
(260, '0000-00-00'),
(261, '0000-00-00'),
(262, '0000-00-00'),
(263, '0000-00-00'),
(264, '0000-00-00'),
(265, '0000-00-00'),
(266, '0000-00-00'),
(267, '0000-00-00'),
(268, '0000-00-00'),
(269, '0000-00-00'),
(270, '0000-00-00'),
(271, '0000-00-00'),
(272, '0000-00-00'),
(273, '0000-00-00'),
(274, '0000-00-00'),
(275, '0000-00-00'),
(276, '0000-00-00'),
(277, '0000-00-00'),
(278, '0000-00-00'),
(279, '0000-00-00'),
(280, '0000-00-00'),
(281, '0000-00-00'),
(282, '0000-00-00'),
(283, '0000-00-00'),
(284, '0000-00-00'),
(285, '0000-00-00'),
(286, '0000-00-00'),
(287, '0000-00-00'),
(288, '0000-00-00'),
(289, '0000-00-00'),
(290, '0000-00-00'),
(291, '0000-00-00'),
(292, '0000-00-00'),
(293, '0000-00-00'),
(294, '0000-00-00'),
(295, '0000-00-00'),
(296, '0000-00-00'),
(297, '0000-00-00'),
(298, '0000-00-00'),
(299, '0000-00-00'),
(300, '0000-00-00'),
(301, '0000-00-00'),
(302, '0000-00-00'),
(303, '0000-00-00'),
(304, '0000-00-00'),
(305, '0000-00-00'),
(306, '0000-00-00'),
(307, '0000-00-00'),
(308, '0000-00-00'),
(309, '0000-00-00'),
(310, '0000-00-00'),
(311, '0000-00-00'),
(312, '0000-00-00'),
(313, '0000-00-00'),
(314, '0000-00-00'),
(315, '0000-00-00'),
(316, '0000-00-00'),
(317, '0000-00-00'),
(318, '0000-00-00'),
(319, '0000-00-00'),
(320, '0000-00-00'),
(321, '0000-00-00'),
(322, '0000-00-00'),
(323, '0000-00-00'),
(324, '0000-00-00'),
(325, '0000-00-00'),
(326, '0000-00-00'),
(327, '0000-00-00'),
(328, '0000-00-00'),
(329, '0000-00-00'),
(330, '0000-00-00'),
(331, '0000-00-00'),
(332, '0000-00-00'),
(333, '0000-00-00'),
(334, '0000-00-00'),
(335, '0000-00-00'),
(336, '0000-00-00'),
(337, '0000-00-00'),
(338, '0000-00-00'),
(339, '0000-00-00'),
(340, '0000-00-00'),
(341, '0000-00-00'),
(342, '0000-00-00'),
(343, '0000-00-00'),
(344, '0000-00-00'),
(345, '0000-00-00'),
(346, '0000-00-00'),
(347, '0000-00-00'),
(348, '0000-00-00'),
(349, '0000-00-00'),
(350, '0000-00-00'),
(351, '0000-00-00'),
(352, '0000-00-00'),
(353, '0000-00-00'),
(354, '0000-00-00'),
(355, '0000-00-00'),
(356, '0000-00-00'),
(357, '0000-00-00'),
(358, '0000-00-00'),
(359, '0000-00-00'),
(360, '0000-00-00'),
(361, '0000-00-00'),
(362, '0000-00-00'),
(363, '0000-00-00'),
(364, '0000-00-00'),
(365, '0000-00-00'),
(366, '0000-00-00'),
(367, '0000-00-00'),
(368, '0000-00-00'),
(369, '0000-00-00'),
(370, '0000-00-00'),
(371, '0000-00-00'),
(372, '0000-00-00'),
(373, '0000-00-00'),
(374, '0000-00-00'),
(375, '0000-00-00'),
(376, '0000-00-00'),
(377, '0000-00-00'),
(378, '0000-00-00'),
(379, '0000-00-00'),
(380, '0000-00-00'),
(381, '0000-00-00'),
(382, '0000-00-00'),
(383, '0000-00-00'),
(384, '0000-00-00'),
(385, '0000-00-00'),
(386, '0000-00-00'),
(387, '0000-00-00'),
(388, '0000-00-00'),
(389, '0000-00-00'),
(390, '0000-00-00'),
(391, '0000-00-00'),
(392, '0000-00-00'),
(393, '0000-00-00'),
(394, '0000-00-00'),
(395, '0000-00-00'),
(396, '0000-00-00'),
(397, '0000-00-00'),
(398, '0000-00-00'),
(399, '0000-00-00'),
(400, '0000-00-00'),
(401, '0000-00-00'),
(402, '0000-00-00'),
(403, '0000-00-00'),
(404, '0000-00-00'),
(405, '0000-00-00'),
(406, '0000-00-00'),
(407, '0000-00-00'),
(408, '0000-00-00'),
(409, '0000-00-00'),
(410, '0000-00-00'),
(411, '0000-00-00'),
(412, '0000-00-00'),
(413, '0000-00-00'),
(414, '0000-00-00'),
(415, '0000-00-00'),
(416, '0000-00-00'),
(417, '0000-00-00'),
(418, '0000-00-00'),
(419, '0000-00-00'),
(420, '0000-00-00'),
(421, '0000-00-00'),
(422, '0000-00-00'),
(423, '0000-00-00'),
(424, '0000-00-00'),
(425, '0000-00-00'),
(426, '0000-00-00'),
(427, '0000-00-00'),
(428, '0000-00-00'),
(429, '0000-00-00'),
(430, '0000-00-00'),
(431, '0000-00-00'),
(432, '0000-00-00'),
(433, '0000-00-00'),
(434, '0000-00-00'),
(435, '0000-00-00'),
(436, '0000-00-00'),
(437, '0000-00-00'),
(438, '0000-00-00'),
(439, '0000-00-00'),
(440, '0000-00-00'),
(441, '0000-00-00'),
(442, '0000-00-00'),
(443, '0000-00-00'),
(444, '0000-00-00'),
(445, '0000-00-00'),
(446, '0000-00-00'),
(447, '0000-00-00'),
(448, '0000-00-00'),
(449, '0000-00-00'),
(450, '0000-00-00'),
(451, '0000-00-00'),
(452, '0000-00-00'),
(453, '0000-00-00'),
(454, '0000-00-00'),
(455, '0000-00-00'),
(456, '0000-00-00'),
(457, '0000-00-00'),
(458, '0000-00-00'),
(459, '0000-00-00'),
(460, '0000-00-00'),
(461, '0000-00-00'),
(462, '2000-01-26'),
(463, '2000-01-26'),
(464, '2000-01-26'),
(465, '2000-01-26'),
(466, '2000-01-26'),
(467, '2000-01-26'),
(468, '2000-01-26'),
(469, '2000-01-26'),
(470, '0000-00-00'),
(471, '0000-00-00'),
(472, '0000-00-00'),
(473, '0000-00-00'),
(474, '0000-00-00'),
(475, '0000-00-00'),
(476, '0000-00-00'),
(477, '0000-00-00'),
(478, '0000-00-00'),
(479, '0000-00-00'),
(480, '0000-00-00'),
(481, '0000-00-00'),
(482, '0000-00-00'),
(483, '0000-00-00'),
(484, '0000-00-00'),
(485, '0000-00-00'),
(486, '0000-00-00'),
(487, '0000-00-00'),
(488, '0000-00-00'),
(489, '0000-00-00'),
(490, '0000-00-00'),
(491, '0000-00-00'),
(492, '0000-00-00'),
(493, '0000-00-00'),
(494, '0000-00-00'),
(495, '0000-00-00'),
(496, '0000-00-00'),
(497, '0000-00-00'),
(498, '0000-00-00'),
(499, '0000-00-00'),
(500, '0000-00-00'),
(501, '0000-00-00'),
(502, '0000-00-00'),
(503, '0000-00-00'),
(504, '0000-00-00'),
(505, '0000-00-00'),
(506, '0000-00-00'),
(507, '0000-00-00'),
(508, '0000-00-00'),
(509, '0000-00-00'),
(510, '0000-00-00'),
(511, '0000-00-00'),
(512, '0000-00-00'),
(513, '0000-00-00'),
(514, '0000-00-00'),
(515, '0000-00-00'),
(516, '0000-00-00'),
(517, '0000-00-00'),
(518, '0000-00-00'),
(519, '0000-00-00'),
(520, '0000-00-00'),
(521, '0000-00-00'),
(522, '0000-00-00'),
(523, '0000-00-00'),
(524, '0000-00-00'),
(525, '0000-00-00'),
(526, '0000-00-00'),
(527, '0000-00-00'),
(528, '0000-00-00'),
(529, '0000-00-00'),
(530, '0000-00-00'),
(531, '0000-00-00'),
(532, '0000-00-00'),
(533, '0000-00-00'),
(534, '0000-00-00'),
(535, '0000-00-00'),
(536, '0000-00-00'),
(537, '0000-00-00'),
(538, '0000-00-00'),
(539, '0000-00-00'),
(540, '0000-00-00'),
(541, '0000-00-00'),
(542, '0000-00-00'),
(543, '0000-00-00'),
(544, '0000-00-00'),
(545, '0000-00-00'),
(546, '0000-00-00'),
(547, '0000-00-00'),
(548, '0000-00-00'),
(549, '0000-00-00'),
(550, '0000-00-00'),
(551, '0000-00-00'),
(552, '0000-00-00'),
(553, '0000-00-00'),
(554, '0000-00-00'),
(555, '0000-00-00'),
(556, '0000-00-00'),
(557, '0000-00-00'),
(558, '0000-00-00'),
(559, '0000-00-00'),
(560, '0000-00-00'),
(561, '0000-00-00'),
(562, '0000-00-00'),
(563, '0000-00-00'),
(564, '0000-00-00'),
(565, '0000-00-00'),
(566, '0000-00-00'),
(567, '0000-00-00'),
(568, '0000-00-00'),
(569, '0000-00-00'),
(570, '0000-00-00'),
(571, '0000-00-00'),
(572, '0000-00-00'),
(573, '0000-00-00'),
(574, '0000-00-00'),
(575, '0000-00-00'),
(576, '0000-00-00'),
(577, '0000-00-00'),
(578, '0000-00-00'),
(579, '0000-00-00'),
(580, '0000-00-00'),
(581, '0000-00-00'),
(582, '0000-00-00'),
(583, '0000-00-00'),
(584, '0000-00-00'),
(585, '0000-00-00'),
(586, '0000-00-00'),
(587, '0000-00-00'),
(588, '0000-00-00'),
(589, '0000-00-00'),
(590, '0000-00-00'),
(591, '0000-00-00'),
(592, '0000-00-00'),
(593, '0000-00-00'),
(594, '0000-00-00'),
(595, '0000-00-00'),
(596, '0000-00-00'),
(597, '0000-00-00'),
(598, '0000-00-00'),
(599, '0000-00-00'),
(600, '0000-00-00'),
(601, '0000-00-00'),
(602, '0000-00-00'),
(603, '0000-00-00'),
(604, '0000-00-00'),
(605, '0000-00-00'),
(606, '0000-00-00'),
(607, '0000-00-00'),
(608, '0000-00-00'),
(609, '0000-00-00'),
(610, '0000-00-00'),
(611, '0000-00-00'),
(612, '0000-00-00'),
(613, '0000-00-00'),
(614, '0000-00-00'),
(615, '0000-00-00'),
(616, '0000-00-00'),
(617, '0000-00-00'),
(618, '0000-00-00'),
(619, '0000-00-00'),
(620, '0000-00-00'),
(621, '0000-00-00'),
(622, '0000-00-00'),
(623, '0000-00-00'),
(624, '0000-00-00'),
(625, '0000-00-00'),
(626, '0000-00-00'),
(627, '0000-00-00'),
(628, '0000-00-00'),
(629, '0000-00-00'),
(630, '0000-00-00'),
(631, '0000-00-00'),
(632, '0000-00-00'),
(633, '0000-00-00'),
(634, '0000-00-00'),
(635, '0000-00-00'),
(636, '0000-00-00'),
(637, '0000-00-00'),
(638, '0000-00-00'),
(639, '0000-00-00'),
(640, '0000-00-00'),
(641, '0000-00-00'),
(642, '0000-00-00'),
(643, '0000-00-00'),
(644, '0000-00-00'),
(645, '0000-00-00'),
(646, '0000-00-00'),
(647, '0000-00-00'),
(648, '0000-00-00'),
(649, '0000-00-00'),
(650, '0000-00-00'),
(651, '0000-00-00'),
(652, '0000-00-00'),
(653, '0000-00-00'),
(654, '0000-00-00'),
(655, '0000-00-00'),
(656, '0000-00-00'),
(657, '0000-00-00'),
(658, '0000-00-00'),
(659, '0000-00-00'),
(660, '0000-00-00'),
(661, '0000-00-00'),
(662, '0000-00-00'),
(663, '0000-00-00'),
(664, '0000-00-00'),
(665, '0000-00-00'),
(666, '0000-00-00'),
(667, '0000-00-00'),
(668, '0000-00-00'),
(669, '0000-00-00'),
(670, '0000-00-00'),
(671, '0000-00-00'),
(672, '0000-00-00'),
(673, '0000-00-00'),
(674, '0000-00-00'),
(675, '0000-00-00'),
(676, '0000-00-00'),
(677, '0000-00-00'),
(678, '0000-00-00'),
(679, '0000-00-00'),
(680, '0000-00-00'),
(681, '0000-00-00'),
(682, '0000-00-00'),
(683, '0000-00-00'),
(684, '0000-00-00'),
(685, '0000-00-00'),
(686, '0000-00-00'),
(687, '0000-00-00'),
(688, '0000-00-00'),
(689, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter_emails`
--
ALTER TABLE `news_letter_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statics`
--
ALTER TABLE `statics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`count`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `news_letter_emails`
--
ALTER TABLE `news_letter_emails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `count` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=690;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
