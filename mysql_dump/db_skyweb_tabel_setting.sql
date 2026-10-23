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
-- Dumping data for table `tabel_setting`
--

LOCK TABLES `tabel_setting` WRITE;
/*!40000 ALTER TABLE `tabel_setting` DISABLE KEYS */;
INSERT INTO `tabel_setting` VALUES (760,1,'text01',15,15,'right','No','pabean'),(775,3,'text03',163,163,'left','Nomor Pengajuan','pabean'),(782,4,'text04',46,46,'left','No Daftar','pabean'),(786,5,'date01',65,65,'left','Tgl. Daftar','pabean'),(791,6,'text05',100,100,'left','Nomor BBK/BBM','pabean'),(797,7,'date02',65,65,'left','Tgl.BBK/BBM','pabean'),(804,8,'text06',200,200,'left','Customer / Supplier','pabean'),(812,9,'text07',50,50,'left','Kode Barang','pabean'),(821,10,'text08',250,250,'left','Nama Barang','pabean'),(831,11,'text09',30,30,'left','Satuan','pabean'),(842,12,'number01',50,50,'right','Jumlah','pabean'),(854,13,'text10',30,30,'left','Valas','pabean'),(867,14,'number02',80,80,'right','Nilai Barang','pabean'),(881,2,'text02',38,38,'center','Jenis','pabean');
/*!40000 ALTER TABLE `tabel_setting` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-10-23 16:40:03
