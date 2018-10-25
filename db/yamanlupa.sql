-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 08:29 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yamanlupa`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `id` int(11) NOT NULL,
  `fullname` varchar(199) NOT NULL,
  `username` varchar(199) NOT NULL,
  `email` varchar(199) NOT NULL,
  `password` varchar(199) NOT NULL,
  `confirmpassword` varchar(199) NOT NULL,
  `group_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`id`, `fullname`, `username`, `email`, `password`, `confirmpassword`, `group_id`) VALUES
(1, 'Yamang Lupa Admin', 'yamanglupa@admin', 'yamanglupa@test.com', 'eabfc4a53ae29319cc20b2e75c3a439e', 'yamanglupaadmin', '0'),
(2, 'Jan Paulo Paz', 'paulo1298', 'jpaulopaz08@gmail.com', '77c2f7b1a3d1880223f854d577a67121', 'paulojenny', '');

-- --------------------------------------------------------

--
-- Table structure for table `dss_table`
--

CREATE TABLE `dss_table` (
  `id` int(11) NOT NULL,
  `dss_info` varchar(199) NOT NULL,
  `dss_krit` varchar(199) NOT NULL,
  `dss_observe` varchar(199) NOT NULL,
  `dss_result` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dss_table`
--

INSERT INTO `dss_table` (`id`, `dss_info`, `dss_krit`, `dss_observe`, `dss_result`) VALUES
(7, 'pH ng Lupa', '-', '6.9', 'Normal'),
(8, 'Electricity conductivity', '<0.8', '0.52', 'Normal'),
(9, 'Organic Carbon (%)', '2', '1.08', 'Hindi Sapat'),
(10, 'Available Phosphorous (ppm)', '10', '159', 'Sapat'),
(11, 'Available Potassium (ppm)', '75', '780', 'Sapat'),
(12, 'Available Sulfur (ppm)', '10', '12.2', 'Sapat'),
(13, 'Available Zinc (ppm)', '0.75', '2.08', 'Sapat');

-- --------------------------------------------------------

--
-- Table structure for table `dss_table_five`
--

CREATE TABLE `dss_table_five` (
  `id` int(11) NOT NULL,
  `dss_info` varchar(199) NOT NULL,
  `dss_krit` varchar(199) NOT NULL,
  `dss_observe` varchar(199) NOT NULL,
  `dss_result` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dss_table_four`
--

CREATE TABLE `dss_table_four` (
  `id` int(11) NOT NULL,
  `dss_info` varchar(199) NOT NULL,
  `dss_krit` varchar(199) NOT NULL,
  `dss_observe` varchar(199) NOT NULL,
  `dss_result` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dss_table_one`
--

CREATE TABLE `dss_table_one` (
  `id` int(11) NOT NULL,
  `dss_info` varchar(199) NOT NULL,
  `dss_krit` varchar(199) NOT NULL,
  `dss_observe` varchar(199) NOT NULL,
  `dss_result` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dss_table_one`
--

INSERT INTO `dss_table_one` (`id`, `dss_info`, `dss_krit`, `dss_observe`, `dss_result`) VALUES
(11, 'pH ng Lupa', '-', '5.21', 'Maasim'),
(12, 'Electricity conductivity', '<0.8', '0.37', 'Normal'),
(13, 'Organic Carbon (%)', '2', '1.86', 'Hindi Sapat'),
(14, 'Available Phosphorous (ppm)', '10', '30.27', 'Sapat'),
(15, 'Available Potassium (ppm)', '75', '183.8', 'Sapat'),
(16, 'Available Sulfur (ppm)', '10', '754.67', 'Sapat'),
(17, 'Available Zinc (ppm)', '0.75', '1.52', 'Sapat');

-- --------------------------------------------------------

--
-- Table structure for table `dss_table_three`
--

CREATE TABLE `dss_table_three` (
  `id` int(11) NOT NULL,
  `dss_info` varchar(199) NOT NULL,
  `dss_krit` varchar(199) NOT NULL,
  `dss_observe` varchar(199) NOT NULL,
  `dss_result` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dss_table_two`
--

CREATE TABLE `dss_table_two` (
  `id` int(11) NOT NULL,
  `dss_info` varchar(199) NOT NULL,
  `dss_krit` varchar(199) NOT NULL,
  `dss_observe` varchar(199) NOT NULL,
  `dss_result` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lime_calculator`
--

CREATE TABLE `lime_calculator` (
  `id` int(11) NOT NULL,
  `crops` varchar(199) NOT NULL,
  `value` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lime_calculator`
--

INSERT INTO `lime_calculator` (`id`, `crops`, `value`, `date`) VALUES
(1, 'Labanos', '6.5', '2018-10-17 11:25:44.017691'),
(2, 'Kamatis', '6.5', '2018-10-17 10:31:46.661004'),
(3, 'Kalabasa', '6.25', '2018-10-17 10:31:58.808628'),
(4, 'Bawang', '6.75', '2018-10-17 10:32:26.328487'),
(5, 'Ampalaya', '6.35', '2018-10-17 10:33:06.663294'),
(6, 'Luya', '6.9', '2018-10-17 10:33:35.728341'),
(7, 'Mais', '6.0', '2018-10-17 10:33:53.537045'),
(8, 'Mustasa', '6.15', '2018-10-17 10:34:35.792599'),
(9, 'Petchay', '6.0', '2018-10-17 10:34:43.947821'),
(10, 'Okra', '6.15', '2018-10-17 10:34:54.141192'),
(11, 'Talong', '5.75', '2018-10-17 10:36:02.864332'),
(12, 'Pakwan', '6.0', '2018-10-17 10:36:15.507341'),
(13, 'Palay', '6.0', '2018-10-17 10:36:28.471550'),
(14, 'Patola', '7.0', '2018-10-17 10:36:38.735345'),
(15, 'Upo', '7.0', '2018-10-17 10:36:48.788224'),
(16, 'Pipino', '6.25', '2018-10-17 10:36:56.085964'),
(17, 'Sibuyas', '6.5', '2018-10-17 10:37:03.159188'),
(18, 'Sigarilyas', '6.15', '2018-10-17 10:37:11.559815'),
(19, 'Sitaw', '6.0', '2018-10-17 10:37:18.182228'),
(20, 'Siling Panigang', '6.25', '2018-10-17 10:37:27.194469'),
(21, 'Spinach', '6.75', '2018-10-17 10:37:34.270956'),
(22, 'Lara', '6.25', '2018-10-17 10:37:41.764344'),
(24, 'Lettuce', '6.5', '2018-10-17 10:38:32.641181'),
(25, 'Kintsay', '6.4', '2018-10-17 10:38:46.559726'),
(26, 'Kamote', '6.0', '2018-10-17 10:38:52.260063'),
(28, 'Banana', '6.5', '2018-10-17 11:29:35.742064');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `description` varchar(199) CHARACTER SET utf8 NOT NULL,
  `crop` varchar(199) NOT NULL,
  `eastings` varchar(199) NOT NULL,
  `northings` varchar(199) NOT NULL,
  `ph` varchar(199) NOT NULL,
  `ec` varchar(199) NOT NULL,
  `oc` varchar(199) NOT NULL,
  `totaln` varchar(199) NOT NULL,
  `availp` varchar(199) NOT NULL,
  `availk` varchar(199) NOT NULL,
  `avails` varchar(199) NOT NULL,
  `availzn` varchar(199) NOT NULL,
  `availb` varchar(199) NOT NULL,
  `availfe` varchar(199) NOT NULL,
  `availcu` varchar(199) NOT NULL,
  `availmn` varchar(199) NOT NULL,
  `location_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soil_copper`
--

CREATE TABLE `soil_copper` (
  `id` int(11) NOT NULL,
  `info_lupa` varchar(199) NOT NULL,
  `krit_hangganan` varchar(199) NOT NULL,
  `obserbasyon` varchar(199) NOT NULL,
  `resulta` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_copper`
--

INSERT INTO `soil_copper` (`id`, `info_lupa`, `krit_hangganan`, `obserbasyon`, `resulta`, `date`) VALUES
(1, 'Available Copper (PPM)', '0.50', '312', 'Normal', '2018-10-16 09:43:49.820665'),
(2, 'Available Copper (PPM)', '0.50', '312', 'Normal', '2018-10-16 09:44:54.477996');

-- --------------------------------------------------------

--
-- Table structure for table `soil_elec`
--

CREATE TABLE `soil_elec` (
  `id` int(11) NOT NULL,
  `info_lupa` varchar(199) NOT NULL,
  `krit_hangganan` varchar(199) NOT NULL,
  `obserbasyon` varchar(199) NOT NULL,
  `resulta` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_elec`
--

INSERT INTO `soil_elec` (`id`, `info_lupa`, `krit_hangganan`, `obserbasyon`, `resulta`, `date`) VALUES
(1, 'Electricity Conductivity', '0.8', '132', 'Normal', '2018-10-16 09:43:49.676331'),
(2, 'Electricity Conductivity', '0.8', '132', 'Normal', '2018-10-16 09:44:54.178846');

-- --------------------------------------------------------

--
-- Table structure for table `soil_manga`
--

CREATE TABLE `soil_manga` (
  `id` int(11) NOT NULL,
  `info_lupa` varchar(199) NOT NULL,
  `krit_hangganan` varchar(199) NOT NULL,
  `obserbasyon` varchar(199) NOT NULL,
  `resulta` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_manga`
--

INSERT INTO `soil_manga` (`id`, `info_lupa`, `krit_hangganan`, `obserbasyon`, `resulta`, `date`) VALUES
(1, 'Available Manganese (PPM)', '1.00', '132', 'Available Manganese (PPM)', '2018-10-16 09:43:49.839647'),
(2, 'Available Manganese (PPM)', '1.00', '132', 'Available Manganese (PPM)', '2018-10-16 09:44:54.509057');

-- --------------------------------------------------------

--
-- Table structure for table `soil_org`
--

CREATE TABLE `soil_org` (
  `id` int(11) NOT NULL,
  `info_lupa` varchar(199) NOT NULL,
  `krit_hangganan` varchar(199) NOT NULL,
  `obserbasyon` varchar(199) NOT NULL,
  `resulta` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_org`
--

INSERT INTO `soil_org` (`id`, `info_lupa`, `krit_hangganan`, `obserbasyon`, `resulta`, `date`) VALUES
(1, 'Oraganic Carbon (%)', '2.0', '123', 'Normal', '2018-10-16 09:43:49.695537'),
(2, 'Oraganic Carbon (%)', '2.0', '123', 'Normal', '2018-10-16 09:44:54.220308');

-- --------------------------------------------------------

--
-- Table structure for table `soil_ph`
--

CREATE TABLE `soil_ph` (
  `id` int(11) NOT NULL,
  `info_lupa` varchar(199) NOT NULL,
  `krit_hangganan` varchar(199) NOT NULL,
  `obserbasyon` varchar(199) NOT NULL,
  `resulta` varchar(199) NOT NULL,
  `date` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_ph`
--

INSERT INTO `soil_ph` (`id`, `info_lupa`, `krit_hangganan`, `obserbasyon`, `resulta`, `date`) VALUES
(1, 'PH ng Lupa', '-', '123', 'Normal', ''),
(2, 'PH ng Lupa', '-', '123', 'Normal', '');

-- --------------------------------------------------------

--
-- Table structure for table `soil_phospho`
--

CREATE TABLE `soil_phospho` (
  `id` int(11) NOT NULL,
  `info_lupa` varchar(199) NOT NULL,
  `krit_hangganan` varchar(199) NOT NULL,
  `obserbasyon` varchar(199) NOT NULL,
  `resulta` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_phospho`
--

INSERT INTO `soil_phospho` (`id`, `info_lupa`, `krit_hangganan`, `obserbasyon`, `resulta`, `date`) VALUES
(1, 'Available Phosphorous (PPM)', '10', '321', 'Normal', '2018-10-16 09:43:49.720550'),
(2, 'Available Phosphorous (PPM)', '10', '321', 'Normal', '2018-10-16 09:44:54.256800');

-- --------------------------------------------------------

--
-- Table structure for table `soil_pota`
--

CREATE TABLE `soil_pota` (
  `id` int(11) NOT NULL,
  `info_lupa` varchar(199) NOT NULL,
  `krit_hangganan` varchar(199) NOT NULL,
  `obserbasyon` varchar(199) NOT NULL,
  `resulta` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_pota`
--

INSERT INTO `soil_pota` (`id`, `info_lupa`, `krit_hangganan`, `obserbasyon`, `resulta`, `date`) VALUES
(1, 'Available Potassium (PPM)', '75', '123', 'Normal', '2018-10-16 09:43:49.739776'),
(2, 'Available Potassium (PPM)', '75', '123', 'Normal', '2018-10-16 09:44:54.330740');

-- --------------------------------------------------------

--
-- Table structure for table `soil_sulfur`
--

CREATE TABLE `soil_sulfur` (
  `id` int(11) NOT NULL,
  `info_lupa` varchar(199) NOT NULL,
  `krit_hangganan` varchar(199) NOT NULL,
  `obserbasyon` varchar(199) NOT NULL,
  `resulta` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_sulfur`
--

INSERT INTO `soil_sulfur` (`id`, `info_lupa`, `krit_hangganan`, `obserbasyon`, `resulta`, `date`) VALUES
(1, 'Available Sulfur (PPM)', '10', '123', 'Normal', '2018-10-16 09:43:49.776355'),
(2, 'Available Sulfur (PPM)', '10', '123', 'Normal', '2018-10-16 09:44:54.378111');

-- --------------------------------------------------------

--
-- Table structure for table `soil_table`
--

CREATE TABLE `soil_table` (
  `id` int(11) NOT NULL,
  `pangalan` varchar(199) NOT NULL,
  `brgy` varchar(199) NOT NULL,
  `bayan` varchar(199) NOT NULL,
  `lalawigan` varchar(199) NOT NULL,
  `soil_sample` varchar(199) NOT NULL,
  `sampling` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_table`
--

INSERT INTO `soil_table` (`id`, `pangalan`, `brgy`, `bayan`, `lalawigan`, `soil_sample`, `sampling`, `date`) VALUES
(1, 'Jan Paulo Paz', 'Ibabang Dupay', 'Lucena City', 'Quezon Province', '3.32cm', '1yr', '2018-10-16 09:43:49.614331'),
(2, 'Jan Paulo Paz', 'Ibabang Dupay', 'Lucena City', 'Quezon Province', '3.32cm', '1yr', '2018-10-16 09:44:54.099928');

-- --------------------------------------------------------

--
-- Table structure for table `soil_zinc`
--

CREATE TABLE `soil_zinc` (
  `id` int(11) NOT NULL,
  `info_lupa` varchar(199) NOT NULL,
  `krit_hangganan` varchar(199) NOT NULL,
  `obserbasyon` varchar(199) NOT NULL,
  `resulta` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soil_zinc`
--

INSERT INTO `soil_zinc` (`id`, `info_lupa`, `krit_hangganan`, `obserbasyon`, `resulta`, `date`) VALUES
(1, 'Available Zinc (PPM)', '0.75', '123', 'Normal', '2018-10-16 09:43:49.795415'),
(2, 'Available Zinc (PPM)', '0.75', '123', 'Normal', '2018-10-16 09:44:54.434141');

-- --------------------------------------------------------

--
-- Table structure for table `ylp_table`
--

CREATE TABLE `ylp_table` (
  `id` int(11) NOT NULL,
  `ylp_farmer` varchar(199) NOT NULL,
  `ylp_crop` varchar(199) NOT NULL,
  `ylp_eastings` varchar(199) NOT NULL,
  `ylp_northings` varchar(199) NOT NULL,
  `ylp_ph` varchar(199) NOT NULL,
  `ylp_ec` varchar(199) NOT NULL,
  `ylp_oc` varchar(199) NOT NULL,
  `ylp_total_n` varchar(199) NOT NULL,
  `ylp_avail_p` varchar(199) NOT NULL,
  `ylp_avail_k` varchar(199) NOT NULL,
  `ylp_avail_s` varchar(199) NOT NULL,
  `ylp_avail_zn` varchar(199) NOT NULL,
  `ylp_avail_b` varchar(199) NOT NULL,
  `ylp_avail_fe` varchar(199) NOT NULL,
  `ylp_avail_cu` varchar(199) NOT NULL,
  `ylp_avail_mn` varchar(199) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ylp_table`
--

INSERT INTO `ylp_table` (`id`, `ylp_farmer`, `ylp_crop`, `ylp_eastings`, `ylp_northings`, `ylp_ph`, `ylp_ec`, `ylp_oc`, `ylp_total_n`, `ylp_avail_p`, `ylp_avail_k`, `ylp_avail_s`, `ylp_avail_zn`, `ylp_avail_b`, `ylp_avail_fe`, `ylp_avail_cu`, `ylp_avail_mn`, `date`) VALUES
(3, 'Ligaya Basilyo', 'Rice', '334.099,13', '1.539.627,63', '3,82', '0,38', '3,13', '0,24', '0,00', '91,00', '4.056,00', '0,06', 'No Data', '130,81', '0,29', '3,94', '2018-10-17 11:35:20.751832');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dss_table`
--
ALTER TABLE `dss_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dss_table_five`
--
ALTER TABLE `dss_table_five`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dss_table_four`
--
ALTER TABLE `dss_table_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dss_table_one`
--
ALTER TABLE `dss_table_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dss_table_three`
--
ALTER TABLE `dss_table_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dss_table_two`
--
ALTER TABLE `dss_table_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lime_calculator`
--
ALTER TABLE `lime_calculator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_copper`
--
ALTER TABLE `soil_copper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_elec`
--
ALTER TABLE `soil_elec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_manga`
--
ALTER TABLE `soil_manga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_org`
--
ALTER TABLE `soil_org`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_ph`
--
ALTER TABLE `soil_ph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_phospho`
--
ALTER TABLE `soil_phospho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_pota`
--
ALTER TABLE `soil_pota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_sulfur`
--
ALTER TABLE `soil_sulfur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_table`
--
ALTER TABLE `soil_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil_zinc`
--
ALTER TABLE `soil_zinc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ylp_table`
--
ALTER TABLE `ylp_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dss_table`
--
ALTER TABLE `dss_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dss_table_five`
--
ALTER TABLE `dss_table_five`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dss_table_four`
--
ALTER TABLE `dss_table_four`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dss_table_one`
--
ALTER TABLE `dss_table_one`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dss_table_three`
--
ALTER TABLE `dss_table_three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dss_table_two`
--
ALTER TABLE `dss_table_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lime_calculator`
--
ALTER TABLE `lime_calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soil_copper`
--
ALTER TABLE `soil_copper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_elec`
--
ALTER TABLE `soil_elec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_manga`
--
ALTER TABLE `soil_manga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_org`
--
ALTER TABLE `soil_org`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_ph`
--
ALTER TABLE `soil_ph`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_phospho`
--
ALTER TABLE `soil_phospho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_pota`
--
ALTER TABLE `soil_pota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_sulfur`
--
ALTER TABLE `soil_sulfur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_table`
--
ALTER TABLE `soil_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_zinc`
--
ALTER TABLE `soil_zinc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ylp_table`
--
ALTER TABLE `ylp_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
