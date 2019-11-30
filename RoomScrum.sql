-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 04:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userName` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userDep` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userFac` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userType` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userEmail`, `userName`, `userDep`, `userFac`, `userType`) VALUES
('583020330-1', 'nr@kkumail.com', 'นายณัฎฐพงค์ รัตนศิริพรหม', 'วิทยาการคอมพิวเตอร์', 'วิทยาศาสตร์', 1),
('593020403-1', 'kanoksuda_d@kkumail.com', 'นางสาวกนกสุดา ดีแล้ว', 'วิทยาการคอมพิวเตอร์', 'วิทยาศาสตร์', 1),
('593020423-5', 'nitchakarn.p@tala@kkumail.com', 'นางสาวณิชกานต์ ปัตลา', 'วิทยาการคอมพิวเตอร์', 'วิทยาศาสตร์', 1),
('593020440-5', 'pongsakorn_p@kkumail.com', 'นายพงศกร แซ่ตั้ง', 'วิทยาการคอมพิวเตอร์', 'วิทยาศาสตร์', 1),
('593020443-9', 'pchara_cs@kkumail.com', 'นายพชร สรภูมิ', 'วิทยาการคอมพิวเตอร์', 'วิทยาศาสตร์', 1),
('593021273-3', 'phakhawadees@kkumail.com', 'นางสาวภควดี สุวรรณะ', 'วิทยาการคอมพิวเตอร์', 'วิทยาศาสตร์', 1),
('000000000-1', 'wongsar@kku.ac.th', 'รศ.ดร.ศาสตรา วงศ์ธนวสุ', NULL , NULL, 2),
('000000000-2', 'pusadee@kku.ac.th', 'ผศ.ดร.พุธษดี ศิริแสงตระกูล', NULL , NULL, 2),
('000000000-3', 'sunkra@kku.ac.th', 'ผศ.ดร.สิรภัทร เชี่ยวชาญวัฒนา ', NULL , NULL, 2),
('000000000-4', 'punhor1@kku.ac.th', 'ผศ.ดร.ปัญญาพล หอระตะ', NULL , NULL, 2),
('000000000-5', 'sunti@kku.ac.th', 'ผศ.สันติ ทินตะนัย', NULL , NULL, 2),
('000000000-6', 'khamron_sun@yahoo.com', 'ผศ.ดร.คำรณ สุนัติ', NULL , NULL, 2),
('000000000-7', 'urachart@kku.ac.th', 'ผศ.ดร.อุรฉัตร โคแก้ว', NULL , NULL, 2),
('000000000-8', 'silain@kku.ac.th', 'ผศ.ดร.สิลดา อินทรโสธรฉันท์', NULL , NULL, 2),
('000000000-9', 'boonsup@kku.ac.th', 'ผศ.บุญทรัพย์ ไวคำ', NULL , NULL, 2),
('000000001-0', 'chitsutha@kku.ac.th', 'อ.ดร.ชิตสุธา สุ่มเล็ก', NULL , NULL, 2),
('000000001-1', 'twachi@kku.ac.th', 'อ.ดร.วชิราวุธ ธรรมวิเศษ', NULL , NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--
CREATE TABLE `subject` (
  `subjID` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `subjNameTH` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subjNameEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subjCredit` int(2) DEFAULT NULL,
  `subjDes` varchar(555) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secAmount` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `term` int(1) DEFAULT NULL,
  `userID` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--
INSERT INTO `subject` (`subjID`, `subjNameTH`, `subjNameEN`, `subjCredit`, `subjDes`, `secAmount`, `year`, `term`, `userID`) VALUES
('050108', 'ภาษาอังกฤษสำหรับวิทยาศาสตร์', 'Englisg For Science', 3, 'โครงสร้างภาษาอังกฤษ คำศัพท์ หลักการอ่าน การฟัง การพูด การเขียน การนำเสนอ การค้นคว้าและการวิเคราะห์ข้อมูลภาษาอังกฤษ ในบริบททางด้านวิทยาศาสตร์และสิ่งแวดล้อม
English language structures, vocabulary, principles of reading, listening, speaking, writing, presenting, research and analysis of English
 information and criticism in science and environmental contexts', '16', 2562, 2, '000000000-5'),
('322371', 'วิศวกรรมซอฟต์แวร์', 'Software Engineering', 3 , NULL , '2', 2562, 2,'000000001-0'),
('322391', 'ระเบียบวิธีวิจัย', 'Research Methodology', 3 , NULL , '1', 2562, 2,'000000000-2'),
('322435', 'การตอบโต้ระหว่างมนุษย์และคอมพิวเตอร์', 'Human-Computer Interaction', 3 , NULL , '1', 2562, 2,'000000000-7'),
('322392', 'การจัดการเทคโนโลยีสารสนเทศ', 'Managemant Of Information Technology', 3 , NULL , '1', 2562, 2,'000000000-5'),
('300202', 'การเตรียมความพร้อมก่อนปฏิบัติงานสหกิจศึกษาสำหรับนักศึกษาคณะวิทยาศาสตร์', 'ORIENTATION TO CO-OPERATIVE EDUCATION FOR SCIENCE STUDENTS',
 1 , NULL , '1', 2562, 2,'000000000-5');
-- --------------------------------------------------------

--
-- Table structure for table `ta`
--
CREATE TABLE `ta` (
  `taID` char(5) COLLATE utf8_unicode_ci NOT NULL,
  `userID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `subjID` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ta`
--
INSERT INTO `ta` (`taID`, `userID`, `subjID`) VALUES
('TA001', '593020403-1', '322371'),
('TA002', '593020440-5', '322435'),
('TA003', '593020423-5', '322391');

-- --------------------------------------------------------

--
-- Table structure for table `sectionDetail`
--
CREATE TABLE `sectionDetail` (
  `secID` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `stdAmount` int(3) DEFAULT NULL,
  `subjID` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- ('TA001', '593020403-1', '322371'),

--
-- Dumping data for table `sectionDetail`
--
INSERT INTO `sectionDetail` (`secID`, `stdAmount`, `subjID`) VALUES
('050108001', 45, '050108'),
('322371001', 40, '322371'),
('322391001', 40, '322391'),
('322435001', 37, '322435'),
('322371002', 123, '322371'),
('300202001', 129, '300202');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--
CREATE TABLE `register` (
  `regID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `regType` int(1) DEFAULT NULL,
  `userID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `secID` char(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--
INSERT INTO `register` (`regID`, `regType`, `userID`, `secID`) VALUES
('REG0001', 1, '583020330-1', '050108001'),
('REG0002', 1, '593020403-1', '322371001'),
('REG0003', 1, '593020423-5', '322391001'),
('REG0004', 1, '593020440-5', '322435001'),
('REG0005', 2, '593020443-9', '322371002'),
('REG0006', 2, '593021273-3', '300202001');
-- --------------------------------------------------------

--
-- Table structure for table `date`
--
CREATE TABLE `date` (
  `dateID` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` int(1) DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time  DEFAULT NULL,
  `location` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `secID` char(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `date`
--
-- ไม่รู้ว่า time ต้องใส่ ' ' ป่าว

INSERT INTO `date` (`dateID`, `date`, `startTime`, `endTime`, `location`,`secID` ) VALUES
('0501080011', 1, '13:00:00', '15:00:00', 'SC8601', '050108001'),
('3223710013', 3, '13:00:00', '15:00:00', 'SC8401', '322371001'),
('3223910012', 2, '10:00:00', '12:00:00', 'SC6601B', '322391001'),
('3224350013', 3, '10:00:00', '12:00:00', 'SC6501', '322435001'),
('3224710022', 2, '15:00:00', '16:30:00', 'SC8601', '322371002'),
('3002020014', 4, '13:00:00', '17:00:00', 'SC8103', '300202001');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--
CREATE TABLE `teaching` (
  `techID` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `userID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `subjID` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Dumping data for table `teaching`
--
INSERT INTO `teaching` (`techID`, `userID`, `subjID`) VALUES
('subjID', '583020330-1', '050108');
-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE `attend` (
  `attendID` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `dateTimeAttend` timestamp NULL DEFAULT NULL,
  `dateAttend` date  DEFAULT NULL,
  `timeAttend` time  DEFAULT NULL,
  `status` int(1)  DEFAULT NULL,
  `regID` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `dateID` char(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attend`
--
  -- โค้ด
-- --------------------------------------------------------
--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjID`,`year`,`term`),
  ADD KEY `subject_user_fk` (`userID`);

--
--
-- Indexes for table `ta`
--
ALTER TABLE `ta`
  ADD PRIMARY KEY (`taID`),
  ADD KEY `ta_user_fk` (`userID`),
  ADD KEY `ta_subject_fk` (`subjID`);

--
-- Indexes for table `sectionDetail`
--
ALTER TABLE `sectionDetail`
  ADD PRIMARY KEY (`secID`),
  ADD KEY `sectionDetail_subject_fk` (`subjID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`regID`),
  ADD KEY `register_user_fk` (`userID`),
  ADD KEY `register_sectionDetail_fk` (`secID`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`dateID`),
  ADD KEY `date_sectionDetail_fk` (`secID`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`techID`),
  ADD KEY `teaching_user_fk` (`userID`),
  ADD KEY `teaching_subject_fk` (`subjID`);

--
-- Indexes for table `attend`
--
ALTER TABLE `attend`
  ADD PRIMARY KEY (`attendID`),
  ADD KEY `attend_register_fk` (`regID`),
  ADD KEY `attend_date_fk` (`dateID`);



--
-- Constraints for table `ta`
--
ALTER TABLE `ta`
  ADD CONSTRAINT `ta_user_fk` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `ta_subject_fk` FOREIGN KEY (`subjID`) REFERENCES `subject` (`subjID`);

--
-- Constraints for table `sectionDetail`
--
ALTER TABLE `sectionDetail`
  ADD CONSTRAINT `sectionDetail_subject_fk` FOREIGN KEY (`subjID`) REFERENCES `subject` (`subjID`);

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `register_user_fk` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `register_sectionDetail_fk` FOREIGN KEY (`secID`) REFERENCES `sectionDetail` (`secID`);


--
-- Constraints for table `date`
--
ALTER TABLE `date`
  ADD CONSTRAINT `date_sectionDetail_fk` FOREIGN KEY (`secID`) REFERENCES `sectionDetail` (`secID`);

--
-- Constraints for table `teaching`
--
ALTER TABLE `teaching`
  ADD CONSTRAINT `teaching_user_fk` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `attend`
--
ALTER TABLE `attend`
  ADD CONSTRAINT `attend_register_fk` FOREIGN KEY (`regID`) REFERENCES `register` (`regID`),
  ADD CONSTRAINT `attend_date_fk` FOREIGN KEY (`dateID`) REFERENCES `date` (`dateID`);
    




--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_user_fk` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);







