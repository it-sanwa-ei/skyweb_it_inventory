-- MySQL dump 10.13  Distrib 8.0.46, for Win64 (x86_64)
--
-- Host: localhost    Database: db_skyweb
-- ------------------------------------------------------
-- Server version	8.0.46

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
-- Dumping data for table `tabel_bctype`
--

LOCK TABLES `tabel_bctype` WRITE;
/*!40000 ALTER TABLE `tabel_bctype` DISABLE KEYS */;
INSERT INTO `tabel_bctype` VALUES (1,'1',1,1,'BC23 Masuk dari Import'),(2,'1',1,1,'BC27 Masuk dari KB (Bahan Baku)'),(3,'1',1,1,'BC27 Masuk dari GB (Bahan Baku)'),(4,'1',1,1,'BC40 Masuk dari DPIL'),(7,'1',1,1,'BC27 Masuk dari KB (Barang Jadi)'),(8,'1',1,1,'BC40 Masuk dari DPIL (Barang Jadi)'),(9,'1',1,1,'BC27 Masuk dari KB (Tooling)'),(11,'1',1,1,'BC40 Masuk dari DPIL (Tooling)'),(15,'1',1,2,'BC27 Keluar ke KB (Barang Jadi)'),(16,'1',1,2,'BC25 Keluar ke DPIL'),(17,'1',1,2,'BC41 Keluar ke DPIL (Barang Jadi)'),(18,'1',1,2,'BC27 Keluar ke Subkon (Barang Jadi)'),(20,'1',1,2,'BC27 Keluar ke KB (Tooling)'),(22,'1',1,2,'BC41 Keluar ke DPIL (Tooling)'),(27,'1',1,2,'BC41 Keluar ke DPIL (Mold)'),(30,'1',1,1,'BC262 Masuk dari DPIL'),(33,'1',1,2,'BC261 Keluar ke DPIL (SP)'),(35,'1',1,2,'BC30 Keluar Export (Barang Jadi)');
/*!40000 ALTER TABLE `tabel_bctype` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-10-23 16:40:02
