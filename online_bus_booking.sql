-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 11:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_bus_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses1`
--

CREATE TABLE `buses1` (
  `id` int(10) NOT NULL,
  `busID` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `departureTime` time(6) NOT NULL,
  `startFrom` varchar(20) NOT NULL,
  `termination` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `fare` varchar(15) NOT NULL,
  `busPhoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses1`
--

INSERT INTO `buses1` (`id`, `busID`, `category`, `company`, `departureTime`, `startFrom`, `termination`, `date`, `fare`, `busPhoto`) VALUES
(40, 'T124DVT', 'Luxury', 'Shelukindo', '06:00:00.000000', 'dar es salaam', 'Rukwa', '2021-02-24', '20,000TSHS', '1613983227-67.jpg'),
(1, 'T204CXS', 'luxury', 'soft coach', '17:48:00.000000', 'musoma', 'dodoma', '2021-02-24', '30,000TSHS', '1613573327-3.jpg'),
(18, 'T233AAA', 'Luxury', 'mashaallah', '06:33:00.000000', 'ruvuma', 'singida', '2021-02-24', '50,000TSHS', '1613765090-0.jpg'),
(2, 'T234CXD', 'semi-luxury', 'soft coach', '11:54:00.000000', 'mbeya', 'dar es salaam', '2021-02-24', '30,000TSHS', '1613552083-2.jpg'),
(3, 'T234CXS', 'luxury', 'shabiby', '11:52:00.000000', 'mbeya', 'dar es salaam', '2021-02-24', '40,000TSHS', '1613551956-4.jpg'),
(35, 'T345DZZ', 'Luxury', 'Shabiby', '06:00:00.000000', 'dar es salaam', 'dodoma', '2021-02-24', '30,000TSHS', '1613982322-shabiby.jpg'),
(50, 'T396AQZ', 'Luxury', 'Dar Lux', '06:22:00.000000', 'dar es salaam', 'mwanza', '2021-02-24', '40,000TSHS', '1613985774-39.jpg'),
(55, 'T405DXP', 'Luxury', 'Abood', '06:45:00.000000', 'mwanza', 'Dar es salaam', '2021-02-24', '50,000TSHS', '1613987164-56.jpg'),
(52, 'T407BZO', 'Luxury', 'First Choice', '17:29:00.000000', 'Dodoma', 'Dar es salaam', '2021-02-24', '30,000TSHS', '1613985915-48.jpg'),
(10, 'T421BBS', 'luxury', 'shabiby', '16:43:00.000000', 'mbeya', 'dar es salaam', '2021-02-24', '40,000TSHS', '1613655834-2.jpg'),
(4, 'T425WCS', 'luxury', 'lushanga', '11:56:00.000000', 'mbeya', 'dar es salaam', '2021-02-24', '40,000TSHS', '1613552187-3.jpg'),
(32, 'T456CZY', 'Luxury', 'Kapricon', '06:00:00.000000', 'dar es salaam', 'arusha', '2021-02-24', '40,000TSHS', '1613981933-6.jpg'),
(33, 'T456DFR', 'Luxury', 'Kilimanjaro Express', '06:00:00.000000', 'dar es salaam', 'kilimanjaro', '2021-02-24', '40,000TSHS', '1613982022-34.jpg'),
(34, 'T534DFG', 'Luxury', 'Manyara Coach', '06:00:00.000000', 'dar es salaam', 'manyara', '2021-02-24', '20,000TSHS', '1613982105-7.jpg'),
(43, 'T543BZQ', 'Luxury', 'Lovato', '06:00:00.000000', 'dar es salaam', 'mtwara', '2021-02-24', '30,000TSHS', '1613983674-42.jpg'),
(47, 'T543DBI', 'Luxury', 'Scania', '06:00:00.000000', 'dar es salaam', 'kilimanjaro', '2021-02-24', '30,000TSHS', '1613985100-34.jpg'),
(26, 'T546DQY', 'Luxury', 'Frester', '06:00:00.000000', 'dar es salaam', 'kagera', '2021-02-24', '50,000TSHS', '1613981020-61.jpg'),
(37, 'T562', 'Luxury', 'Mtei Express', '06:00:00.000000', 'dar es salaam', 'singida', '2021-02-24', '20,000TSHS', '1613982484-40.jpg'),
(25, 'T564DRT', 'Luxury', 'Shabiby', '11:00:00.000000', 'dar es salaam', 'dodoma', '2021-02-24', '30,000TSHS', '1613980686-64.jpg'),
(24, 'T567DRE', 'Luxury', 'Shabiby', '11:00:00.000000', 'dar es salaam', 'dodoma', '2021-02-24', '30,000TSHS', '1613980616-shabiby.jpg'),
(8, 'T568CXU', 'semi-luxury', 'safari express', '06:19:00.000000', 'mbeya', 'dar es salaam', '2021-02-24', '40,000TSHS', '1613600371-0.jpg'),
(9, 'T604VNZ', 'luxury', 'dar luxy', '06:30:00.000000', 'mbeya', 'dar es salaam', '2021-02-24', '40,000TSHS', '1613600475-1.jpg'),
(48, 'T609DJR', 'Luxury', 'Kibo Safari', '06:00:00.000000', 'dar es salaam', 'arusha', '2021-02-24', '40,000TSHS', '1613985271-35.jpg'),
(41, 'T632BTR', 'Luxury', 'Far_Large', '06:00:00.000000', 'dar es salaam', 'morogoro', '2021-02-24', '20,000TSHS', '1613983330-68.jpg'),
(42, 'T639AZZ', 'Luxury', 'Department', '06:00:00.000000', 'dar es salaam', 'iringa', '2021-02-24', '20,000TSHS', '1613983427-23.jpg'),
(38, 'T653BGU', 'Luxury', 'Senkondo', '06:00:00.000000', 'dar es salaam', 'tabora', '2021-02-24', '40,000TSHS', '1613982633-31.jpg'),
(31, 'T654CRH', 'Luxury', 'Herdt', '06:00:00.000000', 'dar es salaam', 'kigoma', '2021-03-01', '50,000TSHS', '1613981623-2.jpg'),
(30, 'T654CRT', 'Luxury', 'All Saedy', '06:30:00.000000', 'dar es salaam', 'geita', '2021-02-28', '40,000TSHS', '1613981438-3.jpg'),
(39, 'T657DSE', 'Luxury', 'ABC', '06:00:00.000000', 'dar es salaam', 'dodoma', '2021-02-24', '30,000TSHS', '1613982714-27.jpg'),
(49, 'T673BGY', 'Luxury', 'Isamilo', '06:30:00.000000', 'dar es salaam', 'mwanza', '2021-02-24', '40,000TSHS', '1613985685-36.jpg'),
(22, 'T674VBE', 'Luxury', 'soft coach', '06:30:00.000000', 'kilimanjaro', 'mwanza', '2021-02-16', '40,000TSHS', '1613765815-1.jpg'),
(5, 'T674VBF', 'luxury', 'mashaallah', '11:57:00.000000', 'mbeya', 'dar es salaam', '2021-02-17', '30,000TSHS', '1613552268-1.jpg'),
(36, 'T678DCX', 'Luxury', 'Tashrif', '06:00:00.000000', 'dar es salaam', 'tanga', '2021-02-24', '30,000TSHS', '1613982394-62.jpg'),
(53, 'T713DPK', 'Luxury', 'New Force', '12:30:00.000000', 'kilimanjaro', 'Dar es salaam', '2021-02-24', '40,000TSHS', '1613985989-50.jpg'),
(46, 'T738DBA', 'Luxury', 'Tahmeed', '06:00:00.000000', 'mwanza', 'Dar es salaam', '2021-02-24', '30,000TSHS', '1613984977-33.jpg'),
(44, 'T742DCA', 'Luxury', 'Rungwe Express', '06:00:00.000000', 'dar es salaam', 'mbeya', '2021-02-24', '20,000TSHS', '1613984757-29.jpg'),
(29, 'T786BGE', 'Luxury', 'Mtoto Gema', '05:30:00.000000', 'dar es salaam', 'shinyanga', '2021-02-28', '40,000TSHS', '1613981321-4.jpg'),
(27, 'T789ASC', 'Luxury', 'Malaika', '07:30:00.000000', 'dar es salaam', 'mara', '2021-02-26', '60,000TSHS', '1613981128-1.jpg'),
(54, 'T790AXX', 'Luxury', 'Kidia One', '09:30:00.000000', 'kilimanjaro', 'Dar es salaam', '2021-02-24', '30,000TSHS', '1613986118-54.jpg'),
(51, 'T861BYZ', 'Luxury', 'Adventure', '06:00:00.000000', 'Dodoma', 'Dar es salaam', '2021-02-24', '30,000TSHS', '1613985855-46.jpg'),
(45, 'T983AZY', 'Luxury', 'Simba Mtoto', '06:00:00.000000', 'dar es salaam', 'mbeya', '2021-02-24', '20,000TSHS', '1613984861-31.jpg'),
(28, 'T987CRX', 'Luxury', 'Clouds', '06:00:00.000000', 'dar es salaam', 'mwanza', '2021-02-27', '40,000TSHS', '1613981192-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `company_personel`
--

CREATE TABLE `company_personel` (
  `userID` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `company` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_personel`
--

INSERT INTO `company_personel` (`userID`, `name`, `company`, `username`, `password`) VALUES
(1, 'Masali Emanuel', 'Lushanga', 'masaliemanuel', '12345678'),
(2, 'Suluwale Godlisten', 'Shabiby', 'suluwalegodlisten', '12345678'),
(3, 'Azim Kajubu', 'Dar lux express', 'kajubuazim', '12345678'),
(4, 'Mashely', 'Dar lux express', 'mashely', '12345678'),
(5, 'Simon', 'Simon Safari Express', 'simonbrian', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(10) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `travelFrom` varchar(20) NOT NULL,
  `travelTo` varchar(20) NOT NULL,
  `travelDate` date NOT NULL,
  `contacts` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `seat`, `name`, `travelFrom`, `travelTo`, `travelDate`, `contacts`) VALUES
(81, 'A1', 'samson', 'dar es salaam', 'mbeya', '2021-02-17', 768674881),
(83, 'A2', 'mashelly', 'morogoro', 'iringa', '2021-02-18', 786543214),
(84, 'A2', 'mashelly', 'morogoro', 'iringa', '2021-02-18', 786543214),
(85, 'B3', 'kajubuazim', 'tanga', 'kilimanjaro', '2021-02-18', 786543893),
(86, 'B1', 'suluwalegodlisten', 'dar es salaam', 'mbeya', '2021-02-19', 712345298),
(87, 'B2', 'simon', 'morogoro', 'arusha', '2021-02-18', 764535223),
(88, 'A4', 'masaliemanuel', 'arusha', 'morogoro', '2021-02-20', 768674881),
(89, 'C1', 'rahmaabdullah', 'iringa', 'tanga', '2021-02-18', 786543090),
(90, 'C2', 'dogojanja', 'arusha', 'dar es salaam', '2021-02-20', 695478992),
(91, 'D1', 'mathayosimon', 'kilimanjaro', 'morogoro', '2021-02-23', 763552522),
(92, 'D2', 'godlisten', 'dar es salaam', 'morogoro', '2021-03-20', 620274372),
(93, 'A2', 'boaz', 'mbeya', 'dar es salaam', '2021-02-16', 737828959),
(94, 'E3', 'moses', 'tanga', 'dar es salaam', '2021-02-24', 696352780),
(95, 'F2', 'masawe', 'mbeya', 'dar es salaam', '2021-02-16', 686354243),
(97, 'E4', 'Yohana', 'kilimanjaro', 'manyara', '2021-02-24', 785242356);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `customerID` int(10) NOT NULL,
  `paymentapproval` varchar(30) NOT NULL,
  `journeydate` varchar(20) NOT NULL,
  `reservedticket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticketID` int(10) NOT NULL,
  `customerID` int(10) NOT NULL,
  `ticketno` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `journeydate` varchar(20) NOT NULL,
  `datebooked` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses1`
--
ALTER TABLE `buses1`
  ADD PRIMARY KEY (`busID`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `company_personel`
--
ALTER TABLE `company_personel`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticketID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses1`
--
ALTER TABLE `buses1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `company_personel`
--
ALTER TABLE `company_personel`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `customerID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticketID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
