-- phpMyAdmin SQL Dump
-- version 3.2.2.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2010 at 11:28 AM
-- Server version: 5.0.67
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(11) NOT NULL auto_increment,
  `adminusername` varchar(50) collate latin1_general_ci default NULL,
  `adminpassword` varchar(50) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `adminusername`, `adminpassword`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `expressinterest`
--

CREATE TABLE IF NOT EXISTS `expressinterest` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `eisender` varchar(100) collate latin1_general_ci default NULL,
  `eireceiver` varchar(100) collate latin1_general_ci default NULL,
  `eimsg` varchar(255) collate latin1_general_ci default NULL,
  `eisentdt` varchar(100) collate latin1_general_ci default NULL,
  `eisender_accept` varchar(100) collate latin1_general_ci default NULL,
  `eirec_accept` varchar(100) collate latin1_general_ci default NULL,
  `eisender_decline` varchar(100) collate latin1_general_ci default NULL,
  `eirec_decline` varchar(100) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1018 ;

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

CREATE TABLE IF NOT EXISTS `membershipplan` (
  `planid` int(10) unsigned NOT NULL auto_increment,
  `planname` varchar(50) collate latin1_general_ci default NULL,
  `plandisplayname` varchar(50) collate latin1_general_ci default NULL,
  `plannoofcontacts` varchar(50) collate latin1_general_ci default NULL,
  `planduration` varchar(50) collate latin1_general_ci default NULL,
  `planamount` varchar(50) collate latin1_general_ci default NULL,
  `planoffers` varchar(255) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`planid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `paiddetails` (
  `Paidid` int(10) unsigned NOT NULL auto_increment,
  `Pmatriid` varchar(50) collate latin1_general_ci default NULL,
  `Pname` varchar(50) collate latin1_general_ci default NULL,
  `Pemail` varchar(50) collate latin1_general_ci default NULL,
  `Paddress` varchar(255) collate latin1_general_ci default NULL,
  `Ppaymode` varchar(50) collate latin1_general_ci default NULL,
  `Pactivedate` varchar(50) collate latin1_general_ci default NULL,
  `Pplan` varchar(50) collate latin1_general_ci default NULL,
  `Pplanduration` int(50) default NULL,
  `Pnocontct` varchar(50) collate latin1_general_ci default NULL,
  `Pamount` varchar(50) collate latin1_general_ci default NULL,
  `Pbankdet` varchar(255) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`Paidid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2224 ;

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

CREATE TABLE IF NOT EXISTS `photoprotectrequesters` (
  `preqid` int(11) NOT NULL auto_increment,
  `RequesterID` varchar(255) collate latin1_general_ci default NULL,
  `ReceiverID` varchar(255) collate latin1_general_ci default NULL,
  `PPReqmsg` varchar(255) collate latin1_general_ci default NULL,
  `ReqDate` varchar(255) collate latin1_general_ci default NULL,
  `ReceiverResponse` varchar(255) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`preqid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `photoprotectrequesters`
--

INSERT INTO `photoprotectrequesters` (`preqid`, `RequesterID`, `ReceiverID`, `PPReqmsg`, `ReqDate`, `ReceiverResponse`) VALUES
(1, 'MAT19', 'MAT44', 'We found your profile to be a good match. Please send me Photo password to proceed further.', '12-Mar-2009', 'Sent');

-- --------------------------------------------------------

--
-- Table structure for table `receivemessage`
--

CREATE TABLE IF NOT EXISTS `receivemessage` (
  `rid` int(11) NOT NULL auto_increment,
  `ToID` varchar(255) collate latin1_general_ci default NULL,
  `FromID` varchar(255) collate latin1_general_ci default NULL,
  `Msg` text collate latin1_general_ci,
  `SendDate` varchar(255) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`rid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `register` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `MatriID` varchar(50) collate latin1_general_ci default NULL,
  `Prefix` varchar(50) collate latin1_general_ci NOT NULL default 'MAT',
  `Termsofservice` varchar(100) collate latin1_general_ci default NULL,
  `ConfirmEmail` varchar(50) collate latin1_general_ci default NULL,
  `ConfirmPassword` varchar(50) collate latin1_general_ci default NULL,
  `Profilecreatedby` varchar(50) collate latin1_general_ci default NULL,
  `Referenceby` varchar(50) collate latin1_general_ci default NULL,
  `Name` varchar(50) collate latin1_general_ci default NULL,
  `Gender` varchar(10) collate latin1_general_ci default NULL,
  `DOB` date default NULL,
  `Age` varchar(50) collate latin1_general_ci default NULL,
  `TOB` varchar(50) collate latin1_general_ci default NULL,
  `POB` varchar(50) collate latin1_general_ci default NULL,
  `Maritalstatus` varchar(50) collate latin1_general_ci default NULL,
  `childrenlivingstatus` varchar(50) collate latin1_general_ci default NULL,
  `Education` varchar(50) collate latin1_general_ci default NULL,
  `EducationDetails` varchar(50) collate latin1_general_ci default NULL,
  `Occupation` varchar(50) collate latin1_general_ci default NULL,
  `Employedin` varchar(50) collate latin1_general_ci default NULL,
  `Annualincome` varchar(50) collate latin1_general_ci default NULL,
  `Religion` varchar(50) collate latin1_general_ci default NULL,
  `Caste` varchar(50) collate latin1_general_ci default NULL,
  `Subcaste` varchar(50) collate latin1_general_ci default NULL,
  `Gothram` varchar(50) collate latin1_general_ci default NULL,
  `Language` varchar(50) collate latin1_general_ci default NULL,
  `Star` varchar(50) collate latin1_general_ci default NULL,
  `Moonsign` varchar(50) collate latin1_general_ci default NULL,
  `Horosmatch` varchar(50) collate latin1_general_ci default NULL,
  `Manglik` varchar(50) collate latin1_general_ci default NULL,
  `Height` varchar(50) collate latin1_general_ci default NULL,
  `Weight` varchar(50) collate latin1_general_ci default NULL,
  `BloodGroup` varchar(50) collate latin1_general_ci default NULL,
  `Bodytype` varchar(50) collate latin1_general_ci default NULL,
  `Complexion` varchar(50) collate latin1_general_ci default NULL,
  `Diet` varchar(50) collate latin1_general_ci default NULL,
  `Smoke` varchar(50) collate latin1_general_ci default NULL,
  `Drink` varchar(50) collate latin1_general_ci default NULL,
  `Address` text collate latin1_general_ci,
  `City` varchar(50) collate latin1_general_ci default NULL,
  `State` varchar(50) collate latin1_general_ci default NULL,
  `Country` varchar(50) collate latin1_general_ci default NULL,
  `Phone` varchar(50) collate latin1_general_ci default NULL,
  `Mobile` varchar(50) collate latin1_general_ci default NULL,
  `Residencystatus` varchar(50) collate latin1_general_ci default NULL,
  `Fathername` varchar(50) collate latin1_general_ci default NULL,
  `Mothersname` varchar(50) collate latin1_general_ci default NULL,
  `Fatherlivingstatus` varchar(50) collate latin1_general_ci default NULL,
  `Motherlivingstatus` varchar(50) collate latin1_general_ci default NULL,
  `Fathersoccupation` varchar(50) collate latin1_general_ci default NULL,
  `Mothersoccupation` varchar(50) collate latin1_general_ci default NULL,
  `Profile` text collate latin1_general_ci,
  `Looking` varchar(50) collate latin1_general_ci default NULL,
  `FamilyDetails` text collate latin1_general_ci,
  `Familyvalues` varchar(50) collate latin1_general_ci default NULL,
  `FamilyType` varchar(50) collate latin1_general_ci default NULL,
  `FamilyStatus` varchar(50) collate latin1_general_ci default NULL,
  `FamilyOrigin` varchar(50) collate latin1_general_ci default NULL,
  `noofbrothers` varchar(50) collate latin1_general_ci default NULL,
  `noofsisters` varchar(50) collate latin1_general_ci default NULL,
  `nbm` varchar(255) collate latin1_general_ci default NULL,
  `nsm` varchar(255) collate latin1_general_ci default NULL,
  `PE_FromAge` varchar(50) collate latin1_general_ci default NULL,
  `PE_ToAge` varchar(50) collate latin1_general_ci default NULL,
  `PE_HaveChildren` varchar(50) collate latin1_general_ci default NULL,
  `PE_Height` varchar(50) collate latin1_general_ci default NULL,
  `PE_Complexion` varchar(50) collate latin1_general_ci default NULL,
  `PE_MotherTongue` varchar(50) collate latin1_general_ci default NULL,
  `PartnerExpectations` text collate latin1_general_ci,
  `PE_Religion` varchar(50) collate latin1_general_ci default NULL,
  `PE_Caste` varchar(50) collate latin1_general_ci default NULL,
  `PE_Education` varchar(50) collate latin1_general_ci default NULL,
  `PE_Countrylivingin` varchar(50) collate latin1_general_ci default NULL,
  `PE_Residentstatus` varchar(50) collate latin1_general_ci default NULL,
  `Hobbies` varchar(50) collate latin1_general_ci default NULL,
  `OtherHobbies` varchar(50) collate latin1_general_ci default NULL,
  `Interests` varchar(50) collate latin1_general_ci default NULL,
  `OtherInterests` varchar(50) collate latin1_general_ci default NULL,
  `Status` varchar(50) collate latin1_general_ci default NULL,
  `Regdate` varchar(50) collate latin1_general_ci default NULL,
  `IP` varchar(50) collate latin1_general_ci default NULL,
  `Ref` text collate latin1_general_ci,
  `Agent` text collate latin1_general_ci,
  `DeleteAction` varchar(50) collate latin1_general_ci default NULL,
  `MemshipExpiryDate` date default NULL,
  `expdays` timestamp NULL default CURRENT_TIMESTAMP,
  `Horoscheck` text collate latin1_general_ci,
  `HorosApprove` varchar(50) collate latin1_general_ci default 'NULL',
  `PhotoProtect` varchar(50) collate latin1_general_ci default NULL,
  `PhotoprotectPassword` varchar(50) collate latin1_general_ci default NULL,
  `Video` varchar(50) collate latin1_general_ci default NULL,
  `Videocheck` varchar(50) collate latin1_general_ci default NULL,
  `Noofcontacts` int(11) default NULL,
  `photocheck` varchar(200) collate latin1_general_ci default NULL,
  `photochecklist` varchar(200) collate latin1_general_ci default NULL,
  `videochecklist` varchar(200) collate latin1_general_ci default NULL,
  `Horoschecklist` varchar(200) collate latin1_general_ci default NULL,
  `DOBday` varchar(10) collate latin1_general_ci default NULL,
  `DOBmonth` varchar(10) collate latin1_general_ci default NULL,
  `DOByear` varchar(10) collate latin1_general_ci default NULL,
  `Orderstatus` varchar(50) collate latin1_general_ci default NULL,
  `Photo1` varchar(255) collate latin1_general_ci NOT NULL default 'nophoto.gif',
  `Photo1Approve` varchar(50) collate latin1_general_ci default 'No',
  `Photo2` varchar(255) collate latin1_general_ci NOT NULL default 'nophoto.gif',
  `Photo2Approve` varchar(50) collate latin1_general_ci default 'No',
  `Photo3` varchar(255) collate latin1_general_ci NOT NULL default 'nophoto.gif',
  `Photo3Approve` varchar(255) collate latin1_general_ci default 'No',
  `Logincount` int(11) default NULL,
  `Lastlogin` datetime default NULL,
  `Thislogin` datetime default NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=266 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `MatriID`, `Prefix`, `Termsofservice`, `ConfirmEmail`, `ConfirmPassword`, `Profilecreatedby`, `Referenceby`, `Name`, `Gender`, `DOB`, `Age`, `TOB`, `POB`, `Maritalstatus`, `childrenlivingstatus`, `Education`, `EducationDetails`, `Occupation`, `Employedin`, `Annualincome`, `Religion`, `Caste`, `Subcaste`, `Gothram`, `Language`, `Star`, `Moonsign`, `Horosmatch`, `Manglik`, `Height`, `Weight`, `BloodGroup`, `Bodytype`, `Complexion`, `Diet`, `Smoke`, `Drink`, `Address`, `City`, `State`, `Country`, `Phone`, `Mobile`, `Residencystatus`, `Fathername`, `Mothersname`, `Fatherlivingstatus`, `Motherlivingstatus`, `Fathersoccupation`, `Mothersoccupation`, `Profile`, `Looking`, `FamilyDetails`, `Familyvalues`, `FamilyType`, `FamilyStatus`, `FamilyOrigin`, `noofbrothers`, `noofsisters`, `nbm`, `nsm`, `PE_FromAge`, `PE_ToAge`, `PE_HaveChildren`, `PE_Height`, `PE_Complexion`, `PE_MotherTongue`, `PartnerExpectations`, `PE_Religion`, `PE_Caste`, `PE_Education`, `PE_Countrylivingin`, `PE_Residentstatus`, `Hobbies`, `OtherHobbies`, `Interests`, `OtherInterests`, `Status`, `Regdate`, `IP`, `Ref`, `Agent`, `DeleteAction`, `MemshipExpiryDate`, `expdays`, `Horoscheck`, `HorosApprove`, `PhotoProtect`, `PhotoprotectPassword`, `Video`, `Videocheck`, `Noofcontacts`, `photocheck`, `photochecklist`, `videochecklist`, `Horoschecklist`, `DOBday`, `DOBmonth`, `DOByear`, `Orderstatus`, `Photo1`, `Photo1Approve`, `Photo2`, `Photo2Approve`, `Photo3`, `Photo3Approve`, `Logincount`, `Lastlogin`, `Thislogin`) VALUES
(263, 'MAT263', 'MAT', 'I Accept  the Terms and Conditions', 'rout@saurav.in', '8cf674180ea201eb14b12486eaef9f28', 'Sibling', 'Friends', 'rahil', 'Female', '1956-02-05', '53', '5:15 am', 'us', 'Widow/Widower', 'Four and aboveYes', 'Diploma', 'Armed Forces', 'Non-mainstream professional', 'Defence', 'Rs.50,001 - 1,00,000', 'Hindu', 'Lohana', '', 'banda', 'Kannada', 'PURATATHI', 'Simha (Leo)', 'Yes', 'Yes', '5', '59 kg', 'A1 +', 'Average', 'Fair', 'Veg', 'No', 'No', 'sdfsf\r\nfsd\r\nsd', '', '', '', '+91-Area Code-9876543210', '', 'Citizen', '', '', 'Alive', 'Alive', '', '', 'gfgfgfgfgfhfhghfhfghfghfhfhfghfghfhdhdhherthrthrhrthrhrthrhrhrthrhrthrthrhrrjyrttyrytyrtyryrtyryyrtytytdf', 'Separated', '', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Muslim', 'Ehle-Hadith', 'Does not Matter', 'India', 'Does not Matter', 'Collectibles', '', 'Computer games', '', 'DIAMOND', '14-Dec-2009', '202.137.216.101', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2b4) Gecko/20091124 Firefox/3.6b4', NULL, '2010-06-29', '2009-12-14 10:19:38', NULL, 'NULL', 'No', NULL, NULL, NULL, 200, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, '2009-12-14 10:20:38'),
(262, 'MAT262', 'MAT', 'I Accept  the Terms and Conditions', 'seosemtraining@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Self', 'Advertisements', 'Lalit', 'Male', '1954-01-02', '56', '9:00 am', '', 'Unmarried', '', 'Bachelors', 'Advertising/ Marketing', 'Non-mainstream professional', 'Business', 'Rs.2,00,001 -   3,00,000', 'Hindu', 'Does not matter', '', '', 'Gujarati', 'Does not matter', 'Does not matter', '', '', '18', '58 kg', 'B+', 'Average', 'Very Fair', 'Veg', 'No', 'No', 'kandivali', '', '', '', '+91-022-56069770', '', 'Citizen', '', '', 'Alive', 'Alive', '', '', 'this is simple testing for the registration procedure of the website let me chk wether its useful or not', 'Unmarried', 'mother father sister wife daughter', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Hindu', 'Bahi', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', 'Active', '14-Dec-2009', '60.243.26.13', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.15) Gecko/2009101601 Firefox/3.0.15', NULL, NULL, '2009-12-14 00:31:12', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, '2009-12-14 00:47:02'),
(261, 'MAT261', 'MAT', 'I Accept  the Terms and Conditions', 'dss@dss.dss', 'e10adc3949ba59abbe56e057f20f883e', 'Self', 'Advertisements', 'raju', 'Male', '1978-01-02', '32', '9:00 am', 'punjab', 'Unmarried', '', 'Masters', 'Advertising/ Marketing', 'Non-mainstream professional', 'Business', 'Rs.50,001 - 1,00,000', 'Hindu', '6000 Niyogi', '', 'chandiswara', 'Chatlisgarhi', 'Does not matter', 'Does not matter', 'Yes', 'Yes', '21', '62 kg', 'A+', 'Average', 'Very Fair', 'Veg', 'No', 'No', 'CHATISGHAR', '', '', '', '+91-4411-3243243243', '345543', 'Citizen', 'View and modify the ', 'View and modify the ', 'Alive', 'Alive', 'View and m', 'View and modify the ', 'mma View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the View and modify the ', 'Unmarried', 'View and modify the View and modify the View and modify the ', 'Traditional', 'Seperate Family', 'Rich', 'View and modify the ', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', 'View and modify the View and modify the View and modify the ', 'Hindu', 'agar Brahmin', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', 'Active', '10-Dec-2009', '123.236.142.126', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; InfoPath.2; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729)', NULL, NULL, '2009-12-10 09:51:32', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, NULL),
(258, 'MAT258', 'MAT', 'I Accept  the Terms and Conditions', 'a@b.com', 'e10adc3949ba59abbe56e057f20f883e', 'Guardian', 'Searh Engines', 'gfgfg', 'Male', '1993-08-16', '16', '6:30 am', '', 'Widow/Widower', 'ThreeNo', 'Trade school', 'Fashion', 'Architect', 'Government', 'Rs.2,00,001 -   3,00,000', 'Hindu', 'Malayalee Namboodiri', '', '', 'Malayalam', 'Does not matter', 'Does not matter', '', '', '4', '58 kg', 'A2B +', 'Average', 'Wheatish Medium', 'Veg', 'No', 'No', 'fff', '', '', '', '+91-0674-123456789', '', 'Citizen', '', '', 'Alive', 'Alive', '', '', 'llllllllllllllllsdfdffvhdsfsdjfgksgdfkhdfksdfsdfkdsfjgbkdjfbsdkfhsdkfhsdbfhksdfsdfjdhsgfksdfbsdkflsdhkfsdbfgksdfgdkshfkdgsfhdgsfksdghfjksdhfgdksf', 'Unmarried', 'zdgxgg', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', '', 'Muslim', 'Memon', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', '', '05-Dec-2009', '202.137.216.67', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2b4) Gecko/20091124 Firefox/3.6b4', NULL, '1969-12-31', '2009-12-05 12:54:11', NULL, 'NULL', 'No', NULL, NULL, NULL, 0, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, '2009-12-05 12:56:43'),
(260, 'MAT260', 'MAT', 'I Accept  the Terms and Conditions', 'subran_mt@yahoo.com', 'cc03e747a6afbbcbf8be7668acfebee5', 'Self', 'Advertisements', 'saym', 'Male', '1983-05-23', '26', '9:00 am', 'kerala', 'Unmarried', '', 'Masters', 'Computers/ IT', 'Actor', 'Government', 'Rs.1,00,001 - 2,00,000', 'Hindu', 'Malayalee Namboodiri', 'thiyya', 'tiyya', 'Malayalam', 'MAHAM', 'Mesh (Aries)', 'No', 'No', '16', '58 kg', 'B+', 'Average', 'Fair', 'Veg', 'No', 'No', 'test', '', '', '', '+91-4545-45454545', '5454546456', 'Citizen', 'ttt', 'rrr', 'Alive', 'Alive', 'rrr', 'rrr', 'test Call and instant message your Gmail contacts for free using Google Talk   Learn more Call and instant message your Gmail contacts for free using Google Talk Learn more', 'Unmarried', '', 'Traditional', 'Joint Family', 'Upper Middle Class', '', '1', '1', 'One married brother', 'One married sister', '18', '30', 'NULL', '5-8', 'Fair', 'NULL', '', 'Hindu', 'Brahmin Goswami', 'Masters', 'India', 'Citizen', 'Astronomy', '', 'Book clubs', '', 'Active', '08-Dec-2009', '117.204.84.41', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.33 Safari/532.0', NULL, NULL, '2009-12-08 13:55:23', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, '2009-12-08 13:57:20', '2009-12-08 14:10:48'),
(259, 'MAT259', 'MAT', 'I Accept  the Terms and Conditions', 'nkkbaburaj@yahoo.com', 'a5e1a8fda4fb6ae3ffae98398cb4faf9', 'Self', 'Advertisements', 'nkkbaburaj', 'Male', '1971-01-02', '39', '9:00 am', 'coimbatore', 'Unmarried', '', 'Masters', 'Administrative services', 'Accountant', 'Not Employed in', 'Rs.1,00,001 - 2,00,000', 'Hindu', 'Gounder', '', 'kongu', 'Tamil', 'ASWINI', 'Mithun (Gemini)', 'Yes', 'Yes', '4', '44 kg', 'A1B -', 'Slim', 'Fair', 'Veg', 'No', 'No', 'sdfsdfgsd\r\nsdfgsdfgs\r\nsdfgsdfgsdfg\r\nsdfgsdfgd', '', '', '', '+91-Area Code-2360916', '', 'Permanent Resident', '', '', 'Alive', 'Alive', '', '', 'sdfgsdfgsdfgsdf sdfgsdfgsdf sdfgsdfgsdf sdfgsdfgsdfg sdfgsdfgsdf', 'Unmarried', '', 'Traditional', 'Seperate Family', 'Rich', '', '0', '0', 'No married brother', 'No married sister', '18', '30', 'NULL', 'Below 4ft', 'Wheatish Medium', 'NULL', '', 'Muslim', 'Memon', 'Does not Matter', 'India', 'Does not Matter', '', '', '', '', '', '06-Dec-2009', '59.92.106.140', 'http://96.0.213.125/script/matrimonial-script/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.33 Safari/532.0', NULL, '1969-12-31', '2009-12-06 23:21:04', NULL, 'NULL', 'No', NULL, NULL, NULL, 0, NULL, 'chklist-cross.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, NULL, NULL),
(265, 'MAT265', 'MAT', 'I Accept  the Terms and Conditions', 'vinay.145@gmail.com', 'f7fdd069e6b8bbd0c65b0579b121e635', 'Parents', 'Advertisements', 'vinay', 'Male', '1954-03-04', '55', '9:00 am', 'hhhh', 'Unmarried', '', 'Bachelors', 'Advertising/ Marketing', 'Non-mainstream professional', 'Business', 'Under   Rs.50,000', 'Hindu', '6000 Niyogi', '', 'hkjh', 'Kannada', 'ASWINI', 'Vrishabh (Taurus)', 'Yes', 'Yes', '14', '69 kg', 'A-', 'Athletic', 'Very Fair', 'Occasionally Non-Veg', 'No', 'Yes', 'test address', '', '', '', '91-020-8767876', '', 'Citizen', 'testin', 'test', 'Alive', 'Alive', 'resing', 'testin', 'test profile sakd hhk kashd sahkdjhsad sjdk shkdhksh  khdddddddddddkjhkhaskd aksh dkhkjd sh sakdhs dhkhsak dkashd kahdkashdk haskdh asdh', 'Unmarried', 'testtt', 'Orthodox', 'Joint Family', 'Rich', 'testd', '3 ', '3 ', 'One married brother', 'One married sister', '18', '30', 'NULL', 'Does not Matter', 'Does not Matter', 'NULL', 'gooddd', 'Hindu', 'Arora', 'Does not Matter', 'India', 'Citizen', 'Astrology', '', 'Computer games', '', 'Active', '02-Jan-2010', '98.179.164.53', 'http://www.freematrimonialscript.co.cc/registration2.php', 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.38 Safari/532.0', NULL, NULL, '2010-01-02 12:56:41', NULL, 'NULL', 'No', NULL, NULL, NULL, NULL, NULL, 'chklist-tick.gif', 'chklist-cross.gif', 'chklist-cross.gif', NULL, NULL, NULL, 'No', 'memphoto1/42015264d586e2cd52f5391765ffee83.gif', 'Yes', 'nophoto.gif', 'No', 'nophoto.gif', 'No', NULL, '2010-01-02 13:03:46', '2010-01-02 13:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `sentmessage`
--

CREATE TABLE IF NOT EXISTS `sentmessage` (
  `pid` int(11) NOT NULL auto_increment,
  `ToID` varchar(255) collate latin1_general_ci default NULL,
  `FromID` varchar(255) collate latin1_general_ci default NULL,
  `Msg` text collate latin1_general_ci,
  `SendDate` varchar(255) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sentmessage`
--


-- --------------------------------------------------------

--
-- Table structure for table `siteconfig`
--

CREATE TABLE IF NOT EXISTS `siteconfig` (
  `ID` int(11) default '1',
  `Webname` varchar(100) collate latin1_general_ci NOT NULL default '',
  `WebFriendlyname` varchar(100) collate latin1_general_ci NOT NULL default '',
  `Weblogopath` varchar(100) collate latin1_general_ci NOT NULL default '',
  `Title` varchar(255) collate latin1_general_ci NOT NULL default '',
  `Description` varchar(255) collate latin1_general_ci NOT NULL default '',
  `Keywords` varchar(255) collate latin1_general_ci NOT NULL default '',
  `Footer` varchar(100) collate latin1_general_ci NOT NULL default '',
  `Dbserver` varchar(100) collate latin1_general_ci NOT NULL default 'localhost',
  `Dbuser` varchar(100) collate latin1_general_ci NOT NULL default 'mysqluser',
  `Dbpass` varchar(100) collate latin1_general_ci NOT NULL default 'mysqlpass',
  `Dbname` varchar(100) collate latin1_general_ci NOT NULL default 'mysqldb',
  `Fromemail` varchar(100) collate latin1_general_ci NOT NULL default 'info@matrimony.com',
  `ToEmail` varchar(100) collate latin1_general_ci NOT NULL default 'info@matrimony.com',
  `FeedbackEmail` varchar(100) collate latin1_general_ci NOT NULL default 'info@matrimony.com',
  `ContactEmail` varchar(100) collate latin1_general_ci NOT NULL default 'info@matrimony.com',
  `SalesEmail` varchar(100) collate latin1_general_ci NOT NULL default 'info@matrimony.com',
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `siteconfig`
--

INSERT INTO `siteconfig` (`ID`, `Webname`, `WebFriendlyname`, `Weblogopath`, `Title`, `Description`, `Keywords`, `Footer`, `Dbserver`, `Dbuser`, `Dbpass`, `Dbname`, `Fromemail`, `ToEmail`, `FeedbackEmail`, `ContactEmail`, `SalesEmail`) VALUES
(1, 'http://freematrimonialscript.co.cc', 'http://freematrimonialscript.co.cc', 'http://freematrimonialscript.co.cc/pics/logo.gif', 'Matrimonial Script, PHP Matrimonial Script, Matrimonial Script in PHP', 'Matrimonial Script, PHP Matrimonial Script, Matrimonial Script in PHP Matrimonials - Indian Matrimonial, The No.1 Matrimonial Services Provider. Add your Free Matrimonials Profile Now! and Contact Partners for FREE!!                                       ', 'Matrimonial Script, PHP Matrimonial Script, Matrimonial Script in PHP, matrimonial, matrimonials, indian matrimonial, muslim, india, sikh, indian bride, matrimonals, hindu, kerala matrimonial, tamil, indian matrimonial site, telugu, matrimonial site, free', 'Copyright ?  Narjis Enterprise - All Rights Reserved.', '', '', '', '', 'narjisenterprise@gmail.com', 'narjisenterprise@gmail.com', 'narjisenterprise@gmail.com', 'narjisenterprise@gmail.com', 'narjisenterprise@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `successstory`
--

CREATE TABLE IF NOT EXISTS `successstory` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `weddingphoto` varchar(200) collate latin1_general_ci default NULL,
  `bridename` varchar(50) collate latin1_general_ci default NULL,
  `brideid` varchar(50) collate latin1_general_ci default NULL,
  `groomname` varchar(50) collate latin1_general_ci default NULL,
  `groomid` varchar(50) collate latin1_general_ci default NULL,
  `marriagedate` varchar(50) collate latin1_general_ci default NULL,
  `successmessage` text collate latin1_general_ci,
  `approve` varchar(50) collate latin1_general_ci default NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3001 ;

--
-- Dumping data for table `successstory`
--

