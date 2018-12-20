-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 08:39 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orthopedic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(20) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'AdmiN');

-- --------------------------------------------------------

--
-- Table structure for table `bloodtest`
--

CREATE TABLE `bloodtest` (
  `bloodtestid` int(11) NOT NULL,
  `bt_calciumlevel` decimal(20,0) NOT NULL,
  `bt_whitebloodcell` decimal(20,0) NOT NULL,
  `bt_inflammationrate` decimal(20,0) NOT NULL,
  `bt_glucose` decimal(20,0) NOT NULL,
  `patientid` int(11) NOT NULL,
  `bloodtestdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medicalrecord`
--

CREATE TABLE `medicalrecord` (
  `medicalid` int(11) NOT NULL,
  `medrecord` varchar(4000) NOT NULL,
  `screeningid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalrecord`
--

INSERT INTO `medicalrecord` (`medicalid`, `medrecord`, `screeningid`) VALUES
(1, 'lack of calcium', 1),
(2, 'lack of calcium based on the health screening result', 4),
(4, 'lack of calcium based ', 2),
(5, 'lack of calcium based on the health screening result', 1),
(6, 'lack of calcium based ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicineid` int(11) NOT NULL,
  `med_name` varchar(50) NOT NULL,
  `med_scientificname` varchar(50) NOT NULL,
  `med_instruction` varchar(100) NOT NULL,
  `screeningid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicineid`, `med_name`, `med_scientificname`, `med_instruction`, `screeningid`) VALUES
(1, 'calcium', 'calcium', '2 times/day', 1),
(2, 'blood pressure', 'bpgaining', '3 times/day', 2),
(3, 'calcium', 'calcium', '2 times/day', 5);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patientid` int(11) NOT NULL,
  `pt_name` varchar(200) DEFAULT NULL,
  `pt_ic` varchar(50) DEFAULT NULL,
  `pt_password` varchar(50) DEFAULT NULL,
  `pt_address` varchar(500) DEFAULT NULL,
  `pt_email` varchar(100) DEFAULT NULL,
  `pt_phonenum` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patientid`, `pt_name`, `pt_ic`, `pt_password`, `pt_address`, `pt_email`, `pt_phonenum`) VALUES
(11, 'Afif adli', '890403065429', 'unagemok', 'no 8, jalan bahagia', 'afifadli@gmail.com', '0137487667'),
(12, 'Aina Nadia', '930504065234', 'aina', 'no 8, jalan tenteram', 'aina@gmail.com', '0126875544'),
(13, 'saliha amani', '960403065334', 'amani', '6, jalan struktur', 'amani@gmail.com', '0135667554'),
(14, 'syazwin zamri', '960405035780', 'awin', '5, jalan impian', 'awin@gmail.com', '0145674898'),
(15, 'nurul nadia', '930504026758', 'nadia', 'no 4/34, jalan perdana', 'nadia@gmail.com', '0149876543'),
(16, 'aiman salihin', '930205145331', 'aiman', 'no 23, jalan taman bahagia', 'salihin@gmail.com', '0145678944'),
(17, 'amalina nj', '96100803', 'amalinan16', 'kksjt', 'amlnjhh@gmail.com', '0112203'),
(18, 'alya', '12333', 'alya123', 'perak', 'ly.alyanasuha@gmail.com', '0123434343'),
(19, 'zulaika deraman', '960304055630', 'amir', 'no 8, jalan tenteram', 'zulaika@gmail.com', '0145678900'),
(20, 'amirul', '7675645453', '123456', '5, jalan impian', 'amirul@gmail.com', '0137487667');

-- --------------------------------------------------------

--
-- Table structure for table `physicians`
--

CREATE TABLE `physicians` (
  `physicianid` int(11) NOT NULL,
  `ph_name` varchar(200) DEFAULT NULL,
  `ph_personalcode` varchar(50) DEFAULT NULL,
  `ph_password` varchar(50) DEFAULT NULL,
  `ph_address` varchar(500) DEFAULT NULL,
  `ph_email` varchar(100) DEFAULT NULL,
  `ph_phonenum` varchar(50) DEFAULT NULL,
  `ph_qualification` varchar(300) DEFAULT NULL,
  `ph_profilepic` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physicians`
--

INSERT INTO `physicians` (`physicianid`, `ph_name`, `ph_personalcode`, `ph_password`, `ph_address`, `ph_email`, `ph_phonenum`, `ph_qualification`, `ph_profilepic`) VALUES
(1, 'julia adrina', '123', 'julia', 'no 56, taman bernas', 'julia@gmail.com', '0148967544', 'Orthopedic specialist', ''),
(2, 'ain natasha', '234', 'ain', '55, jalan bertamadun', 'tasha@gmail.com', '0145673456', 'Orthopedic specialist', ''),
(3, 'najma syahmin', '135', 'najma', '57, taman sentosa', 'najma@gmail.com', '0133456677', 'Orthopedic specialist', ''),
(4, 'qalisha ariana', '456', 'qalisha', '8, jln 21/27b', 'qalisha@gmail.com', '01546678569', 'Orthopedic specialist', ''),
(5, 'ariana sumayyah', '549', 'ariana', '8, jln 21/27b', 'ariana@gmail.com', '01648488594', 'Orthopedic specialist', '');

-- --------------------------------------------------------

--
-- Table structure for table `screening`
--

CREATE TABLE `screening` (
  `screeningid` int(11) NOT NULL,
  `sc_bloodpressure` varchar(7) NOT NULL,
  `sc_pulserate` decimal(10,0) NOT NULL,
  `sc_bodytemperature` decimal(10,0) NOT NULL,
  `sc_respirationrate` decimal(10,0) NOT NULL,
  `sc_oxysaturation` decimal(10,0) NOT NULL,
  `sc_dextrostix` decimal(10,0) NOT NULL,
  `sc_ptcomplaint` varchar(1000) NOT NULL,
  `sc_painlevel` int(11) NOT NULL,
  `screeningdate` date NOT NULL,
  `patientid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screening`
--

INSERT INTO `screening` (`screeningid`, `sc_bloodpressure`, `sc_pulserate`, `sc_bodytemperature`, `sc_respirationrate`, `sc_oxysaturation`, `sc_dextrostix`, `sc_ptcomplaint`, `sc_painlevel`, `screeningdate`, `patientid`) VALUES
(1, '190/40', '70', '38', '80', '90', '50', 'back pain', 3, '2018-10-15', 11),
(2, '190/40', '69', '37', '80', '90', '50', 'elbow pain', 3, '2018-10-10', 12),
(3, '190/40', '70', '38', '58', '90', '24', 'back pain', 8, '2018-10-08', 15),
(4, '190/40', '69', '37', '80', '90', '24', 'elbow pain', 3, '2018-10-29', 11),
(5, '190/40', '70', '37', '80', '90', '50', 'vomit', 3, '2018-12-19', 20);

-- --------------------------------------------------------

--
-- Table structure for table `xray`
--

CREATE TABLE `xray` (
  `xrayid` int(11) NOT NULL,
  `xray_film` blob NOT NULL,
  `xray_report` varchar(3000) NOT NULL,
  `patientid` int(11) NOT NULL,
  `xraydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `bloodtest`
--
ALTER TABLE `bloodtest`
  ADD PRIMARY KEY (`bloodtestid`);

--
-- Indexes for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD PRIMARY KEY (`medicalid`),
  ADD KEY `screeningid` (`screeningid`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicineid`),
  ADD KEY `screeningid` (`screeningid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patientid`);

--
-- Indexes for table `physicians`
--
ALTER TABLE `physicians`
  ADD PRIMARY KEY (`physicianid`);

--
-- Indexes for table `screening`
--
ALTER TABLE `screening`
  ADD PRIMARY KEY (`screeningid`),
  ADD KEY `patientid` (`patientid`);

--
-- Indexes for table `xray`
--
ALTER TABLE `xray`
  ADD PRIMARY KEY (`xrayid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodtest`
--
ALTER TABLE `bloodtest`
  MODIFY `bloodtestid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  MODIFY `medicalid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicineid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `physicians`
--
ALTER TABLE `physicians`
  MODIFY `physicianid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `screening`
--
ALTER TABLE `screening`
  MODIFY `screeningid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `xray`
--
ALTER TABLE `xray`
  MODIFY `xrayid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `medicalrecord`
--
ALTER TABLE `medicalrecord`
  ADD CONSTRAINT `medicalrecord_ibfk_1` FOREIGN KEY (`screeningid`) REFERENCES `screening` (`screeningid`);

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `medicine_ibfk_1` FOREIGN KEY (`screeningid`) REFERENCES `screening` (`screeningid`);

--
-- Constraints for table `screening`
--
ALTER TABLE `screening`
  ADD CONSTRAINT `screening_ibfk_1` FOREIGN KEY (`patientid`) REFERENCES `patients` (`patientid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
