-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 02:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postalservicedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `EnquiryId` int(50) NOT NULL,
  `EnquiryName` varchar(25) NOT NULL,
  `EnquiryTime` time NOT NULL,
  `Date` date NOT NULL,
  `RefType` varchar(25) NOT NULL,
  `RefName` varchar(20) NOT NULL,
  `RefNo` int(8) NOT NULL,
  `EnquiryReason` varchar(100) NOT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`EnquiryId`, `EnquiryName`, `EnquiryTime`, `Date`, `RefType`, `RefName`, `RefNo`, `EnquiryReason`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'fg', '12:40:00', '2023-03-04', 'MLA', 'gh', 45, 'gh', 0, 1, 1, '2023-03-26 09:10:32', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 07:10:32'),
(2, 'bn', '12:56:00', '2023-03-04', 'Prime Minister', 'hj', 67, 'df', 0, 1, 1, '2023-03-26 09:26:26', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 07:26:26'),
(3, 'er', '13:22:00', '2023-03-16', 'President', 'ty', 34, 'hj', 0, 1, 1, '2023-03-26 09:53:00', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 07:53:00'),
(4, 'asd', '13:56:00', '2023-03-09', 'Chief Minister', 'dfg', 34, 'ghjk', 0, 1, 1, '2023-03-26 10:26:41', 1, NULL, NULL, NULL, NULL, NULL, '2023-03-26 08:26:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`EnquiryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `EnquiryId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
