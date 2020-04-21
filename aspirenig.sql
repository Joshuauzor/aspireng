-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 07:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aspirenig`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `role` enum('admin') NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `role`, `password`) VALUES
(1, 'Joshua', 'Uzor', 'Joshuauzor10@gmail.com', 'admin', '$2y$10$r6OzGrQpE3LDfvAfqtEuwOf1RnR/v5UMd1JcRBEvtb1gYLo4UzHUq'),
(2, 'vbhjnkml', 'vbnm', 'bhnjmkbn@bjdn', 'admin', '$2y$10$cSf2m0GSQK4zmMlT539EqeTEOfDDhdtxQL0t8J0dcZUIIqmOcQduq'),
(3, 'habjnkm', 'bhjnmk', 'bnk@hik', 'admin', '$2y$10$fkigG1IvQGyYgno3o1uTn.cplIn5nDo2YvtzmFnIiy3dz8.i3HHNO'),
(4, 'vbhjnkml', 'vbnm', 'bhnjmkbn@bjd', 'admin', '$2y$10$jzf2BBVrXHdbxgqwZOEEke7DJ1qrAoiJn/znxp9YGUrHa5k7YNY02'),
(5, 'hdiyas', 'gyhjgsdc', 'yuasdtg@fdvasfb', 'admin', '$2y$10$vBUsjtEGPBZr2EGNEe0x3O9Jzg6aNDqDcZUrpTqbOwcscwg58aerW'),
(6, 'Charles', 'Archibong', 'charlesarchibong10@gmail.com', 'admin', '$2y$10$ofjfyiu.ZlZiJJjlYIaBi.mtqfZ2FnuAWi8VEMWZGU8GXzUejzaY2'),
(7, 'promise', 'uwajimgba', 'donsirpronto@yahoo.com', 'admin', '$2y$10$9v.to8nzd60BLjSVO3dS8.7PookuNCzGCIJA60AB5mtEpGTphs2.m');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `category`, `description`, `image`) VALUES
(2, 'kitchen Technician', 'Fix your Oven, Dish washer, Cooker and other kitchen equipments with the technicians you can trust', 'kitchen.jpg'),
(3, 'Welder', 'Request for an experience and reliable welder to fix your equipments\r\n\r\n', 'bb4.jpg'),
(4, 'cold room technician', 'Get the best technician in town to fix your cold room appliances.', 'coldroom.jpg'),
(5, 'Laundry technician', 'Request for the best technician to fix your laundry appliances like your washing machine, dryer etc', 'laundry.jpg'),
(7, 'Bore driller', 'Get the best borehole driller to fix drill your borehole and fix your borehole equipment. Our drillers have experience in whatsoever land typography.', 'borehole.jpg'),
(8, 'Electrician', 'We provide you with the best and lasting solution to your electrical appliances and electrical connections', 'ab2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `no` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `technician_id` int(11) NOT NULL,
  `request` text NOT NULL,
  `location` text NOT NULL,
  `status` enum('pending','approved','declined','completed') NOT NULL DEFAULT 'pending',
  `phone` text NOT NULL,
  `username` varchar(300) NOT NULL,
  `request_date` datetime NOT NULL,
  `approved_date` datetime DEFAULT NULL,
  `approved_by` text,
  `declined_date` datetime DEFAULT NULL,
  `declined_by` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`no`, `category_id`, `user_id`, `technician_id`, `request`, `location`, `status`, `phone`, `username`, `request_date`, `approved_date`, `approved_by`, `declined_date`, `declined_by`) VALUES
(1, 5, 6, 0, 'I need to urgently fix my washing machine', 'Lagos', 'approved', '', '', '2020-03-30 07:24:48', '2020-03-31 03:04:17', 'joshua uzor', '2020-03-31 01:34:48', 'joshua uzor'),
(2, 2, 1, 0, 'I want to fix my oven immediately', 'Lagos', 'declined', '', '', '2020-03-30 07:27:04', NULL, NULL, '2020-03-31 07:15:39', 'joshua uzor'),
(3, 6, 1, 0, 'gvdbhsjnk', 'bnsdmaf', 'pending', '', '', '2020-03-30 07:35:32', NULL, NULL, NULL, NULL),
(4, 5, 8, 0, 'I need a technician to fix my washing machine', 'Lagos', 'approved', '', '', '2020-03-31 12:26:47', '2020-03-31 07:29:32', 'joshua uzor', NULL, NULL),
(5, 6, 9, 0, 'need water', 'Marain', 'pending', '', '', '2020-03-31 03:03:08', NULL, NULL, NULL, NULL),
(6, 4, 1, 0, 'I need to fix my coldroom immediately', 'Ikeja', 'declined', '', '', '2020-03-31 07:21:38', NULL, NULL, '2020-03-31 07:23:44', 'joshua uzor'),
(7, 3, 1, 0, 'need welder', 'lahos', 'declined', '', '', '2020-03-31 07:29:14', NULL, NULL, '2020-03-31 07:30:41', 'joshua uzor'),
(8, 4, 1, 0, 'xdcfmkl', 'fxdgfhgjhj', 'approved', '', '', '2020-03-31 07:38:11', '2020-03-31 07:38:47', 'joshua uzor', NULL, NULL),
(9, 5, 8, 0, 'cgnkml,', 'xcvbnm', 'approved', '', '', '2020-03-31 07:42:54', '2020-03-31 04:30:59', 'joshua uzor', NULL, NULL),
(10, 4, 8, 0, 'I need to fix my cold room', 'Ikeja', 'approved', '', '', '2020-03-31 04:31:36', '2020-03-31 04:31:52', 'joshua uzor', NULL, NULL),
(11, 4, 8, 0, 'I need to fix my this cold room na', 'Island', 'declined', '', '', '2020-03-31 04:32:26', NULL, NULL, '2020-03-31 04:34:37', 'joshua uzor'),
(12, 7, 1, 0, 'higxghjmhn', 'Lagos', 'pending', '', '', '2020-04-07 02:06:09', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(11) NOT NULL,
  `firstname` varchar(300) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `role` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `firstname`, `lastname`, `email`, `role`, `password`) VALUES
(2, 'joshua', 'uzor', 'Joshuauzor10@gmail.com', 'electrician', '$2y$10$k1Y8BsaxfbIAEgw.dj2wbuM4w93n0NqJfVQP4zOx8tM8N3bUrW7Ny'),
(3, 'charles', 'archibong', 'charlesarchibong@gmail.com', 'borehole', '$2y$10$Eg2Of0IrDkaCT4vH.fuuYuTNTFpfdRs9IhN2e4RJ/t/MnBohtLSCW');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `role` enum('user') NOT NULL,
  `password` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `location`, `phone`) VALUES
(1, 'Joshua', 'Joshuauzor10@gmail.com', 'user', '$2y$10$m/b663eKJn9sdcjdUDi1o.oe1HJ0iQ.Ca/R3eLrG42wtlWQ8z.tdS', 'Lagos', '08160905978'),
(2, 'giddysmart', 'giddysmart@gmail.com', 'user', '$2y$10$kIj35WA48Al0PjpkzRuZfucZ0W8YYLxY6ZBZ7gwo.u4gp/L7SVzeG', 'Oron', '08160589513'),
(3, 'emma', 'emmaakeh@gmail.com', 'user', '$2y$10$gtLW15bZ1X9Kzd8H1Aj9Be0COPCKt4kNlEnTZ5anASgJ/CDjbC7FW', 'Ikom', '08118594032'),
(4, 'zealnetworks', 'charlesarchibong10@gmail.com', 'user', '$2y$10$8780gQu.65ww5tqi.IM1k.cZI/hw6DEHHIgc.lk1AypVBrnvi1Kqa', 'Calabar', '09039311559'),
(5, 'promise', 'donsirpronto@yahoo.com', 'user', '$2y$10$8eznEWrV3ETdlaILI1Q3BeItU8kaCFZ5TopOWr/mUAov76SPdlixG', 'lagos', '08112224189'),
(7, 'Henry', 'henry10@gmail.com', 'user', '$2y$10$0v4bkAcIjd5jS8jQuwa5z.gDqIBSGBmEFB2hHMgl.WS1i/y6WJci.', 'Abuja', '08027865853'),
(8, 'Vkystar', 'victor.uwaj@gmail.com', 'user', '$2y$10$CfyKzcrorEd4Za5jRSiUKOPn5cJcUmvJ/uMgdyaBZAbPevIE/2OOG', 'Lagos', '08022491036'),
(9, 'David', 'Davidokafor10@gmail.com', 'user', '$2y$10$8g1uwyblNp93DAkVeRF30elfLU6V0b6ii9Q7lhR.RzvBd5MHt9OE2', 'Calabar', '08125236718');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `id` (`no`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `technician`
--
ALTER TABLE `technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
