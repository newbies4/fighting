-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 01:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

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
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `first_name`, `middle_name`, `last_name`, `contact`, `created_at`) VALUES
(2, 'Arczhar', 'Jhet', 'Mummuh', '09051234123', '2019-10-12 14:08:02'),
(3, 'Mig', 'Bryan', 'Tan', '09090989123', '2019-10-12 14:21:13'),
(4, 'Haidir', 'Yoy', 'Hassan', '09051241123', '2019-10-12 14:21:13'),
(7, 'Euginie', 'Bant', 'Tubo', '09124153423', '2019-10-12 14:23:10'),
(8, 'Khabeer', 'Hadjibain', 'Sadidul', '09125177132', '2019-10-12 14:23:49'),
(9, 'firs_tname', 'middle_name', 'last_name', 'contactnumber', '2019-10-13 06:32:43'),
(10, 'Simba', 'Nala', 'Mufasa', '09042341009', '2019-10-13 06:36:24'),
(11, 'Bulati', 'Juan', 'Dela', '09120110123', '2019-10-13 06:38:40'),
(12, 'Test', 'Test', 'Test', '11111111111', '2019-10-13 07:18:22'),
(13, 'Test', 'Test', 'Test', '11111111111', '2019-10-13 07:20:17'),
(14, 'Test', 'Test', 'Test', '11111111111', '2019-10-13 07:20:39'),
(15, 'Test', 'Test', 'Test', '22222222222', '2019-10-13 07:20:50'),
(16, 'Test', 'Test', 'Test', '33333333333', '2019-10-13 07:21:36'),
(17, 'Test', 'Test', 'Test', '44444444444', '2019-10-13 09:05:09'),
(18, 'jumong', 'asdfad', 'adsf', '0123123213', '2019-10-15 09:08:29');

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
-- Dumping data for table `tbl_useraccount`
--

INSERT INTO `tbl_useraccount` (`user_id`, `user_type`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'password');

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
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
