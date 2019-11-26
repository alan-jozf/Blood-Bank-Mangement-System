-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 05:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodtoday`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(5) NOT NULL,
  `U_id` int(5) NOT NULL,
  `a_name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `U_id`, `a_name`, `status`) VALUES
(1, 5, 'Alan Joseph', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `bb_id` int(5) NOT NULL,
  `U_id` int(5) NOT NULL,
  `bbname` varchar(30) NOT NULL,
  `sd_id` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`bb_id`, `U_id`, `bbname`, `sd_id`, `status`) VALUES
(2, 6, 'Caritas', 7, 1),
(3, 15, 'Medicity', 7, 1),
(6, 24, 'Medical Trust', 1, 1),
(7, 27, 'ktr', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `Bg_id` int(4) NOT NULL,
  `BloodType` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`Bg_id`, `BloodType`, `status`) VALUES
(1, 'A+', 1),
(2, 'A-', 1),
(3, 'B+', 1),
(4, 'B-', 1),
(5, 'O+', 1),
(6, 'O-', 1),
(7, 'AB+', 1),
(8, 'AB-', 1),
(9, 'Don\'t Know', 1),
(10, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `dt_id` int(2) NOT NULL,
  `dt_name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`dt_id`, `dt_name`, `status`) VALUES
(1, 'Thiruvananthapuram', 1),
(2, 'Kollam', 1),
(3, 'Pathanamthitta', 1),
(4, 'Alapuzha', 1),
(5, 'Kottayam', 1),
(6, 'Idukki', 1),
(7, 'Ernakulam', 1),
(8, 'Thrissur', 1),
(9, 'Palakad', 1),
(10, 'Malapuram', 1),
(11, 'Kozhikode', 1),
(12, 'Wayanad', 1),
(13, 'Kannur', 1),
(14, 'Kasargod', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `R_id` int(5) NOT NULL,
  `U_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `hname` varchar(20) NOT NULL,
  `subdist` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `bloodgroup` varchar(10) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`R_id`, `U_id`, `name`, `hname`, `subdist`, `gender`, `dob`, `bloodgroup`, `status`) VALUES
(5, 8, 'Jolll jo', 'kiloyuii', 'Kanjirapally', 'Female', '1981-11-14', 'O+', 1),
(6, 12, 'RAHUxz HAJI', 'ZXZx sdas', 'Kanjirapally', 'Male', '1992-10-10', 'A-', 1),
(7, 13, 'mithul kiui', 'shhuyj bh', 'Kottayam', 'Female', '1994-10-10', 'B-', 1),
(8, 16, 'alan mathew', 'karikoottar', 'Kottayam', 'Male', '1999-10-05', 'AB-', 1),
(10, 26, 'hari j k', 'tyreio', 'Nedumangadu', 'Male', '2001-10-02', 'AB+', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dp`
--

CREATE TABLE `dp` (
  `dp_id` int(5) NOT NULL,
  `U_id` int(5) NOT NULL,
  `image` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dp`
--

INSERT INTO `dp` (`dp_id`, `U_id`, `image`, `status`) VALUES
(5, 5, 'alan.jpg', 1),
(7, 16, 'IMG_4701.jpg', 1),
(17, 8, 'donate.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `h_id` int(5) NOT NULL,
  `U_id` int(5) NOT NULL,
  `h_name` varchar(30) NOT NULL,
  `sd_id` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`h_id`, `U_id`, `h_name`, `sd_id`, `status`) VALUES
(1, 7, 'Caritas', 7, 1),
(4, 14, 'Medical College', 7, 1),
(5, 25, 'Medical Trust', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subdist`
--

CREATE TABLE `subdist` (
  `sd_id` int(5) NOT NULL,
  `dt_id` int(2) NOT NULL,
  `sd_name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subdist`
--

INSERT INTO `subdist` (`sd_id`, `dt_id`, `sd_name`, `status`) VALUES
(1, 1, 'Thiruvananthapuram', 1),
(2, 1, 'Chirayinkeezhu', 1),
(3, 1, 'Neyyattinkara', 1),
(4, 1, 'Nedumangadu', 1),
(5, 1, 'Varkala', 1),
(6, 1, 'Kattakada', 1),
(7, 5, 'Kottayam', 1),
(8, 5, 'Meenachil', 1),
(9, 5, 'Changanassery', 1),
(10, 5, 'Vaikom', 1),
(11, 5, 'Kanjirapally', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_id` int(5) NOT NULL,
  `PhoneNo` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`U_id`, `PhoneNo`, `email`, `password`, `user_type`, `status`) VALUES
(5, '9947900268', 'admin@gmail.com', 'Asd@12', 'Admin', 1),
(6, '8136815972', 'bloodbank@gmail.com', 'Asdf@12', 'Bank', 1),
(7, '9645791741', 'hospital@gmail.com', 'Asdf@12', 'Hospital', 1),
(8, '8606573049', 'donar@gmail.com', 'Asdf@12', 'Donor', 1),
(9, '8787858585', 'rahulsi213@gmail.com', 'Asdf@12', 'Donor', 1),
(10, '8086945939', 'rahulshaj13@gmail.com', 'Asdf@12', 'Donor', 1),
(12, '8996945939', 'rahulshaSas@gmail.com', 'Asdf@12', 'Donor', 1),
(13, '9996945939', 'xzxulshaji213@gmail.com', 'Asdf@12', 'Donor', 1),
(14, '9999888877', 'medicalclg@gmail.com', 'Asdf@12', 'Hospital', 1),
(15, '8888555599', 'medicity@gmail.com', 'Asdf@12', 'Bank', 1),
(16, '9689586958', 'vinnivm884@live.com', 'Asdf@12', 'Donor', 1),
(24, '6789585555', 'medicaltrust@gmail.com', 'Asdf@12', 'Bank', 1),
(25, '6789584755', 'medicaltrusthstl@gmail.com', 'Asdf@12', 'Hospital', 1),
(26, '8888888866', 'hariuyu@gmail.com', 'Asdf@12', 'Donor', 1),
(27, '7755668844', 'kterder@gmail.com', 'Asdf@12', 'Bank', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `U_id` (`U_id`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`bb_id`),
  ADD KEY `U_id` (`U_id`),
  ADD KEY `sd_id` (`sd_id`);

--
-- Indexes for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  ADD PRIMARY KEY (`Bg_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`dt_id`),
  ADD UNIQUE KEY `dt_name` (`dt_name`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`R_id`),
  ADD KEY `U_id` (`U_id`),
  ADD KEY `subdist` (`subdist`);

--
-- Indexes for table `dp`
--
ALTER TABLE `dp`
  ADD PRIMARY KEY (`dp_id`),
  ADD KEY `U_id` (`U_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`h_id`),
  ADD KEY `u_id` (`U_id`),
  ADD KEY `sd_id` (`sd_id`);

--
-- Indexes for table `subdist`
--
ALTER TABLE `subdist`
  ADD PRIMARY KEY (`sd_id`),
  ADD UNIQUE KEY `sd_name` (`sd_name`),
  ADD KEY `dt_id` (`dt_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_id`),
  ADD UNIQUE KEY `PhoneNo` (`PhoneNo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `bb_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bloodgroup`
--
ALTER TABLE `bloodgroup`
  MODIFY `Bg_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `dt_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `R_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dp`
--
ALTER TABLE `dp`
  MODIFY `dp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `h_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subdist`
--
ALTER TABLE `subdist`
  MODIFY `sd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD CONSTRAINT `bloodbank_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `user` (`U_id`),
  ADD CONSTRAINT `bloodbank_ibfk_2` FOREIGN KEY (`sd_id`) REFERENCES `subdist` (`sd_id`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `user` (`U_id`),
  ADD CONSTRAINT `donor_ibfk_2` FOREIGN KEY (`subdist`) REFERENCES `subdist` (`sd_name`);

--
-- Constraints for table `dp`
--
ALTER TABLE `dp`
  ADD CONSTRAINT `dp_ibfk_1` FOREIGN KEY (`U_id`) REFERENCES `user` (`U_id`);

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_2` FOREIGN KEY (`U_id`) REFERENCES `user` (`U_id`),
  ADD CONSTRAINT `hospital_ibfk_3` FOREIGN KEY (`sd_id`) REFERENCES `subdist` (`sd_id`);

--
-- Constraints for table `subdist`
--
ALTER TABLE `subdist`
  ADD CONSTRAINT `subdist_ibfk_1` FOREIGN KEY (`dt_id`) REFERENCES `district` (`dt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
