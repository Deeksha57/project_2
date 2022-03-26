
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



-- Database: `test_db`

-- Table structure for table `users`

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'elias', '202cb962ac59075b964b07152d234b70', 'elias');

--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;


-- Table structure for table `contact`

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `contact` ( `name`, `email`) VALUES
('ela', 'something@gmail.com');

ALTER TABLE `contact`
  ADD PRIMARY KEY (`name`);

-- Table structure for table `reviews`
  CREATE TABLE `reviews` (
  `pros` varchar(255) NOT NULL,
  `cons` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `rating` int(5) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `review` ( `pros`, `cons`, `review`, `rating`) VALUES
('effecient', 'responsless','good product', 5);

ALTER TABLE `review`
ADD PRIMARY KEY (`rating`);

-- Table structure for table `p_reg`
  CREATE TABLE `p_reg` (
  `aadhar` bigint(20) NOT NULL,
  `phone`  bigint(20)  NOT NULL,
  `lmp` date  NOT NULL,
  `edd` date  NOT NULL,
  `m_card`  bigint(20)  NOT NULL,
  `reg_date` date  NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `p_reg` ( `aadhar`, `phone`, `lmp`, `edd`, `m_card`, `reg_date`) VALUES
('$aadhar','$phone','$lmp','$edd','$m_card','$reg_date');

ALTER TABLE `p_reg`
ADD PRIMARY KEY (`phone`);

-- Table structure for table `n_reg`
  CREATE TABLE `n_reg` (
  `name` varchar(255) NOT NULL,
  `age` int(20) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255 NOT NULL,
  `address` varchar(255 NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `n_reg` ( `name`, `age`, `f_name`, `m_name`,`address`) VALUES
('abhi','2','prakash','lella','hunsur');

ALTER TABLE `n_reg`
ADD PRIMARY KEY (`name`);
--
--------

-- Table structure for table `attendance`
  CREATE TABLE `attendance` (
  `st_id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(5) NOT NULL,
  `status` VARCHAR(10) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `attendance` ( `st_id`, `name`, `age`, `status`) VALUES
('1', 'ali',' 2', A);

ALTER TABLE `attendance`
ADD PRIMARY KEY (`st_id`);
