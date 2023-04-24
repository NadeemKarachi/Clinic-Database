-- MariaDB dump 10.19  Distrib 10.5.18-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: clinic_db
-- ------------------------------------------------------
-- Server version	10.5.18-MariaDB-0+deb11u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appointments` (
  `Patient_ID` char(7) DEFAULT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Appointment_Time` datetime NOT NULL,
  `Office_Address` varchar(40) NOT NULL,
  `Physician_ID` char(7) DEFAULT NULL,
  `Specialist_ID` char(7) DEFAULT NULL,
  `Reason_For_Visit` varchar(100) DEFAULT NULL,
  `Physician_Approval` char(7) DEFAULT NULL,
  `Date_Created` date DEFAULT NULL,
  `Last_Modified_Date` date DEFAULT NULL,
  `Last_Modified_By` varchar(7) DEFAULT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Appointment_Time`),
  KEY `FK_Patient_ID_A` (`Patient_ID`),
  KEY `FK_Physician_ID_A` (`Physician_ID`),
  KEY `FK_Specialist_ID_A` (`Specialist_ID`),
  KEY `FK_Physician_Approval_A` (`Physician_Approval`),
  KEY `FK_Office_Address_A` (`Office_Address`),
  CONSTRAINT `FK_Office_Address_A` FOREIGN KEY (`Office_Address`) REFERENCES `offices` (`ADDRESS`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Patient_ID_A` FOREIGN KEY (`Patient_ID`) REFERENCES `patients` (`Patient_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Physician_Approval_A` FOREIGN KEY (`Physician_Approval`) REFERENCES `physician` (`Employee_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Physician_ID_A` FOREIGN KEY (`Physician_ID`) REFERENCES `physician` (`Employee_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Specialist_ID_A` FOREIGN KEY (`Specialist_ID`) REFERENCES `specialist` (`Employee_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appointments`
--

LOCK TABLES `appointments` WRITE;
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` VALUES ('SH7231','Sheldon Harrison','2023-03-27 10:10:00','9462 Door Dash St.','RM9840','OT8390','Testing 6987','RM9840','2023-03-27','2023-03-27','SH7231',1),('SP7231','Sarah Polk','2023-03-27 20:00:00','1234 Oaks Dr.','RM9840','OT8390','Testing 978','RM9840','2023-03-27','2023-03-27','SP7231',1),('SP7231','Sarah Polk','2023-03-30 06:09:00','9462 Door Dash St.','RM9840','OT8390','Testing 7','RM9840','2023-03-25','2023-03-25','SP7231',1),('SH7231','Sheldon Harrison','2023-03-30 06:24:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing 3',NULL,'2023-03-25','2023-03-25','SH7231',0),('SP7231','Sarah Polk','2023-03-30 09:20:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing','RM9840','2023-03-23','2023-03-23','SP7231',1),('SH7231','Sheldon Harrison','2023-03-30 16:30:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing 6',NULL,'2023-03-25','2023-03-25','SH7231',0),('SP7231','Sarah Polk','2023-03-31 09:40:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing','RM9840','2023-03-23','2023-03-23','SP7231',0),('SP7231','Sarah Polk','2023-04-01 11:51:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 6','RM9840','2023-03-24','2023-03-24','SP7231',0),('SP7231','Sarah Polk','2023-04-04 00:44:00','1234 Oaks Dr.','RM9840','OT8390','Testing 5','RM9840','2023-03-24','2023-03-24','SP7231',0),('SH7231','Sheldon Harrison','2023-04-05 21:52:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing 5987',NULL,'2023-04-05','2023-04-05','SH7231',1),('SH7231','Sheldon Harrison','2023-04-06 02:17:00','9462 Door Dash St.','RM9840','OT8390','Testing 6876','RM9840','2023-03-27','2023-03-27','SH7231',1),('SP7231','Sarah Polk','2023-04-06 09:40:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 5','RM9840','2023-03-24','2023-03-24','SP7231',1),('SH7231','Sheldon Harrison','2023-04-06 14:10:00','9462 Door Dash St.','RM9840',NULL,'Testing 6987',NULL,'2023-03-27','2023-03-27','SH7231',0),('SH7231','Sheldon Harrison','2023-04-08 10:01:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing 3',NULL,'2023-03-23','2023-03-23','SH7231',0),('SP7231','Sarah Polk','2023-04-13 09:43:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 5','RM9840','2023-03-24','2023-03-24','SP7231',0),('SP7231','Sarah Polk','2023-04-16 20:47:00','1234 Oaks Dr.','RM9840','OT8390','Test 45','RM9840','2023-04-16','2023-04-16','SP7231',0),('SP7231','Sarah Polk','2023-04-17 17:45:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 123454','RM9840','2023-04-16','2023-04-16','SP7231',0),('SP7231','Sarah Polk','2023-04-17 23:34:00','7584 DreamWorks Ln.','RM9840','JC4444','IM dying','RM9840','2023-04-17','2023-04-17','SP7231',0),('SP7231','Sarah Polk','2023-04-17 23:39:00','1234 Oaks Dr.','RM9840','JC4444','dishgslfkn','RM9840','2023-04-17','2023-04-17','SP7231',0),('SH7231','Sheldon Harrison','2023-04-18 14:23:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing for drop down',NULL,'2023-04-15','2023-04-15','SH7231',0),('SP7231','Sarah Polk','2023-04-18 14:30:00','1234 Oaks Dr.','RM9840','OT8390','See-if-cancel','RM9840','2023-04-16','2023-04-16','SP7231',0),('SH7231','Sheldon Harrison','2023-04-18 15:37:00','1234 Oaks Dr.','DP1234','EM0929','Testing 5','DP1234','2023-04-17','2023-04-17','SH7231',0),('SP7231','Sarah Polk','2023-04-19 15:41:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 4','RM9840','2023-03-24','2023-03-24','SP7231',0),('SH7231','Sheldon Harrison','2023-04-19 23:33:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing 8',NULL,'2023-03-25','2023-03-25','SH7231',0),('ST9212','Sally Tamarez','2023-04-20 08:34:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing 6',NULL,'2023-04-14','2023-04-14','ST9212',1),('SP7231','Sarah Polk','2023-04-20 13:06:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing123456','RM9840','2023-04-13','2023-04-13','SP7231',0),('SP7231','Sarah Polk','2023-04-20 13:12:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing for drop down','RM9840','2023-04-15','2023-04-15','SP7231',1),('SP7231','Sarah Polk','2023-04-20 14:28:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing Drop Down for physician','RM9840','2023-04-15','2023-04-15','SP7231',0),('SH7231','Sheldon Harrison','2023-04-20 18:09:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing 12',NULL,'2023-04-05','2023-04-05','SH7231',1),('SP7231','Sarah Polk','2023-04-21 15:32:00','9462 Door Dash St.','RM9840','OT8390','Testing for office drop down','RM9840','2023-04-15','2023-04-15','SP7231',0),('SP7231','Sarah Polk','2023-04-21 22:09:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 687','RM9840','2023-03-27','2023-03-27','SP7231',0),('SH7231','Sheldon Harrison','2023-04-21 23:34:00','7584 DreamWorks Ln.','RM9840','JC4444','Testing 5','RM9840','2023-04-16','2023-04-16','SH7231',0),('SP7231','Sarah Polk','2023-04-28 10:20:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 4','RM9840','2023-03-24','2023-03-24','SP7231',1),('SP7231','Sarah Polk','2023-04-28 23:49:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 63','RM9840','2023-03-27','2023-03-27','SP7231',0),('SP7231','Sarah Polk','2023-04-28 23:53:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 5234567','RM9840','2023-04-13','2023-04-13','SP7231',1),('ST9212','Sally Tamarez','2023-04-29 09:56:00','7584 DreamWorks Ln.','TH9203',NULL,'Testing 5',NULL,'2023-04-19','2023-04-19','ST9212',0),('SH7231','Sheldon Harrison','2023-04-29 11:10:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 324','RM9840','2023-04-06','2023-04-06','SH7231',0),('SH7231','Sheldon Harrison','2023-04-30 13:21:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 5987','RM9840','2023-04-05','2023-04-05','SH7231',0),('SP7231','Sarah Polk','2023-05-06 10:25:00','7584 DreamWorks Ln.','RM9840','OT8390','Testing 3765','RM9840','2023-03-27','2023-04-21','SP7231',0),('ST9212','Sally Tamarez','2023-05-06 10:46:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing 5',NULL,'2023-04-21','2023-04-21','ST9212',0),('SH7231','Sheldon Harrison','2023-05-19 02:21:00','7584 DreamWorks Ln.','RM9840',NULL,'Testing 8',NULL,'2023-03-25','2023-03-25','SH7231',0);
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER InsertPreventTrigger BEFORE INSERT ON appointments FOR EACH ROW BEGIN
IF(NEW.Specialist_ID IS NOT NULL) THEN
IF((SELECT P.Physician_Approval 
   FROM patients as P
   WHERE P.Patient_ID = new.Patient_ID) = 0) THEN
SIGNAL SQLSTATE '45000'
SET MESSAGE_TEXT = 'You can not see a specialist without physician approval';
END IF;
END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER cancelAppointmentsPrevent BEFORE UPDATE ON appointments FOR EACH ROW BEGIN
IF((NOW() + INTERVAL 12 HOUR) >= NEW.Appointment_Time) THEN
SET NEW.Flagged_Delete = 0;
SIGNAL SQLSTATE '45000'
SET MESSAGE_TEXT = 'You can not cancel an appointment 12 hours prior to scheduled time';
END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `ceo`
--

DROP TABLE IF EXISTS `ceo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ceo` (
  `Employee_ID` varchar(7) NOT NULL,
  `CEO_Name` varchar(30) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Sex` char(1) DEFAULT NULL,
  `Date_First_Employed` date DEFAULT NULL,
  `Date_Employed_as_CEO` date DEFAULT NULL,
  `Date_Created` date NOT NULL,
  `Last_Modified_Date` date NOT NULL,
  `Last_Modified_By` char(7) NOT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Employee_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ceo`
--

LOCK TABLES `ceo` WRITE;
/*!40000 ALTER TABLE `ceo` DISABLE KEYS */;
INSERT INTO `ceo` VALUES ('BM100','Benito Antonio Martínez Ocasio','1994-03-10','M','2013-12-25','2014-12-25','2013-12-25','2014-12-25','BM100',0);
/*!40000 ALTER TABLE `ceo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `company_expenditures`
--

DROP TABLE IF EXISTS `company_expenditures`;
/*!50001 DROP VIEW IF EXISTS `company_expenditures`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `company_expenditures` AS SELECT
 1 AS `OFFICE_ID`,
  1 AS `Budget`,
  1 AS `Office_Expenditures`,
  1 AS `Office_Difference` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `Department_Name` varchar(30) NOT NULL,
  `Asso_Office` char(1) DEFAULT NULL,
  `Head_Specialist` char(7) DEFAULT NULL,
  `Date_Created` date DEFAULT NULL,
  `Last_Modified_Date` date DEFAULT NULL,
  `Last_Modified_By` char(7) DEFAULT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Department_Name`),
  KEY `FK_Asso_Office_D` (`Asso_Office`),
  KEY `FK_Head_Specialist_D` (`Head_Specialist`),
  CONSTRAINT `FK_Asso_Office_D` FOREIGN KEY (`Asso_Office`) REFERENCES `offices` (`OFFICE_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Head_Specialist_D` FOREIGN KEY (`Head_Specialist`) REFERENCES `specialist` (`Employee_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES ('Cardiology','2','OT8390','2003-09-04','2023-04-19','BM100',0),('Pediatric','1','JC4444','2023-04-18','2023-04-19','BM100',0),('Radiology','1','JC4444','1980-04-07','2003-09-00','BM100',0),('Rehabilitation','2','EM0929','2003-09-04','2003-09-04','BM100',0);
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventory` (
  `Inventory_ID` int(11) NOT NULL,
  `Inventory_Name` varchar(30) NOT NULL,
  `Inventory_Count` int(11) DEFAULT NULL,
  `Asso_Office` char(1) DEFAULT NULL,
  `Accessed_By` char(7) DEFAULT NULL,
  `Inventory_Cost` int(11) DEFAULT NULL,
  `Date_Purchased` date DEFAULT NULL,
  `Expiration_Date` date DEFAULT NULL,
  `Last_Modified_Date` date DEFAULT NULL,
  `Last_Modified_By` char(7) DEFAULT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Inventory_ID`),
  KEY `FK_Asso_Office_I` (`Asso_Office`),
  KEY `FK_Accessed_By_I` (`Accessed_By`),
  KEY `FK_INVENTORY_ID_I` (`Inventory_ID`),
  CONSTRAINT `FK_Accessed_By_I` FOREIGN KEY (`Accessed_By`) REFERENCES `specialist` (`Employee_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Asso_Office_I` FOREIGN KEY (`Asso_Office`) REFERENCES `offices` (`OFFICE_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventory`
--

LOCK TABLES `inventory` WRITE;
/*!40000 ALTER TABLE `inventory` DISABLE KEYS */;
INSERT INTO `inventory` VALUES (1,'Adderall',530,'1','JC4444',100,'2022-09-18','2025-09-18','2023-04-21','JC4444',0),(2,'Ibuprofen',456,'1','JC4444',100,'2018-09-23','2035-09-23','2018-09-23','JC4444',0),(3,'fluoxetine',546,'2','EM0929',100,'2019-04-29','2045-04-29','2019-04-29','EM0929',0),(4,'Celexa',984,'2','EM0929',100,'2019-04-24','2043-04-24','2019-04-24','EM0929',0),(23,'Atorvastatin',654,'2','OT8390',100,'2022-09-18','2025-09-18','2022-09-18','OT8390',0);
/*!40000 ALTER TABLE `inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medical_history`
--

DROP TABLE IF EXISTS `medical_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medical_history` (
  `Patient_ID` char(7) NOT NULL,
  `Patient_Name` varchar(30) DEFAULT NULL,
  `Diagnosis_Test` varchar(1000) DEFAULT NULL,
  `Diagnosis_Results` varchar(1000) DEFAULT NULL,
  `Asso_Physician` char(7) DEFAULT NULL,
  `Asso_Specialist` char(7) DEFAULT NULL,
  `Patient_Age` int(11) DEFAULT NULL,
  `Patient_Sex` char(1) DEFAULT NULL,
  `Appointment_Time` datetime DEFAULT NULL,
  `Date_Created` date DEFAULT NULL,
  `Last_Modified_Date` date DEFAULT NULL,
  `Last_Modified_By` varchar(7) DEFAULT NULL,
  `Medical_History_ID` varchar(45) NOT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Medical_History_ID`),
  KEY `FK_Patient_ID_MH` (`Patient_ID`),
  KEY `FK_Asso_Physician_MH` (`Asso_Physician`),
  KEY `FK_Asso_Specialist_MH` (`Asso_Specialist`),
  KEY `FK_Appointment_Time_MH` (`Appointment_Time`),
  CONSTRAINT `FK_Appointment_Time_MH` FOREIGN KEY (`Appointment_Time`) REFERENCES `appointments` (`Appointment_Time`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Asso_Physician_MH` FOREIGN KEY (`Asso_Physician`) REFERENCES `physician` (`Employee_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Asso_Specialist_MH` FOREIGN KEY (`Asso_Specialist`) REFERENCES `specialist` (`Employee_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Patient_ID_MH` FOREIGN KEY (`Patient_ID`) REFERENCES `patients` (`Patient_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medical_history`
--

LOCK TABLES `medical_history` WRITE;
/*!40000 ALTER TABLE `medical_history` DISABLE KEYS */;
INSERT INTO `medical_history` VALUES ('SP7231','Sarah Polk','ADHD diagnosis test','ADHD diagnosis test positive','RM9840','JC4444',20,'F','2023-03-31 09:40:00','2023-07-30','2023-07-30','JC4444','2345',0),('SP7231','Sarah Polk','ADHD Test','ADHD Test is positive','RM9840','OT8390',20,'F','2023-04-01 11:51:00','2023-04-21','2023-04-21','OT8390','34567ui',0),('SH7231','Sheldon Harrison','The Fibromyalgia Test result is negative','Fibromyalgia Test result is positive','RM9840','JC4444',23,'M','2023-03-30 06:24:00','2023-03-30','2023-03-30','JC4444','654',0),('SH7231','Sheldon Harrison','Depression Test','Depression Test result is positive','RM9840','JC4444',23,'M','2023-04-06 14:10:00','2023-04-06','2023-04-06','JC4444','6854',0),('SH7231','Sheldon Harrison','Clinical Depression Test','Clinical Depression Test result is positive','RM9840','JC4444',23,'M','2023-04-08 10:01:00','2023-04-08','2023-04-08','JC4444','68854',0),('SH7231','Sheldon Harrison','Schizophrenia Test','Schizophrenia Test is Negative','VT9876','JC4444',23,'M','2023-04-06 14:10:00','2023-04-21','2023-04-21','JC4444','kjhgyu',0),('SP7231','Sarah Polk','Atherosclerosis Test','Atherosclerosis Test resulted in positive','RM9840','OT8390',20,'F','2023-03-30 06:09:00','2023-03-25','2023-03-25','OT8390','thgr345',0);
/*!40000 ALTER TABLE `medical_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nurse`
--

DROP TABLE IF EXISTS `nurse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nurse` (
  `Employee_ID` char(7) NOT NULL,
  `Employee_Name` varchar(30) DEFAULT NULL,
  `Asso_Office` char(1) DEFAULT NULL,
  `Asso_Department` varchar(30) DEFAULT NULL,
  `Sex` char(1) DEFAULT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Available` varchar(1000) DEFAULT NULL,
  `Employee_Email` varchar(30) DEFAULT NULL,
  `Employee_Phone` varchar(10) DEFAULT NULL,
  `Date_First_Employed` date DEFAULT NULL,
  `Years_In_Department` int(11) DEFAULT NULL,
  `Supervisor_ID` char(7) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Date_Created` date NOT NULL,
  `Last_Date_Modified` date NOT NULL,
  `Last_Modified_By` char(7) NOT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Employee_ID`),
  KEY `FK_Asso_Office_N` (`Asso_Office`),
  KEY `FK_Asso_Department_N` (`Asso_Department`),
  KEY `FK_Supervisor_ID_N` (`Supervisor_ID`),
  CONSTRAINT `FK_Asso_Department_N` FOREIGN KEY (`Asso_Department`) REFERENCES `departments` (`Department_Name`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Asso_Office_N` FOREIGN KEY (`Asso_Office`) REFERENCES `offices` (`OFFICE_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Supervisor_ID_N` FOREIGN KEY (`Supervisor_ID`) REFERENCES `specialist` (`Employee_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nurse`
--

LOCK TABLES `nurse` WRITE;
/*!40000 ALTER TABLE `nurse` DISABLE KEYS */;
/*!40000 ALTER TABLE `nurse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `office_info`
--

DROP TABLE IF EXISTS `office_info`;
/*!50001 DROP VIEW IF EXISTS `office_info`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `office_info` AS SELECT
 1 AS `OFFICE_ID`,
  1 AS `ADDRESS`,
  1 AS `Number_Of_Departments`,
  1 AS `Number_Of_Specialist` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offices` (
  `OFFICE_ID` char(1) NOT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `DATE_ESTABLISHED` date DEFAULT NULL,
  `BUDGET` int(11) DEFAULT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`OFFICE_ID`),
  UNIQUE KEY `ADDRESS_UNIQUE` (`ADDRESS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offices`
--

LOCK TABLES `offices` WRITE;
/*!40000 ALTER TABLE `offices` DISABLE KEYS */;
INSERT INTO `offices` VALUES ('1','1234 Oaks Dr.','1980-04-07',1849999,0),('2','7584 DreamWorks Ln.','2003-09-04',200000,0),('3','9462 Door Dash St.','2023-03-22',85000,0),('4','123 Random St.','2023-04-17',900000,0);
/*!40000 ALTER TABLE `offices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `Patient_ID` char(7) NOT NULL,
  `Physician_ID` char(7) DEFAULT NULL,
  `Specialist_ID` char(7) DEFAULT NULL,
  `Diagnosis_Test` varchar(1000) DEFAULT NULL,
  `Diagnosis_Results` varchar(1000) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Patient_Phone_Number` varchar(30) DEFAULT NULL,
  `Patient_Email` varchar(30) DEFAULT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Patient_Age` int(11) DEFAULT NULL,
  `Patient_Sex` char(1) DEFAULT NULL,
  `Patient_Address` varchar(40) DEFAULT NULL,
  `Insurance_Name` varchar(30) DEFAULT NULL,
  `Insurance_ID` int(11) DEFAULT NULL,
  `Co_Insurance_Name` varchar(30) DEFAULT NULL,
  `Co_Insurance_Number` int(11) DEFAULT NULL,
  `Employer` varchar(50) DEFAULT NULL,
  `Billing_Information` varchar(1000) DEFAULT NULL,
  `Language` varchar(30) DEFAULT NULL,
  `Physician_Approval` tinyint(1) DEFAULT NULL,
  `Date_Created` date DEFAULT NULL,
  `Last_Modified_Date` date DEFAULT NULL,
  `Last_Modified_By` varchar(7) DEFAULT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Patient_ID`),
  KEY `FK_Physician_ID_P` (`Physician_ID`),
  KEY `FK_Specialist_ID_P` (`Specialist_ID`),
  CONSTRAINT `FK_Physician_ID_P` FOREIGN KEY (`Physician_ID`) REFERENCES `physician` (`Employee_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Specialist_ID_P` FOREIGN KEY (`Specialist_ID`) REFERENCES `specialist` (`Employee_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES ('JD1234',NULL,NULL,NULL,NULL,'John Doe','1234567890','johndoe@gmail.com','2001-04-17',21,'M','123 Oaks Dr',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2023-04-17','2023-04-17','JD1234',0),('SH7231','RM9840',NULL,NULL,NULL,'Sheldon Harrison','2316709098','sheldonHarris@gmail.com','2000-04-28',23,'M','895 Shady Ln.','Real Insurance',34890,NULL,NULL,'Real Government Facility','Debit Card: 1234567891094523','English',1,'2018-09-29','2018-09-29','RM9840',0),('SP7231','RM9840',NULL,'Atherosclerosis Test','Atherosclerosis Test resulted in positive','Sarah Polk','2816709044','sarahPolk@gmail.com','2003-04-28',20,'F','895 Rose Field Ln.','UnitedHealthcare Insurance',35632,NULL,NULL,'Sheldon ISD','Debit Card: 1234567891011123','English',1,'2016-09-29','2016-09-29','RM9840',0),('ST9212',NULL,NULL,NULL,NULL,'Sally Tamarez','1234567890','st@gmail.com','2003-06-14',21,'F','123 River Ln',NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2023-04-14','2023-04-14','ST9212',0);
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `physician`
--

DROP TABLE IF EXISTS `physician`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `physician` (
  `Employee_ID` char(7) NOT NULL,
  `Employee_Name` varchar(30) DEFAULT NULL,
  `Asso_Office` char(1) DEFAULT NULL,
  `Asso_Department` varchar(30) DEFAULT NULL,
  `Sex` char(1) DEFAULT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Employee_Email` varchar(30) DEFAULT NULL,
  `Employee_Phone` varchar(10) DEFAULT NULL,
  `Available` varchar(1000) DEFAULT NULL,
  `Date_First_Employed` date DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `Date_Created` date NOT NULL,
  `Last_Date_Modified` date NOT NULL,
  `Last_Modified_By` char(7) NOT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Employee_ID`),
  KEY `FK_Asso_Office_Phy` (`Asso_Office`),
  KEY `FK_Asso_Department_Phy` (`Asso_Department`),
  CONSTRAINT `FK_Asso_Department_Phy` FOREIGN KEY (`Asso_Department`) REFERENCES `departments` (`Department_Name`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Asso_Office_Phy` FOREIGN KEY (`Asso_Office`) REFERENCES `offices` (`OFFICE_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `physician`
--

LOCK TABLES `physician` WRITE;
/*!40000 ALTER TABLE `physician` DISABLE KEYS */;
INSERT INTO `physician` VALUES ('DP1234','David Perez','1','Radiology','M','2002-09-12','dpp@gmail.com','1234456789','Mon-Fri 8:00 AM - 5:00 PM ','2020-09-18',89000,'2020-09-18','2023-04-21','',0),('HP1234','Harry Philips','3','Cardiology','M','2023-04-18','hp@gmail.com','123456789','Mon-Fri 8:00 AM - 5:00 PM','2023-04-18',90000,'2023-04-18','2023-04-18','BM100',1),('RM9840','Reyna Martinez','2','Cardiology','F','1980-12-01','reynam@gmail.com','9343457865','Mon-Fri 8:00 AM - 5:00 PM','2013-09-04',90000,'1980-12-01','1980-12-01','BM100',0),('TH9203','Theodore Harris','3','Cardiology','M','2000-05-06','th@gmail.com','123456789','Mon-Fri 8:00 AM - 5:00 PM','2023-04-18',90000,'2023-04-18','2023-04-18','BM100',0),('VT9876','Vincent Tran','3',NULL,'M','2003-04-12','vt@gmail.com','1234566789','Mon-Fri 8:00 AM - 5:00 PM','2020-03-09',90000,'2020-03-09','2020-03-09','BM100',0);
/*!40000 ALTER TABLE `physician` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `physician_info_per_office`
--

DROP TABLE IF EXISTS `physician_info_per_office`;
/*!50001 DROP VIEW IF EXISTS `physician_info_per_office`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `physician_info_per_office` AS SELECT
 1 AS `Employee_Name`,
  1 AS `Employee_ID`,
  1 AS `OFFICE_ID`,
  1 AS `ADDRESS`,
  1 AS `Salary` */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `specialist`
--

DROP TABLE IF EXISTS `specialist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialist` (
  `Employee_ID` char(7) NOT NULL,
  `Employee_Name` varchar(30) DEFAULT NULL,
  `Asso_Office` char(1) DEFAULT NULL,
  `Asso_Department` varchar(30) DEFAULT NULL,
  `Sex` char(1) DEFAULT NULL,
  `Date_Of_Birth` date DEFAULT NULL,
  `Available` varchar(1000) DEFAULT NULL,
  `Specialist_Practice` varchar(1000) NOT NULL,
  `Employee_Email` varchar(30) DEFAULT NULL,
  `Employee_Phone` varchar(10) DEFAULT NULL,
  `Date_First_Employed` date DEFAULT NULL,
  `Years_In_Department` int(11) DEFAULT NULL,
  `Years_as_head_of_Department` int(11) DEFAULT NULL,
  `Supervisor_ID` char(7) DEFAULT NULL,
  `Date_Created` date NOT NULL,
  `Last_Date_Modified` date NOT NULL,
  `Last_Modified_By` char(7) NOT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Employee_ID`),
  KEY `FK_Supervisor_ID_S` (`Supervisor_ID`),
  KEY `FK_Asso_Office_S` (`Asso_Office`),
  KEY `FK_Asso_Department_S` (`Asso_Department`),
  CONSTRAINT `FK_Asso_Department_S` FOREIGN KEY (`Asso_Department`) REFERENCES `departments` (`Department_Name`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Asso_Office_S` FOREIGN KEY (`Asso_Office`) REFERENCES `offices` (`OFFICE_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Supervisor_ID_S` FOREIGN KEY (`Supervisor_ID`) REFERENCES `specialist` (`Employee_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialist`
--

LOCK TABLES `specialist` WRITE;
/*!40000 ALTER TABLE `specialist` DISABLE KEYS */;
INSERT INTO `specialist` VALUES ('EM0929','Ernesto Arias Mendoza','2','Rehabilitation','M','2002-09-29','Mon-Fri 8:00 AM - 5:00 PM','Rehabilitation','em@gmail.com','1234556789','2020-09-17',3,2,NULL,'2020-09-17','2023-04-21','',0),('JC4444','Jelena Canares','1','Radiology','F','2002-02-03','Mon-Fri 8:00 AM - 5:00 PM','Radiologist','jc@gmail.com','1234567893','2020-07-17',2,1,NULL,'2020-07-17','2020-07-17','BM100',0),('MN8905','Manny Nunez','1','Radiology','M','2000-04-19','Mon-Fri 8:00 AM - 5:00 PM','Radiologist','mn@gmail.com','123456789','2023-04-18',1,0,'JC4444','2023-04-18','2023-04-18','BM100',0),('OT8390','Ozuna Tellez','2','Cardiology','M','1998-09-23','Mon-Fri 8:00 AM - 5:00 PM','Cardiologist','ozutel@gmail.com','2817659076','2020-08-17',2,1,NULL,'2020-08-17','2020-08-17','BM100',0),('PN9065','Penny Nakamura','2','Cardiology','F','2000-04-04','Mon-Fri 8:00 AM - 5:00 PM','Cardiologist','pn@gmail.com','123456789','2023-04-18',0,0,'OT8390','2023-04-18','2023-04-18','BM100',1);
/*!40000 ALTER TABLE `specialist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `treatment`
--

DROP TABLE IF EXISTS `treatment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `treatment` (
  `Treatment_Name` varchar(30) NOT NULL,
  `Treatment_Administrator` char(7) NOT NULL,
  `Treatment_Patient` char(7) NOT NULL,
  `Administration_Date` date DEFAULT NULL,
  `Treatment_Amount` float DEFAULT NULL,
  `Date_Created` date DEFAULT NULL,
  `Last_Modified_Date` date DEFAULT NULL,
  `Last_Modified_By` char(7) DEFAULT NULL,
  `Treatment_ID` int(11) NOT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Treatment_ID`),
  KEY `FK_Treatment_Administrator_T` (`Treatment_Administrator`),
  KEY `FK_Treatment_Patient_T` (`Treatment_Patient`),
  CONSTRAINT `FK_Treatment_Administrator_T` FOREIGN KEY (`Treatment_Administrator`) REFERENCES `specialist` (`Employee_ID`) ON UPDATE CASCADE,
  CONSTRAINT `FK_Treatment_Patient_T` FOREIGN KEY (`Treatment_Patient`) REFERENCES `patients` (`Patient_ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `treatment`
--

LOCK TABLES `treatment` WRITE;
/*!40000 ALTER TABLE `treatment` DISABLE KEYS */;
INSERT INTO `treatment` VALUES ('Adderall','JC4444','SP7231','2018-06-01',3,'2018-06-01','2018-06-01','JC4444',1,0),('Ibuprofen','JC4444','SH7231','2020-03-03',4,'2020-03-03','2020-03-03','JC4444',2,0),('fluoxetine','EM0929','SH7231','2021-09-29',30,'2021-09-29','2021-09-29','EM0929',3,0),('Celexa','EM0929','SH7231','2022-04-23',23,'2022-04-23','2022-04-23','EM0929',4,0),('Atorvastatin','OT8390','SP7231','2018-09-17',3,'2018-09-17','2018-09-17','OT8390',23,0);
/*!40000 ALTER TABLE `treatment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_account`
--

DROP TABLE IF EXISTS `user_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_account` (
  `Patient_ID` varchar(7) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Date_Of_Birth` date NOT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `Phone_Number` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Date_Created` date NOT NULL,
  `Last_Modified_Date` date NOT NULL,
  `Last_Modified_By` varchar(7) NOT NULL,
  `Flagged_Delete` tinyint(4) DEFAULT 0,
  PRIMARY KEY (`Patient_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_account`
--

LOCK TABLES `user_account` WRITE;
/*!40000 ALTER TABLE `user_account` DISABLE KEYS */;
INSERT INTO `user_account` VALUES ('BM100','admin','1994-03-10','493 Humacao St.','8769079876','benito@gmail.com','2023-03-30','2023-03-30','BM100',0),('doctor','12345','1990-02-20','123 Oak Dr.','1234567890','filler@gmail.com','2023-03-30','2023-03-30','BM100',0),('JD1234','1234','2001-04-17','123 Oaks Dr','1234567890','johndoe@gmail.com','2023-04-17','2023-04-17','JD1234',0),('SH7231','1234','2000-04-28','895 Shady Ln.','2316709098','sheldonHarris@gmail.com','2023-03-29','2023-03-29','SH7231',0),('SP7231','1234','2003-04-28','895 Rose Field Ln.','2816709044','sarahPolk@gmail.com','2023-03-29','2023-03-29','SP7231',0),('ST9212','1234','2003-06-14','123 River Ln','1234567890','st@gmail.com','2023-04-14','2023-04-14','ST9212',0);
/*!40000 ALTER TABLE `user_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `company_expenditures`
--

/*!50001 DROP VIEW IF EXISTS `company_expenditures`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `company_expenditures` AS select `O`.`OFFICE_ID` AS `OFFICE_ID`,`O`.`BUDGET` AS `Budget`,sum(`P`.`Salary`) AS `Office_Expenditures`,`O`.`BUDGET` - sum(`P`.`Salary`) AS `Office_Difference` from (`physician` `P` join `offices` `O`) where `P`.`Asso_Office` = `O`.`OFFICE_ID` and `P`.`Flagged_Delete` = 0 and `O`.`Flagged_Delete` = 0 group by `O`.`OFFICE_ID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `office_info`
--

/*!50001 DROP VIEW IF EXISTS `office_info`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `office_info` AS select `o`.`OFFICE_ID` AS `OFFICE_ID`,`o`.`ADDRESS` AS `ADDRESS`,count(`d`.`Asso_Office`) AS `Number_Of_Departments`,count(`s`.`Asso_Office`) AS `Number_Of_Specialist` from ((`offices` `o` join `departments` `d`) join `specialist` `s`) where `s`.`Asso_Office` = `o`.`OFFICE_ID` and `d`.`Asso_Office` = `o`.`OFFICE_ID` and `s`.`Asso_Department` = `d`.`Department_Name` and `s`.`Flagged_Delete` = 0 and `d`.`Flagged_Delete` = 0 and `o`.`Flagged_Delete` = 0 group by `o`.`OFFICE_ID`,`o`.`ADDRESS` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `physician_info_per_office`
--

/*!50001 DROP VIEW IF EXISTS `physician_info_per_office`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `physician_info_per_office` AS select `p`.`Employee_Name` AS `Employee_Name`,`p`.`Employee_ID` AS `Employee_ID`,`o`.`OFFICE_ID` AS `OFFICE_ID`,`o`.`ADDRESS` AS `ADDRESS`,`p`.`Salary` AS `Salary` from (`physician` `p` join `offices` `o`) where `p`.`Asso_Office` = `o`.`OFFICE_ID` and `p`.`Flagged_Delete` = 0 and `o`.`Flagged_Delete` = 0 */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-04-22  5:35:18
