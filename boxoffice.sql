-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 01:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boxoffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_tbl`
--

CREATE TABLE `book_tbl` (
  `pk_book_id` int(11) NOT NULL,
  `No_of_seats` varchar(3) NOT NULL,
  `fk_show_id` int(11) NOT NULL,
  `fk_movie_id` int(11) NOT NULL,
  `fk_theater_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_tbl`
--

INSERT INTO `book_tbl` (`pk_book_id`, `No_of_seats`, `fk_show_id`, `fk_movie_id`, `fk_theater_id`) VALUES
(1, '4', 0, 0, 0),
(2, '3', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `pk_email_id` varchar(30) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Gender` tinyint(1) NOT NULL,
  `Address` text NOT NULL,
  `Pincode` int(11) NOT NULL,
  `Mobile_no` int(11) NOT NULL,
  `Bdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`pk_email_id`, `User_name`, `Password`, `Fname`, `Lname`, `Gender`, `Address`, `Pincode`, `Mobile_no`, `Bdate`) VALUES
('shahdevarshib@gmail.com', 'devarshi', '123456', 'shah', 'devarshi', 1, 'shahibaug', 380004, 940852032, '1997-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `pk-Feedback_is` int(11) NOT NULL,
  `fk_email_id` varchar(30) NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`pk-Feedback_is`, `fk_email_id`, `Feedback`) VALUES
(1, '', 'good movie...');

-- --------------------------------------------------------

--
-- Table structure for table `language_tbl`
--

CREATE TABLE `language_tbl` (
  `pk_Language_id` int(11) NOT NULL,
  `Language_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_tbl`
--

INSERT INTO `language_tbl` (`pk_Language_id`, `Language_name`) VALUES
(1, 'english'),
(2, 'Gujrati');

-- --------------------------------------------------------

--
-- Table structure for table `movie_tbl`
--

CREATE TABLE `movie_tbl` (
  `pk_Movie_id` int(11) NOT NULL,
  `Movie_name` varchar(50) NOT NULL,
  `Director` varchar(30) NOT NULL,
  `Img_path` varchar(250) NOT NULL,
  `Producer` varchar(30) NOT NULL,
  `Cast` varchar(30) NOT NULL,
  `Duration` varchar(9) NOT NULL,
  `Story` text NOT NULL,
  `Type` varchar(15) NOT NULL,
  `fk_Language_id` int(11) NOT NULL,
  `Rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_tbl`
--

INSERT INTO `movie_tbl` (`pk_Movie_id`, `Movie_name`, `Director`, `Img_path`, `Producer`, `Cast`, `Duration`, `Story`, `Type`, `fk_Language_id`, `Rating`) VALUES
(1, 'tiger zinda hai', 'sanjay leela ', 'https://i.ytimg.com/vi/bWnBv5NiXdE/maxresdefault.jpg', 'ramesh', 'salman khan', '2 hours', 'second part of ek tha tiger', 'now showing', 1, 80),
(2, 'Chal Man Jeetva Jaiye', 'Dipesh Shah', 'https://in.bmscdn.com/iedb/movies/images/website/poster/large/chal-man-jeetva-jaiye-et00066642-06-12-2017-10-36-18.jpg', 'Dipesh Shah', 'krishna-bhardwaj', '2:50', 'Chal Man Jeetva Jaiye recounts the riveting saga of a business family which finds itself at the crossroads, where one wrong decision could end up costing them everything. Through a host of interesting characters and situations, the film gives an insight into what it takes to be resilient in the face of adversity and eventually prevail over them.', '0', 1, 90);

-- --------------------------------------------------------

--
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `pk_Payment_id` int(11) NOT NULL,
  `fk_email_id` varchar(30) NOT NULL,
  `fk_book_id` int(11) NOT NULL,
  `Ticket_charge` int(11) NOT NULL,
  `Other_charge` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `screen_tbl`
--

CREATE TABLE `screen_tbl` (
  `pk_Screen_id` int(11) NOT NULL,
  `capacity` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `screen_tbl`
--

INSERT INTO `screen_tbl` (`pk_Screen_id`, `capacity`) VALUES
(1, '60');

-- --------------------------------------------------------

--
-- Table structure for table `show_tbl`
--

CREATE TABLE `show_tbl` (
  `pk_Show_id` int(11) NOT NULL,
  `fk_Movie_id` int(11) NOT NULL,
  `fk_theater_id` int(11) NOT NULL,
  `Start_time` varchar(5) NOT NULL,
  `Date` varchar(15) NOT NULL,
  `Price` int(11) NOT NULL,
  `fk_Screen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `show_tbl`
--

INSERT INTO `show_tbl` (`pk_Show_id`, `fk_Movie_id`, `fk_theater_id`, `Start_time`, `Date`, `Price`, `fk_Screen_id`) VALUES
(1, 1, 1, '9.00', '2018-01-01 00:0', 100, 1),
(2, 2, 2, '10:30', '2018-01-02 00:0', 110, 2);

-- --------------------------------------------------------

--
-- Table structure for table `theater_tbl`
--

CREATE TABLE `theater_tbl` (
  `pk_theater_id` int(11) NOT NULL,
  `theater_name` varchar(30) NOT NULL,
  `theater_add` text NOT NULL,
  `No_of_screen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theater_tbl`
--

INSERT INTO `theater_tbl` (`pk_theater_id`, `theater_name`, `theater_add`, `No_of_screen`) VALUES
(1, 'city gold', 'ashram road', 4),
(2, 'City Gold', 'Bopal', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_tbl`
--
ALTER TABLE `book_tbl`
  ADD PRIMARY KEY (`pk_book_id`);

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`pk_email_id`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`pk-Feedback_is`);

--
-- Indexes for table `language_tbl`
--
ALTER TABLE `language_tbl`
  ADD PRIMARY KEY (`pk_Language_id`);

--
-- Indexes for table `movie_tbl`
--
ALTER TABLE `movie_tbl`
  ADD PRIMARY KEY (`pk_Movie_id`);

--
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`pk_Payment_id`);

--
-- Indexes for table `screen_tbl`
--
ALTER TABLE `screen_tbl`
  ADD PRIMARY KEY (`pk_Screen_id`);

--
-- Indexes for table `show_tbl`
--
ALTER TABLE `show_tbl`
  ADD PRIMARY KEY (`pk_Show_id`);

--
-- Indexes for table `theater_tbl`
--
ALTER TABLE `theater_tbl`
  ADD PRIMARY KEY (`pk_theater_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
