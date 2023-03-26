-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 03:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testare`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `cnp` int(14) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `work_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `cnp`, `file_name`, `created_at`, `updated_at`, `work_id`) VALUES
(86, 'trterter', 'tertertert', 'erterterte', 456567575, '', '2023-03-16 12:01:49', '2023-03-20 10:44:55', 1),
(97, 'rwrewr', 'werwerwe', 'rwerwerw', 0, '', '2023-03-16 12:01:49', '2023-03-20 10:45:16', 2),
(98, 'rwerwerwe', 'werwerw', 'werwrwerw', 3453464, '', '2023-03-16 12:01:49', '2023-03-20 10:45:30', 3),
(104, 'tweter', 'tertert', 'ertert', 767877867, '', '2023-03-16 12:30:40', '2023-03-20 11:16:36', 3),
(106, 'gtrafsdfsdfs', '56546456', '4564565', 44564564, '', '2023-03-17 08:42:22', '2023-03-20 11:16:55', 1),
(107, 'gfdhfghfgh', 'fhfghfh', 'fghfghfghfg', 2147483647, '', '2023-03-17 09:12:51', '2023-03-20 11:17:03', 3),
(108, 'jghjgj', 'ghjghjgj', '876878', 2147483647, '', '2023-03-17 09:12:57', '2023-03-20 11:17:16', 2),
(109, 'yrtyrtyrt', 'yrtyrty', 'rtyrtyrty', 7675675, '', '2023-03-17 11:56:06', '2023-03-20 11:17:09', 1),
(111, 'yrtyrtyrt', 'yrtyrty', 'rtyrtyrty', 7675675, '', '2023-03-17 11:56:07', '2023-03-20 11:17:23', 1),
(114, 'ewwdsa', 'asdasdas', 'dasdasdas', 2147483647, 'sample.pdf', '2023-03-17 13:39:26', '2023-03-20 11:17:52', 1),
(120, 'fsdgdfg', 'gdfgdgfsdfs', 'fsdfsdfsfs', 75675757, 'file_example_XLS_10.xls', '2023-03-20 08:40:12', '2023-03-20 11:17:44', 3),
(121, 'dimas', 'dimas@mailo.com', '543534534534', 2147483647, 'file_example_XLS_10.xls', '2023-03-20 09:06:53', '2023-03-20 11:17:30', 3),
(122, 'alisa', 'aslisa@mail.com', '08888888', 1111111111, 'file-sample_100kB.doc', '2023-03-20 09:07:49', '2023-03-20 11:17:37', 2),
(126, 'gtrafsdfsdfs', '56546456', '4564565', 44564564, '', '2023-03-17 08:42:22', '2023-03-17 08:42:22', 2),
(127, 'tryty', 'rtyrty', 'rtyrty', 67878678, 'file-sample_100kB.doc', '2023-03-20 12:54:29', '2023-03-20 12:54:29', 0),
(128, 'abaei', 'ababei.com', '090909090', 1234567890, 'file-sample_100kB.doc', '2023-03-20 12:55:06', '2023-03-20 12:55:06', 0),
(129, 'dias', 'dias@mail.com', '3243254435', 2147483647, 'file-sample_100kB.doc', '2023-03-20 13:12:09', '2023-03-20 13:12:09', 1),
(130, 'marian', 'marin', '6476567', 67567567, 'file-sample_100kB.doc', '2023-03-20 13:12:39', '2023-03-20 13:12:39', 2),
(131, 'bora', 'bora@mail.com', '076575675', 567567567, 'file_example_XLS_10.xls', '2023-03-20 13:13:14', '2023-03-20 13:13:14', 3),
(132, 'dorina', 'gdgdfg', 'dfgdfg', 2147483647, 'file-sample_100kB.doc', '2023-03-20 13:41:55', '2023-03-20 13:41:55', 0),
(133, 'dorina', 'dorina', '564645', 5464645, 'file_example_XLS_10.xls', '2023-03-20 13:43:03', '2023-03-20 14:00:50', 2);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `workID` int(11) NOT NULL,
  `workName` varchar(50) NOT NULL,
  `workDescrip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`workID`, `workName`, `workDescrip`) VALUES
(1, 'Project Manager', 'dsertggdfgdfgdf'),
(2, 'Programer', 'gdfgfsavfgfdhrtuytjhhfghfgdr'),
(3, 'Tester', 'sadfdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`workID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `workID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
