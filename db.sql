-- MySQL dump 10.13  Distrib 5.1.52, for Win32 (ia32)
--
-- Host: localhost    Database: hope
-- ------------------------------------------------------
-- Server version	5.1.52-community

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `ArticleID` int(11) NOT NULL,
  `Article` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`ArticleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catagories`
--

DROP TABLE IF EXISTS `catagories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catagories` (
  `CatagoryID` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`CatagoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catagories`
--

LOCK TABLES `catagories` WRITE;
/*!40000 ALTER TABLE `catagories` DISABLE KEYS */;
INSERT INTO `catagories` VALUES (1,'Health','People striving for health-care and needing medical attention'),(2,'Education','People needing money for pursuing education from elementary school to higher studies'),(3,'Disaster','People suffering from the cruelty of natural disasters');
/*!40000 ALTER TABLE `catagories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `causelocations`
--

DROP TABLE IF EXISTS `causelocations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `causelocations` (
  `CauseID` int(11) NOT NULL,
  `LocationID` int(11) DEFAULT NULL,
  PRIMARY KEY (`CauseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `causelocations`
--

LOCK TABLES `causelocations` WRITE;
/*!40000 ALTER TABLE `causelocations` DISABLE KEYS */;
INSERT INTO `causelocations` VALUES (10,15);
/*!40000 ALTER TABLE `causelocations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `causes`
--

DROP TABLE IF EXISTS `causes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `causes` (
  `CauseID` int(11) NOT NULL AUTO_INCREMENT,
  `CatagoryID` int(11) DEFAULT NULL,
  `Title` varchar(500) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `ExpireDate` datetime DEFAULT NULL,
  PRIMARY KEY (`CauseID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `causes`
--

LOCK TABLES `causes` WRITE;
/*!40000 ALTER TABLE `causes` DISABLE KEYS */;
INSERT INTO `causes` VALUES (1,1,'Heart transplant of a 12 year old girl','Hira Mateen is a 12 year old daughter of Hassan Mateen, and is in the dire need of a heart transplant','2012-03-17 00:00:00','2012-04-17 00:00:00'),(2,1,'FA','fasfsa','2012-04-01 08:59:00','2012-01-01 00:00:00'),(3,1,'FAfas','fasfsa','2012-04-01 09:01:11','2012-01-01 00:00:00'),(4,1,'FAfas','fasfsa','2012-04-01 09:01:56','2012-01-01 00:00:00'),(5,1,'FAfas','fasfsa','2012-04-01 09:06:26','2012-01-01 00:00:00'),(6,1,'FAfas','fasfsa','2012-04-01 09:07:16','2012-01-01 00:00:00'),(7,1,'FAfas','fasfsa','2012-04-01 09:07:24','2012-01-01 00:00:00'),(8,3,'','','2012-04-01 09:14:47','2012-01-01 00:00:00'),(9,3,'fadf','fasfsafas','2012-04-01 09:17:02','2012-01-01 00:00:00'),(10,1,'fa','fasdfdas','2012-04-01 09:37:27','2012-01-01 00:00:00'),(11,1,'3123','312','2012-04-01 10:03:39','2012-01-01 00:00:00'),(12,1,'fasdf','fasfsafsaf','2012-04-01 10:17:12','2012-01-01 00:00:00'),(13,2,'dasdas','dadasdas','2012-04-01 10:25:46','2012-01-01 00:00:00');
/*!40000 ALTER TABLE `causes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL AUTO_INCREMENT,
  `DonorID` int(11) DEFAULT NULL,
  `CauseID` int(11) DEFAULT NULL,
  `Comment` varchar(100) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  PRIMARY KEY (`CommentID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,1,'Please donate for this cause, this little girl might die if we don\'t','2012-03-31 00:00:00'),(2,1,1,'fasfsa','2012-04-01 00:57:03'),(3,1,1,'hellow','2012-04-01 00:57:37'),(4,1,1,'fsafas fas ','2012-04-01 00:57:44');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `creditcardtype`
--

DROP TABLE IF EXISTS `creditcardtype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `creditcardtype` (
  `CreditCardTypeID` varchar(100) NOT NULL,
  PRIMARY KEY (`CreditCardTypeID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `creditcardtype`
--

LOCK TABLES `creditcardtype` WRITE;
/*!40000 ALTER TABLE `creditcardtype` DISABLE KEYS */;
INSERT INTO `creditcardtype` VALUES ('American Express'),('Dicover'),('Master'),('PayPal'),('Visa'),('Western Union');
/*!40000 ALTER TABLE `creditcardtype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donations`
--

DROP TABLE IF EXISTS `donations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donations` (
  `DonationID` int(11) NOT NULL AUTO_INCREMENT,
  `CauseID` int(11) DEFAULT NULL,
  `PaymentDetailID` int(11) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  PRIMARY KEY (`DonationID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donations`
--

LOCK TABLES `donations` WRITE;
/*!40000 ALTER TABLE `donations` DISABLE KEYS */;
INSERT INTO `donations` VALUES (1,1,1,8000,'2012-03-30 00:00:00'),(2,1,1,10000,'2012-03-31 00:00:00'),(3,1,1,8000,'2012-03-31 22:40:35'),(4,1,1,8000,'2012-03-31 22:42:16'),(5,1,1,134,'2012-03-31 22:43:13'),(6,1,1,134,'2012-03-31 22:48:26'),(7,1,1,134,'2012-03-31 22:48:32'),(8,1,1,5000,'2012-03-31 22:49:34'),(9,1,1,12,'2012-03-31 22:51:58'),(10,1,1,1234,'2012-03-31 22:54:11'),(11,1,1,123,'2012-04-01 00:01:26'),(12,1,1,321,'2012-04-01 00:01:41'),(13,1,1,312,'2012-04-01 00:02:30');
/*!40000 ALTER TABLE `donations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donors`
--

DROP TABLE IF EXISTS `donors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donors` (
  `DonorID` int(11) NOT NULL AUTO_INCREMENT,
  `About` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`DonorID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donors`
--

LOCK TABLES `donors` WRITE;
/*!40000 ALTER TABLE `donors` DISABLE KEYS */;
INSERT INTO `donors` VALUES (1,'I am a kind-hearted person'),(8,'d');
/*!40000 ALTER TABLE `donors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `LocationID` int(11) NOT NULL AUTO_INCREMENT,
  `Address` varchar(45) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Province` varchar(45) DEFAULT NULL,
  `PostalCode` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`LocationID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'House # D1142, Faisal Town','Lahore','Punjab','54800'),(3,'a','Lahore','Punjab','12'),(4,'a','Lahore','Punjab','a'),(5,'a','Lahore','Punjab','a'),(6,'a','Lahore','Punjab','a'),(7,'a','Lahore','Punjab','a'),(8,'1','Lahore','Punjab','2'),(9,'1','Lahore','Punjab','2'),(10,'1','Lahore','Punjab','2'),(11,'1','Lahore','Punjab','2'),(12,'3123','Lahore','Punjab','312'),(13,'fas','Lahore','Punjab','fas'),(14,'','Lahore','Punjab',''),(15,'a','b','c','fd'),(16,'a','b','c','fd'),(17,'fdsfdsfds','Lahore','Punjab','5453543'),(18,'fdsfdsfds','Lahore','Punjab','5453543'),(19,'fdsfdsfds','Lahore','Punjab','5453543'),(20,'comsats ','Lahore','Punjab','43434'),(21,'e','Lahore','Punjab','f');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `media` (
  `MediaID` int(11) NOT NULL,
  `CauseID` int(11) DEFAULT NULL,
  `Title` varchar(45) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  PRIMARY KEY (`MediaID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
INSERT INTO `media` VALUES (1,1,'Hira hospitalized',NULL),(2,1,'A shot of her face',NULL),(3,1,'Hira going through routine checkups',NULL);
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `needy`
--

DROP TABLE IF EXISTS `needy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `needy` (
  `NeedyID` int(11) NOT NULL AUTO_INCREMENT,
  `CauseID` int(11) DEFAULT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `ContactNo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`NeedyID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `needy`
--

LOCK TABLES `needy` WRITE;
/*!40000 ALTER TABLE `needy` DISABLE KEYS */;
INSERT INTO `needy` VALUES (1,1,'Hassan Mateen','0331-323245'),(2,9,'afas','fasfsa'),(3,13,'xczx','casdasdasdas'),(4,13,'fdadasd','asdasdasdasdas');
/*!40000 ALTER TABLE `needy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paymentdetails`
--

DROP TABLE IF EXISTS `paymentdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paymentdetails` (
  `PaymentDetailID` int(11) NOT NULL AUTO_INCREMENT,
  `DonorID` int(11) DEFAULT NULL,
  `CreditCardTypeID` varchar(100) DEFAULT NULL,
  `SecurityCode` varchar(45) DEFAULT NULL,
  `CreditCardNumber` varchar(45) DEFAULT NULL,
  `ExpirationDate` datetime DEFAULT NULL,
  PRIMARY KEY (`PaymentDetailID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paymentdetails`
--

LOCK TABLES `paymentdetails` WRITE;
/*!40000 ALTER TABLE `paymentdetails` DISABLE KEYS */;
INSERT INTO `paymentdetails` VALUES (1,1,'Visa','1234567','1233467','2014-03-13 00:00:00'),(3,3,'American Express','312','3123','1960-01-01 00:00:00');
/*!40000 ALTER TABLE `paymentdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persons` (
  `PersonID` int(11) NOT NULL AUTO_INCREMENT,
  `LocationID` int(11) DEFAULT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `ContactNo` varchar(45) DEFAULT NULL,
  `Sex` varchar(45) DEFAULT NULL,
  `DOB` datetime DEFAULT NULL,
  `NIC` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PersonID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES (1,NULL,'Ihsaan','Chahi','0331-30040221','Male','1991-03-03 00:00:00','3213123123123'),(10,21,'a','b','g','Male','1960-01-01 00:00:00','c');
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `PhotoID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(45) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `CauseID` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`PhotoID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'Hira hospitalized','2012-01-13 00:00:00','1'),(2,'A shot of her face','2012-01-13 00:00:00','1'),(3,'Hira going through routine checkups','2012-01-13 00:00:00','1'),(4,'test','2012-04-01 10:00:45','10'),(5,'fasfasfsafsdaf','2012-04-01 10:03:46','11'),(6,'fasfasfsafsdaf','2012-04-01 10:04:05','11'),(7,'fasfasfsafsdaf','2012-04-01 10:04:43','11'),(8,'fasfasfsafsdaf','2012-04-01 10:05:13','11'),(9,'12312','2012-04-01 10:08:38','11');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stages`
--

DROP TABLE IF EXISTS `stages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stages` (
  `StageID` int(11) NOT NULL AUTO_INCREMENT,
  `CauseID` int(11) DEFAULT NULL,
  `Title` varchar(500) DEFAULT NULL,
  `Description` varchar(1000) DEFAULT NULL,
  `RequiredFunds` int(11) DEFAULT NULL,
  PRIMARY KEY (`StageID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stages`
--

LOCK TABLES `stages` WRITE;
/*!40000 ALTER TABLE `stages` DISABLE KEYS */;
INSERT INTO `stages` VALUES (1,1,'Inital Checkup','An initial checkup is required to asses the severity of the operation',20000),(2,1,'Preliminary Operation','A preliminary operation will be carried out before the main operation',100000),(3,1,'Main Operation','The final operation that may save the life of the little girl',200000),(4,9,'fsd','fsdf',123),(5,9,'fsd','fsdf',1234),(6,9,'fsd','fsdf',1234),(7,9,'fasfd','fasfsadfsa',321),(8,9,'y','fsdffas',1234);
/*!40000 ALTER TABLE `stages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `PersonID` int(11) DEFAULT NULL,
  `Username` varchar(45) DEFAULT NULL,
  `Password` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'ihsaan','ihsaan','x@x.x'),(8,10,'a','b','d');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `VideoID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(200) DEFAULT NULL,
  `Date` varchar(200) DEFAULT NULL,
  `CauseID` varchar(200) DEFAULT NULL,
  `Link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`VideoID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'A video showing her helplessness','2012-01-01','1','http://www.youtube.com/watch?v=ioMfBqKvXz0'),(2,'A video with the treaments going on','2012-01-01','1','http://www.youtube.com/watch?v=gj0eE59VTIE'),(3,'fasfsadfs','2012-04-01 10:17:22','12','fas fsd fsadf saf ');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-04-01 14:00:06
