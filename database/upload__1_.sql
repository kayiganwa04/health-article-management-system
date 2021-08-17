-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 09:24 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload (1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger`
--

CREATE TABLE `blogger` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`id`, `fname`, `lname`, `email`, `tel`) VALUES
(1, 'jean paul', 'Turatsinze', 'me@gmail.com', 788240384),
(2, 'Davis', 'Rwabujegeri', 'dave@gmail.com', 788979767);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_image` varchar(200) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_image`, `post_author`, `post_title`, `post_description`, `created_at`) VALUES
(2, 'post_image/pre-2.png ', 'Ruhambiransina', 'infuenza', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam harum cupiditate natus dicta esse assumenda deserunt error quisquam vel eius dolore repellat, magni vitae illo, ipsum repudiandae eaque autem itaque.', '2021-08-14 21:53:44'),
(3, 'post_image/pre-3.png ', 'Nizeyimana', 'Cold', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam harum cupiditate natus dicta esse assumenda deserunt error quisquam vel eius dolore repellat, magni vitae illo, ipsum repudiandae eaque autem itaque.', '2021-08-14 21:53:53'),
(5, 'post_image/pre-5.png', 'fred', 'covid', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque molestiae totam ad omnis obcaecati perspiciatis. Accusantium illum vel voluptatibus, eum nobis incidunt distinctio numquam quibusdam. Necessitatibus praesentium aliquid maiores eaque!\r\n', '2021-08-14 21:54:39'),
(6, 'post_image/pre-6.png', 'Rwabujegeri', 'Cold', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque molestiae totam ad omnis obcaecati perspiciatis. Accusantium illum vel voluptatibus, eum nobis incidunt distinctio numquam quibusdam. Necessitatibus praesentium aliquid maiores eaque!', '2021-08-14 21:54:55'),
(7, 'post_image/protect-2.png', 'Parfait', 'Real Me', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, hic! Repudiandae doloribus possimus quam nemo temporibus, voluptatem magnam omnis dicta magni pariatur assumenda, et, at aut! Dolor vel voluptatem sapiente?', '2021-08-14 21:55:10'),
(8, 'post_image/protect-1.png', 'pastor gree', 'Life we Deserve', '   Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum assumenda culpa minima, ad necessitatibus magni iste natus facere doloremque ex delectus, inventore aliquam quaerat, error reiciendis beatae numquam consectetur quos!', '2021-08-14 21:17:30'),
(9, 'post_image/protect-3.png', 'test', 'test', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, hic! Repudiandae doloribus possimus quam nemo temporibus, voluptatem magnam omnis dicta magni pariatur assumenda, et, at aut! Dolor vel voluptatem sapiente?', '2021-08-14 21:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `post_user`
--

CREATE TABLE `post_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_user`
--

INSERT INTO `post_user` (`id`, `username`, `user_email`, `user_password`) VALUES
(1, 'kayiganwa', 'kayiganwa04@gmail.com', 'me@2020'),
(2, 'me', 'me@gmail.com', 'kayiganwa'),
(3, 'kalisa', 'kalisa@gmail.com', '17d20a397307c4d340d93ff6ad8c9075');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogger`
--
ALTER TABLE `blogger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_user`
--
ALTER TABLE `post_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogger`
--
ALTER TABLE `blogger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post_user`
--
ALTER TABLE `post_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
