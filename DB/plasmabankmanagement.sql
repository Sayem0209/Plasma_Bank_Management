-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 01:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plasmabankmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `Donor_Id` int(11) NOT NULL,
  `donor_username` varchar(255) NOT NULL,
  `Donor_Name` varchar(25) NOT NULL,
  `Address` text NOT NULL,
  `Contact_No` varchar(15) NOT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Blood_Group` varchar(5) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`Donor_Id`, `donor_username`, `Donor_Name`, `Address`, `Contact_No`, `Date_of_Birth`, `Blood_Group`, `password`) VALUES
(1, '', 'Hafsa Tajrin', 'Dhaka', '01841188024', '1984-03-12', 'B+', ''),
(2, '', 'Abdur Rahim', 'Dhaka', '01617775300', '1987-04-28', 'A+', ''),
(3, '', 'Maruf Billah', 'Khulna', '01993287224', '1989-08-07', 'O+', ''),
(4, '', 'AKM Niloy', 'Mymensingh', '01721084016', '1975-05-30', 'B+', ''),
(5, '', 'Muminul Fahim', 'Sylhet', '01733700709', '1996-01-22', 'O+', ''),
(6, '', 'Rony Islam', 'Rajshahi', '01749964017', '1979-06-29', 'B+', ''),
(7, '', 'Junayed Asif', 'Rangpur', '01774343394', '1988-10-06', 'AB+', ''),
(8, '', 'Badshah Miah', 'Sylhet', '01791805513', '1986-09-21', 'AB+', ''),
(9, '', 'Joy Saha', 'Mymensingh', '01812744330', '1995-11-27', 'B+', ''),
(10, '', 'Tasnuva Tabassum', 'Dhaka', '01743039013', '1992-02-11', 'B+', ''),
(11, '', 'Maruf Hasan', 'Sylhet', '01893918383', '1988-08-09', 'AB+', ''),
(12, '', 'Piyal Hasan', 'Chittagong', '01812376168', '1990-02-26', 'A+', ''),
(13, 'testdonor', 'Test Donor1', 'Dhaka1', '1234567891', NULL, 'O+', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'mehrun', 'Mehrun Nessa', 'Dhaka Cantonment', '01994746544', NULL, 'AB+', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `donor_medical_history`
--

CREATE TABLE `donor_medical_history` (
  `id` int(11) NOT NULL,
  `donor_Id` int(11) NOT NULL,
  `Donor_Age` int(11) NOT NULL,
  `HB_Count` varchar(10) DEFAULT NULL,
  `WBC_Count` varchar(10) DEFAULT NULL,
  `RBC_Count` varchar(10) DEFAULT NULL,
  `Is_Diabetic` varchar(5) DEFAULT NULL,
  `Is_Alcoholic` varchar(5) DEFAULT NULL,
  `is_covid` varchar(5) NOT NULL,
  `Height` varchar(10) DEFAULT NULL,
  `Weight` varchar(10) DEFAULT NULL,
  `Covid19_Recovery_Date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_medical_history`
--

INSERT INTO `donor_medical_history` (`id`, `donor_Id`, `Donor_Age`, `HB_Count`, `WBC_Count`, `RBC_Count`, `Is_Diabetic`, `Is_Alcoholic`, `is_covid`, `Height`, `Weight`, `Covid19_Recovery_Date`) VALUES
(1, 13, 20, NULL, '3', '2', 'yes', 'no', 'yes', '5.5', NULL, '2022-01-01'),
(2, 14, 20, NULL, '350', '300', 'yes', 'no', 'no', '5.5', NULL, '2022-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_Id` int(11) NOT NULL,
  `Patient_Name` varchar(25) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Address` text NOT NULL,
  `Blood_Group` varchar(5) DEFAULT NULL,
  `patient_username` varchar(255) NOT NULL,
  `patient_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_Id`, `Patient_Name`, `Phone_Number`, `Address`, `Blood_Group`, `patient_username`, `patient_password`) VALUES
(1, 'Nurul Hasan', '01718345131', 'Chittagong', 'A+', '', 'fc3f318fba8b3c1502bece62a27712df'),
(2, 'Sifat Islam', '01771080595', 'Dhaka', 'B+', '', ''),
(3, 'Farhin Alam', '01799970987', 'Mymensingh', 'B+', '', ''),
(4, 'Forhad Alam', '01730191834', 'Mymensingh', 'B+', '', ''),
(5, 'Mominul Haque', '01749341075', 'Sylhet', 'O+', '', ''),
(6, 'Nasima Akter', '01783434345', 'Dhaka', 'A+', '', ''),
(7, 'Feroj Ahmed', '01759210080', 'Sylhet', 'AB+', '', ''),
(8, 'Rakibul Islam', '01622011981', 'Sylhet', 'AB+', '', ''),
(9, 'Manik Hasan', '01964395761', 'Dhaka', 'B+', '', ''),
(10, 'Saiful Islam', '01521249751', 'Rangpur', 'AB+', '', ''),
(11, 'Anirban Sarker', '01990272384', 'Khulna', 'O+', '', ''),
(12, 'Nur Alam', '01927932117', 'Rajshahi', 'B+', '', ''),
(13, 'Test Patient1', '12345665', 'Jamalpur, Mymensingh, Ban', 'O-', 'testpatient', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`Donor_Id`);

--
-- Indexes for table `donor_medical_history`
--
ALTER TABLE `donor_medical_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `Donor_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donor_medical_history`
--
ALTER TABLE `donor_medical_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
