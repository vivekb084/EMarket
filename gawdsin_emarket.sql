-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 20, 2016 at 04:28 PM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gawdsin_emarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE IF NOT EXISTS `productinfo` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `productname` varchar(50) NOT NULL,
  `price` varchar(40) NOT NULL,
  `sellerprice` varchar(40) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `bid` varchar(2) NOT NULL,
  `visit` int(10) NOT NULL,
  `added` varchar(50) NOT NULL,
  `sold` int(2) NOT NULL,
  `productid` varchar(20) NOT NULL,
  `approved` int(3) NOT NULL DEFAULT '0',
  `deleted` int(3) NOT NULL DEFAULT '0',
  `category` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`ID`, `productname`, `price`, `sellerprice`, `description`, `bid`, `visit`, `added`, `sold`, `productid`, `approved`, `deleted`, `category`) VALUES
(2, 'LUV KEAEA', '', '1', 'asdada', '0', 0, '111314', 1, '111314_2', 1, 1, NULL),
(5, 'LUVLUV LVU', '', '3123', 'dasdaddasdadadadadadadada', '0', 0, '111314', 1, '111314_3', 1, 1, NULL),
(6, 'Gun1', '', '500', 'dsdfsdfGood', '0', 0, '1120085', 1, '1120085_2', 1, 1, NULL),
(7, 'MakerBot', '', '1000', 'Mast', '0', 0, '1120085', 1, '1120085_3', 1, 1, NULL),
(8, 'vagsfhgv', '', 'gfhgfgfgf', 'gfghfhgfhg', '0', 0, '111314', 1, '111314_4', 1, 1, NULL),
(9, 'Space SPace', '', '50000', 'Space craft', '0', 0, '1120085', 1, '1120085_4', 1, 1, NULL),
(10, 'Memes', '', '20', 'hhhhh', '0', 0, '1120085', 1, '1120085_5', 1, 1, ''),
(18, 'Cycle Razorback', '', '1500', 'Well maintained, Single Handed', '0', 0, '111799', 1, '111799_1', 1, 0, ''),
(12, 'Book-Data Structure and Algorithm by Narasimha Kar', '', '250', 'In JAVA.\r\n1 year used.', '0', 0, '111826', 1, '111826_1', 1, 0, ''),
(13, 'DIARY-Insuman Special Diary', '', '100', 'Brand New.\r\nUnused.', '0', 0, '111826', 1, '111826_2', 1, 0, ''),
(14, 'BarCode Reader By FunnyScan', '', '700', 'Unused with Bill.', '0', 0, '111279', 1, '111279_1', 1, 0, ''),
(15, 'Camphor - NAYASA', '', '160', '1 Year Old.\r\nIn perfect Condition.', '0', 0, '111826', 1, '111826_3', 1, 0, ''),
(16, 'Sector Stainless Steel', '', '5500', 'very nice watch', '0', 0, '111584', 1, '111584_1', 1, 0, ''),
(17, 'Man and Nature - By Dr T.D. Singh', '', '50', 'A short book on science and vedantoc perspectives\r\nApprox 60 pages', '0', 0, '111314', 1, '111314_6', 1, 0, ''),
(19, 'Samsung Corby 2', '', '2700', '2 years old......', '0', 0, '111210', 1, '111210_1', 1, 0, ''),
(20, 'Quantitative Aptitude - R S Aggarwal', '', '200', 'must have to practice for company related tests and others.', '0', 0, '110620', 1, '110620_1', 1, 0, ''),
(21, 'Electric Kettle-Bajaj-Cordless', '', '650', 'Capacity=1L\r\nWattage=1200W\r\nC.P.=1100\r\n\r\nRarely used, in great condition.', '0', 0, '110620', 1, '110620_2', 1, 0, ''),
(22, 'BSA MACH', '', '1600', 'BSA MACH is one of the fastest cycle and a light weight too. The Cycle has all the parts in a well working condition. It has been driven for 1 year. It contains Mud-Guards that are rare in any of them now a days.\r\n\r\nThe price is not negotiable.', '0', 0, '110443', 1, '110443_1', 1, 0, ''),
(23, '', '', '', '', '0', 0, '3123605', 1, '3123605_1', 0, 0, ''),
(44, 'Philips HD7450 0.6-Litre 650-Watt Drip Coffee Make', '', '1400', 'completely new one.. not used.. even package is not opened...', '0', 0, '3123605', 1, '3123605_2', 1, 0, ''),
(24, 'Bajaj Xcd 135', '', '25000', 'Friends i have a  Bajaj Xcd 135, 2010 model, kms driven 24007 only', '0', 0, '110119', 1, '110119_1', 0, 0, ''),
(43, 'CODING INTERVIEW QUESTIONS NARASIMHA KARUMANCHI LA', '', '325', 'Brand New Coding Interview Questions by Narasimha Karumanchi which is way better than his other books. No page tear, no pencil nor pen mark. It is BRAND NEW. Market Price is 450/- excluding shipping charges. Get in 125/- less straight away.', '0', 0, '111233', 1, '111233_2', 1, 0, ''),
(42, 'DATA STRUCTURES AND ALGORITHMS MADE EASY IN JAVA L', '', '325', 'Brand New Data Strucutres and Algorithms book in java with no page tear, pencil or pen mark. It is never opened. Market Price is 450/- excluding shipping charges. Get in 125/- less straight away.', '0', 0, '111233', 1, '111233_1', 1, 0, ''),
(38, 'qwerty', '', '21', 'cscs', '0', 0, '111314', 1, '111314_19', 0, 1, ''),
(41, 'fdf', '', '12', 'dfdfd', '0', 0, '1120085', 1, '1120085_8', 0, 0, ''),
(36, 'fish has changed her name', '', '21', 'adad', '0', 0, '111314', 1, '111314_18', 0, 1, ''),
(45, 'Samsung Bada Wave 525', '', '3400', '2013 Buy..well maintained...Still look New', '0', 0, '3123605', 1, '3123605_3', 1, 0, ''),
(46, 'Hercules turbo drive', '', '1100', 'Both front and back tyres and tubes are new .there is not a single puncture mark.Pedals are in perfect working condition.&quot;PRICE IS NEGOTIABLE&quot;', '0', 0, '110657', 1, '110657_2', 1, 0, ''),
(47, 'Pair of Brand new Vinex Lawn Tennis Racquets', '', '1200', 'Brand New-- Never used-- cheapest-- Original Vinex', '0', 0, '3122521', 1, '3122521_1', 1, 0, ''),
(48, 'siddhant', '', '12', 'hot guy!', '0', 0, '111314', 1, '111314_20', 0, 1, ''),
(49, 'Sony Xperia Neo V', '', '7000', 'Sony Xperia Neo V in good condition with ICS android', '0', 0, '1120151', 1, '1120151_1', 1, 0, ''),
(50, 'black board and white board', '', '300', '2 sided board black and white', '0', 0, '110292', 1, '110292_1', 1, 0, ''),
(51, 'Hercules Sparx 26*21 bicycle', '', '3000', 'A brand new Hercules sparx,untouched.\r\nPlease see the uploaded pic', '0', 0, '110801', 1, '110801_1', 1, 0, ''),
(52, 'room heaters -2', '', '0.00', 'Selling 2 room heaters absolutely free. \r\nthere might be some problem in them, never tested them.\r\nSomeone left 2 heaters at my room.. So if anyone interested in taking them can contact me.', '0', 0, '111314', 1, '111314_21', 0, 0, ''),
(53, 'Shivangi', '', '50', 'Hello', '0', 0, '1120454', 1, '1120454_1', 0, 1, ''),
(54, 'sas', '', '40', 'sasa', '0', 0, '1120454', 1, '1120454_2', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `username` varchar(30) DEFAULT NULL,
  `upload` text,
  `privacy` int(11) DEFAULT NULL,
  `uploadoption` int(11) DEFAULT NULL,
  `count` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`count`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`username`, `upload`, `privacy`, `uploadoption`, `count`, `date`, `time`) VALUES
('mars', '', 1, 1, 42, '2014-09-14', '07:57:31'),
('saturn', 'done with designing!!\r\n', 1, 1, 43, '2014-09-14', '08:16:43'),
('saturn', 'done with designing!!\r\n', 1, 1, 44, '2014-09-14', '08:16:46'),
('admin', 'Saturn Winning in designing... Rest Cover up!!', 1, 1, 45, '2014-09-14', '08:19:29'),
('saturn', 'GAWDS walo lage raho\r\nHum tumhare saath hain !! :D\r\n', 1, 1, 46, '2014-09-14', '08:20:22'),
('saturn', 'good job !!\r\nKeep up the work !!\r\n#BroCode', 1, 1, 47, '2014-09-14', '08:30:58'),
('venus', 'done designing part of game.', 1, 1, 48, '2014-09-14', '08:31:18'),
('venus', '', 0, 0, 49, '2014-09-14', '09:00:22'),
('saturn', 'ketchup kahan hai ?????', 1, 1, 50, '2014-09-14', '09:06:04'),
('venus', '', 1, 2, 51, '2014-09-14', '09:07:46'),
('venus', 'Having Dominoz Lunch :)', 1, 1, 52, '2014-09-14', '09:11:21'),
('mars', 'Hello..!!', 1, 1, 53, '2015-03-30', '04:21:56'),
('mars', '', 0, 0, 54, '2015-03-30', '04:22:41'),
('mars', '', 1, 1, 55, '2015-03-30', '04:24:14'),
('mars', 'hello world....', 1, 1, 56, '2015-04-09', '05:33:29'),
('mars', 'dsghfkfdsf\r\nfsdfhdsf\r\ndsfdshf\r\nsd', 1, 1, 57, '2015-05-18', '17:40:49'),
('team1', 'hey\r\n', 1, 1, 58, '2015-08-11', '11:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `userid`
--

CREATE TABLE IF NOT EXISTS `userid` (
  `serialno` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `mobno` bigint(13) NOT NULL,
  `email` varchar(60) NOT NULL,
  `rollno` int(10) NOT NULL,
  `hostelno` varchar(40) NOT NULL,
  `blockno` varchar(40) NOT NULL,
  `roomno` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `uploadflag` int(20) NOT NULL,
  `productcount` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`serialno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `userid`
--

INSERT INTO `userid` (`serialno`, `name`, `mobno`, `email`, `rollno`, `hostelno`, `blockno`, `roomno`, `password`, `uploadflag`, `productcount`) VALUES
(1, 'Siddhant Garg', 9999726176, 'siddhant180wins@gmail.com', 111314, '10', 'A', '221', 'a', 0, 21),
(2, 'Utkarsh', 9802791771, 'utkarsh578@gmail.com', 1120085, '8', 'd', '369', 'c', 0, 8),
(3, 'sarin', 2147483647, 'sarinshubham@gmail.com', 1120168, '9', 'd', '369', 'c', 0, 0),
(4, 'vipinbasia', 9034490850, 'basiavipin@gmail.com', 110525, '7', 'c', '251', 'gawds', 0, 0),
(5, 'luv', 9802791111, 'ut@gmail.com', 1120016, '8', 'a', '201', 'c', 0, 0),
(6, 'Vipul agrawal', 7206501261, 'vipulagrawal1203@yahoo.com', 111860, '10', 'A', '517', 'Ninja1203', 0, 0),
(7, 'Anurag Singh', 8053096726, 'anurag67star@gmail.com', 1130830, '1', 'b', '319', 'classictext', 0, 0),
(8, 'Harsh Choudhary', 8901333191, 'shry.harsh@gmail.com', 111681, '10', 'A', '451', 'hadujee2012', 0, 0),
(9, 'Akash', 9467034969, 'imakash1901@gmail.com', 111826, '10', 'A', '153', 'akash', 0, 3),
(10, 'Vivek', 9467094670, 'vivek@gmail.com', 111163, '10', 'A', '139', '162', 0, 0),
(11, 'Shivam Gupta', 9034876700, 'sg.nitk08@gmail.com', 111279, '10', 'A', '162', 'shivam', 0, 1),
(12, 'pranay', 9034467874, 'prgarai@gmail.com', 1120035, '9', 'A', '304', 'pranaygarai4197', 0, 0),
(13, 'Tarun Rai Tara', 8901369281, 'taruntara93@gmail.com', 111584, '10', 'A', '307', 'tarun.gawds', 0, 1),
(14, 'altamash', 8929810447, 'nieo_0007@live.com', 111094, '10', 'a', '604', 'akalkala', 0, 0),
(15, 'Deepali', 0, 'nikki.deepali@gmail.com', 111173, '3', 'Cauvery Bhawan', '362', 'gawdsnitk', 0, 0),
(16, 'KARNKABIR', 8529870247, 'karnkabir@gmail.com', 1120553, '9', 'B', '131', '7737442842', 0, 0),
(17, 'Puneet Jain', 8053970992, 'jainpuneet6994@gmail.com', 1120846, '9', 'c', '147', 'nowucme007', 0, 0),
(18, 'bajrang gupta', 9034118050, 'bajranggupta@hotmail.com', 3130604, '5', 'A', '216', '123456bg', 0, 0),
(19, 'Aditya Mohan Upadhyay', 9802790155, 'aditya716@gmail.com', 5121076, '4', 'A', '165', 'password123', 0, 0),
(20, 'Vicky', 8295365036, 'vikaslangyan26@gmail.com', 1120250, '8', 'D', '175', 'vikas', 0, 0),
(21, 'Rajat Singla', 9034169465, 'rajtsingla.333@gmail.com', 110043, '10', 'b', '318', 'pirateship', 0, 0),
(22, 'lokesh yadav', 9416940028, 'luckydv25@gmail.com', 111457, '10', '1', '444', '111457', 0, 0),
(23, 'Nishant Dhanendra', 9617933642, 'nishantd1993@gmail.com', 1120041, '8', 'B', '441', 'BlAcK1993', 0, 0),
(24, 'Vinay Singh', 9468290979, 'vinay1120223@gmail.com', 1120223, '9', 'c', '166', 'vinay', 0, 0),
(25, 'Shubham Goel', 7404305005, 'itsmeshubhamgoel@gmail.com', 111799, '10', 'a', '230', 'shubham1402', 0, 1),
(26, 'sachin behl', 9466253008, 'sachinbehl00@gmail.com', 1120004, '9', 'b', '135', 'factor00', 0, 0),
(27, 'GAURAV KUMAR', 9896004588, 'gaurav5888@yahoo.co.in', 3136602, '5', 'Block B', '232', 'jacky9218', 0, 0),
(28, 'kunal sinha', 9896949969, 'kunalsinharocks@gmail.com', 110428, '10', 'a', '261', 'kunalsinha', 0, 0),
(29, 'Rohan Pant', 9034491678, 'rhn_pant@yahoo.com', 2130004, '3', 'B', '223', '26MOTAbachha28', 0, 0),
(30, 'Rishi Khare', 9896006730, 'rishi.khare27@gmail.com', 1130636, '', 'B', '318', 'rkrocks', 0, 0),
(31, 'rahul', 9034559317, 'praxyprax22@gmail.com', 111210, '10', 'A', '403', 'rahul', 0, 1),
(32, 'Shubham Aggarwal', 9996537448, 'coolshubham16@gmail.com', 110244, '', '', '', 'stunner1238', 0, 0),
(33, 'apoorv sharma', 919050268760, 'apoorvsharma29@yahoo.com', 110292, '10', 'b', '374', 'qwertyui', 0, 1),
(34, 'santosh kumar', 8930575615, 'santosh01992@gmail.com', 110544, '7', 'b', '123', 'santosh747', 0, 0),
(35, 'Ankur Mishra', 7206771175, 'ankurmishra32@gmail.com', 3125522, '6', 'B', '223', 'i&lt;3india', 0, 0),
(36, 'Ketan Joon', 9802782292, 'ketan.joon@yahoo.com', 110620, '7', 'C', '358', 'joonketan', 0, 2),
(37, 'Vinay Kumar Gupta', 9802725443, 'vinaygupta0001@gmail.com', 110443, '7', 'C', '258', 'tarakmehta', 0, 1),
(38, 'akash garg', 9671864935, 'agarg747@gmail.com', 110030, '7', 'B', '128', 'lavkush123', 0, 0),
(39, 'Sunil Kumar', 9896261596, 'anshulaniket_2010@yahoo.com', 110354, '10', 'B', '342', '9896261596', 0, 0),
(40, 'Dushyanta Dhyani', 7206550546, 'dush.dhyani@gmail.com', 110686, '10', 'B', '353', 'dush@22', 0, 0),
(41, 'SHRIKANTH TALEWAD', 9729664977, 'shrikanth.talewad73@gmail.com', 3123605, '6', 'A', '210', 'phn8970039953', 0, 3),
(42, 'Anurag Goyal', 9996856409, 'anuragktl@gmail.com', 110221, '7', 'A', '101', '123123', 0, 0),
(43, 'Navneet Kumar', 9996111977, 'navneetsheara@gmail.com', 110119, '7', 'C', '446', '9899685733', 0, 1),
(44, 'JItesh Setia', 8816086415, 'setiajitesh@gmail.com', 3122521, '6', 'A', '207', 'jitesh1388', 0, 1),
(45, 'Vipul Kumar Narula', 9996096690, 'vipulnarula657@gmail.com', 110657, '7', 'A', '404', 'e=mc2ismev', 0, 2),
(46, 'nitin', 8901473220, 'sharma.nitkkr@gmail.com', 110762, '7', 'kkr', '415', '9255976924', 0, 0),
(47, 'Deepak', 8295050303, 'gargspecial@gmail.com', 3122606, '6', '1', '216', 'emarket999', 0, 0),
(48, 'Amrit Sarkar', 9728622369, 'sarkaramrit2@gmail.com', 111233, '10', 'A', '180', '7206@432987', 0, 2),
(49, 'SSSS', 9090909090, 'sid@gmail.com', 101010, '10', 'a', '221', 'password', 0, 0),
(50, 'sid', 9999101010, 'siddhant180wins@gmail.com', 10101, '10', 'a', '221', 'sid', 0, 0),
(51, 'Raghav Sood', 9467938937, 'raghavsood33@gmail.com', 110053, '10', 'B', '283', '1', 0, 0),
(52, 'Rajvardhan Mittal', 9896959072, 'rajvardhan.mittal@gmail.com', 110467, '10', 'B', '359', '10121993', 0, 0),
(53, 'Saurabh', 9416156113, 'coolsaurabh.dhillon@gmail.com', 1120151, '9', 'A', '120', 'Saurabh', 0, 1),
(54, 'paras bajaj', 9996569191, 'bajaj.paras92@gmail.com', 110801, '7', 'A', '121', 'asha bajaj', 0, 1),
(55, 'Brajesh Singh', 9729662535, 'b.singhkit@gmail.com', 3121610, '6', 'a', '102', '288915291', 0, 0),
(56, 'chitra singhal', 9034771097, 'chitra8894@gmail.com', 111046, '3', 'c', '12', 'chitra', 0, 0),
(57, 'Anand', 8570003391, 'anandyadav200@gmail.com', 1120883, '9', 'D', '276', 'anand', 0, 0),
(58, 'vaibhav yadav', 9896853615, '', 111280, '', 'A', '483', 'pulsar', 0, 0),
(59, 'matt', 0, '', 0, '', 'EvvcSzsrRfKLfYuJGu', '', 'Wl3zp', 0, 0),
(60, 'dbgiqlpj', 0, '', 0, '', '-9', '', 'fSz8gxMH', 0, 0),
(61, 'obksnctz', 0, '', 0, '', 'sfUIspZva', '', '', 0, 0),
(62, 'EgorGes', 0, 'egorm2002@outlook.com', 0, '123456', 'Mariupol', '', 'wQ8ht7py4B', 0, 0),
(63, 'EgorGes', 0, 'egorm2002@outlook.com', 0, '123456', 'Mariupol', '', 'wQ8ht7py4B', 0, 0),
(64, 'Renatohome', 0, 'helmutchol@4softsite.info', 0, '123456', 'Garhoud', '', 'vgfg8rQ82O', 0, 0),
(65, 'Renatohome', 0, 'helmutchol@4softsite.info', 0, '123456', 'Garhoud', '', 'vgfg8rQ82O', 0, 0),
(66, 'AgrikGox', 0, 'gestlilasla1978@yandex.ru', 0, '123456', '', '', 'q7j8f3PsnB', 0, 0),
(67, 'AgrikGox', 0, 'gestlilasla1978@yandex.ru', 0, '123456', '', '', 'q7j8f3PsnB', 0, 0),
(68, 'Dummy Name', 9876543210, 'dummt@dummy.com', 1120449, '9', 'A', '301', '12345', 0, 0),
(69, 'Shivangi', 1234567890, 'utkarsh578@gmail.com', 1120454, '3', 'a', '111', 'it4', 0, 2),
(70, 'sam', 0, 'abc@gmail.com', 1130461, '1', 'A', '1712', 'cool', 0, 0),
(71, 'Danielsade', 0, 'Danielsade@m4.blogrtui.ru', 0, '123456', 'Stirling', '', 'n8s9jnuQ7Q', 0, 0),
(72, 'Danielsade', 0, 'Danielsade@m4.blogrtui.ru', 0, '123456', 'Stirling', '', 'n8s9jnuQ7Q', 0, 0),
(73, 'MihailPex', 0, 'mifat69@outlook.com', 0, '123456', 'Saransk', '', 'Fy176yoypJ', 0, 0),
(74, 'MihailPex', 0, 'mifat69@outlook.com', 0, '123456', 'Saransk', '', 'Fy176yoypJ', 0, 0),
(75, 'RocksaLLan', 0, 'shvedovaroksana@gmail.com', 0, '123456', '', '', 'ag211111', 0, 0),
(76, 'RocksaLLan', 0, 'shvedovaroksana@gmail.com', 0, '123456', '', '', 'ag211111', 0, 0),
(77, 'Michaelkl', 0, 'tanya_katyushkina@mail.ru', 0, '3 369 447 59 16', 'Shreveport', '', '8k6darXu1B', 0, 0),
(78, 'Michaelkl', 0, 'tanya_katyushkina@mail.ru', 0, '2 166 417 67 47', 'Illinois', '', '8k6darXu1B', 0, 0),
(79, 'Wamsikcew', 0, 'rgtssawq@gmail.com', 0, '123456', 'Aqtobe', '', 'fe87hbfY1X', 0, 0),
(80, 'Wamsikcew', 0, 'rgtssawq@gmail.com', 0, '123456', 'Aqtobe', '', 'fe87hbfY1X', 0, 0),
(81, 'DenPem', 0, 'ikavtajkin@gmail.com', 0, '123456', 'Samara', '', 'gorppypebed', 0, 0),
(82, 'DenPem', 0, 'ikavtajkin@gmail.com', 0, '123456', 'Samara', '', 'gorppypebed', 0, 0),
(83, 'Catboymenten', 0, 'namesboycat@mail.ru', 0, '5 345 645 37 59', 'Fairfield', '', '8k6darXu1B', 0, 0),
(84, 'Catboymenten', 0, 'namesboycat@mail.ru', 0, '5 555 340 19 35', 'Westminster', '', '8k6darXu1B', 0, 0),
(85, 'Mark', 0, '', 0, '', 'qgSFYNbvdTkJlnn', '', 'AwnU27', 0, 0),
(86, 'matt', 0, '', 0, '', 'HpZwbEHshwmS', '', 'Z8Czs', 0, 0),
(87, 'qdhbellyqe', 0, '', 0, '', 'NsBJMuiOWDmTNuA', '', '', 0, 0),
(88, 'utpkujdykk', 0, '', 0, '', 'JeLGeOWvpanoOiWKFIQ', '', '', 0, 0),
(89, 'ArrietaOrix', 0, 'alyamendeleeva@mail.ru', 0, '123456', 'Depok', '', '171bEzxonZ', 0, 0),
(90, 'ArrietaOrix', 0, 'alyamendeleeva@mail.ru', 0, '123456', 'Sragen', '', '171bEzxonZ', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'team1', 'appetype', 'gawds@gawds.in'),
(2, 'pluto', 'pluto', ''),
(3, 'venus', 'venus', ''),
(4, 'earth', 'earth', ''),
(5, 'mars', 'mars', ''),
(6, 'jupiter', 'jupiter', ''),
(7, 'saturn', 'saturn', ''),
(8, 'uranus', 'uranus', ''),
(9, 'neptune', 'neptune', ''),
(10, 'admin', 'utkarsh', '');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE IF NOT EXISTS `usersinfo` (
  `UserName` char(30) DEFAULT NULL,
  `Password` char(30) DEFAULT NULL,
  `ClgName` char(100) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Branch` char(30) DEFAULT NULL,
  `Section` int(11) DEFAULT NULL,
  `Email` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`UserName`, `Password`, `ClgName`, `Year`, `Branch`, `Section`, `Email`) VALUES
('Bhanu', '9718', 'NIT', 2, 'IT', 4, 'bhanuaggarwal13@gmail.com'),
('whdb', 'bha', 'bha', 2, 'bh', 1, 'bhanuaggarwal13@gmail.com'),
('user', '1020', 'nit', 2, 'IT', 4, 'bhsd@jbf.com'),
('user', '1020', 'NIT', 2, 'IT', 4, 'bhanuaggarwal13@gmail.com'),
('', '', '', 2, 'IT', 4, ''),
('', '9718', NULL, 2, 'IT', 4, 'bhanuaggarwal13@gmail.com'),
('Bhanu', '9718', NULL, 2, 'IT', 4, 'bhanuaggarwal13@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
