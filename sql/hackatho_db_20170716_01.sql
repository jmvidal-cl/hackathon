-- MySQL dump 10.13  Distrib 5.6.30, for Linux (x86_64)
--
-- Host: localhost    Database: hackatho_db
-- ------------------------------------------------------
-- Server version	5.6.30

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
-- Table structure for table `Activos_Bienes`
--

DROP TABLE IF EXISTS `Activos_Bienes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Activos_Bienes` (
  `Id_Activos_Bienes` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Cliente` int(11) NOT NULL,
  `Propiedades` varchar(100) NOT NULL,
  `Valor_propiedad` int(11) NOT NULL,
  `Vehiculos` varchar(100) NOT NULL,
  `Valor_vehiculo` int(11) NOT NULL,
  PRIMARY KEY (`Id_Activos_Bienes`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Activos_Bienes`
--

LOCK TABLES `Activos_Bienes` WRITE;
/*!40000 ALTER TABLE `Activos_Bienes` DISABLE KEYS */;
INSERT INTO `Activos_Bienes` VALUES (1,1,'1',1,'',0),(2,15,'1',1,'',0),(3,15,'1',1,'',0),(4,15,'1',1,'',0),(5,10,'1',1,'Hyundai Tucson',20000000),(6,10,'1',1,'a',50);
/*!40000 ALTER TABLE `Activos_Bienes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Antecedente_Conyuge`
--

DROP TABLE IF EXISTS `Antecedente_Conyuge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Antecedente_Conyuge` (
  `Id_Antecedente_Conyuge` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Cliente` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Sexo` varchar(1) NOT NULL,
  `Profesion` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_Antecedente_Conyuge`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Antecedente_Conyuge`
--

LOCK TABLES `Antecedente_Conyuge` WRITE;
/*!40000 ALTER TABLE `Antecedente_Conyuge` DISABLE KEYS */;
INSERT INTO `Antecedente_Conyuge` VALUES (1,1,'','M',''),(2,15,'','M',''),(3,15,'','M',''),(4,15,'','M',''),(5,10,'a','M','a'),(6,10,'a','M','a');
/*!40000 ALTER TABLE `Antecedente_Conyuge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Antecedentes_Adicionales`
--

DROP TABLE IF EXISTS `Antecedentes_Adicionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Antecedentes_Adicionales` (
  `Id_Antecedentes_Adicionales` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Cliente` int(11) NOT NULL,
  `Estado_Civil` varchar(50) NOT NULL,
  `Regimen_Matrimonial` varchar(50) NOT NULL,
  `Sucursal_Atencion` varchar(1000) NOT NULL,
  PRIMARY KEY (`Id_Antecedentes_Adicionales`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Antecedentes_Adicionales`
--

LOCK TABLES `Antecedentes_Adicionales` WRITE;
/*!40000 ALTER TABLE `Antecedentes_Adicionales` DISABLE KEYS */;
INSERT INTO `Antecedentes_Adicionales` VALUES (1,1,'soltero','','1'),(2,15,'soltero','','Isabel La CatÃ³lica - Av. Manquehue Sur NÂ° 1567, Las Condes'),(3,15,'soltero','','Isabel La CatÃ³lica - Av. Manquehue Sur NÂ° 1567, Las Condes'),(4,15,'soltero','','Isabel La CatÃ³lica - Av. Manquehue Sur NÂ° 1567, Las Condes'),(5,10,'soltero','','Isabel La CatÃ³lica - Av. Manquehue Sur NÂ° 1567, Las Condes'),(6,10,'soltero','','Isabel La CatÃ³lica - Av. Manquehue Sur NÂ° 1567, Las Condes');
/*!40000 ALTER TABLE `Antecedentes_Adicionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Antecedentes_Educacionales`
--

DROP TABLE IF EXISTS `Antecedentes_Educacionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Antecedentes_Educacionales` (
  `Id_Antecedentes_Educacionales` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Cliente` int(11) NOT NULL,
  `Nivel_Educacional` varchar(100) NOT NULL,
  `Universidad` varchar(60) NOT NULL,
  `Profesion` varchar(60) NOT NULL,
  PRIMARY KEY (`Id_Antecedentes_Educacionales`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Antecedentes_Educacionales`
--

LOCK TABLES `Antecedentes_Educacionales` WRITE;
/*!40000 ALTER TABLE `Antecedentes_Educacionales` DISABLE KEYS */;
INSERT INTO `Antecedentes_Educacionales` VALUES (1,1,'universitaria','udechile','ingeniero'),(2,15,'universitaria','udechile','ingeniero'),(3,15,'universitaria','udechile','ingeniero'),(4,15,'universitaria','udechile','ingeniero'),(5,10,'universitaria','udechile','ingeniero'),(6,10,'universitaria','udechile','ingeniero');
/*!40000 ALTER TABLE `Antecedentes_Educacionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Antecedentes_Laborales`
--

DROP TABLE IF EXISTS `Antecedentes_Laborales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Antecedentes_Laborales` (
  `Id_Antecedentes_Laborales` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Cliente` int(11) DEFAULT NULL,
  `Dependiente` varchar(40) NOT NULL,
  `Nombre_Empresa` varchar(250) NOT NULL,
  `Cargo` varchar(250) NOT NULL,
  `Contrato` varchar(250) NOT NULL,
  `Ingreso_liquido` varchar(250) NOT NULL,
  PRIMARY KEY (`Id_Antecedentes_Laborales`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Antecedentes_Laborales`
--

LOCK TABLES `Antecedentes_Laborales` WRITE;
/*!40000 ALTER TABLE `Antecedentes_Laborales` DISABLE KEYS */;
INSERT INTO `Antecedentes_Laborales` VALUES (1,1,'si','','','fijo','0'),(2,15,'si','','','fijo','0'),(3,15,'si','','','fijo','0'),(4,15,'si','','','fijo','0'),(5,10,'si','Mweb','Front-end','fijo','500000'),(6,10,'si','a','a','fijo','500000');
/*!40000 ALTER TABLE `Antecedentes_Laborales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cliente`
--

DROP TABLE IF EXISTS `Cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(11) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `comuna` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono_celular` varchar(15) NOT NULL,
  `telefoto_fijo` int(11) DEFAULT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `flag` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cliente`
--

LOCK TABLES `Cliente` WRITE;
/*!40000 ALTER TABLE `Cliente` DISABLE KEYS */;
INSERT INTO `Cliente` VALUES (1,'143404773','81dc9bdb52d04dc20036dbd8313ed055','Esteban','Gonzalez','Riveros','santa isabel 199',123,'Las Condes','Metropolitana','egon27@gmail.com','978079306',226196811,'2017-07-30','M','Chile',0);
/*!40000 ALTER TABLE `Cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `DT_documento_config`
--

DROP TABLE IF EXISTS `DT_documento_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `DT_documento_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proceso` varchar(10) DEFAULT NULL,
  `codigo_documento` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `DT_documento_config`
--

LOCK TABLES `DT_documento_config` WRITE;
/*!40000 ALTER TABLE `DT_documento_config` DISABLE KEYS */;
INSERT INTO `DT_documento_config` VALUES (1,'3.1','DOC_002'),(2,'3.2','DOC_001'),(3,'3.3','DOC_003'),(4,'3.4','DOC_004');
/*!40000 ALTER TABLE `DT_documento_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TB_archivo`
--

DROP TABLE IF EXISTS `TB_archivo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_archivo` (
  `Id_TB_archivo` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Cliente` int(11) NOT NULL,
  `codigo_documento` varchar(200) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  PRIMARY KEY (`Id_TB_archivo`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_archivo`
--

LOCK TABLES `TB_archivo` WRITE;
/*!40000 ALTER TABLE `TB_archivo` DISABLE KEYS */;
INSERT INTO `TB_archivo` VALUES (1,15,'DOC_001','32646394244-647918025-ticket.pdf','32646394244-647918025-ticket.pdf'),(2,15,'DOC_001','32646394244-647918025-ticket.pdf','32646394244-647918025-ticket.pdf'),(3,15,'DOC_001','32646394244-647918025-ticket.pdf','32646394244-647918025-ticket.pdf'),(4,15,'DOC_001','32646394244-647918025-ticket.pdf','32646394244-647918025-ticket.pdf'),(5,10,'DOC_001','pdf-sample(1).pdf','pdf-sample(1).pdf'),(6,10,'DOC_002','pdf-sample(1).pdf','pdf-sample(1).pdf'),(7,10,'DOC_003','pdf-sample(1).pdf','pdf-sample(1).pdf'),(8,10,'DOC_001','pdf-sample(1).pdf','pdf-sample(1).pdf'),(9,10,'DOC_002','pdf-sample(1).pdf','pdf-sample(1).pdf'),(10,10,'DOC_003','pdf-sample(1).pdf','pdf-sample(1).pdf');
/*!40000 ALTER TABLE `TB_archivo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TB_config`
--

DROP TABLE IF EXISTS `TB_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proceso` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `nombre_link` varchar(50) NOT NULL,
  `link_ref` varchar(200) NOT NULL,
  `codigo_mensaje` varchar(10) DEFAULT NULL,
  `id_sla` int(11) DEFAULT NULL,
  `pro_anterior` float NOT NULL,
  `pro_sig` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_proceso` (`id_proceso`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_config`
--

LOCK TABLES `TB_config` WRITE;
/*!40000 ALTER TABLE `TB_config` DISABLE KEYS */;
INSERT INTO `TB_config` VALUES (1,'1','Registro','Cliente se registra en la plataforma ','','','MSG_001',0,0,2.1),(2,'2.1','Antecedentes adicionales','Informacion adicional',' ',' ','MSG_002',2,1,2.2),(3,'2.2','Antecedentes educacionales','ica, media, universitaria',' ',' ','MSG_003',2,2.1,2.3),(4,'2.3','Antecedentes laborales','Informacion laboral',' ',' ','MSG_004',2,2.2,2.4),(5,'2.4','Antecedentes conyugales','Datos del conyuge',' ',' ','MSG_005',2,2.3,2.5),(6,'2.5','Activos','Acreditacion de activos',' ',' ','MSG_006',2,2.4,2.6),(7,'2.6','Cotizaciones previsionales','Informacion referente a AFP',' ',' ','MSG_007',2,2.5,2.7),(8,'2.7','Contrato de trabajo','Informacion laboral',' ',' ','MSG_008',2,2.6,2.8),(21,'3.1','Semaforo de riesgo','Semaforo de riesgo',' ',' ','MSG_009',2,2.8,4.1),(20,'5.1','Cierre de proceso',' ',' ',' ','MSG_010',0,4.6,0),(14,'4.1','Acerca de la propiedad','Acerca de la propiedad',' ',' ','MSG_011',2,3.1,4.2),(15,'4.2','Fotocopia de cedula de identidad','Fotocopia de cedula de identidad',' ',' ','MSG_012',2,4.1,4.3),(16,'2.8','Certificado de deuda SBIF','Certificado de deudas ',' ',' ','MSG_013',2,2.7,3.1),(17,'4.3','Inscripcion de dominio de propiedad','Documentacion personal',' ',' ','MSG_014',2,4.2,4.4),(22,'4.4','Escritura publica','Escritura publica',' ',' ','MSG_015',2,4.3,4.5),(23,'4.5','Estudio de titulo 10 años','Estudio de titulo 10 años',' ',' ','MSG_016',2,4.4,4.6),(24,'4.6','Certificado de no expropiacion serviu','Certificado de no expropiacion serviu',' ',' ','MSG_017',2,4.5,5.1);
/*!40000 ALTER TABLE `TB_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TB_documentos`
--

DROP TABLE IF EXISTS `TB_documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_documentos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `codigo_documento` varchar(10) DEFAULT NULL,
  `descripcion_documento` varchar(250) DEFAULT NULL,
  `responsable` varchar(45) DEFAULT NULL,
  `info_adicional` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_documentos`
--

LOCK TABLES `TB_documentos` WRITE;
/*!40000 ALTER TABLE `TB_documentos` DISABLE KEYS */;
INSERT INTO `TB_documentos` VALUES (1,'DOC_001','Contrato de trabajo','Cliente','Solicitara empleador'),(2,'DOC_002','Antecedentes previsionales','Cliente','Previred o consultar en su AFP'),(3,'DOC_003','Informe deuda','Cliente','Desde SBIF'),(4,'DOC_004','Fotocopia de cedula de identidad','Cliente',NULL),(5,'DOC_005','Inscripcion de dominio de propiedad','Cliente','Conservador de bienes raices'),(6,'DOC_006','Escritura publica','Ejecutivo banco','Archivo judicial'),(7,'DOC_007','Estudio de titulo 10 años','Abogado banco','Conservador de bienes raices'),(8,'DOC_008','Certificado de no expropiacion serviu','Cliente','Oficinas de SERVIU cercana');
/*!40000 ALTER TABLE `TB_documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TB_mensajes`
--

DROP TABLE IF EXISTS `TB_mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_mensaje` varchar(10) DEFAULT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_mensajes`
--

LOCK TABLES `TB_mensajes` WRITE;
/*!40000 ALTER TABLE `TB_mensajes` DISABLE KEYS */;
INSERT INTO `TB_mensajes` VALUES (1,'MSG_001','Bienvenido a la plataforma de hipotecaria BCI'),(2,'MSG_002','Se han completado los campos en Antecedentes adicionales'),(3,'MSG_003','Se han completado los campos en Antecedentes laborales'),(4,'MSG_004','Se han completado los campos en Antecedentes conyugales'),(5,'MSG_005','Se han completado los campos en Activos'),(6,'MSG_006','Se han completado los campos en Cotizaciones previsionales'),(7,'MSG_007','Se han completado Contrato de trabajo'),(8,'MSG_008','Se han completado Certificado de deuda SBIF'),(9,'MSG_009','Su evaluación de Riesgo fue aprobada'),(10,'MSG_010','Se ha completado el proceso de su crédito hipotecario'),(11,'MSG_011','Se ha completado Acerca de la propiedad'),(12,'MSG_012','Se ha completado Fotocopia de cedula de identidad'),(13,'MSG_013','Se ha completado Certificado de deuda SBIF'),(14,'MSG_014','Se ha completado la Inscripcion de dominio de propiedad'),(15,'MSG_015','Se ha completado la Escritura publica'),(16,'MSG_015','Se ha completado el Estudio de titulo 10 años'),(17,'MSG_015','Se ha completado el Certificado de no expropiacion serviu');
/*!40000 ALTER TABLE `TB_mensajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TB_workflow`
--

DROP TABLE IF EXISTS `TB_workflow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_workflow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(15) NOT NULL,
  `id_proceso` float NOT NULL,
  `fecha_proceso` datetime NOT NULL,
  `sla_estado` int(11) NOT NULL,
  `id_archivo` int(11) NOT NULL,
  `flag_msg_actual` int(11) NOT NULL,
  `flag_pro_sig` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_workflow`
--

LOCK TABLES `TB_workflow` WRITE;
/*!40000 ALTER TABLE `TB_workflow` DISABLE KEYS */;
/*!40000 ALTER TABLE `TB_workflow` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-16  7:53:09
