-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2019 at 09:36 PM
-- Server version: 5.6.44-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeevansa_index`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `adminusername` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `adminpassword` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminusername`, `adminpassword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `expressinterest`
--

CREATE TABLE `expressinterest` (
  `id` int(10) UNSIGNED NOT NULL,
  `eisender` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `eireceiver` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `eimsg` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `eisentdt` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `eisender_accept` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `eirec_accept` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `eisender_decline` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `eirec_decline` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `expressinterest`
--

INSERT INTO `expressinterest` (`id`, `eisender`, `eireceiver`, `eimsg`, `eisentdt`, `eisender_accept`, `eirec_accept`, `eisender_decline`, `eirec_decline`) VALUES
(1001, 'MAT46', 'MAT44', 'I am interested in your profile. If you are interested in my profile, please contact me.', '12-03-2009', 'Accept', 'Accept', NULL, NULL),
(1002, 'MAT99', 'MAT64', 'I am interested in your profile. If you are interested in my profile, please contact me.', '04-04-2009', 'Pending', 'Pending', NULL, NULL),
(1003, 'MAT99', 'MAT63', 'I am interested in your profile. If you are interested in my profile, please contact me.', '04-04-2009', 'Pending', 'Pending', NULL, NULL),
(1004, 'MAT230', 'MAT98', 'I am interested in your profile. If you are interested in my profile, please contact me.', '17-04-2009', 'Pending', 'Pending', NULL, NULL),
(1005, 'MAT233', 'MAT23', 'I am interested in your profile. If you are interested in my profile, please contact me.', '08-05-2009', 'Pending', 'Pending', NULL, NULL),
(1006, 'MAT233', 'MAT41', 'You are someone special I wish to know better. Please contact me at the earliest.', '08-05-2009', 'Pending', 'Pending', NULL, NULL),
(1007, 'MAT233', 'MAT112', 'I am interested in your profile. If you are interested in my profile, please contact me.', '02-06-2009', 'Pending', 'Pending', NULL, NULL),
(1008, 'MAT233', '', '', '02-06-2009', 'Pending', 'Pending', NULL, NULL),
(1009, 'MAT233', '', '', '02-06-2009', 'Pending', 'Pending', NULL, NULL),
(1010, 'MAT236', 'MAT233', 'You are the kind of person we were searching for. Please send us your contact details.', '05-06-2009', 'Accept', 'Accept', NULL, NULL),
(1011, 'MAT236', 'MAT233', 'I am interested in your profile. If you are interested in my profile, please contact me.', '05-06-2009', 'Accept', 'Accept', NULL, NULL),
(1012, 'MAT236', 'MAT233', 'I have gone through your details and feel we have lot in common. Would sure like to know your opinion on this?', '05-06-2009', 'Accept', 'Accept', NULL, NULL),
(1013, 'MAT236', 'MAT233', 'I am interested in your profile. If you are interested in my profile, please contact me.', '11-06-2009', 'Accept', 'Accept', NULL, NULL),
(1014, 'MAT236', 'MAT233', 'I am interested in your profile. If you are interested in my profile, please contact me.', '11-06-2009', 'Accept', 'Accept', NULL, NULL),
(1015, 'MAT236', 'MAT233', 'I have gone through your details and feel we have lot in common. Would sure like to know your opinion on this?', '11-06-2009', 'Accept', 'Accept', NULL, NULL),
(1016, 'MAT256', 'MAT25', 'I am interested in your profile. If you are interested in my profile, please contact me.', '13-11-2009', 'Pending', 'Pending', NULL, NULL),
(1017, 'MAT265', 'MAT263', 'I have gone through your details and feel we have lot in common. Would sure like to know your opinion on this?', '02-01-2010', 'Pending', 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membershipplan`
--

CREATE TABLE `membershipplan` (
  `planid` int(10) UNSIGNED NOT NULL,
  `planname` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `plandisplayname` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `plannoofcontacts` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `planduration` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `planamount` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `planoffers` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `membershipplan`
--

INSERT INTO `membershipplan` (`planid`, `planname`, `plandisplayname`, `plannoofcontacts`, `planduration`, `planamount`, `planoffers`) VALUES
(2, 'Plan2', 'DIAMOND', '200', '180', '1000', 'Desc'),
(1, 'Plan1', 'PLATINUM', '300', '360', '2000', 'Desc'),
(3, 'Plan3', 'GOLDEN', '50', '90', '750', 'Desc');

-- --------------------------------------------------------

--
-- Table structure for table `paiddetails`
--

CREATE TABLE `paiddetails` (
  `Paidid` int(10) UNSIGNED NOT NULL,
  `Pmatriid` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Pname` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Pemail` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Paddress` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Ppaymode` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Pactivedate` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Pplan` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Pplanduration` int(50) DEFAULT NULL,
  `Pnocontct` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Pamount` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Pbankdet` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `paiddetails`
--

INSERT INTO `paiddetails` (`Paidid`, `Pmatriid`, `Pname`, `Pemail`, `Paddress`, `Ppaymode`, `Pactivedate`, `Pplan`, `Pplanduration`, `Pnocontct`, `Pamount`, `Pbankdet`) VALUES
(2220, 'MAT258', 'gfgfg', 'a@b.com', 'fff', 'Cash', '07-12-2009', '', 0, '', '', ''),
(2221, 'MAT259', 'nkkbaburaj', 'nkkbaburaj@yahoo.com', 'sdfsdfgsd\r\nsdfgsdfgs\r\nsdfgsdfgsdfg\r\nsdfgsdfgd', 'Cash', '07-12-2009', '', 0, '', '', ''),
(2222, 'MAT263', 'rahil', 'rout@saurav.in', 'sdfsf\r\nfsd\r\nsd', 'Cash', '31-12-2009', 'DIAMOND', 180, '200', '1000', 'jkj'),
(2223, 'MAT264', 'narjis', 'narjisenterprise@gmail.com', 'asfd skl jklsjd ksdjk jsk jk jsk jsk jk', 'Cash', '31-12-2009', 'GOLDEN', 360, '50', '1500', 'ff');

-- --------------------------------------------------------

--
-- Table structure for table `photoprotectrequesters`
--

CREATE TABLE `photoprotectrequesters` (
  `preqid` int(11) NOT NULL,
  `RequesterID` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `ReceiverID` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `PPReqmsg` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `ReqDate` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `ReceiverResponse` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `photoprotectrequesters`
--

INSERT INTO `photoprotectrequesters` (`preqid`, `RequesterID`, `ReceiverID`, `PPReqmsg`, `ReqDate`, `ReceiverResponse`) VALUES
(1, 'MAT19', 'MAT44', 'We found your profile to be a good match. Please send me Photo password to proceed further.', '12-Mar-2009', 'Sent');

-- --------------------------------------------------------

--
-- Table structure for table `receivemessage`
--

CREATE TABLE `receivemessage` (
  `rid` int(11) NOT NULL,
  `ToID` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `FromID` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Msg` text COLLATE latin1_general_ci,
  `SendDate` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `receivemessage`
--

INSERT INTO `receivemessage` (`rid`, `ToID`, `FromID`, `Msg`, `SendDate`) VALUES
(1, 'MAT233', 'MAT236', 'sdf sdf asdf asdfasdfasdfsadfsaf sdf44sdf56465654654 466546546 @. sdfdf s', '11-Jun-2009 '),
(2, 'MAT236', 'MAT233', 'fgdassad sdf asdfsadfsa 6666666666\r\nsdfsadf\r\n sdf\r\nas\r\n--------Original Message------\r\n		 < sdf sdf asdf asdfasdfasdfsadfsaf sdf44sdf56465654654 466546546 @. sdfdf s', '11-Jun-2009 '),
(3, 'MAT233', 'MAT236', 'repl to freena to jacob\r\n\r\n\r\n\r\n\r\n', '11-Jun-2009 '),
(4, 'MAT236', 'MAT233', 'repl frm jacob to freena\r\n\r\n\r\n--------Original Message------\r\n		 < repl to freena to jacob\r\n\r\n\r\n\r\n\r\n', '11-Jun-2009 ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(10) UNSIGNED NOT NULL,
  `MatriID` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Prefix` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'MAT',
  `Termsofservice` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `ConfirmEmail` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `ConfirmPassword` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Profilecreatedby` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Referenceby` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Name` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Gender` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Age` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `TOB` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `POB` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Maritalstatus` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `childrenlivingstatus` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Education` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `EducationDetails` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Occupation` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Employedin` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Annualincome` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Religion` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Caste` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Subcaste` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Gothram` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Language` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Star` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Moonsign` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Horosmatch` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Manglik` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Height` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Weight` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `BloodGroup` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Bodytype` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Complexion` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Diet` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Smoke` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Drink` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Address` text COLLATE latin1_general_ci,
  `City` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `State` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Country` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Phone` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Mobile` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Residencystatus` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Fathername` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Mothersname` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Fatherlivingstatus` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Motherlivingstatus` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Fathersoccupation` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Mothersoccupation` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Profile` text COLLATE latin1_general_ci,
  `Looking` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `FamilyDetails` text COLLATE latin1_general_ci,
  `Familyvalues` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `FamilyType` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `FamilyStatus` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `FamilyOrigin` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `noofbrothers` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `noofsisters` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `nbm` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `nsm` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_FromAge` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_ToAge` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_HaveChildren` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_Height` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_Complexion` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_MotherTongue` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PartnerExpectations` text COLLATE latin1_general_ci,
  `PE_Religion` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_Caste` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_Education` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_Countrylivingin` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PE_Residentstatus` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Hobbies` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `OtherHobbies` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Interests` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `OtherInterests` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Status` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Regdate` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `IP` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Ref` text COLLATE latin1_general_ci,
  `Agent` text COLLATE latin1_general_ci,
  `DeleteAction` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `MemshipExpiryDate` date DEFAULT NULL,
  `expdays` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Horoscheck` text COLLATE latin1_general_ci,
  `HorosApprove` varchar(50) COLLATE latin1_general_ci DEFAULT 'NULL',
  `PhotoProtect` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `PhotoprotectPassword` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Video` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Videocheck` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Noofcontacts` int(11) DEFAULT NULL,
  `photocheck` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `photochecklist` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `videochecklist` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `Horoschecklist` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `DOBday` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `DOBmonth` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `DOByear` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `Orderstatus` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `Photo1` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT 'nophoto.gif',
  `Photo1Approve` varchar(50) COLLATE latin1_general_ci DEFAULT 'No',
  `Photo2` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT 'nophoto.gif',
  `Photo2Approve` varchar(50) COLLATE latin1_general_ci DEFAULT 'No',
  `Photo3` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT 'nophoto.gif',
  `Photo3Approve` varchar(255) COLLATE latin1_general_ci DEFAULT 'No',
  `Logincount` int(11) DEFAULT NULL,
  `Lastlogin` datetime DEFAULT NULL,
  `Thislogin` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `MatriID`, `Prefix`, `Termsofservice`, `ConfirmEmail`, `ConfirmPassword`, `Profilecreatedby`, `Referenceby`, `Name`, `Gender`, `DOB`, `Age`, `TOB`, `POB`, `Maritalstatus`, `childrenlivingstatus`, `Education`, `EducationDetails`, `Occupation`, `Employedin`, `Annualincome`, `Religion`, `Caste`, `Subcaste`, `Gothram`, `Language`, `Star`, `Moonsign`, `Horosmatch`, `Manglik`, `Height`, `Weight`, `BloodGroup`, `Bodytype`, `Complexion`, `Diet`, `Smoke`, `Drink`, `Address`, `City`, `State`, `Country`, `Phone`, `Mobile`, `Residencystatus`, `Fathername`, `Mothersname`, `Fatherlivingstatus`, `Motherlivingstatus`, `Fathersoccupation`, `Mothersoccupation`, `Profile`, `Looking`, `FamilyDetails`, `Familyvalues`, `FamilyType`, `FamilyStatus`, `FamilyOrigin`, `noofbrothers`, `noofsisters`, `nbm`, `nsm`, `PE_FromAge`, `PE_ToAge`, `PE_HaveChildren`, `PE_Height`, `PE_Complexion`, `PE_MotherTongue`, `PartnerExpectations`, `PE_Religion`, `PE_Caste`, `PE_Education`, `PE_Countrylivingin`, `PE_Residentstatus`, `Hobbies`, `OtherHobbies`, `Interests`, `OtherInterests`, `Status`, `Regdate`, `IP`, `Ref`, `Agent`, `DeleteAction`, `MemshipExpiryDate`, `expdays`, `Horoscheck`, `HorosApprove`, `PhotoProtect`, `PhotoprotectPassword`, `Video`, `Videocheck`, `Noofcontacts`, `photocheck`, `photochecklist`, `videochecklist`, `Horoschecklist`, `DOBday`, `DOBmonth`, `DOByear`, `Orderstatus`, `Photo1`, `Photo1Approve`, `Photo2`, `Photo2Approve`, `Photo3`, `Photo3Approve`, `Logincount`, `Lastlogin`, `Thislogin`) VALUES
(263, 'MAT263', 'MAT', 'I Accept  the Terms and Conditions', 'rout@saurav.in', '8cf674180ea201eb14b12486eaef9f28', 'Sibling', 'Friends', 'rahil', 'Female', '1956-02-05', '56', '5:15 am', 'us', 'Widow/Widower', 'Four and aboveYes', 'Diploma', 'Armed Forces', 'Non-mainstream professional', 'Defence', 'Rs.50,001 - 1,00,000', 'Hindu', 'Lohana', '', 'banda', 'Kannada', 'PURATATHI', 'Simha (Leo)', 'Yes', 'Yes', '5', '59 kg', 'A1 +', 'Average', 'Fair', 'Veg', 'No', 'No', 'sdfsf\r\nfsd\r\nsd', '', '', '', '+91-Area Code-9876543210', '', 'Citizen', '', '', 'Alive', 'Alive', '', '', 'gfgfgfgfgfhfhghfhfghfghfhfhfghfghfhdhdhherthrthrhrthrhrthrhrhrthrhrthrthrhrrjyrttyrytyrtyryrtyryyrtytytdf', 'Separated', '', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Muslim', 'Ehle-Hadith', 'Does not Matter', 'India', 'Does not Matter', 'Collectibles', '', 'Computer games', '', 'DIAMOND', '14-Dec-2009', '202.137.216.101', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2b4) Gecko/20091124 Firefox/3.6b4', NULL, '2010-06-29', '2009-12-14 16:19:38', NULL, 'NULL', 'No', NULL, NULL, NULL, 200, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, '2009-12-14 10:20:38'),
(262, 'MAT262', 'MAT', 'I Accept  the Terms and Conditions', 'seosemtraining@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Self', 'Advertisements', 'Lalit', 'Male', '1954-01-02', '58', '9:00 am', '', 'Unmarried', '', 'Bachelors', 'Advertising/ Marketing', 'Non-mainstream professional', 'Business', 'Rs.2,00,001 -   3,00,000', 'Hindu', 'Does not matter', '', '', 'Gujarati', 'Does not matter', 'Does not matter', '', '', '18', '58 kg', 'B+', 'Average', 'Very Fair', 'Veg', 'No', 'No', 'kandivali', '', '', '', '+91-022-56069770', '', 'Citizen', '', '', 'Alive', 'Alive', '', '', 'this is simple testing for the registration procedure of the website let me chk wether its useful or not', 'Unmarried', 'mother father sister wife daughter', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Hindu', 'Bahi', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', 'Active', '14-Dec-2009', '60.243.26.13', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.15) Gecko/2009101601 Firefox/3.0.15', NULL, NULL, '2009-12-14 06:31:12', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, '2009-12-14 00:47:02'),
(261, 'MAT261', 'MAT', 'I Accept  the Terms and Conditions', 'dss@dss.dss', 'e10adc3949ba59abbe56e057f20f883e', 'Self', 'Advertisements', 'raju', 'Male', '1978-01-02', '34', '9:00 am', 'punjab', 'Unmarried', '', 'Masters', 'Advertising/ Marketing', 'Non-mainstream professional', 'Business', 'Rs.50,001 - 1,00,000', 'Hindu', '6000 Niyogi', '', 'chandiswara', 'Chatlisgarhi', 'Does not matter', 'Does not matter', 'Yes', 'Yes', '21', '62 kg', 'A+', 'Average', 'Very Fair', 'Veg', 'No', 'No', 'CHATISGHAR', '', '', '', '+91-4411-3243243243', '345543', 'Citizen', 'View and modify the ', 'View and modify the ', 'Alive', 'Alive', 'View and m', 'View and modify the ', 'mma View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the ', 'Unmarried', 'View and modify the View and modify the View and modify the ', 'Traditional', 'Seperate Family', 'Rich', 'View and modify the ', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', 'View and modify the View and modify the View and modify the ', 'Hindu', 'agar Brahmin', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', 'Active', '10-Dec-2009', '123.236.142.126', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; InfoPath.2; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)', NULL, NULL, '2009-12-10 15:51:32', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, NULL),
(258, 'MAT258', 'MAT', 'I Accept  the Terms and Conditions', 'a@b.com', 'e10adc3949ba59abbe56e057f20f883e', 'Guardian', 'Searh Engines', 'gfgfg', 'Male', '1993-08-16', '19', '6:30 am', '', 'Widow/Widower', 'ThreeNo', 'Trade school', 'Fashion', 'Architect', 'Government', 'Rs.2,00,001 -   3,00,000', 'Hindu', 'Malayalee Namboodiri', '', '', 'Malayalam', 'Does not matter', 'Does not matter', '', '', '4', '58 kg', 'A2B +', 'Average', 'Wheatish Medium', 'Veg', 'No', 'No', 'fff', '', '', '', '+91-0674-123456789', '', 'Citizen', '', '', 'Alive', 'Alive', '', '', 'llllllllllllllllsdfdffvhdsfsdjfgksgdfkhdfksdfsdfkdsfjgbkdjfbsdkfhsdkfhsdbfhksdfsdfjdhsgfksdfbsdkflsdhkfsdbfgksdfgdkshfkdgsfhdgsfksdghfjksdhfgdksf', 'Unmarried', 'zdgxgg', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Muslim', 'Memon', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', '', '05-Dec-2009', '202.137.216.67', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2b4) Gecko/20091124 Firefox/3.6b4', NULL, '1969-12-31', '2009-12-05 18:54:11', NULL, 'NULL', 'No', NULL, NULL, NULL, 0, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, '2009-12-05 12:56:43'),
(260, 'MAT260', 'MAT', 'I Accept  the Terms and Conditions', 'subran_mt@yahoo.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Self', 'Advertisements', 'saym', 'Male', '1983-05-23', '29', '9:00 am', 'kerala', 'Unmarried', '', 'Masters', 'Computers/ IT', 'Actor', 'Government', 'Rs.1,00,001 - 2,00,000', 'Hindu', 'Malayalee Namboodiri', 'thiyya', 'tiyya', 'Malayalam', 'MAHAM', 'Mesh (Aries)', 'No', 'No', '16', '58 kg', 'B+', 'Average', 'Fair', 'Veg', 'No', 'No', 'test', '', '', '', '+91-4545-45454545', '5454546456', 'Citizen', 'ttt', 'rrr', 'Alive', 'Alive', 'rrr', 'rrr', 'test Call and instant message your Gmail contacts for free using Google Talk   Learn more Call and instant message your Gmail contacts for free using Google Talk Learn more', 'Unmarried', '', 'Traditional', 'Joint Family', 'Upper Middle Class', '', '1', '1', 'One married brother', 'One married sister', '18', '30', 'NULL', '5-8', 'Fair', 'NULL', '', 'Hindu', 'Brahmin Goswami', 'Masters', 'India', 'Citizen', 'Astronomy', '', 'Book clubs', '', 'Active', '08-Dec-2009', '117.204.84.41', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.33 Safari/532.0', NULL, NULL, '2009-12-08 19:55:23', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, '2009-12-08 13:57:20', '2009-12-08 14:10:48'),
(259, 'MAT259', 'MAT', 'I Accept  the Terms and Conditions', 'nkkbaburaj@yahoo.com', 'a5e1a8fda4fb6ae3ffae98398cb4faf9', 'Self', 'Advertisements', 'nkkbaburaj', 'Male', '1971-01-02', '41', '9:00 am', 'coimbatore', 'Unmarried', '', 'Masters', 'Administrative services', 'Accountant', 'Not Employed in', 'Rs.1,00,001 - 2,00,000', 'Hindu', 'Gounder', '', 'kongu', 'Tamil', 'ASWINI', 'Mithun (Gemini)', 'Yes', 'Yes', '4', '44 kg', 'A1B -', 'Slim', 'Fair', 'Veg', 'No', 'No', 'sdfsdfgsd\r\nsdfgsdfgs\r\nsdfgsdfgsdfg\r\nsdfgsdfgd', '', '', '', '+91-Area Code-2360916', '', 'Permanent Resident', '', '', 'Alive', 'Alive', '', '', 'sdfgsdfgsdfgsdf sdfgsdfgsdf sdfgsdfgsdf sdfgsdfgsdfg sdfgsdfgsdf', 'Unmarried', '', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Below 4ft', 'Wheatish Medium', 'NULL', '', 'Muslim', 'Memon', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', '', '06-Dec-2009', '59.92.106.140', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.33 Safari/532.0', NULL, '1969-12-31', '2009-12-07 05:21:04', NULL, 'NULL', 'No', NULL, NULL, NULL, 0, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, NULL),
(265, 'MAT265', 'MAT', 'I Accept  the Terms and Conditions', 'vinay.145@gmail.com', 'f7fdd069e6b8bbd0c65b0579b121e635', 'Parents', 'Advertisements', 'vinay', 'Male', '1954-03-04', '58', '9:00 am', 'hhhh', 'Unmarried', '', 'Bachelors', 'Advertising/ Marketing', 'Non-mainstream professional', 'Business', 'Under   Rs.50,000', 'Hindu', '6000 Niyogi', '', 'hkjh', 'Kannada', 'ASWINI', 'Vrishabh (Taurus)', 'Yes', 'Yes', '14', '69 kg', 'A-', 'Athletic', 'Very Fair', 'Occasionally Non-Veg', 'No', 'Yes', 'test address', '', '', '', '91-020-8767876', '', 'Citizen', 'testin', 'test', 'Alive', 'Alive', 'resing', 'testin', 'test profile sakd hhk kashd sahkdjhsad sjdk shkdhksh  khdddddddddddkjhkhaskd aksh dkhkjd sh sakdhs dhkhsak dkashd kahdkashdk haskdh asdh', 'Unmarried', 'testtt', 'Orthodox', 'Joint Family', 'Rich', 'testd', '3 ', '3 ', 'One married brother', 'One married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', 'gooddd', 'Hindu', 'Arora', 'Does not Matter', 'India', 'Citizen', 'Astrology', '', 'Computer games', '', 'Active', '02-Jan-2010', '98.179.164.53', 'http://www.freematrimonialscript.co.cc/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.38 Safari/532.0', NULL, NULL, '2010-01-02 18:56:41', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-tick.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'memphoto1/42015264d586e2cd52f5391765ffee83.gif', 'Yes', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, '2010-01-02 13:03:46', '2010-01-02 13:15:31'),
(266, 'MAT266', 'MAT', 'I Accept  the Terms and Conditions', 'sakhihosting@gmail.com', '766cc4272ff1b682892866ebf35db588', 'Self', 'Advertisements', 'sakhi', 'Female', '1978-05-01', '34', '9:00 am', '', 'Unmarried', '', 'Less than high school', 'Arts', 'Not working', 'Others', '', 'Hindu', 'Does not matter', '', '', 'Hindi', 'Does not matter', 'Does not matter', '', '', '1', '43 kg', 'A+', 'Average', 'Very Fair', 'Veg', 'No', 'No', 'ggg', '', '', '', '+91-Area Code-', '4535333222', 'Citizen', '', '', 'Alive', 'Alive', '', '', 'check system aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Unmarried', '', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Hindu', 'Yadav', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', 'Active', '22-Aug-2012', '125.63.117.248', 'http://sukhmayrishtey.com/registration2.php', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.79 Safari/537.1', NULL, NULL, '2012-08-22 12:36:52', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-tick.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'memphoto1/a39850f69e202795822db71077e408ba.jpg', 'Yes', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, '2012-09-26 22:30:55', '2019-08-07 21:35:33'),
(267, 'MAT267', 'MAT', 'I Accept  the Terms and Conditions', 'neha.gupta@gmail.com', '74577335b4a220d9605d8218d8b39d5b', 'Self', 'Advertisements', 'neha', 'Female', '1983-02-01', '29', '7:00 pm', 'delhi', 'Unmarried', '', 'Masters', 'Computers/ IT', 'Business Person', 'Government', 'Rs.50,001 - 1,00,000', 'Hindu', 'Does not matter', '', '', 'Hindi', 'Does not matter', 'Does not matter', 'No', 'No', '10', '50 kg', 'O+', 'Average', 'Wheatish', 'Veg', 'No', 'No', '9899282642', '', '', '', '98-99-28246', '9899282642', 'Permanent Resident', '', '', 'Alive', 'Alive', '', '', 'mggghgghdgagjgjhsgggggygygsdhlfjhsgdghlsgfgvsgfgsbdsg uysdgdhfl ghlshgshg dhgflshhs hgjgiu ihiugkjfbkhf hgihgkkdfbldfbkjh hkjhdkjhkdhdk hfkj \r\nhkjhv\r\njknkjnkjgvjkpppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp', 'Unmarried', '', 'Traditional', 'Joint Family', 'Upper Middle Class', 'hindu', '1', '1', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Hindu', '6000 Niyogi', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', 'Active', '03-Sep-2012', '180.151.29.104', 'http://sukhmayrishtey.com/registration2.php', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.83 Safari/537.1', NULL, NULL, '2012-09-03 13:34:59', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, NULL),
(268, 'MAT268', 'MAT', 'I Accept  the Terms and Conditions', 'truedestiny.in@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Parents', 'Searh Engines', 'Karan', 'Male', '1985-09-15', '27', '', '', 'Unmarried', '', 'Bachelors', 'Arts', 'Non-mainstream professional', 'Private', 'Rs.3,00,001 - 4,00,000', 'Hindu', '', '', '', '', '', '', '', '', '17', '72 kg', 'O+', 'Athletic', 'Fair', 'Occasionally Non-Veg', 'No', 'No', 'H-3/101, 2nd Floor, Sector-11, Rohini, New Delhi-110085', '', '', '', '+91-011-27572851', '7838477774', 'Citizen', 'Mr Satish Rajpal', 'Mrs Ranjana Rajpal', 'Alive', 'Alive', 'Selfemploy', 'Home Maker', 'My eldest son Karan Rajpal is very kind adorable and little naughty His nature is a very jolly caring loving understandable loyal dedicated trustworthy sincere and transparent person and little possessive He hate liars and too much attitude\r\n', 'Unmarried', '', 'Moderate', 'Seperate Family', 'Middle Class', '', '1', '0', 'No married brother', 'No married sister', '18', '27', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', 'She should be caring and loving by nature Should be understandable in every situations of life and should be adjustable and looking for a working girl', 'Hindu', 'Arora', 'Does not Matter', 'India', 'Does not Matter', '', '', 'Travel', '', 'Active', '08-Sep-2012', '59.177.38.149', 'http://www.sukhmayrishtey.com/registration2.php', 'Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/14.0.1', NULL, NULL, '2012-09-07 22:16:28', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, '2012-09-08 03:56:57'),
(269, 'MAT269', 'MAT', 'I Accept  the Terms and Conditions', 'dkmalhotra001@gmail.com', '86318b9c0eb0b62f19d6618e84c66a64', 'Self', 'Searh Engines', 'dineshkumarmalhotra', 'Male', '1982-04-22', '30', '', '', 'Divorcee', '0', 'Bachelors', 'Law', 'Lawyer', 'Private', 'Rs.2,00,001 -   3,00,000', 'Hindu', '', '', '', '', '', '', '', '', '13', '54 kg', 'O+', 'Average', 'Fair', 'Occasionally Non-Veg', 'No', 'No', 'krishna nagar, delhi ', '', '', '', '+91-Area Code-9718764007', '09718764007', 'Citizen', '', '', 'otAlive', 'Alive', '', 'house wive ', 'my self an advocate by profession simple and god fearing guy wanna life partner who understand me and my family and love me and my family as her own  and trust is tha base of any relationship', 'Divorcee', 'father is no more mother only two elder sisters both are married ', 'Traditional', 'Seperate Family', 'Do not want to tell at this time', '', '0', '2', 'No married brother', 'Two married sisters', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Hindu', 'Punjabi', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', 'Active', '09-Sep-2012', '180.215.157.94', 'http://www.sukhmayrishtey.com/registration2.php', 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)', NULL, NULL, '2012-09-09 16:18:48', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, '2012-09-09 21:49:39'),
(270, 'MAT270', 'MAT', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '0000-00-00', '2012', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '--', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NULL', '', '', 'NULL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '2012-09-23 16:04:15', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, '2012-09-27 19:07:19'),
(271, 'MAT271', 'MAT', '', 'onshop13@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '0000-00-00', '2012', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '--', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NULL', '', '', 'NULL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '2012-09-23 16:06:53', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, NULL),
(272, 'MAT272', 'MAT', '', 'aksharmty@ibibo.com', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '0000-00-00', '2012', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '--', '', '', '', '', 'Alive', 'Alive', '', '', 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'Unmarried', '', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Hindu', '6000 Niyogi', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', 'InActive', '23-Sep-2012', '180.151.29.99', 'http://sukhmayrishtey.com/registration.php', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1', NULL, NULL, '2012-09-23 16:31:42', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, NULL),
(273, 'MAT273', 'MAT', '', 'sunnyg.goyal@gmail.com', '', '', '', '', '', '0000-00-00', '2012', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '--', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NULL', '', '', 'NULL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, '2012-09-25 05:47:10', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sentmessage`
--

CREATE TABLE `sentmessage` (
  `pid` int(11) NOT NULL,
  `ToID` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `FromID` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `Msg` text COLLATE latin1_general_ci,
  `SendDate` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siteconfig`
--

CREATE TABLE `siteconfig` (
  `ID` int(11) DEFAULT '1',
  `Webname` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `WebFriendlyname` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Weblogopath` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Title` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Description` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Keywords` varchar(255) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Footer` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Dbserver` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'localhost',
  `Dbuser` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'mysqluser',
  `Dbpass` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'mysqlpass',
  `Dbname` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'mysqldb',
  `Fromemail` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'info@matrimony.com',
  `ToEmail` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'info@matrimony.com',
  `FeedbackEmail` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'info@matrimony.com',
  `ContactEmail` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'info@matrimony.com',
  `SalesEmail` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT 'info@matrimony.com'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `siteconfig`
--

INSERT INTO `siteconfig` (`ID`, `Webname`, `WebFriendlyname`, `Weblogopath`, `Title`, `Description`, `Keywords`, `Footer`, `Dbserver`, `Dbuser`, `Dbpass`, `Dbname`, `Fromemail`, `ToEmail`, `FeedbackEmail`, `ContactEmail`, `SalesEmail`) VALUES
(1, 'http://jeevansanghani.com', 'http://jeevansanghani.com', 'http://freematrimonialscript.co.cc/pics/logo.gif', 'Matrimonial Script, PHP Matrimonial Script, Matrimonial Script in PHP', 'Matrimonial Script, PHP Matrimonial Script, Matrimonial Script in PHP Matrimonials - Indian Matrimonial, The No.1 Matrimonial Services Provider. Add your Free Matrimonials Profile Now! and Contact Partners for FREE!!                                       ', 'Matrimonial Script, PHP Matrimonial Script, Matrimonial Script in PHP, matrimonial, matrimonials, indian matrimonial, muslim, india, sikh, indian bride, matrimonals, hindu, kerala matrimonial, tamil, indian matrimonial site, telugu, matrimonial site, free', 'Copyright ?  Sukhmayrishtey.com - All Rights Reserved.', '', '', '', '', 'info@sukhmayrishtey.com', 'info@sukhmayrishtey.com', 'feedback@sukhmayrishtey.com', 'enquiry@sukhmayrishtey.com', 'sales@sukhmayrishtey.com');

-- --------------------------------------------------------

--
-- Table structure for table `successstory`
--

CREATE TABLE `successstory` (
  `ID` int(11) UNSIGNED NOT NULL,
  `weddingphoto` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `bridename` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `brideid` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `groomname` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `groomid` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `marriagedate` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `successmessage` text COLLATE latin1_general_ci,
  `approve` varchar(50) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expressinterest`
--
ALTER TABLE `expressinterest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membershipplan`
--
ALTER TABLE `membershipplan`
  ADD PRIMARY KEY (`planid`);

--
-- Indexes for table `paiddetails`
--
ALTER TABLE `paiddetails`
  ADD PRIMARY KEY (`Paidid`);

--
-- Indexes for table `photoprotectrequesters`
--
ALTER TABLE `photoprotectrequesters`
  ADD PRIMARY KEY (`preqid`);

--
-- Indexes for table `receivemessage`
--
ALTER TABLE `receivemessage`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `sentmessage`
--
ALTER TABLE `sentmessage`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `siteconfig`
--
ALTER TABLE `siteconfig`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `successstory`
--
ALTER TABLE `successstory`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expressinterest`
--
ALTER TABLE `expressinterest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1018;

--
-- AUTO_INCREMENT for table `membershipplan`
--
ALTER TABLE `membershipplan`
  MODIFY `planid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paiddetails`
--
ALTER TABLE `paiddetails`
  MODIFY `Paidid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2224;

--
-- AUTO_INCREMENT for table `photoprotectrequesters`
--
ALTER TABLE `photoprotectrequesters`
  MODIFY `preqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receivemessage`
--
ALTER TABLE `receivemessage`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `sentmessage`
--
ALTER TABLE `sentmessage`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `successstory`
--
ALTER TABLE `successstory`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
