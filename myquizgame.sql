-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 16, 2023 at 09:30 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myquizgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `dsaquiz`
--

DROP TABLE IF EXISTS `dsaquiz`;
CREATE TABLE IF NOT EXISTS `dsaquiz` (
  `Question_id` int DEFAULT NULL,
  `question` varchar(80) DEFAULT NULL,
  `option1` varchar(80) DEFAULT NULL,
  `option2` varchar(80) DEFAULT NULL,
  `option3` varchar(80) DEFAULT NULL,
  `option4` varchar(80) DEFAULT NULL,
  `correct_answer` varchar(80) DEFAULT NULL
);

--
-- Dumping data for table `dsaquiz`
--

INSERT INTO `dsaquiz` (`Question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(3, 'What is the location of a parent node for any arbitary node i?\r\n', 'a) (i/2) position', 'b) (i+1)/ position\r\n', 'c) floor(i/2) position\r\n', 'd) ceil(i/2) position', 'c) floor(i/2) position\r\n'),
(1, ' What is the space complexity of searching in a heap?\r\n', 'a) O(logn)\r\n', 'b) O(n)\r\n', 'c) O(1)\r\n', 'd) O(nlogn)', 'b) O(n)\r\n'),
(2, 'What is the best case complexity in building a heap?\r\n', 'a) O(nlogn)\r\n', 'b) O(n2)\r\n', 'c) O(n*longn *logn)\r\n', 'd) O(n)', 'd) O(n)');

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

DROP TABLE IF EXISTS `java`;
CREATE TABLE IF NOT EXISTS `java` (
  `Question_id` int DEFAULT NULL,
  `question` varchar(80) DEFAULT NULL,
  `option1` varchar(80) DEFAULT NULL,
  `option2` varchar(80) DEFAULT NULL,
  `option3` varchar(80) DEFAULT NULL,
  `option4` varchar(80) DEFAULT NULL,
  `correct_answer` varchar(80) DEFAULT NULL
);

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`Question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(1, ' Who invented Java Programming?\r\n', 'a) Guido van Rossum\r\n', 'b) James Gosling\r\n', 'c) Dennis Ritchie\r\n', 'd) Bjarne Stroustrup', 'b) James Gosling\r\n'),
(2, 'Which statement is true about Java?\r\n', 'a) Java is a sequence-dependent programming language\r\n', 'b) Java is a code dependent programming language\r\n', 'c) Java is a platform-dependent programming language\r\n', 'd) Java is a platform-independent programming language', 'd) Java is a platform-independent programming language'),
(3, ' Which component is used to compile, debug and execute the java programs?\r\n', 'a) JRE\r\n', 'b) JIT\r\n', 'c) JDK\r\n', 'd) JVM', 'c) JDK\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `networkquiz`
--

DROP TABLE IF EXISTS `networkquiz`;
CREATE TABLE IF NOT EXISTS `networkquiz` (
  `Question_id` int DEFAULT NULL,
  `question` varchar(80) DEFAULT NULL,
  `option1` varchar(80) DEFAULT NULL,
  `option2` varchar(80) DEFAULT NULL,
  `option3` varchar(80) DEFAULT NULL,
  `option4` varchar(80) DEFAULT NULL,
  `correct_answer` varchar(80) DEFAULT NULL
);

--
-- Dumping data for table `networkquiz`
--

INSERT INTO `networkquiz` (`Question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(1, ' The physical layer is concerned with ___________\r\n', 'a) bit-by-bit delivery\r\n', 'b) process to process delivery\r\n', 'c) application to application delivery\r\n', 'd) port to port delivery', 'a) bit-by-bit delivery\r\n'),
(2, 'Which transmission media provides the highest transmission speed in a network?\r\n', 'a) coaxial cable\r\n', 'b) twisted pair cable\r\n', 'c) optical fiber', 'd) electrical cable', 'c) optical fiber'),
(3, 'Bits can be sent over guided and unguided media as analog signal by ___________\r', 'a) digital modulation\r\n', 'b) amplitude modulation\r\n', 'c) frequency modulation\r\n', 'd) phase modulation', 'a) digital modulation\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `operatingsystem`
--

DROP TABLE IF EXISTS `operatingsystem`;
CREATE TABLE IF NOT EXISTS `operatingsystem` (
  `Question_id` int DEFAULT NULL,
  `question` varchar(80) DEFAULT NULL,
  `option1` varchar(80) DEFAULT NULL,
  `option2` varchar(80) DEFAULT NULL,
  `option3` varchar(80) DEFAULT NULL,
  `option4` varchar(80) DEFAULT NULL,
  `correct_answer` varchar(80) DEFAULT NULL
);

--
-- Dumping data for table `operatingsystem`
--

INSERT INTO `operatingsystem` (`Question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(1, 'What is an operating system?\r\n', 'a) collection of programs that manages hardware resources\r\n', 'b) system service provider to the application programs\r\n', 'c) interface between the hardware and application programs\r\n', 'd) all of the mentioned', 'd) all of the mentioned'),
(2, 'To access the services of operating system, the interface is provided by the ___', 'a) System calls\r\n', 'b) API\r\n', 'c) Library\r\n', 'd) Assembly instructions', 'a) System calls\r\n'),
(3, 'Which one of the following is not true?\r\n', 'a) kernel is the program that constitutes the central core of the operating syst', 'b) kernel is the first part of operating system to load into memory during booti', 'c) kernel is made of various modules which can not be loaded in running operatin', 'd) kernel remains in the memory during the entire computer session', 'c) kernel is made of various modules which can not be loaded in running operatin');

-- --------------------------------------------------------

--
-- Table structure for table `pythonquiz`
--

DROP TABLE IF EXISTS `pythonquiz`;
CREATE TABLE IF NOT EXISTS `pythonquiz` (
  `Question_id` int DEFAULT NULL,
  `question` varchar(80) DEFAULT NULL,
  `option1` varchar(80) DEFAULT NULL,
  `option2` varchar(80) DEFAULT NULL,
  `option3` varchar(80) DEFAULT NULL,
  `option4` varchar(80) DEFAULT NULL,
  `correct_answer` varchar(80) DEFAULT NULL
);

--
-- Dumping data for table `pythonquiz`
--

INSERT INTO `pythonquiz` (`Question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`) VALUES
(2, 'Which type of Programming does Python support?\r\n', 'a) object-oriented programming\r\n', 'b) structured programming\r\n', 'c) functional programming\r\n', 'd) all of the mentioned', 'd) all of the mentioned'),
(3, ' Python case sensitive when dealing with identifiers?\r\n', 'a) no\r\n', 'b) yes\r\n', 'c) machine dependent\r\n', 'd) none of the mentioned', 'b) yes\r\n'),
(1, 'Who developed Python Programming Language?\r\n\r\n', 'a) Wick van Rossum\r\n', 'b) Rasmus Lerdorf\r\n', 'c) Guido van Rossum\r\n', 'd) Niene Stom', 'c) Guido van Rossum');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(50) DEFAULT NULL,
  `mobile` int DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
);

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `mobile`, `email`, `password`) VALUES
('kusum lata yadav', 2147483647, 'kltata233@gmail.com', 'Kunal@123'),
('KUNAL YADAV', 2147483647, 'yadavkunal123456789@gmail.com', 'Kunal@234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
