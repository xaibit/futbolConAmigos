CREATE DATABASE  IF NOT EXISTS `futbolconamigos` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `futbolconamigos`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: futbolconamigos
-- ------------------------------------------------------
-- Server version	5.5.25a

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
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group` (
  `idGroup` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `userAdmin` int(11) DEFAULT NULL,
  PRIMARY KEY (`idGroup`),
  KEY `userFK_idx` (`userAdmin`),
  KEY `groupUserFK_idx` (`userAdmin`),
  CONSTRAINT `userAdminFK` FOREIGN KEY (`userAdmin`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='es el grupo o  torneo';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group`
--

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `match`
--

DROP TABLE IF EXISTS `match`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `match` (
  `idMatch` int(11) NOT NULL AUTO_INCREMENT,
  `localTeam` int(11) DEFAULT NULL,
  `visitantTeam` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `afaDate` int(11) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `localGoals` int(11) DEFAULT NULL COMMENT 'golas metidos',
  `visitantGoals` int(11) DEFAULT NULL COMMENT 'golas metidos',
  PRIMARY KEY (`idMatch`),
  KEY `localTeamFK` (`localTeam`),
  KEY `visitantTeamFK_idx` (`visitantTeam`),
  CONSTRAINT `localTeamFK` FOREIGN KEY (`localTeam`) REFERENCES `team` (`idTeam`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `visitantTeamFK` FOREIGN KEY (`visitantTeam`) REFERENCES `team` (`idTeam`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='partido';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `match`
--

LOCK TABLES `match` WRITE;
/*!40000 ALTER TABLE `match` DISABLE KEYS */;
/*!40000 ALTER TABLE `match` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player` (
  `idPlayer` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `price` decimal(15,0) DEFAULT NULL,
  `team` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPlayer`),
  KEY `teamFK` (`team`),
  CONSTRAINT `teamFK` FOREIGN KEY (`team`) REFERENCES `team` (`idTeam`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='jugador';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prediction`
--

DROP TABLE IF EXISTS `prediction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prediction` (
  `idPrediction` int(11) NOT NULL AUTO_INCREMENT,
  `localGoals` int(11) DEFAULT NULL,
  `visitantGoals` int(11) DEFAULT NULL,
  `score` decimal(15,0) DEFAULT NULL,
  `question1` int(11) DEFAULT NULL,
  `answer1` varchar(100) DEFAULT NULL,
  `question2` int(11) DEFAULT NULL,
  `answer2` varchar(100) DEFAULT NULL,
  `question3` int(11) DEFAULT NULL,
  `answer3` varchar(100) DEFAULT NULL,
  `question4` int(11) DEFAULT NULL,
  `answer4` varchar(100) DEFAULT NULL,
  `question5` int(11) DEFAULT NULL,
  `answer5` varchar(100) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `match` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPrediction`),
  KEY `userFK_idx` (`match`),
  KEY `user_FK_idx` (`user`),
  KEY `question1FK_idx` (`question1`),
  KEY `question2FK_idx` (`question2`),
  KEY `question3FK_idx` (`question3`),
  KEY `question4FK_idx` (`question4`),
  KEY `question5FK_idx` (`question5`),
  CONSTRAINT `matchFK` FOREIGN KEY (`match`) REFERENCES `match` (`idMatch`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `predictionUserFK` FOREIGN KEY (`user`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `question2FK` FOREIGN KEY (`question2`) REFERENCES `question` (`idQuestion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `question3FK` FOREIGN KEY (`question3`) REFERENCES `question` (`idQuestion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `question4FK` FOREIGN KEY (`question4`) REFERENCES `question` (`idQuestion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `question5FK` FOREIGN KEY (`question5`) REFERENCES `question` (`idQuestion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `question1FK` FOREIGN KEY (`question1`) REFERENCES `question` (`idQuestion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='predicción de un usuario para un partido';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prediction`
--

LOCK TABLES `prediction` WRITE;
/*!40000 ALTER TABLE `prediction` DISABLE KEYS */;
/*!40000 ALTER TABLE `prediction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question` (
  `idQuestion` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(400) DEFAULT NULL,
  `answerOK` varchar(100) DEFAULT NULL,
  `answerWrong1` varchar(100) DEFAULT NULL,
  `answerWrong2` varchar(100) DEFAULT NULL,
  `answerWrong3` varchar(100) DEFAULT NULL,
  `answerWrong4` varchar(100) DEFAULT NULL,
  `answerWrong5` varchar(100) DEFAULT NULL,
  `score` decimal(5,0) DEFAULT NULL,
  `bonus` int(11) DEFAULT NULL COMMENT 'indica si la pregunta es bonus o no',
  PRIMARY KEY (`idQuestion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='preguntas generales';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question`
--

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;
/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questionmatch`
--

DROP TABLE IF EXISTS `questionmatch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questionmatch` (
  `idQuestionMatch` int(11) NOT NULL AUTO_INCREMENT,
  `question` int(11) DEFAULT NULL,
  `match` int(11) DEFAULT NULL,
  PRIMARY KEY (`idQuestionMatch`),
  KEY `questionFK_idx` (`question`),
  KEY `match_idx` (`match`),
  CONSTRAINT `questionFK` FOREIGN KEY (`question`) REFERENCES `question` (`idQuestion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `match` FOREIGN KEY (`match`) REFERENCES `match` (`idMatch`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='pregunta asignada a un partido';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questionmatch`
--

LOCK TABLES `questionmatch` WRITE;
/*!40000 ALTER TABLE `questionmatch` DISABLE KEYS */;
/*!40000 ALTER TABLE `questionmatch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `idTeam` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idTeam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='equipo: independiente, boca, river';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `male` char(1) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='usuarios del sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usergroup`
--

DROP TABLE IF EXISTS `usergroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usergroup` (
  `idUserGroup` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  `score` decimal(15,0) DEFAULT NULL,
  PRIMARY KEY (`idUserGroup`),
  KEY `groupFK_idx` (`group`),
  KEY `userGroupFK_idx` (`user`),
  CONSTRAINT `userGroupFK` FOREIGN KEY (`user`) REFERENCES `user` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `groupFK` FOREIGN KEY (`group`) REFERENCES `group` (`idGroup`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='es la NN estre grupo y usuario';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usergroup`
--

LOCK TABLES `usergroup` WRITE;
/*!40000 ALTER TABLE `usergroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `usergroup` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-15 16:47:19
