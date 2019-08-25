-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2019 at 05:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `managementportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `ass_id` int(11) NOT NULL,
  `posted_by` varchar(255) NOT NULL,
  `topic` varchar(300) NOT NULL,
  `post_body` varchar(2000) NOT NULL,
  `mark` int(11) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`ass_id`, `posted_by`, `topic`, `post_body`, `mark`, `post_date`) VALUES
(1, 'babaibeji', 'Web Technology week 1-2', 'You are required to design a 5 page webpage linking each other, you can use demo data', 3, '0000-00-00 00:00:00'),
(17, 'babaibeji', 'Web Technology week 3-4', 'develop a login and signup form', 5, '2019-08-24 14:35:12'),
(18, 'babaibeji', 'Web Technology week 5-6', 'design and css modal box with form inside', 5, '2019-08-24 15:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `coursereg`
--

CREATE TABLE `coursereg` (
  `id` int(11) NOT NULL,
  `studentName` varchar(50) NOT NULL,
  `course1` varchar(50) NOT NULL,
  `course2` varchar(50) NOT NULL,
  `course3` varchar(50) NOT NULL,
  `course4` varchar(50) NOT NULL,
  `course5` varchar(50) NOT NULL,
  `course6` varchar(50) NOT NULL,
  `course7` varchar(50) NOT NULL,
  `course8` varchar(50) NOT NULL,
  `course9` varchar(50) NOT NULL,
  `course10` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursereg`
--

INSERT INTO `coursereg` (`id`, `studentName`, `course1`, `course2`, `course3`, `course4`, `course5`, `course6`, `course7`, `course8`, `course9`, `course10`) VALUES
(20, 'adewalecharles', 'com 111', '', 'com 112', '', 'com 113', '', 'com 121', '', 'com 123', '');

-- --------------------------------------------------------

--
-- Table structure for table `deadline`
--

CREATE TABLE `deadline` (
  `id` int(11) NOT NULL,
  `lecturerName` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deadline`
--

INSERT INTO `deadline` (`id`, `lecturerName`, `date`) VALUES
(2, 'babaibeji', '2019-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `IDNumber` varchar(30) NOT NULL,
  `faculty` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `firstName`, `lastName`, `IDNumber`, `faculty`, `username`, `email`, `password`) VALUES
(5, 'shomope', 'adewale', 'pfss111', 'school of technology', 'babaibeji', 'babaibeji@gmail.com', 'babaibeji');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_coursereg`
--

CREATE TABLE `lecturer_coursereg` (
  `id` int(11) NOT NULL,
  `lecturerName` varchar(150) NOT NULL,
  `course1` varchar(100) NOT NULL,
  `course2` varchar(100) NOT NULL,
  `course3` varchar(100) NOT NULL,
  `course4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_coursereg`
--

INSERT INTO `lecturer_coursereg` (`id`, `lecturerName`, `course1`, `course2`, `course3`, `course4`) VALUES
(1, 'babaibeji', 'com 111', 'com112', 'com 234', 'com 232');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_upload`
--

CREATE TABLE `lecturer_upload` (
  `id` int(11) NOT NULL,
  `lecturerName` varchar(100) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_upload`
--

INSERT INTO `lecturer_upload` (`id`, `lecturerName`, `file_name`, `file_type`, `file_size`, `file_path`, `date`) VALUES
(1, 'babaibeji', 'Project cover (2).docx', 'application/vnd.openxmlformats-officedocument.word', '32676', 'lecturer_uploads/5d614f21bf2da8.13114781.docx', '2019-08-24 15:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `profile_photo`
--

CREATE TABLE `profile_photo` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `file_name` varchar(150) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_size` varchar(100) NOT NULL,
  `file_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_photo`
--

INSERT INTO `profile_photo` (`id`, `username`, `file_name`, `file_type`, `file_size`, `file_path`) VALUES
(12, 'adewalecharles', 'Koala.jpg', 'image/jpeg', '780831', 'profile_photo/5d272071eaca05.93163336.jpg'),
(13, 'babaibeji', 'Penguins.jpg', 'image/jpeg', '777835', 'profile_photo/5d272452f3e045.05559147.jpg'),
(14, 'babaibeji', 'Desert.jpg', 'image/jpeg', '845941', 'profile_photo/5d272460c51694.61595558.jpg'),
(15, 'adewalecharles', '33224633_10216496926685699_995624855741136896_n.jpg', 'image/jpeg', '98972', 'profile_photo/5d614f870e3ab4.70679866.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `regNumber` varchar(30) NOT NULL,
  `faculty` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstName`, `lastName`, `regNumber`, `faculty`, `username`, `email`, `password`) VALUES
(3, 'adewale', 'charles', '1705022048', 'school of technology', 'adewalecharles', 'shyprince1@gmail.com', 'blogger1');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `file_size` varchar(10) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `studentName`, `file_name`, `file_type`, `file_size`, `file_path`, `date`) VALUES
(55, 'adewalecharles', 'sss.txt', 'text/plain', '1135', 'uploads/5d2720d55b1030.59983924.txt', '2019-07-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `coursereg`
--
ALTER TABLE `coursereg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deadline`
--
ALTER TABLE `deadline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_coursereg`
--
ALTER TABLE `lecturer_coursereg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_upload`
--
ALTER TABLE `lecturer_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_photo`
--
ALTER TABLE `profile_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `ass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `coursereg`
--
ALTER TABLE `coursereg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `deadline`
--
ALTER TABLE `deadline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lecturer_coursereg`
--
ALTER TABLE `lecturer_coursereg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecturer_upload`
--
ALTER TABLE `lecturer_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile_photo`
--
ALTER TABLE `profile_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
