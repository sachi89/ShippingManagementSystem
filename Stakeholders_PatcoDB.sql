-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2021 at 10:42 PM
-- Server version: 5.7.34
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calis1_patco_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountpayable`
--

CREATE TABLE `accountpayable` (
  `AccountPayableId` int(11) NOT NULL,
  `InvoiceId` int(10) NOT NULL,
  `InvoiceAmount` decimal(10,2) NOT NULL,
  `DueDate` date NOT NULL,
  `AmountPaid` decimal(10,2) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountpayable`
--

INSERT INTO `accountpayable` (`AccountPayableId`, `InvoiceId`, `InvoiceAmount`, `DueDate`, `AmountPaid`, `Status`) VALUES
(1, 12323, 475.63, '2021-06-01', 0.00, 'PENDING'),
(2, 17702, 2343.00, '2021-01-15', 5.00, 'PENDING'),
(3, 17703, 9553.00, '2021-08-15', 0.00, 'PENDING'),
(4, 17704, 23453.00, '2020-11-15', 23453.00, 'PAID'),
(5, 17705, 1234.00, '2021-03-15', 0.00, 'PENDING'),
(6, 17706, 4545.63, '2021-07-15', 4545.63, 'PAID'),
(7, 17707, 405.63, '2021-08-15', 405.63, 'PAID'),
(8, 17708, 425.05, '2021-05-15', 0.00, 'PENDING'),
(9, 17709, 644.63, '2021-02-15', 0.00, 'PENDING'),
(10, 17710, 8765.00, '2021-07-15', 0.00, 'PENDING'),
(11, 17711, 23.45, '2021-02-15', 0.00, 'PENDING'),
(12, 17712, 1242.00, '2021-09-15', 0.00, 'PENDING'),
(13, 17713, 1265.00, '2021-03-15', 0.00, 'PENDING'),
(14, 17714, 787.23, '2020-10-15', 787.23, 'PAID'),
(15, 17715, 632.33, '2021-07-15', 632.33, 'PAID'),
(16, 17716, 12354.00, '2021-05-15', 12354.00, 'PAID'),
(17, 17717, 98976.00, '2021-12-15', 0.00, 'PENDING'),
(18, 17718, 345.00, '2021-11-15', 345.00, 'PAID'),
(19, 17719, 9565.00, '2021-03-15', 0.00, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `accountreceivable`
--

CREATE TABLE `accountreceivable` (
  `AccountReceivableId` int(11) NOT NULL,
  `Order_ID` int(11) NOT NULL,
  `OrderAmount` decimal(10,2) NOT NULL,
  `DueDate` date NOT NULL,
  `AmountReceived` decimal(10,2) NOT NULL,
  `PaymentMethod` varchar(25) NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountreceivable`
--

INSERT INTO `accountreceivable` (`AccountReceivableId`, `Order_ID`, `OrderAmount`, `DueDate`, `AmountReceived`, `PaymentMethod`, `Status`) VALUES
(1, 23456, 3321.23, '2021-03-16', 0.00, 'VISA', 'PENDING'),
(2, 635353, 12534.21, '2021-05-31', 2300.00, 'MC', 'PENDING'),
(1, 23456, 3321.23, '2021-03-16', 0.00, 'VISA', 'PENDING'),
(2, 635353, 12534.21, '2021-05-31', 2300.00, 'MC', 'PENDING'),
(3, 55235, 7632.91, '2021-05-31', 7632.91, 'MC', 'PAID'),
(1, 23456, 3321.23, '2021-03-16', 0.00, 'VISA', 'PENDING'),
(2, 635353, 12534.21, '2021-05-31', 2300.00, 'MC', 'PENDING'),
(1, 23456, 3321.23, '2021-03-16', 0.00, 'VISA', 'PENDING'),
(2, 635353, 12534.21, '2021-05-31', 2300.00, 'MC', 'PENDING'),
(3, 55235, 7632.91, '2021-05-31', 7632.91, 'MC', 'PAID'),
(1, 23456, 3321.23, '2021-03-16', 0.00, 'VISA', 'PENDING'),
(2, 635353, 12534.21, '2021-05-31', 2300.00, 'MC', 'PENDING'),
(1, 23456, 3321.23, '2021-03-16', 0.00, 'VISA', 'PENDING'),
(2, 635353, 12534.21, '2021-05-31', 2300.00, 'MC', 'PENDING'),
(3, 55235, 7632.91, '2021-05-31', 7632.91, 'MC', 'PAID'),
(1, 23456, 3321.23, '2021-03-16', 0.00, 'VISA', 'PENDING'),
(2, 635353, 12534.21, '2021-05-31', 2300.00, 'MC', 'PENDING'),
(1, 23456, 3321.23, '2021-03-16', 0.00, 'VISA', 'PENDING'),
(2, 635353, 12534.21, '2021-05-31', 2300.00, 'MC', 'PENDING'),
(3, 55235, 7632.91, '2021-05-31', 7632.91, 'MC', 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `AccountId` bigint(20) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `month` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `AccountId`, `balance`, `month`) VALUES
(1, 3000013450012, 5066330.00, 'June'),
(2, 3000013450012, 5405464.00, 'July'),
(3, 3000013450012, 5436234.00, 'August'),
(4, 3000013450012, 5640456.00, 'September'),
(5, 3000013450012, 6818345.00, 'October'),
(6, 3000013450012, 7153385.00, 'November'),
(7, 3000013450012, 7883854.00, 'December'),
(8, 3000013450012, 7456123.00, 'January'),
(9, 3000013450012, 805884.00, 'February'),
(10, 3000013450012, 8392344.00, 'March'),
(11, 3000013450012, 8293245.00, 'April'),
(12, 3000013450012, 8424558.00, 'May');

-- --------------------------------------------------------

--
-- Table structure for table `classrate`
--

CREATE TABLE `classrate` (
  `class_code` decimal(5,1) NOT NULL,
  `gdensity` decimal(6,1) NOT NULL,
  `ldensity` decimal(6,1) NOT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classrate`
--

INSERT INTO `classrate` (`class_code`, `gdensity`, `ldensity`, `rate`) VALUES
(50.0, 50.0, 99999.0, 5.00),
(55.0, 35.0, 50.0, 15.00),
(60.0, 30.0, 35.0, 30.00),
(65.0, 22.5, 30.0, 50.00),
(70.0, 15.0, 22.5, 100.00),
(77.5, 13.5, 15.0, 250.00),
(85.0, 12.0, 13.5, 500.00),
(92.5, 10.5, 12.0, 750.00),
(100.0, 9.0, 10.5, 1000.00),
(110.0, 8.0, 9.0, 1250.00),
(125.0, 7.0, 8.0, 1500.00),
(150.0, 6.0, 7.0, 1750.00),
(175.0, 5.0, 6.0, 2000.00),
(200.0, 4.0, 5.0, 2500.00),
(250.0, 3.0, 4.0, 2750.00),
(300.0, 2.0, 3.0, 3000.00),
(400.0, 1.0, 2.0, 4000.00),
(500.0, 0.0, 1.0, 5000.00);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `databasepermissions`
--

CREATE TABLE `databasepermissions` (
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `view` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `databasepermissions`
--

INSERT INTO `databasepermissions` (`name`, `email`, `password`, `view`) VALUES
('June Smith', 'accountant@email.com', 'password', 'accountant'),
('Anna Marie', 'amarie@email.com', 'accountantpassword', 'accountant'),
('Joe Smith', 'customer@email.com', 'password', 'customer'),
('Henry McCoy', 'hmccoy@email.com', 'ratepassword', 'rate'),
('Jean Grey', 'jgrey@email.com', 'shippingpassword', 'shipping'),
('James Howlett', 'jhowlett@email.com', 'customerpassword', 'customer'),
('Kurt Wagner', 'kwagner@email.com', 'warehousepassword', 'warehouse'),
('Ororo Munroe', 'omunroe@email.com', 'shippingpassword', 'shipping'),
('John Smith', 'rate@email.com', 'password', 'rate'),
('Robert Drake', 'rdrake@email.com', 'customerpassword', 'customer'),
('Jane Smith', 'shipping@email.com', 'password', 'shipping'),
('Scott Summers', 'ssummers@email.com', 'warehousepassword', 'warehouse'),
('Jim Smith', 'warehouse@email.com', 'password', 'warehouse');

-- --------------------------------------------------------

--
-- Table structure for table `deniedparties`
--

CREATE TABLE `deniedparties` (
  `party_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deniedparties`
--

INSERT INTO `deniedparties` (`party_name`) VALUES
('Andrew Childers'),
('UPS'),
('FedEx'),
('eBay'),
('Andrew Childers'),
('UPS'),
('FedEx'),
('eBay'),
('Andrew Childers'),
('UPS'),
('FedEx'),
('eBay'),
('Andrew Childers'),
('UPS'),
('FedEx'),
('eBay');

-- --------------------------------------------------------

--
-- Table structure for table `freight`
--

CREATE TABLE `freight` (
  `freight_id` int(30) NOT NULL,
  `freight_type` varchar(30) NOT NULL,
  `order_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `freightrate`
--

CREATE TABLE `freightrate` (
  `freight_type` varchar(20) NOT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freightrate`
--

INSERT INTO `freightrate` (`freight_type`, `rate`) VALUES
('container', 100.00),
('crate', 50.00),
('pallet', 25.00);

-- --------------------------------------------------------

--
-- Table structure for table `monthlyreport`
--

CREATE TABLE `monthlyreport` (
  `id` int(2) NOT NULL,
  `month` varchar(10) NOT NULL,
  `sale` int(13) NOT NULL,
  `profit` int(13) NOT NULL,
  `expenses` int(13) NOT NULL,
  `exp_fixed` int(13) NOT NULL,
  `exp_variable` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monthlyreport`
--

INSERT INTO `monthlyreport` (`id`, `month`, `sale`, `profit`, `expenses`, `exp_fixed`, `exp_variable`) VALUES
(1, 'June', 506630, 1502355, 266000, 146000, 122000),
(2, 'July', 540564, 150000, 270000, 145000, 125000),
(3, 'August', 543634, 150000, 269000, 147000, 122000),
(4, 'September', 564046, 150000, 262000, 142000, 120000),
(5, 'October', 681835, 150000, 273000, 148000, 125000),
(6, 'November', 715000, 150000, 275000, 149000, 126000),
(7, 'December', 788000, 150000, 267000, 144000, 123000),
(8, 'January', 745600, 150000, 270000, 147000, 123000),
(9, 'February', 805000, 150000, 275000, 148000, 127000),
(10, 'March', 832000, 150000, 268000, 142000, 126000),
(11, 'April', 829905, 150000, 262000, 140000, 122000),
(12, 'May', 842900, 150000, 273000, 148000, 125000),
(1, 'June', 506630, 1502355, 266000, 146000, 122000),
(2, 'July', 540564, 150000, 270000, 145000, 125000),
(3, 'August', 543634, 150000, 269000, 147000, 122000),
(4, 'September', 564046, 150000, 262000, 142000, 120000),
(5, 'October', 681835, 150000, 273000, 148000, 125000),
(6, 'November', 715000, 150000, 275000, 149000, 126000),
(7, 'December', 788000, 150000, 267000, 144000, 123000),
(8, 'January', 745600, 150000, 270000, 147000, 123000),
(9, 'February', 805000, 150000, 275000, 148000, 127000),
(10, 'March', 832000, 150000, 268000, 142000, 126000),
(11, 'April', 829905, 150000, 262000, 140000, 122000),
(12, 'May', 842900, 150000, 273000, 148000, 125000),
(1, 'June', 506630, 1502355, 266000, 146000, 122000),
(2, 'July', 540564, 150000, 270000, 145000, 125000),
(3, 'August', 543634, 150000, 269000, 147000, 122000),
(4, 'September', 564046, 150000, 262000, 142000, 120000),
(5, 'October', 681835, 150000, 273000, 148000, 125000),
(6, 'November', 715000, 150000, 275000, 149000, 126000),
(7, 'December', 788000, 150000, 267000, 144000, 123000),
(8, 'January', 745600, 150000, 270000, 147000, 123000),
(9, 'February', 805000, 150000, 275000, 148000, 127000),
(10, 'March', 832000, 150000, 268000, 142000, 126000),
(11, 'April', 829905, 150000, 262000, 140000, 122000),
(12, 'May', 842900, 150000, 273000, 148000, 125000),
(1, 'June', 506630, 1502355, 266000, 146000, 122000),
(2, 'July', 540564, 150000, 270000, 145000, 125000),
(3, 'August', 543634, 150000, 269000, 147000, 122000),
(4, 'September', 564046, 150000, 262000, 142000, 120000),
(5, 'October', 681835, 150000, 273000, 148000, 125000),
(6, 'November', 715000, 150000, 275000, 149000, 126000),
(7, 'December', 788000, 150000, 267000, 144000, 123000),
(8, 'January', 745600, 150000, 270000, 147000, 123000),
(9, 'February', 805000, 150000, 275000, 148000, 127000),
(10, 'March', 832000, 150000, 268000, 142000, 126000),
(11, 'April', 829905, 150000, 262000, 140000, 122000),
(12, 'May', 842900, 150000, 273000, 148000, 125000),
(1, 'June', 506630, 1502355, 266000, 146000, 122000),
(2, 'July', 540564, 150000, 270000, 145000, 125000),
(3, 'August', 543634, 150000, 269000, 147000, 122000),
(4, 'September', 564046, 150000, 262000, 142000, 120000),
(5, 'October', 681835, 150000, 273000, 148000, 125000),
(6, 'November', 715000, 150000, 275000, 149000, 126000),
(7, 'December', 788000, 150000, 267000, 144000, 123000),
(8, 'January', 745600, 150000, 270000, 147000, 123000),
(9, 'February', 805000, 150000, 275000, 148000, 127000),
(10, 'March', 832000, 150000, 268000, 142000, 126000),
(11, 'April', 829905, 150000, 262000, 140000, 122000),
(12, 'May', 842900, 150000, 273000, 148000, 125000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `shipment_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `client` varchar(40) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `pickup_street_address` varchar(100) DEFAULT NULL,
  `pickup_city` varchar(100) DEFAULT NULL,
  `pickup_state` varchar(100) DEFAULT NULL,
  `pickup_zip_code` int(11) DEFAULT NULL,
  `recipient_name` varchar(100) DEFAULT NULL,
  `delivery_street_address` varchar(100) DEFAULT NULL,
  `delivery_city` varchar(100) DEFAULT NULL,
  `delivery_state_province` varchar(100) DEFAULT NULL,
  `delivery_zip_code` int(11) DEFAULT NULL,
  `delivery_country` varchar(100) DEFAULT NULL,
  `class_code` decimal(4,1) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `freight_type` varchar(30) DEFAULT NULL,
  `quantity` int(200) DEFAULT NULL,
  `length` decimal(6,1) DEFAULT NULL,
  `width` decimal(6,1) DEFAULT NULL,
  `height` decimal(6,1) DEFAULT NULL,
  `weight` decimal(6,1) DEFAULT NULL,
  `density` decimal(6,1) DEFAULT NULL,
  `volume` decimal(15,1) DEFAULT NULL,
  `zone` int(11) DEFAULT NULL,
  `dom_int` set('DOMESTIC','INTERNATIONAL') DEFAULT NULL,
  `customer_cost` decimal(8,2) DEFAULT NULL,
  `date_placed` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_completed` date DEFAULT NULL,
  `status` set('PENDING','IN PROGRESS','SHIPPED','COMPLETED') DEFAULT 'PENDING',
  `cur_vehicle_id` int(11) DEFAULT NULL,
  `item_warning` varchar(300) DEFAULT NULL,
  `party_warning` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `shipment_id`, `customer_id`, `client`, `phone`, `pickup_street_address`, `pickup_city`, `pickup_state`, `pickup_zip_code`, `recipient_name`, `delivery_street_address`, `delivery_city`, `delivery_state_province`, `delivery_zip_code`, `delivery_country`, `class_code`, `item_name`, `freight_type`, `quantity`, `length`, `width`, `height`, `weight`, `density`, `volume`, `zone`, `dom_int`, `customer_cost`, `date_placed`, `date_completed`, `status`, `cur_vehicle_id`, `item_warning`, `party_warning`) VALUES
(1, NULL, 2, 'John Smith', 1244534575, '12 Maple Ave', 'Maple City', 'AK', 49560, 'Jane Smith', '54 Apple St', 'Apple City', 'CA', 39535, 'USA', 100.0, 'tv', 'pallet', 5, 30.0, 20.0, 30.0, 100.0, 9.6, 18000.0, 8, 'DOMESTIC', 2125.00, '2021-05-11 13:53:31', NULL, 'PENDING', NULL, NULL, NULL),
(2, NULL, 2, 'Jane Smith', 1234561234, '123 Street', 'Orange City', 'AL', 12345, 'Joe Smith', '321 Street', 'Apple', 'Apple State', 0, 'Korea', 60.0, 'computers', 'pallet', 2, 25.0, 20.0, 20.0, 200.0, 34.5, 10000.0, 0, 'INTERNATIONAL', 1280.00, '2021-05-13 14:54:31', NULL, 'PENDING', NULL, NULL, NULL),
(3, NULL, 2, 'Josh Smith', 1234561234, '123 Street', 'Orange', 'AL', 12345, 'Jerry Smith', '321 Street', 'Apple', 'SC', 58597, 'USA', 60.0, 'books', 'pallet', 2, 25.0, 20.0, 20.0, 200.0, 34.5, 10000.0, 4, 'DOMESTIC', 380.00, '2021-05-13 14:54:50', NULL, 'PENDING', NULL, NULL, NULL),
(4, NULL, 2, 'Andrew Childers', 1234567890, 'River Street', 'NYC', 'NY', 0, 'MSU', '1 Normal Ave', 'Montclair', 'NJ', 7043, 'USA', 50.0, 'Toys', 'pallet', 3, 10.0, 10.0, 10.0, 5.0, 200.0, 1000.0, 8, 'DOMESTIC', 100.00, '2021-05-14 13:39:55', NULL, 'PENDING', NULL, 'Toys', 'Andrew Childers'),
(5, NULL, 2, 'Josh Smith', 1234561234, '123 Street', 'Orange', 'AL', 12345, 'Jerry Smith', '321 Street', 'Apple', 'SC', 58597, 'USA', 60.0, 'Toys', 'pallet', 2, 25.0, 20.0, 20.0, 200.0, 34.5, 10000.0, 4, 'DOMESTIC', 380.00, '2021-05-13 14:54:50', NULL, 'PENDING', NULL, 'Toys', NULL),
(6, NULL, 2, 'Andrew Childers', 1234567890, 'River Street', 'NYC', 'NY', 0, 'MSU', '1 Normal Ave', 'Montclair', 'NJ', 7043, 'USA', 50.0, 'books', 'pallet', 3, 10.0, 10.0, 10.0, 5.0, 200.0, 1000.0, 8, 'DOMESTIC', 100.00, '2021-05-14 13:39:55', NULL, 'PENDING', NULL, NULL, 'Andrew Childers'),
(7, NULL, 2, 'Bob Williams', 1244534575, '12 Maple Ave', 'Maple City', 'AK', 49560, 'Jane Smith', '54 Apple St', 'Apple City', 'CA', 39535, 'USA', 100.0, 'tv', 'pallet', 5, 30.0, 20.0, 30.0, 100.0, 9.6, 18000.0, 8, 'DOMESTIC', 2125.00, '2021-05-11 13:53:31', NULL, 'IN PROGRESS', NULL, NULL, NULL),
(8, NULL, 2, 'Jill Miller', 1244534575, '12 Maple Ave', 'Maple City', 'AK', 49560, 'Jane Smith', '54 Apple St', 'Apple City', 'CA', 39535, 'USA', 100.0, 'tv', 'pallet', 5, 30.0, 20.0, 30.0, 100.0, 9.6, 18000.0, 8, 'DOMESTIC', 2125.00, '2021-05-11 13:53:31', NULL, 'IN PROGRESS', NULL, NULL, NULL),
(9, NULL, 2, 'Jane Smith', 1234561234, '123 Street', 'Orange City', 'AL', 12345, 'Joe Smith', '321 Street', 'Apple', 'Apple State', 0, 'Korea', 60.0, 'computers', 'pallet', 2, 25.0, 20.0, 20.0, 200.0, 34.5, 10000.0, 0, 'INTERNATIONAL', 1280.00, '2021-05-13 14:54:31', '2021-05-15', 'COMPLETED', NULL, NULL, NULL),
(10, NULL, 2, 'Josh Smith', 1234561234, '123 Street', 'Orange', 'AL', 12345, 'Jerry Smith', '321 Street', 'Apple', 'SC', 58597, 'USA', 60.0, 'books', 'pallet', 2, 25.0, 20.0, 20.0, 200.0, 34.5, 10000.0, 4, 'DOMESTIC', 380.00, '2021-05-13 14:54:50', '2021-05-15', 'COMPLETED', NULL, NULL, NULL),
(59, NULL, NULL, 'music store', 1200022111, '12 Street', 'Apple', 'ID', 10232, 'Music Plaza', '40 Plaza Ave', 'Orange', 'IN', 10232, 'USA', 150.0, 'piano', 'container', 1, 30.0, 30.0, 30.0, 100.0, 6.4, 27000.0, 4, 'DOMESTIC', 2450.00, '2021-05-16 02:07:43', NULL, 'IN PROGRESS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders1`
--

CREATE TABLE `orders1` (
  `order_id` int(11) NOT NULL,
  `shipment_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `client` varchar(40) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `pickup_street_address` varchar(100) DEFAULT NULL,
  `pickup_city` varchar(100) DEFAULT NULL,
  `pickup_state` varchar(100) DEFAULT NULL,
  `pickup_zip_code` int(11) DEFAULT NULL,
  `recipient_name` varchar(100) DEFAULT NULL,
  `delivery_street_address` varchar(100) DEFAULT NULL,
  `delivery_city` varchar(100) DEFAULT NULL,
  `delivery_state_province` varchar(100) DEFAULT NULL,
  `delivery_zip_code` int(11) DEFAULT NULL,
  `delivery_country` varchar(100) DEFAULT NULL,
  `class_code` decimal(4,1) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `freight_type` varchar(30) DEFAULT NULL,
  `quantity` int(200) DEFAULT NULL,
  `length` decimal(6,1) DEFAULT NULL,
  `width` double(6,1) DEFAULT NULL,
  `height` decimal(6,1) DEFAULT NULL,
  `weight` decimal(6,1) DEFAULT NULL,
  `density` decimal(6,1) DEFAULT NULL,
  `volume` decimal(6,1) DEFAULT NULL,
  `zone` int(11) DEFAULT NULL,
  `dom_int` set('DOMESTIC','INTERNATIONAL') DEFAULT NULL,
  `customer_cost` decimal(8,2) DEFAULT NULL,
  `date_placed` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_completed` date DEFAULT NULL,
  `status` set('PENDING','IN PROGRESS','SHIPPED','COMPLETED') DEFAULT 'PENDING',
  `cur_vehicle_id` int(11) DEFAULT NULL,
  `item_warning` varchar(300) DEFAULT NULL,
  `party_warning` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders1`
--

INSERT INTO `orders1` (`order_id`, `shipment_id`, `customer_id`, `client`, `phone`, `pickup_street_address`, `pickup_city`, `pickup_state`, `pickup_zip_code`, `recipient_name`, `delivery_street_address`, `delivery_city`, `delivery_state_province`, `delivery_zip_code`, `delivery_country`, `class_code`, `item_name`, `freight_type`, `quantity`, `length`, `width`, `height`, `weight`, `density`, `volume`, `zone`, `dom_int`, `customer_cost`, `date_placed`, `date_completed`, `status`, `cur_vehicle_id`, `item_warning`, `party_warning`) VALUES
(1, NULL, NULL, 'John Smith', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-11 13:42:15', NULL, 'PENDING', NULL, NULL, NULL),
(2, NULL, NULL, 'John Smith', 1244534575, '12 Maple Ave', 'Maple City', 'AK', 49560, 'Jane Smith', '54 Apple St', 'Apple City', 'CA', 39535, 'USA', 100.0, 'tv', 'pallet', 5, 30.0, 20.0, 30.0, 100.0, 9.6, 18000.0, 8, 'DOMESTIC', 2125.00, '2021-05-11 13:45:56', NULL, 'PENDING', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portrate`
--

CREATE TABLE `portrate` (
  `country` varchar(30) NOT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portrate`
--

INSERT INTO `portrate` (`country`, `rate`) VALUES
('Argentina', 400.00),
('Canada', 300.00),
('China', 1000.00),
('France', 500.00),
('Germany', 550.00),
('India', 800.00),
('Jamaica', 450.00),
('Korea', 1000.00),
('Mexico', 200.00),
('Nigeria', 700.00),
('Russia', 900.00),
('UK', 450.00),
('USA', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `restricteditems`
--

CREATE TABLE `restricteditems` (
  `item_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restricteditems`
--

INSERT INTO `restricteditems` (`item_name`) VALUES
('Toys'),
('Flammable Substance'),
('Toys'),
('Flammable Substance'),
('Toys'),
('Flammable Substance'),
('Toys'),
('Flammable Substance');

-- --------------------------------------------------------

--
-- Table structure for table `statezones`
--

CREATE TABLE `statezones` (
  `state` varchar(2) NOT NULL,
  `state_name` varchar(128) NOT NULL,
  `zone` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statezones`
--

INSERT INTO `statezones` (`state`, `state_name`, `zone`) VALUES
('AK', 'Alaska', 8),
('AL', 'Alabama', 5),
('AR', 'Arkansas', 6),
('AZ', 'Arizona', 8),
('CA', 'California', 8),
('CO', 'Colorado', 7),
('CT', 'Connecticut', 2),
('DE', 'Delaware', 2),
('FL', 'Florida', 6),
('GA', 'Georgia', 5),
('HI', 'Hawaii', 8),
('IA', 'Iowa', 6),
('ID', 'Idaho', 8),
('IL', 'Illinois', 5),
('IN', 'Indiana', 4),
('KS', 'Kansas', 7),
('KY', 'Kentucky', 4),
('LA', 'Louisiana', 6),
('MA', 'Massachusetts', 2),
('MD', 'Maryland', 2),
('ME', 'Maine', 3),
('MI', 'Michigan', 4),
('MN', 'Minnesota', 6),
('MO', 'Missouri', 6),
('MS', 'Mississippi', 6),
('MT', 'Montana', 7),
('NC', 'North Carolina', 4),
('ND', 'North Dakota', 7),
('NE', 'Nebraska', 7),
('NH', 'New Hampshire', 3),
('NJ', 'New Jersey', 2),
('NM', 'New Mexico', 7),
('NV', 'Nevada', 8),
('NY', 'New York', 1),
('OH', 'Ohio', 3),
('OK', 'Oklahoma', 7),
('OR', 'Oregon', 8),
('PA', 'Pennsylvania', 2),
('PR', 'Puerto Rico', 8),
('RI', 'Rhode Island', 2),
('SC', 'South Carolina', 4),
('SD', 'South Dakota', 7),
('TN', 'Tennessee', 5),
('TX', 'Texas', 7),
('UT', 'Utah', 8),
('VA', 'Virginia', 3),
('VT', 'Vermont', 3),
('WA', 'Washington', 8),
('WI', 'Wisconsin', 5),
('WV', 'West Virginia', 3),
('WY', 'Wyoming', 7);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_type` set('AIRPLANE','SHIP','TRUCK','TRAIN') NOT NULL,
  `total_space` float NOT NULL,
  `available_space` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `vehicle_type`, `total_space`, `available_space`) VALUES
(1, 'TRUCK', 50000, 50000),
(2, 'TRUCK', 50000, 50000),
(3, 'SHIP', 200000, 200000),
(4, 'SHIP', 200000, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `warehouse_id` int(11) NOT NULL COMMENT 'PK for Warehouse',
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`warehouse_id`, `name`, `location`) VALUES
(1, 'Primary', 'New York'),
(2, 'Secondary', 'New Jersey');

-- --------------------------------------------------------

--
-- Table structure for table `warehousereceipt`
--

CREATE TABLE `warehousereceipt` (
  `warehousereceipt_id` int(11) NOT NULL COMMENT 'PK from WH Receipt Table',
  `warehouse_id` int(11) NOT NULL COMMENT 'FK from Warehouse Table',
  `order_id` int(11) NOT NULL COMMENT 'FK from Order Table',
  `shipment_id` int(11) NOT NULL COMMENT 'FK from Shipment Table',
  `createdby` varchar(11) NOT NULL COMMENT 'FK from UserPemission table',
  `createdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'DateTime when the receipt was generated'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warehousereceipt`
--

INSERT INTO `warehousereceipt` (`warehousereceipt_id`, `warehouse_id`, `order_id`, `shipment_id`, `createdby`, `createdate`) VALUES
(1, 1, 1, 0, 'shipping@em', '2021-05-14 16:58:04'),
(2, 2, 2, 0, 'shipping@em', '2021-05-14 16:58:04'),
(3, 1, 3, 0, 'shipping@em', '2021-05-14 17:26:11'),
(4, 1, 4, 0, 'shipping@em', '2021-05-14 19:52:02'),
(5, 2, 5, 0, 'shipping@em', '2021-05-14 19:52:02'),
(6, 1, 6, 0, 'shipping@em', '2021-05-14 19:52:54'),
(7, 2, 7, 0, 'shipping@em', '2021-05-14 19:52:54'),
(8, 1, 8, 0, 'shipping@em', '2021-05-14 19:52:54'),
(9, 2, 9, 0, 'shipping@em', '2021-05-14 19:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `zonerate`
--

CREATE TABLE `zonerate` (
  `zone` int(8) NOT NULL,
  `rate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zonerate`
--

INSERT INTO `zonerate` (`zone`, `rate`) VALUES
(1, 10.00),
(2, 25.00),
(3, 50.00),
(4, 100.00),
(5, 200.00),
(6, 300.00),
(7, 400.00),
(8, 500.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountpayable`
--
ALTER TABLE `accountpayable`
  ADD PRIMARY KEY (`AccountPayableId`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `AccountId` (`AccountId`,`month`),
  ADD UNIQUE KEY `AccountId_2` (`AccountId`,`month`);

--
-- Indexes for table `classrate`
--
ALTER TABLE `classrate`
  ADD PRIMARY KEY (`class_code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `databasepermissions`
--
ALTER TABLE `databasepermissions`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `freight`
--
ALTER TABLE `freight`
  ADD PRIMARY KEY (`freight_id`),
  ADD KEY `freight_type` (`freight_type`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Indexes for table `freightrate`
--
ALTER TABLE `freightrate`
  ADD PRIMARY KEY (`freight_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders1`
--
ALTER TABLE `orders1`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `portrate`
--
ALTER TABLE `portrate`
  ADD PRIMARY KEY (`country`);

--
-- Indexes for table `statezones`
--
ALTER TABLE `statezones`
  ADD PRIMARY KEY (`state`),
  ADD KEY `zone` (`zone`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`warehouse_id`),
  ADD UNIQUE KEY `Name` (`name`);

--
-- Indexes for table `warehousereceipt`
--
ALTER TABLE `warehousereceipt`
  ADD PRIMARY KEY (`warehousereceipt_id`);

--
-- Indexes for table `zonerate`
--
ALTER TABLE `zonerate`
  ADD PRIMARY KEY (`zone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freight`
--
ALTER TABLE `freight`
  MODIFY `freight_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `orders1`
--
ALTER TABLE `orders1`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `warehouse_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK for Warehouse', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warehousereceipt`
--
ALTER TABLE `warehousereceipt`
  MODIFY `warehousereceipt_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK from WH Receipt Table', AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `freight`
--
ALTER TABLE `freight`
  ADD CONSTRAINT `freight_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders1` (`order_id`),
  ADD CONSTRAINT `freight_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`);

--
-- Constraints for table `statezones`
--
ALTER TABLE `statezones`
  ADD CONSTRAINT `statezones_ibfk_1` FOREIGN KEY (`zone`) REFERENCES `zonerate` (`zone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
