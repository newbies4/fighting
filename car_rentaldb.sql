-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 03:12 PM
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
  `car_owner` varchar(255) DEFAULT NULL,
  `car_model` varchar(255) DEFAULT NULL,
  `car_brand` varchar(255) DEFAULT NULL,
  `car_type` varchar(255) DEFAULT NULL,
  `car_seats` varchar(255) DEFAULT NULL,
  `car_color` varchar(255) DEFAULT NULL,
  `car_platenumber` varchar(255) DEFAULT NULL,
  `car_price` varchar(255) DEFAULT NULL,
  `car_fuel_capacity` varchar(255) DEFAULT NULL,
  `car_gas_type` varchar(255) DEFAULT NULL,
  `car_driver` varchar(255) DEFAULT NULL,
  `car_transmission` varchar(255) DEFAULT NULL,
  `car_insurance` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_car_profile`
--

INSERT INTO `tbl_car_profile` (`car_id`, `car_owner`, `car_model`, `car_brand`, `car_type`, `car_seats`, `car_color`, `car_platenumber`, `car_price`, `car_fuel_capacity`, `car_gas_type`, `car_driver`, `car_transmission`, `car_insurance`, `created_at`) VALUES
(1, 'Loremipsum', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 21:52:00'),
(2, 'Loremipsum', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 21:53:37'),
(3, 'Loremipsum', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 21:54:06'),
(4, 'Loremipsum', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 21:54:28'),
(5, 'Loremipsumaw', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 21:54:46'),
(6, 'Loremipsumddddd', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 22:03:13'),
(7, 'Loremipsumddddd', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 22:04:28'),
(8, 'Loremipsumddddd', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 22:08:16'),
(9, 'Loremipsum', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 22:10:25'),
(10, 'Loremipsum', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 22:13:40'),
(11, 'Loremipsum', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 22:14:06'),
(12, 'Loremipsum', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 22:14:46'),
(13, 'Loremipsumlllll', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-05 22:15:14'),
(14, 'Loremipsum', 'Loremipsum', 'Loremipsum', 'Loremipsum', '4', 'Loremipsum', 'Loremipsum', '1', 'Loremipsum', 'Diesel', 'With Driver', 'manual', 'ctp', '2019-11-07 02:44:15');

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
(17, 'jumong', 'Test', 'Test', '44444444444', '2019-10-13 09:05:09'),
(18, 'jumong', 'asdfad', 'adsf', '0123123213', '2019-10-15 09:08:29'),
(19, 'aaaaaaaaaa', 'bbbbbbbbb', 'bbbbbbbbb', '123123213', '2019-10-26 06:14:55'),
(23, 'asdfsadf', '123123', 'jadfjhasfj', '1231242183', '2019-10-26 10:38:10'),
(24, 'hfdhgh', 'dfhfd', 'ghfdhdfh', '2313123123', '2019-10-26 10:38:22'),
(25, 'asdasdasdfasf', 'sdafasf', 'asdfsdf', '123123123', '2019-10-26 10:38:47'),
(26, 'dsfgdsgdsg', 'dsfgfdgfsfdg', 'dfsgdfsgsdfg', '234234234', '2019-10-26 10:38:52'),
(27, 'fshdfgdfgsd', 'dsfgsdgdfg', 'dsfgdgsdfg', '12312312312213', '2019-10-26 10:38:58'),
(28, 'asdfasdf', 'asdfsadfd', 'fdsafasf', '575757788', '2019-10-26 12:05:45'),
(29, 'asdasd', 'asdasd', 'asdasd', '123123123213', '2019-10-27 14:21:57'),
(30, 'ppppppppppppppppp', 'ppppppppppppppppppp', 'pppppppppppppppppp', '1111111111111', '2019-10-27 14:22:26');

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
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `tbl_car_rent`
--
ALTER TABLE `tbl_car_rent`
  ADD PRIMARY KEY (`car_rent_id`);

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
  ADD PRIMARY KEY (`reserve_id`);

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
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `tbl_customer_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `tbl_useraccount` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
