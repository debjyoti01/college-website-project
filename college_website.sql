-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 09:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `id` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `teacher_id` varchar(30) NOT NULL,
  `day` varchar(30) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_details`
--

INSERT INTO `class_details` (`id`, `name`, `teacher_id`, `day`, `time`) VALUES
(65, 'OOPS SEM V', 'tesc035', 'MONDAY', '10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `class_participants`
--

CREATE TABLE `class_participants` (
  `id` int(11) NOT NULL,
  `class_id` int(30) NOT NULL,
  `teacher_student_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_participants`
--

INSERT INTO `class_participants` (`id`, `class_id`, `teacher_student_id`) VALUES
(127, 65, 'tesc035');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(55) NOT NULL,
  `massage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dept_details`
--

CREATE TABLE `dept_details` (
  `dept_id` int(5) NOT NULL,
  `dept_code` varchar(30) NOT NULL,
  `stream` varchar(30) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept_details`
--

INSERT INTO `dept_details` (`dept_id`, `dept_code`, `stream`, `dept_name`) VALUES
(3, 'cmsa', 'science', 'computer science honours '),
(4, 'mtma', 'science', 'mathematics honours'),
(6, 'hisa', 'arts', 'history honors'),
(7, 'phsa', 'science', 'physics honours'),
(8, 'bnga', 'arts', 'bangla honours'),
(9, 'plsa', 'arts', 'political science honours'),
(10, 'bcoma', 'commerce', 'B.Com honours'),
(11, 'bcomg', 'commerce', 'B.Com genaral');

-- --------------------------------------------------------

--
-- Table structure for table `massage`
--

CREATE TABLE `massage` (
  `id` int(50) NOT NULL,
  `student_teacher_id` varchar(30) NOT NULL,
  `class_id` int(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sequrity_question`
--

CREATE TABLE `sequrity_question` (
  `id` int(11) NOT NULL,
  `teacher_student_id` varchar(30) NOT NULL,
  `question` int(11) NOT NULL,
  `answer` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sequrity_question`
--

INSERT INTO `sequrity_question` (`id`, `teacher_student_id`, `question`, `answer`) VALUES
(5, 'tesc012', 1, 'bapi'),
(6, 'tesc022', 2, 'swami vivekananda'),
(7, 'tesc031', 3, 'rekha'),
(8, 'tesc051', 1, 'arun'),
(9, 'tesc035', 2, 'sishu niketan'),
(10, 'tesc0252', 2, 'little star'),
(11, 'tesc0230', 1, 'rani'),
(12, 'teco012', 3, 'amal'),
(13, 'teco002', 3, 'anil'),
(14, 'tear015', 1, 'barsha'),
(15, 'tear042', 3, 'rupa'),
(16, 'tear058', 3, 'raja'),
(17, 'tear063', 1, 'raju'),
(18, 'asd', 1, 'a'),
(19, 'a', 1, 'a'),
(20, 'a', 1, 'a'),
(21, 'a', 1, 'a'),
(22, 'stusc052', 1, 'jojo'),
(23, 'stusc012', 2, 'child heart'),
(24, 'stusc009', 1, 'barsha'),
(25, 'stusc053', 1, 'bapi'),
(26, 'stusc021', 3, 'rohan'),
(27, 'stusc055', 1, 'diya'),
(28, 'stusc013', 2, 'raypur'),
(29, 'stusc015', 3, 'rohan'),
(30, 'stusc018', 1, 'rubi'),
(31, 'stusc020', 1, 'priya'),
(32, 'stusc023', 1, 'raja'),
(33, 'stusc024', 1, 'raju'),
(34, 'stusc027', 2, 'shantipur'),
(35, 'stusc030', 1, 'bristi'),
(36, 'stuco012', 1, 'riya'),
(37, 'stuco015', 2, 'bani bhaban'),
(38, 'stuco013', 1, 'bapon'),
(39, 'stuco017', 1, 'trina'),
(40, 'stuco020', 3, 'tushar'),
(41, 'stuco025', 1, 'babu'),
(42, 'stuar011', 1, 'rumi'),
(43, 'stuar020', 3, 'sumon'),
(44, 'stuar015', 3, 'rohit'),
(45, 'stuar017', 2, 'littile heart');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(50) NOT NULL,
  `class_id` int(30) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student_id` varchar(30) NOT NULL,
  `stream` varchar(30) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`fname`, `mname`, `lname`, `dob`, `gender`, `father_name`, `contact_number`, `email`, `student_id`, `stream`, `subject`) VALUES
('Rupsha', '', 'Das', '1999-06-24', 'female', 'Rupak Das', 9830364658, 'rupsha99@gmail.com', 'stuar011', 'arts', 'hisa'),
('Priyanka', '', 'Ghosh', '1999-06-02', 'female', 'Amal Ghosh', 7003134520, 'priyanka99@yahoo.com', 'stuar015', 'arts', 'bnga'),
('Anusuha', '', 'Sarkar', '1999-11-10', 'female', 'Pradip Sarkar', 9804121256, 'sarkaranusuha10@yahoo.com', 'stuar017', 'arts', 'bnga'),
('Tuhin', '', 'Das', '2000-06-06', 'male', 'Dipak Das', 9830897850, 'tuhin00@gmail.com', 'stuar020', 'arts', 'hisa'),
('Priyanka', '', 'Ghosh', '2000-02-01', 'female', 'Dulal Ghosh', 7003135240, 'priyanka0001@gmail.com', 'stuco012', 'commerce', 'bcoma'),
('Pinaki', '', 'Baidya', '2001-11-21', 'male', 'Chayan Baidya', 9477182382, 'pinaki2001@gmail.com', 'stuco013', 'commerce', 'bcoma'),
('Tushar', '', 'Dey', '2001-06-05', 'male', 'Arup Dey', 7003134850, 'tushar01@gmail.com', 'stuco015', 'commerce', 'bcoma'),
('Mili', '', 'Dey', '2001-11-15', 'female', 'Tapan Dey', 8697420565, 'mili0123@gmail.com', 'stuco017', 'commerce', 'bcoma'),
('Dipan', '', 'Ganguli', '2000-03-15', 'male', 'Sanjay Ganguli', 8697427845, 'dipan2000a@gmail.com', 'stuco020', 'commerce', 'bcomg'),
('Rupak', '', 'Das', '2000-12-14', 'male', 'Debangshu Das', 9433689586, 'rupak00c@gmail.com', 'stuco025', 'commerce', 'bcomg'),
('Riya', '', 'Das', '2000-11-23', 'female', 'Rakhal Das', 9830651212, 'riya23das@yahoo.in', 'stusc009', 'science', 'cmsa'),
('Amit', '', 'Saha', '2000-06-21', 'male', 'Atul Saha', 9830657841, 'amit00saha@yahoo.in', 'stusc012', 'science', 'cmsa'),
('Kripesh', '', 'Basu', '2000-02-22', 'male', 'Krishna Basu', 8583644512, 'kripesh0022@yahoo.com', 'stusc013', 'science', 'mtma'),
('Chayan', '', 'Dutta', '2000-02-02', 'male', 'Sayan Dutta', 8580457812, 'chayan0202@yahoo.com', 'stusc015', 'science', 'mtma'),
('Shradhya', '', 'Bose', '2000-04-06', 'female', 'Gurupada Bose', 8583700852, 'shradhya6@yahoo.com', 'stusc018', 'science', 'mtma'),
('Dolon', '', 'Das', '2001-02-07', 'female', 'Dulal Das', 8697524152, 'dolon01das@yahoo.com', 'stusc020', 'science', 'mtma'),
('Rupsha', '', 'Mondal', '2000-12-05', 'female', 'Pradip Mondal', 9830385641, 'modalrupsa@gmail.com', 'stusc021', 'science', 'cmsa'),
('Pratyush', '', 'Dey', '1999-12-24', 'male', 'Pinaki Dey', 9433656580, 'pratyus99@google.com', 'stusc023', 'science', 'phsa'),
('Sukesh', '', 'Ghosh', '1999-12-02', 'male', 'Debasish Ghosh', 8981202031, 'sukesh99@google.com', 'stusc024', 'science', 'phsa'),
('Tamagna', '', 'Das', '2000-02-03', 'male', 'Sukumar Das', 8981454580, 'tamagna03@google.com', 'stusc027', 'science', 'phsa'),
('Riya', '', 'Banerjee', '2001-07-11', 'female', 'Ratul Banerjee', 9038565601, 'riya01banerjee@google.com', 'stusc030', 'science', 'phsa'),
('Debjyoti', '', 'Mukherjee', '2001-01-27', 'male', 'Debashis Mukherjee', 8697421053, 'debjyotimukherjee01@gmail.com', 'stusc052', 'science', 'cmsa'),
('Rishab', '', 'Dey', '2001-01-31', 'male', 'Akhil Dey', 8583833560, 'deyrishab@gmail.com', 'stusc053', 'science', 'cmsa'),
('Payel', '', 'Chakraborty', '2001-02-06', 'female', 'Dilip Chakraborty', 9830456196, 'payel0106@gmail.com', 'stusc055', 'science', 'cmsa');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `student_id` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`student_id`, `password`) VALUES
('stuar011', 'rupsha1254'),
('stuar015', 'ghoshp01'),
('stuar017', 'anusuha@1'),
('stuar020', 'tuhin102a'),
('stuco012', 'priya0987'),
('stuco013', 'pinaki213'),
('stuco015', 'tushar2145@'),
('stuco017', 'mili0987'),
('stuco020', 'dipan@123'),
('stuco025', 'rupak#0987'),
('stusc009', 'riya456'),
('stusc012', 'amit1234'),
('stusc013', 'kripesh$@1'),
('stusc015', 'chayan0987'),
('stusc018', 'shra1234'),
('stusc020', 'dolon0147'),
('stusc021', 'rupsha1203'),
('stusc023', 'dey@123'),
('stusc024', 'ghosh123'),
('stusc027', 'sukumar7890'),
('stusc030', 'riya123'),
('stusc052', 'deba@0987'),
('stusc053', 'rishab@1'),
('stusc055', 'payel$1234');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_details`
--

CREATE TABLE `teacher_details` (
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `teacher_id` varchar(30) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_details`
--

INSERT INTO `teacher_details` (`fname`, `mname`, `lname`, `dob`, `gender`, `father_name`, `contact_number`, `email`, `teacher_id`, `stream`, `dept`) VALUES
('Runa', '', 'Thakur', '1988-02-09', 'female', 'Kripesh Thakur', 9830544582, 'runa88thakur@yahoo.com', 'tear015', 'arts', 'hisa'),
('Pratima', '', 'Guha', '1990-07-01', 'female', 'Samir Guha', 9830858503, 'pratima90guha@yahoo.com', 'tear042', 'arts', 'hisa'),
('Kalpana', '', 'Dasgupta', '1990-07-04', 'female', 'Prakash Dasgupta', 9038565689, 'kalpana0705@yahoo.com', 'tear058', 'arts', 'bnga'),
('Dinesh', '', 'Mondal', '1990-02-05', 'male', 'Amal Mondal', 9038505021, 'dinesh1990@hotmail.com', 'tear063', 'arts', 'plsa'),
('Dipak', '', 'Dey', '1990-07-11', 'male', 'Dinesh Dey', 9804568956, 'dipakdey07@gmail.com', 'teco002', 'commerce', 'bcoma'),
('Sonali', '', 'Ray', '1992-02-04', 'female', 'Durgesh Ray', 8583896974, 'sonali1992@gmail.com', 'teco012', 'commerce', 'bcoma'),
('Amit', '', 'Jana', '1991-03-05', 'male', 'Anup Jana', 9864751201, 'janaamit@gmail.com', 'tesc012', 'science', 'mtma'),
('Rakesh', '', 'Jha', '1993-10-12', 'male', 'Suresh Jha', 8597462589, 'rakesh1993@hotmail.com', 'tesc022', 'science', 'mtma'),
('Kanika', '', 'Sarkar', '1993-02-26', 'female', 'Tapan Sarkar', 9830121289, 'kanikasarkar1993@gmail.com', 'tesc0230', 'science', 'phsa'),
('Anil', '', 'Majhi', '1999-06-16', 'male', 'Animesh Majhi', 9830457812, 'anilmajhi99@gmail.com', 'tesc0252', 'science', 'phsa'),
('Priya', '', 'Banerjee', '1995-07-12', 'female', 'Dinesh Banerjee', 8697485215, 'priya127@hotmail.com', 'tesc031', 'science', 'cmsa'),
('Ashit', '', 'Das', '1988-02-21', 'male', 'Amit Das', 8583696589, 'ashitdas21@yahoo.com', 'tesc035', 'science', 'cmsa'),
('Sukhesh', '', 'Mukherjee', '1989-02-21', 'male', 'Soumen Mukherjee', 8697120121, 'mukherjee1989@gmail.com', 'tesc051', 'science', 'cmsa');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE `teacher_login` (
  `teacher_id` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`teacher_id`, `password`) VALUES
('tear015', 'runa$09'),
('tear042', 'pra0987tima'),
('tear058', 'kalpana3256'),
('tear063', 'dinesh9876'),
('teco002', 'dipak1254'),
('teco012', 'sonali1254'),
('tesc012', 'jana1234'),
('tesc022', 'rakesh12Jha'),
('tesc0230', 'konika@098'),
('tesc0252', 'anil9856'),
('tesc031', 'priya@12'),
('tesc035', 'amit098'),
('tesc051', 'mukh1452');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_details`
--
ALTER TABLE `class_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_participants`
--
ALTER TABLE `class_participants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_details`
--
ALTER TABLE `dept_details`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `massage`
--
ALTER TABLE `massage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sequrity_question`
--
ALTER TABLE `sequrity_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher_details`
--
ALTER TABLE `teacher_details`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_login`
--
ALTER TABLE `teacher_login`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_details`
--
ALTER TABLE `class_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `class_participants`
--
ALTER TABLE `class_participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dept_details`
--
ALTER TABLE `dept_details`
  MODIFY `dept_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `massage`
--
ALTER TABLE `massage`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sequrity_question`
--
ALTER TABLE `sequrity_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
