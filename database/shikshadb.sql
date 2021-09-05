-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 06:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shikshadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `username`, `password`) VALUES
(1, 'proffessor', 'logan');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `sno` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(20) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `dep` varchar(20) NOT NULL,
  `person` varchar(20) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `timing` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`sno`, `username`, `phoneno`, `email`, `address`, `pic`, `dep`, `person`, `purpose`, `date`, `timing`, `status`) VALUES
(26, 'amit', '987978799889', 'amit@gmail.com', 'bistupur', 'amit.jpg', 'HOD', 'reeta kumari', 'Meeting', '2021-08-12', '7 am to 8:30 am', 'pending'),
(27, 'amit', '67567587868688', 'ami@gmail.com', 'bistupur', 'amit.jpg', 'Teacher', 'ajay pathak', 'Consultancy', '2021-08-27', '9 am to 12 pm', 'pending'),
(28, 'anish', '486631313333213213', 'anish@gmail.com', 'kadma', 'anish.jpg', 'Teacher', 'ajay pathak', 'Consultancy', '2021-08-27', '2 pm to 4 pm', 'pending'),
(29, 'anish', '7834587385', 'anish@gmail.com', 'kadma', 'anish.jpg', 'HOD', 'reeta kumari', 'Consultancy', '2021-08-20', '9 am to 12 pm', 'Accepted'),
(30, 'chandramohan', '87345389573905', 'chandru@gmail.com', 'kadma', 'chandramohan.jpg', 'Teacher', 'sandep modak', 'Meeting', '2021-08-11', '7 am to 8:30 am', 'pending'),
(31, 'chandramohan', '98873495949', 'chandru@gmail.com', 'kadma', 'chandramohan.jpg', 'Staff', 'harpaal singh', 'Training', '2021-08-20', '9 am to 3 pm', 'pending'),
(32, 'kurbaan', '935984958', 'kurban@gmail.com', 'cbsa', 'kurbaan.jpg', 'Principal', 'meeta jakhanwal', 'Consultancy', '2021-08-18', '9 am to 12 pm', 'pending'),
(33, 'kurbaan', '877857899889', 'kurbaan@gmail.com', 'cbsa', 'kurbaan.jpg', 'HOD', 'reeta kumari', 'Business Query', '2021-08-19', '10 am to 12 pm', 'pending'),
(34, 'anish', '5566152367371', 'anish@gmail.com', 'cbsa', 'anish.jpg', 'Principal', 'meeta jakhanwal', 'Meeting', '2021-08-25', '7 am to 8:30 am', 'pending'),
(35, 'tansen', '9998978786757', 'keshritansen@gmail.com', 'cbsa', 'tansen.jpg', 'Teacher', 'sandep modak', 'Meeting', '2021-08-20', '7 am to 8:30 am', 'pending'),
(36, 'tansen', '65464636611313', 'keshri@gmail.com', 'cbsa', 'tansen.jpg', 'Teacher', 'ajay pathak', 'Meeting', '2021-08-28', '2:30 pm to 4 pm', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `sno` int(11) NOT NULL,
  `dep` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`sno`, `dep`) VALUES
(1, 'HOD'),
(2, 'Teacher'),
(3, 'Staff'),
(4, 'Principal');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `sno` int(4) NOT NULL,
  `empname` varchar(50) NOT NULL,
  `dep` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`sno`, `empname`, `dep`, `type`, `email`, `phone`, `address`, `pic`) VALUES
(5, 'sandep modak', 'Teacher', 2, 'modaksandeep@gamil.com', '9912345678', 'Bistupur', 'image2.jpg'),
(6, 'ajay pathak', 'Teacher', 2, 'pajay@gmail.com', '9912345670', 'Sakchi', 'image4.jpg'),
(7, 'reeta kumari', 'HOD', 1, 'reetakumari@gmail.com', '9934525550', 'Adityapur', 'image1.jpg'),
(8, 'harpaal singh', 'Staff', 3, 'harpaals@gmail.com', '9912345676', 'ranchi', 'image5.jpg'),
(9, 'meeta jakhanwal', 'Principal', 4, 'meetajk@gmail.com', '9934525590', 'sonari', 'image3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purpose`
--

CREATE TABLE `purpose` (
  `sno` int(11) NOT NULL,
  `purp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purpose`
--

INSERT INTO `purpose` (`sno`, `purp`) VALUES
(1, 'Meeting'),
(2, 'Consultancy'),
(3, 'Business Query'),
(4, 'Training');

-- --------------------------------------------------------

--
-- Table structure for table `timings`
--

CREATE TABLE `timings` (
  `sno` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timings`
--

INSERT INTO `timings` (`sno`, `type`, `time`) VALUES
(1, 'Meeting', '7 am to 8:30 am'),
(2, 'Meeting', '2:30 pm to 4 pm'),
(3, 'Consultancy', '9 am to 12 pm'),
(4, 'Consultancy', '2 pm to 4 pm'),
(5, 'Training', '9 am to 3 pm'),
(6, 'Business Query', '10 am to 12 pm'),
(7, 'Business Query', '3 pm to 4 pm');

-- --------------------------------------------------------

--
-- Table structure for table `userdatabase`
--

CREATE TABLE `userdatabase` (
  `sno` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdatabase`
--

INSERT INTO `userdatabase` (`sno`, `username`, `phoneno`, `email`, `address`, `pic`, `password`) VALUES
(16, 'sandeep modak', '9876543211', 'sandeep@gmail.com', 'bistupur', 'image2.jpg', '123'),
(18, 'ajay pathak', '8976543210', 'ajay@gmail.com', 'sakchi', 'image4.jpg', '123'),
(20, 'reeta kumari', '9786543211', 'reeta@gmail.com', 'adityapur', 'image1.jpg', '123'),
(22, 'harpaal singh', '8989654321', 'harpals@gmail.com', 'ranchi', 'image5.jpg', '123'),
(24, 'meeta jakhanwal', '9807513324', 'meeta@gmail.com', 'sonari', 'image3.jpg', '123'),
(30, 'tansen', '9889388913', 'tk@gmail.com', 'cbsa', 'tansen.jpg', '123'),
(33, 'amit', '52694105088', 'amit@gmail.com', 'nimdih', 'amit.jpg', '123'),
(34, 'anish', '8456971320', 'anish@gmail.com', 'meri tola', 'anish.jpg', '123'),
(36, 'chandramohan', '8621379409', 'chandramohan@gmail.com', 'tungri', 'chandramohan.jpg', '123'),
(38, 'kurbaan', '1395623123', 'kurbaan@gmail.com', 'badi bazar', 'kurbaan.jpg', '123'),
(40, 'mithun', '7853261000', 'mithun@gmail.com', 'pulhatu', 'mithun.jpg', '123'),
(42, 'reshma', '1258900013', 'reshma@gmail.com', 'tambo', 'reshma.jpg', '123'),
(44, 'rishav', '5123649120', 'rishav@gmail.com', 'spg compound', 'rishav.jpg', '123'),
(46, 'riya', '7418529630', 'riya@gmail.com', 'mahulsai', 'riya.jpg', '123'),
(48, 'saniya', '3698521470', 'saniya@gmail.com', 'gandhi tola', 'saniya.jpg', '123'),
(51, 'sonu', '5469871230', 'sonu@gmail.com', 'kumhar toli', 'sonu.jpg', '123'),
(53, 'sushmita', '9517534628', 'sushmita@gmail.com', 'new colony', 'sushmita.jpg', '123'),
(55, 'trisha', '62025134762', 'trisha@gmail.com', 'gutusai', 'trisha.jpg', '123'),
(57, 'tushar', '3692587410', 'tushar@gmail.com', 'mochisai', 'tushar.jpg', '123'),
(59, 'vinit', '91236478952', 'vinit@gmail.com', 'suffalsai', 'vinit.jpg', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `purpose`
--
ALTER TABLE `purpose`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `timings`
--
ALTER TABLE `timings`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userdatabase`
--
ALTER TABLE `userdatabase`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `purpose`
--
ALTER TABLE `purpose`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timings`
--
ALTER TABLE `timings`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userdatabase`
--
ALTER TABLE `userdatabase`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
