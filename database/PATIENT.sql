-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 21, 2021 lúc 08:20 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `PATIENT`
--

CREATE TABLE `PATIENT` (
  `patientid` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `created_on` date NOT NULL,
  `modified_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `PATIENT`
--

INSERT INTO `PATIENT` (`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, `mobile`, `email`, `height`, `weight`, `blood_type`, `created_on`, `modified_on`) VALUES
(1, 'Nam', 'Phan Hoài', '2000-02-24', 'Nam', 356645052, 'phanhoainam2402@gmail.com', '1m69', '55kg', 'O', '2021-10-20', '2021-10-21'),
(2, 'Ngân', 'Phạm Kim', '2001-11-30', 'Nữ', 962225946, 'kimngan3011@gmail.com', '1m50', '44', 'A', '2021-10-12', '2021-10-16'),
(3, 'Vân', 'Nguyễn Thị', '1999-08-01', 'Nữ', 357583492, 'nguyenvan99@gmail.com', '1m55', '53', 'B', '2021-09-14', '2021-10-19'),
(4, 'Nghĩa', 'Đinh Hữu', '2000-07-16', 'Nam', 345634523, 'dinhnghia2k@gmail.com', '1m66', '59', 'AB', '2021-08-09', '2021-10-10');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `PATIENT`
--
ALTER TABLE `PATIENT`
  ADD PRIMARY KEY (`patientid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `PATIENT`
--
ALTER TABLE `PATIENT`
  MODIFY `patientid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
