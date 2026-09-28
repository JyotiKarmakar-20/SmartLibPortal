-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2025 at 11:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `userid`, `password`) VALUES
(101, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `author` varchar(150) NOT NULL,
  `category` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_id`, `title`, `author`, `category`, `quantity`, `added_on`) VALUES
(3, 'B103', 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 'Novel', 15, '2024-02-05'),
(4, 'B104', 'Think and Grow Rich', 'Napoleon Hill', 'Education', 8, '2024-03-12'),
(5, 'B105', 'Introduction to Computer Science', 'J. Glenn Brookshear', 'Technology', 5, '2024-05-18'),
(6, 'B101', 'The Great Gatsby', 'F. Scott Fitzgerald', 'Fiction', 12, '2024-01-10'),
(7, 'B102', 'To Kill a Mockingbird', 'Harper Lee', 'Fiction', 15, '2024-02-05'),
(8, 'B106', 'Clean Code', 'Robert C. Martin', 'Programming', 10, '2024-06-15'),
(9, 'B107', 'The Psychology of Money', 'Morgan Housel', 'Finance', 25, '2024-07-08'),
(10, 'B108', 'Sapiens', 'Yuval Noah Harari', 'History', 14, '2024-08-20'),
(11, 'B109', 'The Power of Habit', 'Charles Duhigg', 'Self-Help', 30, '2024-09-10'),
(12, 'B110', 'Atomic Habits', 'James Clear', 'Self-Help', 28, '2024-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_books`
--

CREATE TABLE `borrowed_books` (
  `borrow_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` varchar(11) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrowed_books`
--

INSERT INTO `borrowed_books` (`borrow_id`, `user_id`, `book_id`, `issue_date`, `return_date`) VALUES
(10, 1, 'B101', '2024-11-20', '2024-11-27'),
(11, 2, 'B103', '2024-11-18', '2024-11-25'),
(12, 3, 'B105', '2024-11-22', '2024-11-29'),
(13, 4, 'B102', '2024-11-21', '2024-11-28'),
(14, 1, 'B103', '2025-11-29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `userid` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `userid`, `password`, `mobile`) VALUES
(1, 'Jyoti Karmakar', 'jyoti123@gmail.com', 'j1234', 9123456780),
(2, 'Shobha Mahato', 'shobha@gmail.com', 's123', 9254316780),
(3, 'soma', 'soma@gmail.com', 'soma123', 8995567833),
(4, 'Preeti ', 'ppp@gmail.com', 'ppp123', 8712345690),
(5, 'Somya Kar', 'somya123@gmail.com', 'gthyg@224', 6748658687);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`userid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_id` (`book_id`);

--
-- Indexes for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `borrowed_books`
--
ALTER TABLE `borrowed_books`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
