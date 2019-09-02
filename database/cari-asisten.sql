-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 05:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cari-asisten`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_list`
--

CREATE TABLE `accepted_list` (
  `linkToRel` varchar(2048) NOT NULL,
  `announcement_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accepted_list`
--

INSERT INTO `accepted_list` (`linkToRel`, `announcement_id`) VALUES
('http://cari-asisten.telkomuniversity.ac.id/announcement/1/', 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(10) NOT NULL,
  `user_email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `user_email`) VALUES
(1, 'lebah_ganteng@admin.telkomuniversity.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(10) NOT NULL,
  `dateCreated` date NOT NULL,
  `content` varchar(60000) NOT NULL,
  `title` varchar(300) NOT NULL,
  `category` varchar(20) NOT NULL,
  `faculty` varchar(3) NOT NULL,
  `lecturer_user_email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `dateCreated`, `content`, `title`, `category`, `faculty`, `lecturer_user_email`) VALUES
(1, '2019-01-20', 'Testing Pengumuman', 'Judul Pengumuman Test', 'asisten praktikum', 'FIF', 'ikazra@telkomuniversity.ac.id'),
(2, '2019-01-27', 'Testing Pengumuman Diterima', 'Nama yang lolos', 'asisten praktikum', 'FIF', 'ikazra@telkomuniversity.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id_apply` int(10) NOT NULL,
  `file_idFile` int(10) NOT NULL,
  `student_user_email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id_apply`, `file_idFile`, `student_user_email`) VALUES
(2, 0, 'jane_doe@student.telkomuniversity.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `delete_announcement`
--

CREATE TABLE `delete_announcement` (
  `id_delete` int(10) NOT NULL,
  `admin_user_email` varchar(254) NOT NULL,
  `announcement_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delete_announcement`
--

INSERT INTO `delete_announcement` (`id_delete`, `admin_user_email`, `announcement_id`) VALUES
(1, 'lebah_ganteng@admin.telkomuniversity.ac.id', 1);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `idFile` int(10) NOT NULL,
  `fileContent` varchar(2048) NOT NULL,
  `recruitment_announcement_id` int(10) NOT NULL,
  `student_user_email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`idFile`, `fileContent`, `recruitment_announcement_id`, `student_user_email`) VALUES
(0, '1301171234', 1, 'jane_doe@student.telkomuniversity.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `NIP` int(18) NOT NULL,
  `picProfile` blob NOT NULL,
  `user_email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`NIP`, `picProfile`, `user_email`) VALUES
(1771345756, 0x70686f746f2e6a7067, 'ikazra@lecturer.telkomuniversity.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `course` varchar(100) NOT NULL,
  `period` varchar(6) NOT NULL,
  `announcement_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruitment`
--

INSERT INTO `recruitment` (`course`, `period`, `announcement_id`) VALUES
('Struktur Data', 'Genap', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `NIM` int(10) NOT NULL,
  `user_email` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`NIM`, `user_email`) VALUES
(1301171234, 'jane_doe@student.telkomuniversity.ac.id');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(254) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(70) NOT NULL,
  `phoneNumber` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `name`, `phoneNumber`) VALUES
('ikazra@lecturer.telkomuniversity.ac.id', 'ini_password_nanti_dihash', 'Ikazra', '08121245678'),
('jane_doe@student.telkomuniversity.ac.id', 'ini_password_nanti_dihash', 'Jane Doe', '081234567892'),
('lebah_ganteng@admin.telkomuniversity.ac.id', 'ini_password_nanti_dihash', 'Lebah Ganteng', '08121245679');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepted_list`
--
ALTER TABLE `accepted_list`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_email`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id_apply`),
  ADD KEY `apply_fk` (`file_idFile`),
  ADD KEY `apply_fk2` (`student_user_email`);

--
-- Indexes for table `delete_announcement`
--
ALTER TABLE `delete_announcement`
  ADD PRIMARY KEY (`id_delete`),
  ADD KEY `delete_announcement_fk1` (`admin_user_email`),
  ADD KEY `delete_announcement_fk2` (`announcement_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`idFile`),
  ADD KEY `file_fk1` (`recruitment_announcement_id`),
  ADD KEY `file_fk2` (`student_user_email`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`user_email`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`user_email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id_apply` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delete_announcement`
--
ALTER TABLE `delete_announcement`
  MODIFY `id_delete` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accepted_list`
--
ALTER TABLE `accepted_list`
  ADD CONSTRAINT `accepted_list_announcement_fk` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`id`);

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_fk` FOREIGN KEY (`user_email`) REFERENCES `user` (`email`);

--
-- Constraints for table `apply`
--
ALTER TABLE `apply`
  ADD CONSTRAINT `apply_fk` FOREIGN KEY (`file_idFile`) REFERENCES `file` (`idFile`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apply_fk2` FOREIGN KEY (`student_user_email`) REFERENCES `student` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `delete_announcement`
--
ALTER TABLE `delete_announcement`
  ADD CONSTRAINT `delete_announcement_fk1` FOREIGN KEY (`admin_user_email`) REFERENCES `admin` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `delete_announcement_fk2` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_fk1` FOREIGN KEY (`recruitment_announcement_id`) REFERENCES `recruitment` (`announcement_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `file_fk2` FOREIGN KEY (`student_user_email`) REFERENCES `student` (`user_email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD CONSTRAINT `lecturer_fk` FOREIGN KEY (`user_email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD CONSTRAINT `recruitment_announcement_fk` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_fk` FOREIGN KEY (`user_email`) REFERENCES `user` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

SELECT * FROM announcement;
SELECT * FROM recruitment;
SELECT * FROM accepted_list;
SELECT * FROM lecturer;
SELECT * FROM student;
SELECT * FROM file;
SELECT * FROM admin;
SELECT * FROM apply;
SELECT * FROM delete_announcement;
SELECT * FROM user;