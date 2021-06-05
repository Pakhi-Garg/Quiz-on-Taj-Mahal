-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 03:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tajmahal`
--

CREATE TABLE `tajmahal` (
  `qno` int(11) NOT NULL,
  `qname` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tajmahal`
--

INSERT INTO `tajmahal` (`qno`, `qname`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(1, 'Where is the Taj Mahal located?', 'Agra, India', 'Delhi, India', 'Lucknow, India', 'Mumbai, India', 'Agra, India'),
(2, 'Who was the architect of Taj Mahal?', 'Mumtaz Mahal', 'Shah Jahan', 'Ustad Ahmad Lahuari', 'Yamuna', 'Ustad Ahmad Lahouri'),
(3, 'When was the Taj Mahal declared a winner of the New 7 Wonders of the World (2000–2007) initiative?', '2010', '2005', '2011', '2007', '2007'),
(4, 'Who was the Persian wife of the Mughal emperor whom the Taj Mahal was built for?\r\n', 'Gauhara Begum\r\n', 'Mumtaz Mahal\r\n', 'Gur-e Amir\r\n', 'Noor Mahal', 'Mumtaz Mahal'),
(5, 'Which Mughal Emperor built the Taj Mahal?\r\n\r\n ', 'Jahangir\r\n ', 'Babur\r\n ', 'Akbar\r\n ', 'Shah Jahan', 'Shah Jahan'),
(6, 'Of what material is the outside of the Taj Mahal mainly made?\r\n\r\n ', 'Ivory', 'Gold painted stone', 'Gray stone', 'White marble', 'White marble'),
(7, 'In what year did the Taj Mahal become a UNESCO World Heritage Site?', '1954', '1889', '1983', '1943', '1983'),
(8, 'About how many years did it take to build the main body of the Taj Mahal (excluding the surrounding structures)?', '12', '10', '14', '16', '12'),
(9, 'When is the Taj Mahal open for night viewing?', 'Only the night of the full moon', 'One night before, the night of, and one night after the full moon', 'The night of the full moon, and the night after', 'Two nights before, the night of, and two nights after the full moon', 'Two nights before, the night of, and two nights after the full moon'),
(10, 'Is it true that there was going to be a black Taj Mahal built across the river from the original one?', 'Yes', 'No', '-', '-', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tajmahal`
--
ALTER TABLE `tajmahal`
  ADD PRIMARY KEY (`qno`),
  ADD UNIQUE KEY `qname` (`qname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tajmahal`
--
ALTER TABLE `tajmahal`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
