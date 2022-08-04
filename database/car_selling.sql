-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2022 at 07:15 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_selling`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(12) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_TEL` tinytext,
  `user_address` longtext,
  `user_city` varchar(50) DEFAULT NULL,
  `user_status` int(11) DEFAULT '1',
  `user_type` varchar(10) DEFAULT NULL,
  `photo` varchar(50) DEFAULT 'avatar.png',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `u_name`, `user_password`, `user_TEL`, `user_address`, `user_city`, `user_status`, `user_type`, `photo`) VALUES
(1, '', 'achrist@emailExample.com', 'Agatha  Christie', '8ce7d5bb85d1bfdf219ac9392df12463', '+94-765-558-4', '429 Prince of Wales Avenue, 14', 'Nawala', 1, NULL, '60.jpg'),
(2, 'cdickens', 'cdickens@emailExample.com', 'Charles Dickens', 'b671a7267bfb85400af23ffa2b6d4b8c', '+94-705-554-6', '148, MALIGAWA ROAD', '	Gampaha', 1, NULL, '0.jpg'),
(3, 'cdoyle', 'cdoyle@emailExample.com', 'Conan Doyle', '680209f2123774279bbb6f26e69e303e', '+94-715-559-3', '408 2/2, Maradana Road', '	Kandy', 1, NULL, '15.jpg'),
(4, 'EHEMING', 'EHEMING@emailExample.com', 'Ernest Hemingway', 'a7a8855c384008e78f26b07c9612b47b', '+94-775-552-8', '153 Galle Road, 06', '	Ampara', 1, NULL, '1.jpg'),
(5, 'fkafka', 'fkafka@emailExample.com', 'Franz Kafka', '5d7aa982c918b6171408aec26337bb84', '+94-725-556-4', ' 160 Main Street, 11', '	Vavuniya', 1, NULL, '0.jpg'),
(6, 'istone', 'istone@emailExample.com', 'Irving Stone', '463377806128dfd88a583d10cdf15cb9', '+94-705-556-0', '394 Grandpass Road, 14', '	Galle', 1, NULL, '8.jpg'),
(7, 'jausten', 'jausten@emailExample.com', 'Jane Austen', 'd4f09faf99d7f1f5380d3816ef0c197e', '+94-765-558-0', '8690 Heaney Junction*Uva Province,', 'Batticaloa', 1, NULL, '20.jpg'),
(8, 'jcooper', 'jcooper@emailExample.com', 'James Cooper', '4697d4cbed0de42298864312dc114b50', '+94-755-553-8', '85, Akkuranai Road', 'Jaffna', 1, NULL, '14.jpg'),
(9, 'jlondon', 'jlondon@emailExample.com', 'Jack London', '55a894f6b119b7d001ec228e7388cf3f', '+94-715-555-1', '145, Paddy Area to foot path', '	Gampaha', 1, NULL, '26.jpg'),
(10, 'jstein', 'jstein@emailExample.com', 'John Steinbeck', 'b13e2ca53d9d0777a7d97f679ca4de96', '+94-705-554-1', '8577 Declan Shoals*', '	Colombo', 1, NULL, '30.jpg'),
(11, 'JVerne', 'JVerne@emailExample.com', 'Jules Verne', '846bc9a6c13ddb8cc94b98ebd7a07495', '+94-725-559-2', '4056 Jamel Station*', '	Matale', 1, NULL, '19.jpg'),
(12, 'ltolstoy', 'ltolsoy@emailExample.com', 'Leo Tolstoy', '530a525e4bd754faab08ee34d355cba5', '+94-705-550-2', '91849 Paucek Extensions*', '	Ratnapura', 1, NULL, '26.jpg'),
(13, 'mmitch', 'mmitch@emailExample.com', 'Margaret Mitchell', '2e74b1ba3a3ccf822f626aa820bddec0', '+94-705-551-4', '36299 Will Hills*', 'Moratuwa', 1, NULL, '45.jpg'),
(14, 'mtwain', 'mtwain@emailExample.com', 'Mark Twain', '71f4cc333a7da8c5848a723ed1f8c91a', '+94-755-558-5', '93415 Bart Turnpike', 'Negombo', 1, NULL, '39.jpg'),
(15, 'rsteven', 'rsteven@emailExample.com', 'Robert Stevenson', 'c908f63038065ff0494d07d68427141e', '+94-775-557-7', '2308 Justus Unions,North Central Province, Mihintale, Illuppukanniya', 'Matara', 1, NULL, '41.jpg'),
(16, 'sfitzger', 'sfitzger@emailExample.com', 'Scott Fitzgerald', 'b40e88670ca5b908025ee6169e5fb31d', '+94-775-550-1', '67, Ranna - Rekawa Road', 'Badulla', 1, NULL, '44.jpg'),
(17, 'szweig', 'szweig@emailExample.com', 'Stefan Zweig', '8889a0b3854c91a28efad62fbed2056a', '+94-775-550-9', '106, Udadumbara-Kalugala Road', 'Mannar', 1, NULL, '63.jpg'),
(18, 'VHUGO', 'VHUGO@emailExample.com', 'Victor Hugo', 'ec33ccdac068453d82dee1c4f52f494f', '+94-705-558-1', '96341 Greenfelder Ports*', 'Kurunegala', 1, NULL, '65.jpg'),
(19, 'wfaulk', 'wfaulk@emailExample.com', 'William Faulkner', '11c0221b19f5080517814d7e5db94808', '+94-755-550-4', '729 Rowe Valleys*', 'Colombo', 1, NULL, '46.jpg'),
(20, 'wshake', 'wshake@emailExample.com', 'William Shakespeare', '120a4a9babd16bf5f6ad4d7a97c99ac9', '+94-725-553-5', '9474 Hayes Curve*', 'Galle', 1, NULL, '78.jpg'),
(21, 'eran', 'hweranmadhuka@gmail.com', 'Eran Madhuka', 'dabfd0a6e317acd545dd2033fba69102', '94769643114', 'No-94, Willorawatta, Moratuwa,', 'Colombo', 1, NULL, 'eran-madhuka-813.jpeg'),
(22, 'admin', 'admin@admin.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '123', NULL, NULL, 1, 'admin', 'avatar.png');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `condition` varchar(50) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `vehicle_model` varchar(50) DEFAULT NULL,
  `year_manufactured` int(4) DEFAULT NULL,
  `transmission` varchar(50) DEFAULT NULL,
  `fuel_type` varchar(50) DEFAULT NULL,
  `engine_capacity` varchar(50) DEFAULT NULL,
  `mileage` varchar(50) DEFAULT NULL,
  `description` longtext,
  `price` varchar(50) DEFAULT NULL,
  `negotiable` varchar(50) DEFAULT NULL,
  `v_imege_1` varchar(255) DEFAULT NULL,
  `v_imege_2` varchar(255) DEFAULT NULL,
  `v_imege_3` varchar(255) DEFAULT NULL,
  `v_status` varchar(255) DEFAULT '1',
  `entry_on` date DEFAULT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `user_id`, `type`, `condition`, `brand`, `vehicle_model`, `year_manufactured`, `transmission`, `fuel_type`, `engine_capacity`, `mileage`, `description`, `price`, `negotiable`, `v_imege_1`, `v_imege_2`, `v_imege_3`, `v_status`, `entry_on`) VALUES
(1, 2, 'Sell', 'Used', 'Honda', 'Fit GP5 ', 2014, 'Automatic', 'Petrol', '1500', '79000', '2014 Manufactured ,2015 Registered, CAD-xxxx \n\nSilver colour\n\nEngine capacity:\n\n1,500 cc', '6920000', '', 'fitted.jpg', 'fitted (1).jpg', 'fitted (2).jpg', '1', '2022-08-03'),
(2, 2, 'Sell', 'Used', 'Suzuki', 'Wagon R FX', 2017, 'Automatic', 'Petrol', '650', '39000', 'First owner \r\n\r\nPrivate use (Not used for hires)\r\n\r\nMaintained and serviced at Carepoint\r\n\r\nReason for sale -  upgrade\r\n\r\nBrand new front tires replaced in March 2022\r\n\r\nBrand new normal battery replaced in May 2022 (Warranty available)', '5200000', 'Negotiable', 'download (1).jpg', '2017-Suzuki-Wagon-R-dashboard.jpg', 'download (2).jpg', '1', '2022-08-03'),
(3, 1, 'Sell', 'Used', 'Toyota', 'Corolla ', 2005, 'Automatic', 'Petrol', '1490', '185000', '2005 TOYOTA COROLLA 121 G Grade Auto ( Dicky Light)\r\n\r\nYear of manufacture 2005\r\n\r\nYear of registration 2009\r\n\r\n1490cc\r\n\r\nKH-Ã—Ã—Ã—1\r\n\r\nBlue Colour ', '5690000', 'Negotiable', 'download.jpg', 'images (1).jpg', 'images.jpg', '1', '2022-08-03'),
(4, 21, 'Rent', 'Used', 'Mercedes-Benz', 'CLA 200 AMG Premium Plus', 2019, 'Automatic', 'Petrol', '1300', '10000', 'MAKE: Mercedes Benz\n\nMODEL: CLA 200 AMG Premium Plus\n\nYEAR OF MANUFACTURE: 2019\n\nYEAR OF REGISTRATION: 2019\n\nTRANSMISSION: Automatic \n\nSEATING CAPACITY: 5 ', '10000', '', 'fitted (3).jpg', 'fitted (4).jpg', 'fitted (5).jpg', '1', '2022-08-03'),
(5, 21, 'Sell', 'Used', 'Land-Rover', 'Discovery ', 2010, 'Automatic', 'Diesel', '3000', '95000', 'MAKE: Land Rover\r\n\r\nMODEL: Discovery 4\r\n\r\nYEAR OF MANUFACTURE: 2010\r\n\r\nYEAR OF REGISTRATION: 2013\r\n\r\nTRANSMISSION: Automatic\r\n\r\nSEATING CAPACITY: 7', '24000000', 'Negotiable', 'fitted (6).jpg', 'fitted (7).jpg', 'fitted (8).jpg', '1', '2022-08-03'),
(6, 4, 'Rent', 'Used', 'Land-Rover', 'Defender ', 1976, 'Manual', 'Diesel', '2500', '140000', 'MAKE: Land Rover\n\nMODEL: Defender\n\nYEAR OF MANUFACTURE: 1976\n\nYEAR OF REGISTRATION: 1985\n\nTRANSMISSION: Manual\n\nSEATING CAPACITY: 7', '40000', 'Negotiable', 'fitted (9).jpg', 'fitted (10).jpg', 'fitted (11).jpg', '1', '2022-08-03'),
(7, 4, 'Sell', 'Used', 'Toyota', 'Prius X grade', 2013, 'Automatic', 'Hybrid', '1800', '90000', 'CAO****\r\n\r\nHybride battery 100%\r\n\r\nAuto full options', '7850000', 'Negotiable', 'fitted (12).jpg', 'fitted (13).jpg', 'fitted (13).jpg', '1', '2022-08-03'),
(8, 4, 'Sell', 'Used', 'Toyota', 'Hilux 3L Thailand', 2007, 'Automatic', 'Diesel', '3000', '130000', 'PE****\r\n\r\nBage interior \r\n\r\n4 wheel\r\n\r\nDVD\r\n\r\nR-camera \r\n\r\nRunning 100%', '10750000', 'Negotiable', 'fitted (15).jpg', 'fitted (17).jpg', 'fitted (16).jpg', '1', '2022-08-03'),
(9, 2, 'Sell', 'Used', 'Hyundai', 'Accent ', 2001, 'Automatic', 'Petrol', '1500', '176400', 'Good Condition \r\n\r\nAlloy wheel\r\n\r\nPower shutter\r\n\r\nleasing gewagena yamata', '2550000', 'Negotiable', 'fitted (18).jpg', 'fitted (19).jpg', 'fitted (20).jpg', '1', '2022-08-03'),
(10, 5, 'Sell', 'New', 'DFSK', 'Glory 580', 2022, 'Automatic', 'Petrol', '1500', '0', 'A limited chance to get your hands on a BRAND NEW Glory 580 SUV!\r\n\r\n-1.5L Turbocharged engine\r\n\r\n-Electric power steering\r\n\r\n-17\" Sporty two-tone alloy wheels\r\n\r\n-7 Leather seats\r\n\r\n-Keyless entry + Push start button', '10499999', 'Negotiable', 'fitted (21).jpg', 'fitted (22).jpg', 'fitted (23).jpg', '1', '2022-08-03'),
(11, 5, 'Rent', 'Used', 'DFSK', 'Glory ', 2021, 'Manual', 'Petrol', '1500', '11000', '7seater,first owner', '1497', 'Negotiable', 'fitted (25).jpg', 'fitted (24).jpg', 'fitted (26).jpg', '1', '2022-08-03'),
(12, 6, 'Sell', 'Used', 'Honda', 'Civic ', 2018, 'Automatic', 'Petrol', '1000', '29000', 'Honda Civic Ex 2018\r\n\r\nFirst Owner \r\n\r\nMileage 29000 Km\r\n\r\nRed Exterior \r\n\r\nBlack Leather Interior \r\n\r\nSliding Sunroof', '12500000', 'Negotiable', 'fitted (27).jpg', 'fitted (28).jpg', 'fitted (29).jpg', '1', '2022-08-03'),
(13, 6, 'Sell', 'Used', 'Audi', 'A4', 2011, 'Automatic', 'Diesel', '1800', '140000', 'Audi A4 Brand New Imported, Petrol 1800cc Turbo, Year 2011, Exterior Blue, Black leather interior, Leather electric seats, Multi function steering, Headlamp washer Daytime running light, Excellent Condition. Sale or Exchange', '9950000', 'Negotiable', 'fitted (30).jpg', 'fitted (31).jpg', 'fitted (29).jpg', '1', '2022-08-03'),
(14, 7, 'Sell', 'New', 'BMW', 'X1 S Drive', 2011, 'Automatic', 'Diesel', '2000', '117000', 'BMW X1 S Drive, 2.0L Diesel Turbo, 2nd owner, Company Brand New Imported, Maintain by Prestige and Avant Garde, YOM 2012, KQ-XXXX, Markesha Brown, Beige Leather Interior, Full option, Original BMW Alloy wheels and Hood Railings,  Accident free, Excellent Condition, Trade in will be considered.', '9900000', 'Negotiable', 'fitted (33).jpg', 'fitted (34).jpg', 'fitted (35).jpg', '1', '2022-08-03'),
(15, 7, 'Sell', 'Used', 'Honda', 'Vezel RS', 2017, 'Automatic', 'Petrol', '1500', '61000', 'Honda vezel RS model\r\n\r\n1st owner\r\n\r\nCompany maintain (sterling)\r\n\r\nFull option\r\n\r\nAndroid car setups\r\n\r\nGood conditions', '10499996', 'Negotiable', 'fitted (36).jpg', 'fitted (37).jpg', 'fitted (38).jpg', '1', '2022-08-03'),
(16, 15, 'Sell', 'Used', 'Toyota', 'Roomy GT', 2017, 'Automatic', 'Petrol', '990', '82000', 'TOYOTA ROOMY GT TURBO 2017\r\n\r\nREGISTERED 2018\r\n\r\n1st OWNER \r\n\r\nGENUINE MILEAGE 82,000KM\r\n\r\nSERVICE RECORDS AVAILABLE \r\n\r\nLANE ASSIST ', '8490000', 'Negotiable', 'fitted (39).jpg', 'fitted (40).jpg', 'fitted (41).jpg', '1', '2022-08-04'),
(17, 15, 'Sell', 'Used', 'Porsche', '718 Cayman COMPANY IMPORT', 2017, 'Automatic', 'Petrol', '2000', '15000', 'PORSCHE CAYMAN 718 â€“ FULLY COMPANY MAINTAINED CAR WITH VERY LOW MILEAGE\r\n\r\nManufactured in 2016 and Registered in 2017\r\n\r\nCAT - XXXX\r\n\r\nMileage â€“ 15,000 km (Very Low Mileage)\r\n\r\n', '45000000', 'Negotiable', 'fitted (42).jpg', 'fitted (43).jpg', 'fitted (44).jpg', '1', '2022-08-04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
