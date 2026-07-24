-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 يوليو 2026 الساعة 07:01
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dermatology_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patientname` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `skincondition` varchar(100) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `appointments`
--

INSERT INTO `appointments` (`id`, `patientname`, `doctor`, `skincondition`, `appointment_date`, `appointment_time`, `notes`) VALUES
(13, 'loli', 'Dr. Hoor Fawaz', 'Red acne', '2026-04-21', '03:33:00', 'hi'),
(14, 'jn', 'Dr. Khalid', 'Rosacea', '2026-04-30', '08:34:00', ''),
(15, 'lina', 'Dr. Hoor Fawaz', 'Rosacea', '2026-05-01', '00:19:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
