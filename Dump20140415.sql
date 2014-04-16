CREATE DATABASE  IF NOT EXISTS `auditoria` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `auditoria`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: auditoria
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_comercial` varchar(45) DEFAULT NULL,
  `razon_social` varchar(75) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `calle_numero` varchar(60) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL,
  `delegacion` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `codigo_postal` varchar(10) DEFAULT NULL,
  `id_tipo_empresa` int(2) DEFAULT NULL,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (1,'maalto','maalto',1212121212,'maalto','maalto','Iztapalapa','DF','090909',1,'2014-04-11 18:06:31','2014-04-11 18:06:31');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_empresa`
--

DROP TABLE IF EXISTS `tipos_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_empresa` (
  `id_tipo_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tipo_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_empresa`
--

LOCK TABLES `tipos_empresa` WRITE;
/*!40000 ALTER TABLE `tipos_empresa` DISABLE KEYS */;
INSERT INTO `tipos_empresa` VALUES (1,'cliente',NULL,'2014-04-11 18:03:44','2014-04-11 18:03:44'),(2,'proveedor',NULL,'2014-04-11 18:03:44','2014-04-11 18:03:44');
/*!40000 ALTER TABLE `tipos_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_usuario`
--

DROP TABLE IF EXISTS `tipos_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_usuario` (
  `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tipo_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_usuario`
--

LOCK TABLES `tipos_usuario` WRITE;
/*!40000 ALTER TABLE `tipos_usuario` DISABLE KEYS */;
INSERT INTO `tipos_usuario` VALUES (1,'administrador',NULL,'2014-04-11 18:00:16','2014-04-11 18:00:16'),(2,'gerente',NULL,'2014-04-11 18:02:22','2014-04-11 18:02:22'),(3,'auditor',NULL,'2014-04-11 18:02:22','2014-04-11 18:02:22'),(4,'cliente',NULL,'2014-04-11 18:02:22','2014-04-11 18:02:22'),(5,'proveedor',NULL,'2014-04-11 18:02:22','2014-04-11 18:02:22');
/*!40000 ALTER TABLE `tipos_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido_paterno` varchar(45) DEFAULT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `contrasenia` text,
  `id_tipo_usuario` int(2) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  `fecha_modificacion` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Eduardo','Martínez','Martínez','panda','f91a8ee646a277a2f1359709604b99c1b32d9f24',1,1,'2014-04-11 18:05:13','2014-04-11 18:05:13'),(2,'Erick','Lopez','Torres','erick','9d06d702b94085552421e06c8b16f2d3882b06e0',2,1,'2014-04-12 06:49:04','2014-04-12 06:49:04'),(3,'Jair','Alfaro','Campos','jair','04b9f5b033fa5cf1c2232476d9da2c03b1355ee2',3,1,'2014-04-12 06:49:04','2014-04-12 06:49:04'),(4,'Alfredo','Santos','Villa','alfredo','a527f45c4d359ddc0a14b8fd7ba6d4b9e5a271c5',4,1,'2014-04-12 06:49:04','2014-04-12 06:49:04'),(5,'Diego','Pardo','Oso','diego','8354336224c63279aadd00a9621757ef4fdf31fc',5,1,'2014-04-12 06:49:04','2014-04-12 06:49:04'),(17,'Raul','Romo','Administrador','raul','8b52b6b714585648fd300da0dbc0fa0678553280',1,1,'2014-04-14 22:03:26','2014-04-14 22:03:26'),(19,'fg','fg','fg','fg','72f77e84ba0149b2af1051f1318128dccf60ab60',3,1,'2014-04-14 22:24:37','2014-04-14 22:24:37');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios_empresa`
--

DROP TABLE IF EXISTS `usuarios_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios_empresa` (
  `id_usuario_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) DEFAULT NULL,
  `id_empresa` int(10) DEFAULT NULL,
  `fecha_alta` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios_empresa`
--

LOCK TABLES `usuarios_empresa` WRITE;
/*!40000 ALTER TABLE `usuarios_empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'auditoria'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-15  4:49:50
