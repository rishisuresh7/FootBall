-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: FOOTBALL
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `CLUB`
--

DROP TABLE IF EXISTS `CLUB`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CLUB` (
  `CLUB_ID` int(3) NOT NULL,
  `CLUB_NAME` varchar(20) DEFAULT NULL,
  `NATIONALITY` varchar(20) DEFAULT NULL,
  `LOGO` varchar(200) DEFAULT NULL,
  `MANAGER_ID` int(2) DEFAULT NULL,
  `GOALS_SCORED` int(3) DEFAULT NULL,
  `GOALS_CONCEDED` int(3) DEFAULT NULL,
  `WINS` int(3) DEFAULT NULL,
  `LOSES` int(3) DEFAULT NULL,
  `DRAWS` int(3) DEFAULT NULL,
  `POINTS` int(3) DEFAULT NULL,
  PRIMARY KEY (`CLUB_ID`),
  KEY `FK_mgrid` (`MANAGER_ID`),
  CONSTRAINT `FK_mgrid` FOREIGN KEY (`MANAGER_ID`) REFERENCES `MANAGER` (`MANAGER_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CLUB`
--

LOCK TABLES `CLUB` WRITE;
/*!40000 ALTER TABLE `CLUB` DISABLE KEYS */;
INSERT INTO `CLUB` VALUES (601,'Real Madrid','Spain','https://upload.wikimedia.org/wikipedia/en/thumb/5/56/Real_Madrid_CF.svg/1200px-Real_Madrid_CF.svg.png',10,8,4,5,1,3,45),(602,'Everton','England','http://www.evertonfc.com/content/history/d2qsy1h1438jt3.cloudfront.net///d2qsy1h1438jt3.cloudfront.net/~/media/6e7d10673424491d9439e6cc208f7882.jpg?la=en',16,9,3,6,2,3,54),(603,'FC Barcelona','Spain','https://pbs.twimg.com/profile_images/899584358041956353/LpYAYxjB.jpg',17,10,4,6,0,1,55);
/*!40000 ALTER TABLE `CLUB` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GOAL_RECORD`
--

DROP TABLE IF EXISTS `GOAL_RECORD`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GOAL_RECORD` (
  `TOTAL_GOALS` int(3) DEFAULT NULL,
  `TOTAL_ASSISTS` int(3) DEFAULT NULL,
  `RED_CARDS` int(2) DEFAULT NULL,
  `YELLOW_CARDS` int(2) DEFAULT NULL,
  `PLAYER_ID` int(4) NOT NULL,
  PRIMARY KEY (`PLAYER_ID`),
  CONSTRAINT `FK_pid` FOREIGN KEY (`PLAYER_ID`) REFERENCES `PLAYERS` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GOAL_RECORD`
--

LOCK TABLES `GOAL_RECORD` WRITE;
/*!40000 ALTER TABLE `GOAL_RECORD` DISABLE KEYS */;
INSERT INTO `GOAL_RECORD` VALUES (13,5,2,6,4001),(9,2,1,2,4002),(17,6,0,0,4003),(21,13,3,7,4004),(2,0,4,12,4005),(0,0,0,4,4006),(8,1,2,7,4007),(16,9,5,11,4008),(8,3,3,3,4009),(4,6,0,2,4010),(34,7,0,4,4011),(29,10,4,8,4012);
/*!40000 ALTER TABLE `GOAL_RECORD` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MANAGER`
--

DROP TABLE IF EXISTS `MANAGER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MANAGER` (
  `MANAGER_ID` int(2) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `NATIONALITY` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`MANAGER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MANAGER`
--

LOCK TABLES `MANAGER` WRITE;
/*!40000 ALTER TABLE `MANAGER` DISABLE KEYS */;
INSERT INTO `MANAGER` VALUES (10,'Zinedine Zidane','France'),(11,'Fernando Santos','Portugal'),(12,'jose mourinho','portugeese'),(13,'pep guardiola','spanish'),(14,'antonio conte','italian'),(15,'luis enrique','Spanish'),(16,'David Unsworth','England'),(17,'Ernesto Valverde','Spain'),(18,'Jorge Sampaoli','Argentina'),(19,'Albert Roca','Indian'),(20,'jjj','india'),(21,'tanishq','indian'),(88,'jija','indian'),(555,'hhh','india');
/*!40000 ALTER TABLE `MANAGER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PLAYERS`
--

DROP TABLE IF EXISTS `PLAYERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PLAYERS` (
  `ID` int(4) NOT NULL,
  `NAME` varchar(20) DEFAULT NULL,
  `JERSEY_NO` int(2) DEFAULT NULL,
  `NATIONALITY` varchar(20) DEFAULT NULL,
  `CLUB_ID` int(3) DEFAULT NULL,
  `TEAM_ID` int(4) DEFAULT NULL,
  `IMAGE` varchar(200) DEFAULT NULL,
  `POSITION` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_tid` (`TEAM_ID`),
  KEY `FK_cid` (`CLUB_ID`),
  CONSTRAINT `FK_cid` FOREIGN KEY (`CLUB_ID`) REFERENCES `CLUB` (`CLUB_ID`) ON DELETE CASCADE,
  CONSTRAINT `FK_tid` FOREIGN KEY (`TEAM_ID`) REFERENCES `TEAM` (`TEAM_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PLAYERS`
--

LOCK TABLES `PLAYERS` WRITE;
/*!40000 ALTER TABLE `PLAYERS` DISABLE KEYS */;
INSERT INTO `PLAYERS` VALUES (4001,'Cristiano Ronaldo',7,'Portugal',601,301,'http://sport360.com/wp-content/uploads/2016/12/cristiano-ronaldo-real-madrid-new-position-striker-football-comment-360view-andy-west-sport360.jpg','Central Midfielder'),(4002,'Zlatan IbrahimoviÄ‡',13,'Sweden',601,302,'https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p9808.png','Central Midfielder'),(4003,'Paul Pogba',14,'France',601,302,'https://upload.wikimedia.org/wikipedia/commons/a/af/Paul_Pogba_2017.jpg','Central Midfielder'),(4004,'Romelu Lukaku',12,'Belgium',601,302,'https://static.foba1.com/bilder/spieler/gross/142964.jpg','Striker'),(4005,'Nemanja MatiÄ‡',78,'Serbia',601,302,'https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p62398.png','Defensive Midfielder'),(4006,'David de Gea',26,'Spain',601,302,'https://upload.wikimedia.org/wikipedia/commons/6/61/David_de_Gea_at_the_UEFA_European_Under-21_Football_Championship_-_20110622.jpg','Goalkeeper'),(4007,'Marouane Fellaini',87,'Belgium',601,302,'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Fellaini_2017-03-09.jpg/220px-Fellaini_2017-03-09.jpg','Midfielder'),(4008,'Anthony Martial',67,'France',601,302,'https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p148225.png','Forward'),(4009,'Ander Herrera',69,'Spain',601,302,'https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p59846.png','Midfielder'),(4010,'Luke Shaw',45,'Britain',601,302,'http://www.manutd.com/sitecore/shell/~/media/0EF9E26A170A4BD2874E3095D9432C0B.ashx?w=240&h=311&rgn=0,106,2000,2700','Left Back'),(4011,'Wayne Rooney',10,'United Kingdom',602,302,'http://e0.365dm.com/17/03/16-9/20/skysports-wayne-rooney-rooney-united-rooney-man-utd_3908370.jpg?20170312203327','Forward'),(4012,'Lionel Messi',10,'Argentina',603,303,'https://www.thefamouspeople.com/profiles/images/lionel-messi-2.jpg','Forward');
/*!40000 ALTER TABLE `PLAYERS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TEAM`
--

DROP TABLE IF EXISTS `TEAM`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TEAM` (
  `TEAM_ID` int(4) NOT NULL,
  `TEAM_NAME` varchar(20) DEFAULT NULL,
  `NATIONALITY` varchar(20) DEFAULT NULL,
  `LOGO` varchar(200) DEFAULT NULL,
  `MANAGER_ID` int(2) DEFAULT NULL,
  `GOALS_SCORED` int(3) DEFAULT NULL,
  `GOALS_CONCEDED` int(3) DEFAULT NULL,
  `WINS` int(3) DEFAULT NULL,
  `LOSES` int(3) DEFAULT NULL,
  `DRAWS` int(3) DEFAULT NULL,
  `POINTS` int(3) DEFAULT NULL,
  PRIMARY KEY (`TEAM_ID`),
  KEY `FK_1` (`MANAGER_ID`),
  CONSTRAINT `FK_1` FOREIGN KEY (`MANAGER_ID`) REFERENCES `MANAGER` (`MANAGER_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TEAM`
--

LOCK TABLES `TEAM` WRITE;
/*!40000 ALTER TABLE `TEAM` DISABLE KEYS */;
INSERT INTO `TEAM` VALUES (301,'Portugal','Portugal','https://blenderartists.org/forum/attachment.php?attachmentid=439030&stc=1',11,7,3,4,1,0,23),(302,'Manchester United','Portugal','http://www.manutd.com/~/media/510AE241278B45FF97125DC1E1E32CBF.ashx',12,9,4,5,2,1,23),(303,'Argentina','Argentina','https://upload.wikimedia.org/wikipedia/en/thumb/1/1e/Asociaci%C3%B3n_del_F%C3%BAtbol_Argentino_%28crest%29.svg/785px-Asociaci%C3%B3n_del_F%C3%BAtbol_Argentino_%28crest%29.svg.png',18,6,1,5,0,1,45);
/*!40000 ALTER TABLE `TEAM` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','admin');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-17 16:27:20
