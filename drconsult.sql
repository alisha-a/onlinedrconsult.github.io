-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 07:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drconsult`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdata`
--

CREATE TABLE `bookingdata` (
  `sno` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `actualnm` varchar(100) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingdata`
--

INSERT INTO `bookingdata` (`sno`, `p_name`, `actualnm`, `d_name`, `link`, `status`) VALUES
(1, 'jsjjd@gmail.com', '', '', '', 'success'),
(2, 'jsjjd@gmail.com', '', '', '', 'success'),
(3, 'jsjjd@gmail.com', '', '', '', 'success'),
(4, 'jsjjd@gmail.com', '', '', '', 'success'),
(5, 'jsjjd@gmail.com', '', '', '', 'success'),
(6, 'jsjjd@gmail.com', '', '', '', 'success'),
(7, 'jsjjd@gmail.com', '', '', '', 'success'),
(8, 'jsjjd@gmail.com', '', '', '', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Sid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `manufacturer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Sid`, `name`, `price`, `manufacturer`) VALUES
(1, 'Tramadol', 'Conzip', '178'),
(3, 'Tramadol', 'Conzip', '178'),
(4, 'Tramadol', 'Conzip', '178'),
(5, 'Tramadol', 'Conzip', '178'),
(6, 'Tramadol', 'Conzip', '178'),
(7, 'Tramadol', 'Conzip', '178'),
(8, 'Tramadol', 'Conzip', '178'),
(9, 'Tramadol', 'Conzip', '178'),
(10, 'Tramadol', 'Conzip', '178'),
(11, 'Tramadol', 'Conzip', '178'),
(12, 'Tramadol', 'Conzip', '178'),
(13, 'Tramadol', 'Conzip', '178'),
(14, 'Tramadol', 'Conzip', '178'),
(16, 'Tramadol', 'Conzip', '178'),
(18, 'Tramadol', 'Conzip', '178'),
(19, 'Aspirin', 'Deep mah', '112');

-- --------------------------------------------------------

--
-- Table structure for table `dregister`
--

CREATE TABLE `dregister` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `regid` varchar(100) NOT NULL,
  `regy` varchar(100) NOT NULL,
  `Specialization` varchar(100) NOT NULL,
  `pno` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dregister`
--

INSERT INTO `dregister` (`Id`, `Name`, `regid`, `regy`, `Specialization`, `pno`, `password`, `photo`) VALUES
(9, 'Mahima Chauhan', '78521', '2008', 'Orthopedic', '7891234321', 'bhavya', 'mahima1.jpg'),
(14, 'Sita Raman', '50394', '1992', 'Gynaecologist', '8900123112', 'sita123', 'sita.jpg'),
(15, 'Ashok Gopal', '65079', '2002', 'General Physician', '9008765678', 'ashok89', 'ashokdoc.jpg'),
(16, 'Niranjan S', '12542', '2016', 'Orthopedic', '8900989076', 'niranjan67', 'maledocc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `SNo` int(200) NOT NULL,
  `MedName` varchar(100) NOT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `Price` int(255) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`SNo`, `MedName`, `manufacturer`, `Price`, `Description`, `photo`) VALUES
(6, 'Tramadol', 'Conzip', 178, 'Tramadol is a pain medicine similar to an opioid and is classified as a synthetic opioid. It acts in the central nervous system (CNS) to relieve pain.\r\nTramadol is used to treat moderate to severe pain in adults. The extended-release form of tramadol is for around-the-clock treatment of pain. This form of tramadol is not for use on an as-needed basis for pain.\r\nSeizures have been reported in patients taking tramadol. Your risk of seizures is higher if you are taking higher doses than recommended. Seizure risk is also higher in those with a seizure disorder or those taking certain antidepressants or opioid medications.\r\n\r\nTramadol should not be used if you are suicidal or prone to addiction.\r\n\r\nYou should not take tramadol if you have severe breathing problems, a blockage in your stomach or intestines, or if you have recently used alcohol, sedatives, tranquilizers, narcotic medication, or an MAO inhibitor (isocarboxazid, linezolid, methylene blue injection, phenelzine, rasagiline, selegiline, tranylcypromine, and others).\r\n', 'tramadol.jpg'),
(8, 'Aspirin', 'Deep mah', 112, 'aspirin, also called acetylsalicylic acid, derivative of salicylic acid that is a mild nonnarcotic analgesic (pain reliever) useful in the relief of headache and muscle and joint aches. Aspirin is effective in reducing fever, inflammation, and swelling and thus has been used for treatment of rheumatoid arthritis, rheumatic fever, and mild infection. In these instances, aspirin generally acts on the symptoms of disease and does not modify or shorten the duration of a disease. However, because of its ability to inhibit the production of blood platelet aggregates (which may cut off the blood supply to regions of the heart or brain), aspirin has also been used as an anticoagulant in the treatment of conditions such as unstable angina or following a minor stroke or heart attack.\r\n\r\nAspirin is sometimes used in the prevention of certain diseases, though its role as a preventive agent is controversial because of the risk of adverse effects. For example, daily intake of low-dose aspirin (75–300 mg) was associated with a reduced risk of heart attack or stroke in high-risk individuals. In addition, studies found that long-term use of low-dose aspirin potentially lowers the risk of colon cancer in some persons and is associated with a reduced risk of death from several types of cancer, including certain forms of colon cancer as well as lung cancer and esophageal cancer. Later studies, however, indicated that long-term low-dose aspirin use was more likely to lead to complications, such as increased bleeding, than to significantly lower disease risk, particularly in the case of cardiovascular disease. Many patients were also found to be taking aspirin regularly without a physician’s recommendation, increasing the chance of harm in high-risk individuals.\r\n\r\n', 'asp.jpg'),
(9, 'Paracetalmol', '', 122, '', 'trial.jpg'),
(10, 'Voljak', '', 165, '', 'trial2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registrationdetails`
--

CREATE TABLE `registrationdetails` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Pno` varchar(10) NOT NULL,
  `Pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrationdetails`
--

INSERT INTO `registrationdetails` (`Sno`, `Name`, `Email`, `Pno`, `Pass`) VALUES
(1, 'Bhavya', 'jsjjd@gmail.com', '8489493', 'ndjsjd'),
(2, 'jdkjdjk', 'mdmdmd@hffdj.gmail.com', '8778999', 'nmddjsdkj'),
(3, 'jdkjdjk', 'mdmdmd@hffdj.gmail.com', '8778999', 'mdmdm'),
(4, '', '', 'saab', ''),
(5, '', '', 'volvo', ''),
(6, '', '', 'saab', ''),
(7, '', '', 'mercedes', '');

-- --------------------------------------------------------

--
-- Table structure for table `successmedi`
--

CREATE TABLE `successmedi` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `oid` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `successmedi`
--

INSERT INTO `successmedi` (`id`, `date`, `oid`, `total`) VALUES
(1, '2022-06-07', 'MT12332345', '402'),
(2, '2022-06-07', 'MT12332345', '290'),
(3, '2022-06-09', 'MT12332345', '224');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `Sno` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `book_date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`Sno`, `name`, `age`, `gender`, `phone`, `address`, `test_name`, `price`, `book_date`, `time`) VALUES
(2, 'Harshali', '21', 'Female', '9001234321', 'Mali Coloy', 'Lipid', '329', '2022-06-13', '10:00:00.000000'),
(3, 'Anuj', '32', 'Male', '9001232212', 'Jayant Nagar', 'Thyroid', '427', '2022-06-06', '11:26:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `urll`
--

CREATE TABLE `urll` (
  `sno` int(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urll`
--

INSERT INTO `urll` (`sno`, `url`) VALUES
(1, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(3, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(4, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(5, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(6, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(7, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(8, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(9, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(10, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(11, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(12, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(13, 'http://localhost/doctorconsultation/consultweb/html/connect.php?'),
(14, 'http://localhost/doctorconsultation/consultweb/html/connect.php?');

-- --------------------------------------------------------

--
-- Table structure for table `validdoctors`
--

CREATE TABLE `validdoctors` (
  `SNo` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `yoreg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `validdoctors`
--

INSERT INTO `validdoctors` (`SNo`, `name`, `regno`, `specialization`, `yoreg`) VALUES
(0, 'Sita Raman', '50394', 'Gynaecologist', '1992'),
(1, 'Ashok Gopal', '65079', 'General Physician', '2002'),
(2, 'Mahima Chauhan', '78521', 'Orthopedic', '2008'),
(4, 'Niranjan S', '12542', 'Orthopedic', '2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdata`
--
ALTER TABLE `bookingdata`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Sid`);

--
-- Indexes for table `dregister`
--
ALTER TABLE `dregister`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `registrationdetails`
--
ALTER TABLE `registrationdetails`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `successmedi`
--
ALTER TABLE `successmedi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `urll`
--
ALTER TABLE `urll`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `validdoctors`
--
ALTER TABLE `validdoctors`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdata`
--
ALTER TABLE `bookingdata`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `dregister`
--
ALTER TABLE `dregister`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `SNo` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registrationdetails`
--
ALTER TABLE `registrationdetails`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `successmedi`
--
ALTER TABLE `successmedi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `Sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `urll`
--
ALTER TABLE `urll`
  MODIFY `sno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
