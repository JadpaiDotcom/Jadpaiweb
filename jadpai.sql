-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 11:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadpai`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `buy_id` int(11) NOT NULL,
  `buy_date` datetime DEFAULT NULL,
  `order_order_id` int(11) NOT NULL,
  `employee_employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`buy_id`, `buy_date`, `order_order_id`, `employee_employee_id`) VALUES
(1, '2016-07-01 00:00:00', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_username` varchar(45) NOT NULL,
  `customer_password` varchar(45) NOT NULL,
  `customer_name` varchar(45) NOT NULL,
  `customer_lastname` varchar(45) DEFAULT NULL,
  `customer_tel` varchar(45) NOT NULL,
  `customer_address` varchar(45) NOT NULL,
  `customer_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='			';

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_username`, `customer_password`, `customer_name`, `customer_lastname`, `customer_tel`, `customer_address`, `customer_status`) VALUES
(1, 'customer1', 'customer1', 'NameCus1', 'LastMer1', '0801234567', 'หอ 17', 1),
(2, 'customer2', 'customer2', 'NameCus2', 'LastMer2', '0801234567', 'หอ 7', 1),
(3, 'customer3', 'customer3', 'NameCus3', 'LastMer3', '0801234567', 'หอ 5', 1),
(4, 'a', 'a', 'a', 'a', 'a', 'a', 1),
(5, 'b', 'b', 'b', 'b', 'b', 'b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_username` varchar(45) NOT NULL,
  `employee_password` varchar(45) NOT NULL,
  `employee_name` varchar(45) NOT NULL,
  `employee_lastname` varchar(45) DEFAULT NULL,
  `employee_type` int(11) NOT NULL,
  `employee_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_username`, `employee_password`, `employee_name`, `employee_lastname`, `employee_type`, `employee_status`) VALUES
(1, 'admin', 'admin', 'NameJad', 'LastPai', 1, 1),
(2, 'manager', 'manager', 'NameMana', 'LastGer', 2, 1),
(3, 'user', 'user', 'NameUs', 'LastEr', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_place` varchar(45) NOT NULL,
  `sale_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_receive_date` date DEFAULT NULL,
  `order_date` datetime NOT NULL,
  `customer_customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_place`, `sale_status`, `order_status`, `order_receive_date`, `order_date`, `customer_customer_id`) VALUES
(1, '5', 1, 1, NULL, '2016-07-01 02:03:26', 1),
(4, 'a', 1, 1, NULL, '2016-07-01 02:52:20', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order_has_product`
--

CREATE TABLE `order_has_product` (
  `order_order_id` int(11) NOT NULL,
  `product_product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_has_product`
--

INSERT INTO `order_has_product` (`order_order_id`, `product_product_id`, `order_qty`) VALUES
(1, 1, 2),
(1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id_order_status` int(11) NOT NULL,
  `order_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id_order_status`, `order_name`) VALUES
(1, 'รอดำเนินการ'),
(2, 'อยู่ในช่วงดำเนินการ'),
(3, 'เสร็จสิน'),
(4, 'ยกเลิกการสั่งซื้อ');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_cost` varchar(45) NOT NULL,
  `product_status` int(11) NOT NULL,
  `product_link` varchar(100) DEFAULT NULL,
  `product_type` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_cost`, `product_status`, `product_link`, `product_type`) VALUES
(1, 'ข้าวกระเพราหมู ไข่ดาว', '40', 1, 'food/f1.png', '1'),
(2, 'ข้าวคลุกกระปิ', '45', 1, 'food/f2.png', '1'),
(3, 'ราเมง', '50', 1, 'food/f3.png', '1'),
(4, 'ก๋วยเตี๋ยวเรือ', '40', 1, 'food/f4.png', '1'),
(5, 'ข้าวผัดกุ้ง', '40', 1, 'food/f5.png', '1'),
(6, 'slupee', '22', 1, 'drink/w1.png', '3'),
(7, 'น้ำเปล่า', '15', 1, 'drink/w2.png', '3'),
(8, 'โค๊ก', '18', 1, 'drink/w3.png', '3'),
(9, 'สไปร์', '18', 1, 'drink/w4.png', '3'),
(10, 'ข้าวโพด Toro', '25', 1, 'snack/s1.png', '2'),
(11, 'ช๊อคโกแลตKitkat', '15', 1, 'snack/s3.png', '2'),
(12, 'เลย์', '22', 1, 'snack/s4.png', '2'),
(13, 'เถ้าแก่น้อย', '22', 1, 'snack/s5.png', '2'),
(14, 'ผงซักฟอก', '90', 1, 'etc/etc1.png', '4'),
(15, 'สบู่ Protect', '20', 1, 'etc/etc2.png', '4'),
(16, 'แปรงสีฟัน', '35', 1, 'etc/etc3.png', '4'),
(17, 'ผ้าอนามัย', '20', 1, 'etc/etc4.png', '4'),
(18, 'ยาสีฟัน', '22', 1, 'etc/etc5.png', '4'),
(19, 'น้ำยาลบคำผิด', '55', 1, 'sta/sta1.png', '5'),
(20, 'Post-it', '45', 1, 'sta/sta2.png', '5'),
(21, 'ปากกาลูกลื่น(สีน้ำเงิน)', 'ุ7', 1, 'sta/sta3.png', '5'),
(22, 'ปากกาเน้นคำ', '25', 1, 'sta/sta4.png', '5'),
(23, 'สมุด', '20', 1, 'sta/sta5.png', '5'),
(24, 'ขนมปังฟาร์มเฮ้าส์', '35', 1, 'snack/s6.png', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sale_status`
--

CREATE TABLE `sale_status` (
  `id_sale_status` int(11) NOT NULL,
  `sale_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale_status`
--

INSERT INTO `sale_status` (`id_sale_status`, `sale_name`) VALUES
(1, 'ค้างชำระ'),
(2, 'จ่ายแล้ว');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`buy_id`),
  ADD KEY `fk_buy_order1_idx` (`order_order_id`),
  ADD KEY `fk_buy_employee1_idx` (`employee_employee_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_order_customer1_idx` (`customer_customer_id`),
  ADD KEY `fk_sale_status_idx` (`sale_status`),
  ADD KEY `fk_order_status_idx` (`order_status`);

--
-- Indexes for table `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD PRIMARY KEY (`order_order_id`,`product_product_id`),
  ADD KEY `fk_order_has_product_product1_idx` (`product_product_id`),
  ADD KEY `fk_order_has_product_order1_idx` (`order_order_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id_order_status`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sale_status`
--
ALTER TABLE `sale_status`
  ADD PRIMARY KEY (`id_sale_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `buy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `fk_buy_employee1` FOREIGN KEY (`employee_employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_buy_order1` FOREIGN KEY (`order_order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_customer1` FOREIGN KEY (`customer_customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_status` FOREIGN KEY (`order_status`) REFERENCES `order_status` (`id_order_status`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sale_status` FOREIGN KEY (`sale_status`) REFERENCES `sale_status` (`id_sale_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_has_product`
--
ALTER TABLE `order_has_product`
  ADD CONSTRAINT `fk_order_has_product_order1` FOREIGN KEY (`order_order_id`) REFERENCES `order` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_has_product_product1` FOREIGN KEY (`product_product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
