-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 10:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cicstdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

create table `tbl_enquiry` (
  `EnquiryId` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `MobileNo` varchar(20) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Enquiry_DT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

insert into `tbl_enquiry` (`EnquiryId`, `Name`, `MobileNo`, `EmailId`, `Message`, `Enquiry_DT`) VALUES
(5, 'Satyam', '7651964476', 'programmersatyam@gmail.com', 'Hi Sir, what is fee structure of BCA.', '04/05/2019 01:59:54 PM'),
(6, 'Satyam', '7651986885', 'sdsd@gmail.com', 'how to join your college membership', '04/05/2019 04:08:52 PM'),
(8, 'Ram', '7651986885', 'hjgd@gmail.com', 'how to appy in admission', '06/05/2019 10:10:10 AM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

create table `tbl_feedback` (
  `fid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobno` int(20) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `fdt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

insert into `tbl_feedback` (`fid`, `name`, `mobno`, `emailid`, `message`, `fdt`) VALUES
(3, 'mr.Satyam', 2147483647, 'bhjshj@gmail.com', 'hi am happy  for me get info..', '05/05/2019 08:24:58 AM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

create table `tbl_login` (
  `AdminId` varchar(100) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

insert into `tbl_login` (`AdminId`, `Pass`) VALUES
('karwi', 'dwivedigi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notificaction`
--

create table  `tbl_notificaction` (
  `NotificationId` int(11) NOT NULL,
  `NotificactionMsg` varchar(500) NOT NULL,
  `NDT` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notificaction`
--

insert into `tbl_notificaction` (`NotificationId`, `NotificactionMsg`, `NDT`) values
(1, 'BCA semester exam date....2019-commingson', '07/05/2019 08:58:03 AM'),
(3, 'Kidlly information all students in cicst your semester exam fee last date 10/05/2019.', '07/05/2019 08:59:50 AM'),
(4, 'Kidlly information all students in cicst your semester exam fee last date 10/05/2019.', '07/05/2019 08:59:57 AM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms`
--

create table `tbl_sms` (
  `sno` int(11) NOT NULL,
  `mobno` varchar(20) NOT NULL,
  `sms` varchar(200) NOT NULL,
  `smsdt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sms`
--

insert into `tbl_sms` (`sno`, `mobno`, `sms`, `smsdt`) VALUES
(11, '7518083515', 'hi dear ,  all students in cicst computer degree college your project submettion date 10/05/2019 \r\nfile & poroject submited to now.', '05/05/2019 04:01:52 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

create table `tbl_staff` (
  `StaffId` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `PhotoPath` varchar(100) NOT NULL,
  `Added_On` varchar(30) NOT NULL,
  `Qualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

insert into `tbl_staff` (`StaffId`, `Name`, `Designation`, `EmailId`, `PhotoPath`, `Added_On`, `Qualification`) VALUES
(15, 'R.S Jaishwal', 'Director', 'director@gmail.com', '../Staff Photo/4.JPG', '07/05/2019 09:02:48 AM', 'MCA/B.ed'),
(16, 'Ashok kumar', 'Dpt.director', 'ashokkumar@gmail.com', '../Staff Photo/5.JPG', '07/05/2019 09:03:45 AM', 'MCA/B.ed'),
(17, 'vinay kanchni', 'Lecturer', 'vinay@gmail.com', '../Staff Photo/vinaysir.jpg', '07/05/2019 09:04:59 AM', 'BCA/B.ed'),
(18, 'pawan pandey', 'Lecturer', 'pawan@gmail.com', '../Staff Photo/pawansir.jpg', '07/05/2019 09:05:53 AM', 'MCA/B.ed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studymaterial`
--

create table `tbl_studymaterial` (
  `studyid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `filepath` varchar(300) NOT NULL,
  `studydate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_enquiry`
--
alter table `tbl_enquiry`
  ADD PRIMARY KEY (`EnquiryId`);

--
-- Indexes for table `tbl_feedback`
--
alter table `tbl_feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tbl_login`
--
alter table `tbl_login`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `tbl_notificaction`
--
alter table `tbl_notificaction`
  ADD PRIMARY KEY (`NotificationId`);

--
-- Indexes for table `tbl_sms`
--
alter table `tbl_sms`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_staff`
--
alter table `tbl_staff`
  ADD PRIMARY KEY (`StaffId`);

--
-- Indexes for table `tbl_studymaterial`
--
alter table `tbl_studymaterial`
  ADD PRIMARY KEY (`studyid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
alter table `tbl_enquiry`
  MODIFY `EnquiryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
alter table `tbl_feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_notificaction`
--
alter table `tbl_notificaction`
  MODIFY `NotificationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_sms`
--
alter table `tbl_sms`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
alter table `tbl_staff`
  MODIFY `StaffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_studymaterial`
--
alter table  `tbl_studymaterial`
  MODIFY `studyid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
