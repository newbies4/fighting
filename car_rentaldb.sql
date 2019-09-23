-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 07:55 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rentaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_profile`
--

CREATE TABLE `tbl_car_profile` (
  `car_id` int(11) NOT NULL,
  `Lease` varchar(255) DEFAULT NULL,
  `car_owner` varchar(255) DEFAULT NULL,
  `car_Unit_name` varchar(255) DEFAULT NULL,
  `car_brand_name` varchar(255) DEFAULT NULL,
  `car_year_model` varchar(255) DEFAULT NULL,
  `car_seat` varchar(255) DEFAULT NULL,
  `car_body_type` varchar(255) DEFAULT NULL,
  `car_transmission` varchar(255) DEFAULT NULL,
  `car_fuel_type` varchar(255) DEFAULT NULL,
  `car_fuel_capacity` varchar(255) DEFAULT NULL,
  `car_color` varchar(255) DEFAULT NULL,
  `car_interior_picture` varchar(255) DEFAULT NULL,
  `car_exterior_picture_front` varchar(255) DEFAULT NULL,
  `car_exterior_picture_back` varchar(255) DEFAULT NULL,
  `car_exterior_picture_left` varchar(255) DEFAULT NULL,
  `car_exterior_picture_right` varchar(255) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `lease_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_car_rent`
--

CREATE TABLE `tbl_car_rent` (
  `car_rent_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `reserve_id` int(11) DEFAULT NULL,
  `rent_date` varchar(255) DEFAULT NULL,
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `cust_Fname` varchar(255) DEFAULT NULL,
  `cust_LName` varchar(255) DEFAULT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `birth_date` varchar(255) DEFAULT NULL,
  `license_no` varchar(255) DEFAULT NULL,
  `License_picture` varchar(255) DEFAULT NULL,
  `govid_no` varchar(255) DEFAULT NULL,
  `gov_picture` varchar(255) DEFAULT NULL,
  `user_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lease`
--

CREATE TABLE `tbl_lease` (
  `lease_id` int(11) NOT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `date_of_ownersship` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reserve`
--

CREATE TABLE `tbl_reserve` (
  `reserve_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `car_id` int(11) DEFAULT NULL,
  `reserve_date` varchar(255) DEFAULT NULL,
  `pick_up_date` varchar(255) DEFAULT NULL,
  `pick_up_time` varchar(255) DEFAULT NULL,
  `reserve_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useraccount`
--

CREATE TABLE `tbl_useraccount` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_car_profile`
--
ALTER TABLE `tbl_car_profile`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `lease_id` (`lease_id`);

--
-- Indexes for table `tbl_car_rent`
--
ALTER TABLE `tbl_car_rent`
  ADD PRIMARY KEY (`car_rent_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `reserve_id` (`reserve_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `user_id_fk` (`user_id_fk`);

--
-- Indexes for table `tbl_lease`
--
ALTER TABLE `tbl_lease`
  ADD PRIMARY KEY (`lease_id`);

--
-- Indexes for table `tbl_reserve`
--
ALTER TABLE `tbl_reserve`
  ADD PRIMARY KEY (`reserve_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `car_id` (`car_id`);

--
-- Indexes for table `tbl_useraccount`
--
ALTER TABLE `tbl_useraccount`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_car_profile`
--
ALTER TABLE `tbl_car_profile`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_car_rent`
--
ALTER TABLE `tbl_car_rent`
  MODIFY `car_rent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lease`
--
ALTER TABLE `tbl_lease`
  MODIFY `lease_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reserve`
--
ALTER TABLE `tbl_reserve`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_useraccount`
--
ALTER TABLE `tbl_useraccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_car_profile`
--
ALTER TABLE `tbl_car_profile`
  ADD CONSTRAINT `tbl_car_profile_ibfk_1` FOREIGN KEY (`lease_id`) REFERENCES `tbl_lease` (`lease_id`);

--
-- Constraints for table `tbl_car_rent`
--
ALTER TABLE `tbl_car_rent`
  ADD CONSTRAINT `tbl_car_rent_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`customer_id`),
  ADD CONSTRAINT `tbl_car_rent_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `tbl_car_profile` (`car_id`),
  ADD CONSTRAINT `tbl_car_rent_ibfk_3` FOREIGN KEY (`reserve_id`) REFERENCES `tbl_reserve` (`reserve_id`);

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `tbl_customer_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `tbl_useraccount` (`user_id`);

--
-- Constraints for table `tbl_reserve`
--
ALTER TABLE `tbl_reserve`
  ADD CONSTRAINT `tbl_reserve_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`customer_id`),
  ADD CONSTRAINT `tbl_reserve_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `tbl_car_profile` (`car_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
