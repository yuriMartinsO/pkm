-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: pmk
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `donors`
--

DROP TABLE IF EXISTS `donors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `address_id` bigint unsigned NOT NULL,
  `card_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born_at` timestamp NOT NULL,
  `donationInterval` tinyint NOT NULL,
  `donationValue` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `donors_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donors`
--

LOCK TABLES `donors` WRITE;
/*!40000 ALTER TABLE `donors` DISABLE KEYS */;
INSERT INTO `donors` VALUES (10,12,10,'dasd','yurimartins3705@gmail.com','212345','11','2022-12-31 03:00:00',2,-1.00,'2022-08-18 04:02:26','2022-08-18 04:02:26'),(12,14,12,'dasd','123@gmail.com','212345','11','2022-12-31 03:00:00',2,-1.00,'2022-08-18 04:03:05','2022-08-18 04:03:05'),(13,15,13,'dasd','1234@gmail.com','212345','11','2022-11-02 03:00:00',1,-1.00,'2022-08-18 04:03:46','2022-08-18 04:03:46'),(14,16,14,'dasd','123456@gmail.com','212345','11','2023-12-03 03:00:00',3,-1.00,'2022-08-18 04:31:57','2022-08-18 04:31:57'),(16,18,16,'dasd','1234775@gmail.com','212345','11','2022-12-31 03:00:00',2,-1.00,'2022-08-18 04:33:26','2022-08-18 04:33:26'),(17,19,17,'dasd','sssss05@gmail.com','212345','11','2021-12-02 03:00:00',2,-1.00,'2022-08-18 04:35:45','2022-08-18 04:35:45'),(18,20,18,'teste pra falha','123465@gmail.com','111.111.111-11','11-11111-1111','2020-01-10 03:00:00',2,15.44,'2022-08-18 05:12:34','2022-08-18 05:12:34'),(19,21,19,'dasd','yurisss05@gmail.com','444.444.444-44','41-11111-1111','2022-01-02 03:00:00',1,111.11,'2022-08-18 05:14:40','2022-08-18 05:14:40'),(20,22,20,'Yuri M','email@gmail.com','000.000.000-00','11-11111-1111','2022-10-10 03:00:00',1,12.00,'2022-08-18 05:39:02','2022-08-18 05:39:02');
/*!40000 ALTER TABLE `donors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-18  2:42:23
