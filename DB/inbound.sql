-- MySQL dump 10.11
--
-- Host: localhost    Database: inbound
-- ------------------------------------------------------
-- Server version	5.0.77

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
-- Table structure for table `tblDID`
--

DROP TABLE IF EXISTS `tblDID`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblDID` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `DID` varchar(20) default NULL,
  `description` varchar(20) default NULL,
  `fromIP` varchar(20) default NULL,
  `vendor` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblDID`
--

LOCK TABLES `tblDID` WRITE;
/*!40000 ALTER TABLE `tblDID` DISABLE KEYS */;
INSERT INTO `tblDID` VALUES (1,'4420723223233','test','1.1.1.1','vonage');
/*!40000 ALTER TABLE `tblDID` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tbladmin` (
  `uid` varchar(12) default NULL,
  `pwd` varchar(12) default NULL,
  `fname` varchar(25) default NULL,
  `lname` varchar(25) default NULL,
  `email` varchar(50) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tbladmin`
--

LOCK TABLES `tbladmin` WRITE;
/*!40000 ALTER TABLE `tbladmin` DISABLE KEYS */;
INSERT INTO `tbladmin` VALUES ('admin','1212','CallCenter','Admin','metroadmin@metrophone.com.pk');
/*!40000 ALTER TABLE `tbladmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblagent`
--

DROP TABLE IF EXISTS `tblagent`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblagent` (
  `agentcode` int(4) NOT NULL auto_increment,
  `agentname` varchar(50) NOT NULL default '',
  `comments` varchar(50) default NULL,
  `agentrole` int(4) NOT NULL default '0',
  `agentpassword` varchar(50) NOT NULL default '',
  `agentactive` int(4) NOT NULL default '0',
  `agentenabled` int(1) default '0',
  `exten` varchar(10) default NULL,
  `projectid` int(4) default '0',
  `agentip` varchar(16) default NULL,
  `lastcall` datetime default NULL,
  PRIMARY KEY  (`agentcode`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblagent`
--

LOCK TABLES `tblagent` WRITE;
/*!40000 ALTER TABLE `tblagent` DISABLE KEYS */;
INSERT INTO `tblagent` VALUES (1,'ishtiaq',NULL,2,'a',1,1,'1007',0,NULL,NULL),(2,'agent2',NULL,2,'a',1,1,'1000',0,NULL,NULL),(3,'admin',NULL,1,'admin',0,0,NULL,0,NULL,NULL),(4,'agent3',NULL,2,'a',1,1,'1002',0,NULL,NULL),(5,'test',NULL,3,'fff',1,1,NULL,0,NULL,NULL),(6,'test2',NULL,3,'super',1,1,'1001',0,NULL,NULL),(7,'test2',NULL,4,'div',1,1,NULL,0,NULL,NULL),(8,'test3',NULL,4,'div',1,1,NULL,0,NULL,NULL),(9,'bnr1_1',NULL,4,'test',1,1,NULL,0,NULL,NULL),(10,'bnr1_2',NULL,4,'test',1,1,NULL,0,NULL,NULL),(11,'bnr2_1',NULL,4,'test',1,0,NULL,0,NULL,NULL),(12,'bnr2_2',NULL,4,'test',1,0,NULL,0,NULL,NULL),(13,'enm1_1',NULL,4,'test',1,0,NULL,0,NULL,NULL),(14,'enm1_2',NULL,4,'test',1,0,NULL,0,NULL,NULL),(15,'fns1_1',NULL,4,'test',1,0,NULL,0,NULL,NULL);
/*!40000 ALTER TABLE `tblagent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblagent_call`
--

DROP TABLE IF EXISTS `tblagent_call`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblagent_call` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `agentcode` bigint(10) default NULL,
  `callid` bigint(10) default NULL,
  `calldate` datetime default NULL,
  `enable` int(1) default NULL,
  `complainid` int(10) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblagent_call`
--

LOCK TABLES `tblagent_call` WRITE;
/*!40000 ALTER TABLE `tblagent_call` DISABLE KEYS */;
INSERT INTO `tblagent_call` VALUES (1,1,7538,'2011-10-10 03:32:49',NULL,0),(2,1,7539,'2011-10-10 03:35:38',NULL,0);
/*!40000 ALTER TABLE `tblagent_call` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcity`
--

DROP TABLE IF EXISTS `tblcity`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcity` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `name` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcity`
--

LOCK TABLES `tblcity` WRITE;
/*!40000 ALTER TABLE `tblcity` DISABLE KEYS */;
INSERT INTO `tblcity` VALUES (1,'Islamabad'),(2,'Karachi'),(3,'Lahore');
/*!40000 ALTER TABLE `tblcity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcompaign`
--

DROP TABLE IF EXISTS `tblcompaign`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcompaign` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `name` varchar(40) default NULL,
  `description` varchar(40) default NULL,
  `active` tinyint(1) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcompaign`
--

LOCK TABLES `tblcompaign` WRITE;
/*!40000 ALTER TABLE `tblcompaign` DISABLE KEYS */;
INSERT INTO `tblcompaign` VALUES (1,'microsoft','test',1);
/*!40000 ALTER TABLE `tblcompaign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcompaignDID`
--

DROP TABLE IF EXISTS `tblcompaignDID`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcompaignDID` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `compaignid` bigint(10) default NULL,
  `DIDid` bigint(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcompaignDID`
--

LOCK TABLES `tblcompaignDID` WRITE;
/*!40000 ALTER TABLE `tblcompaignDID` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblcompaignDID` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcompaignagent`
--

DROP TABLE IF EXISTS `tblcompaignagent`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcompaignagent` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `compaignid` bigint(10) default NULL,
  `agentcode` bigint(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcompaignagent`
--

LOCK TABLES `tblcompaignagent` WRITE;
/*!40000 ALTER TABLE `tblcompaignagent` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblcompaignagent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcompaigntimeshift`
--

DROP TABLE IF EXISTS `tblcompaigntimeshift`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcompaigntimeshift` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `compaignid` bigint(10) default NULL,
  `timeshiftid` bigint(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcompaigntimeshift`
--

LOCK TABLES `tblcompaigntimeshift` WRITE;
/*!40000 ALTER TABLE `tblcompaigntimeshift` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblcompaigntimeshift` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcomplain`
--

DROP TABLE IF EXISTS `tblcomplain`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcomplain` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `dte` datetime default NULL,
  `acc` varchar(50) default NULL,
  `phn` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `compnature` int(1) default NULL,
  `text` varchar(250) default NULL,
  `status` int(1) default NULL,
  `compid` int(10) default NULL,
  `agent` varchar(20) default NULL,
  `rank` varchar(30) default NULL,
  `street` varchar(110) default NULL,
  `employee1` bigint(10) default NULL,
  `employee2` bigint(10) default NULL,
  `division` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3428 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcomplain`
--

LOCK TABLES `tblcomplain` WRITE;
/*!40000 ALTER TABLE `tblcomplain` DISABLE KEYS */;
INSERT INTO `tblcomplain` VALUES (3416,'2012-03-19 10:52:38','232323','111111','Kh',2,'test',0,1,'ishtiaq',NULL,NULL,NULL,NULL,'bnr1'),(3417,'2012-03-19 10:52:38','232323','111111','Kh',2,'test',0,1,'ishtiaq',NULL,NULL,NULL,NULL,NULL),(3418,'2012-03-20 04:30:52','Flat # 1','4637','Lt Cdr  M. Abbas',1,'test',0,1,'ishtiaq',NULL,'Block # E-1, P.No. 4637',0,0,NULL),(3419,'2012-03-20 04:36:15','Flat # 1','4637','Lt Cdr  M. Abbas',1,'test24',0,1,'ishtiaq',NULL,'Block # E-1, P.No. 4637',0,0,NULL),(3420,'2012-03-20 04:39:18','Flat # 1','4637','Lt Cdr  M. Abbas',1,'test 34',0,1,'ishtiaq',NULL,'Block # E-1, P.No. 4637',0,0,NULL),(3421,'2012-03-20 04:45:56','Flat # 1 ','4637','Lt Cdr  M. Abbas',1,'test',1,3502,'ishtiaq',NULL,'Block # E-1, P.No. 4637',2,4,'bnr1'),(3422,'2012-03-20 07:45:45','Flat # 1','4637','Lt Cdr  M. Abbas',1,'test1234',0,3505,'ishtiaq',NULL,'Block # E-1, P.No. 4637',2,0,'bnr2'),(3423,'2012-03-20 14:00:03','Flat # 1','4637','Lt Cdr  M. Abbas',1,'tetst',0,3506,'ishtiaq',NULL,'Block # E-1, P.No. 4637',0,0,'bnr1'),(3424,'2012-03-20 14:01:07','Flat # 1','4637','Lt Cdr  M. Abbas',1,'s',1,3507,'ishtiaq',NULL,'Block # E-1, P.No- 4637',2,0,'bnr1'),(3425,'2012-03-24 08:35:56','232323  ','4637','john smith',0,'test',1,3520,'ishtiaq',NULL,'Block # E-1, P.No- 4637',2,0,'bnr1'),(3426,'2012-03-24 13:56:08','231','321','231',0,'Gas - Gas leak',0,3528,'agent2',NULL,'231',2,2,'bnr2'),(3427,'2012-03-25 15:40:23','Flat # 1','4637','Lt Cdr  M. Abbas',0,'Decor1',0,3532,'ishtiaq',NULL,'Block # E-1, P.No. 4637',2,0,'bnr1');
/*!40000 ALTER TABLE `tblcomplain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcomplainthread`
--

DROP TABLE IF EXISTS `tblcomplainthread`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcomplainthread` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `descr` varchar(300) default NULL,
  `dateofact` datetime default NULL,
  `compid` int(2) default NULL,
  `agent` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1258 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcomplainthread`
--

LOCK TABLES `tblcomplainthread` WRITE;
/*!40000 ALTER TABLE `tblcomplainthread` DISABLE KEYS */;
INSERT INTO `tblcomplainthread` VALUES (1,'fffff','2009-09-09 09:09:09',11,'agent1'),(2,'jjjjj','2010-06-03 22:31:24',11,'agent1'),(3,'test','2010-06-03 22:52:14',11,'admin'),(4,'hs','2010-06-03 22:57:50',11,'agent2'),(5,'hi man','2010-06-03 22:58:51',11,'agent1'),(6,'k','2010-07-04 21:38:52',113,'ishtiaq'),(7,'requred pencil','2010-07-04 21:53:52',112,'ishtiaq'),(8,'kjhjh','2010-07-04 21:56:37',105,'ishtiaq'),(9,'jgh','2010-07-04 22:13:54',113,'ishtiaq'),(10,'jgf','2010-07-04 22:39:28',113,'ishtiaq'),(11,'1','2010-07-04 22:40:12',113,'ishtiaq'),(12,'K.E.S.C ON 20:05','2010-07-06 20:11:13',335,'ishtiaq'),(13,'Teket Blue N.A','2010-07-08 08:35:00',401,'ishtiaq'),(14,'test','2010-07-11 01:08:26',9,'agent2'),(15,'Tuble Iight Def','2010-07-13 15:09:07',987,'ishtiaq'),(16,'Tube Light Def','2010-07-13 15:12:18',987,'ishtiaq'),(17,'Gutter Blocked','2010-07-13 15:13:36',987,'ishtiaq'),(18,'Gutter chocked','2010-07-14 08:34:50',1041,'ishtiaq'),(19,'plamber required \r\n','2010-07-16 08:35:10',1250,'ishtiaq'),(20,'test','2010-07-18 00:11:46',1493,'agent2'),(21,'test','2010-07-18 00:28:19',38,'agent2'),(22,'jobe done ','2010-07-19 08:10:41',875,'ishtiaq'),(23,'jobe done ','2010-07-19 08:11:33',979,'ishtiaq'),(24,'Mason Cement work ','2010-07-20 08:20:42',1721,'ishtiaq'),(25,'done','2010-08-10 09:44:45',2948,'ishtiaq'),(26,'done','2010-08-10 09:49:38',3272,'ishtiaq'),(27,'done','2010-08-10 09:52:43',3323,'ishtiaq'),(28,'done','2010-08-10 09:54:11',3386,'ishtiaq'),(29,'contractor work','2010-08-10 09:57:28',3345,'ishtiaq'),(30,'Contarctor Work ','2010-08-10 10:03:44',3363,'agent2'),(31,'done ','2010-08-10 10:08:24',3364,'agent2'),(32,'done','2010-08-10 10:21:09',3352,'agent2'),(33,'Contractor work','2010-08-10 10:27:57',3346,'ishtiaq'),(34,'Contractror work','2010-08-10 10:31:06',3346,'agent2'),(35,'done','2010-08-10 10:33:01',3403,'agent2'),(36,'done','2010-08-10 10:35:15',3320,'agent2'),(37,'done','2010-08-10 10:37:07',3376,'agent2'),(38,'done','2010-08-10 10:39:18',3336,'agent2'),(39,'done','2010-08-10 10:42:52',3359,'agent2'),(40,'House lock','2010-08-10 10:44:40',3151,'agent2'),(41,'done','2010-08-10 10:47:09',3216,'agent2'),(42,'Capaciter NA','2010-08-10 10:50:16',3393,'agent2'),(43,'done','2010-08-10 10:52:26',3381,'agent2'),(44,'done','2010-08-10 10:56:28',3391,'agent2'),(45,'done','2010-08-10 10:57:50',3358,'agent2'),(46,'done','2010-08-10 11:00:35',3262,'agent2'),(47,'done','2010-08-10 11:01:30',3281,'agent2'),(48,'done','2010-08-10 11:09:58',3222,'agent2'),(49,'done','2010-08-10 11:11:19',3284,'agent2'),(50,'done','2010-08-10 11:12:41',3287,'agent2'),(51,'done','2010-08-10 11:14:14',3227,'agent2'),(52,'done','2010-08-10 11:17:46',3224,'agent2'),(53,'done','2010-08-10 11:20:22',3257,'agent2'),(54,'done','2010-08-10 11:22:06',3237,'agent2'),(55,'Socket 5Amp NA\r\nSocket 15Amp NA\r\nComplete Patty 20wd NA\r\nCapacitar NA','2010-08-10 11:25:18',3154,'agent2'),(56,'done','2010-08-10 11:27:05',3306,'agent2'),(57,'done','2010-08-10 11:28:27',3297,'agent2'),(58,'done','2010-08-10 11:30:02',3294,'agent2'),(59,'Capacitar NA\r\nPiano Switch NA','2010-08-10 11:33:12',3316,'agent2'),(60,'Bulb NA\r\nSocket 5Amp NA\r\nPiano Switch NA\r\n','2010-08-10 11:40:12',3317,'agent2'),(61,'Tarmite Spray Contractor work','2010-08-10 11:43:37',3351,'agent2'),(62,'done','2010-08-10 11:44:12',3382,'agent2'),(63,'done','2010-08-10 11:44:40',3400,'agent2'),(64,'done','2010-08-10 11:45:50',3228,'agent2'),(65,'done','2010-08-10 11:49:07',3230,'agent2'),(66,'done','2010-08-10 11:51:17',3231,'agent2'),(67,'Private work','2010-08-10 11:53:16',3463,'agent2'),(68,'Privat work','2010-08-10 11:54:30',3463,'agent2'),(69,'done','2010-08-10 11:57:18',3232,'agent2'),(70,'done','2010-08-10 11:59:09',3233,'agent2'),(71,'Servent work','2010-08-10 12:02:07',3236,'agent2'),(72,'done','2010-08-10 12:03:27',3238,'agent2'),(73,'Rang washer NA','2010-08-10 12:05:11',3238,'agent2'),(74,'Rang washer','2010-08-10 12:06:54',3240,'agent2'),(75,'done','2010-08-10 12:09:45',3243,'agent2'),(76,'done','2010-08-10 12:11:46',3245,'agent2'),(77,'done','2010-08-10 12:17:27',3246,'agent2'),(78,'done','2010-08-10 12:19:19',3247,'agent2'),(79,'done','2010-08-10 12:23:04',3248,'agent2'),(80,'done','2010-08-10 12:23:53',3249,'agent2'),(81,'done','2010-08-10 12:31:43',3250,'agent2'),(82,'done','2010-08-10 12:32:39',3251,'agent2'),(83,'Private work','2010-08-10 12:34:15',3253,'agent2'),(84,'Plumber + Topas required','2010-08-10 12:38:40',3254,'agent2'),(85,'Rang washer NA','2010-08-10 12:42:10',3255,'agent2'),(86,'Done','2010-08-10 12:43:28',3255,'agent2'),(87,'Drill Machine Bitt Store NA','2010-08-10 12:47:57',3258,'agent2'),(88,'Done','2010-08-10 12:55:08',3259,'agent2'),(89,'Done','2010-08-10 12:56:36',3260,'agent2'),(90,'done','2010-08-10 13:00:36',3261,'agent2'),(91,'done','2010-08-10 13:01:49',3264,'agent2'),(92,'Check on monday ','2010-08-10 13:03:13',3264,'agent2'),(93,'done','2010-08-10 13:20:12',3380,'agent2'),(94,'done','2010-08-10 13:22:09',3420,'agent2'),(95,'done','2010-08-10 13:23:49',3433,'agent2'),(96,'done','2010-08-10 13:25:12',3431,'agent2'),(97,'Done','2010-08-10 13:26:18',3446,'agent2'),(98,'Done','2010-08-10 13:27:38',3334,'agent2'),(99,'Done','2010-08-10 13:28:47',3343,'agent2'),(100,'Check on Wednesday Anwar C/H','2010-08-10 13:32:43',3416,'agent2'),(101,'Complete patti 40wd NA','2010-08-10 13:36:01',3153,'agent2'),(102,'Done','2010-08-10 13:37:26',3365,'agent2'),(103,'Done','2010-08-10 13:38:45',3396,'agent2'),(104,'Done','2010-08-10 13:41:06',3269,'agent2'),(105,'Check on monday work not complete','2010-08-10 13:42:57',3271,'agent2'),(106,'done','2010-08-10 13:46:16',3466,'agent2'),(107,'Done','2010-08-10 13:47:30',3473,'agent2'),(108,'Done','2010-08-10 13:51:13',3274,'agent2'),(109,'Done','2010-08-10 13:52:01',3275,'agent2'),(110,'Done','2010-08-10 13:53:24',3283,'agent2'),(111,'Done','2010-08-10 13:54:53',3285,'agent2'),(112,'Done','2010-08-10 13:56:30',2928,'agent2'),(113,'Done','2010-08-10 13:57:53',2931,'agent2'),(114,'Done','2010-08-10 13:59:22',2937,'agent2'),(115,'Done','2010-08-10 14:00:21',2942,'agent2'),(116,'Done','2010-08-10 14:01:59',2944,'agent2'),(117,'Done','2010-08-10 14:47:27',2946,'ishtiaq'),(118,'Done','2010-08-10 14:47:54',2928,'ishtiaq'),(119,'Done','2010-08-10 14:48:30',2931,'ishtiaq'),(120,'done','2010-08-10 14:49:09',2937,'ishtiaq'),(121,'done','2010-08-10 14:49:46',2942,'ishtiaq'),(122,'Store N/A (pending)','2010-08-10 14:50:33',2944,'ishtiaq'),(123,'done','2010-08-10 14:51:13',2950,'ishtiaq'),(124,'Store NA','2010-08-10 14:52:05',2951,'ishtiaq'),(125,'done','2010-08-10 14:52:31',2953,'ishtiaq'),(126,'done','2010-08-10 14:53:06',2954,'ishtiaq'),(127,'done','2010-08-10 14:53:44',2962,'ishtiaq'),(128,'Store NA','2010-08-10 14:54:10',2970,'ishtiaq'),(129,'done','2010-08-10 14:54:36',2948,'ishtiaq'),(130,'done','2010-08-10 14:55:03',2967,'ishtiaq'),(131,'done','2010-08-10 14:55:28',2939,'ishtiaq'),(132,'Pending','2010-08-10 14:56:07',2971,'ishtiaq'),(133,'pending','2010-08-10 14:56:55',2968,'ishtiaq'),(134,'Done','2010-08-10 15:00:42',2943,'ishtiaq'),(135,'done','2010-08-10 15:01:14',2945,'ishtiaq'),(136,'done','2010-08-10 15:01:53',2947,'ishtiaq'),(137,'done','2010-08-10 15:02:18',2952,'ishtiaq'),(138,'pending','2010-08-10 15:02:51',2956,'ishtiaq'),(139,'Store NA','2010-08-10 15:03:19',2969,'ishtiaq'),(140,'Pending','2010-08-10 15:03:55',2930,'ishtiaq'),(141,'done','2010-08-10 15:04:26',2934,'ishtiaq'),(142,'pending','2010-08-10 15:05:03',2940,'ishtiaq'),(143,'done','2010-08-10 15:05:33',2941,'ishtiaq'),(144,'Sotre Na','2010-08-10 15:06:10',2932,'ishtiaq'),(145,'Store NA','2010-08-10 15:06:39',2938,'ishtiaq'),(146,'done','2010-08-10 17:30:47',3392,'agent2'),(147,'done','2010-08-10 17:31:24',3199,'agent2'),(148,'pending','2010-08-10 17:31:57',3356,'agent2'),(149,'done','2010-08-10 17:32:29',3469,'agent2'),(150,'Fan burnt required to be changed on priority','2010-08-10 17:33:22',3480,'agent2'),(151,'Store NA','2010-08-10 17:34:47',3458,'agent2'),(152,'Done','2010-08-10 17:35:15',3439,'agent2'),(153,'Sahib ghar pr nai hain bache band hain','2010-08-10 17:36:37',3278,'agent2'),(154,'Done','2010-08-10 17:37:21',3447,'agent2'),(155,'done','2010-08-10 17:37:44',3327,'agent2'),(156,'store NA','2010-08-10 17:38:23',3330,'agent2'),(157,'Store NA','2010-08-10 17:38:35',3330,'agent2'),(158,'Sotre NA','2010-08-10 17:39:23',3324,'agent2'),(159,'done','2010-08-10 17:39:53',3444,'agent2'),(160,'House Locked 11:45 am','2010-08-10 17:40:35',3307,'agent2'),(161,'done','2010-08-10 17:41:06',3435,'agent2'),(162,'House Locked 1:05 pm','2010-08-10 17:41:46',3325,'agent2'),(163,'House Locked 1:00','2010-08-10 17:42:29',3348,'agent2'),(164,'Store NA','2010-08-10 17:43:01',3445,'agent2'),(165,'Done ','2010-08-11 08:22:06',3426,'agent2'),(166,'Door Lock \r\n','2010-08-11 08:24:16',3436,'agent2'),(167,'Contactor work ','2010-08-11 08:29:13',3332,'agent2'),(168,'Done ','2010-08-11 08:41:12',3402,'ishtiaq'),(169,'Done','2010-08-11 09:59:44',3333,'agent2'),(170,'Bush chutki NA','2010-08-11 10:05:18',3440,'agent2'),(171,'done ','2010-08-11 10:55:56',3428,'ishtiaq'),(172,'done ','2010-08-11 10:57:18',3411,'ishtiaq'),(173,'done ','2010-08-11 10:59:01',3410,'ishtiaq'),(174,'Store NA','2010-08-11 17:51:25',3286,'ishtiaq'),(175,'Store NA','2010-08-11 17:53:29',3460,'ishtiaq'),(176,'Store NA','2010-08-11 17:56:01',2129,'ishtiaq'),(177,'Store NA','2010-08-11 17:57:02',3355,'ishtiaq'),(178,'No Work','2010-08-11 17:57:50',3613,'ishtiaq'),(179,'Store NA','2010-08-11 17:58:28',3565,'ishtiaq'),(180,'Store NA','2010-08-11 17:59:19',3567,'ishtiaq'),(181,'Done','2010-08-11 17:59:52',3331,'ishtiaq'),(182,'done','2010-08-11 18:02:12',3432,'ishtiaq'),(183,'Store NA','2010-08-11 18:03:36',3604,'ishtiaq'),(184,'done','2010-08-11 18:04:06',3579,'ishtiaq'),(185,'done','2010-08-11 18:04:32',3569,'ishtiaq'),(186,'done','2010-08-11 18:04:57',3437,'ishtiaq'),(187,'done','2010-08-11 18:05:24',3632,'ishtiaq'),(188,'tile tote ga','2010-08-11 18:05:56',3631,'ishtiaq'),(189,'done','2010-08-11 18:06:27',3605,'ishtiaq'),(190,'done','2010-08-11 18:08:38',3564,'ishtiaq'),(191,'done','2010-08-11 18:09:18',3626,'ishtiaq'),(192,'tile tote ga','2010-08-11 18:09:47',3603,'ishtiaq'),(193,'done','2010-08-11 18:10:11',3625,'ishtiaq'),(194,'Store NA ','2010-08-11 18:10:43',3585,'ishtiaq'),(195,'done','2010-08-11 18:11:06',3600,'ishtiaq'),(196,'Store NA','2010-08-11 18:11:36',3572,'ishtiaq'),(197,'done','2010-08-11 18:13:03',3551,'ishtiaq'),(198,'Store NA','2010-08-11 18:13:26',3284,'ishtiaq'),(199,'done','2010-08-11 18:14:25',3552,'ishtiaq'),(200,'done','2010-08-11 18:15:29',3546,'ishtiaq'),(201,'done','2010-08-11 18:16:20',3547,'ishtiaq'),(202,'Store NA','2010-08-11 18:16:46',3450,'ishtiaq'),(203,'tommorow in morning at around 10:00 am','2010-08-11 18:17:40',3453,'ishtiaq'),(204,'done','2010-08-11 18:18:06',3339,'ishtiaq'),(205,'done','2010-08-11 18:18:21',3339,'ishtiaq'),(206,'done','2010-08-11 18:18:51',3448,'ishtiaq'),(207,'Store NA','2010-08-11 18:19:21',3484,'ishtiaq'),(208,'done','2010-08-11 18:19:45',3475,'ishtiaq'),(209,'done','2010-08-11 18:20:09',3437,'ishtiaq'),(210,'done','2010-08-11 18:20:37',3455,'ishtiaq'),(211,'done','2010-08-11 18:21:03',3471,'ishtiaq'),(212,'done','2010-08-11 18:21:28',3548,'ishtiaq'),(213,'done','2010-08-11 18:23:20',3496,'ishtiaq'),(214,'done','2010-08-11 18:23:46',3483,'ishtiaq'),(215,'done','2010-08-11 18:24:14',3494,'ishtiaq'),(216,'done','2010-08-11 18:24:44',3549,'ishtiaq'),(217,'done','2010-08-11 18:25:10',3424,'ishtiaq'),(218,'No Work','2010-08-11 18:25:37',3443,'ishtiaq'),(219,'done','2010-08-11 18:26:01',3338,'ishtiaq'),(220,'Bance le kar jana hai','2010-08-11 18:26:42',3302,'ishtiaq'),(221,'done','2010-08-11 18:27:06',3451,'ishtiaq'),(222,'done','2010-08-11 18:28:13',3367,'ishtiaq'),(223,'banda dopeher ko jayga','2010-08-11 18:28:40',3367,'ishtiaq'),(224,'done','2010-08-11 18:29:13',3452,'ishtiaq'),(225,'done','2010-08-11 18:29:38',3422,'ishtiaq'),(226,'House Locked','2010-08-11 18:30:10',3492,'ishtiaq'),(227,'done','2010-08-12 11:59:19',3649,'ishtiaq'),(228,'done','2010-08-12 12:01:42',3663,'ishtiaq'),(229,'done','2010-08-12 12:04:03',3694,'ishtiaq'),(230,'done','2010-08-12 12:07:50',3722,'ishtiaq'),(231,'done','2010-08-12 12:09:05',3366,'ishtiaq'),(232,'done\r\n','2010-08-12 12:10:53',3366,'ishtiaq'),(233,'PVT Work ','2010-08-12 12:23:29',3662,'ishtiaq'),(234,'Private work','2010-08-12 12:31:49',3662,'ishtiaq'),(235,'done','2010-08-12 12:33:06',3696,'ishtiaq'),(236,'Contractor work','2010-08-12 12:35:46',2992,'ishtiaq'),(237,'Bathroom lock NA','2010-08-12 12:38:12',3576,'ishtiaq'),(238,'Contractor work over all fly proofing','2010-08-12 12:41:31',3578,'ishtiaq'),(239,'Lock NA','2010-08-12 12:46:45',3568,'ishtiaq'),(240,'done','2010-08-12 12:47:53',3684,'ishtiaq'),(241,'done','2010-08-12 12:49:28',3728,'ishtiaq'),(242,'Sink Plure panding\r\n','2010-08-12 12:56:54',3644,'ishtiaq'),(243,'N.A Bulb & Holder  ','2010-08-13 07:58:28',3608,'agent2'),(244,'N.A  P/Witch & Socket ','2010-08-13 07:59:49',3574,'agent2'),(245,'N.A Store ','2010-08-13 08:01:09',3566,'agent2'),(246,'done ','2010-08-13 08:01:41',3454,'agent2'),(247,'done ','2010-08-13 08:02:20',3489,'agent2'),(248,'done ','2010-08-13 08:03:06',3350,'agent2'),(249,'Half work done ','2010-08-13 08:04:05',3118,'agent2'),(250,'done\r\n','2010-08-13 08:05:22',3390,'agent2'),(251,'done ','2010-08-13 08:06:00',3430,'agent2'),(252,'Done NO work ','2010-08-13 08:06:40',3427,'agent2'),(253,'Done ','2010-08-13 08:07:13',3340,'agent2'),(254,'Done','2010-08-13 08:07:53',2169,'agent2'),(255,'Done ','2010-08-13 08:09:00',3467,'agent2'),(256,'Done ','2010-08-13 08:09:30',3615,'agent2'),(257,'Done ','2010-08-13 08:10:13',3449,'agent2'),(258,'done ','2010-08-13 08:11:19',3592,'agent2'),(259,'Done ','2010-08-13 08:11:51',3429,'agent2'),(260,'Done ','2010-08-13 08:12:42',3418,'agent2'),(261,'Done','2010-08-13 08:13:22',3559,'agent2'),(262,'done\r\n','2010-08-13 08:14:13',3545,'agent2'),(263,'done ','2010-08-13 08:14:30',3602,'agent2'),(264,'done','2010-08-13 08:15:17',3419,'agent2'),(265,'N.A Botton ','2010-08-13 08:15:59',3415,'agent2'),(266,'New Mirror Req ','2010-08-13 08:17:09',3344,'agent2'),(267,'done ','2010-08-13 08:21:56',3477,'agent2'),(268,'done ','2010-08-13 08:22:22',3395,'agent2'),(269,'done ','2010-08-13 08:23:03',3362,'agent2'),(270,'done ','2010-08-13 08:23:40',3148,'agent2'),(271,'done ','2010-08-13 08:24:04',3321,'agent2'),(272,'done ','2010-08-13 08:33:50',3442,'agent2'),(273,'done ','2010-08-13 08:34:22',3388,'agent2'),(274,'done \r\n','2010-08-13 08:35:02',3394,'agent2'),(275,'done ','2010-08-13 08:35:17',3421,'agent2'),(276,'done ','2010-08-13 08:35:39',3308,'agent2'),(277,'done ','2010-08-13 08:36:23',3368,'agent2'),(278,'done ','2010-08-13 08:36:43',3423,'agent2'),(279,'done ','2010-08-13 08:37:14',3425,'agent2'),(280,'door lock ','2010-08-13 08:38:14',3300,'agent2'),(281,'done','2010-08-13 08:40:55',3202,'agent2'),(282,'done','2010-08-13 08:44:52',3202,'ishtiaq'),(283,'Done','2010-08-13 08:48:07',3326,'ishtiaq'),(284,'Done','2010-08-13 08:49:04',3337,'ishtiaq'),(285,'Done','2010-08-13 08:50:04',3156,'ishtiaq'),(286,'Basan Breaket Chutki scrow NA','2010-08-13 08:51:47',3349,'ishtiaq'),(287,'Window Glass NA','2010-08-13 08:52:35',3341,'ishtiaq'),(288,'Done','2010-08-13 08:53:40',2651,'ishtiaq'),(289,'Done','2010-08-13 08:55:14',3126,'ishtiaq'),(290,'Done','2010-08-13 08:55:49',3204,'ishtiaq'),(291,'Done','2010-08-13 08:57:02',3121,'ishtiaq'),(292,'Done','2010-08-13 09:04:29',3123,'agent2'),(293,'N.A','2010-08-13 09:25:57',3749,'agent2'),(294,'Contractor work ','2010-08-13 09:28:38',3380,'agent2'),(295,'N,A Store ','2010-08-13 09:30:46',3377,'agent2'),(296,'N.A Store ','2010-08-13 09:31:16',3417,'agent2'),(297,'N.A srore\r\n','2010-08-13 09:32:06',3417,'agent2'),(298,'done ','2010-08-13 09:32:24',3129,'agent2'),(299,'done ','2010-08-13 09:33:00',3130,'agent2'),(300,'done ','2010-08-13 09:33:52',3135,'agent2'),(301,'done ','2010-08-13 09:34:35',3131,'agent2'),(302,'done ','2010-08-13 09:35:01',3125,'agent2'),(303,'door lock at 10.30\r\n','2010-08-13 09:36:03',2926,'agent2'),(304,'done ','2010-08-13 09:36:23',3136,'agent2'),(305,'door lock ','2010-08-13 09:37:16',3596,'agent2'),(306,'done ','2010-08-13 09:40:19',3495,'agent2'),(307,'door lock ','2010-08-13 09:40:56',3468,'agent2'),(308,'done ','2010-08-13 09:41:28',3456,'agent2'),(309,'done ','2010-08-13 09:42:02',3678,'agent2'),(310,'New Chokat req','2010-08-13 09:44:44',3584,'agent2'),(311,'Done ','2010-08-13 09:45:20',3655,'agent2'),(312,'done ','2010-08-13 09:45:54',3571,'agent2'),(313,'Door locked','2010-08-13 09:46:47',3099,'agent2'),(314,'door lock ','2010-08-13 09:50:56',3099,'agent2'),(315,'done','2010-08-13 09:51:43',3339,'agent2'),(316,'Done','2010-08-13 10:01:16',3472,'agent2'),(317,'Done ','2010-08-13 10:01:55',3621,'agent2'),(318,'Done ','2010-08-13 10:05:50',3436,'agent2'),(319,'done','2010-08-13 10:07:08',3726,'agent2'),(320,'done','2010-08-13 10:07:40',3485,'agent2'),(321,'done ','2010-08-13 10:10:01',3704,'agent2'),(322,'Done \r\n','2010-08-13 10:13:28',3145,'agent2'),(323,'Done','2010-08-13 10:16:05',3353,'agent2'),(324,'done ','2010-08-13 10:17:01',3401,'agent2'),(325,'done ','2010-08-13 10:17:39',3560,'agent2'),(326,'door Lock ','2010-08-13 10:20:24',3597,'agent2'),(327,'done ','2010-08-13 10:20:52',2706,'agent2'),(328,'done ','2010-08-13 10:22:43',3721,'agent2'),(329,'Done ','2010-08-13 10:23:27',3493,'agent2'),(330,'done ','2010-08-13 10:24:14',3643,'agent2'),(331,'done ','2010-08-13 10:24:55',2979,'agent2'),(332,'Contactor work ','2010-08-13 10:29:57',3362,'agent2'),(333,'contractor ','2010-08-13 10:30:19',3630,'agent2'),(334,'DOne ','2010-08-13 10:30:46',3462,'agent2'),(335,'Door lock ','2010-08-13 10:32:34',3404,'agent2'),(336,'N.A Store ','2010-08-13 10:33:36',3668,'agent2'),(337,'done ','2010-08-13 10:34:02',3039,'agent2'),(338,'done ','2010-08-13 10:36:31',3182,'agent2'),(339,'door lock at 11.10','2010-08-13 10:37:30',3304,'agent2'),(340,'Contractor Work ','2010-08-13 10:38:05',3577,'agent2'),(341,'Done ','2010-08-13 10:38:35',3378,'agent2'),(342,'done ','2010-08-13 10:40:22',3378,'agent2'),(343,'Basan Not to be fixed ','2010-08-13 10:43:03',3609,'agent2'),(344,'N.A Store ','2010-08-13 10:43:50',3638,'agent2'),(345,'PVT Work ','2010-08-13 10:44:14',3406,'agent2'),(346,'Done ','2010-08-13 10:44:41',3727,'agent2'),(347,'Done ','2010-08-13 10:45:03',3732,'agent2'),(348,'Done \r\n','2010-08-13 10:45:27',3618,'agent2'),(349,'Done ','2010-08-13 10:45:52',3606,'agent2'),(350,'Done ','2010-08-13 10:46:15',3611,'agent2'),(351,'Done ','2010-08-13 10:46:52',3601,'agent2'),(352,'N.A Distemper ','2010-08-13 10:47:34',3607,'agent2'),(353,'Store N.A','2010-08-13 10:54:55',3417,'agent2'),(354,'done','2010-08-13 10:55:13',3107,'agent2'),(355,'Done ','2010-08-13 10:55:54',2982,'agent2'),(356,'Done ','2010-08-13 10:56:18',3686,'agent2'),(357,'Done ','2010-08-13 10:56:40',3616,'agent2'),(358,'done ','2010-08-13 10:57:17',3570,'agent2'),(359,'done ','2010-08-13 10:57:48',3622,'agent2'),(360,'done ','2010-08-13 10:58:12',3647,'agent2'),(361,'Done ','2010-08-13 10:58:31',3635,'agent2'),(362,'Done ','2010-08-13 11:02:49',3642,'agent2'),(363,'Done ','2010-08-13 11:03:24',3679,'agent2'),(364,'Done ','2010-08-13 11:03:45',3623,'agent2'),(365,'done ','2010-08-13 11:04:11',3640,'agent2'),(366,'done','2010-08-13 11:04:59',3589,'agent2'),(367,'done','2010-08-13 11:05:55',3627,'agent2'),(368,'done','2010-08-13 11:06:58',3627,'agent2'),(369,'done','2010-08-13 11:08:02',3628,'agent2'),(370,'NA Store Mirror','2010-08-13 11:09:25',3664,'agent2'),(371,'Golden wahal P/Conncation NA','2010-08-13 11:10:58',3636,'agent2'),(372,'done','2010-08-13 11:11:57',3669,'agent2'),(373,'NA Store scoro buld','2010-08-13 11:13:45',3645,'agent2'),(374,'done','2010-08-13 11:14:30',3624,'agent2'),(375,'done','2010-08-13 11:15:44',3670,'agent2'),(376,'done','2010-08-13 11:17:58',3658,'agent2'),(377,'done','2010-08-13 11:19:16',3590,'agent2'),(378,'done (New oven req)','2010-08-13 11:21:16',3653,'agent2'),(379,'done','2010-08-13 11:22:39',3562,'agent2'),(380,'NA Store ','2010-08-13 11:24:11',3651,'agent2'),(381,'NA Store Capaster','2010-08-13 11:26:59',3654,'agent2'),(382,'done','2010-08-13 11:32:51',3667,'agent2'),(383,'done','2010-08-13 11:34:15',3667,'agent2'),(384,'done','2010-08-13 11:35:16',3650,'agent2'),(385,'done','2010-08-13 11:35:53',3646,'agent2'),(386,'done','2010-08-13 11:36:38',3660,'agent2'),(387,'done','2010-08-13 11:37:31',3671,'agent2'),(388,'done','2010-08-13 11:38:10',3675,'agent2'),(389,'NA Store fan capiaster ','2010-08-13 11:39:21',3634,'agent2'),(390,'done','2010-08-13 11:39:59',3633,'agent2'),(391,'done','2010-08-13 11:40:37',3639,'agent2'),(392,'done','2010-08-13 11:41:41',3575,'agent2'),(393,'done','2010-08-13 11:41:55',3575,'agent2'),(394,'done','2010-08-13 11:42:48',3591,'agent2'),(395,'done','2010-08-13 11:43:29',3325,'agent2'),(396,'done','2010-08-13 11:44:12',3612,'agent2'),(397,'done','2010-08-13 11:44:50',3587,'agent2'),(398,'done','2010-08-13 11:45:22',3619,'agent2'),(399,'done','2010-08-13 11:46:51',3593,'agent2'),(400,'done','2010-08-13 11:47:45',3617,'agent2'),(401,'done','2010-08-13 11:48:34',3399,'agent2'),(402,'done','2010-08-13 11:49:47',3372,'agent2'),(403,'done','2010-08-13 11:50:54',3583,'agent2'),(404,'done','2010-08-13 11:51:55',3561,'agent2'),(405,'done','2010-08-13 11:52:58',3438,'agent2'),(406,'done','2010-08-13 11:54:09',3667,'agent2'),(407,'Done','2010-08-16 08:59:11',3855,'ishtiaq'),(408,'done','2010-08-16 11:42:35',3817,'agent2'),(409,'done','2010-08-16 11:45:57',3809,'agent2'),(410,'done','2010-08-16 11:46:34',3758,'agent2'),(411,'done\r\n','2010-08-16 11:47:09',3729,'agent2'),(412,'done','2010-08-16 11:48:35',3772,'agent2'),(413,'done','2010-08-16 11:48:56',3706,'agent2'),(414,'done','2010-08-16 11:49:57',3699,'agent2'),(415,'done','2010-08-16 11:50:53',3614,'agent2'),(416,'done','2010-08-16 11:51:58',3702,'agent2'),(417,'done','2010-08-16 11:52:49',3703,'agent2'),(418,'done','2010-08-16 11:53:39',3701,'agent2'),(419,'done','2010-08-16 11:54:17',3768,'agent2'),(420,'done','2010-08-16 11:55:06',3739,'agent2'),(421,'done','2010-08-16 11:56:06',3747,'agent2'),(422,'done','2010-08-16 11:57:34',3795,'agent2'),(423,'done','2010-08-16 11:59:18',3667,'agent2'),(424,'P/switch N.A','2010-08-16 12:00:23',3711,'agent2'),(425,'work in monday','2010-08-16 12:01:26',3783,'agent2'),(426,'done','2010-08-16 12:02:09',3808,'agent2'),(427,'done','2010-08-16 12:04:37',3810,'agent2'),(428,'work in water','2010-08-16 12:06:11',3708,'agent2'),(429,'work in f&s','2010-08-16 12:07:30',3730,'agent2'),(430,'Pvt work','2010-08-16 12:08:58',3757,'agent2'),(431,'Pvt work','2010-08-16 12:10:08',3713,'agent2'),(432,'Pvt work','2010-08-16 12:10:51',3712,'agent2'),(433,'Plate N.A','2010-08-16 12:16:13',3714,'agent2'),(434,'Done ','2010-08-16 12:19:04',3756,'agent2'),(435,'Done ','2010-08-16 12:19:29',3629,'agent2'),(436,'Distempber N.A','2010-08-16 12:20:09',3742,'agent2'),(437,'Distember N.A','2010-08-16 12:20:41',3761,'agent2'),(438,'Seat Cover N.A ','2010-08-16 12:21:20',3749,'agent2'),(439,'Contactor Work ','2010-08-16 12:21:54',3687,'agent2'),(440,'Done ','2010-08-16 12:22:17',3773,'agent2'),(441,'40 W Chocke N.A','2010-08-16 12:22:51',3791,'agent2'),(442,'New Fan Req N.A','2010-08-16 12:23:18',3794,'agent2'),(443,'Done ','2010-08-16 12:33:16',3786,'agent2'),(444,'Done ','2010-08-16 12:33:58',3777,'agent2'),(445,'Done ','2010-08-16 12:34:53',3781,'agent2'),(446,'P/Switch N.A','2010-08-16 12:35:54',3608,'agent2'),(447,'P/Switch N.A','2010-08-16 12:36:10',3608,'agent2'),(448,'Bulb N.A ','2010-08-16 12:36:56',3710,'agent2'),(449,'Starter Socket N.A ','2010-08-16 12:37:29',3764,'agent2'),(450,'C/socket NA Store','2010-08-16 12:50:06',3764,'ishtiaq'),(451,'02w Patti 01 No 02rod 01 No Bulb 01 No P/nino switch 01 No (NA) ','2010-08-16 12:52:12',3652,'ishtiaq'),(452,'05 Amp socket 01 No two pin socket 01 No P/switch 03 No Bulb 01 No (NA) Store','2010-08-16 12:57:30',3676,'ishtiaq'),(453,'done','2010-08-16 12:58:23',3774,'ishtiaq'),(454,'done','2010-08-16 12:58:55',3700,'ishtiaq'),(455,'done','2010-08-16 12:59:36',3740,'ishtiaq'),(456,'Muslim showar N.A ','2010-08-17 08:22:34',3962,'ishtiaq'),(457,'Done ','2010-08-17 08:23:13',3691,'ishtiaq'),(458,'done ','2010-08-17 08:44:00',3762,'ishtiaq'),(459,'done ','2010-08-17 08:44:45',3682,'ishtiaq'),(460,'done ','2010-08-17 08:45:11',3693,'ishtiaq'),(461,'done ','2010-08-17 08:45:46',3692,'ishtiaq'),(462,'done ','2010-08-17 08:46:01',3641,'ishtiaq'),(463,'done ','2010-08-17 08:46:58',3666,'ishtiaq'),(464,'done','2010-08-17 09:03:47',3573,'ishtiaq'),(465,'done','2010-08-17 09:04:41',3698,'ishtiaq'),(466,'Blue tech','2010-08-17 09:06:59',3826,'ishtiaq'),(467,'Pending by User ','2010-08-17 09:08:30',3637,'ishtiaq'),(468,'N.A T/Bolt Door Lock ','2010-08-17 09:09:23',3993,'ishtiaq'),(469,'T/Bolt N.A','2010-08-17 09:09:53',3986,'ishtiaq'),(470,'Done ','2010-08-17 09:10:36',3581,'ishtiaq'),(471,'Wood Required ','2010-08-17 09:11:16',3984,'ishtiaq'),(472,'Tecket Blue N.A ','2010-08-17 09:12:29',3803,'ishtiaq'),(473,'Done ','2010-08-17 09:13:09',3467,'ishtiaq'),(474,'Pipe line 04 fit','2010-08-17 09:34:27',3750,'ishtiaq'),(475,'done','2010-08-17 09:37:55',3467,'ishtiaq'),(476,'done','2010-08-17 09:38:38',3996,'ishtiaq'),(477,'Line chock on kitchan','2010-08-17 09:41:50',3923,'ishtiaq'),(478,'lock 10:00','2010-08-17 09:42:41',3898,'ishtiaq'),(479,'done','2010-08-17 09:43:17',3786,'ishtiaq'),(480,'Pvt work','2010-08-17 09:52:59',3960,'ishtiaq'),(481,'done','2010-08-17 09:54:34',3888,'ishtiaq'),(482,'done','2010-08-17 09:55:30',3891,'ishtiaq'),(483,'done','2010-08-17 09:56:16',3890,'ishtiaq'),(484,'done','2010-08-17 09:56:59',3919,'ishtiaq'),(485,'done','2010-08-17 09:57:37',3851,'ishtiaq'),(486,'done','2010-08-17 09:58:36',3840,'ishtiaq'),(487,'done','2010-08-17 10:10:01',3847,'ishtiaq'),(488,'done','2010-08-17 10:42:29',3908,'ishtiaq'),(489,'done','2010-08-17 10:43:01',3843,'ishtiaq'),(490,'Contractor work','2010-08-17 12:00:22',3844,'agent2'),(491,'Done','2010-08-17 12:01:12',4082,'agent2'),(492,'Done','2010-08-17 12:03:30',4065,'ishtiaq'),(493,'Done','2010-08-17 12:04:16',4069,'ishtiaq'),(494,'Done','2010-08-17 12:04:59',4074,'ishtiaq'),(495,'Done','2010-08-17 12:05:35',4050,'ishtiaq'),(496,'Done','2010-08-17 12:06:02',4023,'ishtiaq'),(497,'Done\r\n','2010-08-17 12:06:35',4031,'ishtiaq'),(498,'Done','2010-08-17 12:07:57',4028,'ishtiaq'),(499,'Done','2010-08-17 12:08:32',4017,'ishtiaq'),(500,'Done','2010-08-17 12:09:07',4033,'ishtiaq'),(501,'Done','2010-08-17 12:09:37',4059,'ishtiaq'),(502,'Done','2010-08-17 12:10:13',4019,'ishtiaq'),(503,'Done','2010-08-17 12:11:16',4062,'ishtiaq'),(504,'Done','2010-08-17 12:12:56',4030,'ishtiaq'),(505,'Done','2010-08-17 12:17:05',4038,'ishtiaq'),(506,'Carpenter work Complaint # 1469','2010-08-17 12:23:07',4032,'ishtiaq'),(507,'Done','2010-08-17 12:23:58',4001,'ishtiaq'),(508,'Done','2010-08-17 12:24:51',4063,'ishtiaq'),(509,'Door lock Store NA','2010-08-17 12:26:16',3825,'ishtiaq'),(510,'Muslim Shower NA','2010-08-17 12:26:54',3814,'ishtiaq'),(511,'Water tap NA','2010-08-17 12:28:00',3981,'ishtiaq'),(512,'Check next day \r\ncomplaint don computer no 4151','2010-08-17 12:33:53',3935,'ishtiaq'),(513,'Done','2010-08-17 12:38:39',3959,'agent2'),(514,'Done','2010-08-17 12:40:13',3959,'agent2'),(515,'Done','2010-08-17 12:41:57',3963,'agent2'),(516,'Not done','2010-08-17 12:43:17',3970,'agent2'),(517,'Done','2010-08-17 12:44:36',3939,'agent2'),(518,'Done','2010-08-17 12:45:37',3952,'agent2'),(519,'Done','2010-08-17 12:54:00',3937,'agent2'),(520,'Done','2010-08-17 12:54:45',3954,'agent2'),(521,'Done','2010-08-17 12:55:42',3943,'agent2'),(522,'Done','2010-08-17 12:56:16',3942,'agent2'),(523,'B/R work plumber','2010-08-17 12:58:01',3989,'agent2'),(524,'Check on next day By order servent','2010-08-17 13:01:33',3976,'agent2'),(525,'Done','2010-08-17 13:02:07',3683,'agent2'),(526,'Done','2010-08-17 13:03:01',3648,'agent2'),(527,'No complaint','2010-08-17 13:03:36',3731,'agent2'),(528,'Done','2010-08-17 13:04:22',3734,'agent2'),(529,'Done','2010-08-17 13:04:53',3719,'agent2'),(530,'Done','2010-08-17 13:05:28',3718,'agent2'),(531,'Done','2010-08-17 13:05:54',3661,'agent2'),(532,'Done','2010-08-17 13:06:23',3735,'agent2'),(533,'Done','2010-08-17 13:06:53',3741,'agent2'),(534,'Done','2010-08-17 13:07:23',3745,'agent2'),(535,'Done','2010-08-17 13:07:57',3707,'agent2'),(536,'Done','2010-08-17 13:08:48',3769,'agent2'),(537,'Done','2010-08-17 13:09:16',3748,'agent2'),(538,'Done','2010-08-17 13:09:42',3688,'agent2'),(539,'Plate N.A','2010-08-18 07:47:17',3714,'ishtiaq'),(540,'Done ','2010-08-18 07:49:43',4103,'ishtiaq'),(541,'done ','2010-08-18 07:52:19',4029,'ishtiaq'),(542,'done ','2010-08-18 07:52:47',4105,'ishtiaq'),(543,'Done ','2010-08-18 07:53:18',4022,'ishtiaq'),(544,'Done ','2010-08-18 07:53:40',3805,'ishtiaq'),(545,'Done ','2010-08-18 07:54:02',4127,'ishtiaq'),(546,'Done ','2010-08-18 07:54:23',4085,'ishtiaq'),(547,'Done ','2010-08-18 07:56:13',3883,'ishtiaq'),(548,'Done ','2010-08-18 07:56:38',4067,'ishtiaq'),(549,'Done ','2010-08-18 07:57:02',3865,'ishtiaq'),(550,'NOt done ','2010-08-18 07:59:07',4054,'ishtiaq'),(551,'Done ','2010-08-18 07:59:27',4109,'ishtiaq'),(552,'Done ','2010-08-18 07:59:51',4102,'ishtiaq'),(553,'DONE ','2010-08-18 08:02:55',3957,'ishtiaq'),(554,'dONE ','2010-08-18 08:03:49',4089,'ishtiaq'),(555,'HALF WORK dONE ','2010-08-18 08:04:43',3936,'ishtiaq'),(556,'Not done ','2010-08-18 08:05:26',4060,'ishtiaq'),(557,'Note done ','2010-08-18 08:05:34',4060,'ishtiaq'),(558,'Done ','2010-08-18 08:05:53',4051,'ishtiaq'),(559,'Done ','2010-08-18 08:06:16',4047,'ishtiaq'),(560,'Done \r\n','2010-08-18 08:06:40',4018,'ishtiaq'),(561,'done ','2010-08-18 08:07:22',4036,'ishtiaq'),(562,'Work in progress 34/5 ','2010-08-18 08:08:11',4013,'ishtiaq'),(563,'Not done ','2010-08-18 08:08:47',4092,'ishtiaq'),(564,'Note Done ','2010-08-18 08:08:56',4092,'ishtiaq'),(565,'Note Done ','2010-08-18 08:19:54',4057,'ishtiaq'),(566,'Done ','2010-08-18 08:20:33',4055,'ishtiaq'),(567,'Not Done ','2010-08-18 08:21:27',3842,'ishtiaq'),(568,'Not Done ','2010-08-18 08:22:09',3990,'ishtiaq'),(569,'Not Done ','2010-08-18 08:24:40',3904,'ishtiaq'),(570,'Contractor Work New Bath Room Req','2010-08-18 08:25:25',4092,'ishtiaq'),(571,'Done ','2010-08-18 08:46:38',3853,'ishtiaq'),(572,'N.A Door lock ','2010-08-18 08:47:22',4037,'ishtiaq'),(573,'Done ','2010-08-18 08:47:36',4151,'ishtiaq'),(574,'Done Temprary ','2010-08-18 08:48:28',4140,'ishtiaq'),(575,'Done ','2010-08-18 08:48:56',3974,'ishtiaq'),(576,'Done ','2010-08-18 08:49:31',4034,'ishtiaq'),(577,'Door Lock at 10.40','2010-08-18 08:50:40',3898,'ishtiaq'),(578,'Done ','2010-08-18 08:53:30',4134,'ishtiaq'),(579,'Water Tap N.A','2010-08-18 08:53:59',4150,'ishtiaq'),(580,'Done ','2010-08-18 08:55:44',4161,'ishtiaq'),(581,'New Fan Req ','2010-08-18 08:57:23',4072,'ishtiaq'),(582,'Done ','2010-08-18 08:58:38',4079,'ishtiaq'),(583,'Done ','2010-08-18 08:59:59',4086,'ishtiaq'),(584,'dOne ','2010-08-18 09:00:26',4087,'ishtiaq'),(585,'Done ','2010-08-18 09:00:47',4095,'ishtiaq'),(586,'Done','2010-08-18 09:01:09',3824,'ishtiaq'),(587,'Starter & Bulb N.A','2010-08-18 09:01:45',3835,'ishtiaq'),(588,'15 Amp socket ','2010-08-18 09:02:17',3862,'ishtiaq'),(589,'Done ','2010-08-18 09:02:39',3845,'ishtiaq'),(590,'Done ','2010-08-18 09:02:58',3860,'ishtiaq'),(591,'Done ','2010-08-18 09:03:27',3885,'ishtiaq'),(592,'Done ','2010-08-18 09:03:52',3849,'ishtiaq'),(593,'Done ','2010-08-18 09:04:12',3831,'ishtiaq'),(594,'Done ','2010-08-18 09:04:44',3987,'ishtiaq'),(595,'Done ','2010-08-18 09:05:06',3988,'ishtiaq'),(596,'Done ','2010-08-18 09:15:14',3994,'ishtiaq'),(597,'Done','2010-08-18 09:16:03',3917,'ishtiaq'),(598,'Done ','2010-08-18 09:16:30',3969,'ishtiaq'),(599,'Done ','2010-08-18 09:18:22',3985,'ishtiaq'),(600,'Done ','2010-08-18 09:18:45',3912,'ishtiaq'),(601,'Door Lock 11.45 p/Switch N.A','2010-08-18 09:19:38',3979,'ishtiaq'),(602,'Done ','2010-08-18 09:20:02',3978,'ishtiaq'),(603,'N.A T/Rod ','2010-08-18 09:20:50',3924,'ishtiaq'),(604,'Done ','2010-08-18 09:21:19',4025,'ishtiaq'),(605,'Done ','2010-08-18 09:22:11',4044,'ishtiaq'),(606,'Done ','2010-08-18 09:22:34',4042,'ishtiaq'),(607,'Done ','2010-08-18 09:23:01',4015,'ishtiaq'),(608,'done ','2010-08-18 09:23:23',4007,'ishtiaq'),(609,'Done ','2010-08-18 09:23:44',4009,'ishtiaq'),(610,'T/Rod N.A','2010-08-18 09:23:56',4009,'ishtiaq'),(611,'Done ','2010-08-18 09:24:24',4010,'ishtiaq'),(612,'done ','2010-08-18 09:24:54',4006,'ishtiaq'),(613,'N.A Regulatir N.A ','2010-08-18 09:25:27',4091,'ishtiaq'),(614,'40 W Rod n.A','2010-08-18 09:26:01',4080,'ishtiaq'),(615,'Done ','2010-08-18 09:38:59',3717,'ishtiaq'),(616,'Done ','2010-08-18 09:39:14',3754,'ishtiaq'),(617,'Done ','2010-08-18 09:39:38',3744,'ishtiaq'),(618,'N.A Sink Mixture ','2010-08-18 09:40:22',3725,'ishtiaq'),(619,'Done ','2010-08-18 09:40:53',3763,'ishtiaq'),(620,'Done ','2010-08-18 09:41:19',3766,'ishtiaq'),(621,'Done ','2010-08-18 09:41:39',3690,'ishtiaq'),(622,'Done ','2010-08-18 09:42:03',3715,'ishtiaq'),(623,'Done ','2010-08-18 09:42:26',3689,'ishtiaq'),(624,'N.A New Flash  Tank req ','2010-08-18 09:43:25',3738,'ishtiaq'),(625,'New Tanki Req ','2010-08-18 09:43:40',3738,'ishtiaq'),(626,'Done ','2010-08-18 09:44:16',3782,'ishtiaq'),(627,'Done ','2010-08-18 09:44:37',3705,'ishtiaq'),(628,'Done  Good Work ','2010-08-18 09:45:08',3720,'ishtiaq'),(629,'Done \r\n','2010-08-18 09:45:31',3746,'ishtiaq'),(630,'Done ','2010-08-18 09:45:56',3775,'ishtiaq'),(631,'Done ','2010-08-18 09:46:22',3760,'ishtiaq'),(632,'Done ','2010-08-18 09:49:41',3695,'ishtiaq'),(633,'Done','2010-08-18 09:55:51',3785,'ishtiaq'),(634,'speek with SDo E&M ','2010-08-18 09:56:27',3802,'ishtiaq'),(635,'Done ','2010-08-18 09:56:50',3759,'ishtiaq'),(636,'DOne ','2010-08-18 09:57:22',3723,'ishtiaq'),(637,'done ','2010-08-18 09:58:05',3811,'ishtiaq'),(638,'Contect with SDO E&M ','2010-08-18 09:58:43',3751,'ishtiaq'),(639,'door lock 11.10','2010-08-18 09:59:13',3100,'ishtiaq'),(640,'Done ','2010-08-18 09:59:59',3119,'ishtiaq'),(641,'Done ','2010-08-18 10:08:26',3839,'ishtiaq'),(642,'N.A capicator ','2010-08-18 10:09:02',3101,'ishtiaq'),(643,'Done ','2010-08-18 10:09:25',3102,'ishtiaq'),(644,'N.A ','2010-08-18 10:09:47',3104,'ishtiaq'),(645,'Done ','2010-08-18 10:10:19',3105,'ishtiaq'),(646,'Done ','2010-08-18 10:10:30',3106,'ishtiaq'),(647,'N.A Socket ','2010-08-18 10:10:51',3108,'ishtiaq'),(648,'N.A T/Rod ','2010-08-18 10:11:21',3109,'ishtiaq'),(649,'N.A Socket ','2010-08-18 10:11:54',3111,'ishtiaq'),(650,'N.A bulb ','2010-08-18 10:12:19',3112,'ishtiaq'),(651,'Done ','2010-08-18 10:12:41',3113,'ishtiaq'),(652,'N.A p/Switch ','2010-08-18 10:13:08',3114,'ishtiaq'),(653,'dONE ','2010-08-18 10:13:22',3115,'ishtiaq'),(654,'dONE ','2010-08-18 10:13:35',3120,'ishtiaq'),(655,'N.A store ','2010-08-18 10:13:59',3124,'ishtiaq'),(656,'Done ','2010-08-18 10:14:22',3138,'ishtiaq'),(657,'Done ','2010-08-18 10:14:46',3139,'ishtiaq'),(658,'N.A ','2010-08-18 10:15:17',3140,'ishtiaq'),(659,'done ','2010-08-18 10:15:40',3141,'ishtiaq'),(660,'Done ','2010-08-18 10:16:02',3143,'ishtiaq'),(661,'done ','2010-08-18 10:16:26',3146,'ishtiaq'),(662,'done ','2010-08-18 10:16:48',3147,'ishtiaq'),(663,'Done ','2010-08-18 10:17:12',3157,'ishtiaq'),(664,'Done','2010-08-18 10:17:58',3159,'ishtiaq'),(665,'Done','2010-08-18 10:18:23',3160,'ishtiaq'),(666,'Done','2010-08-18 10:18:52',3162,'ishtiaq'),(667,'Done','2010-08-18 10:19:29',3165,'ishtiaq'),(668,'Done','2010-08-18 10:20:02',3174,'ishtiaq'),(669,'Shhower NA','2010-08-18 10:20:37',3185,'ishtiaq'),(670,'Done','2010-08-18 10:21:07',3186,'ishtiaq'),(671,'Done','2010-08-18 10:21:42',3194,'ishtiaq'),(672,'Capcater NA','2010-08-18 10:23:37',3205,'ishtiaq'),(673,'Done','2010-08-18 10:24:07',3210,'ishtiaq'),(674,'Done','2010-08-18 10:24:39',3203,'ishtiaq'),(675,'Contractor work','2010-08-18 10:25:19',2000,'ishtiaq'),(676,'40 fitt stair required NA','2010-08-18 10:26:21',3142,'ishtiaq'),(677,'Done','2010-08-18 10:26:58',3122,'ishtiaq'),(678,'Done','2010-08-18 10:27:23',3036,'ishtiaq'),(679,'Done','2010-08-18 10:27:37',2722,'ishtiaq'),(680,'Done','2010-08-18 10:27:55',2721,'ishtiaq'),(681,'Done','2010-08-18 10:28:09',2719,'ishtiaq'),(682,'Done','2010-08-18 10:28:36',2748,'ishtiaq'),(683,'Done','2010-08-18 10:28:55',3098,'ishtiaq'),(684,'5Amp Socket NA','2010-08-18 10:29:42',3211,'ishtiaq'),(685,'Tube patty 20wd starter NA','2010-08-18 10:30:50',3132,'ishtiaq'),(686,'Done','2010-08-18 10:31:26',3213,'ishtiaq'),(687,'Done','2010-08-18 10:32:16',3191,'ishtiaq'),(688,'Done','2010-08-18 10:32:48',3200,'ishtiaq'),(689,'Done','2010-08-18 10:33:22',3190,'ishtiaq'),(690,'Done','2010-08-18 10:33:58',3929,'ishtiaq'),(691,'Done','2010-08-18 10:34:24',3921,'ishtiaq'),(692,'Not done','2010-08-18 10:35:21',3930,'ishtiaq'),(693,'Done','2010-08-18 10:36:32',3918,'ishtiaq'),(694,'Done','2010-08-18 10:36:53',3909,'ishtiaq'),(695,'Not done','2010-08-18 10:37:39',3897,'ishtiaq'),(696,'NOt done','2010-08-18 10:38:06',3897,'ishtiaq'),(697,'Done','2010-08-18 10:39:06',3882,'ishtiaq'),(698,'Done','2010-08-18 10:39:35',3837,'ishtiaq'),(699,'Done','2010-08-18 10:40:07',3854,'ishtiaq'),(700,'Done','2010-08-18 10:40:33',3868,'ishtiaq'),(701,'Done','2010-08-18 10:41:10',3858,'ishtiaq'),(702,'Done','2010-08-18 10:41:35',3836,'ishtiaq'),(703,'Done','2010-08-18 10:42:12',3827,'ishtiaq'),(704,'Sink mixture NA','2010-08-18 10:42:56',3455,'ishtiaq'),(705,'Done','2010-08-18 10:44:15',3673,'ishtiaq'),(706,'Done','2010-08-18 10:44:47',3736,'ishtiaq'),(707,'Done','2010-08-18 10:45:16',3753,'ishtiaq'),(708,'\r\nDone','2010-08-18 10:45:49',3304,'ishtiaq'),(709,'Bath lock NA','2010-08-18 10:46:40',3796,'ishtiaq'),(710,'Done','2010-08-18 10:47:11',3797,'ishtiaq'),(711,'Done','2010-08-18 10:48:13',3833,'ishtiaq'),(712,'Done','2010-08-18 10:48:37',3856,'ishtiaq'),(713,'Done','2010-08-18 10:49:04',3872,'ishtiaq'),(714,'N.A','2010-08-18 10:49:56',3961,'ishtiaq'),(715,'Done','2010-08-18 10:50:20',3958,'ishtiaq'),(716,'Done','2010-08-18 10:50:44',3956,'ishtiaq'),(717,'Done','2010-08-18 10:51:14',3953,'ishtiaq'),(718,'N.A','2010-08-18 10:51:50',3947,'ishtiaq'),(719,'Done','2010-08-18 10:52:29',3944,'ishtiaq'),(720,'Done','2010-08-18 10:52:50',3940,'ishtiaq'),(721,'Done','2010-08-18 10:53:15',3938,'ishtiaq'),(722,'N.A','2010-08-18 10:53:58',3934,'ishtiaq'),(723,'Done','2010-08-18 10:54:27',3933,'ishtiaq'),(724,'Done','2010-08-18 10:54:52',3932,'ishtiaq'),(725,'Done','2010-08-18 10:55:15',3931,'ishtiaq'),(726,'Done','2010-08-18 10:56:03',3900,'ishtiaq'),(727,'Done','2010-08-18 10:57:02',3927,'ishtiaq'),(728,'Done','2010-08-18 10:57:48',3925,'ishtiaq'),(729,'Done','2010-08-18 10:58:26',3920,'ishtiaq'),(730,'Done','2010-08-18 10:59:09',2524,'ishtiaq'),(731,'Done','2010-08-18 10:59:49',3913,'ishtiaq'),(732,'N.A','2010-08-18 11:00:28',3911,'ishtiaq'),(733,'Done','2010-08-18 11:00:54',3910,'ishtiaq'),(734,'N.A','2010-08-18 11:01:41',3903,'ishtiaq'),(735,'Done','2010-08-18 11:02:20',3901,'ishtiaq'),(736,'Done','2010-08-18 11:02:50',3896,'ishtiaq'),(737,'Done','2010-08-18 11:03:16',3893,'ishtiaq'),(738,'Done','2010-08-18 11:03:49',3892,'ishtiaq'),(739,'N.A','2010-08-18 11:04:28',3887,'ishtiaq'),(740,'Done','2010-08-18 11:05:07',3878,'ishtiaq'),(741,'Done','2010-08-18 11:05:59',3779,'ishtiaq'),(742,'N.A','2010-08-18 11:06:51',3804,'ishtiaq'),(743,'N.A','2010-08-18 11:07:45',3790,'ishtiaq'),(744,'N.A','2010-08-18 11:08:12',3813,'ishtiaq'),(745,'Done','2010-08-18 11:08:42',3806,'ishtiaq'),(746,'\r\nDone','2010-08-18 11:09:34',3580,'ishtiaq'),(747,'Done','2010-08-18 11:10:08',3765,'ishtiaq'),(748,'N.A','2010-08-18 11:10:45',3869,'ishtiaq'),(749,'Done','2010-08-18 11:11:21',3983,'ishtiaq'),(750,'Done','2010-08-18 11:11:47',3875,'ishtiaq'),(751,'N.A','2010-08-18 11:12:17',3980,'ishtiaq'),(752,'N.A','2010-08-18 11:12:58',3977,'ishtiaq'),(753,'N.A','2010-08-18 11:13:48',3852,'ishtiaq'),(754,'Done','2010-08-18 11:14:20',3972,'ishtiaq'),(755,'N.A','2010-08-18 11:14:49',3965,'ishtiaq'),(756,'Done','2010-08-18 11:15:33',2823,'ishtiaq'),(757,'N.A','2010-08-18 11:16:08',3850,'ishtiaq'),(758,'Done','2010-08-18 11:16:32',3374,'ishtiaq'),(759,'Done','2010-08-18 11:17:08',3610,'ishtiaq'),(760,'Done','2010-08-18 11:17:41',3855,'ishtiaq'),(761,'Done','2010-08-18 11:17:58',3865,'ishtiaq'),(762,'N.A','2010-08-18 11:18:17',3733,'ishtiaq'),(763,'Done','2010-08-18 11:18:48',3867,'ishtiaq'),(764,'Done','2010-08-18 11:19:11',3709,'ishtiaq'),(765,'Done','2010-08-18 11:19:34',3799,'ishtiaq'),(766,'Done','2010-08-18 11:19:59',3859,'ishtiaq'),(767,'Done','2010-08-18 11:20:25',3846,'ishtiaq'),(768,'Done','2010-08-18 11:20:48',3828,'ishtiaq'),(769,'Done','2010-08-18 11:21:25',3776,'ishtiaq'),(770,'Done','2010-08-18 11:21:48',3832,'ishtiaq'),(771,'Done','2010-08-18 11:22:13',3816,'ishtiaq'),(772,'Done','2010-08-18 11:22:51',3889,'ishtiaq'),(773,'DONE','2010-08-18 11:23:36',3884,'ishtiaq'),(774,'Door Lock 12.30','2010-08-18 11:28:08',3941,'ishtiaq'),(775,'Door lock 5.00','2010-08-18 11:28:50',3586,'ishtiaq'),(776,'Done ','2010-08-18 11:31:25',3968,'ishtiaq'),(777,'Done','2010-08-18 11:33:27',3902,'ishtiaq'),(778,'Done ','2010-08-18 11:35:38',3982,'ishtiaq'),(779,'Gutter Line chocke ','2010-08-18 11:36:29',3948,'ishtiaq'),(780,'Not down ','2010-08-18 11:37:20',3886,'ishtiaq'),(781,'New line required ','2010-08-18 11:38:02',3770,'ishtiaq'),(782,'water Supply work ','2010-08-18 11:38:35',3842,'ishtiaq'),(783,'Done ','2010-08-18 11:38:47',3916,'ishtiaq'),(784,'done ','2010-08-18 11:39:11',3974,'ishtiaq'),(785,'N.A showar ','2010-08-18 11:39:30',4027,'ishtiaq'),(786,'lock','2010-08-18 11:49:08',4021,'ishtiaq'),(787,'Kitchan dic cover water coming and roof no floot vole','2010-08-18 11:50:41',3784,'ishtiaq'),(788,'Maasan work','2010-08-18 11:52:35',3992,'ishtiaq'),(789,'Cabnite door complete def','2010-08-18 11:54:26',3697,'ishtiaq'),(790,'done','2010-08-18 11:55:21',3864,'ishtiaq'),(791,'Blue tack NA Store','2010-08-18 11:56:16',3841,'ishtiaq'),(792,'done','2010-08-18 11:57:06',3582,'ishtiaq'),(793,'lock 11:00','2010-08-18 11:57:46',3871,'ishtiaq'),(794,'lock','2010-08-18 11:58:36',3812,'ishtiaq'),(795,'lock 10:00','2010-08-18 11:59:25',3874,'ishtiaq'),(796,'done','2010-08-18 11:59:58',3945,'ishtiaq'),(797,'done','2010-08-18 12:02:37',4002,'ishtiaq'),(798,'done','2010-08-18 12:03:16',3834,'ishtiaq'),(799,'done','2010-08-19 07:54:30',4221,'ishtiaq'),(800,'done ','2010-08-19 07:54:59',4254,'ishtiaq'),(801,'done ','2010-08-19 07:55:36',4222,'ishtiaq'),(802,'done ','2010-08-19 07:55:58',4122,'ishtiaq'),(803,'done ','2010-08-19 07:56:21',4255,'ishtiaq'),(804,'done ','2010-08-19 07:56:46',4116,'ishtiaq'),(805,'done ','2010-08-19 07:57:09',4137,'ishtiaq'),(806,'done ','2010-08-19 07:57:30',4189,'ishtiaq'),(807,'done ','2010-08-19 07:57:52',4194,'ishtiaq'),(808,'done ','2010-08-19 07:58:12',4169,'ishtiaq'),(809,'N.A sink Mixture water tap ','2010-08-19 07:59:08',4165,'ishtiaq'),(810,'N.A sink Mixture water tap','2010-08-19 07:59:21',4165,'ishtiaq'),(811,'tach at blue N.A ','2010-08-19 07:59:49',3950,'ishtiaq'),(812,'Muslim Shawer N.A ','2010-08-19 08:00:21',4163,'ishtiaq'),(813,'Tach At  Blue N.A ','2010-08-19 08:00:52',4168,'ishtiaq'),(814,'Tech at  blue N.A ','2010-08-19 08:01:28',3594,'ishtiaq'),(815,'Tech at Blue N.A ','2010-08-19 08:01:57',4145,'ishtiaq'),(816,'S/Valve N.A','2010-08-19 08:04:09',3863,'ishtiaq'),(817,'DOne','2010-08-19 08:04:31',4211,'ishtiaq'),(818,'done ','2010-08-19 08:05:25',4204,'ishtiaq'),(819,'done ','2010-08-19 08:05:30',4204,'ishtiaq'),(820,'Oven Knobe  N.A ','2010-08-19 08:08:27',4193,'ishtiaq'),(821,'Distemper N.A ','2010-08-19 08:09:00',4231,'ishtiaq'),(822,'New Ex/Fan N.A ','2010-08-19 08:09:55',4141,'ishtiaq'),(823,'Contractor Work ','2010-08-19 08:10:31',4146,'ishtiaq'),(824,'Done ','2010-08-19 08:10:53',4158,'ishtiaq'),(825,'Capicator N.A ','2010-08-19 08:11:24',4143,'ishtiaq'),(826,'done ','2010-08-19 08:11:52',4174,'ishtiaq'),(827,'Done ','2010-08-19 08:12:14',4171,'ishtiaq'),(828,'05 Amp Socket N.A ','2010-08-19 08:12:46',4153,'ishtiaq'),(829,'T/Rod & Starter N.A ','2010-08-19 08:13:29',4162,'ishtiaq'),(830,'done ','2010-08-19 08:13:50',4180,'ishtiaq'),(831,'Bulb N.A ','2010-08-19 08:14:18',4192,'ishtiaq'),(832,'Done ','2010-08-19 08:14:47',4016,'ishtiaq'),(833,'done ','2010-08-19 08:15:27',4108,'ishtiaq'),(834,'P /SWITCH ','2010-08-19 08:16:32',3903,'ishtiaq'),(835,'dONE ','2010-08-19 08:16:47',4020,'ishtiaq'),(836,'dONE ','2010-08-19 08:17:08',4120,'ishtiaq'),(837,'doNE ','2010-08-19 08:17:35',4071,'ishtiaq'),(838,'dONE ','2010-08-19 08:18:00',3967,'ishtiaq'),(839,'dONE ','2010-08-19 08:18:26',4118,'ishtiaq'),(840,'dONE ','2010-08-19 08:18:46',4005,'ishtiaq'),(841,'N.A  15 Amp ,05 Amp socket ','2010-08-19 08:19:47',4048,'ishtiaq'),(842,'DOne ','2010-08-19 08:20:15',4056,'ishtiaq'),(843,'05 Amp & 15 Amp N.A ','2010-08-19 08:20:57',4132,'ishtiaq'),(844,'Capicator N.A ','2010-08-19 08:22:28',4113,'ishtiaq'),(845,'T/Rod N.A ','2010-08-19 08:22:57',4012,'ishtiaq'),(846,'t/Rod N.A ','2010-08-19 08:23:06',4012,'ishtiaq'),(847,'Contractor Work ','2010-08-19 08:27:52',4135,'ishtiaq'),(848,'Done ','2010-08-19 08:28:15',4138,'ishtiaq'),(849,'DOne ','2010-08-19 08:28:42',4107,'ishtiaq'),(850,'Done ','2010-08-19 08:29:50',4191,'ishtiaq'),(851,'Done ','2010-08-19 08:30:10',4188,'ishtiaq'),(852,'Done ','2010-08-19 08:30:40',4111,'ishtiaq'),(853,'k/Mixture N.A ','2010-08-19 08:31:00',4123,'ishtiaq'),(854,'Done ','2010-08-19 08:31:23',4136,'ishtiaq'),(855,'Done ','2010-08-19 08:31:43',4149,'ishtiaq'),(856,'Done ','2010-08-19 08:32:09',4077,'ishtiaq'),(857,'done ','2010-08-19 08:32:59',4280,'ishtiaq'),(858,'Done ','2010-08-19 08:33:35',4039,'ishtiaq'),(859,'Done ','2010-08-19 08:33:58',4083,'ishtiaq'),(860,'Done ','2010-08-19 08:34:30',4166,'ishtiaq'),(861,'Done ','2010-08-19 08:35:12',4047,'ishtiaq'),(862,'Done ','2010-08-19 08:35:28',4182,'ishtiaq'),(863,'Done ','2010-08-19 08:38:03',4147,'ishtiaq'),(864,'New  Choket required ','2010-08-19 08:38:48',2883,'ishtiaq'),(865,'Done ','2010-08-19 08:39:24',4130,'ishtiaq'),(866,'done ','2010-08-19 08:44:21',4128,'ishtiaq'),(867,'DOne ','2010-08-19 08:56:03',4084,'ishtiaq'),(868,'Done ','2010-08-19 08:56:35',3597,'ishtiaq'),(869,'Done ','2010-08-19 08:56:46',4167,'ishtiaq'),(870,'Done ','2010-08-19 08:57:08',4144,'ishtiaq'),(871,'Done ','2010-08-19 08:57:31',4181,'ishtiaq'),(872,'New pipe line requried ','2010-08-19 08:58:03',4058,'ishtiaq'),(873,'New  Pipe line To be Change ','2010-08-19 08:58:35',4148,'ishtiaq'),(874,'Gutter Line to be change ','2010-08-19 08:59:21',4114,'ishtiaq'),(875,'Done ','2010-08-19 08:59:40',4096,'ishtiaq'),(876,'Done ','2010-08-19 09:00:07',4184,'ishtiaq'),(877,'Done ','2010-08-19 09:00:33',4176,'ishtiaq'),(878,'30 ft stair requried ','2010-08-19 09:01:28',4011,'ishtiaq'),(879,'N.A Store ','2010-08-19 09:02:11',4011,'ishtiaq'),(880,'House lock','2010-08-19 09:53:07',4111,'ishtiaq'),(881,'No work','2010-08-19 09:54:23',4229,'ishtiaq'),(882,'Done','2010-08-19 09:54:58',4196,'ishtiaq'),(883,'Done','2010-08-19 09:56:22',4285,'ishtiaq'),(884,'Tacket blue','2010-08-19 10:00:23',4035,'ishtiaq'),(885,'Taket blue NA','2010-08-19 10:00:43',4035,'ishtiaq'),(886,'Done','2010-08-19 10:01:12',3907,'ishtiaq'),(887,'\r\nDone','2010-08-19 10:01:39',3906,'ishtiaq'),(888,'Done','2010-08-19 10:02:30',3361,'ishtiaq'),(889,'Done','2010-08-19 10:03:00',4170,'ishtiaq'),(890,'Done','2010-08-19 10:04:08',4152,'ishtiaq'),(891,'Push baotton NA','2010-08-19 10:05:00',4217,'ishtiaq'),(892,'Store NA','2010-08-19 10:05:34',4237,'ishtiaq'),(893,'Done','2010-08-19 10:06:01',4272,'ishtiaq'),(894,'Done','2010-08-19 10:06:38',4269,'ishtiaq'),(895,'Done','2010-08-19 10:07:07',4278,'ishtiaq'),(896,'Done','2010-08-19 10:07:30',4271,'ishtiaq'),(897,'Done','2010-08-19 10:07:53',4253,'ishtiaq'),(898,'Done','2010-08-19 10:08:32',4235,'ishtiaq'),(899,'Done','2010-08-19 10:08:58',4261,'ishtiaq'),(900,'Done','2010-08-19 10:09:36',4026,'ishtiaq'),(901,'Done','2010-08-19 10:11:52',4288,'ishtiaq'),(902,'Done','2010-08-19 10:12:36',4286,'ishtiaq'),(903,'Done ','2010-08-19 10:13:51',4279,'ishtiaq'),(904,'Done ','2010-08-19 10:15:57',4207,'ishtiaq'),(905,'done ','2010-08-19 10:17:16',4225,'ishtiaq'),(906,'Done ','2010-08-19 10:18:44',4224,'ishtiaq'),(907,'Done ','2010-08-19 10:19:41',4112,'ishtiaq'),(908,'Done ','2010-08-19 10:20:41',4164,'ishtiaq'),(909,'Done ','2010-08-19 10:21:31',4210,'ishtiaq'),(910,'done ','2010-08-19 11:02:10',4238,'ishtiaq'),(911,'done','2010-08-19 11:08:22',4238,'ishtiaq'),(912,'done','2010-08-19 11:11:33',4214,'ishtiaq'),(913,'done','2010-08-19 11:13:40',4052,'ishtiaq'),(914,'done','2010-08-19 11:15:52',3985,'ishtiaq'),(915,'done','2010-08-19 11:20:19',4307,'ishtiaq'),(916,'done','2010-08-19 11:29:37',4273,'ishtiaq'),(917,'B/ni pel 1/2 Socket 1/2 NA Store','2010-08-19 11:34:06',4173,'ishtiaq'),(918,'B/ni pel Socket 1/2  NA Store ','2010-08-19 11:38:03',4173,'ishtiaq'),(919,'Ex/fan  NA Store','2010-08-19 11:48:08',4226,'ishtiaq'),(920,'Starter NA Store P/switch NA Store','2010-08-19 11:53:19',4068,'ishtiaq'),(921,'Socket 05 amp NA Store','2010-08-19 11:56:29',4256,'ishtiaq'),(922,'T/rod 40w Starter P/switch NA store','2010-08-19 12:01:04',4258,'ishtiaq'),(923,'Capester NA Store','2010-08-19 12:03:27',4283,'ishtiaq'),(924,'Dimeer,Capester,Ext fan NA Store','2010-08-19 12:07:01',4289,'ishtiaq'),(925,'done','2010-08-19 12:21:04',4344,'ishtiaq'),(926,'done','2010-08-19 12:24:02',4215,'ishtiaq'),(927,'done','2010-08-19 12:45:28',4297,'ishtiaq'),(928,'done','2010-08-19 12:48:08',4252,'ishtiaq'),(929,'done','2010-08-19 12:51:00',4265,'ishtiaq'),(930,'done','2010-08-19 13:03:05',4316,'ishtiaq'),(931,'done','2010-08-19 13:15:25',3895,'ishtiaq'),(932,'done','2010-08-19 13:17:49',4322,'ishtiaq'),(933,'done','2010-08-19 13:19:50',4345,'ishtiaq'),(934,'done','2010-08-19 13:22:19',4035,'ishtiaq'),(935,'done','2010-08-19 13:24:03',4282,'ishtiaq'),(936,'done','2010-08-19 13:26:31',4156,'ishtiaq'),(937,'done','2010-08-19 13:28:37',4133,'ishtiaq'),(938,'done','2010-08-19 13:30:32',4300,'ishtiaq'),(939,'done','2010-08-19 13:36:48',4329,'ishtiaq'),(940,'done','2010-08-19 13:38:38',4343,'ishtiaq'),(941,'done','2010-08-20 08:35:35',4318,'ishtiaq'),(942,'done','2010-08-20 08:38:20',4355,'ishtiaq'),(943,'Done ','2010-08-20 08:59:04',4360,'ishtiaq'),(944,'done\r\n','2010-08-20 09:07:12',4340,'ishtiaq'),(945,'Done ','2010-08-20 09:07:30',4115,'ishtiaq'),(946,'done ','2010-08-20 09:24:25',4208,'ishtiaq'),(947,'Done','2010-08-20 09:27:21',4296,'ishtiaq'),(948,'Done\r\n','2010-08-20 09:28:24',4313,'ishtiaq'),(949,'Store NA','2010-08-20 09:30:20',4290,'ishtiaq'),(950,'Piano switch NA','2010-08-20 09:31:14',4292,'ishtiaq'),(951,'Store NA','2010-08-20 09:32:47',4161,'ishtiaq'),(952,'Store NA','2010-08-20 09:34:27',4155,'ishtiaq'),(953,'Store NA','2010-08-20 09:38:57',4155,'ishtiaq'),(954,'Thermostate NA','2010-08-20 09:39:27',4332,'ishtiaq'),(955,'Water tank M.T','2010-08-20 09:40:31',4295,'ishtiaq'),(956,'Taket blue NA','2010-08-20 09:42:17',4200,'ishtiaq'),(957,'Store NA','2010-08-20 09:43:38',4197,'ishtiaq'),(958,'House lock at 5:20pm','2010-08-20 09:55:18',4197,'ishtiaq'),(959,'house lock at 05:00pm','2010-08-20 09:57:32',4038,'ishtiaq'),(960,'40 Fitt stair NA','2010-08-20 10:19:28',4277,'ishtiaq'),(961,'40 Fitt stair NA','2010-08-20 10:21:16',4276,'ishtiaq'),(962,'Over head tank leak','2010-08-20 10:22:20',4209,'ishtiaq'),(963,'Store NA','2010-08-20 10:23:20',4363,'ishtiaq'),(964,'Bulb & T/Rad NA','2010-08-20 10:24:29',4260,'ishtiaq'),(965,'Done','2010-08-20 10:30:37',4368,'ishtiaq'),(966,'Store NA','2010-08-20 10:36:23',4298,'ishtiaq'),(967,'Piano switch NA','2010-08-20 10:36:59',4303,'ishtiaq'),(968,'Piano switch NA','2010-08-20 10:46:34',4303,'ishtiaq'),(969,'Piano switch NA','2010-08-20 10:47:26',4321,'ishtiaq'),(970,'Bulb NA','2010-08-20 10:47:46',4337,'ishtiaq'),(971,'Piano Switch NA','2010-08-20 10:49:02',4350,'ishtiaq'),(972,'Starter NA','2010-08-20 10:49:25',4364,'ishtiaq'),(973,'Done','2010-08-20 10:50:26',4302,'ishtiaq'),(974,'Done','2010-08-20 10:50:44',4351,'ishtiaq'),(975,'Done','2010-08-20 10:53:11',4354,'ishtiaq'),(976,'Done','2010-08-20 10:54:14',4339,'ishtiaq'),(977,'Done','2010-08-20 10:54:29',4299,'ishtiaq'),(978,'Done','2010-08-20 10:55:32',4302,'ishtiaq'),(979,'Done','2010-08-20 10:56:10',4203,'ishtiaq'),(980,'Done','2010-08-20 10:57:16',4201,'ishtiaq'),(981,'Done','2010-08-20 10:57:34',4330,'ishtiaq'),(982,'Done','2010-08-20 10:58:34',4275,'ishtiaq'),(983,'Done','2010-08-20 10:58:56',4348,'ishtiaq'),(984,'Done','2010-08-20 11:02:45',4281,'ishtiaq'),(985,'Done','2010-08-20 11:03:04',4078,'ishtiaq'),(986,'Done','2010-08-20 11:03:18',4331,'ishtiaq'),(987,'Done','2010-08-20 11:04:08',4346,'ishtiaq'),(988,'Done','2010-08-20 11:04:26',4359,'ishtiaq'),(989,'Done','2010-08-20 11:04:57',4368,'ishtiaq'),(990,'Done','2010-08-20 11:05:59',4311,'ishtiaq'),(991,'Done','2010-08-20 11:06:11',4385,'ishtiaq'),(992,'done','2010-08-20 11:32:54',4385,'ishtiaq'),(993,'done','2010-08-20 11:35:53',4385,'ishtiaq'),(994,'done','2010-08-20 11:36:29',4311,'ishtiaq'),(995,'done','2010-08-20 11:37:06',4359,'ishtiaq'),(996,'done','2010-08-20 11:37:38',4346,'ishtiaq'),(997,'done','2010-08-20 11:38:10',4078,'ishtiaq'),(998,'done','2010-08-20 11:38:42',4281,'ishtiaq'),(999,'done','2010-08-20 11:55:29',4223,'ishtiaq'),(1000,'done','2010-08-20 13:09:09',4205,'ishtiaq'),(1001,'done','2010-08-20 13:09:40',4251,'ishtiaq'),(1002,'done','2010-08-20 13:10:08',4266,'ishtiaq'),(1003,'done','2010-08-20 13:10:38',4349,'ishtiaq'),(1004,'done','2010-08-20 13:11:05',4274,'ishtiaq'),(1005,'done','2010-08-20 13:11:31',4305,'ishtiaq'),(1006,'done','2010-08-20 13:15:34',3915,'ishtiaq'),(1007,'done','2010-08-20 13:16:02',4154,'ishtiaq'),(1008,'done','2010-08-20 13:16:33',4312,'ishtiaq'),(1009,'done','2010-08-20 13:17:05',4225,'ishtiaq'),(1010,'done','2010-08-20 13:17:59',3806,'ishtiaq'),(1011,'P/switch NA Store','2010-08-20 13:19:34',4293,'ishtiaq'),(1012,'done','2010-08-20 13:30:47',4024,'ishtiaq'),(1013,'01 celing fan change & Capaster 01 NA Store','2010-08-20 13:31:51',4233,'ishtiaq'),(1014,'Capaster 01 NA Store','2010-08-20 13:32:32',4294,'ishtiaq'),(1015,'done','2010-08-20 13:33:04',4376,'ishtiaq'),(1016,'done','2010-08-20 13:33:35',4374,'ishtiaq'),(1017,'done','2010-08-20 13:34:05',4379,'ishtiaq'),(1018,'done','2010-08-20 13:44:42',4409,'ishtiaq'),(1019,'done','2010-08-20 13:45:08',4417,'ishtiaq'),(1020,'done','2010-08-20 13:50:27',4422,'ishtiaq'),(1021,'done','2010-08-20 14:00:49',4421,'ishtiaq'),(1022,'done','2010-08-20 14:01:13',4414,'ishtiaq'),(1023,'done','2010-08-23 07:48:46',4451,'ishtiaq'),(1024,'Done ','2010-08-23 10:26:47',4452,'ishtiaq'),(1025,'done ','2010-08-23 10:27:09',4447,'ishtiaq'),(1026,'Done ','2010-08-23 10:27:23',4450,'ishtiaq'),(1027,'Done \r\n','2010-08-23 10:27:49',4453,'ishtiaq'),(1028,'done ','2010-08-23 10:28:05',4482,'ishtiaq'),(1029,'done \r\n','2010-08-23 10:28:20',4444,'ishtiaq'),(1030,'done ','2010-08-23 10:28:33',4465,'ishtiaq'),(1031,'done ','2010-08-23 10:28:46',4463,'ishtiaq'),(1032,'Done\r\n','2010-08-23 10:29:06',4458,'ishtiaq'),(1033,'doen','2010-08-23 10:29:19',4466,'ishtiaq'),(1034,'done','2010-08-23 10:29:32',4445,'ishtiaq'),(1035,'done\r\n','2010-08-23 10:29:45',4481,'ishtiaq'),(1036,'Done ','2010-08-23 10:35:44',4459,'ishtiaq'),(1037,'done ','2010-08-23 10:35:57',4314,'ishtiaq'),(1038,'Done ','2010-08-23 10:36:15',4468,'ishtiaq'),(1039,'done ','2010-08-23 10:36:27',4469,'ishtiaq'),(1040,'done ','2010-08-23 10:36:38',4446,'ishtiaq'),(1041,'N.A Store ','2010-08-23 10:37:00',4470,'ishtiaq'),(1042,'done ','2010-08-23 10:37:10',4436,'ishtiaq'),(1043,'doNE ','2010-08-23 10:37:25',4489,'ishtiaq'),(1044,'dONE ','2010-08-23 10:37:37',4449,'ishtiaq'),(1045,'N.A Door Lock ','2010-08-23 10:37:59',4428,'ishtiaq'),(1046,'N.A Musliam Shower ','2010-08-23 10:38:29',4448,'ishtiaq'),(1047,'done ','2010-08-23 10:38:58',4328,'ishtiaq'),(1048,'Done ','2010-08-23 10:39:13',4442,'ishtiaq'),(1049,'Done ','2010-08-23 10:39:24',4410,'ishtiaq'),(1050,'Done ','2010-08-23 10:39:36',4394,'ishtiaq'),(1051,'done ','2010-08-23 10:39:47',4430,'ishtiaq'),(1052,'done ','2010-08-23 10:40:21',4227,'ishtiaq'),(1053,'done ','2010-08-23 10:40:42',4401,'ishtiaq'),(1054,'done ','2010-08-23 10:40:58',4441,'ishtiaq'),(1055,'done ','2010-08-23 10:41:07',4432,'ishtiaq'),(1056,'done ','2010-08-23 10:41:15',4405,'ishtiaq'),(1057,'done ','2010-08-23 10:41:25',4415,'ishtiaq'),(1058,'done ','2010-08-23 10:41:35',4408,'ishtiaq'),(1059,'done ','2010-08-23 10:41:47',4424,'ishtiaq'),(1060,'done','2010-08-23 10:41:57',4427,'ishtiaq'),(1061,'N.A WC ','2010-08-23 10:42:27',4375,'ishtiaq'),(1062,'N.A tech at blue ','2010-08-23 10:43:30',4324,'ishtiaq'),(1063,'done ','2010-08-23 10:46:05',4398,'ishtiaq'),(1064,'done ','2010-08-23 10:46:15',4370,'ishtiaq'),(1065,'done ','2010-08-23 10:46:32',4500,'ishtiaq'),(1066,'done ','2010-08-23 10:46:56',4486,'ishtiaq'),(1067,'N,A Socket & t/Rod ','2010-08-23 10:47:20',4485,'ishtiaq'),(1068,'Done ','2010-08-23 10:47:34',4484,'ishtiaq'),(1069,'done ','2010-08-23 10:56:05',4480,'ishtiaq'),(1070,'done ','2010-08-23 10:56:18',4479,'ishtiaq'),(1071,'N.A (T/Light Ex/Fan) ','2010-08-23 10:57:16',4477,'ishtiaq'),(1072,'N.A P/Switch ','2010-08-23 10:57:39',4475,'ishtiaq'),(1073,'done ','2010-08-23 10:57:53',4474,'ishtiaq'),(1074,'done ','2010-08-23 10:58:03',4462,'ishtiaq'),(1075,'done','2010-08-23 11:13:04',4444,'ishtiaq'),(1076,'done','2010-08-23 12:32:01',4460,'agent2'),(1077,'done','2010-08-23 12:32:27',4444,'agent2'),(1078,'done','2010-08-23 12:33:05',4283,'agent2'),(1079,'done','2010-08-24 09:12:58',4602,'ishtiaq'),(1080,'done','2010-08-24 09:16:36',4591,'ishtiaq'),(1081,'done','2010-08-24 09:17:00',4599,'ishtiaq'),(1082,'done','2010-08-24 09:17:27',4595,'ishtiaq'),(1083,'done','2010-08-24 09:17:54',4594,'ishtiaq'),(1084,'done','2010-08-24 09:18:40',4592,'ishtiaq'),(1085,'done','2010-08-24 09:19:19',4598,'ishtiaq'),(1086,'done','2010-08-24 09:19:48',4315,'ishtiaq'),(1087,'done','2010-08-24 09:20:20',4575,'ishtiaq'),(1088,'done','2010-08-24 09:32:28',4586,'ishtiaq'),(1089,'done','2010-08-24 09:32:50',4614,'ishtiaq'),(1090,'No done','2010-08-24 09:33:21',4605,'ishtiaq'),(1091,'No done','2010-08-24 09:33:47',4605,'ishtiaq'),(1092,'PVT work','2010-08-24 09:34:26',4606,'ishtiaq'),(1093,'No done','2010-08-24 09:36:17',4586,'ishtiaq'),(1094,'Store NA ','2010-08-24 11:02:50',4628,'ishtiaq'),(1095,'Store NA','2010-08-24 11:03:25',4555,'ishtiaq'),(1096,'Store NA','2010-08-24 11:04:12',4540,'ishtiaq'),(1097,'Done','2010-08-24 11:04:51',4625,'ishtiaq'),(1098,'Done','2010-08-24 11:05:59',4467,'ishtiaq'),(1099,'Done','2010-08-24 11:07:01',4610,'ishtiaq'),(1100,'Store NA\r\n','2010-08-24 11:07:36',4624,'ishtiaq'),(1101,'Done','2010-08-24 11:08:07',4618,'ishtiaq'),(1102,'Done','2010-08-24 11:08:38',4454,'ishtiaq'),(1103,'Store NA','2010-08-24 11:09:11',4544,'ishtiaq'),(1104,'Done','2010-08-24 11:09:54',4431,'ishtiaq'),(1105,'Done','2010-08-24 11:10:24',4389,'ishtiaq'),(1106,'No Complaint','2010-08-24 11:10:59',4619,'ishtiaq'),(1107,'Done','2010-08-24 11:11:23',4644,'ishtiaq'),(1108,'Done','2010-08-24 11:11:51',4656,'ishtiaq'),(1109,'Done','2010-08-24 11:12:45',4651,'ishtiaq'),(1110,'Done','2010-08-24 11:13:13',4416,'ishtiaq'),(1111,'Store NA','2010-08-24 11:13:57',4546,'ishtiaq'),(1112,'Store NA','2010-08-24 11:14:48',4600,'ishtiaq'),(1113,'Store NA','2010-08-24 11:17:49',4572,'ishtiaq'),(1114,'Done','2010-08-24 11:18:16',4556,'ishtiaq'),(1115,'Done','2010-08-24 11:19:00',4187,'ishtiaq'),(1116,'Done','2010-08-24 11:19:38',3924,'ishtiaq'),(1117,'Store NA','2010-08-24 11:20:18',4474,'ishtiaq'),(1118,'Store NA','2010-08-24 11:20:59',4577,'ishtiaq'),(1119,'Done','2010-08-24 11:21:38',4567,'ishtiaq'),(1120,'Done','2010-08-24 11:22:19',4585,'ishtiaq'),(1121,'Done','2010-08-24 11:22:43',4557,'ishtiaq'),(1122,'Done','2010-08-24 11:23:25',4373,'ishtiaq'),(1123,'Done','2010-08-24 11:25:24',4530,'ishtiaq'),(1124,'Done','2010-08-24 11:26:18',4388,'ishtiaq'),(1125,'Done','2010-08-24 11:26:50',4590,'ishtiaq'),(1126,'Done','2010-08-24 11:27:27',4570,'ishtiaq'),(1127,'Done','2010-08-24 11:28:39',4569,'ishtiaq'),(1128,'Done','2010-08-24 11:29:30',4434,'ishtiaq'),(1129,'Done','2010-08-24 11:30:08',4445,'ishtiaq'),(1130,'(B/R Work) B/R Complaint No 4695','2010-08-24 11:34:26',4439,'ishtiaq'),(1131,'Done','2010-08-24 11:34:55',4543,'ishtiaq'),(1132,'Not done','2010-08-24 11:35:33',4539,'ishtiaq'),(1133,'House lock','2010-08-24 11:36:49',4425,'ishtiaq'),(1134,'Store NA','2010-08-24 11:37:23',4573,'ishtiaq'),(1135,'K.M.C Main Gutter line chocked','2010-08-24 11:38:16',4397,'ishtiaq'),(1136,'Done','2010-08-24 11:38:41',4561,'ishtiaq'),(1137,'Done','2010-08-24 11:39:11',4386,'ishtiaq'),(1138,'Done','2010-08-24 11:39:41',4326,'ishtiaq'),(1139,'Done','2010-08-24 11:40:11',4382,'ishtiaq'),(1140,'Done','2010-08-24 11:40:33',4366,'ishtiaq'),(1141,'Done','2010-08-24 11:41:00',4378,'ishtiaq'),(1142,'Done','2010-08-24 11:41:29',4342,'ishtiaq'),(1143,'Done','2010-08-24 11:41:54',4383,'ishtiaq'),(1144,'Done','2010-08-24 11:42:25',4377,'ishtiaq'),(1145,'Done','2010-08-24 11:42:57',4402,'ishtiaq'),(1146,'Done','2010-08-24 11:43:21',4491,'ishtiaq'),(1147,'Done','2010-08-24 11:43:57',4536,'ishtiaq'),(1148,'Done','2010-08-24 11:44:25',4578,'ishtiaq'),(1149,'Done','2010-08-24 11:44:58',4535,'ishtiaq'),(1150,'Done','2010-08-24 11:45:28',4581,'ishtiaq'),(1151,'Done','2010-08-24 11:45:58',4589,'ishtiaq'),(1152,'Done','2010-08-24 11:46:31',4531,'ishtiaq'),(1153,'Store NA','2010-08-24 11:47:05',4320,'ishtiaq'),(1154,'Store NA','2010-08-24 11:47:39',4371,'ishtiaq'),(1155,'Store NA','2010-08-24 11:48:08',4384,'ishtiaq'),(1156,'Store NA','2010-08-24 11:48:42',4372,'ishtiaq'),(1157,'Store NA','2010-08-24 11:49:16',4293,'ishtiaq'),(1158,'Store NA','2010-08-24 11:49:48',4391,'ishtiaq'),(1159,'Store NA ','2010-08-24 11:50:01',4391,'ishtiaq'),(1160,'Store NA','2010-08-24 11:50:39',4435,'ishtiaq'),(1161,'Store NA','2010-08-24 11:51:06',4506,'ishtiaq'),(1162,'Store NA','2010-08-24 11:51:46',4411,'ishtiaq'),(1163,'Store NA','2010-08-24 11:52:17',4407,'ishtiaq'),(1164,'No body in home','2010-08-24 11:54:12',3373,'ishtiaq'),(1165,'Store NA','2010-08-24 11:54:49',4537,'ishtiaq'),(1166,'Water Motar at office','2010-08-24 11:56:03',4553,'ishtiaq'),(1167,'Store NA','2010-08-24 11:57:04',4393,'ishtiaq'),(1168,'Store NA','2010-08-24 11:59:42',4357,'ishtiaq'),(1169,'Store NA','2010-08-24 12:00:24',4564,'ishtiaq'),(1170,'Contractor work','2010-08-24 12:01:36',4533,'ishtiaq'),(1171,'Store NA','2010-08-24 12:02:24',4392,'ishtiaq'),(1172,'Not done','2010-08-24 12:03:08',4315,'ishtiaq'),(1173,'Store NA','2010-08-24 12:03:37',4423,'ishtiaq'),(1174,'Store NA','2010-08-24 12:04:07',4219,'ishtiaq'),(1175,'Store NA','2010-08-24 12:04:38',4403,'ishtiaq'),(1176,'Store NA','2010-08-24 12:05:15',4327,'ishtiaq'),(1177,'Store NA','2010-08-24 12:06:38',4230,'ishtiaq'),(1178,'Store NA','2010-08-24 12:07:50',4261,'ishtiaq'),(1179,'Store NA','2010-08-24 12:08:26',4319,'ishtiaq'),(1180,'Store NA','2010-08-24 12:08:59',4443,'ishtiaq'),(1181,'Done','2010-08-24 12:09:27',4593,'ishtiaq'),(1182,'Store NA','2010-08-24 12:09:57',3841,'ishtiaq'),(1183,'Water supply work','2010-08-24 12:10:48',4433,'ishtiaq'),(1184,'Done','2010-08-24 12:26:33',4131,'ishtiaq'),(1185,'Done','2010-08-24 12:27:08',4563,'ishtiaq'),(1186,'Done','2010-08-24 12:29:16',4549,'ishtiaq'),(1187,'Done','2010-08-24 12:30:31',4597,'ishtiaq'),(1188,'Done','2010-08-24 12:31:03',4640,'ishtiaq'),(1189,'Done','2010-08-24 12:31:31',4369,'ishtiaq'),(1190,'No work','2010-08-24 12:32:10',4576,'ishtiaq'),(1191,'Not done','2010-08-24 12:32:49',4301,'ishtiaq'),(1192,'Done','2010-08-24 12:33:21',4647,'ishtiaq'),(1193,'Done','2010-08-24 12:33:46',4655,'ishtiaq'),(1194,'Done','2010-08-24 12:34:12',4538,'ishtiaq'),(1195,'Done','2010-08-25 07:48:51',4676,'ishtiaq'),(1196,'Done ','2010-08-25 07:49:14',4552,'ishtiaq'),(1197,'Done','2010-08-25 07:50:44',4582,'ishtiaq'),(1198,'Done ','2010-08-25 07:51:00',4488,'ishtiaq'),(1199,'done ','2010-08-25 07:51:26',4596,'ishtiaq'),(1200,'done ','2010-08-25 07:52:06',4622,'ishtiaq'),(1201,'Done ','2010-08-25 07:54:12',4571,'ishtiaq'),(1202,'Done ','2010-08-25 07:59:47',4741,'ishtiaq'),(1203,'done ','2010-08-25 07:59:58',4683,'ishtiaq'),(1204,'Done','2010-08-25 08:00:13',4739,'ishtiaq'),(1205,'Done ','2010-08-25 08:00:31',4681,'ishtiaq'),(1206,'Done ','2010-08-25 08:00:44',4702,'ishtiaq'),(1207,'4648','2010-08-25 08:00:50',4702,'ishtiaq'),(1208,'Done ','2010-08-25 08:01:12',4695,'ishtiaq'),(1209,'Done ','2010-08-25 08:01:42',4716,'ishtiaq'),(1210,'N.A Seat Cover ','2010-08-25 08:02:25',4705,'ishtiaq'),(1211,'M/Shower N.A','2010-08-25 08:02:51',4709,'ishtiaq'),(1212,'Done ','2010-08-25 08:03:56',4652,'ishtiaq'),(1213,'Done ','2010-08-25 08:04:13',4673,'ishtiaq'),(1214,'Door Lock N,A ','2010-08-25 08:04:40',4677,'ishtiaq'),(1215,'done ','2010-08-25 08:05:46',4732,'ishtiaq'),(1216,'done ','2010-08-25 08:05:58',4721,'ishtiaq'),(1217,'done ','2010-08-25 08:06:32',4661,'ishtiaq'),(1218,'done ','2010-08-25 08:06:55',4714,'ishtiaq'),(1219,'done ','2010-08-25 08:10:22',4700,'ishtiaq'),(1220,'done ','2010-08-25 08:10:33',4682,'ishtiaq'),(1221,'done','2010-08-25 08:45:11',4687,'ishtiaq'),(1222,'Done','2010-08-25 09:36:59',4710,'ishtiaq'),(1223,'Done','2010-08-25 09:37:53',4732,'ishtiaq'),(1224,'Store NA','2010-08-25 09:38:27',4672,'ishtiaq'),(1225,'Store NA (Main door lock)','2010-08-25 09:39:31',4713,'ishtiaq'),(1226,'Done','2010-08-25 09:40:17',4760,'ishtiaq'),(1227,'Store NA','2010-08-25 09:40:47',4696,'ishtiaq'),(1228,'Done','2010-08-25 09:42:03',4738,'ishtiaq'),(1229,'Done','2010-08-25 09:42:51',4714,'ishtiaq'),(1230,'Done','2010-08-25 09:43:50',4721,'ishtiaq'),(1231,'Store NA','2010-08-25 09:44:20',4677,'ishtiaq'),(1232,'Done','2010-08-25 09:45:06',4673,'ishtiaq'),(1233,'Done','2010-08-25 09:45:38',4652,'ishtiaq'),(1234,'Done','2010-08-25 09:47:28',4648,'ishtiaq'),(1235,'Done','2010-08-25 09:48:18',4681,'ishtiaq'),(1236,'done ','2010-08-25 11:01:34',4772,'ishtiaq'),(1237,'done','2010-08-25 11:45:04',4747,'ishtiaq'),(1238,'done','2010-08-25 11:50:44',4688,'ishtiaq'),(1239,'done','2010-08-25 11:51:13',4671,'ishtiaq'),(1240,'done','2010-08-25 12:12:01',4748,'ishtiaq'),(1241,'done','2010-08-25 12:37:01',4474,'ishtiaq'),(1242,'done','2010-08-25 12:37:48',4752,'ishtiaq'),(1243,'done','2010-08-25 12:38:26',4664,'ishtiaq'),(1244,'done','2010-08-25 12:38:51',4347,'ishtiaq'),(1245,'done','2010-08-25 12:40:12',4580,'ishtiaq'),(1246,'done','2010-08-25 12:40:38',4568,'ishtiaq'),(1247,'done','2010-08-25 12:41:11',4616,'ishtiaq'),(1248,'done','2010-08-25 12:41:43',4474,'ishtiaq'),(1249,'done','2010-08-25 12:42:10',4584,'ishtiaq'),(1250,'done','2010-08-25 12:42:36',4562,'ishtiaq'),(1251,'testsdjsd','2012-03-20 14:39:04',3507,'ishtiaq'),(1252,'s','2012-03-20 14:39:48',3507,'ishtiaq'),(1253,'test','2012-03-24 09:44:10',3520,'ishtiaq'),(1254,'test','2012-03-24 09:45:04',3520,'ishtiaq'),(1255,'test','2012-03-24 09:46:39',3520,'ishtiaq'),(1256,'test','2012-03-24 09:47:26',3520,'ishtiaq'),(1257,'test','2012-03-24 10:13:40',3502,'test2');
/*!40000 ALTER TABLE `tblcomplainthread` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcomplaintype`
--

DROP TABLE IF EXISTS `tblcomplaintype`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcomplaintype` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `complaintype` varchar(40) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcomplaintype`
--

LOCK TABLES `tblcomplaintype` WRITE;
/*!40000 ALTER TABLE `tblcomplaintype` DISABLE KEYS */;
INSERT INTO `tblcomplaintype` VALUES (1,'Gas - Gas leak'),(2,'Gas - Road brak'),(3,'Road - Foothpath'),(0,'None');
/*!40000 ALTER TABLE `tblcomplaintype` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcomplaintype2`
--

DROP TABLE IF EXISTS `tblcomplaintype2`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcomplaintype2` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `complaintype` varchar(40) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcomplaintype2`
--

LOCK TABLES `tblcomplaintype2` WRITE;
/*!40000 ALTER TABLE `tblcomplaintype2` DISABLE KEYS */;
INSERT INTO `tblcomplaintype2` VALUES (1,'build - Gas leak'),(2,'build - Road brak'),(3,'Road - Foothpath'),(0,'None');
/*!40000 ALTER TABLE `tblcomplaintype2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcomplaintype3`
--

DROP TABLE IF EXISTS `tblcomplaintype3`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcomplaintype3` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `complaintype` varchar(40) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcomplaintype3`
--

LOCK TABLES `tblcomplaintype3` WRITE;
/*!40000 ALTER TABLE `tblcomplaintype3` DISABLE KEYS */;
INSERT INTO `tblcomplaintype3` VALUES (1,'water - Gas leak'),(2,'water - Gas leak2'),(3,'water - Gas leak3'),(0,'None');
/*!40000 ALTER TABLE `tblcomplaintype3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcomplaintype4`
--

DROP TABLE IF EXISTS `tblcomplaintype4`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcomplaintype4` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `complaintype` varchar(40) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcomplaintype4`
--

LOCK TABLES `tblcomplaintype4` WRITE;
/*!40000 ALTER TABLE `tblcomplaintype4` DISABLE KEYS */;
INSERT INTO `tblcomplaintype4` VALUES (0,'None'),(1,'Decor1'),(3,'Decor2'),(4,'Decor3');
/*!40000 ALTER TABLE `tblcomplaintype4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcustomer`
--

DROP TABLE IF EXISTS `tblcustomer`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblcustomer` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `name` varchar(50) default NULL,
  `company` varchar(50) default NULL,
  `street1` varchar(50) default NULL,
  `street2` varchar(50) default NULL,
  `city` varchar(50) default NULL,
  `state` varchar(50) default NULL,
  `country` varchar(50) default NULL,
  `zip` varchar(12) default NULL,
  `phone` varchar(20) default NULL,
  `cell` varchar(60) default NULL,
  `fax` varchar(20) default NULL,
  `pwd` varchar(9) default NULL,
  `identification` varchar(30) default NULL,
  `email` varchar(40) default NULL,
  `accno` bigint(15) default '101',
  `dealerid` bigint(10) default NULL,
  `createdate` datetime default NULL,
  `title` varchar(5) default NULL,
  `mname` varchar(50) default NULL,
  `lname` varchar(50) default NULL,
  `adjustableamount` decimal(10,2) default '0.00',
  `sector` bigint(10) default NULL,
  `nstreet1` varchar(60) default NULL,
  `nstreet2` varchar(60) default NULL,
  `ncontact1` varchar(40) default NULL,
  `ncontact2` varchar(40) default NULL,
  `vanid` bigint(10) default NULL,
  `customercell` varchar(20) default NULL,
  `maturitylevel` bigint(4) default '0',
  `iscoperate` tinyint(2) default NULL,
  `nname1` varchar(50) default NULL,
  `nname2` varchar(50) default NULL,
  `emer1` varchar(20) default NULL,
  `emer2` varchar(20) default NULL,
  `emer3` varchar(20) default NULL,
  `isvanrequested` tinyint(1) default '0',
  `securityquestion` varchar(100) default NULL,
  `securityanswer` varchar(100) default NULL,
  PRIMARY KEY  (`id`),
  KEY `accno` (`accno`)
) ENGINE=MyISAM AUTO_INCREMENT=183 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblcustomer`
--

LOCK TABLES `tblcustomer` WRITE;
/*!40000 ALTER TABLE `tblcustomer` DISABLE KEYS */;
INSERT INTO `tblcustomer` VALUES (21,'Muhammad','USS','House no 11, sidat road','Islamabad','1','NA','PK','44000','03002683043','03002683043','','3001','','danishmoosa@gmail.com',3,1,'2007-11-08 15:50:44','Mr','Danish','Moosa','0.00',37,'House No. 97, St. 9, Sector E-11/4,NPF','House No. 96, St. 9, Sector E-11/4, NPF','03009509012','03467772777',0,NULL,0,0,'0','Armaghan sb',NULL,NULL,NULL,0,'What is your house number & street number pls tell us the code in combine form.',NULL),(182,'test','test','test','test','1','NA','PK','test','12121','121212','121212','1212','1212121','1212@asqas',4,1,'2008-09-12 22:25:20','Mr','test','test','0.00',0,'121212','121212','121212','121212',0,NULL,0,127,'1','121212','121212','121212','121212',0,NULL,NULL);
/*!40000 ALTER TABLE `tblcustomer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldocs`
--

DROP TABLE IF EXISTS `tbldocs`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tbldocs` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  `compid` bigint(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2671 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tbldocs`
--

LOCK TABLES `tbldocs` WRITE;
/*!40000 ALTER TABLE `tbldocs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbldocs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblemployees`
--

DROP TABLE IF EXISTS `tblemployees`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblemployees` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `anumber` varchar(20) default NULL,
  `name` varchar(20) default NULL,
  `designation` varchar(20) default NULL,
  `division` varchar(60) default NULL,
  `enable` int(1) default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblemployees`
--

LOCK TABLES `tblemployees` WRITE;
/*!40000 ALTER TABLE `tblemployees` DISABLE KEYS */;
INSERT INTO `tblemployees` VALUES (2,'100012','Sharbat Khan','Technician','bnr1',1),(3,'100013','Samandar Khan','Superman','bnr1',1),(4,'100014','Darya Khan','Plumber','bnr1',1),(5,'100015','Only Khan','batman','bnr1',1),(6,'89763','sohrab khan','Techy','bnr1',1),(7,'89764','john smith','Techy','fns1',1);
/*!40000 ALTER TABLE `tblemployees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblincomingcalls`
--

DROP TABLE IF EXISTS `tblincomingcalls`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblincomingcalls` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `callerid` varchar(20) default NULL,
  `callarrivaltime` datetime default NULL,
  `callpickendtime` datetime default NULL,
  `duration` bigint(5) default NULL,
  `status` int(2) default '0',
  `agentid` bigint(10) default NULL,
  `channel` varchar(100) default NULL,
  `callstatus` varchar(100) default NULL,
  `compaignid` bigint(10) default NULL,
  `mainmanu` int(2) default NULL,
  `complainmanu` int(2) default NULL,
  `filename` varchar(80) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7540 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblincomingcalls`
--

LOCK TABLES `tblincomingcalls` WRITE;
/*!40000 ALTER TABLE `tblincomingcalls` DISABLE KEYS */;
INSERT INTO `tblincomingcalls` VALUES (7533,'03452691080','2011-10-10 03:24:39','2011-10-10 03:33:31',0,1,1,'DAHDI/3-1','CHANUNAVAIL',0,1,1,'callfrom-03452691080-callto--at-2011-10-10-03-24-28'),(7534,'03452691080','2011-10-10 03:26:49','2011-10-10 03:33:31',0,1,1,'DAHDI/3-1','CHANUNAVAIL',0,1,1,'callfrom-03452691080-callto--at-2011-10-10-03-26-34'),(7535,'03452691080','2011-10-10 03:27:35','2011-10-10 03:33:31',0,1,1,'DAHDI/3-1','CHANUNAVAIL',0,1,1,'callfrom-03452691080-callto--at-2011-10-10-03-27-20'),(7536,'03452691080','2011-10-10 03:27:57','2011-10-10 03:33:31',0,1,1,'DAHDI/3-1','CHANUNAVAIL',0,1,1,'callfrom-03452691080-callto--at-2011-10-10-03-27-47'),(7537,'03452691080','2011-10-10 03:28:37','2011-10-10 03:33:31',0,1,1,'DAHDI/3-1','CHANUNAVAIL',0,1,1,'callfrom-03452691080-callto--at-2011-10-10-03-28-28'),(7538,'03452691080','2011-10-10 03:32:49','2011-10-10 03:33:31',0,1,1,'DAHDI/3-1','CHANUNAVAIL',0,1,1,'callfrom-03452691080-callto--at-2011-10-10-03-32-39'),(7539,'03452691080','2011-10-10 03:35:38',NULL,NULL,0,1,'DAHDI/3-1',NULL,0,1,1,'callfrom-03452691080-callto--at-2011-10-10-03-35-28');
/*!40000 ALTER TABLE `tblincomingcalls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblinquiry`
--

DROP TABLE IF EXISTS `tblinquiry`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblinquiry` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `callerid` varchar(25) default NULL,
  `callername` varchar(70) default NULL,
  `heading` varchar(80) default NULL,
  `message` blob,
  `addressee` varchar(20) default NULL,
  `type` int(2) default '1',
  `isresolved` int(1) default '0',
  `category` varchar(12) default '000000000',
  `address` varchar(50) default NULL,
  `cellno` varchar(15) default NULL,
  `city` varchar(10) default NULL,
  `homenum` varchar(15) default NULL,
  `officenum` varchar(15) default NULL,
  `dateofact` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblinquiry`
--

LOCK TABLES `tblinquiry` WRITE;
/*!40000 ALTER TABLE `tblinquiry` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblinquiry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblitems`
--

DROP TABLE IF EXISTS `tblitems`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblitems` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `itemdesc` varchar(40) default NULL,
  `dateofact` datetime default NULL,
  `qty` bigint(10) default NULL,
  `division` varchar(40) default NULL,
  `hold` int(4) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblitems`
--

LOCK TABLES `tblitems` WRITE;
/*!40000 ALTER TABLE `tblitems` DISABLE KEYS */;
INSERT INTO `tblitems` VALUES (1,'pen','2010-07-04 21:25:57',107,'bnr1',10),(2,'pencil','2010-07-04 21:26:52',-7,'bnr1',0),(3,'Fan Dimmer ','2010-07-06 12:39:13',87,NULL,10),(4,'capacitor ','2010-07-06 12:39:53',66,NULL,0),(5,'Tube starter','2010-07-06 12:40:18',76,NULL,0),(6,'Batten/Holder bakolite ','2010-07-06 12:41:15',120,NULL,0),(7,'C/S/Socket 5 amp','2010-07-06 12:42:06',44,NULL,0),(8,'Ding Dong ','2010-07-06 12:44:04',14,NULL,0),(9,'Call/Bell (buzzar)','2010-07-06 12:44:37',32,NULL,0),(10,'Chole 40W','2010-07-06 12:45:06',72,NULL,0),(11,'Choke 20W','2010-07-06 12:45:39',30,NULL,0),(12,'Bell/Push (C) ','2010-07-06 12:45:58',18,NULL,0),(13,'Bell/ Push (Open)','2010-07-06 12:46:14',40,NULL,0),(14,'Two Pin Socket ','2010-07-06 12:46:34',12,NULL,0),(15,'Tube rod 40W','2010-07-06 12:46:58',52,NULL,0),(16,'Tube rod 20W','2010-07-06 12:47:09',52,NULL,0),(17,'Patti Fittig 40W','2010-07-06 12:47:23',35,NULL,0),(18,'Patti Fitting 20W','2010-07-06 12:47:38',4,NULL,0),(19,'Celling/Rose','2010-07-06 12:48:10',17,NULL,0),(20,'MCCB 30A TP','2010-07-06 12:48:24',4,NULL,0),(21,'Cut out 15A','2010-07-06 12:48:37',14,NULL,0),(22,'Float valve 1\"','2010-07-06 12:49:08',5,NULL,0),(23,'Union 1-1/2\"','2010-07-06 12:49:25',20,NULL,0),(24,'Tee reducing 3/4\" x 1/2\"','2010-07-06 12:49:53',8,NULL,0),(25,'Tee 2\"','2010-07-06 12:50:03',4,NULL,0),(26,'Cross tee 1/2\"','2010-07-06 12:50:21',7,NULL,0),(27,'MCCB sp 10A to 20A','2010-07-06 12:53:27',39,NULL,0),(28,'Tee reducing 1\"/1/2\"','2010-07-06 12:55:27',2,NULL,0),(29,'Tee equal 1/2\"','2010-07-06 12:56:44',14,NULL,0),(30,'Elbow 1/2\"','2010-07-06 12:57:11',69,NULL,0),(31,'Union 1/2\"','2010-07-06 12:57:21',0,NULL,0),(32,'Barrel Nipple 1/2\"','2010-07-06 12:57:43',0,NULL,0),(33,'Socket 1/2\"','2010-07-06 12:58:10',0,NULL,0),(34,'Tee 3/4\"','2010-07-06 12:58:27',2,NULL,0),(35,'Elbow 3/4\"','2010-07-06 12:58:50',64,NULL,0),(36,'Union 3/4\"','2010-07-06 12:59:03',30,NULL,0),(37,'Socket 3/4\"','2010-07-06 12:59:16',9,NULL,0),(38,'Barrel Nipple 3/4\"','2010-07-06 12:59:39',0,NULL,0),(39,'Tee 1\"','2010-07-06 12:59:49',12,NULL,0),(40,'Elbow 1\"','2010-07-06 12:59:58',40,NULL,0),(41,'Union 1\"','2010-07-06 13:00:06',13,NULL,0),(42,'Socket 1\"','2010-07-06 13:00:16',14,NULL,0),(43,'Barrel Nipple 1\"','2010-07-06 13:00:30',14,NULL,0),(44,'Water Tap cp','2010-07-06 13:00:45',28,NULL,0),(45,'Water  Tap Brass','2010-07-06 13:01:15',0,NULL,0),(46,'Double bibcock cp','2010-07-06 13:01:33',21,NULL,0),(47,'Stop  cock cp','2010-07-06 13:01:51',0,NULL,0),(48,'Tee stop cock','2010-07-06 13:02:08',0,NULL,0),(49,'Shower ','2010-07-06 13:02:16',0,NULL,0),(50,'Cut Out 30A ','2010-07-06 13:02:33',0,NULL,0),(51,'Main switch sp 30A','2010-07-06 13:02:49',3,NULL,0),(52,'Insulation Tape ','2010-07-06 13:03:03',33,NULL,0),(53,'Bulb','2010-07-06 13:03:10',0,NULL,0),(54,'Union 1/2\"','2010-07-06 13:04:55',37,NULL,0),(55,'Union (1/2\")','2010-07-06 13:05:40',0,NULL,0),(56,'Aluminum door lock ','2010-07-06 13:16:09',20,NULL,0),(57,'Sink Mixture ','2010-07-06 13:16:34',50,NULL,0),(58,'Hook Hat & Coat ','2010-07-06 13:17:08',80,NULL,0),(59,'Bulbe Bird Neel','2010-07-06 13:17:34',78,NULL,0),(60,'Flush Bend','2010-07-06 13:18:07',241,NULL,0),(61,'P/Coonection ','2010-07-06 13:18:44',30,NULL,0),(62,'Door Handle','2010-07-06 13:19:12',138,NULL,0),(63,'Waste Coupling for Basin','2010-07-06 13:19:59',50,NULL,0),(64,'Tack cut bule','2010-07-06 13:20:37',4,NULL,0),(65,'Nail of Size','2010-07-06 13:21:21',11,NULL,0),(66,'Hings 3\"','2010-07-06 13:21:46',24,NULL,0),(67,'Hinges 5\"','2010-07-06 13:22:09',48,NULL,0),(68,'Bath lock ','2010-07-06 13:22:38',11,NULL,0),(69,'Almirash Knob','2010-07-06 13:23:20',192,NULL,0),(70,'Hasp & Staple ','2010-07-06 13:24:03',146,NULL,0),(71,'Alpha Lock','2010-07-06 13:24:33',108,NULL,0),(72,'Basin Bracket','2010-07-06 13:25:00',8,NULL,0),(73,'Sink Bracket','2010-07-06 13:25:28',110,NULL,0),(74,'Door spring ','2010-07-06 13:25:50',65,NULL,0),(75,'Door Lock ','2010-07-06 13:26:27',11,NULL,0),(76,'M/Door stopper ','2010-07-06 13:27:01',19,NULL,0),(77,'Double action hinges','2010-07-06 13:27:30',5,NULL,0),(78,'Color For Distemper ','2010-07-06 13:28:12',14,NULL,0),(79,'Kick Plate ','2010-07-06 13:28:43',177,NULL,0),(80,'Takari','2010-07-06 13:29:04',10,NULL,0),(81,'Glue ordinry ','2010-07-06 13:29:30',35,NULL,0),(82,'C/Rail Runner ','2010-07-06 13:30:08',14,NULL,0),(83,'Cover grating ','2010-07-06 13:30:33',486,NULL,0),(84,'P/Wire Gauze ','2010-07-06 13:31:16',17,NULL,0),(85,'Thinner ','2010-07-06 13:31:36',1,NULL,0),(86,'XPM','2010-07-06 13:31:49',2,NULL,0),(87,'XPM 2','2010-07-06 13:32:17',4,NULL,0),(88,'Mirror shelf','2010-07-06 13:32:55',260,NULL,0),(89,'Tower Rail Plastic ','2010-07-06 13:33:28',95,NULL,0),(90,'Flush fitting ','2010-07-06 13:33:51',53,NULL,0),(91,'Seat Cover ','2010-07-06 13:34:16',275,NULL,0),(92,'Koochi','2010-07-06 13:34:34',60,NULL,0),(93,'White Cement ','2010-07-06 13:34:56',1,NULL,0),(94,'Chalk Powder ','2010-07-06 13:35:29',6,NULL,0),(95,'Alum W/Gauze','2010-07-06 13:36:01',10,NULL,0),(96,'Tee Cl 2\"','2010-07-06 13:36:25',48,NULL,0),(97,'Weather Shield','2010-07-06 13:36:49',38,NULL,0),(98,'Wash Basin','2010-07-06 13:37:11',22,NULL,0),(99,'Bath Set ','2010-07-06 13:37:29',73,NULL,0),(100,'Soap dish','2010-07-06 13:37:53',152,NULL,0),(101,'Float Valve ','2010-07-06 13:38:23',273,NULL,0),(102,'W/Pipe PVC/ Flexible ','2010-07-06 13:39:31',60,NULL,0),(103,'T/Rail CP ','2010-07-06 13:39:54',36,NULL,0),(104,'F/Band PVC','2010-07-06 13:40:23',241,NULL,0),(105,'Paddlo','2010-07-06 13:40:45',5,NULL,0),(106,'Eye for Cl Pie 4\"','2010-07-06 13:41:27',39,NULL,0),(107,'Steel Nail','2010-07-06 13:42:26',39,NULL,0),(108,'Plaster of Paris','2010-07-06 13:43:01',4,NULL,0),(109,'Bolt Kit ','2010-07-06 13:43:25',40,NULL,0),(110,'Bend Cl 2\"','2010-07-06 13:44:04',14,NULL,0),(111,'Bend Cl 4\" ','2010-07-06 13:44:34',97,NULL,0),(112,'Bath Set ','2010-07-06 13:45:19',64,NULL,0),(113,'Flush Tank Plastic','2010-07-06 13:45:41',78,NULL,0),(114,'Waste Coupling for Sinks','2010-07-06 13:46:28',234,NULL,0),(115,'Brush Paint ','2010-07-06 13:46:52',7,NULL,0),(116,'M/shower ','2010-07-06 13:47:15',29,NULL,0),(117,'Pillar Tape CP ','2010-07-06 13:47:54',202,NULL,0),(118,'WC Asiatic ','2010-07-06 13:48:17',13,NULL,0),(119,'Wood ','2010-07-06 13:48:35',1,NULL,0),(120,'Lime','2010-07-06 13:49:00',250,NULL,0),(121,'Golay','2010-07-06 13:49:16',20,NULL,0),(122,'torches','2012-03-21 07:32:50',2,'bnr1',0),(123,'bottles','2012-03-21 08:38:01',0,'bnr1',0),(124,'laptop','2012-03-21 08:38:55',10,'enm1',0);
/*!40000 ALTER TABLE `tblitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblitemtrans`
--

DROP TABLE IF EXISTS `tblitemtrans`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblitemtrans` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `itemcode` bigint(10) default NULL,
  `dateofact` datetime default NULL,
  `action` varchar(10) default NULL,
  `user` varchar(20) default NULL,
  `remarks` varchar(150) default NULL,
  `complaincode` bigint(10) default NULL,
  `qty` bigint(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblitemtrans`
--

LOCK TABLES `tblitemtrans` WRITE;
/*!40000 ALTER TABLE `tblitemtrans` DISABLE KEYS */;
INSERT INTO `tblitemtrans` VALUES (1,1,'2010-07-04 21:26:09','IN','admin','picasso',0,2),(2,2,'2010-07-04 21:27:01','IN','admin','dollar',0,8),(3,1,'2010-07-04 21:38:52','OUT','ishtiaq','Added from agent panel',113,2),(4,2,'2010-07-04 21:53:52','OUT','ishtiaq','Added from agent panel',112,6),(5,2,'2010-07-04 21:56:37','OUT','ishtiaq','Added from agent panel',105,9),(6,1,'2010-07-04 22:13:54','OUT','ishtiaq','jgh',113,1),(7,1,'2010-07-04 22:39:28','OUT','ishtiaq','jgf',113,1),(8,3,'2010-07-06 12:39:34','IN','admin','',0,34),(9,4,'2010-07-06 12:39:59','IN','admin','',0,33),(10,5,'2010-07-06 12:40:28','IN','admin','',0,38),(11,6,'2010-07-06 12:41:40','IN','admin','',0,60),(12,7,'2010-07-06 12:42:41','IN','admin','',0,0),(13,7,'2010-07-06 12:43:51','IN','admin','',0,22),(14,1,'2010-07-06 12:44:11','IN','admin','',0,7),(15,8,'2010-07-06 12:44:16','IN','admin','',0,7),(16,9,'2010-07-06 12:44:44','IN','admin','',0,16),(17,10,'2010-07-06 12:45:12','IN','admin','',0,18),(18,10,'2010-07-06 12:45:18','IN','admin','',0,18),(19,10,'2010-07-06 12:45:24','IN','admin','',0,18),(20,11,'2010-07-06 12:45:45','IN','admin','',0,15),(21,3,'2010-07-06 12:50:32','IN','admin','',0,34),(22,4,'2010-07-06 12:50:38','IN','admin','',0,33),(23,5,'2010-07-06 12:50:47','IN','admin','',0,38),(24,6,'2010-07-06 12:50:54','IN','admin','',0,60),(25,7,'2010-07-06 12:51:01','IN','admin','',0,22),(26,8,'2010-07-06 12:51:11','IN','admin','',0,7),(27,9,'2010-07-06 12:51:17','IN','admin','',0,16),(28,10,'2010-07-06 12:51:26','IN','admin','',0,18),(29,11,'2010-07-06 12:51:32','IN','admin','',0,15),(30,12,'2010-07-06 12:51:40','IN','admin','',0,18),(31,13,'2010-07-06 12:51:48','IN','admin','',0,40),(32,14,'2010-07-06 12:51:57','IN','admin','',0,12),(33,15,'2010-07-06 12:52:06','IN','admin','',0,52),(34,16,'2010-07-06 12:52:13','IN','admin','',0,52),(35,17,'2010-07-06 12:52:23','IN','admin','',0,35),(36,18,'2010-07-06 12:52:31','IN','admin','',0,4),(37,19,'2010-07-06 12:52:43','IN','admin','',0,17),(38,27,'2010-07-06 12:53:40','IN','admin','',0,39),(39,20,'2010-07-06 12:53:50','IN','admin','',0,4),(40,21,'2010-07-06 12:54:00','IN','admin','',0,14),(41,22,'2010-07-06 12:54:12','IN','admin','',0,5),(42,23,'2010-07-06 12:54:20','IN','admin','',0,20),(43,24,'2010-07-06 12:54:33','IN','admin','',0,4),(44,24,'2010-07-06 12:54:58','IN','admin','',0,4),(45,28,'2010-07-06 12:55:35','IN','admin','',0,2),(46,25,'2010-07-06 12:55:47','IN','admin','',0,2),(47,25,'2010-07-06 12:56:02','IN','admin','',0,2),(48,26,'2010-07-06 12:56:07','IN','admin','',0,7),(49,29,'2010-07-06 13:03:42','IN','admin','',0,14),(50,30,'2010-07-06 13:03:53','IN','admin','',0,69),(51,54,'2010-07-06 13:07:06','IN','admin','',0,37),(52,43,'2010-07-06 13:07:17','IN','admin','',0,0),(53,33,'2010-07-06 13:07:30','IN','admin','',0,0),(54,34,'2010-07-06 13:07:55','IN','admin','',0,2),(55,35,'2010-07-06 13:08:20','IN','admin','',0,64),(56,36,'2010-07-06 13:08:35','IN','admin','',0,30),(57,37,'2010-07-06 13:08:49','IN','admin','',0,9),(58,38,'2010-07-06 13:09:11','IN','admin','',0,0),(59,39,'2010-07-06 13:09:38','IN','admin','',0,12),(60,40,'2010-07-06 13:09:56','IN','admin','',0,40),(61,41,'2010-07-06 13:10:16','IN','admin','',0,13),(62,42,'2010-07-06 13:10:33','IN','admin','',0,14),(63,43,'2010-07-06 13:10:48','IN','admin','',0,14),(64,44,'2010-07-06 13:11:03','IN','admin','',0,14),(65,44,'2010-07-06 13:11:22','IN','admin','',0,14),(66,45,'2010-07-06 13:11:35','IN','admin','',0,0),(67,46,'2010-07-06 13:11:54','IN','admin','',0,21),(68,47,'2010-07-06 13:12:19','IN','admin','',0,0),(69,48,'2010-07-06 13:12:33','IN','admin','',0,0),(70,49,'2010-07-06 13:12:52','IN','admin','',0,0),(71,50,'2010-07-06 13:13:06','IN','admin','',0,0),(72,51,'2010-07-06 13:13:19','IN','admin','',0,3),(73,52,'2010-07-06 13:13:30','IN','admin','',0,33),(74,53,'2010-07-06 13:13:40','IN','admin','',0,0),(75,53,'2010-07-06 13:13:56','IN','admin','',0,0),(76,56,'2010-07-06 13:16:18','IN','admin','',0,20),(77,57,'2010-07-06 13:16:45','IN','admin','',0,50),(78,58,'2010-07-06 13:17:17','IN','admin','',0,80),(79,59,'2010-07-06 13:17:46','IN','admin','',0,78),(80,60,'2010-07-06 13:18:20','IN','admin','',0,241),(81,61,'2010-07-06 13:18:54','IN','admin','',0,30),(82,62,'2010-07-06 13:19:26','IN','admin','',0,138),(83,63,'2010-07-06 13:20:08','IN','admin','',0,50),(84,64,'2010-07-06 13:21:05','IN','admin','',0,4),(85,65,'2010-07-06 13:21:33','IN','admin','',0,11),(86,66,'2010-07-06 13:21:57','IN','admin','',0,24),(87,67,'2010-07-06 13:22:29','IN','admin','',0,48),(88,68,'2010-07-06 13:22:52','IN','admin','',0,11),(89,69,'2010-07-06 13:23:33','IN','admin','',0,192),(90,70,'2010-07-06 13:24:10','IN','admin','',0,73),(91,70,'2010-07-06 13:24:21','IN','admin','',0,73),(92,71,'2010-07-06 13:24:43','IN','admin','',0,108),(93,72,'2010-07-06 13:25:16','IN','admin','',0,8),(94,73,'2010-07-06 13:25:40','IN','admin','',0,110),(95,74,'2010-07-06 13:26:03','IN','admin','',0,65),(96,75,'2010-07-06 13:26:36','IN','admin','',0,11),(97,76,'2010-07-06 13:27:10','IN','admin','',0,19),(98,77,'2010-07-06 13:27:45','IN','admin','',0,5),(99,78,'2010-07-06 13:28:29','IN','admin','',0,14),(100,79,'2010-07-06 13:28:54','IN','admin','',0,177),(101,80,'2010-07-06 13:29:15','IN','admin','',0,10),(102,81,'2010-07-06 13:29:39','IN','admin','',0,35),(103,82,'2010-07-06 13:30:17','IN','admin','',0,14),(104,83,'2010-07-06 13:30:53','IN','admin','',0,486),(105,84,'2010-07-06 13:31:26','IN','admin','',0,17),(106,85,'2010-07-06 13:31:43','IN','admin','',0,1),(107,86,'2010-07-06 13:32:02','IN','admin','',0,2),(108,87,'2010-07-06 13:32:26','IN','admin','',0,4),(109,88,'2010-07-06 13:33:04','IN','admin','',0,260),(110,89,'2010-07-06 13:33:38','IN','admin','',0,95),(111,90,'2010-07-06 13:34:01','IN','admin','',0,53),(112,91,'2010-07-06 13:34:26','IN','admin','',0,275),(113,92,'2010-07-06 13:34:42','IN','admin','',0,60),(114,93,'2010-07-06 13:35:10','IN','admin','',0,1),(115,94,'2010-07-06 13:35:35','IN','admin','',0,6),(116,95,'2010-07-06 13:36:11','IN','admin','',0,10),(117,96,'2010-07-06 13:36:34','IN','admin','',0,48),(118,97,'2010-07-06 13:36:59','IN','admin','',0,38),(119,98,'2010-07-06 13:37:19','IN','admin','',0,22),(120,99,'2010-07-06 13:37:38','IN','admin','',0,73),(121,100,'2010-07-06 13:38:01','IN','admin','',0,152),(122,101,'2010-07-06 13:38:32','IN','admin','',0,273),(123,102,'2010-07-06 13:39:39','IN','admin','',0,60),(124,103,'2010-07-06 13:40:04','IN','admin','',0,36),(125,104,'2010-07-06 13:40:33','IN','admin','',0,241),(126,105,'2010-07-06 13:40:53','IN','admin','',0,5),(127,106,'2010-07-06 13:42:06','IN','admin','',0,39),(128,107,'2010-07-06 13:42:36','IN','admin','',0,39),(129,108,'2010-07-06 13:43:12','IN','admin','',0,4),(130,109,'2010-07-06 13:43:41','IN','admin','',0,40),(131,110,'2010-07-06 13:44:13','IN','admin','',0,14),(132,111,'2010-07-06 13:44:43','IN','admin','',0,97),(133,112,'2010-07-06 13:45:28','IN','admin','',0,64),(134,113,'2010-07-06 13:45:48','IN','admin','',0,78),(135,114,'2010-07-06 13:46:39','IN','admin','',0,234),(136,115,'2010-07-06 13:47:00','IN','admin','',0,7),(137,116,'2010-07-06 13:47:23','IN','admin','',0,29),(138,117,'2010-07-06 13:48:02','IN','admin','',0,202),(139,118,'2010-07-06 13:48:25','IN','admin','',0,13),(140,119,'2010-07-06 13:48:52','IN','admin','',0,1),(141,120,'2010-07-06 13:49:08','IN','admin','',0,250),(142,121,'2010-07-06 13:49:22','IN','admin','',0,20),(143,122,'2012-03-21 07:33:18','IN','bnr1_1','new torches',0,2),(144,124,'2012-03-21 08:40:03','IN','admin','345',0,10),(145,1,'2012-03-24 09:46:39','OUT','ishtiaq','test',3520,6),(146,1,'2012-03-24 11:03:21','IN','admin','holding',0,4),(147,1,'2012-03-24 11:03:46','IN','admin','add',0,2),(148,3,'2012-03-24 11:14:46','IN','admin','test',0,19),(149,3,'2012-03-24 11:15:08','HOLD','admin','tests',0,10),(150,1,'2012-03-24 11:18:31','IN','admin','new',0,100),(151,1,'2012-03-24 11:19:03','HOLD','admin','hodling for admiral',0,10);
/*!40000 ALTER TABLE `tblitemtrans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblnewcomplainnum`
--

DROP TABLE IF EXISTS `tblnewcomplainnum`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblnewcomplainnum` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `compid` bigint(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblnewcomplainnum`
--

LOCK TABLES `tblnewcomplainnum` WRITE;
/*!40000 ALTER TABLE `tblnewcomplainnum` DISABLE KEYS */;
INSERT INTO `tblnewcomplainnum` VALUES (2,3532);
/*!40000 ALTER TABLE `tblnewcomplainnum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblphoneinfo`
--

DROP TABLE IF EXISTS `tblphoneinfo`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tblphoneinfo` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `iid` bigint(2) default NULL,
  `block` varchar(20) default NULL,
  `flat` varchar(20) default NULL,
  `pno` varchar(20) default NULL,
  `rank` varchar(20) default NULL,
  `name` varchar(100) default NULL,
  `phone` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=368 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tblphoneinfo`
--

LOCK TABLES `tblphoneinfo` WRITE;
/*!40000 ALTER TABLE `tblphoneinfo` DISABLE KEYS */;
INSERT INTO `tblphoneinfo` VALUES (1,1,'E-1','1','4637','Lt Cdr ','M. Abbas','50011'),(2,2,'E-1','2','5031','Lt Cdr ','Agha Murtaza','50012'),(3,3,'E-1','3','5658','Lt Cdr ','Rehmat Ullah','50013'),(4,4,'E-1','4','5822','Lt Cdr ','M. Ali','50014'),(5,5,'E-1','5','3903','Lt Cdr ','M. Farooq','50019'),(6,6,'E-1','6','4902','Lt Cdr ','M. Yasin','50016'),(7,7,'E-1','7','5771','Lt Cdr ','Jawad Hussain','50020'),(8,8,'E-1','8','4623','Cdr ','Hammad Ahmed','50018'),(9,9,'E-2','1','3562','Cdr ','Habib-ur-Rehman','50021'),(10,10,'E-2','2','5535','Lt Cdr ','Ramiz Niaz','50022'),(11,11,'E-2','3','4059','Cdr ','M. Hussain','50023'),(12,12,'E-2','4','3667','Lt Cdr ','Khalid Hameed','50024'),(13,13,'E-2','5','3127','Lt Cdr ','M. Imran','50025'),(14,14,'E-2','6','5482','Lt Cdr ','Imtiaz Ahmed','50026'),(15,15,'E-2','7','----','Lt Cdr ','Tariq','50027'),(16,16,'E-2','8','3848','Lt Cdr ','S.M Jamal','50028'),(17,17,'E-3','1','IA-191','Dy MPAD  ','Noor Ali Khan','50031'),(18,18,'E-3','2','3274','Cdr ','Salman','50032'),(19,19,'E-3','3','4100','Cdr ','M. Sadiq','50033'),(20,20,'E-3','4','4827','Lt Cdr ','Ishtiaq Ahmed','50034'),(21,21,'E-3','5','4076','Cdr ','Husain Zia','50035'),(22,22,'E-3','6','3056','Lt Cdr ','K. Kazzafi','50036'),(23,23,'E-3','7','5035','Lt Cdr ','Hamed Ahmed','50037'),(24,24,'E-3','8','5020','Lt Cdr ','S. Talat Hussain','50038'),(25,25,'E-4','1','3736','Lt Cdr ','M. Rehman','50041'),(26,26,'E-4','2','4634','Lt Cdr ','M. Imran','50042'),(27,27,'E-4','3','3156','Lt Cdr ','Ijaz Haq','50043'),(28,28,'E-4','4','4145','Lt Cdr ','Iftikhar Ali','50044'),(29,29,'E-4','5','4318','Lt Cdr ','Mola Madad','50045'),(30,30,'E-4','6','3782','Cdr ','Riaz Khan','50046'),(31,31,'E-4','7','5613','Lt Cdr ','M. Nawaz Mirza','50047'),(32,32,'E-4','8','','','','50048'),(33,33,'E-5','1','5110','Lt Cdr ','Jawed Haider','50049'),(34,34,'E-5','2','5180','Lt Cdr ',' Sajid Rahim','50050'),(35,35,'E-5','3','3972','Lt Cdr ','Azad Iqbal','50051'),(36,36,'E-5','4','4406','Cdr ','K.H. Khan','50052'),(37,37,'E-5','5','4375','Lt Cdr ','Aftab','50053'),(38,38,'E-5','6','4965','Lt Cdr ','Naeem Tari','50054'),(39,39,'E-5','7','3918','Lt Cdr ','Azad-ur-Rehman','50055'),(40,40,'E-5','8','5246','Lt Cdr ','Shafiq-ur-Rehman','50056'),(41,41,'E-6','1','4426','Lt Cdr ','M. Irfan','50057'),(42,42,'E-6','2','3703','Lt Cdr ','Mukhtar Ahmed','50058'),(43,43,'E-6','3','5537','Lt ','Naveed Ibrar','50059'),(44,44,'E-6','4','1145414','Surg Lt Cdr ','Rahela Nelofur','50060'),(45,45,'E-6','5','4934','Lt Cdr ','M. Asim Farooq','50061'),(46,46,'E-6','6','4642','Cdr ','S.H. Akhtar','50062'),(47,47,'E-6','7','4023','Lt Cdr ','Imtiaz Anwar','50063'),(48,48,'E-6','8','5179','Lt Cdr ','T. Zafar Latifi','50064'),(49,49,'E-7','1','3764','Cdr ','M. Tariq Janjua','50065'),(50,50,'E-7','2','3944','Cdr ','Shahid Ahmed','50066'),(51,51,'E-7','3','5662','Lt Cdr ','Ijaz Hussain','50067'),(52,52,'E-7','4','3852','Lt Cdr ','Abrar Ajmal','50068'),(53,53,'E-7','5','4196','Cdr ','Faisal Amin','50069'),(54,54,'E-7','6','6783','Lt','Shahbaz Ali','50070'),(55,55,'E-7','7','3961','Cdr ','M. Masood Alam','50071'),(56,55,'E-7','8','4821','Lt Cdr ','Shakir Hussain','50072'),(57,56,'E-8','1','5049','Lt Cdr ','Ghulam Akbar','50073'),(58,57,'E-8','2','5769','Lt Cdr ','Yasir Ahmed','50074'),(59,58,'E-8','3','4307','Cdr ','Waqar Muhammad','50075'),(60,59,'E-8','4','4055','Lt Cdr ','Ali Sajjad','50076'),(61,60,'E-8','5','4278','Cdr','M. Masood Ahmed','50077'),(62,61,'E-8','6','4622','Lt Cdr ','M.N. Anwar','50078'),(63,62,'E-8','7','5753','Lt Cdr ','Z.N. Baig','50079'),(64,63,'E-8','8','4802','Lt Cdr ','Asif Khan','50080'),(66,65,'E-9','2','4919','Lt Cdr ','Salman Khan','50082'),(67,66,'E-9','3','4182','Cdr','Azeem Sadiq','50083'),(68,67,'E-9','4','4926','Lt Cdr ','Asif Ali Pirzada','50084'),(69,68,'E-9','5','3793','Lt Cdr ','Nafees Ahmed','50085'),(70,69,'E-9','6','5037','Lt Cdr ','Salman Shah','50086'),(71,70,'E-9','7','103241','Surg Lt Cdr','S.S Mussawir','50087'),(72,71,'E-9','8','3445','Lt Cdr ','Qaisar Zaman','50088'),(73,72,'E-10','1','4329','Lt Cdr ','M. Hanif','50101'),(74,73,'E-10','2','4341','Lt Cdr','M. Shafiq','50102'),(75,74,'E-10','3','3702','Cdr','Asif Imran','50103'),(76,75,'E-10','4','5777','Lt Cdr','Ali Hassan','50104'),(77,76,'E-10','5','4098','Cdr','M. Imran Naveed','50105'),(78,77,'E-10','6','4152','Cdr','H. Waqas','50106'),(79,78,'E-10','7','','','vacant','50107'),(80,79,'E-10','8','','','vacant','50108'),(81,80,'E-11','1','3558','Lt Cdr ','M. Bilal','50109'),(82,81,'E-11','2','3368','Cad','M. Junaid Anwar','50110'),(83,82,'E-11','3','2736','','Khalid Javed','50111'),(84,83,'E-11','4','5678','Lt Cdr ','Muhammad Ali','50112'),(85,84,'E-11','5','3669','Lt Cdr ','Khalid Khurshid','50113'),(86,85,'E-11','6','4497','Lt Cdr ','Faisal Azeem','50114'),(87,86,'E-11','7','5474','Lt Cdr ','Aftab Ahmed Bijarani','50115'),(88,87,'E-11','8','5250','Lt Cdr ','Husnain Afzal ','50116'),(89,88,'E-12','1','5061','Lt Cdr ','A.Mubarik','50117'),(90,89,'E-12','2','3946','Cdr ','Fiaz Hussain','50118'),(91,90,'E-12','3','4425','Lt Cdr ','Moazzam Iftikhar','50119'),(92,91,'E-12','4','4515','Lt Cdr ','Rasheed Ahmed Khan','50120'),(93,92,'E-12','5','3481','Lt Cdr ','A Shuja Pasha','50121'),(94,93,'E-12','6','3812','Cdr ','Sajid Ali Khan','50122'),(95,94,'E-12','7','5717','Lt Cdr ','Syed Farooq Ali Shah','50123'),(96,95,'E-12','8','5419','Lt Cdr','Abdul Majeed','50124'),(97,96,'E-13','1','3753','Cdr','Alam Afzal','50125'),(98,97,'E-13','2','4355','Lt Cdr','Shifaat Ali','50126'),(99,98,'E-13','3','3524','Lt Cdr','Abdul Ghafoor','50127'),(100,99,'E-13','4','5214','Lt Cdr','Shahid Rafiq','50128'),(101,100,'E-13','5','3405','Lt Cdr','Sadullah','50129'),(102,101,'E-13','6','4788','Lt Cdr','Maqbool','50130'),(103,102,'E-13','7','4744','Lt Cdr','M. Yousuf','50131'),(104,103,'E-13','8','4974','Lt Cdr','Liaquat Khan','50132'),(105,104,'E-14','1','4261','Lt Cdr','Hamid Mehmood','50133'),(106,105,'E-14','2','4838','Lt Cdr','Abdul Rashid','50134'),(107,106,'E-14','3','4807','Lt Cdr','M. Rashid Alim','50135'),(108,107,'E-14','4','4496','Lt Cdr','Sageer Ahmed','50136'),(109,108,'E-14','5','3907','Lt Cdr',' Ozair Latif','50137'),(110,109,'E-14','6','4474','Cdr','F. Shabbir ','50138'),(111,110,'E-14','7','','','vacant','50139'),(112,111,'E-14','8','3873','Lt Cdr ','Asif Sajjad','50140'),(113,112,'E-15','1','5442','Lt Cdr','Muhammad Idrees','50141'),(114,113,'E-15','2','3144','Lt Cdr','Faiz Khan','50142'),(115,114,'E-15','3','5052','Lt Cdr','Amir Hanif','50143'),(116,115,'E-15','4','5220','Lt Cdr','Rashid Nazir','50144'),(117,116,'E-15','5','4153','Lt Cdr','S. Fahim Abbas','50145'),(118,117,'E-15','6','4342','Lt Cdr','Muhammad Hayat Khan','50146'),(119,118,'E-15','7','5193','Lt Cdr','A. Mohiu din','50147'),(120,119,'E-15','8','5223','Lt Cdr','M. Akram','50148'),(121,120,'E-16','1','5423','Lt Cdr','Saif Ur Rehman','50149'),(122,121,'E-16','2','5770','Lt Cdr','Z. U Rehman','50150'),(123,122,'E-16','3','4750','Lt Cdr',' M. Zarait','50151'),(124,123,'E-16','4','5767','Lt Cdr',' T. Mateen','50152'),(125,124,'E-16','5','4636','Lt Cdr','Mehmood Ali','50153'),(126,125,'E-16','6','4186','Lt Cdr','M. Sajjad','50154'),(127,126,'E-16','7','5158','Lt Cdr','M. Azhar Iqbal','50155'),(128,127,'E-16','8','5788','Lt Cdr','M. Siddique','50156'),(129,128,'E-17','1','3956','Lt Cdr','Amin ','50157'),(130,129,'E-17','2','4695','Lt Cdr','Armaghan Ahmed','50158'),(131,130,'E-17','3','4193','Cdr ','J. A Qureshi','50159'),(132,131,'E-17','4','3770','Cdr','M. Taufiq Ghauri','50160'),(133,132,'E-17','5','3477','Lt Cdr','Adil Shahzad','50161'),(134,133,'E-17','6','4147','Lt Cdr','Ammad Hassan','50162'),(135,134,'E-17','7','5149','Lt Cdr','Ahmed Majeed','50163'),(136,135,'E-17','8','4956','Lt Cdr','Shoaib Iqbal','50164'),(137,136,'E-18','1','4167','Lt Cdr','M. Haris','50165'),(138,137,'E-18','2','4961','Lt Cdr','Fahad Aziz','50166'),(139,138,'E-18','3','5190','Lt Cdr','Azeem Hussain','50167'),(140,139,'E-18','4','3948','Cdr','S.H. Abbas','50168'),(141,140,'E-18','5','4265','Lt Cdr','A. Ali Sabir','50169'),(142,141,'E-18','6','4168','Lt Cdr','Mehfooz','50170'),(143,142,'E-18','7','4896','Lt Cdr','Hassan Ansari','50171'),(144,143,'E-18','8','4704','Lt Cdr','M. Ikram','50172'),(145,144,'E-19','1','4288','Cdr','M.S Ghauri','50173'),(146,145,'E-19','2','4181','Lt Cdr','M. Saeed','50174'),(147,146,'E-19','3','102676','Surg Lt Cdr','Irfan Ullah','50175'),(148,147,'E-19','4','4702','Cdr','S.A Siddiqui','50176'),(149,148,'E-19','5','4184','Cdr ','Amir Rasool','50177'),(150,149,'E-19','6','3539','Lt Cdr','Fida Hussain','50178'),(151,150,'E-19','7','4276','Lt Cdr','Bashir Hussain','50179'),(152,151,'E-19','8','4881','Lt Cdr','A. Rehman','50180'),(153,152,'E-20','1','3167','Lt Cdr','Fazal Karim','50181'),(154,153,'E-20','2','4057','Cdr','M.F Abbasi','50182'),(155,154,'E-20','3','4285','Lt Cdr','Asif Riaz','50183'),(156,155,'E-20','4','5011','Lt Cdr ','Khalid Mehmood','50184'),(157,156,'E-20','5','4159','Lt Cdr','Muzzamil','50185'),(158,157,'E-20','6','','','','50186'),(159,158,'E-20','7','3644','Lt Cdr','Farooq Butt','50187'),(160,159,'E-20','8','5740','Lt Cdr','Sajjad Akbar','50188'),(161,160,'E-21','1','2969','Lt Cdr','Tahir Rasheed','50189'),(162,161,'E-21','2','5028','Lt Cdr','Tahir Manzoor','50190'),(163,162,'E-21','3','3349','Lt Cdr','S. Nadeem Asghar','50191'),(164,163,'E-21','4','4026','Cdr ','Z.H Saeed','50192'),(165,164,'E-21','5','4274','Cdr','I.U Haq','50193'),(166,165,'E-21','6','4240','Cdr','Zubair Ahmed','50194'),(167,166,'E-21','7','3178','Lt Cdr','M. Aslam','50195'),(168,167,'E-21','8','36789','Lt Cdr','Faisal Farooq','50196'),(169,168,'E-22','1','4492','Lt Cdr','Waqar Ahmed','50197'),(170,169,'E-22','2','4790','Lt Cdr','Imtiaz Rafique','50198'),(171,170,'E-22','3','3973','Cdr','Ahmed Farooq','50199'),(172,171,'E-22','4','3118','Lt Cdr ','R. A Khan','50200'),(173,172,'E-22','5','4647','Lt Cdr','Ijaz Ahmed','50201'),(174,173,'E-22','6','6212','Lt','Kaleem Khan','50202'),(175,174,'E-22','7','4501','Lt Cdr','Qaisar Shah','50203'),(176,175,'E-22','8','4302','Lt Cdr','Kamran Sharif','50204'),(177,176,'E-23','1','7062','Lt ','Rabia Khatoon','50205'),(178,177,'E-23','2','4969','Lt Cdr','Habib Tahir','50206'),(179,178,'E-23','3','4742','Lt Cdr','M. Rashid','50207'),(180,179,'E-23','4','4178','Lt Cdr','Rizwan Ali','50208'),(181,180,'E-23','5','4092','Cdr','Nadeem Raza','50209'),(182,181,'E-23','6','5005','Lt Cdr ','Imran Ishtiaq','50210'),(183,182,'E-23','7','01759','Lt Cdr',' Kausar Jamil','50211'),(184,183,'E-23','8','4938','Lt Cdr','S.M. Abbas Naqvi','50212'),(185,184,'E-24','1','3988','Cdr','Waseem Sherazi','50241'),(186,185,'E-24','2','4576','Lt Cdr',' Shafqat Ullah Baig','50242'),(187,186,'E-24','3','3416','Lt Cdr','S. Kashif Raza','50243'),(188,187,'E-24','4','3780','Lt Cdr','Tufail Akhtar','50244'),(189,188,'E-24','5','3177','Lt Cdr','M. Ilyas Jutt','50245'),(190,189,'E-24','6','4038','Cdr','Tariq Hussain','50246'),(191,190,'E-24','7','4708','Lt Cdr','Shafqat Ali','50247'),(192,191,'E-24','8','4832','Lt Cdr','Mehmoob Elahi','50248'),(193,192,'D-25','1','3860','Cdr','Zahid Khan','50249'),(194,193,'D-25','2','3537','Cdr','I.M. Shakir','50250'),(195,194,'D-25','3','2524','Cdr','Aitmad Ahmed','50251'),(196,195,'D-25','4','3364','Cdr','Muhammad Afzal','50252'),(197,196,'D-25','5','3930','Cdr','M. Shamim Akhtar','50253'),(198,197,'D-25','6','3534','Capt','M. Shakir','50254'),(199,198,'D-25','7','3311','Lt Cdr','M. Noman','50255'),(200,199,'D-25','8','4826','Lt Cdr','Abdul Gharfar','50256'),(201,200,'D-26','1','3765','Cdr','Ashir Haleem','50257'),(202,201,'D-26','2','3297','Cdr','Irfan Taj','50258'),(203,202,'D-26','3','3378','Cdr','Faisal Mir','50259'),(204,203,'D-26','4','2681','Cdr','M. Riaz-ud-din','50260'),(205,204,'D-26','5','4138','Cdr','Zahid Iqbal ','50261'),(206,205,'D-26','6','2686','Cdr','Sibte-Hassan','50262'),(207,206,'D-26','7','3271','Cdr','Khalid Hamid','50263'),(208,207,'D-26','8','5911','Lt Cdr','Saqlain','50264'),(209,208,'D-27','1','3515','Lt Cdr','Hayat','50265'),(210,209,'D-27','2','3394','Capt','Shoaid','50266'),(211,210,'D-27','3','3457','Capt','Zaka-ur-Rehman','50267'),(212,211,'D-27','4','3350','Lt Cdr','Aijaz','50268'),(213,212,'D-27','5','3486','Cdr','M. Arif','50269'),(214,213,'D-27','6','3666','Capt','Javed Iqbal','50270'),(215,214,'D-27','7','4495','Cdr','Kamran Hanif','50271'),(216,215,'D-27','8','5044','Lt Cdr','Farooq','50272'),(217,216,'D-28','1','3883','Lt Cdr ','Zahid Rauf','50273'),(218,217,'D-28','2','4694','Lt Cdr','M. Mazhar Hayat','50274'),(219,218,'D-28','3','2786','Cdr ','Jawed Rasool','50275'),(220,219,'D-28','4','2966','Capt','Asad Latifi','50276'),(221,220,'D-28','5','3563','Capt','Naveed Ashraf','50277'),(222,221,'D-28','6','','','vacant','50278'),(223,222,'D-28','7','3399','Cdr','Qamar Zaman','50279'),(224,223,'D-28','8','4804','Lt Cdr','M. Tahir','50280'),(225,224,'D-29','1','3543','Cdr','Khalid Munir','50281'),(226,225,'D-29','2','3382','Capt','S.R Abbas','50282'),(227,226,'D-29','3','3960','Cdr','Waseem Abbas','50283'),(228,227,'D-29','4','','','vacant','50284'),(229,228,'D-29','5','3943','Cdr','Tariq Mehmood','50285'),(230,229,'D-29','6','4211','Cdr','Maqbool Ahmed','50286'),(231,230,'D-29','7','4942','Lt Cdr','Shakil Haider','50287'),(232,231,'D-29','8','4169','Lt Cdr','Shafaat Ali Shah','50288'),(233,232,'D-30','1','3788','Cdr','Farooq Ali','50289'),(234,233,'D-30','2','2917','Cdr','Akbar Azam','50290'),(235,234,'D-30','3','3914','Cdr','Zahid Iqbal ','50291'),(236,235,'D-30','4','3074','Cdr','Nasir Ahmed','50292'),(237,236,'D-30','5','3472','Cdr','Amjad Ali Awan','50293'),(238,237,'D-30','6','3137','Capt','Ather Saleem','50294'),(239,238,'D-30','7','3957','Cdr','Waheed Sohail','50295'),(240,239,'D-30','8','3790','Cdr','Fargham Avais','50296'),(241,240,'C-31','1','','','vacant','50311'),(242,241,'C-31','2','3230','Capt','M. Kamal Akhtar','50312'),(243,242,'C-31','3','2634','Capt','Rashid Iqbal TI(M)','50313'),(244,243,'C-31','4','2573','Capt','Sajid Iqbal Hussain','50314'),(245,244,'C-31','5','3112','Capt','Sajid Mehmood','50315'),(246,245,'C-31','6','3268','Capt','M. Waris','50316'),(247,246,'C-32','1','2646','Capt','Raja Javed Afzal','50317'),(248,247,'C-32','2','3009','Capt','M. Javed','50318'),(249,248,'C-32','3','3174','Capt','Nusrat Ullah','50319'),(250,249,'C-32','4','2633','Cdre','Khalid Masood','50320'),(251,250,'C-32','5','2385','Cdr','Mansoor','50321'),(252,251,'C-32','6','2886','Cdre','Khalid Mehmood','50322'),(253,252,'C-33','1','1671','Cdre','Munir Wahid','50323'),(254,253,'C-33','2','2751','Capt','M. S Tahir','50324'),(255,254,'C-33','3','3088','Capt','A. Saeed','50325'),(256,255,'C-33','4','3077','Capt','M. Riaz','50326'),(257,256,'C-33','5','2765','Capt','Sajid Wazir','50327'),(258,257,'C-33','6','3366','Capt','Naimat Ullah','50328'),(259,258,'C-34','1','3401','Capt','Z. Shafique','50329'),(260,259,'C-34','2','2929','Capt','Naveed Ahmed','50330'),(261,260,'C-34','3','2639','Cdre','Sohail Abid','50331'),(262,261,'C-34','4','3064','Capt','Hameed Farooq','50332'),(263,262,'C-34','5','3213','Capt','F.R. Lodhi','50333'),(264,263,'C-34','6','3243','Capt','M. Arshad','50334'),(265,264,'C-35','1','','','vacant','50335'),(266,265,'C-35','2','3185','Capt','M. Mehmood','50336'),(267,266,'C-35','3','2939','Capt','Imran Ahmed','50337'),(268,267,'C-35','4','1999','Cdre','Sarfaraz Hussain','50338'),(269,268,'C-35','5','3179','Capt','Ilyas Ali ','50339'),(270,269,'C-35','6','3124','Capt','Noman Zafar','50340'),(271,270,'C-36','1','116191','Surg Capt','Mushtaq Ahmed','50341'),(272,271,'C-36','2','2773','Capt','Asad Karim','50342'),(273,272,'C-36','3','2937','Capt','Z. Iqbal','50343'),(274,273,'C-36','4','2466','Cdre','M. Afzal','50344'),(275,274,'C-36','5','2927','Capt','Muhammad Ishaque','50345'),(276,275,'C-36','6','3202','Capt','Ahmed Fauzan','50346'),(277,276,'MOQ 63','1','5154','Lt Cdr','Shahid Anwar','50501'),(278,277,'MOQ 63','2','103720','Surg Lt Cdr','Mubashir','50502'),(279,278,'MOQ 63','3','5697','Lt Cdr','Abdul Haleem','50503'),(280,279,'MOQ 63','4','5404','Lt Cdr','Muhammad Shakeel','50504'),(281,280,'MOQ 63','5','5615','Lt Cdr','Kareem Khan','50505'),(282,281,'MOQ 63','6','5142','Lt Cdr','Amir Shahzad','50506'),(283,282,'MOQ 63','7','5428','Lt Cdr','M. Iqbal','50507'),(284,283,'MOQ 63','8','5328','Lt','Yasir Ikram','50508'),(285,284,'MOQ 63','9','5124','Lt Cdr','Zeeshan Shahid','50509'),(286,285,'MOQ 63','10','5454','Lt','Moazzam','50510'),(287,286,'MOQ 63','11','5289','Lt Cdr','Riasat Khan','50511'),(288,287,'MOQ 63','12','3367','Lt Cdr','M. Azram','50512'),(289,288,'MOQ 63','13','5530','Lt Cdr','M. Asif Awan','50513'),(290,289,'MOQ 63','14','4739','Lt Cdr','Khalid Habib','50514'),(291,290,'MOQ 63','15','5373','Lt Cdr','Taimoor Saleh','50515'),(292,291,'MOQ 63','16','4946','Lt Cdr','S.S Rizvi','50516'),(293,292,'MOQ 63','17','5566','Lt Cdr','Waqar Azeem','50517'),(294,293,'MOQ 63','18','5438','Lt Cdr','Z. Khan','50518'),(295,294,'MOQ 63','19','6088','Lt','Waqas Shah Nawaz','50519'),(296,295,'MOQ 63','20','4897','Lt Cdr','Rizwan Tareef','50520'),(297,296,'MOQ 63','21','3487','Capt','M. Naveed Akhtar','50521'),(298,297,'MOQ 63','22','5145','Lt Cdr','Asim Sohail','50522'),(299,298,'MOQ 63','23','5587','','M. Iqbal','50523'),(300,299,'MOQ 63','24','7236','Surg Lt','Sajid Mehmood','50524'),(301,300,'MOQ 64','1','5707','Lt Cdr','Abdul Rehman','50401'),(302,301,'MOQ 64','2','5522','Lt Cdr ','M. Ashraf','50402'),(303,302,'MOQ 64','3','5727','Lt Cdr','Sami Waheed','50403'),(304,303,'MOQ 64','4','6377','S/Lt ','M. Iqbal','50404'),(305,304,'MOQ 64','5','6057','Lt','Alam Gul','50405'),(306,305,'MOQ 64','6','5797','Lt Cdr','M. Hayat','50406'),(307,306,'MOQ 64','7','4805','Lt Cdr','Qazafi Hameed','50407'),(308,307,'MOQ 64','8','4824','Lt Cdr','Azhar Hussain','50408'),(309,308,'MOQ 64','9','5401','Lt Cdr','Riffat Iqbal','50449'),(310,309,'MOQ 64','10','5235','Lt ','Zia-ul-Haq','50450'),(311,310,'MOQ 64','11','5541','Lt Cdr','Ali Ahmed Khan','50451'),(312,311,'MOQ 64','12','3652','Cdr',' Jawed Malik','50452'),(313,312,'MOQ 64','13','5600','Lt Cdr','M. Tariq','50453'),(314,313,'MOQ 64','14','5215','Lt Cdr','M. Ayub ','50454'),(315,314,'MOQ 64','15','4627','Lt Cdr','M. Jafer','50455'),(316,315,'MOQ 64','16','5361','Lt Cdr','Q. Amir Khan','50456'),(317,316,'MOQ 64','17','4416','Lt Cdr','H.A Qasim','50457'),(318,317,'MOQ 64','18','5716','Lt Cdr','Mehtab Khattak','50458'),(319,318,'MOQ 64','19','6781','S/Lt ','M. Sharif','50459'),(320,319,'MOQ 64','20','4800','Lt Cdr','M. Mursaleen','50460'),(321,320,'MOQ 64','21','4186','Lt Cdr','M. Sajjad','50461'),(322,321,'MOQ 64','22','5560','Lt Cdr','Waseem A Raja','50462'),(323,322,'MOQ 64','23','02195','Lt (AFSN)','Najma Khan','50463'),(324,323,'MOQ 64','24','6183','Lt',' Shahbaz Ahmed Saleem','50464'),(325,324,'MOQ 65','1','','','Centre MESS ','50801'),(326,325,'MOQ 65','2','','','Centre MESS ','50802'),(327,326,'MOQ 65','3','','','Centre MESS ','50803'),(328,327,'MOQ 65','4','3908','Capt','M. Foad Amin Baig','50804'),(329,328,'MOQ 65','5','4688','Lt Cdr','Abid Shahbaz','50805'),(330,329,'MOQ 65','6','4146','Cdr','Rashid Zafar','50806'),(331,330,'MOQ 65','7','2763','Cdr','Ajaz Ahmed','50807'),(332,331,'MOQ 65','8','4133','Lt Cdr','Kamran Ali Kayani','50808'),(333,332,'MOQ 65','9','5243','Lt','Fareed Amin','50809'),(334,333,'MOQ 65','10','4832','Lt Cdr','M. Iqbal','50810'),(335,334,'MOQ 65','11','5552','Lt Cdr','Masood Zafar','50811'),(336,335,'MOQ 65','12','5055','Lt',' Inayat Ullah Masood','50812'),(337,336,'MOQ 65','13','4774','Lt Cdr','M. Afzal','50813'),(338,337,'MOQ 65','14','5347','Lt',' Qamar Nawaz','50814'),(339,338,'MOQ 65','15','5560','Lt ',' Faisal Khan','50815'),(340,339,'MOQ 65','16','5116','Lt Cdr',' Ali Hamza','50816'),(341,340,'MOQ 66','1','3557','Capt',' Abdul Majid','50817'),(342,341,'MOQ 66','2','5612','Lt Cdr',' M. Ajmal Satti','50818'),(343,342,'MOQ 66','3','5304','Lt Cdr',' Shabir Hussain','50819'),(344,343,'MOQ 66','4','5784','Lt',' Hamid Haya','50820'),(345,344,'MOQ 66','5','5262','Lt','Attique Ahmed','50821'),(346,345,'MOQ 66','6','4359','Lt Cdr',' Farid Ahmed','50822'),(347,346,'MOQ 66','7','5893','Lt','Islam Gul','50823'),(348,347,'MOQ 66','8','5386','Lt Cdr',' Noman Akmal','50824'),(349,348,'MOQ 66','9','5080','Lt Cdr','M Ashraf','50825'),(350,349,'MOQ 66','10','5013','Lt Cdr','M.A. Javaid','50826'),(351,350,'MOQ 66','11','4340','Cdr','Cdr Shamim Ejaz','50827'),(352,351,'MOQ 66','12','','','vacant','50828'),(353,352,'MOQ 66','13','5881','Lt Cdr',' Masood Ahmed','50829'),(354,353,'MOQ 66','14','4542','Lt Cdr','S.A Khan','50830'),(355,354,'MOQ 66','15','4473','Lt Cdr','Asif Ali Naz','50831'),(356,355,'MOQ 66','16','5002','Lt Cdr','Kashif Saddique','50832'),(357,356,'C (Old)','1','2747','Capt','Azir Mumtaz','50371'),(358,357,'C (Old)','2','3567','Cdr','Tasawar S Kiani','50372'),(359,358,'C (Old)','3','2973','Capt',' Asghar Ali','50373'),(360,359,'C (Old)','4','2597','Capt',' M.A. Waraich','50374'),(361,360,'E (Old)','1','5721','Lt Cdr','M.I. Nasir','50381'),(362,361,'E (Old)','2','4841','Cdr','M. Ahmed Sheikh','50382'),(363,362,'E (Old)','3','3594','Cdr','Raza Rahim','50383'),(364,363,'E (Old)','4','3503','Cdr','Aamer','50384'),(365,364,'E (Old)','5','2814','Lt Cdr','Ghulam Safdar','50385');
/*!40000 ALTER TABLE `tblphoneinfo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbltimeshifts`
--

DROP TABLE IF EXISTS `tbltimeshifts`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `tbltimeshifts` (
  `id` bigint(10) unsigned NOT NULL auto_increment,
  `name` varchar(40) default NULL,
  `from` decimal(10,0) default NULL,
  `to` decimal(10,0) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `tbltimeshifts`
--

LOCK TABLES `tbltimeshifts` WRITE;
/*!40000 ALTER TABLE `tbltimeshifts` DISABLE KEYS */;
INSERT INTO `tbltimeshifts` VALUES (1,'morning','9','17'),(2,'evening','19','4');
/*!40000 ALTER TABLE `tbltimeshifts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-03-25 21:09:38
