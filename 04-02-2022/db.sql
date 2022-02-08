-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: aula_php_login
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carro`
--

DROP TABLE IF EXISTS `carro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carro` (
  `id_carro` int NOT NULL AUTO_INCREMENT,
  `modelo` varchar(30) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_carro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carro`
--

LOCK TABLES `carro` WRITE;
/*!40000 ALTER TABLE `carro` DISABLE KEYS */;
INSERT INTO `carro` VALUES (1,'Fusca','Volkswagen'),(2,'Corolla','Toyota'),(3,'Uno','Fiat');
/*!40000 ALTER TABLE `carro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carro_user`
--

DROP TABLE IF EXISTS `carro_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carro_user` (
  `id_user_info` int NOT NULL,
  `id_carro_user` int NOT NULL AUTO_INCREMENT,
  `id_carro` int DEFAULT NULL,
  PRIMARY KEY (`id_carro_user`),
  KEY `id_user_info` (`id_user_info`),
  KEY `id_carro` (`id_carro`),
  CONSTRAINT `carro_user_ibfk_1` FOREIGN KEY (`id_user_info`) REFERENCES `user_info` (`id_user_info`),
  CONSTRAINT `carro_user_ibfk_2` FOREIGN KEY (`id_carro`) REFERENCES `carro` (`id_carro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carro_user`
--

LOCK TABLES `carro_user` WRITE;
/*!40000 ALTER TABLE `carro_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `carro_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `esporte`
--

DROP TABLE IF EXISTS `esporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `esporte` (
  `modalidade` varchar(30) NOT NULL,
  PRIMARY KEY (`modalidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `esporte`
--

LOCK TABLES `esporte` WRITE;
/*!40000 ALTER TABLE `esporte` DISABLE KEYS */;
INSERT INTO `esporte` VALUES ('Basquete'),('Futebol'),('Futsal'),('Natação'),('Volei');
/*!40000 ALTER TABLE `esporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hobby`
--

DROP TABLE IF EXISTS `hobby`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hobby` (
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hobby`
--

LOCK TABLES `hobby` WRITE;
/*!40000 ALTER TABLE `hobby` DISABLE KEYS */;
INSERT INTO `hobby` VALUES ('Fotografia'),('Leitura'),('Pintura'),('Videogames');
/*!40000 ALTER TABLE `hobby` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hobby_user`
--

DROP TABLE IF EXISTS `hobby_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hobby_user` (
  `id_user_info` int NOT NULL,
  `id_hobby_user` int NOT NULL,
  `hobby` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_hobby_user`),
  KEY `id_user_info` (`id_user_info`),
  KEY `hobby` (`hobby`),
  CONSTRAINT `hobby_user_ibfk_1` FOREIGN KEY (`id_user_info`) REFERENCES `user_info` (`id_user_info`),
  CONSTRAINT `hobby_user_ibfk_2` FOREIGN KEY (`hobby`) REFERENCES `hobby` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hobby_user`
--

LOCK TABLES `hobby_user` WRITE;
/*!40000 ALTER TABLE `hobby_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `hobby_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('David','1234'),('Dyogo','1234'),('Dyogo1','1234123'),('Dyogo1111111111','1234'),('Dyogo123','1234'),('Dyogo123123','1234'),('Dyogo123123123','1234');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_info` (
  `id_user_info` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(50) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` varchar(20) DEFAULT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `rua` varchar(30) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL,
  `esporte` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_user_info`),
  KEY `username` (`username`),
  KEY `esporte` (`esporte`),
  CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  CONSTRAINT `user_info_ibfk_2` FOREIGN KEY (`esporte`) REFERENCES `esporte` (`modalidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-07 22:56:42
