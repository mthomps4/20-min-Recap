-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2016 at 04:57 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudytest`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudyplayground`
--

CREATE TABLE `crudyplayground` (
  `id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `notes` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crudyplayground`
--

INSERT INTO `crudyplayground` (`id`, `title`, `date`, `description`, `notes`, `category`) VALUES
(1, 'Seed List', '2016-10-07', 'Create A Seed List of Data. ', 'Create a seed list of data using phpMyAdmin. Use this data as filler to show content and test both the index.php and details.php page. ', 'Web Development'),
(2, 'Details Page', '2016-10-07', 'Create a details page from the seed data. ', 'Using the database and table. Use the seed data to populate a details page. This page will include the individual Title, Date set, and Notes about the project. ', 'Web Development'),
(3, 'Add Task', '2016-10-07', 'Add Task to Database', 'Add function &#39;add_task&#39; \r\nUse in Index.php on form POST. \r\nIf values empty display Error_message \r\nelse add and refresh page.', 'Web Development'),
(4, 'Blue 42', '2016-10-08', 'Football background', 'Go SPorts Ballz', 'Other'),
(5, 'One More Go', '2016-10-08', 'HERE WE GO', 'OMAHA!', 'Other'),
(6, 'New Task', '2016-10-06', '1', '2311', 'Other'),
(7, 'Testing 123', '2016-10-05', '456', 'High Ball', 'Other'),
(8, 'Test Title 2321', '2016-10-04', 'Add Item to Database', 'dafdawefasdwdasfdsadf', 'Other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudyplayground`
--
ALTER TABLE `crudyplayground`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudyplayground`
--
ALTER TABLE `crudyplayground`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
